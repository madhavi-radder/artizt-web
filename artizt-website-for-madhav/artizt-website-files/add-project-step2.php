
<?php include 'includes/top.php';?>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
     
  </head>
  <body class="home">
     
  <?php include 'includes/header.php';?>
  
   
      <span class="fixed-header-pading"></span>
      <main>
          <div class="container">
            <div class="row">
              <div class="col-md-12 mar-top-70 mar-bot-70">
                <div class="row">
                  <div class="col-sm-12 processbar processbar-30">
                    <span class="professional-info-bar active"></span>
                    <span class="professional-info-bar active"></span>
                    <span class="professional-info-bar"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <p class="pad-top-10 text-dark-gray">Project Information (2/3)</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 pad-top-60 pad-bot-20">
                    <h2>Project Details</h2>
                  </div>
                </div>
                <form action="add-project-step3.html" class="add_project" method="_POST" data-parsley-validate="">
	                <div class="row">
                    <div class="col-sm-6"> 
                      <div class="row">
                        <div class="col-sm-12 pad-bot-30">
                          <label class="ft-14" for="newpoject">Name Project</label>
                           <input type="text" name="newpoject" id="newpoject" class="form-control big_box pad-15 h-auto border-white" placeholder="" required />
                        </div>
                        <div class="col-sm-12 pad-bot-30">
                          <label class="ft-14" for="participated">Participated/ consulted with the Project</label>
                           <input type="text" name="participated" id="participated" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                        </div>

                        <div class="col-sm-6 pad-bot-30">
                          <label class="ft-14" for="narration">Narration/ Plot</label>
                           <input type="text" name="participated" id="narration" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                        </div>
                        <div class="col-sm-6 pad-bot-30">
                          <label class="ft-14" for="createdby">Created By</label>
                          <select class="form-control big_box pad-15 h-auto border-white" id="createdby" name="">
                            <option value="Admin">Admin</option>
                          </select>
                        </div>
                        <div class="col-sm-6 pad-bot-30">
                          <label class="ft-14" for="association">Project Association</label>
                           <input type="text" name="association" id="association" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                        </div>
                        <div class="col-sm-6 pad-bot-30">
                            <label class="ft-14" for="project_team">Project Team</label>
                           <input type="text" name="project_team" id="project_team" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                        </div>
                        <div class="col-sm-6 pad-bot-30">
                            <label class="ft-14" for="favourites">Add to Favourites</label>
                           <input type="text" name="favourites" id="favourites" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                        </div>
                        <div class="col-sm-6 pad-bot-30">
                            <label class="ft-14" for="pitch">Product Pitch</label>
                           <input type="text" name="pitch" id="pitch" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6"> 
                      <div class="row">
                          <div class="col-sm-12 pad-bot-30">
                            <label class="ft-14" for="tagartizs">Tag Artizts</label>
                             <!-- <input type="text" name="tagartizs" id="tagartizs" class="form-control big_box pad-15 h-auto border-white" placeholder="" required /> -->
                             
                                <select id="choices-multiple-remove-button" class="form-control big_box" placeholder="" multiple>
                                  <option value="HTML"><img src="images/recent-followers5.png" /> HTML</option>
                                  <option value="Jquery">Jquery</option>
                                  <option value="CSS">CSS</option>
                                  <option value="Bootstrap 3">Bootstrap 3</option>
                                  <option value="Bootstrap 4">Bootstrap 4</option>
                                  <option value="Java">Java</option>
                                  <option value="Javascript">Javascript</option>
                                  <option value="Angular">Angular</option>
                                  <option value="Python">Python</option>
                                  <option value="Hybris">Hybris</option>
                                  <option value="SQL">SQL</option>
                                  <option value="NOSQL">NOSQL</option>
                                  <option value="NodeJS">NodeJS</option>
                                </select>
                          </div>
                          <div class="col-sm-12 pad-bot-30">
                            <label class="ft-14" for="tagline">Tag Line/ One Liner</label>
                             <input type="text" name="tagline" id="tagline" class="form-control big_box pad-15 h-auto border-white" placeholder="" required />
                          </div>
                          <div class="col-sm-6 pad-bot-30">
                            <label class="ft-14" for="createdon">Created on</label>
                             <input type="text" name="createdon" id="createdon" class="form-control big_box pad-15 h-auto border-white" placeholder="" data-date-format="dd/mm/yyyy"  required  />
                          </div>
                          <div class="col-sm-6 pad-bot-30">
                            <label class="ft-14" for="creditartizt">Credit Artizt</label>
                             <input type="text" name="creditartizt" id="creditartizt" class="form-control big_box pad-15 h-auto border-white" placeholder=""  required  />
                          </div>

                          <div class="col-sm-12 pad-bot-30">
                            <label class="ft-14" for="tagproject">Tag Project</label>
                             <input type="text" name="tagproject" id="tagproject" class="form-control big_box pad-15 h-auto border-white" placeholder=""  required  />
                          </div>
                          <div class="col-sm-12 pad-bot-30">
                            <label class="ft-14" for="awards">Awards and achievements</label>
                             <input type="text" name="awards" id="awards" class="form-control big_box pad-15 h-auto border-white" placeholder=""  required  />
                          </div>
                      </div>
                    </div>
                  </div>



                  
	                				 
	                <div class="row">
	                  <div class="col-md-12 text-right text-xs-center nextpage_btn">
	                    <button type="submit" class="btn btn-padding-10 btn-select border-radius-30 mar-top-20 mr-0 m-300">Next</button>
	                  </div>
	                </div>
                </form>
              </div>
            </div>
          </div>



          <span class="bottombg"></span>
      </main>

      <?php include 'includes/footer.php';?> 

  </body>

   
  <?php include 'includes/script.php';?>

  
  <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
  
    <script type="text/javascript">
      $(document).ready(function(){
           var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
              removeItemButton: true,
              maxItemCount:5,
              searchResultLimit:5,
              renderChoiceLimit:5
            }); 
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

      $("#createdon").datepicker({
            format: 'dd-mm-yyyy',
            startDate: '+0d',
            autoclose: true,
            //endDate: '+0d' // there's no convenient "right now" notation yet
        }); 
    </script>    
</html>