<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/03c53f4719.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Project F - Login</title>

</head>
<?php
  $user = array();
  require 'includes/dbc.inc.php';
  require 'includes/helper.php';

  if(isset($_SESSION['userID'])){
      $user = get_user_info($conn, $_SESSION['userID']);

      
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require ('includes/login_process.php');

  }
 
   

?>

<body>
    <section class="home"> 
       <a href="index.php"><i class="fas fa-home"></i></a>
    </section>
    <main>
    <div class="container">
   <header>Login</header>
     <form action="login.php" method="POST">
         <div class="input-field">
             <input type="text" name="mailuid" required>
             <label for="">Email Or Username</label>
         </div>
         <div class="input-field" >
             <input class="password" name="pwd"type="password" required>
             <span class="show">SHOW</span>
             <label for="">Password</label>
         </div>
         <div class="button">
             <div class="inner"></div>
             <button type="submit" name="login-submit">Login</button>
         </div>

     </form>
     <div class="auth">Or login with
         <div class="links">
             <div class="facebook">
                 <i class="fab fa-facebook-square"></i><span>Facebook</span>
             </div>
             <div class="google">
             <i class="fab fa-google-plus-square"></i><span>Google</span>
             </div>
         </div>
        
         <div class="signup">
             Not a member? <a href="register.php">create an account</a>
         </div>
     </div>
    </section>

    </main> 
  
</body>
<script>
 var input = document.querySelector('.password');
 var show = document.querySelector('.show');
 show.addEventListener('click',active);
 function active(){
    if(input.type === "password"){
        input.type = "text";
        show.style.color="#00C853";
        show.textContent = "HIDE";
    }else{
        input.type = "password";
        show.textContent = "SHOW";
        show.style.color="#111";

        
    }
}
</script>

</html>