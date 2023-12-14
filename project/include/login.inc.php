<?php

if(isset($_POST['login-submit'])){ //makes sure this page only exectuted if the user press login button
    
    require 'cont.inc.php';
   
    $username = $_POST['username'];
    $pass = $_POST['password'];

    if( empty($username)|| empty($pass)){   //check if a filed is empty
        header("Location: ../login.php?error=emptyfileds"); //return to the log in page with error
        exit();
    
        
}else{
    $sql= "select * from users0 where username=? or email=?;";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../login.php?error=sqlerror");    // checking for connection with the database 
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"ss",$username , $username); // 
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);

        if($row=mysqli_fetch_assoc($result)){
            $passcheck=password_verify($pass,$row['password']);     //check wether the entered password mathch the one in the database
            if($passcheck==false){
                header("Location: ../login.php?error=wrongpassword");  // the password is wrong  
                exit();
             } elseif($passcheck==true){ //in case it was false (for extra security)
                session_start();
                $_SESSION['userId']=$row['id'];
                $_SESSION['userUid']=$row['username'];
                header("Location: ../index.php?login=success");    // checking for connection with the database 
                exit();

                } else{     //in case it was other then false or true (for extra security)
                    header("Location: ../login.php?error=wrongpass");     
                    exit();
                }           
        }else{
            header("Location: ../login.php?error=nouser"); /// the user is not found 
            exit();
        }
    }

}













}else{
    header("Location: ../index.php" );//return to the main page after they are loged in 
        exit();
}



