<?php require_once "partials/header.php"; ?>
 <!-- Page Content -->
 <div class="container mt-5">
 <div class="row">
            
 <?php foreach ($bioscopen as $bioscoop): ?>
     
     <div class="card col-md-4">
 
             <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                 <div class="card-body">
                     <h5 class="card-title"><li> <?php echo $bioscoop['bios_naam']; ?></li></h5>
                     <p class="card-text"><li> <?php echo $bioscoop['provincie']; ?></li></p>
                 </div>
                 <ul class="list-group list-group-flush">
                     <li class="list-group-item"><h5> Begintijd: </h5>
                                 <?php echo $bioscoop['begintijd']; ?></li>
                     <li class="list-group-item"> <h5> Eindtijd: </h5>
                                 <?php echo $bioscoop['eindtijd']; ?></li>
                     <li class="list-group-item"> <h5> Voorwaarden: </h5>
                                 <?php echo $bioscoop['voorwaarden']; ?></li>
                 </ul>
                 <div class="card-body">
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
         </div>
     <!-- </div> -->
 <?php endforeach; ?>
</div>
 <!-- Pagination -->
 <ul class="pagination justify-content-center">
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
 </ul>

</div>
<!-- /.container -->
<?php require_once "partials/footer.php"; ?>
