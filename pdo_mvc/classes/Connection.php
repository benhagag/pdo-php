<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/12/2018
 * Time: 17:47
 */

class Connection
{

    private $conn;
    private $host;
    private $user;
    private $password;
    private $dbname;
    static $instance=null;


    static function connection(){
        if(self::$instance==null){

            return self::$instance=new Connection();

        }else{

            return self::$instance;
        }

    }

    public function getConnection() {
        return $this->conn;
    }

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'pdo';

        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function __destruct(){

        $this->conn=null;
    }


}