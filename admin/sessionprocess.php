<?php
session_start();
require_once('../partials/connect.php');



if(isset($_POST['Login'])){

    // include("../partials/connect.php");
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $sql = "SELECT * FROM admins WHERE username='$email' AND password='$password'";
    // $results =  $connect->query($sql);
    // $final =  $results->fetch_assoc();

    //// $_SESSION['email'] = $final['username'];
    //// $_SESSION['passowrd'] = $final['password'];

    if(empty($_POST['email']) || empty ($_POST['password'])){

        header("location:adminlogin.php?Empty= Please fill the details");
         
    }else{
        $query = "SELECT * FROM admins WHERE username='".$_POST['email']."' and  password='".$_POST['password']."' ";
        $result = mysqli_query($connect,$query);

        if(mysqli_fetch_assoc($result)){
            $_SESSION['User'] =  $_POST['email'];
            header('location:adminindex2.php');
        }else{
            header('location:adminlogin.php?Invalid = Please enter correct username and Password');   
        }
    }

   
    // if($email = $final['username'] AND $password['password']){
    //     header('location:adminindex.php');
    }else{
        if(empty($_SESSION['User'])){
        header('location: adminlogin.php');
        } 
    }



 


?>