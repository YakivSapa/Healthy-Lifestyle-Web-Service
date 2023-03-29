<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy food</title>
    <link rel="stylesheet" href="../Styles/healthy-food.css">
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
                      <li><a class="dropdown-item" href="../../Articles/healthy-food.php">Angielski</a></li>
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
  <h1>Zdrowe jedzenie</h1>
</div>
<!-- Main information -->
<div class="container text-center">
  <article>
    Jeśli próbujesz schudnąć, możesz ulec pokusie ograniczenia kalorii, ale jedzenie zbyt małej ilości może narazić twoje zdrowie na ryzyko.
    Co więcej, spożywanie znacznie mniejszej ilości kalorii niż potrzebujesz powoduje, że organizm rozkłada własne tkanki mięśniowe i narządowe w celu uzyskania energii.    And the less lean tissue mass you have, the slower your metabolic rate, which is not ideal for weight loss.
    Kontrola masy ciała jest przede wszystkim reakcją hormonalną na określone pokarmy.
    Hormony wysyłają do mózgu sygnały, które wpływają na nasze pragnienia, głód i masę ciała.
    Oto jak niektóre składniki odżywcze wpływają na hormony głodu:

    <img src="../Styles/pictures/articles-pictures/protein.svg" width="100" height="100">
    <p>
      Białko szybko nasyca i utrzymuje uczucie sytości przez długi czas.
      Zmniejsza również poposiłkowe wydzielanie hormonu głodu greliny, zmniejszając w ten sposób uczucie głodu.
      Białko wymaga również więcej energii do strawienia i zwiększa beztłuszczową masę mięśniową, co pomaga przyspieszyć metabolizm.
    </p>
    <img src="https://visualpharm.com/assets/385/Fiber-595b40b75ba036ed117d7d7b.svg" width="100" height="100">
    <p>
      Błonnik pokarmowy spowalnia trawienie i zapewnia stopniowy wzrost poziomu glukozy we krwi, co powoduje wolniejsze uwalnianie insuliny, hormonu magazynowania tłuszczu.
      Gdy błonnik przemieszcza się przez układ pokarmowy, uwalniane są różne hormony sytości (takie jak grelina), wysyłając sygnały do mózgu, aby zmniejszyć głód i regulować przyjmowanie pokarmu.
    </p>
    <img src="../Styles/pictures/articles-pictures/fast-food.svg" width="100" height="100" id="fastFood">
    <p>
    Przetworzona żywność ma niską zawartość składników odżywczych i błonnika, więc jest szybko trawiona. W rezultacie ich zjedzenie (np. chipsy ziemniaczane, batoniki i tosty) powoduje szybki wzrost poziomu glukozy we krwi, co powoduje znaczne uwolnienie insuliny. Ponieważ insulina musi szybko usunąć glukozę z krwioobiegu, większość tych kalorii jest wysyłana do komórek tłuszczowych.
    Idealnie byłoby zanurzyć się w tych zmagazynowanych kaloriach, gdy następnym razem będziesz potrzebować energii. Jednak regularne spożywanie ultraprzetworzonej żywności oznacza, że będziesz stale gromadzić depozyty w komórkach tłuszczowych, nigdy ich nie wycofując.
    </p>
    <h3>Jak schudnąć bezpiecznie i trwale</h3>
    <p>
      Znaczne ograniczenie kalorii nie jest konieczne; w rzeczywistości nie jest to wskazane.
      Raczej najbezpieczniejszym i najbardziej zrównoważonym sposobem na odchudzanie jest spożywanie pełnowartościowej, nieprzetworzonej żywności wysokiej jakości.
      Te pokarmy w naturalny sposób kontrolują głód, zwiększają metabolizm i wspomagają spalanie tłuszczu.
      Pomiń jak najwięcej przetworzonej żywności, smażonych potraw i rafinowanych cukrów i zwróć uwagę na wielkość porcji.
      Doskonałą strategią jest zastosowanie metody talerzowej, w której talerz składa się z połowy owoców i warzyw, jednej czwartej chudego białka i jednej czwartej węglowodanów wypełnionych błonnikiem.
      Spożywanie różnorodnych, czystych, nieprzetworzonych pokarmów może również poprawić zdrowie jelit.
      Dobry stan jelit wiąże się nie tylko z silniejszą reakcją insuliny (która zmniejsza ilość tłuszczu gromadzonego w okolicy brzucha), ale może również pomóc zmniejszyć stan zapalny i poprawić odporność, dzięki czemu poczujesz się lepiej fizycznie i psychicznie, dzięki czemu możesz pozostać na dobrej drodze do osiągnąć swoje cele odchudzania.  
    </p>
  </article>
</div>
<div class="container" id="source">
  <p>Źródło: <a href="https://www.forbes.com/health/body/foods-to-eat-to-lose-weight/">https://www.forbes.com/health/body/foods-to-eat-to-lose-weight</p>
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