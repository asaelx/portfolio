<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $data['title'] }}</title>
    <link rel="shortcut icon" href="favicon.ico?v=2">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('img/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('img/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('img/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ url('img/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ url('img/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ url('img/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('img/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-196x196.png') }}" sizes="196x196">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-64x64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-48x48.png') }}" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-24x24.png') }}" sizes="24x24">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-128x128.png') }}" sizes="128x128">
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png">
    <meta name="msapplication-TileColor" content="#ffffff">
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
    <nav class="categories">
      <ul class="list">
@foreach($data['tags'] as $tag)

@if(str_slug($tag->name_en) != 'mobile' && str_slug($tag->name_en) != 'photography')

@if($data['lang'] == 'sp')

                    <li class="option">
@if(isset($data['current_tag']) && str_slug($data['current_tag']) == str_slug($tag->name_en))
<a href="{{ url('tag/' . $tag->name_en) }}" class="link active">{{ $tag->name_sp }}</a>
@else
<a href="{{ url('tag/' . $tag->name_en) }}" class="link">{{ $tag->name_sp }}</a>
@endif

                    </li>
@else

                        <li class="option"><a href="{{ $tag->name_en }}" class="link">{{ $tag->name_en }}</a></li>
@endif

@endif

@endforeach

      </ul>
    </nav>
    <div class="shots">
      <ul class="slider">
<?php $i=0; ?>
@foreach($data['shots'] as $shot)

<?php 
                if($i%12 == 0):
                    echo $i > 0 ? "</ul></li>" : "";
                    echo '<li class="slide"><ul class="list">';
                endif;
?>
            <li class="shot"><a href="{{ url('shot/' . $shot->slug) }}" class="link"><img src="{{ url($shot->image_small) }}" class="img"></a></li>
<?php $i++; ?>
@endforeach

      </ul>
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
        </div>
@if($data['lang'] == 'sp')
<a href="{{ url('files/resume_sp.pdf') }}" target="_blank" class="cv btn green">Ver Currículum<img src="{{ url('img/right.png') }}" class="img"></a>
@else
<a href="{{ url('files/resume_en.pdf') }}" target="_blank" class="cv btn green">Resume<img src="{{ url('img/right.png') }}" class="img"></a>
@endif

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