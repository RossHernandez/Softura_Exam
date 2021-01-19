<?php
 include('db.php');

 if (isset($_POST['save'])) {
   $nombre_completo = $_POST['nombre_completo'];
   $correo_principal = $_POST['correo_principal'];
   $telefono = $_POST['telefono'];
   $otro_telefono = $_POST['otro_telefono'];
   $fecha_nacimiento = $_POST['fecha_nacimiento'];

   if (!filter_var($correo_principal, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }

   $query = "INSERT INTO empleados(
       nombre_completo, 
       correo_principal, 
       telefono, 
       otro_telefono, 
       fecha_nacimiento)  
   VALUES ('$nombre_completo', '$correo_principal', '$telefono', '$otro_telefono', '$fecha_nacimiento')";
   $result = mysqli_query($conn, $query);
   if(!$result) {
     die("Query Failed.");
   }
 
   $_SESSION['message'] = 'Datos de empleado guardados';
   $_SESSION['message_type'] = 'success';
   header('Location: ../view/index.php');
 
 }
?>