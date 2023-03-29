<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="Styles/index-styles.css">
    <script src="Scripts/jquery-3.6.1.min.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
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
                    <a class="nav-link active" aria-current="page" href="#">Strona główna</a>
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
                      <li><a class="dropdown-item" href="../index.php">Angielski</a></li>
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
                      <a class="nav-link fw-bold" href="login-page.php">Zaloguj się</a>
                    <?php  
                      }
                    ?>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  <br>
<!-- Carousel -->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Styles/pictures/carousel/nature.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>...</h5>
        <p>...</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="Styles/pictures/carousel/fruits.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Styles/pictures/carousel/vegetables.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>
<!-- Cards -->
<div class="container">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="Styles/pictures/cards/BMI2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oblicz własne BMI!</h5>
        <p class="card-text">Możesz skorzystać z naszego internetowego kalkulatora BMI, aby określić swój wskaźnik masy ciała. Jedyne, co musisz wiedzieć, to Twoja waga i wzrost. Możemy również pomóc, poprzez podanie prawidłowych informacji o przedziałach BMI.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Styles/pictures/cards/Calories2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Śledź spożycie kalorii!</h5>
        <p class="card-text">Jeśli naprawdę chcesz schudnąć i stać się szczuplejszym, musisz liczyć ilość przyjmowanych kalorii i ograniczać się. Korzystając z tego kalkulatora, możesz policzyć przyjmowane kalorie i kontrolować apetyt!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Styles/pictures/cards/Fitness.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Stwórz własny plan treningowy!</h5>
        <p class="card-text">Śledzenie planu treningowego może być bardzo skomplikowane.Nasz prosty planer fitness może ułatwić twoje życie i wzmocnić twoje ciało!</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Styles/pictures/cards/FoodIcon.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Zapisuj notatki o swoim ulubionym jedzeniu!</h5>
        <p class="card-text">Nasz serwis internetowy umożliwia tworzenie tabeli danych, zaprojektowanej specjalnie do przechowywania informacji o najczęściej spożywanym jedzeniu!</p>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<!-- Footer -->
<nav class="navbar bottom bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Serwis ZTŻ</a>
  </div>
</nav>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>