<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
if (isset($_POST["submit"])){
                  
    $resetPassLink = "localhost/salon1/pages/Creset.php";
    $subject = "informe registaion";
    $mailContent = "Dear partion, <br/> your registation is susefully";
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pfinal93@gmail.com';                     // SMTP username
    $mail->Password   = 'final1234';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('pfinal93@gmail.com', 'C-19VACCINEPRO');
    $mail->addAddress($_POST["email"]);     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $mailContent;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo"<script type='text/javascript'> alert ('Please check your e-mail, we have sent a password reset link to your registered email.');</script>";
    header("location:Home.html");
} catch (Exception $e) {
    echo"<script type='text/javascript'> alert ('Error! Email could not be sent');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	 <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta charset="UTF-8">
	
    <!-- Important to make website responsive -->	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>C-19vaccinePRO.lk</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
	
	<link rel="icon" type="image/png" href="images/goverment-hospital.png">
	
</head>

<body>

    <!-- Navbar Section Starts Here -->
	
    <section class="navbar">
	
        <div class="container">
		
            <div class="menu text-right">
			
                <ul>
				
                    <li>
                        <a href="Home.html">Home</a>
                    </li>

                    <li>
                        <a href="details.html">Vaccine Details</a>
                    </li>

                    <li>
						<a href="order.php">Register</a>
                    </li>

					<li>
                        <a href="admin.html">Admin</a>
                    </li>
					
                </ul>
				
            </div>
 
        </div>
		
    </section>

    <!-- order Section Starts Here -->
	
    <section class="-search">
	
        <div class="container">
            
            <h2 class="text-center text-white">------------Register------------</h2>

            <form action="connect.php" method="post" class="order">
                   
                <fieldset>
				
                    <legend>Personal Details</legend>
                    <div class="-label">Full Name</div>
                    <input type="text" name="full-name" id="full-name" placeholder="E.g. Pubudu Deepamal" class="input-responsive" required>
					
					<div class="-label">NIC number</div>
                    <input type="tel" name="niccontact" id="niccontact" placeholder="E.g. 2000xxxxxx" class="input-responsive" required>

                    <div class="-label">Phone Number</div>
                    <input type="tel" name="contact" id="contact" placeholder="E.g. 071xxxxxxx" class="input-responsive" required>

                    <div class="-label">Email</div>
                    <input type="email" name="email" id="email" placeholder="E.g. pubududeepamal@gmail.com" class="input-responsive" required>
					

						<label class="-label">Gender</label> 
						<div>
							<br>
						  <label for="male" class="radio-inline"
							><input
							  type="radio"
							  name="gender"
							  value="m"
							  id="male"
							/>Male</label
						  >
						  <label for="  female" class="radio-inline"
							><input
							  type="radio"
							  name="gender"
							  value="f"
							  id="female"
							/>Female</label
						  >
						  <label for="others" class="radio-inline"
							><input
							  type="radio"
							  name="gender"
							  value="o"
							  id="others"
							/>Others</label
						  >
						</div>

						<br>
						
					<div class="-label">DOB</div>
                    <input type="date" class="input-responsive" name="DOB" required>

                    <div class="-label">Address</div>
                    <textarea name="address" rows="10" id="address" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit"  value="Register Now" class="btn btn-primary">
							
                </fieldset>

            </form>

        </div>
		
    </section>
	
	<!-- order Section End Here -->
    
	<br><br><br><br><br><br>

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