
<nav class="categories">
  <ul class="list">
@foreach($data['tags'] as $tag)

@if($data['lang'] == 'sp')

    <li class="option"><a href="{{ $tag->name_en }}" class="link">{{ $tag->name_sp }}</a></li>
@else

    <li class="option"><a href="{{ $tag->name_en }}" class="link">{{ $tag->name_en }}</a></li>
@endif

@endforeach

  </ul>
</nav>