<?php
if(isset($_POST['submit'])){
	$toEmail = "divyanshu.softlife@gmail.com";
	$subject="Enquiry Form";
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$msg=$_POST['message'];
	
	
	$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
	   $content="Student name : " . $_POST['name'] . "     
	   			Fathers name : " . $_POST['fname'] . "                                     
                Email by : " . $_POST['email'] . " 
                Phone : " . $_POST['phone'] . " 
                Address : " . $_POST['address'] . " 
                Message : " . $_POST['message'] . " ";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
 echo "<script>window.location.href='thanks.php';</script>";
	} else {
	print "<p class='error'>Problem in Sending Mail.</p>";
	}
} 
?>