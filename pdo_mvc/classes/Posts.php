<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03/12/2018
 * Time: 17:53
 */

require 'Connection.php';

class Posts
{

    private $connectionClass;
    private $conn;

    public function __construct()
    {
        $this->connectionClass = Connection::connection();
        $this->conn = $this->connectionClass->getConnection();
    }

    public function getAllPosts(){
//ben gala
//        sdfsdf
//        sasdfd
        //sdfsdfsdf
    }

}