<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>New shot</title>
    <link rel="shortcut icon" href="favicon.ico?v=2">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('img/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('img/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('img/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ url('img/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ url('img/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ url('img/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('img/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-196x196.png') }}" sizes="196x196">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-64x64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-48x48.png') }}" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-24x24.png') }}" sizes="24x24">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ url('img/favicon/favicon-128x128.png') }}" sizes="128x128">
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title"><a href="{{ url('admin') }}">Admin</a></h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Add new shot</h2>
@if(isset($data['shot']))
{!! Form::open(['url' => 'admin/shot/edit/' . $data['shot']->id, 'files' => true, 'class' => 'form']) !!}
@else
{!! Form::open(['url' => 'admin/shot/create', 'files' => true, 'class' => 'form']) !!}
@endif

      <div class="group">
        {!! Form::label('image', 'Select an image', ['class' => 'label-file']) !!}
        {!! Form::file('image') !!}
@if(isset($data['shot']))
<img src="{{ url($data['shot']->image_big) }}" class="image">
@endif

      </div>
      <div class="group">
@if(isset($data['shot']))
{!! Form::text('title_sp', $data['shot']->title_sp, ['class' => 'input']) !!}
@else
{!! Form::text('title_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('title_sp', 'Title (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($data['shot']))
{!! Form::text('title_en', $data['shot']->title_en, ['class' => 'input']) !!}
@else
{!! Form::text('title_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('title_en', 'Title (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($data['shot']))
{!! Form::textarea('content_sp', $data['shot']->content_sp, ['class' => 'input', 'rows' => '1']) !!}
@else
{!! Form::textarea('content_sp', null, ['class' => 'input', 'rows' => '1']) !!}
@endif
{!! Form::label('content_sp', 'Content (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($data['shot']))
{!! Form::textarea('content_en', $data['shot']->content_en, ['class' => 'input', 'rows' => '1']) !!}
@else
{!! Form::textarea('content_en', null, ['class' => 'input', 'rows' => '1']) !!}
@endif
{!! Form::label('content_en', 'Content (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($data['tags']))

@foreach($data['tags'] as $tag)

@if(isset($data['shot']) && $data['shot']->tag == $tag->id)
{!! Form::radio('tag', $tag->id, true) !!} {{ $tag->name_sp }} (SP) <br>
@else
{!! Form::radio('tag', $tag->id) !!} {{ $tag->name_sp }} (SP) <br>
@endif

@endforeach

@endif

      </div>
      <div class="group">
@if(isset($data['shot']))

<?php $shot_programs = $data['shot']->programs->toArray() ?>
@foreach($shot_programs as $key => $program)

<?php unset($shot_programs[$key]['pivot']) ?>
@endforeach

@endif

@if(isset($data['programs']))

@foreach($data['programs'] as $program)

@if(isset($data['shot']) && in_array((array)json_decode($program), $shot_programs))
{!! Form::checkbox('programs[]', $program->id, true) !!} {{ $program->name }} (SP) <br>
@else
{!! Form::checkbox('programs[]', $program->id) !!} {{ $program->name }} (SP) <br>
@endif

@endforeach

@endif

      </div>
      <div class="group">
@if(isset($data['shot']))
{!! Form::submit('Update', ['class' => 'btn green']) !!}
@else
{!! Form::submit('Publish', ['class' => 'btn green']) !!}
@endif

      </div>{!! Form::close() !!}
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>