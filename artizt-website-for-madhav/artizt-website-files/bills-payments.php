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
		<?php include 'includes/side-billpayments-menu.php';?>
		<hr>
		<?php include 'includes/side-menu.php';?>
		

		
			
 </div>
		
		<div class="others-profile-center">
			<div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black">Bills Payments</h2>
				</div>
			</div>
			<div class="vila-card">
				<ul class="nav nav-pills mb-0" id="villa-tab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="mypurchase-tab" data-toggle="pill" href="#mypurchase" role="tab" aria-controls="pills-home" aria-selected="true">My Purchase</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="membership-tab" data-toggle="pill" href="#membership" role="tab" aria-controls="membership-tab" aria-selected="false">Membership</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="subscriptions-tab" data-toggle="pill" href="#subscriptions" role="tab" aria-controls="subscriptions-tab" aria-selected="false">Subscriptions</a>
				  </li>
				</ul>
				<div class="tab-content pad-20" id="villa-tabContent">
					<div class="tab-pane fade show active" id="mypurchase" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-md-12 mar-bot-30">
								<h3 class="ft-16 pad-bot-15 pad-top-10">Current Purchase / Order</h3>
								<table id="purchase_order" class="display nowrap" style="width:100%">
									<thead>
							            <tr>
							                <th>Order ID</th>
							                <th>Date</th>
							                <th>Amount</th>
							                <th>Payment Status</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td>#ART06798</td>
							        		<td>02 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td>#ART06748</td>
							        		<td>18 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="inactive_status">Failed</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td>#ART06786</td>
							        		<td>15 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        </tbody>
								</table>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h3 class="ft-16 pad-bot-15 pad-top-10">Purchase History</h3>
								<table id="purchase-history" class="display nowrap" style="width:100%">
									<thead>
							            <tr>
							                <th>Order ID</th>
							                <th>Date</th>
							                <th>Amount</th>
							                <th>Payment Status</th>
							                <th>Download Invoice</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td>#ART06798</td>
							        		<td>02 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#"><img src="images/download_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>#ART06788</td>
							        		<td>12 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#"><img src="images/download_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>#ART06778</td>
							        		<td>02 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#"><img src="images/download_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>#ART06738</td>
							        		<td>07 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#"><img src="images/download_icon.png" /></a></td>
							        	</tr>
							        	<tr>
							        		<td>#ART06708</td>
							        		<td>04 July 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#"><img src="images/download_icon.png" /></a></td>
							        	</tr>
							        </tbody>
								</table>
							</div>
						</div>


					</div>
					<div class="tab-pane" id="membership" role="tabpanel" aria-labelledby="membership-tab">
						<div class="row">
							<div class="col-md-12 mar-bot-30">
								<h3 class="ft-16 pad-bot-15 pad-top-10">Club Membership</h3>
								<table id="clubmember" class="display nowrap" style="width:100%">
									<thead>
							            <tr>
							                <th>Name</th>
							                <th>From Date</th>
							                <th>To Date</th>
							                <th>Budget</th>
							                <th>Status</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2 pull-left" /> <a href="#" class="adv_name">Le Pondy - Beach &<br />Lake Resort</a></td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2 pull-left" /> <a href="#" class="adv_name">Cala Sinzias Resort</a></td>
							        		<td>15 Mar 2022</td>
							        		<td>15 Apr 2022</td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Active</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td><img src="images/advertisements_img1.jpg" class="pr-2 pull-left" /> <a href="#" class="adv_name">Le Pondy - Beach &<br />Lake Resort</a></td>
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

					<div class="tab-pane " id="subscriptions" role="tabpanel" aria-labelledby="subscriptions-tab">
						<div class="row">
							<div class="col-md-12 mar-bot-30">
								<h3 class="ft-16 pad-bot-15 pad-top-10">Subscription</h3>
								<table id="subscription" class="display nowrap" style="width:100%">
									<thead>
							            <tr>
							                <th>Provider</th>
							                <th>Type</th>
							                <th>Plan</th>
							                <th>Amount</th>
							                <th>Payment Status</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<tr>
							        		<td>Provider</td>
							        		<td>Prime</td>
							        		<td>1 Year </td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td>Provider</td>
							        		<td>Prime</td>
							        		<td>1 Year<br /><span class="status_expired">(Expired at: 28 Nov 2021<br />- 10:00am)</span></td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td>Provider</td>
							        		<td>Prime</td>
							        		<td>1 Year<br /><span class="status_expired">(Expired at: 28 Nov 2021<br />- 10:00am)</span></td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
							        		<td><a href="#" class="viewmore_btn">View</a></td>
							        	</tr>
							        	<tr>
							        		<td>Provider</td>
							        		<td>Prime</td>
							        		<td>1 Year<br /><span class="will_expire">(Expired at: 28 Nov 2021<br />- 10:00am)</span></td>
							        		<td>&#8377; 256500.00</td>
							        		<td><a href="#" class="active_status">Success</a></td>
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
				<div class="col-md-12 pad-bot-30  mar-top-50">
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
   

	

  <?php include 'includes/script.php';?>
	
 
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
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
		    var table = $('#purchase_order').DataTable( {		        
		        responsive: true
		    } );

		    var table = $('#purchase-history').DataTable( {		        
		        responsive: true
		    });

		    var table = $('#clubmember').DataTable( {		        
		        responsive: true
		    } );

		    var table = $('#subscription').DataTable( {		        
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