<?php include_once 'php/header.php'; ?>
 <section class="seccion contenedor">
     <h2>Resumen registro</h2>
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
    
     ?>
     <pre>
         <?php var_dump($_POST); ?>
     </pre>
     <?php } ?>
     
</section>
<?php include_once 'php/footer.php'; ?>