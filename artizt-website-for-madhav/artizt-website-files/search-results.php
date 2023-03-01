 
<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
     
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
			<div class="search-results-card">
				<h3>Filters</h3>
				<form action="#" class="searchform" id="" name="">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="form-group">
								<label for="agefrom">Age</label>
								<div class="row">
									<div class="col-md-6 col-6">
										<select class="form-control" id="agefrom" name="agefrom">
											<option value="" class="h-auto" selected>Age From</option>
											<?php for ($x = 0; $x <= 100; $x++) { ?>
												<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
											<?php }	?>
										</select>
									</div>
									<div class="col-md-6 col-6">
										<select class="form-control">											
											<option value="" class="h-auto" selected>Age to</option>
											<?php for ($x = 0; $x <= 100; $x++) { ?>
												<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
											<?php }	?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="gender">Gender</label>
								<select class="form-control" id="agefrom" name="agefrom">
									<option value="" class="" selected>Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<label for="gender">Type</label>
							<select class="form-control" id="type" name="type">
								<option value="" selected>Select Type</option>
								<option value="All">All</option>
								<option value="Artizt Network">Artizt Network</option>
								<option value="Post">Post</option>
								<option value="Photos">Photos</option>
								<option value="Videos">Videos</option>
								<option value="Gropus">Gropus</option>
							</select>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="gender">Country</label>
								<select class="form-control" id="agefrom" name="agefrom">
									<option value="" class="" selected>Select Country</option>
									<option value="India">India</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Australia">Australia</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Brazil">Brazil</option>
									<option value="Canada">Canada</option>
									<option value="China">China</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<label for="gender">State</label>
							<select class="form-control" id="agefrom" name="agefrom">
								<option value="" class="" selected>Select State</option>
								<option value="Andhra Pradesh">Andhra Pradesh</option>
								<option value="Arunachal Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Goa">Goa</option>
								<option value="Tamil Nadu">Tamil Nadu</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="mb-0 ft-12">Search results shown: <b>758</b></p>
						</div>
					</div>
				</form>
			</div>
			<div class="search-results-card">
				<h3>AR Rahmaan</h3>
				<p class="mb-0"><img src="images/graph.svg" alt="" /> 187K People are talking about this</p>
			</div>
			<div class="search-results-card">
				<h3>ADs</h3>
				<div class="following-content">
					<img src="images/following-image1.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>AR Rahmaan</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a>300</span>
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>AR Rahmaan</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call</a>
								</li>
							</ul>
						</div>
				</div>


				<div class="following-content">
					<img src="images/following-image2.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Rashin Rahman</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>					
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a>300</span>
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
						<div class="gray-bg">
							<h5>Rashin Rahman</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="following-content">
					<img src="images/following-image3.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>AR Rahmaan</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->					
						<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a>300</span>
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>AR Rahmaan</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call</a>
								</li>
							</ul>
						</div>
				</div>
			</div>

			
			<div class="search-results-card">
				<h3>Artizt Network</h3>
				<div class="following-content">
					<img src="images/following-image1.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>AR Rahmaan</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a>300</span>
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>AR Rahmaan</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call</a>
								</li>
							</ul>
						</div>
				</div>


				<div class="following-content">
					<img src="images/following-image2.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>Rashin Rahman</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>					
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->
						<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a>300</span>
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
						<div class="gray-bg">
							<h5>Rashin Rahman</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="following-content">
					<img src="images/following-image3.png" alt="" />
					<div class="following-text d-none d-sm-block">
						<div class="gray-bg">
							<h5>AR Rahmaan</h5>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						</div>
						<ul class="message-call">
							<li>
								<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Call</a>
							</li>
						</ul>
					</div>
					<div class="share-buttons">
						<!-- <a href="#" class="ellipsis-icon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a> -->					
						<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a>300</span>
						<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>50</span>
						<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>482</span>
						<span class="share-btn"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
						<div class="result_dropdown">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots ft-20 fw-700 text-dark mt-1 ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
									...
								</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
					</div>
					<div class="following-text d-block d-sm-none">
							<div class="gray-bg">
								<h5>AR Rahmaan</h5>
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
							</div>
							<ul class="message-call">
								<li>
									<a href="#" class="message-icon">Message <i class="fa fa-commenting-o" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="#">Call</a>
								</li>
							</ul>
						</div>
				</div>
			</div>
			<div class="others-profile-card">
				<img src="images/user-icon.png" class="user-image" alt="" />
				<h3>Saravanan <span>2 hours ago</span></h3>
				<p>A former RAW officer, who is among the hostages in a mall taken over by terrorists, has to foil their plans and prevent the government.</p>
				<img src="images/social-banner.jpg" class="img-fluid w-100" alt="" />
				<ul class="comm-like">
					<li>
						<a href="#"><img src="images/comment-icon.png" alt="" /> 15</a>
					</li>
					<li>
						<a href="#"><img src="images/like-icon.png" alt="" /> 76</a>
					</li>
					<li>
						<a href="#"><img src="images/share-icon.png" alt="" /> 59</a>
					</li>
				</ul>
			</div>
			<div class="others-profile-card">
				<img src="images/user-icon.png" class="user-image" alt="" />
				<h3>Bibin Mathew <span>2 hours ago</span></h3>
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
			<div class="others-profile-card">
				<img src="images/recent-followers1.png" class="user-image" alt="" />
				<h3>Saravanan <span>2 hours ago</span></h3>
				<p>A former RAW officer, who is among the hostages in a mall taken over by terrorists, has to foil their plans and prevent the government.</p>
				<img src="images/social-banner.jpg" class="img-fluid w-100" alt="" />
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

			<div class="similar-indus">
				<div class="row">
					<div class="col-md-12 pad-bot-15 similar-indus-head">
						<h4>Artizt with similar Industries</h4>
						<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="similar-industries similar_indus">
							<div class="similar-list">
								<a href="javascript:void(0)" class="active">
									<img src="images/frame.png" alt="" />
								</a>
								<div class="slide-txt pad-20">
									<span class="similar_user"><img src="images/user-icon.png" class="round-radius"></span>
									<span class="similar_profie">
										<h3>Rihanna</h3>
										<p>Flim Industry</p>
									</span>
									<p>Nunc tincidunt neque et odio imperdiet, sit amet pharetra risus </p>
								</div>
							</div>
							<div class="similar-list">
								<a href="javascript:void(0)" class="active">
									<img src="images/frame.png" alt="" />
								</a>
								<div class="slide-txt pad-20">
									<span class="similar_user"><img src="images/user-icon.png" class="round-radius"></span>
									<span class="similar_profie">
										<h3>Rihanna</h3>
										<p>Flim Industry</p>
									</span>
									<p>Nunc tincidunt neque et odio imperdiet, sit amet pharetra risus </p>
								</div>
							</div>
							<div class="similar-list">
								<a href="javascript:void(0)" class="active">
									<img src="images/frame.png" alt="" />
								</a>
								<div class="slide-txt pad-20">
									<span class="similar_user"><img src="images/user-icon.png" class="round-radius"></span>
									<span class="similar_profie">
										<h3>Rihanna</h3>
										<p>Flim Industry</p>
									</span>
									<p>Nunc tincidunt neque et odio imperdiet, sit amet pharetra risus </p>
								</div>
							</div>
							<div class="similar-list">
								<a href="javascript:void(0)">
									<img src="images/frame.png" alt="" />
								</a>
								<div class="slide-txt pad-20">
									<span class="similar_user"><img src="images/user-icon.png" class="round-radius"></span>
									<span class="similar_profie">
										<h3>Rihanna</h3>
										<p>Flim Industry</p>
									</span>
									<p>Nunc tincidunt neque et odio imperdiet, sit amet pharetra risus </p>
								</div>
							</div>
							<div class="similar-list">
								<a href="javascript:void(0)">
									<img src="images/frame.png" alt="" />
								</a>
								<div class="slide-txt pad-20">
									<span class="similar_user"><img src="images/user-icon.png" class="round-radius"></span>
									<span class="similar_profie">
										<h3>Rihanna</h3>
										<p>Flim Industry</p>
									</span>
									<p>Nunc tincidunt neque et odio imperdiet, sit amet pharetra risus </p>
								</div>
							</div>
							<div class="similar-list">
								<a href="javascript:void(0)">
									<img src="images/frame.png" alt="" />
								</a>
								<div class="slide-txt pad-20">
									<span class="similar_user"><img src="images/user-icon.png" class="round-radius"></span>
									<span class="similar_profie">
										<h3>Rihanna</h3>
										<p>Flim Industry</p>
									</span>
									<p>Nunc tincidunt neque et odio imperdiet, sit amet pharetra risus </p>
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
			
	</script>
	<script>
		$('.similar-industries').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 2,			  
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