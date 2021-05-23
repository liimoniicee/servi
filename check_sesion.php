<?php


    $var_email = $_POST['email'];
		$var_contra = md5($_POST['contra']);


    include'conexion.php';

$query = "SELECT contra, correo FROM usuario where correo ='$var_email' and contra = '$var_contra' ";
$resultado = $conn->query($query);


if($resultado->num_rows > 0){
    echo "<script>alert('succesfull')</script>";
    echo "<script>window.open('menu.html','_self')</script>";

	}else{
    echo "<script>alert('*ERROR* usuario y/o contrasena incorrecto')</script>";
    echo "<script>window.open('index.html','_self')</script>";
}

?>
