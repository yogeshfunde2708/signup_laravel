<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Laravel SignUp</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    #clear-btn {
      margin-left: 10px;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Signup Details</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
            </li>
          </ul>
          <form class="d-flex" role="search" action="{{ route('users.search') }}" method="GET">
            <input class="form-control me-2" type="search" name="search" value="{{ $search }}" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <button class="btn btn-outline-warning " name="clear" type="submit" id="clear-btn" formaction="{{ route('users.clear') }}">Clear</button>
          </form>

        </div>
      </div>
    </nav><br><br>
    @if(session('success'))
    <div class="container mt-3">
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000);
    </script>
    @endif
    <div class="container mt-5">
        <div class="text-right">
            <a href="{{ route('users.signup') }}" class="btn btn-dark">Sign In</a>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered overflow-auto"style="width: 70%; margin-left: 15%; margin-top: 20px; text-align:center;">
    <thead>
          <tr>
          <th>Sr No.</th>
          <th>Email</th>
          <th>Username</th>
          <th>Gender</th>
          <th>Password</th>
          <th>Confirm-Password</th>
          <th>Date Added</th>
          <th>Edit-Input-Fields</th>
          <th>Delete</th>
          </tr>
          </thead>

          <tbody>
          @isset($users)
            @foreach($users as $user)
            <tr>
              <td>{{ $loop->index+1}}</td>
              <td>{{ $user->email}}</td>
              <td>{{ $user->username}}</td>
              <td>{{ $user->gender}}</td>
              <td>{{ $user->password}}</td>
              <td>{{ $user->confirmpassword}}</td>
              <td>{{ $user->date_added }}</td>
              <td ><a href="users/{{$user->id}}/edit" class="btn btn-success">Edit</a></td>
              <td ><a href="users/{{$user->id}}/delete" class="btn btn-danger">Delete</a></td>
          
          </tr>
            @endforeach
            @endisset
          </tbody>
   </table>

  </body>
</html>
