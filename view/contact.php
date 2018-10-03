<?php require_once 'partials/header.php'; ?>

<div class="container">
    <form>
      <div class="form-row mt-5 justify-content-center">
          <label><h1>Contact</h1></label>
      </div>
      <hr>
      <div class="form-row justify-content-center">
          <label>Naam</label>
          <input type="text" class="form-control">
          <label>Email</label>
          <input type="text" class="form-control">
          <label>Reserverings ID (optioneel)</label>
          <input type="text" class="form-control">
          <label>Bericht</label>
          <textarea type="text" class="form-control mb-5" rows="8" cols="50"></textarea>
          <div class="col-12">
              <button type="submit" class="btn btn-block btn-primary mt-3">Verzenden</button>
          </div>
      </div>

    </form>
</div>

<?php require_once 'partials/footer.php'; ?>
