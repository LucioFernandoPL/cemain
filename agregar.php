<?php
$nombre=$_POST['nombre'];
$tel=$_POST['tel'];
$fecha=$_POST['fecha'];
$servicio=$_POST['servicio'];
$comentarios=$_POST['comentarios'];

echo $nombre;
echo $tel;
echo $fecha;
echo $servicio;
echo $comentarios;

include('conexion.php');
$accion="INSERT INTO cita (nombre,tel,fecha,servicio,comentarios,id_cargo) VALUES ('$nombre', '$tel', ' $fecha', ' $servicio', '$comentarios', '1')";
$consulta=mysqli_query($conexion,$accion);

if(consulta!=null){
    print"<script>alert(\"Agregado Exitosamente.\");
    window.location='admin.php';</script>";    
} else{
    print"<script>alert(\"No se pudo agregar.\");
    window.location='admin.php';</script>";  
  }
