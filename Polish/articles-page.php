<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artykuły</title>
    <link rel="stylesheet" href="Styles/articles-styles.css">
    <script src="Scripts/jquery-3.6.1.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
<!-- NavBar -->
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
                    <a class="nav-link" href="BMI-page.php">BMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Artykuły</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" id="navbar-right">
                <li class="nav-item dropdown" id="navbar-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Język
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../articles-page.php">Angielski</a></li>
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
<!-- Title + Main Text -->
<div class="container text-center">
    <h1>Artykuły</h1>
    <figure>
        <blockquote class="blockquote">
          <p>" Mądrość nie jest produktem nauki szkolnej, ale trwających całe życie prób jej zdobycia. "</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Albert Einstein
        </figcaption>
    </figure>
    <article>
        Znaczenia badań nie można przecenić.
        Jest integralną częścią sukcesu w każdej dziedzinie. Takie jak prawo, pisanie, finanse i kulturystyka.
        Głównymi celami badań są informowanie o działaniach, zbieranie dowodów na poparcie teorii i przyczynianie się do rozwoju wiedzy w dziedzinie badań.
        Zrozumienie, że badania są ważne, może wydawać się oczywiste, ale wiele osób unika ich jak zarazy.
        Jednak dla tych, którzy lubią się uczyć, niezależnie od tego, czy są członkami instytucji badawczej, czy nie, prowadzenie badań jest nie tylko ważne — jest wręcz koniecznością.
    </article>
</div>
<br>
<!-- Articles -->
<div class="container">
    <h4 class="text-center">Dostępne artykuły: </h4>
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100">
            <h5 class="card-header">Nowy artykuł!</h5>
            <div class="card-body">
                <h5 class="card-title">Porady dietetyczne do budowania mięśni.</h5>
                <p class="card-text">Chcesz uzyskać więcej mięśni i sprawić, by twoje ciało wyglądało na szczuplejsze? Sprawdź ten artykuł, aby uzyskać porady dietetyczne i dokonaj tej zmiany już teraz!</p>
                <a href="Articles/muscle-building.php" class="btn btn-primary">Zobacz więcej.</a>
            </div>
            <div class="card-footer text-muted">
              Opublikowane: 2 dni temu
            </div>
        </div>
      </div>
      <br>
      <div class="col">
        <div class="card h-100">
            <h5 class="card-header">Nowy artykuł!</h5>
            <div class="card-body">
                <h5 class="card-title">Zdrowe jedzenie.</h5>
                <p class="card-text">Lista wspaniałych wyborów żywieniowych dla zdrowego stylu życia! Rozważ karmienie swojego organizmu zdrowszą żywnością, to bardzo skuteczna strategia odchudzania.</p>
                <a href="Articles/healthy-food.php" class="btn btn-primary">Zobacz więcej.</a>
            </div>
            <div class="card-footer text-muted">
              Opublikowane: 2 dni temu
            </div>
        </div>
      </div>
    </div>
    </div>
<br>
<!-- Footer -->
<nav class="navbar bottom bg-success mt-auto">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Serwis ZTŻ</a>
    </div>
  </nav>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>