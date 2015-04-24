<? ob_start(); ?>
<?php

require_once("functions/dompdf/dompdf_config.inc.php");

if (isset($_GET['term'])) {
    $html = "<html><head><style>
        #table_header {
        background-color: #0B7802;
        color: #FFFFFF;
        font-weight: bold;
        }
        table {
            width: 95%;
            border: 1px solid #0B7802;
            text-align: center;
            background-color: #FFFFFF;
        }
    </style></head><body>";
    switch ($_GET['term']) {
        case "Avena": $html .= "<table id='tb_Avena' >
                            <tbody>
                                <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>
                                        HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                                    <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr>
                                <tr dir='ltr'><td  dir='ltr' class='s2'>Avena_abyssinica<td  class='s3'>909<td  class='s3'>511<td  class='s3'>1420<td  class='s3'>3.6<td  class='s3'>0.5<td  class='s3'>10<td  class='s3'>4.7<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_atherantha<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                                    <td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  class='s3'>0<td  dir='ltr' class='s4'>HPS<td  dir='ltr' class='s4'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_byzantina<td  class='s3'>2333<td  class='s3'>528<td  class='s3'>2861<td  class='s3'>1.8<td  class='s3'>0<td  dir='ltr' class='s4'>NA
                                    <td  class='s3'>0.9<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_fatua<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>LPS<td  dir='ltr' class='s4'>excess data; analysis silenced</tr><tr dir='ltr'>
                                    <td  dir='ltr' class='s2'>Avena_hybrida<td  class='s3'>125<td  class='s3'>25<td  class='s3'>150<td  class='s3'>1.7<td  class='s3'>0.1<td  class='s3'>10<td  class='s3'>3.9<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_insularis<td  class='s3'>20<td  class='s3'>5<td  class='s3'>25<td  class='s3'>2<td  class='s3'>0<td  dir='ltr' class='s4'>NA
                                    <td  class='s3'>1<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_macrostachya<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>HPS<td  dir='ltr' class='s4'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_maroccana<td  class='s3'>138<td  class='s3'>136<td  class='s3'>274<td  class='s3'>5<td  class='s3'>10<td  class='s3'>10<td  class='s3'>8.3<td  dir='ltr' class='s4'>NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_murphyi<td  class='s3'>82<td  class='s3'>88<td  class='s3'>170<td  class='s3'>5.2<td  class='s3'>6.5<td  class='s3'>10<td  class='s3'>7.2<td  dir='ltr' class='s4'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_occidentalis<td  class='s3'>7<td  class='s3'>57<td  class='s3'>64<td  class='s3'>8.9<td  class='s3'>0.2<td  class='s3'>10<td  class='s3'>6.4<td  dir='ltr' class='s4'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_pilosa<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>HPS<td  dir='ltr' class='s4'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_prostrata<td  class='s3'>47<td  class='s3'>7<td  class='s3'>54<td  class='s3'>1.3<td  class='s3'>0.1<td  class='s3'>10<td  class='s3'>3.8<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_sterilis<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                                    <td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>LPS<td  dir='ltr' class='s4'>excess data; analysis silenced</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_strigosa<td  class='s3'>1551<td  class='s3'>249<td  class='s3'>1800<td  class='s3'>1.4<td  class='s3'>0<td  class='s3'>10<td  class='s3'>3.8<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Avena_trichophylla<td  class='s3'>8<td  class='s3'>2<td  class='s3'>10<td  class='s3'>2<td  class='s3'>0<td  dir='ltr' class='s4'>NA
                                    <td  class='s3'>1<td  dir='ltr' class='s4'>HPS<td ></tr>
                            </tbody>
                        </table>";
            break;
        case "Cajanus": $html .= "<table id='tb_Cajanus' class='table_genepool'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>
                                    ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_acutifolius<td  class='s3'>492<td  class='s3'>173
                                <td  class='s3'>665<td  class='s3'>2.6<td  class='s3'>0.1<td  class='s3'>2.8<td  class='s3'>1.8
                                <td  dir='ltr' class='s4'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_albicans<td  class='s3'>141<td  class='s3'>21
                                <td  class='s3'>162<td  class='s3'>1.3<td  class='s3'>0.3<td  class='s3'>10<td  class='s3'>3.4
                                <td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_cajanifolius
                                <td  class='s3'>42<td  class='s3'>2<td  class='s3'>44<td  class='s3'>0.5<td  dir='ltr' class='s4'>NA
                                <td  class='s3'>0<td  class='s3'>0.2<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_cinereus<td  class='s3'>268<td  class='s3'>6<td  class='s3'>274
                                <td  class='s3'>0.2<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0.1<td  dir='ltr' class='s4'>
                                    HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_confertiflorus<td  class='s3'>122
                                <td  class='s3'>1<td  class='s3'>123<td  class='s3'>0.1<td  class='s3'>0<td  class='s3'>0
                                <td  class='s3'>0<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_crassus<td  class='s3'>17<td  class='s3'>19<td  class='s3'>36
                                <td  class='s3'>5.3<td  class='s3'>0<td  class='s3'>1.3<td  class='s3'>2.2<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_lanceolatus<td  class='s3'>133<td  class='s3'>5<td  class='s3'>138<td  class='s3'>0.4<td  class='s3'>0.3<td  class='s3'>3.4<td  class='s3'>1.4<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_latisepalus<td  class='s3'>228<td  class='s3'>4<td  class='s3'>232<td  class='s3'>0.2<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0.1<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_lineatus<td  class='s3'>163<td  class='s3'>6<td  class='s3'>169<td  class='s3'>0.4<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  class='s3'>0.4<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_mollis<td  class='s3'>4<td  class='s3'>8<td  class='s3'>12<td  class='s3'>6.7<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  class='s3'>6.7<td  dir='ltr' class='s4'>LPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_platycarpus<td  class='s3'>7<td  class='s3'>21<td  class='s3'>28<td  class='s3'>7.5<td  class='s3'>0.1<td  class='s3'>3.5<td  class='s3'>3.7<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_reticulatus<td  class='s3'>462<td  class='s3'>21<td  class='s3'>483<td  class='s3'>0.4<td  class='s3'>0<td  class='s3'>8<td  class='s3'>2.8<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_scarabaeoides<td  class='s3'>341<td  class='s3'>218<td  class='s3'>559<td  class='s3'>3.9<td  class='s3'>0.6<td  class='s3'>8.5<td  class='s3'>4.3<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_sericeus<td  class='s3'>83<td  class='s3'>4<td  class='s3'>87<td  class='s3'>0.5<td  class='s3'>0.1<td  class='s3'>4.7<td  class='s3'>1.7<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cajanus_trinervius<td  class='s3'>130<td  class='s3'>0<td  class='s3'>130<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cajanus_volubilis<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>HPS<td  dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        </table>";
            break;
        case "Cicer": $html .= "<table id='tb_Cicer' class='table_genepool'>
                            <tr id='table_header'><td  dir='ltr' class='s0'>
                                    TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                                <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS
                                <td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cicer_bijugum<td  class='s3'>11<td  class='s3'>44<td  class='s3'>55
                                <td  class='s4'>8.0<td  class='s4'>0.7<td  class='s4'>7.3
                                <td  class='s4'>5.3<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Cicer_echinospermum<td  class='s3'>43<td  class='s3'>29<td  class='s3'>72<td  class='s4'>4.0
                                <td  class='s4'>1.3<td  class='s4'>8.6<td  class='s4'>4.7<td  dir='ltr' class='s5'>MPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Cicer_judaicum<td  class='s3'>30<td  class='s3'>93
                                <td  class='s3'>123<td  class='s4'>7.6<td  class='s4'>10.0<td  class='s4'>10.0<td  class='s4'>9.2
                                <td  dir='ltr' class='s5'>NFCR</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Cicer_pinnatifidum
                                <td  class='s3'>45<td  class='s3'>88<td  class='s3'>133<td  class='s4'>6.6<td  class='s4'>2.7
                                <td  class='s4'>10.0<td  class='s4'>6.4<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Cicer_reticulatum<td  class='s3'>60<td  class='s3'>66<td  class='s3'>126
                                <td  class='s4'>5.2<td  class='s4'>7.3<td  class='s4'>9.3<td  class='s4'>7.3
                                <td  dir='ltr' class='s5'>LPS</tr>
                        </table>";
            break;
        case "Daucus" : $html .= "<table id='tb_Daucus' class='table_genepool'>
                            <tr dir='ltr' id='table_header'>
                                <td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                                <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                                <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_capillifolius<td  class='s3'>12<td  class='s3'>2
                                <td  class='s3'>14<td  class='s4'>1.4<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.5
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_azoricus
                                <td  class='s3'>45<td  class='s3'>2<td  class='s3'>47<td  class='s4'>0.4<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.1<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_cantabricus<td  class='s3'>6<td  class='s3'>0
                                <td  class='s3'>6<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_carota<td  class='s3'>494<td  class='s3'>187<td  class='s3'>681
                                <td  class='s4'>2.7<td  class='s4'>0.7<td  class='s4'>8.6<td  class='s4'>4.0<td  dir='ltr' class='s5'>
                                    MPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_commutatus<td  class='s3'>17
                                <td  class='s3'>10<td  class='s3'>27<td  class='s4'>3.7<td  class='s4'>1.3<td  class='s4'>7.7
                                <td  class='s4'>4.2<td  dir='ltr' class='s5'>MPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_drepanensis<td  class='s3'>23<td  class='s3'>0
                                <td  class='s3'>23<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_fontanesii<td  class='s3'>55<td  class='s3'>2
                                <td  class='s3'>57<td  class='s4'>0.4<td  class='s4'>0.1<td  class='s4'>9.3<td  class='s4'>3.2
                                <td  dir='ltr' class='s5'>MPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_gadecaei
                                <td  class='s3'>0<td  class='s3'>3<td  class='s3'>3<td  class='s4'>10.0<td  dir='ltr' class='s6'>NA
                                <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_gummifer<td  class='s3'>211<td  class='s3'>15
                                <td  class='s3'>226<td  class='s4'>0.7<td  class='s4'>0.1<td  class='s4'>5.2<td  class='s4'>2.0
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_halophilus
                                <td  class='s3'>83<td  class='s3'>5<td  class='s3'>88<td  class='s4'>0.6<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.2<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_hispanicus<td  class='s3'>29<td  class='s3'>4<td  class='s3'>33
                                <td  class='s4'>1.2<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  class='s4'>1.2
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_major
                                <td  class='s3'>12<td  class='s3'>11<td  class='s3'>23<td  class='s4'>4.8<td  class='s4'>0.7
                                <td  class='s4'>6.3<td  class='s4'>3.9<td  dir='ltr' class='s5'>MPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_majoricus<td  class='s3'>7<td  class='s3'>0
                                <td  class='s3'>7<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>
                                    NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Daucus_carota_maritimus<td  class='s3'>213<td  class='s3'>8
                                <td  class='s3'>221<td  class='s4'>0.4<td  class='s4'>0.1<td  class='s4'>4.7<td  class='s4'>1.7
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_maximus<td  class='s3'>160<td  class='s3'>25
                                <td  class='s3'>185<td  class='s4'>1.4<td  class='s4'>0.1<td  class='s4'>7.1<td  class='s4'>2.8
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_parviflorus
                                <td  class='s3'>13<td  class='s3'>0<td  class='s3'>13<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                                <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Daucus_carota_rupestris<td  class='s3'>1<td  class='s3'>0
                                <td  class='s3'>1<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Daucus_syrticus<td  class='s3'>43<td  class='s3'>15<td  class='s3'>58<td  class='s4'>2.6
                                <td  class='s4'>0.3<td  class='s4'>5.0<td  class='s4'>2.6<td  dir='ltr' class='s5'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Tornabenea_annua<td  class='s3'>2<td  class='s3'>0
                                <td  class='s3'>2<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Tornabenea_insularis<td  class='s3'>4<td  class='s3'>0<td  class='s3'>4<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  class='s4'>0.0
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Tornabenea_tenuissima
                                <td  class='s3'>3<td  class='s3'>0<td  class='s3'>3<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                                <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr>
                        </table>";
            break;
        case "Solanum_Eggplant" : $html .= "<table id='tb_Solanum_Eggplant'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                                <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS
                                <td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_aculeatissimum<td  class='s3'>0<td  class='s3'>0
                                <td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS
                                <td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_adoense<td  class='s3'>52<td  class='s3'>0<td  class='s3'>52
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_aethiopicum
                                <td  class='s3'>216<td  class='s3'>193<td  class='s3'>409<td  class='s4'>4.7<td  class='s4'>0.1
                                <td  class='s4'>4.0<td  class='s4'>2.9<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_agnewiorum<td  class='s3'>12<td  class='s3'>0
                                <td  class='s3'>12<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_aldabrense<td  class='s3'>33<td  class='s3'>2<td  class='s3'>35
                                <td  class='s4'>0.6<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  class='s4'>0.6
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_anguivi
                                <td  class='s3'>997<td  class='s3'>108<td  class='s3'>1105<td  class='s4'>1.0<td  class='s4'>0.0
                                <td  class='s4'>2.7<td  class='s4'>1.2<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_anomalum<td  class='s3'>70<td  class='s3'>0
                                <td  class='s3'>70<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Solanum_asperolanatum<td  class='s3'>555<td  class='s3'>0<td  class='s3'>555<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_aureitomentosum<td  class='s3'>25<td  class='s3'>0
                                <td  class='s3'>25<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_burchellii<td  class='s3'>40<td  class='s3'>4<td  class='s3'>44
                                <td  class='s4'>0.9<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.3
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Solanum_campylacanthum<td  class='s3'>1043<td  class='s3'>61<td  class='s3'>1104
                                <td  class='s4'>0.6<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.2
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_capense
                                <td  class='s3'>67<td  class='s3'>18<td  class='s3'>85<td  class='s4'>2.1<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.7<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_catombelense<td  class='s3'>92<td  class='s3'>8<td  class='s3'>
                                    100<td  class='s4'>0.8<td  class='s4'>0.1<td  class='s4'>4.1<td  class='s4'>1.7
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_cerasiferum
                                <td  class='s3'>56<td  class='s3'>5<td  class='s3'>61<td  class='s4'>0.8<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.3<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_cumingii<td  class='s3'>13<td  class='s3'>0<td  class='s3'>13
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_cyaneopurpureum<td  class='s3'>34
                                <td  class='s3'>1<td  class='s3'>35<td  class='s4'>0.3<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.3<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_dasyphyllum<td  class='s3'>226<td  class='s3'>29
                                <td  class='s3'>255<td  class='s4'>1.1<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.4
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_deflexicarpum
                                <td  class='s3'>3<td  class='s3'>0<td  class='s3'>3<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_glabratum<td  class='s3'>92<td  class='s3'>0
                                <td  class='s3'>92<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_grandiflorum<td  class='s3'>138<td  class='s3'>0<td  class='s3'>
                                    138<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_hastifolium
                                <td  class='s3'>137<td  class='s3'>0<td  class='s3'>137<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_hovei<td  class='s3'>9<td  class='s3'>0
                                <td  class='s3'>9<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_humile<td  class='s3'>57<td  class='s3'>15<td  class='s3'>72
                                <td  class='s4'>2.1<td  class='s4'>0.1<td  class='s4'>3.3<td  class='s4'>1.8
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_inaequiradians
                                <td  class='s3'>11<td  class='s3'>0<td  class='s3'>11<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_incanum<td  class='s3'>0<td  class='s3'>0
                                <td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_insanum<td  class='s3'>71<td  class='s3'>9<td  class='s3'>80
                                <td  class='s4'>1.1<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  class='s4'>1.1
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_lamprocarpum
                                <td  class='s3'>10<td  class='s3'>0<td  class='s3'>10<td  class='s4'>0.0<td  dir='ltr' class='s5'>
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_lichtensteinii<td  class='s3'>103<td  class='s3'>15
                                <td  class='s3'>118<td  class='s4'>1.3<td  class='s4'>0.0<td  class='s4'>4.3<td  class='s4'>1.9
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_lidii
                                <td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS
                                <td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_linnaeanum<td  class='s3'>3409<td  class='s3'>56<td  class='s3'>3465
                                <td  class='s4'>0.2<td  class='s4'>1.0<td  class='s4'>6.5<td  class='s4'>2.5<td  dir='ltr' class='s6'>
                                    HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_litoraneum<td  class='s3'>9
                                <td  class='s3'>0<td  class='s3'>9<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_macracanthum<td  class='s3'>24<td  class='s3'>0
                                <td  class='s3'>24<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_macrocarpon
                                <td  class='s3'>67<td  class='s3'>36<td  class='s3'>103<td  class='s4'>3.5<td  class='s4'>0.0
                                <td  class='s4'>2.5<td  class='s4'>2.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_malindiense<td  class='s3'>18<td  class='s3'>0<td  class='s3'>18
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_marginatum
                                <td  class='s3'>101<td  class='s3'>3<td  class='s3'>104<td  class='s4'>0.3<td  class='s4'>0.0<td  class='s4'>4.7<td  class='s4'>1.7<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_mauense<td  class='s3'>48<td  class='s3'>0
                                <td  class='s3'>48<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_multiflorum<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurance data; not assesed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_nigriviolaceum<td  class='s3'>33<td  class='s3'>4
                                <td  class='s3'>37<td  class='s4'>1.1<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.4
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_platacanthum
                                <td  class='s3'>16<td  class='s3'>1<td  class='s3'>17<td  class='s4'>0.6<td  dir='ltr' class='s5'>
                                    NA<td  dir='ltr' class='s5'>NA<td  class='s4'>0.6<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_polhillii<td  class='s3'>56<td  class='s3'>0
                                <td  class='s3'>56<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Solanum_richardii<td  class='s3'>112<td  class='s3'>2<td  class='s3'>114<td  class='s4'>0.2
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.1<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_rubetorum<td  class='s3'>43<td  class='s3'>7
                                <td  class='s3'>50<td  class='s4'>1.4<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>1.4<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_ruvu<td  class='s3'>1<td  class='s3'>0<td  class='s3'>1
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_setaceum
                                <td  class='s3'>38<td  class='s3'>0<td  class='s3'>38<td  class='s4'>0.0<td  dir='ltr' class='s5'>
                                    NA<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_sisymbriifolium<td  class='s3'>0<td  class='s3'>0
                                <td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurance data; not assesed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_sodomeodes<td  class='s3'>25<td  class='s3'>0<td  class='s3'>25<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_stipitatostellatum<td  class='s3'>52
                                <td  class='s3'>0<td  class='s3'>52<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_supinum<td  class='s3'>27<td  class='s3'>3
                                <td  class='s3'>30<td  class='s4'>1.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>1.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                                    Solanum_taitense<td  class='s3'>39<td  class='s3'>0<td  class='s3'>39<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_tomentosum<td  class='s3'>65<td  class='s3'>25
                                <td  class='s3'>90<td  class='s4'>2.8<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.9
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_torreanum
                                <td  class='s3'>17<td  class='s3'>0<td  class='s3'>17<td  class='s4'>0.0<td  dir='ltr' class='s5'>
                                    NA<td  class='s4'>0.0<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_torvum<td  class='s3'>2594<td  class='s3'>94<td  class='s3'>2688<td  class='s4'>0.3<td  class='s4'>0.1<td  class='s4'>5.7<td  class='s4'>2.1<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_umtuma
                                <td  class='s3'>19<td  class='s3'>0<td  class='s3'>19<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_usambarense<td  class='s3'>42<td  class='s3'>0
                                <td  class='s3'>42<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_usaramense<td  class='s3'>17<td  class='s3'>0<td  class='s3'>17
                                <td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_vespertilio
                                <td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurance data; not assesed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_viarum<td  class='s3'>0<td  class='s3'>0<td  class='s3'>
                                    0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                                <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>
                                    no occurance data; not assesed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_vicinum
                                <td  class='s3'>130<td  class='s3'>1<td  class='s3'>131<td  class='s4'>0.1<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Solanum_violaceum<td  class='s3'>264<td  class='s3'>38<td  class='s3'>302
                                <td  class='s4'>1.3<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.4
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_zanzibarense<td  class='s3'>73<td  class='s3'>1<td  class='s3'>74<td  class='s4'>0.1<td  dir='ltr' class='s5'>NA<td  class='s4'>0.0<td  class='s4'>0.1<td  dir='ltr' class='s6'>HPS<td ></tr>
                        </table>";
            break;
        case "Eleusine" : $html .= "<table id='tb_Eleusine'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>
                                <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                                <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Eleusine_africana<td  class='s3'>132<td  class='s3'>3
                                <td  class='s3'>135<td  class='s4'>0.2<td  class='s4'>0.0<td  class='s4'>3.1<td  class='s4'>1.1
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Eleusine_floccifolia
                                <td  class='s3'>63<td  class='s3'>2<td  class='s3'>65<td  class='s4'>0.3<td  class='s4'>0.2
                                <td  class='s4'>5.0<td  class='s4'>1.8<td  dir='ltr' class='s5'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Eleusine_indica<td  class='s3'>7397<td  class='s3'>45
                                <td  class='s3'>7442<td  class='s4'>0.1<td  class='s4'>0.1<td  class='s4'>2.3<td  class='s4'>0.8
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Eleusine_intermedia
                                <td  class='s3'>4<td  class='s3'>0<td  class='s3'>4<td  class='s4'>0.0<td  class='s4'>0.0
                                <td  class='s4'>0.0<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Eleusine_kigeziensis<td  class='s3'>7<td  class='s3'>6<td  class='s3'>13
                                <td  class='s4'>4.6<td  class='s4'>0.9<td  class='s4'>5.3<td  class='s4'>3.6
                                <td  dir='ltr' class='s5'>MPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Eleusine_tristachya
                                <td  class='s3'>5425<td  class='s3'>23<td  class='s3'>5448<td  class='s4'>0.0<td  class='s4'>0.2
                                <td  class='s4'>4.7<td  class='s4'>1.7<td  dir='ltr' class='s5'>HPS</tr>
                        </table>";
            break;
        case "Helianthus" : $html .= " <table id='tb_Helianthus'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                                <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                                <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT
                                <td  class='s2'></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_annuus<td  class='s4'>2045
                                <td  class='s4'>3656<td  class='s4'>5701<td  class='s5'>6.4<td  class='s5'>3.6<td  class='s5'>10.0
                                <td  class='s5'>6.7<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_anomalus<td  class='s4'>60<td  class='s4'>9<td  class='s4'>69<td  class='s5'>1.3
                                <td  class='s5'>0.5<td  class='s5'>6.5<td  class='s5'>2.8<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_argophyllus<td  class='s4'>71<td  class='s4'>55
                                <td  class='s4'>126<td  class='s5'>4.4<td  class='s5'>0.2<td  class='s5'>3.8<td  class='s5'>2.8
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_arizonensis
                                <td  class='s4'>5<td  class='s4'>2<td  class='s4'>7<td  class='s5'>2.9<td  class='s5'>0.7
                                <td  class='s5'>5.1<td  class='s5'>2.9<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_atrorubens<td  class='s4'>70<td  class='s4'>13<td  class='s4'>83
                                <td  class='s5'>1.6<td  class='s5'>0.9<td  class='s5'>5.3<td  class='s5'>2.6<td  dir='ltr' class='s6'>
                                    HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_bolanderi<td  class='s4'>315
                                <td  class='s4'>9<td  class='s4'>324<td  class='s5'>0.3<td  class='s5'>0.6<td  class='s5'>6.7
                                <td  class='s5'>2.5<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_debilis<td  class='s4'>91<td  class='s4'>8<td  class='s4'>99<td  class='s5'>0.8
                                <td  class='s5'>0.0<td  class='s5'>2.3<td  class='s5'>1.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_debilis_cucumerifolius<td  class='s4'>89
                                <td  class='s4'>17<td  class='s4'>106<td  class='s5'>1.6<td  class='s5'>0.3<td  class='s5'>6.2
                                <td  class='s5'>2.7<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_debilis_debilis<td  class='s4'>22<td  class='s4'>17<td  class='s4'>39<td  class='s5'>4.4
                                <td  class='s5'>0.1<td  class='s5'>2.6<td  class='s5'>2.4<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_debilis_silvestris<td  class='s4'>8<td  class='s4'>28
                                <td  class='s4'>36<td  class='s5'>7.8<td  class='s5'>2.3<td  class='s5'>3.3<td  class='s5'>4.5
                                <td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_debilis_tardiflorus<td  class='s4'>15
                                <td  class='s4'>5<td  class='s4'>20<td  class='s5'>2.5<td  class='s5'>10.0<td  class='s5'>8.0
                                <td  class='s5'>6.8<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_debilis_vestitus<td  class='s4'>15<td  class='s4'>5<td  class='s4'>20<td  class='s5'>2.5
                                <td  class='s5'>0.5<td  class='s5'>2.5<td  class='s5'>1.8<td  dir='ltr' class='s6'>HPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_deserticola<td  class='s4'>42<td  class='s4'>16
                                <td  class='s4'>58<td  class='s5'>2.8<td  class='s5'>4.0<td  class='s5'>10.0<td  class='s5'>5.6
                                <td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_divaricatus
                                <td  class='s4'>340<td  class='s4'>25<td  class='s4'>365<td  class='s5'>0.7<td  class='s5'>0.6
                                <td  class='s5'>5.0<td  class='s5'>2.1<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_exilis<td  class='s4'>50<td  class='s4'>30<td  class='s4'>80
                                <td  class='s5'>3.8<td  class='s5'>1.0<td  class='s5'>5.9<td  class='s5'>3.6<td  dir='ltr' class='s6'>
                                    MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_giganteus<td  class='s4'>218
                                <td  class='s4'>26<td  class='s4'>244<td  class='s5'>1.1<td  class='s5'>0.3<td  class='s5'>6.5
                                <td  class='s5'>2.6<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_grosseserratus<td  class='s4'>175<td  class='s4'>50<td  class='s4'>225
                                <td  class='s5'>2.2<td  class='s5'>0.7<td  class='s5'>7.6<td  class='s5'>3.5<td  dir='ltr' class='s6'>MPS
                                <td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_hirsutus<td  class='s4'>177<td  class='s4'>
                                    11<td  class='s4'>188<td  class='s5'>0.6<td  class='s5'>0.2<td  class='s5'>6.8<td  class='s5'>2.5
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_maximilianii<td  class='s4'>0<td  class='s4'>0<td  class='s4'>0
                                <td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                                <td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_neglectus<td  class='s4'>5<td  class='s4'>58
                                <td  class='s4'>63<td  class='s5'>9.2<td  class='s5'>9.4<td  class='s5'>5.8<td  class='s5'>8.1
                                <td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_niveus
                                <td  class='s4'>73<td  class='s4'>3<td  class='s4'>76<td  class='s5'>0.4<td  class='s5'>0.2
                                <td  class='s5'>6.5<td  class='s5'>2.4<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_niveus_canescens<td  class='s4'>100<td  class='s4'>19
                                <td  class='s4'>119<td  class='s5'>1.6<td  class='s5'>0.7<td  class='s5'>8.3<td  class='s5'>3.5
                                <td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_niveus_niveus
                                <td  class='s4'>9<td  class='s4'>0<td  class='s4'>9<td  class='s5'>0.0<td  class='s5'>0.0
                                <td  class='s5'>0.0<td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_niveus_tephrodes<td  class='s4'>87<td  class='s4'>6
                                <td  class='s4'>93<td  class='s5'>0.6<td  class='s5'>0.9<td  class='s5'>6.7<td  class='s5'>2.7
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_paradoxus
                                <td  class='s4'>58<td  class='s4'>0<td  class='s4'>58<td  class='s5'>0.0<td  class='s5'>0.0
                                <td  class='s5'>0.0<td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_pauciflorus<td  class='s4'>10<td  class='s4'>22<td  class='s4'>32
                                <td  class='s5'>6.9<td  class='s5'>0.2<td  class='s5'>6.7<td  class='s5'>4.6<td  dir='ltr' class='s6'>MPS
                                <td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_petiolaris<td  class='s4'>337<td  class='s4'>45
                                <td  class='s4'>382<td  class='s5'>1.2<td  class='s5'>0.2<td  class='s5'>7.0<td  class='s5'>2.8
                                <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_petiolaris_fallax
                                <td  class='s4'>34<td  class='s4'>30<td  class='s4'>64<td  class='s5'>4.7<td  class='s5'>1.0<td  class='s5'>8.3<td  class='s5'>4.6<td  dir='ltr' class='s6'>MPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_petiolaris_petiolaris<td  class='s4'>101<td  class='s4'>106
                                <td  class='s4'>207<td  class='s5'>5.1<td  class='s5'>1.5<td  class='s5'>10.0<td  class='s5'>5.5
                                <td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_praecox
                                <td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA
                                <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS
                                <td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s3'>Helianthus_praecox_hirtus<td  class='s4'>3<td  class='s4'>10<td  class='s4'>13<td  class='s5'>7.7<td  class='s5'>1.1<td  class='s5'>6.7
                                <td  class='s5'>5.2<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_praecox_praecox<td  class='s4'>0<td  class='s4'>14<td  class='s4'>14
                                <td  class='s5'>10.0<td  class='s5'>10.0<td  class='s5'>8.5<td  class='s5'>9.5<td  dir='ltr' class='s6'>
                                    NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_praecox_runyonii<td  class='s4'>5
                                <td  class='s4'>28<td  class='s4'>33<td  class='s5'>8.5<td  class='s5'>2.1<td  class='s5'>6.9
                                <td  class='s5'>5.8<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_resinosus<td  class='s4'>75<td  class='s4'>29<td  class='s4'>104<td  class='s5'>2.8
                                <td  class='s5'>0.8<td  class='s5'>10.0<td  class='s5'>4.5<td  dir='ltr' class='s6'>MPS<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_salicifolius<td  class='s4'>42<td  class='s4'>40
                                <td  class='s4'>82<td  class='s5'>4.9<td  class='s5'>2.9<td  class='s5'>5.5<td  class='s5'>4.4
                                <td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                    Helianthus_silphioides<td  class='s4'>27<td  class='s4'>18<td  class='s4'>45<td  class='s5'>4.0
                                <td  class='s5'>10.0<td  class='s5'>10.0<td  class='s5'>8.0<td  dir='ltr' class='s6'>NFCR<td ></tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_strumosus<td  class='s4'>255<td  class='s4'>70
                                <td  class='s4'>325<td  class='s5'>2.2<td  class='s5'>0.6<td  class='s5'>9.0<td  class='s5'>3.9
                                <td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Helianthus_tuberosus
                                <td  class='s4'>568<td  class='s4'>160<td  class='s4'>728<td  class='s5'>2.2<td  class='s5'>0.3
                                <td  class='s5'>7.5<td  class='s5'>3.3<td  dir='ltr' class='s6'>MPS<td ></tr>
                        </table>";
            break;

        case "Hordeum" : $html .= "<table id='tb_Hordeum'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                                <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                                <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s2'>Hordeum_brevisubulatum<td  class='s3'>56<td  class='s3'>36
                                <td  class='s3'>92<td  class='s4'>3.9<td  class='s4'>0.2<td  class='s4'>4.7<td  class='s4'>2.9
                                <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Hordeum_bulbosum
                                <td  class='s3'>375<td  class='s3'>321<td  class='s3'>696<td  class='s4'>4.6<td  class='s4'>1.3
                                <td  class='s4'>10.0<td  class='s4'>5.3<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Hordeum_chilense
                                <td  class='s3'>24<td  class='s3'>72<td  class='s3'>96<td  class='s4'>7.5<td  class='s4'>2.1
                                <td  class='s4'>10.0<td  class='s4'>6.5<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Hordeum_vulgare_spontaneum
                                <td  class='s3'>1507<td  class='s3'>11415<td  class='s3'>12922<td  class='s4'>8.8<td  class='s4'>
                                    3.9<td  class='s4'>10.0<td  class='s4'>7.6<td  dir='ltr' class='s5'>NFCR</tr>
                        </table>";
            break;

        case "Ipomoea" : $html .= "<table id='tb_Ipomoea'>
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
                       </table> ";
            break;
        case "Lathyrus" : $html .= " <table id='tb_Lathyrus'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS
                                <td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS
                                <td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS
                                <td  dir='ltr' class='s1'>FPCAT</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Lathyrus_chrysanthus
                                <td  class='s3'>5<td  class='s3'>5<td  class='s3'>10<td  class='s4'>5.0<td  class='s4'>10.0
                                <td  class='s4'>10.0<td  class='s4'>8.3<td  dir='ltr' class='s5'>NFCR</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Lathyrus_gorgoni<td  class='s3'>52<td  class='s3'>56<td  class='s3'>108
                                <td  class='s4'>5.2<td  class='s4'>3.8<td  class='s4'>10.0<td  class='s4'>6.3<td  dir='ltr' class='s5'>
                                    LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Lathyrus_marmoratus<td  class='s3'>4<td  class='s3'>
                                    23<td  class='s3'>27<td  class='s4'>8.5<td  class='s4'>3.6<td  class='s4'>10.0<td  class='s4'>7.4
                                <td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Lathyrus_pseudocicera
                                <td  class='s3'>12<td  class='s3'>47<td  class='s3'>59<td  class='s4'>8.0<td  class='s4'>0.6
                                <td  class='s4'>9.3<td  class='s4'>5.9<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Lathyrus_sativus<td  class='s3'>496<td  class='s3'>1878<td  class='s3'>2374
                                <td  class='s4'>7.9<td  class='s4'>4.4<td  class='s4'>10.0<td  class='s4'>7.4<td  dir='ltr' class='s5'>LPS
                            </tr>
                        </table>";
            break;
        case "Lens" : $html .= "<table id='tb_Lens'>
                            <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS
                                <td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS
                                <td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS
                                <td  dir='ltr' class='s1'>FPCAT</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Lens_culinaris_odemensis
                                <td  class='s3'>19<td  class='s3'>42<td  class='s3'>61<td  class='s4'>6.9<td  class='s4'>2.1
                                <td  class='s4'>10.0<td  class='s4'>6.3<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Lens_culinaris_orientalis<td  class='s3'>399<td  class='s3'>208
                                <td  class='s3'>607<td  class='s4'>3.4<td  class='s4'>2.6<td  class='s4'>10.0<td  class='s4'>5.3
                                <td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Lens_culinaris_tomentosus
                                <td  class='s3'>1<td  class='s3'>6<td  class='s3'>7<td  class='s4'>8.6<td  class='s4'>10.0
                                <td  class='s4'>3.4<td  class='s4'>7.3<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                                <td  dir='ltr' class='s2'>Lens_ervoides<td  class='s3'>139<td  class='s3'>175<td  class='s3'>314
                                <td  class='s4'>5.6<td  class='s4'>1.3<td  class='s4'>7.7<td  class='s4'>4.8<td  dir='ltr' class='s5'>
                                    MPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Lens_nigricans<td  class='s3'>183<td  class='s3'>94<td  class='s3'>277<td  class='s4'>3.4
                                <td  class='s4'>1.1<td  class='s4'>10.0<td  class='s4'>4.8<td  dir='ltr' class='s5'>MPS</tr>
                        </table>";
            break;
        case "Malus" : $html .= "<table id='tb_Malus'>
                    <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS
                        <td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT
                        <td  dir='ltr' class='s1'>notes</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_baccata<td  class='s3'>212<td  class='s3'>100
                        <td  class='s3'>312<td  class='s4'>3.2<td  class='s4'>0.1<td  class='s4'>2.7<td  class='s4'>2.0
                        <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_baccata_baccata
                        <td  class='s3'>26<td  class='s3'>2<td  class='s3'>28<td  class='s4'>0.7<td  dir='ltr' class='s6'>NA
                        <td  dir='ltr' class='s6'>NA<td  class='s4'>0.7<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_baccata_daochengensis<td  class='s3'>2<td  class='s3'>0<td  class='s3'>2
                        <td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  class='s4'>0.0
                        <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_baccata_jinxianensis
                        <td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                        <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Malus_baccata_xiaojinensis<td  class='s3'>0<td  class='s3'>0
                        <td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                        <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Malus_chitralensis<td  class='s3'>2<td  class='s3'>0
                        <td  class='s3'>2<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  class='s4'>0.0
                        <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_crescimannoi<td  class='s3'>0
                        <td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS
                        <td  dir='ltr' class='s5'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_doumeri<td  class='s3'>49<td  class='s3'>1<td  class='s3'>50
                        <td  class='s4'>0.2<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.1<td  dir='ltr' class='s5'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Malus_floribunda<td  class='s3'>34<td  class='s3'>16<td  class='s3'>50<td  class='s4'>3.2
                        <td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>1.1<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_fusca<td  class='s3'>781<td  class='s3'>84<td  class='s3'>865<td  class='s4'>1.0<td  class='s4'>0.4
                        <td  class='s4'>8.3<td  class='s4'>3.2<td  dir='ltr' class='s5'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_halliana<td  class='s3'>21
                        <td  class='s3'>23<td  class='s3'>44<td  class='s4'>5.2<td  class='s4'>0.1<td  class='s4'>6.5<td  class='s4'>3.9<td  dir='ltr' class='s5'>MPS<td >
                    </tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_honanensis<td  class='s3'>9<td  class='s3'>3<td  class='s3'>12<td  class='s4'>2.5<td  dir='ltr' class='s6'>NA
                        <td  dir='ltr' class='s6'>NA<td  class='s4'>2.5<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_hupehensis<td  class='s3'>148<td  class='s3'>159<td  class='s3'>307<td  class='s4'>5.
                        <td  class='s4'>0.1<td  class='s4'>5.5<td  class='s4'>3.6<td  dir='ltr' class='s5'>MPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_kansuensis<td  class='s3'>59<td  class='s3'>36<td  class='s3'>95<td  class='s4'>3.8
                        <td  class='s4'>0.1<td  class='s4'>3.8<td  class='s4'>2.6<td  dir='ltr' class='s5'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Malus_komarovii<td  class='s3'>5<td  class='s3'>1<td  class='s3'>6
                        <td  class='s4'>1.7<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  class='s4'>1.7<td  dir='ltr' class='s5'>HPS
                        <td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_mandshurica<td  class='s3'>30<td  class='s3'>4<td  class='s3'>34<td  class='s4'>1.2
                        <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  class='s4'>0.6<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_muliensis<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                        <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_ombrophila<td  class='s3'>39<td  class='s3'>5<td  class='s3'>44<td  class='s4'>1.1<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.4
                        <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_orientalis<td  class='s3'>212<td  class='s3'>1570<td  class='s3'>1782<td  class='s4'>8.8
                        <td  class='s4'>1.1<td  class='s4'>10.0<td  class='s4'>6.6<td  dir='ltr' class='s5'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_prattii<td  class='s3'>184<td  class='s3'>29
                        <td  class='s3'>213<td  class='s4'>1.4<td  class='s4'>0.1<td  class='s4'>4.3<td  class='s4'>1.9<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Malus_prunifolia<td  class='s3'>235<td  class='s3'>92<td  class='s3'>327<td  class='s4'>2.8<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.9
                        <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_pumila<td  class='s3'>1821<td  class='s3'>72<td  class='s3'>1893<td  class='s4'>0.4<td  class='s4'>0.1
                        <td  class='s4'>5.0<td  class='s4'>1.8<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_sargentii<td  class='s3'>38<td  class='s3'>53<td  class='s3'>91<td  class='s4'>5.8
                        <td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>1.9<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_sieversii<td  class='s3'>3193<td  class='s3'>3009<td  class='s3'>6202
                        <td  class='s4'>4.9<td  class='s4'>2.7<td  class='s4'>10.0<td  class='s4'>5.8<td  dir='ltr' class='s5'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_sikkimensis<td  class='s3'>43<td  class='s3'>32
                        <td  class='s3'>75<td  class='s4'>4.3<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>1.4<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_spectabilis<td  class='s3'>56<td  class='s3'>16
                        <td  class='s3'>72<td  class='s4'>2.2<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  class='s4'>2.2<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_sylvestris
                        <td  class='s3'>4444<td  class='s3'>211<td  class='s3'>4655<td  class='s4'>0.5<td  class='s4'>0.0<td  class='s4'>2.4<td  class='s4'>0.9<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_toringo<td  class='s3'>207<td  class='s3'>349
                        <td  class='s3'>556<td  class='s4'>6.3<td  class='s4'>0.1<td  class='s4'>4.5<td  class='s4'>3.6<td  dir='ltr' class='s5'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_toringoides<td  class='s3'>103<td  class='s3'>97<td  class='s3'>200
                        <td  class='s4'>4.9<td  class='s4'>0.2<td  class='s4'>5.8<td  class='s4'>3.6<td  dir='ltr' class='s5'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_transitoria<td  class='s3'>112<td  class='s3'>149<td  class='s3'>261<td  class='s4'>5.7<td  class='s4'>1.9
                        <td  class='s4'>3.1<td  class='s4'>3.6<td  dir='ltr' class='s5'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_tschonoskii<td  class='s3'>23<td  class='s3'>16<td  class='s3'>39<td  class='s4'>4.1<td  class='s4'>0.0<td  class='s4'>3.8<td  class='s4'>2.6
                        <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_yunnanensis<td  class='s3'>78<td  class='s3'>56<td  class='s3'>134<td  class='s4'>4.2<td  class='s4'>0.1<td  class='s4'>4.6<td  class='s4'>3.0<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Malus_zumi<td  class='s3'>21
                        <td  class='s3'>13<td  class='s3'>34<td  class='s4'>3.8<td  class='s4'>10.0<td  class='s4'>4.3<td  class='s4'>6.1<td  dir='ltr' class='s5'>LPS<td ></tr>
                </table>";
            break;
        case "Medicago" : $html .= "<table id='tb_Medicago'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                            <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT
                            <td  dir='ltr' class='s1'>notes</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_papillosa
                            <td  class='s3'>40<td  class='s3'>14<td  class='s3'>54<td  class='s4'>2.6<td  class='s4'>0.2
                            <td  class='s4'>5.8<td  class='s4'>2.8<td  dir='ltr' class='s5'>HPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_papillosa_macrocarpa<td  class='s3'>1<td  class='s3'>0
                            <td  class='s3'>1<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Medicago_papillosa_papillosa<td  class='s3'>5<td  class='s3'>0
                            <td  class='s3'>5<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Medicago_prostrata<td  class='s3'>40<td  class='s3'>22<td  class='s3'>62
                            <td  class='s4'>3.5<td  class='s4'>0.9<td  class='s4'>7.5<td  class='s4'>4.0<td  dir='ltr' class='s5'>
                                MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_sativa_caerulea<td  class='s3'>62
                            <td  class='s3'>94<td  class='s3'>156<td  class='s4'>6.0<td  class='s4'>1.2<td  class='s4'>10.0
                            <td  class='s4'>5.7<td  dir='ltr' class='s5'>LPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Medicago_sativa_falcata_falcata<td  class='s3'>0<td  class='s3'>0
                            <td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_sativa_falcata_viscosa<td  class='s3'>0
                            <td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS
                            <td  dir='ltr' class='s5'>no occurrence data; not assessed</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Medicago_sativa_glomerata<td  class='s3'>19<td  class='s3'>23
                            <td  class='s3'>42<td  class='s4'>5.5<td  class='s4'>0.0<td  class='s4'>5.6<td  class='s4'>3.7
                            <td  dir='ltr' class='s5'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_sativa_hemicycla<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                            <td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_sativa_sativa<td  class='s3'>1023<td  class='s3'>923
                            <td  class='s3'>1946<td  class='s4'>4.7<td  class='s4'>6.6<td  class='s4'>10.0<td  class='s4'>7.1
                            <td  dir='ltr' class='s5'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_sativa_tunetana
                            <td  class='s3'>0<td  class='s3'>0<td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s5'>HPS
                            <td  dir='ltr' class='s5'>no occurrence data; not assessed</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Medicago_sativa_varia<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                            <td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Medicago_saxatilis<td  class='s3'>4<td  class='s3'>0
                            <td  class='s3'>4<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS<td ></tr>
                    </table>";
            break;
        case "Musa" : $html .= "<table>
                            <tr id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Musa_acuminata<td  class='s4'>2227<td  class='s4'>1911<td  class='s5'>316<td  class='s5'>1.4<td  dir='ltr' class='s6'>0.02<td  dir='ltr' class='s6'>4.1<td  dir='ltr' class='s6'>1.8<td  dir='ltr' class='s6'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Musa_balbisiana<td  class='s4'>144<td  class='s4'>103<td  class='s5'>41<td  class='s5'>2.8<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>0.9<td  dir='ltr' class='s6'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Musa_flaviflora<td  class='s4'>1<td  class='s4'>1<td  class='s5'>0<td  class='s5'>0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Musa_schizocarpa<td  class='s4'>111<td  class='s4'>88<td  class='s5'>23<td  class='s5'>2.1<td  dir='ltr' class='s6'>0.5<td  dir='ltr' class='s6'>5.9<td  dir='ltr' class='s6'>2.8<td  dir='ltr' class='s6'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Musa_textilis<td  class='s4'>190<td  class='s4'>182<td  class='s5'>8<td  class='s5'>0.4<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>0.1<td  dir='ltr' class='s6'>HPS</tr>
                            <tr dir='ltr'><td  dir='ltr' class='s3'>Musa_yunnanensis<td  class='s4'>25<td  class='s4'>25<td  class='s5'>0<td  class='s5'>0<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>0<td  dir='ltr' class='s6'>HPS</tr>
                        </table>";
            break;
        case "Pennisetum" : $html .= "<table id='tb_Pennisetum'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                            <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS
                            <td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Pennisetum_glaucum_monodii<td  class='s3'>0<td  class='s3'>0
                            <td  class='s3'>0<td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                            <td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>
                                no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Pennisetum_orientale
                            <td  class='s3'>238<td  class='s3'>39<td  class='s3'>277<td  class='s4'>1.4<td  class='s4'>0.0
                            <td  class='s4'>0.0<td  class='s4'>0.5<td  dir='ltr' class='s6'>HPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Pennisetum_purpureum<td  class='s3'>998<td  class='s3'>76
                            <td  class='s3'>1074<td  class='s4'>0.7<td  class='s4'>0.3<td  class='s4'>1.1<td  class='s4'>0.7
                            <td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Pennisetum_squamulatum
                            <td  class='s3'>21<td  class='s3'>9<td  class='s3'>30<td  class='s4'>3.0<td  class='s4'>10.0
                            <td  class='s4'>8.3<td  class='s4'>7.1<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Pennisetum_stenostachyum<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                            <td  class='s4'>0.0<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA<td  dir='ltr' class='s5'>NA
                            <td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                    </table>";
            break;
        case "Phaseolus" : $html .= "<table id='tb_Phaseolus'>
                        <tr dir='ltr' id ='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                            <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Phaseolus_albescens<td  class='s3'>11<td  class='s3'>0
                            <td  class='s3'>11<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>0.0
                            <td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Phaseolus_augusti
                            <td  class='s3'>45<td  class='s3'>64<td  class='s3'>109<td  class='s4'>5.9<td  class='s4'>2.4
                            <td  class='s4'>10.0<td  class='s4'>6.1<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Phaseolus_coccineus<td  class='s3'>1295<td  class='s3'>668
                            <td  class='s3'>1963<td  class='s4'>3.4<td  class='s4'>6.1<td  class='s4'>10.0<td  class='s4'>6.5
                            <td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Phaseolus_costaricensis
                            <td  class='s3'>59<td  class='s3'>7<td  class='s3'>66<td  class='s4'>1.1<td  class='s4'>7.0
                            <td  class='s4'>10.0<td  class='s4'>6.0<td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Phaseolus_dumosus<td  class='s3'>191<td  class='s3'>63<td  class='s3'>254
                            <td  class='s4'>2.5<td  class='s4'>6.1<td  class='s4'>9.2<td  class='s4'>5.9
                            <td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Phaseolus_longiplacentifer
                            <td  class='s3'>1<td  class='s3'>0<td  class='s3'>1<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Phaseolus_lunatus<td  class='s3'>1188<td  class='s3'>1184<td  class='s3'>2372
                            <td  class='s4'>5.0<td  class='s4'>2.3<td  class='s4'>8.4<td  class='s4'>5.2
                            <td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Phaseolus_mollis
                            <td  class='s3'>8<td  class='s3'>0<td  class='s3'>8<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Phaseolus_pachyrrhizoides<td  class='s3'>9<td  class='s3'>34
                            <td  class='s3'>43<td  class='s4'>7.9<td  class='s4'>3.8<td  class='s4'>10.0<td  class='s4'>7.2
                            <td  dir='ltr' class='s5'>LPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Phaseolus_persistentus
                            <td  class='s3'>2<td  class='s3'>0<td  class='s3'>2<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                            <td  class='s4'>0.0<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Phaseolus_vulgaris_aborigineus<td  class='s3'>317<td  class='s3'>1513
                            <td  class='s3'>1830<td  class='s4'>8.3<td  class='s4'>8.8<td  class='s4'>10.0<td  class='s4'>9.0
                            <td  dir='ltr' class='s5'>NFCR</tr>
                    </table>";
            break;
        case "Pisum" : $html .= "<table id='tb_Pisum'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                            <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS
                            <td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Pisum_abyssinicum<td  class='s3'>86<td  class='s3'>31
                            <td  class='s3'>117<td  class='s4'>2.6<td  class='s4'>0.2<td  class='s4'>5.9<td  class='s4'>2.9
                            <td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Pisum_fulvum
                            <td  class='s3'>189<td  class='s3'>126<td  class='s3'>315<td  class='s4'>4.0<td  class='s4'>1.6
                            <td  class='s4'>10.0<td  class='s4'>5.2<td  dir='ltr' class='s5'>LPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Pisum_sativum_elatius_brevipedunculatum<td  class='s3'>7
                            <td  class='s3'>0<td  class='s3'>7<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>
                            <td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Pisum_sativum_elatius_elatius
                            <td  class='s3'>2<td  class='s3'>0<td  class='s3'>2<td  class='s4'>0.0<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s6'>NA<td  class='s4'>0.0<td  dir='ltr' class='s5'>HPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Pisum_sativum_elatius_pumilo<td  class='s3'>0<td  class='s3'>0<td  class='s3'>0
                            <td  class='s4'>0.0<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA<td  dir='ltr' class='s6'>NA
                            <td  dir='ltr' class='s5'>HPS<td  dir='ltr' class='s5'>no occurrence data; not assessed</tr>
                    </table>";
            break;
        case "Solanum_Potato" : $html .= "<table id='tb_Potato'><tr dir='ltr' id ='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>
                            GS<td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS
                        <td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s2'>FPS<td  dir='ltr' class='s1'>FPCAT
                        <td  class='s3'></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_acaule<td  class='s5'>3162
                        <td  class='s5'>1749<td  class='s5'>4911<td  class='s6'>3.6<td  class='s6'>10.0<td  class='s6'>10.0
                        <td  class='s6'>7.9<td  dir='ltr' class='s7'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_acroglossum<td  class='s5'>41<td  class='s5'>3<td  class='s5'>44<td  class='s6'>0.7
                        <td  class='s6'>3.9<td  class='s6'>4.1<td  class='s6'>2.9<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_acroscopicum<td  class='s5'>63<td  class='s5'>14
                        <td  class='s5'>77<td  class='s6'>1.8<td  class='s6'>0.5<td  class='s6'>7.4<td  class='s6'>3.2
                        <td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_agrimonifolium
                        <td  class='s5'>392<td  class='s5'>27<td  class='s5'>419<td  class='s6'>0.6<td  class='s6'>2.6<td  class='s6'>7.7
                        <td  class='s6'>3.7<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_albicans
                        <td  class='s5'>214<td  class='s5'>77<td  class='s5'>291<td  class='s6'>2.6<td  class='s6'>2.7<td  class='s6'>10.0
                        <td  class='s6'>5.1<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_albornozii
                        <td  class='s5'>26<td  class='s5'>8<td  class='s5'>34<td  class='s6'>2.4<td  class='s6'>10.0<td  class='s6'>10.0
                        <td  class='s6'>7.5<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_andreanum
                        <td  class='s5'>451<td  class='s5'>89<td  class='s5'>540<td  class='s6'>1.6<td  class='s6'>3.9<td  class='s6'>7.9
                        <td  class='s6'>4.5<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_ayacuchense
                        <td  class='s5'>5<td  class='s5'>0<td  class='s5'>5<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_berthaultii
                        <td  class='s5'>968<td  class='s5'>355<td  class='s5'>1323<td  class='s6'>2.7<td  class='s6'>6.5<td  class='s6'>10.0
                        <td  class='s6'>6.4<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_boliviense
                        <td  class='s5'>2056<td  class='s5'>537<td  class='s5'>2593<td  class='s6'>2.1<td  class='s6'>7.8<td  class='s6'>10.0
                        <td  class='s6'>6.6<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_bombycinum
                        <td  class='s5'>7<td  class='s5'>0<td  class='s5'>7<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_brevicaule
                        <td  class='s5'>5191<td  class='s5'>1304<td  class='s5'>6495<td  class='s6'>2.0<td  class='s6'>10.0<td  class='s6'>10.0
                        <td  class='s6'>7.3<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_buesii
                        <td  class='s5'>41<td  class='s5'>2<td  class='s5'>43<td  class='s6'>0.5<td  class='s6'>0.3<td  class='s6'>6.8
                        <td  class='s6'>2.5<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_bulbocastanum
                        <td  class='s5'>1115<td  class='s5'>153<td  class='s5'>1268<td  class='s6'>1.2<td  class='s6'>4.7<td  class='s6'>10.0
                        <td  class='s6'>5.3<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_burkartii
                        <td  class='s5'>14<td  class='s5'>2<td  class='s5'>16<td  class='s6'>1.3<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.4<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_cajamarquense
                        <td  class='s5'>52<td  class='s5'>8<td  class='s5'>60<td  class='s6'>1.3<td  class='s6'>0.5<td  class='s6'>4.8
                        <td  class='s6'>2.2<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_candolleanum
                        <td  class='s5'>2042<td  class='s5'>535<td  class='s5'>2577<td  class='s6'>2.1<td  class='s6'>9.6<td  class='s6'>10.0
                        <td  class='s6'>7.2<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_cantense
                        <td  class='s5'>84<td  class='s5'>3<td  class='s5'>87<td  class='s6'>0.3<td  class='s6'>0.6<td  class='s6'>5.8
                        <td  class='s6'>2.2<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_chacoense
                        <td  class='s5'>3061<td  class='s5'>555<td  class='s5'>3616<td  class='s6'>1.5<td  class='s6'>1.9<td  class='s6'>8.0
                        <td  class='s6'>3.8<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_chilliasense
                        <td  class='s5'>14<td  class='s5'>5<td  class='s5'>19<td  class='s6'>2.6<td  class='s6'>10.0<td  class='s6'>6.8
                        <td  class='s6'>6.5<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_chiquidenum
                        <td  class='s5'>179<td  class='s5'>14<td  class='s5'>193<td  class='s6'>0.7<td  class='s6'>1.2<td  class='s6'>8.0
                        <td  class='s6'>3.3<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_chomatophilum
                        <td  class='s5'>680<td  class='s5'>99<td  class='s5'>779<td  class='s6'>1.3<td  class='s6'>4.1<td  class='s6'>10.0
                        <td  class='s6'>5.1<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_clarum
                        <td  class='s5'>275<td  class='s5'>6<td  class='s5'>281<td  class='s6'>0.2<td  class='s6'>3.3<td  class='s6'>10.0
                        <td  class='s6'>4.5<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_coelestipetalum
                        <td  class='s5'>87<td  class='s5'>40<td  class='s5'>127<td  class='s6'>3.1<td  class='s6'>2.0<td  class='s6'>9.3
                        <td  class='s6'>4.8<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_colombianum
                        <td  class='s5'>1111<td  class='s5'>183<td  class='s5'>1294<td  class='s6'>1.4<td  class='s6'>5.1<td  class='s6'>10.0
                        <td  class='s6'>5.5<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_commersonii
                        <td  class='s5'>681<td  class='s5'>90<td  class='s5'>771<td  class='s6'>1.2<td  class='s6'>0.9<td  class='s6'>8.3
                        <td  class='s6'>3.4<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_contumazaense
                        <td  class='s5'>17<td  class='s5'>2<td  class='s5'>19<td  class='s6'>1.1<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.4<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_demissum
                        <td  class='s5'>1937<td  class='s5'>539<td  class='s5'>2476<td  class='s6'>2.2<td  class='s6'>6.6<td  class='s6'>10.0
                        <td  class='s6'>6.3<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_flahaultii
                        <td  class='s5'>121<td  class='s5'>28<td  class='s5'>149<td  class='s6'>1.9<td  class='s6'>1.1<td  class='s6'>6.1
                        <td  class='s6'>3.0<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_flavoviridens
                        <td  class='s5'>4<td  class='s5'>0<td  class='s5'>4<td  class='s6'>0.0<td  dir='ltr' class='s8'>NA<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_gandarillasii
                        <td  class='s5'>55<td  class='s5'>16<td  class='s5'>71<td  class='s6'>2.3<td  class='s6'>2.2<td  class='s6'>7.5
                        <td  class='s6'>4.0<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_garcia-barrigae
                        <td  class='s5'>21<td  class='s5'>2<td  class='s5'>23<td  class='s6'>0.9<td  class='s6'>0.4<td  class='s6'>6.1
                        <td  class='s6'>2.5<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_gracilifrons
                        <td  class='s5'>17<td  class='s5'>0<td  class='s5'>17<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_guerreroense
                        <td  class='s5'>8<td  class='s5'>9<td  class='s5'>17<td  class='s6'>5.3<td  class='s6'>10.0<td  class='s6'>3.9
                        <td  class='s6'>6.4<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_hastiforme
                        <td  class='s5'>40<td  class='s5'>0<td  class='s5'>40<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_hintonii
                        <td  class='s5'>41<td  class='s5'>0<td  class='s5'>41<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_hjertingii
                        <td  class='s5'>181<td  class='s5'>38<td  class='s5'>219<td  class='s6'>1.7<td  class='s6'>1.5<td  class='s6'>3.8
                        <td  class='s6'>2.3<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_hougasii
                        <td  class='s5'>194<td  class='s5'>27<td  class='s5'>221<td  class='s6'>1.2<td  class='s6'>1.6<td  class='s6'>8.6
                        <td  class='s6'>3.8<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_huancabambense
                        <td  class='s5'>42<td  class='s5'>18<td  class='s5'>60<td  class='s6'>3.0<td  class='s6'>10.0<td  class='s6'>7.2
                        <td  class='s6'>6.7<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_incasicum
                        <td  class='s5'>5<td  class='s5'>0<td  class='s5'>5<td  class='s6'>0.0<td  dir='ltr' class='s8'>NA<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_infundibuliforme
                        <td  class='s5'>858<td  class='s5'>206<td  class='s5'>1064<td  class='s6'>1.9<td  class='s6'>4.6<td  class='s6'>10.0
                        <td  class='s6'>5.5<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_iopetalum
                        <td  class='s5'>696<td  class='s5'>127<td  class='s5'>823<td  class='s6'>1.5<td  class='s6'>3.9<td  class='s6'>8.8
                        <td  class='s6'>4.7<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_kurtzianum
                        <td  class='s5'>858<td  class='s5'>200<td  class='s5'>1058<td  class='s6'>1.9<td  class='s6'>3.7<td  class='s6'>10.0
                        <td  class='s6'>5.2<td  dir='ltr' class='s7'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_laxissimum
                        <td  class='s5'>114<td  class='s5'>19<td  class='s5'>133<td  class='s6'>1.4<td  class='s6'>0.7<td  class='s6'>8.7
                        <td  class='s6'>3.6<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_lesteri
                        <td  class='s5'>24<td  class='s5'>10<td  class='s5'>34<td  class='s6'>2.9<td  class='s6'>1.2<td  class='s6'>7.3
                        <td  class='s6'>3.8<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_limbaniense
                        <td  class='s5'>37<td  class='s5'>2<td  class='s5'>39<td  class='s6'>0.5<td  class='s6'>0.0<td  class='s6'>0.0
                        <td  class='s6'>0.2<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_lobbianum
                        <td  class='s5'>0<td  class='s5'>0<td  class='s5'>0<td  class='s6'>0.0<td  dir='ltr' class='s8'>NA<td  dir='ltr' class='s8'>NA
                        <td  dir='ltr' class='s8'>NA<td  dir='ltr' class='s7'>HPS<td  dir='ltr' class='s7'>no occurence data; not assessed</tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_longiconicum<td  class='s5'>545<td  class='s5'>11
                        <td  class='s5'>556<td  class='s6'>0.2<td  class='s6'>10.0<td  class='s6'>10.0<td  class='s6'>6.7<td  dir='ltr' class='s7'>LPS
                        <td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_maglia<td  class='s5'>288<td  class='s5'>9<td  class='s5'>297
                        <td  class='s6'>0.3<td  class='s6'>0.2<td  class='s6'>3.5<td  class='s6'>1.3<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_marinasense<td  class='s5'>144<td  class='s5'>47<td  class='s5'>191
                        <td  class='s6'>2.5<td  class='s6'>2.3<td  class='s6'>10.0<td  class='s6'>4.9<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_medians<td  class='s5'>784<td  class='s5'>61<td  class='s5'>845
                        <td  class='s6'>0.7<td  class='s6'>2.1<td  class='s6'>10.0<td  class='s6'>4.3<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_microdontum<td  class='s5'>1404<td  class='s5'>351<td  class='s5'>1755
                        <td  class='s6'>2.0<td  class='s6'>5.7<td  class='s6'>10.0<td  class='s6'>5.9<td  dir='ltr' class='s7'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_morelliforme<td  class='s5'>401<td  class='s5'>45<td  class='s5'>446
                        <td  class='s6'>1.0<td  class='s6'>4.4<td  class='s6'>10.0<td  class='s6'>5.1<td  dir='ltr' class='s7'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_multiinterruptum<td  class='s5'>401<td  class='s5'>61<td  class='s5'>462
                        <td  class='s6'>1.3<td  class='s6'>5.4<td  class='s6'>10.0<td  class='s6'>5.6<td  dir='ltr' class='s7'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_neocardenasii<td  class='s5'>24<td  class='s5'>8<td  class='s5'>32
                        <td  class='s6'>2.5<td  class='s6'>0.2<td  class='s6'>6.8<td  class='s6'>3.2<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_neorossii<td  class='s5'>100<td  class='s5'>25<td  class='s5'>125
                        <td  class='s6'>2.0<td  class='s6'>2.2<td  class='s6'>10.0<td  class='s6'>4.7<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_neovavilovii<td  class='s5'>18<td  class='s5'>1<td  class='s5'>19
                        <td  class='s6'>0.5<td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.2<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_nubicola<td  class='s5'>20<td  class='s5'>0<td  class='s5'>20<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_okadae<td  class='s5'>158<td  class='s5'>61<td  class='s5'>219<td  class='s6'>2.8
                        <td  class='s6'>1.4<td  class='s6'>4.5<td  class='s6'>2.9<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_olmosense<td  class='s5'>24<td  class='s5'>0<td  class='s5'>24<td  class='s6'>0.0
                        <td  class='s6'>0.0<td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_ortegae<td  class='s5'>2<td  class='s5'>0<td  class='s5'>2<td  class='s6'>0.0
                        <td  dir='ltr' class='s8'>NA<td  dir='ltr' class='s8'>NA<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_oxycarpum<td  class='s5'>216<td  class='s5'>52<td  class='s5'>268
                        <td  class='s6'>1.9<td  class='s6'>2.3<td  class='s6'>10.0<td  class='s6'>4.8<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_palustre<td  class='s5'>90<td  class='s5'>167<td  class='s5'>257
                        <td  class='s6'>6.5<td  class='s6'>7.4<td  class='s6'>10.0<td  class='s6'>8.0<td  dir='ltr' class='s7'>NFCR<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_paucissectum<td  class='s5'>48<td  class='s5'>16<td  class='s5'>64
                        <td  class='s6'>2.5<td  class='s6'>10.0<td  class='s6'>6.5<td  class='s6'>6.3<td  dir='ltr' class='s7'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_pillahuatense<td  class='s5'>17<td  class='s5'>1<td  class='s5'>18
                        <td  class='s6'>0.6<td  class='s6'>0.2<td  class='s6'>10.0<td  class='s6'>3.6<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_piurae<td  class='s5'>72<td  class='s5'>9<td  class='s5'>81
                        <td  class='s6'>1.1<td  class='s6'>0.9<td  class='s6'>6.5<td  class='s6'>2.8<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_polyadenium<td  class='s5'>276<td  class='s5'>83<td  class='s5'>359
                        <td  class='s6'>2.3<td  class='s6'>1.6<td  class='s6'>6.5<td  class='s6'>3.5<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_raphanifolium<td  class='s5'>446<td  class='s5'>166<td  class='s5'>612
                        <td  class='s6'>2.7<td  class='s6'>4.6<td  class='s6'>10.0<td  class='s6'>5.8<td  dir='ltr' class='s7'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_rhomboideilanceolatum<td  class='s5'>45<td  class='s5'>2<td  class='s5'>47
                        <td  class='s6'>0.4<td  class='s6'>0.4<td  class='s6'>7.1<td  class='s6'>2.6<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_salasianum<td  class='s5'>6<td  class='s5'>0<td  class='s5'>6<td  class='s6'>0.0
                        <td  dir='ltr' class='s8'>NA<td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_schenckii<td  class='s5'>124<td  class='s5'>41<td  class='s5'>165<td  class='s6'>2.5
                        <td  class='s6'>1.3<td  class='s6'>8.1<td  class='s6'>3.9<td  dir='ltr' class='s7'>MPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_sogarandinum<td  class='s5'>106<td  class='s5'>17<td  class='s5'>123<td  class='s6'>1.4
                        <td  class='s6'>1.0<td  class='s6'>6.5<td  class='s6'>2.9<td  dir='ltr' class='s7'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Solanum_stoloniferum<td  class='s5'>4061<td  class='s5'>1443<td  class='s5'>5504
                        <td  class='s6'>2.6<td  class='s6'>10.0<td  class='s6'>10.0<td  class='s6'>7.5<td  dir='ltr' class='s7'>NFCR<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_tarnii<td  class='s5'>78<td  class='s5'>42<td  class='s5'>120
                        <td  class='s6'>3.5<td  class='s6'>1.3<td  class='s6'>6.5<td  class='s6'>3.8<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_taulisense<td  class='s5'>5<td  class='s5'>0<td  class='s5'>5
                        <td  class='s6'>0.0<td  dir='ltr' class='s8'>NA<td  class='s6'>0.0<td  class='s6'>0.0<td  dir='ltr' class='s7'>HPS<td >
                    </tr><tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_venturii<td  class='s5'>189<td  class='s5'>29<td  class='s5'>218
                        <td  class='s6'>1.3<td  class='s6'>0.5<td  class='s6'>0.0<td  class='s6'>0.6<td  dir='ltr' class='s7'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_vernei<td  class='s5'>493<td  class='s5'>211<td  class='s5'>704
                        <td  class='s6'>3.0<td  class='s6'>2.0<td  class='s6'>10.0<td  class='s6'>5.0<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_verrucosum<td  class='s5'>1165<td  class='s5'>185<td  class='s5'>1350
                        <td  class='s6'>1.4<td  class='s6'>2.7<td  class='s6'>8.2<td  class='s6'>4.1<td  dir='ltr' class='s7'>MPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Solanum_violaceimarmoratum<td  class='s5'>229<td  class='s5'>38<td  class='s5'>267
                        <td  class='s6'>1.4<td  class='s6'>0.3<td  class='s6'>7.4<td  class='s6'>3.0<td  dir='ltr' class='s7'>MPS<td ></tr> 
                </table>";
            break;
        case "Oryza" : $html .= "<table id='tb_Rice'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                            <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS
                            <td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_malampuzhaensis<td  class='s3'>0<td  class='s3'>0
                            <td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA
                            <td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>HPS<td  dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_perennis_cubensis<td  class='s3'>0<td  class='s3'>0
                            <td  class='s3'>0<td  class='s3'>0<td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>NA
                            <td  dir='ltr' class='s4'>NA<td  dir='ltr' class='s4'>HPS<td  dir='ltr' class='s4'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_alta<td  class='s3'>89<td  class='s3'>9<td  class='s3'>98
                            <td  class='s5'>0.9<td  class='s5'>0.0<td  class='s5'>0.0<td  class='s5'>0.3
                            <td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_australiensis
                            <td  class='s3'>321<td  class='s3'>48<td  class='s3'>369<td  class='s5'>1.3<td  class='s5'>0.3
                            <td  class='s5'>10.0<td  class='s5'>3.9<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Oryza_barthii<td  class='s3'>118<td  class='s3'>313<td  class='s3'>431
                            <td  class='s5'>7.3<td  class='s5'>2.5<td  class='s5'>9.2<td  class='s5'>6.3
                            <td  dir='ltr' class='s4'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_brachyantha
                            <td  class='s3'>18<td  class='s3'>31<td  class='s3'>49<td  class='s5'>6.3<td  class='s5'>0.1
                            <td  class='s5'>7.7<td  class='s5'>4.7<td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Oryza_eichingeri<td  class='s3'>46<td  class='s3'>39<td  class='s3'>85
                            <td  class='s5'>4.6<td  class='s5'>0.5<td  class='s5'>10.0<td  class='s5'>5.0
                            <td  dir='ltr' class='s4'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_glaberrima
                            <td  class='s3'>436<td  class='s3'>2911<td  class='s3'>3347<td  class='s5'>8.7<td  class='s5'>3.4
                            <td  class='s5'>9.1<td  class='s5'>7.1<td  dir='ltr' class='s4'>LPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Oryza_glumipatula<td  class='s3'>55<td  class='s3'>62<td  class='s3'>117
                            <td  class='s5'>5.3<td  class='s5'>1.1<td  class='s5'>10.0<td  class='s5'>5.5<td  dir='ltr' class='s4'>LPS<td >
                        </tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_grandiglumis<td  class='s3'>58<td  class='s3'>12<td  class='s3'>70<td  class='s5'>1.7<td  class='s5'>0.0<td  class='s5'>1.9<td  class='s5'>1.2
                            <td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_latifolia<td  class='s3'>387<td  class='s3'>42<td  class='s3'>429<td  class='s5'>1.0
                            <td  class='s5'>0.1<td  class='s5'>4.6<td  class='s5'>1.9<td  dir='ltr' class='s4'>HPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_longistaminata<td  class='s3'>589<td  class='s3'>457<td  class='s3'>1046<td  class='s5'>4.4
                            <td  class='s5'>2.5<td  class='s5'>8.6<td  class='s5'>5.2<td  dir='ltr' class='s4'>LPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_meridionalis<td  class='s3'>230<td  class='s3'>59
                            <td  class='s3'>289<td  class='s5'>2.0<td  class='s5'>0.3<td  class='s5'>6.5<td  class='s5'>2.9
                            <td  dir='ltr' class='s4'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_minuta
                            <td  class='s3'>84<td  class='s3'>57<td  class='s3'>141<td  class='s5'>4.0<td  class='s5'>1.5
                            <td  class='s5'>6.1<td  class='s5'>3.9<td  dir='ltr' class='s4'>MPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_nivara<td  class='s3'>1048<td  class='s3'>1529
                            <td  class='s3'>2577<td  class='s5'>5.9<td  class='s5'>8.4<td  class='s5'>9.7<td  class='s5'>8.0
                            <td  dir='ltr' class='s4'>NFCR<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Oryza_officinalis<td  class='s3'>292<td  class='s3'>325
                            <td  class='s3'>617<td  class='s5'>5.3<td  class='s5'>0.7<td  class='s5'>5.4<td  class='s5'>3.8
                            <td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Oryza_punctata<td  class='s3'>117<td  class='s3'>89<td  class='s3'>206
                            <td  class='s5'>4.3<td  class='s5'>0.6<td  class='s5'>9.5<td  class='s5'>4.8
                            <td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_rhizomatis
                            <td  class='s3'>21<td  class='s3'>32<td  class='s3'>53<td  class='s5'>6.0<td  class='s5'>6.5
                            <td  class='s5'>10.0<td  class='s5'>7.5<td  dir='ltr' class='s4'>NFCR<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Oryza_ridleyi<td  class='s3'>37<td  class='s3'>21<td  class='s3'>58
                            <td  class='s5'>3.6<td  class='s5'>0.2<td  class='s5'>5.8<td  class='s5'>3.2
                            <td  dir='ltr' class='s4'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_rufipogon
                            <td  class='s3'>980<td  class='s3'>1630<td  class='s3'>2610<td  class='s5'>6.2<td  class='s5'>3.0
                            <td  class='s5'>9.5<td  class='s5'>6.2<td  dir='ltr' class='s4'>LPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Oryza_schweinfurthiana<td  class='s3'>0<td  class='s3'>3
                            <td  class='s3'>3<td  class='s5'>10.0<td  class='s5'>0.0<td  class='s5'>0.0<td  class='s5'>0.0
                            <td  dir='ltr' class='s4'>HPS<td ></tr>
                    </table>";
            break;
        case "Secale" : $html .= "<table id='tb_Secale'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>
                                TOTAL<td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS
                            <td  dir='ltr' class='s1'>FPS<td  dir='ltr' class='s1'>FPCAT</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Secale_cereale_afghanicum
                            <td  class='s3'>40<td  class='s3'>14<td  class='s3'>54<td  class='s4'>2.6<td  dir='ltr' class='s5'>NA
                            <td  dir='ltr' class='s5'>NA<td  class='s4'>2.6<td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s2'>Secale_cereale_ancestrale<td  class='s3'>22<td  class='s3'>11
                            <td  class='s3'>33<td  class='s4'>3.3<td  class='s4'>0.0<td  class='s4'>0.0<td  class='s4'>1.1
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Secale_cereale_dighoricum
                            <td  class='s3'>4<td  class='s3'>5<td  class='s3'>9<td  class='s4'>5.6<td  dir='ltr' class='s5'>NA
                            <td  dir='ltr' class='s5'>NA<td  class='s4'>5.6<td  dir='ltr' class='s6'>LPS</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s2'>Secale_cereale_segetale<td  class='s3'>56<td  class='s3'>51
                            <td  class='s3'>107<td  class='s4'>4.8<td  class='s4'>0.3<td  class='s4'>8.5<td  class='s4'>4.5
                            <td  dir='ltr' class='s6'>MPS</tr>
                    </table>";
            break;
        case "Sorghum" : $html .= "<table id='tb_Sorghum'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS
                            <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS
                            <td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS<td  dir='ltr' class='s1'>FPCAT</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_angustum<td  class='s4'>65<td  class='s4'>11
                            <td  class='s4'>76<td  class='s5'>1.4<td  class='s5'>0.0<td  class='s5'>0.0<td  class='s5'>0.5
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_bicolor_drummondii
                            <td  class='s4'>214<td  class='s4'>176<td  class='s4'>390<td  class='s5'>4.5<td  class='s5'>10.0
                            <td  class='s5'>5.7<td  class='s5'>6.7<td  dir='ltr' class='s6'>LPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Sorghum_bicolor_verticilliflorum<td  class='s4'>797<td  class='s4'>167
                            <td  class='s4'>964<td  class='s5'>1.7<td  class='s5'>0.4<td  class='s5'>6.1<td  class='s5'>2.7
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_ecarinatum
                            <td  class='s4'>28<td  class='s4'>13<td  class='s4'>41<td  class='s5'>3.2<td  class='s5'>0.0
                            <td  class='s5'>0.0<td  class='s5'>1.1<td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Sorghum_exstans<td  class='s4'>71<td  class='s4'>4<td  class='s4'>75
                            <td  class='s5'>0.5<td  class='s5'>0.0<td  class='s5'>0.0<td  class='s5'>0.2<td  dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_halepense<td  class='s4'>5015<td  class='s4'>66
                            <td  class='s4'>5081<td  class='s5'>0.1<td  class='s5'>0.4<td  class='s5'>5.4<td  class='s5'>2.0
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_interjectum
                            <td  class='s4'>118<td  class='s4'>23<td  class='s4'>141<td  class='s5'>1.6<td  class='s5'>0.0
                            <td  class='s5'>0.0<td  class='s5'>0.5<td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Sorghum_intrans<td  class='s4'>290<td  class='s4'>34<td  class='s4'>324
                            <td  class='s5'>1.0<td  class='s5'>0.0<td  class='s5'>0.0<td  class='s5'>0.3<td  dir='ltr' class='s6'>HPS</tr>
                        <tr><td  dir='ltr' class='s3'>Sorghum_laxiflorum<td  class='s4'>122<td  class='s4'>27<td  class='s4'>149
                            <td  class='s5'>1.8<td  class='s5'>0.1<td  class='s5'>1.6<td  class='s5'>1.2<td  dir='ltr' class='s6'>
                                HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_macrospermum<td  class='s4'>47
                            <td  class='s4'>3<td  class='s4'>50<td  class='s5'>0.6<td  class='s5'>0.0<td  class='s5'>0.0
                            <td  class='s5'>0.2<td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>
                                Sorghum_matarankense<td  class='s4'>49<td  class='s4'>10<td  class='s4'>59<td  class='s5'>1.7
                            <td  class='s5'>0.0<td  class='s5'>0.0<td  class='s5'>0.6<td  dir='ltr' class='s6'>HPS</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_nitidum<td  class='s4'>339<td  class='s4'>13
                            <td  class='s4'>352<td  class='s5'>0.4<td  class='s5'>0.0<td  class='s5'>1.6<td  class='s5'>0.7
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_propinquum
                            <td  class='s4'>131<td  class='s4'>3<td  class='s4'>134<td  class='s5'>0.2<td  class='s5'>0.0
                            <td  class='s5'>0.0<td  class='s5'>0.1<td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Sorghum_purpureosericeum<td  class='s4'>49<td  class='s4'>13
                            <td  class='s4'>62<td  class='s5'>2.1<td  class='s5'>0.1<td  class='s5'>1.2<td  class='s5'>1.1
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_stipoideum
                            <td  class='s4'>552<td  class='s4'>53<td  class='s4'>605<td  class='s5'>0.9<td  class='s5'>0.3
                            <td  class='s5'>6.7<td  class='s5'>2.6<td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Sorghum_timorense<td  class='s4'>376<td  class='s4'>46<td  class='s4'>
                                422<td  class='s5'>1.1<td  class='s5'>0.1<td  class='s5'>3.3<td  class='s5'>1.5
                            <td  dir='ltr' class='s6'>HPS</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Sorghum_versicolor
                            <td  class='s4'>24<td  class='s4'>15<td  class='s4'>39<td  class='s5'>3.8<td  class='s5'>0.1
                            <td  class='s5'>6.2<td  class='s5'>3.4<td  dir='ltr' class='s6'>MPS</tr>
                    </table>";
            break;
        case "Vicia" : $html .= "<table id='tb_Vicia'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>G
                            <td  dir='ltr' class='s1'>TOTAL<td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS
                            <td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>FPS<td  dir='ltr' class='s1'>FPCAT
                            <td  dir='ltr' class='s1'>notes</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_barbazitae
                            <td  class='s4'>6<td  class='s4'>2<td  class='s4'>8<td  class='s5'>2.5<td  class='s5'>10.0
                            <td  class='s5'>4.4<td  class='s5'>5.6<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Vicia_faba_faba<td  class='s4'>0<td  class='s4'>0<td  class='s4'>0
                            <td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_faba_paucijuga<td  class='s4'>0<td  class='s4'>0
                            <td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_grandiflora<td  class='s4'>252<td  class='s4'>62
                            <td  class='s4'>314<td  class='s5'>2.0<td  class='s5'>0.8<td  class='s5'>7.9<td  class='s5'>3.6
                            <td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_pyrenaica
                            <td  class='s4'>139<td  class='s4'>4<td  class='s4'>143<td  class='s5'>0.3<td  class='s5'>0.0
                            <td  class='s5'>0.0<td  class='s5'>0.1<td  dir='ltr' class='s6'>HPS<td ></tr><tr><td  dir='ltr' class='s3'>Vicia_qatmensis
                            <td  class='s4'>0<td  class='s4'>4<td  class='s4'>4<td  class='s5'>10.0<td  class='s5'>10.0
                            <td  class='s5'>7.7<td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_sativa_amphicarpa<td  class='s4'>23
                            <td  class='s4'>38<td  class='s4'>61<td  class='s5'>6.2<td  class='s5'>1.3<td  class='s5'>8.3
                            <td  class='s5'>5.3<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_sativa_devia
                            <td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS
                            <td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_sativa_incisa
                            <td  class='s4'>21<td  class='s4'>6<td  class='s4'>27<td  class='s5'>2.2<td  class='s5'>10.0
                            <td  class='s5'>3.1<td  class='s5'>5.1<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                            <td  dir='ltr' class='s3'>Vicia_sativa_macrocarpa<td  class='s4'>12<td  class='s4'>20
                            <td  class='s4'>32<td  class='s5'>6.3<td  class='s5'>0.1<td  class='s5'>4.6<td  class='s5'>3.7
                            <td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vicia_sativa_nigra
                            <td  class='s4'>5347<td  class='s4'>243<td  class='s4'>5590<td  class='s5'>0.4<td  class='s5'>1.0
                            <td  class='s5'>10.0<td  class='s5'>3.8<td  dir='ltr' class='s6'>MPS<td ></tr>
                    </table>";
            break;
        case "Vigna" : $html .= "<table id='tb_Vigna'>
                        <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                            <td  dir='ltr' class='s2'>SRS<td  dir='ltr' class='s2'>GRS<td  dir='ltr' class='s2'>ERS<td  dir='ltr' class='s2'>
                                FPS<td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>crop_code<td  dir='ltr' class='s1'>notes
                        </tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_hosei<td  class='s4'>83<td  class='s4'>19
                            <td  class='s4'>102<td  class='s5'>1.9<td  class='s5'>0.0<td  class='s5'>10.0<td  class='s5'>4.0
                            <td  dir='ltr' class='s6'>MPS<td  dir='ltr' class='s6'>bambara<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_keraudrenii<td  class='s4'>29<td  class='s4'>0
                            <td  class='s4'>29<td  class='s5'>0.0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA
                            <td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>cowpea<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_monantha<td  class='s4'>14<td  class='s4'>0
                            <td  class='s4'>14<td  class='s5'>0.0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA
                            <td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>cowpea<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_schlecteri<td  class='s4'>0<td  class='s4'>0
                            <td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>cowpea
                            <td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_subterranea_spontanea
                            <td  class='s4'>16<td  class='s4'>0<td  class='s4'>16<td  class='s5'>0.0<td  class='s5'>0.0
                            <td  dir='ltr' class='s7'>NA<td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>
                                bambara<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_aduensis<td  class='s4'>4
                            <td  class='s4'>0<td  class='s4'>4<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>cowpea<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_alba<td  class='s4'>0<td  class='s4'>0
                            <td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>cowpea<td >
                        </tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_baoulensis<td  class='s4'>4<td  class='s4'>15<td  class='s4'>19<td  class='s5'>7.9
                            <td  class='s5'>0.3<td  class='s5'>10.0<td  class='s5'>6.1<td  dir='ltr' class='s6'>LPS
                            <td  dir='ltr' class='s6'>cowpea<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_burundiensis
                            <td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA
                            <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS
                            <td  dir='ltr' class='s6'>cowpea<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_dekindtiana<td  class='s4'>1071<td  class='s4'>747
                            <td  class='s4'>1818<td  class='s5'>4.1<td  class='s5'>0.3<td  class='s5'>10.0<td  class='s5'>4.8
                            <td  dir='ltr' class='s6'>MPS<td  dir='ltr' class='s6'>cowpea<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_letouzeyi<td  class='s4'>13<td  class='s4'>8
                            <td  class='s4'>21<td  class='s5'>3.8<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  class='s5'>3.8
                            <td  dir='ltr' class='s6'>MPS<td  dir='ltr' class='s6'>cowpea<td ></tr>
                        <tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_pawekiae<td  class='s4'>66<td  class='s4'>6<td  class='s4'>72
                            <td  class='s5'>0.8<td  class='s5'>0.0<td  class='s5'>10.0<td  class='s5'>3.6<td  dir='ltr' class='s6'>MPS
                            <td  dir='ltr' class='s6'>cowpea<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_pubescens<td  class='s4'>43<td  class='s4'>51
                            <td  class='s4'>94<td  class='s5'>5.4<td  class='s5'>0.0<td  class='s5'>10.0<td  class='s5'>5.2<td  dir='ltr' class='s6'>LPS
                            <td  dir='ltr' class='s6'>cowpea<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_stenophylla<td  class='s4'>452<td  class='s4'>160
                            <td  class='s4'>612<td  class='s5'>2.6<td  class='s5'>0.1<td  class='s5'>10.0<td  class='s5'>4.2
                            <td  dir='ltr' class='s6'>MPS<td  dir='ltr' class='s6'>cowpea<td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_tenuis
                            <td  class='s4'>148<td  class='s4'>63<td  class='s4'>211<td  class='s5'>3.0<td  class='s5'>0.1
                            <td  class='s5'>10.0<td  class='s5'>4.4<td  dir='ltr' class='s6'>MPS<td  dir='ltr' class='s6'>cowpea
                            <td ></tr><tr dir='ltr'><td  dir='ltr' class='s3'>Vigna_unguiculata_unguiculata_spontanea
                            <td  class='s4'>22<td  class='s4'>44<td  class='s4'>66<td  class='s5'>6.7<td  class='s5'>0.0
                            <td  class='s5'>10.0<td  class='s5'>5.6<td  dir='ltr' class='s6'>LPS<td  dir='ltr' class='s6'>cowpea
                            <td ></tr>
                    </table>";
            break;
        case "Wheat" : $html .= "<table id='tb_Wheat'>
                    <tr dir='ltr' id='table_header'><td  dir='ltr' class='s0'>TAXON<td  dir='ltr' class='s1'>HS<td  dir='ltr' class='s1'>GS<td  dir='ltr' class='s1'>TOTAL
                        <td  dir='ltr' class='s1'>SRS<td  dir='ltr' class='s1'>GRS<td  dir='ltr' class='s1'>ERS<td  dir='ltr' class='s1'>FPS
                        <td  dir='ltr' class='s1'>FPCAT<td  dir='ltr' class='s1'>notes</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_bicornis<td  class='s4'>68<td  class='s4'>643<td  class='s4'>711<td  class='s5'>9.0<td  class='s5'>1.3<td  class='s5'>7.7<td  class='s5'>6.0<td  dir='ltr' class='s6'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_bicornis_anathera<td  class='s4'>1<td  class='s4'>0
                        <td  class='s4'>1<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                        <td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_bicornis_bicornis
                        <td  class='s4'>1<td  class='s4'>5<td  class='s4'>6<td  class='s5'>8.3<td  dir='ltr' class='s7'>NA
                        <td  dir='ltr' class='s7'>NA<td  class='s5'>8.3<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_biuncialis<td  class='s4'>166<td  class='s4'>1064<td  class='s4'>1230
                        <td  class='s5'>8.7<td  class='s5'>3.8<td  class='s5'>10.0<td  class='s5'>7.5<td  dir='ltr' class='s6'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_columnaris<td  class='s4'>39<td  class='s4'>236<td  class='s4'>275<td  class='s5'>8.6<td  class='s5'>2.1
                        <td  class='s5'>10.0<td  class='s5'>6.9<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_comosa<td  class='s4'>0<td  class='s4'>20
                        <td  class='s4'>20<td  class='s5'>10.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  class='s5'>10.0<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_comosa_comosa<td  class='s4'>3<td  class='s4'>19<td  class='s4'>22<td  class='s5'>8.6<td  class='s5'>7.0<td  class='s5'>6.8<td  class='s5'>7.5<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_comosa_subventricosa<td  class='s4'>41<td  class='s4'>167<td  class='s4'>208<td  class='s5'>8.0<td  class='s5'>2.4<td  class='s5'>10.0<td  class='s5'>6.8<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_crassa<td  class='s4'>97<td  class='s4'>242<td  class='s4'>339<td  class='s5'>7.1<td  class='s5'>1.0<td  class='s5'>10.0<td  class='s5'>6.0<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_cylindrica
                        <td  class='s4'>510<td  class='s4'>1674<td  class='s4'>2184<td  class='s5'>7.7<td  class='s5'>4.5<td  class='s5'>10.0<td  class='s5'>7.4<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_geniculata<td  class='s4'>384<td  class='s4'>1040<td  class='s4'>1424<td  class='s5'>7.3
                        <td  class='s5'>5.0<td  class='s5'>10.0<td  class='s5'>7.4<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_juvenalis<td  class='s4'>14<td  class='s4'>44<td  class='s4'>58<td  class='s5'>7.6<td  class='s5'>0.3<td  class='s5'>8.3<td  class='s5'>5.4<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>
                            Aegilops_kotschyi<td  class='s4'>159<td  class='s4'>309<td  class='s4'>468<td  class='s5'>6.6<td  class='s5'>0.4<td  class='s5'>7.2<td  class='s5'>4.7<td  dir='ltr' class='s6'>MPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_longissima<td  class='s4'>503<td  class='s4'>1951
                        <td  class='s4'>2454<td  class='s5'>8.0<td  class='s5'>5.3<td  class='s5'>10.0<td  class='s5'>7.8<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_markgrafii<td  class='s4'>50<td  class='s4'>303<td  class='s4'>353<td  class='s5'>8.6<td  class='s5'>4.2<td  class='s5'>10.0<td  class='s5'>7.6
                        <td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_neglecta<td  class='s4'>296<td  class='s4'>1567<td  class='s4'>1863<td  class='s5'>8.4<td  class='s5'>3.0<td  class='s5'>10.0<td  class='s5'>7.1<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_peregrina<td  class='s4'>374<td  class='s4'>1414<td  class='s4'>1788
                        <td  class='s5'>7.9<td  class='s5'>3.5<td  class='s5'>10.0<td  class='s5'>7.1<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_peregrina_brachyathera<td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>
                            no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_peregrina_peregrina<td  class='s4'>0<td  class='s4'>3<td  class='s4'>3<td  class='s5'>10.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  class='s5'>0.0<td  dir='ltr' class='s6'>HPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_searsii<td  class='s4'>157<td  class='s4'>503<td  class='s4'>660<td  class='s5'>7.6<td  class='s5'>8.6<td  class='s5'>10.0<td  class='s5'>8.8<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_sharonensis
                        <td  class='s4'>430<td  class='s4'>3200<td  class='s4'>3630<td  class='s5'>8.8<td  class='s5'>0.1
                        <td  class='s5'>10.0<td  class='s5'>6.3<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_speltoides<td  class='s4'>522<td  class='s4'>2196<td  class='s4'>
                            2718<td  class='s5'>8.1<td  class='s5'>3.4<td  class='s5'>10.0<td  class='s5'>7.2<td  dir='ltr' class='s6'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_speltoides_ligustica<td  class='s4'>44<td  class='s4'>
                            141<td  class='s4'>185<td  class='s5'>7.6<td  class='s5'>0.4<td  class='s5'>8.8<td  class='s5'>5.6
                        <td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_speltoides_speltoides
                        <td  class='s4'>89<td  class='s4'>295<td  class='s4'>384<td  class='s5'>7.7<td  class='s5'>1.2
                        <td  class='s5'>10.0<td  class='s5'>6.3<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_tauschii<td  class='s4'>372<td  class='s4'>1910<td  class='s4'>2282
                        <td  class='s5'>8.4<td  class='s5'>2.9<td  class='s5'>10.0<td  class='s5'>7.1<td  dir='ltr' class='s6'>
                            LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_triuncialis<td  class='s4'>929
                        <td  class='s4'>3604<td  class='s4'>4533<td  class='s5'>8.0<td  class='s5'>5.8<td  class='s5'>10.0
                        <td  class='s5'>7.9<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_triuncialis_persica<td  class='s4'>9<td  class='s4'>23
                        <td  class='s4'>32<td  class='s5'>7.2<td  class='s5'>1.1<td  class='s5'>6.8<td  class='s5'>5.0
                        <td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_triuncialis_triuncialis
                        <td  class='s4'>14<td  class='s4'>164<td  class='s4'>178<td  class='s5'>9.2<td  class='s5'>0.4
                        <td  class='s5'>6.6<td  class='s5'>5.4<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_umbellulata<td  class='s4'>100<td  class='s4'>438<td  class='s4'>538
                        <td  class='s5'>8.1<td  class='s5'>4.0<td  class='s5'>10.0<td  class='s5'>7.4<td  dir='ltr' class='s6'>LPS
                        <td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_uniaristata<td  class='s4'>12
                        <td  class='s4'>35<td  class='s4'>47<td  class='s5'>7.4<td  class='s5'>0.9<td  class='s5'>7.1
                        <td  class='s5'>5.1<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Aegilops_vavilovii<td  class='s4'>8<td  class='s4'>136<td  class='s4'>144
                        <td  class='s5'>9.4<td  class='s5'>1.3<td  class='s5'>7.5<td  class='s5'>6.1<td  dir='ltr' class='s6'>
                            LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Aegilops_ventricosa<td  class='s4'>121
                        <td  class='s4'>169<td  class='s4'>290<td  class='s5'>5.8<td  class='s5'>0.8<td  class='s5'>10.0
                        <td  class='s5'>5.6<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Amblyopyrum_muticum
                        <td  class='s4'>27<td  class='s4'>33<td  class='s4'>60<td  class='s5'>5.5<td  class='s5'>2.8<td  class='s5'>7.3<td  class='s5'>5.2<td  dir='ltr' class='s6'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Amblyopyrum_muticum_loliaceum<td  class='s4'>9<td  class='s4'>1<td  class='s4'>10<td  class='s5'>1.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  class='s5'>1.0<td  dir='ltr' class='s6'>HPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Amblyopyrum_muticum_muticum<td  class='s4'>12<td  class='s4'>33<td  class='s4'>45<td  class='s5'>7.3<td  class='s5'>0.6<td  class='s5'>7.3<td  class='s5'>5.1<td  dir='ltr' class='s6'>LPS<td ></tr>
                    <tr dir='ltr'><td  dir='ltr' class='s2'>Triticum_aestivum_tibeticum<td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Triticum_aestivum_yunnanense<td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Triticum_boeoticum<td  class='s4'>0<td  class='s4'>0<td  class='s4'>0<td  class='s5'>0.0<td  dir='ltr' class='s7'>NA
                        <td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s6'>HPS<td  dir='ltr' class='s6'>no occurrence data; not assessed</tr><tr dir='ltr'><td  dir='ltr' class='s2'>Triticum_monococcum<td  class='s4'>141
                        <td  class='s4'>845<td  class='s4'>986<td  class='s5'>8.6<td  class='s5'>3.0<td  class='s5'>10.0<td  class='s5'>7.2<td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Triticum_monococcum_aegilopoides<td  class='s4'>168<td  class='s4'>2752
                        <td  class='s4'>2920<td  class='s5'>9.4<td  class='s5'>5.9<td  class='s5'>10.0<td  class='s5'>8.5
                        <td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Triticum_timopheevii
                        <td  class='s4'>10<td  class='s4'>160<td  class='s4'>170<td  class='s5'>9.4<td  class='s5'>3.7
                        <td  class='s5'>10.0<td  class='s5'>7.7<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Triticum_timopheevii_armeniacum<td  class='s4'>28<td  class='s4'>826
                        <td  class='s4'>854<td  class='s5'>9.7<td  class='s5'>1.3<td  class='s5'>9.3<td  class='s5'>6.7
                        <td  dir='ltr' class='s6'>LPS<td ></tr><tr dir='ltr'><td  dir='ltr' class='s2'>Triticum_turgidum_dicoccoides
                        <td  class='s4'>951<td  class='s4'>5089<td  class='s4'>6040<td  class='s5'>8.4<td  class='s5'>4.6
                        <td  class='s5'>10.0<td  class='s5'>7.7<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Triticum_turgidum_paleocolchicum<td  class='s4'>0<td  class='s4'>23
                        <td  class='s4'>23<td  class='s5'>10.0<td  dir='ltr' class='s7'>NA<td  dir='ltr' class='s7'>NA
                        <td  class='s5'>10.0<td  dir='ltr' class='s6'>NFCR<td ></tr><tr dir='ltr'>
                        <td  dir='ltr' class='s2'>Triticum_urartu<td  class='s4'>212<td  class='s4'>1392<td  class='s4'>1604
                        <td  class='s5'>8.7<td  class='s5'>4.8<td  class='s5'>10.0<td  class='s5'>7.8
                        <td  dir='ltr' class='s6'>NFCR<td ></tr>
                </table>";
            break;
    }
    $head .= "</body></html>";

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream($_GET['term'] . ".pdf");
}
?>
<? ob_flush(); ?>