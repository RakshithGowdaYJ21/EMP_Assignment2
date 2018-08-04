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
    <link rel="stylesheet" href="main.css">
  </head>
  <body id="home-section" style="background:url(mountains.jpg)">
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

    <!-- HOME SECTION -->
    <header id="home-section">
      <div class="dark-overlay">
        <div class="home-inner">
          <div class="container pt-5">
            <div class="col-xl-8 m-5">
              <div class="card bg-primary text-center card-form my-5 ">
                <div class="card-body">
                  <h3>Login</h3>
                  <p>Please fill out this form to login</p>
                  <form name="form1" action="main_login.php" method="post" >
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-lg" placeholder="Username or Email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <button type="submit" name="Login" class="btn-lg">login</button>
                  </form>
                </div>
              </div>
              <div class="text-center">
                <a href="forgot_pass.php">Forgot password</a><br>
                <a href="reset.php">Reset password</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
