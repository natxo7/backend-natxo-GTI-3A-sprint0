<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $data = file_get_contents('php://input');
    echo "AAAAA";
    echo $data;
    echo "BBBB";
    $jsonData=json_decode($data);
    $Medicion=$jsonData->{'Medicion'};;
    
    $query="INSERT INTO datosmedidos (Medicion) VALUES('".$Medicion."')";
$resultado=$mysql->query($query);
if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
}