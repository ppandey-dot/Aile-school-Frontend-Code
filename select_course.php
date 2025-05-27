<?php
include('alias_admin/include/connection.php');
  $pidd=$_POST['datapost'];
$query="SELECT * from tbl_subject where class_id='$pidd'";
$smtp=$conn->prepare($query);
$smtp->execute();?>
 
 <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
 
   
    <div class="table-responsive">  
      <?php while ($result=$smtp->fetch()){?>

<table class="table" style="width:100%;">
  <thead>
    <tr>
      <td colspan="4" class="" style="text-align: center;" ><span><?php echo $result['subject_name']; ?></span></td>
    </tr>
    <tr>
      <th>Chapter Number</th>
      <th>Chapter Name</th>
      <th>Page Start</th>
      <th>Page End</th>
      </tr>
  </thead>
  <tbody>
    
      <?php 
                 $subjectID=$result['subject_id'];
                 $queryw="SELECT * from tbl_chapter where class='$pidd' and subject='$subjectID'";
                 $smtpw=$conn->prepare($queryw);
                 $smtpw->execute();
                 
                 ?>
                 <?php while($resultw=$smtpw->fetch()){?>
                    <tr>
      <td><?php echo $resultw['chapter_no'];?></td>
      <td><?php echo $resultw['chapter_name'];?></td>
      <td><?php echo $resultw['page_start'];?></td>
      <td><?php echo $resultw['page_end'];?></td>
      
    </tr>
    <?php }
      ?>
    

  </tbody>
</table>
<?php  }
?>
 </div>
</div>






  
</div>











  


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>


