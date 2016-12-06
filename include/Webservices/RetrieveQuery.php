<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

require_once("include/Webservices/Query.php");

function vtws_retrievequery($module, $andWhere, $orWhere, $user) {

    global $log, $adb;

    $select = "SELECT * FROM " . $module . " WHERE ";
    $and = array();
    foreach ($andWhere as $key => $value) {
        $and[] = $key . "='" . $value."'";
    }
    $whereString = implode(" AND ", $and);
    $or = array();
    foreach ($orWhere as $key => $value) {
        $or[] = $key . "='" . $value."'";
    }
    if (count($or) > 1)
        $whereString = $whereString . " AND " . implode(" OR ", $or);
    $select = $select . $whereString.';';

    $result = vtws_query($select, $user);
    return $result;
}

?>
