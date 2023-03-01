 
<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
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
					<h2 class="text-black">Artizt Ville</h2>
				</div>
			</div>
			<div class="villabanner mar-bot-30">
				<img src="images/villa-banner.jpg" class="img-fluid bannerimage" >
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
						<div class="col-md-8 col-sm-8">
							<div class="client-logo pull-left"><img src="images/villa-client-logo.png" class="img-fluid" /></div>
							<div class="villa_name pull-left"><h3>Bonjour Bonheur <br />Ocean Spray</h3>
							<p>7,8,9, E.C.R Main Road Majakuppam, Pondicherry</p></div>
						</div>
						<div class="col-md-4 col-sm-4 text-sm-right text-xs-center">
							<a href="#" data-toggle="modal" data-target="#enquiry_popup" class="btn btn-select border-radius-30 minwidth-120 mr-2">Book Now</a>
							<a href="#" class="villa-hearticon"><img src="images/villa-heart.png"></a>
						</div>
					</div>
				</div>
			</div>

			<div class="vila-card">
				<div class="row">
					<div class="col-md-12 sugh5">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<h5 class="pr-3 pl-3 ft-18 text-dark pt-3">Event Calender</h5>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group mb-0">
									<div class="input-group input-daterange">	
						    			<input type="text" class="form-control ml-3 mr-3 mt-3 mb-3 calender_cions" id="events-from" value="" data-date-format="dd/mm/yyyy" placeholder="From">
						    			<input type="text" class="form-control mr-3 mt-3 mb-3 calender_cions" value="" data-date-format="dd/mm/yyyy" placeholder="To">								    
									</div>
								</div>
							</div>
						</div>
						<hr class="mb-2 mt-0" />
					</div>
				</div>
				<div class="pad-15">
					<div class="row align-items-center">
						<div class="col-md-12 villa_events">
							<div class="row">
								<div class="col-md-6">
									<div class="villa_events_img"><img src="images/events1.jpg" class="img-fluid"></div>
									<div class="villa_events_details">
										<h3>Wendy Wei</h3>
										<h4>22-Aug-2022 to 25-Aug-2022</h4>
										<p>10:30 AM | 6:00 PM</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="morevides border-radius-0 mt-3 pull-left">
										<ul class="recent-followers pl-0">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
									<a href="#" class="pull-right mt-3 btn btn-select border-radius-30 minwidth-120 mr-2">Register</a>
								</div>
							</div>
							<hr class="mt-1" />
						</div>						
					</div>
					<div class="row align-items-center">
						<div class="col-md-12 villa_events">
							<div class="row">
								<div class="col-md-6">
									<div class="villa_events_img"><img src="images/events2.jpg" class="img-fluid"></div>
									<div class="villa_events_details">
										<h3>Luis Quintero</h3>
										<h4>22-Aug-2022 to 25-Aug-2022</h4>
										<p>10:30 AM | 6:00 PM</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="morevides border-radius-0 mt-3 pull-left">
										<ul class="recent-followers pl-0">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
									<a href="#" class="pull-right mt-3 btn btn-select border-radius-30 minwidth-120 mr-2">Register</a>
								</div>
							</div>
							<hr class="mt-1" />
						</div>						
					</div>
					<div class="row align-items-center">
						<div class="col-md-12 villa_events">
							<div class="row">
								<div class="col-md-6">
									<div class="villa_events_img"><img src="images/events3.jpg" class="img-fluid"></div>
									<div class="villa_events_details">
										<h3>ICSA</h3>
										<h4>22-Aug-2022 to 25-Aug-2022</h4>
										<p>10:30 AM | 6:00 PM</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="morevides border-radius-0 mt-3 pull-left">
										<ul class="recent-followers pl-0">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
									<a href="#" class="pull-right mt-3 btn btn-select border-radius-30 minwidth-120 mr-2">Register</a>
								</div>
							</div>
							<hr class="mt-1" />
						</div>						
					</div>					
				</div>
			</div>

			<div class="vila-card">
				<div class="row">
					<div class="col-md-12 sugh5">
						<h5 class="pr-3 pl-3 ft-18 text-dark p-3">Suitable For</h5>
						<hr class="mb-2 mt-2" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 p-3 pl-5 pr-5">
						<div class="suitable-scroll">
							<div class="suitable_text" style="border-radius: 15px;background-image: url(images/villa-scroll.png);background-repeat: no-repeat;background-size: cover;width: 100%;min-height: 215px;background-position: center;">
								<h4 class="ft-16 text-white text-center">
									Fine Arts
								</h4>
							</div>
							<div class="suitable_text" style="border-radius: 15px;background-image: url(images/villa-scroll-1.png);background-repeat: no-repeat;background-size: cover;width: 100%;min-height: 215px;background-position: center;">
								<h4 class="ft-16 text-white text-center">
									Photographers
								</h4>
							</div>
							<div class="suitable_text" style="border-radius: 15px;background-image: url(images/villa-scroll-2.png);background-repeat: no-repeat;background-size: cover;width: 100%;min-height: 215px;background-position: center;">
								<h4 class="ft-16 text-white text-center">
									Just Relax
								</h4>
							</div>
							<div class="suitable_text" style="border-radius: 15px;background-image: url(images/villa-scroll.png);background-repeat: no-repeat;background-size: cover;width: 100%;min-height: 215px;background-position: center;">
								<h4 class="ft-16 text-white text-center">
									Fine Arts
								</h4>
							</div>
							<div class="suitable_text" style="border-radius: 15px;background-image: url(images/villa-scroll-1.png);background-repeat: no-repeat;background-size: cover;width: 100%;min-height: 215px;background-position: center;">
								<h4 class="ft-16 text-white text-center">
									Photographers
								</h4>
							</div>
							<div class="suitable_text" style="border-radius: 15px;background-image: url(images/villa-scroll-2.png);background-repeat: no-repeat;background-size: cover;width: 100%;min-height: 215px;background-position: center;">
								<h4 class="ft-16 text-white text-center">
									Just Relax
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#rooms" role="tab" aria-controls="pills-profile" aria-selected="false">Rooms</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#facilities" role="tab" aria-controls="pills-contact" aria-selected="false">Facilities</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="testimonial-tab" data-toggle="pill" href="#testimonial" role="tab" aria-controls="pills-contact" aria-selected="false">Testimonial</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="pills-home-tab">
						<h3 class="pad-bot-15 pt-3">Overview</h3>
						<p>Conceived as Pondicherry by the French and affectionately known as 'Pondy', the city has its conspicuous French connection. Away from the hustle bustle of the metro's, this quiet little town offers the peculiar mustard-yellow colonial heritage buildings, virgin beaches, a medley of cuisines, the quaint spiritual wave and the alluring art. Here, soaked in the whiff of the Bay of Bengal and stationed in the ripples of its own beautiful man-made lake, Ocean Spray grasps the enchantment and the intimacy in its own breath. Bonjour Bonheur Ocean Spray Resort showcases the nature at its best. The Majestic grandeur architecture overlooks the overwhelming swimming pool with the sound of the gushing cascades and the smoldering view of the sky. Interiors reflect the warmth of its aristocratic ambiance. Villas with private swimming pools provide an exclusive composition. One of its kind night club quenches the thirst of the night life birds. The mesmerizing experience of candle light dinner on the boat in the lake is just meant for those special romantic moments. Statuesque trees give the unmistakable view from the esplanade.</p>
					</div>
					<div class="tab-pane" id="rooms" role="tabpanel" aria-labelledby="pills-home-tab">
						<h3 class="pad-bot-15 pt-3">Rooms</h3>
						<div class="row">
							<div class="col-md-3 col-sm-3 mar-bot-20">
								<img src="images/villa-room.jpg" class="img-fluid">
							</div>
							<div class="col-md-3 col-sm-3 mar-bot-20">
								<img src="images/villa-room2.png" class="img-fluid">
							</div>
							<div class="col-md-3 col-sm-3 mar-bot-20">
								<img src="images/villa-room.jpg" class="img-fluid">
							</div>
							<div class="col-md-3 col-sm-3 mar-bot-20">
								<img src="images/villa-room2.png" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="tab-pane " id="facilities" role="tabpanel" aria-labelledby="pills-home-tab">
						<h3 class="pad-bot-15 pt-3">Amenities and facilities</h3>
						<div class="row">
							<div class="col-md-3 col-sm-6 mb-3">
								<div class="facilities_clm">
									<img src="images/facilities1.png" class="img-fluid" />
									<p>Food & Dining</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 mb-3">
								<div class="facilities_clm">
									<img src="images/facilities2.png" class="img-fluid" />
									<p>Swimming Pool</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 mb-3">
								<div class="facilities_clm">
									<img src="images/facilities3.png" class="img-fluid" />
									<p>Breakfast</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 mb-3">
								<div class="facilities_clm">
									<img src="images/facilities4.png" class="img-fluid" />
									<p>Internet Access</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="testimonial" role="tabpanel" aria-labelledby="pills-home-tab">
						<h3 class="pad-bot-15 pt-3">Testimonial</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="testimonial-scroll">
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
								</div>	
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="call-to-act p-real">
						<div class="cal2-act">
							<div class="row align-items-center">
								<div class="col-sm-8 villa_name">								
									<h3>Stop Interruptions. Make iDeas.</h3>
									<p class="ft-16">"Writing is the best way to talk without being interrupted"</p>
								</div>
								<div class="col-sm-4 text-sm-center">
									<a href="#" class="btn btn-select border-radius-30 minwidth-120">Book Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-60 similar-indus-head">
					<h4 class="text-black">Most Booked Properties</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">							
					<div class="relatedevents-scroll">
						<div class="relatedevents mb-3">
							<img src="images/m-villa.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-booked-properties">
								<div class="row align-items-center">
									<div class="col-md-8">										
										<div class="logo_round">
											<img src="images/sm-villa-logo.png" class="img-fluid">
										</div>
										<h3>Le Pondy - Beach and Lake Resort</h3>
										<p>ECR Road, Pondicherry</p>
									</div>
									<div class="col-md-4">
										<ul class="reeview-star">
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
										</ul>
										<p class="text-right reviews_no">84 reviews</p>
									</div>
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/m-villa.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-booked-properties">
								<div class="row align-items-center">
									<div class="col-md-8">
										<div class="logo_round">
											<img src="images/sm-villa-logo.png" class="img-fluid">
										</div>
										<h3>Le Pondy - Beach and Lake Resort</h3>
										<p>ECR Road, Pondicherry</p>
									</div>
									<div class="col-md-4">
										<ul class="reeview-star">
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
										</ul>
										<p class="text-right reviews_no">84 reviews</p>
									</div>
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/m-villa.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-booked-properties">
								<div class="row align-items-center">
									<div class="col-md-8">
										<div class="logo_round">
											<img src="images/sm-villa-logo.png" class="img-fluid">
										</div>
										<h3>Le Pondy - Beach and Lake Resort</h3>
										<p>ECR Road, Pondicherry</p>
									</div>
									<div class="col-md-4">
										<ul class="reeview-star">
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
										</ul>
										<p class="text-right reviews_no">84 reviews</p>
									</div>
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/m-villa.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-booked-properties">
								<div class="row align-items-center">
									<div class="col-md-8">
										<div class="logo_round">
											<img src="images/sm-villa-logo.png" class="img-fluid">
										</div>
										<h3>Le Pondy - Beach and Lake Resort</h3>
										<p>ECR Road, Pondicherry</p>
									</div>
									<div class="col-md-4">
										<ul class="reeview-star">
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
											<li><img src="images/v-star.png"></li>
										</ul>
										<p class="text-right reviews_no">84 reviews</p>
									</div>
								</div>
							</div>								
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-60 similar-indus-head">
					<h4 class="text-black">Let's join the events @ Artizt Ville</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">							
					<div class="relatedevents-scroll left-join">
						<div class="relatedevents mb-3">
							<img src="images/villa-events.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-events-propertise">
								<div class="row align-items-center">
									<div class="col-md-12">
										<h3>Korean film festival - The Front Line</h3>
										<p class="ft-14">Wed, 22 Jun, 5:30 – 7:30 pm</p>
										<p>ECR Road, Pondicherry</p>
										<div class="morevides border-radius-0">
											<ul class="recent-followers pl-0">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt=""></li>
												<li><img src="images/recent-followers3.png" alt=""></li>
												<li><img src="images/recent-followers4.png" alt=""></li>
												<li><img src="images/recent-followers5.png" alt=""></li>
											</ul>
										</div>
									</div>									
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/villa-events.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-events-propertise">
								<div class="row align-items-center">
									<div class="col-md-12">
										<h3>Korean film festival - The Front Line</h3>
										<p class="ft-14">Wed, 22 Jun, 5:30 – 7:30 pm</p>
										<p>ECR Road, Pondicherry</p>
										<div class="morevides border-radius-0">
											<ul class="recent-followers pl-0">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt=""></li>
												<li><img src="images/recent-followers3.png" alt=""></li>
												<li><img src="images/recent-followers4.png" alt=""></li>
												<li><img src="images/recent-followers5.png" alt=""></li>
											</ul>
										</div>
									</div>									
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/villa-events.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-events-propertise">
								<div class="row align-items-center">
									<div class="col-md-12">
										<h3>Korean film festival - The Front Line</h3>
										<p class="ft-14">Wed, 22 Jun, 5:30 – 7:30 pm</p>
										<p>ECR Road, Pondicherry</p>
										<div class="morevides border-radius-0">
											<ul class="recent-followers pl-0">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt=""></li>
												<li><img src="images/recent-followers3.png" alt=""></li>
												<li><img src="images/recent-followers4.png" alt=""></li>
												<li><img src="images/recent-followers5.png" alt=""></li>
											</ul>
										</div>
									</div>									
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/villa-events.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-events-propertise">
								<div class="row align-items-center">
									<div class="col-md-12">
										<h3>Korean film festival - The Front Line</h3>
										<p class="ft-14">Wed, 22 Jun, 5:30 – 7:30 pm</p>
										<p>ECR Road, Pondicherry</p>
										<div class="morevides border-radius-0">
											<ul class="recent-followers pl-0">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt=""></li>
												<li><img src="images/recent-followers3.png" alt=""></li>
												<li><img src="images/recent-followers4.png" alt=""></li>
												<li><img src="images/recent-followers5.png" alt=""></li>
											</ul>
										</div>
									</div>									
								</div>
							</div>								
						</div>
						<div class="relatedevents mb-3">
							<img src="images/villa-events.jpg" class="img-fluid relateimg">
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
							<div class="m-events-propertise">
								<div class="row align-items-center">
									<div class="col-md-12">
										<h3>Korean film festival - The Front Line</h3>
										<p class="ft-14">Wed, 22 Jun, 5:30 – 7:30 pm</p>
										<p>ECR Road, Pondicherry</p>
										<div class="morevides border-radius-0">
											<ul class="recent-followers pl-0">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt=""></li>
												<li><img src="images/recent-followers3.png" alt=""></li>
												<li><img src="images/recent-followers4.png" alt=""></li>
												<li><img src="images/recent-followers5.png" alt=""></li>
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
				<div class="col-md-12">
					<div class="others-profile_ospage">
						<div class="row">
							<div class="col-md-12 pad-bot-15 pad-top-70 mt-2 similar-indus-head">
								<h5 class="text-black">Location</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="vila-card vila-card-right">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13123.595739611657!2d79.86848704521627!3d12.066324358739031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5365829c625785%3A0xb42f7bbd65d2dcf1!2sManjakuppam%2C%20Tamil%20Nadu%20604303!5e0!3m2!1sen!2sin!4v1656230490582!5m2!1sen!2sin" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									<div class="pad-20 landmarks">
										<h3>Popular landmarks</h3>
										<p>Serenity Beach <span class="pull-right">11.0 km</span></p>
										<p>Sri Aurobindo Ashram <span class="pull-right">11.0 km</span></p>
										<p>Seaside Promenade <span class="pull-right">11.0 km</span></p>
										<p>Chunnambar Boat House <span class="pull-right">11.0 km</span></p>
										<p class="text-right mt-3"><a href="#">See nearby places</a></p>
									</div>

								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 pad-bot-15 pad-top-20 similar-indus-head">
								<h5 class="text-black pad-bot-15">Staycation offers available</h5>
								<img src="images/villa-right1.png" class="img-fluid" style="width: 100%">
							</div>
							<div class="col-sm-6 pad-bot-15 pad-top-20 similar-indus-head">
								<h5 class="text-black pad-bot-15">AD</h5>
								<img src="images/add1.png" class="img-fluid" style="width: 100%">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="others-profile-right">
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-50 mt-2 similar-indus-head">
					<h5 class="text-black">Location</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="vila-card vila-card-right">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13123.595739611657!2d79.86848704521627!3d12.066324358739031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5365829c625785%3A0xb42f7bbd65d2dcf1!2sManjakuppam%2C%20Tamil%20Nadu%20604303!5e0!3m2!1sen!2sin!4v1656230490582!5m2!1sen!2sin" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="pad-20 landmarks">
							<h3>Popular landmarks</h3>
							<p>Serenity Beach <span class="pull-right">11.0 km</span></p>
							<p>Sri Aurobindo Ashram <span class="pull-right">11.0 km</span></p>
							<p>Seaside Promenade <span class="pull-right">11.0 km</span></p>
							<p>Chunnambar Boat House <span class="pull-right">11.0 km</span></p>
							<p class="text-right mt-3"><a href="#">See nearby places</a></p>
						</div>

					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h5 class="text-black pad-bot-15">Staycation offers available</h5>
					<img src="images/villa-right1.png" class="img-fluid">
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h5 class="text-black pad-bot-15">AD</h5>
					<img src="images/add1.png" class="img-fluid">
				</div>
			</div>
		</div>
	  </div>
	  
	  <?php include 'includes/footer.php';?>

  </body>

 
   
  <div class="modal fade" id="enquiry_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center b-modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Enquiry</h5>
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
							    	<label for="name">Name:</label>
							    	<input type="text" class="form-control big_box" id="name" aria-describedby="emailHelp"  placeholder="" required>
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="emailid">Email:</label>
							    	<input type="email" class="form-control big_box" id="emailid" aria-describedby="emailHelp" placeholder="" required>						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="phone">Phone:</label>
							    	<input type="number" class="form-control big_box" id="phone" aria-describedby="emailHelp" placeholder="" required>						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!-- <label for="phone">Date:</label> -->
							    	<div class="input-group input-daterange">
							    		<div class="row">
							    			<div class="col-6">
							    				<input type="text" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="Check in">
							    			</div>
							    			<div class="col-6">
							    				<input type="text" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="check out">
							    			</div>
							    		</div>
									    <!-- <div class="input-group-addon pt-3 pr-2 pb-2"></div> -->
									    
									    <!-- <div class="input-group-addon pt-3 p-2">check out</div> -->
									    
									</div>					   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="no_people">Number of People:</label>
							    	<input type="number" class="form-control big_box" id="no_people" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="message">Message:</label>
							    	<textarea class="form-control big_box" id="message"></textarea>						   
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
   
    <script src="js/bootstrap-datepicker.js"></script>
 
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

		  $('.input-daterange input').each(function() {
		    	//$(this).datepicker('clearDates');
		    	$(this).datepicker({
				    format: 'dd-mm-yyyy',
				    startDate: '+0d',
				    autoclose: true,
				    //endDate: '+0d' // there's no convenient "right now" notation yet
				}); 
		  });
		  
		});
	</script>
	<script>
		$('.testimonial-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
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
						}
					},
					{
					  breakpoint: 680,
					  settings: {
						  slidesToShow: 1,
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
						}
					},
			  ]
			});
			
			$('.suitable-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 3,
			  autoplay: false,
			  dots: false,
			  arrows: true,
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