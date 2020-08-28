<?php

if(isset($_POST['login-submit'])){

    require 'dbc.inc.php';

    $mailuid = $_POST['mailuid'];
    $pwd = $_POST['pwd'];

    if(empty($mailuid) OR empty($pwd)){
        header("Location: login.php?error=emptyfields");
        exit();

    } else{
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: login.php?errorsqli");
          exit();

        } else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid );
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
             $pwdCheck = password_verify($pwd, $row['pwdUsers']);
             if($pwdCheck == false){
                header("Location: login.php?wrongpass");
                exit();

                } else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userID']= $row['userID'];
                    $_SESSION['userUid']= $row['uidUsers'];

                    header("Location: index.php?login=success");
                    exit();

                }

            }
            else{
                header("Location: login.php?error=nouser");
                exit();
            }
        }
    }

}

else{
    header("Location: login.php?wtf");
    exit();
}