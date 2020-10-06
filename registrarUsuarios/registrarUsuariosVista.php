<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->

<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header">Registro de usuarios</div>
      <div class="card-body">
        <h5 class="card-title">Datos de usuarios</h5>
         <form action="registrarUsuariosControlador.php" method="post">


          <div class="form-group">
            <label for="inputidentificacion1">Identificacion</label>
            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="identificacion" required="" pattern="[0-9]+">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombres</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required="" pattern="[a-zA-Z]+">
            </div>


            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellidos</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required="" pattern="[a-zA-Z]+">
            </div>
          </div>



          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Telefono</label>
              <input type="text" class="form-control" id="telefono" name="telefono" pattern="[0-9]+">
            </div>



            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword">password</label>
                <input type="password" class="form-control" id="inputPassword" required="" name="password">
              </div>

              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPass2">verifica password</label>
                <input type="password" class="form-control" id="inputPass2" required="" name="pass2">
              </div>




              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail13">Email</label>
                  <input type="email" class="form-control" id="inputEmail13" required="" name="email">
                </div>




                <div class="form-group col-md-6">
                  <label for="inputState">tipo de usuario</label>
                  <select id="cargo" name="cargo" class="form-control">
                    <option selected>tipo de usuario</option>
                    <option value="0">administrativo</option>
                    <option value="1">monitor</option>
                    <option value="2">tecnico reparador</option>

                  </select>
                </div>
            
                <button type="submit" class="btn btn-primary">registrar</button>
          </form>
      </div>
    </div>
  </div>

</div>
<script>
var password = document.getElementById("inputPassword").value;
var pass2 = document.getElementById("inputPass2").value;
if(password !== pass2) {
  alert ("Todo esta correcto")
   true; 
}else {
  alert ("Las passwords deben de coincidir")
  false;
};

</script>