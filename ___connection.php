<?php
class Connection
{
    static function Connect(): PDO
    {
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new PDO("mysql:host=$servername;dbname=php_test", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return null;
        }
    }
}
