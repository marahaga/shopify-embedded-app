<?php

return [
    'shipping_method' => [
        'choose_sending_method' => 'Valitse lähetystapa',
    ],
    'error' => [
        'error_page' => 'Tapahtui virhe',
    ],
    'print_labels' => [
        'print_label' => 'Tulosta Osoitetarra',
        'fetch_all' => 'Tulosta kaikki osoitetarrat',
        'print_label_fulfill' => 'Tulosta osoitetarra & Fulfill',
        'return_label' => 'Tulosta palautustarra',
        'description' => 'Lista luoduista lähetyksistä',
        'order_id' => 'Tilaus nro',
        'date' => 'Pvm',
        'time' => 'aika',
        'service' => 'Palvelu',
        'fulfilled_products' => 'Toimitetut tuotteet',
        'tracking_code' => 'Seurantakoodi',
        'status' => 'Tila',
        'get_the_label' => 'Hae osoitetarra',
        'get_label_link' => 'Linkki',
        'back_to_orders' => 'Takaisin tilauksiin',
        'statuses' => [
            'created' => 'Lähetys on luotu',
            'sent' => 'Lähetys on jo luotu tilaukselle',
            'need_shipping_address' => 'Epäonnistui koska toimitusosoite puuttui',
            'no_shipping_service' => 'Ei toimitustapaa valittuna',
            'not_in_inventory' => 'Tuotetta ei varastossa',
            'product_deleted' => 'Tuotetta ei löydy, täytä manuaalisesti',
            'nothing_to_ship' => 'Ei lähetettäviä tuotteita',
        ],
    ],
    'custom_shipment' => [
        'title' => 'Custom Shipment',
        'service_title' => 'Shipping service',
        'additional_service_title' => 'Additional service',
        'address_title' => 'Shipping address',
        'create_button' => 'Create Shipment',
        'save_successful' => 'Shipment updated successfully',
        'save_failed' => 'Shipment update failed',
        'pickups_title' => 'Pickup points',
        'not_selected' => 'Shipping method not selected',
        'multiparcel_title' => 'Packets',
        'products_title' => 'Tuotteet',
        'product_name'  => 'Nimi',
        'product_ship'  => 'Lähetä',
        'product_remains'  => 'Toimittamattomat',
        'product_shipped'  => 'Lähetetty',
        'product_total'  => 'Kokonaismäärä',
        'no_products' => 'Ei lähetettäviä tuotteita'

    ],
    'settings' => [
        'only_default' => 'Huom! Vain "Oletuslähetystapa" toimii ylläolevassa toimituksissa. Shopifyssä olevan rajoitteen takia toimitushinnan nimi pitää olla uniikki eri toimitusvyöhykkeissä.',
        'default_shipping' => 'Oletuslähetystapa',
        'no_shipping_method' => 'Älä luo lähetystä',
        'no_shipping' => 'Älä luo lähetystä',
        'activation_code' => 'Asiointikoodi',
        'create_activation_code' => 'Luo asiointikoodi (Helposti-koodi, aktivointikoodi) kaikille lähetyksille. Koodi lisätään tilauksen Notesiin, jolloinka se saattaa tulla näkyviin myös asiakkaalle meneviin tietoihin!',
        'create_activation_code_desc' => 'Käytä vain jos et tulosta pakettikortteja',
        'add_additional_label_info' => 'Lisää sisältöä pakettikortin lisätietoihin',
        'additional_label_info' => 'Pakettikortin sisältö lisätietoa varten',
        'default_additional_label_info' => "Tilausnumero {ORDER_NUMBER}\nTuotteet: {PRODUCTS_NAMES}\nSKU: {PRODUCTS_SKU}",
        'order_number' => 'Tilausnumero',
        'products_names' => 'Lähetyksessä olevat tuotteet',
        'products_sku' => 'Lähetyksessä olevat SKU',
        'testmode_on' => 'Kytke testitila päälle',
        'testmode_off' => 'Kytke tuotantotila päälle',
        'latest-news' => 'Ajankohtaista',
        'pickuppoints-settings' => 'Noutopisteasetukset',
        'api-settings-pakettikauppa' => 'API asetukset',
        'api-info-pakettikauppa' => 'Löydät API-tunnukset Pakettikaupan <a href="https://hallinta.pakettikauppa.fi/profile#api-keys" target="_blank">hallintapaneelista Profiili-sivulta</a>. Mikäli sinulla ei vielä ole tunnuksia Pakettikauppaan, voit rekisteröityä osoitteessa <a href="https://www.pakettikauppa.fi/" target="_blank">https://www.pakettikauppa.fi/</a>',
        'api-settings-posti' => 'Posti API',
        'api-info-posti' => '',
        'api-settings-itella' => 'Itella API',
        'api-info-itella' => '','generic-settings' => 'Muut',
        'settings' => 'Asetukset',
        'language' => 'Kieli',
        'shipment_settings' => 'Lähetysasetukset',
        'default_shipping_method' => 'Oletuslähetystapa',
        'shopify_method' => 'Toimitustapa Shopifystä',
        'pk_method' => 'Pakettikaupan toimitustavat',
        'pakettikauppa_method' => 'Pakettikaupan toimitustavat',
        'posti_method' => 'Posti toimitustavat',
        'itella_method' => 'Itella toimitustavat',
        'company_info' => 'Lähettäjän tiedot',
        'testing' => 'Testitila',
        'company_name_pakettikauppa' => 'Pakettikauppa',
        'company_name_posti' => 'Posti',
        'company_name_itella' => 'Itella',
        'instructions' => 'Lue lisää  palveluista <a href=":instruction_url">:company_name kotisivuilta</a>.',
        'shipping_method' => 'Toimitustapa',
        'additional_services' => 'Lisäpalvelut',
        'business_name' => 'Yritys',
        'address' => 'Osoite',
        'postcode' => 'Postinumero',
        'city' => 'Postitoimipaikka',
        'country' => 'Maa',
        'email' => 'Sähköposti',
        'phone' => 'Puhelinnumero',
        'enable_carrier_api' => 'Noutopistetoiminto tarvitsee Carrier Services APIn toimintaan. Carrier Service API on saatavilla vain Shopify tai Shopify Plus tilauksiin. Pyydä Shopifyn asiakaspalvelu kytkemään päälle Carrier Service API.',
        'pickuppoint_providers' => 'Minkä toimittajan noutopisteet haetaan?',
        'pickuppoints_count' => 'Kuinka monta lähintä noutopistettä näytetään ostajalle?',
        'pickuppoints_count_0' => 'Älä näytä noutopisteitä',
        'cash_on_delivery' => 'Postiennakon asetukset',
        'iban' => 'Pankkitili (IBAN)',
        'bic' => 'BIC',
        'test_mode' => 'Kytke testitila päälle',
        'save_settings' => 'Tallenna asetukset',
        'api_key' => 'API key',
        'api_secret' => 'API secret',
        'saved' => 'Asetukset ovat tallennettu',
        'save_failed' => 'Failed to save changes',
        'print_return_labels' => 'Luo aina palautuslähetys lähetyksen yhteyssä. Huom! Shopifyssä oleva seuranta toimii vain alkuperäiselle lähetykselle.',
        'include_discounted_price_in_trigger' => 'Ota hintarajan laskennassa mukaan tuotteiden alennukset.',
        'pickuppoints' => [
            'title' => 'Noutopisteiden asetukset',
            'provider' => 'Kuljetusyhtiö',
            'base_price' => 'Perushinta (€)',
            'trigger_price' => 'Hintaraja (€)',
            'triggered_price' => 'Hinta ylityksen jälkeen (€)',
            'all' => 'Kaikki',
            'private_lockers' => 'Yksityiset automaatit',
            'outdoor_lockers' => 'Ulkoautomaatit',
            'pickup_points' => 'Noutopiste',
            'agencies' => 'Noutopisteet',
            'parcel_lockers' => 'Pakettiautomaatti',
        ],
        'support' => 'Tuki',
    ],

    'messages' => [
        'activate_app_to_browser' => 'Oikeuta tämä selain käyttämään laajennusta',
        'error' => 'Virhe',
        'no_api' => 'API tunnuksia ei ole vielä syötetty',
        'ready' => 'Kaikki on valmista',
        'only_test_mode' => 'Ilman API tunnuksia voit käyttää ohjelmaa vain testitilassa',
        'no_api_set_error' => 'Aseta API tunnukset tai kytke testitila päälle <a href=":settings_url">asetuksissa</a>.',
        'invalid_credentials' => 'API tunnukset eivät ole oikein',
        'credentials_missing' => 'API tunnuksia ei ole syötetty',
        'no_tracking_info' => 'Seurantatiedot tilaukselle eivät ole vielä saatavilla',
        'success' => 'Tehtävä onnistui!',
        'fail' => 'Tehtävä epäonnistui',
        'api_credentials_saved' => 'API tunnukset ovat nyt tallennettu. Siirry seuraavaan vaiheeseen.',
        'wait_for_email' => 'Odota sähköpostia myyntitiimiltämme',
        'register_first' => 'Sinun täytyy ensin rekisteröityä',
        'in-testing' => 'Liitäntäsi on nyt testitilassa!',
        'in-production' => 'Liitäntäsi on nyt tuotantotilassa!',
        'failed-test-mode' => 'Could not switch Test Mode',
    ],
    'tracking_info' => [
        'transaction' => 'Lähetys',
        'title' => 'Seurantatapahtuma',
        'status' => 'Status',
        'postcode' => 'Postinumero',
        'post_office' => 'Postitoimipaikka',
        'timestamp' => 'Aikaleima',
    ],

    'status_codes' => [
        "31" => [
            "full" => "Lähetys on kuljetuksessa",
            "short" => "Kuljetuksessa"
        ],
        "22" => [
            "full" => "Lähetys on luovutettu vastaanottajalle",
            "short" => "Luovutettu",
        ],
        "56" => [
            "full" => "Lähetystä ei ole toimitettu – luovutusyritys on tehty",
            "short" => "Ei toimitettu",
        ],
        "48" => [
            "full" => "Lähetys on lastattu runkokuljetukseen",
            "short" => "Kuljetuksessa",
        ],
        "71" => [
            "full" => "Lähetys on lastattu jakelukuljetukseen",
            "short" => "Jakelussa",
        ],
        "91" => [
            "full" => "Lähetys on saapunut postitoimipaikkaan",
            "short" => "Toimipaikassa",
        ],
        "77" => [
            "full" => "Lähetys palautuu lähettäjälle",
            "short" => "Palautuu",
        ],
        "38" => [
            "full" => "Lähetykseen liittyvä postiennakkomaksu on suoritettu",
            "short" => "Maksettu",
        ],
        "68" => [
            "full" => "Lähetyksen EDI-tiedot vastaanotettu lähettäjältä",
            "short" => "Tiedot vastaanotettu",
        ],
        "13" => [
            "full" => "Lähetys on noudettu lähettäjältä",
            "short" => "Noudettu",
        ],
        "99" => [
            "full" => "Lähetys lähdössä ulkomaille",
            "short" => "Lähdössä ulkomaille",
        ],
        "45" => [
            "full" => "Lähetyksestä on lähetetty saapumisilmoitus",
            "short" => "Saapumisilmoitus",
        ],
        "20" => [
            "full" => "Lähetylle on tehty poikkeama",
            "short" => "Poikkeama",
        ],
        // matkahuolto codes
        "LS" => [
            "full" => "Lähtevän hyllytys",
            "short" => "Kuljetuksessa"
        ],
        'LA' => [
            "full" => "Lastattu runkokuormaan",
            "short" => "Kuljetuksessa"
        ],
        'JA' => [
            "full" => "Saapunut määräasemalle",
            "short" => "Määräasemalla"
        ],
        'SA' => [
            "full" => "Saapunut määräpakettipisteeseen",
            "short" => "Määräpakettipisteessä"
        ],
        'IL' => [
            "full" => "Lähetyksestä on lähetetty saapumisilmoitus",
            "short" => "Saapumisilmoitus"
        ],
        'LU' => [
            "full" => "Lähetys on luovutettu vastaanottajalle",
            "short" => "Luovutettu"
        ],
    ],
];