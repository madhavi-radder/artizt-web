
<?php include 'includes/top.php';?>

<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  
  </head>
  <body class="home">
      
  <?php include 'includes/header.php';?>


      <span class="fixed-header-pading"></span>
      <main>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="border-radius-25 mar-bot-70 mar-top-70">
                  <div class="row justify-content-center">
                    <div class="col-md-8 text-center mar-bot-20">
                        <h2 class="pad-bot-15">Create your Artizt account <br class="d-sm-none d-md-block" />to Connect Globally</h2>
                        <p class="ft-20 text-black">A Platform for Search, Connect, Network, Collaborate, & lot more</p>
                    </div>
                  </div>
                  <div class="row justify-content-center">                      
                      <div class="col-lg-8 col-md-10 sm-mar-bot-30">
                        <form class="" action="login.php" d="create-account" data-parsley-validate="">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-data">
                                  <input class="input100" type="text" name="full_name" id="full_name" required=""> 
                                  <span class="focus-input100" data-placeholder="Your Full Name"></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-data">
                                  <input class="input100" type="email" name="emailid" id="emailid" required> 
                                  <span class="focus-input100" data-placeholder="Your Email"></span>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-data">
                                  <input class="input100" type="password" name="password" id="password" data-parsley-minlength="6" data-parsley-special="1" required> 
                                  <span class="focus-input100" data-placeholder="Create a password"></span>
                                  <i toggle="#password" class="la la-fw la-eye toggle-password" id="password_i"></i>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-data">
                                  <input class="input100" type="password" name="passwordc" id="passwordc" data-parsley-minlength="6" data-parsley-special="1" data-parsley-equalto="#password" required> 
                                  <span class="focus-input100" data-placeholder="Confirm Password"></span>
                                  <i toggle="#passwordc" class="la la-fw la-eye toggle-password" id="password_c"></i>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 or-signup text-center pad-bot-20">
                                <h4>Or sign up with</h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6 glogin">
                              <a href="#" class="mar-bot-30"><img src="images/googleg.svg" width="16" height="16" /> Continue with Google</a>
                            </div>
                            <div class="col-sm-6 fblogin">
                              <a href="#" class="mar-bot-30 xs-mar-bot-40"><img src="images/fbicon.png" width="16" height="16" /> Continue with Facebook</a>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <!-- <a href="#" class="btn btn-normal btn-select border-radius-30 mar-bot-20-30">Create account</a> -->
                              <input type="submit" name="" class="btn btn-padding-10 btn-select border-radius-30 mar-bot-20-30" value="Create account"><br />
                              <p class="ft-14 text-black pad-top-15 mb-0">Already have an account? <a href="login.php">Log in</a></p>
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