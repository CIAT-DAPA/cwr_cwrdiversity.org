<?php
/**
 * 	Template Name: Expert Evaluation Map Template
 */
?>	

<?php
get_header();

$crop_ID = $_REQUEST['crop_id'];
$AVENA = "Avena";
$CAJANUS = "Cajanus";
$CICER = "Cicer";
$DAUCUS = "Daucus";
$EGGPLANT = "Solanum_Eggplant";
$Eleusine = "Eleusine";
$HELIANTHUS = "Helianthus";
$HORDEUM = "Hordeum";
$LATHYRUS = "Lathyrus";
$IPOMOEA = "Ipomoea";
$LENS = "Lens";
$MALUS = "Malus";
$MEDICAGO = "Medicago";
$MUSA = "Musa";
$POTATO = "Solanum_Potato";
$PENNISETUM = "Pennisetum";
$PHASEOLUS = "Phaseolus";
$PISUM = "Pisum";
$RICE = "Oryza";
$SECALE = "Secale";
$SORGHUM = "Sorghum";
$VICIA = "Vicia";
$VIGNA = "Vigna";
$TRITICUM = "Wheat";
?>
<meta name="robots" content="noindex">
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/poshytip-1.1/jquery.poshytip.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/template-expert-evaluation.js"></script>

<script type="text/javascript">
    document.title =  "Expert Evaluation";
</script>

<div id="fullwidth">
    <div id="Expert-evaluation">
        <?php if ($crop_ID == null) { ?>
            <p id="title">Crop Wild Relative Gap Analysis Maps Expert Evaluation</p>
            <p>
                Please select your crop below.  The evaluation survey for your crop genepool will appear.  Please complete both pages of the survey.  For experts evaluating more than one crop genepool, please return to this page for each crop.  Thank you!
            </p>
            <div id="search-area">
                <legend>Search by Gene-pool</legend>
                <form id="form-genepool">
                    <div id="genepool-search">
                        <p>Please select your crop genepool:</p>
                        <select id="select-genepool" class="input-text" name="term" >
                            <option></option>
                            <!--
                            <option>Avena</option>
                            <option>Cajanus</option>
                            <option>Cicer</option>
                            <option>Daucus</option>
                            <option>Eleusine</option>
                            <option>Helianthus</option>
                            <option>Hordeum</option>-->
                            <option>Ipomoea</option>
                            <!--
                            <option>Lathyrus</option>
                            <option>Lens</option>
                            <option>Malus</option>
                            <option>Medicago</option>
                            <option>Musa</option>
                            <option>Oryza</option>
                            <option>Pennisetum</option>
                            <option>Phaseolus</option>
                            <option>Pisum</option>
                            <option>Secale</option>
                            <option>Solanum_Eggplant</option>
                            <option>Solanum_Potato</option>
                            <option>Sorghum</option>
                            <option>Vicia</option>
                            <option>Vigna</option>
                            <option>Wheat</option>-->
                        </select>
                    </div>
                </form>
            </div>

            <div id="Forms">
                <iframe id="Evaluation_Avena" src="https://docs.google.com/forms/d/1ckYHC3U_RXaVDdXVu2KQ-BUnctEMO6UbV__eQHwnOd4/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cajanus" src="https://docs.google.com/forms/d/1umgdDw2OX9CNjqJHULCyfcOgu6uR77r2sguig6wWhVM/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cicer" src="https://docs.google.com/forms/d/1zr6hfMu-hSBiTmFSOdmUrgMj65OEGuWCfyF2d4fbnMQ/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Daucus" src="https://docs.google.com/forms/d/1IJmBP4RzZj_CW71H_-jyOCAWpUEfkQGSyAifQAqdtso/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Solanum_Eggplant" src="https://docs.google.com/forms/d/1nzkJqYklDzvSninCY_XUvCZxviNr0I5Jza-l7MY4xTw/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Eleusine" src="https://docs.google.com/forms/d/1LwkShrPspCwPqyEKO7zeBJlPpPNSC0qeoAqTujzCuKI/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Helianthus" src="https://docs.google.com/forms/d/1rFVxpRLpf6xfCqe-6J5iMUA6MgUK8ZsuhaB8vvCA0_Y/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Hordeum" src="https://docs.google.com/forms/d/12zeqqDF3cn9CryI6YdyUTsnwPQ7CA7LPkew-TvYqIsA/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Lathyrus" src="https://docs.google.com/forms/d/1RN8X9dg4bTqu836CDYi85Icskuz7M0MPFILBMJzf7dc/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Ipomoea" src="https://docs.google.com/forms/d/1aIQ_lmye3t3fZkMK9psFmDP4oyTq76z8liLc59kVvqM/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Lens" src="https://docs.google.com/forms/d/173XfqQ55TrivE4WiGtssLZ53-fkJvvx6pwxVKKRlFZs/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Malus" src="https://docs.google.com/forms/d/1u4sr3xhInNNeiJqS8L1Ni3M2hWoPPy750tnrazxM1qU/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Medicago" src="https://docs.google.com/forms/d/1Fkn7S-Kpbm2v9LZVVHOUG4m40ywtA6Pdr9Rh8eiTXfA/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Musa" src="https://docs.google.com/forms/d/1GeDSRFUy8FOgXoK2JHxbM4v0L9Yb-CyjjDKzfYRc7TY/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Pennisetum" src="https://docs.google.com/forms/d/1gHAte92l7b1veC8QlWo6ZWH8ukfGd7pX-aq3EHSQgOc/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Phaseolus" src="https://docs.google.com/forms/d/1Fin66SDU6IE91Lm8NRTkhHI_MRNrgPwnNGko7FO8EAc/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Pisum" src="https://docs.google.com/forms/d/1l8zoiINhkHMknwIJjsJ0Op1TJ9nErHUUz4frPmLUzK4/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Solanum_Potato" src="https://docs.google.com/forms/d/1I_gbZ-utdaKmWI_zocV-jw8aKyWs8xI7o22niO8u95s/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Secale" src="https://docs.google.com/forms/d/1_tfC5uQOiwRtqIW30K3tA00P7d_uOn4yCktAVA3EAG4/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Sorghum" src="https://docs.google.com/forms/d/1uWxIJFB1vzOUCT1kigaS5Xzj3fpOJCxjfURIZxbsg40/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Oryza" src="https://docs.google.com/forms/d/1NVgOgaOO-8szmSfYTV9gXR_rmEupnUjvgfr0r-Bdts8/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Vicia" src="https://docs.google.com/forms/d/1vIcYZ7Tn-UqT1w9jDUJwDOUFFIkEj_XqLgk_8Xuudvs/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Vigna" src="https://docs.google.com/forms/d/1HmWKGwErfAd6WA29E5GEK4pSbnO2Mp91GLoXMTleACM/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Wheat" src="https://docs.google.com/forms/d/1hBqZAxnUZEU1NURu7gi-li8GfBBIZ5qrfMSAoPOdBYI/viewform" width="915"  height="680" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
            </div>

            <img class="left main" src="<?php bloginfo('stylesheet_directory'); ?>/images/ciat.jpg"></img>
            <img class="left main" src="<?php bloginfo('stylesheet_directory'); ?>/images/trustlogo.png"></img>
            <img class="left main" src="<?php bloginfo('stylesheet_directory'); ?>/images/Library - 004.png"></img>
        <?php } else { ?>
            
        <?php } ?>

    </div>
</div>
<?php get_footer(); ?>