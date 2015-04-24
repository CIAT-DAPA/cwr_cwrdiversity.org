<?php

require_once '../../config/config.php';
require_once('../../config/smarty.php');
require_once WORKSPACE_DIR . 'core/model/Occurrences.php';
require_once WORKSPACE_DIR . 'core/dao/factories/DAOFactory.php';

if (isset($_GET['search-type']) && $_GET['search-type'] != '') {
    $term = $_GET['term'];
    $limit = $_GET['limit'];
    $type = $_GET['search-type'];
    $occurrencesDAO = DAOFactory::getDAOFactory()->getOccurrencesDAO();
    echo json_encode($occurrencesDAO->suggestList($type,$limit,$term));
}

?>