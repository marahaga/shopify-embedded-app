<?php

use Illuminate\Http\Request;
use Shopify\Utils;
use App\Lib\AuthRedirection;
use Shopify\Auth\OAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Shopify'], function () {
    
    // ExitIframe
    Route::get('/ExitIframe', 'AuthController@exitIframe')->name('shopify.exitiframe');
    Route::get('/auth', 'AuthController@index')->middleware('shopify.installed');
    Route::get('/api/auth/callback', 'AuthController@callback')->name('shopify.auth.callback');

    Route::get('/api/auth', function (Request $request) {
        $shop = Utils::sanitizeShopDomain($request->query('shop'));
    
        // Delete any previously created OAuth sessions that were not completed (don't have an access token)
        //Session::where('shop', $shop)->where('access_token', null)->delete();
    
        return AuthRedirection::redirect($request);
    })->name('install-link');


    Route::group(['middleware' => ['shopify', 'shopify.localize', 'shopify.auth', 'shopify.shop']], function () {
        Route::get('/latest-news', 'AppController@latestNews')->name('shopify.latest-news');

        Route::get('/settings/shipping', 'SettingsController@shipping')->name('shopify.settings.shipping-link');
        Route::get('/settings/sender', 'SettingsController@sender')->name('shopify.settings.sender-link');
        Route::get('/settings/api', 'SettingsController@api')->name('shopify.settings.api-link');
        Route::get('/settings/generic', 'SettingsController@generic')->name('shopify.settings.generic-link');
        Route::get('/settings/pickuppoints', 'SettingsController@pickuppoints')->name('shopify.settings.pickuppoints-link');
        

        // TODO: needs to be split into separate jobs
        // Print labels and fullfill
        Route::get('/print-labels-fulfill', 'AppController@printLabelsFulfill')->name('shopify.print-labels-fulfill');
        Route::get('/print-labels', 'AppController@printLabels')->name('shopify.print-labels');
        Route::get('/return-label', 'AppController@returnLabel')->name('shopify.return-label');
        Route::get('/custom-shipment', 'AppController@customShipment')->name('shopify.custom-shipment');
        Route::get('/list-shipments', 'AppController@listShipments')->name('shopify.list-shipment');

        Route::get('/get-label/{order_id}/{tracking_code?}', 'AppController@getLabel')->name('shopify.label');
        Route::post('/get-labels', 'AppController@getLabels')->name('shopify.get_labels');

        Route::get('/track-shipment', 'AppController@trackShipment')->name('shopify.track-shipment');

    });
});
