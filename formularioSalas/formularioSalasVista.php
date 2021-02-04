<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">FORMULARIO SALAS </div>
      <div class="card-body">
        <h5 class="card-title">DATOS SALAS</h5>
         <form action="../crudSalas/salasControlador.php" method="post">


         <div class="form-row">
         <div class="form-group col-md-6">
            <label for="inputNombreSala">Nombre Sala </label>
            <input type="text" class="form-control" id="NombreSala" name="NombreSala" placeholder="NombreSala" required="" pattern="[a-zA-Z-0-9]+">
          </div>



          
            <div class="form-group col-md-6">
              <label for="inputCapacidadEquipos">Capacidad Equipos</label>
              <input type="text" class="form-control" id="CapacidadEquipos" name="CapacidadEquipos" placeholder="CapacidadEquipos" required="" pattern="[0-9]+">
            </div>



            
            <div class="form-group col-md-6">
              <label for="inputCantidadEquipos">Cantidad Equipos</label>
              <input type="text" class="form-control" id="CantidadEquipos" name="CantidadEquipos" placeholder="CantidadEquipos" required="" pattern="[0-9]+">
            </div>
         


            <div class="form-group col-md-2"> 
              <label for="inputAbreviatura">Abreviatura</label>
              <textarea class="form-control"  id="Abreviatura" name="Abreviatura" rows="1" ></textarea>
            </div>
            


            <div class="form-group col-md-6"> 
                <button name="guardar" type="submit" class="btn btn-primary">Enviar</button>
                
          </form>
      </div>
    </div>
  </div>

</div>


<?php include_once "../componentes/pie.php";

?>




