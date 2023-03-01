
<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" href="css/rSlider.min.css">
    <style>
        .stay-head ul li a img{
            display:inline;
        }
    </style>
  
  </head>
  
  <body>
      
  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
		<?php include 'includes/side-profile.php';?>
		<?php // include 'includes/side-club-menu.php';?>
		<!--<hr>-->
		<?php include 'includes/side-menu.php';?>	 
			
			 
		</div>
		
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Artizt Club</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 pad-bot-15 page-head">
								<h2 class="text-black">Search by Club</h2>
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
									<div class="col-md-4 col-sm-4 col-6 pt-2 mb-2">
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
									<div class="col-md-4 col-sm-4 col-6 pt-2 mb-2">
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
									<div class="col-md-4 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Members</label>
										<input type="number" class="form-control" id="members" name="members" />										
									</div>
									<div class="col-md-4 col-sm-4 col-6 pt-2 mb-2">
									    <label class="ft-14">Stay Type</label>
										<select class="form-control" id="programs" name="programs">
											<option value="">Select Stay Type</option>
											<option value="Long Term Stay">Long Term Stay</option>
											<option value="Weekly Stay">Weekly Stay</option>
											<option value="Monthly Stay">Monthly Stay</option>
										</select>										
									</div>
									<div class="col-md-4 col-sm-4 col-6 pt-2 mb-2">
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
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Club</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 pad-bot-30">
					<div class="club-scroll">
					    <div class="worksace mb-3">
						<img src="images/club1.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise clubproperties">
							<div class="row">
								<div class="col-md-12">
									<h3 class="pl-0">Livefyre - Studio Club</h3>
									<p class="ft-14 pl-0">Kodambakkam, Chennai</p>
									<div class="club_faciltes">
										<ul>
											<li><img src="images/club-icon1.png"> Preview Theatre</li>
											<li><img src="images/club-icon2.png"> Cafe</li>
											<li><img src="images/club-icon3.png"> Conference Halls</li>
											<li><img src="images/club-icon4.png"> Preview Theatre</li>
										</ul>
									</div>
								</div>
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
										<ul class="recent-followers pl-0 pb-0">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>								
					</div>
					    <div class="worksace mb-3">
    						<img src="images/club2.jpg" class="img-fluid relateimg">
    						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    						<div class="worksace_propetise clubproperties">
    							<div class="row">
    								<div class="col-md-12">
    									<h3 class="pl-0">Livefyre - Studio Club</h3>
    									<p class="ft-14 pl-0">Kodambakkam, Chennai</p>
    									<div class="club_faciltes">
    										<ul>
    											<li><img src="images/club-icon1.png"> Preview Theatre</li>
    											<li><img src="images/club-icon2.png"> Cafe</li>
    											<li><img src="images/club-icon3.png"> Conference Halls</li>
    											<li><img src="images/club-icon4.png"> Preview Theatre</li>
    										</ul>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<div class="morevides work-followers pl-0">
    										<ul class="recent-followers pl-0 pb-0">
    											<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    								</div>
    							</div>
    							
    						</div>								
    					</div>
    					<div class="worksace mb-3">
    						<img src="images/club1.jpg" class="img-fluid relateimg">
    						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    						<div class="worksace_propetise clubproperties">
    							<div class="row">
    								<div class="col-md-12">
    									<h3 class="pl-0">Livefyre - Studio Club</h3>
    									<p class="ft-14 pl-0">Kodambakkam, Chennai</p>
    									<div class="club_faciltes">
    										<ul>
    											<li><img src="images/club-icon1.png"> Preview Theatre</li>
    											<li><img src="images/club-icon2.png"> Cafe</li>
    											<li><img src="images/club-icon3.png"> Conference Halls</li>
    											<li><img src="images/club-icon4.png"> Preview Theatre</li>
    										</ul>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<div class="morevides work-followers pl-0">
    										<ul class="recent-followers pl-0 pb-0">
    											<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    								</div>
    							</div>
    							
    						</div>								
    					</div>
    					<div class="worksace mb-3">
    						<img src="images/club2.jpg" class="img-fluid relateimg">
    						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    						<div class="worksace_propetise clubproperties">
    							<div class="row">
    								<div class="col-md-12">
    									<h3 class="pl-0">Livefyre - Studio Club</h3>
    									<p class="ft-14 pl-0">Kodambakkam, Chennai</p>
    									<div class="club_faciltes">
    										<ul>
    											<li><img src="images/club-icon1.png"> Preview Theatre</li>
    											<li><img src="images/club-icon2.png"> Cafe</li>
    											<li><img src="images/club-icon3.png"> Conference Halls</li>
    											<li><img src="images/club-icon4.png"> Preview Theatre</li>
    										</ul>
    									</div>
    								</div>
    								<div class="col-md-12">
    									<div class="morevides work-followers pl-0">
    										<ul class="recent-followers pl-0 pb-0">
    											<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    								</div>
    							</div>
    							
    						</div>								
    					</div>
					</div>
				</div>
			</div>




			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="ad-scroll">
						<div class="adbanner">
							<img src="images/workspeacead2.jpg" class="img-fluid border-radius-10">
						</div>
						<div class="adbanner">
							<img src="images/workspeacead2.jpg" class="img-fluid border-radius-10">
						</div>
						<div class="adbanner">
							<img src="images/workspeacead2.jpg" class="img-fluid border-radius-10">
						</div>
						<div class="adbanner">
							<img src="images/workspeacead2.jpg" class="img-fluid border-radius-10">
						</div>
					</div>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Stay</h4>
					<a href="stay.php" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12 pad-bot-15">
			        <div class="stay-scroll">
			            <div class="worksace mb-3">
    						<div class="row">
    							<div class="col-md-12">
    								<div class="p-real">
    									<img src="images/house-1.jpg" class="img-fluid relateimg">
    									<div class="villa_dropdown">
    										<div class="dropdown">								  
    											<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
    										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    										    <a class="dropdown-item" href="#">Action</a>
    										    <a class="dropdown-item" href="#">Another action</a>
    										    <a class="dropdown-item" href="#">Something else here</a>
    										  </div>
    										</div>
    									</div>
    									<div class="stay-review">
    										<img src="images/stay-star.png"> <span class="ft-14 text-white"> 3.9</span> <span class="ft-12 text-white"><u>752 Reviews</u></span>
    									</div>
    									<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    								</div>		
    							</div>
    						</div>						
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 back-gray"><p class="mb-0 ft-12">4 Bedrooms . 3 Bathrooms</p></div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 stay-head min-height-170">
    									<h3>Regenta Central Deccan</h3>
    									<ul>
    										<li><a href="#"><img src="images/s-map.png"> Royapettah High Road, Chennai </a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<hr class="mt-2 mb-3" />
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<a href="#" class="btn btn-sty m-120 mr-0">Details</a> <a data-toggle="modal" data-target="#enquiry_popup" class="btn btn-sty btn-sty-select mr-0">Book Now</a> 
    							</div>
    						</div>
    					</div>
    					<div class="worksace mb-3">
    						<div class="row">
    							<div class="col-md-12">
    								<div class="p-real">
    									<img src="images/house-1.jpg" class="img-fluid relateimg">
    									<div class="villa_dropdown">
    										<div class="dropdown">								  
    											<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
    										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    										    <a class="dropdown-item" href="#">Action</a>
    										    <a class="dropdown-item" href="#">Another action</a>
    										    <a class="dropdown-item" href="#">Something else here</a>
    										  </div>
    										</div>
    									</div>
    									<div class="stay-review">
    										<img src="images/stay-star.png"> <span class="ft-14 text-white"> 3.9</span> <span class="ft-12 text-white"><u>752 Reviews</u></span>
    									</div>
    									<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    								</div>		
    							</div>
    						</div>						
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 back-gray"><p class="mb-0 ft-12">4 Bedrooms . 3 Bathrooms</p></div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 stay-head min-height-170">
    									<h3>Regenta Central Deccan</h3>
    									<ul>
    										<li><a href="#"><img src="images/s-map.png"> Royapettah High Road, Chennai </a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<hr class="mt-2 mb-3" />
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<a href="#" class="btn btn-sty m-120 mr-0">Details</a> <a data-toggle="modal" data-target="#enquiry_popup" class="btn btn-sty btn-sty-select mr-0">Book Now</a> 
    							</div>
    						</div>
    					</div>
    					<div class="worksace mb-3">
    						<div class="row">
    							<div class="col-md-12">
    								<div class="p-real">
    									<img src="images/house-1.jpg" class="img-fluid relateimg">
    									<div class="villa_dropdown">
    										<div class="dropdown">								  
    											<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
    										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    										    <a class="dropdown-item" href="#">Action</a>
    										    <a class="dropdown-item" href="#">Another action</a>
    										    <a class="dropdown-item" href="#">Something else here</a>
    										  </div>
    										</div>
    									</div>
    									<div class="stay-review">
    										<img src="images/stay-star.png"> <span class="ft-14 text-white"> 3.9</span> <span class="ft-12 text-white"><u>752 Reviews</u></span>
    									</div>
    									<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    								</div>		
    							</div>
    						</div>						
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 back-gray"><p class="mb-0 ft-12">4 Bedrooms . 3 Bathrooms</p></div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 stay-head min-height-170">
    									<h3>Regenta Central Deccan</h3>
    									<ul>
    										<li><a href="#"><img src="images/s-map.png"> Royapettah High Road, Chennai </a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<hr class="mt-2 mb-3" />
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<a href="#" class="btn btn-sty m-120 mr-0">Details</a> <a data-toggle="modal" data-target="#enquiry_popup" class="btn btn-sty btn-sty-select mr-0">Book Now</a> 
    							</div>
    						</div>
    					</div>
    					<div class="worksace mb-3">
    						<div class="row">
    							<div class="col-md-12">
    								<div class="p-real">
    									<img src="images/house-1.jpg" class="img-fluid relateimg">
    									<div class="villa_dropdown">
    										<div class="dropdown">								  
    											<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
    										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    										    <a class="dropdown-item" href="#">Action</a>
    										    <a class="dropdown-item" href="#">Another action</a>
    										    <a class="dropdown-item" href="#">Something else here</a>
    										  </div>
    										</div>
    									</div>
    									<div class="stay-review">
    										<img src="images/stay-star.png"> <span class="ft-14 text-white"> 3.9</span> <span class="ft-12 text-white"><u>752 Reviews</u></span>
    									</div>
    									<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
    								</div>		
    							</div>
    						</div>						
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 back-gray"><p class="mb-0 ft-12">4 Bedrooms . 3 Bathrooms</p></div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<div class="pad-10 stay-head min-height-170">
    									<h3>Regenta Central Deccan</h3>
    									<ul>
    										<li><a href="#"><img src="images/s-map.png"> Royapettah High Road, Chennai </a></li>
    										<li><a href="#"><img src="images/s-wifi.png"> Free Wifi</a></li>
    										<li><a href="#"><img src="images/s-powersaver.png"> Power Backup</a></li>
    										<li><a href="#"><img src="images/s-dining.png"> Dining</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<hr class="mt-2 mb-3" />
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-12">
    								<a href="#" class="btn btn-sty m-120 mr-0">Details</a> <a data-toggle="modal" data-target="#enquiry_popup" class="btn btn-sty btn-sty-select mr-0">Book Now</a> 
    							</div>
    						</div>
    					</div>
			        </div>
			    </div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Workspace</h4>
					<a href="workspace.php" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12 pad-bot-15">
			        <div class="stay-scroll">
			            <div class="worksace mb-3">
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
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    									<div class="total_review">
    										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
    									</div>
    								</div>								
    							</div>
    						</div>								
    					</div>
    					<div class="worksace mb-3">
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
        									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 5000 Sqft</a></li>
        										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 12 People's</a></li>
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
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    									<div class="total_review">
    										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
    									</div>
    								</div>								
    							</div>
    						</div>								
    					</div>
    					<div class="worksace mb-3">
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
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    									<div class="total_review">
    										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
    									</div>
    								</div>								
    							</div>
    						</div>								
    					</div>
    					<div class="worksace mb-3">
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
        									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 5000 Sqft</a></li>
        										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 17 People's</a></li>
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
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    									<div class="total_review">
    										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
    									</div>
    								</div>								
    							</div>
    						</div>								
    					</div>
    					<div class="worksace mb-3">
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
        									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 5000 Sqft</a></li>
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
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
    										</ul>
    									</div>
    									<div class="total_review">
    										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
    									</div>
    								</div>								
    							</div>
    						</div>								
    					</div>
    					<div class="worksace mb-3">
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
        									    <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> 5000 Sqft</a></li>
        										<li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> 20 People's</a></li>
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
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
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
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 similar-indus-head">
					<h4 class="text-black">Recommended for you</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 pad-bot-30">
					<div class="worksace">
						<img src="images/club1.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise clubproperties">
							<div class="row">
								<div class="col-md-12">
									<h3 class="pl-0">Livefyre - Studio Club</h3>
									<p class="ft-14 pl-0">Kodambakkam, Chennai</p>
									<div class="club_faciltes">
										<ul>
											<li><img src="images/club-icon1.png"> Preview Theatre</li>
											<li><img src="images/club-icon2.png"> Cafe</li>
											<li><img src="images/club-icon3.png"> Conference Halls</li>
											<li><img src="images/club-icon4.png"> Preview Theatre</li>
										</ul>
									</div>
								</div>
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
										<ul class="recent-followers pl-0 pb-0">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>								
					</div>
				</div>
				<div class="col-md-6 col-sm-6 pad-bot-30">
					<div class="worksace">
						<img src="images/club2.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise clubproperties">
							<div class="row">
								<div class="col-md-12">
									<h3 class="pl-0">Livefyre - Studio Club</h3>
									<p class="ft-14 pl-0">Kodambakkam, Chennai</p>
									<div class="club_faciltes">
										<ul>
											<li><img src="images/club-icon1.png"> Preview Theatre</li>
											<li><img src="images/club-icon2.png"> Cafe</li>
											<li><img src="images/club-icon3.png"> Conference Halls</li>
											<li><img src="images/club-icon4.png"> Preview Theatre</li>
										</ul>
									</div>
								</div>
								<div class="col-md-12">
									<div class="morevides work-followers pl-0">
										<ul class="recent-followers pl-0 pb-0">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
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
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">								
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/club-ad2.jpg" class="img-fluid relateimg border-radius-10" style="width: 100%;">							
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">								
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
			<div class="others-profile-right">
				<div class="row">
					<div class="col-md-12 pad-bot-30 pad-top-60 mar-top-10">
						<div class="worksace p-relative">
							<span class="tag_art">Ad</span>
							<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">										
						</div>
					</div>
					<div class="col-md-12 pad-bot-30 pad-top-10 mar-top-10">
						<div class="worksace p-relative">
							<span class="tag_art">Ad</span>
							<img src="images/club-ad2.jpg" class="img-fluid relateimg border-radius-10">												
						</div>
					</div>
					<div class="col-md-12 pad-bot-30 pad-top-10 mar-top-10">
						<div class="worksace p-relative">
							<span class="tag_art">Ad</span>
							<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">												
						</div>
					</div>
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
		
		$('.stay-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 3,
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
		
		$('.club-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 3,
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