<?php
    include ('./conexion.php');
    $contenedor="";
    $contenedor.='<link rel="stylesheet" href="style.css">';

    $usuario=$_REQUEST['usuario'];
    $rol=$_REQUEST['rol'];
    $clave=$_REQUEST['clave'];
    $permisos=$_REQUEST['permisos'];

    $guardar=conexion();
    $guardar=$guardar->prepare("INSERT INTO usuarios(Nombre,Rol,Clave,Permisos) VALUES(:usuario,:rol,:clave,:permisos)");

    $guardar->bindParam(':usuario', $usuario);
    $guardar->bindParam(':rol', $rol);
    $guardar->bindParam(':clave', $clave);
    $guardar->bindParam(':permisos', $permisos);

    $guardar->execute();

    if ($guardar->rowCount()==1){
        $contenedor.='

        <div class="contenedor">
            <h1 class="centrar">Registro Exitoso</h1>
            <a class="buttom" href="reporte.php">Imprimir Registros</a>
        </div>
        ';

        echo $contenedor;
    }else{
        $contenedor.='

        <div class="contenedor">
            <h1 class="centrar">F</h1>
        </div>
        ';

        echo $contenedor;
    }