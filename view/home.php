<?php require_once "partials/header.php";?>


<!-- <div class="slider">
  <img class="img-fluid" src="/view/assets/img/home.jpg">
  </div> -->

  <header class="business-header mb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="jumbotron mt-5" style="opacity: 0.69;filter: alpha(opacity=50);">
                      <label>
                          <h1 class="display-4 font-weight-bold" style="color: #A3CB38;text-shadow: 4px 4px 4px #009432;">Welkom bij <br>Gameplay Party</h1>
                      </label>
                      <hr class="my-4">
                      <p class="lead">
                        <a class="btn btn-lg" style="background-color:#A3CB38; color:#009432;opacity: 1;" href="/catalogusController/catalogus" role="button">Bekijk de bioscopen om te feesten en reserveer!</a>
                      </p>
              </div>
            <!-- <h1 class="display-3 text-center text-white mt-4">Gameplay Party</h1> -->
          </div>
        </div>
      </div>
    </header>
<div class="container">
  <h2 class="text-center font-italic" style="color: #A3CB38;">informatie</h2>
  <hr>

  <div class="row">
      <div class="col-sm-5 offset-sm-2 col-md-12 my-3 offset-md-0">
      <?php echo $homeText; ?>
      </div>
  </div>
  <!-- /.row -->

</div>


<?php require_once "partials/footer.php"; ?>
