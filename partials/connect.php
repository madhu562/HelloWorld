<?php

$host =  "localhost";
$user =  "root";
$password = "";
$dbname = "onlinestore";

$connect = mysqli_connect($host , $user , $password ,$dbname);

//testin db connected or not
// if($connect -> mysqli_error){
//     echo "NO Connection";
// }else{
//     echo "we are good to go";
// }


?>