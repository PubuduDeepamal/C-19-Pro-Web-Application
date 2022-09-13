<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>C-19vaccinePRO.lk</title>

        <link rel="stylesheet" href="css/style.css">
	
	    <link rel="icon" type="image/png" href="images/goverment-hospital.png">

        <style>

            .center
             {
                margin-left: auto;
                margin-right: auto;
            }
            
        </style>

    </head>

    <body>

     <!-- Navbar Section Starts Here -->
	
     <section class="navbar">

<div class="container">

    <div class="menu text-right">

        <ul>

            <li>
                <a href="admin.html">Logout</a>
            </li>

        </ul>
        
    </div>

</div>

</section>

        <table border="3" class="center">

            <tr>
                    <th> firstName </th> 
                    <th> niccontact </th> 
                    <th> contact </th> 
                    <th> email </th> 
                    <th> gender </th> 
                    <th> DOB </th> 
                    <th> address</th>
                    <th> Operation </th>
            </tr>

 <?php
        include("Connecting.php");

       // error_reporting(0);

        $query = "select * from  dregister";
        $data = mysqli_query($conn,$query); 
        $total = mysqli_num_rows($data);
   
     
      
     if($total !=0)
        {
            $result = mysqli_fetch_assoc($data);
            while($result = mysqli_fetch_assoc($data)) 
            {
                echo "
                <tr>
                    <td>".$result['firstName']."</td> 
                    <td>".$result['niccontact']."</td> 
                    <td>".$result['contact']."</td> 
                    <td>".$result['email']."</td> 
                    <td>".$result['gender']."</td> 
                    <td>".$result['DOB']."</td> 
                    <td>".$result['address']."</td>
                    <td><a href = 'delete1.php?nc=$result[niccontact]'>Delete</td> 
                    ";       
            }
        
        }

        else
        {
            echo "No record found";
        }
 ?>

    </table>

    <br><br><br><br><br>

    <!-- footerSection Starts Here -->
	
<div class="footer">

<div class="container"> 	

    <div class="row">
    
        <div class="footer-col-1">
        
            <h3>Download Our App</h3>
            
                <div class="app-logo">
                
                    <img src="images/play-store.png">
                    
                    <img src="images/app-store.png">
                
                </div>
            
            <p>Download App for Android and Ios mobile phobe.<br>coming soon</p>
        
        </div>
        
        <div class="footer-col-3">
            
            <h3>STAY SAFE</h3>
        
        </div>
        
        <div class="footer-col-3">
        
            <h3>Contact <br> Us</h3>
            
        <P> 011 3401920
            covid19sl20@gmail.com </P>
        
        </div>
        
        <div class="footer-col-3">
        
            <h3>Address</h3>
            
            <P> National Operation Centre 
            No 1090,
            Sri Jayawardhanapura Mawatha,
            Rajagiriya </P>
        
        </div>
        
        <div class="footer-col-4">
        
            <h3>Follow Us</h3>
            
            <ul>
            
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">YouTube</a></li>
                
            </ul>
        
        </div>
        
    </div>	

    <hr> 

    <p class="copyright">© All Rights Reserved. Designed & Developed by  <a href="#">
    1.Pubudu Deepamal / 2.Suranji Madushan / 3.Nadeesha Dilshan / 4.Dineshi Wettewa</a></p>

</div>	

</div>

<!-- footer Section Ends Here -->

 </body>

</html>

