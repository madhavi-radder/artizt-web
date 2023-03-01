 
 <?php include 'includes/top.php';?>
 
	
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
   
    <style>
        .msg-border-box{
            border: 1px solid #d9d9d9 !important;
            width:100%;
        }
        
        .form-control{
            min-height:47px;
        }
        
        .border-radius-8{
            border-radius:0 8px 8px 0;
        }
        
         .border-radius-8:hover{
             border-radius:0 8px 8px 0;
         }
        
    </style>
  </head>
  <body>
       

  <?php include 'includes/header-main.php';?>

	  <div class="search-results-main">
	    <div class="search-results-left p-fixed" id="mySidenav">
		<?php include 'includes/side-profile.php';?>
		 <ul class="nav flex-column flex-nowrap overflow-hidden mySidenav1 mySidenav2" >
		    <li class="nav-item">
		        <a class="nav-link" href="#"><span class="d-inline"><img src="images/svg/user-settings-svgrepo-com.svg" class="d-flex pull-left pr-2" width="27" alt="" /> Account Settings</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#account-created"><span class="d-inline"><img src="images/svg/user-svgrepo.svg" class="d-flex pull-left pr-2" width="27" alt="" /> Account Created</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#my-devices"><span class="d-inline"><img src="images/svg/devices.svg" class="d-flex pull-left pr-2" width="25" alt="" /> My Devices</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#lastsigned"><span class="d-inline"><img src="images/svg/login-svgrepo-com.svg" class="d-flex pull-left pr-2" width="25" alt="" /> Last Signed In</span></a>
		    </li>
		    <!--<li class="nav-item">
		        <a class="nav-link" href="#viewpermission"><span class="d-inline"><img src="images/svg/contacts-svgrepo-com.svg" class="d-flex pull-left pr-2" width="25" alt="" /> Public View Setting</span></a>
		    </li>-->
		    <li class="nav-item">
		        <a class="nav-link" href="#viewpermission"><span class="d-inline"><img src="images/svg/folder-view-eye-svgrepo-com.svg" class="d-flex pull-left pr-2" width="27" alt="" /> View Permissions</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#review-comments"><span class="d-inline"><img src="images/svg/reveview-comments-svgrepo-com.svg" class="d-flex pull-left pr-2 mb-2" width="27" alt="" /> Review & Comment Permission</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#tag-permissions"><span class="d-inline"><img src="images/svg/tag-svgrepo-com.svg" class="d-flex pull-left pr-2" width="27" alt="" /> Tag Permissions</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#contact-permissions"><span class="d-inline"><img src="images/svg/contacts-svgrepo-com.svg" class="d-flex pull-left pr-2" width="27" alt="" /> Contact Permissions</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#blockedusers"><span class="d-inline"><img src="images/svg/users-warning-svgrepo-com.svg" class="d-flex pull-left pr-2" width="27" alt="" /> Blocked Users</span></a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#spamreports"><span class="d-inline"><img src="images/svg/spam-2-svgrepo-com.svg" class="d-flex pull-left pr-2" width="27" alt="" /> Spam Reports</span></a>
		    </li>
		 </ul>
		<?php // include 'includes/side-menu.php';?>
		 
			 
		</div>
		
    		<div class="search-results-right">
    		    
    		    <div id="account-settting">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 page-head">
        					<h2 class="text-black">Account Settings</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Name</div>
        			                    <div class="col-md-6 col-6">Elangovan</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-name"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
        			                        <div class="form-group name-edit pt-3 mb-0" style="display:none;" >
            							    	<!--<label for="name">Name:</label>-->
            							    	<!--<input type="text" class="form-control" id="name" aria-describedby="" placeholder="Elangovan">-->
            							    	<div class="input-group mb-3">
                                                  <input type="text" class="form-control pt-2" placeholder="Elangovan" aria-label="Elangovan" aria-describedby="basic-addon2">
                                                  <div class="input-group-append">
                                                    <button class="btn btn-select m-0 border-radius-8" type="button">Update</button>
                                                  </div>
                                                </div>
            								</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Email</div>
        			                    <div class="col-md-6 col-6">elango456@gmail.com</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-email"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
        			                        <div class="form-group email-edit pt-3 mb-0" style="display:none;" >
            							    	<!--<label for="name">Name:</label>-->
            							    	<!--<input type="text" class="form-control" id="email" aria-describedby="" placeholder="elango456@gmail.com">-->
            							    	<div class="input-group mb-3">
                                                  <input type="text" class="form-control pt-2" placeholder="elango456@gmail.com" aria-label="elango456@gmail.com" aria-describedby="basic-addon2">
                                                  <div class="input-group-append"> 
                                                    <button class="btn btn-select m-0 border-radius-8" type="button">Update</button>
                                                  </div>
                                                </div>
            								</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Username</div>
        			                    <div class="col-md-6 col-6">webelango</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-username"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group username-edit pt-3 mb-0" style="display:none;" >
            							    	<!--<input type="text" class="form-control" id="name" aria-describedby="" placeholder="webelango">-->
            							    	<div class="input-group mb-3">
                                                  <input type="text" class="form-control pt-2" placeholder="webelango" aria-label="webelango" aria-describedby="basic-addon2">
                                                  <div class="input-group-append">
                                                    <button class="btn btn-select m-0 border-radius-8" type="button">Update</button>
                                                  </div>
                                                </div>
            								</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Password</div>
        			                    <div class="col-md-6 col-6">******</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-password"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group password-edit pt-3 mb-0" style="display:none;" >
            							    	<!--<input type="password" class="form-control" id="password" aria-describedby="" placeholder="******">-->
            							    	<div class="input-group mb-3">
                                                  <input type="password" class="form-control pt-2" placeholder="*******" aria-label="webelango" aria-describedby="basic-addon2">
                                                  <div class="input-group-append">
                                                    <button class="btn btn-select m-0 border-radius-8" type="button">Update</button>
                                                  </div>
                                                </div>
            								</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Phone No</div>
        			                    <div class="col-md-6 col-6">9843463839</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-phno"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group phno-edit pt-2 mb-0" style="display:none;" >
            							        <!--<input type="number" class="form-control" id="phno-edit" aria-describedby="" placeholder="943463839">-->
            							        <div class="input-group mb-3">
                                                  <input type="password" class="form-control pt-2" placeholder="943463839" aria-label="943463839" aria-describedby="basic-addon2">
                                                  <div class="input-group-append">
                                                    <button class="btn btn-select m-0 border-radius-8" type="button">Update</button>
                                                  </div>
                                                </div>
            							    </div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Occupation</div>
        			                    <div class="col-md-6 col-6">Artizt</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <!--<select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>-->
            							    	
            							    	<div class="input-group mb-3">
                                                  <select class="form-control">
                							    	    <option value="">Select Occupation</option>
                							    	    <option value="Artizt" selected>Artizt</option>
                							    	    <option value="Singer">Singer</option>
                							    	    <option value="Dancer">Dancer</option>
                							      </select>
                                                  <div class="input-group-append">
                                                    <button class="btn btn-select m-0 border-radius-8" type="button">Update</button>
                                                  </div>
                                                </div>
            							    	
            							    	
        							    	</div>
        			                    </div>
        			                </div>
        			                
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
                
                <div id="account-created">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Account Created</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Name</div>
        			                    <div class="col-md-6 col-6">Elangovan</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Account Created By</div>
        			                    <div class="col-md-6 col-6">Admin</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right"><a href="#">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="my-devices">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">My Devices</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-12">
        			                        <div class="devices-settigns">
        			                            <img src="images/computer-settings.png" class="img-fluid" />
        			                            <p class="text-dark mb-0 mt-1">Windows PC · Coimbatore, India</p>
        			                            <p class="text-dark mb-2 mt-0">Chrome  <b class="active-text">Active now</b></p>
        			                        </div>
        			                    </div>
        			                     <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                    <div class="col-md-12">
        			                        <div class="devices-settigns">
        			                            <img src="images/laptop-settings.png" class="img-fluid" />
        			                            <p class="text-dark mb-0 mt-1">Laptop · Coimbatore, India</p>
        			                            <p class="text-dark mb-2 mt-0">Chrome  <b class="deactive-text">Active now</b></p>
        			                        </div>
        			                    </div>
        			                     <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                    <div class="col-md-12">
        			                        <div class="devices-settigns">
        			                            <img src="images/smartphone-settings.png" class="img-fluid" />
        			                            <p class="text-dark mb-0 mt-1">Mobile · Galaxy A70s</p>
        			                            <p class="text-dark mb-2 mt-0">Chrome  <b class="active-text">Active now</b></p>
        			                        </div>
        			                    </div>
            			            </div>
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="lastsigned">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Last Signed In</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-12"><p class="mb-0">Last login : 28-July-2022 10:30 AM</p></div>
            			            </div>
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="viewpermission">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">View Permissions</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Profile View</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Project View</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Store View</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">FnC</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Post and Feeds</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                </div>
        			                
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="review-comments">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Review And Comment Permission</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Review And Comment Permission</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                </div>
        			                
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="tag-permissions">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Tag Permissions</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Tag Permissions</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                </div>
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="contact-permissions">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Contact Permissions:</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Message</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                    <div class="col-md-12">
        			                        <hr />
        			                    </div>
        			                </div>
        			                <div class="row">
        			                    <div class="col-md-4 col-4">Call</div>
        			                    <div class="col-md-6 col-6">Allow</div>
        			                    <div class="col-md-2 col-2"><span class="pull-right edit-occupation"><a href="javascript:(0);">Edit</a></span></div>
        			                    <div class="col-md-12">
            								<div class="form-group occupation-edit pt-2 mb-0" style="display:none;" >
        							    	    <select class="form-control">
            							    	    <option value="">Select Occupation</option>
            							    	    <option value="Artizt" selected>Artizt</option>
            							    	    <option value="Singer">Singer</option>
            							    	    <option value="Dancer">Dancer</option>
            							    	</select>
        							    	</div>
        			                    </div>
        			                </div>
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="blockedusers">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Blocked Users:</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-4 blockusers">
        			                        <div class="blockusers_div"><img src="images/dhanush.png" class="img-fluid round-radius">
        			                        <h4>Dhanush</h4></div>
        			                        <a href="#" class="btn btn-select pt-2 ft-12 mt-0 border-radius-10 pull-right">Unblock</a>
        			                    </div>
        			                    <div class="col-md-4 blockusers">
        			                        <div class="blockusers_div"><img src="images/dhanush.png" class="img-fluid round-radius">
        			                        <h4>Dhanush</h4></div>
        			                        <a href="#" class="btn btn-select pt-2 ft-12 mt-0 border-radius-10 pull-right">Unblock</a>
        			                    </div>
        			                    <div class="col-md-4 blockusers">
        			                        <div class="blockusers_div"><img src="images/dhanush.png" class="img-fluid round-radius">
        			                        <h4>Dhanush</h4></div>
        			                        <a href="#" class="btn btn-select pt-2 ft-12 mt-0 border-radius-10 pull-right">Unblock</a>
        			                    </div>
        			                    <div class="col-md-4 blockusers">
        			                        <div class="blockusers_div"><img src="images/dhanush.png" class="img-fluid round-radius">
        			                        <h4>Dhanush</h4></div>
        			                        <a href="#" class="btn btn-select pt-2 ft-12 mt-0 border-radius-10 pull-right">Unblock</a>
        			                    </div>
        			                    
        			                    
            			            </div>
            			        </form>
        			        </div>
        			    </div>
        			</div>
    			</div>
    			
    			<div id="spamreports">
        		    <div class="row">
        				<div class="col-md-12 pad-bot-15 pad-top-70 page-head">
        					<h2 class="text-black">Spam Reports:</h2>
        				</div>
        			</div>
        			<div class="row">
        			    <div class="col-md-12">
        			        <div class="card pad-15">
        			            <form action="#">
        			                <div class="row">
        			                    <div class="col-md-12">
        			                        <p class="ft-14 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        			                    </div>
            			            </div>
            			        </form>
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
		
		$(function(){
            $(".edit-name").on('click', function(e){
                $(".name-edit").toggle();
            });
            $(".edit-email").on('click', function(e){
                $(".email-edit").toggle();
            });
            $(".edit-username").on('click', function(e){
                $(".username-edit").toggle();
            });
            $(".edit-password").on('click', function(e){
                $(".password-edit").toggle();
            });
            $(".edit-phno").on('click', function(e){
                $(".phno-edit").toggle();
            });
            $(".edit-occupation").on('click', function(e){
                $(".occupation-edit").toggle();
            });
            
        });
		

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