<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 07.10.2017
 * Time: 17:55
 */



class DBConnector
{
    public $db;
    public $jsonUtils;
    function __construct() {
        require_once  '../projectAI/utils/JSONUtils.php';
        try
        {
            require_once 'connection_data.php';
            $this->db = new PDO('mysql:host='.$server_address.';dbname='.$db_name.';charset=utf8', $user_login, $user_password);
            $this->jsonUtils = new JSONUtils();
        }
        catch (PDOException $e)
        {
            print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getTable($tableName) {
        $query = 'SELECT * FROM '.$tableName;
        $query = $this->db->query($query);
        $rows = array();

        if ($query != null) {
            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
            }
            $this->jsonUtils->convert_to_json($rows,200,'Success, table downloaded');
            $query->closeCursor();
        }
        else {
            $this->jsonUtils->throwError(101,'Error while getting table');
        }
    }


}