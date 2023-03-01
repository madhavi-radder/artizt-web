<?php include 'includes/top.php';?>

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
                    <span class="professional-info-bar"></span>
                    <span class="professional-info-bar"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <p class="pad-top-10 text-dark-gray">Project Information (1/3)</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 pad-top-60 pad-bot-20">
                    <h2>Project Name</h2>
                  </div>
                </div>
                <form>
	                <div class="row">
	                  <div class="col-md-12 pad-bot-30">
	                    
	                    	<select class="form-control big_box pad-15 h-auto border-white">
		                    	<option value="Movie" selected>Movie</option>
		                    	<option value="Movie" >Movie</option>

		                    </select>	
	                                       
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-md-12 pad-bot-30">
	                    <h2>Banner</h2>
	                  </div>
	                </div>
	                <div class="row">
	                	<div class="col-md-3 col-sm-6">
	                		<div class="form-group">
		  						<div class="file-drop-area p-file-drop-area pad-60">
								  <span class="cover_photo">Cover Photo</span><br />
								  <span class="drag_drop_text">Drag and Drop or
<br /> <span class="color-sandal">"Choose File"</span></span>
								  <input class="file-input" type="file" multiple>
								</div>
		  					</div>
	                	</div>
	                	<div class="col-md-3 col-sm-6">
	                		<div class="form-group">
		  						<div class="file-drop-area p-file-drop-area pad-60">
								  <span class="cover_photo">Cover Photo</span><br />
								  <span class="drag_drop_text">Drag and Drop or
<br /> <span class="color-sandal">"Choose File"</span></span>
								  <input class="file-input" type="file" multiple>
								</div>
		  					</div>
	                	</div>
	                	<div class="col-md-3 col-sm-6">
	                		<div class="form-group">
		  						<div class="file-drop-area p-file-drop-area pad-60">
								  <span class="cover_photo">Cover Photo</span><br />
								  <span class="drag_drop_text">Drag and Drop or
<br /> <span class="color-sandal">"Choose File"</span></span>
								  <input class="file-input" type="file" multiple>
								</div>
		  					</div>
	                	</div>
	                	<div class="col-md-3 col-sm-6">
	                		<div class="form-group">
		  						<div class="file-drop-area p-file-drop-area pad-60">
								  <span class="cover_photo">Cover Photo</span><br />
								  <span class="drag_drop_text">Drag and Drop or
<br /> <span class="color-sandal">"Choose File"</span></span>
								  <input class="file-input" type="file" multiple>
								</div>
		  					</div>
	                	</div>
	                </div>				 
	                <div class="row">
	                  <div class="col-md-12 text-right text-xs-center nextpage_btn">
	                    <a href="add-project-step2.html" class="btn btn-select btn-padding-10 border-radius-30 mar-top-20 mr-0 m-300">Next</a>
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


    <script type="text/javascript">
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
    </script>    
</html>