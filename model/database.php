<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=1;charset=utf8', 'root', '');//clase de conexion es Database y nos hace acceder a la CADENA DE CONEXION y charset es para caracteres especiales como (á,@,#,"",) root es el nombre de usuario
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//APLICA ATRIBUTOS DE ERRORES	
        return $pdo;//objetos de bases de datos en php
        //
    }
}