<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include('funciones.php');
 
 $vnumid=$_POST['numid'];
 
 $miconexion=conectar_bd('', 'CRUD_BD');
 {echo "Guardado exitoso"?>
 <script> swal('Aprendiz registrado correctamente', '', 'success');</script>
 <?php
 //header('Location: registro_aprendiz.php');
 }
 ?>

<br><br>
<input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">