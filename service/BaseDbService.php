<?php

abstract class BaseDbService
{
    private $connect;

    public function newConnection()
    {
        $dbServer = 'localhost';
        $dbName = 'book_catalog';
        $dbUser = 'root';
        $dbPassword = 'root';
        $this->connect = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);
        return $this->connect;
    }

    public function closeConnection()
    {
        $this->connect->close();
    }

}