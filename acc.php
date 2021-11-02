<?php require("db.php"); 
session_start();
$id= $_SESSION['id']; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Scheherazade+New&display=swap');

    :root {
        --font-baloo: 'Baloo 2', cursive;
        --font-2: 'Scheherazade New', serif;
        --font-3: 'Merriweather', serif;
    }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>iBlog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="db.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>


    </style>
</head>

<body>
    <?php include_once("include/nav.php");?>
    <?php 
        if(isset($_FILES['myfile'])){
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
            move_uploaded_file($_FILES['myfile']['tmp_name'],$target_file);            
            mysqli_query($con,"UPDATE users set pic = '$target_file' WHERE id = $id");
        }
    ?>
    <div class="container mt-5">
        <div class="ml-5 row">
            <div class="col-sm-3">
                <button style="border: none; background-color:transparent" data-toggle="modal"
                    data-target="#exampleModal">
                    <?php 
                    if(is_null($row['profile_pic'])){
                        $IMG = 'photos/placeholder.jpg';
                    }
                    else{
                        $IMG = $row['profile_pic'];
                    }
                    ?>
                    <img src="<?=$IMG?>" style="border-radius: 50%;width: 200px;height: 200px;" alt="user's pic"
                        class="m-3  img-fluid"></button>
            </div>
            <div class="col-sm-6">
                <div class="container">


                    <div class="row">
                        <div class="col " style="padding: 0;">
                            <p class="text-dark display-4 " style="font-weight:bold"><?=$row['name']?></p>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                        $result = mysqli_query($con,"SELECT * FROM users left join posts on users.id=posts.user_id where users.id = $id");
                        ?>
                        <div class="col-md-3" style="padding: 0;">
                            <p class="text-muted "><?=mysqli_num_rows($result)?> POSTS</p>
                        </div>
                        <div class="col-md-3" style="padding: 0;">
                            <p class="text-muted ">32 followers</p>
                        </div>
                        <div class="col-md-3" style="padding: 0;">
                            <p class="text-muted " style="margin: 0;">32 following</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal -->
    <div style="margin-top: 12%;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 400px;border-radius:15px;" role="document">
            <div class="modal-content" style="border-radius:10px;">



                <div class="modal-body" style="padding-top:0px;padding-bottom:0px;">
                    <div class="row">

                        <div class="col-12" style="padding:0px;">
                            <h5 style="font-weight:bold; font-size:25px; border-bottom:0.1px solid gray ;border-radius:0 ;background-color: transparent;"
                                class="modal-title p-4 d-flex justify-content-center text-center"
                                id="exampleModalLabel">
                                Change
                                Profile Photo</h5>
                        </div>


                        <div class="col-md-12" style="padding:0px; position: relative;height: 56px; width: 100%;"
                            style="position: relative;overflow: hidden;display: inline-block;"
                            class="upload-btn-wrapper">
                            <p style="outline:0 ; font-weight:bold;font-size:15px; border-bottom:0.1px solid gray ;border-radius:0 ;background-color: transparent;padding-left: 0;padding-right: 0;"
                                class="btn text-primary py-3 btn-white btn-lg btn-block">Upload
                                Photo</p>
                            <form action="acc.php" id="form" method="POST" enctype="multipart/form-data">
                                <input
                                    style="cursor:pointer ;font-size: 1px;position: absolute;left: 0;top: 0;opacity: 0;width:100%;height:100%;"
                                    type="file" onchange="this.form.submit()" name="myfile" />
                            </form>
                        </div>

                        <div class="col-md-12" style="padding:0px;">

                            <form action="acc.php" method="POST">
                                <a style="z-index: 1;opacity:0;" href="?remove='remove-photo'"><button
                                        style="z-index:-1;background-color: transparent;font-size:15px;font-weight:bold;"
                                        class="btn text-danger btn-white btn-lg py-3 btn-block">Remove Current
                                        Photo
                                    </button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <hr>
        <h1 style="font-weight: bold;" class="text-bold text-success text-center">POSTS</h1>
        <div class="row">
            <?php 
            
            
            while($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="col-md-4">
                <div class="card mt-3 w-100"><?php 
                    if(is_null($row['pic'])){
                        $IMG1 = 'https://carlofarucci.com/wp-content/uploads/2016/10/como-crear-blog-2019.jpg';
                    }
                    else{
                        $IMG1 = $row['pic'];
                    }
                    ?>
                    <img class="card-img-top" style="height: 250px;" src="<?=$IMG1?>" alt="Card image cap">
                    <div class="card-body">
                        <div onclick="location.href='post.php?post=<?php echo $row['post_id']?>';" data-toggle="modal"
                            style="cursor: pointer;" data-target=".bd-example-modal-lg">
                            <h1 class="card-title font-weight-bold text-truncate"
                                style="font-family: var(--font-2);font-size:32px">
                                <?=$row['title']?>
                            </h1>
                            <p style="font-family: var(--font-3);font-size:18px" class="card-text text-muted">
                                <?= $row['post_id']?> TAG:news,life-style...</p>
                        </div>
                        <p id="p" class="mt-3 text-truncate"><?=$row['body']?></p>
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">

                                    <a href="post.php?post=<?= $row['post_id']?>"><button name="<?= $row['post_id']?>"
                                            style="border-radius:0" type="button" data-toggle="modal"
                                            data-target=".bd-example-modal-lg"
                                            class="btn px-3 py-2 bg-dark btn-outline-dark"><span
                                                class="text-warning">read-more</span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            }
            
        ?>


        </div>
    </div>
</body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</html>