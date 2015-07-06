<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>New tag</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title"><a href="{{ url('admin') }}">Admin</a></h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Add new tag</h2>
@if(isset($tag))
{!! Form::open(['url' => 'admin/tag/edit/' . $tag->id, 'files' => true, 'class' => 'form']) !!}
@else
{!! Form::open(['url' => 'admin/tag/create', 'files' => true, 'class' => 'form']) !!}
@endif

      <div class="group">
@if(isset($tag))
{!! Form::text('name_sp',  $tag->name_sp, ['class' => 'input']) !!}
@else
{!! Form::text('name_sp',null, ['class' => 'input']) !!}
@endif
{!! Form::label('name_sp', 'Name (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($tag))
{!! Form::text('name_en', $tag->name_en, ['class' => 'input']) !!}
@else
{!! Form::text('name_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('name_en', 'Name (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($tag))
{!! Form::submit('Update', ['class' => 'btn green']) !!}
@else
{!! Form::submit('Add', ['class' => 'btn green']) !!}
@endif

      </div>{!! Form::close() !!}
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>