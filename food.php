<?php
include "db_connection.php";
$id = $_COOKIE['user_id'];

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $calories = mysqli_real_escape_string($connection, $_POST['calories']);

  $query = "INSERT INTO jedzenie (jedzenie_id, użytkownik_id, jedzenie_nazwa, kalorie_ilość) VALUES (null, '$id', '$name', '$calories');";
  $query_result = mysqli_query($connection, $query);

  if(!$query_result){
    die("Query failed ".mysqli_error());
  } 
}

$food_check = "SELECT * FROM jedzenie WHERE użytkownik_id = $id;";
$food_query = mysqli_query($connection, $food_check);
$food_result = mysqli_fetch_all($food_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Catalogue</title>
    <link rel="stylesheet" href="Styles/food.css">
    <script src="Scripts/jquery-3.6.1.min.js"></script>
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
                      <li><a class="dropdown-item" href="Polish/food.php">Polish</a></li>
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
    <h1 id="heading">Food Catalogue</h1>
    <p>
      Sitting on a diet can be a bit troublesome. 
      The amount of "allowed" food is strictly limited and having to remember it's quantity of calories is a bit bothersome.
      This page is aimed to help you write down notes about foods' nutritional value, making it easier to count them on the daily basis.
    </p>
</div>
<!-- Form -->
<h2 class="text-center">Type in information about your food!</h2>
<div>
  <form method="POST" id="foodForm">
    <div class="mb-3 col-2 text-center">
      <label for="foodName" class="form-label">Name</label>
      <input name="name" id="name" class="form-control">
    </div>
    <div class="mb-3 col-2 text-center">
      <label for="calories" class="form-label">Amount of calories</label>
      <input class="form-control" name="calories" id="calories">
    </div>
    <button type="submit" name="submit" class="btn btn-success">Add</button>
  </form>
</div>
<!-- Catalogue -->
<h3 class="text-center">Your current food catalogue:</h3>
<div class="container text-center" id="cards">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php
      foreach ($food_result as $x => $y) {?>
      <div class="col">
        <div class="card" id="<?php print_r($y[0]) ?>">
          <h6 class="card-header"><?php print_r($y[2]) ?></h6>
          <div class="card-body">
              <h7>Calories:</h7>
              <p><?php print_r($y[3]) ?></p>
          </div>
          <a href="?function=<?= $y[0] ?>" onclick="mute(<?= $y[0] ?>)" class="card-footer bg-danger bg-gradient deleteButton">Delete</a>
        </div>
      </div>
    <?php  } ?>
  </div>
</div>
<?php if (isset($_GET['function'])){
  print_r($_GET);
  // $food_id = $_GET;
  // print_r($food_id);
  $deletion = "DELETE FROM jedzenie WHERE jedzenie_id = $_GET[function];";
  $deletion_result = mysqli_query($connection, $deletion);
  var_dump($deletion_result);
  if ($deletion_result) {?>
  <script> 
    window.location.replace("http://localhost/Project/food.php");
  </script>
  <?php }
  var_dump($_GET);
} ?>
<!-- Footer -->
<nav class="navbar bottom bg-success mt-auto">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brandname</a>
    </div>
  </nav>
<!-- BootStrap + Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>