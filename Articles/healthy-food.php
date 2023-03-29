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
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../BMI-page.php">BMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../articles-page.php">Helpful Articles</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" id="navbar-right">
                <li class="nav-item dropdown" id="navbar-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Language
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item active" href="#">English</a></li>
                      <li><a class="dropdown-item" href="../Polish/Articles/healthy-food.php">Polish</a></li>
                    </ul>
                  </li>
                <li class="nav-item" id="navbar-login">
                    <?php
                      if (isset($_COOKIE["user_id"])){
                    ?>
                      <a class="nav-link fw-bold" href="../account-page.php">My Account</a>
                    <?php
                      }else{
                    ?>
                      <a class="nav-link fw-bold" href="../login-page.php">Login</a>
                    <?php  
                      }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Heading -->
<a href="../articles-page.php" id="return">Go back</a>
<div class="container text-center">
  <h1>Healthier Eating</h1>
</div>
<!-- Main information -->
<div class="container text-center">
  <article>
    If you’re trying to lose weight, you may be tempted to cut calories, but eating too little can put your health at risk.
    What’s more, eating far fewer calories than you need causes your body to break down its own muscle and organ tissues for fuel. 
    And the less lean tissue mass you have, the slower your metabolic rate, which is not ideal for weight loss.
    Weight control is primarily a hormonal response to certain foods.
    Hormones send signals to the brain that influence our cravings, hunger and body weight. 
    Here’s how certain foods affect your hunger hormones:

    <img src="../Styles/pictures/articles-pictures/protein.svg" width="100" height="100">
    <p>
      Protein fills you up quickly and keeps you full for a long time. 
      It also decreases post-meal secretions of the hunger hormone ghrelin, thus reducing feelings of hunger. 
      Protein also takes more energy to digest and increases lean muscle mass, both of which help boost metabolism.
    </p>
    <img src="https://visualpharm.com/assets/385/Fiber-595b40b75ba036ed117d7d7b.svg" width="100" height="100">
    <p>
      Dietary fiber slows digestion and ensures a gradual rise in blood glucose levels, which triggers a slower release of the fat-storage hormone insulin.
      As fiber moves through the digestive system, various satiety hormones (like ghrelin) are released, sending signals to the brain to reduce hunger and regulate food intake
    </p>

    <img src="../Styles/pictures/articles-pictures/fast-food.svg" width="100" height="100" id="fastFood">
    <p>
    Processed foods are low in nutrients and fiber, so they’re digested quickly. “As a result, eating them (think potato chips, candy bars and toaster pastries) causes a rapid rise in blood glucose levels, which triggers a significant release of insulin. Because insulin must clear glucose from your bloodstream quickly, most of those calories are sent to your fat cells.
    Ideally, you’ll dip into these stored calories the next time you need energy. However, eating a steady supply of ultra-processed foods means you’ll continually make deposits to your fat cells, never withdrawals  .
    </p>

    <h3>How To Lose Weight Safely and Sustainably</h3>
    <p>
      Significantly restricting calories isn’t necessary; in fact, it’s not advisable. 
      Rather, the safest and most sustainable way to lose weight is to enjoy whole, unprocessed, high-quality foods. 
      These foods naturally control your hunger, increase your metabolism and promote fat burning.
      Omit as many processed foods, fried foods and refined sugars as possible, and pay attention to portion size. 
      A great strategy is to use the plate method, where your plate is composed of half fruits and vegetables, a quarter of lean protein, and a quarter of fiber-filled carbohydrates.
      Eating a variety of clean, unprocessed foods can improve your gut health, too. 
      Good gut health is not only linked to a stronger insulin response (which decreases fat stored around the midsection), but also can help decrease inflammation and improve immunity, both of which will have you feeling better physically and mentally so you can stay on track to achieve your weight loss goals.  
    </p>
  </article>
</div>
<div class="container" id="source">
  <p>Source: <a href="https://www.forbes.com/health/body/foods-to-eat-to-lose-weight/">https://www.forbes.com/health/body/foods-to-eat-to-lose-weight</p>
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