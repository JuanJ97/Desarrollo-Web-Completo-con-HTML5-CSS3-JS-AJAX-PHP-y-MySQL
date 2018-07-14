<?php include_once 'php/header.php'; ?>

<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>
    <?php
    try{
        require_once('php/conexion.php');
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
$sql .= "FROM eventos ";
$sql .= "INNER JOIN categoria_evento ";
$sql .= "ON eventos.id_cat_evento=categoria_evento.id ";
$sql .= "INNER JOIN invitados ";
$sql .= "ON eventos.id_inv=invitados.invitado_id ";
$sql .= "ORDER BY evento_id ";
$resultado = $con->query($sql);

} catch (Exception $e) {
$error = $e->getMessage();
echo $error;
}
    ?>
    <div class="calendario">
     <?php
    while( $eventos = $resultado->fetch_assoc()){ ?>
        <pre>
         <?php var_dump($eventos); ?>
     </pre>
    <?php } ?>
     
 </div>
 <?php $con->close(); ?>
</section>
 
 <?php include_once 'php/footer.php'; ?>