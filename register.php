<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/03c53f4719.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Project F Register</title>

</head>
    
<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       require ('includes/register_process.php');
    }
   


?>
<body>
    <main>
        <!-- Register Area -->
        <section id="register">
            <!-- Upload IMG Area -->
            <div id="welcome">
                <h3>Register</h3>
                <span>Register and join our community</span>
            </div>
            <div class="upload-profile-img">
                <img class="profile-img"src="assets/profile/beard.png" alt="">
                <img class="camera-icon"src="assets/camera-solid.svg" alt="">
                <span>Choose an image</span>
                <input type="file" form="reg-form"name="file" id="upload-profile">
            </div>
            <!-- END Upload IMG Area -->
            <!-- Register Form -->
            <form action="register.php" method="POST" id="reg-form" enctype="multipart/form-data">
               <div class="input-box">
                    <input type="text" name="username" required>
                    <label for="username">Username*</label>
                </div>
                <div class="input-box">
                    <input type="email" name="email" required>
                    <label for="Email">Email*</label>
                </div>
                <div class="input-box">
                    <input type="password" name="pwd" required>
                    <label for="Pwd">Password*</label>
                    
                </div>
                <div class="input-box">
                    <input type="password" name="pwdR" required>
                    <label for="PwdR">Confirm Password*</label>
                </div>
                <div class="button">
                    <div class="inner"></div>
                    <button type="submit" name="signup-submit">Register</button>
                </div>

            </form>
            <!-- END Register Form -->
                <div class="auth">Or register with
                    <div class="links">
                        <div class="facebook">
                        <i class="fab fa-facebook-square"></i><span>Facebook</span>
                    </div>
                    <div class="google">
                       <i class="fab fa-google-plus-square"></i><span>Google</span>
                    </div>
                    </div>
                     <div class="login">
                         I alredy have an <a href="login.php">account</a>
                    </div>
            </div>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="js/signup.js"></script>
      
    
   
</body>


</html>