

<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
 
    <style type="text/css">
    	.recent-followers li:first-child{
    		padding-top: 0 !important;
    		background: none !important;
    	}

    	.user_chat{
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
		<?php include 'includes/side-menu.php';?>
		<hr>
		<?php include 'includes/side-followers.php';?>  
			 
		</div>
		
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Artizt Analytics</h2>
				</div>
			</div>
			
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="projects-tab" data-toggle="pill" href="#projects" role="tab" aria-controls="pills-profile" aria-selected="false">Projects</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="fnc-tab" data-toggle="pill" href="#fnc-projects" role="tab" aria-controls="pills-contact" aria-selected="false">Fnc</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="artiztore-tab" data-toggle="pill" href="#fnc-artiztore" role="tab" aria-controls="pills-contact" aria-selected="false">Artiztore</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="postsfeeds-tab" data-toggle="pill" href="#postsfeeds" role="tab" aria-controls="pills-contact" aria-selected="false">Posts & Feeds</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="events-tab" data-toggle="pill" href="#fnc-events" role="tab" aria-controls="pills-contact" aria-selected="false">Events</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">1345</span>+
								    <p>Views</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
    							    <span class="counter" data-counterup-time="15">12345</span>+
    								<p>Followers</p>
    							</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
							        <span class="counter" data-counterup-time="15">1545</span>+
								    <p>Likes</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-4">
    							    <span class="counter" data-counterup-time="15">1345</span>+
    								<p>Comments</p>
    							</div>
							</div>
							
							<!--<div class="col-md-4 col-sm-4">
							    <ul class="profile-counter">
									<li>
										
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
							</div>-->
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="profile-analytics" style="width:100%;"></canvas>
						    </div>
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="myChart" style="width:100%;"></canvas>
						    </div>
						</div>
					</div>
					<div class="tab-pane" id="projects" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">10345</span>+
								    <p>Completed<br />Projects</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
    							    <span class="counter" data-counterup-time="15">12</span>+
    								<p>Awards<br />Project</p>
    							</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
							        <span class="counter" data-counterup-time="15">1545</span>+
								    <p>Ongoing<br />Projects</p>
								</div>
							</div>
							<!--<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-4">
    							    <span class="counter" data-counterup-time="15">1345</span>+
    								<p>Fnc<br />Projects</p>
    							</div>
							</div>-->
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="myprojects" style="width:100%; height:200px;"></canvas>
						    </div>
						</div>
						<div class="row">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row">
						    <div class="col-sm-8 col-6"></div>
						    <div class="col-md-4 col-6">
						        <select class="form-control" name="" id="">
						            <option value="Artizt Network">Artizt Network</option>
						            <option value="Project 2">Project 2</option>
						            <option value="Project 3">Project 3</option>
						            <option value="Project 4">Project 4</option>
						        </select>
						    </div>
						    <div class="col-md-12">
						        <canvas id="project-status" style="width:100%; height:500px;"></canvas>
						    </div>
						</div>
					</div>
					<div class="tab-pane" id="fnc-projects" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">10345</span>+
								    <p>FnC<br />Projects</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">103</span>+
								    <p>Projects<br />Based</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
    							    <span class="counter" data-counterup-time="15">12</span>+
    								<p>Hour<br />Based</p>
    							</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
							        <span class="counter" data-counterup-time="15">15</span>+
								    <p>Fulltime<br />Work</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
							        <span class="counter" data-counterup-time="15">154</span>+
								    <p>Parttime<br />Work</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-4">
    							    <span class="counter" data-counterup-time="15">1345</span>+
    								<p>Balance<br />Hours</p>
    							</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-md-12">
						        <canvas id="fncproject-analytics" style="width:100%;"></canvas>
						    </div>
						</div>
						
						
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="fncprojects" style="width:100%; height:200px;"></canvas>
						    </div>
						</div>
					</div>
					<div class="tab-pane" id="fnc-artiztore" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">3</span>
								    <p>Total<br />Stores</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">10334</span>
								    <p>Total<br />Products</p>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
							        <span class="counter" data-counterup-time="15">10334</span>+
								    <p>Available<br />Products</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
							        <span class="counter" data-counterup-time="15">154</span>
								    <p>Selling<br />Products</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-4">
							        <span class="counter" data-counterup-time="15">154</span>
								    <p>Selling<br />Amounts</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">154</span>
								    <p>Pending<br />Amounts</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
    							    <span class="counter" data-counterup-time="15">1452</span>+
    								<p>No.of<br />Visiters</p>
    							</div>
							</div>
							
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="fncartiztore" style="width:100%; height:200px;"></canvas>
						    </div>
						</div>
						<div class="row">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row">
						    <div class="col-sm-8 col-6"></div>
						    <div class="col-md-4 col-6">
						        <select class="form-control" name="" id="">
						            <option value="Kunnakudi">Kunnakudi</option>
						            <option value="Basker">Basker</option>
						            <option value="Lakshman Sruthi">Lakshman Sruthi</option>
						            <option value="Store 4">Store 4</option>
						        </select>
						    </div>
						    <div class="col-md-12">
						        <canvas id="store-status" style="width:100%;"></canvas>
						    </div>
						</div>
					</div>
					<div class="tab-pane" id="postsfeeds" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">103</span>+
								    <p>Posted<br />Posts</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
							        <span class="counter" data-counterup-time="15">5</span>
								    <p>Bookmarked<br />Posts</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-4">
							        <span class="counter" data-counterup-time="15">5</span>
								    <p>Saved<br />Posts</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
							        <span class="counter" data-counterup-time="15">45</span>
								    <p>Saved<br />Feeds</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
    							    <span class="counter" data-counterup-time="15">12</span>
    								<p>Favourites<br />Feeds</p>
    							</div>
							</div>
							
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">14</span>
								    <p>Bookmarked<br />Feeds</p>
								</div>
							</div>
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="postfeads-analytics" style="width:100%;"></canvas>
						    </div>
						</div>
						
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="fncpostsfeeds" style="width:100%; height:200px;"></canvas>
						    </div>
						</div>
						
					</div>
					<div class="tab-pane" id="fnc-events" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">103</span>+
								    <p>No.of<br />Events</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
							        <span class="counter" data-counterup-time="15">45</span>
								    <p>Created<br />Events</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-3">
    							    <span class="counter" data-counterup-time="15">12</span>
    								<p>Participate<br />Events</p>
    							</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-4">
							        <span class="counter" data-counterup-time="15">5</span>
								    <p>Ongoing<br />Events</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-2">
							        <span class="counter" data-counterup-time="15">14</span>
								    <p>Completed<br />Events</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mar-bot-20">
							    <div class="analiys_count analiys-bg-1">
							        <span class="counter" data-counterup-time="15">7</span>
								    <p>Special<br />Events</p>
								</div>
							</div>
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="events-analytics" style="width:100%;"></canvas>
						    </div>
						</div>
						<div class="row mar-top-30">
						    <div class="col-md-12">
						        <canvas id="fncevents1" style="width:100%; height:200px;"></canvas>
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
								<div class="calender_outer mt-2">
									<?php include 'includes/right-calender-schulde.php'; ?>
								</div>
							</div>			
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-2">
									<?php include 'includes/chat.php';?>
									<br clear="all" />
								</div>
							</div>

							<!--<div class="col-sm-6">
								<div class="row">
									<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
										<h4 class="text-black">My Workspace</h4>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="worksace">
										<div class="villa_dropdown right-25">
											<div class="dropdown">					  
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#">Action</a>
											    <a class="dropdown-item" href="#">Another action</a>
											    <a class="dropdown-item" href="#">Something else here</a>
											  </div>
											</div>
										</div>
										<img src="images/workspace1.jpg" class="img-fluid relateimg">
										<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
										<div class="worksace_propetise">
											<div class="row">
												<div class="col-md-12">
													<div class="logo_round">
														<img src="images/worklogo.png" class="img-fluid">
													</div>
													<h3>Nextiva Workspace</h3>
													<p class="ft-14">18th Main Road, Anna Nagar, Chennai</p>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-12">
													<div class="morevides work-followers">
														<ul class="recent-followers pl-0">
															<li>+5</li>
															<li><img src="images/recent-followers1.png" alt=""></li>
															<li><img src="images/recent-followers4.png" alt=""></li>
															<li><img src="images/recent-followers5.png" alt=""></li>
														</ul>
													</div>
													<div class="total_review">
														<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
													</div>
												</div>								
											</div>
										</div>								
										</div>
									</div>
								</div>
							</div>-->


							
						</div>
					</div>
				</div>
			</div>

		</div>



		<div class="others-profile-right">			
			<div class="row">
				<div class="col-md-12 pad-bot-30  pad-top-60 mt-1">
					<div class="calender_outer mt-2">
						<?php include 'includes/right-calender-schulde.php'; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer">
						<?php include 'includes/chat.php';?>
						<br clear="all" />
					</div>
				</div>
			</div>
			<!--<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 similar-indus-head">
					<h4 class="text-black">My Workspace</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="worksace">
						<div class="villa_dropdown right-25">
							<div class="dropdown">					  
								<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
						<img src="images/workspace1.jpg" class="img-fluid relateimg">
						<div class="heartic"><a href="#" class="hearticon2"><img src="images/villa-heart.png" width="18"></a></div>
						<div class="worksace_propetise">
							<div class="row">
								<div class="col-md-12">
									<div class="logo_round">
										<img src="images/worklogo.png" class="img-fluid">
									</div>
									<h3>Nextiva Workspace</h3>
									<p class="ft-14">18th Main Road, Anna Nagar, Chennai</p>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="morevides work-followers">
										<ul class="recent-followers pl-0">
											<li>+5</li>
											<li><img src="images/recent-followers1.png" alt=""></li>
											<li><img src="images/recent-followers4.png" alt=""></li>
											<li><img src="images/recent-followers5.png" alt=""></li>
										</ul>
									</div>
									<div class="total_review">
										<p><img src="images/v-star.png" width="12" class="img-fluid"> <span>5.0</span> <u>84 reviews</u></p>
									</div>
								</div>								
							</div>
						</div>								
					</div>
				</div>
			</div>-->


			
		</div>
		

	  </div>
	  
	  <?php include 'includes/footer.php';?>

  </body>

  


	<div class="modal fade" id="addnotes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header text-center b-modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Add Notes</h5>
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
								    	<label for="title">Title:</label>
								    	<input type="text" class="form-control big_box" id="title" aria-describedby="emailHelp"  placeholder="" required>
									</div>
				  				</div>
				  			</div>
				  			<div class="row">
				  				<div class="col-md-12">
				  					<div class="form-group">
								    	<label for="type">type:</label>
								    	<select class="form-control big_box" id="type" required>
								    		<option value=""></option>
								    		<option value="Personal">Personal</option>
								    		<option value="Task">Task</option>
								    		<option value="Work">Work</option>
								    		<option value="Friends">Friends</option>
								    	</select>						   
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
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
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
	<script>
		
		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		});
		
	</script>
	
	<script>
        var xValues = ["March", "April", "May", "June", "July"];
        var yValues = [1345, 1645, 1845, 3345, 2345];
        var yValues2 = [2145, 1339, 1534, 1444, 1312];
        var yValues3 = [1867, 1045, 1345, 1235, 2132];
        var yValues4 = [2145, 1439, 1234, 1644, 1712];

      
        new Chart("myChart", {
          type: "bar",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              label: 'Views',
              backgroundColor: "#8eccfb",
              data: yValues
            },
            {
              label: 'Followers',
              backgroundColor: "#c7ffd5",
              data: yValues2
            },
            {
              label: 'Likes',
              backgroundColor: "#ffddc0",
              data: yValues3
            }
            ,
            {
              label: 'Comments',
              backgroundColor: "#c7c1ff",
              data: yValues4
            }
            
            ]
            
          },
          
          options: {
            legend: {
                Position: 'left',
                align:'top'
            },
            title: {
              display: true,
              text: "Profile Analytics 2022"
            }
          }
        });
    </script>
    
    <script>
        var xValues = ["UI Design", "UI Development", "Dynamic Programming", "Pending Works",];
        var yValues = [103, 110, 154, 192,];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#e8c3b9",
          "#1e7145",
          "#0a4c61"
        ];
        
        new Chart("project-status", {
          type: "doughnut",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Artizt Network Timeline (Hours)"
            },
            legend: {
                Position: 'left',
                align:'top'
            },
          }
        });
        </script>
    
    
    <script>
        var xValues = ["Views", "Followers", "Likes", "Comments"];
        var yValues = [1035, 6562, 1545, '1345'];
        var barColors = [
          "#97cef7",
          "#a8f9bd",
          "#ffc18d",
          "#d8d4fb"
        ];
        
        new Chart("profile-analytics", {
          type: "line",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues,
              fill: false,
              borderColor: 'rgb(45, 172, 122)',
              tension: 0.1
            }]
          },
          options: {
            title: {
              display: true,
              text: "August Month Profile Analytics"
            }
          }
        });
        </script>
	
	<script>
        var xValues = ["Completed Projects", "Awards Project", "Ongoing Projects"];
        var yValues = [10345, 162, 1545];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797"
        ];
        
        new Chart("myprojects", {
          type: "pie",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          
         options: {
            title: {
              display: true,
              text: "Projects Analytics"
            },
          }
          
          /*options: {
            legend: {
              labels: {
                padding: 0
              }
            }
          }*/
          
          
        });
        </script>
	
	<script>
        var xValues = ["February", "March", "April", "May", "June", "July"];
        var yValues = [1035, 103, 12, 15, 154, 1345];
        var yValues2 = [2035, 1203, 232, 215, 1534, 1345];
        var yValues3 = [3035, 1303, 122, 135, 1524, 1645];
        var yValues4 = [1345, 103, 12, 215, 154, 1245];
        var yValues5 = [1235, 103, 12, 15, 154, 1345];
        var yValues6 = [2335, 103, 12, 15, 154, 1345];
        //var barColors = ["red", "green","blue","orange","brown","yellow"];
        
        new Chart("fncprojects", {
          type: "bar",
          responsive: "true",
          data: {
            labels: xValues,
            datasets: [{
              label: 'FnC Projects',
              backgroundColor: "#8eccfb",
              data: yValues
            },
            {
              label: 'Projects Based',
              backgroundColor: "#c7ffd5",
              data: yValues2
            },
            {
              label: 'Hour Based',
              backgroundColor: "#ffddc0",
              data: yValues3
            },
            {
              label: 'Fulltime Work',
              backgroundColor: "#c7c1ff",
              data: yValues4
            },
            {
              label: 'Parttime Work',
              backgroundColor: "#c7c1ff",
              data: yValues5
            },
            {
              label: 'Balance Hours',
              backgroundColor: "#c7c1ff",
              data: yValues6
            }
            
            ]
          },
          options: {
            legend: {display: true},
            title: {
              display: true,
              text: "FnC Projects 2022"
            }
          }
        });
    </script>
    
    <script>
        var xValues = ["Projects Based", "Hour Based", "Fulltime Work", "Parttime Work", "Balance Hours"];
        var yValues = [103, 12, 15, '155', '1345'];
        var barColors = [
          "#97cef7",
          "#a8f9bd",
          "#ffc18d",
          "#d8d4fb"
        ];
        
        new Chart("fncproject-analytics", { 
          type: "line",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues,
              fill: false,
               borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
          },
          options: {
            title: {
              display: true,
              text: "August Month Profile Analytics"
            }
          }
        });
        </script>
	
	<script>
        var xValues = ["Total Stores", "Total Products", "Available Products", "Selling Products", "Selling Amounts", "Pending Amounts", "No.of Visiters"];
        var yValues = [155, 349, 443, 243, 153, 345, 123];
        var barColors = ["#ee3c23", "#f58b1f","#0a4c61","#7870c3","brown", "#19495c", "#399777"];
        
        new Chart("fncartiztore", {
          type: "bar",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: true},
            title: {
              display: true,
              text: "Artiztore Analytics"
            }
          }
        });
    </script>
    
    
    <script>
        var xValues = ["Available Products", "No.of Visiters", "No.of Selling Products", "No.of Pending Products"];
        var yValues = [2035, 1562, 1545, 1345];
        var barColors = [
          "#97cef7",
          "#a8f9bd",
          "#ffc18d",
          "#d8d4fb"
        ];
        
        new Chart("store-status", {
          type: "line",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues,
              fill: false,
              borderColor: 'rgb(45, 172, 122)',
              tension: 0.1
            }]
          },
          options: {
            title: {
              display: true,
              text: "August Month Profile Analytics"
            }
          }
        });
    </script>
    
    <script>
        var xValues = ["Posted Posts", "Bookmarked Posts", "Saved Posts", "Saved Feeds", "Favourites Feeds", "Bookmarked Feeds"];
        var yValues = [55, 49, 44, 24, 15, 34];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#e8c3b9",
          "#1e7145",
          "#0a4c61"
        ];
        
        new Chart("fncpostsfeeds", {
          type: "doughnut",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Posts & Feeds Analytics"
            }
          }
        });
</script>
    <script>
        var xValues = ["Bookmarked Posts", "Saved Posts", "Saved Feeds", "Favourites Feeds", "Bookmarked Feeds"];
        var yValues = [1035, 1562, 1545, 1343, 1435];
        var barColors = [
          "#97cef7",
          "#a8f9bd",
          "#ffc18d",
          "#d8d4fb"
        ];
        
        new Chart("postfeads-analytics", {
          type: "line",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues,
              fill: false,
              borderColor: 'rgb(25, 102, 122)',
              tension: 0.1
            }]
          },
          options: {
            title: {
              display: true,
              text: "Recent Post Activity"
            }
          }
        });
        </script>
        
        
        <script>
        var xValues = ["Events Views", "Events Likes", "Events Wish List", "Events Bookings",];
        var yValues = [1585, 1562, 1545, 1345];
        var barColors = [
          "#97cef7",
          "#a8f9bd",
          "#ffc18d",
          "#d8d4fb"
        ];
        
        new Chart("events-analytics", {
          type: "line",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues,
              fill: false,
              borderColor: 'rgb(25, 102, 122)',
              tension: 0.1
            }]
          },
          options: {
            title: {
              display: true,
              text: "Recent Post Activity"
            }
          }
        });
        </script>
        
    <script>
        var xValues = ["No.of Events", "Created Events", "Participate Events", "Ongoing Events", "Compleed Events", "Special Events"];
        var yValues = [103, 45, 12, 5, 14, 7];
        var barColors = [
          "#b91d47",
          "#00aba9",
          "#2b5797",
          "#e8c3b9",
          "#1e7145",
          "#0a4c61"
        ];
        
        new Chart("fncevents1", {
          type: "pie",
          responsive: true,
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            title: {
              display: true,
              text: "Events Analytics"
            }
          }
        });
        </script>
  
	
</html>