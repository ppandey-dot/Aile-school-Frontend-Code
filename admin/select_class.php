<?php
include('include/connection.php');

 $pidd=$_POST['datapost'];
$query="SELECT * from tbl_subject where class_id='$pidd'";
$smtp=$conn->prepare($query);
$smtp->execute();?>
<option value="">--Select Subject--</option>
<?php while ($result=$smtp->fetch()){?>

 <option value="<?php echo $result['subject_id'];?>"><?php echo $result['subject_name']; ?></option>
<?php }

?>