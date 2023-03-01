
<?php include 'includes/top.php';?>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    
    <style>
        .moretext {
          display: none;
        }
        
        .testimonial-scroll .slick-prev, .testimonial-scroll .slick-next{
            top:-7px;
        }
        .testimonial-scroll .slick-prev{
            left:inherit !important;
        }
        .testimonial-scroll .slick-next{
            right: 0px !important;
        }
        .select2-container{
    		z-index: 9999;
    	}
    	.select2{
    		border-radius: 0.25rem;
    		min-height: 45px;
    	}
    	
    	.casting{
    		max-height: 420px;
    		overflow: auto;
    	}
        
    </style>
  </head>
  <body>
       
  <?php include 'includes/header-main.php';?>


      <div class="search-results-main">
            <div class="search-results-left" id="mySidenav">
        		<?php include 'includes/side-profile.php';?>
        		<?php // include 'includes/side-search-menu.php';?>
        		<!--<hr>-->
        		<?php include 'includes/side-menu.php';?>
		    </div>
            <div class="search-results-right">
                <section class="profile-header pt-3" >
                  	<div class="container">
                  		<div class="row">
                  			<div class="col-sm-12">
                  				<div class="profile-card">
                  					<div class="moviebg">
                  						<div class="artist-btn">
                  							<a href="#" class="btn btn-padding-10 btn-select pr-3 pl-3 ft-12 d-none d-sm-block d-md-block">Change Cover Image</a>
                  							<a href="#" class="btn  btn-select pr-3 pl-3 ft-12 d-md-none d-sm-none d-inine-block" style="width: 50px; height: 50px; text-align: center;  padding-top: 14px;"><i class="fa fa-pencil-square-o ft-20" aria-hidden="true"></i></a>
                  						</div>
                  					</div>
                  					
                  					<div class="profile_description mar-bot-30">
                  						<div class="row">
                  							<div class="col-md-4 mar-top-10 d-none d-sm-none d-md-block">
                  								<ul class="profile-counter">
            										<li>
            											<span class="counter" data-counterup-time="15">1345</span>
            											Profile Views
            										</li>
            										<li>
            											<span class="counter">1245</span>
            											Followers
            										</li>
            										<li>
            											<span class="counter">100000</span>
            											Likes
            										</li>
            										<li>
            											<span class="counter">24</span>
            											Comments
            										</li>
            									</ul>
            									<!--<div class="availability_project">
            										<p>Availability for Projects<br /><span >Busy</span></p>
            									</div>-->
            
                  							</div>
                  							<div class="col-md-4 text-center profile_box">
                  								<img src="images/vikramlogo.png" class="img-fluid round-radius border-white">
                          						<h3>Vikram</h3>
                          						<p class="ft-14 text-dark">Project Duration : 07/2020 - 01/2022</p>
                          						<p>Kamal / Vijay sethupathi / Suriya</p>
                          						<span><a href="#">Lokesh Kanakaraj</a></span>
                          						<div class="share-buttons d-flex justify-content-center">
            										<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a></span>
            										<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></span>
            										<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
            										<span class="share-btn"><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i></a></span>
            										<span class="share-btn"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></span>
            										<span class="share-btn"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i></a></span>
            									</div>
            									<div class="dropdown_menu d-md-none d-sm-block" style="top: 60px; right: 20px;">
            										<div class="villa_dropdown">
            											<div class="dropdown">					  
            												<a href="#" class="dropdown-toggle dropdown-dots ft-30 text-dark mt-2 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            													...
            												</a>
            											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            											    <a class="dropdown-item" href="#">Follow</a>
            											    <a class="dropdown-item" href="#">Unfollow</a>
            											    <a class="dropdown-item" href="#">Save</a>
            											    <a class="dropdown-item" href="#">Tag</a>
            											    <a class="dropdown-item" href="#">Tag Credits</a>
            											    <a class="dropdown-item" href="#">Link</a>
            											    <a class="dropdown-item" href="#">Rate</a>
            											    <a class="dropdown-item" href="#">Review</a>
            											    <a class="dropdown-item" href="#">Add to Project</a>
            											    <a class="dropdown-item" href="#">Add to Group</a>
            											    <a class="dropdown-item" href="#">Compare</a>
            											    <a class="dropdown-item" href="#">Block</a>
            											    <a class="dropdown-item" href="#">Report</a>
            											  </div>
            											</div>
            										</div>
            									</div>
            
            									<div class="d-md-none d-sm-block text-center" style="clear: both;">										
            										<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-select border-radius-30 minwidth-150 pt-2 pb-2">Promote Project</a>
            									</div>
            									<div class="d-md-none d-sm-block text-center" >										
            										<ul class="profile-counter">
            											<li>
            												<span class="counter" data-counterup-time="15">1345</span>
            												Profile Views
            											</li>
            											<li>
            												<span class="counter">1245</span>
            												Followers
            											</li>
            											<li>
            												<span class="counter">100000</span>
            												Likes
            											</li>
            											<li>
            												<span class="counter">24</span>
            												Comments
            											</li>
            										</ul>
            										<!--<div class="availability_project">
            											<p>Availability for Projects<br /><span >Busy</span></p>
            										</div>-->
            									</div>
                  							</div>
                  							<div class="col-md-4 d-none d-sm-none d-md-block">
                  								<div class="dropdown_menu">
            										<div class="villa_dropdown">
            											<div class="dropdown">					  
            												<a href="#" class="dropdown-toggle dropdown-dots ft-30 text-dark mt-2 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            													...
            												</a>
            											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            											    <a class="dropdown-item" href="#">Follow</a>
            											    <a class="dropdown-item" href="#">Unfollow</a>
            											    <a class="dropdown-item" href="#">Save</a>
            											    <a class="dropdown-item" href="#">Tag</a>
            											    <a class="dropdown-item" href="#">Tag Credits</a>
            											    <a class="dropdown-item" href="#">Link</a>
            											    <a class="dropdown-item" href="#">Rate</a>
            											    <a class="dropdown-item" href="#">Review</a>
            											    <a class="dropdown-item" href="#">Add to Project</a>
            											    <a class="dropdown-item" href="#">Add to Group</a>
            											    <a class="dropdown-item" href="#">Compare</a>
            											    <a class="dropdown-item" href="#">Block</a>
            											    <a class="dropdown-item" href="#">Report</a>
            											  </div>
            											</div>
            										</div>
            									</div>
            
            									<div class="text-right pad-top-70 d-none d-sm-none d-md-block">
            										<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-normal-white border-radius-30 minwidth-150 pt-2 pb-2 mar-right-40">Promote Project</a>
            									</div>
                  							</div>
                  						</div>
                  					</div>
                  					
                  				</div>
                  			</div>
                  		</div>
                  	</div>
                  </section>



	  <section class="profile-view">
		  <div class="container">
			<div class="row">
				<div class="col-lg-4">
				    <div class="profile-left-card description-card mar-bot-30 bg-white border-radius-10 pad-15">
				        <div class="row">
    				        <div class="col-sm-12">
    					        <h3 class="pad-bot-10 pt-0 pl-0 heading3 mb-3">Projects Stories</h3>
    					    </div>
    				    </div>
				        <div class="accordion review_accordion border-radius-10 mar-bot-20" id="faq" >
                            <div>
                                <div class="card-header p-0" id="faqhead1">
                                    <a href="#" class="btn btn-header-link btn-block text-left pl-0 pr-0" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1">Project Overview</a>
                                </div>
                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body text-dark pl-0 pr-0">
                                        <p class="text-dark ft-14 mb-1">Vikram is a 2022 Indian Tamil-language action thriller film written and directed by Lokesh Kanagaraj and produced by Raaj Kamal Films International. </p>
                                        <p class="moretext text-dark mb-1 ft-14">
                                          The film stars Kamal Haasan, Vijay Sethupathi and Fahadh Faasil. Kalidas Jayaram, Narain and Chemban Vinod Jose play supporting roles while Suriya makes a cameo appearance as Rolex. The film's soundtrack and score are composed by Anirudh Ravichander, with cinematography handled by Girish Gangadharan and editing done by Philomin Raj.
                                        </p>
                                        <a class="moreless-button ft-14 " href="javascript:void(0);">Read more</a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="border-radius-10">
                                <div class="card-header p-0" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed btn-block text-left pl-0 pr-0" data-toggle="collapse" data-target="#faq2"
                                    aria-controls="faq1">Development</a>
                                </div>
                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body text-dark pl-0 pr-0">
                                        <p class="text-dark ft-14 mb-1">Lokesh Kanagaraj was signed by Kamal Haasan's production house Raaj Kamal Films International to direct a film for the studio during November 2019</p>
                                        <p class="moretext text-dark mb-1 ft-14">
                                          For which he had previously mentioned his admiration of Kamal Haasan's work, noting that two of the actor's films, Sathya (1988) and Virumaandi (2004), had influenced him to become a film director.
                                        </p>
                                        <a class="moreless-button ft-14" href="javascript:void(0);">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-md-12">
                                <p class="ft-14 pt-3 text-dark">Project Created : 07/2021<br />Project Completed : 07/2021</p>
                            </div>
                        </div>-->
                        <div class="text-right mb-0">
				            <a href="#" class="ft-14" data-toggle="modal" data-target="#newstory">Create New Story Boxes</a>
				        </div>
				    </div>
				    
				    <div class="profile-left-card description-card mar-bot-30 bg-white border-radius-10 pad-15">
				        <div class="row">
    				        <div class="col-sm-12">
    					        <h3 class="pad-bot-10 pt-0 pl-0 heading3 mb-3">Casting Call (Auditions)</h3>
    					    </div>
    				    </div>
				        <div class="casting">
				            <div class="row">
    				            <div class="col-md-12 auditions">
    				                <div class="auditions_img"><a href="auditions-view.php"><img src="images/act.jpg" /></a></div>
    				                <div class="auditions_text">
    				                    <h3><a href="auditions-view.php">Female Actor Negative Lead Role</a></h3>
    				                    <p>Female, 18-45 Yrs<br /><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Model</a></span></p>
    				                </div><br clear="all"/>
    				                <hr class="mt-0 mb-0" />
    				            </div>
    				            <div class="col-md-12 auditions">
    				                <div class="auditions_img"><a href="auditions-view.php"><img src="images/act.jpg" /></a></div>
    				                <div class="auditions_text">
    				                    <h3><a href="auditions-view.php">Female Actor Negative Lead Role</a></h3>
    				                    <p>Female, 25-45 Yrs<br /><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Model</a></span></p>
    				                </div><br clear="all"/>
    				                <hr class="mt-0 mb-0" />
    				            </div>
    				            <div class="col-md-12 auditions">
    				                <div class="auditions_img"><a href="auditions-view.php"><img src="images/act.jpg" /></a></div>
    				                <div class="auditions_text">
    				                    <h3><a href="auditions-view.php">Female Actor Negative Lead Role</a></h3>
    				                    <p>Female, 18-30 Yrs<br /><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Dancer</a></span></p>
    				                </div><br clear="all"/>
    				                <hr class="mt-0 mb-0" />
    				            </div>
    				            <div class="col-md-12 auditions">
    				                <div class="auditions_img"><a href="auditions-view.php"><img src="images/act.jpg" /></a></div>
    				                <div class="auditions_text">
    				                    <h3><a href="auditions-view.php">Female Actor Negative Lead Role</a></h3>
    				                    <p>Female, 18-45 Yrs<br /><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Model</a></span></p>
    				                </div>
    				            </div>
    				        </div>
				        </div>
				        
                        
				    </div>
				    
				    
				    
					<div class="profile-card profile-left-card description-card min-height-auto p-0">
						<div class="row">
						    <div class="col-sm-12">
						        <h3 class="pad-bot-10 pt-3 pl-3 heading3 mb-0">Review</h3>
						    </div>
                			<div class="col-sm-12">
                    			<div class="review">	
                    				<div class="review-block">
                    					<div class="row">
                    						<div class="col-sm-3">
                    							<img src="images/awads.jpg" class="round-radius img-fluid">
                    						</div>
                    						<div class="col-sm-9">
                    						    <div class="review-block-title">Behindwoods</div>
                    						    <div class="review_rate"><sapn class="ft-16">4/</sapn><span class="ft-10">5</span></div>
                    							<div class="review-block-rate">
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star" aria-hidden="true"></span>
                                                </div>
                                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    						</div>
                    					</div>
                    				</div>
                    				<div class="review-block">
                    					<div class="row">
                    						<div class="col-sm-3">
                    							<img src="images/awads.jpg" class="round-radius img-fluid">
                    						</div>
                    						<div class="col-sm-9">
                    						    <div class="review-block-title">Vikatan</div>
                    						    <div class="review_rate"><sapn class="ft-16">3/</sapn><span class="ft-10">5</span></div>
                    							<div class="review-block-rate">
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star" aria-hidden="true"></span>
                                                	  <span class="fa fa-star" aria-hidden="true"></span>
                                                </div>
                                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    						</div>
                    					</div>
                    				</div>
                    				<div class="review-block">
                    					<div class="row">
                    						<div class="col-sm-3">
                    							<img src="images/awads.jpg" class="round-radius img-fluid">
                    						</div>
                    						<div class="col-sm-9">
                    						    <div class="review-block-title">Behindwoods</div>
                    						    <div class="review_rate"><sapn class="ft-16">4/</sapn><span class="ft-10">5</span></div>
                    							<div class="review-block-rate">
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star" aria-hidden="true"></span>
                                                </div>
                                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    						</div>
                    					</div>
                    				</div>
                    				<div class="review-block">
                    					<div class="row">
                    						<div class="col-sm-3">
                    							<img src="images/awads.jpg" class="round-radius img-fluid">
                    						</div>
                    						<div class="col-sm-9">
                    						    <div class="review-block-title">Behindwoods</div>
                    						    <div class="review_rate"><sapn class="ft-16">4/</sapn><span class="ft-10">5</span></div>
                    							<div class="review-block-rate">
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star star-selected" aria-hidden="true"></span>
                                                	  <span class="fa fa-star" aria-hidden="true"></span>
                                                </div>
                                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    						</div>
                    					</div>
                    				</div>
                    			</div>
                			</div>
                		</div>
					</div>
					
				</div>
				<div class="col-sm-12 col-md-12 col-lg-8">
					<div class="vila-card mar-bot-30">
						<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="photos-tab" data-toggle="pill" href="#photos" role="tab" aria-controls="pills-photos" aria-selected="false">Photos</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="videos-tab" data-toggle="pill" href="#videos" role="tab" aria-controls="pills-videos" aria-selected="false">Videos</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="castcrew-tab" data-toggle="pill" href="#castcrew" role="tab" aria-controls="pills-castcrew" aria-selected="false">Cast & Crew / Team</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="credits-tab" data-toggle="pill" href="#credits" role="tab" aria-controls="pills-castcrew" aria-selected="false">Credits</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="moviepreviwe-tab" data-toggle="pill" href="#moviepreviwe" role="tab" aria-controls="pills-moviepreviwe" aria-selected="true">Awards and achievements</a>
						  </li>
						  
						  
						  
						</ul>
						<div class="tab-content pad-20" id="villa-tabContent">
							<div class="tab-pane" id="moviepreviwe" role="tabpanel" aria-labelledby="pills-home-tab">
								
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 sm-pad-bot-0 pt-0 pull-left">Awards and Achievements</h3>
										<a href="javascript:void(0);" class="pull-right sm-pull-left ft-14" data-toggle="modal" data-target="#addawards">Add Awards</a>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/awads.jpg" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Best filam</h3>
												<p>Vigadan Awards</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/awads.jpg" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Best filam</h3>
												<p>Vigadan Awards</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/awads.jpg" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Best filam</h3>
												<p>Vigadan Awards</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/awads.jpg" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Best filam</h3>
												<p>Vigadan Awards</p>
											</span>					
										</div>
									</div>

								</div>
							</div>
							<div class="tab-pane fade show active" id="photos" role="tabpanel" aria-labelledby="pills-photos">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Development Photos</h3>
										<a href="javascript:void(0);" class="pull-right ft-14" data-toggle="modal" data-target="#addphotos">Create List</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image1.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image2.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image3.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image4.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image1.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image2.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image3.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<div class="cratenew">
										    <div class="text_align text-center"> 
    											<a href="#" class="create_new_group">+</a><br>
    											<a href="#" class="ft-14 create_group">Add More</a>
    										</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 pad-top-10">
										<h3 class="pad-bot-15 pt-0 pull-left">Making Photos</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image1.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image2.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image3.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image4.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image1.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image2.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<img src="images/photos-image3.jpg" class="img-fluid border-radius-15">
									</div>
									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
										<div class="cratenew">
										    <div class="text_align text-center"> 
    											<a href="#" class="create_new_group">+</a><br>
    											<a href="#" class="ft-14 create_group">Add More</a>
    										</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="videos" role="tabpanel" aria-labelledby="pills-videos">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Videos</h3>
										<a href="javascript:void(0);" class="pull-right ft-14" data-toggle="modal" data-target="#addvideos">Create Play List</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-6 mb-3">
										<iframe class="border-radius-15" width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="col-md-4 col-sm-6 mb-3">
										<iframe class="border-radius-15" width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="col-md-4 col-sm-6 mb-3">
										<div class="cratenew">
										    <div class="text_align text-center"> 
    											<a href="#" class="create_new_group">+</a><br>
    											<a href="#" class="ft-14 create_group">Add More</a>
    										</div>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Trailers</h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-6 mb-3">
										<iframe class="border-radius-15" width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="col-md-4 col-sm-6 mb-3">
										<iframe class="border-radius-15" width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="col-md-4 col-sm-6 mb-3">
										<div class="cratenew">
										    <div class="text_align text-center"> 
    											<a href="#" class="create_new_group">+</a><br>
    											<a href="#" class="ft-14 create_group">Add More</a>
    										</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="castcrew" role="tabpanel" aria-labelledby="pills-castcrew">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Cast & Crew / Team</h3>
										<a href="javascript:void(0);" class="pull-right ft-14" data-toggle="modal" data-target="#addteam">Create Team</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Kamal Haasan</h3>
												<p>as Arun Kumar Vikram (Karnan)</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Vijay Sethupathi</h3>
												<p>as Santhanam</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Fahad Faasil</h3>
												<p>as Amar</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Kalidas Jayaram</h3>
												<p>as Prapanjan</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Narain</h3>
												<p>as Inspector Bejoy(credit only)</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Chemban Vinod Jose</h3>
												<p>as Police Chief Jose</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Suriya</h3>
												<p>as Rolex</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Santhana Bharathi</h3>
												<p>as Uppiliappan</p>
											</span>					
										</div>
									</div>
									<div class="col-sm-6">
										<div class="slide-txt pad-top-20">
											<span class="cast_crow"><img src="images/kamal.png" class="round-radius img-fluid"></span>
											<span class="cast_crow_text">
												<h3 class="ft-16">Gayathrie</h3>
												<p>as Gayathri</p>
											</span>					
										</div>
									</div>
								</div>
							</div>
                            <div class="tab-pane" id="credits" role="tabpanel" aria-labelledby="pills-photos">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Credits</h3>
										<a href="javascript:void(0);" class="pull-right ft-14" data-toggle="modal" data-target="#addcredits">Add Credits</a>
									</div>
								</div>
								<div class="row">
								    
									<div class="col-md-12 col-sm-12 col-12 text-center mar-bot-20">
										<span class="cast_crow mb-3"><img src="images/kamal.png" data-toggle="tooltip" data-placement="top" title="Kamal Haasan" class="round-radius img-fluid"></span>
										<span class="cast_crow mb-3"><img src="images/photos-image1.jpg" class="round-radius img-fluid" data-toggle="tooltip" data-placement="top" title="Vijay Sethupathi"></span>
										<span class="cast_crow mb-3"><img src="images/photos-image2.jpg" class="round-radius img-fluid" data-toggle="tooltip" data-placement="top" title="Fahad Faasil"></span>
										<span class="cast_crow mb-3"><img src="images/photos-image3.jpg" class="round-radius img-fluid" data-toggle="tooltip" data-placement="top" title="Kalidas Jayaram"></span>
										<span class="cast_crow mb-3"><img src="images/photos-image4.jpg" class="round-radius img-fluid" data-toggle="tooltip" data-placement="top" title="Narain"></span>
										<span class="cast_crow mb-3"><img src="images/kamal.png" class="round-radius img-fluid" data-toggle="tooltip" data-placement="top" title="Chemban Vinod Jose"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="vila-card pad-15">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-20 pt-0 pull-left ft-18">Press Release</h3>		
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="press-release">
											<div class="box-showdow-none">
												<img src="images/pressrelise1.jpg" class="img-fluid border-radius-15"/>
											</div>
											<div class="box-showdow-none">
												<img src="images/pressrelise1.jpg" class="img-fluid border-radius-15"/>
											</div>
											<div class="box-showdow-none">
												<img src="images/pressrelise1.jpg" class="img-fluid border-radius-15"/>
											</div>
											<div class="box-showdow-none">
												<img src="images/pressrelise1.jpg" class="img-fluid border-radius-15"/>
											</div>
											<div class="box-showdow-none">
												<img src="images/pressrelise1.jpg" class="img-fluid border-radius-15"/>
											</div>
											<div class="box-showdow-none">
												<img src="images/pressrelise1.jpg" class="img-fluid border-radius-15"/>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="vila-card pad-15">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-20 pt-0 pull-left ft-18">Media Release</h3>		
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mediarelease">
											<div class="box-showdow-none">
												<iframe width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
											<div class="box-showdow-none">
												<iframe width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
											<div class="box-showdow-none">
												<iframe width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
											<div class="box-showdow-none">
												<iframe width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

        
					<div class="vila-card pad-20">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-20 pt-0 pull-left ft-18">Linked Accounts</h3>										
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p><i class="fa fa-google ft-18 mr-2" aria-hidden="true"></i> bibinmathew@gmail.com</p>
							</div>
							<div class="col-sm-6">
								<p><i class="fa fa-facebook ft-18 mr-2" aria-hidden="true"></i> bibinmathew@facebook.com</p>
							</div>
							<div class="col-sm-6">
								<p><i class="fa fa-apple ft-18 mr-2" aria-hidden="true"></i> bibinmathew@ios.com</p></div>
							<div class="col-sm-6"><p><i class="fa fa-instagram ft-18 mr-2" aria-hidden="true"></i> bibinmathew@instagram.com</p></div>
						</div>
					</div>	
					
					<!--<div class="vila-card pad-20">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-20 pt-0 pull-left ft-18">Discussions</h3>										
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p><i class="fa fa-google ft-18 mr-2" aria-hidden="true"></i> bibinmathew@gmail.com</p>
							</div>
							<div class="col-sm-6">
								<p><i class="fa fa-facebook ft-18 mr-2" aria-hidden="true"></i> bibinmathew@facebook.com</p>
							</div>
							<div class="col-sm-6">
								<p><i class="fa fa-apple ft-18 mr-2" aria-hidden="true"></i> bibinmathew@ios.com</p></div>
							<div class="col-sm-6"><p><i class="fa fa-instagram ft-18 mr-2" aria-hidden="true"></i> bibinmathew@instagram.com</p></div>
						</div>
					</div>-->
					
					<div class="others-profile-card">
        				 <h4 class="pad-bot-15 discussions_heading">Discussions</h4>
        				<div class="added-comments">
        					<img src="images/user-icon.png" class="comments-image" alt="" />
        					<h4>Francisco <small>29 November 2021 • 19:35</small></h4>
        					<p>Cool its a nice idea...</p>
        				</div>
        				<div class="like-replay">
        					<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
        				</div>
        				<div class="pad-lef-50">
        					<div class="added-comments">
        					<img src="images/recent-followers2.png" class="comments-image" alt="" />
        					<h4>Shawn Pride <small>29 November 2021 • 19:35</small></h4>
        					<p>The unseen of spending three years at Pixelgrade</p>
        				</div>
        				<div class="like-replay">
        					<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)" id="repalyTwo">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
        				</div>
        				<div class="add-comment" id="show-replayTwo" >
        					<img src="images/recent-followers4.png" class="user-image" alt="" />
        					<div class="input-group">
        						  <textarea class="form-control" placeholder="Type your comment"></textarea>
        						<div class="input-group-append">
        							<button class="submit-btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
        						</div>
        					</div>
        					<div class="like-replay">
        						<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
        					</div>
        				</div>
        				</div>
        				<div class="added-comments">
        					<img src="images/recent-followers3.png" class="comments-image" alt="" />
        					<h4>Charles Phillips <small>29 November 2021 • 19:35</small></h4>
        					<p>Start a blog to reach your creative peak</p>
        				</div>
        				<div class="like-replay">
        					<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
        				</div>
        				<div class="added-comments">
        					<img src="images/recent-followers4.png" class="comments-image" alt="" />
        					<h4>David Wasserman <small>29 November 2021 • 19:35</small></h4>
        					<p>Caring is the new marketing</p>
        				</div>
        				<div class="like-replay">
        					<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)" id="replayOne">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
        				</div>
        				<div class="add-comment" id="show-replayOne" >
        					<img src="images/recent-followers4.png" class="user-image" alt="" />
        					<div class="input-group">
        						  <textarea class="form-control" placeholder="Type your comment"></textarea>
        						<div class="input-group-append">
        							<button class="submit-btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
        						</div>
        					</div>
        					<div class="like-replay">
        						<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
        					</div>
        				</div>
        			</div>
					
					
					<div class="vila-card pad-15">
					    <h3 class="pad-bot-15">Comments</h3>
					    <div class="row">
							<div class="col-md-12">
								<div class="testimonial-scroll">
								    <div>
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
									</div>
									<div>
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
									</div>
									<div>
									<div class="testimonial-slide">
										<h4>"Flush operations not functioning properly"</h4>
										<p>"Ocean Spray is away from Pondicherry City on ECR. Very calm and cool place surrounded by lot of trees. We stayed for one night only. Buffet lunch at the restaurant is very good. Villas are a little distance from the reception. Battery car is always available and the staff are very helpful. Only disappointment is the lake is full of algae water, we were told it is under renovation"</p>
										<h5>Rajeswaran, <span>Director</span></h5>
									</div>
									</div>
									<div>
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
					
					<?php include 'includes/seobox.php';?>
				</div>
			</div>
		  </div>
	  </section>
            </div>
      </div>
      
      
      
      
	  
	  <?php include 'includes/footer.php';?>
	  
	  <div class="modal fade" id="newstory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Create New Story Boxes</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">		        
			        <div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="storytitle">Story Titile:</label>
						    	<input type="text" class="form-control big_box" id="storytitle" aria-describedby="" placeholder="">
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="storytitle">Story Description:</label>
						    	<textarea class="form-control big_box border-1" id="storytitle" aria-describedby="" placeholder=""></textarea>
							</div>
		      			</div>
		      		</div>
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add New Story</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>

      <div class="modal fade" id="editdesc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Edit Description</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">		        
			        	<textarea class="pad-10 message_box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Save changes</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="addproject" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Project</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="moviename">Movie Name:</label>
						    	<input type="text" class="form-control big_box" id="moviename" aria-describedby="" placeholder="">
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="workedby">Worked By:</label>
						    	<input type="text" class="form-control big_box" id="workedby" aria-describedby="" placeholder="">
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Upload Banner:</label>
		  						<div class="file-drop-area">
								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
								  <span class="file-message">or<br /> <span class="color-blue">Browse files</span></span>
								  <input class="file-input" id="banner_img" type="file" multiple>
								</div>
		  					</div>
		  				</div>
		  			</div>	
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Projects</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="addphotos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Photos</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
    		            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="photolist">Photo list Title:</label>
        					    	<input type="text" class="form-control big_box" id="photolist" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>		      		
    		      		<div class="row">
    		  				<div class="col-md-12 mar-bot-20">
    		  					<div class="form-group">
    		  						<label for="banner_img">Upload Images:</label>
    		  						<div class="file-drop-area">
    								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
    								  <span class="file-message">or<br /> <span class="color-blue">Browse files</span></span>
    								  <input class="file-input" id="banner_img" type="file" multiple>
    								</div>
    		  					</div>
    		  				</div>
    		  			</div>	
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Photos</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="addcredits" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Credits</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">	      		
    		      		<div class="row">
    		  				<div class="col-md-12 mar-bot-20">
    		  					<div class="form-group">
    		  						<label for="banner_img">Upload Photos:</label>
    		  						<div class="file-drop-area">
    								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
    								  <span class="file-message">or<br /> <span class="color-blue">Browse files</span></span>
    								  <input class="file-input" id="banner_img" type="file" multiple>
    								</div>
    		  					</div>
    		  				</div>
    		  			</div>	
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Credits</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="addvideos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Videos</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
			            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="videolist">Play list Title:</label>
        					    	<input type="text" class="form-control big_box" id="videolist" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>		
		      		     <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="videourl">Video Url:</label>
        					    	<input type="text" class="form-control big_box" id="videourl" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Video</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>
        
        <div class="modal fade" id="addteam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Photos</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
    		            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="castname">Name:</label>
        					    	<input type="text" class="form-control big_box" id="castname" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>
        	      		<div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="rolename">Rolename:</label>
        					    	<input type="text" class="form-control big_box" id="rolename" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>
    		      		<div class="row">
    		  				<div class="col-md-12 mar-bot-20">
    		  					<div class="form-group">
    		  						<label for="banner_img">Upload Photo:</label>
    		  						<div class="file-drop-area">
    								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
    								  <span class="file-message">or<br /> <span class="color-blue">Browse files</span></span>
    								  <input class="file-input" id="banner_img" type="file" multiple>
    								</div>
    		  					</div>
    		  				</div>
    		  			</div>	
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Team</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>
        
        <div class="modal fade" id="addawards" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Photos</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
    		            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="awardsname">Awards Name:</label>
        					    	<input type="text" class="form-control big_box" id="awardsname" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>
        	      		<div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="awardsgiven">Awards Given By:</label>
        					    	<input type="text" class="form-control big_box" id="awardsgiven" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>		      		
    		      		<div class="row">
    		  				<div class="col-md-12 mar-bot-20">
    		  					<div class="form-group">
    		  						<label for="banner_img">Awards Images:</label>
    		  						<div class="file-drop-area">
    								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
    								  <span class="file-message">or<br /> <span class="color-blue">Browse files</span></span>
    								  <input class="file-input" id="banner_img" type="file" multiple>
    								</div>
    		  					</div>
    		  				</div>
    		  			</div>
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Awards</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>
    <?php include 'includes/advertisement-popup.php';?>
  </body>

  
  <?php include 'includes/script.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
	<script>
	
	    (function($){
			$(window).on("load",function(){
				
				$(".casting").mCustomScrollbar({
					//theme:"minimal"
				});
			});
		})(jQuery);
	    
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
	
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
							slidesToShow: 1,
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
	    $('.review').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: false,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 3000,
			 responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 1,
						}
					},
					{
						breakpoint: 990,
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
			
		$('.mediarelease').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 4000,
			  
		});

		$('.press-release').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 4000,
			  
		});	
			
			
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		
		$( init );

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

		function init() {
		  $( ".droppable-area" ).sortable({
			  connectWith: ".connected-sortable",
			  stack: '.connected-sortable ul'
			}).disableSelection();
		}

		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		  $(".leftmenu_open").click(function(){
		  	$("#mySidenav").toggle("fast");		  	
		  });
		 
		});	

		$(document).on('change', '.file-input', function() {
		  var filesCount = $(this)[0].files.length;		  
		  var textbox = $(this).prev();
		  if (filesCount === 1) {
		    var fileName = $(this).val().split('\\').pop();
		    textbox.text(fileName);
		  } else {
		    textbox.text(filesCount + ' files selected');
		  }
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
		  
		  $('.moreless-button').click(function() {
              $('.moretext').slideToggle();
              if ($('.moreless-button').text() == "Read more") {
                $(this).text("Read less")
              } else {
                $(this).text("Read more")
              }
            });
            
            $('#adspages').select2({
	            placeholder: "Select Pages",
	            //allowClear: true
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
</html>