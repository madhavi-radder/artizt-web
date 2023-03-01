<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">


<style type="text/css">
    	.nav-item{
    		float: left;
    	}
    	.select2-container{
    		z-index: 9999;
    	}
    	.select2{
    		border-radius: 0.25rem;
    		min-height: 45px;
    	}
    	
    	.profilebg{
    	    background-image: url(images/vikrambg.jpg);
        	background-repeat: no-repeat;
          	background-size: cover;
          	min-height: 300px;
          	border-radius: 10px 10px 0 0;
          	position: relative;
          	background-position: center;
    	}
    	
    	.cast_crow1 img{
    	    width: 32px;
            height: 32px;
    	}
    	
    	.comments_txt{
    	    width:92%;
    	}
    	
    	.user_chat{
    		max-height: 380px;
    		overflow: auto;
    	}
    	
    	 
        
        .artist-btn{
            right:15px;
        }
    </style>

  </head>
  <body>
      
  <?php include 'includes/header-main.php';?>
    
    <div class="search-results-main">
        <div class="search-results-left" id="mySidenav">
		    <?php include 'includes/side-profile.php';?>
		    <?php include 'includes/side-menu.php';?>
		</div>
        <div class="search-results-right search-result-full-width p-sm-0">
            <section class="profile-header pt-0">
              	<div class="container">
              		<div class="row">
              			<div class="col-sm-12">
              				<div class="profile-card">
              					<div class="profilebg">
              						<div class="artist-btn">
              							<a href="#" class="btn btn-select pr-3 pl-3 ft-12 pt-2 pb-2 d-none d-md-block d-sm-block btn-padding-10">Change cover Image</a>
              							<a href="#" class="btn btn-select pr-3 pl-3 ft-12 d-md-none d-sm-none d-inine-block" style="width: 50px; height: 50px; text-align: center;  padding-top: 14px;"><i class="fa fa-pencil-square-o ft-20" aria-hidden="true"></i></a>
              						</div>
              					</div>
              					<div class="profile_description mar-bot-30">
              						<div class="row">
              							<div class="col-md-4 mar-top-10 d-none d-sm-none d-md-block">
              								<ul class="profile-counter home-profile-counter ">
        										<li>
        										    <img src="images/svg/users-confirm-profile-avatar-user-account-svgrepo-com.svg">
        											<span class="counter" data-counterup-time="15">1345</span>
        											Views
        										</li>
        										<li>
        										    <img src="images/svg/like-svgrepo-com.svg">
        											<span class="counter">1245</span>
        											Likes
        										</li>
        										<li>
        										    <img src="images/svg/user-svgrepo-com.svg">
        											<span class="counter">1000</span>
        											Wish List
        										</li>
        										<li>
        										    <img src="images/svg/users-confirm-profile-avatar-user-account-svgrepo-com.svg">
        											<span class="counter">24</span>
        											Bookings
        										</li>
        									</ul>
        									<!--<div class="availability_project">
        										<p>Availability for Projects<br /><span >Busy</span></p>
        									</div>-->
        
              							</div>
              							<div class="col-md-4 text-center profile_box">
              								
              								<div class="p-real profile_logo_round">
              									<img src="images/vikramlogo.png" class="img-fluid round-radius border-white">
              									<!--<span class="con_status_acive"></span>-->
        		      						</div>
        
        		      						<h3>Vikram </h3>
        		      						<p>Theatre/Drama • Director & Editor</p>
        		      						<span><a href="#">Lokesh Kanakaraj</a></span>
        		      						<div class="share-buttons d-flex justify-content-center">
        										<!--<span class="share-btn"><a href="#"><img src="images/logo-small-gray.png" alt="" /></a></span>-->
        										<span class="share-btn"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></span>
        										<span class="share-btn"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></span>
        										<span class="share-btn"><a href="#"><i class="fa fa-folder" aria-hidden="true"></i></a></span>
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
        										
        										<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-select border-radius-30 minwidth-150 pt-2 pb-2 mb-3">Book Events</a><br />
        										<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-normal-white border-radius-30 minwidth-150 pt-2 pb-2">Promote Events</a>
        									</div>
        									<div class="d-md-none d-sm-block text-center" style="clear: both; width: 350px; margin: 0 auto;">										
        										<ul class="profile-counter">
        											<li>
            										    <img src="images/svg/users-confirm-profile-avatar-user-account-svgrepo-com.svg">
            											<span class="counter" data-counterup-time="15">1345</span>
            											Views
            										</li>
            										<li>
            										    <img src="images/svg/like-svgrepo-com.svg">
            											<span class="counter">1245</span>
            											Likes
            										</li>
            										<li>
            										    <img src="images/svg/user-svgrepo-com.svg">
            											<span class="counter">1000</span>
            											Wish List
            										</li>
            										<li>
            										    <img src="images/svg/users-confirm-profile-avatar-user-account-svgrepo-com.svg">
            											<span class="counter">24</span>
            											Bookings
            										</li>
        										</ul>
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
        											    <a class="dropdown-item" href="#">Block</a>
        											    <a class="dropdown-item" href="#">Report</a>
        											  </div>
        											</div>
        										</div>
        									</div>
        
        									<div class="text-right pad-top-70 pr-3 d-none d-sm-none d-md-block">
        										<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-select border-radius-30 minwidth-150 pt-2 pb-2 mb-3">Book Events</a><br />
        										<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-normal-white border-radius-30 minwidth-150 pt-2 pb-2">Promote Events</a>
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
        				<div class="col-lg-8">
        				    <div class="vila-card pad-20">
        				        <div class="row">
        							<div class="col-md-12">
        								<h3 class="pt-0 ft-18">Description</h3>
        								<p class="ft-14 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        								<p class="ft-14 text-dark mb-0"><b>Event Created:</b> 08/2022</p>
        								<p class="ft-14 text-dark mb-0"><b>Event Created:</b> 09/2022</p>
        							</div>
        				        </div>
        				    </div>
        				    
        				    <div class="row">
        						<div class="col-md-12 pad-bot-15 pad-top-10 similar-indus-head">
        							<h4 class="text-black">Speakers</h4>
        							<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        						</div>
        					</div>
                			<div class="row">
        						<div class="col-md-12">
        							<div class="speakers-scroll">
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>
        								<div class="speakers text-center mb-3">
        									<img src="images/dhanush.png" class="img-fluid round-radius">
        									<h4>Dhanush</h4>
        									<p>Director</p>
        								</div>								
        							</div>
        						</div>
        					</div>
                			
                			<div class="vila-card mt-3">
        						<div class="villa-scroll">
        							<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
        							  
        							  
        							  <li class="nav-item">
        							    <a class="nav-link" id="photos-tab" data-toggle="pill" href="#photos" role="tab" aria-controls="pills-photos" aria-selected="false">Photos</a>
        							  </li>
        							  <li class="nav-item">
        							    <a class="nav-link" id="videos-tab" data-toggle="pill" href="#videos" role="tab" aria-controls="pills-videos" aria-selected="false">Videos</a>
        							  </li>
        							  
        							  
        							</ul>
        						</div>
        						<div class="tab-content pad-20" id="villa-tabContent">
        							<div class="tab-pane show active" id="photos" role="tabpanel" aria-labelledby="pills-home-tab">
        								<div class="row">
        									<div class="col-md-12">
        										<h3 class="pad-bot-15 pt-0 pull-left">Photos</h3>
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
        										<img src="images/photos-image5.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/photos-image6.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/photos-image7.jpg" class="img-fluid border-radius-15">
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
        										<img src="images/poster-img1.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/poster-img2.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/poster-img3.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/poster-img4.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/poster-img1.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/poster-img2.jpg" class="img-fluid border-radius-15">
        									</div>
        									<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
        										<img src="images/poster-img3.jpg" class="img-fluid border-radius-15">
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
        							<div class="tab-pane " id="videos" role="tabpanel" aria-labelledby="pills-home-tab">
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
        						</div>
        					</div>
                			
                			<div class="vila-card pad-20 mt-3">
        						<div class="row">
        							<div class="col-md-12">
        								<h3 class="pt-0 pull-left ft-18">Cast & Crew / Team</h3>									
        							</div>
        						</div>
        						<div class="row">
        							<div class="col-sm-4">
        								<div class="slide-txt cast_crow_text mb-3">
        								    <h3 class="ft-16">Director & Editor</h3>
        									<span class="cast_crow cast_crow1"><img src="images/kamal.png" class="round-radius img-fluid"></span>
        									<span class="cast_crow_text">
        										<p>Lokesh</p>
        									</span>					
        								</div>
        							</div>
        							<div class="col-sm-4">
        								<div class="slide-txt cast_crow_text mb-3">
        								    <h3 class="ft-16">Art Director</h3>
        									<span class="cast_crow cast_crow1"><img src="images/awads.jpg" class="round-radius img-fluid"></span>
        									<span class="cast_crow_text">
        										<p>Charles</p>
        									</span>					
        								</div>
        							</div>
        							<div class="col-sm-4">
        								<div class="slide-txt cast_crow_text mb-3">
        								    <h3 class="ft-16">Director of choreography</h3>
        									<span class="cast_crow cast_crow1"><img src="images/awads.jpg" class="round-radius img-fluid"></span>
        									<span class="cast_crow_text">
        										<p>Srikrish</p>
        									</span>					
        								</div>
        							</div>
        						</div>
        						<div class="row">
        							<div class="col-sm-4">
        								<div class="slide-txt cast_crow_text mb-3">
        								    <h3 class="ft-16">Cast</h3>
        									<span class="cast_crow cast_crow1"><img src="images/kamal.png" class="round-radius img-fluid"></span>
        									<span class="cast_crow_text">
        										<p>Sam Vishal</p>
        									</span>					
        								</div>
        							</div>
        							<div class="col-sm-4">
        								
        							</div>
        							<div class="col-sm-4">
        								
        							</div>
        						</div>
        					</div>
                			<div class="vila-card pad-20">
        						<div class="row">
        							<div class="col-md-12">
        								<h3 class="pt-0 pull-left ft-18">Awards & Achievement</h3>									
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
        					<?php include 'includes/seobox.php';?>
        					
        				</div>	
        				    
        				<div class="col-lg-4">
        				    <div class="row">
                				<div class="col-md-12 pad-bot-15 mt-0 similar-indus-head">
                					<h5 class="text-black">Events Details</h5>
                				</div>
                			</div>
                			
                			<div class="row">
                			    <div class="col-md-12">
                			        <div class="vila-card pad-15">
                			            <img src="images/club1.jpg" class="img-fluid  mb-3" />
                			            <h3 class="pl-0 ft-16 fw-700 pb-2">Livefyre - Studio Club</h3>
                			            <div class="eventdet_sec pad-bot-15">
                							<span class="icons1"><img src="images/pinsm.png" width="32"></span>
                							<span class="event_sehdule">#58, Royapettah High Road, <br>Chennai - 600026</span>
                						</div>
                			            <div class="eventdet_sec pad-bot-15">
                							<span class="icons1"><img src="images/Clock.png"></span>
                							<span class="event_sehdule">Thursday, May 26, 2022<br>4:30 AM to 6:00 AM PST</span>
                						</div>
                						<div class="eventdet_sec pad-bot-15">
                							<span class="icons1"><img src="images/VideoCamera.png"></span>
                							<span class="event_sehdule">Virtual</span>
                						</div>
                			        </div>
                			    </div>
                			</div>
        				    <div class="row">
                				<div class="col-md-12">
                				    <div class="row">
            							<div class="col-sm-12 pad-bot-30">
            								<div class="calender_outer mt-0">
            									<?php include 'includes/events-calender.php'; ?>
            								</div>
            							</div>
            						</div>
                				</div>
                			</div>
                			<div class="row">
        					    <div class="col-md-12">
        					        <div class="calender_outer mt-1 pb-3">
        					            <?php include 'includes/chat.php';?>
        					            <br clear="all" />
        					        </div>
        					    </div>
        					</div>
        				</div>
        			</div>
        		  </div>
        		  
        	  </section>
        </div>
        
    </div>

      
	  
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
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Projects</button>
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
		
  </body>

  <?php include 'includes/script.php';?>
    <script src="js/bootstrap-datepicker.js"></script>
   
	<script>
	
	    (function($){
			$(window).on("load",function(){
				
				$(".user_chat").mCustomScrollbar({
					//theme:"minimal"
				});
				
				$(".calender_txt").mCustomScrollbar({
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
	
	
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
		
        $(function() {
		    $('.calendar').pignoseCalendar();
		});
		

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
			  autoplay: false,
			  dots: false,
              variableWidth: false,
			  arrows: false,
			  autoplaySpeed: 4000,
			  
			});
		$('.projects_worked').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  autoplay: true,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 4000,
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
			  
		});
	</script>
</html>