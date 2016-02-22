<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Portafolio de Asael Jaimes">
    <title>Shot</title>
    <link rel="stylesheet" href="{{ asset('css/handsome.css') }}">
  </head>
</html>
<body>
  <div class="wrapper">
    <div class="topbar col-12">
      <div class="languages col-6">
        <div class="lang">English</div>
        <div class="switch">
          <label for="lang_switch" class="sp"></label>
          <input id="lang_switch" type="checkbox" name="lang_switch" checked>
        </div>
        <div class="lang">Español</div>
      </div>
      <div class="about col-6">
        <button data-modal="about" class="btn green">Acerca de mí</button>
      </div>
    </div>
    <div class="profile col-12">
      <div style="background: url(http://realnerdo.com/img/profile.png) no-repeat center center; background-size: cover;" class="photo"></div>
      <div class="name"><a href="#" class="link">Asael Jaimes</a></div>
      <button data-modal="contact" class="btn green">Contáctame</button>
    </div>
    <div class="shot col-12">
      <div class="top row">
        <div class="back col-6"><a href="#" class="link">Regresar a todos los trabajos</a></div>
        <div class="made-with col-6">Hecho con <img src="http://realnerdo.com/img/uploads/1436413932_icon.png", alt="sketch"></div>
      </div>
      <article class="article row">
        <div class="col-12">
          <div style="background: url(http://realnerdo.com/img/uploads/1455398421_big.png) no-repeat center center; background-size: cover;" class="cover"></div>
        </div>
        <div class="col-12"><a href="#" class="link">Demo</a></div>
        <div class="col-12">
          <h1 class="title">Selz Widget - Prueba de Interfaz de Usuario</h1>
        </div>
        <div class="col-12">
          <div class="body">
            <p>Hice esta prueba de interfaz de usuario para aplicar como Freelancer Theme Developer. Es un widget para un producto de una tienda en línea.</p>
          </div>
        </div>
      </article>
    </div>
    <footer class="footer col-12">
      <p>Diseño y código hechos con <span class="love">❤</span> por <a href="http://realnerdo.com/">Asael Jaimes</a></p>
    </footer>
    <script src="{{ asset('js/magic.js') }}"></script>
  </div>
</body>