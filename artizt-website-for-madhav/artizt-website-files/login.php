 <?php include 'includes/top.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 
  </head>
  <body class="home">
  
  <?php include 'includes/header.php';?>

      <span class="fixed-header-pading"></span>
      <main>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="border-radius-25 mar-bot-50 mar-top-50">
                  <div class="row justify-content-center">
                    <div class="col-md-8 text-center mar-bot-20">
                        <h2 class="pad-bot-15">Login your Artizt account<br class="d-sm-none d-md-block" />to Connect Globally</h2>
                        <p class="ft-20 text-black">Ample Opportunities for Artizt</p>
                    </div>
                  </div>
                  <div class="row justify-content-center">                      
                      <div class="col-lg-8 col-md-10 sm-mar-bot-30">
                        <form class="" action="choose-art.php" d="create-account" data-parsley-validate="">                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-data">
                                  <input class="input100" type="email" name="full_name" id="full_name" required> 
                                  <span class="focus-input100" data-placeholder="Your Email"></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-data">
                                  <input class="input100" type="password" name="password" id="password" required> 
                                  <span class="focus-input100" data-placeholder="Create a password"></span>
                                  <i toggle="#password" class="la la-fw la-eye toggle-password" id="password_i"></i>
                              </div>
                            </div>
                          </div>                         

                          <div class="row">
                            <div class="col-md-12 or-signup text-center pad-bot-20">
                                <h4>Or Login up with</h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6 glogin text-center">
                              <a href="#" class="mar-bot-30"><img src="images/googleg.svg" width="16" height="16" /> Continue with Google</a>
                            </div>
                            <div class="col-sm-6 fblogin text-center">
                              <a href="#" class="mar-bot-30 xs-mar-bot-40"><img src="images/fbicon.png" width="16" height="16" /> Continue with Facebook</a>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <!-- <a href="#" class="btn btn-normal btn-select border-radius-30 mar-bot-20-30">Create account</a> -->
                              <input type="submit" name="" class="btn btn-padding-10 btn-select border-radius-30 mar-bot-20-30" value="Login"><br />
                              <p class="ft-14 text-black pad-top-15 mb-0">You have new on artizt network <a href="create-account.php">Sign Up</a></p>
                            </div>
                          </div>
                        </form>
                      </div>                      
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <span class="bottombg"></span>
      </main>

      <?php include 'includes/footer.php';?>

  </body>

  
  <?php include 'includes/script.php';?> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    

      
</html>