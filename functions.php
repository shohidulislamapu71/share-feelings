<?php

session_start();
class admin_post{

    private $dbconn;


    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "sharefeelings";

        $this->dbconn= mysqli_connect($host,$user,$pass,$db);

        if(!$this->dbconn){
            die("database not found");
        }
    }

    public function insert_post_data($data,$id,$username){

        $post_title = $data['post_title'];
        $post_description = $data['post_description'];
        $post_thumbnail = $_FILES['post_thumbnail']['name'];
        $post_thumbnail_temp = $_FILES['post_thumbnail']['tmp_name'];


        $q = "INSERT INTO `post`(`post_title`, `post_description`, `post_thumbnail`,`user_post_id`,`user_name_post`)
         VALUES ('$post_title','$post_description','$post_thumbnail','$id','$username')";

        if(mysqli_query($this->dbconn,$q)){

            move_uploaded_file($post_thumbnail_temp,"uploads/$post_thumbnail");

            ?>
                <div class="alert alert-success" role="alert">
                    Successfull
                </div>
            <?php
        }

    }


    public function insert_post_show(){


        $q = "SELECT * FROM `post`";

        if(mysqli_query($this->dbconn,$q)){

            $rows = mysqli_query($this->dbconn,$q);
            return $rows;
        }

    }


    public function insert_post_signup($data){

        $post_author_name = $data['post_author_name'];
        $post_email_address = $data['post_email_address'];
        $post_password_author = $data['post_password_author'];

        $q = "INSERT INTO `user`(`email_address`, `password`, `author_name`) 
        VALUES ('$post_email_address','$post_password_author','$post_author_name')";

        if(mysqli_query($this->dbconn,$q)){
            ?>
                <div class="alert alert-success" role="alert">
                   Your are Successfull Signup.
                </div>
            <?php
        }
       

    }

    
    public function insert_post_login($data){

        $user_email = $data['post_email_login'];
        $user_pass = $data['post_password_login'];

        $q = "SELECT * FROM user WHERE email_address='$user_email' AND password='$user_pass'";

        if(mysqli_query($this->dbconn,$q)){

            $row = mysqli_query($this->dbconn,$q);
            $rows = mysqli_fetch_assoc($row); 

            if($rows['email_address']==$user_email && $rows['password']==$user_pass){
                
                $_SESSION['user_name'] = $rows['author_name'];
                $_SESSION['author_id'] = $rows['user_id'];
                header("location:post.php");
            }

        }
       

    }







    
}