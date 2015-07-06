<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Configuration</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title"><a href="{{ url('admin') }}">Admin</a></h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Configuration</h2>{!! Form::open(['url' => 'admin/config/update', 'files' => true, 'class' => 'form']) !!}
      <div class="group">
        {!! Form::label('resume', 'Select a file', ['class' => 'label-file']) !!}
        {!! Form::file('resume') !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('title_sp', $config->title_sp, ['class' => 'input']) !!}
@else
{!! Form::text('title_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('title_sp', 'Title (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('title_en', $config->title_en, ['class' => 'input']) !!}
@else
{!! Form::text('title_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('title_en', 'Title (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('name', $config->name, ['class' => 'input']) !!}
@else
{!! Form::text('name', null, ['class' => 'input']) !!}
@endif
{!! Form::label('name', 'Name', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('tel', $config->tel, ['class' => 'input']) !!}
@else
{!! Form::text('tel', null, ['class' => 'input']) !!}
@endif
{!! Form::label('tel', 'Telephone', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('email', $config->email, ['class' => 'input']) !!}
@else
{!! Form::text('email', null, ['class' => 'input']) !!}
@endif
{!! Form::label('email', 'E-mail', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('about_title_sp', $config->about_title_sp, ['class' => 'input']) !!}
@else
{!! Form::text('about_title_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('about_title_sp', 'About title (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('about_title_en', $config->about_title_en, ['class' => 'input']) !!}
@else
{!! Form::text('about_title_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('about_title_en', 'About title (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('about_sp', $config->about_sp, ['class' => 'input']) !!}
@else
{!! Form::text('about_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('about_sp', 'About content (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('about_en', $config->about_en, ['class' => 'input']) !!}
@else
{!! Form::text('about_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('about_en', 'About content (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('contact_title_sp', $config->contact_title_sp, ['class' => 'input']) !!}
@else
{!! Form::text('contact_title_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('contact_title_sp', 'Contact title (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('contact_title_en', $config->contact_title_en, ['class' => 'input']) !!}
@else
{!! Form::text('contact_title_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('contact_title_en', 'Contact title (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('contact_sp', $config->contact_sp, ['class' => 'input']) !!}
@else
{!! Form::text('contact_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('contact_sp', 'Contact content (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('contact_en', $config->contact_en, ['class' => 'input']) !!}
@else
{!! Form::text('contact_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('contact_en', 'Contact content (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('footer_sp', $config->footer_sp, ['class' => 'input']) !!}
@else
{!! Form::text('footer_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('footer_sp', 'Footer (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('footer_en', $config->footer_en, ['class' => 'input']) !!}
@else
{!! Form::text('footer_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('footer_en', 'Footer (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">{!! Form::submit('Update', ['class' => 'btn green']) !!}</div>
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>