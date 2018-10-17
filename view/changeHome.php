<?php include('partials/header.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

<div class="container">

<div id="summernote"></div>
<script>
  $('#summernote').summernote({
    tabsize: 2,
    height: 100
  });
</script>
    
    </div>
<!-- <a class="nav-link" href="/Gameplayparty/adminController/addBios">Bioscoop toevoegen</a>
<a class="nav-link" href="/Gameplayparty/adminController/showCMS">Aanpassingen</a> -->
<?php include('partials/footer.php'); ?>
