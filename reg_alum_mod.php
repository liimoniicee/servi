

<?php
include 'conexion.php';


echo "Contraseña:".$var_contraseña = $_POST['contra'];
$pass_encriptada=md5($var_contraseña);
echo "<br>";
echo "Nombre:".$var_nombre = $_POST['nom'];
echo "<br>";
echo "Apellido_p:".$var_apellidop = $_POST['apep'];
echo "<br>";
echo "Apellido Materno:".$var_apellidom = $_POST['apem'];
echo "<br>";
echo "Cel:".$var_cel = $_POST['cel'];
echo "<br>";
echo "Email:".$var_email = $_POST['email'];
echo "<br>";
echo "Carrera:".$var_carrera = $_POST['car'];
echo "<br>";
echo "Semestre:".$var_semestre = $_POST['sem'];
echo "<br>";
echo "NumeroControl:".$var_ncontrol = $_POST['ncontrol'];
echo "<br>";
echo "Periodo:".$var_periodo = $_POST['periodo'];


$validar="SELECT correo_alu FROM alumno WHERE correo_alu='$var_email'";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){

    echo "<script>alert('*ERROR* Ya existe ese usuario, intenta con otro!')</script>";
    echo "<script>window.open('registro_alum.html','_self')</script>";

}
// ------------ Si no esta registrado el usuario continua el script
else
{


$sql = "INSERT INTO alumno (num_control_alu, nom_alu, ape_pat_alu, ape_mat_alu, carrera_alu, semestre_alu, periodo_alu, telefono_alu, correo_alu, contra_alu, status_alu)
VALUES ('$var_ncontrol', '$var_nombre' , '$var_apellidop' , '$var_apellidom' ,'$var_carrera','$var_semestre','$var_periodo','$var_cel','$var_email','$pass_encriptada','1')";



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
      //echo "<script>alert('No se pudo guardar correctamente, intentelo de nuevo!')</script>";
        //echo "<script>window.open('registro_alum.html','_self')</script>";
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>
