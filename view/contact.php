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
