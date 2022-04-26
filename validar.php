<?php
error_reporting(0);
$usuario = $_POST['usuario'];
$password = $_POST['password'];

session_start();
$_SESSION['usuario'] = $usuario;

include('conexion.php');
$consulta = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND contraseña = '$password'";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($resultado);

if ($fila['id_cargo'] == 1) {
    $_SESSION['usuario'] = $usuario;
    header("location:admin.php");
} else {

?>
    <br><br><br><br><br>
    <h1 class="text-danger text-center"> Error de Autenticación </h1>
    <?php
    include("admin.html");
    ?>

<?php
}

mysqli_free_result($resultado);
musqli_close($conexion);
?>