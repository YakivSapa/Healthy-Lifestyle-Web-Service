<?php 
include "db_connection.php";
$id = $_COOKIE['user_id'];

$food_check = "SELECT * FROM jedzenie WHERE użytkownik_id = $id;";
$food_query = mysqli_query($connection, $food_check);
$food_result = mysqli_fetch_all($food_query);

$kk_check = "SELECT * FROM kaloriekalkulator WHERE użytkownik_id = $id;";
$kk_query = mysqli_query($connection, $kk_check);
$kk_result = mysqli_fetch_all($kk_query);
$kcal = 0;

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $calories = mysqli_real_escape_string($connection, $_POST['calories']);

  $query = "INSERT INTO kaloriekalkulator (kalorie_id, użytkownik_id, jedzenie_id, kalorie_ilość, jedzenie_nazwa) VALUES (null, '$id', null, '$calories', '$name');";
  $query_result = mysqli_query($connection, $query);

  if(!$query_result){
    die("Query failed ".mysqli_error());
  }
  
  $kk_query = mysqli_query($connection, $kk_check);
  $kk_result = mysqli_fetch_all($kk_query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Calculator</title>
    <link rel="stylesheet" href="Styles/calories.css">
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
                      <li><a class="dropdown-item" href="Polish/calorie-calculator.php">Polish</a></li>
                    </ul>
                  </li>
                <li class="nav-item" id="navbar-login">
                    <?php
                      if (isset($_COOKIE["user_id"])){
                    ?>
                      <a class="nav-link fw-bold" href="account-page.php">My Account</a>
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
<!-- Heading + Information-->
<a href="account-page.php" id="return">Go back</a>
<div class="container text-center">
    <h1 id="heading">Calorie Calculator</h1>
    <p>
      Being on a diet usually means monitoring the amount of consumption and the quality of products. 
      This usually leads to keeping track of your daily calorie intake. 
      Excess amount of consumed calories usually leads to health problems, such as excess weight and obesity.
      This page allows you to control the amount of eaten food and daily calorie intake. 
    </p>
</div>
<!-- Row of Items -->
<div class="container row">
  <!-- Entered Products -->
  <div class="col lists">
    <ul class="list-group">
      <li class="list-group-item bg-success ulHeadings text-center" aria-current="true">Your current calorie intake: </li>
      <?php foreach ($kk_result as $a => $b) { ?>
        <li class="list-group-item calculatingItems"><?php print_r($b[4]);?> - <?php print_r($b[3]);?> kCal <a href="?function=<?= $b[0] ?>" onclick="mute(<?= $b[0] ?>)"><span><img src="Styles/pictures/cards/backspace-fill.svg"></span></a></li>
        <?php
          $kcal += $b[3];
          } 
        ?>
      <?php if (isset($_GET['function'])){
          print_r($_GET);
          // $food_id = $_GET;
          // print_r($food_id);
          $deletion = "DELETE FROM kaloriekalkulator WHERE kalorie_id = $_GET[function];";
          $deletion_result = mysqli_query($connection, $deletion);
          var_dump($deletion_result);
          if ($deletion_result) {?>
          <script> 
            window.location.replace("http://localhost/Project/calorie-calculator.php");
          </script>
          <?php }
          var_dump($_GET);
        };
      ?>
    </ul>
  </div>

  <!-- Calculator -->
  <div class="col text-center" id="calculator">
    <form method="POST">
      <div class="mb-3 form-floating">
        <input required class="form-control" id="foodName" name="name" placeholder="foodName">
        <label for="foodName" class="form-label">Product name</label>
      </div>
      <div class="mb-3 form-floating">
        <input required type="number" class="form-control" id="calories" name="calories" placeholder="caloriesQuantity">
        <label for="calories" class="form-label">Amount of calories</label>
      </div>
      <button type="submit" name="submit" class="btn bg-success" id="formButton">Add</button>
    </form>
    <br>
    <?php 
    if($kcal > 0){
      ?> <h3>Your current calorie intake is: <?php print_r($kcal) ?> kCal</h3>
    <?php } ?>
  </div>

  <!-- Food Catalogue -->
  <div class="col lists">
    <ul class="list-group text-center">
    <li class="list-group-item bg-success ulHeadings" aria-current="true">Food Catalogue: </li>
      <?php foreach ($food_result as $x => $y) { ?>
        <li class="list-group-item"><a class="catalogueList" href="?function2=<?= $x ?>"><?php print_r($y[2]);?> - <?php print_r($y[3]);?> kCal</a></li>
      <?php  } ?>
      <?php if (isset($_GET['function2'])){
          // print_r($y);
          $currentFood = $food_result[$_GET['function2']];
          $catalogue_query = "INSERT INTO kaloriekalkulator (kalorie_id, użytkownik_id, jedzenie_id, kalorie_ilość, jedzenie_nazwa) VALUES (null, '$id', '$currentFood[0]', '$currentFood[3]', '$currentFood[2]');";
          $catalogue_result = mysqli_query($connection, $catalogue_query);
          // var_dump($catalogue_result);
          if ($catalogue_result) {?>
            <script> 
              window.location.replace("http://localhost/Project/calorie-calculator.php");
            </script>
          <?php }
          // var_dump($_GET);
        };
      ?>
    </ul>
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