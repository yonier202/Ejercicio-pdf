<?php
    // $pdo = new PDO('mysql:host=localhost; dbname=db_sayitapdf','root','');
    // $pdo->query("INSERT INTO usuarios(Nombre,Rol,Clave,Permisos) VALUES('andres','prr','123','A')");
function conexion(){
    $pdo = new PDO('mysql:host=localhost; dbname=db_sayitapdf','root','');
    return $pdo;
}