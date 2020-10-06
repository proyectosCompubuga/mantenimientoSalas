<?php include_once "../componentes/menuPrincipal.php"; ?>



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">REGISTRO DE USUARIOS</div>
      <div class="card-body">
        <form action="registrarUsuariosControlador.php" method="post">


          <div class="form-group ">
            <label for="inputidentificacion1">Identificación </label>
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
              <input type="text" class="form-control" id="telefono" name="telefono" pattern="[0-9]+" required="">
            </div>



            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword3">password</label>
                <input type="password" class="form-control" id="inputPassword3" required="" name="password">
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


<?php include_once "../componentes/pie.php"; ?>
