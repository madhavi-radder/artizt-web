<header class="others-profile-header">
         <div class="container-fluid p-0">
            <div class="row no-gutters">
               <div class="col d-flex desktopmenu">
                  <div class="header-logo">
					<a class="navbar-brand" href="home.php"><img src="images/logo.svg" alt="" /></a>
				  </div>
				  <div class="header-navigation">	
						<ul class="nav-links">
							<li class="active"><a href="home.php">Home</a></li>
							<li><a href="profile-view.php">Projects</a></li>
							<li><a href="network.php">Network</a></li>
							<li><a href="fnc.php">FnC</a></li>
							<li><a href="os.php">OS</a></li>
						</ul>
					<div class="input-group header-search">
						<div class="input-group-btn search-panel" data-search="all">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="search_by">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
							</button>
							<ul class="dropdown-menu" role="menu">
							  <li><a data-search="all">All</a></li>
							  <li><a data-search="Artizt">Artizt</a></li>
							  <li><a data-search="Events">Events</a></li>
							  <li><a data-search="Business">Business</a></li>
							  <li><a data-search="Projects">Projects</a></li>
							  <li><a data-search="Stores">Stores</a></li>
							</ul>
						</div>   
						<input type="text" class="form-control" name="x" placeholder="What service are you looking for?">
						<span class="input-group-btn">
							<button class="btn advance-search-btn" type="button">
								<span class="search-bar"></span>
							</button>
						</span>
						<div class="advance-search">
							<div class="row">
								<div class="col">
									<p>Keyword</p>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" />
										<button type="button" class="advance-add-btn">Add</button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Rahmaan
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  AR Rahmaan
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
								</div>
								<div class="col">
									<p>Industry</p>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" />
										<button type="button" class="advance-add-btn">Add</button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Music
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Singer
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
								</div>
								<div class="col">
									<p>Art</p>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" />
										<button type="button" class="advance-add-btn">Add</button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Singing
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
								</div>
							</div>
						</div>
						<span class="input-group-btn">
							<button class="btn search-btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
						</span>
					</div> 
					<ul class="nav navbar-nav">
						<li class="p-real">
							<a href="javascript:void(0)" class="icons"><img src="images/header-bell-card.png" alt="" /></a>
							<span class="cart-count">9</span>
						</li>						
						<li><a href="notifications.php" class="icons"><img src="images/header-bell-icon.png" alt="" /></a></li>
						<li><a href="javascript:void(0)" class="icons"><img src="images/header-chat-icon.png" alt="" /></a></li>
						<!-- <li class="dropdown">
						  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user-icon.png" alt="" /></a>
						  <ul class="dropdown-menu">
							<li><a href="#">Settings & Privacy</a></li>
							<li><a href="#">Help Support</a></li>
							<li><a href="#">Logout</a></li>
						  </ul>
						</li> -->
						<li class="header-dropdown">
							<div class="villa_dropdown">
								<div class="dropdown">								  
									<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false"><img src="images/user-icon.png" alt="" /></a>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings & Privacy</a>
								    <a class="dropdown-item" href="#"><i class="fa fa-headphones" aria-hidden="true"></i> Help Support</a>
								    <a class="dropdown-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
								  </div>
								</div>
							</div>
						</li>
					 </ul>
				  </div>
               </div>

               <div class="col mobilemenu">
                  <nav class="navbar navbar-expand-lg">
                  	 <a class="leftmenu_open" onclick="openNav()"><!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                  	 	<img src="images/menu.png" width="18">

                  	 </a>
                  	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="display: none;">&times;</a>
                      <a class="navbar-brand header-logo" href="index.html"><img src="images/logo.svg"></a>                   
                      <div class="header-navigation">
                      	<ul class="nav navbar-nav">

                      		<li><a href="javascript:void(0)" class="icons" id="searchbox"><img src="images/searchicon.png" alt="" /></a></li>
                      		<li class="p-real">
								<a href="javascript:void(0)" class="icons"><img src="images/header-bell-card.png" alt="" /></a>
								<span class="cart-count">9</span>
							</li>
							<li><a href="javascript:void(0)" class="icons"><img src="images/header-bell-icon.png" alt=""></a></li>
							<li><a href="javascript:void(0)" class="icons"><img src="images/header-chat-icon.png" alt=""></a></li>
							<li class="dropdown">
							  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user-icon.png" alt=""></a>
							  <ul class="dropdown-menu" style="display: none;">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
							  </ul>
							</li>
						 </ul>
						</div>
                      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                         <span></span>
                         <span></span>
                         <span></span>
                       </button>
                      <div class="collapse navbar-collapse" id="navbarDefault">
                        <ul class="navbar-nav mr-auto ml-auto">
                        	<li class="active"><a href="index.html">Home</a></li>
							<li><a href="#">Projects</a></li>
							<li><a href="network.html">Network</a></li>
							<li><a href="fnc.html">FnC</a></li>
							<li><a href="os.html">OS</a></li>
                        </ul>                        
                      </div>

                      <div class="header-navigation" id="mobilesearchmenu" style="display: none;">
                      	<div class="input-group header-search">
						<div class="input-group-btn search-panel" data-search="all">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="search_by">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
							</button>
							<ul class="dropdown-menu" role="menu">
							  <li><a data-search="all">All</a></li>
							  <li><a data-search="Artizt">Artizt</a></li>
							  <li><a data-search="Events">Events</a></li>
							  <li><a data-search="Business">Business</a></li>
							  <li><a data-search="Projects">Projects</a></li>
							  <li><a data-search="Stores">Stores</a></li>
							</ul>
						</div>   
						<input type="text" class="form-control" name="x" placeholder="What service are you looking for?">
						<span class="input-group-btn">
							<button class="btn advance-search-btn" type="button">
								<span class="search-bar"></span>
							</button>
						</span>
						<div class="advance-search">
							<div class="row">
								<div class="col">
									<p>Keyword</p>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" />
										<button type="button" class="advance-add-btn">Add</button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Rahmaan
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  AR Rahmaan
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
								</div>
								<div class="col">
									<p>Industry</p>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" />
										<button type="button" class="advance-add-btn">Add</button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Music
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Singer
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
								</div>
								<div class="col">
									<p>Art</p>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" />
										<button type="button" class="advance-add-btn">Add</button>
									</div>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									  Singing
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
								</div>
							</div>
						</div>
							<span class="input-group-btn">
								<button class="btn search-btn" type="button" ><i class="fa fa-search" aria-hidden="true"></i></button>
							</span>
						</div> 
                      </div>
                      
                    </nav>
               </div>

            </div>
         </div>
      </header>