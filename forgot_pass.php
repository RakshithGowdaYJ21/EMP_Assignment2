<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Employee Managment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <style type="text/css">
  	body{
  		background-color:#daeaf2
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
    <div class="container">
      <a href="homepage.php" class="navbar-brand">Employee Managment</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="homepage.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="homepage.php" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="signup.php" class="nav-link">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--<section>-->
  <form class="py-3 mt-5" name="form1" method="post" action="retrieve.php">
      <div class="container">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <div class="card p-4">
              <div class="card-body">
                <h3 class="text-center">Forgot password</h3>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Your Email  :</label>
                      <input name="email" type="text" id="email" class="form-control">
                       <label>Your favorite Flim star :</label>
                      <input name="star" type="password" id="star" class="form-control">
                    </div>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" name="submit" value="forgot password" class="btn btn-outline-info btn-lg pl-4 ml-4">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
