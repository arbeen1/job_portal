<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JobSpace</title>
  <link rel="stylesheet" href="headstyle.css" />
</head>

<body>
  <header>
    <nav class="navbar">
      <a href="#" class="logo">JobSpace.</a>
      <ul class="nav-list">
        <li class="nav-item">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Post a Job</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Features</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">About Us</a>
        </li>
      </ul>

      <div class="signin-signup">
        <div class="join">
          <a href="register-form.php" class="sign-in">Get Started</a>
          <!-- <a href="#" class="sign-up">Sign Up</a> -->
        </div>
        <div id="menu-icon" class="fa-solid fa-bars"></div>
      </div>
    </nav>
    <!-- Banner -->
    <div class="banner">
      <div class="banner-text">
        <p>
          Any Industry, Any Loction, Any Experience
          <i class="fa-solid fa-briefcase"></i>
        </p>
        <h2>Hey! Searching for a Job?</h2>
        <p>
          Then you are in a good place. JobSpace here is waiting for talents
          like you to get hired.
        </p>
        <div class="search-box">
          <i class="fa-brands fa-searchengin"></i>
          <input type="search" name="search-box" id="-search-box" placeholder="Search your dream job" />
          <button class="btn">Search</button>
        </div>

        <div class="candidate">
          <div class="box box-1">
            <img src="images/4.png" alt="" />
          </div>
          <div class="box box-2">
            <img src="images/1.png" alt="" />
          </div>
          <div class="box box-3">
            <img src="images/2.png" alt="" />
          </div>
          <div class="box box-4">
            <img src="images/3.png" alt="" />
          </div>
          <div class="box box5">
            <p>200+</p>
          </div>
        </div>
      </div>
      <div class="banner-img">
        <img src="images/banner1.png" alt="banner" />
      </div>
    </div>

    <div class="categories">
      <div class="categorie-text">
        <h4>High Demand Categories Featured</h4>
      </div>
      <div class="categorie">
        <div class="categorie-box">
          <p class="fa-solid fa-microchip fa-fade"></p>
          <p>AI Engineer</p>
        </div>
        <div class="categorie-box">
          <p class="fa-solid fa-code fa-fade"></p>
          <p>Web Development</p>
        </div>
        <div class="categorie-box">
          <p class="fa-solid fa-chart-line fa-fade"></p>
          <p>Marketing</p>
        </div>
        <div class="categorie-box">
          <p class="fa-solid fa-gamepad fa-fade"></p>
          <p>Game Developer</p>
        </div>
      </div>
    </div>
  </header>

  <script src="https://kit.fontawesome.com/156e77427f.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>