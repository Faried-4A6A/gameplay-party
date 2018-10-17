<?php require_once "partials/header.php"; ?>
<!-- Page Content -->
<h1 class='text-center'>Reserveren</h1>

<div class="container mt-5">
  <form action="bedankt" method='post'>
    <div class="form-row">
      <div class="col">
        <label for="exampleFormControlInput1">Voornaam</label>
        <input type="text" class="form-control" name="fname">
      </div>
      <div class="col-2">
        <label for="exampleFormControlInput1">Tussenvoegsel</label>
        <input type="text" class="form-control">
      </div>
      <div class="col">
        <label for="exampleFormControlInput1">Achternaam</label>
        <input type="text" class="form-control" name="bname">
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="exampleFormControlInput1">E-mail</label>
        <input type="email" class="form-control">
      </div>
      <div class="col">
        <label for="exampleFormControlInput1">Telefoonnummer</label>
        <input type="text" class="form-control" >
      </div>
    </div>
    <div class="form-row">
      <div class="col-6">
        <label for="exampleFormControlInput1">Reserveringsdatum</label>
        <input type="date" class="form-control" name="fdatum">
      </div>
      <div class="col">
        <label for="exampleFormControlSelect1">Tijd</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Donderdag: 9:15 uur - 12:00 uur</option>
          <option>Vrijdag: 13:15 uur - 15:15 uur</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label for="exampleFormControlSelect1">Aanbetaling</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>...</option>
          <option>Ja</option>
          <option>Nee</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Opmerking</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-block btn-primary mt-3">Reserveer</button>
    </div>
  </form>
</div>
<!-- /.container -->
<?php require_once "partials/footer.php"; ?>
