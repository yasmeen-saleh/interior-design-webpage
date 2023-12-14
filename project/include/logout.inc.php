<?php
session_start();// you need to have it start to end it
session_unset(); ///delet all sessions valus
session_destroy();
header("Location: ../index.php");    //return to the index
exit(); ///logs user out of the account and destroy the session