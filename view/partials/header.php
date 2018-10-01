<!DOCTYPE html>
<html lang="en">
<header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/view/assets/styles/style.css">
  <title>Gameplay party</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <nav class="navbar" style="background-color: #C4E538;">
        <img src="\view\assets\img\logo2.png">
        <ul class="navbar justify-content-end nav-style">
          <li class="nav-item">
            <a class='nav-link text-dark <?php echo ($packets == 'home' ?  'text-primary font-weight-bold' : '') ?>' href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark <?php echo ($packets == 'overzicht' ?  'text-primary font-weight-bold' : '') ?>" href="overzicht">Alle bioscopen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark <?php echo ($packets == '' ?  'text-primary font-weight-bold' : '') ?>" href="overons">Over ons</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark <?php echo ($packets == '' ?  'text-primary font-weight-bold' : '') ?>" href="contact">Contact</a>
          </li>
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <button type="button" class="btn btn-outline-dark ml-5"><i class="fas fa-user">Login</i></button>
        </ul>
    </nav>
</header>
