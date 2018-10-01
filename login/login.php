<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 ">
                <h2 class="text-center">Login</h2>
                <?php
                if(isset($_SESSION['error'])):
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                endif            
                ?>
                <form action="xulylogin.php" method="post" >
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" placeholder="Enter username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Password:</label>
                        <input type="password" name="password" placeholder="Enter password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="rememeber" name="remember" value="1">
                        <label for="rememeber">Remember me</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>