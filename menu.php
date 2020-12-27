<!DOCTYPE html>
<html lang="en">
<?php 
require("vistas/componentes/header.html");
?>
<style>
   .nav-pills .nav-link.active,
.show>.nav-pills .nav-link{
    background: palegreen !important
}
</style>
<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark success-color lighten-1 p-0 pl-2">
  <a class="navbar-brand" href="#">botica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
   
    <ul class="navbar-nav ml-auto nav-flex-icons">
      
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" width="40" height="40" class="rounded-circle z-depth-0"
            alt="avatar image">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<div class="container-fluid pt-2">
<div class="row">
    <div class="col-sm-1 p-0"></div>
    <div class="col-xl-10 p-0 jumbotron ">
    <ul class="nav nav-pills mb-3 nav-justified  border grey lighten-2" id="pills-tab" role="tablist">
  <li class="nav-item border-right border-success">
    <a class="nav-link active text-dark" id="pills-reportes-tab" data-toggle="pill" href="#pills-reportes" role="tab"
      aria-controls="pills-home" aria-selected="true">Reportes</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-ventas-tab" data-toggle="pill" href="#pills-ventas" role="tab"
      aria-controls="pills-profile" aria-selected="false">Ventas</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab"
      aria-controls="pills-contact" aria-selected="false">Productos</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link  text-dark" id="pills-categorias-tab" data-toggle="pill" href="#pills-categorias" role="tab"
      aria-controls="pills-home" aria-selected="true">Categorias</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-proveedores-tab" data-toggle="pill" href="#pills-proveedores" role="tab"
      aria-controls="pills-profile" aria-selected="false">Proveedores</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-usuarios-tab" data-toggle="pill" href="#pills-usuarios" role="tab"
      aria-controls="pills-contact" aria-selected="false">Usuarios</a>
  </li>
  <li class="nav-item border-right border-success">
    <a class="nav-link text-dark" id="pills-promociones-tab" data-toggle="pill" href="#pills-promociones" role="tab"
      aria-controls="pills-contact" aria-selected="false">Promociones</a>
  </li>
</ul>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-reportes" role="tabpanel" aria-labelledby="pills-reportes-tab">Consequat
    occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat
    velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo
    anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing
    minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
    nostrud.</div>
  <div class="tab-pane fade" id="pills-ventas" role="tabpanel" aria-labelledby="pills-ventas-tab">Ad
    pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt
    amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id
    incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis
    deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</div>

    <div class="tab-pane fade" id="pills-productos" role="tabpanel" aria-labelledby="pills-productos-tab">Est
    quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.
    Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim
    exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
    </div>
   
  <div class="tab-pane fade" id="pills-categorias" role="tabpanel" aria-labelledby="pills-categorias-tab">Ad
    pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt
    amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id
    incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis
    deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</div>
  <div class="tab-pane fade" id="pills-proveedores" role="tabpanel" aria-labelledby="pills-proveedores-tab">
  <div class="container">
  <div class="row">
    <div class="col-md-4"><!--.col-md-4-->
    <div class="container">
      <div class="card"><!--esta es un card-->
      <h5 class="card-header info-color amber lighten-3 text-center py-4">
        <strong>Registro de Proveedor</strong>
    </h5>
    <div class="card-body px-lg-5 pt-0">
    <form class="text-center" style="color: #757575;" action="#!">

<!-- Nombre Proveedor -->
<div class="md-form mt-3">
    <input type="text" id="nombre_p" class="form-control" placeholder="Nombre Proveedor">
    
</div>

<!-- Direccion Proveedor -->
<div class="md-form">
    <input type="text" id="direccion_p" class="form-control" placeholder="Direccion Proveedor">
</div>
<!-- Numero de Telefono -->
<div class="md-form">
    <input type="number" id="numero_p" class="form-control" placeholder="Numero de Telefono">
</div>
<!-- Tipo de Documento -->
<span>Tipo de Documento</span>
<select class="mdb-select">
    <option value="" disabled>Choose option</option>
    <option value="1" selected>DNI</option>
    <option value="2">CEDULA</option>
    <option value="3">RUC</option>
    
</select>
<!-- Numero de documento -->
<div class="md-form ">
    <input type="number" id="numero_d" class="form-control" placeholder="Numero de documento">
</div>
<!-- Send button -->
<button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" onclick="agregar_proveedor()" >Registrar</button>

</form>
<!-- Form -->
</div>
      </div>
<!--contenedor 1-->
    </div>
    </div>
    
  <div class="col-md-8 " id="llega_tabla_proveedor"><!--.col-md-8-->

  </div>  
</div>
</div>
  </div>

    <div class="tab-pane fade" id="pills-usuarios" role="tabpanel" aria-labelledby="pills-usuarios-tab">
<div class="container-fluid">
    <div class="row pt-2" >
        <div class="col-md-5  pt-2" >
        <div class="modal-header amber lighten-3 dark-text  mb-3 pt-3">
                      <h4 class="title text-center w-100">
                         Agregar usuarios</h4>
                      
                    </div>
          <form id="form_agrega_usuario" class="jumbotron">
          
            
            <div class="row">
              
            <div class="col-md-6 mb-3">
                    <input type="text" class="form-control validar_usuario_ag" placeholder="usuario"  name="id_usu_ag">
                </div>
        
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control validar_usuario_ag" placeholder="direccion"  name="dir_usu_ag">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control validar_usuario_ag" placeholder="telefono"  name="telf_usu_ag">
                </div>

            <div class="col-md-6 mb-3">
                    <select type="text" class="form-control validar_usuario_ag"  name="tipo_usu_ag">
                    <option>rol</option>
                      <option>Dueño</option>
                      <option>Administrador</option>
                      <option>Vendedor</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control validar_usuario_ag" placeholder="nombre"  name="nom_usu_ag">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control validar_usuario_ag" placeholder="contraseña"  name="contra_usu_ag">
                </div>
                </div>

           <hr>
    <div class="row">
      <div class="col-sm"></div>
      <div class="col-sm">
        
      <button type="button" class="btn btn-primary btn-sm  " onclick="agregar_usuario()">
                <i class="fa fa-user-plus" aria-hidden="true"></i> AGREGAR </button>
      </div>
      
    </div>

        </form>
        </div>
        <div class="col-md-7 py-0" id="llega_tabla_usuario">

            </div>
        </div>

    </div>
    </div>
    
    <div class="tab-pane fade" id="pills-promociones" role="tabpanel" aria-labelledby="pills-promociones-tab">Est
    quis nulla laborum officia ad nisi reprehenderit laborum veniam eu veniam. Eiusmod minim
    exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
    </div>
</div>
    </div>
    <div class="col-sm-1 p-0" ></div>
</div>

</div>
<!-- modales actualizar usuario -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  text-center" style="background: palegreen;" >
           <h4 class="modal-title w-100" id="myModalLabel">Actualiza Clientes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="form_actualiza_usuario" class="">
          
            
          <div class="row">
            
          <div class="col-md-6 mb-3">
            <label>Nombre:</label>
                  <input type="text" class="form-control validar_usuario_ac"  id="nom_usu_ac" name="nom_usu_ac">
              </div>
              <div class="col-md-6 mb-3">
                <label >Telefono:</label>
                  <input type="text" class="form-control validar_usuario_ac"  id="telf_usu_ac" name="telf_usu_ac">
              </div>
          </div>
          
              <div class="row">
              <div class="col-md-6 mb-3">
                <label >Dirección:</label>
                  <input type="text" class="form-control validar_usuario_ac"  id="dir_usu_ac" name="dir_usu_ac">
              </div>
              <div class="col-md-6 mb-3">
                <label > tipo usuario:</label>
                  <input type="text" class="form-control validar_usuario_ac"   name="tipo_usu_ac" id="tipo_usu_ac">
                  <input type="text" class="form-control" hidden name="id_usu_ac" id="id_usu_ac">
              </div>
              </div>



      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn-sm" onclick="actualiza_usuario()">guardar cambios</button>
      </div>
    </div>
  </div>
</div>

  <!-- modal actualizar proveedor-->

<!-- Modal -->
<div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualiza proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                   
             <div class="form-outline">
  <input type="number" id="id_pro" hidden class="form-control" value="" name="id_p"><br>
        <!-- Nombre Proveedor -->
<div class="form-outline">
        <label class="form-label" for="form1">Nombre Proveedor</label>
  <input type="text" id="nombre_pro" class="form-control" value="" name="nombrep"><br>
</div>
<!-- Direccion Proveedor -->
<div class="form-outline">
        <label class="form-label" for="form1">Direccion Proveedor</label>
    <input type="text" id="direccion_pro" class="form-control" placeholder="" value="" name="direccionp">
</div>
<!-- Numero de Telefono -->
<div class="form-outline">
        <label class="form-label" for="form1">Numero de Telefono</label>
    <input type="number" id="telefono_pro" class="form-control" placeholder="" value="" name="numerop">
</div>
<!-- Tipo de Documento -->
<span>Tipo de Documento</span>
<select class="mdb-select form-control" id="tipodoc_pro">
    <option value="" disabled>Choose option</option>
    <option value="1" selected>DNI</option>
    <option value="2">CEDULA</option>
    <option value="3">RUC</option>
    
</select>
<!-- Numero de documento -->
<div class="form-outline">
        <label class="form-label" for="form1">Numero de documento</label>
    <input type="number" id="numerodoc_pro" class="form-control" placeholder=""value="" name="numerod">
</div>
<div class="form-outline">
        <label class="form-label" for="form1">estado </label>
        <select class="mdb-select form-control" id="estado_pro">
    <option value="1" disabled>Activo</option>
    <option value="0" selected>Inactivo</option>
  
    
</select>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php 
require("vistas/componentes/footer.html");
?>    


<script>
const agregar_usuario = () => {
  let arr = $(".validar_usuario_ag");
  let control=true;
  if (arr.length > 0) {
    for (i = 0; i < arr.length; i++) {
      if (arr[i].value === '' || arr[i].value === null) {

        Swal.fire('DATOS INCORRECTOS!'); //o el mensaje para todos

          control = false;
          break;
      }
    }
  }
  if (control===true) {
    
  let d=$("#form_agrega_usuario").serialize(event);
  event.preventDefault();
  $.ajax({
    url: 'php/procesos/usuario/agrega_usuario.php',
    type: 'POST',
    data: d,
    success: function(a)
    {
      if(a==="1"){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'se guardo con exito !',
  showConfirmButton: false,
  timer: 1500
})

$("#llega_tabla_usuario").load("php/procesos/usuario/vista_tabla.php");
      }

    }
  });
}
};

  
</script>
<script>
const agregar_proveedor = () =>{
 nombre_p=$("#nombre_p").val();
 direccion_p= $("#direccion_p").val();
 numero_p = $("#numero_p").val();
 numero_d = $("#numero_d").val();
 alert(nombre_p)
 
  
 /* let val=(/[!$%&/?¡'¨*¿:_;]/gi).test(nombre_p);
  if(nombre_p==="" || direccion_p==="" || numero_p==="" || numero_d===""){
 //return alert( "campos vacios");
 return   Swal.fire({
     icon: 'error',
     title: 'por favor ingrese los campos obligatorios'
   })
  } else if(val===true){
  //return alert("no se aceptan caracteres especiales");
  return  Swal.fire({
     icon: 'error',
     title: 'por favor ingrese caracteres validos'
   })
 
 } */
 let datos="nombre_p="+nombre_p +"&direccion_p="+direccion_p +"&numero_p="+numero_p +"&numero_d="+numero_d;
 $.ajax({
   type: "POST",
   url: "php/procesos/proveedor/agrega_proveedor.php",
   data: datos,
   success: function (response) {
     //alerttify.correcto(response);
    alert(response);
    //toastr.success(response);
     
   }
 });
 }
 </script>
<script>

const actualiza_usuario = () => {
  let arr2 = $(".validar_usuario_ac");
  let control=true;
  if (arr2.length > 0) {
    for (i = 0; i < arr2.length; i++) {
      if (arr2[i].value === '' || arr2[i].value === null) {

          alert("Faltan campos por llenar"); //o el mensaje para todos

          control = false;
          break;
      }
    }
  }

  if (control===true) {
    
  let z=$("#form_actualiza_usuario").serialize(event);
  event.preventDefault();
  Swal.fire({
  title: 'Estas seguro de actualizar?',
  text: "esto influira directamente en la base de datos!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'si, estoy seguro!',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
  $.ajax({
    url: 'php/procesos/usuario/actualiza_usuario.php',
    type: 'POST',
    data: z,
    success: function(a)
    {
      
     // $("#form_actualiza_cot")[0].reset();
     
      if(a=="1"){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Actualizado correctamente !',
  showConfirmButton: false,
  timer: 1500
})
      }
    
    }
  
  });
};
});
  }

} ;
</script>
<script>
const llenar_usuario = (d) => {
  let x=[];
  x=d.split("|");
 
  $("#nom_usu_ac").val(x[0])
  $("#telf_usu_ac").val(x[1])
  $("#dir_usu_ac").val(x[2])
  $("#tipo_usu_ac").val(x[3])
  $("#id_usu_ac").val(x[4])
  
};
 
</script>

<script>
  const llenar_prov =(d)=>{
    let x=[];
    x=d.split("|");
    $("#id_pro").val(x[0])
    $("#nombre_pro").val(x[1])
    $("#direccion_pro").val(x[3])
    $("#telefono_pro").val(x[2])
    $("#numerodoc_pro").val(x[4])
    $("#tipodoc_pro").val(x[5])
    $("#estado_pro").val(x[6])
    // id_pro,nombre_pro,telefono_pro,direccion_pro,numerodoc_pro,tipodoc_pro,estado_pro
  };
</script>

<script>
$(document).ready(function () {
  $("#llega_tabla_usuario").load("php/procesos/usuario/vista_tabla.php")
});
</script>
<script>
$(document).ready(function () {
  $("#llega_tabla_proveedor").load("php/procesos/proveedor/vista_tabla.php")
});
</script>
</body>
</html>