<?php include_once 'php/header.php'; ?>

 <section class="seccion contenedor">
     <h2>La mejor conferencia de diseño web en español</h2>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia fuga aperiam natus aliquid suscipit cum provident nulla ullam architecto, eos consectetur explicabo quaerat optio culpa, vitae libero nam, accusantium quae.</p>
 </section>
<section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
        </video>
      </div> <!--contenedor video-->
     <div class="contenido-programa">
                <div class="contenedor">
                    <div class="programa-evento">
                        <h2>Programa del Evento</h2>
                        
                        <?php 
                            try {
                              require_once('php/conexion.php');
                                $con->set_charset("utf8"); 
                              $sql = "SELECT * FROM `categoria_evento` ";
                              $resultado = $con->query($sql);
                            } catch (Exception $e) {
                              $error = $e->getMessage();
                            }
                         ?>
                        <nav class="menu-programa">
                          <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_evento']; ?>
                                <a href="#<?php echo strtolower($categoria) ?>">
                                      <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                                </a>
                          <?php } ?>
                        </nav>
                        
                        <?php 
                            try {
                              require_once('php/conexion.php');
                              $sql = "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM eventos ";
                              $sql .= "INNER JOIN categoria_evento ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id ";
                              $sql .= "INNER JOIN invitados ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 1 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                              $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM eventos ";
                              $sql .= "INNER JOIN categoria_evento ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id ";
                              $sql .= "INNER JOIN invitados ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 2 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                              $sql .= "SELECT `evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `cat_evento`, `nombre_invitado`, `apellido_invitado` ";
                              $sql .= "FROM eventos ";
                              $sql .= "INNER JOIN categoria_evento ";
                              $sql .= "ON eventos.id_cat_evento=categoria_evento.id ";
                              $sql .= "INNER JOIN invitados ";
                              $sql .= "ON eventos.id_inv=invitados.invitado_id ";
                              $sql .= "AND eventos.id_cat_evento = 3 ";
                              $sql .= "ORDER BY `evento_id` LIMIT 2;";
                            } catch (Exception $e) {
                              $error = $e->getMessage();
                            }
                         ?>
                        <?php $con->multi_query($sql); ?>
                        
                        <?php 
                            do {
                                $resultado = $con->store_result();
                                $row = $resultado->fetch_all(MYSQLI_ASSOC);    ?>
                                
                                <?php $i = 0; ?>
                                <?php foreach($row as $evento): ?>
                                  <?php if($i % 2 == 0) { ?>
                                    <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                                  <?php } ?>
                                          <div class="detalle-evento">
                                              <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
                                              <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $evento['hora_evento']; ?></p>
                                              <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento']; ?></p>
                                              <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " .  $evento['apellido_invitado']; ?></p>
                                          </div>
                                  <?php if($i % 2 == 1): ?>
                                        <a href="calendario.php" class="button float-right">Ver todos</a>
                                    </div> <!--#talleres-->
                                  <?php endif; ?>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                                <?php $resultado->free(); ?>
                          <?php  } while ($con->more_results() && $con->next_result());?>
                  
                    </div> <!--.programa-evento-->
                </div> <!--.contenedor-->
            </div><!--.contenido-programa-->
 </section>
 <section class="invitados contenedor seccion">
     <h2>Nuestros Invitados</h2>
     <ul class="lista-invitados clearfix">
         <li>
             <div class="invitado">
                 <img src="img/invitado1.jpg" alt="invitado">
                 <p>Rafael Bautista</p>
             </div>
         </li>
         <li>
             <div class="invitado">
                 <img src="img/invitado2.jpg" alt="invitado2">
                 <p>Shari Herrera</p>
             </div>
         </li>
         <li>
             <div class="invitado">
                 <img src="img/invitado3.jpg" alt="invitado3">
                 <p>Gregorio Sanchez</p>
             </div>
         </li>
         <li>
             <div class="invitado">
                 <img src="img/invitado4.jpg" alt="invitado4">
                 <p>Susana Rivera</p>
             </div>
         </li>
         <li>
             <div class="invitado">
                 <img src="img/invitado5.jpg" alt="invitado5">
                 <p>Harold Garcia</p>
             </div>
         </li>
         <li>
             <div class="invitado">
                 <img src="img/invitado6.jpg" alt="invitado6">
                 <p>Susan Sanchez</p>
             </div>
         </li>
     </ul>
 </section>
 <div class="contador parrallax">
     <div class="contenedor">
         <ul class="resumen-evento clearfix">
             <li><p class="numero"></p>Invitados</li>
             <li><p class="numero"></p>Talleres</li>
             <li><p class="numero"></p>Dias</li>
             <li><p class="numero"></p>Conferencias</li>
         </ul>
     </div>
 </div>
 <section class="precios seccion">
     <h2>Precios</h2>
     <div class="contenedor">
         <ul class="lista-precios clearfix">
             <li>
                 <div class="tabla-precio">
                     <h3>Pase por día</h3>
                     <p class="numero">$30</p>
                     <ul>
                         <li>Bocadillos gratis</li>
                         <li>Todas lasconferencias</li>
                         <li>Todos los talleres</li>
                     </ul>
                     <a href="#" class="button hollow">Comprar</a>
                 </div>
             </li>
             <li>
                 <div class="tabla-precio">
                     <h3>Todos los dias</h3>
                     <p class="numero">$50</p>
                     <ul>
                         <li>Bocadillos gratis</li>
                         <li>Todas lasconferencias</li>
                         <li>Todos los talleres</li>
                     </ul>
                     <a href="#" class="button">Comprar</a>
                 </div>
             </li>
             <li>
                 <div class="tabla-precio">
                     <h3>Pase por 2 días</h3>
                     <p class="numero">$45</p>
                     <ul>
                         <li>Bocadillos gratis</li>
                         <li>Todas lasconferencias</li>
                         <li>Todos los talleres</li>
                     </ul>
                     <a href="#" class="button hollow">Comprar</a>
                 </div>
             </li>
         </ul>
     </div>
 </section>

 <section class="seccion">
     <h2>Testimoniales</h2>
     <div class="testimoniales contenedor clearfix">
     <div class="testimonial">
         <blockquote>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestias illum reprehenderit veritatis, sapiente inventore. Soluta debitis iste temporibus inventore accusantium, dolorem ex quasi tempore, possimus perspiciatis vitae, itaque obcaecati?</p>
             <footer class="info-testimonial clearfix">
                 <img src="img/testimonial.jpg" alt="imagen testimonial">
                 <cite>Oswaldo Aponte Escobedo</cite>
                 <span>Diseñador en @prisma</span>
             </footer>
         </blockquote>
     </div>
        <div class="testimonial">
         <blockquote>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestias illum reprehenderit veritatis, sapiente inventore. Soluta debitis iste temporibus inventore accusantium, dolorem ex quasi tempore, possimus perspiciatis vitae, itaque obcaecati?</p>
             <footer class="info-testimonial clearfix">
                 <img src="img/testimonial.jpg" alt="imagen testimonial">
                 <cite>Oswaldo Aponte Escobedo</cite>
                 <span>Diseñador en @prisma</span>
             </footer>
         </blockquote>
     </div>
        <div class="testimonial">
         <blockquote>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam molestias illum reprehenderit veritatis, sapiente inventore. Soluta debitis iste temporibus inventore accusantium, dolorem ex quasi tempore, possimus perspiciatis vitae, itaque obcaecati?</p>
             <footer class="info-testimonial clearfix">
                 <img src="img/testimonial.jpg" alt="imagen testimonial">
                 <cite>Oswaldo Aponte Escobedo</cite>
                 <span>Diseñador en @prisma</span>
             </footer>
         </blockquote>
     </div>
     </div>
 </section>
 <div class="newsletter">
     <div class="contenido contenedor">
         <p>Registrate al newsletter</p>
         <h3>gdlwebcamp</h3>
         <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a> 
     </div>
 </div>
 <section class="seccion">
     <h2>Faltan</h2>
     <div class="cuenta-regresiva contenedor">
         <ul class="clearfix">
             <li>
                 <p id="dias" class="numero"></p>días
             </li>
             <li>
                 <p id="horas" class="numero"></p>horas
             </li>
             <li>
                 <p id="minutos" class="numero"></p>minutos
             </li>
             <li>
                 <p id="segundos" class="numero"></p>segundos
             </li>
         </ul>
     </div>
 </section>
<?php include_once 'php/footer.php'; ?>
