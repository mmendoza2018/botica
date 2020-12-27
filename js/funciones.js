const enviar = () => {
    user = $("#usuario").val();
    pass = $("#pass").val();
  
   let val=(/[!$%&/?¡'¨*¿:_;]/gi).test(user);
   if(user==="" || pass===""){
  return   Swal.fire({
    icon: 'error',
    title: 'por favor ingrese los campos obligatorios'
  })
   } else if(val===true){
   return  Swal.fire({
    icon: 'error',
    title: 'por favor ingrese caracteres validos'
  })
  
  } 
  let datos="user="+user +"&pass="+pass;
  $.ajax({
    type: "POST",
    url: "php/procesos/login.php",
    data: datos,
    success: function (respuesta) {
      
      if (respuesta ==="1") {
        location.href ="menu.php";
        
      }else if(respuesta==="2"){
        Swal.fire({
    icon: 'error',
    title: 'usuario y/o contraseña no validos'
  })
      }else{
        Swal.fire({
    icon: 'error',
    title: 'usuario y/o contraseña no validos'
  })
  
      }
      
    }
  });
  }
  