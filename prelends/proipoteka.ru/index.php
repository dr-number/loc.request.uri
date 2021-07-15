<!doctype html>
<!--[if lt IE 10]>
<html class="ie9 no-js" lang="ru-RU">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<html class="no-js" lang="ru-RU"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/vc_shortcodes-custom-css.css">

    <?php
    echo $_SERVER['DOCUMENT_ROOT'];
        include_once "php/metric-api.php";
        renderMetrika();
    ?>

    <!-- This site is optimized with the Yoast SEO plugin v14.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Ипотечное агентство ПРОИпотека</title>
    <meta name="description"
          content="Помощь в получении ипотеки. Сопровождение сделки. Помощь в выборе застройщика. Оплата после получения кредита, одобрение заявки за 2 дня.">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="index.php">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ипотечное агентство ПРОИпотека">
    <meta property="og:description"
          content="Помощь в получении ипотеки. Сопровождение сделки. Помощь в выборе застройщика. Оплата после получения кредита, одобрение заявки за 2 дня.">
<!--    <meta property="og:url" content="https://proipoteka.ru/">-->
    <meta property="og:site_name" content="Ипотечное агентство ПРОИпотека">
    <meta property="article:modified_time" content="2021-02-15T10:14:13+00:00">
    <meta name="twitter:card" content="summary_large_image">

<!--    <script type="application/ld+json" class="yoast-schema-graph">{-->
<!--        "@context": "https://schema.org",-->
<!--        "@graph": [-->
<!--            {-->
<!--                "@type": "Organization",-->
<!--                "@id": "https://proipoteka.ru/#organization",-->
<!--                "name": "\u0418\u043f\u043e\u0442\u0435\u0447\u043d\u043e\u0435 \u0430\u0433\u0435\u043d\u0442\u0441\u0442\u0432\u043e \u041f\u0420\u041e\u0418\u043f\u043e\u0442\u0435\u043a\u0430",-->
<!--                "url": "https://proipoteka.ru/",-->
<!--                "sameAs": [],-->
<!--                "logo": {-->
<!--                    "@type": "ImageObject",-->
<!--                    "@id": "https://proipoteka.ru/#logo",-->
<!--                    "inLanguage": "ru-RU",-->
<!--                    "url": "https://proipoteka.ruwp-content/uploads/2019/09/41.png",-->
<!--                    "width": 678,-->
<!--                    "height": 267,-->
<!--                    "caption": "\u0418\u043f\u043e\u0442\u0435\u0447\u043d\u043e\u0435 \u0430\u0433\u0435\u043d\u0442\u0441\u0442\u0432\u043e \u041f\u0420\u041e\u0418\u043f\u043e\u0442\u0435\u043a\u0430"-->
<!--                },-->
<!--                "image": {-->
<!--                    "@id": "https://proipoteka.ru/#logo"-->
<!--                }-->
<!--            },-->
<!--            {-->
<!--                "@type": "WebSite",-->
<!--                "@id": "https://proipoteka.ru/#website",-->
<!--                "url": "https://proipoteka.ru/",-->
<!--                "name": "\u0418\u043f\u043e\u0442\u0435\u0447\u043d\u043e\u0435 \u0430\u0433\u0435\u043d\u0442\u0441\u0442\u0432\u043e \u041f\u0420\u041e\u0418\u043f\u043e\u0442\u0435\u043a\u0430",-->
<!--                "description": "\u041f\u043e\u043c\u043e\u0449\u044c \u0432 \u043f\u043e\u043b\u0443\u0447\u0435\u043d\u0438\u0438 \u0438\u043f\u043e\u0442\u0435\u043a\u0438. \u0421\u043e\u043f\u0440\u043e\u0432\u043e\u0436\u0434\u0435\u043d\u0438\u0435 \u0441\u0434\u0435\u043b\u043a\u0438. \u041f\u043e\u043c\u043e\u0449\u044c \u0432 \u0432\u044b\u0431\u043e\u0440\u0435 \u0437\u0430\u0441\u0442\u0440\u043e\u0439\u0449\u0438\u043a\u0430. \u041e\u043f\u043b\u0430\u0442\u0430 \u043f\u043e\u0441\u043b\u0435 \u043f\u043e\u043b\u0443\u0447\u0435\u043d\u0438\u044f \u043a\u0440\u0435\u0434\u0438\u0442\u0430, \u043e\u0434\u043e\u0431\u0440\u0435\u043d\u0438\u0435 \u0437\u0430\u044f\u0432\u043a\u0438 \u0437\u0430 2 \u0434\u043d\u044f.",-->
<!--                "publisher": {-->
<!--                    "@id": "https://proipoteka.ru/#organization"-->
<!--                },-->
<!--                "potentialAction": [-->
<!--                    {-->
<!--                        "@type": "SearchAction",-->
<!--                        "target": "https://proipoteka.ru/?s={search_term_string}",-->
<!--                        "query-input": "required name=search_term_string"-->
<!--                    }-->
<!--                ],-->
<!--                "inLanguage": "ru-RU"-->
<!--            },-->
<!--            {-->
<!--                "@type": "WebPage",-->
<!--                "@id": "https://proipoteka.ru/#webpage",-->
<!--                "url": "https://proipoteka.ru/",-->
<!--                "name": "\u0418\u043f\u043e\u0442\u0435\u0447\u043d\u043e\u0435 \u0430\u0433\u0435\u043d\u0442\u0441\u0442\u0432\u043e \u041f\u0420\u041e\u0418\u043f\u043e\u0442\u0435\u043a\u0430",-->
<!--                "isPartOf": {-->
<!--                    "@id": "https://proipoteka.ru/#website"-->
<!--                },-->
<!--                "about": {-->
<!--                    "@id": "https://proipoteka.ru/#organization"-->
<!--                },-->
<!--                "datePublished": "2017-10-28T13:46:25+00:00",-->
<!--                "dateModified": "2021-02-15T10:14:13+00:00",-->
<!--                "description": "\u041f\u043e\u043c\u043e\u0449\u044c \u0432 \u043f\u043e\u043b\u0443\u0447\u0435\u043d\u0438\u0438 \u0438\u043f\u043e\u0442\u0435\u043a\u0438. \u0421\u043e\u043f\u0440\u043e\u0432\u043e\u0436\u0434\u0435\u043d\u0438\u0435 \u0441\u0434\u0435\u043b\u043a\u0438. \u041f\u043e\u043c\u043e\u0449\u044c \u0432 \u0432\u044b\u0431\u043e\u0440\u0435 \u0437\u0430\u0441\u0442\u0440\u043e\u0439\u0449\u0438\u043a\u0430. \u041e\u043f\u043b\u0430\u0442\u0430 \u043f\u043e\u0441\u043b\u0435 \u043f\u043e\u043b\u0443\u0447\u0435\u043d\u0438\u044f \u043a\u0440\u0435\u0434\u0438\u0442\u0430, \u043e\u0434\u043e\u0431\u0440\u0435\u043d\u0438\u0435 \u0437\u0430\u044f\u0432\u043a\u0438 \u0437\u0430 2 \u0434\u043d\u044f.",-->
<!--                "inLanguage": "ru-RU",-->
<!--                "potentialAction": [-->
<!--                    {-->
<!--                        "@type": "ReadAction",-->
<!--                        "target": [-->
<!--                            "https://proipoteka.ru/"-->
<!--                        ]-->
<!--                    }-->
<!--                ]-->
<!--            }-->
<!--        ]-->
<!--    }</script>-->
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='index-1.htm'>
<!--    <link rel='dns-prefetch' href='//fonts.googleapis.com'>-->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="application-name" content="Ипотечное агентство ПРОИпотека">
    <link rel='stylesheet' id='cnss_font_awesome_css-css'
          href='wp-content/plugins/easy-social-icons/css/font-awesome/css/all.min.css' type='text/css' media='all'>
    <link rel='stylesheet' id='cnss_font_awesome_v4_shims-css'
          href='wp-content/plugins/easy-social-icons/css/font-awesome/css/v4-shims.min.css' type='text/css' media='all'>
    <link rel='stylesheet' id='cnss_css-css' href='wp-content/plugins/easy-social-icons/css/cnss.css' type='text/css'
          media='all'>
    <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='rs-plugin-settings-css' href='wp-content/plugins/revslider/public/assets/css/rs6.css'
          type='text/css' media='all'>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {
        }
    </style>
    <link rel='stylesheet' id='movedo-grve-awesome-fonts-css' href='wp-content/themes/movedo/css/font-awesome.min.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='movedo-grve-theme-style-css' href='wp-content/themes/movedo/css/theme-style.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='movedo-grve-elements-css' href='wp-content/themes/movedo/css/elements.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='movedo-grve-custom-style-css' href='wp-content/themes/movedo/css/responsive.css'
          type='text/css' media='all'>


	<link rel="stylesheet" href="css/movedo-grve-custom-style-inline-css.css">
    <link rel='stylesheet' id='movedo-grve-style-css' href='wp-content/themes/movedo-child/style.css' type='text/css'
          media='all'>
    <!--[if lt IE 9]>
    <link rel='stylesheet' id='vc_lte_ie9-css'
          href='css/vc_lte_ie9.min.css' type='text/css'
          media='screen'/>
    <![endif]-->
    <link rel='stylesheet' id='js_composer_front-css'
          href='wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all'>
    <link rel='stylesheet' id='popup-maker-site-css' href='wp-content/uploads/pum/pum-site-styles.css' type='text/css'
          media='all'>
    <link rel='stylesheet' id='qmn_quiz_template-css'
          href='wp-content/plugins/quiz-master-next/templates/qmn_primary.css' type='text/css' media='all'>
    <link rel='stylesheet' id='qmn_quiz_animation_style-css' href='wp-content/plugins/quiz-master-next/css/animate.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='qmn_quiz_common_style-css' href='wp-content/plugins/quiz-master-next/css/common.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='jquery-redmond-theme-css' href='wp-content/plugins/quiz-master-next/css/jquery-ui.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='jquery-ui-slider-rtl-css-css'
          href='wp-content/plugins/quiz-master-next/css/jquery.ui.slider-rtl.css' type='text/css' media='all'>
    <link rel='stylesheet' id='qsm_model_css-css' href='wp-content/plugins/quiz-master-next/css/qsm-admin.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='ulp-css' href='wp-content/plugins/layered-popups/css/style.min.css' type='text/css'
          media='all'>
    <link rel='stylesheet' id='ulp-link-buttons-css' href='wp-content/plugins/layered-popups/css/link-buttons.min.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='animate.css-css' href='wp-content/plugins/layered-popups/css/animate.min.css'
          type='text/css' media='all'>
    <link rel='stylesheet' id='spinkit-css' href='wp-content/plugins/layered-popups/css/spinkit.min.css' type='text/css'
          media='all'>
    <link rel='stylesheet' id='redux-google-fonts-movedo_grve_options-css'
          href='css/css.css?family=Roboto%3A400%2C700%2C300%7CPoppins%3A700%7CHind+Siliguri%3A400&#038;subset=cyrillic'
          type='text/css' media='all'>

    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.maskedinput.min.js'></script>

    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js' id='jquery-ui-widget-js'></script>
    <script type='text/javascript' src='wp-content/plugins/easy-social-icons/js/cnss.js' id='cnss_js-js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js'
            id='tp-tools-js'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rs6.min.js'
            id='revmin-js'></script>
    <script type='text/javascript' src='wp-content/themes/movedo/calc.js' id='calc-js'></script>
    <script type='text/javascript' src='wp-content/themes/movedo/js/modernizr.custom.js' id='modernizr-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/position.min.js' id='jquery-ui-position-js'></script>
    <!--[if lt IE 8]>
    <script type='text/javascript' src='wp-includes/js/json2.min.js' id='json2-js'></script>
    <![endif]-->
    <script type='text/javascript' src='wp-includes/js/jquery/ui/tooltip.min.js' id='jquery-ui-tooltip-js'></script>
    <script type='text/javascript' src='wp-content/plugins/quiz-master-next/js/progressbar.min.js'
            id='progress-bar-js'></script>
    <script type='text/javascript' src='wp-content/plugins/quiz-master-next/js/jquery-ui.js'
            id='jquery-ui-slider-js-js'></script>
    <script type='text/javascript' src='wp-content/plugins/quiz-master-next/js/jquery.ui.slider-rtl.js'
            id='jquery-ui-slider-rtl-js-js'></script>
    <script type='text/javascript' src='ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'
            id='jqueryui-touch-js-js'></script>
    <script type='text/javascript' src='wp-content/plugins/quiz-master-next/js/micromodal.min.js'
            id='qsm_model_js-js'></script>
    <script type='text/javascript' src='wp-includes/js/underscore.min.js' id='underscore-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        /* <![CDATA[ */
        var _wpUtilSettings = {"ajax": {"url": "\/wp-admin\/admin-ajax.php"}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-includes/js/wp-util.min.js' id='wp-util-js'></script>

    <!--
    <script type='text/javascript' id='qsm_quiz-js-extra'>
        /* <![CDATA[ */
        var qmn_ajax_object = {
            "ajaxurl": "https:\/\/proipoteka.ru\/wp-admin\/admin-ajax.php",
            "enable_quick_result_mc": "0",
            "enable_result_after_timer_end": "0",
            "quick_result_correct_text": "<b>Correct!<\/b> You have selected correct answer.",
            "quick_result_wrong_text": "<b>Wrong!<\/b> You have selected wrong answer."
        };
        /* ]]> */
    </script>
    -->
    <script type='text/javascript' src='wp-content/plugins/quiz-master-next/js/qsm-quiz.js' id='qsm_quiz-js'></script>
    <script type='text/javascript' src='ajax/libs/mathjax/2.7.2/MathJax.js' id='math_jax-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.htm.json">
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/279.json">
    <meta name="generator" content="WordPress 5.5.5">
    <style type="text/css">
        ul.cnss-social-icon li.cn-fa-icon a:hover {
            opacity: 0.7 !important;
            color: #ffffff !important;
        }
    </style>
    <!-- Facebook Pixel Code -->
    <!--<script type='text/javascript'>-->
    <!--!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?-->
    <!--n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;-->
    <!--n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;-->
    <!--t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,-->
    <!--document,'script','https://connect.facebook.net/en_US/fbevents.js');-->
    <!--</script>-->
    <!-- End Facebook Pixel Code -->
    <!--<script type='text/javascript'>-->
    <!--  fbq('init', '651164225412906', {}, {-->
    <!--    "agent": "wordpress-5.5.5-2.1.0"-->
    <!--});-->
    <!--</script>-->
    <!--<script type='text/javascript'>-->
    <!--  fbq('track', 'PageView', []);-->
    <!--</script>-->
    <!-- Facebook Pixel Code -->
    <!--<noscript>-->
    <!--<img height="1" width="1" style="display:none" alt="fbpx" src="https://www.facebook.com/tr?id=651164225412906&ev=PageView&noscript=1"><noscript><img height="1" width="1" style="display:none" alt="fbpx" src="https://www.facebook.com/tr?id=651164225412906&ev=PageView&noscript=1"></noscript>-->
    <!--</noscript>-->
    <!-- End Facebook Pixel Code -->
    <style type="text/css">.recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }</style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <meta name="generator"
          content="Powered by Slider Revolution 6.1.0 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <!-- Yandex.Metrika counter -->
    <!--<script type="text/javascript">-->
    <!--   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};-->
    <!--   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})-->
    <!--   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");-->

    <!--   ym(55376593, "init", {-->
    <!--        clickmap:true,-->
    <!--        trackLinks:true,-->
    <!--        accurateTrackBounce:true,-->
    <!--        webvisor:true-->
    <!--   });-->
    <!--</script>-->
    <!--<noscript><div><img data-src="https://mc.yandex.ru/watch/55376593" style="position:absolute; left:-9999px;" alt=""><noscript><img src="watch/55376593/1.gif" style="position:absolute; left:-9999px;" alt=""></noscript></div></noscript>-->
    <!-- /Yandex.Metrika counter -->
    <!-- Google Tag Manager -->
    <!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':-->
    <!--new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],-->
    <!--j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=-->
    <!--'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);-->
    <!--})(window,document,'script','dataLayer','GTM-5LD9NVC');</script>-->
    <!-- End Google Tag Manager -->
    <!--		<script>-->
    <!--			var ulp_custom_handlers = {};-->
    <!--			var ulp_cookie_value = "ilovelencha";-->
    <!--			var ulp_recaptcha_enable = "off";-->
    <!--			var ulp_onload_popup = "";-->
    <!--			var ulp_onload_mode = "none";-->
    <!--			var ulp_onload_period = "5";-->
    <!--			var ulp_onscroll_popup = "";-->
    <!--			var ulp_onscroll_mode = "none";-->
    <!--			var ulp_onscroll_period = "5";-->
    <!--			var ulp_onexit_popup = "";-->
    <!--			var ulp_onexit_mode = "none";-->
    <!--			var ulp_onexit_period = "5";-->
    <!--			var ulp_onidle_popup = "";-->
    <!--			var ulp_onidle_mode = "none";-->
    <!--			var ulp_onidle_period = "5";-->
    <!--			var ulp_onabd_popup = "";-->
    <!--			var ulp_onabd_mode = "none";-->
    <!--			var ulp_onabd_period = "5";-->
    <!--			var ulp_onload_delay = "0";-->
    <!--			var ulp_onload_close_delay = "0";-->
    <!--			var ulp_onscroll_offset = "600";-->
    <!--			var ulp_onidle_delay = "30";-->
    <!--		</script>-->

    <link rel="icon" href="wp-content/uploads/2019/09/cropped-lllloooogggooo-32x32.png" sizes="32x32">
    <link rel="icon" href="wp-content/uploads/2019/09/cropped-lllloooogggooo-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="wp-content/uploads/2019/09/cropped-lllloooogggooo-180x180.png">

<!--    <meta name="msapplication-TileImage"-->
<!--          content="https://proipoteka.ruwp-content/uploads/2019/09/cropped-lllloooogggooo-270x270.png">-->

    <script type="text/javascript">function setREVStartSize(a) {
        try {
            var b, c = document.getElementById(a.c).parentNode.offsetWidth;
            if (c = 0 === c || isNaN(c) ? window.innerWidth : c, a.tabw = void 0 === a.tabw ? 0 : parseInt(a.tabw), a.thumbw = void 0 === a.thumbw ? 0 : parseInt(a.thumbw), a.tabh = void 0 === a.tabh ? 0 : parseInt(a.tabh), a.thumbh = void 0 === a.thumbh ? 0 : parseInt(a.thumbh), a.tabhide = void 0 === a.tabhide ? 0 : parseInt(a.tabhide), a.thumbhide = void 0 === a.thumbhide ? 0 : parseInt(a.thumbhide), a.mh = void 0 === a.mh || "" == a.mh ? 0 : a.mh, "fullscreen" === a.layout || "fullscreen" === a.l) b = Math.max(a.mh, window.innerHeight); else {
                for (var d in a.gw = Array.isArray(a.gw) ? a.gw : [a.gw], a.rl) (void 0 === a.gw[d] || 0 === a.gw[d]) && (a.gw[d] = a.gw[d - 1]);
                for (var d in a.gh = void 0 === a.el || "" === a.el || Array.isArray(a.el) && 0 == a.el.length ? a.gh : a.el, a.gh = Array.isArray(a.gh) ? a.gh : [a.gh], a.rl) (void 0 === a.gh[d] || 0 === a.gh[d]) && (a.gh[d] = a.gh[d - 1]);
                var e, f = Array(a.rl.length), g = 0;
                for (var d in a.tabw = a.tabhide >= c ? 0 : a.tabw, a.thumbw = a.thumbhide >= c ? 0 : a.thumbw, a.tabh = a.tabhide >= c ? 0 : a.tabh, a.thumbh = a.thumbhide >= c ? 0 : a.thumbh, a.rl) f[d] = a.rl[d] < window.innerWidth ? 0 : a.rl[d];
                for (var d in e = f[0], f) e > f[d] && 0 < f[d] && (e = f[d], g = d);
                var h = c > a.gw[g] + a.tabw + a.thumbw ? 1 : (c - (a.tabw + a.thumbw)) / a.gw[g];
                b = a.gh[g] * h + (a.tabh + a.thumbh)
            }
            void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(a.c).height = b, window.rs_init_css.innerHTML += "#" + a.c + "_wrapper { height: " + b + "px }"
        } catch (a) {
            console.log("Failure at Presize of Slider:" + a)
        }
    }</script>
    <style type="text/css" title="dynamic-css" class="options-output">#grve-body {
        background-color: #171A1D;
    }</style>
    <style id="tt-easy-google-font-styles" type="text/css">p {
    }

    h1 {
    }

    h2 {
    }

    h3 {
    }

    h4 {
    }

    h5 {
    }

    h6 {
    }

    asd {
    }
    </style>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
            opacity: 1;
        }</style>
    </noscript>
</head>

<?php
    $data = json_decode(file_get_contents('./json/data.json'));
    $isArticle = isset($_GET['id']);
    $isAllArticles = isset($_GET['allArticles']);
    $isRedirect = isset($_GET['redirect']);

    $isShowSideBar = $isArticle || $isAllArticles;

    $classSidebar = "";
    $styleTop = "";

    if($isShowSideBar) {
        $classSidebar = "clearfix grve-right-sidebar";
         $styleTop = "margin-top: 80px;";
    }
?>

<body id="grve-body"
      class="home page-template-default page page-id-279 grve-vce-ver-3.2 grve-body grve-stretched wpb-js-composer js-comp-ver-6.0.5 vc_responsive">

<?php include_once "components/modal.php"; ?>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="ns.html?id=GTM-5LD9NVC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Theme Wrapper -->
<div id="grve-theme-wrapper" class="" data-mask-layer="2">
    <div id="grve-theme-content">

        <!-- HEADER -->
        <?php include_once "components/header.php"; ?>
        <!-- END HEADER -->


        <!-- CONTENT -->
        <div id="grve-content" class="clearfix <?php print($classSidebar); ?>">
            <div class="grve-content-wrapper" style="<?php print($styleTop); ?>">
                <!-- MAIN CONTENT -->
                <div id="grve-main-content">
                    <div class="grve-main-content-wrapper clearfix">

                        <!-- PAGE CONTENT -->
                        <div id="page-279" class="post-279 page type-page status-publish hentry">

                            <?php
                                if(!$isRedirect && !$isArticle && !$isAllArticles) {
                                    include_once "components/page_main/get_help_credit.php";
                                    include_once "components/page_main/about_help_credit.php";
                                }
                            ?>

                            <!--
                            <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-2x grve-padding-bottom-2x grve-bg-none grve-headings-light grve-desktop-row-hide grve-tablet-row-hide grve-tablet-sm-row-hide grve-mobile-row-hide"
                                 style="background-color:#2b2b2b;color:#ffffff;">
                                <div class="grve-container">
                                    <div class="grve-row grve-bookmark grve-columns-gap-30">
                                        <div class="grve-column wpb_column grve-column-1-3">
                                            <div class="grve-column-wrapper">
                                                <div class="grve-element grve-counter grve-align-center" style="">
                                                    <div class="grve-counter-content">
                                                        <div class="grve-counter-item grve-h1 grve-text-primary-2"><span
                                                                data-thousands-separator-vis=""
                                                                data-thousands-separator="," data-prefix=""
                                                                data-suffix="" data-start-val="0" data-end-val="2"
                                                                data-decimal-points="0"
                                                                data-decimal-separator=".">0</span></div>
                                                        <h4 class="grve-counter-title grve-h4">дня на одобрение</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-column wpb_column grve-column-1-3">
                                            <div class="grve-column-wrapper">
                                                <div class="grve-element grve-counter grve-align-center" style="">
                                                    <div class="grve-counter-content">
                                                        <div class="grve-counter-item grve-h1 grve-text-primary-2"><span
                                                                data-thousands-separator-vis=""
                                                                data-thousands-separator="," data-prefix=""
                                                                data-suffix="%" data-start-val="0" data-end-val="100"
                                                                data-decimal-points="0"
                                                                data-decimal-separator=".">0</span></div>
                                                        <h4 class="grve-counter-title grve-h4">онлайн-заявок
                                                            рассматриваем</h4></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grve-column wpb_column grve-column-1-3">
                                            <div class="grve-column-wrapper">
                                                <div class="grve-element grve-counter grve-align-center" style="">
                                                    <div class="grve-counter-content">
                                                        <div class="grve-counter-item grve-h1 grve-text-primary-2"><span
                                                                data-thousands-separator-vis=""
                                                                data-thousands-separator="," data-prefix=""
                                                                data-suffix="%" data-start-val="0" data-end-val="96"
                                                                data-decimal-points="0"
                                                                data-decimal-separator=".">0</span></div>
                                                        <h4 class="grve-counter-title grve-h4">одобрений сложных
                                                            случаев</h4></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grve-background-wrapper"></div>
                            </div>
                            -->

                            <!--
                            <div class="grve-section grve-row-section grve-fullwidth-background grve-bg-none grve-desktop-row-hide grve-tablet-row-hide grve-tablet-sm-row-hide grve-mobile-row-hide"
                                 style="background-color:#ffffff;padding-bottom: 60px;">
                                <div class="grve-container">
                                    <div class="grve-row grve-bookmark grve-columns-gap-60">
                                        <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide">
                                            <div class="grve-column-wrapper"></div>
                                        </div>
                                        <div class="grve-column wpb_column grve-column-2-3 grve-tablet-sm-column-1">
                                            <div class="grve-column-wrapper">
                                                <div class="grve-empty-space grve-height-1x" style=""></div>
                                            </div>
                                        </div>
                                        <div class="grve-column wpb_column grve-column-1-6 grve-tablet-sm-column-hide grve-mobile-column-hide">
                                            <div class="grve-column-wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grve-background-wrapper"></div>
                            </div>
                            -->


                            <?php
                                if($isRedirect){
                                    $redirect = $_GET['redirect'];

                                    print '<div class="redirect">';

                                    if($redirect == 404)
                                        include_once "components/redirect/er404.php";
                                    elseif($redirect == 500)
                                        include_once "components/redirect/er500.php";
                                    else
                                        include_once "components/redirect/er.php";

                                    print '</div>';

                                }
                                elseif($isArticle){
                                    include_once "components/page_articles/article.php";
                                }
                                elseif ($isAllArticles){
                                    include_once "components/page_articles/all_articles.php";
                                }
                                else {
                                    include_once "components/page_main/about_company.php";
                                    include_once "components/page_main/calculate_benefit.php";

                                    include_once "components/page_main/whom_me_help.php";  //todo Подправить блок
                                    include_once "components/page_main/approval_stages.php";

                                    include_once "components/page_main/video.php";
                                    include_once "components/page_main/control_deal.php";

                                    include_once "components/page_main/price.php";
                                    include_once "components/page_main/need_consultation.php";

                                    include_once "components/page_main/make_request.php";

                                    include_once "components/page_main/banks_partners.php"; //todo грузит данные не из json
                                    include_once "components/page_main/articles.php";
                                }

                            ?>


                            <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-bg-none"
                                 id="q5">
                                <div class="grve-container">
                                    <div class="grve-row grve-bookmark grve-columns-gap-30">
                                        <div class="grve-column wpb_column grve-column-1">
                                            <div class="grve-column-wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grve-background-wrapper"></div>
                            </div>
                        </div>

                        <!-- END PAGE CONTENT -->

                        <div class="grve-container">
                        </div>

                    </div>
                </div>
                <!-- END MAIN CONTENT -->

                <?php
                if($isShowSideBar)
                    include_once "components/side_bar.php";
                ?>


            </div>
        </div>
        <!-- END CONTENT -->
        <?php include_once "components/footer.php" ?>
        <!-- SIDE AREA -->
        <!-- END SIDE AREA -->

        <!-- HIDDEN MENU -->
        <?php include_once "components/hidden_menu.php"?>
        <!-- END HIDDEN MENU -->

        <!--
        <div id="grve-search-modal" class="grve-modal grve-dark-cursor">
            <div class="grve-modal-wrapper">
                <div class="grve-modal-content">
                    <div class="grve-modal-item">
                        <form class="grve-search grve-search-modal" method="get" action="https://proipoteka.ru/">
                            <div class="grve-search-input-wrapper grve-heading-color">
                                <div class="grve-search-placeholder grve-h1 grve-typed-placeholder"><span
                                        class="grve-heading-color"
                                        style="font-size:200%;">Enter your<br>text here</span></div>
                                <input type="text" class="grve-search-textfield grve-h2" value="" name="s"
                                       autocomplete="off"></div>
                            <input class="grve-search-btn" type="submit" value="Start Searching"></form>
                    </div>
                </div>
            </div>
        </div>
        <div id="grve-top-left-form-modal" class="grve-modal grve-dark-cursor">
            <div class="grve-modal-wrapper">
                <div class="grve-modal-content">
                    <div class="grve-modal-form">
                        <div class="grve-modal-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <!--
        <div id="grve-top-right-form-modal" class="grve-modal grve-dark-cursor">
            <div class="grve-modal-wrapper">
                <div class="grve-modal-content">
                    <div class="grve-modal-form">
                        <div class="grve-modal-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="grve-menu-form-modal" class="grve-modal grve-dark-cursor">
            <div class="grve-modal-wrapper">
                <div class="grve-modal-content">
                    <div class="grve-modal-form">
                        <div class="grve-modal-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="grve-language-modal" class="grve-modal grve-dark-cursor">
            <div class="grve-modal-wrapper">
                <div class="grve-modal-content">
                    <div class="grve-modal-item">
                        <ul class="grve-language">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="grve-login-modal" class="grve-modal grve-dark-cursor">
            <div class="grve-modal-wrapper">
                <div class="grve-modal-content">
                    <div class="grve-modal-item">

                        <div class="grve-login-modal">

                            <div class="grve-login-form grve-login-form-item grve-align-center">

                                <div class="grve-login-form-title grve-h3 grve-with-line grve-align-center">Login to
                                    Ипотечное агентство ПРОИпотека
                                </div>

                                <form id="grve_login_form" action="https://proipoteka.ru/" method="post">

                                    <div class="grve-form-field">
                                        <input class="grve-form-control required" name="grve_user_login" type="text"
                                               placeholder="Username *">
                                    </div>
                                    <div class="grve-form-field">
                                        <input class="grve-form-control required" name="grve_user_pass"
                                               id="grve_user_pass" type="password" placeholder="Password *">
                                    </div>
                                    <div class="grve-form-field">
                                        <input type="hidden" name="action" value="movedo_grve_login_user">
                                        <button class="btn grve-fullwidth-btn" data-loading-text="Loading..."
                                                type="submit">Login
                                        </button>
                                        <a class="grve-reset-password-form-btn grve-link-text grve-text-hover-primary-1"
                                           href="#">Lost Password?</a>
                                    </div>
                                    <input type="hidden" id="_movedo_grve_nonce_login" name="_movedo_grve_nonce_login"
                                           value="05b86a22e3"><input type="hidden" name="_wp_http_referer" value="/">
                                </form>
                                <div class="grve-form-errors grve-align-center grve-text-primary-1 grve-link-text"></div>
                            </div>

                            <!-- Lost Password form -->
        <!--
                            <div class="grve-reset-password-form grve-login-form-item grve-align-center">

                                <div class="grve-login-form-title grve-h3 grve-with-line grve-align-center">Reset
                                    Password
                                </div>
                                <span class="grve-login-form-description grve-link-text">Enter the username or e-mail you used in your profile. A password reset link will be sent to you by email.</span>

                                <form id="grve_reset_password_form" action="https://proipoteka.ru/" method="post">
                                    <div class="grve-form-field">
                                        <input class="grve-form-control required" name="grve_user_or_email"
                                               id="grve_user_or_email" type="text" placeholder="Username or E-mail">
                                    </div>
                                    <div class="grve-form-field">
                                        <input type="hidden" name="action" value="movedo_grve_reset_password_user">
                                        <button class="btn grve-fullwidth-btn" data-loading-text="Loading..."
                                                type="submit">Get new password
                                        </button>
                                    </div>
                                    <div class="grve-form-field">
							<span class="grve-login-link grve-link-text">Already have an account?								<a
                                    class="grve-text-hover-primary-1 grve-login-form-btn" href="#">Login</a>
							</span>
                                    </div>
                                    <input type="hidden" id="_movedo_grve_nonce_password"
                                           name="_movedo_grve_nonce_password" value="05b86a22e3"><input type="hidden"
                                                                                                        name="_wp_http_referer"
                                                                                                        value="/">
                                </form>
                                <div class="grve-form-errors grve-align-center grve-text-primary-1 grve-link-text"></div>
                            </div>
        -->
                        </div>
                    </div>

<!--
                </div>
            </div>
        </div>
        -->


        <div class="grve-back-top">
            <div class="grve-arrow-wrapper">
                <i class="grve-icon-nav-up-small grve-back-top-icon"></i>
            </div>
        </div>
    </div> <!-- end #grve-theme-content -->
</div> <!-- end #grve-theme-wrapper -->

<!--noptimize--><!--email_off-->
<link rel="stylesheet" href="css/maxbutton.css">
<!--/email_off--><!--/noptimize-->

<div id="pum-1063"
     class="pum pum-overlay pum-theme-1066 pum-theme-insta popmake-overlay pum-click-to-close auto_open click_open"
     data-popmake="{&quot;id&quot;:1063,&quot;slug&quot;:&quot;instagram&quot;,&quot;theme_id&quot;:1066,&quot;cookies&quot;:[{&quot;event&quot;:&quot;on_popup_close&quot;,&quot;settings&quot;:{&quot;name&quot;:&quot;pum-1063&quot;,&quot;time&quot;:&quot;1 day&quot;,&quot;path&quot;:true}}],&quot;triggers&quot;:[{&quot;type&quot;:&quot;auto_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:[&quot;pum-1063&quot;],&quot;delay&quot;:&quot;5000&quot;}},{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;extra_selectors&quot;:&quot;&quot;,&quot;cookie_name&quot;:null}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;medium&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;100%&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:&quot;1&quot;,&quot;esc_press&quot;:false,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}"
     role="dialog" aria-hidden="true">

    <div id="popmake-1063"
         class="pum-container popmake theme-1066 pum-responsive pum-responsive-medium responsive size-medium">


        <div class="pum-content popmake-content">
            <p style="text-align: center;">
                <a href="<?php print($data->contacts->instagram); ?>" target="_blank" rel="noopener noreferrer">
                    <img loading="lazy" class="size-medium wp-image-1067 aligncenter"
                         src="wp-content/uploads/2020/02/popup-insta.png" alt="" width="300" height="300">
            </a></p>
            <style>
                button.pum-close.popmake-close {
                    font-size: 3em !important;
                }
            </style>
        </div>


        <button type="button" class="pum-close popmake-close" aria-label="Закрыть">
            X
        </button>

    </div>

</div>
<div id="pum-980" class="pum pum-overlay pum-theme-607 pum-theme-lightbox popmake-overlay pum-click-to-close click_open"
     data-popmake="{&quot;id&quot;:980,&quot;slug&quot;:&quot;oprosnik&quot;,&quot;theme_id&quot;:607,&quot;cookies&quot;:[],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;cookie_name&quot;:&quot;&quot;,&quot;extra_selectors&quot;:&quot;.thequiz&quot;}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;medium&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;100%&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center top&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:&quot;1&quot;,&quot;esc_press&quot;:&quot;1&quot;,&quot;f4_press&quot;:false},&quot;click_open&quot;:[]}}"
     role="dialog" aria-hidden="true">

    <div id="popmake-980"
         class="pum-container popmake theme-607 pum-responsive pum-responsive-medium responsive size-medium">


        <div class="pum-content popmake-content">
            <script>
                if (window.qmn_quiz_data === undefined) {
                    window.qmn_quiz_data = {};
                }
            </script>
            <div class='qsm-quiz-container qmn_quiz_container'>

                <form id='quizForm1' action='/php/mail/interview.php' method='post'
                      class='qsm-quiz-form qmn_quiz_form mlw_quiz_form' novalidate="" enctype='multipart/form-data'>
                    <input type='hidden' name='qsm_hidden_questions' id='qsm_hidden_questions' value=''>
                    <div name='mlw_error_message' id='mlw_error_message'
                         class='qsm-error-message qmn_error_message_section'></div>
                    <span id='mlw_top_of_quiz'></span>
                    <section class="qsm-page  qsm-page-0" data-pid="0" data-prevbtn="0">
                        <div class='quiz_section question-section-id-1'>
                            <span class='mlw_qmn_question '>Какой можете внести первоначальный взнос</span>
                            <div class='qmn_radio_answers mlwRequiredRadio'>
                                <div class='qmn_mc_answer_wrap' id='question1-Не могу'><input type='radio'
                                                                                              class='qmn_quiz_radio'
                                                                                              name='question1'
                                                                                              id='question1_1'
                                                                                              value='Не могу'> <label
                                        for='question1_1'>Не могу</label></div>
                                <div class='qmn_mc_answer_wrap' id='question1-10-20%'><input type='radio'
                                                                                             class='qmn_quiz_radio'
                                                                                             name='question1'
                                                                                             id='question1_2'
                                                                                             value='10-20%'> <label
                                        for='question1_2'>10-20%</label></div>
                                <div class='qmn_mc_answer_wrap' id='question1-20-30%'><input type='radio'
                                                                                             class='qmn_quiz_radio'
                                                                                             name='question1'
                                                                                             id='question1_3'
                                                                                             value='20-30%'> <label
                                        for='question1_3'>20-30%</label></div>
                                <div class='qmn_mc_answer_wrap' id='question1-30 и более'><input type='radio'
                                                                                                 class='qmn_quiz_radio'
                                                                                                 name='question1'
                                                                                                 id='question1_4'
                                                                                                 value='30 и более'>
                                    <label for='question1_4'>30 и более</label></div>
                                <input type='radio' style='display: none;' name='question1' id='question1_none'
                                       checked='checked' value='No Answer Provided'></div>
                        </div>
                    </section>
                    <section class="qsm-page  qsm-page-1" data-pid="1" data-prevbtn="0">
                        <div class='quiz_section question-section-id-5'>
                            <span class='mlw_qmn_question '>Вы можете документально подтвердить свои доходы?</span>
                            <div class='qmn_radio_answers mlwRequiredRadio'><span class='mlw_horizontal_choice'><input
                                    type='radio' class='qmn_quiz_radio' name='question5' id='question5_1'
                                    value='Да'><label for='question5_1'>Да</label></span><span
                                    class='mlw_horizontal_choice'><input type='radio' class='qmn_quiz_radio'
                                                                         name='question5' id='question5_2'
                                                                         value='Нет'><label
                                    for='question5_2'>Нет</label></span><input type='radio' style='display: none;'
                                                                               name='question5' id='question5_none'
                                                                               checked='checked'
                                                                               value='No Answer Provided'></div>
                        </div>
                    </section>
                    <section class="qsm-page  qsm-page-2" data-pid="2" data-prevbtn="0">
                        <div class='quiz_section question-section-id-3'>
                            <span class='mlw_qmn_question '>Были ли ранее кредиты?</span>
                            <div class='qmn_radio_answers '>
                                <div class='qmn_mc_answer_wrap' id='question3-Никогда не брал'><input type='radio'
                                                                                                      class='qmn_quiz_radio'
                                                                                                      name='question3'
                                                                                                      id='question3_1'
                                                                                                      value='Никогда не брал'>
                                    <label for='question3_1'>Никогда не брал</label></div>
                                <div class='qmn_mc_answer_wrap' id='question3-Брал, были небольшие просрочки'><input
                                        type='radio' class='qmn_quiz_radio' name='question3' id='question3_2'
                                        value='Брал, были небольшие просрочки'> <label for='question3_2'>Брал, были
                                    небольшие просрочки</label></div>
                                <div class='qmn_mc_answer_wrap' id='question3-Брал, своевременно погашал'><input
                                        type='radio' class='qmn_quiz_radio' name='question3' id='question3_3'
                                        value='Брал, своевременно погашал'> <label for='question3_3'>Брал, своевременно
                                    погашал</label></div>
                                <div class='qmn_mc_answer_wrap' id='question3-Большие просрочки'><input type='radio'
                                                                                                        class='qmn_quiz_radio'
                                                                                                        name='question3'
                                                                                                        id='question3_4'
                                                                                                        value='Большие просрочки'>
                                    <label for='question3_4'>Большие просрочки</label></div>
                                <input type='radio' style='display: none;' name='question3' id='question3_none'
                                       checked='checked' value='No Answer Provided'></div>
                        </div>
                    </section>
                    <section class="qsm-page">
                        <div class="quiz_section">
                            <div class='qsm-after-message mlw_qmn_message_end'><h2>Вам подходят программы 5 банков!</h2>
                                <p>По Вашим параметрам предлагаются 2 ставки кредитования.</p>
                                <p>Финальная ставка зависит от кредитной истории и персонального рейтинга.</p>
                                <p>Обращайтесь!</p>
                                <p>&nbsp;</p>
                            </div>
                            <div class="qsm_contact_div qsm-contact-type-text">
                                <span class='mlw_qmn_question qsm_question'>Вас зовут</span>
                                <input autocomplete='off' type='text' class='mlwRequiredText qsm_required_text'
                                       x-webkit-speech="" name='contact_field_0' value='в' placeholder="Вас зовут">
                            </div>
                            <div class="qsm_contact_div qsm-contact-type-text">
                                <span class='mlw_qmn_question qsm_question'>Телефон для связи</span>
                                <input autocomplete='off' type='number' class='mlwRequiredNumber qsm_required_text'
                                       x-webkit-speech="" name='contact_field_1' value='2'
                                       placeholder="Телефон для связи">
                            </div>
                            <div class="qsm_contact_div qsm-contact-type-email">
                                <span class='mlw_qmn_question qsm_question'>Email для связи</span>
                                <input autocomplete='off' type='text' class='mlwEmail mlwRequiredText qsm_required_text'
                                       x-webkit-speech="" name='contact_field_2' value='j@re.re' placeholder="Email для связи">
                            </div>
                            <div class="qsm_contact_div qsm-contact-type-checkbox">
                                <input type='checkbox' id='contact_field_3' class='' x-webkit-speech=""
                                       name='contact_field_3' value='checked'>
                                <label class='mlw_qmn_question qsm_question' for='contact_field_3'>Свяжитесь со мной
                                    срочно</label>
                            </div>
                        </div>
                    </section>
                    <!-- View for pagination -->
                    <script type="text/template" id="tmpl-qsm-pagination">
                        <div class="qsm-pagination qmn_pagination border margin-bottom">
                            <a class="qsm-btn qsm-previous qmn_btn mlw_qmn_quiz_link mlw_previous" href="#">Назад</a>
                            <span class="qmn_page_message"></span>
                            <div class="qmn_page_counter_message"></div>
                            <div class="qsm-progress-bar" style="display:none;">
                                <div class="progressbar-text"></div>
                            </div>
                            <a class="qsm-btn qsm-next qmn_btn mlw_qmn_quiz_link mlw_next" href="#">Далее</a>
                            <input type='submit' class='qsm-btn qsm-submit-btn qmn_btn' value='Отправить'/>
                        </div>
                    </script>
                    <input type='hidden' name='qmn_question_list' value='1Q5Q3Q'>
                    <div name='mlw_error_message_bottom' id='mlw_error_message_bottom'
                         class='qsm-error-message qmn_error_message_section'></div>
                    <input type='hidden' name='total_questions' id='total_questions' value='3'><input type='hidden'
                                                                                                      name='timer'
                                                                                                      id='timer'
                                                                                                      value='0'><input
                        type='hidden' name='timer_ms' id='timer_ms' value='0'><input type='hidden' class='qmn_quiz_id'
                                                                                     name='qmn_quiz_id' id='qmn_quiz_id'
                                                                                     value='1'><input type='hidden'
                                                                                                      name='complete_quiz'
                                                                                                      value='confirmation'>
                </form>
            </div>
            <script>
                window.qmn_quiz_data["1"] = {
                    "quiz_id": "1",
                    "quiz_name": "Tarif quiz",
                    "disable_answer": "0",
                    "ajax_show_correct": "0",
                    "progress_bar": "1",
                    "contact_info_location": "1",
                    "qpages": [],
                    "skip_validation_time_expire": 1,
                    "error_messages": {
                        "email": "e-mail \u043d\u0435 \u043a\u043e\u0440\u0440\u0435\u043a\u0442\u0435\u043d",
                        "number": "This field must be a number!",
                        "incorrect": "The entered text is not correct!",
                        "empty": "\u041f\u043e\u0436\u0430\u043b\u0443\u0439\u0441\u0442\u0430, \u0437\u0430\u043f\u043e\u043b\u043d\u0438\u0442\u0435 \u0432\u0441\u0435 \u043f\u043e\u043b\u044f"
                    }
                }
            </script>
            <div style="display: none;" class="qsm-popup qsm-popup-slide" id="modal-3" aria-hidden="false">
                <div class="qsm-popup__overlay" tabindex="-1" data-micromodal-close="">
                    <div class="qsm-popup__container qmn_quiz_container" role="dialog" aria-modal="true"
                         aria-labelledby="modal-3-title">
                        <main class="qsm-popup__content"><img
                                src="wp-content/plugins/quiz-master-next/assets/clock.png">
                            <noscript><img src="wp-content/plugins/quiz-master-next/assets/clock.png"></noscript>
                            <p class="qsm-time-up-text">Time is Up!</p></main>
                        <footer class="qsm-popup__footer">
                            <button class="qsm-popup-secondary-button qmn_btn" data-micromodal-close=""
                                    aria-label="Close this dialog window">Cancel
                            </button>
                            <button data-quiz_id="1" class="submit-the-form qmn_btn">Submit Quiz</button>
                        </footer>
                    </div>
                </div>
            </div>
        </div>


        <button type="button" class="pum-close popmake-close" aria-label="Закрыть">
            ×
        </button>

    </div>

</div>
<div id="pum-613" class="pum pum-overlay pum-theme-607 pum-theme-lightbox popmake-overlay pum-click-to-close click_open"
     data-popmake="{&quot;id&quot;:613,&quot;slug&quot;:&quot;1&quot;,&quot;theme_id&quot;:607,&quot;cookies&quot;:[],&quot;triggers&quot;:[{&quot;type&quot;:&quot;click_open&quot;,&quot;settings&quot;:{&quot;extra_selectors&quot;:&quot;&quot;,&quot;cookie_name&quot;:null}}],&quot;mobile_disabled&quot;:null,&quot;tablet_disabled&quot;:null,&quot;meta&quot;:{&quot;display&quot;:{&quot;stackable&quot;:false,&quot;overlay_disabled&quot;:false,&quot;scrollable_content&quot;:false,&quot;disable_reposition&quot;:false,&quot;size&quot;:&quot;tiny&quot;,&quot;responsive_min_width&quot;:&quot;0%&quot;,&quot;responsive_min_width_unit&quot;:false,&quot;responsive_max_width&quot;:&quot;50%&quot;,&quot;responsive_max_width_unit&quot;:false,&quot;custom_width&quot;:&quot;640px&quot;,&quot;custom_width_unit&quot;:false,&quot;custom_height&quot;:&quot;380px&quot;,&quot;custom_height_unit&quot;:false,&quot;custom_height_auto&quot;:false,&quot;location&quot;:&quot;center&quot;,&quot;position_from_trigger&quot;:false,&quot;position_top&quot;:&quot;100&quot;,&quot;position_left&quot;:&quot;0&quot;,&quot;position_bottom&quot;:&quot;0&quot;,&quot;position_right&quot;:&quot;0&quot;,&quot;position_fixed&quot;:false,&quot;animation_type&quot;:&quot;fade&quot;,&quot;animation_speed&quot;:&quot;350&quot;,&quot;animation_origin&quot;:&quot;center top&quot;,&quot;overlay_zindex&quot;:false,&quot;zindex&quot;:&quot;1999999999&quot;},&quot;close&quot;:{&quot;text&quot;:&quot;&quot;,&quot;button_delay&quot;:&quot;0&quot;,&quot;overlay_click&quot;:&quot;1&quot;,&quot;esc_press&quot;:&quot;1&quot;,&quot;f4_press&quot;:&quot;1&quot;},&quot;click_open&quot;:[]}}"
     role="dialog" aria-hidden="true" aria-labelledby="pum_popup_title_613">

    <div id="popmake-613"
         class="pum-container popmake theme-607 pum-responsive pum-responsive-tiny responsive size-tiny">


        <div id="pum_popup_title_613" class="pum-title popmake-title">
            Оставьте свои данные
        </div>


        <div class="pum-content popmake-content">
            <div class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none">
                <div class="grve-container">
                    <div class="grve-row grve-bookmark grve-columns-gap-30">
                        <div class="grve-column wpb_column grve-column-1 grve-align-center">
                            <div class="grve-column-wrapper">
                                <div class="grve-element grve-text">
                                    <p style="text-align: center;">
                                    <div role="form" class="wpcf7" id="wpcf7-f8-o1" lang="ru-RU" dir="ltr">
                                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                        <form action="/#wpcf7-f8-o1" method="post" class="wpcf7-form init"
                                              novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="8">
                                                <input type="hidden" name="_wpcf7_version" value="5.2.1">
                                                <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f8-o1">
                                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                            </div>
                                            <p><label> Ваше имя*<br>
                                                <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                                                                       name="your-name"
                                                                                                       value=""
                                                                                                       size="40"
                                                                                                       class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                       aria-required="true"
                                                                                                       aria-invalid="false"></span>
                                            </label></p>
                                            <p><label> Ваш номер телефона*<br>
                                                <span class="wpcf7-form-control-wrap your-tel"><input type="tel"
                                                                                                      name="your-tel"
                                                                                                      value="" size="40"
                                                                                                      class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                      aria-required="true"
                                                                                                      aria-invalid="false"></span>
                                            </label></p>
                                            <p><input type="submit" value="Отправить"
                                                      class="wpcf7-form-control wpcf7-submit"></p>
                                            <input type='hidden' class='wpcf7-pum'
                                                   value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}'>
                                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grve-background-wrapper"></div>
            </div>
        </div>


        <button type="button" class="pum-close popmake-close" aria-label="Закрыть">
            ×
        </button>

    </div>

</div>

<script>
    var links = document.getElementsByClassName('mb-text');
    for (var i = 0; i < links.length; i++) {
        links[i].setAttribute('id', 'ym_button_' + i);
    }
</script>

<link rel='stylesheet' id='so-css-movedo-css' href='wp-content/uploads/so-css/so-css-movedo.css' type='text/css'
      media='all'>
<link rel='stylesheet' id='movedo-ext-vc-simple-line-icons-css'
      href='wp-content/plugins/movedo-extension/assets/css/simple-line-icons.css' type='text/css' media='all'>
<link rel='stylesheet' id='movedo-ext-vc-elegant-line-icons-css'
      href='wp-content/plugins/movedo-extension/assets/css/et-line-icons.css' type='text/css' media='all'>
<script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min.js' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/sortable.min.js' id='jquery-ui-sortable-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/proipoteka.ru\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "cached": "1"
    };
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/proipoteka.ru\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "cached": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js'
        id='contact-form-7-js'></script>
<script type='text/javascript' id='movedo-grve-plugins-js-extra'>
    /* <![CDATA[ */
    var movedo_grve_fullpage_data = {"fullpage": "0"};
    var movedo_grve_piling_data = {"piling": "0"};
    var movedo_grve_smoothscroll_data = {"smoothscrolling": "1"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/movedo/js/plugins.js' id='movedo-grve-plugins-js'></script>
<script type='text/javascript' id='movedo-grve-main-script-js-extra'>
    /* <![CDATA[ */
    var movedo_grve_main_data = {
        "siteurl": "https:\/\/proipoteka.ru\/wp-content\/themes\/movedo",
        "ajaxurl": "https:\/\/proipoteka.ru\/wp-admin\/admin-ajax.php",
        "wp_gallery_popup": "0",
        "device_animations": "0",
        "device_hover_single_tap": "0",
        "responsive_thershold": "1024",
        "back_top_top": "1",
        "string_weeks": "\u041d\u0435\u0434\u0435\u043b\u044c",
        "string_days": "\u0414\u043d\u0435\u0439",
        "string_hours": "\u0427\u0430\u0441\u043e\u0432",
        "string_minutes": "Min",
        "string_seconds": "Sec",
        "nonce_likes": "f7cf750bb9"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/movedo/js/main.js' id='movedo-grve-main-script-js'></script>
<script type='text/javascript' id='movedo-grve-main-script-js-after'>
    var screen_width = Math.max(screen.width, screen.height);
    var devicePixelRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
    document.cookie = 'resolution=' + screen_width + ',' + devicePixelRatio + '; path=/';

    function grveReadCookie(name) {
        var nameEQ = name + '=';
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function grvePrivacyCookieConsent(cookie_name, cookie_days) {
        var privacyAgreement = jQuery('.grve-privacy-agreement');
        privacyAgreement.on('click', function () {
            var theDate = new Date();
            var later = new Date(theDate.getTime() + cookie_days * 24 * 60 * 60 * 1000);
            document.cookie = cookie_name + '=true; Path=/; Expires=' + later.toGMTString() + ';';
            jQuery('#grve-privacy-bar').fadeOut(900);
        });
        if (!document.cookie.match(cookie_name)) {
            jQuery('#grve-privacy-bar').fadeIn(900);
        }
    }

    function grvePrivacyPopupConsent() {
        var privacyPopupButton = jQuery('.grve-privacy-popup-btn'),
            privacyRefreshButton = jQuery('.grve-privacy-refresh-btn'), privacyPopup = jQuery('#grve-privacy-popup'),
            privacyOverlay = jQuery('#grve-privacy-overlay');
        privacyPopupButton.on('click', function (e) {
            e.preventDefault();
            privacyPopup.fadeIn(600, function () {
                jQuery(window).on('click.grve_close_privacy_popup', function (event) {
                    if (!jQuery(event.target).closest('.grve-privacy-popup-wrapper').length) {
                        privacyPopup.fadeOut(600, function () {
                            jQuery(window).off('click.grve_close_privacy_popup');
                        });
                        privacyOverlay.fadeOut(600);
                    }
                });
            });
            privacyOverlay.fadeIn(600);
        });
        privacyRefreshButton.on('click', function () {
            window.location.reload(true);
        });
    }

    grvePrivacyCookieConsent('grve-privacy-consent', '30');
    grvePrivacyPopupConsent();

    function grvePrivacyCookieSwitch(cookie_name, initial_state) {
        var theDate = new Date();
        var oneYearLater = new Date(theDate.getTime() + 31536000000);
        var privacySwitch = jQuery('.' + cookie_name);
        privacySwitch.each(function () {
            if (document.cookie.match(cookie_name)) {
                if ('false' == grveReadCookie(cookie_name)) {
                    this.checked = false;
                } else {
                    this.checked = true;
                }
            } else {
                if (!initial_state) {
                    this.checked = false;
                }
            }
        });
        privacySwitch.on('click', function () {
            if (this.checked) {
                document.cookie = cookie_name + '=true; Path=/; Expires=' + oneYearLater.toGMTString() + ';';
                privacySwitch.each(function () {
                    this.checked = true;
                });
            } else {
                document.cookie = cookie_name + '=false; Path=/; Expires=' + oneYearLater.toGMTString() + ';';
                privacySwitch.each(function () {
                    this.checked = false;
                });
            }
        });
    }

    grvePrivacyCookieSwitch('grve-privacy-content-gtracking', '1');
    grvePrivacyCookieSwitch('grve-privacy-content-gfonts', '1');
    grvePrivacyCookieSwitch('grve-privacy-content-gmaps', '1');
    grvePrivacyCookieSwitch('grve-privacy-content-video-embeds', '1');
</script>
<script type='text/javascript' id='popup-maker-site-js-extra'>
    /* <![CDATA[ */
    var pum_vars = {
        "version": "1.11.1",
        "pm_dir_url": "https:\/\/proipoteka.ru\/wp-content\/plugins\/popup-maker\/",
        "ajaxurl": "https:\/\/proipoteka.ru\/wp-admin\/admin-ajax.php",
        "restapi": "https:\/\/proipoteka.ru\/wp-json\/pum\/v1",
        "rest_nonce": null,
        "default_theme": "607",
        "debug_mode": "",
        "disable_tracking": "",
        "home_url": "\/",
        "message_position": "top",
        "core_sub_forms_enabled": "1",
        "popups": []
    };
    var ajaxurl = "https:\/\/proipoteka.ru\/wp-admin\/admin-ajax.php";
    var pum_sub_vars = {"ajaxurl": "https:\/\/proipoteka.ru\/wp-admin\/admin-ajax.php", "message_position": "top"};
    var pum_popups = {
        "pum-1063": {
            "disable_on_mobile": false,
            "disable_on_tablet": false,
            "custom_height_auto": false,
            "scrollable_content": false,
            "position_from_trigger": false,
            "position_fixed": false,
            "overlay_disabled": false,
            "stackable": false,
            "disable_reposition": false,
            "close_on_form_submission": false,
            "close_on_overlay_click": true,
            "close_on_esc_press": false,
            "close_on_f4_press": false,
            "disable_form_reopen": false,
            "disable_accessibility": false,
            "triggers": [{"type": "auto_open", "settings": {"cookie_name": ["pum-1063"], "delay": "5000"}}],
            "cookies": [{"event": "on_popup_close", "settings": {"name": "pum-1063", "time": "1 day", "path": true}}],
            "theme_id": "1066",
            "size": "medium",
            "responsive_min_width": "0%",
            "responsive_max_width": "100%",
            "custom_width": "640px",
            "custom_height": "380px",
            "animation_type": "fade",
            "animation_speed": "350",
            "animation_origin": "center top",
            "location": "center",
            "position_top": "100",
            "position_bottom": "0",
            "position_left": "0",
            "position_right": "0",
            "zindex": "1999999999",
            "close_button_delay": "0",
            "theme_slug": "insta",
            "id": 1063,
            "slug": "instagram"
        },
        "pum-980": {
            "disable_on_mobile": false,
            "disable_on_tablet": false,
            "custom_height_auto": false,
            "scrollable_content": false,
            "position_from_trigger": false,
            "position_fixed": false,
            "overlay_disabled": false,
            "stackable": false,
            "disable_reposition": false,
            "close_on_form_submission": false,
            "close_on_overlay_click": true,
            "close_on_esc_press": true,
            "close_on_f4_press": false,
            "disable_form_reopen": false,
            "disable_accessibility": false,
            "triggers": [{"type": "click_open", "settings": {"cookie_name": "", "extra_selectors": ".thequiz"}}],
            "theme_id": "607",
            "size": "medium",
            "responsive_min_width": "0%",
            "responsive_max_width": "100%",
            "custom_width": "640px",
            "custom_height": "380px",
            "animation_type": "fade",
            "animation_speed": "350",
            "animation_origin": "center top",
            "location": "center top",
            "position_top": "100",
            "position_bottom": "0",
            "position_left": "0",
            "position_right": "0",
            "zindex": "1999999999",
            "close_button_delay": "0",
            "cookies": [],
            "theme_slug": "lightbox",
            "id": 980,
            "slug": "oprosnik"
        },
        "pum-613": {
            "disable_on_mobile": false,
            "disable_on_tablet": false,
            "custom_height_auto": false,
            "scrollable_content": false,
            "position_from_trigger": false,
            "position_fixed": false,
            "overlay_disabled": false,
            "stackable": false,
            "disable_reposition": false,
            "close_on_form_submission": false,
            "close_on_overlay_click": true,
            "close_on_esc_press": true,
            "close_on_f4_press": true,
            "disable_form_reopen": false,
            "disable_accessibility": false,
            "theme_id": "607",
            "size": "tiny",
            "responsive_min_width": "0%",
            "responsive_max_width": "50%",
            "custom_width": "640px",
            "custom_height": "380px",
            "animation_type": "fade",
            "animation_speed": "350",
            "animation_origin": "center top",
            "location": "center",
            "position_top": "100",
            "position_bottom": "0",
            "position_left": "0",
            "position_right": "0",
            "zindex": "1999999999",
            "close_button_delay": "0",
            "triggers": [],
            "cookies": [],
            "theme_slug": "lightbox",
            "id": 613,
            "slug": "1"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/uploads/pum/pum-site-scripts.js' id='popup-maker-site-js'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'
        id='wpb_composer_front_js-js'></script>
<script type='text/javascript' src='wp-content/plugins/layered-popups/js/script.min.js' id='ulp-js'></script>
<script type='text/javascript' id='movedo-grve-login-js-extra'>
    /* <![CDATA[ */
    //var grve_form = {"ajaxurl": "https:\/\/proipoteka.ru\/wp-admin\/admin-ajax.php", "redirect_url": ""};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/movedo/js/ajax-login.js' id='movedo-grve-login-js'></script>

<!--<script>-->
<!--    var ulp_ajax_url = "https://proipoteka.ru/wp-admin/admin-ajax.php";-->
<!--    var ulp_css3_enable = "on";-->
<!--    var ulp_ga_tracking = "off";-->
<!--    var ulp_km_tracking = "off";-->
<!--    var ulp_onexit_limits = "off";-->
<!--    var ulp_no_preload = "on";-->
<!--    var ulp_campaigns = {"none": [""]};-->
<!--    var ulp_overlays = {-->
<!--        "wwxxhOM6JtVDZgco": ["#777777", "0.8", "on", "middle-center", "fadeIn", "classic", "#ffffff"],-->
<!--        "none": ["", "", "", "", ""]-->
<!--    };-->
<!--    if (typeof ulp_inline_open == "function" && typeof ulp_init == "function") {-->
<!--        ulp_prepare_ids();-->
<!--        ulp_inline_open(false);-->
<!--        ulp_init();-->
<!--        jQuery(document).ready(function () {-->
<!--            ulp_ready();-->
<!--        });-->
<!--    } else {-->
<!--        jQuery(document).ready(function () {-->
<!--            ulp_prepare_ids();-->
<!--            ulp_inline_open(false);-->
<!--            ulp_init();-->
<!--            ulp_ready();-->
<!--        });-->
<!--    }-->
<!--</script>-->
<script data-no-optimize="1">var _extends = Object.assign || function (t) {
    for (var e = 1; e < arguments.length; e++) {
        var n = arguments[e];
        for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o])
    }
    return t
}, _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
    return typeof t
} : function (t) {
    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
};
!function (t, e) {
    "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.LazyLoad = e()
}(this, function () {
    "use strict";
    var n = {
        elements_selector: "img",
        container: document,
        threshold: 300,
        thresholds: null,
        data_src: "src",
        data_srcset: "srcset",
        data_sizes: "sizes",
        data_bg: "bg",
        class_loading: "litespeed-loading",
        class_loaded: "litespeed-loaded",
        class_error: "error",
        load_delay: 0,
        callback_load: null,
        callback_error: null,
        callback_set: null,
        callback_enter: null,
        callback_finish: null,
        to_webp: !1
    }, s = "data-", r = "was-processed", o = "ll-timeout", a = "true", c = function (t, e) {
        return t.getAttribute(s + e)
    }, i = function (t, e, n) {
        var o = s + e;
        null !== n ? t.setAttribute(o, n) : t.removeAttribute(o)
    }, l = function (t) {
        return c(t, r) === a
    }, u = function (t, e) {
        return i(t, o, e)
    }, d = function (t) {
        return c(t, o)
    }, f = function (t, e) {
        var n, o = "LazyLoad::Initialized", s = new t(e);
        try {
            n = new CustomEvent(o, {detail: {instance: s}})
        } catch (t) {
            (n = document.createEvent("CustomEvent")).initCustomEvent(o, !1, !1, {instance: s})
        }
        window.dispatchEvent(n)
    };
    var _ = function (t, e) {
            return e ? t.replace(/\.(jpe?g|png)/gi, ".webp") : t
        }, t = "undefined" != typeof window,
        v = t && !("onscroll" in window) || /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),
        e = t && "IntersectionObserver" in window, h = t && "classList" in document.createElement("p"), b = t && !1,
        g = function (t, e, n, o) {
            for (var s, r = 0; s = t.children[r]; r += 1) if ("SOURCE" === s.tagName) {
                var a = c(s, n);
                m(s, e, a, o)
            }
        }, m = function (t, e, n, o) {
            n && t.setAttribute(e, _(n, o))
        }, p = {
            IMG: function (t, e) {
                var n = b && e.to_webp, o = e.data_srcset, s = t.parentNode;
                s && "PICTURE" === s.tagName && g(s, "srcset", o, n);
                var r = c(t, e.data_sizes);
                m(t, "sizes", r);
                var a = c(t, o);
                m(t, "srcset", a, n);
                var i = c(t, e.data_src);
                m(t, "src", i, n)
            }, IFRAME: function (t, e) {
                var n = c(t, e.data_src);
                m(t, "src", n)
            }, VIDEO: function (t, e) {
                var n = e.data_src, o = c(t, n);
                g(t, "src", n), m(t, "src", o), t.load()
            }
        }, y = function (t, e) {
            var n, o, s = e._settings, r = t.tagName, a = p[r];
            if (a) return a(t, s), e._updateLoadingCount(1), void (e._elements = (n = e._elements, o = t, n.filter(function (t) {
                return t !== o
            })));
            !function (t, e) {
                var n = b && e.to_webp, o = c(t, e.data_src), s = c(t, e.data_bg);
                if (o) {
                    var r = _(o, n);
                    t.style.backgroundImage = 'url("' + r + '")'
                }
                if (s) {
                    var a = _(s, n);
                    t.style.backgroundImage = a
                }
            }(t, s)
        }, w = function (t, e) {
            h ? t.classList.add(e) : t.className += (t.className ? " " : "") + e
        }, E = function (t, e) {
            t && t(e)
        }, L = "load", I = "loadeddata", O = "error", k = function (t, e, n) {
            t.addEventListener(e, n)
        }, A = function (t, e, n) {
            t.removeEventListener(e, n)
        }, C = function (t, e, n) {
            A(t, L, e), A(t, I, e), A(t, O, n)
        }, z = function (t, e, n) {
            var o, s, r = n._settings, a = e ? r.class_loaded : r.class_error, i = e ? r.callback_load : r.callback_error,
                c = t.target;
            o = c, s = r.class_loading, h ? o.classList.remove(s) : o.className = o.className.replace(new RegExp("(^|\\s+)" + s + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, ""), w(c, a), E(i, c), n._updateLoadingCount(-1)
        }, N = function (n, o) {
            var t, e, s, r = function t(e) {
                z(e, !0, o), C(n, t, a)
            }, a = function t(e) {
                z(e, !1, o), C(n, r, t)
            };
            s = a, k(t = n, L, e = r), k(t, I, e), k(t, O, s)
        }, x = ["IMG", "IFRAME", "VIDEO"], M = function (t, e, n) {
            R(t, n), e.unobserve(t)
        }, S = function (t) {
            var e = d(t);
            e && (clearTimeout(e), u(t, null))
        };

    function R(t, e, n) {
        var o = e._settings;
        !n && l(t) || (E(o.callback_enter, t), -1 < x.indexOf(t.tagName) && (N(t, e), w(t, o.class_loading)), y(t, e), i(t, r, a), E(o.callback_set, t))
    }

    var j = function (t) {
        return t.isIntersecting || 0 < t.intersectionRatio
    }, T = function (t, e) {
        this._settings = _extends({}, n, t), this._setObserver(), this._loadingCount = 0, this.update(e)
    };
    return T.prototype = {
        _manageIntersection: function (t) {
            var e, n, o, s, r, a = this._observer, i = this._settings.load_delay, c = t.target;
            i ? j(t) ? (e = c, n = a, s = (o = this)._settings.load_delay, (r = d(e)) || (r = setTimeout(function () {
                M(e, n, o), S(e)
            }, s), u(e, r))) : S(c) : j(t) && M(c, a, this)
        }, _onIntersection: function (t) {
            t.forEach(this._manageIntersection.bind(this))
        }, _setObserver: function () {
            var t;
            e && (this._observer = new IntersectionObserver(this._onIntersection.bind(this), {
                root: (t = this._settings).container === document ? null : t.container,
                rootMargin: t.thresholds || t.threshold + "px"
            }))
        }, _updateLoadingCount: function (t) {
            this._loadingCount += t, 0 === this._elements.length && 0 === this._loadingCount && E(this._settings.callback_finish)
        }, update: function (t) {
            var e = this, n = this._settings, o = t || n.container.querySelectorAll(n.elements_selector);
            this._elements = Array.prototype.slice.call(o).filter(function (t) {
                return !l(t)
            }), !v && this._observer ? this._elements.forEach(function (t) {
                e._observer.observe(t)
            }) : this.loadAll()
        }, destroy: function () {
            var e = this;
            this._observer && (this._elements.forEach(function (t) {
                e._observer.unobserve(t)
            }), this._observer = null), this._elements = null, this._settings = null
        }, load: function (t, e) {
            R(t, this, e)
        }, loadAll: function () {
            var e = this;
            this._elements.forEach(function (t) {
                e.load(t)
            })
        }
    }, t && function (t, e) {
        if (e) if (e.length) for (var n, o = 0; n = e[o]; o += 1) f(t, n); else f(t, e)
    }(T, window.lazyLoadOptions), T
}), function (e, t) {
    "use strict";

    function n() {
        t.body.classList.add("litespeed_lazyloaded")
    }

    function a() {
        d = new LazyLoad({elements_selector: "[data-lazyloaded]", callback_finish: n}), o = function () {
            d.update()
        }, e.MutationObserver && new MutationObserver(o).observe(t.documentElement, {
            childList: !0,
            subtree: !0,
            attributes: !0
        })
    }

    var d, o;
    e.addEventListener ? e.addEventListener("load", a, !1) : e.attachEvent("onload", a)
}(window, document);</script>

    <script src="components/modal.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/goal.js"></script>

    <script src="js/counters_info.js"></script>
    <script src="js/test.js"></script>

    <script src="/lib/auto_count_goal/request.js"></script>
</body>

</html>

<!-- Page generated by LiteSpeed Cache 3.6.4 on 2021-07-09 16:12:04 -->