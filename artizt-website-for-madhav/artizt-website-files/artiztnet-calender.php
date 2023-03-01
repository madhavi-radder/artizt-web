 
 <?php include 'includes/top.php';?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/others-profile-header.css">
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.css"/>
    <link rel="stylesheet" href="mscroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="dist/css/fullcalendar.min.css"/>
    <link rel="stylesheet" type="text/css" href="dist/css/fullcalendar.print.css"/>
    <style>
        
        
        .scroll-right{
            max-height: 470px;
    		overflow: auto;
        }
        
        .mCSB_container{
            padding-left:0 !important;
        }
        
        
        
        .big_box{
            border: 1px solid #d9d9d9 !important;
            font-weight: 500 !important;
        }
        
        .modal-header{
            border-bottom: 1px solid #d9d9d9 !important;
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
		
		<div class="search-results-right search-result-full-width">
		    <div class="row">
				<div class="col-md-12 pad-bot-15 page-head">
					<h2 class="text-black pull-left" >Create Events</h2>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-4">
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12 mb-3">
			                    <button class="btn btn-select w-100 border-radius-10" id="btn-new-event" data-toggle="modal" data-target="#createevents"><i class="fa fa-plus" aria-hidden="true"></i> Create New</button>
			                </div>
			                <div class="col-md-12 mb-3">
			                    <button class="btn btn-planning w-100 border-radius-10" id="btn-new-event-planning"><i class="fa fa-circle" aria-hidden="true"></i> New Event Planning</button>
			                </div>
			                <div class="col-md-12 mb-3">
			                    <button class="btn btn-meeting w-100 border-radius-10" id="btn-new-event-info"><i class="fa fa-circle" aria-hidden="true"></i> New Meeting</button>
			                </div>
			                <div class="col-md-12 mb-3">
			                    <button class="btn btn-report w-100 border-radius-10" id="btn-new-event-planning"><i class="fa fa-circle" aria-hidden="true"></i> Generating Reports</button>
			                </div>
			                <div class="col-md-12 mb-3">
			                    <button class="btn btn-new-events w-100 border-radius-10" id="btn-new-event-planning"><i class="fa fa-circle" aria-hidden="true"></i> Create New theme</button>
			                </div>
			            </div>
			        </div>
			        <div class="d-sm-none d-none d-md-block">
    			        <div class="row">
    			            <div class="col-md-12 pad-top-10">
        			            <h4 class="ft-18 text-black fw-500">Upcoming Events</h4>
        			            <p class="ft-14 text-dark">Don't miss scheduled events</p>
        			        </div>
    			        </div>
    			        <div class="scroll-right">
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Success Meet</h3>
        			                </div>
        			            </div>
        			        </div>
        			        
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
        			                </div>
        			            </div>
        			        </div>
        			        
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Success Meet</h3>
        			                </div>
        			            </div>
        			        </div>
        			        
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
        			                </div>
        			            </div>
        			        </div>
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
        			                </div>
        			            </div>
        			        </div>
        			        
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Success Meet</h3>
        			                </div>
        			            </div>
        			        </div>
        			        
        			        <div class="vila-card pad-20 mb-3">
        			            <div class="row">
        			                <div class="col-md-12">
        			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
        			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
        			                </div>
        			                <div class="col-md-12">
        			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
        			                </div>
        			            </div>
        			        </div>
    			        </div>
    			    </div>
			    </div>
			    <div class="col-md-8">
			        <div class="vila-card pad-20">
			            <div id='calendar'></div>
			        </div>
			    </div>
			</div>
			<div class="d-sm-block d-md-none">
		        <div class="row">
		            <div class="col-md-12 pad-top-10">
			            <h4 class="ft-18 text-black fw-500">Upcoming Events</h4>
			            <p class="ft-14 text-dark">Don't miss scheduled events</p>
			        </div>
		        </div>
		        <div class="scroll-right">
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Success Meet</h3>
			                </div>
			            </div>
			        </div>
			        
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
			                </div>
			            </div>
			        </div>
			        
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Success Meet</h3>
			                </div>
			            </div>
			        </div>
			        
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
			                </div>
			            </div>
			        </div>
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
			                </div>
			            </div>
			        </div>
			        
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Success Meet</h3>
			                </div>
			            </div>
			        </div>
			        
			        <div class="vila-card pad-20 mb-3">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="float-left"><i class="fa fa-circle mr-2 text-color-orange" aria-hidden="true"></i> 1/4/2022</div>
			                    <div class="float-right"><span class="tag3"><a href="#">5:30 AM to 12:00 AM</a></span></div>
			                </div>
			                <div class="col-md-12">
			                    <h3 class="ft-18 text-black fw-500 mb-0 pt-2">Audio Launch</h3>
			                </div>
			            </div>
			        </div>
		        </div>
		    </div>
		</div>
	  </div>
	  
	  <?php include 'includes/footer.php';?>
    
    
    <div class="modal fade" id="createevents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
        	        <h5 class="modal-title" id="exampleModalLongTitle">Create New Add</h5>
        	        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
        	          <span aria-hidden="true">&times;</span>
        	        </button>
        	     </div>
        	     <div class="modal-body">
        	         <form>
        	             <div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="adname">Event Name:</label>
							    	<input type="text" class="form-control big_box" id="adname" aria-describedby="emailHelp" placeholder="">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="adname">Events Durations:</label>
							    	<div class="input-group input-daterange d-block">
							    		<div class="row">
							    			<div class="col-6">
							    				<input type="text" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="Start Date">
							    			</div>
							    			<div class="col-6">
							    				<input type="text" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="End Date">
							    			</div>
							    		</div>
									</div>						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="adname">Events Time:</label>
							    	<div class="input-group d-block">
							    		<div class="row">
							    			<div class="col-6">
							    				<input type="time" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="Start Time">
							    			</div>
							    			<div class="col-6">
							    				<input type="time" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="End Time">
							    			</div>
							    		</div>
									</div>						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="adname">Location:</label>
							    	<input type="text" class="form-control big_box" id="adname" aria-describedby="emailHelp" placeholder="Location">						   
								</div>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<div class="form-group">
							    	<label for="adname">Description:</label>
							    	<textarea class="form-control big_box" placeholder="Description"></textarea>
							    							   
								</div>
			  				</div>
			  			</div>
			  			
			  			<div class="row">
			  				<div class="col-md-12 text-right">
			  					<button type="button" class="btn btn-select border-radius-30 pt-2 pb-2" style="min-width: 166px;">Submit</button>
			  				</div>
			  			</div>
        	         </form>
        	     </div>
            </div>
            
            
            
        </div
        
    </div>
      
  </body>
   
  <?php include 'includes/script.php';?>
    
    <script src='dist/js/moment.min.js'></script>
    
    <script src='dist/js/fullcalendar.min.js'></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
	<script>
		(function($){
			$(window).on("load",function(){
				$(".scroll-right").mCustomScrollbar({
					//theme:"minimal"
				});
			});
			
			$('.input-daterange input').each(function() {
    		    	//$(this).datepicker('clearDates');
    		    	$(this).datepicker({
    				    format: 'dd-mm-yyyy',
    				    startDate: '+1d',
    				    autoclose: true,
    				    //endDate: '+0d' // there's no convenient "right now" notation yet
    				}); 
    		  });
    		  
    		  
		})(jQuery);
		
		
		
		
		$(function() {

            $('#calendar').fullCalendar({
              themeSystem: 'bootstrap4',
              header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
              },
              weekNumbers: true,
              eventLimit: true, // allow "more" link when too many events
              //events: 'https://fullcalendar.io/api/demo-feeds/events.json'
              events: [
                    {
                      title: 'Success Meet',
                      start: '2022-08-28T10:30:00',
                      end: '2022-08-29T11:00:00',
                      extendedProps: {
                        department: 'BioChemistry'
                      },
                      description: 'Lecture'
                    },
                    {
                      title: 'audio launch ',
                      start: '2022-08-25T10:50:00',
                      end: '2022-08-26T12:30:00',
                      extendedProps: {
                        department: 'BioChemistry'
                      },
                      description: 'Lecture'
                    },
                    
                    {
                      title: 'Vikram Press Meet',
                      start: '2022-09-2T10:50:00',
                      end: '2022-09-3T12:30:00',
                      extendedProps: {
                        department: 'BioChemistry'
                      },
                      description: 'Lecture'
                    },
                    // more events ...
                  ],
            });
        
          });
	</script>
	
</html>