<?php include('include/connection.php');?>
<!-- change password or forgot password update code for admin-->
<?php
if(isset($_POST['btn-save'])){
	 $old_pass=$_POST['oldmail'];
	 $new_pass=$_POST['newpass'];
	$query1="SELECT * from login  where id='1'";
	$smtp2=$conn->prepare($query1);
	$smtp2->execute();
	$result=$smtp2->fetch();
	if($old_pass == $result['password']){
    $update_query="UPDATE login set password='$new_pass' where id='1'";
    $smtp1=$conn->prepare($update_query);
	$smtp1->execute();
	$count=$smtp1->rowCount();
      if($count=='0'){
      	echo "<p style='color:red;'>Somthing is wrong please try again!</p>";
      }else{
      	echo "<p style='color:green;'>Your Password Successfully Changed!</p>";
      }
	}else{
		echo "<p style='color:red;'>Your Old Password not match Please try again!</p>";
	}
}
