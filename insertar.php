<?php
echo "insertar php\n";
echo $_SERVER["REQUEST_METHOD\n"];
if($_SERVER["REQUEST_METHOD"]=="GET"){//comprobamos que tipo de peticion REST es
    
    require_once 'conexion.php';//accedemos a la conexion de la bbdd
    
    //obtenemos la info
    //$data = file_get_contents('php://input');
   // echo $data;
    echo "voy a ver que valen los parametros\n";
    echo $_GET['Medicion'];
      echo $_GET['Latitud'];
      echo $_GET['Longitud'];
  //  $jsonData=json_decode($data);
    
    //separamos por parametros la informacion procedente de la logica fake
   // $Medicion=$jsonData->{'Medicion'};
   // $Longitud=$jsonData->{'Longitud'};
  //  $Latitud=$jsonData->{'Latitud'};
    $Medicion=$_GET['Medicion'];
        $Latitud=$_GET['Latitud'];
          $Longitud=$_GET['Longitud'];
        
    //montamos la consulta con los parametros y la lanzamos
    $query="INSERT INTO datosmedidos (Medicion,Longitud,Latitud) VALUES('".$Medicion."','".$Longitud."','".$Latitud."');";
    echo $query;
$resultado=$mysql->query($query);
    
    //comprobamos si los datos se han almacenado correctamente
if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
}
   


