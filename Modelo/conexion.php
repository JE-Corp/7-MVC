<?php
class Conexion{
        static public function conectar(){
            //Change your creds as needed
            //$enlace = new PDO("mysql:host=localhost;dbname=7_lemi_mvc","root","1976197720032006");
            $enlace = new PDO("mysql:host=localhost;dbname=7_lemi_mvc","root","alpine");
            $enlace->exec("set names utf8");
            return $enlace;
        }
}
?>