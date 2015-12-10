<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Highland Artexing and Decorating | Thank you for your enquiry</title>
  <!-- Meta description START -->
  <meta name="description" content="Chancery House Bed and Breakfast offers a warm welcome to all of it's guests wishing to escape to North Devon and Exmoor">
  <!-- Meta description END -->
  <!-- Meta keywords START -->
  <meta name="keywords" content="Exmoor Bed and Breakfast, Chancery House Bed and Breakfast, B and B North Devon, Bed and Breakfast near South Molton, accommodation exmoor, friendly accommodation North Devon">
  <!-- Meta keywords END -->
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="10">

<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,700,600italic,700italic' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.container {
	width: 70%;
	margin: auto;
	line-height: 26px;
}
.container .message {
	text-align: center;
	padding-top: 60px;
}
.container .message h5 {
	font-family: 'Crimson Text', Georgia, Times New Roman, Times, serif;
	font-size: 18px;
	color: #000000;
}
.container .message h5 a {
	font-family: 'Crimson Text', Georgia, Times New Roman, Times, serif;
	font-size: 18px;
	color: #2f6871;
	text-decoration: underline;
}

-->
</style>

<?PHP 
$to = "matthewtapp01@gmail.com"; 
$subject = "Website enquiry form";
$headers = "From: Website";
$forward = 0;
$location = "";

$date = date ("l, F jS, Y"); 
$time = date ("h:i A"); 



$msg = "Below is a completed website enquiry form. It was submitted on $date at $time.\n\n"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}
else {
	foreach ($_GET as $key => $value) { 
		$msg .= ucfirst ($key) ." : ". $value . "\n"; 
	}
}

mail($to, $subject, $msg, $headers); 
if ($forward == 1) { 
    header ("Location:$location"); 
} 
else { 
    echo " "; 
} 

?>

<body>

	<!-- Content START -->
	<div class="container">
		<div class="message">
			<h5>Thank you for submitting your enquiry form. Please <a href="index.html" target="_self">click here</a> to go back to the website homepage. We will be in touch with you as soon as we can.</h5>
		</div>
	</div>
	<!-- Content END -->

</body>
</html>
