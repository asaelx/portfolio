
<div data-target="about" class="modal">
  <h2 class="title">{{ $data['about_title'] }} 
    <div class="close"><img src="{{ url('img/close.png') }}" class="img"/></div>
  </h2>
  <div class="content">
    <div class="photo"><img src="{{ url('img/asaelx.jpg') }}" class="img"/>
      <div class="data">
        <div class="name">{{ $data['name'] }}</div>
        <div class="degree">{{ $data['degree'] }}</div>
        <div class="job">{{ $data['job'] }}</div>
      </div>
    </div>{!! $data['about_content'] !!}
  </div>
</div>