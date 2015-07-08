
<div data-target="contact" class="modal">
  <h2 class="title">{{ $data['contact_title'] }}
    <div class="close"><img src="{{ url('img/close.png') }}" class="img"/></div>
  </h2>
  <div class="content">{!! $data['contact_content'] !!}
    <div class="info">
      <div class="photo"><img src="{{ url('img/profile-big.png') }}" class="img"/></div>
      <h3 class="title">
@if($data['lang'] == 'sp')
Mis datos
@else
My contact info    
@endif

      </h3>
      <p class="degree">{{ $data['degree'] }}</p>
      <p class="phone"><img src="{{ url('img/phone.png') }}" class="img"/>{{ $data['tel'] }}</p>
      <p class="email"><img src="{{ url('img/email.png') }}" class="img"/><a href="mailto:{{ $data['email'] }}" class="link">{{ $data['email'] }}</a></p>
    </div><a href="#" class="cv btn green">
@if($data['lang'] == 'sp')
Ver Currículum
@else
Resume
@endif
<img src="{{ url('img/right.png') }}" class="img"/></a>
  </div>
</div>