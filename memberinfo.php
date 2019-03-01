<?php
     
	 
	 if (isset($_POST['submit']))
	 {
		 $name =  $_POST['name'];
		 $email =$_POST['email'];
		 $number =$_POST['number'];
		 $subject = $_POST['subject'] ;
         $ExperienceLocality = $_POST['ExperienceLocality'];
		 $reference = $_POST['reference'];
		 
		 $con  = mysqli_connect('localhost','root','','memberinfo');
		 if ($con==TRUE)
		 {
			    	 echo "wohooooo!<br>";
			 
		 }
		 
$query = "INSERT INTO `info`(`name`, `email`, `number`, `subject`, `ExperienceLocality`, `reference`) VALUES ('$name','$email','$number','$subject','$ExperienceLocality','$reference')" ;
		 $run   = mysqli_query($con,$query);
		 if($run == TRUE)
		 {
			 echo "your message has been send successfully";
			 
		 }
		 else
		 { echo " error "; }
		 
	 }   
?>
  
     




























