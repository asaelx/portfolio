<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Programs</title>
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
      <h2 class="title">Programs<a href="{{ url('admin/program') }}" class="btn green">Add new</a></h2>
      <table class="table-shots">
        <thead>
          <tr>
            <th>Name</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody></tbody>
@if(count($programs) > 0)

@foreach($programs as $program)

                <tr>
                  <td>{{ $program->name }}</td>
                  <td><a href="{{ url('admin/program/' . $program->id) }}" class="btn green">Edit</a><a href="{{ url('admin/program/delete/' . $program->id) }}" class="btn red">Delete</a></td>
                </tr>
@endforeach

@else

                <tr>
                  <td>No programs yet :(</td>
                  <td><a href="{{ url('admin/program') }}" class="btn green">Add one</a></td>
                </tr>
@endif

      </table>
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>