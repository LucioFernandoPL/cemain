<?php

include "conexion.php";

$id_cita=$_GET['id_cita'];

$sql="DELETE FROM cita WHERE id_cita='$id_cita'";
$consulta=mysqli_query($conexion,$sql);

if(consulta!=null){
    print"<script>alert(\"Eliminado Exitosamente.\");
    window.location='admin.php';</script>";


}else{

    print"<script>alert(\"No se pudo eliminar.\");
    window.location='admin.php';</script>";
}