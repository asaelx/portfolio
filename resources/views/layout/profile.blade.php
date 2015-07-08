
<div class="profile">
  <div class="photo"><a href="{{ url('/') }}" class="link"><img src="{{ url('img/profile.png') }}" alt="asaelx" class="img"/></a></div>
  <div class="name"><a href="{{ url('/') }}" class="link">{{ $data['name'] }}</a></div><a href="#" data-target="contact" class="trigger-modal btn green">{{ $data['contact_title'] }}</a>
</div>