

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

//-------------- Valida que el correo no haya sido registrado anteriormente
$validar="SELECT correo FROM usuario WHERE correo='$var_email'";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){

    echo "<script>alert('*ERROR* Ya existe ese usuario, intenta con otro!')</script>";
    echo "<script>window.open('registro_alum.html','_self')</script>";

}
// ------------ Si no esta registrado el usuario continua el script
else
{

//------- inserta el usuario
$inserta_usu = "INSERT INTO usuario(nombre, apellido_materno, apellido_paterno, teleno, correo, contra)
VALUES ('$var_nombre' , '$var_apellidop' , '$var_apellidom' ,'$var_cel','$var_email','$pass_encriptada')";



if ($conn->query($inserta_usu) === TRUE) {

  //------- consulta ultimo usuario para relacionarlo con la tabla alumno
$consultausu = "select * from usuario order by id desc;"
$usu_alu = $conn->query($consultausu);

$inserta_alu = "INSERT INTO alumno(num_control_alu, carrera_alu, semestre_alu, periodo_alu, status_alu)
VALUES ('$var_ncontrol','$var_carrera','$var_semestre','$var_periodo','1')";
} else {

}


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
