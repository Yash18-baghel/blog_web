<?php 
require("function.php"); 
session_start();
$id= $_SESSION['id']; ?>
<?php require("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
   
}
$post_per_page = 5;
$cur_page = ($page-1) * $post_per_page;


?>

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
</head>

</head>

<body>
    <?php include_once("include/nav.php");?>


    <div class="container">
        <div
            style="background-image: url(https://images.unsplash.com/photo-1634370058530-aa11dae98721?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80);background-size: cover; background-repeat: no-repeat;  background-position:center; width:100%;height:550px;">
            <div class="px-3" style="display: flex;
                flex-direction: column;height: 100%;width: 100%;justify-content: center;align-items: center;">
                <h1 class="display-4 lead text-center " style="font-family:var(--font-baloo)">
                    welcome to
                    Bango</h1>
                <h1 class="display-2 " style=" font-family:var(--font-2)">A web site for bloggers</h1>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner mt-5 ">
            <div class="carousel-item active">
                <div class=" mx-5 row">
                    <div class="card mx-5 col-sm-5" style="border: none;width: 18rem;">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1633156583772-3c3ccee99b91?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDU3fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" class="btn   bg-dark btn-outline-dark" data-toggle="modal"
                                            data-target=".bd-example-modal-lg"><span
                                                class="text-warning">Tag</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quo est
                                        molestiae eum earum nostrum!</h3>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-muted pb-1" style="padding-bottom: 0; margin-bottom:0">30 mins
                                            ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-5  col-sm-5 " style="border: none;width: 18rem;">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1627630798554-4988f80ffc56?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDgyfHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" class="btn  bg-dark btn-outline-dark"><span
                                                class="text-warning" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">Tag</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quo est
                                        molestiae eum earum nostrum!</h3>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-muted pb-1" style="padding-bottom: 0; margin-bottom:0">30 mins
                                            ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class=" mx-5 row">
                    <div class="card mx-5 col-sm-5" style="border: none;width: 18rem;">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1633156583772-3c3ccee99b91?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDU3fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" class="btn  bg-dark btn-outline-dark"><span
                                                class="text-warning">Tag</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quo est
                                        molestiae eum earum nostrum!</h3>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-muted pb-1" style="padding-bottom: 0; margin-bottom:0">30 mins
                                            ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-5  col-sm-5 " style="border: none;width: 18rem;">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1627630798554-4988f80ffc56?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDgyfHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg"
                                            class="btn  bg-dark btn-outline-dark"><span
                                                class="text-warning">Tag</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quo est
                                        molestiae eum earum nostrum!</h3>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-muted pb-1" style="padding-bottom: 0; margin-bottom:0">30 mins
                                            ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class=" mx-5 row">
                    <div class="card mx-5 col-sm-5" style="border: none;width: 18rem;">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1633156583772-3c3ccee99b91?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDU3fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg"
                                            class="btn  bg-dark btn-outline-dark"><span
                                                class="text-warning">Tag</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quo est
                                        molestiae eum earum nostrum!</h3>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-muted pb-1" style="padding-bottom: 0; margin-bottom:0">30 mins
                                            ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-5  col-sm-5 " style="border: none;width: 18rem;">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1627630798554-4988f80ffc56?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDgyfHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg"
                                            class="btn  bg-dark btn-outline-dark"><span
                                                class="text-warning">Tag</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quo est
                                        molestiae eum earum nostrum!</h3>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-muted pb-1" style="padding-bottom: 0; margin-bottom:0">30 mins
                                            ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-warning mr-5" aria-hidden="true"></span>
            <span class="sr-only bg-danger">Previous</span>
        </a>
        <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-warning" aria-hidden="true"></span>
            <span class="sr-only bg-danger">Next</span>
        </a>
    </div>

    <div class="container my-5">
        <div class="row ">
            <div class="col-md-7 mr-5">
                <?php
                //  $result = mysqli_query($con,"SELECT * FROM posts  order by Date asc  LIMIT 0,5;");
                 $result= mysqli_query($con,"SELECT * FROM posts  order by post_id asc  LIMIT $cur_page ,$post_per_page;");
                 
                 if (isset($_GET['cat'])){   
                    $name = $_GET['cat'];    

                        $result = mysqli_query($con,"SELECT * FROM post_cat INNER JOIN posts 
                                ON posts.post_id = post_cat.post_id INNER JOIN cat
                                ON cat.cat_id = post_cat.cat_id  WHERE  cat_name = '$name';");

                }
                else if(isset($_POST['submit'])){
                    $text=$_POST['text'];
                    $result = mysqli_query($con,"SELECT * FROM POSTS WHERE title LIKE  '%$text%';");
                    if(!mysqli_num_rows($result)){
                        echo "<h1 class="."display-1".">no result found</h1>";
                    }
                    
                }
                                        
                 while ($row = mysqli_fetch_assoc($result))
                {
                ?>
                <div class="row">
                    <div class="card mt-3 w-100">

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
                            <div onclick="location.href='post.php?post=<?php echo $row['post_id']?>';"
                                data-toggle="modal" style="cursor: pointer;" data-target=".bd-example-modal-lg">
                                <h1 class="card-title font-weight-bold"
                                    style="font-family: var(--font-2);font-size:32px">
                                    <?=$row['post_id']?><?php echo $row['title'] ?>
                                </h1>
                                <p style="font-family: var(--font-3);font-size:18px" class="card-text text-muted">
                                    TAG:news,life-style...</p>
                            </div>
                            <p id="p" class="mt-3 text-truncate"><?php echo $row['body'] ?></p>
                            <p id="p" class="mt-3 text-right text-muted"><?=ptime($row['date'])?></p>
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <a href="post.php?post=<?php echo $row['post_id']?>"><button
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

                <?php 
                
                    $r = mysqli_query($con,"SELECT * from posts;");
                    $total = mysqli_num_rows($r);
                    $total_pages = ceil($total/$post_per_page);
                ?>
                <?php 
                if(isset($_GET['cat']) || isset($_POST['submit']))
                    $dis = "d-none";
                else{
                    $dis="";
                }
                ?>

                <div class="row <?=$dis?> mt-5">
                    <div class="col text-center">
                        <div class="d-flex justify-content-center">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <?php
                                        if ($page>1){
                                            $cls = "";
                                        }
                                        else{
                                            $cls = "disabled";
                                        }
                                    ?>
                                    <?php
                                        if ($page<5){
                                            $cls1="";
                                        }
                                        else{
                                            $cls1="disabled";
                                        }
                                    ?>
                                    <li class="page-item <?=$cls?>">
                                        <a class="page-link" href="?page=<?=$page-1?>" tabindex="-1">Previous</a>
                                    </li>
                                    <?php for($opage=1;$opage<=$total_pages;$opage++){
                                    
                                    ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?=$opage?>">
                                            <?=$opage?>
                                        </a></li>
                                    <?php
                                    }
                                        ?>





                                    <li class="page-item <?=$cls1?>">
                                        <a class="page-link" href="?page=<?=$page+1?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>


            </div>
            <?php
            
                    include_once("include/sidebar.php");
            
            ?>



        </div>
    </div>


    <?php
        include_once("include/footer.php");
    ?>


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