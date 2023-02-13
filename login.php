<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>login pendaftaran</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">
    <link rel="stylesheet" href="style.css">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    
<form class="form-signin" method="POST" action="cek_login.php">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Login Pendaftaran</h1>
    <p>Masukan username dan password anda yang benar</p>
  </div>

  <div class="form-label-group">
    <input type="text"  class="form-control" name="username" placeholder="username" required autofocus>
    <label class="sr-only">username</label>
  </div>

  <div class="form-label-group">
    <input type="password" class="form-control" name="password" placeholder="Password" required>
    <label class="sr-only">Password</label>
  </div>

  
  <div class="form-label-group">
    <select class="form-control" name="level">
      <option value="admin">admin</option>
      <option value="user">user</option>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2023-<?=date('Y')?></p>
</form>


    
  </body>
</html>
