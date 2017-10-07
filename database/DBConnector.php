<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 07.10.2017
 * Time: 17:55
 */



class DBConnector
{
    function __construct() {
        try
        {
            require_once 'connection_data.php';
            $db = new PDO('mysql:host='.$server_address.';dbname='.$db_name.';charset=utf8', $user_login, $user_password);
        }
        catch (PDOException $e)
        {
            print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}