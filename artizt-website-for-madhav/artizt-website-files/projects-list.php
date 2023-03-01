 
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
		
		<div class="search-results-right search-result-full-width">
		    <div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">My Projects</h2>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#currentproject" role="tab" aria-controls="pills-home" aria-selected="true">Completed Projects</a>
				  </li>
				  <!--<li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#appliedproject" role="tab" aria-controls="pills-profile" aria-selected="false">Current Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#receivedproject" role="tab" aria-controls="pills-contact" aria-selected="false">Upcoming Projects</a>
				  </li>-->
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="currentproject" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
            			</div>
					</div>
					<!--<div class="tab-pane" id="appliedproject" role="tabpanel" aria-labelledby="pills-home-tab">
					</div>
					<div class="tab-pane " id="receivedproject" role="tabpanel" aria-labelledby="pills-home-tab">
					</div>-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">Projects Worked</h2>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#projectworked1" role="tab" aria-controls="pills-home" aria-selected="true">Completed Projects</a>
				  </li>
				  <!--<li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#projectworked2" role="tab" aria-controls="pills-profile" aria-selected="false">Current Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#projectworked3" role="tab" aria-controls="pills-contact" aria-selected="false">Upcoming Projects</a>
				  </li>-->
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="projectworked1" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Don</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-12 mb-4">
						        <div class="morevides mb-2">
									<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
									<div class="pad-15 p-real">
										<h3 class="pl-0">Beast</h3>
										<p>Art Director</p>
										<span class="edit_icons">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
												<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
											</a>
										</span>
									</div>
									<ul class="recent-followers">
										<li>+5</li>
										<li><img src="images/recent-followers1.png" alt="" /></li>
										<li><img src="images/recent-followers2.png" alt="" /></li>
										<li><img src="images/recent-followers3.png" alt="" /></li>
										<li><img src="images/recent-followers4.png" alt="" /></li>
										<li><img src="images/recent-followers5.png" alt="" /></li>
									</ul>
								</div>
						    </div>
            			</div>
					</div>
					<!--<div class="tab-pane" id="projectworked2" role="tabpanel" aria-labelledby="pills-home-tab">
					    	
					</div>
					<div class="tab-pane " id="projectworked3" role="tabpanel" aria-labelledby="pills-home-tab">
						
					</div>-->
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
		
		$('.myproject').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 4,
			  autoplay: true,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 4000,
			  responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 4,
						}
					},
					{
						breakpoint: 900,
						settings: {
							slidesToShow: 3,
						}
					},
					{
					  breakpoint: 680,
					  settings: {
						  slidesToShow: 2,
					  }
				  },
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
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