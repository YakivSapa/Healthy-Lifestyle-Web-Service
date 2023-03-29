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
                      <li><a class="dropdown-item" href="../Polish/Articles/muscle-building.php">Polish</a></li>
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
  <h1>Muscle building</h1>
</div>
<!-- Main information -->
<div class="container text-center">
  <article>
    <p>
      In order to build muscle mass, you need a positive calorie balance – i.e. you need to consume more than you burn. 
      For every pound (450g) of muscle you want to build, you’ll need to take in around 2,800 calories. 
      This is mostly to support your increased protein turnover, which is likely to be elevated with training.
    </p>
    <p>
      At most, your body can add around 227 (half a pound) of muscle mass every week. Consequently, if you consume a lot of additional calories while trying to build muscle, you are likely to gain excess fat as well. A daily increase of 250 to 500 calories is recommended.
      Try to stay on the lower end of the range if you gain fat easily, and aim for the higher end of the range if you find it difficult to gain weight overall. Finding the right amount of extra calories to build muscle and stay lean will take some trial and error.
    </p>
    <p>
      Moreover, research suggests that eating lean protein 15 to 20 minutes before, during, and within one hour of working out may help increase muscle mass. While you are unlikely to eat steaks or chicken breasts at the gym, a protein drink or supplement may be beneficial before, during, or after workouts.
      It’s not all about protein, though. To build muscle, lose fat, and get stronger, a healthy, balanced diet should provide you with many meals that meet your caloric expenditures and provide you with nutrition. Here are a few great ideas to help you build muscle mass.
    </p>
    <ol>
      <img src="../Styles/pictures/articles-pictures/breakfast.jpg">
      <li class="list-item">BREAKFAST WILL HELP BUILD MUSCLE MASS</li><p>You’ll need an immediate burst of energy and breakfast will help give you this. It’ll also help you stay full until your next meal or snack. It also sets the trend: you’ll tend to eat healthier if your day starts with a strong and healthy breakfast. Your best bets if your trying to build muscle mass are omelettes, smoothies and cottage cheese.</p>
      <img src="../Styles/pictures/articles-pictures/eating.png" id="eatingPic">
      <li class="list-item">EAT EVERY THREE HOURS</li><p>Eating the right thing at the right time is crucial for helping you boost your muscle mass. The easiest way is to eat your breakfast, lunch and dinner as usual, interspersed with meals post workout, pre-bed and with two snacks in between. By keeping your food intake up, it will mean you won’t be as hungry, because eating smaller meals more often versus a few big meals will decrease your stomach size. You’ll feel full more quickly and your waist will trim, while you’ll also have fewer cravings.</p>
      <img src="../Styles/pictures/articles-pictures/protein.jpg">
      <li class="list-item">PROTEIN WITH EACH MEAL HELPS BOOST MUSCLE MASS</li><p>You need protein to build and maintain muscle mass. To achieve this, you should be looking to eat at least 1g per 454g of body-weight. That’s 200g/day if you weigh 91kg. The easiest way to get this amount is to eat a whole protein source with each meal. These include:
        <ul>
          <li>Red meat. Beef, pork, lamb, etc.</li>
          <li>Poultry. Chicken, turkey, duck, etc.</li>
          <li>Fish. Tuna, salmon, sardines, mackerel, etc.</li>
          <li>Eggs.</li>
          <li>Dairy. Milk, cheese, cottage cheese, quark, yogurt, etc.</li>
          <li>Whey. Not necessary but great for easy post workout shakes.</li>
          <li>Vegan options such as lentils, tofu, seeds and nuts.</li>
        </ul>
      </p>
    </ol>

  <p id="ending">
    Of course, it’s not just about getting your diet right when it comes to building muscle mass. 
    You need to get your workouts right, too. 
    Spending enough time in the gym, doing the right exercises is absolutely vital if you want to achieve the gains you’re looking for.
  </p>
  </article>
</div>
<div class="container" id="source">
  <p>Source: <a href="https://www.everyoneactive.com/content-hub/gym/muscle-mass/">https://www.everyoneactive.com/content-hub/gym/muscle-mass</p>
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