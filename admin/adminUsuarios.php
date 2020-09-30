<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>compubuga</title>
  </head>
  <body>
    <?php  include_once "adminVista.php";?>

<div class="container mt-5">
         <div class="col-md-5 offset-md-3">
          <div class="card bg-light mb-3" >
          <div class="card-header">Registro de usuarios</div>
               <div class="card-body">
           <h5 class="card-title">Datos de usuarios</h5>
    <form action="usuarioscontrolador.php" method="post">
    
    
    <div class="form-group">
    <label for="inputidentificacion1">Identificacion</label>
    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="identificacion" required="" pattern="[0-9]+" >
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombres</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required="" pattern="[a-zA-Z]+">
    </div>

    
   <div class="form-group col-md-6">
      <label for="inputPassword4">Apellidos</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required=""  pattern="[a-zA-Z]+">
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Telefono</label>
      <input type="text" class="form-control" id="telefono" name="telefono"  pattern="[0-9]+">
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
        <option>administrativo</option>
        <option>monitor</option>
        <option>tecnico reparador</option>
        
      </select>
    </div>
  <button type="submit" class="btn btn-primary">registrar</button>
</form>
        </div>
</div> 
       </div>
    
    </div>

    



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>