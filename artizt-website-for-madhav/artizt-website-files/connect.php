

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
					<h2 class="text-black pull-left">Connect</h2>
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
				    <a class="nav-link active" id="groups-tab" data-toggle="pill" href="#requests" role="tab" aria-controls="network-groups" aria-selected="true">Friend Requests</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="connected-tab" data-toggle="pill" href="#myrequests" role="tab" aria-controls="network-connected" aria-selected="false">My Requests</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="following-tab" data-toggle="pill" href="#recommend" role="tab" aria-controls="network-recommend" aria-selected="false">Recomended for you</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link addnew-btn" href="javascript:void(0);" data-toggle="modal" data-target="#addconnect">+</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane show active" id="requests" role="tabpanel" aria-labelledby="network-requests">
						<div class="row">
							<div class="col-md-12"><h3 class="pad-bot-15 pt-1">Friend Requests</h3></div>
						</div>
						<!--<div class="row align-items-center">
							<div class="col-md-10 col-sm-10">
								<div class="row">
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkimg.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser1.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser2.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser3.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 text-center">
								<a href="#" class="ft-14"><u>View All</u></a>
							</div>
						</div>-->

						<div class="row align-items-center">
							<div class="col-md-10 col-sm-10">
								<div class="row">
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser4.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate mb-2">10+ Mutual Friends</p>
											<a href="#" class="accept_link ft-12"><img class="mr-1" src="images/accept_icon.png"> Accept</a>
											<a href="#" class="btn btn-deny mt-2">Deny</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser5.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate mb-2">10+ Mutual Friends</p>
											<a href="#" class="accept_link ft-12"><img class="mr-1" src="images/accept_icon.png"> Accept</a>
											<a href="#" class="btn btn-deny mt-2">Deny</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser6.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate mb-2">10+ Mutual Friends</p>
											<a href="#" class="accept_link ft-12"><img class="mr-1" src="images/accept_icon.png"> Accept</a>
											<a href="#" class="btn btn-deny mt-2">Deny</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser4.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate mb-2">10+ Mutual Friends</p>
											<a href="#" class="accept_link ft-12"><img class="mr-1" src="images/accept_icon.png"> Accept</a>
											<a href="#" class="btn btn-deny mt-2">Deny</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 text-center">
								<a href="#" class="ft-14"><u>View All</u></a>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="myrequests" role="tabpanel" aria-labelledby="network-requests">
						<div class="row">
							<div class="col-md-12"><h3 class="pad-bot-15 pt-1">My Requests</h3></div>
						</div>
						<div class="row align-items-center">
							<div class="col-md-10 col-sm-10">
								<div class="row">
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkimg.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Waiting</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser4.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="accept_link ft-12 d-block" style="min-height:35px;"><img class="mr-1" src="images/accept_icon.png"> Accepted</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser6.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="accept_link ft-12 d-block" style="min-height:35px;"><img class="mr-1" src="images/accept_icon.png"> Accepted</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser1.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Waiting</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 text-center">
								<a href="#" class="ft-14"><u>View All</u></a>
							</div>
						</div>

					</div>
					<div class="tab-pane" id="recommend" role="tabpanel" aria-labelledby="network-recommend">
						<div class="row">
							<div class="col-md-12"><h3 class="pad-bot-15 pt-1">Recommended Friends</h3></div>
						</div>
						<div class="row align-items-center">
							<div class="col-md-10 col-sm-10">
								<div class="row">
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkimg.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser1.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser2.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 mar-bot-15 align-items-center">
										<div class="card_network requests text-center">
											<div class="logo_round network_round">
												<img src="images/networkuser3.png" class="img-fluid">
											</div>
											<h4 class="text-truncate">Mary Mercado</h4>
											<p class="text-truncate">10+ Mutual Friends</p>
											<a href="#" class="btn btn-select pl-3 pr-3 ft-14">Add Friend</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-2 text-center">
								<a href="#" class="ft-14"><u>View All</u></a>
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
	  
	  <div class="modal fade" id="addconnect" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add New Connet</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
    		            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="connettitle">Connet Title:</label>
        					    	<input type="text" class="form-control big_box" id="connettitle" aria-describedby="" placeholder="">
        						</div>
        	      			</div>
        	      		</div>
        	      		
		  		  </div>

			      <div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add Connect</button>
			      </div>
				</form>      
		    </div>
		  </div>
		</div>
	  
	  
	  <?php include 'includes/footer.php';?>
        
        
        
        
  </body>

  

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