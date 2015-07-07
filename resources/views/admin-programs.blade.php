<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Programs</title>
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