<?php include 'header.php' ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">This is computer product </h3>
                            <h4><?php echo $product['Name'];?></h4>
                            <h4><?php echo $product['description'];?></h4>
                            <h4><?php echo $product['Brand'];?></h4>
                            <h4><?php echo $product['Price'];?></h4>
                            <hr/>
                        </div>
                        <a href="action.php?page=details" class="btn btn-outline-success">Read More</a>
                    </div>
                    <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top">
                </div>
            <?php } ?>
        </div>

    </div>
</section>
<?php include 'footer.php' ?>

