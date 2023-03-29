<?php
include "db_connection.php";

if (isset($_POST['submit'])) {
  $count = 'SELECT MAX(dzień) AS day FROM fitness WHERE użytkownik_id = '.$_COOKIE["user_id"].';';
  $query = mysqli_query($connection, $count);
  $dzień = mysqli_fetch_assoc($query);
  if (!$dzień['day']){
    $max_day = 1;
  }else {
    $max_day = $dzień['day']+1;
  }
  $amount = count($_POST)-1;
  $amount = $amount/3;
  // print_r($amount); 
  
  $query = 'INSERT INTO fitness (fitness_id, dzień, użytkownik_id) VALUES (null, '.$max_day.', '.$_COOKIE["user_id"].');';
  $query_result = mysqli_query($connection, $query);

  $query = 'SELECT fitness_id AS fitId FROM fitness WHERE użytkownik_id = '.$_COOKIE["user_id"].' AND dzień = '.$max_day.';';
  $query_result = mysqli_query($connection, $query);
  $fitId = mysqli_fetch_assoc($query_result);
  // print_r($fitId);

  $a = 1;
  while ($a <= $amount) {
    $query = 'INSERT INTO ćwiczenie (ćwiczenie_id, ćwiczenie_typ, ilość, czas, fitness_id) VALUES (null, "'.$_POST["exerNumber_".$a].'", "'.$_POST["amNumber_".$a].'", "'.$_POST["timeNumber_".$a].'", '.$fitId["fitId"].');';
    $query_result = mysqli_query($connection, $query);
    $a++;
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation of a fitness schedule</title>
    <link rel="stylesheet" href="Styles/fitness-creation.css">
    <script src="Scripts/jquery-3.6.1.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
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
                      <li><a class="dropdown-item" href="../fitness-creation.php">Angielski</a></li>
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
<!-- Heading -->
<a href="fitness.php" id="return">Żwrócić</a>
<div class="container text-center">
    <h1 id="heading">Tworzenie planu zajęć fitness</h1>
    <p>
      Stwórz część swojego planu fitness poprzez zapisanie ćwiczeń!
      Wpisz ilość ćwiczeń, a następnie wypełnij formularz!
    </p>
</div>
<!-- Exercise Input -->
<div class="container text-center" id="exerciseInput">
    <label class="form-label">Ilość ćwiczeń:</label>
    <form action="javascript:quantitySubmit()">
        <div>
            <input required type="number" maxlength="2" min="1" max="20" placeholder="For example: 7" class="form-control">
            <button type="submit" class="btn btn-primary">Wnieść</button>
        </div>
    </form>
</div>
<!-- Footer -->
<div>
    <form class="container" id="form" method="POST">

    </form>
</div>
<br>
<nav class="navbar bottom bg-success mt-auto" id="footer">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brandname</a>
    </div>
</nav>
<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="Scripts/fitness.js"></script>
</body>
</html>