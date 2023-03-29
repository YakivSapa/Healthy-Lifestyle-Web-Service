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
      <a class="navbar-brand" href="#">Serwis ZTŻ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">BMI</a>
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
                      <li><a class="dropdown-item" href="../BMI-page.php">Angielski</a></li>
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
  <br>
<!-- Main Text -->
<div class="container mb-3 col-md-auto">
    <h1 class="text-center">Kalkulator BMI</h1>
    <h3 class="text-center">Skorzystaj z tego kalkulatora, aby poznać swój wskaźnik masy ciała!</h3>
</div>
<!-- BMI Calculator -->
<form class="container" id="bmiForm">
<p class="text-center">Aby skorzystać z tego kalkulatora, po prostu podaj swój wzrost i wagę!</p>
    <div class="form-floating">
        <input type="number" class="form-control input-sm" id="inputsm" placeholder="Height">
        <label for="floatingInput">Wzrost (cm)</label>
        <br>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control input-sm" id="floatingWeight" placeholder="Weight">
        <label for="floatingPassword">Waga (kg)</label>
        <br>
      </div>
    <button onclick="calculateBMI()" type="button" class="btn btn-primary">Obliczyć</button>
    <div id="result"></div>
  </form>
<br>
<!-- Bottom Text -->
<div class="container">
    <h2 class="text-center">Co to jest BMI?</h2>
    <article>
        BMI (Body Mass Index) to miara masy ciała oparta na wzroście i wadze, która dotyczy osób dorosłych.
        Służy do określenia, czy dana osoba ma nadwagę, czy nie.
        Stosowany jest głównie przez dorosłe kobiety i mężczyzn o średniej budowie ciała i aktywności fizycznej.
        Ten kalkulator nie jest zalecany dla profesjonalnych kulturystów i sportowców, ponieważ ich ciała składają się głównie z mięśni, wynik może być fałszywy.
        Przydatne może być jednak określenie tendencji do otyłości i związanych z nią zagrożeń.
        <br>
        <p class="text-center" id="bottomTextPar1">Aby znaleźć swój własny wskaźnik masy ciała, musisz skorzystać z następującego wzoru:</p>
        <p class="text-center border border-dark" id="formula">[waga (kg) / [wzrost (m)]2</p>
        <br>
        <p class="text-center" id="bottomTextPar1">Optionally you can use this altenative:</p>
        <p class="text-center border border-dark" id="formula2">[waga (kg) / wzrost (cm) / wzrost (cm)] x 10,000</p>
    </article>
</div>
<br>
<!-- BMI Range Table-->
<h3 class="container text-center">Zakresy BMI:</h5>
<div class="container">
<table class="table table-bordered border-dark table-light text-center">
    <tbody>
    <tr>
        <td scope="col" class="fw-bold border-bottom border-dark">BMI</td>
        <td scope="col" class="fw-bold border-bottom border-dark">Stan</td>
    </tr>
      <tr>
        <td>Poniżej 18.5</td>
        <td>Niedowaga</td>
      </tr>
      <tr>
        <td>Pomiędzy 18.5 ta 24.9</td>
        <td>Zdrowa waga</td>
      </tr>
      <tr>
        <td>Pomiędzy 25 ta 29.9</td>
        <td>Nadwaga</td>
      </tr>
      <tr>
        <td>30 lub wyżej</td>
        <td>Otyłość</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- Footer -->
  <nav class="navbar bottom bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Serwis ZTŻ</a>
    </div>
  </nav>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="Scripts/BMI.js" type="text/javascript"></script>
</body>
</html>