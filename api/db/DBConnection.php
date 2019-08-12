<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 7/16/2019
 * Time: 6:43 PM
 */

class DBConnection
{
    private $host = "localhost";
    private $username = "root";
    private $password = "1234";
    private $database = "possystem";
    private $port = "3306";


    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli(

            $this->host, $this->username, $this->password, $this->database, $this->port
        );


        if ($this->connection->connect_errno) {

            echo $this->connection->connect_error;
            die();

        }
    }

    public function getConnection()
    {

        return $this->connection;
    }


}