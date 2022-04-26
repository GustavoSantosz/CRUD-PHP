<?php
session_start();

global $conn;

$conn = new PDO("mysql:dbname=loja;host=localhost", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


class Util {

    public static function AntiInjector($text)
    {
        return addslashes(htmlspecialchars($text));
    }

}

?>