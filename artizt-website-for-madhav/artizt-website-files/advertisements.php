		<?php include 'includes/top.php';?>

	
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/pricing-table.css">
    <title>Artizt Network</title>
    <style type="text/css">
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
		<?php // include 'includes/side-advertisements-menu.php';?>
		<!--<hr>-->
		<?php include 'includes/side-menu.php';?>	 
	
	</div>
		
		<div class="others-profile-center">				
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left">Advertisements</h2>
					<a href="#" data-toggle="modal" data-target="#addadvertisements" class="pull-right float-xs-none btn btn-select pt-2 pb-2 ft-14">Create New Campaign </a>
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
									<a href="#" class="ft-14" data-toggle="modal" data-target="#addadvertisements">Add Project <img src="images/os-addnotes.png"></a>
								</div>
							</div>
						</div>-->
						<div class="row">
							<div class="col-md-12">
								<table id="example" class="display nowrap" style="width:100%">
									<thead>
							            <tr>
							                <th>Campaign Name </th>
							                <th>Campaign Type</th>
							                <th>From Date</th>
							                <th>To Date</th>
							                <th>Budget</th>
							                <th>Status</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2" /> <a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Banner Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Text Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Text Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>	
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2" /> <a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Banner Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="inactive_status">Inactive</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2" /> <a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Video Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2" /> <a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Banner Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="inactive_status">Inactive</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2" /> <a href="#" class="adv_name">Club House Add</a></td>
							        		<td>Video Ad</td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
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
				<div class="col-md-12 pad-bot-30 pad-top-70 mt-1">
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

	<?php include 'includes/advertisement-popup.php';?>
  </body>
  
  <?php include 'includes/script.php';?>
  <script src="js/bootstrap-datepicker.js"></script>
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
	<script>
		
			
		$(document).ready(function() {
		    var table = $('#example').DataTable( {
		        rowReorder: {
		            selector: 'td:nth-child(2)'
		        },
		        responsive: true
		    });

		    $('#adspages').select2({
	            placeholder: "Select Pages",
	            //allowClear: true
	        });
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
		
		$(document).ready(function(){
		  $("#searchbox").click(function(){
		    $("#mobilesearchmenu").toggle();
		  });
		});
		
	</script>
</html>