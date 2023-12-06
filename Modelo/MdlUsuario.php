<?php
require_once "conexion.php";
class UsuarioMdl {
    static public function mdlMostrarUsuario($valor, $valor2) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuarios WHERE Usuario = :Usuario AND Contrasena = :Contrasena");
        $stmt->bindParam(":Usuario", $valor, PDO::PARAM_STR);
        $stmt->bindParam(":Contrasena", $valor2, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt -> fetch();
    }
}