<?php foreach ($products as $product) { ?>
    <div class="col">
        <div class="card">
            <img src="<?php echo './assets/img/' . $product->get_image()?>" class="card-img-top" alt="<?php echo $product->get_category() ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->get_name() ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Category: <?php echo $product->get_category() ?></li>
                <li class="list-group-item">Discount: <strong><?php echo $product->get_discount() . '%' ?></strong></li>
                <li class="list-group-item">Final price: <?php echo $product->get_price() ?></li>
            </ul>
        </div>
    </div>
<?php } ?>