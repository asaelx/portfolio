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
          <label for="lang_switch" class="{{ $data['lang'] }}">Language</label>
@if($data['lang'] == 'sp')

              <input id="lang_switch" type="checkbox" name="lang_switch" checked>
@else

                  <input id="lang_switch" type="checkbox" name="lang_switch">
@endif

        </div>
        <div class="lang">Español</div>
      </div>
      <!-- About--><a href="#" data-target="about" class="about trigger-modal green btn">{{ $data['about_title'] }}</a>
    </div>
    <div class="profile">
      <div class="photo"><a href="{{ url('/') }}" class="link"><img src="{{ url('img/profile.png') }}" alt="asaelx" class="img"></a></div>
      <div class="name"><a href="{{ url('/') }}" class="link">{{ $data['name'] }}</a></div><a href="#" data-target="contact" class="trigger-modal btn green">{{ $data['contact_title'] }}</a>
    </div>
    <div class="the-shot">
      <nav class="nav"><a href="{{ url('/') }}" class="back"><img src="{{ url('img/left.png') }}" class="img">
@if($data['lang'] == 'sp')
Regresar a todos los trabajos
@else
Back to all projects
@endif
</a>
        <div class="made"> <span>
@if($data['lang'] == 'sp')
Hecho con
@else
Made with
@endif
</span>
          <ul class="list">
@foreach($data['shot']['programs'] as $program)

                <li title="{{ $program['name'] }}" class="item"><img src="{{ url($program['icon']) }}" class="img"></li>
@endforeach

          </ul>
        </div>
      </nav><img src="{{ url($data['shot']['image_big']) }}" class="img">
      <h1 class="title">{{ $data['shot']['title'] }}</h1>
      <div class="content">{!! $data['shot']['content'] !!}</div>
    </div>
    <footer class="footer">
      <p>{{ $data['footer'] }}</p>
    </footer>
    <div data-target="contact" class="modal">
      <h2 class="title">{{ $data['contact_title'] }}
        <div class="close"><img src="{{ url('img/close.png') }}" class="img"></div>
      </h2>
      <div class="content">{!! $data['contact_content'] !!}
        <div class="info">
          <div class="photo"><img src="{{ url('img/profile-big.png') }}" class="img"></div>
          <h3 class="title">
@if($data['lang'] == 'sp')
Mis datos
@else
My contact info    
@endif

          </h3>
          <p class="degree">{{ $data['degree'] }}</p>
          <p class="phone"><img src="{{ url('img/phone.png') }}" class="img">{{ $data['tel'] }}</p>
          <p class="email"><img src="{{ url('img/email.png') }}" class="img"><a href="mailto:{{ $data['email'] }}" class="link">{{ $data['email'] }}</a></p>
        </div><a href="#" class="cv btn green">
@if($data['lang'] == 'sp')
Ver Currículum
@else
Resume
@endif
<img src="{{ url('img/right.png') }}" class="img"></a>
      </div>
    </div>
    <div data-target="about" class="modal">
      <h2 class="title">{{ $data['about_title'] }} 
        <div class="close"><img src="{{ url('img/close.png') }}" class="img"></div>
      </h2>
      <div class="content">
        <div class="photo"><img src="{{ url('img/asaelx.jpg') }}" class="img">
          <div class="data">
            <div class="name">{{ $data['name'] }}</div>
            <div class="degree">{{ $data['degree'] }}</div>
            <div class="job">{{ $data['job'] }}</div>
          </div>
        </div>{!! $data['about_content'] !!}
      </div>
    </div>
    <div class="layer"></div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>