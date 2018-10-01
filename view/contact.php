<<<<<<< HEAD
<?php
  include 'partials/header.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact</title>
      <link rel="stylesheet" type="text/css" href="../styles/style.css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <div class="col-md-6">
          <div class="form-area">
              <form role="form">
              <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
          				<div class="form-group">
      						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
      					</div>
      					<div class="form-group">
      						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
      					</div>
                <div class="form-group">
                <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
              </div>

              <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
              </form>
          </div>
        </div>
      </div>
  </body>
</html>
<?php
    include 'partials/footer.php';
 ?>
=======
<?php require_once 'partials/header.php'; ?>

<div class="container">
    <form>
      <div class="form-row mt-5 justify-content-center">
          <label><h1>Contact</h1></label>
      </div>
      <hr>
      <div class="form-row justify-content-center">
          <label>Naam</label>
          <input type="text" class="form-control">
          <label>Email</label>
          <input type="text" class="form-control">
          <label>Reserverings ID (optioneel)</label>
          <input type="text" class="form-control">
          <label>Bericht</label>
          <textarea type="text" class="form-control mb-5" rows="8" cols="50"></textarea>
      </div>
    </form>
</div>

<?php require_once 'partials/footer.php'; ?>
<<<<<<< HEAD
>>>>>>> 8fecf13bdb84acd4ea4417fd03d1d8677bf3172b
=======
>>>>>>> 84ad9909d677aca14bbbd44ac0d6ad0c5e31e01c
