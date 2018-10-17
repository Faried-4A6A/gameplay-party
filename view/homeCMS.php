<?php include('partials/header.php'); ?>
<div class="container-fluid">
      <div class="row">

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
            <div class="form-row mt-5 font-italic">
                <label><h1>Dashboard</h1></label>
            </div>
            <hr class="my-4">
            <div class="card-deck">
            <div class="card" style="width: 18rem;background-color:#34495e;">
              <div class="card-body">
                <button type="button" class="btn btn-lg" style="background-color:#34495e;"><a class="nav-link text-white" href=""><i class="far fa-edit"></i>Toevoegen</a></button>
              </div>
            </div>
            <div class="card" style="width: 18rem;background-color:#34495e;">
              <div class="card-body">
                <button type="button" class="btn btn-lg" style="background-color:#34495e;"><a class="nav-link text-white" href="/adminController/changeHome"><i class="fas fa-pencil-alt"></i>Aanpassen</a></button>
              </div>
            </div>
        </div>

        </main>
      </div>
    </div>
<!-- <a class="nav-link" href="/Gameplayparty/adminController/addBios">Bioscoop toevoegen</a>
<a class="nav-link" href="/Gameplayparty/adminController/showCMS">Aanpassingen</a> -->
<?php include('partials/footer.php'); ?>
