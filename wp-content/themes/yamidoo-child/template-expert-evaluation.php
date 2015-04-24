<?php
/**
 * 	Template Name: Expert Evaluation Template
 */
?>	

<?php
get_header();

$crop_ID = $_REQUEST['crop_id'];

$ALLIUM = "Allium";
$ASPARAGUS = "Asparagus";
$BEET = "Beet";
$BRASSICA = "Brassica";
$BREADFRUIT = "Breadfruit";
$CACAO = "Cacao";
$CAPSICUM = "Capsicum";
$CITRUS = "Citrus";
$COCOYAM = "Cocoyam";
$COTTON = "Cotton";
$CUCUMIS = "Cucumis";
$DIOSCOREA = "Dioscorea";
$GRAPE = "Grape";
$GROUNDNUT = "Groundnut";
$IPOMOEA = "Ipomoea";
$LETTUCE = "Lettuce";
$MAIZE = "Maize";
$MANGO = "Mango";
$MILLET_PANICUM = "Millet_Panicum";
$MILLET_SETARIA = "Millet_Setaria";
$MUSA = "Musa";
$PAPAYA = "Papaya";
$PEAR = "Pear";
$PINEAPPLE = "Pineapple";
$PRUNUS = "Prunus";
$QUINOA = "Quinoa";
$SAFFLOWER = "Safflower";
$SOYBEAN = "Soybean";
$SPINACH = "Spinach";
$SQUASH = "Squash";
$STRAWBERRY = "Strawberry";
$SUGARCANE = "Sugar_Cane";
$TOMATO = "Tomato";
$VIGNA = "Vigna";
$WATERMELON = "Watermelon";

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
            <p id="title">Crop Wild Relative Gap Analysis Data Expert Evaluation</p>
            <p>
                Please select your crop below.  The evaluation survey for your crop genepool will appear.  Please complete both pages of the survey (2 pages in total).  For experts evaluating more than one crop genepool, please return to this page for each crop.  Thank you!
            </p>
            <div id="search-area">
                <legend>Search by Gene-pool</legend>
                <form id="form-genepool">
                    <div id="genepool-search">
                        <p>Please select your crop genepool:</p>
                        <select id="select-genepool" class="input-text" name="term" >
                            <option></option>
                            <!--
                            <option>Allium</option>
                            <option>Asparagus</option>
                            <option>Beet</option>
                            <option>Brassica</option>
                            <option>Breadfruit</option>
                            <option>Cacao</option>
                            <option>Capsicum</option>
                            <option>Citrus</option>
                            <option>Cocoyam</option>
                            <option>Cotton</option>
                            <option>Cucumis</option>
                            <option>Dioscorea</option>
                            <option>Grape</option>
                            <option>Groundnut</option>-->
                            <option>Ipomoea</option><!--
                            <option>Lettuce</option>
                            <option>Maize</option>
                            <option>Mango</option>
                            <option>Millet_panicum</option>
                            <option>Millet_setaria</option>
                            <option>Musa</option>
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
                            <option>Watermelon</option>-->
                        </select>
                    </div>
                </form>
            </div>

            <div id="Forms">
                <iframe id="Evaluation_Allium" src="https://docs.google.com/forms/d/1BiV_3Aje_J8vbGlJcvnUnmpQFL8DRWBq0z1KUlOux8k/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Asparagus" src="https://docs.google.com/forms/d/1QWyKo62rPSk3zWyurs1tf1bwTUvGniuPbympBBWwHOs/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Beet" src="https://docs.google.com/forms/d/1Pkn3Ihm47ITlXb58D69VaUQB4xiTAreJ2D-2h3yW4Ik/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Brassica" src="https://docs.google.com/forms/d/1qwoD9SX-GaJR3sEwLS_Fl1jHURSyqSmx_ThuYTbX7m4/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Breadfruit" src="https://docs.google.com/forms/d/1qItE4xlyKucALnkjQNLUGIZcQi3X-lfDVPt8DP6Ol8U/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cacao" src="https://docs.google.com/forms/d/1876axbpqcRPm0m5ePRaupWUWs0PsUpmgzfZY5rl-AZA/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Capsicum" src="https://docs.google.com/forms/d/1h2YWzHER6j7UH32nP0BFnmbLumot6lhbRCFtFtOvrz8/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Citrus" src="https://docs.google.com/forms/d/1ejJ6VT6JhI9wDlzjm7Cg4t6_Lu8cE1mpbpppzF52ffU/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cocoyam" src="https://docs.google.com/forms/d/1REdAKBQ1ui7kS4kRgTYFwDBUUEecgtcN0Ey_KQF08CU/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cotton" src="https://docs.google.com/forms/d/1kBik1RUruZ0D90X5aNJKxjH83pQ2iNUrrY7-hwZca6A/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Cucumis" src="https://docs.google.com/forms/d/1LHfLlOCENMQSWZEAmqyLluXr9xDLh9JyBSZzstzmbYc/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Dioscorea" src="https://docs.google.com/forms/d/1D9xBCeLv7FaOMqNxhSNPCX_fokgCVh45tQQ8p-9urc8/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Grape" src="https://docs.google.com/forms/d/15-92DbPzXOghSM9khqIfT3TKjBiMWGssrLuY9J-NHwQ/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Groundnut" src="https://docs.google.com/forms/d/1ix8W2TXVxyRJB-sDCgmXNJblAvVD9QOYWLtv1QvGxDE/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Ipomoea" src="https://docs.google.com/forms/d/1fcsrP_LF16p_epZoktGOIeuQY8ioSpqliXLp_xkoc3U/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Lettuce" src="https://docs.google.com/forms/d/1TW9fZGLrhfM3Xc45Rz0UpBB8Q76slgsXpTuy9_-i_Cs/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Maize" src="https://docs.google.com/forms/d/1nYsBML5tJuEF8V2tygrXZw6YVQ-0Fy1Z2OZJAC2gAHQ/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Mango" src="https://docs.google.com/forms/d/14fTtvgvRDzjJgSAiQY3fARLyJPUx-radWGkL8511mhw/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Millet_panicum" src="https://docs.google.com/forms/d/1sPkQaEyAHlxubEpwYBpUB0-gtu0-RtwpEW6fBKgzBo8/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Millet_setaria" src="https://docs.google.com/forms/d/1Acy_1McB_VML54Gs3VVlRhlXEpXWNXDzv4HrKI9nF5M/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Musa" src="https://docs.google.com/forms/d/1psQbyQYp_x3vyGMEINSae14KlhKuy2vbMVATJC31_sQ/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Papaya" src="https://docs.google.com/forms/d/1l6nYOnYFYGVzHlhd9G5Art4MDGsgxESfwdY0kDms0eE/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Pear" src="https://docs.google.com/forms/d/1EBbTxKc5qZTRVoFSDcbk6oir4w8oIxW__J5PmurrM28/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Pineapple" src="https://docs.google.com/forms/d/1WTAVYwwZn2d1ZbDUQ53DYW0qwzwG-1V-nY-Cuag0cZE/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Prunus" src="https://docs.google.com/forms/d/1CDCXYcbFvKC7AtyDUcDqfJUc1QRXZ6E06zHGFyHJzEk/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Quinoa" src="https://docs.google.com/forms/d/1iyHCkL4fkENz75p204pw3oPMMSpsOKzidDVMKiruFeQ/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Safflower" src="https://docs.google.com/forms/d/11AtYVX8BU55avAHYtVZORKEb8yTstJosxdNZANiTUko/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Soybean" src="https://docs.google.com/forms/d/1iQwneqqy0XiFfkicg8DccEFHhuDK-cmD3T6oTtf32hY/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Spinach" src="https://docs.google.com/forms/d/11MgKf24CPw38a8JhfM7pQQoL9-Qa-anvLtUmTe-IXhc/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Squash" src="https://docs.google.com/forms/d/1nHQI2HpMEjIAhFDhv2uJgHwcZf3RWMuiMwm0b0d9zks/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Strawberry" src="https://docs.google.com/forms/d/1vUkpuEVEJ5o-xIyHxRzJyg_bIL-H6pKn5inLd6_vlso/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Sugar_cane" src="https://docs.google.com/forms/d/1v8tsGhfZ4kyxnDj-MUfAjLyXg1FY9Sc7aCu_FJn3NRs/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Tomato" src="https://docs.google.com/forms/d/1F_ngJ1LhZpgsB4iG_Msc6fbDuGV6Pji2DZ-rJyngaG0/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Vigna" src="https://docs.google.com/forms/d/1H2QDJEjeTDU2SnR8EbwTSs76VJQIEcEIv2EbMTSnWec/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
                <iframe id="Evaluation_Watermelon" src="https://docs.google.com/forms/d/1-oAOUTkQfCJcpFtZSb4P_QJ5Q9RxO477JTphTw_OF1g/viewform" width="915"  height="2000" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto">
                Loading...
                </iframe>
            </div>

            <img class="left main" src="<?php bloginfo('stylesheet_directory'); ?>/images/ciat.jpg"></img>
            <img class="left main" src="<?php bloginfo('stylesheet_directory'); ?>/images/trustlogo.png"></img>
            <img class="left main" src="<?php bloginfo('stylesheet_directory'); ?>/images/Library - 004.png"></img>
        <?php } else { ?>
            <div id="Tables">
                <p id="title"><?php print($crop_ID); ?></p>
                <?php if ($crop_ID == $ALLIUM) { ?>
                    <div>
                        <table id='tb_Allium'>
                            <tr class='table_header'>
                                <td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS
                                <td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS<td  dir='ltr' class='s3'>FPCAT<td  dir='ltr' class='s3'>Notes</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_ampeloprasum<td  class='s5'>3736<td  class='s5'>3545<td  class='s5'>191<td  class='s6'>0.5<td  class='s6'>0.6<td  class='s6'>4.1<td  class='s6'>1.7<td  dir='ltr' class='s7'>HPS<td  class='s8'>1</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s9'>Allium_ampeloprasum_var._ampeloprasum<td  dir='ltr' class='s10'>NA<td  dir='ltr' class='s10'>NA<td  dir='ltr' class='s10'>NA<td  dir='ltr' class='s11'>NA<td  dir='ltr' class='s11'>NA<td  dir='ltr' class='s11'>NA<td  dir='ltr' class='s11'>NA<td  dir='ltr' class='s12'>HPS<td  dir='ltr' class='s12'>no occurrence data; not assessed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_atroviolaceum<td  class='s5'>144<td  class='s5'>130<td  class='s5'>14<td  class='s6'>1.0<td  class='s6'>0.3<td  class='s6'>2.0<td  class='s6'>1.1<td  dir='ltr' class='s7'>HPS<td  class='s8'>1</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_bourgeaui<td  class='s5'>1<td  class='s5'>1<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s8'>0</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_bourgeaui_subsp._bourgeaui<td  dir='ltr' class='s14'>NA<td  dir='ltr' class='s14'>NA<td  dir='ltr' class='s14'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_bourgeaui_subsp._creticum<td  dir='ltr' class='s14'>NA<td  dir='ltr' class='s14'>NA<td  dir='ltr' class='s14'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_bourgeaui_subsp._cycladicum<td  class='s5'>1<td  class='s5'>1<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s8'>1</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_commutatum<td  class='s5'>26<td  class='s5'>25<td  class='s5'>1<td  class='s6'>0.4<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.1<td  dir='ltr' class='s7'>HPS<td  class='s8'>1</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_galanthum<td  class='s5'>45<td  class='s5'>31<td  class='s5'>14<td  class='s6'>3.1<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  class='s6'>3.1<td  dir='ltr' class='s7'>MPS<td  class='s8'>1</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s4'>Allium_roylei<td  class='s5'>7<td  class='s5'>4<td  class='s5'>3<td  class='s6'>4.3<td  dir='ltr' class='s13'>NA<td  dir='ltr' class='s13'>NA<td  class='s6'>4.3<td  dir='ltr' class='s7'>MPS<td  class='s8'>1</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s15'>Allium_vavilovii<td  class='s5'>48<td  class='s5'>15<td  class='s5'>33<td  class='s6'>6.9<td  class='s6'>0.1<td  class='s6'>1.9<td  class='s6'>3.0<td  dir='ltr' class='s7'>HPS<td  class='s8'>1</tr>
                        </table>
                    </div>
                <? } else if ($crop_ID == $ASPARAGUS) { ?>
                    <table id="tb_Asparagus">
                        <tr class='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS<td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS
                            <td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>Notes<td  class='s3'><td  class='s3'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_acutifolius<td  class='s5'>159<td  class='s5'>152<td  class='s5'>7
                            <td  class='s6'>0.4<td  class='s6'>0.5<td  class='s6'>3.8<td  class='s6'>1.6<td  dir='ltr' class='s7'>HPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_albus<td  class='s5'>79<td  class='s5'>77<td  class='s5'>2<td  class='s6'>0.3
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.1<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'>
                            <td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_aphyllus<td  class='s5'>123<td  class='s5'>114<td  class='s5'>9<td  class='s6'>0.7<td  class='s6'>0.4<td  class='s6'>3.6<td  class='s6'>1.6<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_brachyphyllus<td  class='s5'>6<td  class='s5'>6<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_dauricus<td  class='s5'>11<td  class='s5'>11<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_horridus<td  class='s5'>75<td  class='s5'>71<td  class='s5'>4<td  class='s6'>0.5<td  class='s6'>0.4<td  class='s6'>3.1<td  class='s6'>1.4<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_inderiensis<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_kiusianus<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_macowanii<td  class='s5'>37<td  class='s5'>36<td  class='s5'>1<td  class='s6'>0.3<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.3<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_maritimus<td  class='s5'>18<td  class='s5'>17<td  class='s5'>1<td  class='s6'>0.6<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.2<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_officinalis<td  class='s5'>2137<td  class='s5'>2016<td  class='s5'>121<td  class='s6'>0.6<td  class='s6'>0.1<td  class='s6'>2.4<td  class='s6'>1.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_oligoclonos<td  class='s5'>17<td  class='s5'>17<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s10'>Asparagus_prostratus<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_pseudoscaber<td  class='s5'>5<td  class='s5'>5<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>0<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_schoberioides<td  class='s5'>25<td  class='s5'>25<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Asparagus_tenuifolius<td  class='s5'>37<td  class='s5'>35<td  class='s5'>2<td  class='s6'>0.5<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.5<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                    </table> 

                <? } else if ($crop_ID == $BEET) { ?>

                    <table id='tb_beet'>
                        <tr class="table_header">
                            <td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS<td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS
                            <td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>Notes<td  class='s3'><td  class='s3'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_corolliflora<td  class='s5'>374<td  class='s5'>320
                            <td  class='s5'>54<td  class='s6'>1.4<td  class='s6'>1.7<td  class='s6'>3.1<td  class='s6'>2.1
                            <td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_lomatogona<td  class='s5'>494<td  class='s5'>459<td  class='s5'>35
                            <td  class='s6'>0.7<td  class='s6'>1.1<td  class='s6'>5.8<td  class='s6'>2.5<td  dir='ltr' class='s7'>HPS
                            <td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_macrocarpa<td  class='s5'>595<td  class='s5'>523<td  class='s5'>72
                            <td  class='s6'>1.2<td  class='s6'>0.4<td  class='s6'>2.4<td  class='s6'>1.3<td  dir='ltr' class='s7'>HPS
                            <td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_macrorhiza<td  class='s5'>210<td  class='s5'>190<td  class='s5'>20
                            <td  class='s6'>1.0<td  class='s6'>0.4<td  class='s6'>2.3<td  class='s6'>1.2<td  dir='ltr' class='s7'>HPS
                            <td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_nana<td  class='s5'>321<td  class='s5'>289<td  class='s5'>32
                            <td  class='s6'>1.0<td  class='s6'>0.8<td  class='s6'>5.0<td  class='s6'>2.3<td  dir='ltr' class='s7'>HPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_patellaris<td  class='s5'>420<td  class='s5'>387<td  class='s5'>33
                            <td  class='s6'>0.8<td  class='s6'>0.2<td  class='s6'>2.9<td  class='s6'>1.3<td  dir='ltr' class='s7'>HPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_patula<td  class='s5'>95<td  class='s5'>87<td  class='s5'>8<td  class='s6'>0.8
                            <td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  class='s6'>0.8<td  dir='ltr' class='s7'>HPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_procumbens<td  class='s5'>208<td  class='s5'>200<td  class='s5'>8
                            <td  class='s6'>0.4<td  class='s6'>2.3<td  class='s6'>2.5<td  class='s6'>1.7<td  dir='ltr' class='s7'>HPS
                            <td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_trigyna<td  class='s5'>702<td  class='s5'>658<td  class='s5'>44<td  class='s6'>0.6
                            <td  class='s6'>0.3<td  class='s6'>3.0<td  class='s6'>1.3<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'>
                            <td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_vulgaris<td  class='s5'>30279<td  class='s5'>29514<td  class='s5'>765
                            <td  class='s6'>0.3<td  class='s6'>0.8<td  class='s6'>3.7<td  class='s6'>1.6<td  dir='ltr' class='s7'>HPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_vulgaris_subsp._adanensis<td  class='s5'>24<td  class='s5'>9<td  class='s5'>15
                            <td  class='s6'>6.3<td  class='s6'>5.7<td  class='s6'>4.0<td  class='s6'>5.3<td  dir='ltr' class='s7'>LPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s10'>Beta_vulgaris_subsp._maritima<td  class='s5'>3399<td  class='s5'>2174<td  class='s5'>1225
                            <td  class='s6'>3.6<td  class='s6'>4.2<td  class='s6'>7.7<td  class='s6'>5.2<td  dir='ltr' class='s7'>LPS<td  class='s5'>1
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_webbiana<td  class='s5'>80<td  class='s5'>79<td  class='s5'>1<td  class='s6'>0.1
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'>
                            <td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Beta_xintermedia<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed
                            <td  class='s8'><td  class='s8'></tr>
                    </table>

                <? } else if ($crop_ID == $BRASSICA) { ?>
                    <table id="tb_brassica">
                        <tr dir="table_header">
                            <td dir="ltr" class="s1">TOTAL</td><td dir="ltr" class="s1">HS</td><td dir="ltr" class="s1">GS</td><td dir="ltr" class="s2">SRS</td><td dir="ltr" class="s2">GRS</td><td dir="ltr" class="s2">ERS</td><td dir="ltr" class="s2">FPS</td><td dir="ltr" class="s1">FPCAT</td><td dir="ltr" class="s1">Notes</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_barrelieri</td><td class="s4">386</td><td class="s4">362</td><td class="s4">24</td><td class="s5">0.6</td><td class="s5">1.4</td><td class="s5">7.1</td><td class="s5">3.1</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_bourgeaui</td><td class="s4">8</td><td class="s4">4</td><td class="s4">4</td><td class="s5">5.0</td><td class="s5">10.0</td><td class="s5">6.0</td><td class="s5">7.0</td><td dir="ltr" class="s6">LPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_carinata</td><td class="s4">983</td><td class="s4">722</td><td class="s4">261</td><td class="s5">2.7</td><td class="s5">0.4</td><td class="s5">4.0</td><td class="s5">2.4</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_cretica</td><td class="s4">1058</td><td class="s4">550</td><td class="s4">508</td><td class="s5">4.8</td><td class="s5">0.1</td><td class="s5">0.6</td><td class="s5">1.8</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_cretica_subsp._aegaea</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s6">HPS</td><td dir="ltr" class="s6">no occurrence data; not assessed</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_cretica_subsp._cretica</td><td class="s4">68</td><td class="s4">48</td><td class="s4">20</td><td class="s5">2.9</td><td class="s5">1.4</td><td class="s5">6.3</td><td class="s5">3.5</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_cretica_subsp._laconica</td><td class="s8">12</td><td class="s8">2</td><td class="s8">10</td><td class="s9">8.3</td><td class="s9">10.0</td><td class="s9">10.0</td><td class="s9">9.4</td><td dir="ltr" class="s10">NFCR</td><td class="s8">0</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_elongata</td><td class="s8">201</td><td class="s8">183</td><td class="s8">18</td><td class="s9">0.9</td><td class="s9">0.1</td><td class="s9">1.9</td><td class="s9">1.0</td><td dir="ltr" class="s10">HPS</td><td class="s8">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_elongata_subsp._elongata</td><td class="s4">4</td><td class="s4">2</td><td class="s4">2</td><td class="s5">5.0</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td class="s5">5.0</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_elongata_subsp._integrifolia</td><td class="s4">30</td><td class="s4">25</td><td class="s4">5</td><td class="s5">1.7</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.6</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_elongata_subsp._pinnatifida</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s6">HPS</td><td dir="ltr" class="s6">no occurrence data; not assessed</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_elongata_subsp._subscaposa</td><td class="s4">9</td><td class="s4">8</td><td class="s4">1</td><td class="s5">1.1</td><td class="s5">10.0</td><td class="s5">10.0</td><td class="s5">7.0</td><td dir="ltr" class="s6">LPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_fruticulosa</td><td class="s4">1260</td><td class="s4">1214</td><td class="s4">46</td><td class="s5">0.4</td><td class="s5">0.5</td><td class="s5">5.0</td><td class="s5">2.0</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_hilarionis</td><td class="s4">8</td><td class="s4">4</td><td class="s4">4</td><td class="s5">5.0</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td class="s5">5.0</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_incana</td><td class="s4">85</td><td class="s4">44</td><td class="s4">41</td><td class="s5">4.8</td><td class="s5">1.6</td><td class="s5">3.0</td><td class="s5">3.1</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_insularis</td><td class="s4">69</td><td class="s4">36</td><td class="s4">33</td><td class="s5">4.8</td><td class="s5">0.7</td><td class="s5">2.1</td><td class="s5">2.5</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_macrocarpa</td><td class="s4">17</td><td class="s4">9</td><td class="s4">8</td><td class="s5">4.7</td><td class="s5">10.0</td><td class="s5">10.0</td><td class="s5">8.2</td><td dir="ltr" class="s6">NFCR</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_montana</td><td class="s4">136</td><td class="s4">89</td><td class="s4">47</td><td class="s5">3.5</td><td class="s5">0.9</td><td class="s5">4.4</td><td class="s5">2.9</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_nigra</td><td class="s4">8048</td><td class="s4">7663</td><td class="s4">385</td><td class="s5">0.5</td><td class="s5">0.7</td><td class="s5">4.0</td><td class="s5">1.7</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_oleracea</td><td class="s4">4067</td><td class="s4">2350</td><td class="s4">1717</td><td class="s5">4.2</td><td class="s5">0.2</td><td class="s5">0.7</td><td class="s5">1.7</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_oleracea_var._oleracea</td><td class="s4">406</td><td class="s4">383</td><td class="s4">23</td><td class="s5">0.6</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.2</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_rapa</td><td class="s4">4771</td><td class="s4">3002</td><td class="s4">1769</td><td class="s5">3.7</td><td class="s5">0.0</td><td class="s5">0.4</td><td class="s5">1.4</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_rupestris</td><td class="s4">52</td><td class="s4">32</td><td class="s4">20</td><td class="s5">3.8</td><td class="s5">2.0</td><td class="s5">4.0</td><td class="s5">3.3</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_tournefortii</td><td class="s4">4257</td><td class="s4">4124</td><td class="s4">133</td><td class="s5">0.3</td><td class="s5">0.9</td><td class="s5">4.3</td><td class="s5">1.8</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_villosa</td><td class="s4">27</td><td class="s4">23</td><td class="s4">4</td><td class="s5">1.5</td><td class="s5">8.0</td><td class="s5">10.0</td><td class="s5">6.5</td><td dir="ltr" class="s6">LPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Brassica_villosa_subsp._drepanensis</td><td class="s4">2</td><td class="s4">2</td><td class="s4">0</td><td class="s5">0.0</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td class="s5">0.0</td><td dir="ltr" class="s6">HPS</td><td class="s4">0</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Capsella_bursa-pastoris</td><td class="s4">1669</td><td class="s4">1669</td><td class="s4">0</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.0</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Coincya_monensis</td><td class="s4">108</td><td class="s4">108</td><td class="s4">0</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.0</td><td dir="ltr" class="s6">HPS</td><td class="s4">0</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Diplotaxis_erucoides</td><td class="s4">369</td><td class="s4">319</td><td class="s4">50</td><td class="s5">1.4</td><td class="s5">0.3</td><td class="s5">2.8</td><td class="s5">1.5</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Diplotaxis_maurorum</td><td class="s4">18</td><td class="s4">7</td><td class="s4">11</td><td class="s5">6.1</td><td class="s5">2.2</td><td class="s5">2.5</td><td class="s5">3.6</td><td dir="ltr" class="s6">MPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Diplotaxis_muralis</td><td class="s4">1235</td><td class="s4">1217</td><td class="s4">18</td><td class="s5">0.1</td><td class="s5">0.1</td><td class="s5">2.1</td><td class="s5">0.8</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Diplotaxis_tenuifolia</td><td class="s4">1870</td><td class="s4">1840</td><td class="s4">30</td><td class="s5">0.2</td><td class="s5">0.2</td><td class="s5">2.1</td><td class="s5">0.8</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Erucastrum_canariense</td><td class="s4">3</td><td class="s4">2</td><td class="s4">1</td><td class="s5">3.3</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td class="s5">3.3</td><td dir="ltr" class="s6">MPS</td><td class="s4">0</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Erucastrum_gallicum</td><td class="s4">344</td><td class="s4">334</td><td class="s4">10</td><td class="s5">0.3</td><td class="s5">0.6</td><td class="s5">1.4</td><td class="s5">0.8</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Moricandia_arvensis</td><td class="s4">9</td><td class="s4">9</td><td class="s4">0</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.0</td><td class="s5">0.0</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Orychophragmus_violaceus</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s6">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s6">HPS</td><td dir="ltr" class="s6">no occurrence data; not assessed</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Sinapis_alba</td><td class="s4">1432</td><td class="s4">739</td><td class="s4">693</td><td class="s5">4.8</td><td class="s5">0.3</td><td class="s5">2.7</td><td class="s5">2.6</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Sinapis_arvensis</td><td class="s4">3948</td><td class="s4">3804</td><td class="s4">144</td><td class="s5">0.4</td><td class="s5">0.4</td><td class="s5">2.6</td><td class="s5">1.1</td><td dir="ltr" class="s6">HPS</td><td class="s4">1</td></tr>
                        <tr dir="ltr"><td dir="ltr" class="s3">Trachystoma_ballii</td><td class="s4">1</td><td class="s4">1</td><td class="s4">0</td><td class="s5">0.0</td><td dir="ltr" class="s7">NA</td><td dir="ltr" class="s7">NA</td><td class="s5">0.0</td><td dir="ltr" class="s6">HPS</td><td class="s4">0</td></tr></table>
                <? } else if ($crop_ID == $BREADFRUIT) { ?>
                    <table id='tb_breadfruit'>
                        <tr dir='ltr' class="table_header"><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s2'>SRS
                            <td  dir='ltr' class='s2'>GRS<td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>Notes<td  class='s3'>
                            <td  class='s3'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_altilis<td  class='s5'>439<td  class='s5'>426<td  class='s5'>13<td  class='s6'>0.3<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.1<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_anisophyllus<td  class='s5'>7<td  class='s5'>7<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_blancoi<td  class='s5'>1<td  class='s5'>1<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>0<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_brevipedunculatus<td  class='s5'>224<td  class='s5'>224<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_camansi<td  class='s5'>10<td  class='s5'>10<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_chaplasha<td  class='s5'>7<td  class='s5'>7<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>0<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_elasticus<td  class='s5'>118<td  class='s5'>110<td  class='s5'>8<td  class='s6'>0.7<td  class='s6'>0.1
                            <td  class='s6'>1.1<td  class='s6'>0.6<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_excelsus<td  class='s5'>223<td  class='s5'>221<td  class='s5'>2<td  class='s6'>0.1<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_hirsutus<td  class='s5'>24<td  class='s5'>24<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_hispidus<td  class='s5'>36<td  class='s5'>36<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_horridus<td  class='s5'>96<td  class='s5'>96<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_kemando<td  class='s5'>38<td  class='s5'>38<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_lanceifolius<td  class='s5'>11<td  class='s5'>11<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_lowii<td  class='s5'>12<td  class='s5'>12<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_maingayi<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s9'>
                                NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>
                                no occurrence data; not assessed<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_mariannensis<td  class='s5'>126<td  class='s5'>126<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s10'>Artocarpus_melinoxylus<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS
                            <td  dir='ltr' class='s7'>no occurrence data; not assessed<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_multifidus<td  class='s5'>86<td  class='s5'>86<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_nobilis<td  class='s5'>4<td  class='s5'>4<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_obtusus<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurrence data; not assessed
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_odoratissimus<td  class='s5'>3<td  class='s5'>3<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>0<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_pinnatisectus<td  class='s5'>16<td  class='s5'>16<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_rigidus<td  class='s5'>3<td  class='s5'>3<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>0<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_sarawakensis<td  class='s5'>1<td  class='s5'>1<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_scortechinii<td  class='s5'>7<td  class='s5'>7<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_sepicanus<td  class='s5'>5<td  class='s5'>5<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s9'>NA
                            <td  dir='ltr' class='s9'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_sericicarpus<td  class='s5'>42<td  class='s5'>42<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_sumatranus<td  class='s5'>29<td  class='s5'>29<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_tamaran<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s9'>NA<td  dir='ltr' class='s7'>HPS
                            <td  dir='ltr' class='s7'>no occurrence data; not assessed<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_teysmannii<td  class='s5'>52<td  class='s5'>52<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Artocarpus_treculianus<td  class='s5'>26<td  class='s5'>26<td  class='s5'>0<td  class='s6'>0.0<td  class='s6'>0.0
                            <td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td  class='s5'>1<td  class='s8'><td  class='s8'></tr>
                    </table>
                <? } else if ($crop_ID == $CACAO) { ?>
                    <table id='tb_cacao'>
                        <tr dir='ltr' class="table_header"><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Theobroma_cacao<td  class='s3'>1148<td  class='s3'>1121<td  class='s3'>27<td  class='s4'>0.2<td  class='s4'>0.0
                            <td  class='s4'>0.0<td  class='s4'>0.1<td  dir='ltr' class='s5'>HPS</tr>
                    </table>
                <? } else if ($crop_ID == $CAPSICUM) { ?>
                    <table id='tb_capsicum'>
                        <tr class='table_header'><td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_annuum_var._glabriusculum
                            <td class='s4'>466
                            <td class='s4'>437
                            <td class='s4'>29
                            <td class='s5'>0.6
                            <td class='s5'>0.6
                            <td class='s5'>1.6
                            <td class='s5'>0.9
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_baccatum
                            <td class='s4'>621
                            <td class='s4'>350
                            <td class='s4'>271
                            <td class='s5'>4.4
                            <td class='s5'>0.1
                            <td class='s5'>1.8
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_baccatum_var._baccatum
                            <td class='s4'>353
                            <td class='s4'>304
                            <td class='s4'>49
                            <td class='s5'>1.4
                            <td class='s5'>0.1
                            <td class='s5'>2.9
                            <td class='s5'>1.5
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_baccatum_var._praetermissum
                            <td class='s4'>52
                            <td class='s4'>32
                            <td class='s4'>20
                            <td class='s5'>3.8
                            <td class='s5'>0.2
                            <td class='s5'>5.0
                            <td class='s5'>3.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_chacoense
                            <td class='s4'>1038
                            <td class='s4'>943
                            <td class='s4'>95
                            <td class='s5'>0.9
                            <td class='s5'>0.4
                            <td class='s5'>1.9
                            <td class='s5'>1.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_chinense
                            <td class='s4'>1608
                            <td class='s4'>352
                            <td class='s4'>1256
                            <td class='s5'>7.8
                            <td class='s5'>0.2
                            <td class='s5'>4.2
                            <td class='s5'>4.1
                            <td dir='ltr' class='s6'>MPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Capsicum_galapagoense
                            <td class='s4'>10
                            <td class='s4'>4
                            <td class='s4'>6
                            <td class='s5'>6.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>6.0
                            <td dir='ltr' class='s6'>LPS</tr>
                    </table>
                <? } else if ($crop_ID == $CASSAVA) { ?>
                    <table id='tb_cassava'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s3'>GRS
                            <td dir='ltr' class='s3'>ERS
                            <td dir='ltr' class='s3'>FPS
                            <td dir='ltr' class='s4'>FPCAT
                            <td dir='ltr' class='s4'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Manihot_acuminatissima
                            <td class='s6'>23
                            <td class='s6'>23
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_aesculifolia
                            <td class='s6'>288
                            <td class='s6'>215
                            <td class='s6'>73
                            <td class='s7'>2.5
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.8
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_alutacea
                            <td class='s6'>18
                            <td class='s6'>8
                            <td class='s6'>10
                            <td class='s7'>5.6
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>5.6
                            <td dir='ltr' class='s8'>LPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_angustiloba
                            <td class='s6'>158
                            <td class='s6'>122
                            <td class='s6'>36
                            <td class='s7'>2.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.8
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_anomala
                            <td class='s6'>260
                            <td class='s6'>215
                            <td class='s6'>45
                            <td class='s7'>1.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_anomala_subsp._anomala
                            <td class='s6'>8
                            <td class='s6'>8
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_anomala_subsp._cujabensis
                            <td class='s6'>1
                            <td class='s6'>1
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_anomala_subsp._glabrata
                            <td class='s6'>27
                            <td class='s6'>27
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_anomala_subsp._pavoniana
                            <td class='s6'>71
                            <td class='s6'>71
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_anomala_subsp._pubescens
                            <td class='s6'>17
                            <td class='s6'>17
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_attenuata
                            <td class='s6'>6
                            <td class='s6'>6
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_auriculata
                            <td class='s6'>3
                            <td class='s6'>2
                            <td class='s6'>1
                            <td class='s7'>3.3
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>3.3
                            <td dir='ltr' class='s8'>MPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_baccata
                            <td class='s6'>33
                            <td class='s6'>20
                            <td class='s6'>13
                            <td class='s7'>3.9
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_brachyandra
                            <td class='s6'>3
                            <td class='s6'>2
                            <td class='s6'>1
                            <td class='s7'>3.3
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>3.3
                            <td dir='ltr' class='s8'>MPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_brachyloba
                            <td class='s6'>736
                            <td class='s6'>625
                            <td class='s6'>111
                            <td class='s7'>1.5
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_breviloba
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_caerulescens
                            <td class='s6'>277
                            <td class='s6'>166
                            <td class='s6'>111
                            <td class='s7'>4.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_caerulescens_subsp._caerulescens
                            <td class='s6'>68
                            <td class='s6'>68
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_caerulescens_subsp._laevis
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_caerulescens_subsp._macrantha
                            <td class='s6'>8
                            <td class='s6'>8
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_caerulescens_subsp._paraensis
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_carthaginensis
                            <td class='s6'>371
                            <td class='s6'>292
                            <td class='s6'>79
                            <td class='s7'>2.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.7
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_carthaginensis_subsp._carthaginensis
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_carthaginensis_subsp._glaziovii
                            <td class='s6'>398
                            <td class='s6'>223
                            <td class='s6'>175
                            <td class='s7'>4.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_carthaginensis_subsp._hahnii
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_catingae
                            <td class='s6'>17
                            <td class='s6'>17
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_caudata
                            <td class='s6'>62
                            <td class='s6'>50
                            <td class='s6'>12
                            <td class='s7'>1.9
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_cecropiifolia
                            <td class='s6'>27
                            <td class='s6'>25
                            <td class='s6'>2
                            <td class='s7'>0.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_chlorosticta
                            <td class='s6'>103
                            <td class='s6'>59
                            <td class='s6'>44
                            <td class='s7'>4.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_compositifolia
                            <td class='s6'>35
                            <td class='s6'>26
                            <td class='s6'>9
                            <td class='s7'>2.6
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_condensata
                            <td class='s6'>5
                            <td class='s6'>5
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_corymbiflora
                            <td class='s6'>18
                            <td class='s6'>18
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_crassisepala
                            <td class='s6'>14
                            <td class='s6'>12
                            <td class='s6'>2
                            <td class='s7'>1.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_crotalariiformis
                            <td class='s6'>8
                            <td class='s6'>8
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_davisiae
                            <td class='s6'>50
                            <td class='s6'>46
                            <td class='s6'>4
                            <td class='s7'>0.8
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_diamantinensis
                            <td class='s6'>22
                            <td class='s6'>12
                            <td class='s6'>10
                            <td class='s7'>4.5
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_dichotoma
                            <td class='s6'>96
                            <td class='s6'>54
                            <td class='s6'>42
                            <td class='s7'>4.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_divergens
                            <td class='s6'>19
                            <td class='s6'>17
                            <td class='s6'>2
                            <td class='s7'>1.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_epruinosa
                            <td class='s6'>76
                            <td class='s6'>76
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_esculenta
                            <td class='s6'>2565
                            <td class='s6'>1549
                            <td class='s6'>1016
                            <td class='s7'>4.0
                            <td class='s7'>0.1
                            <td class='s7'>1.6
                            <td class='s7'>1.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_falcata
                            <td class='s6'>9
                            <td class='s6'>9
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_filamentosa
                            <td class='s6'>6
                            <td class='s6'>1
                            <td class='s6'>5
                            <td class='s7'>8.3
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>8.3
                            <td dir='ltr' class='s8'>NFCR
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_flemingiana
                            <td class='s6'>49
                            <td class='s6'>21
                            <td class='s6'>28
                            <td class='s7'>5.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_foetida
                            <td class='s6'>11
                            <td class='s6'>5
                            <td class='s6'>6
                            <td class='s7'>5.5
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>5.5
                            <td dir='ltr' class='s8'>LPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_fruticulosa
                            <td class='s6'>64
                            <td class='s6'>36
                            <td class='s6'>28
                            <td class='s7'>4.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_gabrielensis
                            <td class='s6'>38
                            <td class='s6'>24
                            <td class='s6'>14
                            <td class='s7'>3.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_gracilis
                            <td class='s6'>101
                            <td class='s6'>75
                            <td class='s6'>26
                            <td class='s7'>2.6
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_gracilis_subsp._gracilis
                            <td class='s6'>38
                            <td class='s6'>38
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_gracilis_subsp._varians
                            <td class='s6'>5
                            <td class='s6'>5
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_grahamii
                            <td class='s6'>1114
                            <td class='s6'>1074
                            <td class='s6'>40
                            <td class='s7'>0.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_guaranitica
                            <td class='s6'>147
                            <td class='s6'>144
                            <td class='s6'>3
                            <td class='s7'>0.2
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_guaranitica_subsp._boliviana
                            <td class='s6'>1
                            <td class='s6'>1
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_guaranitica_subsp._guaranitica
                            <td class='s6'>38
                            <td class='s6'>38
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_handroana
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_hassleriana
                            <td class='s6'>15
                            <td class='s6'>13
                            <td class='s6'>2
                            <td class='s7'>1.3
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>1.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_heptaphylla
                            <td class='s6'>13
                            <td class='s6'>13
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_hilariana
                            <td class='s6'>25
                            <td class='s6'>10
                            <td class='s6'>15
                            <td class='s7'>6.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>2.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_hunzikeriana
                            <td class='s6'>179
                            <td class='s6'>179
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_inflata
                            <td class='s6'>9
                            <td class='s6'>9
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_irwinii
                            <td class='s6'>49
                            <td class='s6'>37
                            <td class='s6'>12
                            <td class='s7'>2.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.8
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_jacobinensis
                            <td class='s6'>63
                            <td class='s6'>59
                            <td class='s6'>4
                            <td class='s7'>0.6
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_janiphoides
                            <td class='s6'>51
                            <td class='s6'>11
                            <td class='s6'>40
                            <td class='s7'>7.8
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>2.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_jolyana
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_leptophylla
                            <td class='s6'>44
                            <td class='s6'>44
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_longepetiolata
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_maracasensis
                            <td class='s6'>8
                            <td class='s6'>8
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_mcvaughii
                            <td class='s6'>6
                            <td class='s6'>6
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_membranacea
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_michaelis
                            <td class='s6'>19
                            <td class='s6'>12
                            <td class='s6'>7
                            <td class='s7'>3.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_mirabilis
                            <td class='s6'>4
                            <td class='s6'>4
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_mossamedensis
                            <td class='s6'>34
                            <td class='s6'>20
                            <td class='s6'>14
                            <td class='s7'>4.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_nana
                            <td class='s6'>9
                            <td class='s6'>9
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_neusana
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_nogueirae
                            <td class='s6'>16
                            <td class='s6'>14
                            <td class='s6'>2
                            <td class='s7'>1.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_oaxacana
                            <td class='s6'>64
                            <td class='s6'>45
                            <td class='s6'>19
                            <td class='s7'>3.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_obovata
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_oligantha
                            <td class='s6'>14
                            <td class='s6'>14
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_orbicularis
                            <td class='s6'>15
                            <td class='s6'>15
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pauciflora
                            <td class='s6'>9
                            <td class='s6'>6
                            <td class='s6'>3
                            <td class='s7'>3.3
                            <td class='s7'>3.1
                            <td class='s7'>10.0
                            <td class='s7'>5.5
                            <td dir='ltr' class='s8'>LPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_paviifolia
                            <td class='s6'>24
                            <td class='s6'>16
                            <td class='s6'>8
                            <td class='s7'>3.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_peltata
                            <td class='s6'>50
                            <td class='s6'>35
                            <td class='s6'>15
                            <td class='s7'>3.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pentaphylla
                            <td class='s6'>56
                            <td class='s6'>46
                            <td class='s6'>10
                            <td class='s7'>1.8
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pentaphylla_subsp._graminifolia
                            <td class='s6'>4
                            <td class='s6'>4
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pentaphylla_subsp._pentaphylla
                            <td class='s6'>10
                            <td class='s6'>10
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pentaphylla_subsp._tenuifolia
                            <td class='s6'>14
                            <td class='s6'>6
                            <td class='s6'>8
                            <td class='s7'>5.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_peruviana
                            <td class='s6'>223
                            <td class='s6'>46
                            <td class='s6'>177
                            <td class='s7'>7.9
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>2.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pilosa
                            <td class='s6'>105
                            <td class='s6'>67
                            <td class='s6'>38
                            <td class='s7'>3.6
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pohliana
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pohlii
                            <td class='s6'>20
                            <td class='s6'>4
                            <td class='s6'>16
                            <td class='s7'>8.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>8.0
                            <td dir='ltr' class='s8'>NFCR
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_populifolia
                            <td class='s6'>4
                            <td class='s6'>4
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pringlei
                            <td class='s6'>44
                            <td class='s6'>36
                            <td class='s6'>8
                            <td class='s7'>1.8
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_procumbens
                            <td class='s6'>19
                            <td class='s6'>9
                            <td class='s6'>10
                            <td class='s7'>5.3
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>5.3
                            <td dir='ltr' class='s8'>LPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pruinosa
                            <td class='s6'>151
                            <td class='s6'>103
                            <td class='s6'>48
                            <td class='s7'>3.2
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pseudoglaziovii
                            <td class='s6'>20
                            <td class='s6'>19
                            <td class='s6'>1
                            <td class='s7'>0.5
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_purpureocostata
                            <td class='s6'>59
                            <td class='s6'>33
                            <td class='s6'>26
                            <td class='s7'>4.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_pusilla
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_quinquefolia
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_quinqueloba
                            <td class='s6'>27
                            <td class='s6'>16
                            <td class='s6'>11
                            <td class='s7'>4.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_quinquepartita
                            <td class='s6'>207
                            <td class='s6'>76
                            <td class='s6'>131
                            <td class='s7'>6.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>2.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_reniformis
                            <td class='s6'>17
                            <td class='s6'>13
                            <td class='s6'>4
                            <td class='s7'>2.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.8
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_reptans
                            <td class='s6'>12
                            <td class='s6'>12
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_rhomboidea
                            <td class='s6'>65
                            <td class='s6'>17
                            <td class='s6'>48
                            <td class='s7'>7.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>2.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_rhomboidea_subsp._microcarpa
                            <td class='s6'>73
                            <td class='s6'>71
                            <td class='s6'>2
                            <td class='s7'>0.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_rhomboidea_subsp._rhomboidea
                            <td class='s6'>33
                            <td class='s6'>33
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_rubricaulis
                            <td class='s6'>63
                            <td class='s6'>46
                            <td class='s6'>17
                            <td class='s7'>2.7
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_rubricaulis_subsp._isoloba
                            <td class='s6'>25
                            <td class='s6'>25
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_rubricaulis_subsp._rubricaulis
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_sagittatopartita
                            <td class='s6'>24
                            <td class='s6'>16
                            <td class='s6'>8
                            <td class='s7'>3.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.1
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_salicifolia
                            <td class='s6'>75
                            <td class='s6'>41
                            <td class='s6'>34
                            <td class='s7'>4.5
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_sparsifolia
                            <td class='s6'>73
                            <td class='s6'>45
                            <td class='s6'>28
                            <td class='s7'>3.8
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_stipularis
                            <td class='s6'>27
                            <td class='s6'>24
                            <td class='s6'>3
                            <td class='s7'>1.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_stricta
                            <td class='s6'>35
                            <td class='s6'>24
                            <td class='s6'>11
                            <td class='s7'>3.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_subspicata
                            <td class='s6'>18
                            <td class='s6'>17
                            <td class='s6'>1
                            <td class='s7'>0.6
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tenella
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tomatophylla
                            <td class='s6'>24
                            <td class='s6'>16
                            <td class='s6'>8
                            <td class='s7'>3.3
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>3.3
                            <td dir='ltr' class='s8'>MPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tomentosa
                            <td class='s6'>39
                            <td class='s6'>29
                            <td class='s6'>10
                            <td class='s7'>2.6
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.9
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tomentosa_subsp._araliifolia
                            <td class='s6'>9
                            <td class='s6'>9
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tomentosa_subsp._tomentosa
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_triloba
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tripartita
                            <td class='s6'>314
                            <td class='s6'>251
                            <td class='s6'>63
                            <td class='s7'>2.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.7
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tripartita_subsp._humilis
                            <td class='s6'>8
                            <td class='s6'>8
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tripartita_subsp._indivisa
                            <td class='s6'>3
                            <td class='s6'>3
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tripartita_subsp._laciniosa
                            <td class='s6'>3
                            <td class='s6'>3
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tripartita_subsp._tripartita
                            <td class='s6'>51
                            <td class='s6'>51
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tristis
                            <td class='s6'>128
                            <td class='s6'>115
                            <td class='s6'>13
                            <td class='s7'>1.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_tristis_subsp._saxicola
                            <td class='s6'>17
                            <td class='s6'>17
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_variifolia
                            <td class='s6'>2
                            <td class='s6'>2
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_violacea
                            <td class='s6'>112
                            <td class='s6'>64
                            <td class='s6'>48
                            <td class='s7'>4.3
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>1.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_violacea_subsp._recurvata
                            <td class='s6'>14
                            <td class='s6'>14
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_violacea_subsp._violacea
                            <td class='s6'>3
                            <td class='s6'>3
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_walkerae
                            <td class='s6'>13
                            <td class='s6'>11
                            <td class='s6'>2
                            <td class='s7'>1.5
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>1.5
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_websteri
                            <td class='s6'>8
                            <td class='s6'>8
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_weddelliana
                            <td class='s6'>5
                            <td class='s6'>5
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_xavantinensis
                            <td class='s6'>23
                            <td class='s6'>21
                            <td class='s6'>2
                            <td class='s7'>0.9
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s5'>Manihot_zehntneri
                            <td class='s6'>1
                            <td class='s6'>1
                            <td class='s6'>0
                            <td class='s7'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s7'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s6'>1</tr>
                    </table>
                <? } else if ($crop_ID == $CITRUS) { ?>
                    <table id='tb_citrus'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s3'>FPCAT
                            <td dir='ltr' class='s4'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Atalantia_ceylanica
                            <td class='s6'>11
                            <td class='s6'>9
                            <td class='s6'>2
                            <td class='s7'>1.8
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td class='s7'>1.8
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_aurantiifolia
                            <td class='s6'>302
                            <td class='s6'>295
                            <td class='s6'>7
                            <td class='s7'>0.2
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.1
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_grandis
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>HPS
                            <td dir='ltr' class='s9'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_indica
                            <td class='s6'>4
                            <td class='s6'>3
                            <td class='s6'>1
                            <td class='s7'>2.5
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td class='s7'>2.5
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_japonica
                            <td class='s6'>179
                            <td class='s6'>167
                            <td class='s6'>12
                            <td class='s7'>0.7
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td class='s7'>0.7
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_medica
                            <td class='s6'>245
                            <td class='s6'>219
                            <td class='s6'>26
                            <td class='s7'>1.1
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.4
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_micrantha
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>HPS
                            <td dir='ltr' class='s9'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_reticulata
                            <td class='s6'>1119
                            <td class='s6'>958
                            <td class='s6'>161
                            <td class='s7'>1.4
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.5
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_sinensis
                            <td class='s6'>1355
                            <td class='s6'>1096
                            <td class='s6'>259
                            <td class='s7'>1.9
                            <td class='s7'>0.0
                            <td class='s7'>0.0
                            <td class='s7'>0.6
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_tachibana
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s11'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>HPS
                            <td dir='ltr' class='s9'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Citrus_trifoliata
                            <td class='s6'>358
                            <td class='s6'>252
                            <td class='s6'>106
                            <td class='s7'>3.0
                            <td class='s7'>10.0
                            <td class='s7'>10.0
                            <td class='s7'>7.7
                            <td dir='ltr' class='s9'>NFCR
                            <td class='s10'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s5'>Clausena_lansium
                            <td class='s6'>23
                            <td class='s6'>21
                            <td class='s6'>2
                            <td class='s7'>0.9
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td class='s7'>0.9
                            <td dir='ltr' class='s9'>HPS
                            <td class='s10'>1</tr>
                    </table>

                <? } else if ($crop_ID == $COCOYAM) { ?>
                    <table id='tb_cocoyam'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s1'>SRS
                            <td dir='ltr' class='s1'>GRS
                            <td dir='ltr' class='s1'>ERS
                            <td dir='ltr' class='s1'>FPS
                            <td dir='ltr' class='s1'>FPCAT</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Xanthosoma_sagittifolium
                            <td class='s3'>168
                            <td class='s3'>168
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td dir='ltr' class='s4'>HPS</tr>
                    </table>
                <? } else if ($crop_ID == $COTTON) { ?>
                    <table id='tb_cotton'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_anomalum
                            <td class='s4'>358
                            <td class='s4'>344
                            <td class='s4'>14
                            <td class='s5'>0.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_anomalum_subsp._anomalum
                            <td class='s4'>68
                            <td class='s4'>68
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_anomalum_subsp._senarense
                            <td class='s4'>5
                            <td class='s4'>3
                            <td class='s4'>2
                            <td class='s5'>4.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>4.0
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_aridum
                            <td class='s4'>50
                            <td class='s4'>24
                            <td class='s4'>26
                            <td class='s5'>5.2
                            <td class='s5'>2.2
                            <td class='s5'>4.8
                            <td class='s5'>4.1
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_barbadense
                            <td class='s4'>2884
                            <td class='s4'>1804
                            <td class='s4'>1080
                            <td class='s5'>3.7
                            <td class='s5'>0.1
                            <td class='s5'>1.8
                            <td class='s5'>1.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_darwinii
                            <td class='s4'>294
                            <td class='s4'>272
                            <td class='s4'>22
                            <td class='s5'>0.7
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>6.9
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_ekmanianum
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_gossypioides
                            <td class='s4'>16
                            <td class='s4'>5
                            <td class='s4'>11
                            <td class='s5'>6.9
                            <td class='s5'>4.7
                            <td class='s5'>10.0
                            <td class='s5'>7.2
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_harknessii
                            <td class='s4'>42
                            <td class='s4'>33
                            <td class='s4'>9
                            <td class='s5'>2.1
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_harknessii_subsp._armourianum
                            <td class='s4'>25
                            <td class='s4'>17
                            <td class='s4'>8
                            <td class='s5'>3.2
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.2
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_herbaceum
                            <td class='s4'>362
                            <td class='s4'>204
                            <td class='s4'>158
                            <td class='s5'>4.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>1.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_herbaceum_subsp._africanum
                            <td class='s4'>151
                            <td class='s4'>144
                            <td class='s4'>7
                            <td class='s5'>0.5
                            <td class='s5'>0.2
                            <td class='s5'>2.8
                            <td class='s5'>1.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_hirsutum
                            <td class='s4'>7816
                            <td class='s4'>2199
                            <td class='s4'>5617
                            <td class='s5'>7.2
                            <td class='s5'>3.6
                            <td class='s5'>10.0
                            <td class='s5'>6.9
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_klotzschianum
                            <td class='s4'>144
                            <td class='s4'>138
                            <td class='s4'>6
                            <td class='s5'>0.4
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>6.8
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_klotzschianum_subsp._davidsonii
                            <td class='s4'>62
                            <td class='s4'>42
                            <td class='s4'>20
                            <td class='s5'>3.2
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>1.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_laxum
                            <td class='s4'>10
                            <td class='s4'>4
                            <td class='s4'>6
                            <td class='s5'>6.0
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>8.7
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_lobatum
                            <td class='s4'>11
                            <td class='s4'>6
                            <td class='s4'>5
                            <td class='s5'>4.5
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>4.5
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_longicalyx
                            <td class='s4'>15
                            <td class='s4'>7
                            <td class='s4'>8
                            <td class='s5'>5.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>5.3
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_mustelinum
                            <td class='s4'>53
                            <td class='s4'>30
                            <td class='s4'>23
                            <td class='s5'>4.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>4.3
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_raimondii
                            <td class='s4'>142
                            <td class='s4'>99
                            <td class='s4'>43
                            <td class='s5'>3.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.0
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_schwendimanii
                            <td class='s4'>8
                            <td class='s4'>4
                            <td class='s4'>4
                            <td class='s5'>5.0
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>8.3
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_trilobum
                            <td class='s4'>38
                            <td class='s4'>5
                            <td class='s4'>33
                            <td class='s5'>8.7
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>8.7
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_triphyllum
                            <td class='s4'>27
                            <td class='s4'>25
                            <td class='s4'>2
                            <td class='s5'>0.7
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Gossypium_turneri
                            <td class='s4'>21
                            <td class='s4'>17
                            <td class='s4'>4
                            <td class='s5'>1.9
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>1.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Thespesia_lampas_var._thespesioides
                            <td class='s4'>431
                            <td class='s4'>337
                            <td class='s4'>94
                            <td class='s5'>2.2
                            <td class='s5'>0.7
                            <td class='s5'>2.3
                            <td class='s5'>1.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $CUCUMIS) { ?>
                    <table id='tb_cucumber'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s2'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s1'>GRS
                            <td dir='ltr' class='s1'>ERS
                            <td dir='ltr' class='s1'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cucumis_hystrix
                            <td class='s4'>45
                            <td class='s4'>45
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s4'>0
                            <td class='s4'>0
                            <td class='s4'>0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cucumis_melo_subsp._agrestis_var._agrestis
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cucumis_sativus
                            <td class='s4'>6191
                            <td class='s4'>1491
                            <td class='s5'>4,700.0
                            <td class='s5'>7.6
                            <td class='s5'>0.3
                            <td class='s5'>4.4
                            <td class='s5'>4.1
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                    </table>

                <? } else if ($crop_ID == $DIOSCOREA) { ?>
                    <table id='tb_cucumber'>
                        <tr class='tb_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_abyssinica
                            <td class='s4'>76
                            <td class='s4'>76
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_brevipetiolata
                            <td class='s4'>95
                            <td class='s4'>95
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_burkilliana
                            <td class='s4'>45
                            <td class='s4'>45
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_cayennensis
                            <td class='s4'>31
                            <td class='s4'>31
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_cayennensis_subsp._rotundata
                            <td class='s4'>2181
                            <td class='s4'>30
                            <td class='s4'>2151
                            <td class='s5'>9.9
                            <td class='s5'>4.0
                            <td class='s5'>8.0
                            <td class='s5'>7.3
                            <td dir='ltr' class='s6'>LPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_hamiltonii
                            <td class='s4'>134
                            <td class='s4'>132
                            <td class='s4'>2
                            <td class='s5'>0.1
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_minutiflora
                            <td class='s4'>297
                            <td class='s4'>238
                            <td class='s4'>59
                            <td class='s5'>2.0
                            <td class='s5'>0.4
                            <td class='s5'>1.4
                            <td class='s5'>1.3
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_nummularia
                            <td class='s4'>109
                            <td class='s4'>109
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_praehensilis
                            <td class='s4'>349
                            <td class='s4'>347
                            <td class='s4'>2
                            <td class='s5'>0.1
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_smilacifolia
                            <td class='s4'>131
                            <td class='s4'>131
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Dioscorea_transversa
                            <td class='s4'>4169
                            <td class='s4'>4169
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS</tr>
                    </table>
                <? } else if ($crop_ID == $GRAPE) { ?>
                    <table id='tb_garlic'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_acerifolia
                            <td class='s4'>105
                            <td class='s4'>12
                            <td class='s4'>93
                            <td class='s5'>8.9
                            <td class='s5'>1.1
                            <td class='s5'>5.0
                            <td class='s5'>5.0
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_aestivalis
                            <td class='s4'>874
                            <td class='s4'>811
                            <td class='s4'>63
                            <td class='s5'>0.7
                            <td class='s5'>0.3
                            <td class='s5'>2.4
                            <td class='s5'>1.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_aestivalis_var._monticola
                            <td class='s4'>423
                            <td class='s4'>386
                            <td class='s4'>37
                            <td class='s5'>0.9
                            <td class='s5'>0.2
                            <td class='s5'>1.6
                            <td class='s5'>0.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_amurensis
                            <td class='s4'>139
                            <td class='s4'>71
                            <td class='s4'>68
                            <td class='s5'>4.9
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>1.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_berlandieri
                            <td class='s4'>58
                            <td class='s4'>47
                            <td class='s4'>11
                            <td class='s5'>1.9
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_bryoniifolia
                            <td class='s4'>15
                            <td class='s4'>15
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_californica
                            <td class='s4'>504
                            <td class='s4'>484
                            <td class='s4'>20
                            <td class='s5'>0.4
                            <td class='s5'>1.1
                            <td class='s5'>3.5
                            <td class='s5'>1.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_cinerea
                            <td class='s4'>271
                            <td class='s4'>164
                            <td class='s4'>107
                            <td class='s5'>3.9
                            <td class='s5'>0.1
                            <td class='s5'>2.8
                            <td class='s5'>2.3
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_cinerea_var._helleri
                            <td class='s4'>93
                            <td class='s4'>33
                            <td class='s4'>60
                            <td class='s5'>6.5
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>8.8
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_davidii
                            <td class='s4'>29
                            <td class='s4'>23
                            <td class='s4'>6
                            <td class='s5'>2.1
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_labrusca
                            <td class='s4'>595
                            <td class='s4'>239
                            <td class='s4'>356
                            <td class='s5'>6.0
                            <td class='s5'>0.1
                            <td class='s5'>1.5
                            <td class='s5'>2.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_mustangensis
                            <td class='s4'>320
                            <td class='s4'>285
                            <td class='s4'>35
                            <td class='s5'>1.1
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_nesbittiana
                            <td class='s4'>6
                            <td class='s4'>2
                            <td class='s4'>4
                            <td class='s5'>6.7
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>6.7
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_piasezkii
                            <td class='s4'>52
                            <td class='s4'>34
                            <td class='s4'>18
                            <td class='s5'>3.5
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.5
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_rupestris
                            <td class='s4'>253
                            <td class='s4'>143
                            <td class='s4'>110
                            <td class='s5'>4.3
                            <td class='s5'>0.1
                            <td class='s5'>0.7
                            <td class='s5'>1.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_tiliifolia
                            <td class='s4'>118
                            <td class='s4'>110
                            <td class='s4'>8
                            <td class='s5'>0.7
                            <td class='s5'>0.0
                            <td class='s5'>0.5
                            <td class='s5'>0.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_vinifera
                            <td class='s4'>12899
                            <td class='s4'>3362
                            <td class='s4'>9537
                            <td class='s5'>7.4
                            <td class='s5'>0.3
                            <td class='s5'>4.3
                            <td class='s5'>4.0
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_vulpina
                            <td class='s4'>2455
                            <td class='s4'>1758
                            <td class='s4'>697
                            <td class='s5'>2.8
                            <td class='s5'>0.2
                            <td class='s5'>3.5
                            <td class='s5'>2.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_xchampinii
                            <td class='s4'>33
                            <td class='s4'>33
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vitis_xslavinii
                            <td class='s4'>6
                            <td class='s4'>6
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                    </table>
                <? } else if ($crop_ID == $GROUNDNUT) { ?>
                    <table id='tb_groundnut'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s1'>SRS
                            <td dir='ltr' class='s1'>GRS
                            <td dir='ltr' class='s1'>ERS
                            <td dir='ltr' class='s1'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_appressipila
                            <td class='s3'>59
                            <td class='s3'>49
                            <td class='s3'>10
                            <td class='s4'>1.7
                            <td class='s4'>8.7
                            <td class='s4'>6.7
                            <td class='s4'>5.7
                            <td dir='ltr' class='s5'>LPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_batizocoi
                            <td class='s3'>87
                            <td class='s3'>72
                            <td class='s3'>15
                            <td class='s4'>1.7
                            <td class='s4'>3.6
                            <td class='s4'>6.0
                            <td class='s4'>3.8
                            <td dir='ltr' class='s5'>MPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_cardenasii
                            <td class='s3'>123
                            <td class='s3'>95
                            <td class='s3'>28
                            <td class='s4'>2.3
                            <td class='s4'>1.0
                            <td class='s4'>2.9
                            <td class='s4'>2.0
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_correntina
                            <td class='s3'>357
                            <td class='s3'>352
                            <td class='s3'>5
                            <td class='s4'>0.1
                            <td class='s4'>0.3
                            <td class='s4'>2.5
                            <td class='s4'>1.0
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_diogoi
                            <td class='s3'>68
                            <td class='s3'>56
                            <td class='s3'>12
                            <td class='s4'>1.8
                            <td class='s4'>0.4
                            <td class='s4'>3.3
                            <td class='s4'>1.8
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_duranensis
                            <td class='s3'>1894
                            <td class='s3'>1727
                            <td class='s3'>167
                            <td class='s4'>0.9
                            <td class='s4'>5.9
                            <td class='s4'>8.3
                            <td class='s4'>5.0
                            <td dir='ltr' class='s5'>LPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_helodes
                            <td class='s3'>106
                            <td class='s3'>94
                            <td class='s3'>12
                            <td class='s4'>1.1
                            <td class='s4'>0.5
                            <td class='s4'>1.8
                            <td class='s4'>1.1
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_herzogii
                            <td class='s3'>8
                            <td class='s3'>8
                            <td class='s3'>0
                            <td class='s4'>0.0
                            <td class='s4'>0.0
                            <td class='s4'>0.0
                            <td class='s4'>0.0
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_hoehnei
                            <td class='s3'>50
                            <td class='s3'>33
                            <td class='s3'>17
                            <td class='s4'>3.4
                            <td class='s4'>2.1
                            <td class='s4'>5.0
                            <td class='s4'>3.5
                            <td dir='ltr' class='s5'>MPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_ipaensis
                            <td class='s3'>13
                            <td class='s3'>9
                            <td class='s3'>4
                            <td class='s4'>3.1
                            <td class='s4'>2.5
                            <td class='s4'>5.0
                            <td class='s4'>3.5
                            <td dir='ltr' class='s5'>MPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_kempff-mercadoi
                            <td class='s3'>57
                            <td class='s3'>49
                            <td class='s3'>8
                            <td class='s4'>1.4
                            <td class='s4'>6.8
                            <td class='s4'>8.0
                            <td class='s4'>5.4
                            <td dir='ltr' class='s5'>LPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_linearifolia
                            <td class='s3'>1
                            <td class='s3'>0
                            <td class='s3'>1
                            <td class='s4'>10.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s4'>0.0
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_magna
                            <td class='s3'>37
                            <td class='s3'>33
                            <td class='s3'>4
                            <td class='s4'>1.1
                            <td class='s4'>0.6
                            <td class='s4'>1.8
                            <td class='s4'>1.2
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_monticola
                            <td class='s3'>371
                            <td class='s3'>346
                            <td class='s3'>25
                            <td class='s4'>0.7
                            <td class='s4'>0.2
                            <td class='s4'>3.3
                            <td class='s4'>1.4
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_paraguariensis
                            <td class='s3'>82
                            <td class='s3'>52
                            <td class='s3'>30
                            <td class='s4'>3.7
                            <td class='s4'>0.4
                            <td class='s4'>2.5
                            <td class='s4'>2.2
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Arachis_villosa
                            <td class='s3'>343
                            <td class='s3'>319
                            <td class='s3'>24
                            <td class='s4'>0.7
                            <td class='s4'>0.3
                            <td class='s4'>3.3
                            <td class='s4'>1.4
                            <td dir='ltr' class='s5'>HPS
                            <td class='s3'>1</tr>
                    </table>
                <? } else if ($crop_ID == $IPOMOEA) { ?> 
                    <table id="tb_Ipomoea">
                        <tr class='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS<td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS
                            <td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>Notes<td  class='s3'><td  class='s3'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_batatas<td  class='s5'>11<td  class='s5'>10<td  class='s5'>1
                            <td  class='s6'>0.909090<td  class='s6'>0<td  class='s6'>0<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'>
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_batatas_apiculata<td  class='s5'>1<td  class='s5'>1<td  class='s5'>0
                            <td  class='s6'>0<td  class='s6'>NA<td  class='s6'>NA<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'>
                            <td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_cordatotriloba<td  class='s5'>277<td  class='s5'>174<td  class='s5'>103<td  class='s6'>3.718412
                            <td  class='s6'>1.696628<td  class='s6'>3.090909<td  class='s6'>2.835316<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'>
                            <td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_cynanchifolia<td  class='s5'>29<td  class='s5'>28<td  class='s5'>1<td  class='s6'>0.344828<td  class='s6'>0<td  class='s6'>0<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_grandifolia<td  class='s5'>522<td  class='s5'>337<td  class='s5'>185<td  class='s6'>3.544061<td  dir='ltr' class='s9'>1.628893<td  dir='ltr' class='s9'>5<td  class='s6'>3.390985<td  dir='ltr' class='s7'>MPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_lacunosa<td  class='s5'>231<td  class='s5'>221<td  class='s5'>10<td  class='s6'>0.4329<td  dir='ltr' class='s9'>0.029947<td  dir='ltr' class='s9'>0.512821<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_leucantha<td  class='s5'>62<td  class='s5'>44<td  class='s5'>18<td  class='s6'>2.903226<td  class='s6'>0.028363<td  class='s6'>0.322581<td  class='s6'>1.084723<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_littoralis<td  dir='ltr' class='s7'>191<td  dir='ltr' class='s7'>189<td  dir='ltr' class='s7'>2<td  dir='ltr' class='s9'>0.104712<td  dir='ltr' class='s9'>0.011727<td  dir='ltr' class='s9'>0.058424<td  dir='ltr' class='s9'>0<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_purpurea<td  dir='ltr' class='s7'>1950<td  dir='ltr' class='s7'>1824<td  dir='ltr' class='s7'>126<td  dir='ltr' class='s9'>0.646154<td  dir='ltr' class='s9'>0.018764<td  dir='ltr' class='s9'>0.299401<td  dir='ltr' class='s9'>0.32144<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_ramosissima<td  dir='ltr' class='s7'>190<td  dir='ltr' class='s7'>152<td  dir='ltr' class='s7'>38<td  dir='ltr' class='s9'>2<td  dir='ltr' class='s9'>0.493047<td  dir='ltr' class='s9'>2.439024<td  dir='ltr' class='s9'>1.644024<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_splendor-sylvae<td  class='s5'>23<td  class='s5'>23<td  class='s5'>0<td  class='s6'>0<td  dir='ltr' class='s9'>0<td  dir='ltr' class='s9'>0<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_tabascana<td  class='s5'>7<td  class='s5'>3<td  class='s5'>4<td  class='s6'>5.714286<td  dir='ltr' class='s9'>10<td  dir='ltr' class='s9'>10<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_tenuissima<td  class='s5'>35<td  class='s5'>32<td  class='s5'>3<td  class='s6'>0.857143<td  class='s6'>0.047644<td  class='s6'>0.4<td  class='s6'>0<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_tiliacea<td  class='s5'>469<td  class='s5'>408<td  class='s5'>61<td  class='s6'>1.30064<td  class='s6'>0.319745<td  class='s6'>1.067416<td  class='s6'>0.895934<td  dir='ltr' class='s7'>HPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s4'>Ipomoea_trifida<td  class='s5'>764<td  class='s5'>481<td  class='s5'>283<td  class='s6'>3.704188<td  dir='ltr' class='s9'>2.795335<td  dir='ltr' class='s9'>5.172414<td  class='s6'>3.890646<td  dir='ltr' class='s7'>MPS<td  class='s5'><td  class='s8'><td  class='s8'></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s10'>Ipomoea_triloba<td  dir='ltr' class='s7'>689<td  dir='ltr' class='s7'>588<td  dir='ltr' class='s7'>101<td  dir='ltr' class='s9'>1.465893<td  dir='ltr' class='s9'>0.09941<td  dir='ltr' class='s9'>1.018767<td  dir='ltr' class='s9'>0.861357<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'><td  class='s8'><td  class='s8'></tr>
                       </table> 

                <? } else if ($crop_ID == $LETTUCE) { ?>
                    <table id='tb_lettuce'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_aculeata
                            <td class='s4'>10
                            <td class='s4'>4
                            <td class='s4'>6
                            <td class='s5'>6.0
                            <td class='s5'>10.0
                            <td class='s5'>5.0
                            <td class='s5'>7.0
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_azerbaijanica
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_dregeana
                            <td class='s4'>4
                            <td class='s4'>4
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_georgica
                            <td class='s4'>18
                            <td class='s4'>17
                            <td class='s4'>1
                            <td class='s5'>0.6
                            <td class='s5'>4.9
                            <td class='s5'>10.0
                            <td class='s5'>5.2
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_scarioloides
                            <td class='s4'>1
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_serriola
                            <td class='s4'>999
                            <td class='s4'>938
                            <td class='s4'>61
                            <td class='s5'>0.6
                            <td class='s5'>0.5
                            <td class='s5'>3.8
                            <td class='s5'>1.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_saligna
                            <td class='s4'>1552
                            <td class='s4'>1450
                            <td class='s4'>102
                            <td class='s5'>0.7
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>6.9
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lactuca_virosa
                            <td class='s4'>3420
                            <td class='s4'>3318
                            <td class='s4'>102
                            <td class='s5'>0.3
                            <td class='s5'>0.8
                            <td class='s5'>3.9
                            <td class='s5'>1.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $MAIZE) { ?>
                    <table id='tb_maize'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE
                            <td class='s3'>
                            <td class='s3'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Tripsacum_dactyloides
                            <td class='s5'>3459
                            <td class='s5'>3421
                            <td class='s5'>38
                            <td class='s6'>0.1
                            <td class='s6'>0.1
                            <td class='s6'>1.5
                            <td class='s6'>0.6
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Tripsacum_dactyloides_var._dactyloides
                            <td class='s5'>597
                            <td class='s5'>594
                            <td class='s5'>3
                            <td class='s6'>0.1
                            <td class='s6'>0.0
                            <td class='s6'>0.5
                            <td class='s6'>0.2
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Tripsacum_dactyloides_var._hispidum
                            <td class='s5'>230
                            <td class='s5'>163
                            <td class='s5'>67
                            <td class='s6'>2.9
                            <td class='s6'>1.0
                            <td class='s6'>5.3
                            <td class='s6'>3.1
                            <td dir='ltr' class='s7'>MPS
                            <td class='s5'>0
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Tripsacum_dactyloides_var._meridonale
                            <td class='s5'>210
                            <td class='s5'>190
                            <td class='s5'>20
                            <td class='s6'>1.0
                            <td class='s6'>0.8
                            <td class='s6'>5.9
                            <td class='s6'>2.5
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Tripsacum_dactyloides_var._mexicanum
                            <td class='s5'>73
                            <td class='s5'>33
                            <td class='s5'>40
                            <td class='s6'>5.5
                            <td class='s6'>1.2
                            <td class='s6'>6.2
                            <td class='s6'>4.3
                            <td dir='ltr' class='s7'>MPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Zea_diploperennis
                            <td class='s5'>85
                            <td class='s5'>61
                            <td class='s5'>24
                            <td class='s6'>2.8
                            <td class='s6'>1.8
                            <td class='s6'>3.8
                            <td class='s6'>2.8
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Zea_luxurians
                            <td class='s5'>122
                            <td class='s5'>104
                            <td class='s5'>18
                            <td class='s6'>1.5
                            <td class='s6'>0.2
                            <td class='s6'>1.6
                            <td class='s6'>1.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Zea_mays_subsp._mexicana
                            <td class='s5'>1217
                            <td class='s5'>767
                            <td class='s5'>450
                            <td class='s6'>3.7
                            <td class='s6'>1.7
                            <td class='s6'>4.8
                            <td class='s6'>3.4
                            <td dir='ltr' class='s7'>MPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Zea_nicaraguensis
                            <td class='s5'>6
                            <td class='s5'>3
                            <td class='s5'>3
                            <td class='s6'>5.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s6'>5.0
                            <td dir='ltr' class='s7'>MPS
                            <td class='s5'>0
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Zea_perennis
                            <td class='s5'>50
                            <td class='s5'>36
                            <td class='s5'>14
                            <td class='s6'>2.8
                            <td class='s6'>6.5
                            <td class='s6'>10.0
                            <td class='s6'>6.4
                            <td dir='ltr' class='s7'>LPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                    </table>
                <? } else if ($crop_ID == $MANGO) { ?>
                    <table id='tb_ mamgo'>
                        <tr class='tabla_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_altissima
                            <td class='s4'>36
                            <td class='s4'>36
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_andamanica
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_applanata
                            <td class='s4'>18
                            <td class='s4'>18
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_austro-indica
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_caloneura
                            <td class='s4'>20
                            <td class='s4'>20
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_casturi
                            <td class='s4'>2
                            <td class='s4'>1
                            <td class='s4'>1
                            <td class='s5'>5.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>5.0
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_cochinchinensis
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_collina
                            <td class='s4'>1
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_dewildei
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_dongnaiensis
                            <td class='s4'>4
                            <td class='s4'>4
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_flava
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_gedebe
                            <td class='s4'>32
                            <td class='s4'>32
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_gracilipes
                            <td class='s4'>8
                            <td class='s4'>8
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_griffithii
                            <td class='s4'>51
                            <td class='s4'>51
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_indica
                            <td class='s4'>1550
                            <td class='s4'>1441
                            <td class='s4'>109
                            <td class='s5'>0.7
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_lalijiwa
                            <td class='s4'>17
                            <td class='s4'>17
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_laurina
                            <td class='s4'>118
                            <td class='s4'>118
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_linearifolia
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_longipetiolata
                            <td class='s4'>5
                            <td class='s4'>5
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_magnifica
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_merrillii
                            <td class='s4'>5
                            <td class='s4'>5
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_microphylla
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_minor
                            <td class='s4'>102
                            <td class='s4'>102
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_minutifolia
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_monandra
                            <td class='s4'>15
                            <td class='s4'>15
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_mucronulata
                            <td class='s4'>34
                            <td class='s4'>34
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_nicobarica
                            <td class='s4'>1
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_oblongifolia
                            <td class='s4'>5
                            <td class='s4'>5
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_orophila
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_paludosa
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_parvifolia
                            <td class='s4'>46
                            <td class='s4'>46
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_pedicellata
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_pentandra
                            <td class='s4'>15
                            <td class='s4'>15
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_pseudo-indica
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_quadrifida
                            <td class='s4'>55
                            <td class='s4'>55
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_rigida
                            <td class='s4'>34
                            <td class='s4'>34
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_rubropetala
                            <td class='s4'>5
                            <td class='s4'>5
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_rufocostata
                            <td class='s4'>17
                            <td class='s4'>17
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_similis
                            <td class='s4'>16
                            <td class='s4'>16
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_sulavesiana
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_sumbawaensis
                            <td class='s4'>4
                            <td class='s4'>4
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_swintonioides
                            <td class='s4'>19
                            <td class='s4'>19
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_sylvatica
                            <td class='s4'>30
                            <td class='s4'>30
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_timorensis
                            <td class='s4'>26
                            <td class='s4'>26
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_torquenda
                            <td class='s4'>41
                            <td class='s4'>41
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Mangifera_zeylanica
                            <td class='s4'>25
                            <td class='s4'>24
                            <td class='s4'>1
                            <td class='s5'>0.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $MILLET_PANICUM) { ?>
                    <table id='tb_millet_panicum'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Panicum_bergii
                            <td class='s4'>968
                            <td class='s4'>951
                            <td class='s4'>17
                            <td class='s5'>0.2
                            <td class='s5'>0.0
                            <td class='s5'>0.5
                            <td class='s5'>0.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Panicum_fauriei
                            <td class='s4'>49
                            <td class='s4'>49
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Panicum_miliaceum
                            <td class='s4'>18227
                            <td class='s4'>5847
                            <td class='s4'>12380
                            <td class='s5'>6.8
                            <td class='s5'>0.0
                            <td class='s5'>1.1
                            <td class='s5'>2.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Panicum_miliaceum_var._coccineum
                            <td class='s4'>25
                            <td class='s4'>0
                            <td class='s4'>25
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>10.0
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Panicum_nephelophilum
                            <td class='s4'>63
                            <td class='s4'>63
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Panicum_stramineum
                            <td class='s4'>429
                            <td class='s4'>429
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $MILLET_SETARIA) { ?>
                    <table id='tb_millet_setaria'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Setaria_faberi
                            <td class='s4'>1497
                            <td class='s4'>1492
                            <td class='s4'>5
                            <td class='s5'>0.0
                            <td class='s5'>0.4
                            <td class='s5'>0.4
                            <td class='s5'>0.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Setaria_italica
                            <td class='s4'>4070
                            <td class='s4'>2786
                            <td class='s4'>1284
                            <td class='s5'>3.2
                            <td class='s5'>0.7
                            <td class='s5'>2.3
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Setaria_verticillata
                            <td class='s4'>4694
                            <td class='s4'>4638
                            <td class='s4'>56
                            <td class='s5'>0.1
                            <td class='s5'>0.1
                            <td class='s5'>1.2
                            <td class='s5'>0.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Setaria_viridis
                            <td class='s4'>5315
                            <td class='s4'>5251
                            <td class='s4'>64
                            <td class='s5'>0.1
                            <td class='s5'>0.2
                            <td class='s5'>2.2
                            <td class='s5'>0.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $MUSA) { ?>

                <? } else if ($crop_ID == $PAPAYA) { ?>
                    <table id='tb_papaya'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes
                            <td class='s3'>
                            <td class='s3'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Carica_papaya
                            <td class='s5'>1286
                            <td class='s5'>1278
                            <td class='s5'>8
                            <td class='s6'>0.1
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Horovitzia_cnidoscoloides
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Jarilla_chocola
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Jarilla_heterophylla
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Jarilla_nana
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Vasconcellea_cauliflora
                            <td class='s5'>47
                            <td class='s5'>47
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Vasconcellea_pubescens
                            <td class='s5'>46
                            <td class='s5'>46
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s4'>Vasconcellea_quercifolia
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                    </table>
                <? } else if ($crop_ID == $PEAR) { ?>
                    <table id='tb_pear'>
                        <tr class='tabla_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cydonia_oblonga
                            <td class='s4'>346
                            <td class='s4'>342
                            <td class='s4'>4
                            <td class='s5'>0.1
                            <td class='s5'>0.1
                            <td class='s5'>1.5
                            <td class='s5'>0.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_betulifolia
                            <td class='s4'>37
                            <td class='s4'>24
                            <td class='s4'>13
                            <td class='s5'>3.5
                            <td class='s5'>0.1
                            <td class='s5'>2.9
                            <td class='s5'>2.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_boissieriana
                            <td class='s4'>9
                            <td class='s4'>6
                            <td class='s4'>3
                            <td class='s5'>3.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.3
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_bretscheneideri
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_calleryana
                            <td class='s4'>204
                            <td class='s4'>193
                            <td class='s4'>11
                            <td class='s5'>0.5
                            <td class='s5'>0.0
                            <td class='s5'>0.3
                            <td class='s5'>0.3
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_caucasica
                            <td class='s4'>81
                            <td class='s4'>74
                            <td class='s4'>7
                            <td class='s5'>0.9
                            <td class='s5'>1.4
                            <td class='s5'>7.5
                            <td class='s5'>3.3
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_cordata
                            <td class='s4'>276
                            <td class='s4'>166
                            <td class='s4'>110
                            <td class='s5'>4.0
                            <td class='s5'>0.4
                            <td class='s5'>1.9
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_cossonii
                            <td class='s4'>15
                            <td class='s4'>14
                            <td class='s4'>1
                            <td class='s5'>0.7
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_dimorphophylla
                            <td class='s4'>6
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s5'>5.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>5.0
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_elaeagrifolia
                            <td class='s4'>51
                            <td class='s4'>37
                            <td class='s4'>14
                            <td class='s5'>2.7
                            <td class='s5'>0.1
                            <td class='s5'>2.2
                            <td class='s5'>1.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_fauriei
                            <td class='s4'>14
                            <td class='s4'>10
                            <td class='s4'>4
                            <td class='s5'>2.9
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>7.6
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_gharbiana
                            <td class='s4'>6
                            <td class='s4'>6
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_glabra
                            <td class='s4'>7
                            <td class='s4'>6
                            <td class='s4'>1
                            <td class='s5'>1.4
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>1.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_korshinskyi
                            <td class='s4'>16
                            <td class='s4'>7
                            <td class='s4'>9
                            <td class='s5'>5.6
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>8.5
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_mamorensis
                            <td class='s4'>16
                            <td class='s4'>15
                            <td class='s4'>1
                            <td class='s5'>0.6
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_nivalis
                            <td class='s4'>54
                            <td class='s4'>47
                            <td class='s4'>7
                            <td class='s5'>1.3
                            <td class='s5'>0.4
                            <td class='s5'>0.6
                            <td class='s5'>0.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_pashia
                            <td class='s4'>297
                            <td class='s4'>273
                            <td class='s4'>24
                            <td class='s5'>0.8
                            <td class='s5'>0.4
                            <td class='s5'>1.6
                            <td class='s5'>0.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_pseudopashia
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_pyraster
                            <td class='s4'>172
                            <td class='s4'>146
                            <td class='s4'>26
                            <td class='s5'>1.5
                            <td class='s5'>0.1
                            <td class='s5'>1.2
                            <td class='s5'>0.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_pyrifolia
                            <td class='s4'>130
                            <td class='s4'>99
                            <td class='s4'>31
                            <td class='s5'>2.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_regelii
                            <td class='s4'>49
                            <td class='s4'>34
                            <td class='s4'>15
                            <td class='s5'>3.1
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.1
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_salicifolia
                            <td class='s4'>206
                            <td class='s4'>177
                            <td class='s4'>29
                            <td class='s5'>1.4
                            <td class='s5'>0.3
                            <td class='s5'>3.0
                            <td class='s5'>1.6
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_serrulata
                            <td class='s4'>21
                            <td class='s4'>18
                            <td class='s4'>3
                            <td class='s5'>1.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_spinosa
                            <td class='s4'>110
                            <td class='s4'>89
                            <td class='s4'>21
                            <td class='s5'>1.9
                            <td class='s5'>0.6
                            <td class='s5'>2.7
                            <td class='s5'>1.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_syriaca
                            <td class='s4'>77
                            <td class='s4'>39
                            <td class='s4'>38
                            <td class='s5'>4.9
                            <td class='s5'>0.3
                            <td class='s5'>3.1
                            <td class='s5'>2.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_turcomanica
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Pyrus_ussuriensis
                            <td class='s4'>262
                            <td class='s4'>222
                            <td class='s4'>40
                            <td class='s5'>1.5
                            <td class='s5'>0.0
                            <td class='s5'>1.0
                            <td class='s5'>0.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $PINEAPPLE) { ?>
                    <table id='tb_pineapple'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s1'>SRS
                            <td dir='ltr' class='s1'>GRS
                            <td dir='ltr' class='s1'>ERS
                            <td dir='ltr' class='s1'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Ananas_ananassoides
                            <td class='s3'>223
                            <td class='s3'>223
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td dir='ltr' class='s4'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Ananas_bracteatus
                            <td class='s3'>72
                            <td class='s3'>72
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td dir='ltr' class='s4'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Ananas_lucidus
                            <td class='s3'>12
                            <td class='s3'>12
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td class='s3'>0
                            <td dir='ltr' class='s4'>HPS
                            <td class='s3'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Ananas_paraguazensis
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>HPS
                            <td dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s2'>Ananas_sagenaria
                            <td class='s3'>9
                            <td class='s3'>9
                            <td class='s3'>0
                            <td class='s3'>0
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td class='s3'>0
                            <td dir='ltr' class='s4'>HPS
                            <td class='s3'>1</tr>
                    </table>
                <? } else if ($crop_ID == $PRUNUS) { ?>
                    <table id='tb_prunus'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>Taxon
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_bucharica
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s4'>2
                            <td class='s5'>10.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_davidiana_var._davidiana
                            <td class='s4'>55
                            <td class='s4'>49
                            <td class='s4'>6
                            <td class='s5'>1.1
                            <td class='s5'>0.5
                            <td class='s5'>2.0
                            <td class='s5'>1.2
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_davidiana_var._potaninii
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_kansuensis
                            <td class='s4'>18
                            <td class='s4'>17
                            <td class='s4'>1
                            <td class='s5'>0.6
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.6
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_minutiflora
                            <td class='s4'>49
                            <td class='s4'>49
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_mira
                            <td class='s4'>23
                            <td class='s4'>12
                            <td class='s4'>11
                            <td class='s5'>4.8
                            <td class='s5'>3.2
                            <td class='s5'>5.0
                            <td class='s5'>4.3
                            <td dir='ltr' class='s7'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_nana
                            <td class='s4'>121
                            <td class='s4'>118
                            <td class='s4'>3
                            <td class='s5'>0.2
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_pedunculata
                            <td class='s4'>15
                            <td class='s4'>11
                            <td class='s4'>4
                            <td class='s5'>2.7
                            <td class='s5'>9.6
                            <td class='s5'>4.0
                            <td class='s5'>5.4
                            <td dir='ltr' class='s7'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_tangutica
                            <td class='s4'>24
                            <td class='s4'>21
                            <td class='s4'>3
                            <td class='s5'>1.3
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>1.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Amygdalus_triloba
                            <td class='s4'>48
                            <td class='s4'>38
                            <td class='s4'>10
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>2.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Armeniaca_dasycarpa
                            <td class='s4'>182
                            <td class='s4'>175
                            <td class='s4'>7
                            <td class='s5'>0.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Armeniaca_mandshurica_var._mandshurica
                            <td class='s4'>34
                            <td class='s4'>31
                            <td class='s4'>3
                            <td class='s5'>0.9
                            <td class='s5'>0.0
                            <td class='s5'>0.7
                            <td class='s5'>0.6
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Armeniaca_mume_var._mume
                            <td class='s4'>334
                            <td class='s4'>319
                            <td class='s4'>15
                            <td class='s5'>0.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Armeniaca_sibirica_var._sibirica
                            <td class='s4'>37
                            <td class='s4'>35
                            <td class='s4'>2
                            <td class='s5'>0.5
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.5
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Armeniaca_vulgaris_var._ansu
                            <td class='s4'>5
                            <td class='s4'>5
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_cerasoides
                            <td class='s4'>114
                            <td class='s4'>112
                            <td class='s4'>2
                            <td class='s5'>0.2
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_dielsiana_var._dielsiana
                            <td class='s4'>25
                            <td class='s4'>25
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_fruticosa
                            <td class='s4'>283
                            <td class='s4'>175
                            <td class='s4'>108
                            <td class='s5'>3.8
                            <td class='s5'>0.2
                            <td class='s5'>5.0
                            <td class='s5'>3.0
                            <td dir='ltr' class='s7'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_japonica_var._japonica
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_mahaleb
                            <td class='s4'>1353
                            <td class='s4'>851
                            <td class='s4'>502
                            <td class='s5'>3.7
                            <td class='s5'>0.1
                            <td class='s5'>1.2
                            <td class='s5'>1.7
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_nipponica
                            <td class='s4'>25
                            <td class='s4'>22
                            <td class='s4'>3
                            <td class='s5'>1.2
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.4
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_pleiocerasus
                            <td class='s4'>7
                            <td class='s4'>7
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_prostrata
                            <td class='s4'>160
                            <td class='s4'>151
                            <td class='s4'>9
                            <td class='s5'>0.6
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td class='s5'>0.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_pseudocerasus
                            <td class='s4'>40
                            <td class='s4'>37
                            <td class='s4'>3
                            <td class='s5'>0.8
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_pumila_subsp._besseyi
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_serrula
                            <td class='s4'>40
                            <td class='s4'>38
                            <td class='s4'>2
                            <td class='s5'>0.5
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_serrulata_var._lannesiana
                            <td class='s4'>17
                            <td class='s4'>14
                            <td class='s4'>3
                            <td class='s5'>1.8
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>1.8
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_subhirtella_var._subhirtella
                            <td class='s4'>86
                            <td class='s4'>83
                            <td class='s4'>3
                            <td class='s5'>0.3
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_tomentosa
                            <td class='s4'>212
                            <td class='s4'>194
                            <td class='s4'>18
                            <td class='s5'>0.8
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td class='s5'>0.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cerasus_turcomanica
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Padus_cornuta
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Padus_maackii
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_americana
                            <td class='s4'>287
                            <td class='s4'>280
                            <td class='s4'>7
                            <td class='s5'>0.2
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_amygdalus
                            <td class='s4'>1251
                            <td class='s4'>968
                            <td class='s4'>283
                            <td class='s5'>2.3
                            <td class='s5'>0.2
                            <td class='s5'>2.5
                            <td class='s5'>1.7
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_arabica
                            <td class='s4'>17
                            <td class='s4'>13
                            <td class='s4'>4
                            <td class='s5'>2.4
                            <td class='s5'>0.2
                            <td class='s5'>5.0
                            <td class='s5'>2.5
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_argentea
                            <td class='s4'>15
                            <td class='s4'>14
                            <td class='s4'>1
                            <td class='s5'>0.7
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.7
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_armeniaca
                            <td class='s4'>3344
                            <td class='s4'>1911
                            <td class='s4'>1433
                            <td class='s5'>4.3
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>1.4
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_avium
                            <td class='s4'>7568
                            <td class='s4'>2933
                            <td class='s4'>4635
                            <td class='s5'>6.1
                            <td class='s5'>0.4
                            <td class='s5'>3.6
                            <td class='s5'>3.4
                            <td dir='ltr' class='s7'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_besseyi
                            <td class='s4'>5
                            <td class='s4'>3
                            <td class='s4'>2
                            <td class='s5'>4.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>1.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_bifrons
                            <td class='s4'>13
                            <td class='s4'>10
                            <td class='s4'>3
                            <td class='s5'>2.3
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>2.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_bokhariensis
                            <td class='s4'>36
                            <td class='s4'>34
                            <td class='s4'>2
                            <td class='s5'>0.6
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.6
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_brahuica
                            <td class='s4'>120
                            <td class='s4'>120
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_brigantina
                            <td class='s4'>23
                            <td class='s4'>20
                            <td class='s4'>3
                            <td class='s5'>1.3
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.4
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_canescens
                            <td class='s4'>10
                            <td class='s4'>7
                            <td class='s4'>3
                            <td class='s5'>3.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>3.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_carduchorum
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_cerasifera
                            <td class='s4'>2832
                            <td class='s4'>1811
                            <td class='s4'>1021
                            <td class='s5'>3.6
                            <td class='s5'>0.2
                            <td class='s5'>1.6
                            <td class='s5'>1.8
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_cerasifera_var._divaricata
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_concinna
                            <td class='s4'>5
                            <td class='s4'>5
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_davidiana_var._davidiana
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_eburnea
                            <td class='s4'>6
                            <td class='s4'>6
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_elaeagrifolia
                            <td class='s4'>4
                            <td class='s4'>4
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_emarginata
                            <td class='s4'>1683
                            <td class='s4'>1667
                            <td class='s4'>16
                            <td class='s5'>0.1
                            <td class='s5'>0.8
                            <td class='s5'>4.2
                            <td class='s5'>1.7
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_fenzliana
                            <td class='s4'>86
                            <td class='s4'>73
                            <td class='s4'>13
                            <td class='s5'>1.5
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>7.2
                            <td dir='ltr' class='s7'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_ferganensis
                            <td class='s4'>6
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s5'>5.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>5.0
                            <td dir='ltr' class='s7'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_haussknechtii
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_havardii
                            <td class='s4'>7
                            <td class='s4'>7
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_incana
                            <td class='s4'>41
                            <td class='s4'>38
                            <td class='s4'>3
                            <td class='s5'>0.7
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.2
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_incisa
                            <td class='s4'>64
                            <td class='s4'>48
                            <td class='s4'>16
                            <td class='s5'>2.5
                            <td class='s5'>0.3
                            <td class='s5'>3.3
                            <td class='s5'>2.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_korshinskyi
                            <td class='s4'>15
                            <td class='s4'>1
                            <td class='s4'>14
                            <td class='s5'>9.3
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>9.3
                            <td dir='ltr' class='s7'>NFCR
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_kotschyi
                            <td class='s4'>9
                            <td class='s4'>7
                            <td class='s4'>2
                            <td class='s5'>2.2
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>2.2
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_kuramica
                            <td class='s4'>103
                            <td class='s4'>100
                            <td class='s4'>3
                            <td class='s5'>0.3
                            <td class='s5'>0.3
                            <td class='s5'>2.8
                            <td class='s5'>1.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_lycioides
                            <td class='s4'>8
                            <td class='s4'>7
                            <td class='s4'>1
                            <td class='s5'>1.3
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>1.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_maritima
                            <td class='s4'>43
                            <td class='s4'>38
                            <td class='s4'>5
                            <td class='s5'>1.2
                            <td class='s5'>0.1
                            <td class='s5'>0.5
                            <td class='s5'>0.6
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_nipponica_var._nipponica
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_pensylvanica
                            <td class='s4'>171
                            <td class='s4'>162
                            <td class='s4'>9
                            <td class='s5'>0.5
                            <td class='s5'>0.0
                            <td class='s5'>0.6
                            <td class='s5'>0.4
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_pumila
                            <td class='s4'>49
                            <td class='s4'>47
                            <td class='s4'>2
                            <td class='s5'>0.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_rivularis
                            <td class='s4'>105
                            <td class='s4'>105
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_salicina
                            <td class='s4'>834
                            <td class='s4'>768
                            <td class='s4'>66
                            <td class='s5'>0.8
                            <td class='s5'>0.1
                            <td class='s5'>1.0
                            <td class='s5'>0.6
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_salicina_var._salicina
                            <td class='s4'>72
                            <td class='s4'>71
                            <td class='s4'>1
                            <td class='s5'>0.1
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_scoparia
                            <td class='s4'>17
                            <td class='s4'>14
                            <td class='s4'>3
                            <td class='s5'>1.8
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>1.8
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_simonii
                            <td class='s4'>26
                            <td class='s4'>11
                            <td class='s4'>15
                            <td class='s5'>5.8
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>5.8
                            <td dir='ltr' class='s7'>LPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_spinosa
                            <td class='s4'>16866
                            <td class='s4'>16810
                            <td class='s4'>56
                            <td class='s5'>0.0
                            <td class='s5'>2.2
                            <td class='s5'>4.1
                            <td class='s5'>2.1
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_trichamygdalus
                            <td class='s4'>2
                            <td class='s4'>2
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_ussuriensis
                            <td class='s4'>4
                            <td class='s4'>4
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_webbii
                            <td class='s4'>35
                            <td class='s4'>28
                            <td class='s4'>7
                            <td class='s5'>2.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.7
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_webbii
                            <td class='s4'>35
                            <td class='s4'>28
                            <td class='s4'>7
                            <td class='s5'>2.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.7
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_spinosissima
                            <td class='s4'>21
                            <td class='s4'>17
                            <td class='s4'>4
                            <td class='s5'>1.9
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>7.3
                            <td dir='ltr' class='s7'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Prunus_xeminens
                            <td class='s4'>103
                            <td class='s4'>103
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $QUINOA) { ?>
                    <table id='tb_quinoa'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_berlandieri
                            <td class='s4'>907
                            <td class='s4'>884
                            <td class='s4'>23
                            <td class='s5'>0.3
                            <td class='s5'>0.2
                            <td class='s5'>2.1
                            <td class='s5'>0.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_berlandieri_var._boscianum
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_berlandieri_var._bushianum
                            <td class='s4'>19
                            <td class='s4'>18
                            <td class='s4'>1
                            <td class='s5'>0.5
                            <td class='s5'>0.6
                            <td class='s5'>2.0
                            <td class='s5'>1.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_berlandieri_var._macrocalycium
                            <td class='s4'>130
                            <td class='s4'>127
                            <td class='s4'>3
                            <td class='s5'>0.2
                            <td class='s5'>0.2
                            <td class='s5'>3.3
                            <td class='s5'>1.3
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_berlandieri_var._zschackei
                            <td class='s4'>368
                            <td class='s4'>362
                            <td class='s4'>6
                            <td class='s5'>0.2
                            <td class='s5'>0.1
                            <td class='s5'>0.7
                            <td class='s5'>0.3
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_hircinum
                            <td class='s4'>242
                            <td class='s4'>242
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_philippianum
                            <td class='s4'>36
                            <td class='s4'>36
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Chenopodium_quinoa
                            <td class='s4'>600
                            <td class='s4'>421
                            <td class='s4'>179
                            <td class='s5'>3.0
                            <td class='s5'>0.2
                            <td class='s5'>3.1
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td class='s8'>
                            <td class='s4'>2
                            <td class='s4'>1
                            <td class='s4'>1
                            <td class='s5'>5.0
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>8.3
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>0</tr>
                    </table>
                <? } else if ($crop_ID == $SAFFLOWER) { ?>
                    <table id='tb_safflower'>
                        <tr class='table_header'>

                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes
                            <td class='s3'>
                            <td class='s3'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_boissieri
                            <td class='s5'>4
                            <td class='s5'>2
                            <td class='s5'>2
                            <td class='s6'>5.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>5.0
                            <td dir='ltr' class='s8'>MPS
                            <td class='s5'>0
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_creticus
                            <td class='s5'>14
                            <td class='s5'>8
                            <td class='s5'>6
                            <td class='s6'>4.3
                            <td class='s6'>10.0
                            <td class='s6'>10.0
                            <td class='s6'>8.1
                            <td dir='ltr' class='s8'>NFCR
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_curdicus
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_dentatus
                            <td class='s5'>523
                            <td class='s5'>521
                            <td class='s5'>2
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_divaricatus
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s8'>no occurrence data; not assessed
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_glaucus
                            <td class='s5'>38
                            <td class='s5'>35
                            <td class='s5'>3
                            <td class='s6'>0.8
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>0.8
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_gypsicola
                            <td class='s5'>8
                            <td class='s5'>7
                            <td class='s5'>1
                            <td class='s6'>1.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>1.3
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_lanatus
                            <td class='s5'>4037
                            <td class='s5'>4003
                            <td class='s5'>34
                            <td class='s6'>0.1
                            <td class='s6'>0.3
                            <td class='s6'>1.4
                            <td class='s6'>0.6
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_leucocaulos
                            <td class='s5'>64
                            <td class='s5'>63
                            <td class='s5'>1
                            <td class='s6'>0.2
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>0.2
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_oxyacanthus
                            <td class='s5'>391
                            <td class='s5'>280
                            <td class='s5'>111
                            <td class='s6'>2.8
                            <td class='s6'>1.0
                            <td class='s6'>2.3
                            <td class='s6'>2.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_palaestinus
                            <td class='s5'>8
                            <td class='s5'>4
                            <td class='s5'>4
                            <td class='s6'>5.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>5.0
                            <td dir='ltr' class='s8'>MPS
                            <td class='s5'>0
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_persicus
                            <td class='s5'>10
                            <td class='s5'>9
                            <td class='s5'>1
                            <td class='s6'>1.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>1.0
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>0
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_tenuis
                            <td class='s5'>21
                            <td class='s5'>16
                            <td class='s5'>5
                            <td class='s6'>2.4
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s6'>2.4
                            <td dir='ltr' class='s8'>HPS
                            <td class='s5'>0
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Carthamus_turkestanicus
                            <td class='s5'>33
                            <td class='s5'>19
                            <td class='s5'>14
                            <td class='s6'>4.2
                            <td class='s6'>2.4
                            <td class='s6'>6.3
                            <td class='s6'>4.3
                            <td dir='ltr' class='s8'>MPS
                            <td class='s5'>1
                            <td class='s9'>
                            <td class='s9'>
                        </tr>
                    </table>
                <? } else if ($crop_ID == $SQUASH) { ?>
                    <table id='tb_squash'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>crop_code
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_argyrosperma
                            <td dir='ltr' class='s4'>squash_pepo
                            <td class='s5'>314
                            <td class='s5'>175
                            <td class='s5'>139
                            <td class='s6'>4.4
                            <td class='s6'>1.7
                            <td class='s6'>7.1
                            <td class='s6'>4.4
                            <td dir='ltr' class='s4'>MPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_ecuadorensis
                            <td dir='ltr' class='s4'>squash_maxima
                            <td class='s5'>20
                            <td class='s5'>9
                            <td class='s5'>11
                            <td class='s6'>5.5
                            <td class='s6'>6.6
                            <td class='s6'>8.8
                            <td class='s6'>7.0
                            <td dir='ltr' class='s4'>LPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_ecuadorensis
                            <td dir='ltr' class='s4'>squash_pepo
                            <td class='s5'>20
                            <td class='s5'>9
                            <td class='s5'>11
                            <td class='s6'>5.5
                            <td class='s6'>6.6
                            <td class='s6'>8.8
                            <td class='s6'>7.0
                            <td dir='ltr' class='s4'>LPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_lundelliana
                            <td dir='ltr' class='s4'>squash_maxima
                            <td class='s5'>50
                            <td class='s5'>39
                            <td class='s5'>11
                            <td class='s6'>2.2
                            <td class='s6'>0.7
                            <td class='s6'>2.3
                            <td class='s6'>1.7
                            <td dir='ltr' class='s4'>HPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_lundelliana
                            <td dir='ltr' class='s4'>squash_pepo
                            <td class='s5'>50
                            <td class='s5'>39
                            <td class='s5'>11
                            <td class='s6'>2.2
                            <td class='s6'>1.5
                            <td class='s6'>5.8
                            <td class='s6'>3.2
                            <td dir='ltr' class='s4'>MPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s7'>Cucurbita_maxima_subsp._andreana
                            <td dir='ltr' class='s8'>squash_maxima
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s8'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s8'>HPS
                            <td dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_okeechobeensis_subsp._martinezii
                            <td dir='ltr' class='s4'>squash_pepo
                            <td class='s5'>57
                            <td class='s5'>41
                            <td class='s5'>16
                            <td class='s6'>2.8
                            <td class='s6'>3.6
                            <td class='s6'>7.5
                            <td class='s6'>4.6
                            <td dir='ltr' class='s4'>MPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_okeechobeensis_subsp._okeechobeensis
                            <td dir='ltr' class='s4'>squash_pepo
                            <td class='s5'>35
                            <td class='s5'>34
                            <td class='s5'>1
                            <td class='s6'>0.3
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.1
                            <td dir='ltr' class='s4'>HPS
                            <td class='s5'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_pepo_subsp._fraterna
                            <td dir='ltr' class='s4'>squash_pepo
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s10'>NA
                            <td dir='ltr' class='s10'>NA
                            <td dir='ltr' class='s10'>NA
                            <td dir='ltr' class='s10'>NA
                            <td dir='ltr' class='s4'>HPS
                            <td dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s7'>Cucurbita_pepo_subsp._ovifera_var._ozarkana
                            <td dir='ltr' class='s8'>squash_pepo
                            <td class='s11'>44
                            <td class='s11'>13
                            <td class='s11'>31
                            <td class='s12'>7.0
                            <td class='s12'>10.0
                            <td class='s12'>10.0
                            <td class='s12'>9.0
                            <td dir='ltr' class='s8'>NFCR
                            <td class='s11'>1</tr>
                        <tr dir='ltr'>

                            <td dir='ltr' class='s3'>Cucurbita_pepo_subsp._ovifera_var._texana
                            <td dir='ltr' class='s4'>squash_pepo
                            <td class='s5'>57
                            <td class='s5'>5
                            <td class='s5'>52
                            <td class='s6'>9.1
                            <td class='s6'>0.7
                            <td class='s6'>4.1
                            <td class='s6'>4.6
                            <td dir='ltr' class='s4'>MPS
                            <td class='s5'>1</tr>
                    </table>
                <? } else if ($crop_ID == $SOYBEAN) { ?>
                    <table id='tb_soybean'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Glycine_argyrea
                            <td class='s4'>356
                            <td class='s4'>323
                            <td class='s4'>33
                            <td class='s5'>0.9
                            <td class='s5'>2.7
                            <td class='s5'>2.5
                            <td class='s5'>2.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Glycine_canescens
                            <td class='s4'>1556
                            <td class='s4'>1382
                            <td class='s4'>174
                            <td class='s5'>1.1
                            <td class='s5'>0.7
                            <td class='s5'>5.5
                            <td class='s5'>2.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Glycine_cyrtoloba
                            <td class='s4'>1424
                            <td class='s4'>1333
                            <td class='s4'>91
                            <td class='s5'>0.6
                            <td class='s5'>1.1
                            <td class='s5'>5.0
                            <td class='s5'>2.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Glycine_max_subsp._soja
                            <td class='s4'>5973
                            <td class='s4'>1609
                            <td class='s4'>4364
                            <td class='s5'>7.3
                            <td class='s5'>1.5
                            <td class='s5'>7.6
                            <td class='s5'>5.5
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Glycine_tomentella
                            <td class='s4'>1851
                            <td class='s4'>1351
                            <td class='s4'>500
                            <td class='s5'>2.7
                            <td class='s5'>1.0
                            <td class='s5'>3.8
                            <td class='s5'>2.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $SPINACH) { ?>
                    <table id='tb_spinach'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Spinacia_tetranda
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s4'>NA
                            <td dir='ltr' class='s5'>NA
                            <td dir='ltr' class='s5'>NA
                            <td dir='ltr' class='s5'>NA
                            <td dir='ltr' class='s5'>NA
                            <td dir='ltr' class='s4'>HPS
                            <td dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Spinacia_turkestanica
                            <td class='s6'>70
                            <td class='s6'>46
                            <td class='s6'>24
                            <td class='s7'>3.4
                            <td class='s7'>0.1
                            <td class='s7'>1.4
                            <td class='s7'>1.6
                            <td dir='ltr' class='s4'>HPS
                            <td class='s6'>1</tr>
                    </table>
                <? } else if ($crop_ID == $STRAWBERRY) { ?>
                    <table id='tb_strawberry'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Comarum_palustre
                            <td class='s4'>1606
                            <td class='s4'>1599
                            <td class='s4'>7
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td class='s5'>0.3
                            <td class='s5'>0.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_cascadensis
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s6'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s6'>HPS
                            <td dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_chiloensis
                            <td class='s4'>1754
                            <td class='s4'>1698
                            <td class='s4'>56
                            <td class='s5'>0.3
                            <td class='s5'>0.3
                            <td class='s5'>1.9
                            <td class='s5'>0.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_chiloensis_subsp._chiloensis_f._patagonica
                            <td class='s4'>99
                            <td class='s4'>98
                            <td class='s4'>1
                            <td class='s5'>0.1
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_chiloensis_subsp._lucida
                            <td class='s4'>19
                            <td class='s4'>16
                            <td class='s4'>3
                            <td class='s5'>1.6
                            <td class='s5'>0.3
                            <td class='s5'>2.2
                            <td class='s5'>1.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_chiloensis_subsp._pacifica
                            <td class='s4'>65
                            <td class='s4'>52
                            <td class='s4'>13
                            <td class='s5'>2.0
                            <td class='s5'>0.9
                            <td class='s5'>3.2
                            <td class='s5'>2.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_chiloensis_subsp._sandwicensis
                            <td class='s4'>5
                            <td class='s4'>4
                            <td class='s4'>1
                            <td class='s5'>2.0
                            <td class='s5'>2.2
                            <td class='s5'>10.0
                            <td class='s5'>4.7
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_iturupensis
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s4'>1
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_nilgerrensis
                            <td class='s4'>133
                            <td class='s4'>116
                            <td class='s4'>17
                            <td class='s5'>1.3
                            <td class='s5'>0.2
                            <td class='s5'>1.4
                            <td class='s5'>1.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_pentaphylla
                            <td class='s4'>14
                            <td class='s4'>8
                            <td class='s4'>6
                            <td class='s5'>4.3
                            <td class='s5'>0.1
                            <td class='s5'>1.0
                            <td class='s5'>1.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_virginiana
                            <td class='s4'>1285
                            <td class='s4'>522
                            <td class='s4'>763
                            <td class='s5'>5.9
                            <td class='s5'>1.3
                            <td class='s5'>5.7
                            <td class='s5'>4.3
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_virginiana_subsp._glauca
                            <td class='s4'>188
                            <td class='s4'>134
                            <td class='s4'>54
                            <td class='s5'>2.9
                            <td class='s5'>0.8
                            <td class='s5'>3.8
                            <td class='s5'>2.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_virginiana_subsp._grayana
                            <td class='s4'>42
                            <td class='s4'>2
                            <td class='s4'>40
                            <td class='s5'>9.5
                            <td class='s5'>2.6
                            <td class='s5'>2.5
                            <td class='s5'>4.9
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_virginiana_subsp._platypetala
                            <td class='s4'>621
                            <td class='s4'>556
                            <td class='s4'>65
                            <td class='s5'>1.0
                            <td class='s5'>1.5
                            <td class='s5'>4.5
                            <td class='s5'>2.4
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_virginiana_subsp._virginiana
                            <td class='s4'>146
                            <td class='s4'>93
                            <td class='s4'>53
                            <td class='s5'>3.6
                            <td class='s5'>0.4
                            <td class='s5'>3.4
                            <td class='s5'>2.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_xananassa
                            <td class='s4'>6285
                            <td class='s4'>5008
                            <td class='s4'>1277
                            <td class='s5'>2.0
                            <td class='s5'>0.6
                            <td class='s5'>0.6
                            <td class='s5'>1.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Fragaria_xananassa_subsp._cuneifolia
                            <td class='s4'>41
                            <td class='s4'>25
                            <td class='s4'>16
                            <td class='s5'>3.9
                            <td class='s5'>0.2
                            <td class='s5'>1.2
                            <td class='s5'>1.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $SUGARCANE) { ?>
                    <table id='tb_sugar_cane'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>Notes
                            <td class='s3'>
                            <td class='s3'>
                            <td class='s3'>
                            <td class='s3'>
                            <td class='s3'>
                            <td class='s3'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_arundinaceum
                            <td class='s5'>62
                            <td class='s5'>62
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_bengalense
                            <td class='s5'>42
                            <td class='s5'>38
                            <td class='s5'>4
                            <td class='s6'>1.0
                            <td class='s6'>0.3
                            <td class='s6'>5.6
                            <td class='s6'>2.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_kanashiroi
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_longisetosum
                            <td class='s5'>15
                            <td class='s5'>15
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_longisetosum_var._longisetosum
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s7'>HPS
                            <td dir='ltr' class='s7'>no occurrence data; not assessed
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_narenga
                            <td class='s5'>8
                            <td class='s5'>8
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_robustum
                            <td class='s5'>24
                            <td class='s5'>11
                            <td class='s5'>13
                            <td class='s6'>5.4
                            <td class='s6'>2.4
                            <td class='s6'>6.9
                            <td class='s6'>4.9
                            <td dir='ltr' class='s7'>MPS
                            <td class='s5'>0
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_rufipilum
                            <td class='s5'>11
                            <td class='s5'>11
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_spontaneum
                            <td class='s5'>628
                            <td class='s5'>494
                            <td class='s5'>134
                            <td class='s6'>2.1
                            <td class='s6'>0.3
                            <td class='s6'>1.5
                            <td class='s6'>1.3
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_spontaneum_subsp._aegyptiacum
                            <td class='s5'>36
                            <td class='s5'>34
                            <td class='s5'>2
                            <td class='s6'>0.6
                            <td class='s6'>0.0
                            <td class='s6'>0.0
                            <td class='s6'>0.2
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>1
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s4'>Saccharum_spontaneum_subsp._spontaneum
                            <td class='s5'>1
                            <td class='s5'>1
                            <td class='s5'>0
                            <td class='s6'>0.0
                            <td dir='ltr' class='s9'>NA
                            <td dir='ltr' class='s9'>NA
                            <td class='s6'>0.0
                            <td dir='ltr' class='s7'>HPS
                            <td class='s5'>0
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                            <td class='s8'>
                        </tr>
                    </table>
                <? } else if ($crop_ID == $TOMATO) { ?>
                    <table id='tb_tomato'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s2'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_arcanum
                            <td class='s4'>195
                            <td class='s4'>150
                            <td class='s4'>45
                            <td class='s5'>2.3
                            <td class='s5'>2.0
                            <td class='s5'>7.8
                            <td class='s5'>4.0
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_cheesmaniae
                            <td class='s4'>270
                            <td class='s4'>157
                            <td class='s4'>113
                            <td class='s5'>4.2
                            <td class='s5'>6.5
                            <td class='s5'>8.0
                            <td class='s5'>6.2
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_chilense
                            <td class='s4'>694
                            <td class='s4'>315
                            <td class='s4'>379
                            <td class='s5'>5.5
                            <td class='s5'>6.8
                            <td class='s5'>10.0
                            <td class='s5'>7.4
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_chmielewskii
                            <td class='s4'>190
                            <td class='s4'>24
                            <td class='s4'>166
                            <td class='s5'>8.7
                            <td class='s5'>2.3
                            <td class='s5'>7.2
                            <td class='s5'>6.1
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_corneliomulleri
                            <td class='s4'>315
                            <td class='s4'>234
                            <td class='s4'>81
                            <td class='s5'>2.6
                            <td class='s5'>1.8
                            <td class='s5'>5.0
                            <td class='s5'>3.1
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_galapagense
                            <td class='s4'>208
                            <td class='s4'>143
                            <td class='s4'>65
                            <td class='s5'>3.1
                            <td class='s5'>8.4
                            <td class='s5'>5.0
                            <td class='s5'>5.5
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_habrochaites
                            <td class='s4'>751
                            <td class='s4'>333
                            <td class='s4'>418
                            <td class='s5'>5.6
                            <td class='s5'>5.0
                            <td class='s5'>9.4
                            <td class='s5'>6.7
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_huaylasense
                            <td class='s4'>35
                            <td class='s4'>21
                            <td class='s4'>14
                            <td class='s5'>4.0
                            <td class='s5'>0.4
                            <td class='s5'>2.1
                            <td class='s5'>2.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_neorickii
                            <td class='s4'>109
                            <td class='s4'>36
                            <td class='s4'>73
                            <td class='s5'>6.7
                            <td class='s5'>2.2
                            <td class='s5'>10.0
                            <td class='s5'>6.3
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_pennellii
                            <td class='s4'>28
                            <td class='s4'>13
                            <td class='s4'>15
                            <td class='s5'>5.4
                            <td class='s5'>0.3
                            <td class='s5'>4.0
                            <td class='s5'>3.2
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_peruvianum
                            <td class='s4'>1358
                            <td class='s4'>420
                            <td class='s4'>938
                            <td class='s5'>6.9
                            <td class='s5'>6.2
                            <td class='s5'>8.1
                            <td class='s5'>7.1
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Solanum_pimpinellifolium
                            <td class='s4'>2795
                            <td class='s4'>842
                            <td class='s4'>1953
                            <td class='s5'>7.0
                            <td class='s5'>8.2
                            <td class='s5'>10.0
                            <td class='s5'>8.4
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $VIGNA) { ?>
                    <table id='tb_vigna'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_aconitifolia
                            <td class='s4'>253
                            <td class='s4'>66
                            <td class='s4'>187
                            <td class='s5'>7.4
                            <td class='s5'>1.1
                            <td class='s5'>5.3
                            <td class='s5'>4.6
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_angularis
                            <td class='s4'>5272
                            <td class='s4'>2132
                            <td class='s4'>3140
                            <td class='s5'>6.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>2.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_angularis_var._nipponensis
                            <td class='s4'>11
                            <td class='s4'>8
                            <td class='s4'>3
                            <td class='s5'>2.7
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>2.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_aridicola
                            <td class='s4'>3
                            <td class='s4'>2
                            <td class='s4'>1
                            <td class='s5'>3.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.3
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_dalzelliana
                            <td class='s4'>87
                            <td class='s4'>78
                            <td class='s4'>9
                            <td class='s5'>1.0
                            <td class='s5'>0.1
                            <td class='s5'>1.2
                            <td class='s5'>0.8
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_exilis
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s4'>1
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_glabrescens
                            <td class='s4'>15
                            <td class='s4'>4
                            <td class='s4'>11
                            <td class='s5'>7.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>7.3
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_grandiflora
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s4'>1
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_hirtella
                            <td class='s4'>6
                            <td class='s4'>3
                            <td class='s4'>3
                            <td class='s5'>5.0
                            <td class='s5'>10.0
                            <td class='s5'>10.0
                            <td class='s5'>8.3
                            <td dir='ltr' class='s6'>NFCR
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_khandalensis
                            <td class='s4'>55
                            <td class='s4'>55
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_minima
                            <td class='s4'>327
                            <td class='s4'>313
                            <td class='s4'>14
                            <td class='s5'>0.4
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.1
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_mungo
                            <td class='s4'>1429
                            <td class='s4'>554
                            <td class='s4'>875
                            <td class='s5'>6.1
                            <td class='s5'>0.3
                            <td class='s5'>7.4
                            <td class='s5'>4.6
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_mungo_var._silvestris
                            <td class='s4'>507
                            <td class='s4'>250
                            <td class='s4'>257
                            <td class='s5'>5.1
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>5.1
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_nakashimae
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s4'>3
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_nepalensis
                            <td class='s4'>3
                            <td class='s4'>0
                            <td class='s4'>3
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_radiata
                            <td class='s4'>2950
                            <td class='s4'>820
                            <td class='s4'>2130
                            <td class='s5'>7.2
                            <td class='s5'>0.2
                            <td class='s5'>1.9
                            <td class='s5'>3.1
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_radiata_var._sublobata
                            <td class='s4'>440
                            <td class='s4'>232
                            <td class='s4'>208
                            <td class='s5'>4.7
                            <td class='s5'>0.0
                            <td class='s5'>1.7
                            <td class='s5'>2.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_reflexopilosa
                            <td class='s4'>113
                            <td class='s4'>111
                            <td class='s4'>2
                            <td class='s5'>0.2
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_riukiuensis
                            <td class='s4'>1
                            <td class='s4'>0
                            <td class='s4'>1
                            <td class='s5'>10.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_stipulacea
                            <td class='s4'>7
                            <td class='s4'>3
                            <td class='s4'>4
                            <td class='s5'>5.7
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>1.9
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_subramaniana
                            <td class='s4'>10
                            <td class='s4'>7
                            <td class='s4'>3
                            <td class='s5'>3.0
                            <td class='s5'>0.0
                            <td class='s5'>0.7
                            <td class='s5'>1.2
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_tenuicaulis
                            <td class='s4'>3
                            <td class='s4'>2
                            <td class='s4'>1
                            <td class='s5'>3.3
                            <td class='s5'>10.0
                            <td class='s5'>6.2
                            <td class='s5'>6.5
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_trilobata
                            <td class='s4'>326
                            <td class='s4'>191
                            <td class='s4'>135
                            <td class='s5'>4.1
                            <td class='s5'>0.2
                            <td class='s5'>0.9
                            <td class='s5'>1.7
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_trinervia
                            <td class='s4'>6
                            <td class='s4'>4
                            <td class='s4'>2
                            <td class='s5'>3.3
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>3.3
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Vigna_umbellata
                            <td class='s4'>1237
                            <td class='s4'>673
                            <td class='s4'>564
                            <td class='s5'>4.6
                            <td class='s5'>0.3
                            <td class='s5'>2.5
                            <td class='s5'>2.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                    </table>
                <? } else if ($crop_ID == $WATERMELON) { ?>
                    <table id='tb_watermelon'>
                        <tr class='table_header'>
                            <td dir='ltr' class='s0'>TAXON
                            <td dir='ltr' class='s1'>TOTAL
                            <td dir='ltr' class='s1'>HS
                            <td dir='ltr' class='s1'>GS
                            <td dir='ltr' class='s2'>SRS
                            <td dir='ltr' class='s2'>GRS
                            <td dir='ltr' class='s2'>ERS
                            <td dir='ltr' class='s2'>FPS
                            <td dir='ltr' class='s1'>FPCAT
                            <td dir='ltr' class='s1'>MAP_AVAILABLE</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Citrullus_colocynthis
                            <td class='s4'>1269
                            <td class='s4'>1157
                            <td class='s4'>112
                            <td class='s5'>0.9
                            <td class='s5'>0.5
                            <td class='s5'>2.5
                            <td class='s5'>1.3
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Citrullus_ecirrhosus
                            <td class='s4'>10
                            <td class='s4'>9
                            <td class='s4'>1
                            <td class='s5'>1.0
                            <td class='s5'>0.0
                            <td class='s5'>0.0
                            <td class='s5'>0.3
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Citrullus_lanatus_var._citroides
                            <td class='s4'>141
                            <td class='s4'>42
                            <td class='s4'>99
                            <td class='s5'>7.0
                            <td class='s5'>0.9
                            <td class='s5'>6.1
                            <td class='s5'>4.7
                            <td dir='ltr' class='s6'>MPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Citrullus_rehmii
                            <td class='s4'>13
                            <td class='s4'>5
                            <td class='s4'>8
                            <td class='s5'>6.2
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>6.2
                            <td dir='ltr' class='s6'>LPS
                            <td class='s4'>0</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Cucurbita_maxima
                            <td class='s4'>2959
                            <td class='s4'>1668
                            <td class='s4'>1291
                            <td class='s5'>4.4
                            <td class='s5'>0.2
                            <td class='s5'>2.9
                            <td class='s5'>2.5
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>1</tr>
                        <tr dir='ltr'>
                            <td dir='ltr' class='s3'>Lagenaria_siceraria
                            <td class='s4'>7
                            <td class='s4'>7
                            <td class='s4'>0
                            <td class='s5'>0.0
                            <td dir='ltr' class='s7'>NA
                            <td dir='ltr' class='s7'>NA
                            <td class='s5'>0.0
                            <td dir='ltr' class='s6'>HPS
                            <td class='s4'>0</tr>
                    </table>
                <? } ?>
            </div>
            <div class="clear"></div>  
            <div id="download-box" class="right">
                <p id="content-download-box">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/download.php?term=<?php echo $crop_ID; ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/save.png"/>
                        Download Excel
                    </a>
                </p>
            </div> 
            <div id="download-box" class="right">
                <p id="content-download-box">
                    <a href="<?php bloginfo('stylesheet_directory'); ?>/print.php?term=<?php echo $crop_ID; ?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pdf.png"/>
                        Download PDF
                    </a>
                </p>
            </div> 
            <div class="clear"></div>
            <div class="Key">
                <div class="column">
                    <h2>Key:</h2><br>
                    <b>HS</b> (Number of Herbarium Specimens)<br>
                    <b>GS</b> (Number of Germplasm Specimens)<br>
                    <b>TOTAL</b> (HS + GS)<br>
                </div>
                <div class="column">
                    <b>SRS</b> (Sampling Representiveness Score)<br>
                    <b>GRS</b> (Geographical Representiveness Score)<br>
                    <b>ERS</b> (Environmental Representiveness Score)<br>
                    <b>FPS</b> (Final Priority Score)<br>
                </div>
                <div class="column">
                    <b>FPCAT</b> (Final Priority Category)<br>
                    <pre style='display:inline'>  </pre><b>HPS</b>     High Priority Species<br>
                    <pre style='display:inline'>  </pre><b>MPS</b>    Medium Priority Species<br>
                    <pre style='display:inline'>  </pre><b>LPS</b>    Low Priority Species<br>
                    <pre style='display:inline'>  </pre><b>NFCR</b>    No Further Urgent Collection Required<br>
                </div>
                <div class="column">
                    For SRS, GRS, ERS, and FPS: <br>
                    0 = High Priority for Collection,<br> 
                    10 = No Need for Further Collection 
                </div>
            </div>

            <div class="clear"></div>

            <img class="img-footer" src="<?php bloginfo('stylesheet_directory'); ?>/images/ciat.jpg"></img>
            <img class="img-footer" src="<?php bloginfo('stylesheet_directory'); ?>/images/trustlogo.png"></img>
            <img class="img-footer" src="<?php bloginfo('stylesheet_directory'); ?>/images/Library - 004.png"></img>

        <?php } ?>

    </div>
</div>
<?php get_footer(); ?>