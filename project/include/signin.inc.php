<?php

if(isset($_POST['signin-submit'])){     //makes sure this page only exectuted if the user press signup button
    
    require 'cont.inc.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];
$passConf = $_POST['password-conf'];




if(empty($firstname)|| empty($lastname)|| empty($email)|| empty($username)|| empty($pass)|| empty($passConf)){   //check if a filed is empty
header("Location: ../signin.php?error=emptyfileds&firstname= ".$firstname ."&lastname=". $lastname . "&email=". $email . "&username=".$username ); ///return the other fileds information
exit();


}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){    //check if email or username is wrong or invalid
    header("Location: ../signin.php?error=invalidusernamemail&firstname= ".$firstname ."&lastname=". $lastname); //reurn the other filed infor excpt for the invaild once 
    exit();


}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {    ///preprapared email checker for validation
 header("Location: ../signin.php?error=invalidmail&firstname= ".$firstname ."&lastname=". $lastname . "&username=".$username );//reurn the other filed infor excpt for the invaild once
 exit();


}elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {    ///chech if username is valid and has one of these charcters
    header("Location: ../signin.php?error=invalidusername&firstname= ".$firstname ."&lastname=". $lastname . "&mail=". $email  );//reurn the other filed infor excpt for the invaild once
    exit();


   }elseif( $pass<8){   ///check if password is too short
    header("Location: ../signin.php?error=shortpassword&firstname= ".$firstname ."&lastname=". $lastname . "&mail=". $email . "&username=".$username );//reurn the other filed infor excpt for the invaild once
    exit();


   }elseif($pass!==$passConf){   ///check if password and password repation are the same
    header("Location: ../signin.php?error=passwordcheck&firstname= ".$firstname ."&lastname=". $lastname . "&mail=". $email . "&username=".$username );//reurn the other filed infor excpt for the invaild once
    exit();

   }else{   ///check if the username is already used 
    $sql="select username from users0 where username=?";     ///we don't use direct variable because its not safe 
    $stmt=mysqli_stmt_init($con);    //checking for conncetion

    if(!mysqli_stmt_prepare($stmt,$sql)){    //checking if the intilization worked or not
        header("Location: ../signin.php?error=sqlerror" );//reurn the other filed infor excpt for the invaild once
        exit();
    }else{// initalizing a varible so that it can be used insted of direct one 
        mysqli_stmt_bind_param($stmt,"s",$username);   /// sends the data from the user to the database in an increpted way s=string i= intger d=double b=bool
        mysqli_stmt_execute($stmt); ///run
        mysqli_stmt_store_result($stmt);    //stors the result 
        $resultCheck=mysqli_stmt_num_rows($stmt);    //checks the number of row in which the name of the user appered in 
                                                     //if 1 it already exist if 0 it desent exist

        if($resultCheck>0){
            header("Location: ../signin.php?error=usernametaken&firstname= ".$firstname ."&lastname=". $lastname . "&mail=". $email  );
            exit();

        }else{
            $sql= "INSERT INTO users0(firstname , lastname, email ,	username , password) values(? ,? ,? ,? ,?);";
            $stmt=mysqli_stmt_init($con);    //connction 
    if(!mysqli_stmt_prepare($stmt,$sql)){    //checking if the intilization worked or not
        header("Location: ../signin.php?error=sqlerror" );//return the other filed infor excpt for the invaild once
        exit();

        }else{
            $hashedpass= password_hash($pass,PASSWORD_DEFAULT);     //increpting passwords

            mysqli_stmt_bind_param($stmt,"sssss",$firstname , $lastname , $email , $username , $hashedpass);   /// sends the data from the user to the database in an increpted way s=string i= intger d=double b=bool
            mysqli_stmt_execute($stmt); ///run
            header("Location: ../login.php?signup=success" );  //return success when all data is trasfered to data base and return user to index page
        exit();
        }

            
        }
        
    }



   }
mysqli_stmt_close($stmt);   //close statment
mysqli_close($con);     //close connction

 }else{ //in case the user gained accsses to this page they would be send to the sign up page 
    header("Location: ../signin.php");
    exit();
 }



