<?php

/**
 *
 * @author  Alex G. Castañeda V
 */
require_once WORKSPACE_DIR . 'config/db.php';
require_once WORKSPACE_DIR . 'config/config.php';
require_once WORKSPACE_DIR . 'core/dao/OccurrencesDAO.php';
require_once WORKSPACE_DIR . 'core/model/Occurrences.php';

// TODO Delete this because is should be called in other part.
require_once WORKSPACE_DIR . 'core/util/ObjectArrayUtil.php';

// TODO Delete also the firePHP.

class OccurrencesMySQL implements OccurrencesDAO {

    private static $instance;
    private $headerQuery="SELECT id,source, provider_institute_id,provider_name,institute_id, institute_name, collection, source_url, availability, unique_number,barcode,vno_1,vno_2,x1_family,x1_genus, x1_sp1, x1_author1,
                    x1_rank1, x1_sp2, x1_author2, x1_rank2, x1_sp3, x1_author3, x1_detby, x1_detdate, x1_detdd, x1_detmm, x1_detyy, x1_detstat, x2_genus, x2_sp1, x2_author1, x2_rank1, x2_sp2,
                    x2_rank2, x2_sp3, is_hybrid,hybrid_memo,tnrs_final_taxon, taxon_final,f_x1_genus, f_x1_sp1, f_x1_rank1, f_x1_sp2, f_x1_rank2, f_x1_sp3, annotated_specimen, type, type_memo,collector,addcoll,
                    collnumber, prefix, number, suffix, colldate, colldd, collmm, collyy, final_country,final_iso2, adm1, adm2, adm3, adm4, local_area, locality, lat_deg,
                    lat_min,lat_sec,ns, final_ns, latitude, long_deg, long_min, long_sec, ew, final_ew, longitude,latitude_georef,alt,final_alt,final_cult_stat,final_origin_stat,habitat_txt,
                    fl_code,fr_code,dups, notes,comments, citation, final_lat,final_lon,coord_source, taxstand_final_taxon 
            FROM cwr_occurrences o ";

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new OccurrencesMySQL();
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    public function getCountOccurrencesByGenus($genus) {
        ini_set('memory_limit', '-1');
        global $db;
        $query = "SELECT count(*) as count
            FROM cwr_occurrences o
            WHERE o.f_x1_genus = '" . $genus . "' and data_public_access=1 and provider_institute_id!='GBIF' ";   
        $result = $db->getRow($query);
        return $result["count"];
    }

    public function getOccurrencesByGenus($genus,$limit,$from) {
        $query = $this->headerQuery."WHERE o.f_x1_genus = '" . $genus . "' and data_public_access=1  and provider_institute_id!='GBIF' 
            LIMIT ".($from != 0 ? $limit : $from.",".$limit);
        $occurrences=$this->fillData($query);
        return $occurrences;
    }


    public function getCountOccurrencesByCountry($country) {
        ini_set('memory_limit', '-1');
        global $db;
        $query = "SELECT count(*)  as count
            FROM cwr_occurrences o
            WHERE o.final_country = '" . $country . "' and data_public_access=1  and provider_institute_id!='GBIF' ";
        $result = $db->getRow($query);
        return $result["count"];
    }

    public function getOccurrencesByCountry($country,$limit,$from) {
        $query = $this->headerQuery."WHERE o.final_country = '" . $country . "' and data_public_access=1  and provider_institute_id!='GBIF' 
                    LIMIT ".($from != 0 ? $limit : $from.",".$limit);
        $occurrences=$this->fillData($query);
        return $occurrences;
    }

    public function getCountOccurrencesByTaxon($taxon) {
        ini_set('memory_limit', '-1');
        global $db;
        $query = "SELECT count(*)  as count
            FROM cwr_occurrences o
            WHERE o.taxon_final = '" . $taxon . "' and data_public_access=1 and provider_institute_id!='GBIF' ";
        $result = $db->getRow($query);
        return $result["count"];   
    }

    public function getOccurrencesByTaxon($taxon,$limit,$from) {
        $query = $this->headerQuery."WHERE o.taxon_final = '" . $taxon . "' and data_public_access=1  and provider_institute_id!='GBIF' 
                    LIMIT ".($from != 0 ? $limit : $from.",".$limit);
        $occurrences=$this->fillData($query);
        return $occurrences;   
    }

    private function fillData($query)
    {
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 90);
        global $db;
        $results = $db->getAll($query);
        $occurrences = array();
        foreach ($results as $r) {
            $occu = new Occurrences(); 
            $occu->loadFromRow($r);
            array_push($occurrences, $occu);
        }
        return $occurrences;
    }

    public function suggestList($type, $limit, $term) {
        global $db;
        $query = "SELECT DISTINCT description
                    FROM cwr_occurrences_titles
                    WHERE type=".$type." and description like '" . strtolower(strip_tags($term)) . "%' ".
                    (empty($limit) ? "" : "LIMIT " . $limit);
        // create an empty array
        $titles = array();
        $results = $db->getAll($query);
        foreach ($results as $r) {
            array_push($titles, $r["description"]);
        }
        return $titles;
    }
}

?>
