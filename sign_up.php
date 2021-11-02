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
</head>

<body>
    <div class="container mt-5">

        <div class="card mx-auto" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title text-center" style="font-size:50px;font-family:var(--font-baloo)">Bango</h5>
                <div class="container">
                    <?php 
                    
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $r=mysqli_query($con,"SELECT * FROM users WHERE name = '$name'; ");
    if(mysqli_num_rows($r)){
    ?>
                    <div class="alert text-center alert-danger" role="alert">
                        <h5>Username already exists</h3>
                    </div>
                    <?php
    }
    else{
        $r=mysqli_query($con,"INSERT INTO users(name,email,pas) VALUE('$name','$email','$pass')");
        header("Location: login.php");
        

    }            
}
                ?>
                    <form action="sign_up.php" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Email " required
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="username " required
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="pass" class="form-control" placeholder="password" required
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <button type="submit" name="submit" style="padding-top: 0; padding-bottom:0;"
                            class="btn btn-primary btn-lg btn-block">Log in</button>
                        <div class="row mt-4">
                    </form>
                    <div class="col-md-5" style="padding-right: 0;">
                        <hr>
                    </div>
                    <div class="col-md-2">
                        <p class="text-muted">OR</p>
                    </div>
                    <div class="col-md-5" style="padding-left: 0;">
                        <hr>
                    </div>
                </div>



                <p class="text-center">you already have an account? <a href="login.php">Sign in</a></p>

            </div>

        </div>
    </div>

    </div>

</body>

</html>