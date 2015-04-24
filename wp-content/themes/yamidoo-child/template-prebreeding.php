<?php
/**
 * 	Template Name: Prebreeding Template
 */
?>	
<?php require('functions/prebreeding_functions.php'); ?>
<?php
get_header();
$crop_ID = $_REQUEST['crop_id'];
$limit = $_REQUEST['limit'];
?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/poshytip-1.1/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/template-prebreeding.js"></script>

<script type="text/javascript">
    document.title =  "Prebreeding";
</script>
<div id="fullwidth">
    <div id="prebreeding" >  
        <div id="articles" class="background-gradient-articles">
            <div id="art-title">
                Recent Posts
            </div>
            <div id="art-content">
            <?php the_post_by_idcrop($crop_ID, $limit); ?>
            </div>
        </div>
        <div id="resources" class="background-gradient-resources">
            <div id="res-title">
                Resources
            </div>
            <div id="res-content">
            <?php the_resources_by_idcrop($crop_ID, $limit); ?>
                <div id="temp-resource">
                    <div class="prebreeding left">
                        <a href="http://www.slideshare.net/cwr_use">
                            <img src="http://www.cwrdiversity.org/wp-content/themes/yamidoo-child/images/file-extensions/pps.png" alt="download" title="download">
                        </a>
                    </div>
                    <div class="prebreeding res_title"><a href="http://www.slideshare.net/cwr_use">Potato Pre-breeding</a><br><span>August 9, 2012</span></div>
                    <p>Please <a class="underline blue text-temp" href="http://www.slideshare.net/cwr_use" target="_blank"> click here</a> to see a set of presentations on the use of wild relatives for potato pre-breeding</p>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="cwruse-desc" class="left">
            <div id="cwruse-desc-title">CWR Usage Information</div>
            <div id="cwruse-desc-container" class="right">Prueba, aqui deberia ir un texto explicando el uso de la seccion de CWR Use</div>
            <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/ciat.png" class="left"></img> 
        </div>
        <div id="ajax-post-search" class="widget_cardoza_ajax_search right">
            <h2 class="widgettitle">Search</h2>
            <form id="search_form">
                <input type="text" name="srch_txt" id="srch_txt" oninput="javascipt:do_search_js(document.getElementById('srch_txt').value)">
                <input name="action" type="hidden" value="the_search_text">
            </form>
            <div id="search_result">Type your search in the search box.</div> 
        </div>
    </div>
</div>
<?php get_footer(); ?>