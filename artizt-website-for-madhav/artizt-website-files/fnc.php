 
 <?php include 'includes/top.php';?>
    
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
   
    <style>
        .msg-border-box{
            border: 1px solid #d9d9d9 !important;
            width:100%;
        }
        
        .fncbg{
            position:relative;
        }
        
        .dropdown-dots{
            color:#a5a6a8;
            display:inline-block;
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
					<h2 class="text-black pull-left">Find FnC Works</h2>
					<div class="pull-right store_btn">	
    					<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My FnC <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="fnc-project.php">FnC Project</a>
                            <a class="dropdown-item" href="fnc-workspeace.php">Artizt Office Space</a>
                            <!--<a class="dropdown-item" href="fnc.php">View All fnC</a>-->
                          </div>
                        </div>
                    </div>
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
										<div class="input-group-btn fnc-search-drop search-panel" data-search="Project">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
												<span class="search_by">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" role="menu">
											  <li><a data-search="All">All</a></li>
											  <li><a data-search="Fnc Wanted">Fnc Wanted</a></li>
											  <li><a data-search="Fnc for you">Fnc for you</a></li>
											</ul>
										</div>   
										<input type="text" class="form-control borer-0" name="x" placeholder="Search Projects">						
										<span class="input-group-btn">
											<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
										</span>
									</div> 
								</div>

								<div class="searched_by pt-2">
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
								</div>
							</div>
						</div>

						<div class="row">
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
						</div>

					</div>
				</div>
			</div>
            
            <div class="search-results-card">
				<h3>ADs</h3>
				<div class="following-content">
					<img src="images/networkuser1.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
                <div class="following-content">
					<img src="images/networkuser3.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
                <div class="following-content">
					<img src="images/networkuser2.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="mt-0 mar-bot-30" />
                </div>
            </div>
            <div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">FnC for you</h2>
				</div>
			</div>
            <div class="search-results-card">
				<div class="following-content">
					<img src="images/networkuser1.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
                <div class="following-content">
					<img src="images/networkuser3.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
                <div class="following-content">
					<img src="images/networkuser2.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <hr class="mt-0 mar-bot-30" />
                </div>
            </div>
            <div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">FnC Wanted</h2>
				</div>
			</div>
            <div class="search-results-card">
				<div class="following-content">
					<img src="images/networkuser1.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 mt-2 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
                <div class="following-content">
					<img src="images/networkuser3.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
                <div class="following-content">
					<img src="images/networkuser2.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Bibin Mathew</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Apply As Intrested</a>
							    <a class="dropdown-item" href="#">Follow</a>
							    <a class="dropdown-item" href="#">Save</a>
							    <a class="dropdown-item" href="#">Tag</a>
							    <a class="dropdown-item" href="#">Add to Project</a>
							    <a class="dropdown-item" href="#">Add to Group</a>
							    <a class="dropdown-item" href="#">Block</a>
							    <a class="dropdown-item" href="#">Report</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>Goutham Menon</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
				</div>
			</div>
            
		</div>
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
		  
		  $('.fnc-search-drop').each( function() {
			var to = $(this).data('search').toString();
			//alert(to);
			var text = $(this).find('[data-search="' + to + '"]').html();
			$(this).find('button span.search_by').html(text);
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