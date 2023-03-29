<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="Styles/bmi-styles.css">
    <script src="Scripts/jquery-3.6.1.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<!-- Header -->
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
                    <a class="nav-link active" href="#">BMI</a>
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
                      <li><a class="dropdown-item" href="Polish/BMI-page.php">Polish</a></li>
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
  <br>
<!-- Main Text -->
<div class="container mb-3 col-md-auto">
    <h1 class="text-center">BMI Calculator</h1>
    <h3 class="text-center">Use this calculator to find out your body mass index!</h3>
</div>
<!-- BMI Calculator -->
<form class="container" id="bmiForm">
<p class="text-center"> To use this calculator, simply enter your height and weight!</p>
    <div class="form-floating">
        <input type="number" class="form-control input-sm" id="floatingHeight" placeholder="Height">
        <label for="floatingInput">Height (cm)</label>
        <br>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control input-sm" id="floatingWeight" placeholder="Weight">
        <label for="floatingInput">Weight (kg)</label>
        <br>
      </div>
      <!-- <div class="form-floating">
        <input type="number" class="form-control input-sm" id="floatingAge" placeholder="Age">
        <label for="floatingPassword">Age</label>
        <br>
      </div> -->
    <button onclick="calculateBMI()" type="button" class="btn btn-primary">Submit</button>
    <div id="result"></div>
  </form>
<br>
<!-- Bottom Text -->
<div class="container">
    <h2 class="text-center">What is BMI?</h2>
    <article>
        BMI(Body Mass Index) is a measurement of body mass, based on height and weight that applies to adults.
        It is used to determine whether the person has excess weight or not. 
        It is mostly used by adult women and men with average bodytype and low to mediocre physical activity.
        This calculator is not recommended for bodybuilders and athletes, since their bodies consist mostly of muscles, the result may be false.
        However, it can be usefull to determine obesity tendecies and related risks.
        <br>
        <p class="text-center" id="bottomTextPar1">To find your own body mass index, you have to use the following formula:</p>
        <p class="text-center border border-dark" id="formula">weight (kg) / [height (m)]2</p>
        <br>
        <p class="text-center" id="bottomTextPar1">Optionally you can use this altenative:</p>
        <p class="text-center border border-dark" id="formula2">[weight (kg) / height (cm) / height (cm)] x 10,000</p>
    </article>
</div>
<br>
<!-- BMI Range Table-->
<h3 class="container text-center">BMI ranges:</h5>
<div class="container">
<table class="table table-bordered border-dark table-light text-center">
    <tbody>
    <tr>
        <td scope="col" class="fw-bold border-bottom border-dark">BMI</td>
        <td scope="col" class="fw-bold border-bottom border-dark">Status</td>
    </tr>
      <tr>
        <td>Below 18.5</td>
        <td>Underweight</td>
      </tr>
      <tr>
        <td>Between 18.5 and 24.9</td>
        <td>Healthy Weight</td>
      </tr>
      <tr>
        <td>Between 25 and 29.9</td>
        <td>Overweight</td>
      </tr>
      <tr>
        <td>30 or over</td>
        <td>Obesity</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- Footer -->
  <nav class="navbar bottom bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brandname</a>
    </div>
  </nav>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="Scripts/BMI.js" type="text/javascript"></script>
</body>
</html>