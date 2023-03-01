 
 <?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    
    <style>
        .search-results-card h3{
            color: #8083a3;
            font-size: 14px;
        }
    </style>
    
    
  </head>
  <body>
       

  <?php include 'includes/header-main.php';?>

	  <div class="search-results-main">
		<div class="search-results-left" id="mySidenav">
			 
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
		
		<div class="search-results-right">
		    <div class="row">
		        <div class="col-md-12 pad-bot-15 page-head">
		            <h2 class="text-black">My Auditions - Applied Pitchs</h2>
		        </div>
		    </div>
			<div class="search-results-card">
			    <div class="row">
			        <div class="col-md-12">
			            <h3 class="ft-18 text-dark">Female Actor Positive Lead Role</h3>
			            <hr />
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-md-3 col-sm-6 mb-3">
			            <h3 class="fw-500 mb-3">Projects</h3>
			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
			        </div>
			        <div class="col-md-3 col-sm-6 mb-3">
			            <h3 class="fw-500 mb-3">Pitch and project Description</h3>
			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
			            <p class="ft-14 mb-0"><a href="auditions-view.php">View More</a></p>
			        </div>
			        <div class="col-md-3 col-sm-6 mb-3">
			            <h3 class="fw-500 mb-3">Uploaded Media</h3>
			            <p class="text-dark mb-0 ft-14">
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-music" aria-hidden="true"></i></a>
			            </p>
			        </div>
			        <div class="col-md-3 text-md-center col-sm-6 mb-3">
			            <h3 class="fw-500 mb-3">Status</h3>
			            <p class="text-dark mb-0"><span class="btn btn-normal pl-2 pr-2 pt-1 pb-1 ft-12"><i class="fa fa-spinner" aria-hidden="true"></i> Under Review</span></p>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-md-12">
			            <p class="mb-0 ft-14 text-dark"><span class="note_auditions mr-2"><i class="las la-edit"></i> Note</span> <b>Selected,</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
			        </div>
			    </div>
			</div>
			<div class="search-results-card">
			    <div class="row">
			        <div class="col-md-12">
			            <h3 class="ft-18 text-dark">Female Actor Positive Lead Role</h3>
			            <hr />
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-md-3">
			            <h3 class="fw-500 mb-3">Projects</h3>
			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
			        </div>
			        <div class="col-md-3">
			            <h3 class="fw-500 mb-3">Pitch and project Description</h3>
			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
			            <p class="ft-14"><a href="auditions-view.php">View More</a></p>
			        </div>
			        <div class="col-md-3">
			            <h3 class="fw-500 mb-3">Uploaded Media</h3>
			            <p class="text-dark mb-0 ft-14">
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-music" aria-hidden="true"></i></a>
			            </p>
			        </div>
			        <div class="col-md-3 text-center">
			            <h3 class="fw-500 mb-3">Status</h3>
			            <p class="text-dark mb-0"><span class="btn btn-normal pl-2 pr-2 pt-1 pb-1 ft-12"><i class="fa fa-clock-o" aria-hidden="true"></i> Waiting List</span></p>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-md-12">
			            <p class="mb-0 ft-14 text-dark"><span class="note_auditions mr-2"><i class="las la-edit"></i> Note</span> <b>Selected,</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
			        </div>
			    </div>
			</div>
			<div class="search-results-card">
			    <div class="row">
			        <div class="col-md-12">
			            <h3 class="ft-18 text-dark">Female Actor Positive Lead Role</h3>
			            <hr />
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-md-3">
			            <h3 class="fw-500 mb-3">Projects</h3>
			            <img src="images/vikram-img.jpg" class="img-fluid border-radius-5" />
			        </div>
			        <div class="col-md-3">
			            <h3 class="fw-500 mb-3">Pitch and project Description</h3>
			            <p class="text-dark mb-0 ft-14">Movie: Vikram</p>
			            <p class="text-dark mb-0 ft-14">GVK Films Production House is Looking for fresher or experienced female actors for the upcoming bilingual movie projects. Language is not an barrier.</p>
			            <p class="ft-14"><a href="auditions-view.php">View More</a></p>
			        </div>
			        <div class="col-md-3">
			            <h3 class="fw-500 mb-3">Uploaded Media</h3>
			            <p class="text-dark mb-0 ft-14">
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
			                <a href="#" class="btn btn-normal border-radius-5 pl-2 pr-2 pt-1 pb-1 mr-1 ml-1" data-toggle="modal" data-target="#viewmedia"><i class="fa fa-music" aria-hidden="true"></i></a>
			            </p>
			        </div>
			        <div class="col-md-3 text-center">
			            <h3 class="fw-500 mb-3">Status</h3>
			            <p class="text-dark mb-0"><span class="btn btn-select pl-2 pr-2 pt-1 pb-1 ft-12"><i class="fa fa-check" aria-hidden="true"></i> Selected</span></p>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-md-12">
			            <p class="mb-0 ft-14 text-dark"><span class="note_auditions mr-2"><i class="las la-edit"></i> Note</span> <b>Selected,</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
			        </div>
			    </div>
			</div>
			
			
			<div class="row">
				<div class="col-md-12 pad-bot-15 pad-top-60 similar-indus-head">
					<h4 class="text-black">Similar Projects</h4>
					<a href="#" class="viweall">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-4 col-sm-4">
			        <div class="pad-20 bg-white-box">
			            <h3 class="pl-0 fw-500 ft-20 mb-0 line-height-26">Casting Call For Films And TV Serials And TVC Ad Shoot</h3>
			            <p class="ft-14 text-muted">Posted on: 25 Aug 2022</p>
			            <p class="ft-14 text-dark fw-500 mb-1">Roles for</p>
			            <p class="mb-1 text-color-2 ft-14">Male Lead Actor Required For Films And TV Serial <br />Male,18-30Yrs</p>
			            <p class="mb-0 text-dark"><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Model</a></span></p>
			            <p class="ft-14 mb-0"><a href="auditions-view.php">View More</a></p>
			        </div>
			    </div>
			    <div class="col-md-4 col-sm-4">
			        <div class="pad-20 bg-white-box">
			            <h3 class="pl-0 fw-500 ft-20 mb-0 line-height-26">Casting Call For Films And TV Serials And TVC Ad Shoot</h3>
			            <p class="ft-14 text-muted">Posted on: 25 Aug 2022</p>
			            <p class="ft-14 text-dark fw-500 mb-1">Roles for</p>
			            <p class="mb-1 text-color-2 ft-14">Male Lead Actor Required For Films And TV Serial <br />Male,18-30Yrs</p>
			            <p class="mb-0 text-dark"><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Model</a></span></p>
			            <p class="ft-14 mb-0"><a href="auditions-view.php">View More</a></p>
			        </div>
			    </div>
			    <div class="col-md-4 col-sm-4">
			        <div class="pad-20 bg-white-box">
			            <h3 class="pl-0 fw-500 ft-20 mb-0 line-height-26">Casting Call For Films And TV Serials And TVC Ad Shoot</h3>
			            <p class="ft-14 text-muted">Posted on: 25 Aug 2022</p>
			            <p class="ft-14 text-dark fw-500 mb-1">Roles for</p>
			            <p class="mb-1 text-color-2 ft-14">Male Lead Actor Required For Films And TV Serial <br />Male,18-30Yrs</p>
			            <p class="mb-0 text-dark"><span class="tag2"><a href="#">Actor</a></span> <span class="tag2"><a href="#">Model</a></span></p>
			            <p class="ft-14 mb-0"><a href="auditions-view.php">View More</a></p>
			        </div>
			    </div>
			</div>
		</div>



		<!--<div class="others-profile-right">
			<div class="row">
				<div class="col-md-12 pad-bot-30">
					<div class="calender_outer mt-2">
						<div class="widget-header">
							<h5>My Works</h5>
						</div>
						<div class="fnc_right pad-15">
							<p><a href="#">Project Working</a></p>
							<span>2</span><br clear="all" />
						</div>
						<div class="fnc_right pad-15 pt-2">
							<p><a href="#">Potential Project</a></p>
							<span>1</span><br clear="all" />
						</div>
						<div class="fnc_right pad-15 pt-2">
							<p><a href="#">Project Completed</a></p>
							<span>3</span><br clear="all" />
						</div>
						<div class="fnc_right pad-15 pt-2">
							<p><a href="#">Project Cancelled</a></p>
							<span>2</span><br clear="all" />
						</div>
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-12 pad-bot-30  mar-top-10">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">												
					</div>
				</div>
				<div class="col-md-12 pad-bot-30 pad-top-10 mar-top-10">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">												
					</div>
				</div>				
			</div>			
		</div>-->
	  </div>
	  
	  <?php include 'includes/footer.php';?>
    
      
    
    
    
    
        <div class="modal fade" id="viewmedia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header b-modal-header text-center">
		        <h5 class="modal-title" id="exampleModalLongTitle">Uploaded Media</h5>
		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		            <div class="row">
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-1.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-2.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-3.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-4.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-2.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-1.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-3.jpg" class="img-fluid border-radius-15">
						</div>
						<div class="col-md-3 col-sm-3 col-6 text-center mar-bot-20">
							<img src="images/profile-photo-3.jpg" class="img-fluid border-radius-15">
						</div>
					</div>	
	  		  </div>

			      <!--<div class="modal-footer">
			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Apply Now</button>
			      </div>-->     
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
	    (function($){
			$(window).on("load",function(){
				
				$(".os_card_body").mCustomScrollbar({
					//theme:"minimal"
				});
				
			});
		})(jQuery);

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
		
		$('.addnew').on('click', '.clone-row', function() {
		    alert("test");
          $('.clone-row').closest('.addnew').find('.clone-row').first().clone().appendTo('.new-row');
        });	

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
	    $('.wrapper').on('click', '.clone', function() {
          $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
        });
	
	
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
		  $('.js-example-basic-multiple').select2({
            placeholder: "Search your Industry",
            //allowClear: true
          });
		});
		
		
		
	</script>
</html>