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
                    <span class="professional-info-bar active"></span>
                    <span class="professional-info-bar active"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <p class="pad-top-10 text-dark-gray">Project Information (3/3)</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 pad-top-60 pad-bot-20">
                    <h2>Social Network Links</h2>
                  </div>
                </div>
                <form action="#" class="add_project" method="_POST" data-parsley-validate="">
	                <div class="row">
	                  <div class="col-sm-6 pad-bot-30">
                      <label class="ft-14" for="gmail">Gmail</label>
	                     <input type="email" name="gmail" id="gmail" class="form-control big_box pad-15 h-auto border-white" placeholder="" required />
	                  </div>
                    <div class="col-sm-6 pad-bot-30">
                      <label class="ft-14" for="facebook">Facebook</label>
                       <input type="text" name="facebook" id="facebook" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                    </div>
                    <div class="col-sm-6 pad-bot-30">
                      <label class="ft-14" for="apple">Apple</label>
                       <input type="text" name="apple" id="apple" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                    </div>
                    <div class="col-sm-6 pad-bot-30">
                      <label class="ft-14" for="instagram">Instagram</label>
                       <input type="text" name="instagram" id="instagram" class="form-control big_box pad-15 h-auto border-white"  placeholder="" required />
                    </div>
	                </div>
	                				 
	                <div class="row">
	                  <div class="col-md-12 text-right text-xs-center nextpage_btn">
	                    <button type="submit" class="btn btn-padding-10 btn-select border-radius-30 mar-top-20 mr-0 m-300">Create Project</button>
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