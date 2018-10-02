<?php require_once 'partials/header.php'; ?>

<div class="container container1">
    <div class="border w-50 p-3 mt-3 mx-auto mt-5">
        <form>
          <div class="form-row justify-content-center">
              <label><h3>Login</h3></label>
          </div>
          <hr>
          <div class="form content-justify-center">
            <div class="col">
                <label for="validationDefault01">Gebruikersnaam</label>
                <input name="naam" type="text" class="form-control" required>
            </div>
            <div class="col mt-2">
                <label for="exampleInputPassword1">Wachtwoord</label>
                <input name="ww" type="password" class="form-control" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-block btn-primary mt-3">Inloggen</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>
