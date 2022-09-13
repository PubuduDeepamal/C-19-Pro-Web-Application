<?php
        include("Connecting.php");
        error_reporting(0);

       $niccontact=$_GET['nc'];

       $query = "DELETE FROM dregister WHERE niccontact = '$niccontact'";
       
       $data = mysqli_query($conn,$query);

       if($data)
       {
            echo "<font color='green'> Record Deleted from Database";
       }
       else
       {
            echo "<font color='red'> faild to Delet Record from Database";
       }

?>