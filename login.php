<?php 

include("functions.php");

$obj= new admin_post();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .blog-area-btn a {
            margin-right: 10px;
        }

        ul.navbar-nav.me-auto.mb-2.mb-lg-0 {
            margin-left: 20px;
        }

        .navbar-brand {

            font-weight: bold;
            text-transform: uppercase;
            color: hsla(11, 100%, 62.2%, 1);
        }

        nav.navbar.navbar-expand-lg {
            box-shadow: 1px 1px 9px #0000001a;
            padding: 18px 0px;
        }

        .card-area {
            padding: 36px;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        form.card.card-area h6 {
            text-align: center;
            font-size: 24px;
            padding: 11px 0px 40px 0px;
        }
        a.navbar-brand:hover {
    color: #ff623e;
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
                <div class="col-xl-6">
                  
                    <form class="card card-area" action="" method="post">
                        <?php

                           
                            if(isset($_POST['login_submit'])){
                                $obj->insert_post_login($_POST);

                            } 

                           

                        
                        ?>
                        <h6>Login</h6>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Adress</label>
                            <input type="email" name="post_email_login" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="post_password_login" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
        
                        <input type="submit" name="login_submit" value="Login" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-xl-6">
                  
                   
                  <form class="card card-area" action="" method="post">
                  <?php
                    
                    if(isset($_POST['signup_submit'])){
                        $obj->insert_post_signup($_POST);
                    }
                    
                    ?>
                      <h6>Signup</h6>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Author Name</label>
                          <input type="text" name="post_author_name" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email Adress</label>
                          <input type="email" name="post_email_address" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="post_password_author" class="form-control" id="exampleInputEmail1"
                              aria-describedby="emailHelp">
                      </div>
      
                      <input type="submit" name="signup_submit" value="Signup" class="btn btn-primary">
                  </form>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>