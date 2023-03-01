 
 <?php include 'includes/top.php';?>
 
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/pricing-table.css">
    <style>
        .msg-border-box{
            border: 1px solid #d9d9d9 !important;
            width:100%;
        }
    </style>
  </head>
  <body>
       

  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
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
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">Artizt Office Space</h2>
				<div class="pull-right store_btn">	
    					<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My FnC <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="fnc-project.php">FnC Project</a>
                            <a class="dropdown-item" href="fnc-workspeace.php">Artizt Office Space</a>
                            <!--<a class="dropdown-item" href="fnc.php">View All fnC</a>-->
                          </div>
                        </div>
                    </div>

				</div>
			</div>
			
			<div class="vila-card">
				<ul class="nav nav-pills mb-0 d-flex" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#schedule" role="tab" aria-controls="pills-home" aria-selected="true">Schedule</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#todolist" role="tab" aria-controls="pills-profile" aria-selected="false">To Do List</a>
				  </li>
				  <li class="nav-item mr-auto">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#notes" role="tab" aria-controls="pills-contact" aria-selected="false">Notes</a>
				  </li>
				  <li class="ft-18">
				    <div class="search-panel-1 pt-0" data-search="all">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
							<span class="search_by ft-20 fw-700">...</span>
						</button>
						<ul class="dropdown-menu" role="menu">
						  <li><a class="fw-400 ft-14" href="javascript:void(0);" data-search="Today">Today</a></li>
						  <li><a class="fw-400 ft-14" href="javascript:void(0);" data-search="This Weeek">This Weeek</a></li>
						  <li><a class="fw-400 ft-14" href="javascript:void(0);" data-search="This Month">This Month</a></li>
						</ul>
					</div>
				  </li>
				</ul>
				<div class="tab-content" id="villa-tabContent">
					<div class="tab-pane fade show active" id="schedule" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="os_card_body mCustomScrollbar pt-2">
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">Group Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">Group Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">Group Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">Box Office: Vijay starrer Beast Final Worldwide Business Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">KGF Chapter 3 might release date discussion director's</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">Box Office: Vijay starrer Beast Final Worldwide Business Meeting</p>		
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-20">
									<p class="ft-12 times_os mb-0"><span class="os_time"><img src="images/os-clock.png"> in 32 minutes</span> <span class="os_place pl-2"><img src="images/os-map.png"> Conference room 1B </span></p>
									<p class="ft-14 mb-0 os-dark pt-2">KGF Chapter 3 might release date discussion director's</p>		
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="todolist" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="os_card_body pt-2">
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb1"><label for="cb1"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb2"><label for="cb2"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb3"><label for="cb3"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb4"><label for="cb4"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb5"><label for="cb5"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pad-bot-15">
									<div class="checkbox_left">
										<input type="checkbox" id="cb6"><label for="cb6"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">High</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="checkbox_left">
										<input type="checkbox" id="cb7"><label for="cb7"></label>
										<p>Project discussion with director</p>
									</div>
									<span class="todo_priority">Low</span>
								</div>
							</div>

						</div>
					</div>
					<div class="tab-pane " id="notes" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
						    <div class="col-md-12">
						        <div class="pull-right addnotes">
									<!-- <a href="#" data-toggle="modal" data-target="#addnotes_box" class="ft-14">Add Notes <img src="images/os-addnotes.png"></a> -->
									<a href="#" data-toggle="modal" data-target="#addnotes" class="ft-14">Add Notes <img src="images/os-addnotes.png"></a>
								</div>
						    </div>
						</div>
						<div class="user_chat">
							<div class="notes_text pt-2 pb-2 align-items-center">
								<p>Project discussion with director </p>
								<span>Personal</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pt-2 pb-2 align-items-center">
								<p>Marketing coordinator </p>
								<span>Task</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pt-2 pb-2 align-items-center">
								<p>Project discussion with director </p>
								<span>Personal</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pt-2 pb-2 align-items-center">
								<p>Marketing coordinator </p>
								<span>Work</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pt-2 pb-2 align-items-center">
								<p>Project discussion with director </p>
								<span>Friends</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
							<div class="notes_text pt-2 pb-2 align-items-center">
								<p>Marketing coordinator </p>
								<span>Personal</span>
								<i class="fa fa-trash" aria-hidden="true"></i><br clear="all" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">FnC Documents</h2>
				</div>
			</div>
			
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="overview-tab" data-toggle="pill" href="#quote" role="tab" aria-controls="pills-home" aria-selected="true">Quote</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="rooms-tab" data-toggle="pill" href="#offer-accepted" role="tab" aria-controls="pills-profile" aria-selected="false">Offer Accepted</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#templates" role="tab" aria-controls="pills-contact" aria-selected="false">Templates</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="facilities-tab" data-toggle="pill" href="#files" role="tab" aria-controls="pills-contact" aria-selected="false">Files</a>
				  </li>
				</ul>
				<div class="tab-content pad-20 fnc-doc" id="villa-tabContent">
					<div class="tab-pane fade show active" id="quote" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Quote 1</h5>
						        <p class="ft-14 text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4"><span class="ft-14 pt-3 d-inline-block">&#8377; 70-80Cr</span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Quote 2</h5>
						        <p class="ft-14 text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4"><span class="ft-14 pt-3 d-inline-block">&#8377; 100-120Cr</span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Quote 2</h5>
						        <p class="ft-14 text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4"><span class="ft-14 pt-3 d-inline-block">&#8377; 100-120Cr</span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Quote 2</h5>
						        <p class="ft-14 text-truncate mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4"><span class="ft-14 pt-3 d-inline-block">&#8377; 100-120Cr</span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></span></div>
						</div>
					</div>
					<div class="tab-pane" id="offer-accepted" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">New Moview</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4 text-sm-right"><a href="#" class="btn btn-select btn-xs pt-2 pb-2 pl-3 pr-3 mb-2 mr-2 ml-0">Accept</a> <a href="#" class="btn btn-normal btn-xs pt-2 pb-2 pl-3 pr-3 mr-0 ml-2 mb-2">Cancel</a></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Moview 2</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4 text-sm-right"><a href="#" class="btn btn-select btn-xs pt-2 pb-2 pl-3 pr-3 mb-2 mr-2 ml-0">Accept</a> <a href="#" class="btn btn-normal btn-xs pt-2 pb-2 pl-3 pr-3 mr-0 ml-2 mb-2">Cancel</a></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Moview </h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
						    </div>
						    <div class="col-sm-4 text-sm-right"><a href="#" class="btn btn-select btn-xs pt-2 pb-2 pl-3 pr-3 mb-2 mr-2 ml-0">Accept</a> <a href="#" class="btn btn-normal btn-xs pt-2 pb-2 pl-3 pr-3 mr-0 ml-2 mb-2">Cancel</a></div>
						</div>
					</div>
					<div class="tab-pane " id="templates" role="tabpanel" aria-labelledby="pills-home-tab">
						<h3>Templates</h3>
					</div>
					<div class="tab-pane " id="files" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Fnc & Events Page.xlsx</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">2 August 2022</p>
						    </div>
						    <div class="col-sm-4"><span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Project View Page.xlsx</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">2 August 2022</p>
						    </div>
						    <div class="col-sm-4"><span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Artizt Network.pdf</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">2 August 2022</p>
						    </div>
						    <div class="col-sm-4"><span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Project View Page.xlsx</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2">2 August 2022</p>
						    </div>
						    <div class="col-sm-4"><span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
						<div class="row align-items-center">
						    <div class="col-sm-8">
						        <h5 class="ft-16 fw-600">Artizt Network.pdf</h5>
						        <p class="ft-14 text-truncate mb-sm-0 mb-xs-2 ">2 August 2022</p>
						    </div>
						    <div class="col-sm-4"><span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span> <span class="share-btn pull-sm-right"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></span></div>
						</div>
						<div class="row align-items-center">
						    <div class="col-12">
						        <hr />
						    </div>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="row" id="valuefortime">
			    <div class="col-md-12">
			        <hr />
			    </div>
			</div>
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-20 page-head">
					<h2 class="text-black">Value for Time</h2>
				</div>
			</div>-->
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="others-profile_ospage">
					    <div class="row">
					        <div class="col-sm-6 col-12 mar-bot-30">
            			        <div class="income_houry pad-20">
            			            <h5>&#8377; 443</h5>
            			            <p class="mb-0">Income generated  Hourly</p>
            			        </div>
            			    </div>
            			    <div class="col-sm-6 col-12 mar-bot-30">
            			        <div class="income_houry pad-20">
            			            <h5>&#8377; 88740</h5>
            			            <p class="mb-0">Income generated Monthly</p>
            			        </div>
            			    </div>
            			    <div class="col-sm-12 col-12 mar-bot-30 text-center">
            			        <div class="mt-1 pt-2">
            			            <a href="#" class="btn btn-select ft-16 text-center btn-block ml-0" data-toggle="modal" data-target="#valuefortime_model">Value for Time</a>
            			        </div>
            			    </div>    
					    </div>
					    
						<div class="row">
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-2">
									<?php include 'includes/fnc-calender-schulde.php'; ?>
								</div>
							</div>			
							<div class="col-sm-6 pad-bot-30">
								<div class="calender_outer mt-2">
									<?php include 'includes/chat.php';?>
									<br clear="all" />
								</div>
							</div>

							<div class="col-sm-6">
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
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="others-profile-right">			
			<div class="row pad-top-70">
			    <div class="col-sm-6 col-12 mar-bot-20">
			        <div class="income_houry pad-20">
			            <h5>&#8377; 443</h5>
			            <p class="mb-0">Income generated  Hourly</p>
			        </div>
			    </div>
			    <div class="col-sm-6 col-12 mar-bot-20">
			        <div class="income_houry pad-20">
			            <h5>&#8377; 88740</h5>
			            <p class="mb-0">Income generated Monthly</p>
			        </div>
			    </div>
			    <div class="col-sm-12 col-12 mar-bot-20 text-center">
			        <div class="mt-1 pt-2">
			            <a href="#" class="btn btn-select ft-16 text-center btn-block ml-0" data-toggle="modal" data-target="#valuefortime_model">Value for Time</a>
			        </div>
			    </div>
			</div>
			
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer mt-2">
						<?php include 'includes/fnc-calender-schulde.php'; ?>
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
			<div class="row">
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
			</div>

		</div>
		
	  </div>
	  
	  <?php include 'includes/footer.php';?>
    
      <div class="modal fade" id="hireus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Hire Us</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      	<form action="#">
			      <div class="modal-body">
			        <div class="row">
			            <div class="col-md-10 text-center">
			                <p class="text-dark ft-16">Sharing more details will increase your chancens of receiving a reply</p>
			            </div>
			        </div>		        
			        <div class="popup_form">
			            <div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="companyname">Company Name:</label>-->
							    	<input type="text" class="form-control big_box" id="companyname" aria-describedby="emailHelp" placeholder="Company Name">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="hirefor">Hire for:</label>-->
							    	<select class="form-control big_box" id="hirefor" placeholder="Select Hire for">
							    		<option value="">Select Hire for</option>
							    		<option value="Full Time Job">Full Time Job</option>
							    		<option value="Part Time Job">Part Time Job</option>
							    		<option value="Freelance">Freelance</option>
							    		<option value="Project Based">Project Based</option>
							    	</select>					   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="budget">Budget (&#8377;):</label>-->
							    	<input type="text" class="form-control big_box" id="budget" aria-describedby="emailHelp" placeholder="Budget (&#8377;)">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="hirefor">Time line:</label>-->
							    	<select class="form-control big_box" id="hirefor" placeholder="Time line">
							    		<option value="">Select Time line</option>
							    		<option value="Within next 3 months">Within next 15 days</option>
							    		<option value="Within next 3 months">Within next 30 days</option>
							    		<option value="Within next 3 months">Within next 3 months</option>
							    		<option value="Within next 3 months">Within next 6 months</option>
							    		<option value="Within next 3 months">Within next 1 Year</option>
							    	</select>					   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<!--<label for="msg">Message:</label>-->
							    	<textarea class="big_box msg-border-box" placeholder="Message" id="msg"></textarea>
							    							   
								</div>
			  				</div>
			  			</div>
			        </div>
			      <div class="modal-footer d-block text-center">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2 w-150">Send Enquiry</button>
			      </div>
				</form>      
		    </div>
		        </div>
		    </div>
        </div>
        
        <div class="modal fade" id="valuefortime_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h5 class="modal-title" id="exampleModalLongTitle">Value for Time</h5>
	        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body p-0">
	       	<ul class="nav nav-pills mb-0 d-flex justify-content-between" id="pills-tab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="branddtails-tab" data-toggle="pill" href="#projects" role="tab" aria-controls="add-dtails" aria-selected="true">Projects</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="branding-tab" data-toggle="pill" href="#income_productivity" role="tab" aria-controls="branding-tab" aria-selected="false">Income & Productivity</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="branding_cycle-tab" data-toggle="pill" href="#time_calculator" role="tab" aria-controls="pills-contact" aria-selected="false">Value for Time Calculator</a>
			  </li>
			</ul>
			<div class="tab-content pad-20" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="projects" role="tabpanel" aria-labelledby="branddtails-tab">
			        <div class="row">
        				<div class="col-md-12">
        					<div class="card">
        						<div class="row">
        							<div class="col-md-12">
        							    <h3 class="pull-left pad-15 ft-16 fw-600 color-blue-1">Projects</h3>
        								<div class="pull-right addnotes pad-15">
        									<a href="#" class="ft-14" data-toggle="modal" data-target="#addadvertisements">Create New <i class="fa fa-plus" aria-hidden="true"></i></a>
        								</div>
        							</div>
        							<div class="col-md-12">
        							    <hr class="mt-0 mb-0" />
        							</div>
        						</div>
        						<div class="row">
        							<div class="col-md-12">
        							    <div class="pad-15">
        								    <table id="example" class="table table-bordered" style="width:100%">
        									<thead>
        							            <tr>
        							                <th>Project Name</th>
        							                <th>Hours Worked</th>
        							                <th>Income</th>
        							            </tr>
        							        </thead>
        							        <tbody>
        							        	<tr>
        							        		<td>Project A</td>
        							        		<td>5 Hours</td>
        							        		<td>&#8377; 2,218.51</td>
        							        	</tr>
        							        	<tr>
        							        		<td>Project B</td>
        							        		<td>7 Hours</td>
        							        		<td>&#8377; 3,105.91</td>
        							        	</tr>
        							        	<tr>
        							        		<td>Project C</td>
        							        		<td>2 Hours</td>
        							        		<td>&#8377; 887.40</td>
        							        	</tr>
        							        </tbody>
        								</table>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
			  </div>
			  <div class="tab-pane" id="income_productivity" role="tabpanel" aria-labelledby="branding-tab">
			  	    <div class="row">
        				<div class="col-md-12">
        					<div class="card ">
        						<div class="row">
        							<div class="col-md-12">
        							    <h3 class="pad-15 ft-16 fw-600 color-blue-1">Income & Productivity</h3>
        							</div>
        							<div class="col-md-12"><hr class="mt-0 mb-0" /></div>
        						</div>
        						<div class="row">
        							<div class="col-md-12">
        							    <div class="pad-15" style="overflow: auto;">
        								    <table id="example2" class="table table-bordered" style="width:100%">
        									<thead>
        							            <tr>
        							                <th class="text-center" colspan="3">Income</th>
        							                <th class="text-center">Amount</th>
        							                <th class="text-center">Productivity</th>
        							            </tr>
        							        </thead>
        							        <tbody>
        							        	<tr>
        							        		<td class="text-center">Hourly</td>
        							                <td class="text-center">Monthly</td>
        							                <td class="text-center">Yearly</td>
        							                <td></td>
        							                <td></td>
        							        	</tr>
        							        	<tr>
        							        		<td class="text-center">&#8377; 443.7</td>
        							        		<td class="text-center">&#8377; 88,740.42</td>
        							        		<td class="text-center">&#8377; 10,64,885.04</td>
        							        		<td class="text-center">&#8377; 11,64,885.04</td>
        							        		<td class="text-center">92.36%</td>
        							        	</tr>
        							        </tbody>
        								</table>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
			  </div>
			  <div class="tab-pane" id="time_calculator" role="tabpanel" aria-labelledby="branding_cycle-tab">
			  	    <div class="row">
        				<div class="col-md-12">
        					<div class="card">
        						<div class="row">
        							<div class="col-md-12">
        							    <h3 class="pad-15 ft-16 fw-600 color-orange">Value for Time Calculator</h3>
        							</div>
        							<div class="col-md-12"><hr class="mt-0 mb-0" /></div>
        						</div>
        						<div class="row">
        							<div class="col-md-12">
        							    <div class="pad-15">
        								    <table id="timecalculator" class="table table-bordered" style="width:100%">
            									<thead>
            							            <tr>
            							                <th class="ft-14 fw-600 color-blue-1">A. Expected Monthy Income</th>
            							                <th class="ft-14 fw-600 color-blue-1">₹ 50,000</th>
            							                <th class="text-center"></th>
            							            </tr>
            							        </thead>
            							        <tbody>
            							            <tr>
            							                <td colspan="3" class="ft-14 fw-600 color-blue-1">Expenses</td>
            							            </tr>
            							        	<tr>
            							        		<td class="ft-14 fw-600 color-blue-1">B. Monthly Expenses</td>
            							                <td class="text-right ft-14 fw-600 color-blue-1">Expenses per Month</td>
            							                <td class="text-right ft-14 fw-600 color-blue-1">Expenses per Annum</td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Telephone Bill</td>
            							        	    <td class="text-right">&#8377; 3,000</td>
            							        	    <td class="text-right">&#8377; 36,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Electricity Bill</td>
            							        	    <td class="text-right">&#8377; 4,000</td>
            							        	    <td class="text-right">&#8377; 48,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Office Space Exp</td>
            							        	    <td class="text-right">&#8377; 25,000</td>
            							        	    <td class="text-right">&#8377; 3,00,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Conveyences</td>
            							        	    <td class="text-right">&#8377; 4,000</td>
            							        	    <td class="text-right">&#8377; 48,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							                <td colspan="3" class="ft-14 color-blue-1">Add an Expense +</td>
            							            </tr>
            							        	<tr>
            							        	    <td class="color-orange fw-600">Total:</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 36,000</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 4,32,000 </td>
            							        	</tr>
            							        	<tr>
            							        		<td class="ft-14 color-blue-1">C. Annual Expenses</td>
            							                <td class="text-right ft-14 color-blue-1">Expenses per Month</td>
            							                <td class="text-right ft-14  color-blue-1">Expenses per Annum</td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Artizt Network Membership Costs</td>
            							        	    <td class="text-right text-dark">&#8377; 15,000</td>
            							        	    <td class="text-right text-dark">&#8377; 1,80,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Artizt Store Rent</td>
            							        	    <td class="text-right text-dark">&#8377; 15,000</td>
            							        	    <td class="text-right text-dark">&#8377; 1,80,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							                <td colspan="3" class="ft-14 color-blue-1">Add an Expense +</td>
            							            </tr>
            							        	<tr>
            							        	    <td class="color-orange fw-600">Total:</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 36,000</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 4,32,000 </td>
            							        	</tr>
            							        	<tr>
            							        		<td class="ft-14 color-blue-1">Advertisement Expenses</td>
            							                <td class="text-right ft-14 color-blue-1">Expenses per Month</td>
            							                <td class="text-right ft-14 color-blue-1">Expenses per Annum</td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Profie</td>
            							        	    <td class="text-right text-dark">&#8377; 1,000</td>
            							        	    <td class="text-right text-dark">&#8377; 36,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">FnC</td>
            							        	    <td class="text-right text-dark">&#8377; 5,000</td>
            							        	    <td class="text-right text-dark">&#8377; 48,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Events</td>
            							        	    <td class="text-right text-dark">&#8377; 1,000</td>
            							        	    <td class="text-right text-dark">&#8377; 3,00,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Stores</td>
            							        	    <td class="text-right text-dark">&#8377; 500</td>
            							        	    <td class="text-right text-dark">&#8377; 48,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							                <td colspan="3" class="ft-14 color-blue-1">Add an Expense +</td>
            							            </tr>
            							        	<tr>
            							        	    <td class="fw-600 color-orange fw-600">Total:</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 7,500</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 4,32,000 </td>
            							        	</tr>
            							        	<tr class="mt-2">
            							        		<td class="ft-14 fw-600 color-blue-1">Club Activities Expenses</td>
            							                <td class="text-right ft-14 fw-600 color-blue-1">Expenses per Month</td>
            							                <td class="text-right ft-14 fw-600 color-blue-1">Expenses per Annum</td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted ">Artist WorkSpace</td>
            							        	    <td class="text-right text-dark">&#8377; 1,000</td>
            							        	    <td class="text-right text-dark">&#8377; 36,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted ">Artizt Ztay</td>
            							        	    <td class="text-right text-dark ">&#8377; 5,000</td>
            							        	    <td class="text-right text-dark ">&#8377; 48,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted ">Artizt Academy</td>
            							        	    <td class="text-right text-dark ">&#8377; 1,000</td>
            							        	    <td class="text-right text-dark ">&#8377; 3,00,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							                <td colspan="3" class="ft-14 fw-600 color-blue-1 ">Add an Expense +</td>
            							            </tr>
            							        	<tr>
            							        	    <td class="fw-600 color-orange">Total:</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 7,000</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 4,32,000 </td>
            							        	</tr>
            							        	<tr class="mt-2">
            							        		<td class="ft-14 fw-600 color-blue-1">Club Other Expenses</td>
            							                <td class="text-right ft-14 fw-600 color-blue-1">Expenses per Month</td>
            							                <td class="text-right ft-14 fw-600 color-blue-1">Expenses per Annum</td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Car Insurance</td>
            							        	    <td class="text-right text-dark">&#8377; 473.75</td>
            							        	    <td class="text-right text-dark">&#8377; 5,685 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Two Wheeler Insurance</td>
            							        	    <td class="text-right text-dark">&#8377; 416.6</td>
            							        	    <td class="text-right text-dark">&#8377; 5,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							        	    <td class="text-muted">Auditor Fees</td>
            							        	    <td class="text-right text-dark">&#8377; 2,083.33</td>
            							        	    <td class="text-right text-dark">&#8377; 25,000 <a href="javascript:void(0);" class="text-muted ft-14 fw-400 pl-2">&times;</a></td>
            							        	</tr>
            							        	<tr>
            							                <td colspan="3" class="ft-14 fw-600 color-blue-1">Add an Expense +</td>
            							            </tr>
            							        	<tr>
            							        	    <td class="fw-600 color-orange">Total:</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 2,740.42</td>
            							        	    <td class="text-right color-orange fw-600">&#8377; 32,885 </td>
            							        	</tr>
            							        </tbody>
            								</table>
        								    <div class="row">
        								        <div class="col-sm-7 col-12 ft-20 fw-400 color-blue-1 mar-bot-10">Total Income Required per month (A+B+C):</div>
        								        <div class="col-sm-3 col-6 mar-bot-10 ft-20 fw-600 text-dark text-sm-right">&#8377; 88,740.42 </div>
        								        <div class="col-sm-2 col-6 text-muted ft-12 fw-600 pl-0 pt-2">Value / Month</div>
        								        
        								    </div>
        								    <div class="row">
        								        <div class="col-sm-7 col-12 ft-20 fw-400 color-blue-1 mar-bot-10">Value per Day:</div>
        								        <div class="col-sm-3 col-6 mar-bot-10 ft-20 fw-600 text-dark text-sm-right">&#8377; 3,549.62 </div>
        								        <div class="col-sm-2 col-6 text-muted ft-12 fw-600 pl-0 pt-2">25 Working Days</div>
        								    </div>
        								    <div class="row">
        								        <div class="col-sm-7 col-12 ft-20 fw-400 color-blue-1 mar-bot-10">Value per Hour:</div>
        								        <div class="col-sm-3 col-6 mar-bot-10 ft-20 fw-600 text-dark text-sm-right">&#8377; 443.7 </div>
        								        <div class="col-sm-2 col-6 text-muted ft-12 fw-600 pl-0 pt-2">8 Working Hours</div>
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
	     <!--  <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div> -->
	    </div>
	  </div>
	</div>
        
        
        
        
        
    
  </body>
   
  <?php include 'includes/script.php';?>
  <script src="js/bootstrap-datepicker.js"></script>
  
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    
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
		   /*var table = $('#example').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    });
		    
		    var table = $('#timecalculator').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    });*/
		    
		    
		    
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		  
		  
		});
		
		/*$(document).ready(function(){
		    var table = $('#example2').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    });
		});*/
		
	</script>
</html>