<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Laravel SignUp</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    <!-- Example Code -->
    
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
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" name="search"placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav><br>
    <div class="container mt-5">
        <div class="text-right">
            <a href="users/signup" class="btn btn-dark">Sign In</a>
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
          </tbody>
   </table>

  </body>
</html>