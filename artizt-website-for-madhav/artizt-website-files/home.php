
<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    
    <style type="text/css">
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
		<?php // include 'includes/side-analytics.php';?>
		<!--<hr>-->
		<?php include 'includes/side-menu.php';?>
		<hr>
		<?php include 'includes/side-followers.php';?> 
			 
			 
		</div>
		<div class="others-profile-center">		
			<div class="select-profile">
				<a class="add-profile" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<div class="profile-scroll">
					<div>
						<a href="javascript:void(0)" class="active">
							<img src="images/movie-poster1.jpg" alt="" />
						</a>
					</div>
					<div>
						<a href="javascript:void(0)" class="active">
							<img src="images/movie-poster2.jpg" alt="" />
						</a>
					</div>
					<div>
						<a href="javascript:void(0)" class="active">
							<img src="images/movie-poster3.jpg" alt="" />
						</a>
					</div>
					<div>
						<a href="javascript:void(0)">
							<img src="images/movie-poster1.jpg" alt="" />
						</a>
					</div>
					<div>
						<a href="javascript:void(0)">
							<img src="images/movie-poster2.jpg" alt="" />
						</a>
					</div>
					<div>
						<a href="javascript:void(0)">
							<img src="images/movie-poster3.jpg" alt="" />
						</a>
					</div>
				</div>
			</div>
			<div class="others-profile-card">
				<img src="images/recent-followers1.png" class="user-image" alt="" />
				<textarea class="form-control" placeholder="Type to add something"></textarea>
				<button class="btn btn-custom main-inline lg btn-block" data-toggle="modal" data-target="#add_new_post">
				<span class="d-inline-flex flex-wn align-items-center">
					<span class="flex-item btn-icon">
						<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"></rect></g><g><g><path d="M9,4v1.38c-0.83-0.33-1.72-0.5-2.61-0.5c-1.79,0-3.58,0.68-4.95,2.05l3.33,3.33h1.11v1.11c0.86,0.86,1.98,1.31,3.11,1.36 V15H6v3c0,1.1,0.9,2,2,2h10c1.66,0,3-1.34,3-3V4H9z M7.89,10.41V8.26H5.61L4.57,7.22C5.14,7,5.76,6.88,6.39,6.88 c1.34,0,2.59,0.52,3.54,1.46l1.41,1.41l-0.2,0.2c-0.51,0.51-1.19,0.8-1.92,0.8C8.75,10.75,8.29,10.63,7.89,10.41z M19,17 c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2h-6v-2.59c0.57-0.23,1.1-0.57,1.56-1.03l0.2-0.2L15.59,14H17v-1.41l-6-5.97V6h8V17z"></path></g></g></svg>					</span>
					<span class="flex-item">
						New post</span>
				</span>
			    </button>
				<div class="d-flex justify-content-between d-xs-block">
					<div class="d-icons"><a href="add_new_post"><img src="images/svg/image-photo-svgrepo-com.svg" class="pr-2 icons-30" /> Photo</a></div>
					<div class="d-icons"><a href="#"><img src="images/svg/video-clip-svgrepo-com.svg" class="pr-2 icons-30" /> Video</a></div>
					<div class="d-icons"><a href="#"><img src="images/svg/plan-svgrepo-com.svg" class="pr-2 icons-30" /> Projects</a></div>
					<div class="d-icons"><a href="#"><img src="images/svg/film-reel-svgrepo-com.svg" class="pr-2 icons-30" /> Pitch Reels</a></div>
					<div class="d-icons"><a href="#"><img src="images/svg/calendar-svgrepo-com.svg" class="pr-2 icons-30" /> Events</a></div>
					<div class="d-icons"><a href="#"><img src="images/svg/two-links-svgrepo-com.svg" class="pr-2 icons-30" /> Links</a></div><br clear="all" />
				</div>
			</div>
			<div class="modal fade modal-pubbox show" data-app="modal-pubbox" id="add_new_post" tabindex="-1" role="dialog" style="display: block;">
			    <div class="modal-dialog" role="document">
			        <div class="modal-content">
			            <div class="modal-header">
			                <div class="modal-header__inner">
			                    <h5 class="modal-title" data-an="modal-title">New post</h5>
			                    <span class="dismiss-modal" data-dismiss="modal">
			                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"></path></svg>			                    </span>
			                </div>
			            </div>
			            <div class="modal-body">
			                <div class="timeline-pubbox-container">
	<form id="vue-pubbox-app-2" class="form"><div class="timeline-pubbox"><div class="timeline-pubbox__header"><div class="timeline-pubbox__textinput"><div class="pubbox-avatar"><img src="https://www.csm-demo.ru/upload/default/avatar-14.png" alt="Avatar"></div> <div class="pubbox-input"><textarea name="post_text" placeholder="Hello macindi , What is new with you today?" class="autoresize"></textarea></div></div></div> <div class="timeline-pubbox__body"><div class="timeline-pubbox__autocomplete"><!----> <!----></div> <!----> <!----> <!----> <!----> <!----> <!----> <!----></div> <div class="timeline-pubbox__footer"><div class="timeline-pubbox__footer-topline"><button type="button" class="ctrl-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-4.86 8.86l-3 3.87L9 13.14 6 17h12l-3.86-5.14z"></path></svg></button> <button type="button" class="ctrl-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M10 8v8l5-4-5-4zm9-5H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"></path></svg></button> <button type="button" class="ctrl-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M7 18h2V6H7v12zm4 4h2V2h-2v20zm-8-8h2v-4H3v4zm12 4h2V6h-2v12zm4-8v4h2v-4h-2z"></path></svg></button> <!----> <button type="button" class="ctrl-item"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"></rect></g><g><g></g><g><circle cx="15.5" cy="9.5" r="1.5"></circle><circle cx="8.5" cy="9.5" r="1.5"></circle><path d="M12,18c2.28,0,4.22-1.66,5-4H7C7.78,16.34,9.72,18,12,18z"></path><path d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20 c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z"></path></g></g></svg></button> <button type="button" class="ctrl-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"></path></svg></button> <button type="button" class="ctrl-item"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24"></rect><path d="M19,19H5V5h14V19z M5,3C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2H5z M11.5,14h1v-4h-1V14z M13.5,14h1v-1.5H16v-1h-1.5V11h2v-1h-3V14z M9.5,12v1h-1v-2h2c0-0.55-0.45-1-1-1h-1c-0.55,0-1,0.45-1,1v2c0,0.55,0.45,1,1,1h1 c0.55,0,1-0.45,1-1v-1H9.5z"></path></svg></button> <button type="button" class="ctrl-item text-length ml-auto"><small class="" style="display: none;">
							0/6000
						</small></button></div> <div class="timeline-pubbox__footer-botline"><div class="post-privacy"><button type="button" class="privacy-settings dropdown"><div data-toggle="dropdown" class="dropdown-toggle"><span class="d-inline-flex align-items-center flex-wn"><span class="flex-item icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z"></path></svg></span> <span class="flex-item flex-grow-1 label">
										Everyone can reply
									</span></span></div> <div class="dropdown-menu dropdown-icons"><a href="javascript:void(0);" class="dropdown-item"><span class="flex-item dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z"></path></svg></span> <span class="flex-item">
										Everyone can reply									</span> <span class="flex-item dropdown-item-icon dropdown-item-icon_adinfo"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path></svg></span></a> <div class="dropdown-divider"></div> <a href="javascript:void(0);" class="dropdown-item"><span class="flex-item dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M17 20c-.29 0-.56-.06-.76-.15-.71-.37-1.21-.88-1.71-2.38-.51-1.56-1.47-2.29-2.39-3-.79-.61-1.61-1.24-2.32-2.53C9.29 10.98 9 9.93 9 9c0-2.8 2.2-5 5-5s5 2.2 5 5h2c0-3.93-3.07-7-7-7S7 5.07 7 9c0 1.26.38 2.65 1.07 3.9.91 1.65 1.98 2.48 2.85 3.15.81.62 1.39 1.07 1.71 2.05.6 1.82 1.37 2.84 2.73 3.55.51.23 1.07.35 1.64.35 2.21 0 4-1.79 4-4h-2c0 1.1-.9 2-2 2zM7.64 2.64L6.22 1.22C4.23 3.21 3 5.96 3 9s1.23 5.79 3.22 7.78l1.41-1.41C6.01 13.74 5 11.49 5 9s1.01-4.74 2.64-6.36zM11.5 9c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5-2.5 1.12-2.5 2.5z"></path></svg></span> <span class="flex-item">
										Only mentioned people									</span> <!----></a> <div class="dropdown-divider"></div> <a href="javascript:void(0);" class="dropdown-item"><span class="flex-item dropdown-item-icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24"></rect><g><path d="M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z"></path></g></svg></span> <span class="flex-item">
										Only my followers									</span> <!----></a></div></button></div> <div class="post-publication"><button disabled="disabled" type="submit" class="btn-custom main-inline md">
							Publish						</button></div></div></div></div> <input multiple="multiple" type="file" data-an="images-input" accept="image/*" class="d-none"> <input type="file" data-an="video-input" accept="video/*" class="d-none"> <input type="hidden" value="1668175007:2f6fade41903d4eb1d2b6fabc8bbef497003fda8" name="hash" class="d-none"></form>
</div>
			            </div>
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
						<a href="javascript:void(0)" id="show-comment"><img src="images/comment-icon.png" alt="" /> 15</a>
					</li>
					<li>
						<a href="javascript:void(0)"><img src="images/like-icon.png" alt="" /> 76</a>
					</li>
					<li>
						<a href="javascript:void(0)"><img src="images/share-icon.png" alt="" /> 59</a>
					</li>
				</ul>
				<div class="add-comment">
					<img src="images/user-icon.png" class="user-image" alt="" />
					<div class="input-group">
					  <textarea class="form-control" placeholder="Type your comment"></textarea>
					  <div class="input-group-append">
						<button class="submit-btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
					  </div>
					</div>					
					<div class="like-replay">
						<a href="javascript:void(0)">Like <i class="fa fa-thumbs-up" aria-hidden="true"></i></a> | <a href="javascript:void(0)" id="replay">Replay <i class="fa fa-reply" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="pad-lef-50" id="show-replay" style="display: none;">
					<div class="add-comment">
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
			<div class="row">
				<div class="col-md-12">
					<div class="others-profile-card pl-4">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15 text-dark">Trending</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6 mb-4">								
								<div class="myproject">
									<div class="morevides">
										<img src="images/morevideo.png" class="img-fluid border-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10">Don</h3>
											<p>Art Director</p>
											<span class="edit_icons">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
													<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
												</a>
											</span>
										</div>
										<ul class="recent-followers">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 mb-4">
								
								<div class="myproject">
									<div class="morevides">
										<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10">Beast</h3>
											<p>Art Director</p>
											<span class="edit_icons">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
													<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
												</a>
											</span>
										</div>
										<ul class="recent-followers">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 mb-4">
								
								<div class="myproject">
									<div class="morevides">
										<img src="images/morevideo.png" class="img-fluid border-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10">Don</h3>
											<p>Art Director</p>
											<span class="edit_icons">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
													<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
												</a>
											</span>
										</div>
										<ul class="recent-followers">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="others-profile-card pl-4">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15 text-dark">Suggested Artz</h5>
							</div>
						</div>
						<div class="row suggested-artz">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Acting</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Singing</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div> 
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Music</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Dance</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Painting</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Wring</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div> 
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Film Making</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Direction</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Script Writing</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Photography</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div> 
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Lyricist</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                              <div class="box-defult-2 pad-choose-btn">
                                <p class="mb-0 text-dark text-truncate ft-14">Editing</p>
                                <div class="setprimary text-left">
                                    <!--<div class="optprimary">Set as primary</div>-->
                                    <div class="radios">
                                      <div>
                                        <input id="bio1" name=button type="checkbox" class="open">
                                          <label for="bio" class="overlay">
                                           <div class="circle1"></div> 
                                          </label>
                                        </input>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
						</div>
					</div>
				</div>
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
			
			<div class="row">
				<div class="col-md-12">
					<div class="others-profile-card pl-4">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15 text-dark">Artizt with similar Arts</h5>
							</div>
						</div>
						<div class="row homepage">
							<div class="col-md-3 col-sm-3 col-6 mb-4 pl-2 pr-2">
								<div class="myproject">
									<div class="morevides">
										<img src="images/villa-scroll.png" class="img-fluid border-radius-top-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10 ft-16 text-truncate">Paromita Haque</h3>
											<p class="ft-14 text-truncate mb-2">Art Director</p>
											<a href="#" class="btn btn-normal pt-1 pb-1 pr-3 pl-3 ft-14 ml-0">Follow</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mb-4 pl-2 pr-2">
								<div class="myproject">
									<div class="morevides">
										<img src="images/villa-scroll-1.png" class="img-fluid border-radius-top-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10 ft-16 text-truncate">Paromita Haque</h3>
											<p class="ft-14 text-truncate mb-2">Art Director</p>
											<a href="#" class="btn btn-normal pt-1 pb-1 pr-3 pl-3 ft-14 ml-0">Follow</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mb-4 pl-2 pr-2">
								<div class="myproject">
									<div class="morevides">
										<img src="images/villa-scroll-2.png" class="img-fluid border-radius-top-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10 ft-16 text-truncate">Paromita Haque</h3>
											<p class="ft-14 text-truncate mb-2">Art Director</p>
											<a href="#" class="btn btn-normal pt-1 pb-1 pr-3 pl-3 ft-14 ml-0">Follow</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-6 mb-4 pl-2 pr-2">
								<div class="myproject">
									<div class="morevides">
										<img src="images/villa-scroll.png" class="img-fluid border-radius-top-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10 ft-16 text-truncate">Paromita Haque</h3>
											<p class="ft-14 text-truncate mb-2">Art Director</p>
											<a href="#" class="btn btn-normal pt-1 pb-1 pr-3 pl-3 ft-14 ml-0">Follow</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="add-scroll mar-bot-30">
				<div>
					<img src="images/movie-poster4.jpg" class="img-fluid w-100" />
				</div>
				<div>
					<img src="images/movie-poster1.jpg" class="img-fluid w-100" />
				</div>
				<div>
					<img src="images/movie-poster2.jpg" class="img-fluid w-100" />
				</div>
				<div>
					<img src="images/movie-poster3.jpg" class="img-fluid w-100" />
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
			<div class="row">
				<div class="col-md-12">
					<div class="others-profile-card pl-4">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15 text-dark">Industry</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6 mb-4">								
								<div class="myproject">
									<div class="morevides">
										<img src="images/morevideo.png" class="img-fluid border-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10">Don</h3>
											<p>Art Director</p>
											<span class="edit_icons">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
													<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
												</a>
											</span>
										</div>
										<ul class="recent-followers">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 mb-4">
								
								<div class="myproject">
									<div class="morevides">
										<img src="images/morevideo2.png" class="img-fluid border-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10">Beast</h3>
											<p>Art Director</p>
											<span class="edit_icons">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
													<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
												</a>
											</span>
										</div>
										<ul class="recent-followers">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 mb-4">
								
								<div class="myproject">
									<div class="morevides">
										<img src="images/morevideo.png" class="img-fluid border-10 w-100">
										<div class="pad-15 p-real">
											<h3 class="pl-0 mb-0 pad-bot-10">Don</h3>
											<p>Art Director</p>
											<span class="edit_icons">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#addproject">
													<img src="images/pencilsimple.png" width="20px" class="d-inine-block">
												</a>
											</span>
										</div>
										<ul class="recent-followers">
											<li>+5</li>
                            				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                            				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<div class="others-profile_ospage">
						<div class="row">


						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="others-profile-right">
		    <div class="row">
		        <div class="col-sm-12 mar-top-10 mar-bot-20">
		            <ul class="profile-counter home-profile-counter">
                		<li>
                			<span class="counter" data-counterup-time="15">1345</span>
                			Profile Views
                			<img src="images/svg/users-confirm-profile-avatar-user-account-svgrepo-com.svg" />
                		</li>
                		<li>
                			<span class="counter">1245</span>
                			Followers
                			<img src="images/svg/user-svgrepo-com.svg" />
                		</li>
                		<li>
                			<span class="counter">100000</span>
                			Likes
                			<img src="images/svg/like-svgrepo-com.svg" />
                		</li>
                		<li>
                			<span class="counter">24</span>
                			Comments
                			<img src="images/svg/conversation-svgrepo-com.svg" />
                		</li>
                	</ul>
		        </div>
		    </div>
			<div class="row">
			    <div class="col-md-12">
			        <div class="text-right align-items-end mr-2">
        				<!--<h3 class="profile-heading1">Artizt OS <span>OS for all your office needs</span></h3>-->
        				<a href="javascript:void(0)" class="add-widget">Add Widgets</a>
        			</div>
			    </div>
			</div>
			<ul class="connected-sortable droppable-area">
				<li class="draggable-item">
					<h5 class="widget-header">Trending Today</h5>
					<div class="user_chat">
						<ul class="trending-list">
							<li>#bharathanatiyam<small>356k posts</small><span>Art</span></li>
							<li>#vikram<small>126.8k posts</small><span>Movie</span></li>
							<li>#don<small>248.3k posts</small><a href="#">Movie</a></li>
							<li>#Pathalapathala<small>93.3k posts</small><span>Music</span></li>
							<li>#Kathakali<small>38.3k posts</small><a href="#">Art</a></li>
														
						</ul>
					</div>
					<a href="javascript:void(0)" class="know-more-trending"><span><i class="fa fa-i-cursor" aria-hidden="true"></i></span> Explore more trends</a>
				</li>
				<li class="draggable-item">
					<h5 class="widget-header">Artizt with similar arts</h5>
					<div class="user_chat">
						<ul class="similar-arts-list">
							<li><img src="images/recent-followers1.png" alt="" />Paromita Haque<small>Theatre/Drama</small><a href="#">Follow</a></li>
							<li><img src="images/recent-followers2.png" alt="" />Njimoluh Ebua<small>Theatre/Drama</small><a href="#">Follow</a></li>
							<li><img src="images/recent-followers3.png" alt="" />Ored Sjögren<small>Theatre/Drama</small><a href="#">Follow</a></li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="profile-right-add mar-top-30">
				<img src="images/add-image1.jpg" class="img-fluid" />
			</div>
			<ul class="connected-sortable droppable-area">
				<li class="draggable-item">
					<h5 class="widget-header">Thought of the day <button type="button" class="widget-close"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></h5>
					<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="customCheck1">
						  <label class="custom-control-label" for="customCheck1">Make a call to production house</label>
					</div>
					<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="customCheck2">
						  <label class="custom-control-label" for="customCheck2">to-do item</label>
					</div>
				</li>
				<li class="draggable-item">
					<h5 class="widget-header">Calendar <span>02</span> <button type="button" class="widget-close"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></h5>
					<p><small>13 Oct 2022, 8 AM</small>Movie Discussion @ Green Park</p>
					<p><small>13 Oct 2022, 10 AM</small>Movie Discussion @ Green Park</p>
				</li>
				<li class="draggable-item">
					<h5 class="widget-header">Todo List <span>01</span> <button type="button" class="widget-close"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></h5>
					<div class="task-scroll">
						<div class="box-showdow-none">
							<h6>Today's Task</h6>
							<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="customCheck3">
								  <label class="custom-control-label" for="customCheck3">Make a call to production house</label>
							</div>
							<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="customCheck4">
								  <label class="custom-control-label" for="customCheck4">to-do item</label>
							</div>
						</div>	
						<div class="box-showdow-none">
							<h6>Yesterday's Task</h6>
							<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="customCheck5">
								  <label class="custom-control-label" for="customCheck5">Make a call to production house</label>
							</div>
							<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="customCheck6">
								  <label class="custom-control-label" for="customCheck6">to-do item</label>
							</div>
						</div>
						<div class="box-showdow-none">
							<h6>13 June 2022 - Task</h6>
							<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="customCheck7">
								  <label class="custom-control-label" for="customCheck7">Make a call to production house</label>
							</div>
							<div class="custom-control custom-checkbox">
								  <input type="checkbox" class="custom-control-input" id="customCheck8">
								  <label class="custom-control-label" for="customCheck8">to-do item</label>
							</div>
						</div>
					</div>					
				</li>
			</ul>
			<div class="d-flex justify-content-center align-items-center mar-top-20 mar-bot-30">
				<a href="javascript:void(0)" class="add-widget">Edit Widgets</a>
			</div>
			<div class="profile-right-add">
				<img src="images/movie-poster4.jpg" class="img-fluid" />
			</div>
			<ul class="connected-sortable droppable-area">
				<li class="draggable-item">
					<h5 class="widget-header">Notifications <span>02</span></h5>
					<div class="user_chat">
						<ul class="notification-list">
							<li><img src="images/recent-followers1.png" class="round-radius" alt="" />Saravanan Shared a project with you<small>1 Day ago</small><span class="active"></span></li>
							<li><img src="images/recent-followers2.png" class="round-radius" alt="" />Shawn Pride Tagged you in a project<small>2 Days ago</small><span class="inactive"></span></li>
							<li><img src="images/recent-followers3.png" class="round-radius" alt="" />Saravanan Shared a project with you<small>3 Days ago</small><span class="active"></span></li>
						</ul>
					</div>
				</li>
				<li class="draggable-item">
					<h5 class="widget-header">Events</h5>
					<div class="event-box">
						<img src="images/event-image.jpg" alt="" />
						<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						<p class="event-date">Thu, May 29, 4:30 PM</p>
						<h4 class="event-heading">Learn Flim Acting!</h4>
						<p>All acting events in Chennai, Tamil Nadu. Here you can find more information about Upcoming events in Chennai like parties, concerts, meets,shows, sports, club, reunion, Performance</p>
					</div>
				</li>
				<li class="draggable-item">
					<h5 class="widget-header">Casting Calls</h5>
					<div class="pad-20">
						<img src="images/casting-call.jpg" class=
					"img-responsive w-100" alt="" />
					<a href="javascript:void(0)" class="gray-btn">View Details</a>
					</div>
				</li>
			</ul>			
			
			
		</div>
	  </div>
	  
	  <?php include 'includes/footer.php';?>
	  
  </body>

  <?php include 'includes/analytics-popup.php';?>

	<?php include 'includes/script.php';?>

	<script>

		(function($){
			$(window).on("load",function(){				
				$(".user_chat").mCustomScrollbar({
					//theme:"minimal"
				});				
			});
		})(jQuery);
		
		$(":checkbox").on('click', function(){  
          //$(this).closest(".setprimary").toggleClass('selected setpry', this.checked);  
            $(this).parent().addClass('active');

        if($(this).prop("checked") == true){
              $(this).closest(".setprimary").toggleClass('selected setpry', this.checked);
              $(this).closest(".box-defult-2").addClass('box-defult-2-select', this.checked);
          }
          else if($(this).prop("checked") == false){
              $(this).closest(".box-defult-2").removeClass('box-defult-2-select ', this.checked);
              $(this).closest(".setprimary").toggleClass('selected', this.checked);
              $(this).closest(".setprimary").addClass('reset', this.checked);
              $(".reset .optprimary").html("Set as primary");
        }
      });
      
      
      
      $(".optprimary").on('click', function(){  
        $(this).html("<span class='primary'><span><i class='fa fa-star' aria-hidden='true'></i></span> Primary</span>");        
      });

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
		$('.profile-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 3,
			  focusOnSelect: true,
			  variableWidth: true,
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
			
			$('.task-scroll').slick({
			  slidesToScroll: 1,
			  infinite:false,
			  slidesToShow: 1,
			  focusOnSelect: true,
			  variableWidth: false,
			  autoplay: true,
			  dots: false,
			  arrows: true,
			  autoplaySpeed: 4000,
			});
			
			
			$('.add-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  focusOnSelect: true,
			  variableWidth: false,
			  autoplay: true,
			  dots: false,
			  arrows: true,
			  autoplaySpeed: 5000,
			});
	</script>
	<script>
		/*function openNav() {
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
		}*/

		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		  $(".leftmenu_open").click(function(){
		  	$("#mySidenav").toggle("fast");		  	
		  })


		});
		
	</script>
</html>