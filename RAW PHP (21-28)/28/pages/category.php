<?php include 'header.php' ?>

    <h1> Category Wise Products </h1>

    <div class="mt-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <img src="assets/image/<?php echo $product['image'] ?>" alt=""
                                     style="height: 380px; width: 380px">
                            </div>
                            <div class="card-body">
                                <h2><?php echo $product['product_name'] ?></h2>
                                <h5><?php echo $product['price'] ?></h5>
                                <a href="action.php?page=details&id=<?php echo $product['id'] ?>"
                                   class="btn btn-success">Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php include 'footer.php' ?>