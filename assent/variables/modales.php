<!-- Modal registro -->
<div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="registroModal">
  <div  id="no-margin" class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header">

        <div class=" col-md-offset-1 col-md-4">
         <img  class="img-responsive logo-sp" src="image/logoSp2.png" alt="">
         <h1 class="modal-title" id="registroModal">Registro</h1>
       </div>
       
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     </div>
     <div class="modal-body">
       <form class="form-horizontal">
        <fieldset>


          <!-- Tratamiento-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="tratamiento"></label>  
            <div class="col-md-2">
              <input id="tratamiento" name="tratamiento" type="text" placeholder="Sr. (Sra.)" class="form-control input-md">

            </div>
          </div>

          <!-- Nombre-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="nombre"></label>  
            <div class="col-md-10">
              <input id="nombre" name="nombre" type="text" placeholder="Primer Nombre" class="form-control input-md">

            </div>
          </div>

          <!-- Apellido-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="apellido"></label>  
            <div class="col-md-10">
              <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md">

            </div>
          </div>

          <!-- Documento de Identidad-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="cdid"></label>  
            <div class="col-md-10">
              <input id="cdid" name="cdid" type="text" placeholder="Cédula / ID" class="form-control input-md">

            </div>
          </div>

          <!-- Direccion C-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="direccionC"></label>  
            <div class="col-md-10">
              <input id="direccionC" name="direccionC" type="text" placeholder="Dirección de casa" class="form-control input-md">

            </div>
          </div>

          <!-- Telefono C -->
          <div class="form-group">
            <label class="col-md-1 control-label" for="telefonoC"></label>  
            <div class="col-md-10">
              <input id="telefonoC" name="telefonoC" type="text" placeholder="Teléfono de casa" class="form-control input-md">

            </div>
          </div>

          <!-- Direccion O-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="direccionO"></label>  
            <div class="col-md-10">
              <input id="direccionO" name="direccionO" type="text" placeholder="Dirección de Oficina" class="form-control input-md">

            </div>
          </div>

          <!-- TelefonoO-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="telefonoO"></label>  
            <div class="col-md-10">
              <input id="telefonoO" name="telefonoO" type="text" placeholder="Teléfono de Oficina" class="form-control input-md">

            </div>
          </div>

          <!-- celular-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="celular"></label>  
            <div class="col-md-10">
              <input id="celular" name="celular" type="text" placeholder="Celular" class="form-control input-md">

            </div>
          </div>

          <!-- Email-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="email"></label>  
            <div class="col-md-10">
              <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="pw"></label>
            <div class="col-md-10">
              <input id="pw" name="pw" type="password" placeholder="Crear Password" class="form-control input-md">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-1 control-label" for="confirmarPw"></label>
            <div class="col-md-10">
              <input id="confirmarPw" name="confirmarPw" type="password" placeholder="Confirmar Password" class="form-control input-md">

            </div>
          </div>

          <!-- Button Registro -->
          <div class="form-group">
            <label class="col-md-1 control-label" for="registro"></label>
            <div class="col-md-5">
              <button id="registro" name="registro" class="btn btn-paradise-registro ">Registro</button>
            </div>
          </div>

        </fieldset>
      </form>

    </div>

  </div>
</div>
</div>


<!-- Fin Modal Registro --> 

<!-- Modal Confirmación -->
<div class="modal fade" id="modal-confirmacion" tabindex="-1" role="dialog" aria-labelledby="modal-confirmacion">
  <div  id="no-margin" class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class=" col-md-offset-1 col-md-4">
           <img  class="img-responsive" src="image/logoSp2.png" alt="">
           <h1 class="modal-title" id="registroModal">Bienvenido</h1>
         </div>
       </div>
       <div class="form-group">
        <div class="col-md-offset-1 col-md-10">
          <p class="parrafo-confirmacion"> Gracias por registrarse, recibira un correo de confirmación al mail <strong> sucorreo@mail.com</strong> mientras procesamos su información. 
          </p>

          <p>Saludos,
            <br>
            Sun Paradaise.
          </p>
          <button type="button" class="btn btn-default " data-dismiss="modal" aria-label="Close"> Cerrar</button>
        </div>

      </div> 
    </div>
  </div>
</div>
</div>

<!-- Desplegable delos añadir en la busqueda--> 
<div id="popover-content-login"  class=" hide">
  <div class="row">
    <div class="col-md-6">
      Precios por noche
    </div>
    <div class="col-md-6 text-right">
      Media 26.831,16 DOP
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table >
        <tbody>
          <tr class="sin-bordes">
            <td>DO</td>
            <td>LU</td>
            <td>MA</td>
            <td>MI</td>
            <td>JU</td>
            <td>VI</td>
            <td>SA</td>
          </tr>
          <tr class="con-bordes">
            <td>Feb 18 <p class="precio-table">26.831,16 DOP </p></td>
            <td>Feb 18</td>
            <td>Feb 18</td>
            <td>Feb 18</td>
            <td>Feb 18</td>
            <td>Feb 18</td>
            <td>Feb 18</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- Desplegable delos añadir en la busqueda--> 
<div id="popupBottom" class="popover">
  <div class="row margin-popup">
    <div class="col-md-12">
      <div class="row">   
        <div class="col-md-6"> $ 10 - $1.000 + </div>
        <div class="col-md-6"> El promedio de precios es de $250</div>
      </div>
    </div>

  </div>
  <div class="row margin-popup">
    <div class="col-md-12 ">
      <img src="image/barras.png" alt="">
      <div class="incluir"> 
   <span class="multi-range">
    <input type="range" min="0" max="50" value="5" id="lower">
    <input type="range" min="0" max="50" value="45" id="upper">
</span>
 </div>
      <button class="btn-default btn center-block flat" style="margin-top: 50px;"> Aplicar</button>
    </div>

  </div>
</div>





<!-- Desplegable de los añadir en la busqueda--> 

<!-- Desplegable Mapas --> 

<!-- Modal -->
<div class="modal fade" id="mapa-hotel" tabindex="-1" role="dialog" aria-labelledby="mapa-hotel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="rojo-texto titulo-hotel"> Hard Rock Hotel & Casino Punta Cana</h3> 
      </div>
      <div class="modal-body">
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125549.02138165482!2d-66.96040591517186!3d10.46855291062831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58adcd824807%3A0x93dd2eae0a998483!2sCaracas%2C+Distrito+Capital!5e0!3m2!1ses-419!2sve!4v1524103527336" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>

      
    </div>
  </div>
</div>

<!-- Desplegable Mapas --> 

<!-- Desplegable descripcion --> 


<!-- Modal -->
<div class="modal fade" id="descripcion-hotel" tabindex="-1" role="dialog" aria-labelledby="descripcion-hotel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class=" titulo-hotel"> Hard Rock Hotel & Casino Punta Cana</h3> 
        <p class="reputacion">
          <i id="cali-1" class="fas fa-star"></i>
          <i id="cali-2" class="fas fa-star"></i>
          <i id="cali-3" class="fas fa-star"></i>
          <i id="cali-4" class="fas fa-star"></i>
          <i id="cali-5" class="fas fa-star"></i>
        </p>
        <p> RDC HOTELES</p>
        <p class="ubicacion-hotel"> <i class="fas fa-map-marker color-icon"></i>Bravado, Punta Cana</p> 

      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore laborum ex repellendus, distinctio, soluta earum delectus maxime aliquam similique accusantium omnis fuga, quos at perferendis vero aut voluptate. Sed, hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium temporibus quam saepe unde quaerat error, ipsam atque blanditiis provident. Quasi doloremque maiores eveniet nulla perspiciatis cum et eligendi esse recusandae.

      </div>
      
    </div>
  </div>
</div>

<!-- Desplegable Mapas --> 

<!-- Desplegable Fotos --> 
<div id="fotos-modal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img  class="img-responsive" src="image/photo-60217.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img  class="img-responsive" src="image/triangle_light_blurred_88541_1920x1080.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img  class="img-responsive" src="image/photo-60217.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img class="img-responsive"  src="image/photo-60217.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="col-md-2">
      <img class="img-responsive demo" src="image/photo-60217.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class=" col-md-2">
      <img class="img-responsive demo" src="image/triangle_light_blurred_88541_1920x1080.jpg" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class=" col-md-2">
      <img class="img-responsive demo" src="image/photo-60217.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class=" col-md-2">
      <img class="img-responsive demo" src="image/photo-60217.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
    <div class=" col-md-2">
      <img class="img-responsive demo" src="image/photo-60217.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>

<!-- Modal  Añadir Imagen-->
<div class="modal fade" id="modaladdimg" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Agregar Imágen</h2>
      </div>
      <div class="modal-body">
        <div>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#add-img" aria-controls="add-img" role="tab" data-toggle="tab">Subir Imagen</a></li>
            <li role="presentation"><a href="#libreria" aria-controls="libreria" role="tab" data-toggle="tab">Librería</a></li>

          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="add-img">

              <div class="row">
                <div class="col-md-12 dropzone1 parent"  >
                 <form action="/file-upload" >
                  <div class="fallback col-md-12 child text-center center-block ">
                    <p> Arraste archivos .JPG o .PNG para subirlos</p>
                    <input  class=" center-block" name="file" type="file" multiple />
                    <p> Tamaño máximo 10 MB</p>
                  </div>
                </form>

              </div>
            </div>

          </div>
          <div role="tabpanel" class="tab-pane" id="libreria">
            <div class="row">
              <div class="col-md-8 col-xs-9 imageness-libreria">
                <div class="row ">
                  <div class="col-md-12  separadorimg">

                    <div class="input-group col-md-6 pull-right">

                      <input id="search-modal" name="search" class="form-control " placeholder="Search" type="text">
                      <span class="input-group-addon"> <a href="#"> <i class="glyphicon glyphicon-search"></i></a> </span>
                    </div>
                  </div>
                </div>
                <div class="row separadorimg"> 
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6 "> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                  <div class="col-sm-4 col-md-3 col-lg-2 col-xs-6"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail " alt=""></div>
                </div>
              </div>
              <div class="col-md-4  col-xs-3 col-sm-3 detalles-imagenes">
                <h4> Detalle Imágen</h4>
                <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-thumbnail img-responsive" alt="">
                <p> Nombre Archivo.png</p>
                <p> Fecha</p>
                <p> Peso</p>
                <p>300x200</p>
                <p><a href="#"> Borrar Permanentemente</a></p>

              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
    <div class="modal-footer">
      <div class="col-md-6 text-left  ">
       <h4> 1 Selecionada</h4>
       <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="col-md-2 col-sm-3 col-xs-3 img-responsive" alt="">
     </div>
     <div class="col-md-6 separadorimg"><button type="button" class="btn btn-paradise" data-dismiss="modal">Insertar Imagen</button></div>
     

   </div>
 </div>

</div>
</div>



<!-- Modal Detalles Administrador-->
<div class="modal fade" id="modal-admin-detalles" tabindex="-1" role="dialog" aria-labelledby="modal-admin-detalles">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">Detalles de Reserva</h2>
      </div>
      <div class="modal-body">
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
           <span class="panel-title">
            <a role="button" class="expandir" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             <div>
               <img  class="img-responsive col-md-2" src="image/triangle_light_blurred_88541_1920x1080.jpg" alt="">
               <h4>Hard Rock Cafe Punta Cana</h4>
               <strong>Bravaro, Punta Cana</strong>
             </div>
           </a>
         </span>
       </div>
       <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">Inicio 24/05/2018 <br> Final:02/06/2018</div>
            <div class="col-md-4">No. Noches: 4 <br>No. habitaciones: 1</div>
            <div class="col-md-4">No. de Adultos: 2 <br> No. de Niños: 0</div>
          </div>
          <div class="row separador-margen">
            <div class="col-md-4">
              <strong>Total: $120 </strong>
            </div>
          </div>

          <div class="row separador-margen">
            <div class="col-md-6">
              Nombre Persona:
              <br>
              Jose G/ Edad: 36/ ID: 12.098.55
              Maria B/ Edad: 30/ ID: 18.058.122

            </div>
          </div>

          <div class="row separador-margen">
            <div class="col-md-12"> Detalles Solicitados:

              <p> Detalles</p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <span class="panel-title">
          <a class="collapsed" class="expandir" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <div>
             <img  class="img-responsive col-md-2" src="image/triangle_light_blurred_88541_1920x1080.jpg" alt="">
             <h4>Hard Rock Cafe Punta Cana</h4>
             <strong>Bravaro, Punta Cana</strong>
           </div>
         </a>
       </span>
     </div>
     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-4">Inicio 24/05/2018 <br> Final:02/06/2018</div>
          <div class="col-md-4">No. Noches: 4 <br>No. habitaciones: 1</div>
          <div class="col-md-4">No. de Adultos: 2 <br> No. de Niños: 0</div>
        </div>
        <div class="row separador-margen">
          <div class="col-md-4">
            <strong>Total: $120 </strong>
          </div>
        </div>

        <div class="row separador-margen">
          <div class="col-md-6">
            Nombre Persona:
            <br>
            Jose G/ Edad: 36/ ID: 12.098.55
            Maria B/ Edad: 30/ ID: 18.058.122

          </div>
        </div>

        <div class="row separador-margen">
          <div class="col-md-12"> Detalles Solicitados:

            <p> Detalles</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <span class="panel-title">
        <a class="collapsed expandir"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <div>
           <img  class="img-responsive col-md-2" src="image/triangle_light_blurred_88541_1920x1080.jpg" alt="">
           <h4>Hard Rock Cafe Punta Cana</h4>
           <strong>Bravaro, Punta Cana</strong>
         </div>
       </a>
     </span>
   </div>
   <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-4">Inicio 24/05/2018 <br> Final:02/06/2018</div>
        <div class="col-md-4">No. Noches: 4 <br>No. habitaciones: 1</div>
        <div class="col-md-4">No. de Adultos: 2 <br> No. de Niños: 0</div>
      </div>
      <div class="row separador-margen">
        <div class="col-md-4">
          <strong>Total: $120 </strong>
        </div>
      </div>

      <div class="row separador-margen">
        <div class="col-md-6">
          Nombre Persona:
          <br>
          Jose G/ Edad: 36/ ID: 12.098.55
          Maria B/ Edad: 30/ ID: 18.058.122

        </div>
      </div>

      <div class="row separador-margen">
        <div class="col-md-12"> Detalles Solicitados:

          <p> Detalles</p>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-abono" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Abono - Sun-0001</h3>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>USUARIO</th>
              <th>DESCRIPCIÓN</th>
              <th>VER VOUCHE</th>
              <th>ACCION</th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Rodriguez</td>
              <td>Completado</td>
              <td><a href="#">00000</a></td>
              <td><button type="button" class="btn btn-default">Aprobar</button></td>
              <td><button type="button" class="btn btn-default"> Rechazar</button></td>
            </tr>
            <tr>
              <td>John Rodriguez</td>
              <td>Completado</td>
              <td><a href="#">00000</a></td>
              <td><button type="button" class="btn btn-default">Aprobar</button></td>
              <td><button type="button" class="btn btn-default"> Rechazar</button></td>
            </tr>
            <tr>
              <td>John Rodriguez</td>
              <td>Completado</td>
              <td><a href="#">00000</a></td>
              <td><button type="button" class="btn btn-default">Aprobar</button></td>
              <td><button type="button" class="btn btn-default"> Rechazar</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="text-left"> Aviso para el usuario</p>
      <div class="modal-footer">

        <textarea class="form-control" rows="3"></textarea>
        <button type="button" class="btn btn-default separador-margen" data-dismiss="modal">Enviar Aviso</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="image_descripcion" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalles de Adjuntos</h4>
      </div>
      <div class="modal-body">
       <div class="row"> 
        <div class="col-md-8"> <img src="image/triangle_light_blurred_88541_1920x1080.jpg" class="img-responsive " alt=""> </a></div>
        <div class="col-md-4 detalles-imagenes"> 
          <div>  <strong> Nombre de archivo: </strong> unnamed-2-1.jpg </div> 
          <div>  <strong> Tipo de archivo: </strong> image/jpeg </div>
          <div>  <strong> Subido el: </strong> 21 junio, 2018 </div>
          <div>  <strong> Tamaño de archivo: </strong> 125 KB </div>
          <div> <strong>  Dimensiones: </strong> 960 × 640 </div>

          <div> <a href="#"> Ver página de adjuntos</a> | <a href="#"> Editar más detalles</a> |  <a class="rojo-texto" href="#"> Borrar permanentemente</a></div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-cambiar-imagen" tabindex="-1" role="dialog" aria-labelledby="modal-cambiar-imagen">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header sinbordes">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel"> Seleciona una foto para tu perfil</h3>
      </div>
      <div class="modal-body">
        <div class="row border-bottom-1"> 

          <div class="bottom-rojo col-md-2">
            Subir fotos
            <br>
          </div>
        </div>
      <br>
        <div class="row"> 
         <div class="col-mod-12 dropzone1 parent">
           <p class="child text-center">
            <i class="fas fa-images fa-3x "></i><br>


            Arrastra una foto de perfil hasta aqui 
            <br>
            ---------------------o---------------------

            <button type="text" class="btn btn-default">Seleccionar una foto de tu ordenador</button>
          </p>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>