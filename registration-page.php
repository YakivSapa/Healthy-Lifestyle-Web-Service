<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration of a new account</title>
    <link rel="stylesheet" href="Styles/registration-styles.css">
    <script src="Scripts/jquery-3.6.1.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
<!-- NavBar -->
<nav class="navbar navbar-expand-lg bg-success br-gradient">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BrandName</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="BMI-page.php">BMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articles-page.php"> Helpful Articles</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" id="navbar-right">
                <li class="nav-item dropdown" id="navbar-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Language
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item active" href="#">English</a></li>
                      <li><a class="dropdown-item" href="Polish/registration-page.php">Polish</a></li>
                    </ul>
                  </li>
                <li class="nav-item" id="navbar-login">
                    <a class="nav-link fw-bold active" href="login-page.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Login form + Text -->
<div class="container">
  <div class="text-center" id="heading">
    <h1>Creation of a new account</h3>
    <p id="subtext">Enter your preferred username, email and password to create a new account.</p>
  </div>
    <form class="container bg-light bg-gradient bg-opacity-75" id="registrationForm" action="registration.php" method="POST">
        <div class="mb-3">
          <label for="inputUserName" class="form-label">Username</label>
          <input maxlength="10" required class="form-control" name="nazwa" id="nazwa" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email address</label>
          <input maxlength="20" required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Password</label>
          <input maxlength="20" required type="password" class="form-control" name="hasło" id="hasło" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Create an account</button>
  </form>
  <div class="text-center" id="sideNote">
    <p style="margin-bottom: 0;">Already have an account?</p>
    <a style="text-decoration:none;" href="login-page.php">Sign in</a>
  </div>
</div>
<!-- Footer -->
<nav class="navbar bottom bg-success mt-auto">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brandname</a>
    </div>
</nav>
<!-- BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
