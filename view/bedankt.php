<?php require_once "partials/header.php"; ?>

<html>
  <body>
    Wij zijn blij met uw reservering <?php echo $_POST["fname"],' ' . $_POST["bname"]; ?>
  </body>
</html>
<?php
  if ($_POST["fdatum"] = ' ') {
    alert('datum mag niet leeg zijn');
  }
  ?>

<?php require_once "partials/footer.php"; ?>
