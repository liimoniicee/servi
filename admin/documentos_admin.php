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

    <title>Documentacion</title>
  </head>

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
<h3>Revisar documentos subidos</h3>
</br>
              <table id="bootstrap-table" class="table table-striped">
                                                      <thead>
                                                          <th data-field="id" class="text-center">ID</th>
                                                          <th data-field="name" data-sortable="true">Nombre</th>
                                                          <th data-field="stat" data-sortable="true">Status</th>
                                                          <th data-field="comen" data-sortable="true">Comentarios</th>
                                                          <th data-field="fech" data-sortable="true">Fecha</th>
                                                          <th data-field="alu" data-sortable="true">Alumno</th>

                                                          <th data-field="actions" class="td-actions text-right"  >Acciones</th>
                                                      </thead>
                                                      <tbody>
                                                           <?php
                                                           include '../conexion.php';

                                                           $sql = " SELECT * FROM doc_subir";


                                                       $resultado = $conn->query($sql);
                                                        while ($row= $resultado->fetch_assoc()) {
                                                          $id_b=$row['Id_Doc_Subir'];
                                                          $name_pdf=$row['Nom_Doc_Sub']; ?>
                                                            <tr>
                                                              <td> <?php echo $row['Id_Doc_Subir']; ?></td>
                                                              <td> <?php echo $row['Nom_Doc_Sub']; ?></td>
                                                              <td> <?php echo $row['Status_Doc']; ?></td>
                                                              <td> <?php echo $row['Comentarios_Doc']; ?></td>
                                                              <td> <?php echo $row['Fecha_Doc']; ?></td>
                                                              <td> <?php echo $row['Usuario_Id_Usuario']; ?></td>

                                                              <td>
                                                               <button  onclick="alerta(<?php echo $id_b ?>),enviarmod(<?php echo $id_b ?>);" class="btn btn-simple btn-info btn-icon table-action edit" rel="tooltip" title="Editar" ><i class="ti-pencil"></i></button>
                                                               <button  data-toggle="modal" data-target="#myModal" class="btn btn-simple btn-info btn-icon table-action edit" rel="tooltip" title="Ver documento" ><i class="ti-file"></i></button>
                                                              </td>
                                                          </tr>
                                                            <?php  }
                                                         ?>
                                                      </tbody>
                                                  </table>

                                                  <!-- Modal -->
                                                  <div id="myModal" class="modal fade" role="dialog">
                                                      <div class="modal-dialog modal-lg">

                                                          <!-- Modal content-->
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                  <h4 class="modal-title">Modal Header</h4>
                                                              </div>
                                                              <div class="modal-body">

                                                                  <embed src="../assets/alums_docs/13.pdf"
                                                                         frameborder="0" width="100%" height="400px">

                                                                  <div class="modal-footer">
                                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                  </div>
                                                              </div>

                                                          </div>
                                                      </div>
                                                  </div>

          </div>





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



       <!---                    sweet alert                 -->
       <script>
             function enviarmod(id){
               $.ajax({
                   // la URL para la petición
                   url : 'mod_doc_sub.php',
                   // la información a enviar
                   // (también es posible utilizar una cadena de datos)
                   data : {
                      id : id
                   },
                   // especifica si será una petición POST o GET
                   type : 'POST',
                   // el tipo de información que se espera de respuesta
                   dataType : 'json',
                   // código a ejecutar si la petición es satisfactoria;
                   // la respuesta es pasada como argumento a la función
                   success : function(data) {
                     $("#swal-input1").val(data.data.sta);
                     $("#swal-input2").val(data.data.comen);




                   },

                   // código a ejecutar si la petición falla;
                   // son pasados como argumentos a la función
                   // el objeto de la petición en crudo y código de estatus de la petición
                   error : function(xhr, status) {

                   },

                   // código a ejecutar sin importar si la petición falló o no
                   complete : function(xhr, status) {

                   }
               });
             }
             </script>
       <!--
             <script>
             function borrar(id){
             swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                showLoaderOnConfirm: true,
                preConfirm: function() {
                  return new Promise(function(resolve) {

                    $.ajax({
                     url: '',
                     type: 'POST',
                     data: 'delete='+id,
                     dataType: 'json'
                  })
                  .done(function(response){
                     swal('Deleted!', response.message, response.status);
                   location.reload();
                  })
                  .fail(function(){
                     swal('Oops...', 'Something went wrong with ajax !', 'error');
                  });
                  });
                },
                allowOutsideClick: false
             });
             }
             </script>
       -->

             <script type="text/javascript">

             function alerta(id){


             swal({
             title: 'Editar estatus',
             html:
             //type="hidden"  ES PARA OCULTAR UN INPUT

             '<form action="#" method="post" name="data">'+
            '<input type="hidden" name="swal-input0" id="swal-input0" class="form-control border-input">' +
             '<label >Estatus</label>' +
              '</br>'+
             '<input class="form-control" name="swal-input1" id="swal-input1">' +

              '</br>'+
             '<label >Comentarios</label>' +
              '</br>'+
             '<textarea type="text" min="0" name="swal-input2" id="swal-input2" class="form-control" rows="3"></textarea>' +
             '</br>'+
             '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar</Button>'+
             '</form>',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: '</form> Actualizar solicitud',
             cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
             showConfirmButton: false,
             focusConfirm: false,
             buttonsStyling: false,
             reverseButtons: true
           }).then(function (result) {

             swal(
             'Actualizado!',
             'La solicitud ha sido actualizada',
             'success'
             )
             }).catch(swal.noop);

             };
             </script>

             <script type="text/javascript">

        var $table = $('#bootstrap-table');

              function operateFormatter(value, row, index) {
                  return [
              '<div class="table-icons">',
                        '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
                  '<i class="ti-image"></i>',
                '</a>',
                        '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                            '<i class="ti-pencil-alt"></i>',
                        '</a>',
                        '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                            '<i class="ti-close"></i>',
                        '</a>',
              '</div>',
                  ].join('');
              }

              $().ready(function(){
                  window.operateEvents = {
                      'click .view': function (e, value, row, index) {
                          info = JSON.stringify(row);

                          swal('You click view icon, row: ', info);
                          console.log(info);
                      },
                      'click .edit': function (e, value, row, index) {
                          info = JSON.stringify(row);

                          swal('You click edit icon, row: ', info);
                          console.log(info);
                      },
                      'click .remove': function (e, value, row, index) {
                          console.log(row);
                          $table.bootstrapTable('remove', {
                              field: 'id',
                              values: [row.id]
                          });
                      }
                  };

                  $table.bootstrapTable({
                      toolbar: ".toolbar",
                      clickToSelect: true,
                      showRefresh: true,
                      search: true,
                      showToggle: true,
                      showColumns: true,
                      pagination: true,
                      searchAlign: 'left',
                      pageSize: 8,
                      clickToSelect: false,
                      pageList: [8,10,25,50,100],

                      formatShowingRows: function(pageFrom, pageTo, totalRows){
                          //do nothing here, we don't want to show the text "showing x of y from..."
                      },
                      formatRecordsPerPage: function(pageNumber){
                          return pageNumber + " rows visible";
                      },
                      icons: {
                          refresh: 'ti-loop',
                          toggle: 'ti-list',
                          columns: 'ti-layout-grid2',
                          detailOpen: 'fas fa-plus-circle',
                          detailClose: 'ti-close'
                      }
                  });

                  //activate the tooltips after the data table is initialized
                  $('[rel="tooltip"]').tooltip();

                  $(window).resize(function () {
                      $table.bootstrapTable('resetView');
                  });
          });

       </script>





      </body>
    </html>
