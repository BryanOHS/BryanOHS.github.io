<?php 

 if(isset($_POST['signup-submit'])){

    require 'dbc.inc.php';
    require 'helper.php';

    $username = validate_text($_POST['username']);
    $email =validate_email($_POST['email']);
    $pwd = validate_text($_POST['pwd']);
    $pwdR = validate_text($_POST['pwdR']);
   
    $default = "beard.png";
 
   //Upload Img to server 
   //Get Img INFO
   $filename = $_FILES['file']['name'];
   $fileType = $_FILES['file']['type'];
   $fileError = $_FILES['file']['error'];
   $fileSize = $_FILES['file']['size'];
   $fileTmpName = $_FILES['file']['tmp_name'];
   $fileExt = explode('.', $filename);
   $fileActualExt = strtolower(end($fileExt));
   $file = $_FILES['file'];
   print_r($file);
   $source = 'assets/uploads/';
   $defaultSource = 'assets/profile/';

   if(!empty($filename)){
      //Allowed types
      $allowType = array('jpg', 'png', 'jpeg', 'gif');
      if(in_array($fileActualExt, $allowType)){
         if($fileError === 0){
            if($fileSize < 100000000){
                 $fileNameNew = uniqid('', true).".".$fileActualExt;
                 $fileDestination = $source. $fileNameNew;
                 if(move_uploaded_file($fileTmpName, $fileDestination)){
                    $profileImg = $source.$fileNameNew;                   
                 } else {
                    $profileImg = $defaultSource.$default;
                    exit();
                     
                    
                 }
            } else {
               $profileImg = $defaultSource.$default;
               exit();
            }

         } else{
            $profileImg = $defaultSource.$default;
            exit();
         }

      } else {
         $profileImg = $defaultSource.$default;
         exit();
      
     }
   } else {
      $profileImg = $defaultSource.$default;
   }

   






   if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username) ){
    header("Location: register.php?error=invalidmailuid");
    exit();
 }
 elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.php?error=invalidmail&uid=".$username);
    exit();

 } 
 elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: register.php?error=invaliduid&mail=".$email);
    exit();

 }
 elseif($pwd !== $pwdR){
    header("Location: register.php?error=passwordcheck&mail=".$email."&uid=".$username);
    exit();
 }
 else {
     $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
     $stmt = mysqli_stmt_init($conn);

     if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: register.php?error=sqlierror");
        exit();

     }
     
     else{
         mysqli_stmt_bind_param($stmt, "s", $username,);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_store_result($stmt);
         $resultCheck = mysqli_stmt_num_rows($stmt);
         if($resultCheck > 0){
            header("Location: register.php?error=usertaken&mail=".$mail);
            exit();
        
         }
         else{
             $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, imgUsers, registerDate)";
             $sql .="VALUES (?,?,?,?, NOW())";
             $stmt = mysqli_stmt_init($conn);
             if(!mysqli_stmt_prepare($stmt, $sql)){
                  header("Location: register.php?error=sqlierror");
                  exit();
         }
         else{

            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPwd, $profileImg );
            mysqli_stmt_execute($stmt);
            if(mysqli_stmt_affected_rows($stmt)==1){
               header("Location: index.php?register=success");

               session_start();

              // create session variable
              $_SESSION['userID'] = mysqli_insert_id($conn);

               exit();
            } else{

            }
          }
          
          
       }

     }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);    

}
else{

    header("Location: ../register.php");
     exit();

}



