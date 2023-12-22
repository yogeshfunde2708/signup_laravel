<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel SignUp</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">SignUp Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">SignUp Form</h4>

            <form action="/users/store" method="POST">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="user_email" id="user_email" class="form-control" placeholder="Enter-Email" type="email">
                </div>
                @if($errors->has('user_email'))
                    <span class="text-danger">{{$errors->first('user_email')}}</span>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="user_name" id="user_name" class="form-control" placeholder="Enter Username" type="text">
                </div>
                @if($errors->has('user_name'))
                    <span class="text-danger">{{$errors->first('user_name')}}</span>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="user_password" id="user_password" placeholder="Password" type="password">
                </div>
                @if($errors->has('user_password'))
                    <span class="text-danger">{{$errors->first('user_password')}}</span>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="user_confirm_password" id="user_confirm_password" placeholder="Confirm-Password"
                        type="password">
                </div>
                @if($errors->has('user_confirm_password'))
                    <span class="text-danger">{{$errors->first('user_confirm_password')}}</span>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
                    </div>
                    <select class="custom-select" name="user_gender" id="user_gender" style="max-width: 120px;">
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                @if($errors->has('user_gender'))
                    <span class="text-danger">{{$errors->first('user_gender')}}</span>
                @endif
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="signup">Sign Up</button>
                </div>
            </form>
        </article>
    </div>

    <div class="card fixed-bottom text-center bg-dark" id="footer">
        <h5 class="p-3 mb-0 text-white">Featured</h5>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>