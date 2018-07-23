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
                 try{
                     require_once('php/conexion.php');
                 }
                 ?>
                 <nav class="menu-programa">
                     <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
                     <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
                     <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
                 </nav>
                 <div id="talleres" class="info-cursos ocultar clearfix">
                     <div class="detalle-evento">
                         <h3>HTML5, CSS3 Y JAVASCRIPT</h3>
                         <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
                         <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de DIC</p>
                         <p><i class="fa fa-user" aria-hidden="true"></i> Juan Jesus Morales</p>
                     </div>
                     <div class="detalle-evento">
                         <h3>RESPONSIVE DESIGN</h3>
                         <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
                         <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de DIC</p>
                         <p><i class="fa fa-user" aria-hidden="true"></i> Juan Jesus Morales</p>
                     </div>
                     <a href="" class="button float-right" >Ver todos</a>
                 </div>
                 <div id="conferencias" class="info-cursos ocultar clearfix">
                     <div class="detalle-evento">
                         <h3>Como ser freelancer</h3>
                         <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
                         <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de DIC</p>
                         <p><i class="fa fa-user" aria-hidden="true"></i> Juan Jesus Morales</p>
                     </div>
                     <div class="detalle-evento">
                         <h3>Tecnologias del futuro</h3>
                         <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
                         <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de DIC</p>
                         <p><i class="fa fa-user" aria-hidden="true"></i> Juan Jesus Morales</p>
                     </div>
                     <a href="" class="button float-right" >Ver todos</a>
                 </div>
                 <div id="seminarios" class="info-cursos ocultar clearfix">
                     <div class="detalle-evento">
                         <h3>Diseño UI/UX para moviles</h3>
                         <p><i class="fa fa-clock-o" aria-hidden="true"></i> 16:00 hrs</p>
                         <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de DIC</p>
                         <p><i class="fa fa-user" aria-hidden="true"></i> Juan Jesus Morales</p>
                     </div>
                     <div class="detalle-evento">
                         <h3>Aprende a programar en una mañana</h3>
                         <p><i class="fa fa-clock-o" aria-hidden="true"></i> 12:00 hrs</p>
                         <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de DIC</p>
                         <p><i class="fa fa-user" aria-hidden="true"></i> Juan Jesus Morales</p>
                     </div>
                     <a href="" class="button float-right" >Ver todos</a>
                 </div>
             </div>
         </div>
     </div>
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
         <a href="#" class="button transparente">Registro</a>
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
