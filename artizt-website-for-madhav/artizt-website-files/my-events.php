<?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
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
					<h2 class="text-black pull-left">My Events</h2>
					<a href="create-events.php" class="pull-right btn btn-select pt-2 pb-2 ft-14">Create New Event</a>
				</div>
			</div>
			
			<div class="vila-card">
			    <ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#current-events" role="tab" aria-controls="pills-home" aria-selected="true">Current Events</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#completed-events" role="tab" aria-controls="pills-profile" aria-selected="false">Completed Events</a>
				  </li>
				</ul>
				<div class="tab-content pad-20 pb-0" id="villa-tabContent">
				    <div class="tab-pane fade show active" id="current-events" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-12 mb-4">							
            					<div class="relatedevents-scroll">
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
            							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
            							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="completed-events" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="search-results-card events_results">
						    <div class="following-content">
            					<img src="images/events-banner.jpg" class="img-fluid" alt="" />
            					<div class="following-text d-none d-sm-block">
            						<div class="pad-10">
            							<h5>Vikram Movie Audio Launch</h5>
            							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
            						</div>
            						<!--<ul class="message-call">
            							<li>
            								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
            							</li>
            							<li>
            								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
            							</li>
            						</ul>-->
            					</div>
            					<div class="share-buttons">
            						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
            						<!--<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>-->
            						<div class="villa_dropdown top-0" >
            							<div class="dropdown">					  
            								<a href="#" class="dropdown-toggle dropdown-dots ft-22 mt-3 ml-2 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            									...
            								</a>
            							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            							    <a class="dropdown-item" href="#">Follow</a>
            							    <a class="dropdown-item" href="#">Save</a>
            							    <a class="dropdown-item" href="#">Tag</a>
            							    <a class="dropdown-item" href="#">Block</a>
            							    <a class="dropdown-item" href="#">Report</a>
            							  </div>
            							</div>
            						</div>
            					</div>
            					<div class="following-text d-block d-sm-none">
        							<div class="pad-15">
        								<h5>Goutham Menon</h5>
        								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
        							</div>
        						</div>
            				</div>
            				<div class="row">
            				    <div class="col-md-12">
            				        <hr class="mt-2 mb-2" />
            				    </div>
            				</div>
            				<div class="following-content">
            					<img src="images/events-banner.jpg" class="img-fluid" alt="" />
            					<div class="following-text d-none d-sm-block">
            						<div class="pad-10">
            							<h5>Vikram Movie Audio Launch</h5>
            							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
            						</div>
            						<!--<ul class="message-call">
            							<li>
            								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
            							</li>
            							<li>
            								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
            							</li>
            						</ul>-->
            					</div>
            					<div class="share-buttons">
            						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
            						<!--<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>-->
            						<div class="villa_dropdown top-0">
            							<div class="dropdown">					  
            								<a href="#" class="dropdown-toggle dropdown-dots ft-22 mt-3 ml-2 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            									...
            								</a>
            							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            							    <a class="dropdown-item" href="#">Follow</a>
            							    <a class="dropdown-item" href="#">Save</a>
            							    <a class="dropdown-item" href="#">Tag</a>
            							    <a class="dropdown-item" href="#">Block</a>
            							    <a class="dropdown-item" href="#">Report</a>
            							  </div>
            							</div>
            						</div>
            					</div>
            					<div class="following-text d-block d-sm-none">
        							<div class="pad-15">
        								<h5>Goutham Menon</h5>
        								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
        							</div>
        						</div>
            				</div>
            				<div class="row">
            				    <div class="col-md-12">
            				        <hr class="mt-2 mb-2" />
            				    </div>
            				</div>
            				<div class="following-content">
            					<img src="images/events-banner.jpg" class="img-fluid" alt="" />
            					<div class="following-text d-none d-sm-block">
            						<div class="pad-10">
            							<h5>Vikram Movie Audio Launch</h5>
            							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
            						</div>
            						<!--<ul class="message-call">
            							<li>
            								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
            							</li>
            							<li>
            								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
            							</li>
            						</ul>-->
            					</div>
            					<div class="share-buttons">
            						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
            						<!--<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>-->
            						<div class="villa_dropdown top-0">
            							<div class="dropdown">					  
            								<a href="#" class="dropdown-toggle dropdown-dots ft-22 mt-3 ml-2 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            									...
            								</a>
            							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            							    <a class="dropdown-item" href="#">Follow</a>
            							    <a class="dropdown-item" href="#">Save</a>
            							    <a class="dropdown-item" href="#">Tag</a>
            							    <a class="dropdown-item" href="#">Block</a>
            							    <a class="dropdown-item" href="#">Report</a>
            							  </div>
            							</div>
            						</div>
            					</div>
            					<div class="following-text d-block d-sm-none">
        							<div class="pad-15">
        								<h5>Goutham Menon</h5>
        								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
        							</div>
        						</div>
            				</div>
            				<div class="row">
            				    <div class="col-md-12">
            				        <hr class="mt-2 mb-2" />
            				    </div>
            				</div>
            				<div class="following-content">
            					<img src="images/events-banner.jpg" class="img-fluid" alt="" />
            					<div class="following-text d-none d-sm-block">
            						<div class="pad-10">
            							<h5>Vikram Movie Audio Launch</h5>
            							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
            						</div>
            						<!--<ul class="message-call">
            							<li>
            								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
            							</li>
            							<li>
            								<a href="#" class="message-icon">Call <i class="fa fa-phone" aria-hidden="true"></i></a>
            							</li>
            						</ul>-->
            					</div>
            					<div class="share-buttons">
            						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
            						<!--<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
            						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>-->
            						<div class="villa_dropdown top-0">
            							<div class="dropdown">					  
            								<a href="#" class="dropdown-toggle dropdown-dots ft-22 mt-3 ml-2 text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            									...
            								</a>
            							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            							    <a class="dropdown-item" href="#">Follow</a>
            							    <a class="dropdown-item" href="#">Save</a>
            							    <a class="dropdown-item" href="#">Tag</a>
            							    <a class="dropdown-item" href="#">Block</a>
            							    <a class="dropdown-item" href="#">Report</a>
            							  </div>
            							</div>
            						</div>
            					</div>
            					<div class="following-text d-block d-sm-none">
        							<div class="pad-15">
        								<h5>Goutham Menon</h5>
        								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. <a href="create-events.php">View Details</a></p>
        							</div>
        						</div>
            				</div>
            				<div class="row">
            				    <div class="col-md-12">
            				        <hr class="mt-2 mb-2" />
            				    </div>
            				</div>
        				</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Bookings</h2>
				</div>
			</div>
			<div class="vila-card">
			    <ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#wishlist" role="tab" aria-controls="pills-home" aria-selected="true">Wish List</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#booked-events" role="tab" aria-controls="pills-profile" aria-selected="false">Booked</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#events-history" role="tab" aria-controls="pills-profile" aria-selected="false">History</a>
				  </li>
				</ul>
				<div class="tab-content pad-20 pb-0" id="villa-tabContent">
				    <div class="tab-pane fade show active" id="wishlist" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-12 mb-4">							
            					<div class="relatedevents-scroll">
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
            							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
            							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="booked-events" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-12 mb-4">							
            					<div class="relatedevents-scroll">
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
            							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
            							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="events-history" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
            				<div class="col-md-12 mb-4">							
            					<div class="relatedevents-scroll">
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Online</span>
            							<img src="images/newevents1.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            								<!--<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>-->	
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            						    <a href="#"><span class="events-by"><i class="fa fa-video-camera" aria-hidden="true"></i> Virtual</span>
            							<img src="images/newevents3.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
            							</div>								
            						</div>
            						<div class="relatedevents p-real mb-3">
            							<a href="#"><img src="images/newevents2.jpg" class="img-fluid border-radius-top-10"></a>
            							<div class="heartic"><a href="#" class="hearticon2"><img src="images/heartbig.png" width="18"></a></div>
            							<div class="relatedevents_desc">
            								<h4>Learn Flim Acting!</h4>
            								<span>THU, MAY 29 · 4:30 PM</span>
            								<p class="mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Chennai, Kodampakkam</p>
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
									<?php include 'includes/events-calender.php'; ?>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="others-profile-right">
            <div class="row">
				<div class="col-md-12 pad-top-50 mt-1  pad-bot-30">
					<div class="calender_outer">
						<?php include 'includes/events-calender.php'; ?>
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
				
				$(".events_results").mCustomScrollbar({
					//theme:"minimal"
				});
				
			});
		})(jQuery);
    
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
	    $(function() {
		    $('.calendar').pignoseCalendar();
		});
		
		
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		
			
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