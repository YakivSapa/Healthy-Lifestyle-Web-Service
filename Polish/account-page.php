<?php
include "db_connection.php";
session_start();
$nazwa = $_COOKIE['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="Styles/account.css">
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
                      <li><a class="dropdown-item" href="../account-page.php">Angielski</a></li>
                      <li><a class="dropdown-item active" href="#">Polski</a></li>
                    </ul>
                  </li>
                <li class="nav-item" id="navbar-login">
                    <a class="nav-link active fw-bold" href="#">Moje konto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Heading -->
<div class="container text-center">
    <h1 id="heading">Konto osobiste</h1>
    <p>Witamy, <?php echo($nazwa)?></p>
</div>
<!-- Cards -->
<div class="container text-center" id="cards">
    <div class="card">
        <img src="Styles/pictures/cards/Calories2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Kalkulator kalorii</h5>
            <hr>
            <p class="card-text">Policz ilość swoich dziennych kalorii!</p>
            <a href="calorie-calculator.php" class="stretched-link"></a>
        </div>
    </div>
    <div class="card">
        <img src="Styles/pictures/cards/Fitness.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Planer fitnessu</h5>
            <hr>
            <p class="card-text">Zaplanuj swój harmonogram ćwiczeń za pomocą tego łatwego w użyciu narzędzia do planowania!</p>
            <a href="fitness.php" class="stretched-link"></a>
        </div>
    </div>
    <div class="card">
        <img src="Styles/pictures/cards/FoodIcon.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Katalog jedzenia</h5>
            <hr>
            <p class="card-text">Zapisz notatki na temat najczęściej spożywanego jedzenia.</p>
            <a href="food.php" class="stretched-link"></a>
        </div>
    </div>
</div>
<!-- Logout button -->
<form class="container text-center" id="button" method="POST">
    <button class="btn btn-danger" type="submit" name="submit">Wyloguj się</button>
</form>
<?php
if (isset($_POST['submit'])) {
    session_destroy();
    setcookie('user_id', null, -1, '/');
    setcookie('user_name', null, -1, '/'); 
    header("Location:index.php");
}
?>
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