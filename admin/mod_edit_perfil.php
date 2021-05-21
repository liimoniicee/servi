<head>
  <!-- Bootstrap core CSS     -->
  <link href= "../assets/css/bootstrap.min.css" rel="stylesheet" />

  <

</head>

<script src= "../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src= "../assets/js/jquery-ui.min.js" type="text/javascript"></script>

<script src= "../assets/js/bootstrap.min.js" type="text/javascript"></script>


<!-- Promise Library for SweetAlert2 working on IE -->
<script src= "../assets/js/es6-promise-auto.min.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src= "../assets/js/sweetalert2.js"></script>
  <?php


  require_once"../conexion.php";

  $var_nombre     = $_POST['nombre'];
  $var_apellidop  = $_POST['apep'];
  $var_apellidom  = $_POST['apem'];
  $var_correo  = $_POST['correo'];
  $var_tel    = $_POST['tel'];


  $var_contra = $_POST['contra'];
  $pass_encriptada=md5($var_contra);

$var_id = 13;

  $sql = " UPDATE usuario SET
                              nombre ='$var_nombre',
  														Apellido_Paterno='$var_apellidop',
  														Apellido_Materno='$var_apellidom',
  														Correo='$var_correo',
  														Telefono='$var_tel',
  														Contra='$pass_encriptada'
                              WHERE Id_Usuario = 13";


  		if($conn->query($sql) === TRUE){

        ?>
         <body>
         <script>
         swal({
        title: "Success",
        text: "Actualizacion correcta",
        type: "success"
        }).then(function() {
        // Redirect the user
        window.location.href = "edit_perfil.php";
        console.log('The Ok Button was clicked.');
        });
             </script>
        </body>
         <?php
  	}else {
      ?>
       <body>
       <script>
       swal({
     title: "Error!",
     text: "Algo esta mal",
     type: "error"
     }).then(function() {
     // Redirect the user
     window.location.href = "edit_perfil.php";
     console.log('The Ok Button was clicked.');
     });
           </script>
    </body>
       <?php
  	}

  		$conn->close();

  ?>
