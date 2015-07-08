<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Configuration</title>
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
{!! Form::text('degree_sp', $config->degree_sp, ['class' => 'input']) !!}
@else
{!! Form::text('degree_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('degree_sp', 'Degree (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('degree_en', $config->degree_en, ['class' => 'input']) !!}
@else
{!! Form::text('degree_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('degree_en', 'Degree (EN)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('job_sp', $config->job_sp, ['class' => 'input']) !!}
@else
{!! Form::text('job_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('job_sp', 'Job (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::text('job_en', $config->job_en, ['class' => 'input']) !!}
@else
{!! Form::text('job_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('job_en', 'Job (EN)', ['class' => 'label']) !!}
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
{!! Form::textarea('about_content_sp', $config->about_content_sp, ['class' => 'input']) !!}
@else
{!! Form::textarea('about_content_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('about_content_sp', 'About content (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::textarea('about_content_en', $config->about_content_en, ['class' => 'input']) !!}
@else
{!! Form::textarea('about_content_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('about_content_en', 'About content (EN)', ['class' => 'label']) !!}
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
{!! Form::textarea('contact_content_sp', $config->contact_content_sp, ['class' => 'input']) !!}
@else
{!! Form::textarea('contact_content_sp', null, ['class' => 'input']) !!}
@endif
{!! Form::label('contact_content_sp', 'Contact content (SP)', ['class' => 'label']) !!}
      </div>
      <div class="group">
@if(isset($config))
{!! Form::textarea('contact_content_en', $config->contact_content_en, ['class' => 'input']) !!}
@else
{!! Form::textarea('contact_content_en', null, ['class' => 'input']) !!}
@endif
{!! Form::label('contact_content_en', 'Contact content (EN)', ['class' => 'label']) !!}
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