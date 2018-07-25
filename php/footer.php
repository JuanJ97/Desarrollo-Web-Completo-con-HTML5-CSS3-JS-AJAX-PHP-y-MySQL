 <footer class="site-footer">
     <div class="contenedor clearfix">
         <div class="footer-informacion">
             <h3>Sobre <span>gdlwebcamp</span></h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nostrum accusantium unde at qui. Doloremque doloribus adipisci blanditiis quo harum exercitationem esse, quisquam molestias suscipit est dolores obcaecati dolor, tenetur.</p>
         </div>
            <div class="ultimos-tweets">
             <h3>Últimos <span>tweets</span></h3>
             <ul>
                 <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis expedita sit recusandae laudantium iusto modi fuga non harum mollitia repellat molestiae, nobis itaque velit! Fugiat, cum illum. Quae, ratione!</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, iste, nemo. Repudiandae eum quae corrupti voluptas, laboriosam velit, error nam fugiat optio, harum et facere atque deserunt sapiente. Quas, dolorem.</li>
                 <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab dignissimos aperiam animi iste! Dicta molestias pariatur ullam, perspiciatis quidem, laborum fuga atque at quod dolores, mollitia in cupiditate eaque ipsam.</li>
             </ul> 
         </div>
            <div class="menu">
             <h3>Redes <span>sociales</span></h3>
             <nav class="redes-sociales">
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </nav>
         </div>
     </div>
 </footer>
 <p class="copyright">Todos los derechos reservados 2018</p>
 <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display:none;">
<div id="mc_embed_signup">
<form action="https://github.us18.list-manage.com/subscribe/post?u=3b908f0385023ef8b64df1e96&amp;id=71ff8408ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Suscribete al NewsLetter y no te pierdas nada de este evento</h2>
<div class="indicates-required"><span class="asterisk">*</span> campo obligatorio</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Correo electronico  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">Nombre </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Apellido </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3b908f0385023ef8b64df1e96_71ff8408ef" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
</div>
<!--End mc_embed_signup-->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  
  
    <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados'){
        echo '<script src="js/jquery.colorbox-min.js"></script>';
    }else if($pagina == 'conferencia'){
        echo '<script src="js/lightbox.js"></script>';
    }
    ?>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"3b908f0385023ef8b64df1e96","lid":"71ff8408ef"}) })</script>
</body>

</html>