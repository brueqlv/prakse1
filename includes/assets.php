<?php if ( ! defined( 'ABSPATH' ) ) exit;

function pdgc_add_assets() {

        $current_page_id = get_queried_object_id();

        // Adds specific stylesheets and js for pages
        $page_specific_stylesheets = array(
            231 => '/vendor/scss/home.css',  //Home page
            270 => '/vendor/scss/ideja.css',  //Ideja page
            278 => '/vendor/scss/piesaki-sapni.css', //Piesaki Sapni page
            280 => '/vendor/scss/uznemejiem.css', //Uznemejiem page
            282 => '/vendor/scss/sapnu-banka.css', //Sapnu banka page
            284 => '/vendor/scss/sapnus-atbalsta.css', //Sapnus atbalsta page
            288 => '/vendor/scss/99-iedvesmas-stasti.css', //99 Iedvesmas stasti page
        );
        $page_specific_scripts = array(
            231 => array(  //Home page
               'buttonSize' => '/vendor/js/buttonSize.js',
                'theme' => '/vendor/js/theme.js',
            ),
            270 => array( //Ideja page
                'theme' => '/vendor/js/theme.js',
                'quoteSlider' => '/vendor/js/quoteSlider.js'
            ),
            278 => array( //Piesaki Sapni page
                'theme' => '/vendor/js/theme.js'
            ),
            280 => array( //Uznemejiem page
                'theme' => '/vendor/js/theme.js'
            ),
            282 => array(  //Sapnu banka page
               'buttonSize' => '/vendor/js/buttonSize.js',
                'theme' => '/vendor/js/theme.js',
            ),
            284 => array( //Sapnus atbalsta page
                'theme' => '/vendor/js/theme.js',
                'dropdown' => '/vendor/js/dropdown.js',
                'map' => '/vendor/js/map.js',
                'api'=> 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBL8tuC1GL8INuR56adi1BCoWYowvcU32Y&libraries=places&callback=initMap'
            ),
            288 => array( //99 Iedvesmas stasti page
                'theme' => '/vendor/js/theme.js',
                'smallContainer' => '/vendor/js/smallContainer.js'
            )
        );
        
    
        if (array_key_exists($current_page_id, $page_specific_stylesheets)) {
            $stylesheet = $page_specific_stylesheets[$current_page_id];
            wp_enqueue_style('pdgc-page-specific', PDGC_ASSETS . $stylesheet, array(), PDGC_VER);
        }
        if (array_key_exists($current_page_id, $page_specific_scripts)) {
            $scripts = $page_specific_scripts[$current_page_id];
            foreach ($scripts as $handle => $script) {
                if ($handle === 'api') {
                    // Enqueue Google Maps API with async and defer attributes.
                    wp_enqueue_script('pdgc-' . $handle, $script, array(), PDGC_VER, true);
                    wp_script_add_data('pdgc-' . $handle, 'async', true); // Add 'async' attribute
                    wp_script_add_data('pdgc-' . $handle, 'defer', true); // Add 'defer' attribute
                } else {
                    wp_enqueue_script('pdgc-' . $handle, PDGC_ASSETS . $script, array(), PDGC_VER, true);
                }
            }
        }
        

    // Main theme assets.
    wp_enqueue_style( 'pdgc-main', PDGC_ASSETS . '/css/main.css', array(), PDGC_VER );
    wp_enqueue_script( 'pdgc-main', PDGC_ASSETS . '/main.js', array( 'jquery' ), PDGC_VER, true );

    // Late loaded assets.
    wp_enqueue_style( 'pdgc-late', PDGC_ASSETS . '/vendor/theme/late.css', array(), PDGC_VER );
    wp_enqueue_script( 'pdgc-late', PDGC_ASSETS . '/vendor/theme/late.js', array(), PDGC_VER, true );

}
add_action( 'wp_enqueue_scripts', 'pdgc_add_assets', 20 );
