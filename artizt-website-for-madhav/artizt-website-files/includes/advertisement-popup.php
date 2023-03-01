<div class="modal fade" id="addadvertisements" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    	  <div class="modal-dialog modal-lg" role="document">
    	    <div class="modal-content">
    	      <div class="modal-header text-center">
    	        <h5 class="modal-title" id="exampleModalLongTitle">Create New Add</h5>
    	        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
    	          <span aria-hidden="true">&times;</span>
    	        </button>
    	      </div>
    	      <div class="modal-body p-0">
    	       	<ul class="nav nav-pills mb-0 d-flex justify-content-between" id="pills-tab" role="tablist">
    			  <li class="nav-item">
    			    <a class="nav-link active" id="adddtails-tab" data-toggle="pill" href="#adddtails" role="tab" aria-controls="add-dtails" aria-selected="true">Add Details</a>
    			  </li>
    			  <li class="nav-item">
    			    <a class="nav-link" id="adddisplay-tab" data-toggle="pill" href="#adddisplay" role="tab" aria-controls="add-display" aria-selected="false">Add Display</a>
    			  </li>
    			  <li class="nav-item">
    			    <a class="nav-link" id="budget-tab" data-toggle="pill" href="#budget" role="tab" aria-controls="pills-contact" aria-selected="false">Budget</a>
    			  </li>
    			  
    			  <li class="nav-item">
    			    <a class="nav-link" id="payper-click-tab" data-toggle="pill" href="#payper-click" role="tab" aria-controls="pills-contact" aria-selected="false">Payper Click</a>
    			  </li>
    			  <li class="nav-item">
    			    <a class="nav-link" id="sponsorship-tab" data-toggle="pill" href="#sponsorship" role="tab" aria-controls="sponsorship" aria-selected="false">Sponsorship</a>
    			  </li>
    			  <li class="nav-item">
    			    <a class="nav-link" id="payment-tab" data-toggle="pill" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
    			  </li>
    			</ul>
    			<div class="tab-content pad-20" id="pills-tabContent">
    			  <div class="tab-pane fade show others-profile-popup active" id="adddtails" role="tabpanel" aria-labelledby="adddtails-tab">
    			  		<div class="popup_form">
    			  			<div class="row">
    			  				<div class="col-md-12">
    			  					<div class="form-group">
    							    	<label for="adname">Campaign Name:</label>
    							    	<input type="text" class="form-control big_box" id="adname" aria-describedby="emailHelp" placeholder="">						   
    								</div>
    			  				</div>
    			  			</div>
    
    			  			<div class="row">
    			  				<div class="col-md-12">
    			  					<div class="form-group">
    							    	<label for="exampleInputEmail1">Campaign Type:</label>
    							    	<select class="form-control big_box" id="">
    							    		<option value="">Select Ads Type</option>
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
    
    			  			<div class="row">
    			  				<div class="col-md-12">
    			  					<div class="form-group">
    							    	<label for="exampleInputEmail1">Target Audience:</label>
    							    	<select class="form-control big_box" id="">
    							    		<option value="">Select Audience</option>
    							    		<option value="Acters">Acters</option>
    							    		<option value="Singer">Singer</option>
    							    		<option value="Musician">Musician</option>
    							    		<option value="Dancer">Dancer</option>
    							    		<option value="Directors">Directors</option>
    							    	</select>					   
    								</div>
    			  				</div>
    			  			</div>
    
    			  			<div class="row">
    			  				<div class="col-md-12">
    			  					<div class="form-group">
    							    	<label for="adspages">Show to Ads pages:</label>
    							    	<select class="form-control big_box" id="adspages" name="adspages[]" multiple="multiple" placeholder="Search your Industry">
    							    		<option value="">Select Pages</option>
    							    		<option value="Academy">Academy</option>
    							    		<option value="Activities">Activities</option>
    							    		<option value="Club">Club</option>
    							    		<option value="Events">Events</option>
    							    		<option value="Fezt">Fezt</option>
    							    		<option value="FNC">FNC</option>
    							    		<option value="Media">Media</option>
    							    		<option value="Store">Store</option>
    							    		<option value="Villa">Villa</option>
    							    		<option value="Workspace">Workspace</option>
    							    		<option value="Marketing">Marketing</option>
    							    		<option value="Bills Payments">Bills Payments</option>
    							    		<option value="Advertisements">Advertisements</option>
    							    	</select>					   
    								</div>
    			  				</div>
    			  			</div>
    			  			<div class="row">
    			  				<div class="col-md-12">
    			  					<div class="form-group">
    							    	<label for="adname">Campaign Durations:</label>
    							    	<div class="input-group input-daterange d-block">
    							    		<div class="row">
    							    			<div class="col-6">
    							    				<input type="text" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="Start Date">
    							    			</div>
    							    			<div class="col-6">
    							    				<input type="text" class="form-control big_box" value="" data-date-format="dd/mm/yyyy" placeholder="End Date">
    							    			</div>
    							    		</div>
    									    <!-- <div class="input-group-addon pt-3 pr-2 pb-2"></div> -->
    									    
    									    <!-- <div class="input-group-addon pt-3 p-2">check out</div> -->
    									    
    									</div>						   
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
    			  <div class="tab-pane others-profile-popup" id="adddisplay" role="tabpanel" aria-labelledby="adddisplay-tab">
    			  	<div class="popup_form">
    			  		<div class="row">
    		  				<div class="col-md-12">
    		  					<div class="form-group">
    						    	<label for="exampleInputEmail1">Banner Position:</label>
    						    	<select class="form-control big_box" id="">
    						    		<option value="">Select Position</option>
    						    		<option value="Acters">Right Side</option>
    						    		<option value="Singer">Right Side Top</option>
    						    		<option value="Musician">Right Side bottom</option>
    						    		<option value="Dancer">Right Side Middle</option>
    						    	</select>					   
    							</div>
    		  				</div>
    		  			</div>
    			  		<div class="row">
    		  				<div class="col-md-12">
    		  					<div class="form-group">
    		  						<label for="">Image:</label>
    		  						<div class="file-drop-area">
    								  <span class="choose-file-button"><i class="fa fa-cloud-upload" aria-hidden="true"></i><br />Drag your files here</span><br />
    								  <span class="file-message">or<br /> <span class="color-blue">Browse files</span></span>
    								  <input class="file-input" type="file" multiple>
    								</div>
    		  					</div>
    		  				</div>
    		  			</div>
    		  			<div class="row">
    		  				<div class="col-md-12">
    		  					<div class="form-group">
    						    	<label for="link">Link Url:</label>
    						    	<input type="url" class="form-control big_box" id="link" aria-describedby="" placeholder="">						   
    							</div>
    		  				</div>
    		  			</div>
    			  	</div>
    			  </div>
    			  <div class="tab-pane others-profile-popup" id="budget" role="tabpanel" aria-labelledby="budget-tab">
    			  	<div class="row">
    			  		<div class="col-md-12">
    			  			<section>
    				            <div class="container">
    				                <div class="row justify-content-center">
    				                    <div class="col-12 col-md-10 text-center">
    				                        <div class="heading pb-4">
    				                            <h2>Choose Your Plan</h2>
    				                            <h5 class="font-weight-normal lis-light">Discover &amp; connect with top-rated local businesses</h5>
    				                        </div>
    				                    </div>
    				                </div>
    				                <div class="row">
    				                    <div class="col-12 col-md-12 col-lg-4 wow fadeInUp mb-5 mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;">
    				                        <div class="price-table">
    				                            <div class="price-header lis-bg-light lis-rounded-top py-4 border lis-brd-light">
    				                                <h5 class="text-uppercase lis-latter-spacing-2">Basic</h5>
    				                                <h1 class="display-4 lis-font-weight-500"><sup>$</sup> 00 <small>/mo</small></h1>
    				                                <p class="mb-0">Free User Membership</p>
    				                                <a href="#" class="btn btn-normal btn-select border-radius-30 mt-2" data-abc="true">Select</a>
    				                            </div>
    				                            <!-- <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
    				                                <ul class="list-unstyled lis-line-height-3">
    				                                    <li>One Time Fee</li>
    				                                    <li>One Listing</li>
    				                                    <li>90 Days Availability</li>
    				                                    <li>Featured In Search Results</li>
    				                                    <li>24/7 Support</li>
    				                                </ul>
    				                                <a href="#" class="btn btn-normal btn-select border-radius-30" data-abc="true"><i class="fa fa-shopping-cart pl-2"></i>Order Now</a>
    				                            </div> -->
    				                        </div>
    				                    </div>
    				                    <div class="col-12 col-md-12 col-lg-4 wow fadeInUp mb-5 mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;">
    				                        <div class="price-table active">
    				                            <div class="price-header lis-bg-primary py-4 text-white lis-rounded-top">
    				                                <h5 class="text-uppercase lis-latter-spacing-2 text-white">Premium</h5>
    				                                <h1 class="display-4 lis-font-weight-500 text-white"><sup>$</sup> 69 <small>/mo</small></h1>
    				                                <p class="mb-0 text-white">Permium User Membership</p>
    				                                <a href="#" class="btn btn-normal btn-hover-none border-radius-30 mt-2" data-abc="true">Select</a>
    				                            </div>
    				                            <!-- <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
    				                                <ul class="list-unstyled lis-line-height-3">
    				                                    <li>One Time Fee</li>
    				                                    <li>One Listing</li>
    				                                    <li>90 Days Availability</li>
    				                                    <li>Featured In Search Results</li>
    				                                    <li>24/7 Support</li>
    				                                </ul>
    				                                <a href="#" class="btn btn-select border-radius-30" data-abc="true"><i class="fa fa-shopping-cart pl-2"></i>Order Now</a>
    				                            </div> -->
    				                        </div>
    				                    </div>
    				                    <div class="col-12 col-md-12 col-lg-4 wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">
    				                        <div class="price-table">
    				                            <div class="price-header lis-bg-light lis-rounded-top py-4 border lis-brd-light">
    				                                <h5 class="text-uppercase lis-latter-spacing-2">business</h5>
    				                                <h1 class="display-4 lis-font-weight-500"><sup>$</sup> 99 <small>/mo</small></h1>
    				                                <p class="mb-0">Basic User Membership</p>
    				                                <a href="#" class="btn btn-normal btn-select border-radius-30 mt-2" data-abc="true">Select</a>
    				                            </div>
    				                            <!-- <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
    				                                <ul class="list-unstyled lis-line-height-3">
    				                                    <li>One Time Fee</li>
    				                                    <li>One Listing</li>
    				                                    <li>90 Days Availability</li>
    				                                    <li>Featured In Search Results</li>
    				                                    <li>24/7 Support</li>
    				                                </ul>
    				                                <a href="#" class="btn btn-normal btn-select border-radius-30" data-abc="true"><i class="fa fa-shopping-cart pl-2"></i>Order Now</a>
    				                            </div> -->
    				                        </div>
    				                    </div>
    				                </div>
    
    				            </div>
    				        </section>
    			  		</div>
    			  	</div>
    			  </div>
    			  
    			  <div class="tab-pane others-profile-popup" id="payper-click" role="tabpanel" aria-labelledby="payper-click-tab">
    			  	<div class="row">
    	  				<div class="col-md-12">
    	  					<div class="form-group">
    					    	<label for="payper-click">Paypar Click (&#8377;):</label>
    					    	<input type="text" class="form-control big_box" id="payper-click" aria-describedby="emailHelp" placeholder="">						   
    						</div>
    	  				</div>
    	  			</div>
    			  </div>
    			  <div class="tab-pane others-profile-popup" id="sponsorship" role="tabpanel" aria-labelledby="payper-click-tab">
    			  	
    			  </div>
    
    			  <div class="tab-pane others-profile-popup" id="payment" role="tabpanel" aria-labelledby="payment-tab">
    
    			  	<div class="row">
    			        <div class="col-lg-12 col-sm-12 payment-table">
    			            <div class="card">
    			                <div class="card-header bg-white border-radius-10">
    			                    <div class="pt-3 pl-2 pr-2 pb-1">
    			                        <!-- Credit card form tabs -->
    			                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
    			                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fa fa-credit-card mr-2"></i> Credit Card </a> </li>
    			                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fa fa-paypal mr-2"></i> Paypal </a> </li>
    			                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fa fa-mobile ft-16 mr-2"></i> Net Banking </a> </li>
    			                        </ul>
    			                    </div> <!-- End -->
    			                    <!-- Credit card form content -->
    			                    <div class="tab-content">
    			                        <!-- credit card info-->
    			                        <div id="credit-card" class="tab-pane fade show active pt-2">
    			                            <form role="form" onsubmit="event.preventDefault()">
    			                                <div class="form-group"> <label for="username">
    			                                        <h6>Card Owner</h6>
    			                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
    			                                <div class="form-group"> <label for="cardNumber">
    			                                        <h6>Card number</h6>
    			                                    </label>
    			                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
    			                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fa fa-cc-visa mx-1"></i> <i class="fa fa-cc-mastercard mx-1"></i> <i class="fa fa-cc-amex mx-1"></i> </span> </div>
    			                                    </div>
    			                                </div>
    			                                <div class="row">
    			                                    <div class="col-sm-8">
    			                                        <div class="form-group"> <label><span class="hidden-xs">
    			                                                    <h6>Expiration Date</h6>
    			                                                </span></label>
    			                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
    			                                        </div>
    			                                    </div>
    			                                    <div class="col-sm-4">
    			                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
    			                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
    			                                            </label> <input type="text" required class="form-control"> </div>
    			                                    </div>
    			                                </div>
    			                                <div class="card-footer bg-none"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
    			                            </form>
    			                        </div>
    			                    </div> <!-- End -->
    			                    <!-- Paypal info -->
    			                    <div id="paypal" class="tab-pane fade pt-2">
    			                        <h6 class="pb-2">Select your paypal account type</h6>
    			                        <div class="form-group "> <label class="radio-inline"> <input class="optradio_btn" type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline ml-3"> <input class="optradio_btn" type="radio" name="optradio" class="ml-5"> International </label></div>
    			                        <p> <button type="button" class="btn btn-primary "><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button> </p>
    			                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
    			                    </div> <!-- End -->
    			                    <!-- bank transfer info -->
    			                    <div id="net-banking" class="tab-pane fade pt-2">
    			                        <div class="form-group "> <label for="Select Your Bank">
    			                                <h6>Select your Bank</h6>
    			                            </label> <select class="form-control" id="ccmonth">
    			                                <option value="" selected disabled>--Please select your Bank--</option>
    			                                <option>Bank 1</option>
    			                                <option>Bank 2</option>
    			                                <option>Bank 3</option>
    			                                <option>Bank 4</option>
    			                                <option>Bank 5</option>
    			                                <option>Bank 6</option>
    			                                <option>Bank 7</option>
    			                                <option>Bank 8</option>
    			                                <option>Bank 9</option>
    			                                <option>Bank 10</option>
    			                            </select> </div>
    			                        <div class="form-group">
    			                            <p> <button type="button" class="btn btn-primary "><i class="fa fa-mobile ft-16 mr-2"></i> Proceed Payment</button> </p>
    			                        </div>
    			                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
    			                    </div> <!-- End -->
    			                    <!-- End -->
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