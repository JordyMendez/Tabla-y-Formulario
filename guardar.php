<!--
    Los datos enviados por html seran recividos y almacenados y poderlos mostrar en otra pagina
-->
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ciudad = $_POST['ciudad'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];
$pago = $_POST['pago'];
?>
<!--
  mostrar los datos en otra pagina
-->
<!DOCTYPE html>
<HTML lang="es">
    <head>
        <meta charset="UTF-8">
        <title> Datos</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1>Datos</h1>
        <P>Nombre:<?php echo $nombre;?></P>
        <P>Nombre:<?php echo $apellido;?></P>
        <P>Nombre:<?php echo $ciudad;?></P>
        <P>Nombre:<?php echo $fecha;?></P>
    </body>
</HTml>
