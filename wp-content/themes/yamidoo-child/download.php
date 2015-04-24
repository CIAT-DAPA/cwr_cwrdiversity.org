<? ob_start(); ?>
<?php

// En esta pagina se gestiona la descarga de archivos dependiendo de la opcion
if (isset($_GET['term'])) {
    $term = $_GET['term'];
    $filename = $term . "-" . date("d-M-Y H-i-s") . ".csv";
    $file = fopen($filename, "w");
    $sep = ",";
    $header = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" .
            $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n";
    $data = "";

    switch ($_GET['term']) {
        case "Avena":
            $data = $header;
            $data .= "Avena_abyssinica" . $sep . "909" . $sep . "511" . $sep . "1420" . $sep . "3.6" . $sep . "0.5" . $sep . "10" . $sep . "4.7" . $sep . "MPS" . $sep . "\n" .
                    "Avena_atherantha" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "0" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Avena_byzantina" . $sep . "2333" . $sep . "528" . $sep . "2861" . $sep . "1.8" . $sep . "0" . $sep . "NA" . $sep . "0.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Avena_fatua" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "LPS" . $sep . "excess data; analysis silenced" . "\n" .
                    "Avena_hybrida" . $sep . "125" . $sep . "25" . $sep . "150" . $sep . "1.7" . $sep . "0.1" . $sep . "10" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Avena_insularis" . $sep . "20" . $sep . "5" . $sep . "25" . $sep . "2" . $sep . "0" . $sep . "NA" . $sep . "1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Avena_macrostachya" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Avena_maroccana" . $sep . "138" . $sep . "136" . $sep . "274" . $sep . "5" . $sep . "10" . $sep . "10" . $sep . "8.3" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Avena_murphyi" . $sep . "82" . $sep . "88" . $sep . "170" . $sep . "5.2" . $sep . "6.5" . $sep . "10" . $sep . "7.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Avena_occidentalis" . $sep . "7" . $sep . "57" . $sep . "64" . $sep . "8.9" . $sep . "0.2" . $sep . "10" . $sep . "6.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Avena_pilosa" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Avena_prostrata" . $sep . "47" . $sep . "7" . $sep . "54" . $sep . "1.3" . $sep . "0.1" . $sep . "10" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Avena_sterilis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "LPS" . $sep . "excess data; analysis silenced" . "\n" .
                    "Avena_strigosa" . $sep . "1551" . $sep . "249" . $sep . "1800" . $sep . "1.4" . $sep . "0" . $sep . "10" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Avena_trichophylla" . $sep . "8" . $sep . "2" . $sep . "10" . $sep . "2" . $sep . "0" . $sep . "NA" . $sep . "1" . $sep . "HPS" . $sep . "";
            break;
        case "Cajanus":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" .
                    "Cajanus_acutifolius" . $sep . "492" . $sep . "173" . $sep . "665" . $sep . "2.6" . $sep . "0.1" . $sep . "2.8" . $sep . "1.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_albicans" . $sep . "141" . $sep . "21" . $sep . "162" . $sep . "1.3" . $sep . "0.3" . $sep . "10" . $sep . "3.4" . $sep . "MPS" . $sep . "" . "\n" .
                    "Cajanus_cajanifolius" . $sep . "42" . $sep . "2" . $sep . "44" . $sep . "0.5" . $sep . "NA" . $sep . "0" . $sep . "0.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_cinereus" . $sep . "268" . $sep . "6" . $sep . "274" . $sep . "0.2" . $sep . "0" . $sep . "0" . $sep . "0.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_confertiflorus" . $sep . "122" . $sep . "1" . $sep . "123" . $sep . "0.1" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_crassus" . $sep . "17" . $sep . "19" . $sep . "36" . $sep . "5.3" . $sep . "0" . $sep . "1.3" . $sep . "2.2" . $sep . "HPS" . $sep . "\n" .
                    "Cajanus_lanceolatus" . $sep . "133" . $sep . "5" . $sep . "138" . $sep . "0.4" . $sep . "0.3" . $sep . "3.4" . $sep . "1.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_latisepalus" . $sep . "228" . $sep . "4" . $sep . "232" . $sep . "0.2" . $sep . "0" . $sep . "0" . $sep . "0.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_lineatus" . $sep . "163" . $sep . "6" . $sep . "169" . $sep . "0.4" . $sep . "NA" . $sep . "NA" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_mollis" . $sep . "4" . $sep . "8" . $sep . "12" . $sep . "6.7" . $sep . "NA" . $sep . "NA" . $sep . "6.7" . $sep . "LPS" . $sep . "" . "\n" .
                    "Cajanus_platycarpus" . $sep . "7" . $sep . "21" . $sep . "28" . $sep . "7.5" . $sep . "0.1" . $sep . "3.5" . $sep . "3.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Cajanus_reticulatus" . $sep . "462" . $sep . "21" . $sep . "483" . $sep . "0.4" . $sep . "0" . $sep . "8" . $sep . "2.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_scarabaeoides" . $sep . "341" . $sep . "218" . $sep . "559" . $sep . "3.9" . $sep . "0.6" . $sep . "8.5" . $sep . "4.3" . $sep . "MPS" . $sep . "" . "\n" .
                    "Cajanus_sericeus" . $sep . "83" . $sep . "4" . $sep . "87" . $sep . "0.5" . $sep . "0.1" . $sep . "4.7" . $sep . "1.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_trinervius" . $sep . "130" . $sep . "0" . $sep . "130" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Cajanus_volubilis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed";
            break;
        case "Cicer":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Cicer_bijugum" . $sep . "11" . $sep . "44" . $sep . "55" . $sep . "8.0" . $sep . "0.7" . $sep . "7.3" . $sep . "5.3" . $sep . "LPS" . "\n" .
                    "Cicer_echinospermum" . $sep . "43" . $sep . "29" . $sep . "72" . $sep . "4.0" . $sep . "1.3" . $sep . "8.6" . $sep . "4.7" . $sep . "MPS" . "\n" .
                    "Cicer_judaicum" . $sep . "30" . $sep . "93" . $sep . "123" . $sep . "7.6" . $sep . "10.0" . $sep . "10.0" . $sep . "9.2" . $sep . "NFCR" . "\n" .
                    "Cicer_pinnatifidum" . $sep . "45" . $sep . "88" . $sep . "133" . $sep . "6.6" . $sep . "2.7" . $sep . "10.0" . $sep . "6.4" . $sep . "LPS" . "\n";
            break;
        case "Daucus":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Daucus_capillifolius" . $sep . "12" . $sep . "2" . $sep . "14" . $sep . "1.4" . $sep . "0.0" . $sep . "0.0" . $sep . "0.5" . $sep . "HPS" . "\n" .
                    "Daucus_carota_azoricus" . $sep . "45" . $sep . "2" . $sep . "47" . $sep . "0.4" . $sep . "0.0" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . "\n" .
                    "Daucus_carota_cantabricus" . $sep . "6" . $sep . "0" . $sep . "6" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Daucus_carota_carota" . $sep . "494" . $sep . "187" . $sep . "681" . $sep . "2.7" . $sep . "0.7" . $sep . "8.6" . $sep . "4.0" . $sep . "MPS" . "\n" .
                    "Daucus_carota_commutatus" . $sep . "17" . $sep . "10" . $sep . "27" . $sep . "3.7" . $sep . "1.3" . $sep . "7.7" . $sep . "4.2" . $sep . "MPS" . "\n" .
                    "Daucus_carota_drepanensis" . $sep . "23" . $sep . "0" . $sep . "23" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Daucus_carota_fontanesii" . $sep . "55" . $sep . "2" . $sep . "57" . $sep . "0.4" . $sep . "0.1" . $sep . "9.3" . $sep . "3.2" . $sep . "MPS" . "\n" .
                    "Daucus_carota_gadecaei" . $sep . "0" . $sep . "3" . $sep . "3" . $sep . "10.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Daucus_carota_gummifer" . $sep . "211" . $sep . "15" . $sep . "226" . $sep . "0.7" . $sep . "0.1" . $sep . "5.2" . $sep . "2.0" . $sep . "HPS" . "\n" .
                    "Daucus_carota_halophilus" . $sep . "83" . $sep . "5" . $sep . "88" . $sep . "0.6" . $sep . "0.0" . $sep . "0.0" . $sep . "0.2" . $sep . "HPS" . "\n" .
                    "Daucus_carota_hispanicus" . $sep . "29" . $sep . "4" . $sep . "33" . $sep . "1.2" . $sep . "NA" . $sep . "NA" . $sep . "1.2" . $sep . "HPS" . "\n" .
                    "Daucus_carota_major" . $sep . "12" . $sep . "11" . $sep . "23" . $sep . "4.8" . $sep . "0.7" . $sep . "6.3" . $sep . "3.9" . $sep . "MPS" . "\n" .
                    "Daucus_carota_majoricus" . $sep . "7" . $sep . "0" . $sep . "7" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Daucus_carota_maritimus" . $sep . "213" . $sep . "8" . $sep . "221" . $sep . "0.4" . $sep . "0.1" . $sep . "4.7" . $sep . "1.7" . $sep . "HPS" . "\n" .
                    "Daucus_carota_maximus" . $sep . "160" . $sep . "25" . $sep . "185" . $sep . "1.4" . $sep . "0.1" . $sep . "7.1" . $sep . "2.8" . $sep . "HPS" . "\n" .
                    "Daucus_carota_parviflorus" . $sep . "13" . $sep . "0" . $sep . "13" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Daucus_carota_rupestris" . $sep . "1" . $sep . "0" . $sep . "1" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Daucus_syrticus" . $sep . "43" . $sep . "15" . $sep . "58" . $sep . "2.6" . $sep . "0.3" . $sep . "5.0" . $sep . "2.6" . $sep . "HPS" . "\n" .
                    "Tornabenea_annua" . $sep . "2" . $sep . "0" . $sep . "2" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Tornabenea_insularis" . $sep . "4" . $sep . "0" . $sep . "4" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Tornabenea_tenuissima" . $sep . "3" . $sep . "0" . $sep . "3" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n";
            break;
        case "Solanum_Eggplant":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Solanum_aculeatissimum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Solanum_adoense" . $sep . "52" . $sep . "0" . $sep . "52" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_aethiopicum" . $sep . "216" . $sep . "193" . $sep . "409" . $sep . "4.7" . $sep . "0.1" . $sep . "4.0" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_agnewiorum" . $sep . "12" . $sep . "0" . $sep . "12" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_aldabrense" . $sep . "33" . $sep . "2" . $sep . "35" . $sep . "0.6" . $sep . "NA" . $sep . "NA" . $sep . "0.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_anguivi" . $sep . "997" . $sep . "108" . $sep . "1105" . $sep . "1.0" . $sep . "0.0" . $sep . "2.7" . $sep . "1.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_anomalum" . $sep . "70" . $sep . "0" . $sep . "70" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_asperolanatum" . $sep . "555" . $sep . "0" . $sep . "555" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_aureitomentosum" . $sep . "25" . $sep . "0" . $sep . "25" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_burchellii" . $sep . "40" . $sep . "4" . $sep . "44" . $sep . "0.9" . $sep . "0.0" . $sep . "0.0" . $sep . "0.3" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_campylacanthum" . $sep . "1043" . $sep . "61" . $sep . "1104" . $sep . "0.6" . $sep . "0.0" . $sep . "0.0" . $sep . "0.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_capense" . $sep . "67" . $sep . "18" . $sep . "85" . $sep . "2.1" . $sep . "0.0" . $sep . "0.0" . $sep . "0.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_catombelense" . $sep . "92" . $sep . "8" . $sep . "100" . $sep . "0.8" . $sep . "0.1" . $sep . "4.1" . $sep . "1.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_cerasiferum" . $sep . "56" . $sep . "5" . $sep . "61" . $sep . "0.8" . $sep . "0.0" . $sep . "0.0" . $sep . "0.3" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_cumingii" . $sep . "13" . $sep . "0" . $sep . "13" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_cyaneopurpureum" . $sep . "34" . $sep . "1" . $sep . "35" . $sep . "0.3" . $sep . "NA" . $sep . "NA" . $sep . "0.3" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_dasyphyllum" . $sep . "226" . $sep . "29" . $sep . "255" . $sep . "1.1" . $sep . "0.0" . $sep . "0.0" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_deflexicarpum" . $sep . "3" . $sep . "0" . $sep . "3" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_glabratum" . $sep . "92" . $sep . "0" . $sep . "92" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_grandiflorum" . $sep . "138" . $sep . "0" . $sep . "138" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_hastifolium" . $sep . "137" . $sep . "0" . $sep . "137" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_hovei" . $sep . "9" . $sep . "0" . $sep . "9" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_humile" . $sep . "57" . $sep . "15" . $sep . "72" . $sep . "2.1" . $sep . "0.1" . $sep . "3.3" . $sep . "1.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_inaequiradians" . $sep . "11" . $sep . "0" . $sep . "11" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_incanum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Solanum_insanum" . $sep . "71" . $sep . "9" . $sep . "80" . $sep . "1.1" . $sep . "NA" . $sep . "NA" . $sep . "1.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_lamprocarpum" . $sep . "10" . $sep . "0" . $sep . "10" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_lichtensteinii" . $sep . "103" . $sep . "15" . $sep . "118" . $sep . "1.3" . $sep . "0.0" . $sep . "4.3" . $sep . "1.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_lidii" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Solanum_linnaeanum" . $sep . "3409" . $sep . "56" . $sep . "3465" . $sep . "0.2" . $sep . "1.0" . $sep . "6.5" . $sep . "2.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_litoraneum" . $sep . "9" . $sep . "0" . $sep . "9" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_macracanthum" . $sep . "24" . $sep . "0" . $sep . "24" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_macrocarpon" . $sep . "67" . $sep . "36" . $sep . "103" . $sep . "3.5" . $sep . "0.0" . $sep . "2.5" . $sep . "2.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_malindiense" . $sep . "18" . $sep . "0" . $sep . "18" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_marginatum" . $sep . "101" . $sep . "3" . $sep . "104" . $sep . "0.3" . $sep . "0.0" . $sep . "4.7" . $sep . "1.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_mauense" . $sep . "48" . $sep . "0" . $sep . "48" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_multiflorum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurance data; not assesed" . "\n" .
                    "Solanum_nigriviolaceum" . $sep . "33" . $sep . "4" . $sep . "37" . $sep . "1.1" . $sep . "0.0" . $sep . "0.0" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_platacanthum" . $sep . "16" . $sep . "1" . $sep . "17" . $sep . "0.6" . $sep . "NA" . $sep . "NA" . $sep . "0.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_polhillii" . $sep . "56" . $sep . "0" . $sep . "56" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_richardii" . $sep . "112" . $sep . "2" . $sep . "114" . $sep . "0.2" . $sep . "0.0" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_rubetorum" . $sep . "43" . $sep . "7" . $sep . "50" . $sep . "1.4" . $sep . "NA" . $sep . "NA" . $sep . "1.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_ruvu" . $sep . "1" . $sep . "0" . $sep . "1" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_setaceum" . $sep . "38" . $sep . "0" . $sep . "38" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_sisymbriifolium" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurance data; not assesed" . "\n" .
                    "Solanum_sodomeodes" . $sep . "25" . $sep . "0" . $sep . "25" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_stipitatostellatum" . $sep . "52" . $sep . "0" . $sep . "52" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_supinum" . $sep . "27" . $sep . "3" . $sep . "30" . $sep . "1.0" . $sep . "NA" . $sep . "NA" . $sep . "1.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_taitense" . $sep . "39" . $sep . "0" . $sep . "39" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_tomentosum" . $sep . "65" . $sep . "25" . $sep . "90" . $sep . "2.8" . $sep . "0.0" . $sep . "0.0" . $sep . "0.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_torreanum" . $sep . "17" . $sep . "0" . $sep . "17" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_torvum" . $sep . "2594" . $sep . "94" . $sep . "2688" . $sep . "0.3" . $sep . "0.1" . $sep . "5.7" . $sep . "2.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_umtuma" . $sep . "19" . $sep . "0" . $sep . "19" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_usambarense" . $sep . "42" . $sep . "0" . $sep . "42" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_usaramense" . $sep . "17" . $sep . "0" . $sep . "17" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_vespertilio" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurance data; not assesed" . "\n" .
                    "Solanum_viarum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurance data; not assesed" . "\n" .
                    "Solanum_vicinum" . $sep . "130" . $sep . "1" . $sep . "131" . $sep . "0.1" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_violaceum" . $sep . "264" . $sep . "38" . $sep . "302" . $sep . "1.3" . $sep . "0.0" . $sep . "0.0" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_zanzibarense" . $sep . "73" . $sep . "1" . $sep . "74" . $sep . "0.1" . $sep . "NA" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . $sep . "";
            break;
        case "Eleusine":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Eleusine_africana" . $sep . "132" . $sep . "3" . $sep . "135" . $sep . "0.2" . $sep . "0.0" . $sep . "3.1" . $sep . "1.1" . $sep . "HPS" . "\n" .
                    "Eleusine_floccifolia" . $sep . "63" . $sep . "2" . $sep . "65" . $sep . "0.3" . $sep . "0.2" . $sep . "5.0" . $sep . "1.8" . $sep . "HPS" . "\n" .
                    "Eleusine_indica" . $sep . "7397" . $sep . "45" . $sep . "7442" . $sep . "0.1" . $sep . "0.1" . $sep . "2.3" . $sep . "0.8" . $sep . "HPS" . "\n" .
                    "Eleusine_intermedia" . $sep . "4" . $sep . "0" . $sep . "4" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Eleusine_kigeziensis" . $sep . "7" . $sep . "6" . $sep . "13" . $sep . "4.6" . $sep . "0.9" . $sep . "5.3" . $sep . "3.6" . $sep . "MPS" . "\n" .
                    "Eleusine_tristachya" . $sep . "5425" . $sep . "23" . $sep . "5448" . $sep . "0.0" . $sep . "0.2" . $sep . "4.7" . $sep . "1.7" . $sep . "HPS";
            break;
        case "Helianthus":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "" . "\n" .
                    "Helianthus_annuus" . $sep . "2045" . $sep . "3656" . $sep . "5701" . $sep . "6.4" . $sep . "3.6" . $sep . "10.0" . $sep . "6.7" . $sep . "LPS" . $sep . "" . "\n" .
                    "Helianthus_anomalus" . $sep . "60" . $sep . "9" . $sep . "69" . $sep . "1.3" . $sep . "0.5" . $sep . "6.5" . $sep . "2.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_argophyllus" . $sep . "71" . $sep . "55" . $sep . "126" . $sep . "4.4" . $sep . "0.2" . $sep . "3.8" . $sep . "2.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_arizonensis" . $sep . "5" . $sep . "2" . $sep . "7" . $sep . "2.9" . $sep . "0.7" . $sep . "5.1" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_atrorubens" . $sep . "70" . $sep . "13" . $sep . "83" . $sep . "1.6" . $sep . "0.9" . $sep . "5.3" . $sep . "2.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_bolanderi" . $sep . "315" . $sep . "9" . $sep . "324" . $sep . "0.3" . $sep . "0.6" . $sep . "6.7" . $sep . "2.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_debilis" . $sep . "91" . $sep . "8" . $sep . "99" . $sep . "0.8" . $sep . "0.0" . $sep . "2.3" . $sep . "1.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_debilis_cucumerifolius" . $sep . "89" . $sep . "17" . $sep . "106" . $sep . "1.6" . $sep . "0.3" . $sep . "6.2" . $sep . "2.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_debilis_debilis" . $sep . "22" . $sep . "17" . $sep . "39" . $sep . "4.4" . $sep . "0.1" . $sep . "2.6" . $sep . "2.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_debilis_silvestris" . $sep . "8" . $sep . "28" . $sep . "36" . $sep . "7.8" . $sep . "2.3" . $sep . "3.3" . $sep . "4.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_debilis_tardiflorus" . $sep . "15" . $sep . "5" . $sep . "20" . $sep . "2.5" . $sep . "10.0" . $sep . "8.0" . $sep . "6.8" . $sep . "LPS" . $sep . "" . "\n" .
                    "Helianthus_debilis_vestitus" . $sep . "15" . $sep . "5" . $sep . "20" . $sep . "2.5" . $sep . "0.5" . $sep . "2.5" . $sep . "1.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_deserticola" . $sep . "42" . $sep . "16" . $sep . "58" . $sep . "2.8" . $sep . "4.0" . $sep . "10.0" . $sep . "5.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Helianthus_divaricatus" . $sep . "340" . $sep . "25" . $sep . "365" . $sep . "0.7" . $sep . "0.6" . $sep . "5.0" . $sep . "2.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_exilis" . $sep . "50" . $sep . "30" . $sep . "80" . $sep . "3.8" . $sep . "1.0" . $sep . "5.9" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_giganteus" . $sep . "218" . $sep . "26" . $sep . "244" . $sep . "1.1" . $sep . "0.3" . $sep . "6.5" . $sep . "2.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_grosseserratus" . $sep . "175" . $sep . "50" . $sep . "225" . $sep . "2.2" . $sep . "0.7" . $sep . "7.6" . $sep . "3.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_hirsutus" . $sep . "177" . $sep . "11" . $sep . "188" . $sep . "0.6" . $sep . "0.2" . $sep . "6.8" . $sep . "2.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_maximilianii" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Helianthus_neglectus" . $sep . "5" . $sep . "58" . $sep . "63" . $sep . "9.2" . $sep . "9.4" . $sep . "5.8" . $sep . "8.1" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Helianthus_niveus" . $sep . "73" . $sep . "3" . $sep . "76" . $sep . "0.4" . $sep . "0.2" . $sep . "6.5" . $sep . "2.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_niveus_canescens" . $sep . "100" . $sep . "19" . $sep . "119" . $sep . "1.6" . $sep . "0.7" . $sep . "8.3" . $sep . "3.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_niveus_niveus" . $sep . "9" . $sep . "0" . $sep . "9" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_niveus_tephrodes" . $sep . "87" . $sep . "6" . $sep . "93" . $sep . "0.6" . $sep . "0.9" . $sep . "6.7" . $sep . "2.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_paradoxus" . $sep . "58" . $sep . "0" . $sep . "58" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_pauciflorus" . $sep . "10" . $sep . "22" . $sep . "32" . $sep . "6.9" . $sep . "0.2" . $sep . "6.7" . $sep . "4.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_petiolaris" . $sep . "337" . $sep . "45" . $sep . "382" . $sep . "1.2" . $sep . "0.2" . $sep . "7.0" . $sep . "2.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Helianthus_petiolaris_fallax" . $sep . "34" . $sep . "30" . $sep . "64" . $sep . "4.7" . $sep . "1.0" . $sep . "8.3" . $sep . "4.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_petiolaris_petiolaris" . $sep . "101" . $sep . "106" . $sep . "207" . $sep . "5.1" . $sep . "1.5" . $sep . "10.0" . $sep . "5.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Helianthus_praecox" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Helianthus_praecox_hirtus" . $sep . "3" . $sep . "10" . $sep . "13" . $sep . "7.7" . $sep . "1.1" . $sep . "6.7" . $sep . "5.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Helianthus_praecox_praecox" . $sep . "0" . $sep . "14" . $sep . "14" . $sep . "10.0" . $sep . "10.0" . $sep . "8.5" . $sep . "9.5" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Helianthus_praecox_runyonii" . $sep . "5" . $sep . "28" . $sep . "33" . $sep . "8.5" . $sep . "2.1" . $sep . "6.9" . $sep . "5.8" . $sep . "LPS" . $sep . "" . "\n" .
                    "Helianthus_resinosus" . $sep . "75" . $sep . "29" . $sep . "104" . $sep . "2.8" . $sep . "0.8" . $sep . "10.0" . $sep . "4.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_salicifolius" . $sep . "42" . $sep . "40" . $sep . "82" . $sep . "4.9" . $sep . "2.9" . $sep . "5.5" . $sep . "4.4" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_silphioides" . $sep . "27" . $sep . "18" . $sep . "45" . $sep . "4.0" . $sep . "10.0" . $sep . "10.0" . $sep . "8.0" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Helianthus_strumosus" . $sep . "255" . $sep . "70" . $sep . "325" . $sep . "2.2" . $sep . "0.6" . $sep . "9.0" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Helianthus_tuberosus" . $sep . "568" . $sep . "160" . $sep . "728" . $sep . "2.2" . $sep . "0.3" . $sep . "7.5" . $sep . "3.3" . $sep . "MPS" . $sep . "";
            break;
        case "Hordeum":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Hordeum_brevisubulatum" . $sep . "56" . $sep . "36" . $sep . "92" . $sep . "3.9" . $sep . "0.2" . $sep . "4.7" . $sep . "2.9" . $sep . "HPS" . "\n" .
                    "Hordeum_bulbosum" . $sep . "375" . $sep . "321" . $sep . "696" . $sep . "4.6" . $sep . "1.3" . $sep . "10.0" . $sep . "5.3" . $sep . "LPS" . "\n" .
                    "Hordeum_chilense" . $sep . "24" . $sep . "72" . $sep . "96" . $sep . "7.5" . $sep . "2.1" . $sep . "10.0" . $sep . "6.5" . $sep . "LPS" . "\n" .
                    "Hordeum_vulgare_spontaneum" . $sep . "1507" . $sep . "11415" . $sep . "12922" . $sep . "8.8" . $sep . "3.9" . $sep . "10.0" . $sep . "7.6" . $sep . "NFCR";
            break;
        case "Ipomoea":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Ipomoea_batatas_apiculata" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Ipomoea_cordatotriloba" . $sep . "151" . $sep . "94" . $sep . "245" . $sep . "3.8" . $sep . "1.0" . $sep . "10.0" . $sep . "5.0" . $sep . "MPS" . $sep . "" . "\n" .
                    "Ipomoea_cynanchifolia" . $sep . "27" . $sep . "6" . $sep . "33" . $sep . "1.8" . $sep . "0.0" . $sep . "2.4" . $sep . "1.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_grandifolia" . $sep . "323" . $sep . "107" . $sep . "430" . $sep . "2.5" . $sep . "2.3" . $sep . "6.2" . $sep . "3.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Ipomoea_lacunosa" . $sep . "221" . $sep . "9" . $sep . "230" . $sep . "0.4" . $sep . "0.0" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_leucantha" . $sep . "19" . $sep . "13" . $sep . "32" . $sep . "4.1" . $sep . "0.1" . $sep . "9.1" . $sep . "4.4" . $sep . "MPS" . $sep . "" . "\n" .
                    "Ipomoea_littoralis" . $sep . "166" . $sep . "2" . $sep . "168" . $sep . "0.1" . $sep . "0.0" . $sep . "1.9" . $sep . "0.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_ramosissima" . $sep . "125" . $sep . "27" . $sep . "152" . $sep . "1.8" . $sep . "0.4" . $sep . "9.4" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Ipomoea_tabascana" . $sep . "0" . $sep . "6" . $sep . "6" . $sep . "10.0" . $sep . "10.0" . $sep . "3.4" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_tenuissima" . $sep . "32" . $sep . "3" . $sep . "35" . $sep . "0.9" . $sep . "0.1" . $sep . "1.8" . $sep . "0.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_tiliacea" . $sep . "364" . $sep . "46" . $sep . "410" . $sep . "1.1" . $sep . "0.5" . $sep . "4.8" . $sep . "2.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_trifida" . $sep . "331" . $sep . "227" . $sep . "558" . $sep . "4.1" . $sep . "2.8" . $sep . "8.8" . $sep . "5.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Ipomoea_triloba" . $sep . "524" . $sep . "142" . $sep . "666" . $sep . "2.1" . $sep . "0.2" . $sep . "4.8" . $sep . "2.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Ipomoea_umbraticola" . $sep . "19" . $sep . "3" . $sep . "22" . $sep . "1.4" . $sep . "0.7" . $sep . "2.5" . $sep . "1.5" . $sep . "HPS" . $sep . "";
            break;
        case "Lathyrus":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Lathyrus_chrysanthus" . $sep . "5" . $sep . "5" . $sep . "10" . $sep . "5.0" . $sep . "10.0" . $sep . "10.0" . $sep . "8.3" . $sep . "NFCR" . "\n" .
                    "Lathyrus_gorgoni" . $sep . "52" . $sep . "56" . $sep . "108" . $sep . "5.2" . $sep . "3.8" . $sep . "10.0" . $sep . "6.3" . $sep . "LPS" . "\n" .
                    "Lathyrus_marmoratus" . $sep . "4" . $sep . "23" . $sep . "27" . $sep . "8.5" . $sep . "3.6" . $sep . "10.0" . $sep . "7.4" . $sep . "LPS" . "\n" .
                    "Lathyrus_pseudocicera" . $sep . "12" . $sep . "47" . $sep . "59" . $sep . "8.0" . $sep . "0.6" . $sep . "9.3" . $sep . "5.9" . $sep . "LPS" . "\n" .
                    "Lathyrus_sativus" . $sep . "496" . $sep . "1878" . $sep . "2374" . $sep . "7.9" . $sep . "4.4" . $sep . "10.0" . $sep . "7.4" . $sep . "LPS";
            break;
        case "Lens":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Lens_culinaris_odemensis" . $sep . "19" . $sep . "42" . $sep . "61" . $sep . "6.9" . $sep . "2.1" . $sep . "10.0" . $sep . "6.3" . $sep . "LPS" . "\n" .
                    "Lens_culinaris_orientalis" . $sep . "399" . $sep . "208" . $sep . "607" . $sep . "3.4" . $sep . "2.6" . $sep . "10.0" . $sep . "5.3" . $sep . "LPS" . "\n" .
                    "Lens_culinaris_tomentosus" . $sep . "1" . $sep . "6" . $sep . "7" . $sep . "8.6" . $sep . "10.0" . $sep . "3.4" . $sep . "7.3" . $sep . "LPS" . "\n" .
                    "Lens_ervoides" . $sep . "139" . $sep . "175" . $sep . "314" . $sep . "5.6" . $sep . "1.3" . $sep . "7.7" . $sep . "4.8" . $sep . "MPS" . "\n" .
                    "Lens_nigricans" . $sep . "183" . $sep . "94" . $sep . "277" . $sep . "3.4" . $sep . "1.1" . $sep . "10.0" . $sep . "4.8" . $sep . "MPS";
            break;
        case "Malus":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Malus_baccata" . $sep . "212" . $sep . "100" . $sep . "312" . $sep . "3.2" . $sep . "0.1" . $sep . "2.7" . $sep . "2.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_baccata_baccata" . $sep . "26" . $sep . "2" . $sep . "28" . $sep . "0.7" . $sep . "NA" . $sep . "NA" . $sep . "0.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_baccata_daochengensis" . $sep . "2" . $sep . "0" . $sep . "2" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_baccata_jinxianensis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Malus_baccata_xiaojinensis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Malus_chitralensis" . $sep . "2" . $sep . "0" . $sep . "2" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_crescimannoi" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Malus_doumeri" . $sep . "49" . $sep . "1" . $sep . "50" . $sep . "0.2" . $sep . "0.0" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_floribunda" . $sep . "34" . $sep . "16" . $sep . "50" . $sep . "3.2" . $sep . "0.0" . $sep . "0.0" . $sep . "1.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_fusca" . $sep . "781" . $sep . "84" . $sep . "865" . $sep . "1.0" . $sep . "0.4" . $sep . "8.3" . $sep . "3.2" . $sep . "MPS" . $sep . "" . "\n" .
                    "Malus_halliana" . $sep . "21" . $sep . "23" . $sep . "44" . $sep . "5.2" . $sep . "0.1" . $sep . "6.5" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Malus_honanensis" . $sep . "9" . $sep . "3" . $sep . "12" . $sep . "2.5" . $sep . "NA" . $sep . "NA" . $sep . "2.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_hupehensis" . $sep . "148" . $sep . "159" . $sep . "307" . $sep . "5.2" . $sep . "0.1" . $sep . "5.5" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Malus_kansuensis" . $sep . "59" . $sep . "36" . $sep . "95" . $sep . "3.8" . $sep . "0.1" . $sep . "3.8" . $sep . "2.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_komarovii" . $sep . "5" . $sep . "1" . $sep . "6" . $sep . "1.7" . $sep . "NA" . $sep . "NA" . $sep . "1.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_mandshurica" . $sep . "30" . $sep . "4" . $sep . "34" . $sep . "1.2" . $sep . "NA" . $sep . "0.0" . $sep . "0.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_muliensis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Malus_ombrophila" . $sep . "39" . $sep . "5" . $sep . "44" . $sep . "1.1" . $sep . "0.0" . $sep . "0.0" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_orientalis" . $sep . "212" . $sep . "1570" . $sep . "1782" . $sep . "8.8" . $sep . "1.1" . $sep . "10.0" . $sep . "6.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Malus_prattii" . $sep . "184" . $sep . "29" . $sep . "213" . $sep . "1.4" . $sep . "0.1" . $sep . "4.3" . $sep . "1.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_prunifolia" . $sep . "235" . $sep . "92" . $sep . "327" . $sep . "2.8" . $sep . "0.0" . $sep . "0.0" . $sep . "0.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_pumila" . $sep . "1821" . $sep . "72" . $sep . "1893" . $sep . "0.4" . $sep . "0.1" . $sep . "5.0" . $sep . "1.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_sargentii" . $sep . "38" . $sep . "53" . $sep . "91" . $sep . "5.8" . $sep . "0.0" . $sep . "0.0" . $sep . "1.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_sieversii" . $sep . "3193" . $sep . "3009" . $sep . "6202" . $sep . "4.9" . $sep . "2.7" . $sep . "10.0" . $sep . "5.8" . $sep . "LPS" . $sep . "" . "\n" .
                    "Malus_sikkimensis" . $sep . "43" . $sep . "32" . $sep . "75" . $sep . "4.3" . $sep . "0.0" . $sep . "0.0" . $sep . "1.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_spectabilis" . $sep . "56" . $sep . "16" . $sep . "72" . $sep . "2.2" . $sep . "NA" . $sep . "NA" . $sep . "2.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_sylvestris" . $sep . "4444" . $sep . "211" . $sep . "4655" . $sep . "0.5" . $sep . "0.0" . $sep . "2.4" . $sep . "0.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_toringo" . $sep . "207" . $sep . "349" . $sep . "556" . $sep . "6.3" . $sep . "0.1" . $sep . "4.5" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Malus_toringoides" . $sep . "103" . $sep . "97" . $sep . "200" . $sep . "4.9" . $sep . "0.2" . $sep . "5.8" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Malus_transitoria" . $sep . "112" . $sep . "149" . $sep . "261" . $sep . "5.7" . $sep . "1.9" . $sep . "3.1" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Malus_tschonoskii" . $sep . "23" . $sep . "16" . $sep . "39" . $sep . "4.1" . $sep . "0.0" . $sep . "3.8" . $sep . "2.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_yunnanensis" . $sep . "78" . $sep . "56" . $sep . "134" . $sep . "4.2" . $sep . "0.1" . $sep . "4.6" . $sep . "3.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Malus_zumi" . $sep . "21" . $sep . "13" . $sep . "34" . $sep . "3.8" . $sep . "10.0" . $sep . "4.3" . $sep . "6.1" . $sep . "LPS" . $sep . "";
            break;
        case "Medicago":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Medicago_papillosa" . $sep . "40" . $sep . "14" . $sep . "54" . $sep . "2.6" . $sep . "0.2" . $sep . "5.8" . $sep . "2.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Medicago_papillosa_macrocarpa" . $sep . "1" . $sep . "0" . $sep . "1" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Medicago_papillosa_papillosa" . $sep . "5" . $sep . "0" . $sep . "5" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Medicago_prostrata" . $sep . "40" . $sep . "22" . $sep . "62" . $sep . "3.5" . $sep . "0.9" . $sep . "7.5" . $sep . "4.0" . $sep . "MPS" . $sep . "" . "\n" .
                    "Medicago_sativa_caerulea" . $sep . "62" . $sep . "94" . $sep . "156" . $sep . "6.0" . $sep . "1.2" . $sep . "10.0" . $sep . "5.7" . $sep . "LPS" . $sep . "" . "\n" .
                    "Medicago_sativa_falcata_falcata" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Medicago_sativa_falcata_viscosa" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Medicago_sativa_glomerata" . $sep . "19" . $sep . "23" . $sep . "42" . $sep . "5.5" . $sep . "0.0" . $sep . "5.6" . $sep . "3.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Medicago_sativa_hemicycla" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Medicago_sativa_sativa" . $sep . "1023" . $sep . "923" . $sep . "1946" . $sep . "4.7" . $sep . "6.6" . $sep . "10.0" . $sep . "7.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Medicago_sativa_tunetana" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Medicago_sativa_varia" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Medicago_saxatilis" . $sep . "4" . $sep . "0" . $sep . "4" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "";
            break;
        case "Musa":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "\n" .
                    "Musa_acuminata" . $sep . "1911" . $sep . "316" . $sep . "2227" . $sep . "1.4" . $sep . "0.02" . $sep . "4.1" . $sep . "1.8" . $sep . "HPS" . $sep . "\n" .
                    "Musa_balbisiana" . $sep . "103" . $sep . "41" . $sep . "144" . $sep . "2.8" . $sep . "0" . $sep . "0" . $sep . "0.9" . $sep . "HPS" . $sep . "\n" .
                    "Musa_flaviflora" . $sep . "1" . $sep . "0" . $sep . "1" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "0" . $sep . "HPS" . $sep . "\n" .
                    "Musa_schizocarpa" . $sep . "88" . $sep . "23" . $sep . "111" . $sep . "2.1" . $sep . "0.5" . $sep . "5.9" . $sep . "2.8" . $sep . "HPS" . $sep . "\n" .
                    "Musa_textilis" . $sep . "182" . $sep . "8" . $sep . "190" . $sep . "0.4" . $sep . "0" . $sep . "0" . $sep . "0.1" . $sep . "HPS" . $sep . "\n" .
                    "Musa_yunnanensis" . $sep . "25" . $sep . "0" . $sep . "25" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "HPS" . $sep . "";
            ;
            break;
        case "Pennisetum":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Pennisetum_glaucum_monodii" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Pennisetum_orientale" . $sep . "238" . $sep . "39" . $sep . "277" . $sep . "1.4" . $sep . "0.0" . $sep . "0.0" . $sep . "0.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Pennisetum_purpureum" . $sep . "998" . $sep . "76" . $sep . "1074" . $sep . "0.7" . $sep . "0.3" . $sep . "1.1" . $sep . "0.7" . $sep . "HPS" . $sep . "" . "\n" .
                    "Pennisetum_squamulatum" . $sep . "21" . $sep . "9" . $sep . "30" . $sep . "3.0" . $sep . "10.0" . $sep . "8.3" . $sep . "7.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Pennisetum_stenostachyum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed";
            break;
        case "Phaseolus":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Phaseolus_albescens" . $sep . "11" . $sep . "0" . $sep . "11" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Phaseolus_augusti" . $sep . "45" . $sep . "64" . $sep . "109" . $sep . "5.9" . $sep . "2.4" . $sep . "10.0" . $sep . "6.1" . $sep . "LPS" . "\n" .
                    "Phaseolus_coccineus" . $sep . "1295" . $sep . "668" . $sep . "1963" . $sep . "3.4" . $sep . "6.1" . $sep . "10.0" . $sep . "6.5" . $sep . "LPS" . "\n" .
                    "Phaseolus_costaricensis" . $sep . "59" . $sep . "7" . $sep . "66" . $sep . "1.1" . $sep . "7.0" . $sep . "10.0" . $sep . "6.0" . $sep . "LPS" . "\n" .
                    "Phaseolus_dumosus" . $sep . "191" . $sep . "63" . $sep . "254" . $sep . "2.5" . $sep . "6.1" . $sep . "9.2" . $sep . "5.9" . $sep . "LPS" . "\n" .
                    "Phaseolus_longiplacentifer" . $sep . "1" . $sep . "0" . $sep . "1" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Phaseolus_lunatus" . $sep . "1188" . $sep . "1184" . $sep . "2372" . $sep . "5.0" . $sep . "2.3" . $sep . "8.4" . $sep . "5.2" . $sep . "LPS" . "\n" .
                    "Phaseolus_mollis" . $sep . "8" . $sep . "0" . $sep . "8" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Phaseolus_pachyrrhizoides" . $sep . "9" . $sep . "34" . $sep . "43" . $sep . "7.9" . $sep . "3.8" . $sep . "10.0" . $sep . "7.2" . $sep . "LPS" . "\n" .
                    "Phaseolus_persistentus" . $sep . "2" . $sep . "0" . $sep . "2" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . "\n" .
                    "Phaseolus_vulgaris_aborigineus" . $sep . "317" . $sep . "1513" . $sep . "1830" . $sep . "8.3" . $sep . "8.8" . $sep . "10.0" . $sep . "9.0" . $sep . "NFCR";
            break;
        case "Pisum":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Pisum_abyssinicum" . $sep . "86" . $sep . "31" . $sep . "117" . $sep . "2.6" . $sep . "0.2" . $sep . "5.9" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Pisum_fulvum" . $sep . "189" . $sep . "126" . $sep . "315" . $sep . "4.0" . $sep . "1.6" . $sep . "10.0" . $sep . "5.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Pisum_sativum_elatius_brevipedunculatum" . $sep . "7" . $sep . "0" . $sep . "7" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Pisum_sativum_elatius_elatius" . $sep . "2" . $sep . "0" . $sep . "2" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Pisum_sativum_elatius_pumilo" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed";
            break;
        case "Solanum_Potato":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "" . "\n" .
                    "Solanum_acaule" . $sep . "3162" . $sep . "1749" . $sep . "4911" . $sep . "3.6" . $sep . "10.0" . $sep . "10.0" . $sep . "7.9" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Solanum_acroglossum" . $sep . "41" . $sep . "3" . $sep . "44" . $sep . "0.7" . $sep . "3.9" . $sep . "4.1" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_acroscopicum" . $sep . "63" . $sep . "14" . $sep . "77" . $sep . "1.8" . $sep . "0.5" . $sep . "7.4" . $sep . "3.2" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_agrimonifolium" . $sep . "392" . $sep . "27" . $sep . "419" . $sep . "0.6" . $sep . "2.6" . $sep . "7.7" . $sep . "3.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_albicans" . $sep . "214" . $sep . "77" . $sep . "291" . $sep . "2.6" . $sep . "2.7" . $sep . "10.0" . $sep . "5.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_albornozii" . $sep . "26" . $sep . "8" . $sep . "34" . $sep . "2.4" . $sep . "10.0" . $sep . "10.0" . $sep . "7.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_andreanum" . $sep . "451" . $sep . "89" . $sep . "540" . $sep . "1.6" . $sep . "3.9" . $sep . "7.9" . $sep . "4.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_ayacuchense" . $sep . "5" . $sep . "0" . $sep . "5" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_berthaultii" . $sep . "968" . $sep . "355" . $sep . "1323" . $sep . "2.7" . $sep . "6.5" . $sep . "10.0" . $sep . "6.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_boliviense" . $sep . "2056" . $sep . "537" . $sep . "2593" . $sep . "2.1" . $sep . "7.8" . $sep . "10.0" . $sep . "6.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_bombycinum" . $sep . "7" . $sep . "0" . $sep . "7" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_brevicaule" . $sep . "5191" . $sep . "1304" . $sep . "6495" . $sep . "2.0" . $sep . "10.0" . $sep . "10.0" . $sep . "7.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_buesii" . $sep . "41" . $sep . "2" . $sep . "43" . $sep . "0.5" . $sep . "0.3" . $sep . "6.8" . $sep . "2.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_bulbocastanum" . $sep . "1115" . $sep . "153" . $sep . "1268" . $sep . "1.2" . $sep . "4.7" . $sep . "10.0" . $sep . "5.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_burkartii" . $sep . "14" . $sep . "2" . $sep . "16" . $sep . "1.3" . $sep . "0.0" . $sep . "0.0" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_cajamarquense" . $sep . "52" . $sep . "8" . $sep . "60" . $sep . "1.3" . $sep . "0.5" . $sep . "4.8" . $sep . "2.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_candolleanum" . $sep . "2042" . $sep . "535" . $sep . "2577" . $sep . "2.1" . $sep . "9.6" . $sep . "10.0" . $sep . "7.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_cantense" . $sep . "84" . $sep . "3" . $sep . "87" . $sep . "0.3" . $sep . "0.6" . $sep . "5.8" . $sep . "2.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_chacoense" . $sep . "3061" . $sep . "555" . $sep . "3616" . $sep . "1.5" . $sep . "1.9" . $sep . "8.0" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_chilliasense" . $sep . "14" . $sep . "5" . $sep . "19" . $sep . "2.6" . $sep . "10.0" . $sep . "6.8" . $sep . "6.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_chiquidenum" . $sep . "179" . $sep . "14" . $sep . "193" . $sep . "0.7" . $sep . "1.2" . $sep . "8.0" . $sep . "3.3" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_chomatophilum" . $sep . "680" . $sep . "99" . $sep . "779" . $sep . "1.3" . $sep . "4.1" . $sep . "10.0" . $sep . "5.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_clarum" . $sep . "275" . $sep . "6" . $sep . "281" . $sep . "0.2" . $sep . "3.3" . $sep . "10.0" . $sep . "4.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_coelestipetalum" . $sep . "87" . $sep . "40" . $sep . "127" . $sep . "3.1" . $sep . "2.0" . $sep . "9.3" . $sep . "4.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_colombianum" . $sep . "1111" . $sep . "183" . $sep . "1294" . $sep . "1.4" . $sep . "5.1" . $sep . "10.0" . $sep . "5.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_commersonii" . $sep . "681" . $sep . "90" . $sep . "771" . $sep . "1.2" . $sep . "0.9" . $sep . "8.3" . $sep . "3.4" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_contumazaense" . $sep . "17" . $sep . "2" . $sep . "19" . $sep . "1.1" . $sep . "0.0" . $sep . "0.0" . $sep . "0.4" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_demissum" . $sep . "1937" . $sep . "539" . $sep . "2476" . $sep . "2.2" . $sep . "6.6" . $sep . "10.0" . $sep . "6.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_flahaultii" . $sep . "121" . $sep . "28" . $sep . "149" . $sep . "1.9" . $sep . "1.1" . $sep . "6.1" . $sep . "3.0" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_flavoviridens" . $sep . "4" . $sep . "0" . $sep . "4" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_gandarillasii" . $sep . "55" . $sep . "16" . $sep . "71" . $sep . "2.3" . $sep . "2.2" . $sep . "7.5" . $sep . "4.0" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_garcia-barrigae" . $sep . "21" . $sep . "2" . $sep . "23" . $sep . "0.9" . $sep . "0.4" . $sep . "6.1" . $sep . "2.5" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_gracilifrons" . $sep . "17" . $sep . "0" . $sep . "17" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_guerreroense" . $sep . "8" . $sep . "9" . $sep . "17" . $sep . "5.3" . $sep . "10.0" . $sep . "3.9" . $sep . "6.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_hastiforme" . $sep . "40" . $sep . "0" . $sep . "40" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_hintonii" . $sep . "41" . $sep . "0" . $sep . "41" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_hjertingii" . $sep . "181" . $sep . "38" . $sep . "219" . $sep . "1.7" . $sep . "1.5" . $sep . "3.8" . $sep . "2.3" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_hougasii" . $sep . "194" . $sep . "27" . $sep . "221" . $sep . "1.2" . $sep . "1.6" . $sep . "8.6" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_huancabambense" . $sep . "42" . $sep . "18" . $sep . "60" . $sep . "3.0" . $sep . "10.0" . $sep . "7.2" . $sep . "6.7" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_incasicum" . $sep . "5" . $sep . "0" . $sep . "5" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_infundibuliforme" . $sep . "858" . $sep . "206" . $sep . "1064" . $sep . "1.9" . $sep . "4.6" . $sep . "10.0" . $sep . "5.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_iopetalum" . $sep . "696" . $sep . "127" . $sep . "823" . $sep . "1.5" . $sep . "3.9" . $sep . "8.8" . $sep . "4.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_kurtzianum" . $sep . "858" . $sep . "200" . $sep . "1058" . $sep . "1.9" . $sep . "3.7" . $sep . "10.0" . $sep . "5.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_laxissimum" . $sep . "114" . $sep . "19" . $sep . "133" . $sep . "1.4" . $sep . "0.7" . $sep . "8.7" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_lesteri" . $sep . "24" . $sep . "10" . $sep . "34" . $sep . "2.9" . $sep . "1.2" . $sep . "7.3" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_limbaniense" . $sep . "37" . $sep . "2" . $sep . "39" . $sep . "0.5" . $sep . "0.0" . $sep . "0.0" . $sep . "0.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_lobbianum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurence data; not assessed" . "\n" .
                    "Solanum_longiconicum" . $sep . "545" . $sep . "11" . $sep . "556" . $sep . "0.2" . $sep . "10.0" . $sep . "10.0" . $sep . "6.7" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_maglia" . $sep . "288" . $sep . "9" . $sep . "297" . $sep . "0.3" . $sep . "0.2" . $sep . "3.5" . $sep . "1.3" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_marinasense" . $sep . "144" . $sep . "47" . $sep . "191" . $sep . "2.5" . $sep . "2.3" . $sep . "10.0" . $sep . "4.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_medians" . $sep . "784" . $sep . "61" . $sep . "845" . $sep . "0.7" . $sep . "2.1" . $sep . "10.0" . $sep . "4.3" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_microdontum" . $sep . "1404" . $sep . "351" . $sep . "1755" . $sep . "2.0" . $sep . "5.7" . $sep . "10.0" . $sep . "5.9" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_morelliforme" . $sep . "401" . $sep . "45" . $sep . "446" . $sep . "1.0" . $sep . "4.4" . $sep . "10.0" . $sep . "5.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_multiinterruptum" . $sep . "401" . $sep . "61" . $sep . "462" . $sep . "1.3" . $sep . "5.4" . $sep . "10.0" . $sep . "5.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_neocardenasii" . $sep . "24" . $sep . "8" . $sep . "32" . $sep . "2.5" . $sep . "0.2" . $sep . "6.8" . $sep . "3.2" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_neorossii" . $sep . "100" . $sep . "25" . $sep . "125" . $sep . "2.0" . $sep . "2.2" . $sep . "10.0" . $sep . "4.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_neovavilovii" . $sep . "18" . $sep . "1" . $sep . "19" . $sep . "0.5" . $sep . "0.0" . $sep . "0.0" . $sep . "0.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_nubicola" . $sep . "20" . $sep . "0" . $sep . "20" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_okadae" . $sep . "158" . $sep . "61" . $sep . "219" . $sep . "2.8" . $sep . "1.4" . $sep . "4.5" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_olmosense" . $sep . "24" . $sep . "0" . $sep . "24" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_ortegae" . $sep . "2" . $sep . "0" . $sep . "2" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_oxycarpum" . $sep . "216" . $sep . "52" . $sep . "268" . $sep . "1.9" . $sep . "2.3" . $sep . "10.0" . $sep . "4.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_palustre" . $sep . "90" . $sep . "167" . $sep . "257" . $sep . "6.5" . $sep . "7.4" . $sep . "10.0" . $sep . "8.0" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Solanum_paucissectum" . $sep . "48" . $sep . "16" . $sep . "64" . $sep . "2.5" . $sep . "10.0" . $sep . "6.5" . $sep . "6.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_pillahuatense" . $sep . "17" . $sep . "1" . $sep . "18" . $sep . "0.6" . $sep . "0.2" . $sep . "10.0" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_piurae" . $sep . "72" . $sep . "9" . $sep . "81" . $sep . "1.1" . $sep . "0.9" . $sep . "6.5" . $sep . "2.8" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_polyadenium" . $sep . "276" . $sep . "83" . $sep . "359" . $sep . "2.3" . $sep . "1.6" . $sep . "6.5" . $sep . "3.5" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_raphanifolium" . $sep . "446" . $sep . "166" . $sep . "612" . $sep . "2.7" . $sep . "4.6" . $sep . "10.0" . $sep . "5.8" . $sep . "LPS" . $sep . "" . "\n" .
                    "Solanum_rhomboideilanceolatum" . $sep . "45" . $sep . "2" . $sep . "47" . $sep . "0.4" . $sep . "0.4" . $sep . "7.1" . $sep . "2.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_salasianum" . $sep . "6" . $sep . "0" . $sep . "6" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_schenckii" . $sep . "124" . $sep . "41" . $sep . "165" . $sep . "2.5" . $sep . "1.3" . $sep . "8.1" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_sogarandinum" . $sep . "106" . $sep . "17" . $sep . "123" . $sep . "1.4" . $sep . "1.0" . $sep . "6.5" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_stoloniferum" . $sep . "4061" . $sep . "1443" . $sep . "5504" . $sep . "2.6" . $sep . "10.0" . $sep . "10.0" . $sep . "7.5" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Solanum_tarnii" . $sep . "78" . $sep . "42" . $sep . "120" . $sep . "3.5" . $sep . "1.3" . $sep . "6.5" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_taulisense" . $sep . "5" . $sep . "0" . $sep . "5" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_venturii" . $sep . "189" . $sep . "29" . $sep . "218" . $sep . "1.3" . $sep . "0.5" . $sep . "0.0" . $sep . "0.6" . $sep . "HPS" . $sep . "" . "\n" .
                    "Solanum_vernei" . $sep . "493" . $sep . "211" . $sep . "704" . $sep . "3.0" . $sep . "2.0" . $sep . "10.0" . $sep . "5.0" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_verrucosum" . $sep . "1165" . $sep . "185" . $sep . "1350" . $sep . "1.4" . $sep . "2.7" . $sep . "8.2" . $sep . "4.1" . $sep . "MPS" . $sep . "" . "\n" .
                    "Solanum_violaceimarmoratum" . $sep . "229" . $sep . "38" . $sep . "267" . $sep . "1.4" . $sep . "0.3" . $sep . "7.4" . $sep . "3.0" . $sep . "MPS" . $sep . "";
            break;
        case "Oryza":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Oryza_malampuzhaensis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Oryza_perennis_cubensis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Oryza_alta" . $sep . "89" . $sep . "9" . $sep . "98" . $sep . "0.9" . $sep . "0.0" . $sep . "0.0" . $sep . "0.3" . $sep . "HPS" . $sep . "" . "\n" .
                    "Oryza_australiensis" . $sep . "321" . $sep . "48" . $sep . "369" . $sep . "1.3" . $sep . "0.3" . $sep . "10.0" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Oryza_barthii" . $sep . "118" . $sep . "313" . $sep . "431" . $sep . "7.3" . $sep . "2.5" . $sep . "9.2" . $sep . "6.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Oryza_brachyantha" . $sep . "18" . $sep . "31" . $sep . "49" . $sep . "6.3" . $sep . "0.1" . $sep . "7.7" . $sep . "4.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Oryza_eichingeri" . $sep . "46" . $sep . "39" . $sep . "85" . $sep . "4.6" . $sep . "0.5" . $sep . "10.0" . $sep . "5.0" . $sep . "LPS" . $sep . "" . "\n" .
                    "Oryza_glaberrima" . $sep . "436" . $sep . "2911" . $sep . "3347" . $sep . "8.7" . $sep . "3.4" . $sep . "9.1" . $sep . "7.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Oryza_glumipatula" . $sep . "55" . $sep . "62" . $sep . "117" . $sep . "5.3" . $sep . "1.1" . $sep . "10.0" . $sep . "5.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Oryza_grandiglumis" . $sep . "58" . $sep . "12" . $sep . "70" . $sep . "1.7" . $sep . "0.0" . $sep . "1.9" . $sep . "1.2" . $sep . "HPS" . $sep . "" . "\n" .
                    "Oryza_latifolia" . $sep . "387" . $sep . "42" . $sep . "429" . $sep . "1.0" . $sep . "0.1" . $sep . "4.6" . $sep . "1.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Oryza_longistaminata" . $sep . "589" . $sep . "457" . $sep . "1046" . $sep . "4.4" . $sep . "2.5" . $sep . "8.6" . $sep . "5.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Oryza_meridionalis" . $sep . "230" . $sep . "59" . $sep . "289" . $sep . "2.0" . $sep . "0.3" . $sep . "6.5" . $sep . "2.9" . $sep . "HPS" . $sep . "" . "\n" .
                    "Oryza_minuta" . $sep . "84" . $sep . "57" . $sep . "141" . $sep . "4.0" . $sep . "1.5" . $sep . "6.1" . $sep . "3.9" . $sep . "MPS" . $sep . "" . "\n" .
                    "Oryza_nivara" . $sep . "1048" . $sep . "1529" . $sep . "2577" . $sep . "5.9" . $sep . "8.4" . $sep . "9.7" . $sep . "8.0" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Oryza_officinalis" . $sep . "292" . $sep . "325" . $sep . "617" . $sep . "5.3" . $sep . "0.7" . $sep . "5.4" . $sep . "3.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Oryza_punctata" . $sep . "117" . $sep . "89" . $sep . "206" . $sep . "4.3" . $sep . "0.6" . $sep . "9.5" . $sep . "4.8" . $sep . "MPS" . $sep . "" . "\n" .
                    "Oryza_rhizomatis" . $sep . "21" . $sep . "32" . $sep . "53" . $sep . "6.0" . $sep . "6.5" . $sep . "10.0" . $sep . "7.5" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Oryza_ridleyi" . $sep . "37" . $sep . "21" . $sep . "58" . $sep . "3.6" . $sep . "0.2" . $sep . "5.8" . $sep . "3.2" . $sep . "MPS" . $sep . "" . "\n" .
                    "Oryza_rufipogon" . $sep . "980" . $sep . "1630" . $sep . "2610" . $sep . "6.2" . $sep . "3.0" . $sep . "9.5" . $sep . "6.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Oryza_schweinfurthiana" . $sep . "0" . $sep . "3" . $sep . "3" . $sep . "10.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.0" . $sep . "HPS" . $sep . "";
            break;
        case "Secale":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Secale_cereale_afghanicum" . $sep . "40" . $sep . "14" . $sep . "54" . $sep . "2.6" . $sep . "NA" . $sep . "NA" . $sep . "2.6" . $sep . "HPS" . "\n" .
                    "Secale_cereale_ancestrale" . $sep . "22" . $sep . "11" . $sep . "33" . $sep . "3.3" . $sep . "0.0" . $sep . "0.0" . $sep . "1.1" . $sep . "HPS" . "\n" .
                    "Secale_cereale_dighoricum" . $sep . "4" . $sep . "5" . $sep . "9" . $sep . "5.6" . $sep . "NA" . $sep . "NA" . $sep . "5.6" . $sep . "LPS" . "\n" .
                    "Secale_cereale_segetale" . $sep . "56" . $sep . "51" . $sep . "107" . $sep . "4.8" . $sep . "0.3" . $sep . "8.5" . $sep . "4.5" . $sep . "MPS";
            break;
        case "Sorghum":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . "\n" .
                    "Sorghum_angustum" . $sep . "65" . $sep . "11" . $sep . "76" . $sep . "1.4" . $sep . "0.0" . $sep . "0.0" . $sep . "0.5" . $sep . "HPS" . "\n" .
                    "Sorghum_bicolor_drummondii" . $sep . "214" . $sep . "176" . $sep . "390" . $sep . "4.5" . $sep . "10.0" . $sep . "5.7" . $sep . "6.7" . $sep . "LPS" . "\n" .
                    "Sorghum_bicolor_verticilliflorum" . $sep . "797" . $sep . "167" . $sep . "964" . $sep . "1.7" . $sep . "0.4" . $sep . "6.1" . $sep . "2.7" . $sep . "HPS" . "\n" .
                    "Sorghum_ecarinatum" . $sep . "28" . $sep . "13" . $sep . "41" . $sep . "3.2" . $sep . "0.0" . $sep . "0.0" . $sep . "1.1" . $sep . "HPS" . "\n" .
                    "Sorghum_exstans" . $sep . "71" . $sep . "4" . $sep . "75" . $sep . "0.5" . $sep . "0.0" . $sep . "0.0" . $sep . "0.2" . $sep . "HPS" . "\n" .
                    "Sorghum_halepense" . $sep . "5015" . $sep . "66" . $sep . "5081" . $sep . "0.1" . $sep . "0.4" . $sep . "5.4" . $sep . "2.0" . $sep . "HPS" . "\n" .
                    "Sorghum_interjectum" . $sep . "118" . $sep . "23" . $sep . "141" . $sep . "1.6" . $sep . "0.0" . $sep . "0.0" . $sep . "0.5" . $sep . "HPS" . "\n" .
                    "Sorghum_intrans" . $sep . "290" . $sep . "34" . $sep . "324" . $sep . "1.0" . $sep . "0.0" . $sep . "0.0" . $sep . "0.3" . $sep . "HPS" . "\n" .
                    "Sorghum_laxiflorum" . $sep . "122" . $sep . "27" . $sep . "149" . $sep . "1.8" . $sep . "0.1" . $sep . "1.6" . $sep . "1.2" . $sep . "HPS" . "\n" .
                    "Sorghum_macrospermum" . $sep . "47" . $sep . "3" . $sep . "50" . $sep . "0.6" . $sep . "0.0" . $sep . "0.0" . $sep . "0.2" . $sep . "HPS" . "\n" .
                    "Sorghum_matarankense" . $sep . "49" . $sep . "10" . $sep . "59" . $sep . "1.7" . $sep . "0.0" . $sep . "0.0" . $sep . "0.6" . $sep . "HPS" . "\n" .
                    "Sorghum_nitidum" . $sep . "339" . $sep . "13" . $sep . "352" . $sep . "0.4" . $sep . "0.0" . $sep . "1.6" . $sep . "0.7" . $sep . "HPS" . "\n" .
                    "Sorghum_propinquum" . $sep . "131" . $sep . "3" . $sep . "134" . $sep . "0.2" . $sep . "0.0" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . "\n" .
                    "Sorghum_purpureosericeum" . $sep . "49" . $sep . "13" . $sep . "62" . $sep . "2.1" . $sep . "0.1" . $sep . "1.2" . $sep . "1.1" . $sep . "HPS" . "\n" .
                    "Sorghum_stipoideum" . $sep . "552" . $sep . "53" . $sep . "605" . $sep . "0.9" . $sep . "0.3" . $sep . "6.7" . $sep . "2.6" . $sep . "HPS" . "\n" .
                    "Sorghum_timorense" . $sep . "376" . $sep . "46" . $sep . "422" . $sep . "1.1" . $sep . "0.1" . $sep . "3.3" . $sep . "1.5" . $sep . "HPS" . "\n" .
                    "Sorghum_versicolor" . $sep . "24" . $sep . "15" . $sep . "39" . $sep . "3.8" . $sep . "0.1" . $sep . "6.2" . $sep . "3.4" . $sep . "MPS";
            break;
        case "Vicia":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Vicia_barbazitae" . $sep . "6" . $sep . "2" . $sep . "8" . $sep . "2.5" . $sep . "10.0" . $sep . "4.4" . $sep . "5.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Vicia_faba_faba" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Vicia_faba_paucijuga" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Vicia_grandiflora" . $sep . "252" . $sep . "62" . $sep . "314" . $sep . "2.0" . $sep . "0.8" . $sep . "7.9" . $sep . "3.6" . $sep . "MPS" . $sep . "" . "\n" .
                    "Vicia_pyrenaica" . $sep . "139" . $sep . "4" . $sep . "143" . $sep . "0.3" . $sep . "0.0" . $sep . "0.0" . $sep . "0.1" . $sep . "HPS" . $sep . "" . "\n" .
                    "Vicia_qatmensis" . $sep . "0" . $sep . "4" . $sep . "4" . $sep . "10.0" . $sep . "10.0" . $sep . "7.7" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Vicia_sativa_amphicarpa" . $sep . "23" . $sep . "38" . $sep . "61" . $sep . "6.2" . $sep . "1.3" . $sep . "8.3" . $sep . "5.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Vicia_sativa_devia" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Vicia_sativa_incisa" . $sep . "21" . $sep . "6" . $sep . "27" . $sep . "2.2" . $sep . "10.0" . $sep . "3.1" . $sep . "5.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Vicia_sativa_macrocarpa" . $sep . "12" . $sep . "20" . $sep . "32" . $sep . "6.3" . $sep . "0.1" . $sep . "4.6" . $sep . "3.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Vicia_sativa_nigra" . $sep . "5347" . $sep . "243" . $sep . "5590" . $sep . "0.4" . $sep . "1.0" . $sep . "10.0" . $sep . "3.8" . $sep . "MPS" . $sep . "";
            break;
        case "Vigna":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "crop_code" . $sep . "notes" . "\n" .
                    "Vigna_hosei" . $sep . "83" . $sep . "19" . $sep . "102" . $sep . "1.9" . $sep . "0.0" . $sep . "10.0" . $sep . "4.0" . $sep . "MPS" . $sep . "bambara" . $sep . "" . "\n" .
                    "Vigna_keraudrenii" . $sep . "29" . $sep . "0" . $sep . "29" . $sep . "0.0" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_monantha" . $sep . "14" . $sep . "0" . $sep . "14" . $sep . "0.0" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_schlecteri" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "cowpea" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Vigna_subterranea_spontanea" . $sep . "16" . $sep . "0" . $sep . "16" . $sep . "0.0" . $sep . "0.0" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "bambara" . $sep . "" . "\n" .
                    "Vigna_unguiculata_aduensis" . $sep . "4" . $sep . "0" . $sep . "4" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_alba" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_baoulensis" . $sep . "4" . $sep . "15" . $sep . "19" . $sep . "7.9" . $sep . "0.3" . $sep . "10.0" . $sep . "6.1" . $sep . "LPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_burundiensis" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "cowpea" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Vigna_unguiculata_dekindtiana" . $sep . "1071" . $sep . "747" . $sep . "1818" . $sep . "4.1" . $sep . "0.3" . $sep . "10.0" . $sep . "4.8" . $sep . "MPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_letouzeyi" . $sep . "13" . $sep . "8" . $sep . "21" . $sep . "3.8" . $sep . "NA" . $sep . "NA" . $sep . "3.8" . $sep . "MPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_pawekiae" . $sep . "66" . $sep . "6" . $sep . "72" . $sep . "0.8" . $sep . "0.0" . $sep . "10.0" . $sep . "3.6" . $sep . "MPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_pubescens" . $sep . "43" . $sep . "51" . $sep . "94" . $sep . "5.4" . $sep . "0.0" . $sep . "10.0" . $sep . "5.2" . $sep . "LPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_stenophylla" . $sep . "452" . $sep . "160" . $sep . "612" . $sep . "2.6" . $sep . "0.1" . $sep . "10.0" . $sep . "4.2" . $sep . "MPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_tenuis" . $sep . "148" . $sep . "63" . $sep . "211" . $sep . "3.0" . $sep . "0.1" . $sep . "10.0" . $sep . "4.4" . $sep . "MPS" . $sep . "cowpea" . $sep . "" . "\n" .
                    "Vigna_unguiculata_unguiculata_spontanea" . $sep . "22" . $sep . "44" . $sep . "66" . $sep . "6.7" . $sep . "0.0" . $sep . "10.0" . $sep . "5.6" . $sep . "LPS" . $sep . "cowpea" . $sep . "";
            break;
        case "Wheat":
            $data = $header;
            $data = "TAXON" . $sep . "HS" . $sep . "GS" . $sep . "TOTAL" . $sep . "SRS" . $sep . "GRS" . $sep . "ERS" . $sep . "FPS" . $sep . "FPCAT" . $sep . "notes" . "\n" .
                    "Aegilops_bicornis" . $sep . "68" . $sep . "643" . $sep . "711" . $sep . "9.0" . $sep . "1.3" . $sep . "7.7" . $sep . "6.0" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_bicornis_anathera" . $sep . "1" . $sep . "0" . $sep . "1" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Aegilops_bicornis_bicornis" . $sep . "1" . $sep . "5" . $sep . "6" . $sep . "8.3" . $sep . "NA" . $sep . "NA" . $sep . "8.3" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Aegilops_biuncialis" . $sep . "166" . $sep . "1064" . $sep . "1230" . $sep . "8.7" . $sep . "3.8" . $sep . "10.0" . $sep . "7.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_columnaris" . $sep . "39" . $sep . "236" . $sep . "275" . $sep . "8.6" . $sep . "2.1" . $sep . "10.0" . $sep . "6.9" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_comosa" . $sep . "0" . $sep . "20" . $sep . "20" . $sep . "10.0" . $sep . "NA" . $sep . "NA" . $sep . "10.0" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Aegilops_comosa_comosa" . $sep . "3" . $sep . "19" . $sep . "22" . $sep . "8.6" . $sep . "7.0" . $sep . "6.8" . $sep . "7.5" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_comosa_subventricosa" . $sep . "41" . $sep . "167" . $sep . "208" . $sep . "8.0" . $sep . "2.4" . $sep . "10.0" . $sep . "6.8" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_crassa" . $sep . "97" . $sep . "242" . $sep . "339" . $sep . "7.1" . $sep . "1.0" . $sep . "10.0" . $sep . "6.0" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_cylindrica" . $sep . "510" . $sep . "1674" . $sep . "2184" . $sep . "7.7" . $sep . "4.5" . $sep . "10.0" . $sep . "7.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_geniculata" . $sep . "384" . $sep . "1040" . $sep . "1424" . $sep . "7.3" . $sep . "5.0" . $sep . "10.0" . $sep . "7.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_juvenalis" . $sep . "14" . $sep . "44" . $sep . "58" . $sep . "7.6" . $sep . "0.3" . $sep . "8.3" . $sep . "5.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_kotschyi" . $sep . "159" . $sep . "309" . $sep . "468" . $sep . "6.6" . $sep . "0.4" . $sep . "7.2" . $sep . "4.7" . $sep . "MPS" . $sep . "" . "\n" .
                    "Aegilops_longissima" . $sep . "503" . $sep . "1951" . $sep . "2454" . $sep . "8.0" . $sep . "5.3" . $sep . "10.0" . $sep . "7.8" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Aegilops_markgrafii" . $sep . "50" . $sep . "303" . $sep . "353" . $sep . "8.6" . $sep . "4.2" . $sep . "10.0" . $sep . "7.6" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Aegilops_neglecta" . $sep . "296" . $sep . "1567" . $sep . "1863" . $sep . "8.4" . $sep . "3.0" . $sep . "10.0" . $sep . "7.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_peregrina" . $sep . "374" . $sep . "1414" . $sep . "1788" . $sep . "7.9" . $sep . "3.5" . $sep . "10.0" . $sep . "7.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_peregrina_brachyathera" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Aegilops_peregrina_peregrina" . $sep . "0" . $sep . "3" . $sep . "3" . $sep . "10.0" . $sep . "NA" . $sep . "NA" . $sep . "0.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Aegilops_searsii" . $sep . "157" . $sep . "503" . $sep . "660" . $sep . "7.6" . $sep . "8.6" . $sep . "10.0" . $sep . "8.8" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Aegilops_sharonensis" . $sep . "430" . $sep . "3200" . $sep . "3630" . $sep . "8.8" . $sep . "0.1" . $sep . "10.0" . $sep . "6.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_speltoides" . $sep . "522" . $sep . "2196" . $sep . "2718" . $sep . "8.1" . $sep . "3.4" . $sep . "10.0" . $sep . "7.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_speltoides_ligustica" . $sep . "44" . $sep . "141" . $sep . "185" . $sep . "7.6" . $sep . "0.4" . $sep . "8.8" . $sep . "5.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_speltoides_speltoides" . $sep . "89" . $sep . "295" . $sep . "384" . $sep . "7.7" . $sep . "1.2" . $sep . "10.0" . $sep . "6.3" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_tauschii" . $sep . "372" . $sep . "1910" . $sep . "2282" . $sep . "8.4" . $sep . "2.9" . $sep . "10.0" . $sep . "7.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_triuncialis" . $sep . "929" . $sep . "3604" . $sep . "4533" . $sep . "8.0" . $sep . "5.8" . $sep . "10.0" . $sep . "7.9" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Aegilops_triuncialis_persica" . $sep . "9" . $sep . "23" . $sep . "32" . $sep . "7.2" . $sep . "1.1" . $sep . "6.8" . $sep . "5.0" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_triuncialis_triuncialis" . $sep . "14" . $sep . "164" . $sep . "178" . $sep . "9.2" . $sep . "0.4" . $sep . "6.6" . $sep . "5.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_umbellulata" . $sep . "100" . $sep . "438" . $sep . "538" . $sep . "8.1" . $sep . "4.0" . $sep . "10.0" . $sep . "7.4" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_uniaristata" . $sep . "12" . $sep . "35" . $sep . "47" . $sep . "7.4" . $sep . "0.9" . $sep . "7.1" . $sep . "5.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_vavilovii" . $sep . "8" . $sep . "136" . $sep . "144" . $sep . "9.4" . $sep . "1.3" . $sep . "7.5" . $sep . "6.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Aegilops_ventricosa" . $sep . "121" . $sep . "169" . $sep . "290" . $sep . "5.8" . $sep . "0.8" . $sep . "10.0" . $sep . "5.6" . $sep . "LPS" . $sep . "" . "\n" .
                    "Amblyopyrum_muticum" . $sep . "27" . $sep . "33" . $sep . "60" . $sep . "5.5" . $sep . "2.8" . $sep . "7.3" . $sep . "5.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Amblyopyrum_muticum_loliaceum" . $sep . "9" . $sep . "1" . $sep . "10" . $sep . "1.0" . $sep . "NA" . $sep . "NA" . $sep . "1.0" . $sep . "HPS" . $sep . "" . "\n" .
                    "Amblyopyrum_muticum_muticum" . $sep . "12" . $sep . "33" . $sep . "45" . $sep . "7.3" . $sep . "0.6" . $sep . "7.3" . $sep . "5.1" . $sep . "LPS" . $sep . "" . "\n" .
                    "Triticum_aestivum_tibeticum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Triticum_aestivum_yunnanense" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Triticum_boeoticum" . $sep . "0" . $sep . "0" . $sep . "0" . $sep . "0.0" . $sep . "NA" . $sep . "NA" . $sep . "NA" . $sep . "HPS" . $sep . "no occurrence data; not assessed" . "\n" .
                    "Triticum_monococcum" . $sep . "141" . $sep . "845" . $sep . "986" . $sep . "8.6" . $sep . "3.0" . $sep . "10.0" . $sep . "7.2" . $sep . "LPS" . $sep . "" . "\n" .
                    "Triticum_monococcum_aegilopoides" . $sep . "168" . $sep . "2752" . $sep . "2920" . $sep . "9.4" . $sep . "5.9" . $sep . "10.0" . $sep . "8.5" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Triticum_timopheevii" . $sep . "10" . $sep . "160" . $sep . "170" . $sep . "9.4" . $sep . "3.7" . $sep . "10.0" . $sep . "7.7" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Triticum_timopheevii_armeniacum" . $sep . "28" . $sep . "826" . $sep . "854" . $sep . "9.7" . $sep . "1.3" . $sep . "9.3" . $sep . "6.7" . $sep . "LPS" . $sep . "" . "\n" .
                    "Triticum_turgidum_dicoccoides" . $sep . "951" . $sep . "5089" . $sep . "6040" . $sep . "8.4" . $sep . "4.6" . $sep . "10.0" . $sep . "7.7" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Triticum_turgidum_paleocolchicum" . $sep . "0" . $sep . "23" . $sep . "23" . $sep . "10.0" . $sep . "NA" . $sep . "NA" . $sep . "10.0" . $sep . "NFCR" . $sep . "" . "\n" .
                    "Triticum_urartu" . $sep . "212" . $sep . "1392" . $sep . "1604" . $sep . "8.7" . $sep . "4.8" . $sep . "10.0" . $sep . "7.8" . $sep . "NFCR" . $sep . "";
            break;
    }
    fwrite($file, $data);
    fclose($file);

    header("Content-type: application/csv");
    header("Content-Disposition: attachment;
                filename=" . $filename . " ");
    header("Concet-Transfer-Encoding: utf-8");
    header("Content-length: " . filesize($filename));
    readfile($filename);
    unlink($filename);
}
?>
<? ob_flush(); ?>