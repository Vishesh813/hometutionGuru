<?php
if (isset($_POST['submit']))
{
	 
	require('fpdf17/fpdf.php');
	
	     $name =  $_POST['names'];
		 $email =$_POST['email'];
		 $City =$_POST['City'];
		 $Qualification = $_POST['Qualification'] ;
         $number = $_POST['number'];
		 $payment = $_POST['payment'];
	    $date = $_POST['date'];
		
	$ID =  $_POST['ID'];
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);




$pdf->Image('images/Tulips.jpg',5,5,18);



//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(0,10,'Technoshapions::Enhance technical skills',0,1,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(25,5,"DATE:",1,0,'');
$pdf->Cell(40,5,"$date",1,1);

$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');





$pdf->Cell(35,5,"Registration ID:",1,0,'CS');
$pdf->Cell(30,5,"$ID",1,0,'C');



$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');



$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');




$pdf->Cell(100,10,"NAME:",0,0,'C');
$pdf->Cell(50,10,"$name",0,1,'C');

$pdf->Cell(100,10,"EMAIL:",0,0,'C');
$pdf->Cell(50,10,"$email",0,1,'C');

$pdf->Cell(100,10,"City:",0,0,'C');
$pdf->Cell(50,10,"$City",0,1,'C');


$pdf->Cell(100,10,"Date:",0,0,'C');
$pdf->Cell(50,10,"$date",0,1,'C');

$pdf->Cell(100,10,"Mobile No.:",0,0,'C');
$pdf->Cell(50,10,"$number",0,1,'C');

$pdf->Cell(100,10,"Total Amount:",0,0,'C');
$pdf->Cell(50,10,"100*(non-refundable)",0,1,'C');

$pdf->Cell(100,10,"Payement Status:",0,0,'C');
$pdf->Cell(50,10,"$payment",0,1,'C');


$pdf->Cell(0,30,'',0,1,'C');
$pdf->Cell(0,10,'',0,1,'C');


$pdf->Cell(100,5,'1.It is provisional registration.',1,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(176,5,'2.Candidate has to pay rest 600/- at venue two hour before the starting of workshop',1,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Output();
}

?>

              /*****************************************************************************************************/

<?php
     
	 
	 if (isset($_POST['submit']))
	 {
		 $name =  $_POST['names'];
		 $email =$_POST['email'];
		 $City =$_POST['City'];
		 $Qualification = $_POST['Qualification'] ;
         $number = $_POST['number'];
		 $payment = $_POST['payment'];
		 
		 $con  = mysqli_connect('localhost','Ashutosh123','Hometution123','memberinfo_1');
		 if ($con==TRUE)
		 {
			    	 echo "wohooooo!<br> you are connected<br>";
			 
		 }
		 
$query = "INSERT INTO `workshopinvoice`(`name`, `email`, `City`, `Qualification`, `number`, `payment`) VALUES ('$name','$email','$City','$Qualification','$number ','$payment')" ;
		 $run   = mysqli_query($con,$query);
		 if($run == TRUE)
		 {
			 echo "your invoice is submited successfully";
			 
		 }
		 else
		 { echo " error in submission "; }
		 
	 }   
?>
  
  



















