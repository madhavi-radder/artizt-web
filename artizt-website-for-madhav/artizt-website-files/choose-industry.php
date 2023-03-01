<?php include 'includes/top.php';?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<style>
   .choose-art .select2{
        max-width: calc(100% - 110px);
        min-width: calc(100% - 110px);
   }
   
   .choose-art .searchsubmit{
       right: 130px;
   }
   
   .btn-addnew{
       padding:13px 17px;
   }
   
</style>

  </head>
  <body class="home">
  <?php include 'includes/header.php';?>
      <span class="fixed-header-pading"></span>
      <main>
          <div class="container">
            <div class="row">
                <div class="col-md-12 mar-top-70 mar-bot-70">
                  <div class="row">
                    <div class="col-sm-12 processbar">
                      <span class="professional-info-bar active"></span>
                      <span class="professional-info-bar active"></span>
                      <span class="professional-info-bar"></span>
                      <span class="professional-info-bar"></span>
                      <span class="professional-info-bar"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <p class="pad-top-10 text-dark-gray">Professional Information (2/5)</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 pad-top-60 pad-bot-30">
                      <h2>Choose your Industries</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-lg-6 col-md-6 mar-bot-10">
                        <h3>Top Industries</h3>
                    </div>
                    <div class="col-sm-8 col-lg-6 col-md-6 mar-bot-20">
                      <div class="searchbox">
                        <form class="searchform">
                            <div class="row">
                              <div class="col-md-12 choose-art">                                  
                                <!-- <input class="searchfiled" type="text" name="full_name" id="searchtext" placeholder="Search your Industry" required> -->
                                <select class="js-example-basic-multiple searchfiled" name="states[]" multiple="multiple" placeholder="Search your Industry">
                                  <option value="Film Industry">Film Industry</option>
                                  <option value="Television">Television</option>
                                  <option value="Music">Music</option>
                                  <option value="OTT Platform">OTT Platform</option>
                                  <option value="Fashion">Fashion</option>
                                  <option value="Documentary">Documentary</option>
                                  <option value="Advertisement">Advertisement</option>
                                  <option value="Photography">Photography</option>
                                  <option value="Media Print & Digital">Media Print & Digital</option>
                                  <option value="Arts & Culture">Arts & Culture</option>
                                  <option value="Sculpture">Sculpture</option>
                                  <option value="Architecture">Architecture</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Theatre/ Drama">Theatre/ Drama</option>
                                  <option value="Painting">Painting</option>
                                  <option value="Event Management">Event Management</option>
                                  <option value="Graphic Design">Graphic Design</option>
                                </select>
                                <button type="submit" class="searchsubmit"><img src="images/search.png"></button>
                                <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-normal btn-addnew ft-14 pull-right mr-0">Add New </a>
                              </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  
                   <div class="row">
                       <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Film Industry</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Television</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">OTT Platform</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Documentary</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Music</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Fashion</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Advertisement</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Photography</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Media Print & Digital</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Arts & Culture</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Sculpture</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Architecture</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Literature</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Theatre/ Drama</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Painting</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Event Management</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                          <div class="box-defult-2 pad-choose-btn">
                            <p class="mb-0 text-dark text-truncate ft-14">Graphic Design</p>
                            <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
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
                  
                  

                  <div class="row">
                    <div class="col-md-12 text-xs-center nextpage_btn">
                      <a href="#" class="btn btn-padding-10 btn-select border-radius-30 mar-top-50 mr-0 m-300">Select All</a>
                      <a href="add-industry.php" class="btn btn-padding-10 pull-right pull-none btn-select border-radius-30 mar-top-50 mr-0 m-300">Add Industry</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <span class="bottombg"></span>
      </main>

      <?php include 'includes/footer.php';?>
        
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    		  <div class="modal-dialog modal-dialog-centered" role="document">
    		    <div class="modal-content">
    		      <div class="modal-header b-modal-header text-center">
    		        <h5 class="modal-title" id="exampleModalLongTitle">Add New Industries</h5>
    		        <button type="button" class="close modelclose_btn" data-dismiss="modal" aria-label="Close">
    		          <span aria-hidden="true">&times;</span>
    		        </button>
    		      </div>
    		      	<form action="#">
    			      <div class="modal-body">
        		            <div class="row">
            	      			<div class="col-md-12">
            	      				<div class="form-group">
            					    	<label for="photolist">Title:</label>
            					    	<input type="text" class="form-control big_box" id="photolist" aria-describedby="" placeholder="">
            						</div>
            	      			</div>
            	      		</div>
    		  		  </div>
    
    			      <div class="modal-footer">
    			        <button type="submit" class="btn btn-select border-radius-30 pt-2 pb-2">Add New</button>
    			      </div>
    				</form>      
    		    </div>
    		  </div>
    		</div>    
        
  </body>

 <?php include 'includes/script.php';?> 

    <script type="text/javascript">
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

      $(document).ready(function() {
          $('.js-example-basic-multiple').select2({
            placeholder: "Search your Industry",
            //allowClear: true
          });
          /*$('.select2-search__field').on('click', function(){
            // alert("search"); 
          });*/

      });

    </script>  
</html>