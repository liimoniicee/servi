<?php

include '../conexion.php';



$response = array();
if(isset($_POST['id'])){
  $id_m = $_POST['id'];


  $consulta = "SELECT * FROM doc_subir WHERE Id_Doc_Subir = $id_m";


   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id" => $id_m,
    "sta"  =>  $row["Status_Doc"],
    "comen"  =>  $row["Comentarios_Doc"]);



   }
   }

  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id_m;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}

echo json_encode($response);

 ?>
