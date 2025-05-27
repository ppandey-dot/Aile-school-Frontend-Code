<?php
if(isset($_POST['submit'])){
	$toEmail = "divyanshu.softlife@gmail.com";
	$subject="Request For A Perposal";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subjects=$_POST['subjects'];
	$msg=$_POST['message'];
	
	
	$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
	   $content="Name : " . $_POST['name'] . "                                         
                Email by : " . $_POST['email'] . " 
                Phone : " . $_POST['phone'] . " 
                Subject : " . $_POST['subjects'] . " 
                Message : " . $_POST['message'] . " ";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
 echo "<script>window.location.href='thanks.php';</script>";
	} else {
	print "<p class='error'>Problem in Sending Mail.</p>";
	}
} 
?>