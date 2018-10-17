<?php require_once "partials/header.php"; ?>

 <!-- Page Content -->
 <div class="container mt-5">
     <div class="form-row mt-5 justify-content-center font-italic" style="color: #A3CB38;">
         <label><h1>Alle bioscopen om feest te vieren!</h1></label>
     </div>
     <hr>
 <div class="row">
 <?php foreach ($bioscopen as $bioscoop): echo "<div class='col-md-3'>";?>
<div class="card mt-3">
  <img class="card-img-top" src="/view/assets/img/<?php echo $bioscoop['image']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $bioscoop['bios_naam']; ?></h5>
    <p class="card-text"><?php echo $bioscoop['provincie']; ?></p>
    <button href="#" class="btn btn-primary">Reserveren</button>
    <a href="https://kinepolis.nl/bioscopen/<?php echo str_replace(' ', '-', $bioscoop['bios_naam']); ?>/info" target="_blank" class="btn btn-success">Details</a>
  </div>
</div>
<?php echo"</div>"; endforeach;?>
</div>
 <!-- Pagination -->
 <!-- <ul class="pagination justify-content-center">
   <li class="page-item">
     <a class="page-link" href="#" aria-label="Previous">
       <span aria-hidden="true">&laquo;</span>
       <span class="sr-only">Previous</span>
     </a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#">1</a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#">2</a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#">3</a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#" aria-label="Next">
       <span aria-hidden="true">&raquo;</span>
       <span class="sr-only">Next</span>
     </a>
   </li>
 </ul> -->

</div>
<!-- /.container -->
<?php require_once "partials/footer.php"; ?>
