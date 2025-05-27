<?php
$queryk="SELECT * FROM login where id='1'";
$stmtk=$conn->prepare($queryk);
$stmtk->execute();
$resultk=$stmtk->fetch();
 $pic=$resultk['img'];
 $email=$resultk['email']
?>

<div class="nav-header">
	<div class=" mr-auto text-center" style="margin-top:10px;">
          <a style="color:#ffffff;font-size: 15px;">
          	Aile International School
          	</a>

        </div>
            <a href="index.php" class="brand-logo">
				
				
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area">
																
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							
							
							
								
							<li class="nav-item align-items-center header-border"><a href="logout.php" class="btn btn-primary btn-sm">Logout</a></li>	
							<li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
											 <span class="user-img"><img class="rounded-circle" src="images/<?php echo $pic;?>" width="40" alt="Admin">
							<span class="status online"></span></span>
											</div>
											<div class="header-info">
												
												<p><?php echo $email;?></p>
											</div>
											
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<div class="card border-0 mb-0">
											<div class="card-header py-2">
												<div class="products">
													<img src="images/<?php echo $pic;?>" class="avatar avatar-md" alt="">
													<div>
													
														<span><?php echo $email;?></span>	
													</div>	
												</div>
											</div>
											<div class="card-body px-0 py-2">
												<a href="admin-profile.php" class="dropdown-item ai-icon ">
													<svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>

													<span class="ms-2">Profile </span>
												</a>
												<a href="change_password.php" class="dropdown-item ai-icon ">
													<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>

													<span class="ms-2">change password</span>
												</a>
												
												
											</div>
											<div class="card-footer px-0 py-2">
												
												<a href="logout.php" class="dropdown-item ai-icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
													<span class="ms-2">Logout </span>
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>