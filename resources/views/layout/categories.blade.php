
<nav class="categories">
  <ul class="list">
@foreach($data['tags'] as $tag)

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

@endforeach

  </ul>
</nav>