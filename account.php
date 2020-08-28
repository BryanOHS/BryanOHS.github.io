<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/03c53f4719.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    
    <link rel="stylesheet" href="css/nav.css" type="text/css">
    <link rel="stylesheet" href="css/account.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Project F</title>

</head>
<body>
<?php require 'includes/header.php';




    $user = array();    
    if(isset($_SESSION['userID'])){
        echo '<div  style="display:none"class="login-status"><p id="status">You are logged in!</p></div>';

    } else{
        echo '<div style="display:none" class="login-status"><p id="status">Log in now!</p></div>';
    }
    
    include ('includes/helper.php');
    
    $user = array();
    
    
    if(isset($_SESSION['userID'])){
        require ('includes/dbc.inc.php');
        $user = get_user_info($conn, $_SESSION['userID']);
    }
    
    ?> 
    <main>
        <section id="profile">
            <div id="profile_image">
               <div class="profileImg">
                  <img style="width:100%; height:100%;" src="<?php echo $user['imgUsers'] ?>" alt="" sizes="" srcset="<?php $user['imgUsers'] ?>">
                
                </div>
                <span>Profile Image</span>
            </div>
            <div class="user-info">
                <span>Username: <?php echo $user['uidUsers'] ?></span> <br>
                <span>Email: <?php echo $user['emailUsers'] ?></span>  <br>
                <span>Password: ********</span>
            </div>
        </section>
    </main>


  </main>

    
</body>
<script src="js/session.js"></script>
<script src="js/index.js"></script>
</html>