<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shot</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <!-- Languages-->
      <div class="languages">
        <div class="lang">English</div>
        <div class="switch">
          <label for="lang_switch" class="sp">Language</label>
          <input id="lang_switch" type="checkbox" name="lang_switch" checked>
        </div>
        <div class="lang">Español</div>
      </div>
      <!-- About--><a href="#" data-target="about" class="about trigger-modal green btn">Acerca de mí</a>
    </div>
    <div class="profile">
      <div class="photo"><img src="{{ url('img/profile.png') }}" alt="asaelx" class="img"></div>
      <div class="name">Asael Jaimes</div><a href="#" data-target="contact" class="trigger-modal btn green">Contáctame</a>
    </div>
    <div class="the-shot">
      <nav class="nav"><a href="{{ url('/') }}" class="back"><img src="{{ url('img/left.png') }}" class="img">Regresar a todos los trabajos</a>
        <div class="made"> <span>Hecho con</span>
          <ul class="list">
            <li title="Adobe Photoshop CS6" class="item"><img src="{{ url('img/photoshop.png') }}" class="img"></li>
            <li title="Adobe Illustratot CS6" class="item"><img src="{{ url('img/illustrator.png') }}" class="img"></li>
            <li title="Sketch 3" class="item"><img src="{{ url('img/sketch.png') }}" class="img"></li>
          </ul>
        </div>
      </nav><img src="{{ url('img/shot-big.jpg') }}" class="img">
      <h1 class="title">Tarjetas de presentación</h1>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <footer class="footer">
      <p>México, 2015. Diseño y código hechos con <span class="love">❤</span> por @asaelx</p>
    </footer>
    <div data-target="contact" class="modal">
      <h2 class="title">Contáctame
        <div class="close"><img src="{{ url('img/close.png') }}" class="img"></div>
      </h2>
      <div class="content">
        <p>Puedes contactarme para cosas como:</p>
        <ul>
          <li>“Necesito un sitio web básico, simple, pero elegante para tener presencia en internet”.</li>
          <li>“Quiero una tienda en línea para vender mis productos”.</li>
          <li>“Necesito un sitio web administrable, al que le pueda editar su contenido fácilmente”.</li>
          <li>“Quiero unas tarjetas de presentación”.</li>
          <li>“Me gustaría un rediseño al sitio web que tengo”.</li>
          <li>“Vamos a tomarnos una cerveza y platicar de un proyecto interesante”.</li>
        </ul>
        <p>O para alguna otra cosa que se te ocurra y vemos qué se puede hacer.</p>
        <div class="info">
          <div class="photo"><img src="{{ url('img/profile-big.png') }}" class="img"></div>
          <h3 class="title">Mis datos</h3>
          <p class="degree">I.S.C. Asael Chavez Jaimes</p>
          <p class="phone"><img src="{{ url('img/phone.png') }}" class="img">9992175661</p>
          <p class="email"><img src="{{ url('img/email.png') }}" class="img"><a href="mailto:asaelx@gmail.com" class="link">asaelx@gmail.com</a></p>
        </div><a href="#" class="cv btn green">Ver Currículum<img src="{{ url('img/right.png') }}" class="img"></a>
      </div>
    </div>
    <div data-target="about" class="modal">
      <h2 class="title">Acerca de mí
        <div class="close"><img src="{{ url('img/close.png') }}" class="img"></div>
      </h2>
      <div class="content">
        <div class="photo"><img src="{{ url('img/asaelx.jpg') }}" class="img">
          <div class="data">
            <div class="name">Asael C. Jaimes</div>
            <div class="degree">Ing. en Sistemas Computacionales</div>
            <div class="job">Desarrollador y Diseñador Web</div>
          </div>
        </div>
        <p>El nombre es Asael Jaimes, actualmente vivo en la ciudad de Mérida, Yucatán y me dedico a hacer cosas para la web. Tengo una pasión por la tecnología y el buen diseño.</p>
        <p>Estudié Ingeniería en Sistemas Computacionales porque me gusta mucho entender cómo funcionan las cosas, de igual manera me dediqué a estudiar diseño para saber cómo crear soluciones interesantes.</p>
        <p>Desde pequeño me ha gustado mucho experimentar con las cosas, desarmarlas y ver si puedo crear cosas nuevas. Me gusta aprender todo lo que pueda, soy muy autodidacta y proactivo.</p>
        <p>Desarrollo proyectos que combinan el cuidado al diseño y funcionalidad, de manera que estos se complementen para crear soluciones que brinden a los usuarios una experiencia intuitiva.</p>
        <p>Cuando no estoy en la web, me puedes encontrar alimentando mis otras pasiones. Me encanta ir al cine, ver todas las películas, sean buenas o malas, dibujar y escribir cualquier cosa que se me ocurra, ir a cualquier concierto al que pueda ir, viajar, tanto para conocer otra ciudad, sus comidas y tradiciones, como para asistir a alguna conferencia de diseño y tecnología.</p>
      </div>
    </div>
    <div class="layer"></div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>