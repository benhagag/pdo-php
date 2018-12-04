<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/12/2018
 * Time: 17:53
 */

require_once('Connection.php');

class Posts
{

    private $connectionClass;
    private $conn;

    public function __construct()
    {
        $this->connectionClass = Connection::connection();
        $this->conn = $this->connectionClass->getConnection();
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public function getAllPosts()
    {
        try{
        $stmt = $this->conn->prepare("SELECT * FROM posts");
        $stmt->execute();
           return $stmt;
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

}