

<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
 
    <style type="text/css">
    	.recent-followers li:first-child{
    		padding-top: 0 !important;
    		background: none !important;
    	}

    	.user_chat{
    		max-height: 380px;
    		overflow: auto;
    	}
    	
    	.user_chat, .mCustomScrollbar{
    		max-height: 380px;
    		overflow: auto;
    	}
    </style>
  </head>
  <body>

  <?php include 'includes/header-main.php';?>
      
	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
			 
		<?php include 'includes/side-profile.php';?>		
	    <!--<ul class="nav flex-column flex-nowrap overflow-hidden mySidenav1 mySidenav2">
		    <li class="nav-item">
		        <a class="nav-link" href="fnc-dashboard.php"><span class="d-inline"><i class="fa fa-briefcase pr-2" aria-hidden="true"></i> FnC Projects</span></a>
		    </li>

		    <li class="nav-item">
		        <a class="nav-link" href="fnc-workspeace.php"><span class="d-inline"><i class="fa fa-briefcase pr-2" aria-hidden="true"></i> FnC Work Space</span></a>
		    </li>
		 </ul>-->
		<?php include 'includes/side-menu.php';?>
		<hr>
		<?php include 'includes/side-followers.php';?>  
			 
		</div>
		
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Fnc Dashbord</h2>
					<!--<div class="pull-right store_btn">	
    					<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My FnC <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="fnc-dashboard.php">FnC Project</a>
                            <a class="dropdown-item" href="fnc-workspeace.php">fnC Workspce</a>
                            <a class="dropdown-item" href="fnc.php">View All fnC</a>
                          </div>
                        </div>
                    </div>-->
				</div>
			</div>
			
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="groups-tab" data-toggle="pill" href="#cmled-project" role="tab" aria-controls="network-groups" aria-selected="true">Completed Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="connected-tab" data-toggle="pill" href="#crnd-project" role="tab" aria-controls="network-connected" aria-selected="false">Current Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="following-tab" data-toggle="pill" href="#upcming-project" role="tab" aria-controls="network-following" aria-selected="false">Upcoming Projects</a>
				  </li>
				</ul>
				<div class="tab-content pad-10" id="villa-tabContent">
					<div class="tab-pane fade show active" id="cmled-project" role="tabpanel" aria-labelledby="network-groups">
						<div class="row">
            				<div class="col-md-12 pad-bot-15">
            					<div class="os_card border-0">
            						<div class="os_card_body projects">
            							<div class="row projects_titile_row">
            								<div class="col-md-4 col-sm-4">
            									<h5>Project Name</h5>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<h5>Progress</h5>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<h5>Members</h5>
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="crnd-project" role="tabpanel" aria-labelledby="network-recommend">
						<div class="row">
            				<div class="col-md-12 pad-bot-15">
            					<div class="os_card border-0">
            						<div class="os_card_body projects">
            							<div class="row projects_titile_row">
            								<div class="col-md-4 col-sm-4">
            									<h5>Project Name</h5>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<h5>Progress</h5>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<h5>Members</h5>
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="upcming-project" role="tabpanel" aria-labelledby="network-following">
						<div class="row">
            				<div class="col-md-12 pad-bot-15">
            					<div class="os_card border-0">
            						<div class="os_card_body projects">
            							<div class="row projects_titile_row">
            								<div class="col-md-4 col-sm-4">
            									<h5>Project Name</h5>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<h5>Progress</h5>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<h5>Members</h5>
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<hr class="mt-0" />
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-4 col-sm-4 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5>Vikram 3 New Project</h5>
            											<p>Everyone realizes why a new <a href="#">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li><img src="images/recent-followers1.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            											<li><img src="images/recent-followers5.png" alt=""></li>
            											<li><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="row">
				<div class="col-md-6 col-sm-6 pad-bot-15">
					<div class="os_card">
						<div class="os_card_head">
							<h4>Schedule</h4>
							<div class="notification_dropdown os_dropdown">
								<div class="dropdown">					  
									<a href="#" class="dropdown-toggle dropdown-dots ft-12" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">Today <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">Action</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <a class="dropdown-item" href="#">Something else here</a>
								  </div>
								</div>
							</div><br clear="all">
						</div>
						<div class="os_card_body mCustomScrollbar">
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">Group Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">Group Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">Group Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">Box Office: Vijay starrer Beast Final Worldwide Business Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">KGF Chapter 3 might release date discussion director's</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">Box Office: Vijay starrer Beast Final Worldwide Business Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark">KGF Chapter 3 might release date discussion director's</p>		
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 pad-bot-15">
					<div class="os_card">
						<div class="os_card_head">
							<h4>To Do List</h4>
							<div class="notification_dropdown os_dropdown">
								<div class="dropdown">					  
									<a href="#" class="dropdown-toggle dropdown-dots ft-12" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">All Priority <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#">All Priority</a>
								    <a class="dropdown-item" href="#">Low</a>
								    <a class="dropdown-item" href="#">High</a>
								  </div>
								</div>
							</div><br clear="all">
						</div>
						<div class="os_card_body">
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb1"><label for="cb1"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb4"><label for="cb4"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb6"><label for="cb6"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">High</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="checkbox_left">
										<input type="checkbox" id="cb7"><label for="cb7"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 pad-bot-15">
					<div class="os_card">
						<div class="os_card_head">
							<h4>Notifications</h4>
							<br clear="all" />
						</div>
						<div class="os_card_body notificationscard">							
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="logo_round logo_round-40 mt-2">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h5>Your order is placed</h5>
									<p>Everyone realizes why a new common language would</p>
									<span>15 Nov 2022  |  Francisco</span>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="logo_round logo_round-40 mt-2">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h5>Your order is placed</h5>
									<p>Everyone realizes why a new common language would</p>
									<span>15 Nov 2022  |  Francisco</span>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round logo_round-40 mt-2">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h5>Your order is placed</h5>
									<p>Everyone realizes why a new common language would be desirable</p>
									<span>15 Nov 2022  |  Francisco</span>		
								</div>
							</div>





						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 pad-bot-15">
					<div class="os_card">
						<div class="os_card_head">
							<h4>Activity</h4>
							<br clear="all" />
						</div>
						<div class="os_card_body notificationscard">							
							<div class="row">
								<div class="col-md-12 activity_list">
									<ul>
										<li>
											<span>15 Nov 2022</span>
											<p>Responded to need "Volunteer Activities </p>
										</li>
										<li>
											<span>15 Nov 2022</span>
											<p>Responded to need "Volunteer Activities </p>
										</li>
										<li>
											<span>15 Nov 2022</span>
											<p>Responded to need "Volunteer Activities </p>
										</li>
										<li>
											<span>15 Nov 2022</span>
											<p>Responded to need "Volunteer Activities </p>
										</li>
										<li>
											<span>15 Nov 2022</span>
											<p>Responded to need "Volunteer Activities </p>
										</li>
										<li>
											<span>15 Nov 2022</span>
											<p>Responded to need "Volunteer Activities </p>
										</li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
			    <div class="col-md-6 col-sm-6 pad-bot-15">
					<div class="calender_outer mt-0">
						<div class="widget-header d-block">
							<h5 class="pull-left">Notes</h5>
							<div class="pull-right addnotes">
								<!-- <a href="#" data-toggle="modal" data-target="#addnotes_box" class="ft-14">Add Notes <img src="images/os-addnotes.png"></a> -->
								<a href="#" data-toggle="modal" data-target="#addnotes" class="ft-14">Add Notes <img src="images/os-addnotes.png"></a>
							</div>
							<br clear="all" />
						</div>
						<div class="user_chat">
							<div class="notes_text pad-15 align-items-center">
								<p>Project discussion with director </p>
								<span>Personal</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pad-15 align-items-center">
								<p>Marketing coordinator </p>
								<span>Task</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pad-15 align-items-center">
								<p>Project discussion with director </p>
								<span>Personal</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pad-15 align-items-center">
								<p>Marketing coordinator </p>
								<span>Work</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pad-15 align-items-center">
								<p>Project discussion with director </p>
								<span>Friends</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pad-15 align-items-center">
								<p>Marketing coordinator </p>
								<span>Personal</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
						</div>
					</div>
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-12">
					<div class="others-profile_ospage">			
						<div class="row">
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-2">
									<?php include 'includes/right-calender-schulde.php'; ?>
								</div>
							</div>
							
							
							<div class="col-sm-6 pad-bod-30">
							    <div class="row">
                    				<div class="col-md-12 pad-bot-10 pad-top-20 page-head">
                    					<h2 class="text-black">Contacts</h2>
                    				</div>
                    			</div>
                    			<div class="row">
                    				<?php include 'includes/right-contactus-lists.php';?>
                    			</div>
							</div>
							
							
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-2">
									<div class="widget-header d-block">
										<h5 class="pull-left">Steven <span class="online_status">.</span></h5>
										<div class="pull-right user_chattitle">
											<ul>
												<li><a href="#"><img src="images/os-search.png"></a></li>
												<li><a href="#"><img src="images/os-setting.png"></a></li>
												<li>
													<div class="notification_dropdown os_dropdown with-auto pt-0">
														<div class="dropdown">					  
															<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-1" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a class="dropdown-item" href="#">Today</a>
														    <a class="dropdown-item" href="#">This Weeek</a>
														    <a class="dropdown-item" href="#">This Month</a>
														  </div>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<br clear="all" />
									</div>
									<div class="pad-15  title_txt">
										<div class="user_chat">
											<p class="ft-12 text-center">Today</p>
											<div class="comments_l pad-bot-15">
												<div class="comments_txt">
													<p class="comments_name">Steven Franklin</p>
													<p class="comments">Hello !</p>
													<p class="comment_time">10:00 am</p>
												</div>
												<div class="comments_action pr-3">
													<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
														<div class="dropdown">					  
															<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a class="dropdown-item" href="#">Edit</a>
														    <a class="dropdown-item" href="#">Delete</a>
														  </div>
														</div>
													</div>
												</div>
												<br clear="all" />
											</div>
											<div class="comments_l pad-bot-15">
												<div class="comments_action pr-3">
													<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
														<div class="dropdown">					  
															<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots">...</div></a>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a class="dropdown-item" href="#">Edit</a>
														    <a class="dropdown-item" href="#">Delete</a>
														  </div>
														</div>
													</div>
												</div>
												<div class="comments_txt text-right">
													<p class="comments_name">Bibin Mathew</p>
													<p class="comments">& Next meeting tomorrow 10.00AM</p>
													<p class="comment_time">10:00 am</p>
												</div>
												<br clear="all" />
											</div>
											<div class="comments_l pad-bot-15">
												<div class="comments_txt">
													<p class="comments_name">Steven Franklin</p>
													<p class="comments">Hello !</p>
													<p class="comment_time">10:00 am</p>
												</div>
												<div class="comments_action pr-3">
													<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
														<div class="dropdown">					  
															<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a class="dropdown-item" href="#">Edit</a>
														    <a class="dropdown-item" href="#">Delete</a>
														  </div>
														</div>
													</div>
												</div>
												<br clear="all" />
											</div>
											<div class="comments_l pad-bot-15">
												<div class="comments_action pr-3">
													<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
														<div class="dropdown">					  
															<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots">...</div></a>
														  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														    <a class="dropdown-item" href="#">Edit</a>
														    <a class="dropdown-item" href="#">Delete</a>
														  </div>
														</div>
													</div>
												</div>
												<div class="comments_txt text-right">
													<p class="comments_name">Bibin Mathew</p>
													<p class="comments">& Next meeting tomorrow 10.00AM</p>
													<p class="comment_time">10:00 am</p>
												</div>
												<br clear="all" />
											</div>
										</div>
										<div class="comments_row pad-bot-15 mt-3">
											<div class="comments_box">
												<input type="text" name="" class="comment_text-box" placeholder="Enter Message...">
												<ul>
													<li>
														<a href="#"><img src="images/os-smile.png"></a>
													</li>
													<li>
														<a href="#"><img src="images/os-images.png"></a>
													</li>
													<li>
														<a href="#"><img src="images/os-text-msg.png"></a>
													</li>
												</ul>
											</div>
											<button type="submit" class="sendbutton">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
										</div>
									</div>
									<br clear="all" />
								</div>
							</div>

							<div class="col-sm-6">
								<div class="row">
									<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
										<h4 class="text-black">My Workspace</h4>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="worksace">
										<div class="villa_dropdown right-25">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Action</a>
											    <a class="dropdown-item" href="#">Another action</a>
											    <a class="dropdown-item" href="#">Something else here</a>
											  </div>
											</div>
										</div>
										<img src="images/workspace1.jpg" class="img-fluid relateimg">
										<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
										<div class="worksace_propetise">
											<div class="row">
												<div class="col-md-12">
													<div class="logo_round">
														<img src="images/worklogo.png" class="img-fluid">
													</div>
													<h3>Nextiva Workspace</h3>
													<p class="ft-14">18th Main Road, Anna Nagar, Chennai</p>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-12">
													<div class="morevides work-followers">
														<ul class="recent-followers pl-0">
															<li>+5</li>
															<li><img src="images/recent-followers1.png" alt=""></li>
															<li><img src="images/recent-followers4.png" alt=""></li>
															<li><img src="images/recent-followers5.png" alt=""></li>
														</ul>
													</div>
													<div class="total_review">
														<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
													</div>
												</div>								
											</div>
										</div>								
										</div>
									</div>
								</div>
							</div>


							
						</div>
					</div>
				</div>
			</div>

		</div>



		<div class="others-profile-right">			
			<div class="row">
				<div class="col-md-12 pad-bot-30 pad-top-50">
					<div class="calender_outer">
					    <div class="widget-header d-block">
					        <h5>Hire Me</h5>
					    </div>
					    <div class="pad-15">
					        <div class="row">
					            <div class="col-md-12">
					                <img src="images/fnc-edit-file.png" class="pr-2" width="32" /> Full Time Job <img src="images/fnc-check-mark.png" class="pull-right" width="25" />
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12">
					                <hr />
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12">
					                <img src="images/fnc-task.png" class="pr-2" width="32" /> Freelance / Project <img src="images/fnc-check-mark.png" class="pull-right" width="25" />
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12">
					                <hr />
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12">
					                <a href="#" class="btn btn-normal btn-block text-center"><i class="fa fa-envelope" aria-hidden="true"></i> Edit Availability</a>
					            </div>
					        </div>
					        
					    </div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-30 ">
					<div class="calender_outer mt-2">
						<?php include 'includes/right-calender-schulde.php'; ?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-10 pad-top-20 page-head">
					<h2 class="text-black">Contacts</h2>
				</div>
			</div>
			<div class="row">
				<?php include 'includes/right-contactus-lists.php';?>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer">
						<div class="widget-header d-block">
							<h5 class="pull-left">Steven <span class="online_status">.</span></h5>
							<div class="pull-right user_chattitle">
								<ul>
									<li><a href="#"><img src="images/os-search.png"></a></li>
									<li><a href="#"><img src="images/os-setting.png"></a></li>
									<li>
										<div class="notification_dropdown os_dropdown with-auto pt-0">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-1" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Today</a>
											    <a class="dropdown-item" href="#">This Weeek</a>
											    <a class="dropdown-item" href="#">This Month</a>
											  </div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<br clear="all" />
						</div>
						<div class="pad-15  title_txt">
							<div class="user_chat">
								<p class="ft-12 text-center">Today</p>
								<div class="comments_l pad-bot-15">
									<div class="comments_txt">
										<p class="comments_name">Steven Franklin</p>
										<p class="comments">Hello !</p>
										<p class="comment_time">10:00 am</p>
									</div>
									<div class="comments_action pr-3">
										<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Edit</a>
											    <a class="dropdown-item" href="#">Delete</a>
											  </div>
											</div>
										</div> 
									</div>
									<br clear="all" />
								</div>
								<div class="comments_l pad-bot-15">
									<div class="comments_action pr-3">
										<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Edit</a>
											    <a class="dropdown-item" href="#">Delete</a>
											  </div>
											</div>
										</div>
									</div>
									<div class="comments_txt text-right">
										<p class="comments_name">Bibin Mathew</p>
										<p class="comments">& Next meeting tomorrow 10.00AM</p>
										<p class="comment_time">10:00 am</p>
									</div>
									<br clear="all" />
								</div>
								<div class="comments_l pad-bot-15">
									<div class="comments_txt">
										<p class="comments_name">Steven Franklin</p>
										<p class="comments">Hello !</p>
										<p class="comment_time">10:00 am</p>
									</div>
									<div class="comments_action pr-3">
										<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Edit</a>
											    <a class="dropdown-item" href="#">Delete</a>
											  </div>
											</div>
										</div>
									</div>
									<br clear="all" />
								</div>
								<div class="comments_l pad-bot-15">
									<div class="comments_action pr-3">
										<div class="notification_dropdown os_dropdown with-auto pt-0 pull-left">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Edit</a>
											    <a class="dropdown-item" href="#">Delete</a>
											  </div>
											</div>
										</div>
									</div>
									<div class="comments_txt text-right">
										<p class="comments_name">Bibin Mathew</p>
										<p class="comments">& Next meeting tomorrow 10.00AM</p>
										<p class="comment_time">10:00 am</p>
									</div>
									<br clear="all" />
								</div>
							</div>
							<div class="comments_row pad-bot-15 mt-3">
								<div class="comments_box">
									<input type="text" name="" class="comment_text-box" placeholder="Enter Message...">
									<ul>
										<li>
											<a href="#"><img src="images/os-smile.png"></a>
										</li>
										<li>
											<a href="#"><img src="images/os-images.png"></a>
										</li>
										<li>
											<a href="#"><img src="images/os-text-msg.png"></a>
										</li>
									</ul>
								</div>
								<button type="submit" class="sendbutton">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
							</div>
						</div>
						<br clear="all" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">My Workspace</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="worksace">
						<div class="villa_dropdown right-25">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
						<img src="images/workspace1.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Nextiva Workspace</h3>
									<p class="ft-14">18th Main Road, Anna Nagar, Chennai</p>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers">
										<ul class="recent-followers pl-0">
											<li>+5</li>
											<li><img src="images/recent-followers1.png" alt=""></li>
											<li><img src="images/recent-followers4.png" alt=""></li>
											<li><img src="images/recent-followers5.png" alt=""></li>
										</ul>
									</div>
									<div class="total_review">
										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
									</div>
								</div>								
							</div>
						</div>								
					</div>
				</div>
			</div>


			
		</div>
		

	  </div>
	  
	  <?php include 'includes/footer.php';?>

  </body>

  


	<div class="modal fade" id="addnotes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center b-modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Notes</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form class="enquiry" action="#" method="_POST" data-parsley-validate="">
		      		<div class="popup_form">
				  			<div class="row">
				  				<div class="col-md-12">
				  					<div class="form-group">
								    	<label for="title">Title:</label>
								    	<input type="text" class="form-control big_box" id="title" aria-describedby="emailHelp"  placeholder="" required>
									</div>
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-md-12">
				  					<div class="form-group">
								    	<label for="type">type:</label>
								    	<select class="form-control big_box" id="type" required>
								    		<option value=""></option>
								    		<option value="Personal">Personal</option>
								    		<option value="Task">Task</option>
								    		<option value="Work">Work</option>
								    		<option value="Friends">Friends</option>
								    	</select>						   
									</div>
				  				</div>
				  			</div>
				  			
				  			<div class="row">
				  				<div class="col-md-12 text-right">
				  					<button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2" style="min-width: 166px;">Submit</button>
				  				</div>
				  			</div>
				  		</div>
		      	</form>
		      </div>
		     <!--  <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        
		      </div> -->
		    </div>
		  </div>
	  </div>


	  <?php include 'includes/script.php';?>
 
	<script>

		(function($){
			$(window).on("load",function(){
				
				$(".os_card_body").mCustomScrollbar({
					//theme:"minimal"
				});
				$(".user_chat").mCustomScrollbar({
					//theme:"minimal"
				});
				$(".calender_txt").mCustomScrollbar({
					//theme:"minimal"
				});
			});
		})(jQuery);

		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		
		$( init );

		function init() {
		  $( ".droppable-area" ).sortable({
			  connectWith: ".connected-sortable",
			  stack: '.connected-sortable ul'
			}).disableSelection();
		}	
	</script>
	<script>

		$(function() {
		    $('.calendar').pignoseCalendar();
		});
		
		$(document).ready(function(e){
		  "use strict";
		  $('.search-panel').each( function() {
			var to = $(this).data('search').toString();
			var text = $(this).find('[data-search="' + to + '"]').html();
			$(this).find('button span.search_by').html(text);
		  });
		  
		  $('.search-panel li a').on('click', function(e){
			var sp = $(this).closest('.search-panel');
			var to = $(this).html();
			var text = $(this).html();
			sp.data('search', to);
			console.log(sp.find('.search_by'));
			sp.find('button span.search_by').html(text);
		  });
		  
		  $(".advance-search-btn").click(function(){
			  $(".advance-search").toggleClass("show");
			  $(this).toggleClass("active");
		  });
		  
		  $(".widget-close").click(function(){
			  $(this).closest('.draggable-item').hide();
		  });	  
		  
		  $("#show-comment").click(function(){
			  $(".add-comment").toggle('slow');
		  });
		  
		  $("#replay").click(function(){
			  $("#show-replay").toggle('slow');
		  });
		  
		  $("#replayOne").click(function(){
			  $("#show-replayOne").toggle('slow');
		  });
		  
		  $("#repalyTwo").click(function(){
			  $("#show-replayTwo").toggle('slow');
		  });
		  
		  $('.counter').countUp({
				delay: 50,
				time: 5000
		  });
		  
		});
	</script>
	<script>
		
			

		$('.ad-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: true,
			  arrows: false,
			  autoplaySpeed: 4000,
			  responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 1,
						}
					},
					{
						breakpoint: 900,
						settings: {
							slidesToShow: 1,
							centerMode: true,
						}
					},
					{
					  breakpoint: 680,
					  settings: {
						  slidesToShow: 1,
						  centerMode: true,
					  }
				  },
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							centerMode: true,
						}
					},
			  ]
			});
			
			
	</script>
	<script>
		function openNav() {
		  //document.getElementById("mySidenav").style.display = "block";
		  $( "#mySidenav" ).show( "fast" );
		  $( ".leftmenu_open" ).hide( "fast" );
		  $( ".closebtn" ).show( "fast" );
		}

		function closeNav() {
		  //document.getElementById("mySidenav").style.display = "none";
		  $( "#mySidenav" ).hide( "fast" );
		  $( ".leftmenu_open" ).show( "fast" );
		  $( ".closebtn" ).hide( "fast" );
		}

		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		});
		
	</script>
</html>