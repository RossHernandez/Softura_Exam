<?php include("db.php")
?>

<?php include("includes/header.php") 
?>

<div class="container p-2">

  <div class="row">
    <div class="col-md-3">
    <!-- Alertas en pantalla -->

    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
      <div class="card card-body">
      <!--Inicia formulario-->
      <form action="save.php" method="POST">
        <div class="form-group">
          <input type="text" name="nombre_completo" class="form-control" placeholder="Nombre" autofocus required>
        </div>
        <div class="form-group">
          <input type="email" name="correo_principal" class="form-control" placeholder="Correo principal" 
          autofocus required pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
        </div>
        <div class="form-group">
          <input type="tel" name="telefono" class="form-control" placeholder="Telefono" 
          autofocus required  maxlength="10" minlength="10" pattern="[0-9]{10}">
        </div>
        <div class="form-group">
          <input type="tel" name="otro_telefono" class="form-control" placeholder="Otro telefono" 
          autofocus maxlength="10" minlength="10" pattern="[0-9]{10}">
        </div>
        <div class="form-group">
          <input type="date" name="fecha_nacimiento" class="form-control" placeholder="¿Cuando nació?" 
          autofocus required>
        </div>

        <input type="submit" class="btn btn-primary btn-block" name="save" value="Guardar">
      </form>
      <!--Termina Form-->
      </div>
    </div> 

    <!--Pintar Tabla con registros-->
      <div class="col-md-9">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo principal</th>
            <th>Telefono</th>
            <th>Otro telefono</th>
            <th>Fecha de nacimiento</th>
            <th>Fecha de Ingreso</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM empleados";
            $result_empleados = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($result_empleados)) { ?>
              <tr>
                <td><?php echo $row['nombre_completo']; ?></td>
                <td><?php echo $row['correo_principal']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['otro_telefono']; ?></td>
                <td><?php echo $row['fecha_nacimiento']; ?></td>
                <td><?php echo $row['ingreso_sistema']; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
        </tbody>
        
      </table>
      </div>

  </div>
</div>

<?php include("includes/footer.php") 
?>