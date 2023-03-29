<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet tips for muscle building</title>
    <link rel="stylesheet" href="../Styles/muscle-building.css">
    <script src="../Scripts/jquery-3.6.1.min.js"></script>
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
                    <a class="nav-link" href="../index.php">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../BMI-page.php">BMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../articles-page.php">Artykuły</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" id="navbar-right">
                <li class="nav-item dropdown" id="navbar-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Język
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../Articles/muscle-building.php">Angielski</a></li>
                      <li><a class="dropdown-item active" href="#">Polski</a></li>
                    </ul>
                  </li>
                <li class="nav-item" id="navbar-login">
                    <?php
                      if (isset($_COOKIE["user_id"])){
                    ?>
                      <a class="nav-link fw-bold" href="../account-page.php">Moje konto</a>
                    <?php
                      }else{
                    ?>
                      <a class="nav-link fw-bold" href="../login-page.php">Zaloguj się</a>
                    <?php  
                      }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Heading -->
<a href="../articles-page.php" id="return">Zwrócić</a>
<div class="container text-center">
  <h1>Budowanie mięśni</h1>
</div>
<!-- Main information -->
<div class="container text-center">
  <article>
    <p>
      Aby zbudować masę mięśniową, potrzebujesz dodatniego bilansu kalorycznego – czyli musisz spożywać więcej niż spalasz.
      Na każdy funt (450 g) mięśni, które chcesz zbudować, musisz przyjąć około 2800 kalorii.
      Ma to głównie na celu wsparcie zwiększonego obrotu białkami, który prawdopodobnie wzrośnie wraz z treningiem.
    </p>
    <p>
      Twoje ciało może co najwyżej dodać około 227 (pół funta) masy mięśniowej tygodniowo. W związku z tym, jeśli spożywasz dużo dodatkowych kalorii, próbując zbudować mięśnie, prawdopodobnie zyskasz również nadmiar tłuszczu. Zaleca się dzienne zwiększenie od 250 do 500 kalorii.
      Staraj się pozostać na dolnym końcu zakresu, jeśli łatwo przytyjesz, i dąż do wyższego końca zakresu, jeśli ogólnie masz trudności z przybraniem na wadze. Znalezienie odpowiedniej ilości dodatkowych kalorii do budowy mięśni i utrzymania szczupłej sylwetki wymaga trochę prób i błędów.
    </p>
    <p>
      Co więcej, badania sugerują, że spożywanie chudego białka 15 do 20 minut przed, w trakcie i w ciągu jednej godziny po treningu może pomóc w zwiększeniu masy mięśniowej. Chociaż jest mało prawdopodobne, abyś jadł steki lub piersi z kurczaka na siłowni, napój białkowy lub suplement mogą być korzystne przed, w trakcie lub po treningu.
      Jednak nie chodzi tylko o białko. Aby zbudować mięśnie, stracić tłuszcz i stać się silniejszym, zdrowa, zbilansowana dieta powinna zapewnić Ci wiele posiłków, które pokrywają Twoje wydatki kaloryczne i dostarczają składników odżywczych. Oto kilka świetnych pomysłów, które pomogą Ci zbudować masę mięśniową.
    </p>
    <ol>
      <img src="../Styles/pictures/articles-pictures/breakfast.jpg">
      <li class="list-item">ŚNIADANIE POMOŻE ZBUDOWAĆ MASĘ MIĘŚNIOWĄ</li><p>Będziesz potrzebował natychmiastowego przypływu energii, a śniadanie Ci w tym pomoże. Pomoże Ci również zachować uczucie sytości do następnego posiłku lub przekąski. Wyznacza również trend: będziesz jadł zdrowiej, jeśli dzień zaczniesz od mocnego i zdrowego śniadania. Twoje najlepsze zakłady, jeśli próbujesz zbudować masę mięśniową, to omlety, koktajle i twarożek.</p>
      <img src="../Styles/pictures/articles-pictures/eating.png" id="eatingPic">
      <li class="list-item">JEŚĆ CO TRZY GODZINY</li><p>Jedzenie właściwych rzeczy we właściwym czasie ma kluczowe znaczenie dla zwiększenia masy mięśniowej. Najprostszym sposobem jest zjedzenie śniadania, obiadu i kolacji jak zwykle, przeplatanych posiłkami po treningu, przed snem i dwiema przekąskami pomiędzy nimi. Utrzymanie spożycia pokarmu oznacza, że nie będziesz tak głodny, ponieważ częstsze spożywanie mniejszych posiłków w porównaniu z kilkoma dużymi posiłkami zmniejszy rozmiar żołądka. Szybciej poczujesz się pełny, a talia zmniejszy się, a jednocześnie będziesz mieć mniej apetytu.</p>
      <img src="../Styles/pictures/articles-pictures/protein.jpg">
      <li class="list-item">BIAŁKO Z KAŻDYM POSIŁKIEM POMAGA ZWIĘKSZYĆ MASĘ MIĘŚNIOWĄ</li><p>Potrzebujesz białka do budowy i utrzymania masy mięśniowej. Aby to osiągnąć, powinieneś starać się jeść co najmniej 1 g na 454 g masy ciała. To 200 g dziennie, jeśli ważysz 91 kg. Najłatwiejszym sposobem uzyskania tej ilości jest spożywanie pełnego źródła białka z każdym posiłkiem. Obejmują one:
        <ul>
          <li>Czerwone mięso. Wołowina, wieprzowina, jagnięcina itp.</li>
          <li>Drób. Kurczak, indyk, kaczka itp.</li>
          <li>Ryba. Tuńczyk, łosoś, sardynki, makrela itp.</li>
          <li>Jajka.</li>
          <li>Mleczarnia. Mleko, ser, twaróg, twaróg, jogurt itp.</li>
          <li>Serwatka. Nie jest konieczne, ale świetnie nadaje się do łatwych koktajli po treningu.</li>
          <li>Opcje wegańskie, takie jak soczewica, tofu, nasiona i orzechy.</li>
        </ul>
      </p>
    </ol>

  <p id="ending">
      Oczywiście nie chodzi tylko o to, aby Twoja dieta była odpowiednia, jeśli chodzi o budowanie masy mięśniowej.
      Musisz także odpowiednio zaplanować swoje treningi.
      Spędzanie wystarczającej ilości czasu na siłowni, wykonywanie właściwych ćwiczeń jest absolutnie niezbędne, jeśli chcesz osiągnąć pożądane korzyści.
  </p>
  </article>
</div>
<div class="container" id="source">
  <p>Źródło: <a href="https://www.everyoneactive.com/content-hub/gym/muscle-mass/">https://www.everyoneactive.com/content-hub/gym/muscle-mass</p>
</div>
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