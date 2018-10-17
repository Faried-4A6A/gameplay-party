<?php include('partials/header.php'); ?>

<!-- <div class="container">
  <h1>Voeg een bios toe</h1>
  <?php
  // echo $form;
  ?>
</div> -->
<!-- <a class="nav-link" href="/Gameplayparty/adminController/addBios">Bioscoop toevoegen</a>
<a class="nav-link" href="/Gameplayparty/adminController/showCMS">Aanpassingen</a> -->


<div class="container">

<form method="post" action="../adminController/collectBios/" enctype="multipart/form-data">
        <h1> Bioscoop toevoegen </h1>
        <div class="form-group">
            <label for="naam">Bioscoopnaam&#42;</label>
            <input type="text" value="" class="form-control" name="bios_naam" placeholder="Bioscoopnaam.." required>
        </div>
        <div class="form-group">
            <label for="image">Afbeelding&#42;</label><br>
            <input type="file" name="image" required>
        </div>
        <div class="form-group">
            <label for="adres">Adres&#42;</label>
            <input type="text" value="" class="form-control" name="adres" placeholder="Adres.." required>
        </div>
        <div class="form-group">
            <label for="postcode">Postcode&#42;</label>
            <input type="text" value="" class="form-control" name="postcode" placeholder="Postcode.." required>
        </div>
        <div class="form-group">
            <label for="stad">Stad&#42;</label>
            <input type="text" value="" class="form-control" name="stad" placeholder="Stad.." required>
        </div>
        <div class="form-group">
            <label for="provincie">Provincie&#42;</label>
            <input type="text" value="" class="form-control" name="provincie" placeholder="Provincie.." required>
        </div>
        <div class="form-group">
            <label for="begintijd">Begintijd&#42;</label>
            <input type="datetime-local" value="2018-10-12T12:00" class="form-control" name="begintijd" required>
        </div>
        <div class="form-group">
            <label for="eind">Eindtijd&#42;</label>
            <input type="datetime-local" value="2018-10-12T15:00" class="form-control" name="eindtijd" required>
        </div>
        <div class="form-group">
            <label for="auto">Bereikbaarheid auto&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_auto"  rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="ov">Bereikbaarheid openbaar vervoer&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_ov"  rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="fiets">Bereikbaarheid fiets&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="bereikbaar_fiets"  rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="rolstoel">Rolstoeltoegankelijk?&#42;</label><br>
            <input type="radio" name="rolstoeltoegankelijkheid" value="ja" checked="checked"> Ja<br>
            <input type="radio" name="rolstoeltoegankelijkheid" value="nee"> Nee
        </div>
        <div class="form-group">
            <label for="voorwaarden">Voorwaarden&#42;</label>
            <textarea class="form-control no-resize" style="resize: none;" name="voorwaarden" placeholder="Voorwaarden.." rows="5" required></textarea>
        </div>       
        <small id="emailHelp" class="form-text text-muted">Velden met een &#42; zijn verplicht.</small><br>
        <button type="submit" class="btn btn-primary" name="create" style="background-color: #A3CB38; border: none;">Voeg bioscoop toe</button>
    </form>
</div>
<?php include('partials/footer.php'); ?>