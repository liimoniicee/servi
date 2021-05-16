

<?php
include '../conexion.php';


echo "Contraseña:".$var_contraseña = $_POST['contra'];
$pass_encriptada=md5($var_contraseña);
echo "<br>";
echo "Nombre:".$var_nombre = $_POST['nom'];
echo "<br>";
echo "Apellido_p:".$var_apellidop = $_POST['apep'];
echo "<br>";
echo "Apellido Materno:".$var_apellidom = $_POST['apem'];
echo "<br>";
echo "Email:".$var_cel = $_POST['cel'];
echo "<br>";
echo "Email:".$var_email = $_POST['email'];



$validar="SELECT correo_sup FROM supervisor WHERE correo_sup='$var_email'";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){

    echo "<script>alert('*ERROR* Ya existe ese usuario, intenta con otro!')</script>";
    echo "<script>window.open('registro_admin.html','_self')</script>";

}
// ------------ Si no esta registrado el usuario continua el script
else
{


$sql = "INSERT INTO supervisor (nom_sup,ape_pat_sup,ape_mat_sup,correo_sup,tel_sup,contra_sup)
VALUES ('$var_nombre' , '$var_apellidop' , '$var_apellidom' ,'$var_email','$var_cel','$pass_encriptada')";



if ($conn->query($sql) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    //echo'<script type="text/javascript">
    //alert("Felicidades Te has registrado con exito!");
    //window.location.href="registro.html";
    //</script>';
	//header("Location: index.html");

        echo "<script>alert('Se a guardado el registro correctamente!')</script>";
        echo "<script>window.open('index.html','_self')</script>";


} else {
      echo "<script>alert('No se pudo guardar correctamente, intentelo de nuevo!')</script>";
        echo "<script>window.open('registro_admin.html','_self')</script>";
   //echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>
