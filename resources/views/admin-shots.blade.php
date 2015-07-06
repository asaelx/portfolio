<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title"><a href="{{ url('admin') }}">Admin</a></h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Shots<a href="{{ url('admin/shot') }}" class="btn green">Add new</a></h2>
      <table class="table-shots">
        <thead>
          <tr>
            <th>Title</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody></tbody>
@if(count($shots) > 0)

@foreach($shots as $shot)

                <tr>
                  <td>{{ $shot->title_sp }}</td>
                  <td><a href="{{ url('admin/shot/' . $shot->id) }}" class="btn green">Edit</a><a href="{{ url('admin/shot/delete/' . $shot->id) }}" class="btn red">Delete</a></td>
                </tr>
@endforeach

@else

                <tr>
                  <td>No shots yet :(</td>
                  <td><a href="{{ url('admin/shot') }}" class="btn green">Add one</a></td>
                </tr>
@endif

      </table>
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>