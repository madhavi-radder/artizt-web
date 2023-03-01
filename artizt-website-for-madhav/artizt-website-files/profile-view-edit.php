 
 
<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
 
    <style type="text/css">
    	.nav-item{
    		float: left;
    	}
    </style>
  </head>
  <body>
      

  <?php include 'includes/header-main.php';?>

      <section class="profile-header">
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12">
      				<div class="profile-card">
      					<div class="profilebg">
      						<div class="artist-btn">
      							<a href="#" class="btn btn-select pr-3 pl-3 ft-12 d-none d-sm-block d-md-block btn-padding-10">Edit Artizt Profile</a>
      							<a href="#" class="btn btn-select pr-3 pl-3 ft-12 d-md-none d-sm-none d-inine-block" style="width: 50px; height: 50px; text-align: center;  padding-top: 14px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
									<div class="availability_project">
										<p>Availability for Projects<br /><span >Busy</span></p>
									</div>

      							</div>
      							<div class="col-md-4 text-center profile_box">
      								
      								<div class="p-real profile_logo_round">
      									<img src="images/profilephoto.png" class="img-fluid round-radius border-white">
      									<span class="con_status_acive"></span>
		      						</div>

		      						<h3>Bibin Mathew <img src="images/online-status2.png" width="30px" style="margin-top: -5px;"></h3>
		      						<p>Theatre/Drama • Director & Editor</p>
		      						<span><a href="#">350 Followers</a></span>
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
											    <a class="dropdown-item" href="#">Edit</a>
											    <a class="dropdown-item" href="#">Preview</a>
											  </div>
											</div>
										</div>
									</div>


									<div class="d-md-none d-sm-block text-center" style="clear: both;">										
										<img src="images/qrcode.png">
									</div>
									<div class="d-md-none d-sm-block text-center" style="clear: both; width: 350px; margin: 0 auto;">										
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
										<div class="availability_project">
											<p>Availability for Projects<br /><span >Busy</span></p>
										</div>
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

									<div class="text-center pad-top-70 d-none d-sm-none d-md-block">
										<img src="images/qrcode.png" class="qrcode">
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
				<div class="col-sm-12 col-md-5 col-lg-4" id="mySidenav">
					<!-- <div class="profile-card text-center">
						<div class="profile-status online">Online</div>
						<img src="images/user-profile-image.png" alt="" class="profile-image" />
						<h3 class="profile-name">Bibin Mathew</h3>
						<h6 class="profile-industry">Theatre/Drama • Director &amp; Editor</h6>
						<a class="btn-orange-outline mar-top-30" href="#">Preview Artizt Profile</a>
						<ul class="profile-from mar-top-20">
							<li>
								<img src="images/mappin.svg" alt="" /> From <span>India</span>
							</li>
							<li>
								<img src="images/usersquare.svg" alt="" /> Member since <span>May 2022</span>
							</li>
						</ul>
					</div> -->
					<div class="profile-card profile-left-card description-card min-height-auto">
						<div> <a href="#" class="pad-bot-15 pull-right pt-0 ft-14"> Edit Details</a></div>
						<div class="accpunts_details ft-14 pt-2 pb-2">
							<span class="artiest_property">Artizt Network ID :</span><br />
							<span class="text-truncate">bibinmathew@an.com</span>
						</div>
						<div class="accpunts_details ft-14 pt-2 pb-2 text-truncate">
							<span class="artiest_property">AN Account No. :</span><br />
							<span>AN/IND/TN/2022/000000027</span>
						</div>
						<div class="accpunts_details ft-14 pt-2 pb-2 text-truncate">
							<span class="artiest_property">Membership Type :</span><br />
							<span>Artizt Pro</span>
						</div>
						<div class="divider"></div>
						<div class="accpunts_details ft-14 pt-2 pb-2 text-truncate  p-real pr-4">
							<span class="artiest_property"><img src="images/phoneverify.png" width="20px">
								<span class="pl-2">94443 92388  </span></span>
							<a href="#" class="pull-right pt-0 ft-14">(Show / Hide)</a>
						</div>
						<div class="accpunts_details ft-14 pt-2 pb-2 text-truncate p-real pr-4">
							<span class="artiest_property"><img src="images/emailverify.png" width="20px"> <span class="pl-2">admin@artiztmetwork.com </span>
						</div>

						<div class="accpunts_details ft-14 pt-2 pb-2 text-truncate">
							<span class="artiest_property">Date of Birth</span> : <span class="pl-2">13th November 1974</span>
						</div>

						<div class="row">
							<div class="col-6 accpunts_details ft-14 pt-2 pb-2 ">
								<span class="artiest_property w-auto">Gender </span> : <span class="pl-2">Male</span>
							</div>
							<div class="col-6 accpunts_details ft-14 pt-2 pb-2 ">
								<span class="artiest_property w-auto">Age </span> : <span class="pl-2">48</span>
							</div>
						</div>						
						<div class="row">
							<div class="col-6 accpunts_details ft-14 pt-2 pb-2 ">
								<span class="artiest_property w-auto">Height </span> : <span class="pl-2">5.4</span>
							</div>
							<div class="col-6 accpunts_details ft-14 pt-2 pb-2 ">
								<span class="artiest_property w-auto">Weight </span> : <span class="pl-2">64 Kg</span>
							</div>
						</div>
					</div>
					<div class="profile-card profile-left-card description-card min-height-auto">
						<h6>Association : <a href="#" class="pad-bot-15 pull-right pt-0 ft-14">Add More..</a></h6>
						<p class="mb-2">All Indian Cine Workers Association, <span class="text-blue">00005789</span></p>
						<p class="mb-2">Bharatiya Chitrapat Sena, <span class="text-blue">00007689</span></p>
						<p class="mb-2">Central Board of Film Certification, <span class="text-blue">00005769</span></p>
						<p class="mb-2">Association of Malayalam Movie Artists, <span class="text-blue">00009876</span></p>
					</div>
					<div class="profile-card profile-left-card description-card min-height-auto">
						<h6>About Me : <a href="#" class="pad-bot-15 pull-right pt-0 ft-14">Add More..</a></h6>
						<p>Bachelor of Computer Application Mohamed Sathak Clg of Arts &amp; Science, India,
						<div class="accpunts_details ft-14 pt-0 pb-2 text-truncate">
							<span class="artiest_property">Home Town</span> : <span class="pl-2">Chennai</span>
						</div>
						<div class="accpunts_details ft-14 pt-0 pb-2 text-truncate">
							<span class="artiest_property">Living Town</span> : <span class="pl-2">Bengaluru</span>
						</div>
					</div>
					<div class="profile-card profile-left-card description-card min-height-auto">
						<h6>Industry / Designation <a href="#" class="pad-bot-15 pull-right pt-0 ft-14">Add Language</a></h6>
						<p class="indusry_txt"><a href="#">Theatre/Drama</a><br /><span class="text-dark ft-10">Director & Editor</span></p>
						<p class="indusry_txt"><a href="#">Flim Industry</a><br /><span class="text-dark ft-10">Art Director & Editor</span></p>
					</div>
					<div class="profile-card profile-left-card description-card min-height-auto">
						
						<h6>Language <a href="#" class="pad-bot-15 pull-right pt-0 ft-14">Add Language</a></h6>
						<p class="mb-2">English - Conversational</p>
						<p class="mb-2">Tamil - Conversational</p>
						<p>Kanada - Conversational</p>
						<h6>Skills <a href="#" class="pad-bot-15 pull-right pt-0 ft-14">Add Skills</a></h6>
						<ul class="skills-list pt-2">
							<li>Script Writing</li>
							<li>Lyricist</li>
							<li>Actor</li>
							<li>Art Director</li>
							<li>Background  Artist</li><br clear="all" />
						</ul>
					</div>
					<div class="profile-card profile-left-card description-card min-height-auto">
						<h6>Education <span class="pull-right ft-14"><a href="#">Add New</a></span></h6>
						<p>Bachelor of Computer Application Mohamed Sathak Clg of Arts &amp; Science, India, <strong>Graduated 2018</strong>
					</div>
					<div class="profile-card profile-left-card description-card min-height-auto">
						<h6 class="mar-bot-20">Mutual Friends</h6>
						<!-- <ul class="recent-followers">
							<li>+5</li>
							<li><img src="images/recent-followers1.png" alt="" /></li>
							<li><img src="images/recent-followers2.png" alt="" /></li>
							<li><img src="images/recent-followers3.png" alt="" /></li>
							<li><img src="images/recent-followers4.png" alt="" /></li>
							<li><img src="images/recent-followers5.png" alt="" /></li>
						</ul> -->
						<div class="row">
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image1.jpg" class="img-fluid">
								<p class="mb-0 m-frd-name">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image2.jpg" class="img-fluid">
								<p class="mb-0 m-frd-name">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image3.jpg" class="img-fluid">
								<p class="mb-0 m-frd-name">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image1.jpg" class="img-fluid">
								<p class="mb-0 m-frd-name">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image2.jpg" class="img-fluid">
								<p class="mb-0 m-frd-name">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image3.jpg" class="img-fluid">
								<p class="mb-0 m-frd-name">Lorem ipsum dolor sit amet, consectetur</p>
							</div>
							<!-- <div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image1.jpg" class="img-fluid">
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image2.jpg" class="img-fluid">
							</div>
							<div class="col-md-4 col-sm-3 col-6 text-center mar-bot-20">
								<img src="images/photos-image3.jpg" class="img-fluid">
							</div> -->
						</div>
					</div>

					
				</div>
				<div class="col-sm-12 col-md-7 col-lg-8">
					<div class="vila-card">
						<div class="villa-scroll">
							<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
							  
							  <li class="nav-item">
							    <a class="nav-link active" id="artography-tab" data-toggle="pill" href="#artography" role="tab" aria-controls="pills-videos" aria-selected="false">Artography</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="photos-tab" data-toggle="pill" href="#photos" role="tab" aria-controls="pills-photos" aria-selected="false">Photos</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="pitch-tab" data-toggle="pill" href="#pitch" role="tab" aria-controls="pills-pitch" aria-selected="false">Artizt Pitch</a>
							  </li>	
							  
							  <li class="nav-item">
							    <a class="nav-link" id="store-tab" data-toggle="pill" href="#store" role="tab" aria-controls="pills-store" aria-selected="false">Artizt Store</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="videos-tab" data-toggle="pill" href="#videos" role="tab" aria-controls="pills-videos" aria-selected="false">Videos</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="activites-tab" data-toggle="pill" href="#activites" role="tab" aria-controls="pills-activites" aria-selected="false">Posts & Feeds</a>
							  </li>
							  
							</ul>
						</div>
						<div class="tab-content pad-20" id="villa-tabContent">
							<div class="tab-pane fade show active" id="artography" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="row">
									<div class="col-md-12 text-right pad-bot-15">
										<a href="#" class="pad-bot-15 pt-0 ft-14" data-toggle="modal" data-target="#addproject">Add Project</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-6 mb-4">
										<p class="text-center ft-16 text-dark">My Projects</p>
										<div class="myproject">
											<div class="morevides mb-3">
												<img src="images/morevideo.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Don</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Don</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Don</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 mb-4">
										<p class="text-center ft-16 text-dark">Projects Worked / Credits</p>
										<div class="projects_worked">
											<div class="morevides mb-3">
												<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Beast</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Beast</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Beast</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Beast</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 mb-4">
										<p class="text-center ft-16 text-dark">Current Projects</p>
										<div class="current_projects">
											<div class="morevides mb-3">
											<img src="images/morevideo.png" class="img-fluid border-10 w-100">
											<div class="pad-15 p-real">
												<h3 class="pl-0">Don</h3>
												<p>Art Director</p>
												<span class="edit_icons">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
														<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
													</a>
												</span>
											</div>
											<ul class="recent-followers">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt="" /></li>
												<li><img src="images/recent-followers2.png" alt="" /></li>
												<li><img src="images/recent-followers3.png" alt="" /></li>
												<li><img src="images/recent-followers4.png" alt="" /></li>
												<li><img src="images/recent-followers5.png" alt="" /></li>
											</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Don</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
											<div class="morevides mb-3">
												<img src="images/morevideo.png" class="img-fluid border-10 w-100">
												<div class="pad-15 p-real">
													<h3 class="pl-0">Don</h3>
													<p>Art Director</p>
													<span class="edit_icons">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
															<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
														</a>
													</span>
												</div>
												<ul class="recent-followers">
													<li>+5</li>
													<li><img src="images/recent-followers1.png" alt="" /></li>
													<li><img src="images/recent-followers2.png" alt="" /></li>
													<li><img src="images/recent-followers3.png" alt="" /></li>
													<li><img src="images/recent-followers4.png" alt="" /></li>
													<li><img src="images/recent-followers5.png" alt="" /></li>
												</ul>
											</div>
										</div>


									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Artography</h3>										
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 ft-12">
										<table width="100%" border="1">
											<thead>
												<tr>
													<th>Year</th>
													<th>My Projects</th>
													<th>Projects Worked</th>
													<th>Role</th>
													<th>Notes</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="4">1990</td>

													<td>Vaazhkai Chakkaram</td>
													<td></td>
													<td>Constable</td>
													<td></td>
												</tr>
												<tr>
													<td>Paattali Magan</td>
													<td></td>
													<td>Dharmadi Dharmalingam</td>
													<td></td>
												</tr>
												<tr>
													<td>Thangathin Thangam</td>
													<td></td>
													<td>Kathavarayan</td>
													<td></td>
												</tr>
												<tr>
													<td>Namma Ooru Poovatha</td>
													<td></td>
													<td>'Suthi' Josiyar</td>
													<td></td>
												</tr>
											</tbody>


										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="photos" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="row">
									<div class="col-md-12 text-right pad-bot-15">
										<a href="#" class="pad-bot-15 pt-0 ft-14" data-toggle="modal" data-target="#addphotos">Add Photos</a>
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
										<img src="images/photos-image4.jpg" class="img-fluid border-radius-15">
									</div>
								</div>
							</div>
							<div class="tab-pane " id="pitch" role="tabpanel" aria-labelledby="pills-home-tab">						

								<!-- <div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Artizt Pitch</h3>
									</div>
								</div> -->
								<div class="row">
									<div class="col-md-12 text-right pad-bot-15">
										<a href="#" data-toggle="modal" data-target="#addpitch" class="pad-bot-15 pt-0 ft-14">Add Artizt Pitch</a>
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
										<iframe class="border-radius-15" width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							
							<div class="tab-pane " id="videos" role="tabpanel" aria-labelledby="pills-home-tab">
								<!-- <div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0 pull-left">Videos</h3>
									</div>
								</div> -->
								<div class="row">
									<div class="col-md-12 text-right pad-bot-15">
										<a href="#" data-toggle="modal" data-target="#addvideo"  class="pad-bot-15 pt-0 ft-14">Add Videos</a>
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
										<iframe class="border-radius-15" width="100%" src="https://www.youtube.com/embed/nCfPzLfgDWw" title="A Surprise For Kamal Hassan? The Original and The Copy | Vikram Promotions Malaysia | DMY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
							</div>							

							<div class="tab-pane" id="store" role="tabpanel" aria-labelledby="pills-home-tab">
								<!-- <div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-3">My Store</h3>
									</div>
								</div> -->
								<div class="row">
									<div class="col-md-12 text-right pad-bot-15">
										<a href="#" data-toggle="modal" data-target="#addstore" class="pad-bot-15 pt-0 ft-14">Add Store</a>
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
														<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16 text-white">Shoott</h3>
														
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
														<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16 text-white">Shoott</h3>
														
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
														<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16 text-white">Shoott</h3>
														
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
							<div class="tab-pane" id="activites" role="tabpanel" aria-labelledby="pills-home-tab">
								<!-- <div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-15 pt-0">My Activites</h3>
									</div>
								</div> -->
								<div class="others-profile-card myactivititab">
									<img src="images/user-icon.png" class="user-image" alt="" />
									<h3 class="ft-14">Bibin Mathew <span>2 hours ago</span></h3>
									<p class="mb-0">I have worked in this flim as an Music Director and as an Sound engineer</p>
									<ul class="profile-list">
										<li><img src="images/crown.svg" alt="" /> Music Director</li>
										<li>Sound Engineer</li>
									</ul>
									<img src="images/social-banner2.jpg" class="img-fluid w-100" alt="" />
									<ul class="comm-like">
										<li>
											<a href="javascript:void(0)"><img src="images/comment-icon.png" alt="" /> 15</a>
										</li>
										<li>
											<a href="javascript:void(0)"><img src="images/like-icon.png" alt="" /> 76</a>
										</li>
										<li>
											<a href="javascript:void(0)"><img src="images/share-icon.png" alt="" /> 59</a>
										</li>
									</ul>
									<div class="add-comment d-block">
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
								
							</div>
						</div>
					</div>
					<div class="vila-card pad-20">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pt-0 pull-left ft-18">Awards & Achievement </h3>
								<a  href="#" data-toggle="modal" data-target="#awards" class="pad-bot-15 pull-right pt-0 ft-14">Add Awards</a>									
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
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="vila-card pad-15">
								<div class="row">
									<div class="col-md-12">
										<h3 class="pad-bot-20 pt-0 pull-left ft-18">Press Release</h3>
										<a href="#"  data-toggle="modal" data-target="#addpressrelease" class="pad-bot-15 pull-right pt-0 ft-14">Add Press Release</a>		
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
										<a href="#" data-toggle="modal" data-target="#mediarelease"  class="pad-bot-15 pull-right pt-0 ft-14">Add Media Release</a>		
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
								<a href="#" class="pad-bot-15 pull-right pt-0 ft-14">Add Accounts</a>
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

				</div>
			</div>
		  </div>
	  </section>
	  
	  <?php include 'includes/footer.php';?>

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
		      	<form action="#" data-parsley-validate="">
			      <div class="modal-body">
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="moviename">Project Type:</label>
						    	<select class="form-control big_box" id="projecttype" aria-describedby="" placeholder="" required>
						    		<option value="">Select Project Type</option>
						    		<option value="My Projects">My Projects (old)</option>
						    		<option value="Projects Worked">Projects Worked</option>
						    		<option value="Current Projects">Current Projects</option>
						    	</select>
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="moviename">Movie Name:</label>
						    	<input type="text" class="form-control big_box" id="moviename" aria-describedby="" placeholder="" required>
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="workedby">Worked By:</label>
						    	<input type="text" class="form-control big_box" id="workedby" aria-describedby="" placeholder="" required>
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

		<div class="modal fade" id="addpitch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add  Artizt Pitch</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#" data-parsley-validate="">
			      <div class="modal-body">		      		
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Video URL</label>
		  						<input type="text" class="form-control big_box" id="url" aria-describedby="" placeholder="" required>
		  					</div>
		  				</div>
		  			</div>	
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Pitch</button>
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
		
		<div class="modal fade" id="addpressrelease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Press Release </h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">		      		
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
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Photos</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="addvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add  Videos</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#" data-parsley-validate="">
			      <div class="modal-body">		      		
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Video URL</label>
		  						<input type="text" class="form-control big_box" id="url" aria-describedby="" placeholder="" required>
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
		
		<div class="modal fade" id="mediarelease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add  Videos</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#" data-parsley-validate="">
			      <div class="modal-body">		      		
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Video URL</label>
		  						<input type="text" class="form-control big_box" id="url" aria-describedby="" placeholder="" required>
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

		<div class="modal fade" id="addstore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Store</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#" data-parsley-validate="">
			      <div class="modal-body">
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="storename">Store Name:</label>
						    	<input type="text" class="form-control big_box" id="storename" aria-describedby="" placeholder="" required>
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Upload Logo:</label>
		  						<div class="file-drop-area">
								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
								  <span class="file-message">or<br /> <span class="color-blue">Browse file</span></span>
								  <input class="file-input" id="banner_img" type="file">
								</div>
		  					</div>
		  				</div>
		  			</div>
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Upload Banner:</label>
		  						<div class="file-drop-area">
								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
								  <span class="file-message">or<br /> <span class="color-blue">Browse file</span></span>
								  <input class="file-input" id="banner_img" type="file">
								</div>
		  					</div>
		  				</div>
		  			</div>
		      		
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Upload Store images:</label>
		  						<div class="file-drop-area">
								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
								  <span class="file-message">or<br /> <span class="color-blue">Browse file</span></span>
								  <input class="file-input" id="banner_img" type="file" multiple>
								</div>
		  					</div>
		  				</div>
		  			</div>
		      		
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="workedby">Store owner:</label>
						    	<input type="text" class="form-control big_box" id="storeowner" aria-describedby="" placeholder="" required>
							</div>
		      			</div>
		      		</div>
		      			
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Store</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="awards" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Awards</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#" data-parsley-validate="">
			      <div class="modal-body">
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="storename">Awards Name:</label>
						    	<input type="text" class="form-control big_box" id="awardsname" aria-describedby="" placeholder="" required>
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="awardfor">Awards For:</label>
						    	<input type="text" class="form-control big_box" id="awardfor" aria-describedby="" placeholder="" required>
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		      			<div class="col-md-12">
		      				<div class="form-group">
						    	<label for="awardgiven">Awards Given by:</label>
						    	<input type="text" class="form-control big_box" id="awardgiven" aria-describedby="" placeholder="">
							</div>
		      			</div>
		      		</div>
		      		<div class="row">
		  				<div class="col-md-12 mar-bot-20">
		  					<div class="form-group">
		  						<label for="banner_img">Awards Logo:</label>
		  						<div class="file-drop-area">
								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
								  <span class="file-message">or<br /> <span class="color-blue">Browse file</span></span>
								  <input class="file-input" id="banner_img" type="file">
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

		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		  $(".leftmenu_open").click(function(){
		  	$("#mySidenav").toggle("fast");		  	
		  });
		  $('.counter').countUp({
				delay: 50,
				time: 5000
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
		  
		});
		(function($){
		  $(window).on("load",function(){
		    $(".villa-scroll").mCustomScrollbar({
		      axis:"x",
		      theme:"dark-3",
		      advanced:{
		        autoExpandHorizontalScroll:true
		      },
		      callbacks:{
		        onCreate:function(){
		          $(this).find(".item").css("width",$(this).width());
		        },
		        onBeforeUpdate:function(){
		          $(this).find(".item").css("width",$(this).width());
		        }
		      }
		    });
		  });
		})(jQuery);

		$('.myproject').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
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
		$('.projects_worked').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
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

		$('.mediarelease').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
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

		$('.press-release').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
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
				
		$('.current_projects').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
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
	</script>
</html>