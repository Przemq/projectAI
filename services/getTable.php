<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 07.10.2017
 * Time: 22:23
 */
//$server_root = 'http://przem94.ayz.pl';

require_once '../database/DBConnector.php';
$test = new DBConnector();
$test->getRecordsByID("testowa_tabela", 1);