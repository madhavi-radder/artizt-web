

<?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
	
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
    	
    	.badge-success{
            color: #666;
            background-color: #e5f5e9;
        }
        
        .badge-info{
            color: #666;
            background-color: #fff1e5;
        }
    	
    	.select2{
            border-radius: 5px;
            min-height: 38px;
            padding: 2px 36px 0 7px;
        }
        
        .notification_dropdown .dropdown-menu{
            top:27px !important;
        }
        
        .comments_txt{
            width:90%;
        }
        
        
    </style>
  </head>
  <body>

  <?php include 'includes/header-main.php';?>
      
	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
			 
		<?php include 'includes/side-profile.php';?>		
	    
		<?php include 'includes/side-menu.php';?>
		<hr>
		<?php include 'includes/side-followers.php';?>  
			 
		</div>
		
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">My Projects</h2>
					<a href="movie-view.php" class="pull-right btn btn-select pt-2 pb-2 ft-14">Create New Project</a>
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
            						<div class="os_card_body projects pt-2 pl-0 pr-0">
            							<div class="row projects_titile_row pad-bot-15">
            								<div class="col-md-3 col-sm-3">
            									<h5>Project Name</h5>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<h5>Progress</h5>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<h5>Members</h5>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<h5>Credits Request</h5>
            								</div>
            							</div>
            							<div class="row projects_row">
            								<div class="col-md-3 col-sm-3 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new</p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>
            										</div>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3">
            								    <h5 class="ft-14 fw-600 mt-2 d-block d-sm-none">Credits Request</h5>
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li class="p-real" data-toggle="tooltip" title="Thirisha"><span class="userrequest_acive"></span><img src="images/recent-followers1.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Andrea"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Priya Bhavani"><span class="userrequest_acive"></span><img src="images/recent-followers5.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Vijay"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
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
            								<div class="col-md-3 col-sm-3 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>
            										</div>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3">
            								    <h5 class="ft-14 fw-600 mt-2 d-block d-sm-none">Credits Request</h5>
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li class="p-real" data-toggle="tooltip" title="Thirisha"><span class="userrequest_acive"></span><img src="images/recent-followers1.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Andrea"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Priya Bhavani"><span class="userrequest_acive"></span><img src="images/recent-followers5.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Vijay"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
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
            								<div class="col-md-3 col-sm-3 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>
            										</div>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3">
            								    <h5 class="ft-14 fw-600 mt-2 d-block d-sm-none">Credits Request</h5>
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li class="p-real" data-toggle="tooltip" title="Thirisha"><span class="userrequest_acive"></span><img src="images/recent-followers1.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Andrea"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Priya Bhavani"><span class="userrequest_acive"></span><img src="images/recent-followers5.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Vijay"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
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
            								<div class="col-md-3 col-sm-3 notificationscard">
            									<div class="row">
            										<div class="col-md-12 projects_details pad-bot-15">
            											<div class="logo_round logo_round-40 mt-2">
            												<img src="images/vikram3.png" class="img-fluid">
            											</div>
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>
            										</div>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-3 col-sm-3">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-3 col-sm-3">
            								    <h5 class="ft-14 fw-600 mt-2 d-block d-sm-none">Credits Request</h5>
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li class="p-real" data-toggle="tooltip" title="Thirisha"><span class="userrequest_acive"></span><img src="images/recent-followers1.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Andrea"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Priya Bhavani"><span class="userrequest_acive"></span><img src="images/recent-followers5.png" alt=""></li>
            											<li class="p-real" data-toggle="tooltip" title="Vijay"><span class="userrequest_acive"></span><img src="images/recent-followers4.png" alt=""></li>
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
            						<div class="os_card_body projects pt-2 pl-0 pr-0">
            							<div class="row projects_titile_row pad-bot-15">
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-25"></span>
            									<p class="completed_per">25% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            									
            									
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-75"></span>
            									<p class="completed_per">75% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="completed_per">50% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-75"></span>
            									<p class="completed_per">75% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            						
            						<div class="os_card_body projects pt-2 pl-0 pr-0">
            							<div class="row projects_titile_row pad-bot-15">
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
            											<h5 class="line-height-20">Vikram 3 New Project</h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="completed_per">0% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="completed_per">0% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="completed_per">0% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="completed_per">0% Completed</p>
            									<p><a href="#" class="badge badge-warning">Hiring !</a></p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">Project Works</h2>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="groups-tab" data-toggle="pill" href="#fnc-cmled-project" role="tab" aria-controls="network-groups" aria-selected="true">Completed Works</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="connected-tab" data-toggle="pill" href="#fnc-crnd-project" role="tab" aria-controls="network-connected" aria-selected="false">Current Works</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="following-tab" data-toggle="pill" href="#fnc-upcming-project" role="tab" aria-controls="network-following" aria-selected="false">Upcoming Works</a>
				  </li>
				</ul>
				<div class="tab-content pad-10" id="villa-tabContent">
					<div class="tab-pane fade show active" id="fnc-cmled-project" role="tabpanel" aria-labelledby="network-groups">
						<div class="row">
            				<div class="col-md-12 pad-bot-15">
            					<div class="os_card border-0">
            						<div class="os_card_body projects pt-2 pl-0 pr-0">
            							<div class="row projects_titile_row pad-bot-15">
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new ds</p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            									
            									
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-100"></span>
            									<p class="mb-0 completed_per">100% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="fnc-crnd-project" role="tabpanel" aria-labelledby="network-recommend">
						<div class="row">
            				<div class="col-md-12 pad-bot-15">
            					<div class="os_card border-0">
            						<div class="os_card_body projects pt-2 pl-0 pr-0">
            							<div class="row projects_titile_row pad-bot-15">
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-25"></span>
            									<p class="mb-0 completed_per">25% Completed</p>
            									
            									<span class="project_cancelled">Cancelled</span>
            									
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-75"></span>
            									<p class="mb-0 completed_per">75% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-50"></span>
            									<p class="mb-0 completed_per">50% Completed</p>
            									<span class="project_cancelled">Cancelled</span>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-75"></span>
            									<p class="mb-0 completed_per">75% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="fnc-upcming-project" role="tabpanel" aria-labelledby="network-following">
						<div class="row">
            				<div class="col-md-12 pad-bot-15">
            					<div class="os_card border-0">
            						
            						<div class="os_card_body projects pt-2 pl-0 pr-0">
            							<div class="row projects_titile_row pad-bot-15">
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="mb-0 completed_per">0% Completed</p>
            									<span class="project_cancelled">Cancelled</span>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="mb-0 completed_per">0% Completed</p>
            									<span class="project_cancelled">Cancelled</span>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="mb-0 completed_per">0% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
            											<h5 class="line-height-20"><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-0"></span>
            									<p class="mb-0 completed_per">0% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
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
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">Project Promote</h2>
				</div>
			</div>
			
			<div class="vila-card">
			    <ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
			        <li class="nav-item">
    				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#hireme" role="tab" aria-controls="pills-home" aria-selected="true">Hire Me</a>
    				  </li>
    				  <li class="nav-item">
    				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#hirefnc" role="tab" aria-controls="pills-profile" aria-selected="false">Hire for Project</a>
    				  </li>
			    </ul>
			    <div class="tab-content pad-20" id="villa-tabContent">
			        <div class="tab-pane fade show active" id="hireme" role="tabpanel" aria-labelledby="pills-home-tab">
			            <div class="row">
			                <div class="col-md-12 text-right">
			                    <a href="javascript:void(0);" class="addnew">Add New</a>
			                </div>
			            </div>
			            <div class="row mb-2 clone-row">
			                <div class="col-md-2 col-12 mar-bot-20">
			                    
    			  					<div class="form-group">
    							    	<label for="artizt_branding">Work Type</label>
    							    	<!--<input type="text" class="form-control big_box" id="artizt_branding" aria-describedby="emailHelp" placeholder="">-->
    							    	<select class="form-control">
    							    	    <option value="">Select Work Type</option>
    							    	    <option value="Full Time">Full Time</option>
    							    	    <option value="Part Time">Part Time</option>
    							    	    <option value="freelance / Project">Freelance / Project</option>
    							    	</select>
    			  				</div>
			                </div>
			                <div class="col-md-6 col-12 mar-bot-20">
			                    <!--<h4 class="ft-14">Skill Set</h4>
			                    <ul class="skills-list pt-2">
        							<li>Script Writing</li>
        							<li>Lyricist</li>
        							<li>Actor</li>
        							<li>Art Director</li>
        							<li>Background  Artist</li><br clear="all">
        						</ul>-->
        						<label for="artizt_branding">Select skills</label>
        						<select class="js-example-basic-multiple searchfiled" name="states[]" multiple="multiple" placeholder="Select skills">
                                  <option value="Acting">Acting</option>
                                  <option value="Singing">Singing</option>
                                  <option value="Music">Music</option>
                                  <option value="Dance">Dance</option>
                                  <option value="Painting">Painting</option>
                                  <option value="Wring">Wring</option>
                                  <option value="Film Making">Film Making</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Architecture">Architecture</option>
                                  <option value="Direction">Direction</option>
                                  <option value="Script Writing">Script Writing</option>
                                  <option value="Cinematography">Cinematography</option>
                                  <option value="Choreography">Choreography</option>
                                  <option value="Production Executive">Production Executive</option>
                                  <option value="Casting Director">Casting Director</option>
                                  <option value="Dubbing Artist">Dubbing Artist</option>
                                  <option value="Makeup Artist">Makeup Artist</option>
                                  <option value="Costume Designing">Costume Designing</option>
                                  <option value="Publicity Designing">Publicity Designing</option>
                                  <option value="Audiography">Audiography</option>
                                  <option value="Outdoor Lightmen">Outdoor Lightmen</option>
                                  <option value="Studio Workers">Studio Workers</option>
                                  <option value="Production Assistance">Production Assistance</option>
                                  <option value="Cinema Drivers">Cinema Drivers</option>
                                  <option value="Junior Artist Agent">Junior Artist Agent</option>
                                  <option value="Technical unit">Technical unit</option>
                                  <option value="Production Women">Production Women</option>
                                  <option value="Junior Artist">Junior Artist</option>
                                  <option value="Graphic design">Graphic design</option>
                                  <option value="Storyboard">Storyboard</option>
                                  <option value="Editing">Editing</option>
                                  <option value="Lyricist">Lyricist</option>
                                  <option value="Stunt">Stunt</option>
                                  <option value="Art Direction">Art Direction</option>
                                  <option value="Content writers">Content writers</option>
                                  <option value="Poet">Poet</option>
                                  <option value="Fashion Modelling">Fashion Modelling</option>
                                  <option value="Photography">Photography</option>
                                  <option value="Cartoonist">Cartoonist</option>
                                  <option value="DJ">DJ</option>
                                  <option value="RJ">RJ</option>
                                  <option value="Illustration">Illustration</option>
                                  <option value="Sculpture">Sculpture</option>
                                  <option value="Miniature">Miniature</option>
                                  <option value="Standup comedian">Standup comedian</option>
                                  <option value="Youtubers">Youtubers</option>
                                  <option value="Puppetry">Puppetry</option>
                                  <option value="Tattoo artizt">Tattoo artizt</option>
                                  <option value="Magician">Magician</option>
                                  <option value="Bandwala">Bandwala</option>
                                  <option value="Card art">Card art</option>
                                  <option value="Rangoli Art">Rangoli Art</option>
                                  <option value="Street Artists">Street Artists</option>
                                  <option value="Mimicry Artist">Mimicry Artist</option>
                                  <option value="Stone Art">Stone Art</option>
                                  <option value="Micro Art">Micro Art</option>
                                  <option value="Sand Art">Sand Art</option>
                                  <option value="Gymnastic">Gymnastic</option>
                                </select>
			                </div>
			                <div class="col-md-2 col-12 mar-bot-20">
			  					<div class="form-group">
							    	<label for="artizt_branding">Promote</label>
							    	<!--<input type="text" class="form-control big_box" id="artizt_branding" aria-describedby="emailHelp" placeholder="">-->
							    	<select class="form-control">
							    	    <option value="">Select Promote Type</option>
							    	    <option value="Advertisement">Advertisement</option>
							    	    <option value="Free">Free</option>
							    	    <option value="Free">Packages</option>
							    	</select>
								</div>
			                </div>
			                <div class="col-md-2 col-12 mar-bot-20">
			                    <div class="form-group">
							    	<label for="artizt_branding" class="d-none d-sm-none d-md-block">&nbsp;</label>
							    	<!--<input type="text" class="form-control big_box" id="artizt_branding" aria-describedby="emailHelp" placeholder="">-->
							    	<input type="button" value="Submit" class="btn btn-select btn-block" />
								</div>
			                </div>
			            </div>
			            <div class="new-row"></div>
			        </div>
			        <div class="tab-pane" id="hirefnc" role="tabpanel" aria-labelledby="pills-home-tab">
			            
			        </div>
			    </div>
			</div>
            
            <div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer mt-0">
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
												<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-0 ml-2 line-height-8 " type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><div class="rodate_dots">...</div></a>
											  <div class="dropdown-menu left-dropdown" aria-labelledby="dropdownMenuButton">
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
											  <div class="dropdown-menu left-dropdown" aria-labelledby="dropdownMenuButton">
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
				<div class="col-md-12">
					<div class="others-profile_ospage">			
						<div class="row">
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-2">
									<?php include 'includes/project-calender-schulde.php'; ?>
								</div>
							</div>			
							
							<div class="col-sm-6 pad-bot-30 mar-top-50">
								<div class="calender_outer">
									<div class="widget-header d-block">
										<h5 class="pull-left">Project Notes</h5>
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
					</div>
				</div>
			</div>

		</div>



		<div class="others-profile-right">			
			
			<div class="row">
				<div class="col-md-12 pad-bot-30 pad-top-60 mt-2">
					<div class="calender_outer mt-2">
						<?php include 'includes/project-calender-schulde.php'; ?>
					</div>
				</div>
			</div>
			
			
			
			
			<!--<div class="row">
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
			</div>-->


			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer">
						<div class="widget-header d-block">
							<h5 class="pull-left">Project Notes</h5>
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
		    //$('.calendar').pignoseCalendar();
		    
		     $('.calendar').pignoseCalendar({
                disabledRanges: [
                    ['2022-08-19', '2022-08-30'], // 2017-08-01 ~ 14
                    ['2022-10-08', '2022-11-01'], // 2017-10-08 ~ 11-01
                    ['2022-12-01', '2022-12-06'], // 2017-12-01 ~ 06
                ]
            });
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
		
		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		  $('.js-example-basic-multiple').select2({
            placeholder: "Search your Industry",
            //allowClear: true
          });
		});
		
	</script>
</html>