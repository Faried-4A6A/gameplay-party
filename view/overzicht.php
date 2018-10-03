<?php require_once "partials/header.php"; ?>
 <!-- Page Content -->
 <div class="container mt-5">

 <div class="row">

 <?php foreach ($bioscopen as $bioscoop): ?>

     <div class="card col-md-3">
             <img class="card-img-top" src="http://placehold.it/700x400?text=bioscoop" alt="Card image cap">
                 <div class="card-header">
                     <h5 class="card-title"> <?php echo $bioscoop['bios_naam']; ?></h5>
                     <p class="card-text"> <?php echo $bioscoop['provincie']; ?></p>
                 </div>

                 <div class="card-body">
                     <a href="#" class="card-link">Reserveren</a>
                     <a href="#" class="card-link">Details</a>
                 </div>
         </div>
     <!-- </div> -->
 <?php endforeach; ?>
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
