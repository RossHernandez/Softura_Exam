<?php
include("db.php");
$nombre_completo = '';
$correo_principal = '';
$telefono = '';
$otro_telefono= '';
$fecha_nacimiento= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM empleados WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre_completo = $row['nombre_completo'];
    $correo_principal = $row['correo_principal'];
    $telefono = $row['telefono'];
    $otro_telefono = $row['otro_telefono'];
    $fecha_nacimiento = $row['fecha_nacimiento'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre_completo= $_POST['nombre_completo'];
  $correo_principal = $_POST['correo_principal'];
  $telefono = $_POST['telefono'];
  $otro_telefono = $_POST['otro_telefono'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];

  $query = "UPDATE empleados set nombre_completo = '$nombre_completo', 
  correo_principal = '$correo_principal',
  telefono = '$telefono',
  otro_telefono = '$otro_telefono',
  fecha_nacimiento = '$fecha_nacimiento'
  WHERE id=$id";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Registro editado';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../view/index.php');
}
 
?>
<?php include('../view/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body">
      <!--Inicia Form-->
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="mb-3">
          <input name="nombre_completo" type="text" class="form-control" value="<?php echo $nombre_completo; ?>" placeholder="Actualiza nombre" 
          required autofocus>
        </div>
        <div class="mb-3">
          <input name="correo_principal" type="email" class="form-control" value="<?php echo $correo_principal; ?>" placeholder="Actualiza correo" 
          required autofocus pattern="^((?!\.)[\w-_.]*[^.](@\w+)(\.\w+(\.\w+)?[^.\W]))$">
        </div>
        <div class="mb-3">
          <input name="telefono" type="tel" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualiza telefono" 
          required autofocus minlength="10" maxlength="10" pattern="[0-9]{10}">
        </div>
        <div class="mb-3">
          <input type="tel" name="otro_telefono" class="form-control" value="<?php echo $otro_telefono; ?>" placeholder="Otro telefono" 
          autofocus minlength="10" maxlength="10" pattern="[0-9]{10}">
        </div>
        <div class="mb-3">
          <input type="date" name="fecha_nacimiento" class="form-control" value="<?php echo $fecha_nacimiento; ?>" placeholder="¿Cuando nació?" 
          required autofocus>
        </div>

        <button class="btn-success btn btn-primary" name="update">
          Actualizar</button>
          <a href="../view/index.php" type="button" class="btn btn-secondary">Cancelar</a>
          
      </form>
      <!--Termina Form-->
      </div>
    </div>
  </div>
</div>
<?php include('../view/footer.php'); ?>

<!--
Exp Regulares

^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$
^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$
^((?!\.)[\w-_.]*[^.](@\w+)(\.\w+(\.\w+)?[^.\W]))$
-->