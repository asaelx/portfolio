
@if(isset($currentTag))

<div class="tagged col-12">Projects archived in <a href="{{ url($currentTag->slug) }}" class="link">{{ $currentTag->name }}</a></div>
@endif

<div class="shots col-12">
  <ul class="list col-12">
@foreach($articles as $article)

    <li class="item col-3"><a href="{{ url($article->slug) }}" style="background: url({{ $article->cover()->url }}) no-repeat center center; background-size: cover;" title="{{ $article->title }}" class="link"></a></li>
@endforeach

  </ul>
</div>