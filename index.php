<!DOCTYPE html>

<html lang="es">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Banco de Sangre</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

<?php include("header.php"); ?>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay gradient" style="background-image:url('images/demo/backgrounds/doc.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
    <p>Banco de Sangre</p>
      <br>
      <h2>Bienvenido a este portal donde podrás saber si calificas para agendar tu próxima donación. Para completar el formulario de pre extracción haz en el botón Formulario ubicado en la barra superior, una vez iniciada sesión.</h2>
      <br>
      <h2>El Banco de Sangre de la Clínica Santa María te invita a ser parte de un grupo de personas fieles a la doncación de sangre.</h2>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper coloured">
<?php if (isset($_SESSION['Nombres'])) { ?>
  <article class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <h6 class="three_quarter first">¿Desea dejar una sugerencia?</h6>
    <footer class="one_quarter"><a class="btn" href="comentarios.php">Sugerencia</a></footer>
    <!-- ################################################################################################ -->
  </article>
  <?php } ?>
</div>

<div class="wrapper row4">
  <section id="footer" class="hoc clear"> 

    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Llamanos al </strong>+56 2 2913 2261<strong> o también al </strong>+56 2 2913 2265</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>Horario</strong> Las 24 horas del día, los 365 días del año.</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Ubicación</strong> Av. Santa María 0500, Providencia.</span></div>
      </li>
    </ul>
  </section>
</div>

<!-- 
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_quarter first">
      <h6 class="heading">A convallis ultricies</h6>
      <p>Luctus et dolor nulla facilisi fusce sit amet magna non odio molestie egestas nullam id odio.</p>
      <p class="btmspace-30">Quis risus placerat aliquam nunc nec nunc morbi vel nisi sit amet orci adipiscing pharetra [<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Mauris lorem curabitur</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Semper lacus id nibh etiam iaculis viverra pede proin laoreet dolor ut nunc&hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Donec turpis aliquam sapien est sodales id elementum at molestie in felis class&hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Eget mauris egestas</h6>
      <ul class="nospace linklist">
        <li><a href="#">Aptent taciti sociosqu ad</a></li>
        <li><a href="#">Litora torquent per conubia</a></li>
        <li><a href="#">Nostra per inceptos himenaeos</a></li>
        <li><a href="#">Nam semper ipsum et purus</a></li>
        <li><a href="#">Suspendisse sed quam aliquam</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Volutpat quisque mauris</h6>
      <p class="nospace btmspace-15">Viverra etiam dictum euismod lectus vestibulum tincidunt erat vel molestie.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </footer>
</div>
-->



<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>