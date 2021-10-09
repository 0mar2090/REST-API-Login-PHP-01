<?php

    include_once 'Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $Email=$_REQUEST['Email'];
    $Password=$_REQUEST['Password'];

    $res= $conexion->query("select * from  alumnos where Email='$Email' and Pass='$Password'");
    $datos= array();

    foreach ($res as $row) {
        
        $datos[]=$row;

    }

     echo json_encode($datos);

     /*
         CONSULTA MEDIANTE URL 
         http://localhost/WebServices/Login.php?Email=1213285@senati.pe&Password=j@R8uyXLknfh

     */
?>
