/*   CENTRO INTERNACIONAL DE AGRICULTURA TROPICAL
 *   Autores:  Hector Fabio Tobon  
 *             Alex Gabriel Castaneda
 *  Maneja los eventos para la seccion de busqueda CWR Inventory
 **/

jQuery(document).ready(function($) {

    var rootURI = "../CWR-Checklist/pages/cwr-occurrences";
    var searchGenusText = "Enter a genus";    
    var searchTaxonText = "Enter a taxon";
    var searchCountryText = "Enter a country name";
    
    // Populating text field help.
    $("#cwr-search #genus").val(searchGenusText);
    $("#cwr-search #taxon").val(searchTaxonText);
    $("#cwr-search #country").val(searchCountryText);
    // Adding effect when page load  
    $("#priority-genera").hide("fast");
    $("#cwr-search").show("slow");      
    
    // Delete or write text to the inputs
    $("#cwr-search #genus").focus(function(event){
        var $target = $(event.target);
        if($target.val() == searchGenusText) {
            $target.val("");
        }
    });

    $("#cwr-search #genus").focusout(function(event){
        var $target = $(event.target);
        if($target.val() == "") {
            $target.val(searchGenusText);
        }
    });

    // Delete or write text to the inputs
    $("#cwr-search #taxon").focus(function(event){
        var $target = $(event.target);
        if($target.val() == searchTaxonText) {
            $target.val("");
        }
    });

    $("#cwr-search #taxon").focusout(function(event){
        var $target = $(event.target);
        if($target.val() == "") {
            $target.val(searchTaxonText);
        }
    });

    // Delete or write text to the inputs
    $("#cwr-search #country").focus(function(event){
        var $target = $(event.target);
        if($target.val() == searchCountryText) {
            $target.val("");
        }
    });

    $("#cwr-search #country").focusout(function(event){
        var $target = $(event.target);
        if($target.val() == "") {
            $target.val(searchCountryText);
        }
    });
    
    /*// Close the table displayed on search by crop genepool
    $("#cwr-search #genepool-table #close-table").click(function(event){
        $("#cwr-search #genepool-table").hide("blind");
    });    */

    // Autocomplete functionality to search by crop genepool
    $("#cwr-search #genus").autocomplete({
        minLength: 1,
        source: rootURI+"/cwr-occurrences-ajax-suggestion.php?search-type=1&limit=10",
        select: function(event, ui) {
            $("#cwr-search #genus").val(ui.item.value);
            $("#cwr-search #submit-genus").click();
        }
    });

    $("#cwr-search #country").autocomplete({
        minLength: 1,
        source: rootURI+"/cwr-occurrences-ajax-suggestion.php?search-type=2&limit=10",
        select: function(event, ui) {
            $("#cwr-search #country").val(ui.item.value);
            $("#cwr-search #submit-country").click();
        }
    });

    $("#cwr-search #taxon").autocomplete({
        minLength: 1,
        source: rootURI+"/cwr-occurrences-ajax-suggestion.php?search-type=3&limit=10",
        select: function(event, ui) {
            $("#cwr-search #taxon").val(ui.item.value);
            $("#cwr-search #submit-taxon").click();
        }
    });
});
