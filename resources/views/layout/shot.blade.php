
<div class="the-shot">
  <nav class="nav"><a href="{{ url('/') }}" class="back"><img src="{{ url('img/left.png') }}" class="img"/>
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

        <li title="{{ $program['name'] }}" class="item"><img src="{{ url($program['icon']) }}" class="img"/></li>
@endforeach

      </ul>
    </div>
  </nav><img src="{{ url($data['shot']['image_big']) }}" class="img"/>
  <h1 class="title">{{ $data['shot']['title'] }}</h1>
  <div class="content">{!! $data['shot']['content'] !!}</div>
</div>