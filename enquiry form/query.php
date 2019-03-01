<?php



if (isset($_POST['submit']))
	 {
		 $name =  $_POST['name'];
		 $email =$_POST['email'];
		 $contact = $_POST['contact'];
		 $msg = $_POST['msg'] ;
		 
		 $con  = mysqli_connect('localhost','root','','info');

		 
		 
		 $query = "INSERT INTO `info`(`name`,`email`, `contact`, `msg`) VALUES ('$name','$email','$contact','$msg')" ;
		 $run   = mysqli_query($con,$query);
		 if($run == TRUE)
		 {
			 echo "your message has been send successfully";
			 
		 }
		 else
		 { echo " error "; }
		 
	 }   
?>