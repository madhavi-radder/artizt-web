 
 <?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    <style>
        .msg-border-box{
            border: 1px solid #d9d9d9 !important;
            width:100%;
        }
        
        .fncbg{
            position:relative;
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
    </style>
  </head>
  <body>
       

  <?php include 'includes/header-main.php';?>

	  <div class="search-results-main">
		<div class="search-results-left" id="mySidenav">
			 
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
		 
			 
		</div>
		
		<div class="search-results-right">
		    <div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">FnC Works</h2>
					<div class="pull-right store_btn">	
    					<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My FnC <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="fnc-project.php">FnC Works</a>
                            <a class="dropdown-item" href="fnc-workspeace.php">Artizt Office Space</a>
                            <!--<a class="dropdown-item" href="fnc.php">View All fnC</a>-->
                          </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#currentproject" role="tab" aria-controls="pills-home" aria-selected="true">Current Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#appliedproject" role="tab" aria-controls="pills-profile" aria-selected="false">Applied Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#receivedproject" role="tab" aria-controls="pills-contact" aria-selected="false">Projects Received</a>
				  </li>
				</ul>
				<div class="tab-content pad-20 pt-0 pb-0" id="villa-tabContent">
					<div class="tab-pane fade show active" id="currentproject" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-12 pad-bot-15 pl-0 pr-0">
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
            								</div>
            								<div class="col-md-4 col-sm-4 pb-2">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Full time</span> <span class="badge badge-info mb-2">Online</span> 
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
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Freelance</span> <span class="badge badge-info mb-2">Off line</span> 
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
            									<span class="project-bar completed-25"></span>
            									<p class="mb-0 completed_per">25% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Part time</span> <span class="badge badge-info mb-2">Online</span> 
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
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Full time</span> <span class="badge badge-info mb-2">Online</span> 
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="appliedproject" role="tabpanel" aria-labelledby="pills-home-tab">
					    <div class="row">
            				<div class="col-md-12 pad-bot-15 pl-0 pr-0">
            					<div class="os_card border-0 pl-0 pr-0">
            						<div class="os_card_body projects pt-2">
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
            								</div>
            								<div class="col-md-4 col-sm-4 pb-2">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Full time</span> <span class="badge badge-info mb-2">Online</span> 
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
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Freelance</span> <span class="badge badge-info mb-2">Off line</span> 
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
            											<h5 class="line-height-20"`><a href="movie-view.php">Vikram 3 New Project</a></h5>
            											<p class="mb-0">Everyone realizes why a new </p>
            											<p class="mb-0"><a href="movie-view.php">View details</a></p>		
            										</div>
            									</div>
            								</div>
            								<div class="col-md-4 col-sm-4 pt-2 pb-2">
            									<span class="project-bar completed-25"></span>
            									<p class="mb-0 completed_per">25% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Part time</span> <span class="badge badge-info mb-2">Online</span> 
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
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Full time</span> <span class="badge badge-info mb-2">Online</span> 
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>	
					</div>
					<div class="tab-pane " id="receivedproject" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-12 pad-bot-15 pl-0 pr-0">
            					<div class="os_card border-0 pl-0 pr-0">
            						<div class="os_card_body projects pt-2">
            							<div class="row projects_titile_row pad-bot-15">
            								<div class="col-md-4 col-sm-4">
            									<h5 >Project Name</h5>
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
            								</div>
            								<div class="col-md-4 col-sm-4 pb-2">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Full time</span> <span class="badge badge-info mb-2">Online</span> 
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
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Freelance</span> <span class="badge badge-info mb-2">Off line</span> 
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
            									<span class="project-bar completed-25"></span>
            									<p class="mb-0 completed_per">25% Completed</p>
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Part time</span> <span class="badge badge-info mb-2">Online</span> 
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
            								</div>
            								<div class="col-md-4 col-sm-4">
            									<div class="morevides work-followers pl-0 pt-0">
            										<ul class="recent-followers pl-0 pb-0 mb-3">											
            											<li data-toggle="tooltip" title="Thirisha" class="pt-0"><img src="images/recent-followers1.png" alt=""></li>
            											<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers4.png" alt=""></li>
            											<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers5.png" alt=""></li>
            											<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt=""></li>
            										</ul>
            									</div>
            								</div>
            								<div class="col-md-12 pb-2">
            								    <span class="badge badge-success mb-2">Full time</span> <span class="badge badge-info mb-2">Online</span> 
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
    				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#hirefnc" role="tab" aria-controls="pills-profile" aria-selected="false">Hire for FnC</a>
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
			                <div class="col-md-2 col-6 mar-bot-20">
			                    <!--<h4 class="ft-14">Work Type</h4>
			                    <ul class="list-group polls-list-item">
								    <li class="list-group-item border-0">
                                        <div class="polls-radio">
                                          <div>
                                            <input id="blockbuster" name="" type="radio" class="open" checked>
                                              <label for="blockbuster" class="overlay">
                                               <div class="circle"></div> 
                                              </label>
                                            
                                          </div>
                                        </div>
                                        <div class="radio">
                                            <label for="blockbuster">
                                                Fulltime
                                            </label>
                                        </div>
                                    </li>
								</ul>-->
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
			                <div class="col-md-6 col-6 mar-bot-20">
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
			                <div class="col-md-2 col-6 mar-bot-20">
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
			                <div class="col-md-2 col-6 mar-bot-20">
			                    <div class="form-group">
							    	<label for="artizt_branding">&nbsp;</label>
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
			
			
		</div>



		<!--<div class="others-profile-right">
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer mt-2">
						<div class="widget-header">
							<h5>My Works</h5>
						</div>
						<div class="fnc_right pad-15">
							<p><a href="#">Project Working</a></p>
							<span>2</span><br clear="all" />
						</div>
						<div class="fnc_right pad-15 pt-2">
							<p><a href="#">Potential Project</a></p>
							<span>1</span><br clear="all" />
						</div>
						<div class="fnc_right pad-15 pt-2">
							<p><a href="#">Project Completed</a></p>
							<span>3</span><br clear="all" />
						</div>
						<div class="fnc_right pad-15 pt-2">
							<p><a href="#">Project Cancelled</a></p>
							<span>2</span><br clear="all" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12 pad-bot-30  mar-top-10">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">												
					</div>
				</div>
				<div class="col-md-12 pad-bot-30 pad-top-10 mar-top-10">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">												
					</div>
				</div>				
			</div>			
		</div>-->
	  </div>
	  
	  <?php include 'includes/footer.php';?>
    
      <div class="modal fade" id="hireus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Hire Us</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
			        <div class="row">
			            <div class="col-md-10 text-center">
			                <p class="text-dark ft-16">Sharing more details will increase your chancens of receiving a reply</p>
			            </div>
			        </div>		        
			        <div class="popup_form">
			            <div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="companyname">Company Name:</label>-->
							    	<input type="text" class="form-control big_box" id="companyname" aria-describedby="emailHelp" placeholder="Company Name">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="hirefor">Hire for:</label>-->
							    	<select class="form-control big_box" id="hirefor" placeholder="Select Hire for">
							    		<option value="">Select Hire for</option>
							    		<option value="Full Time Job">Full Time Job</option>
							    		<option value="Part Time Job">Part Time Job</option>
							    		<option value="Freelance">Freelance</option>
							    		<option value="Project Based">Project Based</option>
							    	</select>					   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="budget">Budget (&#8377;):</label>-->
							    	<input type="text" class="form-control big_box" id="budget" aria-describedby="emailHelp" placeholder="Budget (&#8377;)">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="hirefor">Time line:</label>-->
							    	<select class="form-control big_box" id="hirefor" placeholder="Time line">
							    		<option value="">Select Time line</option>
							    		<option value="Within next 3 months">Within next 15 days</option>
							    		<option value="Within next 3 months">Within next 30 days</option>
							    		<option value="Within next 3 months">Within next 3 months</option>
							    		<option value="Within next 3 months">Within next 6 months</option>
							    		<option value="Within next 3 months">Within next 1 Year</option>
							    	</select>					   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="msg">Message:</label>-->
							    	<textarea class="big_box msg-border-box" placeholder="Message" id="msg"></textarea>
							    							   
								</div>
			  				</div>
			  			</div>
			        </div>
			      <div class="modal-footer d-block text-center">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2 w-150">Send Enquiry</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>
    
    
  </body>
   
  <?php include 'includes/script.php';?>
  
	<script>
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
	    (function($){
			$(window).on("load",function(){
				
				$(".os_card_body").mCustomScrollbar({
					//theme:"minimal"
				});
				
			});
		})(jQuery);

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
		
		$('.addnew').on('click', '.clone-row', function() {
		    alert("test");
          $('.clone-row').closest('.addnew').find('.clone-row').first().clone().appendTo('.new-row');
        });	

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
	    $('.wrapper').on('click', '.clone', function() {
          $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
        });
	
	
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
		  $('.js-example-basic-multiple').select2({
            placeholder: "Search your Industry",
            //allowClear: true
          });
		});
		
		
		
	</script>
</html>