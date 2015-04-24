<?php
/**
 * 	Template Name: Expert Evaluation Non Priorites Map Template
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
             <p id="title">Crop Wild Relative Gap Analysis Map Expert Evaluation</p>
            <p>
                 Please select your crop below.  The evaluation survey for your crop genepool will appear.  Please complete all pages of the survey.  For experts evaluating more than one crop genepool, please return to this page for each crop.  Thank you!
            </p>
            <div id="search-area">
                <legend>Search by Gene-pool</legend>
                <form id="form-genepool">
                    <div id="genepool-search">
                        <p>Please select your crop genepool:</p>
                        <select id="select-genepool" class="input-text" name="term" >
                            <option></option>
                            <option>Allium</option>
                            <option>Asparagus</option>
                            <option>Beet</option>
                            <option>Brassica</option>
                            <option>Breadfruit</option>
                            <option>Cacao</option>
                            <option>Capsicum</option>
                            <option>Citrus</option>
                            <option>Cotton</option>
                            <option>Cucumis</option>
                            <option>Dioscorea</option>
                            <option>Grape</option>
                            <option>Groundnut</option>
                            <option>Lettuce</option>
                            <option>Maize</option>
                            <option>Mango</option>
                            <option>Millet_panicum</option>
                            <option>Millet_setaria</option>
                            <option>Papaya</option>
                            <option>Pear</option>
                            <option>Pineapple</option>
                            <option>Prunus</option>
                            <option>Quinoa</option>
                            <option>Safflower</option>
                            <option>Soybean</option>
                            <option>Spinach</option>
                            <option>Squash</option>
                            <option>Strawberry</option>
                            <option>Sugar_cane</option>
                            <option>Tomato</option>
                            <option>Vigna</option>
                            <option>Watermelon</option>
                        </select>
                    </div>
                </form>
            </div>

            <div id="Forms">
                <iframe id="Evaluation_Allium" src="https://docs.google.com/forms/d/1-J7YuchshU7VHac5SMBY2zDhuBOwHGnmtWHlcko05jk/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Asparagus" src="https://docs.google.com/forms/d/181TzmGyU0a7OL0iuduW-z6lkHTlyEjQhmCfZb58Iknw/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Beet" src="https://docs.google.com/forms/d/1UhRdMVwfBCeGkKf6k4VI3lgt0VWQIid4newx97l8SQQ/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Brassica" src="https://docs.google.com/forms/d/19Kqs4-hHsaJQmhkUN9EsOC3NxTp93gHIw0Ck2R4aJZc/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Breadfruit" src="https://docs.google.com/forms/d/1TCU0I2nnwW1gQeMbFBXJdeeIHCjLvNOGbEf6pXs6EdE/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cacao" src="https://docs.google.com/forms/d/1HMaCohy2RW6a6-V21_SaBkLzF656UTKEic47NHWjwvM/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Capsicum" src="https://docs.google.com/forms/d/1yPk_UGBmN_LbcFOAWiHXeXdMqLw2XDarHIMMXHOvrXg/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Citrus" src="https://docs.google.com/forms/d/12sTdDVkDDscAUN8JXjMZ7q4Ji7D85tG80G0uPrGPtnE/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cotton" src="https://docs.google.com/forms/d/1lT8F5w2n7J8jH5jwVqg_N-MvvjfNvH1q4VHFoLHDPAU/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cucumis" src="https://docs.google.com/forms/d/11EGFCFEhbZuf7OeUQN0lNLik6RhwCt_0sRAKtzhwB4I/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Dioscorea" src="https://docs.google.com/forms/d/1zVhy9EEdd6rCaliQpakEFERvgQw-Gh5_n2BHlB9uHi0/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Grape" src="https://docs.google.com/forms/d/1qC5FtkYRfppEqOje5z_1WUfhEvqTA47it0zqTY0VWiM/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Groundnut" src="https://docs.google.com/forms/d/13CnhoCV5yHIgr5WBBmytHt-49yHCUKqCRkpQf_RliLo/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Ipomoea" src="https://docs.google.com/forms/d/1aIQ_lmye3t3fZkMK9psFmDP4oyTq76z8liLc59kVvqM/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Lettuce" src="https://docs.google.com/forms/d/1NHYXKaQWpsBZ4MiGsrekkffpoA8xhZ1H1wHNjqnDqnk/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Maize" src="https://docs.google.com/forms/d/1jEqkGtBaVFaowwr88ZOOGN0lCOMdRx1TN7ODRTSPSEc/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Mango" src="https://docs.google.com/forms/d/12iCVMKGFLnXaK9v-jwHR02mGBo88h0BKtC0o0_xKmLM/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Millet_panicum" src="https://docs.google.com/forms/d/1QnLSbWXbtO14rjFhQVFwcpAe-d8S-T5-F1dvI2dyyrg/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Millet_setaria" src="https://docs.google.com/forms/d/1SUpzBLZS9xx6Cx0hyCwFa6-FzV7PzOds3McEit0bM_U/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Papaya" src="https://docs.google.com/forms/d/1wv32gRiGwplZiT8jxx58oyYa8rmIXb4n3xiPgC8mXu4/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Pear" src="https://docs.google.com/forms/d/19t_7eeVq2vHj9ztIeDtMab1WwAl3Xy3kig1Yhq3Vz1g/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Pineapple" src="https://docs.google.com/forms/d/1PgFEfDwfnp9dbyBvbfhgDZXWt7zLvFuuO0kehneALkM/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Prunus" src="https://docs.google.com/forms/d/1S5kmwMs4vW3k1cHqyWpgLn4koNUPlrOagofoKsxDu7w/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Quinoa" src="https://docs.google.com/forms/d/1d254vGl2DTtZWop_CL_1YVMQty3OeoPCOlllTjPEml8/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Safflower" src="https://docs.google.com/forms/d/1AkraiBvmdJcdKejpOK2FOdA8MRzhQPc7rjlziJuzbvI/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Soybean" src="https://docs.google.com/forms/d/1JngcEWDilwduw5CFENkfDuUpWsX1mWzeFQz-4vg8HjU/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Spinach" src="https://docs.google.com/forms/d/1cSSTLR37CjBGJKyFYVeDbTni576qyB6Lsjs9WJCF5NM/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Squash" src="https://docs.google.com/forms/d/1hXWAGZmPZ_QUK69jpfgT6sdUJF3u-CICpWQ6gy2WhcA/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Strawberry" src="https://docs.google.com/forms/d/1a4Luju9Q2aI7TIfeX2sX8yATWmH_-5pEC--4n-TpOQs/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Sugar_cane" src="https://docs.google.com/forms/d/19WI3G-HwIHrwx-KdKL3btypl4WmLPl_LH-MUjIDueD4/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Tomato" src="https://docs.google.com/forms/d/1O2rqXMap8mY02eX0as6m8ptY4bTeWtor6poxYGAp8R8/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Vigna" src="https://docs.google.com/forms/d/1Ou7IXEVZL6rUVXc0B2T-pwq4R6aUrJy5eQJIPEe1Nz0/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Watermelon" src="https://docs.google.com/forms/d/1tbgU4BHQLpmHhOGtjQe3v6UnsKr3AMUa5e6oLKClyJQ/viewform" width="915"  height="700" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
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