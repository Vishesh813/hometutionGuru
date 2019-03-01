<?php
if (isset($_POST['submit']))
{
	 
	require('fpdf17/fpdf.php');
	
	 $name=$_POST['name'];
     $number=$_POST['number'];
     $promocode=$_POST['promocode'];
     $personname=$_POST['personname'];
      
	
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);




$pdf->Image('images/Tulips.jpg',5,5,18);



//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(0,10,'Technoshapions::Enhance technical skills:referal slip',0,1,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(50,5,"NAME:",1,0,'');
$pdf->Cell(40,5,"$name",1,1);

$pdf->Cell(50,5,"NUMBER:",1,0,'');
$pdf->Cell(40,5,"$number",1,1);

$pdf->Cell(50,5,"PROMOCODE:",1,0,'');
$pdf->Cell(40,5,"$promocode",1,1);

$pdf->Cell(50,5,"REFERED PERSONS:",1,0,'');

$pdf->Cell(40,5,"$number",1,1);



$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(0,0,'',0,0,'C');
$pdf->Cell(0,10,'',0,1,'C');




$pdf->Cell(100,5,'1.Please bring this slip at time of workshop.',1,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Cell(100,5,'2.Do not share your code with anyboddy.',1,'C');
$pdf->Cell(0,10,'',0,1,'C');

$pdf->Output();
}

?>

















<?php


    session_start();

 
  $con = mysqli_connect('localhost','root','','memberinfo');  

  
   if (isset($_POST['submit']))

 {    //echo "button clicked";  

    $name=$_POST['name'];
     $number=$_POST['number'];
     $promocode=$_POST['promocode'];
     $personname=$_POST['personname'];
      
$q = "INSERT INTO `referals`( `name`, `contact`, `referal_code`, `persons_name`) VALUES ('$name','$number','$promocode','$personname')";
   
    $run = mysqli_query($con,$q);

if (  $run ==TRUE)
 {
	echo '<script>alert("run successfully")</script>';


	header('location:index.html');
}
else
{

	echo '<script>alert("oops!")</script>';
}

   
session_destroy();



    } 



?>