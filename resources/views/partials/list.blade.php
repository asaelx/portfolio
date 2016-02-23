
<?php $tabs = ['published' => 'Publicados', 'unpublished' => 'Por publicar']; ?>
<div class="tools">
  <ul class="tabs">
<?php $current = (!is_null(request()->get('tab')) && array_key_exists(request()->get('tab'), $tabs)) ? request()->get('tab') : null ?>
<?php $i = 0; ?>
@foreach($tabs as $tab => $title)

      <li class="tab"><a href="#" data-tab="{{ $tab }}" class="link {{ ($current == $tab || (is_null($current) && $i === 0)) ? 'active' : '' }}">{{ $title }}</a></li>
<?php $i++; ?>
@endforeach

  </ul>
</div>
<ul id="published" class="list tabbed {{ (is_null($current) || $current == 'published') ? 'active' : '' }}">
@if(!$published->isEmpty())

@foreach($published as $article)

  <li class="item">
    <div class="date">{{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}</div><a href="{{ url('admin/articles/' . $article->slug . '/edit') }}" class="title">{{ $article->title }}</a>
    <div class="details">Por <a href="{{ url('admin/articles/author', $article->user->slug) }}">{{ $article->user->name }}</a>
@if(!is_null($article->tags()->first()))
 · Archivado en <a href="{{ url('admin/articles/tagged', $article->tags()->first()->slug) }}">{{ $article->tags()->first()->name }}</a>
@endif

    </div>
    <ul class="options">
      <li class="option">{!! Form::open(['url' => url('admin/articles', $article->slug), 'method' => 'DELETE']) !!}
        <button type="submit" class="link delete">Eliminar</button>{!! Form::close() !!}
      </li>
      <li class="option"><a href="{{ url('admin/articles/' . $article->slug . '/edit') }}" class="link edit">Editar</a></li>
    </ul>
  </li>
@endforeach

  <div class="list-footer">
@if($published->total() > 1)

        <div class="count">Hay {{ $published->total() }} artículos en total</div>
@else

            <div class="count">Solo hay {{ $published->total() }} artículo</div>
@endif
{!! $published->render() !!}
  </div>
@else

      <div class="empty"><i class="twa twa-hushed"></i>
        <h4 class="legend">Aún no tienes artículos publicados</h4><a href="{{ url('admin/articles/create') }}" class="btn blue">Escribe tu primer artículo</a>
      </div>
@endif

</ul>
<ul id="unpublished" class="list tabbed {{ (!is_null($current) && $current == 'unpublished') ? 'active' : '' }}">
@if(!$unpublished->isEmpty())

@foreach($unpublished as $article)
   
  <li class="item">
    <div class="date">{{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}</div><a href="{{ url('admin/articles/' . $article->slug . '/edit') }}" class="title">{{ $article->title }}</a>
    <div class="details">Por <a href="{{ url('admin/articles/author', $article->user->slug) }}">{{ $article->user->name }}</a>
@if(!is_null($article->tags()->first()))
 · Archivado en <a href="{{ url('admin/articles/tagged', $article->tags()->first()->slug) }}">{{ $article->tags()->first()->name }}</a>
@endif

    </div>
    <ul class="options">
      <li class="option">{!! Form::open(['url' => url('admin/articles', $article->slug), 'method' => 'DELETE']) !!}
        <button type="submit" class="link delete">Eliminar</button>{!! Form::close() !!}
      </li>
      <li class="option"><a href="{{ url('admin/articles/' . $article->slug . '/edit') }}" class="link edit">Editar</a></li>
    </ul>
  </li>
@endforeach

  <div class="list-footer">
@if($unpublished->total() > 1)

        <div class="count">Hay {{ $unpublished->total() }} artículos en total</div>
@else

            <div class="count">Solo hay {{ $unpublished->total() }} artículo</div>
@endif
{!! $unpublished->render() !!}
  </div>
@else

      <div class="empty"><i class="twa twa-neutral-face"></i>
        <h4 class="legend">No tienes artículos pendientes por publicar</h4><a href="{{ url('admin/articles/create') }}" class="btn blue">Escribe un artículo</a>
      </div>
@endif

</ul>