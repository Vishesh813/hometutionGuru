
       

<?php
	if(isset($_POST['submit']))
{     

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $number = $_POST['number'];
    $classfor =$_POST['classfor'];
     $subject =$_POST['subject'];
  $address =$_POST['address'];
    
    $email_to = 'vishesh.tiwari2427@gmail.com';//replace with your email

    $body = 'for submission';
     $header = 'From:'.$email;


$msg = "Name:".$_POST['name']."\n". 
                 "Email:".$_POST['email']."\n".
                  "Number:".$_POST['number']."\n".
		   "Wish for class:".$_POST['classfor']."\n".
		   "Subject to learn:".$_POST['subject']."\n".
		   "Address:".$_POST['address'];
		   



    if(mail($email_to, $body,$msg,$header))
{

    echo '<script>alert("Your email has been send successfully.We will contact you early")</script>';
}

   else
{

echo "oops sorry";
}
    
}  
?>
