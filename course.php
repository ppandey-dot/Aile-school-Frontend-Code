<?php
include('alias_admin/include/connection.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&amp;family=Open+Sans:wght@400;700&amp;family=Roboto+Slab:wght@300;400;500&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/icofont/icofont.min.css">
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <!-- style sheet -->
  <link rel="stylesheet" href="css/style.css">
  <title>Aile International School</title>
  <style type="text/css">
    table tr th{
      background: #0d2c54;
      color: #fff;
      font-size: 14px;
    }
    table tr td{
      font-size: 14px;
    }
    table tr td:first-child{
      font-weight: bold;
    }
    /*color change*/
    table td{
      background-color: #f2f2f2;

    }

  </style>
</head>

<body>
  <?php include("include/header.php");?>

<section id="page-banner" class="coverup" style="background-image: url(img/backimg/page-banner.jpg); ">

    <div class="coverup">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 pl-md-0 col-10 offset-1 pl-0 offset-md-0 offset-md-0">
                    <div class="banner-content"><h2 class="text-uppercase text-white text-left pl-md-0">Curriculum</h2>
<nav aria-label="breadcrumb ml-md-0 pl-md-0">
  <ol class="breadcrumb ">
    <li class="breadcrumb-item pl-md-0"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Curriculum</li>
  </ol>

</nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="container-section" class="container-section" style="margin-top:30px;">

  <div class="container">

    <h3 class="text-center">Curriculum</h3>
    <br>


    <form method="post" action="">
      
        <br>
        <div class="col-md-12 mb-3">
                     
                  <b> <label class="control-label">CLASS</label></b>
                   <select name="class_name" id="className" class="form-control" required="required" onchange="myfunn(this.value)" >
                      <option value="">--Select Class--</option>
                      <?php 
                 $query="SELECT * from tbl_class where class_status='Active'";
                 $smtp=$conn->prepare($query);
                 $smtp->execute();
                 ?>

                 <?php while($result=$smtp->fetch()){?>

                      <option value="<?php echo $result['class_id'];?>" ><?php echo $result['class_name'];?></option>
                      <?php }?>
                    </select>
                      <br>
                    

                  </div>
        
      
     

    </form>

    <div  class="dataload">
            
            
          </div>
     

  </div>
</section>













<style>
  .big-title {

    font-size: 40px;
    color: #1f2f3c;
    font-weight: 900;
    padding-top: 10px;
  }

  .mt-6 {
    margin-top: 60px;
  }
</style>



<br><br>

<?php include("include/footer.php");?>

  <script type="text/javascript">
  function myfunn(valuedata){
   $.ajax({
         url:'select_course.php', 
         method:'post',
         data: {datapost:valuedata},
         success : function(result){
            $('.dataload').html(result);
         }
     });
    }
</script>

    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="js/script.js"> </script>
<script src="js/lightbox.js"> </script>

  </body>

</html>
