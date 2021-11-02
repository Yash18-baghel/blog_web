<?php 
require("function.php"); 
session_start();
$id= $_SESSION['id']; ?>
<?php require("db.php"); ?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</head>

<body>
    <!-- Large modal -->

    <?php include_once("include/nav.php");?>




    <div class="container my-5">
        <div class="row ">
            <div class="col-md-7 mr-5">
                <?php
                $id1 = $_GET['post'];
                $result = mysqli_query($con,"SELECT * FROM posts LEFT JOIN users ON users.id=posts.user_id WHERE post_id = $id1;");
                $row = mysqli_fetch_assoc($result);
                
                ?>
                <div class="row">
                    <div class="card mt-3 w-100" style="border:none;">


                        <?php 
                    if(is_null($row['pic'])){
                        $IMG1 = 'https://carlofarucci.com/wp-content/uploads/2016/10/como-crear-blog-2019.jpg';
                    }
                    else{
                        $IMG1 = $row['pic'];
                    }
                    ?>
                        <img class="card-img-top" style="height: 400px;" src="<?=$IMG1?>" alt="Card image cap">
                        <div class="card-body">
                            <h1 class="card-title font-weight-bold" style="font-family: var(--font-2);font-size:32px">
                                <?php echo $row['title'] ?></h1>
                            <div class="row">
                                <div class="col-md-6">



                                    <?php
                                    
                                    $result = mysqli_query($con,"SELECT * FROM post_cat left join cat on post_cat.cat_id=cat.cat_id  WHERE post_id = $id");
                                    
                                    while($row1 = mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                    <a href="index.php?cat=<?php echo $row1['cat_name']?>"><button
                                            style="border:none;border-radius:0;" type="button" data-toggle="modal"
                                            data-target=".bd-example-modal-lg"
                                            class="btn btn-y px-3 py-1 bg-whtie  btn-outline-dark"><span
                                                class="text-muted"><?php echo $row1['cat_name'] ?></span></button></a>

                                    <?php    
                                }
                                ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-4" style="padding-right: 0;">
                                            <h5 class="text-right"> <?php echo $row['name'] ?></h1>
                                            </h5>
                                            <?php $x = $row['date']?>

                                            <p class="d-block text-right text-muted"> <?=ptime("$x")?>
                                                </h1>
                                            </p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <img src="https://images.unsplash.com/photo-1633101735210-de279cbeb116?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM4fFM0TUtMQXNCQjc0fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p id="p" class="mt-3 "> <?php echo $row['body'] ?>
                            </p>


                            <div class="row mt-5">
                                <div class="col-md-3">
                                    <i class="fa fa-heart-o  bg-warning" style="font-size:24px;"></i>
                                </div>
                                <div class="col-md-5 d-flex justify-content-center">
                                    <p class="text-muted">comments</p>
                                </div>
                                <div class="col-md-4">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-2" style="margin:0;padding:0;">
                                            <i style="margin:0;padding:0;" class="bg-warning fa fa-facebook-f"></i>
                                        </div>
                                        <div class="col-2" style="margin:0;padding:0;">
                                            <i style="margin:0;padding:0;" href=" #"
                                                class="fa bg-warning fa-twitter"></i>
                                        </div>
                                        <div class="col-2" style="margin:0;padding:0;">
                                            <i style="margin:0;padding:0;" href=" #"
                                                class="fa bg-warning fa-dribbble"></i>
                                        </div>
                                        <div class="col-2" style="margin:0;padding:0;">
                                            <i style="margin:0;padding:0;" href=" #"
                                                class="fa bg-warning fa-instagram"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="row d-flex justify-content-start" style="padding-right: 0;">
                                        <div class="col-md-3 ">
                                            <img src="https://images.unsplash.com/photo-1633101735210-de279cbeb116?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM4fFM0TUtMQXNCQjc0fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-4" style="padding-left: 0;">
                                            <p class="d-block text-left text-muted" style="margin: 0;">prev post</p>
                                            <h5 class="text-left">name</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row d-flex justify-content-end" style="padding-right: 0;">
                                        <div class="col-md-4" style="padding-right: 0;">
                                            <p class="d-block text-right text-muted" style="margin: 0;">prev post
                                            </p>
                                            <h5 class="text-right">name</h5>
                                        </div>
                                        <div class="col-md-3 ">
                                            <img src="https://images.unsplash.com/photo-1633101735210-de279cbeb116?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM4fFM0TUtMQXNCQjc0fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php

                ?>
            </div>
            <?php
            include_once("include/sidebar.php");
            ?>
        </div>
    </div>
    <?php include_once("include/footer.php");?>
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