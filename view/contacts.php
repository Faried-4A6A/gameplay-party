<div class="container">
    <?php
    require 'header.php';
    ?>

    <div class="row">
        <div class="input-group my-3 col-6">
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-2">
            <a href='/MVC/index.php?op=create' class='btn btn-primary mt-3 col-12'>Create new product</a>
        </div>
    </div>

    <?php
    echo $table;
    require 'footer.php';
    ?>
</div>