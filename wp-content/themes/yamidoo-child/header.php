<?php
/* FIREPHP Temporal Debugger while developing process */
ob_start();


global $options;
foreach ($options as $value) {
    if (get_settings($value['id']) === FALSE) {
        $$value['id'] = $value['std'];
    } else {
        $$value['id'] = get_settings($value['id']);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <title><?php
if ($wpzoom_seo_enable == 'Enable') {
    wpzoom_titles();
} else {
    ?> <?php
            bloginfo('name');
            wp_title('-');
        }
?></title>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <?php
        if ($wpzoom_seo_enable == 'Enable') {
            if (is_single() || is_page()) : if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
                        <?php meta_post_keywords(); ?>
                        <?php
                    endwhile;
                endif;
            elseif (is_home()) :
                ?>
                <meta name="description" content="<?php
        if (strlen($wpzoom_meta_desc) < 1) {
            bloginfo('description');
        } else {
            echo"$wpzoom_meta_desc";
        }
                ?>" />
                      <?php meta_home_keywords(); ?>
                  <?php endif; ?>
                  <?php wpzoom_index(); ?>
                  <?php
                  wpzoom_canonical();
              }
              ?>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php wpzoom_rss(); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
        <!-- changing dropdown.css location -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dropdown.css" type="text/css" media="screen" />
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">

            // Load the Visualization API and the piechart package.
            google.load('visualization', '1.0', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);

            // Callback that creates and populates a data table,
            // instantiates the pie chart, passes in the data and
            // draws it.
            function drawChart() {

                // Create the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['HPS', 763],
                    ['MPS', 145],
                    ['LPS', 130],
                    ['NFCR', 51]
                ]);

                // Set chart options
                var options = {
                    'width':400,
                    'height':300,
                    'colors': ['#F22020', '#F9C840', '#F5FF56', '#2BC919'],
                    'chartArea': {'width': '100%', 'height': '85%'},
                    'pieSliceTextStyle' : {color : "#000000"}};

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>  
        <script type='text/javascript'>
            google.load('visualization', '1', {'packages': ['geochart']});
            google.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                    ['Country', 'Number of CWR'],
                    ['Brazil', 134],
                    ['China', 96],
                    ['India', 86],
                    ['United States', 82],
                    ['Turkey', 77],
                    ['Mexico', 74],
                    ['Greece', 68],
                    ['Iran', 68],
                    ['Spain', 64],
                    ['Indonesia', 64],
                    ['Italy', 56],
                    ['Malaysia', 55],
                    ['France', 54],
                    ['Azerbaijan',52],
                    ['Bolivia',51],
                    ['Portugal',51],
                    ['Bulgaria',51],
                    ['Nepal',51],
                    ['Russia',49],
                    ['Afghanistan',49],
                    ['Syria',48],
                    ['Pakistan',48],
                    ['Peru',48],
                    ['Vietnam',48],
                    ['Thailand',47],
                    ['Myanmar',47],
                    ['Armenia',43],
                    ['Iraq',43],
                    ['Israel',42],
                    ['Albania',42],
                    ['Paraguay',41],
                    ['Ukraine',39],
                    ['Morocco',39],
                    ['Lebanon',38],
                    ['Argentina',37],
                    ['Algeria',36],
                    ['Croatia',36],
                    ['Ethiopia',36],
                    ['Germany',35],
                    ['Bhutan',35],
                    ['Switzerland',34],
                    ['Jordan',34],
                    ['Kenya',34],
                    ['Austria',33],
                    ['Tunisia',33],
                    ['Macedonia',33],
                    ['Hungary',33],
                    ['Montenegro',32],
                    ['Libya',32],
                    ['Japan',32],
                    ['Turkmenistan',32],
                    ['Philippines',32],
                    ['Belgium',32],
                    ['Egypt',31],
                    ['Czech Republic',31],
                    ['Tajikistan',30],
                    ['Romania',30],
                    ['Bosnia and Herzegovina',30],
                    ['Mozambique',30],
                    ['Canada',29],
                    ['Brunei',29],
                    ['Serbia',29],
                    ['Cyprus',29],
                    ['Australia',29],
                    ['Kosovo',28],
                    ['South Africa',28],
                    ['Tanzania',27],
                    ['Papua New Guinea',27],
                    ['Poland',27],
                    ['Colombia',27],
                    ['Venezuela',26],
                    ['United Kingdom',26],
                    ['Slovenia',26],
                    ['Bangladesh',26],
                    ['Laos',26],
                    ['Slovakia',26],
                    ['Taiwan',25],
                    ['Netherlands',25],
                    ['Ecuador',25],
                    ['Andorra',25],
                    ['Saudi Arabia',23],
                    ['Guatemala',23],
                    ['Kyrgyzstan',23],
                    ['Sri Lanka',22],
                    ['Uganda',22],
                    ['Nigeria',22],
                    ['Zimbabwe',21],
                    ['Uzbekistan',21],
                    ['Democratic Republic of the Congo',21],
                    ['Cambodia',21],
                    ['Angola',21],
                    ['Kazakhstan',20],
                    ['Cameroon',20],
                    ['Eritrea',20],
                    ['Swaziland',19],
                    ['Sudan',19],
                    ['Liechtenstein',19],
                    ['Somalia',19],
                    ['North Korea',19],
                    ['South Sudan',18],
                    ['Panama',18],
                    ['Namibia',18],
                    ['Costa Rica',18],
                    ['Ireland',17],
                    ['Ghana',17],
                    ['Central African Republic',17],
                    ['Malawi',17],
                    ['Belize',16],
                    ['Guyana',16],
                    ['Benin',16],
                    ['Moldova',16],
                    ['Yemen',15],
                    ['Togo',15],
                    ["Côte d'Ivoire",15],
                    ['Chile',14],
                    ['Burundi',14],
                    ['Botswana',14],
                    ['Zambia',14],
                    ['Honduras',14],
                    ['Uruguay',14],
                    ['Lesotho',14],
                    ['Suriname',14],
                    ['South Korea',14],
                    ['Liberia',14],
                    ['Sierra Leone',14],
                    ['Nicaragua',13],
                    ['Rwanda',13],
                    ['Republic of Congo',13],
                    ['Burkina Faso',13],
                    ['Sweden',13],
                    ['Oman',13],
                    ['Malta',12],
                    ['Luxembourg',12],
                    ['Lithuania',11],
                    ['Chad',11],
                    ['Guinea',11],
                    ['Palestina',11],
                    ['El Salvador',11],
                    ['French Guiana',10],
                    ['Madagascar',10],
                    ['Norway',10],
                    ['Denmark',10],
                    ['East Timor',10],
                    ['Mongolia',9],
                    ['Gabon',9],
                    ['Niger',9],
                    ['Mali',9],
                    ['Equatorial Guinea',9],
                    ['Singapore',8],
                    ['Gibraltar',8],
                    ['Cuba',8],
                    ['Senegal',8],
                    ['Jersey',7],
                    ['Djibouti',7],
                    ['Belarus',7],
                    ['Puerto Rico',7],
                    ['Guernsey',7],
                    ['Seychelles',7],
                    ['Hong Kong',6],
                    ['Gambia',6],
                    ['French Southern Territories',6],
                    ['Dominican Republic',6],
                    ['Jamaica',6],
                    ['Latvia',6],
                    ['United Arab Emirates',5],
                    ['Trinidad and Tobago',5],
                    ['San Marino',5],
                    ['Isle of Man',5],
                    ['Cape Verde',5],
                    ['Guinea-Bissau',5],
                    ['Mauritania',5],
                    ['Comoros',5],
                    ['Mauritius',5],
                    ['Ex-Yugoslavia',5],
                    ['Estonia',5],
                    ['Western Sahara',4],
                    ['Haiti',4],
                    ['Guadeloupe',4],
                    ['Bermuda',4],
                    ['Bonaire, Saint Eustatius and Saba',4],
                    ['Reunion',4],
                    ['United States Minor Outlying Islands',4],
                    ['Caspian Sea',4],
                    ['Mayotte',4],
                    ['Martinique',4],
                    ['Saint Vincent and the Grenadines',4],
                    ['Bahamas',4],
                    ['Solomon Islands',4],
                    ['Micronesia',3],
                    ['Virgin Islands, U.S.',3],
                    ['Qatar',3],
                    ['Barbados',3],
                    ['Sao Tome and Principe',3],
                    ['Finland',3],
                    ['Saint Lucia',3],
                    ['Aruba',3],
                    ['British Indian Ocean Territory',2],
                    ['Bahrain',2],
                    ['Guam',2],
                    ['Curaçao',2],
                    ['Saint Kitts and Nevis',2],
                    ['Faroe Islands',2],
                    ['French Polynesia',2],
                    ['Cayman Islands',2],
                    ['Fiji',2],
                    ['Anguilla',2],
                    ['Dominica',2],
                    ['Northern Mariana Islands',2],
                    ['Vanuatu',2],
                    ['Grenada',2],
                    ['New Caledonia',2],
                    ['Montserrat',2],
                    ['Kuwait',2],
                    ['Saint Helena',2],
                    ['Christmas Island',2],
                    ['Palau',2],
                    ['Greenland',1],
                    ['Samoa',1],
                    ['Turks and Caicos Islands',1],
                    ['Iceland',1],
                    ['Aaland Islands',1],
                    ['Tonga',1],
                    ['Saint-Barthélemy',1],
                    ['Maldives',1],
                    ['Saint-Martin',1],
                    ['Kiribati',1],
                    ['Sint Maarten',1],
                    ['Antigua and Barbuda',1],
                    ['British Virgin Islands',1]
                ]);

                var options = {
                    colorAxis: {colors: ['#CCE5FF', '#99CCFF','#66B2FF','#3399FF']}
                };

                var chart = new google.visualization.GeoChart(document.getElementById('chart_div_map'));
                chart.draw(data, options);
            };
        </script>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
        <?php if (strlen($wpzoom_misc_favicon) > 1) { ?><link rel="shortcut icon" href="<?php echo "$wpzoom_misc_favicon"; ?>" type="image/x-icon" /><?php } ?>
        <?php if ($wpzoom_sidebar == 'Left') { ?><style type="text/css">#sidebar { float:left; margin-right:20px;} </style> <?php } ?>
        <?php remove_action('wp_print_styles', 'pagenavi_stylesheets'); ?>
        <?php wp_enqueue_script('jquery'); ?>


	<?php wp_enqueue_script('jssor',get_template_directory_uri().'/js/jssor/jssor.slider.mini.js'); ?>
	<?php wp_enqueue_script('jssor_setup',get_template_directory_uri().'/js/jssor/jssor.slider.mini.setup.js'); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jssor.css" type="text/css"/>


        <?php if (is_singular())
            wp_enqueue_script('comment-reply'); ?>
        <?php
        if (is_home() && $paged < 2) {
            wpzoom_js("slider");
        }
        ?>

        <?php wp_head(); ?>
        <?php wpzoom_js("tabs", "dropdown"); ?>


    </head>


    <body <?php body_class(); ?>>

        <div id="page-wrap">
            <div id="secondary-menu">
                <div id="nav" class="dropdown">

                    <?php wp_nav_menu(array('container' => '', 'container_class' => '', 'menu_class' => '', 'sort_column' => 'menu_order', 'theme_location' => 'secondary')); ?>
                    <?php if (strlen($wpzoom_twitter) > 1 && $wpzoom_twitter_head == 'Yes') { ?><a href="http://twitter.com/<?php echo $wpzoom_twitter; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter" /></a><?php } ?>

                </div>
            </div><!-- end pages menu -->

            <div id="header">

                <!-- Logo -->
                <div id="logo">
                    <a href="<?php echo get_option('home'); ?>/"><?php if ($wpzoom_misc_logo_path) { ?><img src="<?php echo "$wpzoom_misc_logo_path"; ?>" alt="<?php bloginfo('name'); ?>" /><?php } else { ?><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /><?php } ?></a>
                </div>

                <div id="righthead">

                    <!-- 468x60 banner code -->

                    <?php if (strlen($wpzoom_ad_head_imgpath) > 1 && $wpzoom_ad_head_select == 'Yes') { ?>
                        <?php
                        if (strlen($wpzoom_ad_head_imgpath) > 1) {
                            echo stripslashes($wpzoom_ad_head_imgpath);
                        }
                        ?>
                    <?php } ?>


                </div>
                <!--
                                <div id="ajax-post-search" class="footer-widget widget_cardoza_ajax_search">
                                    <h2 class="widgettitle">Search</h2>
                                    <form id="search_form">
                                        <input type="text" name="srch_txt" id="srch_txt" oninput="javascipt:do_search_js(document.getElementById('srch_txt').value)">
                                        <input name="action" type="hidden" value="the_search_text">
                                    </form>
                                <div id="search_result">Type your search in the search box.</div></div>
                -->
                <!-- Search Form -->
                <!--   <div id="search"> 
                <?php /* include (get_stylesheet_directory() . '/searchform.php'); */ ?>
                   </div> -->

            </div> <!-- end header -->


            <div id="main-wrap">


                <div id="menu" class="dropdown">

                    <?php wp_nav_menu(array('container' => '', 'container_class' => '', 'menu_class' => '', 'sort_column' => 'menu_order', 'theme_location' => 'primary')); ?>

                </div> <!-- end categ -->


                <div id="content-wrap">
