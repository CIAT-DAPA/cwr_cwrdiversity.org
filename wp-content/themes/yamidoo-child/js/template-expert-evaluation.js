jQuery(document).ready(function($) {
    /*Nombres de los Gene-pools*/
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
    $LETTUCE = "Lettuce"
    $MAIZE = "Maize";
    $MANGO = "Mango";
    $MILLET_PANICUM = "Millet_panicum";
    $MILLET_SETARIA = "Millet_setaria";
    $PAPAYA = "Papaya";
    $PINEAPPLE = "Pineapple";
    $PEAR = "Pear";
    $PRUNUS = "Prunus";
    $QUINOA = "Quinoa";
    $SAFFLOWER = "Safflower";
    $SOYBEAN = "Soybean";
    $SPINACH = "Spinach";
    $SQUASH = "Squash";
    $STRAWBERRY = "Strawberry";
    $SUGAR_CANE = "Sugar_cane";
    $TOMATO = "Tomato";
    $VIGNA = "Vigna";
    $WATERMELON = "Watermelon";
    
    $AVENA = "Avena";
    $CAJANUS = "Cajanus";
    $CICER = "Cicer";
    $DAUCUS = "Daucus";
    $EGGPLANT = "Solanum_Eggplant";
    $ELEUSINE = "Eleusine";
    $HELIANTHUS = "Helianthus";
    $HORDEUM = "Hordeum";
    $LATHYRUS = "Lathyrus";
    $IPOMOEA = "Ipomoea";
    $LENS = "Lens";
    $MALUS = "Malus";
    $MEDICAGO = "Medicago";
    $MUSA = "Musa";
    $PENNISETUM = "Pennisetum"
    $PHASEOLUS = "Phaseolus";
    $PISUM = "Pisum";
    $POTATO = "Solanum_Potato";
    $SECALE = "Secale";
    $SORGHUM = "Sorghum";
    $RICE = "Oryza";
    $VICIA = "Vicia";
    $WHEAT = "Wheat";
    
    /*Elementos ocultos hasta seleccionar gene-pool*/
    /* Ocultando Formularios*/
    $("#Evaluation_"+$ALLIUM).slideUp("fast");
    $("#Evaluation_"+$ASPARAGUS).slideUp("fast");
    $("#Evaluation_"+$BEET).slideUp("fast");
    $("#Evaluation_"+$BRASSICA).slideUp("fast");
    $("#Evaluation_"+$BREADFRUIT).slideUp("fast");
    $("#Evaluation_"+$CACAO).slideUp("fast");
    $("#Evaluation_"+$CAPSICUM).slideUp("fast");
    $("#Evaluation_"+$CITRUS).slideUp("fast");
    $("#Evaluation_"+$COCOYAM).slideUp("fast");
    $("#Evaluation_"+$COTTON).slideUp("fast");
    $("#Evaluation_"+$CUCUMIS).slideUp("fast");
    $("#Evaluation_"+$DIOSCOREA).slideUp("fast");
    $("#Evaluation_"+$GRAPE).slideUp("fast");
    $("#Evaluation_"+$GROUNDNUT).slideUp("fast");
    $("#Evaluation_"+$LETTUCE).slideUp("fast");
    $("#Evaluation_"+$MAIZE).slideUp("fast");
    $("#Evaluation_"+$MANGO).slideUp("fast");
    $("#Evaluation_"+$MILLET_PANICUM).slideUp("fast");
    $("#Evaluation_"+$MILLET_SETARIA).slideUp("fast");
    $("#Evaluation_"+$PEAR).slideUp("fast");
    $("#Evaluation_"+$PAPAYA).slideUp("fast");
    $("#Evaluation_"+$PINEAPPLE).slideUp("fast");
    $("#Evaluation_"+$PRUNUS).slideUp("fast");
    $("#Evaluation_"+$QUINOA).slideUp("fast");
    $("#Evaluation_"+$SAFFLOWER).slideUp("fast");
    $("#Evaluation_"+$SOYBEAN).slideUp("fast");
    $("#Evaluation_"+$SPINACH).slideUp("fast");
    $("#Evaluation_"+$SQUASH).slideUp("fast");
    $("#Evaluation_"+$STRAWBERRY).slideUp("fast");
    $("#Evaluation_"+$SUGAR_CANE).slideUp("fast");
    $("#Evaluation_"+$TOMATO).slideUp("fast");
    $("#Evaluation_"+$VIGNA).slideUp("fast");
    $("#Evaluation_"+$WATERMELON).slideUp("fast");
    
    $("#Evaluation_"+$AVENA).slideUp("fast");
    $("#Evaluation_"+$CAJANUS).slideUp("fast");
    $("#Evaluation_"+$CICER).slideUp("fast");
    $("#Evaluation_"+$DAUCUS).slideUp("fast");
    $("#Evaluation_"+$EGGPLANT).slideUp("fast");
    $("#Evaluation_"+$ELEUSINE).slideUp("fast");
    $("#Evaluation_"+$HELIANTHUS).slideUp("fast");
    $("#Evaluation_"+$HORDEUM).slideUp("fast");
    $("#Evaluation_"+$LATHYRUS).slideUp("fast");
    $("#Evaluation_"+$IPOMOEA).slideUp("fast");
    $("#Evaluation_"+$LENS).slideUp("fast");
    $("#Evaluation_"+$MALUS).slideUp("fast");
    $("#Evaluation_"+$MEDICAGO).slideUp("fast");
    $("#Evaluation_"+$MUSA).slideUp("fast");
    $("#Evaluation_"+$PENNISETUM).slideUp("fast");
    $("#Evaluation_"+$PHASEOLUS).slideUp("fast");
    $("#Evaluation_"+$PISUM).slideUp("fast");
    $("#Evaluation_"+$POTATO).slideUp("fast");
    $("#Evaluation_"+$SECALE).slideUp("fast");
    $("#Evaluation_"+$SORGHUM).slideUp("fast");
    $("#Evaluation_"+$RICE).slideUp("fast");
    $("#Evaluation_"+$VICIA).slideUp("fast");
    $("#Evaluation_"+$WHEAT).slideUp("fast");
   
    $("#genepool-search").change(function() {
        $("#genepool-search").hideAllForms();
        $("#Evaluation_"+$("#select-genepool").val()).slideDown("slow");
    });
    
    $("tr").hover(function(){
        $(this).hide(100).show(200);
    }, function(){
        });
        
    jQuery.fn.showTable = function(){
        alert("entrada");
    }
    
    jQuery.fn.hideAllForms = function(){
        /* Ocultando formularios */
        $("#Evaluation_"+$ALLIUM).slideUp("fast");
        $("#Evaluation_"+$ASPARAGUS).slideUp("fast");
        $("#Evaluation_"+$BEET).slideUp("fast");
        $("#Evaluation_"+$BRASSICA).slideUp("fast");
        $("#Evaluation_"+$BREADFRUIT).slideUp("fast");
        $("#Evaluation_"+$CACAO).slideUp("fast");
        $("#Evaluation_"+$CAPSICUM).slideUp("fast");
        $("#Evaluation_"+$CITRUS).slideUp("fast");
        $("#Evaluation_"+$COCOYAM).slideUp("fast");
        $("#Evaluation_"+$COTTON).slideUp("fast");
        $("#Evaluation_"+$CUCUMIS).slideUp("fast");
        $("#Evaluation_"+$DIOSCOREA).slideUp("fast");
        $("#Evaluation_"+$GRAPE).slideUp("fast");
        $("#Evaluation_"+$GROUNDNUT).slideUp("fast");
        $("#Evaluation_"+$LETTUCE).slideUp("fast");
        $("#Evaluation_"+$MAIZE).slideUp("fast");
        $("#Evaluation_"+$MANGO).slideUp("fast");
        $("#Evaluation_"+$MILLET_PANICUM).slideUp("fast");
        $("#Evaluation_"+$MILLET_SETARIA).slideUp("fast");
        $("#Evaluation_"+$PEAR).slideUp("fast");
        $("#Evaluation_"+$PAPAYA).slideUp("fast");
        $("#Evaluation_"+$PINEAPPLE).slideUp("fast");
        $("#Evaluation_"+$PRUNUS).slideUp("fast");
        $("#Evaluation_"+$QUINOA).slideUp("fast");
        $("#Evaluation_"+$SAFFLOWER).slideUp("fast");
        $("#Evaluation_"+$SOYBEAN).slideUp("fast");
        $("#Evaluation_"+$SPINACH).slideUp("fast");
        $("#Evaluation_"+$SQUASH).slideUp("fast");
        $("#Evaluation_"+$STRAWBERRY).slideUp("fast");
        $("#Evaluation_"+$SUGAR_CANE).slideUp("fast");
        $("#Evaluation_"+$TOMATO).slideUp("fast");
        $("#Evaluation_"+$VIGNA).slideUp("fast");
        $("#Evaluation_"+$WATERMELON).slideUp("fast");
        
        $("#Evaluation_"+$AVENA).slideUp("fast");
        $("#Evaluation_"+$CAJANUS).slideUp("fast");
        $("#Evaluation_"+$CICER).slideUp("fast");
        $("#Evaluation_"+$DAUCUS).slideUp("fast");
        $("#Evaluation_"+$EGGPLANT).slideUp("fast");
        $("#Evaluation_"+$ELEUSINE).slideUp("fast");
        $("#Evaluation_"+$HELIANTHUS).slideUp("fast");
        $("#Evaluation_"+$HORDEUM).slideUp("fast");
        $("#Evaluation_"+$LATHYRUS).slideUp("fast");
        $("#Evaluation_"+$IPOMOEA).slideUp("fast");
        $("#Evaluation_"+$LENS).slideUp("fast");
        $("#Evaluation_"+$MALUS).slideUp("fast");
        $("#Evaluation_"+$MEDICAGO).slideUp("fast");
        $("#Evaluation_"+$MUSA).slideUp("fast");
        $("#Evaluation_"+$PENNISETUM).slideUp("fast");
        $("#Evaluation_"+$PHASEOLUS).slideUp("fast");
        $("#Evaluation_"+$PISUM).slideUp("fast");
        $("#Evaluation_"+$POTATO).slideUp("fast");
        $("#Evaluation_"+$SECALE).slideUp("fast");
        $("#Evaluation_"+$SORGHUM).slideUp("fast");
        $("#Evaluation_"+$RICE).slideUp("fast");
        $("#Evaluation_"+$VICIA).slideUp("fast");
        $("#Evaluation_"+$WHEAT).slideUp("fast");
    };
    
});



