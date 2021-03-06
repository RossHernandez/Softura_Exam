<?php include("../controllers/db.php")
?>

<?php include("header.php") 
?>
<!--<script type="text/javascript">
  function ConfirmDelete()
  {
    var respuesta = confirm("¿Seguro que desea eliminar al empleado?");
    if (respuesta == true)
    {
      return  true;
    }
    else
    {
      return false;
    }
  }
</script>
-->
<div class="container p-2">

  <div class="row">
    <div>
    <!-- Alertas en pantalla -->
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
      </div>
      <?php session_unset(); } ?>
      


    <!--Pintar Tabla con registros-->
      <div class="col-md-12">
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
                <button type="button" class="btn btn-primary btn-small" data-toggle="modal" data-target="#miModalEdit">
                <i class="fas fa-edit"></i>
                </button>

                  <a href="../controllers/edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary btn-sm mb-1">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="../controllers/delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm"
                  onclick="return confirm('Estás seguro que deseas eliminar el registro?');">
                    <i class="far fa-trash-alt"></i>
                     <!--<button type='button' class='btn btn danger' onclick="return ConfirmDelete">Eliminar</button>-->
                  </a>
                </td>
              </tr>
              <?php } ?>
        </tbody>
        
      </table>
      </div>

  </div>
</div>

<?php include("footer.php") 
?>