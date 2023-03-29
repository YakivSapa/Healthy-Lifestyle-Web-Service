<?php
  include "db_connection.php";

  $id = $_COOKIE['user_id'];
  $days_check = "SELECT * FROM fitness WHERE użytkownik_id = $id;";
  $days_query = mysqli_query($connection, $days_check);
  $days_result = mysqli_fetch_all($days_query);
  // print_r($days_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planer fitnessu</title>
    <link rel="stylesheet" href="Styles/fitness.css">
    <script src="Scripts/jquery-3.6.1.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
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
                    <a class="nav-link" aria-current="page" href="index.php">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="BMI-page.php">BMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articles-page.php">Artykuły</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" id="navbar-right">
                <li class="nav-item dropdown" id="navbar-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Język
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../fitness.php">Angielski</a></li>
                      <li><a class="dropdown-item active" href="#">Polski</a></li>
                    </ul>
                  </li>
                <li class="nav-item" id="navbar-login">
                  <?php
                    if (isset($_COOKIE["user_id"])){
                  ?>
                    <a class="nav-link fw-bold" href="account-page.php">Moje konto</a>
                  <?php
                    }else{
                  ?>
                    <a class="nav-link fw-bold" href="login-page.php">Login</a>
                  <?php  
                    }
                  ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Heading + Quote -->
<a href="account-page.php" id="return">Żwrócić</a>
<div class="container text-center">
    <h1 id="heading">Planer fitness</h1>
    <figure>
      <blockquote class="blockquote">
        <p>" Walczcie, a zwyciężycie! "</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Taras Szewczenko
      </figcaption>
  </figure>
</div>
<!-- Main Text -->
<div class="container text-center">
  <p id="mainText">
    Planowanie rutyny fitness może być kłopotliwe. Musisz wziąć pod uwagę wiele czynników i im więcej informacji zbierzesz,
    tym więcej elementów trzeba wziąć pod uwagę podczas planowania. Na szczęście ten planer fitness ma na celu stworzenie twojego zwykłego reżimu fitness
    tylko trochę łatwiej. Korzystając z tego narzędzia do planowania fitness, możesz w bardzo prosty sposób stworzyć swój własny plan fitness, zapisując wszystkie ćwiczenia
    tutaj. Zaoszczędzi to trochę czasu i pomoże utrzymać porządek.
  </p>
  <h2>Plan:</h2>
</div>
<br>
<!-- Blocks -->
<div class="container text-center" id="cards">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php
      foreach ($days_result as $x => $y) {?>
      <div class="card col-2">
        <div class="card-body">
            <p><?php print_r($y[1]) ?></p>
              <?php 
                  // $get_fitness = "SELECT fitness_id FROM fitness WHERE użytkownik_id = $id AND dzień = $y;";
                  // $fitness_query = mysqli_query($connection, $get_fitness);
                  // $fitness_result = mysqli_fetch_assoc($fitness_result);
              ?>
            <a href="fitness-day.php?id=<?php print_r($y[0]) ?>" class="stretched-link"></a>
        </div>
      </div>
    <?php } ?>

    <div class="card col-2">
      <div class="card-body">
          <img src="Styles/pictures/cards/plus.svg" height="100%" width="100%">
          <a href="fitness-creation.php" class="stretched-link"></a>
      </div>
    </div>
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