

<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
 
    <style type="text/css">
    	.recent-followers li:first-child{
    		padding-top: 7px !important;
    	}

    	.user_chat, .mCustomScrollbar{
    		max-height: 380px;
    		overflow: auto;
    	}
    </style>
  </head>
  <body>
  
  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
		<?php include 'includes/side-profile.php';?>
		<?php // include 'includes/side-network-menu.php';?>
		<!--<hr>-->
		<?php include 'includes/side-menu.php';?>
		<hr>
		<?php include 'includes/side-followers.php';?> 
		</div>
		
		<div class="others-profile-center">
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">Professional Network</h2>
					<div class="pull-right store_btn">	
    					<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Network <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="network.php">My Network</a>
                            <a class="dropdown-item" href="professional-network.php">Professional Network</a>
                            <a class="dropdown-item" href="community.php">Community</a>
                            <a class="dropdown-item" href="connect.php">Connect</a>
                          </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="team-tab" data-toggle="pill" href="#team" role="tab" aria-controls="network-groups" aria-selected="true">Team</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="partners-tab" data-toggle="pill" href="#partners" role="tab" aria-controls="network-partners" aria-selected="false">Partners</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="collabrators-tab" data-toggle="pill" href="#collabrators" role="tab" aria-controls="network-collabrators" aria-selected="false">Collabrators</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="collabrators-tab" data-toggle="pill" href="#talentpool" role="tab" aria-controls="network-collabrators" aria-selected="false">Talent Pool</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link addnew-btn" href="javascript:void(0);" data-toggle="modal" data-target="#addprofessional">+</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="network-groups">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Organization</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 mt-3">
								<h3 class="pad-bot-15 pt-0 pull-left">Projects</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 mt-3">
								<h3 class="pad-bot-15 pt-0 pull-left">FnC</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mt-3">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Events</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="talentpool" role="tabpanel" aria-labelledby="network-groups">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Actor / Actress</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 mt-3">
								<h3 class="pad-bot-15 pt-0 pull-left">Writers</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12 mt-3">
								<h3 class="pad-bot-15 pt-0 pull-left">Cinematography</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mt-3">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Editors</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="partners" role="tabpanel" aria-labelledby="network-partners">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Partners</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="collabrators" role="tabpanel" aria-labelledby="network-collabrators">
						<div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Collabrators</h3>
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
										<a href="#" class="create_new_group" data-toggle="modal" data-target="#addphotos2">+</a><br>
										<a href="#" class="ft-14 create_group" data-toggle="modal" data-target="#addphotos2">Add More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="talentpool" role="tabpanel" aria-labelledby="network-collabrators">
					    <div class="row">
							<div class="col-md-12">
								<h3 class="pad-bot-15 pt-0 pull-left">Talent Pool</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--<div class="row">
				<div class="col-md-12 pad-bot-10 pad-top-20 page-head">
					<h2 class="text-black">Post</h2>
				</div>
			</div>
			<div class="vila-card pad-20">
				<div class="row">
					<div class="col-md-12"><h3 class="pad-bot-15 pt-1 heading3">Create New Post</h3></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<textarea class="posttextarea" placeholder="Write some here.."></textarea>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-12 d-flex justify-content-between pad-top-15 pad-bot-10">
						<div class="ft-14 postnow pt-2 pb-2"><img src="images/network_photoicon.jpg" /> Photo</div>
						<div class="ft-14 postnow pt-2 pb-2"><img src="images/network_videosicon.jpg" /> Video</div>
						<div class="ft-14 postnow pt-2 pb-2"><img src="images/network_newreg_icon.jpg" /> Tag Friends</div>
						<div class=""><input type="button" class="btn btn-select with-130" value="Post" name=""></div>
					</div>
				</div>
			</div>-->

			<div class="row">
				<div class="col-md-12">
					<div class="others-profile_ospage">
						<div class="row">
							<div class="col-md-12 pad-bot-10 pad-top-20 page-head">
								<h2 class="text-black"></h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-6 mynetwork_card">
								<div class="card pad-top-20 pad-bot-20 text-center">
									<a href="#"><img src="images/followers.png" class="img-fluid">
									<span class="counts">5634</span>
									<p>Followers</p></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-6 mynetwork_card">
								<div class="card pad-top-20 pad-bot-20 text-center">
									<a href="#"><img src="images/following.png" class="img-fluid">
									<span class="counts">3634</span>
									<p>Followings</p></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-6 mynetwork_card">
								<div class="card pad-top-20 pad-bot-20 text-center">
									<a href="#"><img src="images/connections.png" class="img-fluid">
									<span class="counts">8134</span>
									<p>Connections</p></a>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-6 mynetwork_card">
								<div class="card pad-top-20 pad-bot-20 text-center">
									<a href="#"><img src="images/collabraton.png" class="img-fluid">
									<span class="counts">634</span>
									<p>Collaborations</p></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-6 mynetwork_card">
								<div class="card pad-top-20 pad-bot-20 text-center">
									<a href="#"><img src="images/projects.png" class="img-fluid">
									<span class="counts">1634</span>
									<p>Projects</p></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-6 mynetwork_card">
								<div class="card pad-top-20 pad-bot-20 text-center">
									<a href="#"><img src="images/project-network.png" class="img-fluid">
									<span class="counts">583</span>
									<p>Project Networks</p></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 pad-bot-10 page-head">
								<div class="row">
									<div class="col-md-12">
										<h2 class="text-black">Contacts</h2>
									</div>
									<?php include 'includes/right-contactus-lists.php';?>
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="col-md-12 pad-bot-10 page-head">
										<h2 class="text-black">Group Chat</h2>
									</div>
								<div class="calender_outer mt-0">
									<?php include 'includes/chat.php';?>
									<br clear="all" />
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>


		</div>



		<div class="others-profile-right">			
			<div class="row">
				<div class="col-md-12 pad-bot-10 pad-top-50 mt-1 page-head">
					<h2 class="text-black"></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-4 col-6 mynetwork_card">
					<div class="card pad-top-20 pad-bot-20 text-center">
						<a href="#"><img src="images/followers.png" class="img-fluid">
						<span class="counts">5634</span>
						<p>Followers</p></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 col-6 mynetwork_card">
					<div class="card pad-top-20 pad-bot-20 text-center">
						<a href="#"><img src="images/following.png" class="img-fluid">
						<span class="counts">3634</span>
						<p>Followings</p></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 col-6 mynetwork_card">
					<div class="card pad-top-20 pad-bot-20 text-center">
						<a href="#"><img src="images/connections.png" class="img-fluid">
						<span class="counts">8134</span>
						<p>Connections</p></a>
					</div>
				</div>

				<div class="col-md-6 col-sm-4 col-6 mynetwork_card">
					<div class="card pad-top-20 pad-bot-20 text-center">
						<a href="#"><img src="images/collabraton.png" class="img-fluid">
						<span class="counts">634</span>
						<p>Collaborations</p></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 col-6 mynetwork_card">
					<div class="card pad-top-20 pad-bot-20 text-center">
						<a href="#"><img src="images/projects.png" class="img-fluid">
						<span class="counts">1634</span>
						<p>Projects</p></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-4 col-6 mynetwork_card">
					<div class="card pad-top-20 pad-bot-20 text-center">
						<a href="#"><img src="images/project-network.png" class="img-fluid">
						<span class="counts">583</span>
						<p>Project Networks</p></a>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12 pad-bot-10 pad-top-20 page-head">
					<h2 class="text-black">Contacts</h2>
				</div>
			</div>
			<div class="row">
				<?php include 'includes/right-contactus-lists.php';?>
			</div>
			<!--<div class="row">
				<div class="col-md-12 pad-bot-10 pad-top-20 page-head">
					<h2 class="text-black">Group Chat</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer mt-0">
						<?php // include 'includes/chat.php';?>
						<br clear="all" />
					</div>
				</div>
			</div>-->
		</div>
	  </div>
	  
	  <?php include 'includes/footer.php';?>
        
    <div class="modal fade" id="addprofessional" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Professional Network</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
    		            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="professionaltitle">Professional Title:</label>
        					    	<input type="text" class="form-control big_box" id="professionaltitle" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>
        	      		
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Professional</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>    
        
  </body>

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
		
	<div class="modal fade" id="addphotos2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

    <?php include 'includes/script.php';?>
	<script>

		(function($){
			$(window).on("load",function(){
				
				$(".mCustomScrollbar").mCustomScrollbar({
					//theme:"minimal"
				});
				$(".user_chat").mCustomScrollbar({
					//theme:"minimal"
				});
			});
		})(jQuery);


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

		  $('.counts').countUp({
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