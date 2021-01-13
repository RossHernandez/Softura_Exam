<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Softura Exam</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
      <div class="container mb-2">
        <a class="navbar-brand" href="index.php">Empleados Softura</a>
        <button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#miModal">
	Agregar
</button>
      </div>



<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
      </div>


      <div class="modal-body">
      <div class="card card-body">
      <!--Inicia formulario-->
      <form action="save.php" method="POST">
        <div class="mb-3">
          <input type="text" name="nombre_completo" class="form-control" placeholder="Nombre" autofocus required>
        </div>
        <div class="mb-3">
          <input type="email" name="correo_principal" class="form-control" placeholder="Correo principal" 
          autofocus required pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
        </div>
        <div class="mb-3">
          <input type="tel" name="telefono" class="form-control" placeholder="Telefono" 
          autofocus required  maxlength="10" minlength="10" pattern="[0-9]{10}">
        </div>
        <div class="mb-3">
          <input type="tel" name="otro_telefono" class="form-control" placeholder="Otro telefono" 
          autofocus maxlength="10" minlength="10" pattern="[0-9]{10}">
        </div>
        <div class="mb-3">
          <input type="date" name="fecha_nacimiento" class="form-control" placeholder="¿Cuando nació?" 
          autofocus required>
        </div>

        <input type="submit" class="btn btn-primary btn-block" name="save" value="Guardar">
      </form>
      <!--Termina Form-->
      </div>
    </div> 

      </div>


    </div>
  </div>
</div>
      
  </nav>
  </body>