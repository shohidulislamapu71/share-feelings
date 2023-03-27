<?php 

include("functions.php");

$obj= new admin_post();



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
    .blog-area-btn a{
        margin-right: 10px;
    }
    ul.navbar-nav.me-auto.mb-2.mb-lg-0 {
    margin-left: 20px;
}
.card {
    margin-bottom: 25px;
}
.navbar-brand {
   
    font-weight: bold;
    text-transform: uppercase;
    color: hsla(11,100%,62.2%,1);
}
nav.navbar.navbar-expand-lg {
    box-shadow: 1px 1px 9px #0000001a;
    padding: 18px 0px;
}
.card h6 {
    padding: 10px 10px;
    text-align: center;
}
.post-area {
    padding: 40px 0px 0px 0px;
}
</style>
    </head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Share Feelings</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   
                </ul>
                <div class="d-flex blog-area-btn">
                    <a class="btn btn-primary" href="login.php">Login</a>
                    <a class="btn btn-warning" href="post.php">Post Now</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="post-area">
        <div class="container">
            <div class="row">
                <?php

                    $row = $obj->insert_post_show();
                    
                    while($rows = mysqli_fetch_assoc($row)){
                        ?>
                        <div class="col-xl-3">
                        <div class="card">
                            <h6>Author: <?php echo $rows['user_name_post'];?></h6>
                            <img src="uploads/<?php echo $rows['post_thumbnail'];?>" class="card-img-top" alt="<?php echo $rows['post_title'];?>">
                            <div class="card-body">
                                <h4><?php echo $rows['post_title'];?></h4>
                                <p class="card-text"><?php echo $rows['post_description'];?></p>
                            </div>
                            </div>
                        </div>
                        <?php
                    }
                
                ?>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>