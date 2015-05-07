<!-- JAVASCRIPTS -->
<script type="text/javascript" src="{$smarty.const.SMARTY_JS_URI}/jquery-ui/jquery-ui-1.10.0.custom.min.js"></script>
<script type="text/javascript" src="{$smarty.const.SMARTY_JS_URI}/jquery.jnotify/jquery.jnotify.min.js"></script>
<!-- Tooltips from: http://vadikom.com/tools/poshy-tip-jquery-plugin-for-stylish-tooltips -->
<script type="text/javascript" src="{$smarty.const.SMARTY_JS_URI}/poshytip-1.1/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="{$smarty.const.SMARTY_JS_URI}/cwr-occurrences.js"></script>

<link rel="stylesheet" type="text/css" href="{$smarty.const.SMARTY_CSS_URI}/jquery-ui-1.8.17.custom.css" />
<link rel="stylesheet" type="text/css" href="{$smarty.const.SMARTY_CSS_URI}/jquery.jnotify.min.css" />
<link rel="stylesheet" type="text/css" href="{$smarty.const.SMARTY_JS_URI}/poshytip-1.1/tip-green/tip-green.css" />
<link rel="stylesheet" type="text/css" href="{$smarty.const.SMARTY_CSS_URI}/cwr-occurrences.css" />
<link rel="stylesheet" type="text/css" href="{$smarty.const.SMARTY_CSS_URI}/general.css" />
<!-- Header Title -->
<script type="text/javascript">
    document.title =  "Crop Wild Relatives Global Occurrence" ;
</script>

<!-- start temporal text -->
<!--<p style="color: red; font-weight: bold; text-align: center; font-size: 16px; margin-bottom: 20px">This page is currently under development and will be released shortly</p>-->
<!-- end temporal texto -->


<p id="title">Crop Wild Relative Global Occurrence Database</p>

<div id="fullwidth" class="post">


    <div id="cwr-search">
        <div id="rightDiv" >
            <div id="text">
                <p>
			Here you may download occurrence information on crop wild relatives, gathered from hundreds of 
			<a href="http://www.cwrdiversity.org/data-sources/" target="_blank">genebanks, herbaria, researchers, and other data providers</a>. 
			<br />
			<br />
			A brief description on how the database was assembled, and some of its characteristics is available on this <a href="http://www.slideshare.net/CWRdiversity/global-database-on-crop-wild-relatives" target="_blank">poster</a>
			<br />
			<br />
			This data can be used to map the known distributions of crop wild relatives. Data is covered under 
			<a href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons license Attribution (CC BY 4.0)</a>. 
			Please follow the license requirements when using the occurrence data.
			<br />
			<br />
			<center><img src="http://www.cwrdiversity.org/wp-content/uploads/2015/04/license_creativecommons_4.0.png" alt="license" /></center>
			<br />
			<br />
			Please note that a revised/improved version of the occurrence database will be available by the end of June 2015.		
		</p>
            </div>
        </div>  

        <!-- Search by Genus -->
        <div id="classic-search">
            <fieldset class="search-box">                
                <legend class="legend">Search by genus</legend>
                <form id="form-genus" name="form-genus" action="download.php" method="POST" enctype="application/x-www-form-urlencoded">
                    <p>Enter a genus (eg. <i>Zea</i>) </p>
                    <input id="genus" class="input-text" type="text" name="genus" />
                    <input id="submit-genus" class="submit-button" type="submit" value="Download" />
                    <img class="loader" src="{$smarty.const.SMARTY_IMG_URI}/h-loading.gif" />
                </form>
            </fieldset>
        </div>

        <!-- Search by Taxon -->
        <div id="classic-search">
            <fieldset class="search-box">                
                <legend class="legend">Search by taxon</legend>
                <form id="form-taxon" name="form-taxon" action="download.php" method="POST" enctype="application/x-www-form-urlencoded">
                    <p>Enter a taxon (eg. <i>Zea mays</i>) </p>
                    <input id="taxon" class="input-text" type="text" name="taxon" />
                    <input id="submit-taxon" class="submit-button" type="submit" value="Download" />
                    <img class="loader" src="{$smarty.const.SMARTY_IMG_URI}/h-loading.gif" />
                </form>
            </fieldset>
        </div>

        <!-- Search by Country -->
        <div id="classic-search">
            <fieldset class="search-box">                
                <legend class="legend">Search by country</legend>
                <form id="form-country" name="form-country" action="download.php" method="POST" enctype="application/x-www-form-urlencoded">
                    <p>Enter a country (eg. <i>Colombia</i>) </p>
                    <input id="country" class="input-text" type="text" name="country" />
                    <input id="submit-country" class="submit-button" type="submit" value="Download" />
                    <img class="loader" src="{$smarty.const.SMARTY_IMG_URI}/h-loading.gif" />
                </form>
            </fieldset>
        </div>
    </div><!-- #cwr-search -->
</div><!-- #post -->
