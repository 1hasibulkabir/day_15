<?php include 'header.php' ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $blog['image'];?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">This is a blog</h3>
                        <h4>Author Name</h4>
                        <hr/>
                    </div>
                    <a href="" class="btn btn-outline-success">Read More</a>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
<?php include 'footer.php' ?>
