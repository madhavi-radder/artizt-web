 
 <?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"/>

 

  </head>
  <body>
      

  <?php include 'includes/header-main.php';?>


	  <div class="others-profile-main">
		<div class="others-profile-left" id="mySidenav">
			 


		<?php include 'includes/side-profile.php';?>
		<?php // include 'includes/side-marketing-menu.php';?>
		<!--<hr>-->
		<?php include 'includes/side-menu.php';?>
		
		 </div>
		
		<div class="others-profile-center">
			<div class="row">				
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">Marketing</h2>
					<a href="#" data-toggle="modal" data-target="#addadvertisements" class="pull-right btn btn-select pt-2 pb-2 ft-14">Create New </a>
				</div>
			</div>	
            <div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<div class="row">
							<div class="col-md-12 pad-bot-15 page-head">
								<h2 class="text-black">Search by Ad Listing</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 pb-2">
								<div class="search_fnc">
									<div class="input-group fnc-search ">
										<div class="input-group-btn fnc-search-drop search-panel" data-search="Project">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
												<span class="search_by">All</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
											</button>
											<ul class="dropdown-menu" role="menu">
											  <li><a data-search="All">All</a></li>
											  <li><a data-search="Artizt Profile">Artizt Profile</a></li>
											  <li><a data-search="Artizt Project">Artizt Project</a></li>
											  <li><a data-search="Artizt Event">Artizt Event</a></li>
											  <li><a data-search="Artizore">Artizore</a></li>
											</ul>
										</div>   
										<input type="text" class="form-control borer-0" name="x" placeholder=" Ad Listing">						
										<span class="input-group-btn">
											<button class="btn search-btn" type="button"><img src="images/searchfnc.png"></button>
										</span>
									</div> 
								</div>
                                <!--<div class="row">
        							<div class="col-md-12 mt-2">
        								<a href="javascript:void(0);" class="ft-14 btn-advancesearch">Advanced Search</a>
        							</div>
        						</div>
        						<div class="row">
        							<div class="col-md-12 advance-search-box p-relative ">
        								<div class="row">
        									<div class="col-md-4 pt-2">
        										<select class="form-control" id="location" name="location">
        											<option value="">Select Online Advertisements</option>
        											<option value="Text Ads">Text Ads</option>
        											<option value="Banner Ads">Banner Ads</option>
        											<option value="Video Clip Ads">Video Clip Ads</option>
        											<option value="Flash Ads">Flash Ads</option>
        											<option value="Sticker Ads">Sticker Ads</option>
        											<option value="Label Size Ads">Label Size Ads</option>
        											<option value="FM Ads">FM Ads</option>
        										</select>										
        									</div>
        									<div class="col-md-4 pt-2">
        										<select class="form-control" id="location" name="location">
        											<option value="">Select Advertisements Artizt Media</option>
        											<option value="Text Ads">Text Ads</option>
        											<option value="Banner Ads">Banner Ads</option>
        											<option value="Video Clip Ads">Video Clip Ads</option>
        											<option value="Flash Ads">Flash Ads</option>
        											<option value="Sticker Ads">Sticker Ads</option>
        											<option value="Label Size Ads">Label Size Ads</option>
        											<option value="FM Ads">FM Ads</option>
        										</select>										
        									</div>
        								</div>
        							</div>
        						</div>-->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card pad-20">
						<!--<div class="row">
							<div class="col-md-12">
								<div class="pull-right addnotes">
									<a href="#" class="ft-14" data-toggle="modal" data-target="#addadvertisements">Create New <img src="images/os-addnotes.png"></a>
								</div>
							</div>
						</div>-->
						<div class="row">
							<div class="col-md-12 pad-top-20">
								<table id="example" class="display nowrap" style="width:100%">
									<thead>
							            <tr>
							                <th>Brand Name</th>
							                <th>Ad Type</th>
							                <th>Image</th>
							                <th>Tag lines</th>
							                <th>Branding Cycle</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td>Brand Name1</td>
							        		<td>Banner Ads</td>
							        		<td><img src="images/marketing_logo.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>Brand Name2</td>
							        		<td>Text Ads</td>
							        		<td><img src="images/marketing_logo2.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>Brand Name3</td>
							        		<td>FM Ads</td>
							        		<td><img src="images/marketing_logo3.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>Brand Name1</td>
							        		<td>Video Clip Ads</td>
							        		<td><img src="images/marketing_logo.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>Brand Name2</td>
							        		<td>FM Ads</td>
							        		<td><img src="images/marketing_logo2.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>Brand Name3</td>
							        		<td>Banner Ads</td>
							        		<td><img src="images/marketing_logo3.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>Brand Name1</td>
							        		<td>Text Ads</td>
							        		<td><img src="images/marketing_logo.jpg" /></td>
							        		<td>Brand Tag Lines1..</td>
							        		<td>Slow down <span class="mar_day_txt">(10 Days)</span></td>
							        		<td><a href="#" class="icons_view"><img src="images/view_icon.png"></a> <a class="icons_edit" href="#"><img src="images/edit_icon.png" /></a></td>
							        	</tr>
							        </tbody>
								</table>
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
									<span class="tag_art">Ad</span>
									<img src="images/rightad2.jpg" class="img-fluid relateimg border-radius-10">
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
									<img src="images/rightad.jpg" class="img-fluid relateimg border-radius-10">
								</div>
							</div>
							<div class="col-sm-6 pad-bot-30">
								<div class="worksace p-relative">
									<span class="tag_art">Ad</span>
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
				<div class="col-md-12 pad-bot-30 pad-top-10 mar-top-50">
					<div class="worksace p-relative">
						<span class="tag_art">Ad</span>
						<img src="images/rightad2.jpg" class="img-fluid relateimg border-radius-10">
					</div>
				</div>
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
		</div>
	  </div>
	  
	  <?php include 'includes/footer.php';?>

  </body>
   
	<div class="modal fade" id="addadvertisements" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <h5 class="modal-title" id="exampleModalLongTitle">Create New Brand</h5>
	        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body p-0">
	       	<ul class="nav nav-pills mb-0 d-flex justify-content-between" id="pills-tab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="branddtails-tab" data-toggle="pill" href="#branddtails" role="tab" aria-controls="add-dtails" aria-selected="true">Brand Details</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="branding-tab" data-toggle="pill" href="#branding" role="tab" aria-controls="branding-tab" aria-selected="false">Branding</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="branding_cycle-tab" data-toggle="pill" href="#branding_cycle" role="tab" aria-controls="pills-contact" aria-selected="false">Branding Cycle</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="promotions-tab" data-toggle="pill" href="#promotions" role="tab" aria-controls="promotions" aria-selected="false">Promotions</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="sale-push-tab" data-toggle="pill" href="#sale-push" role="tab" aria-controls="sale-push-tab" aria-selected="false">Sale Push</a>
			  </li>
			</ul>
			<div class="tab-content pad-20" id="pills-tabContent">
			  <div class="tab-pane fade show others-profile-left others-profile-popup active" id="branddtails" role="tabpanel" aria-labelledby="branddtails-tab">
			  		<div class="popup_form">
			  			<div class="row">
			  				<div class="col-sm-6 mar-bot-20">
			  					<div class="form-group">
							    	<label for="artizt_branding">Artizt Branding</label>
							    	<input type="text" class="form-control big_box" id="artizt_branding" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  				<div class="col-sm-6 mar-bot-20">
			  					<div class="form-group">
							    	<label for="project_branding">Project Branding</label>
							    	<input type="text" class="form-control big_box" id="project_branding" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-sm-6 mar-bot-20">
			  					<div class="form-group">
							    	<label for="branding_strategy">Branding Strategy</label>
							    	<input type="text" class="form-control big_box" id="branding_strategy" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  				<div class="col-sm-6 mar-bot-20">
			  					<div class="form-group">
							    	<label for="brand_positioning">Brand Positioning</label>
							    	<input type="text" class="form-control big_box" id="brand_positioning" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12 mar-bot-20">
			  					<div class="form-group">
							    	<label for="planning">Planning</label>
							    	<input type="text" class="form-control big_box" id="planning" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>			  			
			  			<div class="row">
			  				<div class="col-md-12 mar-bot-20">
			  					<div class="form-group">
							    	<label for="pitch-yourself">Pitch Yourself / Project</label>
							    	<input type="text" class="form-control big_box" id="pitch-yourself" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12 mar-bot-20">
			  					<div class="form-group">
							    	<label for="promote">Promote</label>
							    	<input type="text" class="form-control big_box" id="promote" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12 mar-bot-20">
			  					<div class="form-group">
							    	<label for="pro-ido">PRO - "I Do My PRO"</label>
							    	<input type="text" class="form-control big_box" id="pro-ido" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-sm-6 mar-bot-20">
			  					<div class="form-group">
							    	<label for="sponsor">Sponsor</label>
							    	<input type="text" class="form-control big_box" id="sponsor" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  				<div class="col-sm-6 mar-bot-20">
			  					<div class="form-group">
							    	<label for="advertise">Advertise</label>
							    	<input type="text" class="form-control big_box" id="advertise" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12 text-right">
			  					<button type="button" class="btn btn-select border-radius-30 pt-2 pb-2" style="min-width: 166px;">Next</button>
			  				</div>
			  			</div>

			  		</div>
			  </div>
			  <div class="tab-pane others-profile-left others-profile-popup" id="branding" role="tabpanel" aria-labelledby="branding-tab">
			  	
			  </div>
			  <div class="tab-pane others-profile-left others-profile-popup" id="branding_cycle" role="tabpanel" aria-labelledby="branding_cycle-tab">
			  	
			  </div>
			  <div class="tab-pane others-profile-left others-profile-popup" id="promotions" role="tabpanel" aria-labelledby="promotions-tab">
			  	
			  </div>
			  <div class="tab-pane others-profile-left others-profile-popup" id="sale-push" role="tabpanel" aria-labelledby="sale-push-tab">
			  	
			  </div>
			</div>
	      </div>
	     <!--  <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        
	      </div> -->
	    </div>
	  </div>
	</div>


	<?php include 'includes/script.php';?>


    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
 

    





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
		
		$(document).on('change', '.file-input', function() {
		  var filesCount = $(this)[0].files.length;		  
		  var textbox = $(this).prev();
		  if (filesCount === 1) {
		    var fileName = $(this).val().split('\\').pop();
		    textbox.text(fileName);
		  } else {
		    textbox.text(filesCount + ' files selected');
		  }
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
		  
		  $(".btn-advancesearch").click(function(){
			  $(".advance-search-box").toggleClass("show");
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
		
			
		$(document).ready(function() {
		    var table = $('#example').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    } );
		} );





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