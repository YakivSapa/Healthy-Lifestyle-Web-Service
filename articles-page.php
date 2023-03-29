<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpful articles</title>
    <link rel="stylesheet" href="Styles/articles-styles.css">
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
                    <a class="nav-link active" href="#"> Helpful Articles</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto" id="navbar-right">
                <li class="nav-item dropdown" id="navbar-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Language
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item active" href="#">English</a></li>
                      <li><a class="dropdown-item" href="Polish/articles-page.php">Polish</a></li>
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
<!-- Title + Main Text -->
<div class="container text-center">
    <h1>Articles</h1>
    <figure>
        <blockquote class="blockquote">
          <p>" Wisdom is not a product of schooling but of the lifelong attempt to acquire it. "</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Albert Einstein
        </figcaption>
    </figure>
    <article>
        The significance of research cannot be understated. 
        It is integral to succeeding in every field. Such as law, writing, finance and bodybuilding. 
        The main purposes of research are to inform action, gather evidence for theories, and contribute to developing knowledge in a field of study.
        Understanding that research is important might seem like a no-brainer, but many people avoid it like the plague. 
        Yet, for those who like to learn, whether they are members of a research institution or not, conducting research is not just important—it's imperative.
    </article>
</div>
<br>
<!-- Articles -->
<div class="container">
    <h4 class="text-center">Available articles: </h4>
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100">
            <h5 class="card-header">New article!</h5>
            <div class="card-body">
                <h5 class="card-title">Diet tips for muscle building</h5>
                <p class="card-text">Want to get more muscles and make your body look leaner? Check out this article for diet tips and make that change now!</p>
                <a href="Articles/muscle-building.php" class="btn btn-primary">See more.</a>
            </div>
            <div class="card-footer text-muted">
                Uploaded: 2 days ago
            </div>
        </div>
      </div>
      <br>
      <div class="col">
        <div class="card h-100">
            <h5 class="card-header">New article!</h5>
            <div class="card-body">
                <h5 class="card-title">Healthy Nutrients</h5>
                <p class="card-text">List of important nutrients for healthy lifestyle! Consider feeding your body healthier foods, it’s a very effective weight loss strategy.</p>
                <a href="Articles/healthy-food.php" class="btn btn-primary">See more.</a>
            </div>
            <div class="card-footer text-muted">
                Uploaded: 2 days ago
            </div>
        </div>
      </div>
    </div>
    </div>
<br>
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