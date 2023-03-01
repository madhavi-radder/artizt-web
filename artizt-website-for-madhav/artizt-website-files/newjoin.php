<?php include 'includes/top.php';?>

  </head>
  <body class="home">

  <?php include 'includes/header.php';?>

 <span class="fixed-header-pading"></span>
      <main>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="bg-white pad-60 pad-sm-30 border-radius-25 mar-bot-70 mar-top-70">
                  <div class="row">
                    <div class="col-md-12 text-center mar-bot-20">
                        <h2>Join as a Artizt or Business </h2>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3 col-sm-6 sm-mar-bot-30">
                        <div class="box-defult box-defult1 newjoinbox pad-20 text-center">
                          <div class="radios">
                            <div>
                              <input id="business" name=button type="radio" class="open">
                              <label for="business" class="overlay">
                               <div class="circle"></div> 
                              </label>
                              </input>
                            </div>
                          </div>
                            <img src="images/busines-owner.png" class="img-fluid mar-bot-10">
                            <p class="mb-0">Business / Organization Association / Institution</p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 sm-mar-bot-30">
                        <div class="box-defult box-defult1 newjoinbox pad-20 text-center">
                            <div class="radios">
                              <div>
                                <input id="artizt" name=button type="radio" class="open">
                                <label for="artizt" class="overlay">
                                 <div class="circle"></div> 
                                </label>
                                </input>
                              </div>
                            </div>
                            <img src="images/record.png" class="img-fluid mar-bot-10">
                            <p class="mb-0">I’m an Artizt</p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 sm-mar-bot-30">
                        <div class="box-defult box-defult1 newjoinbox pad-20 text-center">
                          <div class="radios">
                              <div>
                                <input id="buddingstar" name=button type="radio" class="open">
                                <label for="buddingstar" class="overlay">
                                 <div class="circle"></div> 
                                </label>
                                </input>
                              </div>
                            </div>
                            <img src="images/buddingact.png" class="img-fluid mar-bot-10">
                            <p class="mb-0">Budding Star <18 Parent / Guide</p>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6 sm-mar-bot-30">
                        <div class="box-defult box-defult1 newjoinbox pad-20 text-center">
                          <div class="radios">
                              <div>
                                <input id="follower" name=button type="radio" class="open">
                                <label for="follower" class="overlay">
                                 <div class="circle"></div> 
                                </label>
                                </input>
                              </div>
                            </div>
                            <img src="images/fane_following.png" class="img-fluid mar-bot-10">
                            <p class="mb-0">Fans & Followers</p>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center mar-top-30">
                      <a href="create-account.php" id="applybtn" class="btn btn-padding-10 btn-select border-radius-30 mar-bot-20-30" style="display: none;">Apply as a Artizt</a>
                      <p class="ft-14 text-black pad-top-15 mb-0">Already have an account? <a href="login.php">Log in</a></p>
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
  
</html>