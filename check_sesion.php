<?php


    $var_email = $_POST['email'];
		$var_contra = md5($_POST['contra']);


    include'conexion.php';

$query = "SELECT contra_alu, correo_alu FROM alumno where correo_alu ='$var_email' and contra_alu = '$var_contra' ";
$resultado = $conn->query($query);


if($resultado->num_rows > 0){
    echo "<script>alert('succesfull')</script>";
    echo "<script>window.open('menu.html','_self')</script>";

	}else{
    echo "<script>alert('*ERROR* usuario y/o contrasena incorrecto')</script>";
    echo "<script>window.open('index.html','_self')</script>";
}

?>
