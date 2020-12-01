<?php include_once "../componentes/menuPrincipal.php"; ?>
<!-- <script src="registrarUsuarios/validacion.js"></script>  -->



<div class="container mt-5">
  <div class="col-md-5 offset-md-3">
    <div class="card bg-light mb-3">
      <div class="card-header ">FORMULARIO</div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <form action="reparacionControlador.php" method="post">

         
         
        <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
        <div class="card-body">
        <h5 class="card-title">DATOS DE REPORTE</h5>
        <p class="card-text">id reporte:123   id usuario:675    id sala:543<br>
         id sala:243  fecha reporte:22/sep/2020 OBSERVACION:se encuentra teclado en mal estado no funcionan algunas teclas</p>
        </div>
         </div>



         <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
        <div class="card-body">
        <h5 class="card-title">DATOS DE EQUIPO</h5>
        <p class="card-text">id equipo:s2-equipo4  nombre pc:Asus procesador:core i7-3700x<br>
            ram:ddr4-5066 disco duro:500gb  teclado: pantalla:</p>
        </div>
         </div>
            
         <label class="checkbox-inline"><input type="checkbox" value="">pendiente</label>
         <label class="checkbox-inline"><input type="checkbox" value="">reparado</label>
          
         
           

            <div class="form-group col-md-13">
            <label for="">observacion </label>
            <textarea class="form-control"  id="observacion "name="observacion " rows="4"></textarea>
          </div>

          <div class="form-group col-md-6"> 
                <button type="submit" class="btn btn-primary">Enviar</button>
                
         
        </form>
      </div>
    </div>
  </div>
</div>



<?php include_once "../componentes/pie.php"; ?>
