

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
					<h2 class="text-black pull-left">Community</h2>
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
				    <a class="nav-link active" id="groups-tab" data-toggle="pill" href="#groups" role="tab" aria-controls="network-groups" aria-selected="true">Associations</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="connected-tab" data-toggle="pill" href="#recommend" role="tab" aria-controls="network-connected" aria-selected="false">Clubs</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="following-tab" data-toggle="pill" href="#following" role="tab" aria-controls="network-following" aria-selected="false">My community</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link addnew-btn" href="javascript:void(0);" data-toggle="modal" data-target="#addcommunity">+</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="groups" role="tabpanel" aria-labelledby="network-groups">
						<!--<div class="row">
							<div class="col-md-12"><h3 class="pad-bot-15 pt-1">Associations</h3></div>
						</div>-->
						<div class="row">
            				<div class="col-md-6 col-sm-6 pad-bot-15">
            					<div class="os_card">
            						<div class="os_card_head">
            							<h4>Notifices</h4>
            							<div class="notification_dropdown os_dropdown pt-0">
            								<div class="dropdown">					  
            									<a href="#" class="dropdown-toggle dropdown-dots ft-22" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">... </a>
            								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            								    <a class="dropdown-item" href="#">Today</a>
            								    <a class="dropdown-item" href="#">Yesterday</a>
            								    <a class="dropdown-item" href="#">Lastweek</a>
            								  </div>
            								</div>
            							</div><br clear="all">
            						</div>
            						<div class="os_card_body notificationscard">							
            							<div class="row">
            								<div class="col-md-12 pad-bot-15">
            									<div class="logo_round logo_round-40 mt-2">
            										<img src="images/worklogo.png" class="img-fluid">
            									</div>
            									<h5>Your order is placed</h5>
            									<p>Everyone realizes why a new common language would</p>
            									<span>15 Nov 2022  |  Francisco</span>		
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12 pad-bot-15">
            									<div class="logo_round logo_round-40 mt-2">
            										<img src="images/worklogo.png" class="img-fluid">
            									</div>
            									<h5>Your order is placed</h5>
            									<p>Everyone realizes why a new common language would</p>
            									<span>15 Nov 2022  |  Francisco</span>		
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<div class="logo_round logo_round-40 mt-2">
            										<img src="images/worklogo.png" class="img-fluid">
            									</div>
            									<h5>Your order is placed</h5>
            									<p>Everyone realizes why a new common language would be desirable</p>
            									<span>15 Nov 2022  |  Francisco</span>		
            								</div>
            							</div>
            
            
            
            
            
            						</div>
            					</div>
            				</div>
            				<div class="col-md-6 col-sm-6 pad-bot-15">
            					<div class="os_card">
            						<div class="os_card_head">
            							<h4>Announcement</h4>
            							<div class="notification_dropdown os_dropdown pt-0">
            								<div class="dropdown">					  
            									<a href="#" class="dropdown-toggle dropdown-dots ft-22" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">... </a>
            								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            								    <a class="dropdown-item" href="#">Today</a>
            								    <a class="dropdown-item" href="#">Yesterday</a>
            								    <a class="dropdown-item" href="#">Lastweek</a>
            								  </div>
            								</div>
            							</div><br clear="all">
            						</div>
            						<div class="os_card_body notificationscard">							
            							<div class="row">
            								<div class="col-md-12 activity_list">
            									<ul>
            										<li>
            											<span>15 Nov 2022</span>
            											<p>Responded to need "Volunteer Activities </p>
            										</li>
            										<li>
            											<span>15 Nov 2022</span>
            											<p>Responded to need "Volunteer Activities </p>
            										</li>
            										<li>
            											<span>15 Nov 2022</span>
            											<p>Responded to need "Volunteer Activities </p>
            										</li>
            										<li>
            											<span>15 Nov 2022</span>
            											<p>Responded to need "Volunteer Activities </p>
            										</li>
            										<li>
            											<span>15 Nov 2022</span>
            											<p>Responded to need "Volunteer Activities </p>
            										</li>
            										<li>
            											<span>15 Nov 2022</span>
            											<p>Responded to need "Volunteer Activities </p>
            										</li>
            									</ul>
            								</div>
            							</div>	
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="row">
            				<div class="col-md-6 col-sm-6 pad-bot-15">
            					<div class="os_card">
            						<div class="os_card_head">
            							<h4>Discussion</h4>
            							<div class="notification_dropdown os_dropdown pt-0">
            								<div class="dropdown">					  
            									<a href="#" class="dropdown-toggle dropdown-dots ft-22" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">... </a>
            								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            								    <a class="dropdown-item" href="#">Today</a>
            								    <a class="dropdown-item" href="#">Yesterday</a>
            								    <a class="dropdown-item" href="#">Lastweek</a>
            								  </div>
            								</div>
            							</div><br clear="all">
            						</div>
            						<div class="os_card_body notificationscard">							
            							<div class="row">
            								<div class="col-md-12 pad-bot-15">
            									<div class="logo_round logo_round-40 mt-2">
            										<img src="images/networkuser1.png" class="img-fluid">
            									</div>
            									<h5>Karen Williams</h5>
            									<p>Everyone realizes why a new common language would</p>
            									<span>15 Nov 2022  |  Francisco</span>		
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12 pad-bot-15">
            									<div class="logo_round logo_round-40 mt-2">
            										<img src="images/networkuser2.png" class="img-fluid">
            									</div>
            									<h5>Behil Paul</h5>
            									<p>Everyone realizes why a new common language would</p>
            									<span>15 Nov 2022  |  Francisco</span>		
            								</div>
            							</div>
            							<div class="row">
            								<div class="col-md-12">
            									<div class="logo_round logo_round-40 mt-2">
            										<img src="images/networkuser3.png" class="img-fluid">
            									</div>
            									<h5>Thangaraj</h5>
            									<p>Everyone realizes why a new common language would be desirable</p>
            									<span>15 Nov 2022  |  Francisco</span>		
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            				<div class="col-md-6 col-sm-6 pad-bot-15">
            					<div class="os_card">
            						<div class="os_card_head">
            							<h4>Polls</h4>
            							<div class="notification_dropdown os_dropdown pt-0">
            								<div class="dropdown">					  
            									<a href="#" class="dropdown-toggle dropdown-dots ft-22" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">... </a>
            								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            								    <a class="dropdown-item" href="#">Today</a>
            								    <a class="dropdown-item" href="#">Yesterday</a>
            								    <a class="dropdown-item" href="#">Lastweek</a>
            								  </div>
            								</div>
            							</div><br clear="all">
            						</div>
            						<div class="os_card_body notificationscard">							
            							<div class="row">
            								<div class="col-md-12">
            									<div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title ft-16 pb-2">
                                                            How is it vikram movie?
                                                        </h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="list-group polls-list-item">
                                                            <li class="list-group-item border-0">
                                                                <div class="polls-radio">
                                                                  <div>
                                                                    <input id="blockbuster" name=vote type="radio" class="open">
                                                                      <label for="blockbuster" class="overlay">
                                                                       <div class="circle"></div> 
                                                                      </label>
                                                                    </input>
                                                                  </div>
                                                                </div>
                                                                <div class="radio">
                                                                    <label for="blockbuster">
                                                                        Blockbuster
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="list-group-item border-0">
                                                                <div class="polls-radio">
                                                                  <div>
                                                                    <input id="hit" name=vote type="radio" class="open">
                                                                      <label for="hit" class="overlay">
                                                                       <div class="circle"></div> 
                                                                      </label>
                                                                    </input>
                                                                  </div>
                                                                </div>
                                                                <div class="radio">
                                                                    <label for="hit">
                                                                        Hit
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="list-group-item border-0">
                                                                <div class="polls-radio">
                                                                  <div>
                                                                    <input id="average" name=vote type="radio" class="open">
                                                                      <label for="average" class="overlay">
                                                                       <div class="circle"></div> 
                                                                      </label>
                                                                    </input>
                                                                  </div>
                                                                </div>
                                                                <div class="radio">
                                                                    <label for="average">
                                                                        Average
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="list-group-item border-0">
                                                                <div class="polls-radio">
                                                                  <div>
                                                                    <input id="flop" name=vote type="radio" class="open">
                                                                      <label for="flop" class="overlay">
                                                                       <div class="circle"></div> 
                                                                      </label>
                                                                    </input>
                                                                  </div>
                                                                </div>
                                                                <div class="radio">
                                                                    <label for="flop">
                                                                        Flop
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            
                                                            <!--<li class="list-group-item border-0">
                                                                <div class="polls-radio">
                                                                  <div>
                                                                    <input id="nocomments" name=vote type="radio" class="open">
                                                                      <label for="nocomments" class="overlay">
                                                                       <div class="circle"></div> 
                                                                      </label>
                                                                    </input>
                                                                  </div>
                                                                </div>
                                                                <div class="radio">
                                                                    <label for="nocomments">
                                                                        No Comment
                                                                    </label>
                                                                </div>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer pt-3">
                                                        <button type="button" class="btn btn-select btn-sm border-radius-10">
                                                            Vote</button>
                                                        <a href="#" class="ml-2">View Result</a></div>
                                                </div>
            								</div>
            							</div>	
            						</div>
            					</div>
            				</div>
            			</div>
					</div>
					<div class="tab-pane" id="recommend" role="tabpanel" aria-labelledby="network-recommend">
						<div class="row">
							<div class="col-md-12"><h3 class="pad-bot-15 pt-1">Clubs</h3></div>
						</div>
						<div class="row align-items-center">
							
						</div>
					</div>
					<div class="tab-pane" id="following" role="tabpanel" aria-labelledby="network-following">
						<div class="row">
							<div class="col-md-12"><h3 class="pad-bot-15 pt-1">My community</h3></div>
						</div>
						<div class="row align-items-center">
							
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
        
        
      <div class="modal fade" id="addcommunity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add New Community</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
    		            <div class="row">
        	      			<div class="col-md-12">
        	      				<div class="form-group">
        					    	<label for="communitytitle">Community Title:</label>
        					    	<input type="text" class="form-control big_box" id="communitytitle" aria-describedby="" placeholder="">
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
				$(".os_card_body").mCustomScrollbar({
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