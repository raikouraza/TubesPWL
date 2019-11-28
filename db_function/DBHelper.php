<?php


class DBHelper{

    public static function createMySQLConnection(){
        $link = new PDO('mysql:host=localhost;dbname=mydb','root','');
        $link->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
        $link->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);

        return $link;

    }
}