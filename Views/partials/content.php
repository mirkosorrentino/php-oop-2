<main>
    <div class="container d-flex">
        <?php foreach ($products as $key => $product) { ?>
            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product -> name ?></h5>
                    <ul>
                        <li><?php echo $product -> price ?>€</li>
                        <li>For <?php echo $product -> category -> name ?> <i class="<?php echo $product -> category -> symbol ?>"></i></li>
                        <li><?php echo $product -> getDetails() ?></li>
                        <li><?php echo $product -> getExpirationDate() ?></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
    
</main>