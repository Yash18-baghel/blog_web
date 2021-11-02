<?php $r = mysqli_query($con,"SELECT * FROM users where id = $id");
                        $row=mysqli_fetch_assoc($r); ?>
<?php 
                 if (isset($_GET['btn'])){
                    session_destroy();
                    header("Location: login.php");
                }
        ?>
<div class="container sticky-top  ">
    <nav class="navbar  navbar-expand-lg navbar-light bg-light row"
        style="background-color:transparent;font-family: var(--font-2); ">
        <div class="col-4"><a class="navbar-brand font-weight-bold" href="#"
                style="font-size:40px;font-family:var(--font-baloo)">Bango</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  pt-2" style="font-size:18px;">
                <a id="h" class="nav-item  nav-link pr-3  font-weight-bold " href="index.php">Home</a>
                <a class="nav-item  px-3 font-weight-bold nav-link" href="#">Archives</a>
                <a class="nav-item  px-3 font-weight-bold nav-link" href="#">Category</a>
                <a class="nav-item  px-3 font-weight-bold nav-link" href="#">Contact</a>
                <!-- <a class="nav-item px-3 font-weight-bold nav-link disabled" href="#">Disabled</a> -->
            </div>
        </div>
        <div class="pl-5  col-3">
            <form action="index.php" method="post">
                <input type="text" name="text" class="w-50 col-5 text-lead"
                    style="font-size:20px ; border:none; outline:none; border-bottom:1px solid black;">
                <input style="border: none; outline:none; " class="btn btn-dark col-5  px-4 m-2 mb-3" name="submit"
                    type="submit">
            </form>
        </div>
        <div class="col-3 pl-5">
            <?php 
                    if(is_null($row['profile_pic'])){
                        $IMG = 'photos/placeholder.jpg';
                    }
                    else{
                        $IMG = $row['profile_pic'];
                    }
                    ?>
            <a href="acc.php"><img style="border-radius: 50%;width: 50px;height: 50px;" src=<?=$IMG?> alt="hptp"></a>
            <a href="?btn=log_out" style="border: none; outline:none; "
                class="btn btn-danger text-whote col-5  m-2 mb-3" name="submit">Log out</a>
        </div>


    </nav>
</div>