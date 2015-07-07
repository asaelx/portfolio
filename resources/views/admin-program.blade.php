<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>New program</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title"><a href="{{ url('admin') }}">Admin</a></h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Add new program</h2>
@if(isset($program))
{!! Form::open(['url' => 'admin/program/edit/' . $program->id, 'files' => true, 'class' => 'form']) !!}
@else
{!! Form::open(['url' => 'admin/program/create', 'files' => true, 'class' => 'form']) !!}
@endif

      <div class="group">
        {!! Form::label('icon', 'Select an icon', ['class' => 'label-file']) !!}
        {!! Form::file('icon') !!}
@if(isset($program))
<img src="{{ url($program->icon) }}" class="image">
@endif

      </div>
      <div class="group">
@if(isset($program))
{!! Form::text('name',  $program->name, ['class' => 'input']) !!}
@else
{!! Form::text('name',null, ['class' => 'input']) !!}
@endif
{!! Form::label('name', 'Name', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($program))
{!! Form::submit('Update', ['class' => 'btn green']) !!}
@else
{!! Form::submit('Add', ['class' => 'btn green']) !!}
@endif

      </div>{!! Form::close() !!}
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>