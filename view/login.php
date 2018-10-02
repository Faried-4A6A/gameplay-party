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
                <label for="validationDefault01">Username</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="col mt-2">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" required>
            </div>
            <div class="col">
                <button type="button" class="btn btn-primary mt-3">Inloggen</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>
