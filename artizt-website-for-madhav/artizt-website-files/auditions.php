 
 <?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    
    <style>
    
        .btn-header-link:after {
            content: "\f068";
            font-family: 'Line Awesome Free';
            font-weight: 900;
            font-size: 20px;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
            position: absolute;
            right:15px;
            top:15px;
            padding-top: 5px;
        }
        
        .btn-header-link.collapsed:after {
            content: "\f067";
            font-family: 'Line Awesome Free';
            font-weight: 900;
            font-size: 20px;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
            position: absolute;
            padding-top: 5px;
            right:15px;
            top:12px;
        }
    
        .search-results-card h3{
            color: #8083a3;
            font-size: 14px;
        }
        
        .nav-pills li:first-child a{
            padding-left:0px;
        }
        
        .logo_round img{
            border-radius:50%;
        }
        .worksace_propetise{
            min-height:auto;    
        }
        
        
        .play-btn{
            position: absolute;
            left:0;
            right:0;
            top:60px;
            z-index:3;
        }
        
        .play-btn img{
            width:40px;
        }
        
        .card-header{
            border-bottom:none;
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
		            <h2 class="text-black pull-left">Auditions & Casting - Vikram</h2>
		            <a href="#" class="pull-right float-xs-none btn btn-select pt-2 pb-2 ft-14">Create New Auditions</a>
		        </div>
		    </div>
			<div class="accordion review_accordion border-radius-10 mar-bot-20" id="faq" >
                <div class="mb-1">
                    <div class="search-results-card pad-15 mb-3">
                        <div class="card-header p-0" id="faqhead1">
                            <a href="#" class="btn btn-header-link btn-block text-left pl-0 pt-0 pb-0 pr-4" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">Female Actor Positive Lead Role - <span class="ft-14">(Age 25 -40)</span></a>
                        </div>
                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body text-dark pl-0 pr-0">
                                <div class="row mb-3">
                			        <div class="col-md-3">
                			            <!--<h3 class="fw-500 mb-3">Projects</h3>-->
                			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
                			        </div>
                			        <div class="col-md-9">
                			            <!--<h3 class="fw-500 mb-3">Pitch and project Description</h3>-->
                			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
                			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
                			            <p class="ft-14"><a href="#">View More</a></p>
                			        </div>
                			    </div>
                			    <div class="row">
                			        <div class="col-md-12">
                			            <ul class="nav nav-pills mb-0 pl-0 pr-0" id="villa-tab" role="tablist">
                        				  <li class="nav-item">
                        				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#applied-artizt" role="tab" aria-controls="pills-home" aria-selected="true">Applied Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#waiting-artz" role="tab" aria-controls="pills-profile" aria-selected="false">Waiting list Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#selected-artz" role="tab" aria-controls="pills-contact" aria-selected="false">Selected Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="talent-tab" data-toggle="pill" href="#talent-artz" role="tab" aria-controls="pills-contact" aria-selected="false">Talent Pool</a>
                        				  </li>
                        				</ul>
                        				<div class="tab-content pt-4" id="villa-tabContent">
                        					<div class="tab-pane fade show active" id="applied-artizt" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane" id="waiting-artz" role="tabpanel" aria-labelledby="pills-home-tab">
                        					    <div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="selected-artz" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="talent-artz" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
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
                        </div>
                    </div>
                </div>
                <div class="mb-1">
                    <div class="search-results-card pad-15 mb-3">
                        <div class="card-header p-0" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed btn-block text-left pl-0 pt-0 pb-0 pr-4" data-toggle="collapse" data-target="#faq2"
                            aria-controls="faq1">Female Actor Negative Lead Role - <span class="ft-14">(Age 25 -40)</span></a>
                        </div>
                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body text-dark pl-0 pr-0">
                                <div class="row mb-3">
                			        <div class="col-md-3">
                			            <!--<h3 class="fw-500 mb-3">Projects</h3>-->
                			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
                			        </div>
                			        <div class="col-md-9">
                			            <!--<h3 class="fw-500 mb-3">Pitch and project Description</h3>-->
                			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
                			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
                			            <p class="ft-14"><a href="#">View More</a></p>
                			        </div>
                			    </div>
                			    <div class="row">
                			        <div class="col-md-12">
                			            <ul class="nav nav-pills mb-0 pl-0 pr-0" id="villa-tab" role="tablist">
                        				  <li class="nav-item">
                        				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#applied-artizt2" role="tab" aria-controls="pills-home" aria-selected="true">Applied Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#waiting-artz2" role="tab" aria-controls="pills-profile" aria-selected="false">Waiting list Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#selected-artz2" role="tab" aria-controls="pills-contact" aria-selected="false">Selected Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="talent-tab" data-toggle="pill" href="#talent-artz2" role="tab" aria-controls="pills-contact" aria-selected="false">Talent Pool</a>
                        				  </li>
                        				</ul>
                        				<div class="tab-content pt-4" id="villa-tabContent">
                        					<div class="tab-pane fade show active" id="applied-artizt2" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane" id="waiting-artz2" role="tabpanel" aria-labelledby="pills-home-tab">
                        					    <div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="selected-artz2" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="talent-artz2" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
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
                        </div>
                    </div>
                </div>
                <div class="mb-1">
                    <div class="search-results-card pad-15 mb-3">
                        <div class="card-header p-0" id="faqhead3">
                            <a href="#" class="btn btn-header-link btn-block text-left collapsed pl-0 pt-0 pb-0 pr-4" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq1">Male Actor Positive Lead Role - <span class="ft-14">(Age 25 -40)</span></a>
                        </div>
                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body text-dark pl-0 pr-0">
                                <div class="row mb-3">
                			        <div class="col-md-3">
                			            <!--<h3 class="fw-500 mb-3">Projects</h3>-->
                			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
                			        </div>
                			        <div class="col-md-9">
                			            <!--<h3 class="fw-500 mb-3">Pitch and project Description</h3>-->
                			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
                			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
                			            <p class="ft-14"><a href="#">View More</a></p>
                			        </div>
                			    </div>
                			    <div class="row">
                			        <div class="col-md-12">
                			            <ul class="nav nav-pills mb-0 pl-0 pr-0" id="villa-tab" role="tablist">
                        				  <li class="nav-item">
                        				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#applied-artizt3" role="tab" aria-controls="pills-home" aria-selected="true">Applied Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#waiting-artz3" role="tab" aria-controls="pills-profile" aria-selected="false">Waiting list Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#selected-artz3" role="tab" aria-controls="pills-contact" aria-selected="false">Selected Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="talent-tab" data-toggle="pill" href="#talent-artz3" role="tab" aria-controls="pills-contact" aria-selected="false">Talent Pool</a>
                        				  </li>
                        				</ul>
                        				<div class="tab-content pt-4" id="villa-tabContent">
                        					<div class="tab-pane fade show active" id="applied-artizt3" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane" id="waiting-artz3" role="tabpanel" aria-labelledby="pills-home-tab">
                        					    <div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="selected-artz3" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="talent-artz3" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
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
                        </div>
                    </div>
                </div>
                <div class="mb-1">
                    <div class="search-results-card pad-15 mb-3">
                        <div class="card-header p-0" id="faqhead4">
                            <a href="#" class="btn btn-header-link collapsed btn-block text-left pl-0 pt-0 pb-0 pr-4" data-toggle="collapse" data-target="#faq4"
                            aria-controls="faq1">Male Actor Negative Lead Role - <span class="ft-14">(Age 25 -40)</span></a>
                        </div>
                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                            <div class="card-body text-dark pl-0 pr-0">
                                <div class="row mb-3">
                			        <div class="col-md-3">
                			            <!--<h3 class="fw-500 mb-3">Projects</h3>-->
                			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
                			        </div>
                			        <div class="col-md-9">
                			            <!--<h3 class="fw-500 mb-3">Pitch and project Description</h3>-->
                			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
                			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
                			            <p class="ft-14"><a href="#">View More</a></p>
                			        </div>
                			    </div>
                			    <div class="row">
                			        <div class="col-md-12">
                			            <ul class="nav nav-pills mb-0 pl-0 pr-0" id="villa-tab" role="tablist">
                        				  <li class="nav-item">
                        				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#applied-artizt4" role="tab" aria-controls="pills-home" aria-selected="true">Applied Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#waiting-artz4" role="tab" aria-controls="pills-profile" aria-selected="false">Waiting list Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#selected-artz4" role="tab" aria-controls="pills-contact" aria-selected="false">Selected Artizt</a>
                        				  </li>
                        				  <li class="nav-item">
                        				    <a class="nav-link" id="talent-tab" data-toggle="pill" href="#talent-artz4" role="tab" aria-controls="pills-contact" aria-selected="false">Talent Pool</a>
                        				  </li>
                        				</ul>
                        				<div class="tab-content pt-4" id="villa-tabContent">
                        					<div class="tab-pane fade show active" id="applied-artizt4" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane" id="waiting-artz4" role="tabpanel" aria-labelledby="pills-home-tab">
                        					    <div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="selected-artz4" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew fddd</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a><a class="text-dark mr-2" href="#"><i class="las la-calendar-alt"></i></a><a class="text-dark mr-2" href="#"><i class="las la-file-pdf"></i></a><a class="text-dark mr-2" href="#"><i class="las la-money-bill-wave"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                                    			</div>
                        					</div>
                        					<div class="tab-pane " id="talent-artz4" role="tabpanel" aria-labelledby="pills-home-tab">
                        						<div class="row">
                                					<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Bibin Mathew</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p> 
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Kamal</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/asin-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Asin</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/siddarth-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewimages"><img src="images/image-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Siddarth</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/video-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewvideo"><img src="images/play-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Thangaraj</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
                                    								</div>
                                    							</div>
                                    						</div>								
                                    					</div>
                									</div>
                									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-30">
                                					    <div class="worksace">
                                    						<div class="villa_dropdown right-25">
                                    							<div class="dropdown">					  
                                    								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
                                    							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    							    <a class="dropdown-item" href="#">Select</a>
                                    							    <a class="dropdown-item" href="#">Waiting</a>
                                    							    <a class="dropdown-item" href="#">Reject</a>
                                    							    <a class="dropdown-item" href="#">Talent Pool</a>
                                    							    <a class="dropdown-item" href="#">Save</a>
                                    							  </div>
                                    							</div>
                                    						</div>
                                    						<img src="images/audio-img.jpg" class="img-fluid relateimg">
                                    						<div class="play-btn"><a href="#" data-toggle="modal" data-target="#viewaudio"><img src="images/audio-button.png" /></a></div>
                                    						<div class="worksace_propetise">
                                    							<div class="row">
                                    								<div class="col-md-12">
                                    								    <div class="logo_round">
                                    										<img src="images/photos-image1.jpg" class="img-fluid">
                                    									</div>
                                    									<h3 class="ft-14 fw-500 text-left mb-0">Viknesh</h3>
                                    									<p  class="ft-18 text-left pt-2"><a href="#" class="mr-2 text-dark ft-20"><i class="lab la-rocketchat"></i></a><a class="text-dark mr-2" href="#"><i class="las la-phone-volume"></i></a></p>
                                    									<p class="ft-12 text-left"><a href="#" data-toggle="modal" data-target="#viewvideo">View More...</a></p>
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
                        </div>
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
    
      
    
    
        <div class="modal fade" id="viewimages" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Uploaded Media</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		            <div class="row">
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-1.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-2.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-3.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-4.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-2.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-1.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-3.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-3.jpg" class="img-fluid border-radius-15">
						</div>
					</div>	
	  		  </div>

			      <!--<div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Apply Now</button>
			      </div>-->     
		    </div>
		  </div>
		</div>
        <div class="modal fade" id="viewvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Uploaded Media</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		            <div class="row">
						<div class="col-md-4 col-sm-4 col-6 text-center mar-bot-20">
							<iframe width="100%" src="https://www.youtube.com/embed/HsAhxHWqYwM" title="Cobra - Official Trailer | Chiyaan Vikram | AR Rahman | Ajay Gnanamuthu | 7 Screen Studio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-4 col-sm-4 col-6 text-center mar-bot-20">
							<iframe width="100%" src="https://www.youtube.com/embed/nf51aIeEWa0" title="Vikram Vedha Teaser | Hrithik Roshan, Saif Ali Khan | Pushkar & Gayatri | Radhika Apte|Bhushan Kumar" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="col-md-4 col-sm-4 col-6 text-center mar-bot-20">
						    <iframe width="100%" src="https://www.youtube.com/embed/PXqiozAAELg" title="Arrtham - Tamil Teaser | Shraddha Das, Master Mahendra, Sahiti | Harshavardhan | Manikanth" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>	
	  		  </div>

			      <!--<div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Apply Now</button>
			      </div>-->     
		    </div>
		  </div>
		</div>
        <div class="modal fade" id="viewaudio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Uploaded Media</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		            <div class="row">
						<div class="col-md-12 col-sm-12 col-12 mar-bot-20">
						    <audio src="audio/sample-12s.mp3" type="audio/mpeg" controls="" controlslist="nodownload" width="99"></audio>
						</div>
						<div class="col-md-12 col-sm-12 col-12 mar-bot-20">
						    <audio src="audio/sample-15s.mp3" type="audio/mpeg" controls="" controlslist="nodownload" width="99"></audio>
						</div>
					</div>	
	  		  </div>

			      <!--<div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Apply Now</button>
			      </div>-->     
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