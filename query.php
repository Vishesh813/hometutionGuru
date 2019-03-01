<?php
     
	  

	  /*if (isset($_POST['submit']))
{
	 $name =  $_POST['name'];
		 $email =$_POST['email'];
		 $contact = $_POST['contact'];
		 $msg = $_POST['msg'] ;
	
	
	require('fpdf17/fpdf.php');
	
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(0,10,'DETAILS',1,1,'C');
$pdf->Cell(0,10,'',0,1,'C');
$pdf->Cell(100,10,"NAME:",0,0,'C');
$pdf->Cell(50,10,"$name",0,1,'C');

$pdf->Cell(100,10,"EMAIL:",0,0,'C');
$pdf->Cell(50,10,"$email",0,1,'C');

$pdf->Cell(100,10,"CONTACT:",0,0,'C');
$pdf->Cell(50,10,"$contact",0,1,'C');

$pdf->Cell(100,10,"MSG:",0,0,'C');
$pdf->Cell(50,10,"$msg",0,1,'C');

$pdf->Output();
}  */
  
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