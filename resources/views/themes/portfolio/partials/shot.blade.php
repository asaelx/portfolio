
<div class="shot col-12">
  <div class="top row">
    <div class="back col-6"><a href="{{ url('/') }}" class="link">
        <svg role="img" class="left-icon">
          <use xlink:href="#left-icon"></use>
        </svg> Back to all projects</a></div>
    <div class="made-with col-6"><span class="text"> Made with</span>
@foreach($article->tags as $tag)

@if(!$tag->navigation)
<a href="{{ url('tagged', $tag->slug) }}" title="{{ $tag->name }}" class="link">
        <svg role="img" class="{{ $tag->slug }}-icon">
          <use xlink:href="#{{ $tag->slug }}-icon"></use>
        </svg></a>
@endif

@endforeach

    </div>
  </div>
  <article class="article row">
    <div class="col-12">
      <div class="cover"><img src="{{ $article->cover()->url }}" width="800" class="img"/></div>
    </div>
@if($article->excerpt != "")

    <div class="col-12"><a href="{{ $article->excerpt }}" target="_blank" class="btn green">Demo 
        <svg role="img" class="right-icon">
          <use xlink:href="#right-icon"></use>
        </svg></a></div>
@endif

    <div class="col-12">
      <h1 class="title">{{ $article->title }}</h1>
    </div>
    <div class="col-12">
      <div class="body">{!! Markdown::convertToHtml($article->body) !!}</div>
    </div>
  </article>
</div>