<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 07.10.2017
 * Time: 22:23
 */

require_once  SERVER_ROOT.'/projectAI/utils/JSONUtils.php';
$test = new DBConnector();
$test->getRecordsByID("testowa_tabela", 1);