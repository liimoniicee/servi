<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale= 1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">


    <!-- side bar -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
  <!-- Font Awesome JS -->
  <script  src="../assets/js/fontawesome.js"></script>
  <script  src="../assets/js/fontawesome.min.js"></script>

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <title>Editar perfil</title>
  </head>



  <?php

  include '../conexion.php';
$id = 13;
   $sql = "SELECT * FROM usuario, administrador WHERE Id_Usuario = '$id' ";
   $resultado = $conn->query($sql);

  if ($resultado->num_rows > 0) {
           while ($row= $resultado->fetch_assoc()) {

            $var_nombre     =     $row['Nombre'];
            $var_apellidop  =     $row['Apellido_Paterno'];
            $var_apellidom  =     $row['Apellido_Materno'];
            $var_correo  =     $row['Correo'];
            $var_tel    =     $row['Telefono'];
            $var_contra   =     $row['Contra'];
            $var_numc   =     $row['Num_Control_Emp'];
            $var_img_usu   =     $row['Img_Perfil'];

          }

      }   else {
  echo "¡ No se ha encontrado ningún registro !";
  }

  ?>









  <body>
    <!---primer menu-->
    <nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: #0B231E">
      <div class="container-fluid">
      <a href="#" class="nav-item active mb-0 h1"></a>
        <img class="d-inline-block align-top" src="../imag/logo.png" width="80" height="30" alt="">

      <!--activacion de boton debajo de los 560px-responsive action-->
      <button type="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        class="navbar-toggler"
        aria-controls="navbarNav"
        arial-expanded="false"
        arial-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a href="#" class="nav-link active text-white">Gobierno</a>
            </li>
            <li class="nav-item active">
              <a href="#" class="nav-link text-white">Participa</a>
            </li>
            <li class="nav-item active">
              <a href="#" class="nav-link text-white">Datos</a>
            </li>
            <a href="https://www.gob.mx/busqueda" class="navbar-brand mb-0 h1">
             <img class="d-inline-block ms-2" src="../imag/lupa.png" width="25" height="25" alt=""></a>
           </ul>
         </div>
       </div>
       </nav>

<!--imagen banner-->
<div class="container-sm">
    <ul class="row">
     <div class="col-sm m-auto ms-1 text-center">
       <img href="#" src="../imag/pleca-gob1.png" width="250" height="75" class="img-fluid" alt="">
       </div>
       <div class="col-sm m-auto ms-1 me-1 text-center">
         <img href="#" src="../imag/pleca-gob2.png" width="251" height="75" class="img-fluid me-5" alt="">
         </div>
         <div class="col-sm m-auto ms-1 me-1 text-center">
           <img href="#" src="../imag/pleca_tecnm.jpg" width="163" height="75" class="img-fluid me-5" alt="">
           </div>
           <div class="col-sm m-auto ms-1 me-1 text-center">
             <img href="#" src="../imag\pleca-ites2.png" width="213" height="75" class="img-fluid me-5" alt="">
             </div>
    </ul>
  </div>


  <body>



            <div class="container">
              <nav class="navbar navbar-expand-lg " style="background-color: #1b396a;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="ti-align-left text-light"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color: #fff">
        <li class="nav-item">
          <a class="nav-link text-light"  aria-current="page" href="#">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light"  aria-current="page" href="#">Documentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Revisar documentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="#">modificar contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="#">modificar usuarios</a>
        </li>




      </ul>
      <div class="d-flex">
        <i class="ti-user nav-link text-light" aria-hidden="true"></i>
      <a class="nav-link text-light" aria-current="page" href="#">example user</a>
      </div>
    </div>
  </div>
</nav>
</br>
<h3>Editar perfil</h3>
</br>

<form action="mod_edit_perfil.php" method="post" enctype="multipart/form-data">
  <div class="form" style="padding: 20px">
        <img src="<?php echo $var_img_usu ?>" alt="..." class="rounded mx-auto d-block" style="width:200px; height: 200px; padding:20px;"></img>

                <!--Almacena la imagen seleccionada en el servidor donde se encuentra usando validaciones que procporciona inpit-->
                <div class="col-md-4 mx-auto">
        <input name="foto" class="form-control"  type="file" required  accept="image/gif, image/jpeg, image/png"> </input>
      </br>
</div>
</div>

  <div class="row">
    <div class="form-group col-md-4">
      <label for="input">Nombre</label>
      <input type="text" name="nombre" class="form-control" id="" value= "<?php echo $var_nombre ?>" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="input">Apellido paterno</label>
      <input type="text" name="apep" class="form-control" id="" value= "<?php echo $var_apellidop ?>" placeholder="Apellido p">
    </div>
    <div class="form-group col-md-4">
      <label for="input">Apellido materno</label>
      <input type="text" name="apem" class="form-control" id="" value= "<?php echo $var_apellidom ?>" placeholder="Apellido m">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="input">Numero control de empleado</label>
      <input type="text" name="ncontrol" class="form-control" id="" value= "<?php echo $var_numc ?>" placeholder="# control de empleado">
    </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Correo</label>
    <input type="email" name="correo" class="form-control" id="" value= "<?php echo $var_correo ?>" placeholder="email">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Contrasena</label>
    <input type="password" name="contra" class="form-control" id="" value= "<?php echo $var_contra ?>" placeholder="Password">
  </div>
  </div>
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputCity">Telefono</label>
      <input type="number" name="tel" class="form-control" value= "<?php echo $var_tel ?>" id="">
    </div>

  </div>
</br>

  <button type="submit"  class="btn btn-primary">Guardar cambios</button>
</form>


          </div>
          </br>





<!--+++++++++++++Footer-1-->
<footer class="text-center text-lg-start p-0" style="background-color: #1B396A">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-1">
        <h6 class=" text-white">Dirección</h6>
        <p class="text-white col-8"><small>Boulevard Tecnológico de Los Cabos s/n, Colonia Guaymitas, CP23407, San José del Cabo B.C.S.</small></p>
        <p></p>
        <h6 class=" text-white">Contacto</h6>
        <p class="text-white"><small>Tel. 624-14 25 939 / 624-16 32 250</small></p>
      </div>
      <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
        <h6 class="text-white">Enlaces</h6>
        <ul class="list-unstyled mb-0">
          <li class="nav-item ">
            <a class="text-link text-white"style="text-decoration:none" href="#"><small>Portal de Obligaciones de Transparencia</small></a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="#"><small>INAI</small></a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="#"><small>Buzón de Sugerencias</small></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <a href="https://goo.gl/maps/49utvn1etMmBzrUc9">
          <img src="../imag/ubicacion.png" height="230px" width="350px" type="button">
        </a>
      </div>
    </div>
  </div>
</footer>

<!--+++++++++++++++Footer-2-->
<footer class="text-center mt-3 text-lg-start p-0" style="background-color: #0B231E">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-3 col-md-4 mb-1">
        <img src="../imag/Logo_128x50.svg" height="90 px" width="240 px" type="button">
      </div>
      <div class="col-lg-2 col-md-4 mb-1">
        <h5 class="text-white">Enlaces</h5>
        <ul class="list-unstyled mb-0">
          <li class="nav-item ">
            <a class="text-link text-white"style="text-decoration:none" href="https://participa.gob.mx/">Participa</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/publicaciones">Publicaciones Oficiales</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="http://www.ordenjuridico.gob.mx/#gsc.tab=0">Marco Jurídico</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/consultaPublica.xhtml#inicio">Plataforma Nacional de Transparencia</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-4 mb-1">
        <p class="text-white h6">¿Qué es gob.mx?</p>
        <a class="text-white " style="text-decoration:none" >Es el portal único de trámites, información y participación ciudadana.<a class="text-link text-white"style="text-decoration:none" href="#"> Leer más</a> </a>
        <p></p>
        <ul class="list-unstyled mb-0">
          <li class="nav-item ">
            <a class="text-link text-white"style="text-decoration:none" href="https://datos.gob.mx/">Portal de datos abiertos</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/accesibilidad">Declaración de accesibilidad</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/aviso_de_privacidad">Aviso de privacidad integral</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/privacidadsimplificado">Aviso de privacidad simplificado</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/terminos">Términos y Condiciones</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/terminos#medidas-seguridad-informacion">Política de seguridad</a>
          </li>
          <li class="nav-item ">
            <a class="text-link text-white "style="text-decoration:none" href="https://www.gob.mx/sitemap">Mapa de sitio</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-8 mb-0 text-align-right">
        <ul class="list-unstyled mb-0">
          <li class="nav-item ">
            <a class="text-link text-white"style="text-decoration:none" href="https://www.gob.mx/tramites/ficha/presentacion-de-quejas-y-denuncias-en-la-sfp/SFP54">Denuncia contra servidores públicos</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>



<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
  <script src="../assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src="../assets/js/jquery-ui.min.js" type="text/javascript"></script>
  <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
<!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <!-- Option 2: Separate Popper and Bootstrap JS -->


   <!-- jQuery Custom Scroller CDN -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
   <!--  Bootstrap Table Plugin    -->
   <script src="../assets/js/bootstrap-table.js"></script>

   <!--  Plugin for DataTables.net  -->
   <script src="../assets/js/jquery.datatables.js"></script>

       <!-- Sweet Alert 2 plugin -->
       <script src="../assets/js/sweetalert2.js"></script>
       <script src="../assets/js/swal-forms.js"></script>
       <script src="../assets/js/sweet-alert.js"></script>
       <script src="../assets/js/sweetalert2.all.min.js"></script>
       <script src="../assets/js/sweetalert2.all.js"></script>






      </body>
    </html>
