<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>

  </head>
  <body>
      
  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
		<?php include 'includes/side-profile.php';?>
		<!--<ul class="nav flex-column flex-nowrap overflow-hidden mySidenav1 mySidenav2">
		    <li class="nav-item">
		        <a class="nav-link" href="my-events.php"><span class="d-inline"><i class="fa fa-tachometer pr-2" aria-hidden="true"></i>My Events</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="create-events.php"><span class="d-inline"><i class="fa fa-search pr-2" aria-hidden="true"></i> Create Events</span></a>
		    </li>
		 </ul>-->
		<?php include 'includes/side-menu.php';?>
		<!--<hr>--><?php // include 'includes/side-followers.php';?>	 
			
			
		</div>
		
		<div class="others-profile-center">
		    <div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">Events</h2>
					<div class="pull-right store_btn">	
    					<!--<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Events <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="create-events.php">Create new Events</a>
                            <a class="dropdown-item" href="my-events.php">View all events</a>
                          </div>
                        </div>-->
                        <a href="create-events.php" class="pull-right btn btn-select pt-2 pb-2 ft-14">Create New Event</a>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 pad-bot-15 page-head">
								<h2 class="text-black">Search by Events</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 pb-2">
								<div class="search_fnc">
									<div class="input-group fnc-search ">
										<div class="input-group-btn fnc-search-drop search-panel" data-search="Project">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
												<span class="search_by">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" role="menu">
											  <li><a data-search="All">All</a></li>
											  <li><a id="function_tab" data-search="Functions & Parties">Functions & Parties</a></li>
											  <li><a id="performances_tab" data-search="Performances">Performances</a></li>
											  <li><a id="business_tab" data-search="Business Events">Business Events</a></li>
											  <li><a id="exhibitions_tab" data-search="Exhibitions & Shows">Exhibitions & Shows</a></li>
											  <li><a id="wellbeing_tab" data-search="Artizt Wellbeing">Artizt Wellbeing</a></li>
											  <li><a id="fezt_tab" data-search="Performances">Artizt Fezt</a></li>
											</ul>
										</div>   
										<input type="text" class="form-control borer-0" name="x" placeholder="Search Events">						
										<span class="input-group-btn">
											<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
										</span>
									</div> 
								</div>

								<div class="searched_by pt-2">
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Artizt Ville
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Artizt Club
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">×</span>
									  </button>
									</div>
									<span class="clearall"><img src="images/clearall.png" /> <a href="#">Clear all</a></span>
								</div>
							</div>
						</div>
                        
						<div class="row" id="artizt_fezt" style="display:none;">
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Student Fezt</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Artizt Teen Fezt</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>College Culture Fezt</p>
									</div>
								</div>
							</div>
							
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Yuva Fezt</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Theater Fezt</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Fashion Fezt</p>
									</div>
								</div>
							</div>
							
							
						</div>
                        <div class="row" id="artizt_exhibitions" style="display:none;">
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Fashion Shows</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row" id="artizt_functions" style="display:none;">
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Project Launch</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Sponsered Program</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Award Functions</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Happy Hours</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Celebrations</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Sucess Meet</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Parties</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Kitty Parties</p>
									</div>
								</div>
								
							</div>
						</div>
						
						
						
						
						<div class="row" id="artizt_performanaces" style="display:none;">
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Standup</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Theater & Art - Plays</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Music</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Dance</p>
									</div>
								</div>
							</div>
							
						</div>
						<div class="row" id="artizt_events" style="display:none;">
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Networking Events</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Auditions</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Pitchers Ztage</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Seminars</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Symposim</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Meeting</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Conference</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Forum</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Summit</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Convention</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Consultations</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row" id="artizt_wellbeing" style="display:none;">
							<div class="col-md-12 d-flex filterby events_filter pad-top-15">
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Physical</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Phycological</p>
									</div>
								</div>
								<div class="filter_check">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Financial</p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Ads</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Functions & Parties</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Performances</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Business Events</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Exhibitions & Shows</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Artizt Wellbeing</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Artizt Wellbeing</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
					<h4 class="text-black">Artizt Fezt</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-4">							
					<div class="relatedevents-scroll">
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
							</div>								
						</div>
						<div class="relatedevents p-real mb-3">
							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
							<div class="relatedevents_desc">
								<h4 class="fw-500">Learn Flim Acting!</h4>
								<span>THU, MAY 29 · 4:30 PM</span>
								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
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
								    <?php include 'includes/events-calender.php';?>
									<!--<div class="widget-header">
										<h5>Calendar</h5>
									</div>
									<div class="calendar"></div>
									<div class="calendar_events_details">
										<p class="ft-12">8 AM</p>
										<h3>Dance Our Night Event</h3>
										<p class="ft-14">iTest Factory </p>
									</div>
									<div class="calendar_events_details">
										<p class="ft-12">11 AM</p>
										<h3>Audio Launch Event</h3>
										<p class="ft-14">Meta4Systems </p>
									</div>
									<div class="calendar_events_details">
										<p class="ft-12">8 AM</p>
										<h3>Dance Our Night Event</h3>
										<p class="ft-14">iTest Factory </p>
									</div>-->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="others-profile-right">
            <div class="row">
				<div class="col-md-12 pad-top-30 pad-top-50 pad-bot-30">
					<div class="calender_outer">
					    <?php include 'includes/events-calender.php';?>
						<!--<div class="widget-header">
							<h5>Calendar</h5>
						</div>
						<div class="calendar"></div>
						<div class="calendar_events_details">
							<p class="ft-12">8 AM</p>
							<h3>Dance Our Night Event</h3>
							<p class="ft-14">iTest Factory </p>
						</div>
						<div class="calendar_events_details">
							<p class="ft-12">11 AM</p>
							<h3>Audio Launch Event</h3>
							<p class="ft-14">Meta4Systems </p>
						</div>
						<div class="calendar_events_details">
							<p class="ft-12">8 AM</p>
							<h3>Dance Our Night Event</h3>
							<p class="ft-14">iTest Factory </p>
						</div>-->
					</div>
				</div>
			</div>
        </div>

	  </div>
	  
	  <?php include 'includes/footer.php';?>

  </body>

  

  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center b-modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Registration </h5>
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
								    	<input type="email" class="form-control big_box" id="emailid" aria-describedby="emailHelp"  placeholder="" required>
									</div>
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-md-12">
				  					<div class="form-group">
								    	<label for="phoneno">Phone:</label>
								    	<input type="number" class="form-control big_box" id="phoneno" aria-describedby="emailHelp"  placeholder="" required>
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

	<script>
	    $(function() {
		    $('.calendar').pignoseCalendar();
		});
		
		
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
		  
		  $('.fnc-search-drop').each( function() {
			var to = $(this).data('search').toString();
			//alert(to);
			var text = $(this).find('[data-search="' + to + '"]').html();
			$(this).find('button span.search_by').html(text);
		  });
		  
		  /*$('.search-panel li a').on('click', function(e){
			var sp = $(this).closest('.search-panel');
			var to = $(this).html();
			var text = $(this).html();
			sp.data('search', to);
			console.log(sp.find('.search_by'));
			sp.find('button span.search_by').html(text);
		  });*/
		  
		  
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
						  slidesToShow: 3,
					  }
				  },
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
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
		  
		  $( "#function_tab" ).click(function() {
                $( "#artizt_functions" ).show();
                $( "#artizt_performanaces" ).hide();
                $( "#artizt_events" ).hide();
                $( "#artizt_exhibitions" ).hide();
                $( "#artizt_wellbeing" ).hide();
                $( "#artizt_fezt" ).hide();
                
          });
		  
		  $( "#performances_tab" ).click(function() {
                $( "#artizt_functions" ).hide();
                $( "#artizt_performanaces" ).show();
                $( "#artizt_events" ).hide();
                $( "#artizt_exhibitions" ).hide();
                $( "#artizt_wellbeing" ).hide();
                $( "#artizt_fezt" ).hide();
          });
          
          $( "#business_tab" ).click(function() {
                $( "#artizt_functions" ).hide();
                $( "#artizt_performanaces" ).hide();
                $( "#artizt_events" ).show();
                $( "#artizt_exhibitions" ).hide();
                $( "#artizt_wellbeing" ).hide();
                $( "#artizt_fezt" ).hide();
          });
          
          $( "#exhibitions_tab" ).click(function() {
                $( "#artizt_functions" ).hide();
                $( "#artizt_performanaces" ).hide();
                $( "#artizt_events" ).hide();
                $( "#artizt_exhibitions" ).show();
                $( "#artizt_wellbeing" ).hide();
                $( "#artizt_fezt" ).hide();
          });
          
          $( "#wellbeing_tab" ).click(function() {
                $( "#artizt_functions" ).hide();
                $( "#artizt_performanaces" ).hide();
                $( "#artizt_events" ).hide();
                $( "#artizt_exhibitions" ).hide();
                $( "#artizt_wellbeing" ).show();
                $( "#artizt_fezt" ).hide();
          });
          
          $( "#fezt_tab" ).click(function() {
                $( "#artizt_functions" ).hide();
                $( "#artizt_performanaces" ).hide();
                $( "#artizt_events" ).hide();
                $( "#artizt_exhibitions" ).hide();
                $( "#artizt_wellbeing" ).hide();
                $( "#artizt_fezt" ).show();
          });
          
		});
		
	</script>
</html>