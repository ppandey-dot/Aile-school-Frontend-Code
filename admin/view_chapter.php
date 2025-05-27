<?php
include('include/connection.php');
session_start();
if(!isset($_SESSION['log-admin'])) {
    header('location: login.php');
} else {
}
?>

 <?php
$get_id=$_GET['id'];
$query2="SELECT * from tbl_chapter where chapter_id='$get_id'";
$smtp2=$conn->prepare($query2);
$smtp2->execute();
$result2=$smtp2->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Panel</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="vendor/jvmap/jquery-jvectormap.css" rel="stylesheet">
	<link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- tagify-css -->
	<link href="vendor/tagify/dist/tagify.css" rel="stylesheet">
	
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
             header start
        ***********************************-->
        <?php include("include/header.php");?>
             
        <!--**********************************
            Sidebar start
        ***********************************-->
		<?php include("include/sidebar.php");?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
       <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title"> View Chapter </h5></li>
					
				</ol>
				
			</div>

					



<div class="container-fluid">
				<div class="row">
							  
			<div class="col-xl-12 col-lg-12">
			  
			  	
				
				
			  
			  
                                <div class="basic-form">
			
			 
			                <div class="col-xl-12">
                        <div class="card dz-card" id="bootstrap-table5">
                            <div class="card-header flex-wrap d-flex justify-content-between  border-0">
								<div>
                                	<h4 class="card-title">Chapter</h4>
                                	
								</div>
								<li class="nav-item" >
										<a href="chapter.php">  <button class="btn btn-primary btn-sm " id="home-tab-4"   type="button" role="tab" aria-selected="true">Back</button></a>
									</li>
									
									
									
							</div>
                           	<!-- tab-content -->	
							<div class="tab-content" id="myTabContent-4">
								<div class="tab-pane fade show active" id="leftPosition" role="tabpanel" aria-labelledby="home-tab-4">
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table table-bordered table-responsive-sm">
												
										
												<?php 
                 $query="SELECT * from tbl_chapter where chapter_id='$get_id'" ;
                 $smtp=$conn->prepare($query);
                 $smtp->execute();
                 $result=$smtp->fetch()
                 ?>

                   <tr>    <th class="">Class</th>
                                 <?php 
				           	$classID=$result2['class'];
                            $queryw="SELECT * from tbl_class where class_id='$classID'";
                            $smtpw=$conn->prepare($queryw);
                            $smtpw->execute();
                            $resultw=$smtpw->fetch()
                            ?>
												<td class="" ><?php echo $resultw['class_name'];?></td>
                  </tr>
                  <tr>
                                           <th class="">Subject</th>
                                 <?php 
				           	$subjectID=$result2['subject'];
                            $queryw="SELECT * from tbl_subject where subject_id='$subjectID'";
                            $smtpw=$conn->prepare($queryw);
                            $smtpw->execute();
                            $resultw=$smtpw->fetch()
                            ?>
												<td class="" ><?php echo $resultw['subject_name'];?></td>
									</tr>

                              <tr>
                                   <th > Chapter No</th>
                                   <td colspan="2" class=""> <?php echo $result['chapter_no'];?></td>
                                      </tr> 

                                <tr>
                                   <th > Chapter Name</th>
                                   <td colspan="2" class=""> <?php echo $result['chapter_name'];?></td>
                                      </tr>   
                  <tr>
                                   <th > Page Start</th>
                                   <td colspan="2" class=""> <?php echo $result['page_start'];?></td>
                                      </tr>
                                      <tr>
                                   <th > Page End</th>
                                   <td colspan="2" class=""> <?php echo $result['page_end'];?></td>
                                      </tr>
									
												




										
											

												
												
												
											</table>
										
										</div>
									</div>
								</div>
							
								
							<!-- /tab-content -->		
                           
                        </div>
                    </div>
                   </div>
				 
			
			</div>
		</div>
	</div>
</div>









	
		
		
 
		
        <!--**********************************
            Footer start
        ***********************************-->
       <?php include("include/footer.php");?>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="vendor/draggable/draggable.js"></script>
	
	
	<!-- tagify -->
	<script src="vendor/tagify/dist/tagify.js"></script>
	 
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="vendor/datatables/js/jszip.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>
   
	<!-- Apex Chart -->
	
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	

	<!-- Vectormap -->
    <script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>

	
	
	
</body>
</html>









 