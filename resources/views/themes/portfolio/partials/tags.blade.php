
<nav class="tags col-12">
  <ul class="list">
@foreach($tags as $tag)

@if($tag->navigation)

    <li class="item"><a href="{{ url('tagged', $tag->slug) }}" class="link">{{ $tag->name }}</a></li>
@endif

@endforeach

  </ul>
</nav>