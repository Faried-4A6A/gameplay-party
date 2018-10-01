<?php require_once 'partials/header.php'; ?>

<div class="container">
    <form>
      <div class="form-row justify-content-center">
          <label><h1>Contact</h1></label>
      </div>
      <hr class="line-hr">
      <div class="form-row justify-content-center">
          <label>Naam</label>
          <input type="text" class="form-control">
          <label>Email</label>
          <input type="text" class="form-control">
          <label>Bericht</label>
          <textarea type="text" class="form-control"></textarea>
      </div>
    </form>
    <br>
    <button type="button" class="btn btn-success">Verzenden</button>
</div>

<?php require_once 'partials/footer.php'; ?>
