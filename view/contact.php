<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact</title>
      <link rel="stylesheet" type="text/css" href="../styles/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <a href="#index"><img class="logo" src="#logo"></a>
    <form class="example" method="post" action="view/index.php?view=search">
      <input name="search" type="text" placeholder="Klik hier wat u wilt zoeken..." name="search">
      <button name"submit" type="submit"><i class="fa fa-search"></i></button>
    </form>
      <ul>
        <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="../index.php?view=catalogus">Catalogus</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    <h3>Contact Form</h3>
    <div class="container">
      <form action="ThankYou.php" method="post">
        <label for="fname">Voornaam</label>
        <input type="text" id="fname" name="voornaam" placeholder="Uw voornaam...">

        <label for="lname">Achternaam</label>
        <input type="text" id="lname" name="achternaam" placeholder="Uw achternaam...">

        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Uw E-mail">

        <label for="subject">Reden van contacteren</label>
        <textarea id="reden" name="reden" placeholder="Beschrijf uw vraag" style="height:200px"></textarea>

        <input type="submit" value="Submit" src="view/ThankYou.php">
      </form>
    </div>
    <div class="contactinfo">
  </body>
</html>
