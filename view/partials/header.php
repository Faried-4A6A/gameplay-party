<?php
$page = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/view/assets/img/logo.png">
  <link rel="stylesheet" href="/view/assets/style.css">
  <title>Gameplay party</title>
</head>

<header class='sticky-top'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- <a class="navbar-brand float-left navlogo" style= href="/homeController/home"><img style="height:100px" src="/view/assets/img/gpp.svg" alt=""></a> -->

    <nav class="navbar p-0 navbar-expand-lg navbar-light backgroundColorAndriodGreen">
    <a class="navbar-brand float-left navlogo" href="#"><img style="height:100px" src="/view/assets/img/gpp.svg" alt=""></a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0 px-5">
    <li class="nav-item">
      <a class="nav-link <?php if($page == '/homeController/home'){echo "active-nav";} ?> colorMidnight " href="http://localhost/homeController/home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($page == '/catalogusController/catalogus'){echo "active-nav";} ?> colorMidnight" href="http://localhost/catalogusController/catalogus">Bioscopen</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if($page == '/contactscontroller/contact'){echo "active-nav";} ?> colorMidnight" style='' href="http://localhost/contactscontroller/contact">Contact</a>
    </li>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" disabled aria-label="Search">
      <button class="btn btn-outline-primary colorMidnight my-2 my-sm-0" type="submit"><span class="fas fa-search"></span></button> -->
    </form>
  </div>
</nav>
</header>
