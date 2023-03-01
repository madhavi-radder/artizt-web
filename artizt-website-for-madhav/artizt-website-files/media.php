
<?php include 'includes/top.php';?>
	
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
 

  </head>
  <body>
      <style>
          .videos_dropdown{
              right:-15px;
          }
      </style>

  <?php include 'includes/header-main.php';?>

	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 
		<?php include 'includes/side-profile.php';?>
		<?php // include 'includes/side-media-menu.php';?>
		<!--<hr>-->
		<?php include 'includes/side-menu.php';?>	 
		 
		</div>
		
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Media</h2>
				</div>
			</div>
            <div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 pad-bot-15 page-head">
								<h2 class="text-black">Search by Media</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 pb-2">
								<div class="search_fnc">
									<div class="input-group fnc-search">
										<div class="input-group-btn fnc-search-drop search-panel" data-search="Project">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
												<span class="search_by">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" role="menu">
											  <li><a data-search="All">All</a></li>
											  <li><a data-search="E Magazines">E Magazines</a></li>
											  <li><a data-search="Digital Magazines">Digital Magazines</a></li>
											  <li><a data-search="Youtube Channels">Youtube Channels</a></li>
											  <li><a data-search="OTT Platforms">OTT Platforms</a></li>
											  <li><a data-search="Academy Coverages">Academy Coverages</a></li>
											  <li><a data-search="Live Streamings">Live Streamings</a></li>
											  <li><a data-search="Playlist">Playlist</a></li>
											  <li><a data-search="Watch Later">Watch Later</a></li>
											</ul>
										</div>   
										<input type="text" class="form-control borer-0" name="x" placeholder="Search All">						
										<span class="input-group-btn">
											<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
										</span>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<!-- <div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">Story Wall</h5>
							</div>
						</div> -->
						<div class="row">
							<div class="col-md-4 col-sm-6 mb-4">
								<p class="text-center ft-16 text-dark">Trending</p>
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
								<p class="text-center ft-16 text-dark">Industry</p>
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
								<p class="text-center ft-16 text-dark">Artform</p>
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
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">Digital Magazine</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="magazine-scroll">
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines1.png">
										</div>
										<p>Artists, Architects & Photographers</p>
									</div>
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines2.png">
										</div>
										<p>Composers & Musicians</p>
									</div>
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines3.png">
										</div>
										<p>Entertainment & Performing Arts</p>
									</div>
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines1.png">
										</div>
										<p>Artists, Architects & Photographers</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center pad-top-20 mar-top-10">
								<a href="#" class="btn btn-select border-radius-30 pt-2 pb-2" style="min-width: 100px;">Next</a>
							</div>
						</div>
					</div>
				</div>
			</div>			
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">Youtube Channel</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/tz5zmTBXSeU" title="Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/0FcfgQzRh9Q" title="KAARI - Official Trailer| Sasikumar | D. Imman | Hemanth" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">KAARI - Official Trailer| Sasikumar | D. Imman | Hemanth</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/tz5zmTBXSeU" title="Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music</p>
								</div>
							</div>							
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/7aj8p-QzYQU" title="Vikram | Rolex Sir Promo | Kamal Haasan | Suriya | Vijay Sethupathi| Lokesh Kanagaraj #AllTimeRecord" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Vikram | Rolex Sir Promo | Kamal Haasan | Suriya | Vijay Sethupathi| Lokesh Kanagaraj</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">Artizt OTT Platform</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									<span>Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</span></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									<span>Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</span></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									<span>Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</span></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									<span>Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</span></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									<span>Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</span></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									<span>Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</span></p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">Academy Coverages</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/tz5zmTBXSeU" title="Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/0FcfgQzRh9Q" title="KAARI - Official Trailer| Sasikumar | D. Imman | Hemanth" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">KAARI - Official Trailer| Sasikumar | D. Imman | Hemanth</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/HKX0LCEKbEc" title="Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/tz5zmTBXSeU" title="Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Prince Release Announcement | Sivakarthikeyan | Maria | Anudeep KV | S Thaman | Aditya Music</p>
								</div>
							</div>							
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/7aj8p-QzYQU" title="Vikram | Rolex Sir Promo | Kamal Haasan | Suriya | Vijay Sethupathi| Lokesh Kanagaraj #AllTimeRecord" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<p class="youtube-title">Vikram | Rolex Sir Promo | Kamal Haasan | Suriya | Vijay Sethupathi| Lokesh Kanagaraj</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">E-Magazine</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="magazine-scroll">
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines1.png">
										</div>
										<p>Artists, Architects & Photographers</p>
									</div>
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines2.png">
										</div>
										<p>Composers & Musicians</p>
									</div>
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines3.png">
										</div>
										<p>Entertainment & Performing Arts</p>
									</div>
									<div class="magazinelist box-showdow-none">
										<div class="magazinephoto">
											<img src="images/emagazines1.png">
										</div>
										<p>Artists, Architects & Photographers</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center pad-top-20 mar-top-10">
								<a href="#" class="btn btn-select border-radius-30 pt-2 pb-2" style="min-width: 100px;">Next</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="pad-bot-15">Play List</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative playlists_videos">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1OjZnGZjOA0?list=PLUg6vO2_neOQFgj1nqFxYGBuwKAm3de1s" title="Pathala Pathala Video | VIKRAM | Kamal Haasan | Anirudh Ravichander | Lokesh Kanagaraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img src="images/playall.png" class="playlists_all"> -->
										<div class="playall_folower pl-0">
											<ul class="recent-followers pl-0 pb-0">
												<li>+5</li>
												<li><img src="images/recent-followers1.png" alt=""></li>
												<li><img src="images/recent-followers4.png" alt=""></li>
												<li><img src="images/recent-followers5.png" alt=""></li>
											</ul>
										</div>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative playlists_videos">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1OjZnGZjOA0?list=PLUg6vO2_neOQFgj1nqFxYGBuwKAm3de1s" title="Pathala Pathala Video | VIKRAM | Kamal Haasan | Anirudh Ravichander | Lokesh Kanagaraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img src="images/playall.png" class="playlists_all"> -->
										<div class="playall_folower pl-0">
											<ul class="recent-followers pl-0 pb-0">
												<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
											</ul>
										</div>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative playlists_videos">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1OjZnGZjOA0?list=PLUg6vO2_neOQFgj1nqFxYGBuwKAm3de1s" title="Pathala Pathala Video | VIKRAM | Kamal Haasan | Anirudh Ravichander | Lokesh Kanagaraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img src="images/playall.png" class="playlists_all"> -->
										<div class="playall_folower pl-0">
											<ul class="recent-followers pl-0 pb-0">
												<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
											</ul>
										</div>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative playlists_videos">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1OjZnGZjOA0?list=PLUg6vO2_neOQFgj1nqFxYGBuwKAm3de1s" title="Pathala Pathala Video | VIKRAM | Kamal Haasan | Anirudh Ravichander | Lokesh Kanagaraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img src="images/playall.png" class="playlists_all"> -->
										<div class="playall_folower pl-0">
											<ul class="recent-followers pl-0 pb-0">
												<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
											</ul>
										</div>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative playlists_videos">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1OjZnGZjOA0?list=PLUg6vO2_neOQFgj1nqFxYGBuwKAm3de1s" title="Pathala Pathala Video | VIKRAM | Kamal Haasan | Anirudh Ravichander | Lokesh Kanagaraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img src="images/playall.png" class="playlists_all"> -->
										<div class="playall_folower pl-0">
											<ul class="recent-followers pl-0 pb-0">
												<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
											</ul>
										</div>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="min-height-230">
									<div class="yube-video p-relative playlists_videos">
										<div class="videos_dropdown">
											<div class="dropdown">
												<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"><div class="rodate_dots pl-3">...</div></a>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
											    <a class="dropdown-item" href="#">Add to Playlist <img src="images/playlists.png"/></a>
											    <a class="dropdown-item" href="#">Watch Later <img src="images/watch-later.png"/></a>
											  </div>
											</div>
										</div>
										<iframe width="100%" height="100%" src="https://www.youtube.com/embed/1OjZnGZjOA0?list=PLUg6vO2_neOQFgj1nqFxYGBuwKAm3de1s" title="Pathala Pathala Video | VIKRAM | Kamal Haasan | Anirudh Ravichander | Lokesh Kanagaraj" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<!-- <img src="images/playall.png" class="playlists_all"> -->
										<div class="playall_folower pl-0">
											<ul class="recent-followers pl-0 pb-0">
												<li>+5</li>
                                				<li data-toggle="tooltip" title="Thirisha"><img src="images/recent-followers1.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Andrea"><img src="images/recent-followers2.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Priya Bhavani"><img src="images/recent-followers3.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Vijay"><img src="images/recent-followers4.png" alt="" /></li>
                                				<li data-toggle="tooltip" title="Surya"><img src="images/recent-followers5.png" alt="" /></li>
											</ul>
										</div>
									</div>
									<p class="youtube-title"> <img src="images/zee5logo.png" class="d-inline pull-left mr-2 mt-2">
									Whistle Song (Tamil) Lyrical | The Warriorr | Ram Pothineni | Lingusamy| KrithiShetty | DSP</p>
								</div>
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
								<div class="worksace p-relative">
									<img src="images/mediabanner1.jpg" class="img-fluid relateimg border-radius-10">
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<img src="images/mediabanner2.jpg" class="img-fluid relateimg border-radius-10">
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

 

		<div class="others-profile-right">
			<div class="row">
				<div class="col-md-12 pad-bot-30 pad-top-50 mt-3">
					<div class="card pad-15 mb-0">
						<div class="row">
							<div class="col-md-12 sugh5">
								<h5 class="mb-2">Live Vidoe <img src="images/youtube-live.svg" class="svg-icon" width="30"></h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<iframe id="ls_embed_1658759704" src="https://livestream.com/accounts/3172111/events/1948081/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="100%" frameborder="0" scrolling="no" allowfullscreen> </iframe>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="ft-14 mb-0 text-dark">Estúdio ao vivo!</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="row">	
				<div class="col-md-12 pad-bot-30 mar-top-10">
					<div class="worksace p-relative mt-1">
						<img src="images/mediabanner1.jpg" class="img-fluid relateimg border-radius-10">
					</div>
				</div>



				<div class="col-md-12 pad-bot-30  mar-top-10">
					<div class="worksace p-relative">
						<img src="images/mediabanner2.jpg" class="img-fluid relateimg border-radius-10">
					</div>
				</div>
				<div class="col-md-12 pad-bot-30 pad-top-10 mar-top-10">
					<div class="worksace p-relative">
						<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">
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
		
			

		$('.magazine-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 3,
			  autoplay: false,
			  dots: false,
			  arrows: true,
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
						}
					},
					{
					  breakpoint: 680,
					  settings: {
						  slidesToShow: 2,
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