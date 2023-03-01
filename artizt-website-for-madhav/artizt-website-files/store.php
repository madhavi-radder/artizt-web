

<?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="dist/css/ckin.css">
    <link rel="stylesheet" href="css/audioplayer.css">    
    
    <style type="text/css">
    	.hearticon2 img{
    		padding-top: 10px;
    	}
    	.select2-container{
    		z-index: 9999;
    	}
    	.select2{
    		border-radius: 0.25rem;
    		min-height: 45px;
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
					<h2 class="text-black pull-left">Artizt Store</h2>
    				<div class="pull-right store_btn">	
    					<div class="dropdown">
                          <button class="btn btn-select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Store <i class="fa fa-sort-desc" aria-hidden="true" style="position: relative; top: -2px;"></i>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="store.php">Create new store</a>
                            <a class="dropdown-item" href="all-stores.php">View all stores</a>
                          </div>
                        </div>
                    </div>
				</div>
			</div>	
			<div class="villabanner storebanner_2 mar-bot-30 border-radius-10">
				<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
				<!-- <div class="villa_dropdown">
					<div class="dropdown">					  
						<a href="#" class="dropdown-toggle dropdown-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">...</a>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">Action</a>
					    <a class="dropdown-item" href="#">Another action</a>
					    <a class="dropdown-item" href="#">Something else here</a>
					  </div>
					</div>
				</div> -->
				<div class="villa_details">
					<div class="row align-items-center">
						<div class="col-md-8 col-sm-8">
							<div class="client-logo pull-left"><img src="images/client-logo1.jpg" class="img-fluid" /></div>
							<div class="villa_name storename pull-left"><h3 class="mb-0">The Violin Store</h3>
    							<p class="ft-16 mb-2">Musical Instrument Store</p>
    							<p class="text-colur">Store by behin mathew</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 text-sm-right text-xs-center">
							<!--<a href="#" data-toggle="modal" data-target="#enquiry_popup" class="btn btn-normal btn-select border-radius-30 villabooknow minwidth-120">Book Now</a>-->
							<a data-toggle="modal" data-target="#addadvertisements" class="btn btn-select border-radius-30 minwidth-150 pt-2 pb-2">Promote Store</a>
						</div>
					</div>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="violin-tab" data-toggle="pill" href="#violin" role="tab" aria-controls="pills-home" aria-selected="true">Violin</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="audio-tab" data-toggle="pill" href="#audio" role="tab" aria-controls="pills-profile" aria-selected="false">Audio</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="artworks-tab" data-toggle="pill" href="#artworks" role="tab" aria-controls="pills-contact" aria-selected="false">Artworks</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="vr-store-tab" data-toggle="pill" href="#vr-store" role="tab" aria-controls="pills-contact" aria-selected="false">VR Store</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="violin" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img">
										<img src="images/voilin1.jpg" class="img-fluid">
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img">
										<img src="images/voilin2.jpg" class="img-fluid">
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/store-mail-icon.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img">
										<img src="images/voilin1.jpg" class="img-fluid">
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					
					<div class="tab-pane" id="audio" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<img src="images/audiobanner1.jpg" class="img-fluid">
									</div>
									<div class="audio_section">
										<!-- <audio controls autoplay>
										  <source src="images/horse.ogv" type="audio/mpeg">
										  	<source src="images/horse.mp3" type="audio/mpeg">
										</audio> -->
										<div id="apwave" class="skin-wave apwave audioplayer-tobe" style="width:100%;" data-bgimage="img/bg.jpg" data-scrubbg="waves/scrubbg.png" data-scrubprog="waves/scrubprog.png" data-type="normal" data-source="audio/itsabeautifulday.mp3" data-sourceogg="audio/itsabeautifulday.ogg">
							                
							            </div>
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<img src="images/audiobanner2.jpg" class="img-fluid">
									</div>
									<!-- <div class="audio_section">
										<audio controls autoplay>
										  <source src="images/horse.ogv" type="audio/mpeg">
										  	<source src="images/horse.mp3" type="audio/mpeg">
										</audio>
									</div> -->
									<div class="audio_section">
										<!-- <audio controls autoplay>
										  <source src="images/horse.ogv" type="audio/mpeg">
										  	<source src="images/horse.mp3" type="audio/mpeg">
										</audio> -->
										<div id="apwave" class="skin-wave apwave audioplayer-tobe" style="width:100%;" data-bgimage="img/bg.jpg" data-scrubbg="waves/scrubbg.png" data-scrubprog="waves/scrubprog.png" data-type="normal" data-source="audio/itsabeautifulday.mp3" data-sourceogg="audio/itsabeautifulday.ogg">
							                
							            </div>
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<img src="images/audiobanner1.jpg" class="img-fluid">
									</div>
									<!-- <div class="audio_section">
										<audio controls autoplay>
										  <source src="images/horse.ogv" type="audio/mpeg">
										  	<source src="images/horse.mp3" type="audio/mpeg">
										</audio>
									</div> -->
									<div class="audio_section">
										<!-- <audio controls autoplay>
										  <source src="images/horse.ogv" type="audio/mpeg">
										  	<source src="images/horse.mp3" type="audio/mpeg">
										</audio> -->
										<div id="apwave" class="skin-wave apwave audioplayer-tobe" style="width:100%;" data-bgimage="img/bg.jpg" data-scrubbg="waves/scrubbg.png" data-scrubprog="waves/scrubprog.png" data-type="normal" data-source="audio/itsabeautifulday.mp3" data-sourceogg="audio/itsabeautifulday.ogg">
							                
							            </div>
									</div>3
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane " id="artworks" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<img src="images/artbanner1.jpg" class="img-fluid">
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<img src="images/artbanner2.jpg" class="img-fluid">
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<img src="images/artbanner3.jpg" class="img-fluid">
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="vr-store" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<!-- <img src="images/videobanner.jpg" class="img-fluid"> -->
										 <video poster="ckin.jpg" src="ckin.mp4" data-ckin="default" data-overlay="1" ></video>
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<video poster="ckin.jpg" src="ckin.mp4" data-ckin="default" data-overlay="1" ></video>
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="store_card">
									<div class="store_img pt-0 pb-0">
										<video poster="ckin.jpg" src="ckin.mp4" data-ckin="default" data-overlay="1" ></video>
									</div>
									<div class="store_description">
										<div class="store_description_txt">
											<p>Ocean Waves Nature Sounds</p>
											<h5>&#8377; 900.00</h5>
										</div>
										<a href="#" class="card_design"><img src="images/header-bell-card.png"></a>
									</div>
								</div>
							</div>
						</div>						
					</div>


				</div>
			</div>
			<?php include 'includes/seobox.php';?>
			<div class="row">
				<div class="col-md-12">
					<div class="others-profile_ospage">
						<div class="row">
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">							
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
									<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
									
									<div class="villa_details">
										<div class="row align-items-center">
											<div class="col-md-12 pr-2 pl-2">
												<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
												<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
												
												<p class="text-colur">Store by Santa Monica</p>
													
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
									<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
									
									<div class="villa_details">
										<div class="row align-items-center">
											<div class="col-md-12 pr-2 pl-2">
												<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
												<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
												
												<p class="text-colur">Store by Santa Monica</p>
													
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
			<div class="row">
				<div class="col-md-12 pad-bot-30 pad-top-60 mar-top-10">
				    
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/club-ad.png" class="img-fluid relateimg border-radius-10">										
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mt-1">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner1.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
						
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="villabanner storebanner_sm mar-bot-30 border-radius-10 qq" style="background: url(images/storebanner2.jpg);	background-repeat:no-repeat;background-size:contain;background-position:center;background-size: cover;">
						<!-- <img src="images/store-banner.png" class="img-fluid bannerimage " > -->
						
						<div class="villa_details">
							<div class="row align-items-center">
								<div class="col-md-12 pr-2 pl-2">
									<div class="client-logo pull-left"><img src="images/client-logo4.jpg" class="img-fluid" /></div>
									<div class="villa_name storename pull-left"><h3 class="mb-0 ft-16">Shoott</h3>
									
									<p class="text-colur">Store by Santa Monica</p>
										
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
	  
	  <?php include 'includes/advertisement-popup.php';?>
    <script src="js/bootstrap-datepicker.js"></script>

  </body>
 
    
	<?php include 'includes/script.php';?>
	<script src="js/audioplayer.js"></script>
	<script src="dist/js/ckin.js"></script>
    




	<script>

		 jQuery(document).ready(function ($) {
		 	var settings_ap = {
	            disable_volume: 'off'
	            ,disable_scrub: 'default'
	            ,design_skin: 'skin-wave'
	            ,skinwave_dynamicwaves:'on'
	            ,skinwave_enableSpectrum: "off"
	            ,settings_backup_type:'full'
	            ,settings_useflashplayer:'auto'
	            ,skinwave_spectrummultiplier: '4'
	            ,skinwave_comments_enable:'on'
	        };
	        dzsap_init('.apwave',settings_ap);
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
		$('.testimonial-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 1,
			  focusOnSelect: true,
			  variableWidth: true,
			  autoplay: true,
			  dots: false,
			  arrows: true,
			  autoplaySpeed: 4000,
			  responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
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

		$('.relatedevents-scroll').slick({
			  slidesToScroll: 1,
			  infinite:true,
			  slidesToShow: 2,
			  autoplay: false,
			  dots: false,
			  arrows: false,
			  autoplaySpeed: 4000,
			  responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
						}
					},
					{
						breakpoint: 900,
						settings: {
							slidesToShow: 2,
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
		
	</script>
</html>