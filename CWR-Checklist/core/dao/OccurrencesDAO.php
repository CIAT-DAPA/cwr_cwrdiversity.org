<?php

/**
 *
 * @author Steven Sotelo
 */
interface OccurrencesDAO {

    /**
     * @param type $genus - Genus name or part of it to search.     
     * @return int - count of Occurrences objects
     */
    public function getCountOccurrencesByGenus($genus);

    /**
     * @param type $genus - Genus name or part of it to search.
     * @param type $limit - limit of rows.
     * @param type $from - row to start.
     * @return array - Array of Occurrences objects
     */
    public function getOccurrencesByGenus($genus,$limit,$from);
    
    /**
     * @param type $country - Country name or part of it to search.
     * @return int - count of Occurrences objects
     */
    public function getCountOccurrencesByCountry($country);
    /**
     * @param type $country - Country name or part of it to search.
     * @param type $limit - limit of rows.
     * @param type $from - row to start.
     * @return array - Array of Occurrences objects
     */
    public function getOccurrencesByCountry($country,$limit,$from);
    
    /**
     * @param type $taxon - Taxon name or part of it to search.
     * @return int - count of Occurrences objects
     */
    public function getCountOccurrencesByTaxon($taxon);
    /**
     * @param type $taxon - Taxon name or part of it to search.
     * @param type $limit - limit of rows.
     * @param type $from - row to start.
     * @return array - Array of Occurrences objects
     */
    public function getOccurrencesByTaxon($taxon,$limit,$from);
}


?>
