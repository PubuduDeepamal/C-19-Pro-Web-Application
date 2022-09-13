<?php
    $host ="localhost:3308";
    $username ="root";
    $password ="";
    $dbname ="c-19vaccine";

    $conn=mysqli_connect($host,$username,$password,"$dbname");
    
    if($conn)
        {        
          echo "<font color='green'>connection ok";  
        }

    else
        {
          echo "<font color='red'>connection failed";
        }
?>