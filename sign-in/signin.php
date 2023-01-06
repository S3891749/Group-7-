<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <script src="https://kit.fontawesome.com/f6af0088ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signout">
                <form method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" value="" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="password" placeholder="Password" name="password" value="" required>
                    </div>
                    <div class="submit">
                    <input type="submit" name="submit" value="LOGIN"><br>
                </div>
                </form>

            </div>
        </div>
        <div class="panels-container">
            <div class="panel leftcontainer">
                <div class="content">
                    <p>Welcome to HEALTHY WEB</p>
                </div>
                <img src="../images/1.png" class="image" alt="btn" >
            </div>
        </div>
    </div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $error = "";
    $success = "";

    if (isset($_POST["submit"])){
        if($uname == "admin") {
            if($pass == "Password01"){
                $error = "";
                $success = "welcome admin";
                header("location:http://127.0.0.1:5500/homepage/index.html");
            }
            else{
                $error = "invalid password";
                $success = "";
            }
        }
        else{
            $error = "invalid username";
            $success = "";
        }
    }
}

?>