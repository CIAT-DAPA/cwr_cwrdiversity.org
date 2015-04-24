<?php

/**
 * @author Alex Gabriel Castañeda
 */
class Occurrences {

    private $id;
    private $source;
    private $provider_institute_id;
    private $provider_name;
    private $institute_id;
    private $institute_name;
    private $collection;
    private $source_url;
    private $availability;
    private $unique_number;
    private $barcode;
    private $vno_1;
    private $vno_2;
    private $x1_family;
    private $x1_genus;
    private $x1_sp1;
    private $x1_author1;
    private $x1_rank1;
    private $x1_sp2;
    private $x1_author2;
    private $x1_rank2;
    private $x1_sp3;
    private $x1_author3;
    private $x1_detby;
    private $x1_detdate;
    private $x1_detdd;
    private $x1_detmm;
    private $x1_detyy;
    private $x1_detstat;
    private $x2_genus;
    private $x2_sp1;
    private $x2_author1;
    private $x2_rank1;
    private $x2_sp2;
    private $x2_rank2;
    private $x2_sp3;
    private $is_hybrid;
    private $hybrid_memo;
    private $tnrs_final_taxon;
    private $taxon_final;
    private $f_x1_genus;
    private $f_x1_sp1;
    private $f_x1_rank1;
    private $f_x1_sp2;
    private $f_x1_rank2;
    private $f_x1_sp3;
    private $annotated_specimen;
    private $type;
    private $type_memo;
    private $collector;
    private $addcoll;
    private $collnumber;
    private $prefix;
    private $number;
    private $suffix;
    private $colldate;
    private $colldd;
    private $collmm;
    private $collyy;
    private $final_country;
    private $final_iso2;
    private $adm1;
    private $adm2;
    private $adm3;
    private $adm4;
    private $local_area;
    private $locality;
    private $lat_deg;
    private $lat_min;
    private $lat_sec;
    private $ns;
    private $final_ns;
    private $latitude;
    private $long_deg;
    private $long_min;
    private $long_sec;
    private $ew;
    private $final_ew;
    private $longitude;
    private $latitude_georef;
    private $alt;
    private $final_alt;
    private $final_cult_stat;
    private $final_origin_stat;
    private $habitat_txt;
    private $fl_code;
    private $fr_code;
    private $dups;
    private $notes;
    private $comments;
    private $citation;
    private $final_lat;
    private $final_lon;
    private $coord_source;
    private $taxstand_final_taxon;

    public function __construct() {
    }
    
    public function getId(){ return $this->id; }
    public function getSource(){ return $this->source; }
    public function getProvider_institute_id(){ return $this->provider_institute_id; }
    public function getProvider_name(){ return $this->provider_name; }
    public function getInstitute_id(){ return $this->institute_id; }
    public function getInstitute_name(){ return $this->institute_name; }
    public function getCollection(){ return $this->collection; }
    public function getSource_url(){ return $this->source_url; }
    public function getAvailability(){ return $this->availability; }
    public function getUnique_number(){ return $this->unique_number; }
    public function getBarcode(){ return $this->barcode; }
    public function getVno_1(){ return $this->vno_1; }
    public function getVno_2(){ return $this->vno_2; }
    public function getX1_family(){ return $this->x1_family; }
    public function getX1_genus(){ return $this->x1_genus; }
    public function getX1_sp1(){ return $this->x1_sp1; }
    public function getX1_author1(){ return $this->x1_author1; }
    public function getX1_rank1(){ return $this->x1_rank1; }
    public function getX1_sp2(){ return $this->x1_sp2; }
    public function getX1_author2(){ return $this->x1_author2; }
    public function getX1_rank2(){ return $this->x1_rank2; }
    public function getX1_sp3(){ return $this->x1_sp3; }
    public function getX1_author3(){ return $this->x1_author3; }
    public function getX1_detby(){ return $this->x1_detby; }
    public function getX1_detdate(){ return $this->x1_detdate; }
    public function getX1_detdd(){ return $this->x1_detdd; }
    public function getX1_detmm(){ return $this->x1_detmm; }
    public function getX1_detyy(){ return $this->x1_detyy; }
    public function getX1_detstat(){ return $this->x1_detstat; }
    public function getX2_genus(){ return $this->x2_genus; }
    public function getX2_sp1(){ return $this->x2_sp1; }
    public function getX2_author1(){ return $this->x2_author1; }
    public function getX2_rank1(){ return $this->x2_rank1; }
    public function getX2_sp2(){ return $this->x2_sp2; }
    public function getX2_rank2(){ return $this->x2_rank2; }
    public function getX2_sp3(){ return $this->x2_sp3; }
    public function getIs_hybrid(){ return $this->is_hybrid; }
    public function getHybrid_memo(){ return $this->hybrid_memo; }
    public function getTnrs_final_taxon(){ return $this->tnrs_final_taxon; }
    public function getTaxon_final(){ return $this->taxon_final; }
    public function getF_x1_genus(){ return $this->f_x1_genus; }
    public function getF_x1_sp1(){ return $this->f_x1_sp1; }
    public function getF_x1_rank1(){ return $this->f_x1_rank1; }
    public function getF_x1_sp2(){ return $this->f_x1_sp2; }
    public function getF_x1_rank2(){ return $this->f_x1_rank2; }
    public function getF_x1_sp3(){ return $this->f_x1_sp3; }
    public function getAnnotated_specimen(){ return $this->annotated_specimen; }
    public function getType(){ return $this->type; }
    public function getType_memo(){ return $this->type_memo; }
    public function getCollector(){ return $this->collector; }
    public function getAddcoll(){ return $this->addcoll; }
    public function getCollnumber(){ return $this->collnumber; }
    public function getPrefix(){ return $this->prefix; }
    public function getNumber(){ return $this->number; }
    public function getSuffix(){ return $this->suffix; }
    public function getColldate(){ return $this->colldate; }
    public function getColldd(){ return $this->colldd; }
    public function getCollmm(){ return $this->collmm; }
    public function getCollyy(){ return $this->collyy; }
    public function getFinal_country(){ return $this->final_country; }
    public function getFinal_iso2(){ return $this->final_iso2; }
    public function getAdm1(){ return $this->adm1; }
    public function getAdm2(){ return $this->adm2; }
    public function getAdm3(){ return $this->adm3; }
    public function getAdm4(){ return $this->adm4; }
    public function getLocal_area(){ return $this->local_area; }
    public function getLocality(){ return $this->locality; }
    public function getLat_deg(){ return $this->lat_deg; }
    public function getLat_min(){ return $this->lat_min; }
    public function getLat_sec(){ return $this->lat_sec; }
    public function getNs(){ return $this->ns; }
    public function getFinal_ns(){ return $this->final_ns; }
    public function getLatitude(){ return $this->latitude; }
    public function getLong_deg(){ return $this->long_deg; }
    public function getLong_min(){ return $this->long_min; }
    public function getLong_sec(){ return $this->long_sec; }
    public function getEw(){ return $this->ew; }
    public function getFinal_ew(){ return $this->final_ew; }
    public function getLongitude(){ return $this->longitude; }
    public function getLatitude_georef(){ return $this->latitude_georef; }
    public function getAlt(){ return $this->alt; }
    public function getFinal_alt(){ return $this->final_alt; }
    public function getFinal_cult_stat(){ return $this->final_cult_stat; }
    public function getFinal_origin_stat(){ return $this->final_origin_stat; }
    public function getHabitat_txt(){ return $this->habitat_txt; }
    public function getFl_code(){ return $this->fl_code; }
    public function getFr_code(){ return $this->fr_code; }
    public function getDups(){ return $this->dups; }
    public function getNotes(){ return $this->notes; }
    public function getComments(){ return $this->comments; }
    public function getCitation(){ return $this->citation; }
    public function getFinal_lat(){ return $this->final_lat; }
    public function getFinal_lon(){ return $this->final_lon; }
    public function getCoord_source(){ return $this->coord_source; }
    public function getTaxstand_final_taxon(){ return $this->taxstand_final_taxon; }

    public function setId($value){ $this->id=$value; }
    public function setSource($value){ $this->source=$value; }
    public function setProvider_institute_id($value){ $this->provider_institute_id=$value; }
    public function setProvider_name($value){ $this->provider_name=$value; }
    public function setInstitute_id($value){ $this->institute_id=$value; }
    public function setInstitute_name($value){ $this->institute_name=$value; }
    public function setCollection($value){ $this->collection=$value; }
    public function setSource_url($value){ $this->source_url=$value; }
    public function setAvailability($value){ $this->availability=$value; }
    public function setUnique_number($value){ $this->unique_number=$value; }
    public function setBarcode($value){ $this->barcode=$value; }
    public function setVno_1($value){ $this->vno_1=$value; }
    public function setVno_2($value){ $this->vno_2=$value; }
    public function setX1_family($value){ $this->x1_family=$value; }
    public function setX1_genus($value){ $this->x1_genus=$value; }
    public function setX1_sp1($value){ $this->x1_sp1=$value; }
    public function setX1_author1($value){ $this->x1_author1=$value; }
    public function setX1_rank1($value){ $this->x1_rank1=$value; }
    public function setX1_sp2($value){ $this->x1_sp2=$value; }
    public function setX1_author2($value){ $this->x1_author2=$value; }
    public function setX1_rank2($value){ $this->x1_rank2=$value; }
    public function setX1_sp3($value){ $this->x1_sp3=$value; }
    public function setX1_author3($value){ $this->x1_author3=$value; }
    public function setX1_detby($value){ $this->x1_detby=$value; }
    public function setX1_detdate($value){ $this->x1_detdate=$value; }
    public function setX1_detdd($value){ $this->x1_detdd=$value; }
    public function setX1_detmm($value){ $this->x1_detmm=$value; }
    public function setX1_detyy($value){ $this->x1_detyy=$value; }
    public function setX1_detstat($value){ $this->x1_detstat=$value; }
    public function setX2_genus($value){ $this->x2_genus=$value; }
    public function setX2_sp1($value){ $this->x2_sp1=$value; }
    public function setX2_author1($value){ $this->x2_author1=$value; }
    public function setX2_rank1($value){ $this->x2_rank1=$value; }
    public function setX2_sp2($value){ $this->x2_sp2=$value; }
    public function setX2_rank2($value){ $this->x2_rank2=$value; }
    public function setX2_sp3($value){ $this->x2_sp3=$value; }
    public function setIs_hybrid($value){ $this->is_hybrid=$value; }
    public function setHybrid_memo($value){ $this->hybrid_memo=$value; }
    public function setTnrs_final_taxon($value){ $this->tnrs_final_taxon=$value; }
    public function setTaxon_final($value){ $this->taxon_final=$value; }
    public function setF_x1_genus($value){ $this->f_x1_genus=$value; }
    public function setF_x1_sp1($value){ $this->f_x1_sp1=$value; }
    public function setF_x1_rank1($value){ $this->f_x1_rank1=$value; }
    public function setF_x1_sp2($value){ $this->f_x1_sp2=$value; }
    public function setF_x1_rank2($value){ $this->f_x1_rank2=$value; }
    public function setF_x1_sp3($value){ $this->f_x1_sp3=$value; }
    public function setAnnotated_specimen($value){ $this->annotated_specimen=$value; }
    public function setType($value){ $this->type=$value; }
    public function setType_memo($value){ $this->type_memo=$value; }
    public function setCollector($value){ $this->collector=$value; }
    public function setAddcoll($value){ $this->addcoll=$value; }
    public function setCollnumber($value){ $this->collnumber=$value; }
    public function setPrefix($value){ $this->prefix=$value; }
    public function setNumber($value){ $this->number=$value; }
    public function setSuffix($value){ $this->suffix=$value; }
    public function setColldate($value){ $this->colldate=$value; }
    public function setColldd($value){ $this->colldd=$value; }
    public function setCollmm($value){ $this->collmm=$value; }
    public function setCollyy($value){ $this->collyy=$value; }
    public function setFinal_country($value){ $this->final_country=$value; }
    public function setFinal_iso2($value){ $this->final_iso2=$value; }
    public function setAdm1($value){ $this->adm1=$value; }
    public function setAdm2($value){ $this->adm2=$value; }
    public function setAdm3($value){ $this->adm3=$value; }
    public function setAdm4($value){ $this->adm4=$value; }
    public function setLocal_area($value){ $this->local_area=$value; }
    public function setLocality($value){ $this->locality=$value; }
    public function setLat_deg($value){ $this->lat_deg=$value; }
    public function setLat_min($value){ $this->lat_min=$value; }
    public function setLat_sec($value){ $this->lat_sec=$value; }
    public function setNs($value){ $this->ns=$value; }
    public function setFinal_ns($value){ $this->final_ns=$value; }
    public function setLatitude($value){ $this->latitude=$value; }
    public function setLong_deg($value){ $this->long_deg=$value; }
    public function setLong_min($value){ $this->long_min=$value; }
    public function setLong_sec($value){ $this->long_sec=$value; }
    public function setEw($value){ $this->ew=$value; }
    public function setFinal_ew($value){ $this->final_ew=$value; }
    public function setLongitude($value){ $this->longitude=$value; }
    public function setLatitude_georef($value){ $this->latitude_georef=$value; }
    public function setAlt($value){ $this->alt=$value; }
    public function setFinal_alt($value){ $this->final_alt=$value; }
    public function setFinal_cult_stat($value){ $this->final_cult_stat=$value; }
    public function setFinal_origin_stat($value){ $this->final_origin_stat=$value; }
    public function setHabitat_txt($value){ $this->habitat_txt=$value; }
    public function setFl_code($value){ $this->fl_code=$value; }
    public function setFr_code($value){ $this->fr_code=$value; }
    public function setDups($value){ $this->dups=$value; }
    public function setNotes($value){ $this->notes=$value; }
    public function setComments($value){ $this->comments=$value; }
    public function setCitation($value){ $this->citation=$value; }
    public function setFinal_lat($value){ $this->final_lat=$value; }
    public function setFinal_lon($value){ $this->final_lon=$value; }
    public function setCoord_source($value){ $this->coord_source=$value; }
    public function setTaxstand_final_taxon($value){ $this->taxstand_final_taxon=$value; }

    public function loadFromRow($r){
        $this->setId($r["id"]);
        $this->setSource($r["source"]);
        $this->setProvider_institute_id($r["provider_institute_id"]);
        $this->setProvider_name($r["provider_name"]);
        $this->setInstitute_id($r["institute_id"]);
        $this->setInstitute_name($r["institute_name"]);
        $this->setCollection($r["collection"]);
        $this->setSource_url($r["source_url"]);
        $this->setAvailability($r["availability"]);
        $this->setUnique_number($r["unique_number"]);
        $this->setBarcode($r["barcode"]);
        $this->setVno_1($r["vno_1"]);
        $this->setVno_2($r["vno_2"]);
        $this->setX1_family($r["x1_family"]);
        $this->setX1_genus($r["x1_genus"]);
        $this->setX1_sp1($r["x1_sp1"]);
        $this->setX1_author1($r["x1_author1"]);
        $this->setX1_rank1($r["x1_rank1"]);
        $this->setX1_sp2($r["x1_sp2"]);
        $this->setX1_author2($r["x1_author2"]);
        $this->setX1_rank2($r["x1_rank2"]);
        $this->setX1_sp3($r["x1_sp3"]);
        $this->setX1_author3($r["x1_author3"]);
        $this->setX1_detby($r["x1_detby"]);
        $this->setX1_detdate($r["x1_detdate"]);
        $this->setX1_detdd($r["x1_detdd"]);
        $this->setX1_detmm($r["x1_detmm"]);
        $this->setX1_detyy($r["x1_detyy"]);
        $this->setX1_detstat($r["x1_detstat"]);
        $this->setX2_genus($r["x2_genus"]);
        $this->setX2_sp1($r["x2_sp1"]);
        $this->setX2_author1($r["x2_author1"]);
        $this->setX2_rank1($r["x2_rank1"]);
        $this->setX2_sp2($r["x2_sp2"]);
        $this->setX2_rank2($r["x2_rank2"]);
        $this->setX2_sp3($r["x2_sp3"]);
        $this->setIs_hybrid($r["is_hybrid"]);
        $this->setHybrid_memo($r["hybrid_memo"]);
        $this->setTnrs_final_taxon($r["tnrs_final_taxon"]);
        $this->setTaxon_final($r["taxon_final"]);
        $this->setF_x1_genus($r["f_x1_genus"]);
        $this->setF_x1_sp1($r["f_x1_sp1"]);
        $this->setF_x1_rank1($r["f_x1_rank1"]);
        $this->setF_x1_sp2($r["f_x1_sp2"]);
        $this->setF_x1_rank2($r["f_x1_rank2"]);
        $this->setF_x1_sp3($r["f_x1_sp3"]);
        $this->setAnnotated_specimen($r["annotated_specimen"]);
        $this->setType($r["type"]);
        $this->setType_memo($r["type_memo"]);
        $this->setCollector($r["collector"]);
        $this->setAddcoll($r["addcoll"]);
        $this->setCollnumber($r["collnumber"]);
        $this->setPrefix($r["prefix"]);
        $this->setNumber($r["number"]);
        $this->setSuffix($r["suffix"]);
        $this->setColldate($r["colldate"]);
        $this->setColldd($r["colldd"]);
        $this->setCollmm($r["collmm"]);
        $this->setCollyy($r["collyy"]);
        $this->setFinal_country($r["final_country"]);
        $this->setFinal_iso2($r["final_iso2"]);
        $this->setAdm1($r["adm1"]);
        $this->setAdm2($r["adm2"]);
        $this->setAdm3($r["adm3"]);
        $this->setAdm4($r["adm4"]);
        $this->setLocal_area($r["local_area"]);
        $this->setLocality($r["locality"]);
        $this->setLat_deg($r["lat_deg"]);
        $this->setLat_min($r["lat_min"]);
        $this->setLat_sec($r["lat_sec"]);
        $this->setNs($r["ns"]);
        $this->setFinal_ns($r["final_ns"]);
        $this->setLatitude($r["latitude"]);
        $this->setLong_deg($r["long_deg"]);
        $this->setLong_min($r["long_min"]);
        $this->setLong_sec($r["long_sec"]);
        $this->setEw($r["ew"]);
        $this->setFinal_ew($r["final_ew"]);
        $this->setLongitude($r["longitude"]);
        $this->setLatitude_georef($r["latitude_georef"]);
        $this->setAlt($r["alt"]);
        $this->setFinal_alt($r["final_alt"]);
        $this->setFinal_cult_stat($r["final_cult_stat"]);
        $this->setFinal_origin_stat($r["final_origin_stat"]);
        $this->setHabitat_txt($r["habitat_txt"]);
        $this->setFl_code($r["fl_code"]);
        $this->setFr_code($r["fr_code"]);
        $this->setDups($r["dups"]);
        $this->setNotes($r["notes"]);
        $this->setComments($r["comments"]);
        $this->setCitation($r["citation"]);
        $this->setFinal_lat($r["final_lat"]);
        $this->setFinal_lon($r["final_lon"]);
        $this->setCoord_source($r["coord_source"]);
        $this->setTaxstand_final_taxon($r["taxstand_final_taxon"]);
    }

    public function getLine($sep) {
        return (isset($this->id) ? $this->id : "").$sep.
        (isset($this->source) ? $this->source : "").$sep.
        (isset($this->provider_institute_id) ? $this->provider_institute_id : "").$sep.
        (isset($this->provider_name) ? $this->provider_name : "").$sep.
        (isset($this->institute_id) ? $this->institute_id : "").$sep.
        (isset($this->institute_name) ? $this->institute_name : "").$sep.
        (isset($this->collection) ? $this->collection : "").$sep.
        (isset($this->source_url) ? $this->source_url : "").$sep.
        (isset($this->availability) ? $this->availability : "").$sep.
        (isset($this->unique_number) ? $this->unique_number : "").$sep.
        (isset($this->barcode) ? $this->barcode : "").$sep.
        (isset($this->vno_1) ? $this->vno_1 : "").$sep.
        (isset($this->vno_2) ? $this->vno_2 : "").$sep.
        (isset($this->x1_family) ? $this->x1_family : "").$sep.
        (isset($this->x1_genus) ? $this->x1_genus : "").$sep.
        (isset($this->x1_sp1) ? $this->x1_sp1 : "").$sep.
        (isset($this->x1_author1) ? $this->x1_author1 : "").$sep.
        (isset($this->x1_rank1) ? $this->x1_rank1 : "").$sep.
        (isset($this->x1_sp2) ? $this->x1_sp2 : "").$sep.
        (isset($this->x1_author2) ? $this->x1_author2 : "").$sep.
        (isset($this->x1_rank2) ? $this->x1_rank2 : "").$sep.
        (isset($this->x1_sp3) ? $this->x1_sp3 : "").$sep.
        (isset($this->x1_author3) ? $this->x1_author3 : "").$sep.
        (isset($this->x1_detby) ? $this->x1_detby : "").$sep.
        (isset($this->x1_detdate) ? $this->x1_detdate : "").$sep.
        (isset($this->x1_detdd) ? $this->x1_detdd : "").$sep.
        (isset($this->x1_detmm) ? $this->x1_detmm : "").$sep.
        (isset($this->x1_detyy) ? $this->x1_detyy : "").$sep.
        (isset($this->x1_detstat) ? $this->x1_detstat : "").$sep.
        (isset($this->x2_genus) ? $this->x2_genus : "").$sep.
        (isset($this->x2_sp1) ? $this->x2_sp1 : "").$sep.
        (isset($this->x2_author1) ? $this->x2_author1 : "").$sep.
        (isset($this->x2_rank1) ? $this->x2_rank1 : "").$sep.
        (isset($this->x2_sp2) ? $this->x2_sp2 : "").$sep.
        (isset($this->x2_rank2) ? $this->x2_rank2 : "").$sep.
        (isset($this->x2_sp3) ? $this->x2_sp3 : "").$sep.
        (isset($this->is_hybrid) ? $this->is_hybrid : "").$sep.
        (isset($this->hybrid_memo) ? $this->hybrid_memo : "").$sep.
        (isset($this->tnrs_final_taxon) ? $this->tnrs_final_taxon : "").$sep.
        (isset($this->taxon_final) ? $this->taxon_final : "").$sep.
        (isset($this->f_x1_genus) ? $this->f_x1_genus : "").$sep.
        (isset($this->f_x1_sp1) ? $this->f_x1_sp1 : "").$sep.
        (isset($this->f_x1_rank1) ? $this->f_x1_rank1 : "").$sep.
        (isset($this->f_x1_sp2) ? $this->f_x1_sp2 : "").$sep.
        (isset($this->f_x1_rank2) ? $this->f_x1_rank2 : "").$sep.
        (isset($this->f_x1_sp3) ? $this->f_x1_sp3 : "").$sep.
        (isset($this->annotated_specimen) ? $this->annotated_specimen : "").$sep.
        (isset($this->type) ? $this->type : "").$sep.
        (isset($this->type_memo) ? $this->type_memo : "").$sep.
        (isset($this->collector) ? $this->collector : "").$sep.
        (isset($this->addcoll) ? $this->addcoll : "").$sep.
        (isset($this->collnumber) ? $this->collnumber : "").$sep.
        (isset($this->prefix) ? $this->prefix : "").$sep.
        (isset($this->number) ? $this->number : "").$sep.
        (isset($this->suffix) ? $this->suffix : "").$sep.
        (isset($this->colldate) ? $this->colldate : "").$sep.
        (isset($this->colldd) ? $this->colldd : "").$sep.
        (isset($this->collmm) ? $this->collmm : "").$sep.
        (isset($this->collyy) ? $this->collyy : "").$sep.
        (isset($this->final_country) ? $this->final_country : "").$sep.
        (isset($this->final_iso2) ? $this->final_iso2 : "").$sep.
        (isset($this->adm1) ? $this->adm1 : "").$sep.
        (isset($this->adm2) ? $this->adm2 : "").$sep.
        (isset($this->adm3) ? $this->adm3 : "").$sep.
        (isset($this->adm4) ? $this->adm4 : "").$sep.
        (isset($this->local_area) ? $this->local_area : "").$sep.
        (isset($this->locality) ? $this->locality : "").$sep.
        (isset($this->lat_deg) ? $this->lat_deg : "").$sep.
        (isset($this->lat_min) ? $this->lat_min : "").$sep.
        (isset($this->lat_sec) ? $this->lat_sec : "").$sep.
        (isset($this->ns) ? $this->ns : "").$sep.
        (isset($this->final_ns) ? $this->final_ns : "").$sep.
        (isset($this->latitude) ? $this->latitude : "").$sep.
        (isset($this->long_deg) ? $this->long_deg : "").$sep.
        (isset($this->long_min) ? $this->long_min : "").$sep.
        (isset($this->long_sec) ? $this->long_sec : "").$sep.
        (isset($this->ew) ? $this->ew : "").$sep.
        (isset($this->final_ew) ? $this->final_ew : "").$sep.
        (isset($this->longitude) ? $this->longitude : "").$sep.
        (isset($this->latitude_georef) ? $this->latitude_georef : "").$sep.
        (isset($this->alt) ? $this->alt : "").$sep.
        (isset($this->final_alt) ? $this->final_alt : "").$sep.
        (isset($this->final_cult_stat) ? $this->final_cult_stat : "").$sep.
        (isset($this->final_origin_stat) ? $this->final_origin_stat : "").$sep.
        (isset($this->habitat_txt) ? $this->habitat_txt : "").$sep.
        (isset($this->fl_code) ? $this->fl_code : "").$sep.
        (isset($this->fr_code) ? $this->fr_code : "").$sep.
        (isset($this->dups) ? $this->dups : "").$sep.
        (isset($this->notes) ? $this->notes : "").$sep.
        (isset($this->comments) ? $this->comments : "").$sep.
        (isset($this->citation) ? $this->citation : "").$sep.
        (isset($this->final_lat) ? $this->final_lat : "").$sep.
        (isset($this->final_lon) ? $this->final_lon : "").$sep.
        (isset($this->coord_source) ? $this->coord_source : "").$sep.
        (isset($this->taxstand_final_taxon) ? $this->taxstand_final_taxon : "").$sep;
    }

}

?>
