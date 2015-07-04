<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>New shot</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title">Admin</h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Add new shot</h2>{!! Form::open(['url' => 'admin/create', 'files' => true, 'class' => 'form']) !!}
      <div class="group">
        {!! Form::label('image', 'Select an image', ['class' => 'label-file']) !!}
        {!! Form::file('image') !!}
      </div>
      <div class="group">
        {!! Form::text('title_sp', null, ['class' => 'input']) !!}
        {!! Form::label('title_sp', 'Title (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
        {!! Form::text('title_en', null, ['class' => 'input']) !!}
        {!! Form::label('title_en', 'Title (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
        {!! Form::textarea('content_sp', null, ['class' => 'input', 'rows' => '1']) !!}
        {!! Form::label('content_sp', 'Content (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
        {!! Form::textarea('content_en', null, ['class' => 'input', 'rows' => '1']) !!}
        {!! Form::label('content_en', 'Content (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">{!! Form::submit('Publish', ['class' => 'btn green']) !!}</div>{!! Form::close() !!}
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>