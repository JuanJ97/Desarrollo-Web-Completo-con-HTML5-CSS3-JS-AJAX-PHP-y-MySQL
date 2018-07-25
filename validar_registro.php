<?php if(isset($_POST['submit'])) { 
     $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    $fecha = date('Y-m-d H:i:s');
    $camisas = $_POST['pedido_camisas'];
    $etiquetas = $_POST['pedido_etiquetas'];
    $boletos = $_POST['boletos'];
    include_once 'php/funciones.php';
    $pedido = productos_json($boletos, $camisas, $etiquetas);
    $eventos = $_POST['registro'];
    $registro = eventos_json($eventos);
    try{
        require_once('php/conexion.php');
        $con->set_charset("utf8"); 
        $stmt = $con->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados,regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $con->close();
        header('Location: validar_registro.php?exitoso=1');
} catch (Exception $e) {
$error = $e->getMessage();
echo $error;
}
   } ?>
<?php include_once 'php/header.php'; ?>
 <section class="seccion contenedor">
     <h2>Resumen registro</h2>
     
     <?php if(isset($_GET['exitoso']) && $_GET['exitoso'] == 1){ ?>
     <h2>Registro agregado exitosamente</h2>
     <?php } ?>
</section>
<?php include_once 'php/footer.php'; ?>