<?php include('header.php') ?>


<div class="mt-5">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/image/<?php echo $details['image'] ?>" alt=""
                         style="height: 500px; width: 500px">
                </div>

                <div class="col-md-6 mt-5">

                    <h2>Product Name: <?php echo $details['product_name'] ?></h2>
                    <h5>Category: <?php echo $details['category_name'] ?></h5>
                    <h5>Product Price: <?php echo $details['price'] ?></h5>
                    <h5>Details: <?php echo $details['description'] ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
