 
 <?php include 'includes/top.php';?>
 
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
   
    <style>
        .msg-border-box{
            border: 1px solid #d9d9d9 !important;
            width:100%;
        }
    </style>
  </head>
  <body>
       

  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
		<?php include 'includes/side-profile.php';?>
		 <ul class="nav flex-column flex-nowrap overflow-hidden mySidenav1 mySidenav2">
		    <li class="nav-item">
		        <a class="nav-link" href="fnc-dashboard.php"><span class="d-inline"><i class="fa fa-briefcase pr-2" aria-hidden="true"></i> FnC Projects</span></a>
		    </li>

		    <li class="nav-item">
		        <a class="nav-link" href="fnc-workspeace.php"><span class="d-inline"><i class="fa fa-briefcase pr-2" aria-hidden="true"></i> FnC Work Space</span></a>
		    </li>
		 </ul>
		<?php include 'includes/side-menu.php';?>
		 
			 
		</div>
		
		<div class="movie-preview-main">
		    <div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">FnC - Search People</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 pad-bot-15 page-head">
								<h2 class="text-black">Search by FnC</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 pb-2">
								<div class="search_fnc">
									<div class="input-group fnc-search">
										<div class="input-group-btn fnc-search-drop" data-search="Project">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
												<span class="search_by">Project</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" role="menu">
											  <li><a data-search="all">All</a></li>
											  <li><a data-search="Artizt">Artizt</a></li>
											  <li><a data-search="People">People</a></li>
											  <li><a data-search="Projects">Projects</a></li>
											</ul>
										</div>   
										<input type="text" class="form-control borer-0" name="x" placeholder="Search People">						
										<span class="input-group-btn">
											<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
										</span>
									</div> 
								</div>

								<!--<div class="searched_by pt-2">
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Theatre
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Fashion
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Painting
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									  </button>
									</div>
									<span class="clearall"><img src="images/clearall.png" /> <a href="#">Clear all</a></span>
								</div>-->
							</div>
						</div>

						<!--<div class="row">
							<div class="col-md-12 filterby pad-top-15">
								<span class="pl-0">Filter by</span>
								<ul class="nav nav-pills mb-0" id="fnc-tab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="industry-tab" data-toggle="pill" href="#industry" role="tab" aria-controls="pills-home" aria-selected="true">Industry</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="art-tab" data-toggle="pill" href="#art" role="tab" aria-controls="pills-profile" aria-selected="false">Art</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="skillset-tab" data-toggle="pill" href="#skillset" role="tab" aria-controls="pills-contact" aria-selected="false">Skillset</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="region-tab" data-toggle="pill" href="#region" role="tab" aria-controls="pills-contact" aria-selected="false">Region</a>
								  </li>
								</ul>
									<div class="tab-content" id="fnc-tabContent">
										<div class="tab-pane fade show active" id="industry" role="tabpanel" aria-labelledby="pills-home-tab">
											<div class="row">
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Documentary</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Media Print & Visual</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="art" role="tabpanel" aria-labelledby="pills-home-tab">
											<div class="row">
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Documentary</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Media Print & Visual</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="skillset" role="tabpanel" aria-labelledby="pills-home-tab">
											<div class="row">
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Documentary</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Media Print & Visual</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="region" role="tabpanel" aria-labelledby="pills-home-tab">
											<div class="row">
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Documentary</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
												<div class="col-md-12 d-flex filterby pad-top-15">
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb1"><label for="cb1"></label>
															<p>Media Print & Visual</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb2"><label for="cb2"></label>
															<p>Theatre</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb3"><label for="cb3"></label>
															<p>Drama</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb4"><label for="cb4"></label>
															<p>Photography</p>
														</div>
													</div>
													<div class="filter_check">
														<div class="checkbox_left">
															<input type="checkbox" id="cb5"><label for="cb5"></label>
															<p>Advertisement</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>-->



							<!-- <div class="col-md-12 filterby align-items-center pad-top-15 pad-bot-15">
								<span class="pl-0">Filter by</span>
								<span><a href="#" class="filterby_selected">Industry</a></span>
								<span><a href="#">Art</a></span>
								<span><a href="#">Skillset</a></span>
								<span><a href="#">Region</a></span>
							</div> -->
							
					</div>
				</div>
			</div>
            
            <div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">ADs</h2>
				</div>
			</div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/profilephoto.png" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Bibin Mathew</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
                <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg2.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/photos-image8.jpg" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Goutham Menon</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
    		    <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg1.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/photos-image7.jpg" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Manirthanam</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="mt-0 mar-bot-30" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/profilephoto.png" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Lingusamy</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
                <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg2.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/photos-image8.jpg" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>K.S Ravikumar</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
    		    <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg1.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/photos-image7.jpg" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Rajamouli</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/profilephoto.png" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Sasikumar</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
                <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg2.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/photos-image8.jpg" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Bibin Mathew</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
    		    <div class="col-md-4 col-sm-6 mar-bot-30 fncpage">
    		        <div class="os_card">
    			        <div class="fncbg" style="background: url(images/fncbg1.jpg);background-repeat: no-repeat;background-size: cover;height:120px;border-radius: 10px 10px 0 0;"></div>
    			        <div class="profile_box text-center">
    			            <div class="p-real profile_logo_round">
      							<img src="images/photos-image7.jpg" class="img-fluid round-radius border-white">
      							<span class="con_status_acive"></span>
      						</div>
    
      						<h3>Bibin Mathew</h3>
      						<p>Theatre/Drama • Director & Editor</p>
    			        </div>
    			        <div class="fnc_details">
    			            <div class="row m-0">
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>4.1K</h4>
    				                <p>Appreciations</p>
    				            </div>
    				            <div class="col-4 project_worked text-center border-right pl-2 pr-2">
    				                <h4>12.1K</h4>
    				                <p>Followers</p>
    				            </div>
    				            <div class="col-4 project_worked text-center pl-2 pr-2">
    				                <h4>7.1K</h4>
    				                <p>Project Worked</p>
    				            </div>
    				        </div>
    				        
    				        <div class="fnc_apply-btu ">
    				            <div class="row m-0">
    				                <div class="col-6 text-center">
    				                    <a href="javascript:void(0);" class="btn btn-select btn-normal p-2 m-0 btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a>
    				                </div>
    				                <div class="col-6 text-center"><a href="javascript:void(0);" data-toggle="modal" data-target="#hireus" class="btn btn-block btn-select p-2 m-0"><i class="fa fa-envelope" aria-hidden="true"></i> Hire Us</a></div>
    				            </div>
    				        </div>
    				        
    			        </div>
    		        </div>
    		    </div>
            </div>
            
			<!--<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5>Suggested Projects/Works</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
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
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5>Recommend to Your Friend</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="os_card border-radius-10">
									<img src="images/sultalposter.png" class="img-fluid border-radius-t10" style="width: 100%;">
									<div class="pad-15 bg-gray min-height-170">
										<div class="row">
											<div class="col-md-12 poster_title">
												<h4 class="pull-left ft-20">Sulthan</h4>
												<div class="notification_dropdown os_dropdown with-auto pt-0 pull-right">
													<div class="dropdown">					  
														<a href="#" class="dropdown-toggle dropdown-dots ft-20 pt-2 ml-2 line-height-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">...</a>
													  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <a class="dropdown-item" href="#">Edit</a>
													    <a class="dropdown-item" href="#">Delete</a>
													  </div>
													</div>
												</div>
											</div>
											<div class="col-md-12 poster_title pad-bot-15">
												<p>Lorem ipsum dolor sit amet, consectetur</p>
											</div>
											<div class="col-md-12 poster_title">
												<a href="#" class="btn-fnc btn-fnc-select">Interest</a> <a href="#" class="btn-fnc">Recommend</a>
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
				<div class="col-md-12">
					<div class="others-profile_ospage">
						<div class="row">
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-0">
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
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">												
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">												
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
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