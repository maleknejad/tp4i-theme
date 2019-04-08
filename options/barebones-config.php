<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_tp4";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
       
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'سفارشی‌سازی', 'tp4-framework-demo' ),
        'page_title'           => __( 'سفارشی‌سازی', 'tp4-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'left',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'small',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => false,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top right',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => '',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => '',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    

    // // Panel Intro text -> before the form
    // if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
    //     if ( ! empty( $args['global_variable'] ) ) {
    //         $v = $args['global_variable'];
    //     } else {
    //         $v = str_replace( '-', '_', $args['opt_name'] );
    //     }
    //     $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'tp4-framework-demo' ), $v );
    // } else {
    //     $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'tp4-framework-demo' );
    // }

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'tp4-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'tp4-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'tp4-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'tp4-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'tp4-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
 
    Redux::setSection( $opt_name, array(
        'title' => __( 'صفحه اول', 'tp4-framework-demo' ),
        'id'    => 'home',
        'icon'  => 'el el-home'
    ) );

  Redux::setSection( $opt_name, array(
        'title'      => __( 'اسلایدر', 'tp4-framework-demo' ),
        'id'         => 'slider',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'header-desc',
                'type'        => 'textarea',
                'title'       => __( 'توضیحات بالای صفحه اول  ', 'redux-framework-demo' ), 
                'placeholder' => 'متن توضیحات درباره سایت',
            ),
            array(
                'id'          => 'opt-slider',
                'type'        => 'slides',
                'title'       => __( 'انتخاب اسلایدها', 'tp4-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'انتخاب عنوان روی عکس', 'tp4-framework-demo' ),
                    'url'         => __( 'لینک عکس', 'tp4-framework-demo' ),
                ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title' => __( 'فوتر', 'tp4-framework-demo' ),
        'id'    => 'footer',
        'icon'  => 'el el-braille',
         'fields'     => array(
             array(
                'id'          => 'url-insta',
                'type'        => 'text',
                'title'       => __( 'لینک اینستاگرام', 'redux-framework-demo' ), 
                'placeholder' => 'http://instagram.com/@example',
            ),
             array(
                'id'          => 'url-bale',
                'type'        => 'text',
                'title'       => __( 'لینک بله', 'redux-framework-demo' ), 
                'placeholder' => 'لینک کامل',
            ),
             array(
                'id'          => 'url-telegram',
                'type'        => 'text',
                'title'       => __( 'لینک تلگرام', 'redux-framework-demo' ), 
                'placeholder' => 'لینک کامل',
            ),
             array(
                'id'          => 'url-sorush',
                'type'        => 'text',
                'title'       => __( 'لینک سروش', 'redux-framework-demo' ), 
                'placeholder' => 'لینک کامل',
            ),
             array(
                'id'          => 'url-twitter',
                'type'        => 'text',
                'title'       => __( 'لینک توییتر', 'redux-framework-demo' ), 
                'placeholder' => 'لینک کامل',
            ),
             array(
                'id'          => 'url-aparat',
                'type'        => 'text',
                'title'       => __( 'لینک آپارات', 'redux-framework-demo' ), 
                'placeholder' => 'لینک کامل',
            ),
             array(
                'id'          => 'footer-desc',
                'type'        => 'textarea',
                'title'       => __( 'توضیحات در فوتر ', 'redux-framework-demo' ), 
                'placeholder' => 'متن توضیحات درباره سایت',
            ),
               array(
                'id'          => 'footer-copy-right',
                'type'        => 'text',
                'title'       => __( 'متن کپی رایت', 'redux-framework-demo' ), 
                'placeholder' => 'متن کپی رایت',
            ),
        )
    ) );


    /*
     * <--- END SECTIONS
     */
