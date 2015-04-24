<? ob_start(); ?>
<?php
require_once '../../config/config.php';
require_once '../../config/smarty.php';
require_once WORKSPACE_DIR . 'core/dao/factories/DAOFactory.php';
require_once WORKSPACE_DIR . 'core/model/Taxon.php';
require_once WORKSPACE_DIR . 'core/model/Concept.php';
require_once WORKSPACE_DIR . 'core/model/Occurrences.php';

/* Recibe los id's de los taxon, con base a esta informacion se obtiene la demas informacion
 * del taxon. Ademas de su relacion de genepool / cwr segun sea el caso.
 */
if (isset($_POST["term"])) {
    $ids = $_POST['term'];

    if (!is_array($ids)) {
        $filename = $term . "-" . date("d-M-Y H-i-s") . ".csv";
    } else {
        $filename = "Results-" . date("d-M-Y H-i-s") . ".csv";
    }
    $file = fopen($filename, "w");
    $sep = ",";
    $header = "Id" . $sep . "Family" . $sep . "FamilyAuthor" . $sep . "Genus" . $sep . "Specie" . $sep . "SpecieAuthor" . $sep . "Subspecie" .
            $sep . "SubspecieAuthor" . $sep . "Variety" . $sep . "VarietyAuthor" . $sep . "commonName" . $sep . "ScientificName" . $sep .
            "ConceptType" . $sep . "ConceptLevel" . $sep . "Relative of" . $sep . "\n";

    // deben imprimir en archivo
    $taxonDAO = DAOFactory::getDAOFactory()->getTaxonDAO();
    $genePoolConceptDAO = DAOFactory::getDAOFactory()->getGenePoolConceptDAO();
    $conceptCWRDAO = DAOFactory::getDAOFactory()->getCWRConceptDAO();
    $data = $header;
    foreach ($ids as $id) {
        $taxon = $taxonDAO->getTaxon($id);
        if ($taxon->getMainCrop() == 0) {
            $concept = $conceptCWRDAO->getCWRConcept($taxon->getId());
            $mainCrop = $conceptCWRDAO->getMainConcept($taxon->getId());
        } else {
            $concepts = $genePoolConceptDAO->getGenePoolConcept($taxon->getId());
            foreach ($concepts as $c) {
                $concept = $c;
                break;
            }
        }

        $data .= $taxon->getId() . $sep . str_replace(",", " ", $taxon->getFamily()) . $sep . str_replace(",", " ", $taxon->getFamilyAuthor()) . $sep . str_replace(",", " ", $taxon->getGenus()) . $sep . str_replace(",", " ", $taxon->getSpecie()) .
                $sep . str_replace(",", " ", $taxon->getSpecieAuthor()) . $sep . str_replace(",", " ", $taxon->getSubspecie()) . $sep . str_replace(",", " ", $taxon->getSubspecieAuthor()) . $sep . $taxon->getVariety() . $sep . str_replace(",", " ", $taxon->getVarietyAuthor()) .
                $sep . str_replace(",", " ", $taxon->getCommonName()) . $sep . str_replace(",", " ", $taxon->generateScientificName(false, false));
        
       if($mainCrop){
            $data .= $sep;
            foreach($mainCrop as $concept_types){
                $data .= str_replace(",", " ", $concept_types->Concept_Type) . " / ";
            }
            $data .= $sep;
            $data = str_replace("/ ,", ",", $data);
            foreach($mainCrop as $concept_levels){
               $data .= str_replace(",", " ", $concept_levels->Concept_Level) . " / ";  
            }
            $data .= $sep;
            $data = str_replace("/ ,", ",", $data);
            foreach($mainCrop as $names) {
                $data.= $names->Scientific_Name . " / ";
            }
            $data .= $sep;
            $data = str_replace("/ ,", "", $data);
        }
                
        $data .= "\n";
    }

    fwrite($file, $data);
    fclose($file);

    header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=" . $filename . " ");
    header("Concet-Transfer-Encoding: utf-8");
    header("Content-length: " . filesize($filename));
    readfile($filename);
    unlink($filename);
}


/* Ideado principalmente para la descarga desde el boton de gene pool */
if (isset($_GET["term"])) {
    $ids = $_GET['term'];

    if (!is_array($ids)) {
        $filename = $term . "-" . date("d-M-Y H-i-s") . ".csv";
    } else {
        $filename = "Results-" . date("d-M-Y H-i-s") . ".csv";
    }
    $file = fopen($filename, "w");
    $sep = ",";
    $header = "Id". $sep ."\n";

    $genePoolConceptDAO = DAOFactory::getDAOFactory()->getGenePoolConceptDAO();
    $data = $header;
    foreach($ids as $id) {
        $concepts = $genePoolConceptDAO->getGenePoolConcept($id);
        $arrayConcepts = $concepts->getConcepts();
        $mainTaxon = $concepts->getMainCrop();
        foreach ($arrayConcepts as $concept) {
            $taxon = $concept->getTaxon();
            $data .= $taxon->getId() . $sep . str_replace(",", " ", $taxon->getFamily()) . $sep . str_replace(",", " ", $taxon->getFamilyAuthor()) . $sep . str_replace(",", " ", $taxon->getGenus()) . $sep . str_replace(",", " ", $taxon->getSpecie()) .
                    $sep . str_replace(",", " ", $taxon->getSpecieAuthor()) . $sep . str_replace(",", " ", $taxon->getSubspecie()) . $sep . str_replace(",", " ", $taxon->getSubspecieAuthor()) . $sep . $taxon->getVariety() . $sep . str_replace(",", " ", $taxon->getVarietyAuthor()) .
                    $sep . str_replace(",", " ", $taxon->getCommonName()) . $sep . str_replace(",", " ", $taxon->generateScientificName(false, false)) . $sep . str_replace(",", " ", $concept->getConceptType()) . $sep . str_replace(",", " ", $concept->getConceptLevel()) .
                    $sep . $mainTaxon->getTaxon()->generateScientificName(false,false);
            $data .= "\n";
        }
    }

    fwrite($file, $data);
    fclose($file);

    header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=" . $filename . " ");
    header("Concet-Transfer-Encoding: utf-8");
    header("Content-length: " . filesize($filename));
    readfile($filename);
    unlink($filename);
}

/* Occurrences */

if (isset($_POST["genus"]) || isset($_POST["country"]) || isset($_POST["taxon"])) {    

    $occurrencesDAO = DAOFactory::getDAOFactory()->getOccurrencesDAO();
    $sep = ",";

    if(isset($_POST["genus"])){
        $parameter=$_POST['genus'];
        $filename =  "./genus/".$parameter . ".csv";
    }
    elseif (isset($_POST["country"])){
        $parameter=$_POST['country'];
        $filename =  "./country/".$parameter . ".csv";
    }
    else{
        $parameter=str_replace(array(" "),"_",$_POST['taxon']);
        $filename =  "./taxon/".$parameter . ".csv";
    }

    if(!file_exists($filename) )
    {
        $data ="id".$sep."source".$sep."provider_institute_id".$sep."provider_name".$sep."institute_id".$sep."institute_name".$sep."collection".$sep."source_url".$sep."availability".$sep."unique_number".$sep."barcode".$sep."vno_1".$sep."vno_2".$sep."x1_family".$sep."x1_genus".$sep."x1_sp1".$sep."x1_author1".$sep.
            "x1_rank1".$sep."x1_sp2".$sep."x1_author2".$sep."x1_rank2".$sep."x1_sp3".$sep."x1_author3".$sep."x1_detby".$sep."x1_detdate".$sep."x1_detdd".$sep."x1_detmm".$sep."x1_detyy".$sep."x1_detstat".$sep."x2_genus".$sep."x2_sp1".$sep."x2_author1".$sep."x2_rank1".$sep."x2_sp2".$sep.
            "x2_rank2".$sep."x2_sp3".$sep."is_hybrid".$sep."hybrid_memo".$sep."tnrs_final_taxon".$sep."taxon_final".$sep."f_x1_genus".$sep."f_x1_sp1".$sep."f_x1_rank1".$sep."f_x1_sp2".$sep."f_x1_rank2".$sep."f_x1_sp3".$sep."annotated_specimen".$sep."type".$sep."type_memo".$sep."collector".$sep."addcoll".$sep.
            "collnumber".$sep."prefix".$sep."number".$sep."suffix".$sep."colldate".$sep."colldd".$sep."collmm".$sep."collyy".$sep."final_country".$sep."final_iso2".$sep."adm1".$sep."adm2".$sep."adm3".$sep."adm4".$sep."local_area".$sep."locality".$sep."lat_deg".$sep.
            "lat_min".$sep."lat_sec".$sep."ns".$sep."final_ns".$sep."latitude".$sep."long_deg".$sep."long_min".$sep."long_sec".$sep."ew".$sep."final_ew".$sep."longitude".$sep."latitude_georef".$sep."alt".$sep."final_alt".$sep."final_cult_stat".$sep."final_origin_stat".$sep."habitat_txt".$sep.
            "fl_code".$sep."fr_code".$sep."dups".$sep."notes".$sep."comments".$sep."citation".$sep."final_lat".$sep."final_lon".$sep."coord_source".$sep."taxstand_final_taxon\r\n";

        $file = fopen($filename, "a+");
        fwrite($file, $data);
        fclose($file);

        $limit=50000;

        if(isset($_POST["genus"])){
            $count=$occurrencesDAO->getCountOccurrencesByGenus($parameter);
            $limit=$limit<$count ? $limit : $count;
            
            for($i=0;$i<=$count;$i+=$limit){
                $file = fopen($filename, "a+");
                $listOccu=$occurrencesDAO->getOccurrencesByGenus($parameter,$limit,$i);    
                $data="";

                foreach ($listOccu as $occu)
                    $data .= $occu->getLine($sep)."\r\n";

                fwrite($file, $data);
                fclose($file);
            }        
        }
        elseif(isset($_POST["country"])){
            $count=$occurrencesDAO->getCountOccurrencesByCountry($parameter);
            $limit=$limit<$count ? $limit : $count;
            
            for($i=0;$i<=$count;$i+=$limit){
                $file = fopen($filename, "a+");
                $listOccu=$occurrencesDAO->getOccurrencesByCountry($parameter,$limit,$i);    
                $data="";

                foreach ($listOccu as $occu)
                    $data .= $occu->getLine($sep)."\r\n";

                fwrite($file, $data);
                fclose($file);
            }
        }
        else{
            $count=$occurrencesDAO->getCountOccurrencesByTaxon($parameter);
            $limit=$limit<$count ? $limit : $count;
            
            for($i=0;$i<=$count;$i+=$limit){
                $file = fopen($filename, "a+");
                $listOccu=$occurrencesDAO->getOccurrencesByTaxon($parameter,$limit,$i);    
                $data="";

                foreach ($listOccu as $occu)
                    $data .= $occu->getLine($sep)."\r\n";

                fwrite($file, $data);
                fclose($file);
            }
        }
    }

    header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=" . $filename . " ");
    header("Concet-Transfer-Encoding: utf-8");
    header("Content-length: " . filesize($filename));
    readfile($filename);
    unlink($filename);
}

?>
<? ob_flush(); ?>
