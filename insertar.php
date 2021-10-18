<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){//comprobamos que tipo de peticion REST es
    
    require_once 'conexion.php';//accedemos a la conexion de la bbdd
    
    //obtenemos la info
    $data = file_get_contents('php://input');
      echo "DATAAAAAAAAAAA\n";
    echo $data;
    echo "DATAAAAAAAAAAA\n";
    $jsonData=json_decode($data);
    
    //separamos por parametros la informacion procedente de la logica fake
    $Medicion=$jsonData->{'Medicion'};
    $Longitud=$jsonData->{'Longitud'};
    $Latitud=$jsonData->{'Latitud'};
    $Major=$jsonData->{'Major'};
    $Minor=$jsonData->{'Minor'};
    echo "AAAAAAAAAAAAAAAAAAAAAAAAA\n";
    echo $Medicion;
    echo $Longitud;
    echo $Latitud;
    echo $Major;
    echo $Minor;
    
    //montamos la consulta con los parametros y la lanzamos
    echo "VAMOS A VER LA CADENA\n";
    $query="INSERT INTO datosmedidos (Medicion,Longitud,Latitud,Major,Minor) VALUES('".$Medicion."','".$Longitud."','".$Latitud."','".$Major."','".$Minor."');";
    $resultado=$mysql->query($query);
    echo "BBBBBBBBBBBBBB\n";
    echo $resultado;
    //comprobamos si los datos se han almacenado correctamente
    if($resultado==true){
        echo "Los datos se introducen de forma correcta";
    }else{
        echo "Error al insertar datos";
    }
}