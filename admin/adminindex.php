<?php
session_start();

if(isset($_SESSION['User'])){

  echo 'Welcome'. $_SESSION['User'].'<br>';
  include('adminindex2.php');
  //echo '<a href = "adminpartials/logout.php?"></a>';

}else{
    echo "thererererere";
    header('location: adminlogin.php');
}

  

?>