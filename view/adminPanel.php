<?php include('partials/header.php'); ?>
<div class="container-fluid">
      <div class="row">
        <main role="main" class="mx-auto">
            <div class="form-row mt-5 font-italic">
                <label><h1>Dashboard</h1></label>
            </div>
            <hr class="my-4">
            <div class="card-deck">
            <div class="card" style="width: 18rem;">
              <div class="card-body" style="background-color:#A3CB38;">
                <h5 class="card-title"><button type="button" class="btn btn-lg" style="background-color:#A3CB38;"><a class="nav-link text-white" href="/adminController/addBios">Bioscoop toevoegen</a></button></h5>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <div class="card-body" style="background-color:#A3CB38;">
                <h5 class="card-title"><button type="button" class="btn btn-lg" style="background-color:#A3CB38;"><a class="nav-link" style="color:#fff;" href="adminController/showCMS">Aanpassingen</a></button></h5>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <div class="card-body" style="background-color:#A3CB38;">
                <h5 class="card-title"><button type="button" class="btn btn-lg" style="background-color:#A3CB38;"><a class="nav-link text-white" href="/adminController/addBios">Bioscoop</a></button></h5>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <div class="card-body" style="background-color:#A3CB38;">
                <h5 class="card-title"><button type="button" class="btn btn-lg" style="background-color:#A3CB38;"><a class="nav-link" style="color:#fff;" href="adminController/showCMS">Home</a></button></h5>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <div class="card-body" style="background-color:#A3CB38;">
                <h5 class="card-title"><button type="button" class="btn btn-lg" style="background-color:#A3CB38;"><a class="nav-link text-white" href="/adminController/addBios">Contact</a></button></h5>
              </div>
            </div>
        </div>
        </main>
      </div>
    </div>
<!-- <a class="nav-link" href="/Gameplayparty/adminController/addBios">Bioscoop toevoegen</a>
<a class="nav-link" href="/Gameplayparty/adminController/showCMS">Aanpassingen</a> -->
<?php include('partials/footer.php'); ?>
