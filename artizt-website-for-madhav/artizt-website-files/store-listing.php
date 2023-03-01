
<?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">    
 
    <style type="text/css">
    	.hearticon2 img{
    		padding-top: 10px;
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
					<h2 class="text-black">Artizt Mall</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="search_fnc">
							<div class="input-group fnc-search">  
								<input type="text" class="form-control borer-0" name="x" placeholder="Search Projects">						
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
									<div class="col-md-4 pt-2">
										<select class="form-control" id="location" name="location">
											<option value="">Select Industry</option>
											<option value="Violin">Violin</option>
											<option value="Mackup">Mackup</option>
											<option value="Jewellery">Jewellery</option>
											<option value="Music Instruments">Music Instruments</option>
										</select>										
									</div>
									<div class="col-md-4 pt-2">
										<select class="form-control" id="location" name="location">
											<option value="">Offers</option>
											<option value="Buy 1 Get 1">Buy 1 Get 1</option>
											<option value="40% Offers">40% Offers</option>
											<option value="60% Offers">60% Offers</option>
											<option value="50% Offers">50% Offers</option>
										</select>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="villabanner storebanner mar-bot-30 border-radius-10">
				<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
				<div class="villa_details">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="client-logo pull-left"><img src="images/client-logo1.jpg" class="img-fluid" /></div>
							<div class="villa_name storename pull-left"><h3 class="mb-0">Saatchi Art</h3>
							<p class="ft-16 mb-2">The World’s Leading Online Art Gallery </p>
							<p class="text-colur">7,8,9, E.C.R Main Road Majakuppam, Pondicherry</p>
								<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/violin.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Violin</p></a>
                  </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/mackup.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Mackup</p></a>
                  </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/jewellery.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Jewellery</p></a>
                  </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10 " >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/live-music.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14 text-truncate">Music Instruments</p></a>
                  </div>
                 </div>

                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/partywear.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Party Wear</p></a>
                  </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/camera-store.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Camera</p></a>
                  </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/photography.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Photography</p></a>
                  </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                  <div class="box-defult box-defult3 text-center">                        
                    <a href="#"><img src="images/musicstore.png" width="50" height="50" class="img-fluid mar-bot-10">
                    <p class="mb-0 text-dark ft-14">Music Store</p></a>
                  </div>
                 </div>

			</div>

			<div class="row">
				<div class="col-md-12 pt-2 pb-2 text-center">
					<a href="#" class="ft-14">View More</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">Tranding Store</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo2.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner2.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo3.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner3.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">Most Visited Store</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo1.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner2.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo2.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner3.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo2.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/villa-client-logo.png" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner2.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo1.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner3.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo3.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/store-listing-ad.jpg" class="img-fluid relateimg border-radius-10">										
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">Recommended Store</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo1.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">VR Cosmetics</h3>
									
									<p class="text-colur">Store by VR</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner2.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo2.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner3.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo2.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">lakshman Sruthi</h3>
									
									<p class="text-colur">Store by lakshman</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
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
						</div>
						<div class="row">
							<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
								<h4 class="text-black">Sponsorship AD's</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/mediabanner2.jpg" class="img-fluid relateimg border-radius-10">										
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
								<h4 class="text-black">Artizt Mall Spotlights</h4>
							</div>			
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
									<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
									<div class="villa_details">
										<div class="row align-items-center">
											<div class="col-md-12 pr-2 pl-2">
												<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
												<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
												
												<p class="text-colur">Store by Santa Monica</p>
													<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
									<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
									<div class="villa_details">
										<div class="row align-items-center">
											<div class="col-md-12 pr-2 pl-2">
												<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
												<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
												
												<p class="text-colur">Store by Santa Monica</p>
													<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
									<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
									<div class="villa_details">
										<div class="row align-items-center">
											<div class="col-md-12 pr-2 pl-2">
												<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
												<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
												
												<p class="text-colur">Store by Santa Monica</p>
													<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
									<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
									<div class="villa_details">
										<div class="row align-items-center">
											<div class="col-md-12 pr-2 pl-2">
												<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
												<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
												
												<p class="text-colur">Store by Santa Monica</p>
													<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
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
				<div class="col-md-12 pad-bot-30 pad-top-60 mar-top-10">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">										
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">Sponsorship AD's</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/mediabanner2.jpg" class="img-fluid relateimg border-radius-10">										
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">Artizt Mall Spotlights</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner2.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo2.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner3.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
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
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo1.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										<a href="#" class="villa-hearticon storeheart"><img src="images/villa-heart.png"></a>
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
		$('.testimonial-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  focusOnSelect: true,
			  variableWidth: true,
			  autoplay: true,
			  dots: false,
			  arrows: true,
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

		$('.relatedevents-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 2,
			  autoplay: false,
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
		/*function openNav() {
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
		}*/

		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		  $(".leftmenu_open").click(function(){
		  	$("#mySidenav").toggle("fast");		  	
		  })


		});
		
	</script>
</html>