<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link type="text/css" rel="stylesheet" href="{{ url('css/handsome.css') }}">
  </head>
  <body>
    <div class="topbar">
      <h1 class="title">Admin</h1><a href="{{ route('twitter.logout') }}" class="logout btn green">Logout</a>
    </div>
    <div class="admin">
      <h2 class="title">Shots<a href="{{ url('admin/new') }}" class="btn green">Add new</a></h2>
      <table class="table-shots">
        <thead>
          <tr>
            <th>Title</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A new hope</td>
            <td><a href="#" class="btn green">Edit</a><a href="#" class="btn red">Delete</a></td>
          </tr>
          <tr>
            <td>A new hope</td>
            <td><a href="#" class="btn green">Edit</a><a href="#" class="btn red">Delete</a></td>
          </tr>
          <tr>
            <td>A new hope</td>
            <td><a href="#" class="btn green">Edit</a><a href="#" class="btn red">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <script type="text/javascript" src="{{ url('js/min/scripts.min.js') }}"></script>
  </body>
</html>