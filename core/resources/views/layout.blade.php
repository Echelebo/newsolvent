<!DOCTYPE html>
<html lang="en-US" class="elementor-widget-cmsmasters-offcanvas__container">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>{{ $title }} | {{ $set->site_name }}</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="alternate" type="application/rss+xml" title="Alternative » Feed" href="{{ url('/') }}/feed/">
    <link rel="alternate" type="application/rss+xml" title="Alternative » Comments Feed"
        href="{{ url('/') }}/comments/feed/">
    <link rel="stylesheet" id="cmsmasters-default-vars-css"
        href="{{ url('/') }}/wp-content/themes/multibank/assets/css/default-vars.min.css" type="text/css"
        media="all">
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--cmsmasters-colors-text: var(--cmsmasters-colors-text);
            --wp--preset--color--cmsmasters-colors-link: var(--cmsmasters-colors-link);
            --wp--preset--color--cmsmasters-colors-hover: var(--cmsmasters-colors-hover);
            --wp--preset--color--cmsmasters-colors-heading: var(--cmsmasters-colors-heading);
            --wp--preset--color--cmsmasters-colors-bg: var(--cmsmasters-colors-bg);
            --wp--preset--color--cmsmasters-colors-alternate: var(--cmsmasters-colors-alternate);
            --wp--preset--color--cmsmasters-colors-bd: var(--cmsmasters-colors-bd);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="cookie-law-info-css"
        href="{{ url('/') }}/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="cookie-law-info-gdpr-css"
        href="{{ url('/') }}/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-layout-css"
        href="{{ url('/') }}/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css"
        href="{{ url('/') }}/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css" type="text/css"
        media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css"
        href="{{ url('/') }}/wp-content/themes/multibank/woocommerce/cmsmasters-framework/assets/css/woocommerce.min.css"
        type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="multibank-root-style-css"
        href="{{ url('/') }}/wp-content/themes/multibank/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="multibank-frontend-css"
        href="{{ url('/') }}/wp-content/themes/multibank/assets/css/frontend.min.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="multibank-gutenberg-css"
        href="{{ url('/') }}/wp-content/themes/multibank/assets/css/gutenberg-wp-frontend.min.css" type="text/css"
        media="all">
    <style id="multibank-gutenberg-inline-css" type="text/css">
        .has-cmsmasters-colors-text-color {
            color: var(--cmsmasters-colors-text) !important;
        }

        .has-cmsmasters-colors-text-background-color {
            background-color: var(--cmsmasters-colors-text) !important;
        }

        .has-cmsmasters-colors-link-color {
            color: var(--cmsmasters-colors-link) !important;
        }

        .has-cmsmasters-colors-link-background-color {
            background-color: var(--cmsmasters-colors-link) !important;
        }

        .has-cmsmasters-colors-hover-color {
            color: var(--cmsmasters-colors-hover) !important;
        }

        .has-cmsmasters-colors-hover-background-color {
            background-color: var(--cmsmasters-colors-hover) !important;
        }

        .has-cmsmasters-colors-heading-color {
            color: var(--cmsmasters-colors-heading) !important;
        }

        .has-cmsmasters-colors-heading-background-color {
            background-color: var(--cmsmasters-colors-heading) !important;
        }

        .has-cmsmasters-colors-bg-color {
            color: var(--cmsmasters-colors-bg) !important;
        }

        .has-cmsmasters-colors-bg-background-color {
            background-color: var(--cmsmasters-colors-bg) !important;
        }

        .has-cmsmasters-colors-alternate-color {
            color: var(--cmsmasters-colors-alternate) !important;
        }

        .has-cmsmasters-colors-alternate-background-color {
            background-color: var(--cmsmasters-colors-alternate) !important;
        }

        .has-cmsmasters-colors-bd-color {
            color: var(--cmsmasters-colors-bd) !important;
        }

        .has-cmsmasters-colors-bd-background-color {
            background-color: var(--cmsmasters-colors-bd) !important;
        }
    </style>
    <link rel="stylesheet" id="elementor-frontend-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/css/frontend.min.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="swiper-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-post-25-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/css/post-25.css" type="text/css" media="all">
    <link rel="stylesheet" id="cmsmasters-icons-css"
        href="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/cmsicons/css/cmsmasters-icons.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="cmsmasters-frontend-css"
        href="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/css/frontend.min.css"
        type="text/css" media="all">



    <link rel="stylesheet" id="wc-frontend-css"
        href="{{ url('/') }}/wp-content/themes/multibank/woocommerce/cmsmasters-framework/assets/css/wc-frontend.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-104-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/css/post-104.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-post-59-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/css/post-59.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="multibank-child-style-css"
        href="{{ url('/') }}/wp-content/themes/multibank-child/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-Local-Icons-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/cmsmasters-local-icons/Local-Icons/style.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css"
        type="text/css" media="all">
    <script type="text/javascript" src="{{ url('/') }}/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/wp-includes/js/jquery/jquery-migrate.min.js"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" id="cookie-law-info-js-extra">
        /* <![CDATA[ */
        var Cli_Data = {
            "nn_cookie_ids": [],
            "cookielist": [],
            "non_necessary_cookies": [],
            "ccpaEnabled": "",
            "ccpaRegionBased": "",
            "ccpaBarEnabled": "",
            "strictlyEnabled": ["necessary", "obligatoire"],
            "ccpaType": "gdpr",
            "js_blocking": "1",
            "custom_integration": "",
            "triggerDomRefresh": "",
            "secure_cookies": ""
        };
        var cli_cookiebar_settings = {
            "animate_speed_hide": "500",
            "animate_speed_show": "500",
            "background": "#FFF",
            "border": "#b1a6a6c2",
            "border_on": "",
            "button_1_button_colour": "#61a229",
            "button_1_button_hover": "#4e8221",
            "button_1_link_colour": "#fff",
            "button_1_as_button": "1",
            "button_1_new_win": "",
            "button_2_button_colour": "#333",
            "button_2_button_hover": "#292929",
            "button_2_link_colour": "#444",
            "button_2_as_button": "",
            "button_2_hidebar": "",
            "button_3_button_colour": "#dedfe0",
            "button_3_button_hover": "#b2b2b3",
            "button_3_link_colour": "#333333",
            "button_3_as_button": "1",
            "button_3_new_win": "",
            "button_4_button_colour": "#dedfe0",
            "button_4_button_hover": "#b2b2b3",
            "button_4_link_colour": "#333333",
            "button_4_as_button": "1",
            "button_7_button_colour": "#61a229",
            "button_7_button_hover": "#4e8221",
            "button_7_link_colour": "#fff",
            "button_7_as_button": "1",
            "button_7_new_win": "",
            "font_family": "inherit",
            "header_fix": "",
            "notify_animate_hide": "1",
            "notify_animate_show": "",
            "notify_div_id": "#cookie-law-info-bar",
            "notify_position_horizontal": "right",
            "notify_position_vertical": "bottom",
            "scroll_close": "",
            "scroll_close_reload": "",
            "accept_close_reload": "",
            "reject_close_reload": "",
            "showagain_tab": "",
            "showagain_background": "#fff",
            "showagain_border": "#000",
            "showagain_div_id": "#cookie-law-info-again",
            "showagain_x_position": "100px",
            "text": "#333333",
            "show_once_yn": "",
            "show_once": "10000",
            "logging_on": "",
            "as_popup": "",
            "popup_overlay": "1",
            "bar_heading_text": "",
            "cookie_bar_as": "banner",
            "popup_showagain_position": "bottom-right",
            "widget_position": "left"
        };
        var log_object = {
            "ajax_url": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cookie-law-info/legacy/public/js/cookie-law-info-public.js"
        id="cookie-law-info-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/alternative\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/alternative\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/multibank.cmsmasters.net\/alternative\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js" id="js-cookie-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/alternative\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/alternative\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js" id="woocommerce-js"
        defer="defer" data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="{{ url('/') }}/wp-json/">
    <link rel="alternate" type="application/json" href="{{ url('/') }}/wp-json/wp/v2/pages/7199">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ url('/') }}/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.5">
    <meta name="generator" content="WooCommerce 8.7.0">
    <link rel="canonical" href="{{ url('/') }}/">
    <link rel="shortlink" href="{{ url('/') }}/">
    <link rel="alternate" type="application/json+oembed"
        href="{{ url('/') }}/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmultibank.cmsmasters.net%2Falternative%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="{{ url('/') }}/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmultibank.cmsmasters.net%2Falternative%2F&amp;format=xml">
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.20.3; features: additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <link rel="icon" href="{{ url('/') }}/asset/{{ $logo->image_link2 }}" sizes="32x32">
    <link rel="icon" href="{{ url('/') }}/asset/{{ $logo->image_link2 }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ url('/') }}/asset/{{ $logo->image_link2 }}">
    <meta name="msapplication-TileImage" content="{{ url('/') }}/asset/{{ $logo->image_link2 }}">
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/58/8/common.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/58/8/util.js">
    </script>
</head>

<body id="{{ $bodyid }}" class="{{ $bodyclass }}" data-elementor-device-mode="mobile"
    data-new-gr-c-s-check-loaded="14.1200.0" data-gr-ext-installed="">

    <div data-elementor-type="cmsmasters_header" data-elementor-id="104"
        class="elementor elementor-104 cmsmasters-location-cmsmasters_header cmsmasters-header-position-absolute-">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-128d9130 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default"
                    data-id="128d9130" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-426a18c0"
                            data-id="426a18c0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-547b21fe elementor-widget__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button"
                                    data-id="547b21fe" data-element_type="widget"
                                    data-widget_type="cmsmasters-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a
                                                    href="{{ route('personal') }}"
                                                    class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm"
                                                    role="button"><span
                                                        class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span
                                                            class="elementor-widget-cmsmasters-button__text">Personal</span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2ca5d207 elementor-widget__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button"
                                    data-id="2ca5d207" data-element_type="widget"
                                    data-widget_type="cmsmasters-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a
                                                    href="{{ route('business') }}"
                                                    class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm"
                                                    role="button"><span
                                                        class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span
                                                            class="elementor-widget-cmsmasters-button__text">business</span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-39cc6c2a elementor-widget__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button"
                                    data-id="39cc6c2a" data-element_type="widget"
                                    data-widget_type="cmsmasters-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a
                                                    href="{{ route('commercial') }}"
                                                    class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm"
                                                    role="button"><span
                                                        class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span
                                                            class="elementor-widget-cmsmasters-button__text">Commercial</span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-660c520c elementor-hidden-mobile"
                            data-id="660c520c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-72f9bca0 elementor-widget__width-initial elementor-hidden-tablet elementor-hidden-mobile cmsmasters-widget-layout-row cmsmasters-widget-align-stretch cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list"
                                    data-id="72f9bca0" data-element_type="widget"
                                    data-widget_type="cmsmasters-icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="cmsmasters-widget-icon-list-items">
                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                        <span>
                                                            <i aria-hidden="true"
                                                                class="cmsmsdemo-icon- cmsms-demo-icon-location-1"></i>
                                                        </span>
                                                    </span>
                                                    <span class="cmsmasters-widget-icon-list-item-text-inner">
                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                            {{ $set->address }} </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-63094589 elementor-widget__width-initial elementor-hidden-tablet elementor-hidden-mobile cmsmasters-widget-layout-row cmsmasters-widget-align-stretch cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list"
                                    data-id="63094589" data-element_type="widget"
                                    data-widget_type="cmsmasters-icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="cmsmasters-widget-icon-list-items">
                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                        <span>
                                                            <i aria-hidden="true"
                                                                class="cmsmsdemo-icon- cmsms-demo-icon-mail-1"></i>
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                            <a
                                                                href="mailto:{{ $set->email }}">{{ $set->email }}</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3159015c elementor-widget__width-initial cmsmasters-widget-layout-row cmsmasters-widget-align-stretch cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list"
                                    data-id="3159015c" data-element_type="widget"
                                    data-widget_type="cmsmasters-icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="cmsmasters-widget-icon-list-items">
                                            <li class="cmsmasters-widget-icon-list-item active-icon-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span class="cmsmasters-widget-icon-list-item-icon">
                                                        <span>
                                                            <i aria-hidden="true"
                                                                class="cmsmsdemo-icon- cmsms-demo-icon-phone-1"></i>
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                            <a
                                                                href="tel:+1%20452%20123%201235">{{ $set->mobile }}</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2347306e elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle cmsmasters-block-default"
                    data-id="2347306e" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-483870e2"
                            data-id="483870e2" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-eda0c0a cmsmasters-logo-mobile-alignment-left cmsmasters-logo-type-image cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-site-logo"
                                    data-id="eda0c0a" data-element_type="widget"
                                    data-widget_type="cmsmasters-site-logo.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-site-logo__container">
                                            <div class="elementor-widget-cmsmasters-site-logo__image-container"><a
                                                    href="{{ url('/') }}"
                                                    class="elementor-widget-cmsmasters-site-logo__link"
                                                    rel="nofollow"><img
                                                        src="{{ url('/') }}/wp-content/uploads/sites/3/2021/11/logo-1.svg"
                                                        alt="Alternative" title="Alternative"
                                                        class="cmsmasters-lazyload-disabled elementor-widget-cmsmasters-site-logo__img elementor-widget-cmsmasters-site-logo-main"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6117d686"
                            data-id="6117d686" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-792ce6d7 elementor-widget__width-initial elementor-hidden-tablet elementor-hidden-mobile cmsmasters-icon-position-right cmsmasters-dropdown-breakpoints-tablet cmsmasters-toggle-view-stacked cmsmasters-toggle-shape-square cmsmasters-pointer-none cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-nav-menu"
                                    data-id="792ce6d7" data-element_type="widget"
                                    data-settings="{&quot;dropdown_horizontal_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;layout&quot;:&quot;horizontal&quot;,&quot;dropdown_breakpoints&quot;:&quot;tablet&quot;}"
                                    data-widget_type="cmsmasters-nav-menu.default">
                                    <div class="elementor-widget-container">
                                        <nav
                                            class="elementor-widget-cmsmasters-nav-menu__main elementor-widget-cmsmasters-nav-menu__container cmsmasters-layout-horizontal">
                                            <ul id="menu-1-792ce6d7"
                                                class="elementor-widget-cmsmasters-nav-menu__container-inner">
                                                <li id="menu-item-9556"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7199 current_page_item menu-item-9556">
                                                    <a href="{{ url('/') }}/" aria-current="page"
                                                        class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-active elementor-widget-cmsmasters-nav-menu__item-link-top"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">Home</span><span
                                                                class="elementor-widget-cmsmasters-nav-menu__arrow"><span
                                                                    class="cmsmasters-wrap-icon"><i
                                                                        class="fas fa-chevron-down"></i></span></span></span><span
                                                            class="cmsmasters-animation"></span></a>
                                                </li>
                                                <li id="menu-item-8990"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8990">
                                                    <a class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">Services</span><span
                                                                class="elementor-widget-cmsmasters-nav-menu__arrow"><span
                                                                    class="cmsmasters-wrap-icon"><i
                                                                        class="fas fa-chevron-down"></i></span></span></span><span
                                                            class="cmsmasters-animation"></span></a>
                                                    <ul class="sub-menu elementor-widget-cmsmasters-nav-menu__dropdown-submenu"
                                                        dropdown-align-right="">
                                                        <li id="menu-item-8988"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8988">
                                                            <a href="{{ route('services') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">View
                                                                        All</span><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__arrow"></span></span><span
                                                                    class="cmsmasters-animation"></span></a>
                                                        </li>
                                                        <li id="menu-item-8991"
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8991">
                                                            <a href="{{ route('personal') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Savings
                                                                        Account</span><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__arrow"></span></span><span
                                                                    class="cmsmasters-animation"></span></a>
                                                        </li>
                                                        <li id="menu-item-8992"
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8992">
                                                            <a href="{{ route('business') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Credit
                                                                        Cards</span><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__arrow"></span></span><span
                                                                    class="cmsmasters-animation"></span></a>
                                                        </li>
                                                        <li id="menu-item-8993"
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8993">
                                                            <a href="{{ route('commercial') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Managing
                                                                        account</span><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__arrow"></span></span><span
                                                                    class="cmsmasters-animation"></span></a>
                                                        </li>
                                                        <li id="menu-item-8994"
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8994">
                                                            <a href="{{ route('mortgages') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub elementor-widget-cmsmasters-nav-menu__item-link-sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Mortgage</span><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__arrow"></span></span><span
                                                                    class="cmsmasters-animation"></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-8986"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8986">
                                                    <a href="{{ route('about') }}"
                                                        class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">About</span><span
                                                                class="elementor-widget-cmsmasters-nav-menu__arrow"><span
                                                                    class="cmsmasters-wrap-icon"><i
                                                                        class="fas fa-chevron-down"></i></span></span></span><span
                                                            class="cmsmasters-animation"></span></a>
                                                </li>
                                                <li id="menu-item-8987"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8987">
                                                    <a href="{{ route('contacts') }}"
                                                        class="elementor-widget-cmsmasters-nav-menu__dropdown-item elementor-widget-cmsmasters-nav-menu__item-link-top"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">Contacts</span><span
                                                                class="elementor-widget-cmsmasters-nav-menu__arrow"><span
                                                                    class="cmsmasters-wrap-icon"><i
                                                                        class="fas fa-chevron-down"></i></span></span></span><span
                                                            class="cmsmasters-animation"></span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div
                                            class="elementor-widget-cmsmasters-nav-menu__toggle-container cmsmasters-layout-horizontal cmsmasters-menu-dropdown-type-">
                                            <div
                                                class="elementor-widget-cmsmasters-nav-menu__toggle cmsmasters-icon-align-">
                                                <span class="cmsmasters-toggle-icon"><i
                                                        class="fas fa-bars"></i></span><span
                                                    class="cmsmasters-toggle-icon-active"><i
                                                        class="fas fa-times"></i></span>
                                            </div>
                                        </div>
                                        <nav
                                            class="elementor-widget-cmsmasters-nav-menu__dropdown elementor-widget-cmsmasters-nav-menu__container cmsmasters-layout-horizontal cmsmasters-menu-dropdown-type- cmsmasters-arrow-animation-">
                                            <ul id="cmsmasters_menu-4-792ce6d7"
                                                class="elementor-widget-cmsmasters-nav-menu__container-inner cmsmasters-nav-menu-dropdown ps">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7199 current_page_item menu-item-9556">
                                                    <a href="{{ url('/') }}/" aria-current="page"
                                                        class="elementor-widget-cmsmasters-nav-menu__dropdown-item"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">Home</span></span></a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8990">
                                                    <a class="elementor-widget-cmsmasters-nav-menu__dropdown-item"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">Services</span></span></a>
                                                    <ul class="sub-menu elementor-widget-cmsmasters-nav-menu__dropdown-submenu"
                                                        style="" dropdown-align-right="">
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8988">
                                                            <a href="{{ route('services') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">View
                                                                        All</span></span></a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8991">
                                                            <a href="{{ route('personal') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Savings
                                                                        Account</span></span></a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8992">
                                                            <a href="{{ route('business') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Credit
                                                                        Cards</span></span></a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8993">
                                                            <a href="{{ route('commercial') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Managing
                                                                        account</span></span></a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8994">
                                                            <a href="{{ route('mortgages') }}"
                                                                class="elementor-widget-cmsmasters-nav-menu__dropdown-item sub"
                                                                aria-label="Menu item"><span
                                                                    class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                        class="elementor-widget-cmsmasters-nav-menu__item-text">Mortgage</span></span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8986">
                                                    <a href="{{ route('about') }}"
                                                        class="elementor-widget-cmsmasters-nav-menu__dropdown-item"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">About
                                                                Us</span></span></a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8987">
                                                    <a href="{{ route('contacts') }}"
                                                        class="elementor-widget-cmsmasters-nav-menu__dropdown-item"
                                                        aria-label="Menu item"><span
                                                            class="elementor-widget-cmsmasters-nav-menu__item-text-wrap"><span
                                                                class="elementor-widget-cmsmasters-nav-menu__item-text">Contacts</span></span></a>
                                                </li>
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0"
                                                        style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                    <div class="ps__thumb-y" tabindex="0"
                                                        style="top: 0px; height: 0px;"></div>
                                                </div>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5dbd8356 elementor-widget__width-initial elementor-hidden-tablet elementor-hidden-mobile cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button"
                                    data-id="5dbd8356" data-element_type="widget"
                                    data-widget_type="cmsmasters-button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-button__button-container">
                                            <div class="elementor-widget-cmsmasters-button__button-container-inner"><a
                                                    href="{{ route('openaccount') }}"
                                                    class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm"
                                                    role="button"><span
                                                        class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span
                                                            class="elementor-widget-cmsmasters-button__text">Internet
                                                            Banking</span></span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1f604400 cmsmasters-search-type-search-popup elementor-widget__width-initial cmsmasters-popup-trigger-type-link elementor-hidden-tablet elementor-hidden-mobile cmsmasters-popup-close-view-stacked cmsmasters-popup-trigger-content-icon cmsmasters-popup-close-shape-square cmsmasters-popup-close-icon-position-right cmsmasters-submit-button-view-button cmsmasters-form-input-icon-no cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-search"
                                    data-id="1f604400" data-element_type="widget"
                                    data-settings="{&quot;type_of_search&quot;:&quot;search-popup&quot;,&quot;esc_close&quot;:&quot;yes&quot;}"
                                    data-widget_type="cmsmasters-search.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-search__container">
                                            <div
                                                class="elementor-widget-cmsmasters-search__popup-container cmsmasters-search-popup-move-up-effect cmsmasters-overlay-close cmsmasters-disabled-scroll">
                                                <div class="elementor-widget-cmsmasters-search__popup-content">
                                                    <form role="search" method="get"
                                                        class="elementor-widget-cmsmasters-search__form "
                                                        action="{{ url('/') }}/">
                                                        <div
                                                            class="elementor-widget-cmsmasters-search__form-container cmsmasters-submit-button-view-button cmsmasters-buttons-type-icon">
                                                            <input type="search"
                                                                class="elementor-widget-cmsmasters-search__field "
                                                                value="" name="s"
                                                                placeholder="Search..."><button type="submit"
                                                                class="elementor-widget-cmsmasters-search__submit"><span
                                                                    class="elementor-widget-cmsmasters-search__submit-icon"><i
                                                                        class="cmsmsdemo-icon- cmsms-demo-icon-search"></i></span></button>
                                                        </div>
                                                    </form>
                                                </div><span
                                                    class="elementor-widget-cmsmasters-search__popup-close"><span
                                                        class="elementor-widget-cmsmasters-search__popup-close-icon"><i
                                                            class="cmsmsdemo-icon- cmsms-demo-icon-close"></i></span></span>
                                            </div>
                                            <div class="elementor-widget-cmsmasters-search__popup-trigger-container">
                                                <div class="elementor-widget-cmsmasters-search__popup-trigger-inner">
                                                    <span
                                                        class="elementor-widget-cmsmasters-search__popup-trigger-inner-icon"><i
                                                            class="cmsmsdemo-icon- cmsms-demo-icon-search"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-18c54900 cmsmasters-trigger-view-default elementor-widget__width-initial elementor-hidden-desktop cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-offcanvas"
                                    data-id="18c54900" data-element_type="widget"
                                    data-settings="{&quot;content_block&quot;:[{&quot;_id&quot;:&quot;9ca7cd4&quot;,&quot;nav_menu&quot;:null,&quot;title&quot;:&quot;&quot;,&quot;content_type&quot;:&quot;logo&quot;,&quot;logo_image_source&quot;:&quot;default&quot;,&quot;logo_type&quot;:null,&quot;logo_image&quot;:null,&quot;logo_image_retina&quot;:null,&quot;logo_image_2x&quot;:null,&quot;logo_image_second_toggle&quot;:null,&quot;logo_image_second&quot;:null,&quot;logo_image_2x_second&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:&quot;home&quot;,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;saved_section&quot;:null,&quot;offcanvas_item_style&quot;:&quot;&quot;,&quot;offcanvas_alignment&quot;:null,&quot;offcanvas_padding&quot;:null,&quot;content_margin_bottom&quot;:null,&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:null,&quot;content_custom_bg&quot;:null,&quot;box_to_down&quot;:&quot;false&quot;},{&quot;_id&quot;:&quot;4204a51&quot;,&quot;content_type&quot;:&quot;navigation&quot;,&quot;nav_menu&quot;:&quot;64&quot;,&quot;title&quot;:&quot;&quot;,&quot;logo_image_source&quot;:null,&quot;logo_type&quot;:null,&quot;logo_image&quot;:null,&quot;logo_image_retina&quot;:null,&quot;logo_image_2x&quot;:null,&quot;logo_image_second_toggle&quot;:null,&quot;logo_image_second&quot;:null,&quot;logo_image_2x_second&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:null,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;saved_section&quot;:null,&quot;offcanvas_item_style&quot;:&quot;&quot;,&quot;offcanvas_alignment&quot;:null,&quot;offcanvas_padding&quot;:null,&quot;content_margin_bottom&quot;:null,&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:null,&quot;content_custom_bg&quot;:null,&quot;box_to_down&quot;:&quot;false&quot;},{&quot;_id&quot;:&quot;caf699a&quot;,&quot;content_type&quot;:&quot;section&quot;,&quot;nav_menu&quot;:null,&quot;box_to_down&quot;:&quot;true&quot;,&quot;saved_section&quot;:&quot;52&quot;,&quot;title&quot;:&quot;&quot;,&quot;logo_image_source&quot;:null,&quot;logo_type&quot;:null,&quot;logo_image&quot;:null,&quot;logo_image_retina&quot;:null,&quot;logo_image_2x&quot;:null,&quot;logo_image_second_toggle&quot;:null,&quot;logo_image_second&quot;:null,&quot;logo_image_2x_second&quot;:null,&quot;logo_title&quot;:null,&quot;logo_link&quot;:null,&quot;logo_custom_url&quot;:null,&quot;description&quot;:null,&quot;sidebar&quot;:null,&quot;offcanvas_item_style&quot;:&quot;&quot;,&quot;offcanvas_alignment&quot;:null,&quot;offcanvas_padding&quot;:null,&quot;content_margin_bottom&quot;:null,&quot;content_title_color&quot;:null,&quot;content_text_color&quot;:null,&quot;content_custom_bg&quot;:null}],&quot;canvas_position&quot;:&quot;left&quot;,&quot;animation_type&quot;:&quot;slide&quot;,&quot;overlay_close&quot;:&quot;yes&quot;,&quot;esc_close&quot;:&quot;yes&quot;}"
                                    data-widget_type="cmsmasters-offcanvas.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-offcanvas__wrapper">
                                            <div class="elementor-widget-cmsmasters-offcanvas__trigger-container">
                                                <div class="elementor-widget-cmsmasters-offcanvas__trigger"><span
                                                        class="elementor-widget-cmsmasters-offcanvas__trigger-icon"><i
                                                            class="cmsmsdemo-icon- cmsms-demo-icon-menu"></i></span><span
                                                        class="elementor-widget-cmsmasters-offcanvas__trigger-icon-active"><i
                                                            class="fas fa-times"></i></span></div>
                                            </div>
                                            <div
                                                class="elementor-widget-cmsmasters-offcanvas__content cmsmasters-offcanvas-content-18c54900 cmsmasters-canvas-animation-type-slide cmsmasters-canvas-position-left cmsmasters-offcanvas-alignment-center">
                                                <div
                                                    class="elementor-widget-cmsmasters-offcanvas__close-container cmsmasters-close-hor-align- cmsmasters-close-ver-align- cmsmasters-position-inside cmsmasters-close-view-stacked cmsmasters-close-shape-square">
                                                    <div class="elementor-widget-cmsmasters-offcanvas__close"><span
                                                            class="elementor-widget-cmsmasters-offcanvas__close-icon"><i
                                                                class="cmsmsdemo-icon- cmsms-demo-icon-close"></i></span>
                                                    </div>
                                                </div>
                                                <div class="elementor-widget-cmsmasters-offcanvas__body ps">
                                                    <div
                                                        class="elementor-widget-cmsmasters-offcanvas__body-container cmsmasters-block-all-down">
                                                        <div
                                                            class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-9ca7cd4 cmsmasters-box-down-false">
                                                            <div
                                                                class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div
                                                                    class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <div
                                                                        class="elementor-widget-cmsmasters-offcanvas__site-logo">
                                                                        <a href="{{ url('/') }}"
                                                                            class="elementor-widget-cmsmasters-offcanvas__site-logo-link"><img
                                                                                src="{{ url('/') }}/wp-content/uploads/sites/3/2021/11/logo-1.svg"
                                                                                alt="Solvent" title="Solvent"
                                                                                class="elementor-widget-cmsmasters-offcanvas__site-logo-img elementor-widget-cmsmasters-offcanvas__site-logo-main"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-4204a51 cmsmasters-box-down-false">
                                                            <div
                                                                class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div
                                                                    class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <nav
                                                                        class="elementor-widget-cmsmasters-offcanvas__menu-container">
                                                                        <ul id="menu-1-18c54900"
                                                                            class="elementor-widget-cmsmasters-offcanvas__menu-inner">
                                                                            <li
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7199 current_page_item menu-item-9556">
                                                                                <a href="{{ url('/') }}/"
                                                                                    aria-current="page"
                                                                                    class=" elementor-widget-cmsmasters-offcanvas__item-active elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"
                                                                                    aria-label="Menu item"><span
                                                                                        class="elementor-widget-cmsmasters-offcanvas__item-text">Home</span></a>
                                                                            </li>
                                                                            <li
                                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8990">
                                                                                <a class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"
                                                                                    aria-label="Menu item"><span
                                                                                        class="elementor-widget-cmsmasters-offcanvas__item-text">Services</span></a>
                                                                                <ul class="sub-menu">
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8988">
                                                                                        <a href="{{ route('services') }}"
                                                                                            class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__submenu-item"
                                                                                            aria-label="Menu item"><span
                                                                                                class="elementor-widget-cmsmasters-offcanvas__item-text">View
                                                                                                All</span></a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8991">
                                                                                        <a href="{{ route('personal') }}"
                                                                                            class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__submenu-item"
                                                                                            aria-label="Menu item"><span
                                                                                                class="elementor-widget-cmsmasters-offcanvas__item-text">Savings
                                                                                                Account</span></a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8992">
                                                                                        <a href="{{ route('business') }}"
                                                                                            class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__submenu-item"
                                                                                            aria-label="Menu item"><span
                                                                                                class="elementor-widget-cmsmasters-offcanvas__item-text">Credit
                                                                                                Cards</span></a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8993">
                                                                                        <a href="{{ route('commercial') }}"
                                                                                            class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__submenu-item"
                                                                                            aria-label="Menu item"><span
                                                                                                class="elementor-widget-cmsmasters-offcanvas__item-text">Managing
                                                                                                account</span></a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="menu-item menu-item-type-post_type menu-item-object-cmsms_service menu-item-8994">
                                                                                        <a href="{{ route('mortgages') }}"
                                                                                            class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__submenu-item"
                                                                                            aria-label="Menu item"><span
                                                                                                class="elementor-widget-cmsmasters-offcanvas__item-text">Mortgage</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8986">
                                                                                <a href="{{ route('about') }}"
                                                                                    class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"
                                                                                    aria-label="Menu item"><span
                                                                                        class="elementor-widget-cmsmasters-offcanvas__item-text">About
                                                                                        Us</span></a>
                                                                            </li>
                                                                            <li
                                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8987">
                                                                                <a href="{{ route('contacts') }}"
                                                                                    class=" elementor-widget-cmsmasters-offcanvas__item elementor-widget-cmsmasters-offcanvas__main-item"
                                                                                    aria-label="Menu item"><span
                                                                                        class="elementor-widget-cmsmasters-offcanvas__item-text">Contacts</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-widget-cmsmasters-offcanvas__custom-container elementor-repeater-item-caf699a cmsmasters-box-down-true">
                                                            <div
                                                                class="elementor-widget-cmsmasters-offcanvas__custom-container-cont">
                                                                <div
                                                                    class="elementor-widget-cmsmasters-offcanvas__custom-container-cont-inner">
                                                                    <div data-elementor-type="section"
                                                                        data-elementor-id="52"
                                                                        class="elementor elementor-52 cmsmasters-location-cmsmasters_header cmsmasters-header-position-absolute-">
                                                                        <div class="elementor-inner">
                                                                            <div class="elementor-section-wrap">
                                                                                <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-4dbcb462 elementor-section-full_width elementor-section-height-default elementor-section-height-default cmsmasters-block-default"
                                                                                    data-id="4dbcb462"
                                                                                    data-element_type="section">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-31007766"
                                                                                            data-id="31007766"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <section
                                                                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3c53dbf4 elementor-section-full_width elementor-section-height-default elementor-section-height-default cmsmasters-block-default"
                                                                                                    data-id="3c53dbf4"
                                                                                                    data-element_type="section">
                                                                                                    <div
                                                                                                        class="elementor-container elementor-column-gap-narrow">
                                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7840e64"
                                                                                                            data-id="7840e64"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-6a56162d cmsmasters-button-align-justify cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button"
                                                                                                                    data-id="6a56162d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="cmsmasters-button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-widget-cmsmasters-button__button-container">
                                                                                                                            <div
                                                                                                                                class="elementor-widget-cmsmasters-button__button-container-inner">
                                                                                                                                <a href="{{ route('openaccount') }}"
                                                                                                                                    class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm"
                                                                                                                                    role="button"><span
                                                                                                                                        class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span
                                                                                                                                            class="elementor-widget-cmsmasters-button__text">log
                                                                                                                                            in</span></span></a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-48627638"
                                                                                                            data-id="48627638"
                                                                                                            data-element_type="column">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <div class="elementor-element elementor-element-10eab328 cmsmasters-button-align-justify cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-button"
                                                                                                                    data-id="10eab328"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="cmsmasters-button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-widget-cmsmasters-button__button-container">
                                                                                                                            <div
                                                                                                                                class="elementor-widget-cmsmasters-button__button-container-inner">
                                                                                                                                <a href="{{ route('openaccount') }}"
                                                                                                                                    class="cmsmasters-button-link elementor-widget-cmsmasters-button__button cmsmasters-icon-view- cmsmasters-icon-shape- cmsmasters-button-size-sm"
                                                                                                                                    role="button"><span
                                                                                                                                        class="elementor-widget-cmsmasters-button__content-wrapper cmsmasters-align-icon-"><span
                                                                                                                                            class="elementor-widget-cmsmasters-button__text">Register</span></span></a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <div class="elementor-element elementor-element-5b2e1969 cmsmasters-search-type-classic cmsmasters-submit-button-view-button cmsmasters-form-input-icon-no cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-search"
                                                                                                    data-id="5b2e1969"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;type_of_search&quot;:&quot;classic&quot;}"
                                                                                                    data-widget_type="cmsmasters-search.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-widget-cmsmasters-search__container">
                                                                                                            <form
                                                                                                                role="search"
                                                                                                                method="get"
                                                                                                                class="elementor-widget-cmsmasters-search__form "
                                                                                                                action="{{ url('/') }}/">
                                                                                                                <div
                                                                                                                    class="elementor-widget-cmsmasters-search__form-container cmsmasters-submit-button-view-button cmsmasters-buttons-type-icon">
                                                                                                                    <input
                                                                                                                        type="search"
                                                                                                                        class="elementor-widget-cmsmasters-search__field "
                                                                                                                        value=""
                                                                                                                        name="s"
                                                                                                                        placeholder="Search..."><button
                                                                                                                        type="submit"
                                                                                                                        class="elementor-widget-cmsmasters-search__submit"><span
                                                                                                                            class="elementor-widget-cmsmasters-search__submit-icon"><i
                                                                                                                                class="cmsmsdemo-icon- cmsms-demo-icon-search"></i></span></button>
                                                                                                                </div>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                            style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                            style="top: 0px; height: 0px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-widget-cmsmasters-offcanvas__container__overlay">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @yield('content')


    <div data-elementor-type="cmsmasters_footer" data-elementor-id="59"
        class="elementor elementor-59 cmsmasters-location-cmsmasters_footer cmsmasters-header-position-absolute-">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-3e8ce6c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default cmsmasters-block-default"
                    data-id="3e8ce6c6" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5e11b477"
                            data-id="5e11b477" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-e117605 cmsmasters-logo-mobile-alignment-center cmsmasters-logo-type-image cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-site-logo"
                                    data-id="e117605" data-element_type="widget"
                                    data-widget_type="cmsmasters-site-logo.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-widget-cmsmasters-site-logo__container">
                                            <div class="elementor-widget-cmsmasters-site-logo__image-container"><a
                                                    href="{{ url('/') }}"
                                                    class="elementor-widget-cmsmasters-site-logo__link"
                                                    rel="nofollow"><img
                                                        src="{{ url('/') }}/wp-content/uploads/sites/3/2021/11/logo_footer-1.svg"
                                                        alt="Solvent" title="Solvent"
                                                        class="cmsmasters-lazyload-disabled elementor-widget-cmsmasters-site-logo__img elementor-widget-cmsmasters-site-logo-main"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6e9e7f31 elementor-widget__width-initial elementor-widget-tablet__width-inherit cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading"
                                    data-id="6e9e7f31" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">With affordable fixed
                                            payments, use your personal loan to fund a major purchase,
                                            pay off credit cards.</p>
                                        <p style="margin-top: 24px;">
                                            <a href="{{ route('contacts') }}" style="color: #ffffff;"
                                                onMouseOver="this.style.color='green'"
                                                onMouseOut="this.style.color='white'">
                                                <h3>Email Us</h3>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1a42dd52"
                            data-id="1a42dd52" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2a2cd626 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading"
                                    data-id="2a2cd626" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">Information</h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-764968e7 cmsmasters-widget-mobile-align-center cmsmasters-widget-layout-row cmsmasters-widget-align-stretch cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list"
                                    data-id="764968e7" data-element_type="widget"
                                    data-widget_type="cmsmasters-icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="cmsmasters-widget-icon-list-items">
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('services') }}">Our
                                                                Services</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('contacts') }}">Contacts</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('about') }}">About</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-75f8f4e7"
                            data-id="75f8f4e7" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-11f189b4 cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading"
                                    data-id="11f189b4" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">Services</h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ed9da9a cmsmasters-widget-mobile-align-center cmsmasters-widget-layout-row cmsmasters-widget-align-stretch cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list"
                                    data-id="ed9da9a" data-element_type="widget"
                                    data-widget_type="cmsmasters-icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="cmsmasters-widget-icon-list-items">
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('commercial') }}">Wealth
                                                                Management</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('personal') }}">Checking
                                                                Accounts</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('business') }}">Credit
                                                                Cards</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('mortgages') }}">Mortgages</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('mobilepayments') }}">Mobile
                                                                Banking</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('moneytransfers') }}">Money
                                                                Transfers</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('loans') }}">Personal
                                                                Loans</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('personal') }}">Savings
                                                                Accounts</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('investments') }}">Investments</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-3e6c5902"
                            data-id="3e6c5902" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-30f8cc7e cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading"
                                    data-id="30f8cc7e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">Help</h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-145c927e cmsmasters-widget-mobile-align-center cmsmasters-widget-layout-row cmsmasters-widget-align-stretch cmsmasters-widget-direction-default cmsmasters-widget-marker-element-icon cmsmasters-widget-marker-view-default cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-icon-list cmsmasters-widget-icon-list"
                                    data-id="145c927e" data-element_type="widget"
                                    data-widget_type="cmsmasters-icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="cmsmasters-widget-icon-list-items">
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span class="cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('contacts') }}">Support</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('security') }}">Security</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('services') }}">Service
                                                                status</a> </span>
                                                    </span>
                                                </span>
                                            </li>

                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('insurancesupport') }}">Digital
                                                                Banking</a> </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="cmsmasters-widget-icon-list-item">
                                                <span class="cmsmasters-widget-icon-list-item-text-wrap">
                                                    <span
                                                        class="cmsmasters-widget-icon-list-item-text-inner active-link-item">
                                                        <span
                                                            class="cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text cmsmasters-widget-icon-list-item-text">
                                                            <a href="{{ route('contacts') }}">Ways
                                                                to bank</a> </span>
                                                    </span>
                                                </span>
                                            </li>



                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-574834f7 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle cmsmasters-block-default"
                    data-id="574834f7" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b0c0f86"
                            data-id="2b0c0f86" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-52c23ae8 elementor-widget__width-initial cmsmasters-line-clamp-no cmsmasters-color-variation-default cmsmasters-pointer-none cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-cmsmasters-title cmsmasters-widget-title"
                                    data-id="52c23ae8" data-element_type="widget"
                                    data-widget_type="cmsmasters-title.default">
                                    <div class="elementor-widget-container">
                                        <div class="cmsmasters-widget-title__heading"><a href="/"
                                                class="">{{ $set->site_name }}</a></div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-467506ee elementor-widget__width-initial cmsmasters-block-default cmsmasters-sticky-default elementor-widget elementor-widget-heading"
                                    data-id="467506ee" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                            ©{{ date('Y') }} - All Rights
                                            Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div><span class="cmsmasters-responsive-width"></span><!--googleoff: all-->
    <div id="cookie-law-info-bar" data-nosnippet="true" data-cli-style="cli-style-v2"
        style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-family: inherit; bottom: 0px; position: fixed; display: none;">
        <span>
            <div class="cli-bar-container cli-style-v2">
                <div class="cli-bar-message">We use cookies on our website to give you the most relevant experience by
                    remembering your preferences and repeat visits. By clicking “Accept All”, you consent to the use of
                    ALL the cookies. However, you may visit "Cookie Settings" to provide a controlled consent.</div>
                <div class="cli-bar-btn_container"><a role="button"
                        class="medium cli-plugin-button cli-plugin-main-button cli_settings_button"
                        style="margin: 0px 5px 0px 0px; color: rgb(51, 51, 51); background-color: rgb(222, 223, 224);">Cookie
                        Settings</a><a id="wt-cli-accept-all-btn" role="button" data-cli_action="accept_all"
                        class="wt-cli-element medium cli-plugin-button wt-cli-accept-all-btn cookie_action_close_header cli_action_button"
                        style="color: rgb(255, 255, 255); background-color: rgb(97, 162, 41);">Accept All</a></div>
            </div>
        </span>
    </div>
    <div id="cookie-law-info-again" data-nosnippet="true"
        style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); position: fixed; font-family: inherit; width: auto; bottom: 0px; right: 100px; display: none;">
        <span id="cookie_hdr_showagain">Manage consent</span>
    </div>
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
        aria-labelledby="cliSettingsPopup" aria-hidden="true">
        <div class="cli-modal-dialog" role="document">
            <div class="cli-modal-content cli-bar-popup">
                <button type="button" class="cli-modal-close" id="cliModalClose">
                    <svg class="" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                        </path>
                        <path d="M0 0h24v24h-24z" fill="none"></path>
                    </svg>
                    <span class="wt-cli-sr-only">Close</span>
                </button>
                <div class="cli-modal-body">
                    <div class="cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-privacy-overview">
                                    <h4>Privacy Overview</h4>
                                    <div class="cli-privacy-content">
                                        <div class="cli-privacy-content-text">This website uses cookies to improve your
                                            experience while you navigate through the website. Out of these, the cookies
                                            that are categorized as necessary are stored on your browser as they are
                                            essential for the working of basic functionalities of the ...</div>
                                    </div>
                                    <a class="cli-privacy-readmore" aria-label="Show more" role="button"
                                        data-readmore-text="Show more" data-readless-text="Show less"></a>
                                </div>
                            </div>
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="necessary" data-toggle="cli-toggle-tab">
                                            Necessary </a>
                                        <div class="wt-cli-necessary-checkbox">
                                            <input type="checkbox" class="cli-user-preference-checkbox"
                                                id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                                checked="checked">
                                            <label class="form-check-label"
                                                for="wt-cli-checkbox-necessary">Necessary</label>
                                        </div>
                                        <span class="cli-necessary-caption">Always Enabled</span>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="necessary">
                                            <div class="wt-cli-cookie-description">
                                                Necessary cookies are absolutely essential for the website to function
                                                properly. These cookies ensure basic functionalities and security
                                                features of the website, anonymously.
                                                <table class="cookielawinfo-row-cat-table cookielawinfo-winter">
                                                    <thead>
                                                        <tr>
                                                            <th class="cookielawinfo-column-1">Cookie</th>
                                                            <th class="cookielawinfo-column-3">Duration</th>
                                                            <th class="cookielawinfo-column-4">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-analytics</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category
                                                                "Analytics".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-functional</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by
                                                                GDPR
                                                                cookie consent to record the user consent for the
                                                                cookies in the category "Functional".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-necessary</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookies is used to store
                                                                the user consent for the cookies in the category
                                                                "Necessary".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-others</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category "Other.
                                                            </td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">
                                                                cookielawinfo-checkbox-performance</td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">This cookie is set by
                                                                GDPR Cookie Consent plugin. The cookie is used to store
                                                                the user consent for the cookies in the category
                                                                "Performance".</td>
                                                        </tr>
                                                        <tr class="cookielawinfo-row">
                                                            <td class="cookielawinfo-column-1">viewed_cookie_policy
                                                            </td>
                                                            <td class="cookielawinfo-column-3">11 months</td>
                                                            <td class="cookielawinfo-column-4">The cookie is set by
                                                                the
                                                                GDPR Cookie Consent plugin and is used to store whether
                                                                or not user has consented to the use of cookies. It does
                                                                not store any personal data.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="functional" data-toggle="cli-toggle-tab">
                                            Functional </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-functional"
                                                class="cli-user-preference-checkbox" data-id="checkbox-functional">
                                            <label for="wt-cli-checkbox-functional" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Functional</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="functional">
                                            <div class="wt-cli-cookie-description">
                                                Functional cookies help to perform certain functionalities like sharing
                                                the content of the website on social media platforms, collect feedbacks,
                                                and other third-party features.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="performance" data-toggle="cli-toggle-tab">
                                            Performance </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-performance"
                                                class="cli-user-preference-checkbox" data-id="checkbox-performance">
                                            <label for="wt-cli-checkbox-performance" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Performance</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="performance">
                                            <div class="wt-cli-cookie-description">
                                                Performance cookies are used to understand and analyze the key
                                                performance indexes of the website which helps in delivering a better
                                                user experience for the visitors.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="analytics" data-toggle="cli-toggle-tab">
                                            Analytics </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-analytics"
                                                class="cli-user-preference-checkbox" data-id="checkbox-analytics">
                                            <label for="wt-cli-checkbox-analytics" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Analytics</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="analytics">
                                            <div class="wt-cli-cookie-description">
                                                Analytical cookies are used to understand how visitors interact with the
                                                website. These cookies help provide information on metrics the number of
                                                visitors, bounce rate, traffic source, etc.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="advertisement" data-toggle="cli-toggle-tab">
                                            Advertisement </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-advertisement"
                                                class="cli-user-preference-checkbox"
                                                data-id="checkbox-advertisement">
                                            <label for="wt-cli-checkbox-advertisement" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Advertisement</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="advertisement">
                                            <div class="wt-cli-cookie-description">
                                                Advertisement cookies are used to provide visitors with relevant ads and
                                                marketing campaigns. These cookies track visitors across websites and
                                                collect information to provide customized ads.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cli-tab-section">
                                    <div class="cli-tab-header">
                                        <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                            data-target="others" data-toggle="cli-toggle-tab">
                                            Others </a>
                                        <div class="cli-switch">
                                            <input type="checkbox" id="wt-cli-checkbox-others"
                                                class="cli-user-preference-checkbox" data-id="checkbox-others">
                                            <label for="wt-cli-checkbox-others" class="cli-slider"
                                                data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                    class="wt-cli-sr-only">Others</span></label>
                                        </div>
                                    </div>
                                    <div class="cli-tab-content">
                                        <div class="cli-tab-pane cli-fade" data-id="others">
                                            <div class="wt-cli-cookie-description">
                                                Other uncategorized cookies are those that are being analyzed and have
                                                not been classified into a category as yet.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cli-modal-footer">
                    <div class="wt-cli-element cli-container-fluid cli-tab-container">
                        <div class="cli-row">
                            <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                                <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0"
                                        data-cli-action="accept"
                                        class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE
                                        &amp; ACCEPT</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <!--googleon: all-->
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel="stylesheet" id="elementor-icons-fa-regular-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-52-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/css/post-52.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="elementor-post-55-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/css/post-55.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="forminator-module-css-22-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/forminator/22_afdf0d603f1b4c7a522aa90ebb5e027f/css/style-22.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="forminator-icons-css"
        href="{{ url('/') }}/wp-content/plugins/forminator/assets/forminator-ui/css/forminator-icons.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="forminator-utilities-css"
        href="{{ url('/') }}/wp-content/plugins/forminator/assets/forminator-ui/css/src/forminator-utilities.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="forminator-forms-default-base-css"
        href="{{ url('/') }}/wp-content/plugins/forminator/assets/forminator-ui/css/src/form/forminator-form-default.base.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="forminator-forms-default-full-css"
        href="{{ url('/') }}/wp-content/plugins/forminator/assets/forminator-ui/css/src/form/forminator-form-default.full.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="buttons-css" href="{{ url('/') }}/wp-includes/css/buttons.min.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-118-css"
        href="{{ url('/') }}/wp-content/uploads/sites/3/elementor/css/post-118.css" type="text/css"
        media="all">
    <link rel="stylesheet" id="cookie-law-info-table-css"
        href="{{ url('/') }}/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-table.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="e-animations-css"
        href="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/animations/animations.min.css"
        type="text/css" media="all">
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0e-5,
                "session": 30,
                "ajaxurl": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": true
            },
            "fields": {
                "source_type": "current.typ",
                "referrer": "current_add.rf",
                "utm_campaign": "current.cmp",
                "utm_source": "current.src",
                "utm_medium": "current.mdm",
                "utm_content": "current.cnt",
                "utm_id": "current.id",
                "utm_term": "current.trm",
                "session_entry": "current_add.ep",
                "session_start_time": "current_add.fd",
                "session_pages": "session.pgs",
                "session_count": "udata.vst",
                "user_agent": "udata.uag"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/lazysizes/lazysizes.min.js"
        id="lazysizes-js"></script>
    <script type="text/javascript" src="{{ url('/') }}/wp-includes/js/imagesloaded.min.js" id="imagesloaded-js">
    </script>
    <script type="text/javascript" id="multibank-frontend-js-extra">
        /* <![CDATA[ */
        var cmsmasters_localize_vars = {
            "tablet_breakpoint": "1025",
            "tablet_max_breakpoint": "1024",
            "mobile_breakpoint": "768",
            "mobile_max_breakpoint": "767",
            "assets_data": {
                "script": {
                    "swiper": {
                        "src": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-content\/themes\/multibank\/assets\/lib\/swiper\/js\/swiper.min.js"
                    }
                }
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ url('/') }}/wp-content/themes/multibank/assets/js/frontend.min.js"
        id="multibank-frontend-js"></script>
    <script type="text/javascript" src="{{ url('/') }}/wp-content/themes/multibank-child/assets/js/script.js"
        id="multibank-child-script-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"
        id="perfect-scrollbar-js-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/jquery.validate.min.js"
        id="forminator-jquery-validate-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/forminator-ui/js/forminator-form.min.js"
        id="forminator-form-js"></script>
    <script type="text/javascript" id="forminator-front-scripts-js-extra">
        /* <![CDATA[ */
        var ForminatorFront = {
            "ajaxUrl": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-admin\/admin-ajax.php",
            "cform": {
                "processing": "Submitting form, please wait",
                "error": "An error occurred while processing the form. Please try again",
                "upload_error": "An upload error occurred while processing the form. Please try again",
                "pagination_prev": "Previous",
                "pagination_next": "Next",
                "pagination_go": "Submit",
                "gateway": {
                    "processing": "Processing payment, please wait",
                    "paid": "Success! Payment confirmed. Submitting form, please wait",
                    "error": "Error! Something went wrong when verifying the payment"
                },
                "captcha_error": "Invalid CAPTCHA",
                "no_file_chosen": "No file chosen",
                "intlTelInput_utils_script": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-content\/plugins\/forminator\/assets\/js\/library\/intlTelInputUtils.js",
                "process_error": "Please try again"
            },
            "poll": {
                "processing": "Submitting vote, please wait",
                "error": "An error occurred saving the vote. Please try again"
            },
            "quiz": {
                "view_results": "View Results"
            },
            "select2": {
                "load_more": "Loading more results\u2026",
                "no_result_found": "No results found",
                "searching": "Searching\u2026",
                "loaded_error": "The results could not be loaded."
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ url('/') }}/wp-content/plugins/forminator/build/front/front.multi.min.js"
        id="forminator-front-scripts-js"></script>

    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element2');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>

    <script type="text/javascript" id="forminator-front-scripts-js-after">
        /* <![CDATA[ */
        (function($, document, window) {
            "use strict";
            (function() {
                $(function() {
                    if (window.elementorFrontend) {
                        if (typeof elementorFrontend.hooks !== "undefined") {
                            elementorFrontend.hooks.addAction("frontend/element_ready/global", function(
                                $scope) {
                                if ($scope.find("#forminator-module-22").length > 0) {
                                    if (typeof($.fn.forminatorLoader) !== 'undefined') {
                                        renderForminatorAjax(22, {
                                            "action": "forminator_load_form",
                                            "type": "forminator_forms",
                                            "id": 22,
                                            "render_id": 0,
                                            "is_preview": false,
                                            "preview_data": [],
                                            "last_submit_data": [],
                                            "nonce": "2e95f26b79",
                                            "extra": {
                                                "_wp_http_referer": "",
                                                "page_id": 7199,
                                                "referer_url": ""
                                            }
                                        }, 0);
                                    }
                                }
                            });
                        }
                        // Elementor Popup
                        $(document).on('elementor/popup/show', () => {
                            if (typeof($.fn.forminatorLoader) !== 'undefined') {
                                renderForminatorAjax(22, {
                                    "action": "forminator_load_form",
                                    "type": "forminator_forms",
                                    "id": 22,
                                    "render_id": 0,
                                    "is_preview": false,
                                    "preview_data": [],
                                    "last_submit_data": [],
                                    "nonce": "2e95f26b79",
                                    "extra": {
                                        "_wp_http_referer": "",
                                        "page_id": 7199,
                                        "referer_url": ""
                                    }
                                }, 0);
                            }
                        });
                    }

                    if (typeof($.fn.forminatorLoader) === 'undefined') {
                        console.log('forminator scripts not loaded');
                    } else {
                        renderForminatorAjax(22, {
                            "action": "forminator_load_form",
                            "type": "forminator_forms",
                            "id": 22,
                            "render_id": 0,
                            "is_preview": false,
                            "preview_data": [],
                            "last_submit_data": [],
                            "nonce": "2e95f26b79",
                            "extra": {
                                "_wp_http_referer": "",
                                "page_id": 7199,
                                "referer_url": ""
                            }
                        }, 0);
                    }
                });

                function renderForminatorAjax(id, frontLoaderConfig, renderId) {
                    var front_loader_config = frontLoaderConfig;
                    front_loader_config.extra.referer_url = document.referrer;
                    $('#forminator-module-' + id + '[data-forminator-render="' + renderId + '"]')
                        .forminatorLoader(front_loader_config);
                }
            })();
        }(jQuery, document, window));
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/inputmask.min.js"
        id="forminator-inputmask-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/jquery.inputmask.min.js"
        id="forminator-jquery-inputmask-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/inputmask.binding.js"
        id="forminator-inputmask-binding-js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGKYF0r2-jl1P0aUeqiD5kBWdJt5nwWac&amp;ver=1.0.0"
        id="google-maps-api-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/js/webpack.runtime.min.js"
        id="cmsmasters-webpack-runtime-js"></script>
    <script type="text/javascript" src="{{ url('/') }}/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/basicScroll/basicScroll.min.js"
        id="basicScroll-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/vanilla-tilt/vanilla-tilt.min.js"
        id="vanilla-tilt-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/anime/anime.min.js"
        id="anime-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/hc-sticky/hc-sticky.min.js"
        id="hc-sticky-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/lib/headroom/headroom.min.js"
        id="headroom-js"></script>
    <script type="text/javascript" id="cmsmasters-frontend-js-before">
        /* <![CDATA[ */
        var elementorCmsmastersFrontendConfig = {
            "woocommerce": {
                "default_orderby": "menu_order"
            },
            "i18n": {
                "cmsmasters_template_id": "Template",
                "instagram": {
                    "img_alt_text": "Instagram Post"
                },
                "meta_data": {
                    "metadata_unlike": "Unlike",
                    "metadata_like": "Like"
                },
                "edit_element": "Edit %s",
                "saved_section": "Section Template",
                "saved_page": "Page Template",
                "blog_template_id": "Template",
                "post_featured_template_id": "Featured Template",
                "post_regular_template_id": "Regular Template",
                "template_id": "Template"
            },
            "instagram_access_token": "",
            "instagram_user_id": "",
            "instagram_account_type": "personal",
            "nonces": {
                "social_counter": "db5cb40ca8",
                "meta_data": "91e6154f01",
                "ajax_widget": "723189fba1"
            },
            "version": "1.11.9",
            "ajaxurl": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-admin\/admin-ajax.php",
            "urls": {
                "assets": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-content\/plugins\/cmsmasters-elementor-addon\/assets\/",
                "modules": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-content\/plugins\/cmsmasters-elementor-addon\/modules\/",
                "cmsmasters_assets": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-content\/plugins\/cmsmasters-elementor-addon\/assets\/"
            },
            "multisite_current_blog_id": 3,
            "cmsmasters_version": "1.11.9",
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/cmsmasters-elementor-addon/assets/js/frontend.min.js"
        id="cmsmasters-frontend-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="{{ url('/') }}/wp-includes/js/jquery/ui/core.min.js" id="jquery-ui-core-js">
    </script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js" id="swiper-js"></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js" id="share-link-js">
    </script>
    <script type="text/javascript" src="{{ url('/') }}/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js"
        id="elementor-dialog-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.20.3",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "e_swiper_latest": true,
                "block_editor_assets_optimize": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_image_loading_optimization": true
            },
            "urls": {
                "assets": "https:\/\/multibank.cmsmasters.net\/alternative\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 7199,
                "title": "Alternative%20%E2%80%93%20Multibank%20%E2%80%93%20Business%20and%20Finance%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ url('/') }}/wp-content/plugins/elementor/assets/js/frontend.min.js"
        id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js"
        id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>




    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/inputmask.min.js?ver=1.29.2" async=""
        defer=""></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/jquery.inputmask.min.js?ver=1.29.2"
        async="" defer=""></script>
    <script type="text/javascript"
        src="{{ url('/') }}/wp-content/plugins/forminator/assets/js/library/inputmask.binding.js?ver=1.29.2" async=""
        defer=""></script>
</body>

</html>
