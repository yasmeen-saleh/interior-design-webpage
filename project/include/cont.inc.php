<?php

$servername="localhost";
$dbusername="root";
$dbpass="";
$dbname="project";

$con=mysqli_connect($servername,$dbusername,$dbpass,$dbname);

if(!$con){
    die("connection failed: ".mysqli_connect_error());
}







