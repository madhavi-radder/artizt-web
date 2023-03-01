 
<?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" href="css/rSlider.min.css">
    
  </head>
  <body>
       
  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
		<?php include 'includes/side-profile.php';?>
	 	<?php // include 'includes/side-workspace-menu.php';?>
		 <!--<hr>-->
		<?php include 'includes/side-menu.php';?>	
			 
		</div>
		
		<div class="movie-preview-main">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Artizt Workspace</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 pad-bot-15 page-head">
								<h2 class="text-black">Search by Stay</h2>
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
											  <li><a data-search="Club">Club</a></li>
											  <li><a data-search="Workspace">Workspace</a></li>
											  <li><a data-search="Stay">Stay</a></li>
											</ul>
										</div>   
										<input type="text" class="form-control borer-0" name="x" placeholder="Search All">						
										<span class="input-group-btn">
											<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
										</span>
									</div> 
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-12 mt-2">
								<a href="javascript:void(0);" class="ft-14 btn-advancesearch">Advanced Search</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 advance-search-box p-relative ">
								<div class="row">
									<div class="col-md-3 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Price Range</label>
										<!--<select class="form-control" id="location" name="location">
											<option value="">Select Location</option>
											<option value="Chennai">Chennai</option>
											<option value="Mumbai">Mumbai</option>
											<option value="Bangalore">Bangalore</option>
											<option value="Madurai">Madurai</option>
										</select>-->
										<div class="slider-container">
                    			            <input type="text" id="slider3" class="slider" />
                    			        </div>
									</div>
									<div class="col-md-2 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Location</label>
										<select class="form-control" id="location" name="location">
											<option value="">Select Location</option>
											<option value="Chennai">Chennai</option>
											<option value="Hyderabad">Hyderabad</option>
											<option value="Coimbatore">Coimbatore</option>
											<option value="Bangalore">Bangalore</option>
											<option value="Puducherry">Puducherry</option>
										</select>										
									</div>
									<div class="col-md-2 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Members</label>
										<input type="number" class="form-control" id="members" name="members" />										
									</div>
									<div class="col-md-3 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Stay Type</label>
										<select class="form-control" id="programs" name="programs">
											<option value="">Select Stay Type</option>
											<option value="Long Term Stay">Long Term Stay</option>
											<option value="Weekly Stay">Weekly Stay</option>
											<option value="Monthly Stay">Monthly Stay</option>
										</select>										
									</div>
									<div class="col-md-2 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Property Type</label>
										<select class="form-control" id="programs" name="programs">
											<option value="">Select Property Type</option>
											<option value="Club Stay">Club Stay</option>
											<option value="Ville Stay">Ville Stay</option>
											<option value="Affiliate Stay">Affiliate Stay</option>
										</select>										
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			
			
			<!--<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="search_fnc">
							<div class="input-group fnc-search">  
								<input type="text" class="form-control borer-0" name="x" placeholder="Search Workspace">						
								<span class="input-group-btn">
									<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
								</span>
							</div> 
						</div>
						<div class="row">
							<div class="col-md-12 mt-2">
								<a href="javascript:void(0);" class="ft-14 btn-advancesearch">Advanced Search</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 advance-search-box p-relative ">
								<div class="row">
									<div class="col-md-4 pt-2">
										<select class="form-control" id="location" name="location">
											<option value="">Select Location</option>
											<option value="Chennai">Chennai</option>
											<option value="Mumbai">Mumbai</option>
											<option value="Bangalore">Bangalore</option>
											<option value="Madurai">Madurai</option>
										</select>										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<div class="row">
				<div class="col-md-4 pad-bot-30">
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
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
						<img src="images/workspace2.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Vaagai Spaces</h3>
									<p class="ft-14">Bund Garden Road, Pune</p>
								</div>
							</div>
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
						<img src="images/workspace3.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Hive workspaces</h3>
									<p class="ft-14">Gachibowli, Hyderabad</p>
								</div>
							</div>
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
						<img src="images/workspace2.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Vaagai Spaces</h3>
									<p class="ft-14">Bund Garden Road, Pune</p>
								</div>
							</div>
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
						<img src="images/workspace3.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Hive workspaces</h3>
									<p class="ft-14">Gachibowli, Hyderabad</p>
								</div>
							</div>
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-8 pad-bot-30">
					<img src="images/spacead1.jpg" class="img-fluid border-radius-10">
				</div>
				<div class="col-md-4 pad-bot-30">
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
						<img src="images/workspace3.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Hive workspaces</h3>
									<p class="ft-14">Gachibowli, Hyderabad</p>
								</div>
							</div>
							<div class="row">
							    <div class="col-md-12">
							        <div class="pad-10 stay-head min-height-170">
    									<ul>
    									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 2000 Sqft</a></li>
    										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 10 People's</a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
							    </div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
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
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">Most Booked @ Artizt Workspace</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 pad-bot-30">
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
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
									<div class="morevides work-followers pl-0">
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
				<div class="col-md-4 pad-bot-30">
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
									<div class="morevides work-followers pl-0">
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
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<img src="images/workspeacead2.jpg" class="img-fluid border-radius-10">
				</div>
			</div>


		</div>


	  </div>
	  
	  <?php include 'includes/footer.php';?>

  </body>
    
  <?php include 'includes/script.php';?>
    <script src="js/rSlider.min.js"></script>
   
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

		  $(".btn-advancesearch").click(function(){
			  $(".advance-search-box").toggleClass("show");
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
		$('.speakers-scroll').slick({
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
							slidesToShow: 3,
						}
					},
					{
						breakpoint: 900,
						settings: {
							slidesToShow: 3,
							centerMode: true,
						}
					},
					{
					  breakpoint: 680,
					  settings: {
						  slidesToShow: 2,
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
			

		$('.relatedevents-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 2,
			  autoplay: true,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 4000,
			  responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
						}
					},
					{
						breakpoint: 900,
						settings: {
							slidesToShow: 2,
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
	<script>
        (function () {
            'use strict';

            var init = function () {                

                

                var slider3 = new rSlider({
                    target: '#slider3',
                    values: {min: 0, max: 5000},
                    step: 10,
                    range: true,
                    set: [0, 5000],
                    scale: false,
                    labels: false,
                    onChange: function (vals) {
                        console.log(vals);
                    }
                });
            };
            window.onload = init;
        })();
    </script>
</html>