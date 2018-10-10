<?php include('partials/header.php'); ?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-primary" href="#">
                <i class="fas fa-file"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #009432;" href="#">
                <i class="fas fa-film"></i>
                  Bioscopen
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #009432;" href="#">
                <i class="fas fa-home"></i>
                  Home
                </a>
              </li>
            </ul>

            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" style="color: #009432;" href="#">
                <i class="fas fa-address-book"></i>
                Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #009432;" href="#">
                <i class="fab fa-stack-overflow"></i>
                 Beheer
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
            <div class="form-row mt-5 font-italic">
                <label><h1>Dashboard</h1></label>
            </div>
            <hr class="my-4">
            <button type="button" class="btn btn-lg" style="background-color:#A3CB38;"><a class="nav-link text-white" href="/adminController/addBios">Bioscoop toevoegen</a></button>
            <button type="button" class="btn btn-lg" style="background-color:#34495e;"><a class="nav-link" style="color:#fff;" href="adminController/showCMS">Aanpassingen</a></button>

        </main>
      </div>
    </div>
<!-- <a class="nav-link" href="/Gameplayparty/adminController/addBios">Bioscoop toevoegen</a>
<a class="nav-link" href="/Gameplayparty/adminController/showCMS">Aanpassingen</a> -->
<?php include('partials/footer.php'); ?>
