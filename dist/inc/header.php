<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/datepicker.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <title>Skäggbyrån Gävle</title>
</head>

<body>
  <?php session_start(); ?>
  <section id="navBgLg">
    <div class="grid">

      <!-- User section -->
      <?php if(!$_SESSION): ?>
      <div class="userBox">
        <ul id="userMenu">
          <a href="logIn.php">
            <li class="navH">logga in</li>
          </a>
          <a href="register.php">
            <li class="navH">Registrera</li>
          </a>
        </ul>
      </div>
      <?php endif; ?>

      <?php if($_SESSION): ?>
      <div class="userBox">
        <ul id="userMenu">
          <a href="logIn.php">
            <li class="navH"><?php echo $_SESSION['userName']?></li>
          </a>
          <a href="register.php">
            <li class="navH">Logga ut</li>
          </a>
        </ul>
      </div>
      <?php endif; ?>


      <!-- Logo -->
      <div class="box1"><a href="index.php"><img id="logo" src="./img/1x/logo.png" alt="" /></a></div>


      <!-- Menu for large screens -->
      <div class="box2">
        <nav id="navLg">
          <ul id="menuLg">
            <a href="index.php">
              <li id="homeBtnLg" class="navH">Hem</li>
            </a>
            <a href="about.php">
              <li id="aboutBtnLg" class="navH">
                Om<span id="spacing"> </span>Oss
              </li>
            </a>
            <li id="contactBtnLg" class="navH">Kontakt</li>
            <a href="portfolio.php">
              <li id="portfolioBtnLg" class="navH">Portfolio</li>
            </a>
            <a href="arbetstraning.php">
              <li id="workBtnLg" class="navH">Arbetsträning</li>
            </a>
          </ul>
        </nav>

        <!-- Menu for small screens -->
        <nav id="navSm">
          <a href="#">
            <img id="hambBtn" src="./img/1x/HambMenu.png" alt="" />
          </a>
        </nav>
      </div>
    </div>
  </section>
  <div class="hidden" id="dropDownMenuSm">
    <ul id="menuSm">
      <a href="index.php">
        <li id="homeBtnSm" class="navV">Hem</li>
      </a>
      <a href="about.php">
        <li id="aboutBtnSm" class="navV">Om Oss</li>
      </a>
      <li id="contactBtnSm" class="">Kontakt</li>
      <div id="dropDownMenuContactSm" class="hidden">
        <ul class="subMenu">
          <a href="book.php">
            <li class="subItem"><span class="subText">Boka tid</span></li>
          </a>
          <a href="contact.php">
            <li class="subItem"><span class="subText">Skicka meddelande</span></li>
          </a>
        </ul>
      </div>
      <a href="portfolio.php">
        <li id="portfolioBtnSm" class="navV">Portfolio</li>
      </a>
      <a href="arbetstraning.php">
        <li id="workBtnSm" class="navV">Arbetsträning</li>
      </a>
    </ul>
  </div>

  <!-- Dropdownmenu for contacts (large screen) -->
  <div id="dropDownMenuContact" class="hidden">
    <ul>
      <a href="book.php">
        <li>Boka tid</li>
      </a>
      <a href="contact.php">
        <li>Skicka meddelande</li>
      </a>
    </ul>
  </div>
  <div id="mainContent"></div>