<?php include 'includes/top.php';?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                          <span class="professional-info-bar"></span>
                          <span class="professional-info-bar"></span>
                          <span class="professional-info-bar"></span>
                          <span class="professional-info-bar"></span>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <p class="pad-top-10 text-dark-gray">Professional Information (1/5)</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 pad-top-60 pad-bot-30">
                      <h2>Select Artz / Artizt</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-lg-6 col-md-6 mar-bot-10">
                        <h3>Top Artz / Artizt</h3>
                    </div>
                    <div class="col-sm-8 col-lg-6 col-md-6 mar-bot-20">
                      <div class="searchbox">
                        <form class="searchform">
                            <div class="row">
                              <div class="col-sm-12 col-12 choose-art">                                  
                                <!-- <input class="searchfiled" type="text" name="full_name" id="searchtext" placeholder="Search your Industry" required> -->
                                <select class="js-example-basic-multiple searchfiled" name="states[]" multiple="multiple" placeholder="Search your Industry">
                                  <option value="Acting">Acting</option>
                                  <option value="Singing">Singing</option>
                                  <option value="Music">Music</option>
                                  <option value="Dance">Dance</option>
                                  <option value="Painting">Painting</option>
                                  <option value="Wring">Wring</option>
                                  <option value="Film Making">Film Making</option>
                                  <option value="Literature">Literature</option>
                                  <option value="Architecture">Architecture</option>
                                  <option value="Direction">Direction</option>
                                  <option value="Script Writing">Script Writing</option>
                                  <option value="Cinematography">Cinematography</option>
                                  <option value="Choreography">Choreography</option>
                                  <option value="Production Executive">Production Executive</option>
                                  <option value="Casting Director">Casting Director</option>
                                  <option value="Dubbing Artist">Dubbing Artist</option>
                                  <option value="Makeup Artist">Makeup Artist</option>
                                  <option value="Costume Designing">Costume Designing</option>
                                  <option value="Publicity Designing">Publicity Designing</option>
                                  <option value="Audiography">Audiography</option>
                                  <option value="Outdoor Lightmen">Outdoor Lightmen</option>
                                  <option value="Studio Workers">Studio Workers</option>
                                  <option value="Production Assistance">Production Assistance</option>
                                  <option value="Cinema Drivers">Cinema Drivers</option>
                                  <option value="Junior Artist Agent">Junior Artist Agent</option>
                                  <option value="Technical unit">Technical unit</option>
                                  <option value="Production Women">Production Women</option>
                                  <option value="Junior Artist">Junior Artist</option>
                                  <option value="Graphic design">Graphic design</option>
                                  <option value="Storyboard">Storyboard</option>
                                  <option value="Editing">Editing</option>
                                  <option value="Lyricist">Lyricist</option>
                                  <option value="Stunt">Stunt</option>
                                  <option value="Art Direction">Art Direction</option>
                                  <option value="Content writers">Content writers</option>
                                  <option value="Poet">Poet</option>
                                  <option value="Fashion Modelling">Fashion Modelling</option>
                                  <option value="Photography">Photography</option>
                                  <option value="Cartoonist">Cartoonist</option>
                                  <option value="DJ">DJ</option>
                                  <option value="RJ">RJ</option>
                                  <option value="Illustration">Illustration</option>
                                  <option value="Sculpture">Sculpture</option>
                                  <option value="Miniature">Miniature</option>
                                  <option value="Standup comedian">Standup comedian</option>
                                  <option value="Youtubers">Youtubers</option>
                                  <option value="Puppetry">Puppetry</option>
                                  <option value="Tattoo artizt">Tattoo artizt</option>
                                  <option value="Magician">Magician</option>
                                  <option value="Bandwala">Bandwala</option>
                                  <option value="Card art">Card art</option>
                                  <option value="Rangoli Art">Rangoli Art</option>
                                  <option value="Street Artists">Street Artists</option>
                                  <option value="Mimicry Artist">Mimicry Artist</option>
                                  <option value="Stone Art">Stone Art</option>
                                  <option value="Micro Art">Micro Art</option>
                                  <option value="Sand Art">Sand Art</option>
                                  <option value="Gymnastic">Gymnastic</option>
                                </select>
                                <button type="submit" class="searchsubmit"><img src="images/search.png"></button>
                                <!--<a href="#" data-toggle="modal" data-target="#addnew" class="pull-right ft-14 pt-2 pr-2">Add New </a>-->
                                <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-normal btn-addnew ft-14 pull-right mr-0">Add New </a>
                              </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  
                  <!--<div class="row">
                      <div class="col-md-12">
                          <div class="btn choose-white choose-white-select border-radius-30">
                              Acting 
                          </div>
                          <div class="btn choose-white border-radius-30">
                              Singing 
                              
                              <div class="setprimary text-left">
                                <div class="optprimary">Set as primary</div>
                              </div>
                          </div>
                      </div>
                  </div>-->
                  
                  
                  <div class="row">                    
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Acting</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Singing</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Dance</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-truncate text-dark ft-14">Painting</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Wring</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Fashion Modelling</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Film Making</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Direction</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Script Writing</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Cinematography</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Choreography</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Lyricist</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Production Executive</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Casting Director</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Editing</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Dubbing Artist</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Costume Designing</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Publicity Designing</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Audiography</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Outdoor Lightmen</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Poet</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Production Assistance</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    
                    
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Storyboard</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Junior Artist Agent</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Makeup Artist</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Junior Artist</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-truncate text-dark ft-14">Graphic design</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Stunt</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Art Direction</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Content writers</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Cartoonist</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">DJ</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">RJ</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Illustration</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Miniature</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Standup comedian</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Youtubers</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Puppetry</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Tattoo artizt</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Magician</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Bandwala</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Card art</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Rangoli Art</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Street Artists</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Mimicry Artist</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Stone Art</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Micro Art</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Sand Art</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Gymnastic</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 pr-2 pr-xs-auto mar-top-10 mar-bot-10" >
                      <div class="box-defult-2 pad-choose-btn">
                        <p class="mb-0 text-dark text-truncate ft-14">Technical unit</p>
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
                        <!--<img src="images/director.svg" width="50" height="50" class="img-fluid mar-bot-10">-->
                        
                      </div>
                    </div>
                    
                    
                </div>





                  <div class="row">
                    
                    <div class="col-md-12 text-xs-center nextpage_btn">
                      <a href="#" class="btn btn-padding-10 btn-select border-radius-30 mar-top-50 mr-0 m-300">Select All</a>
                      <a href="choose-industry.php" class="btn btn-padding-10 pull-right pull-none btn-select border-radius-30 mar-top-50 mr-0 m-300">Artz / Artizt</a>
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
		        <h5 class="modal-title" id="exampleModalLongTitle">Add New Artz</h5>
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

 <script  src="js/jquery.lazy.js"></script>
    
    <script type="text/javascript">
    
        $(function() {
            $('.lazy').lazy();
        });
        
        
        
        $( ".choose-white" ).click(function() {
          $( this ).toggleClass( "choose-white-select" );
        });
    
    
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
      
      $(".box-defult-2").on('click', function(){  
          //alert("test");
          // $(this).toggleClass("box-defult-2-select");
          //$(this).closest(".setprimary").toggleClass('selected setpry', this.checked);   
        /*if($(this).prop("checked") == true){
              $(this).closest(".setprimary").toggleClass('selected setpry', this.checked);
          }
          else if($(this).prop("checked") == false){
              $(this).closest(".setprimary").toggleClass('selected', this.checked);
              $(this).closest(".setprimary").addClass('reset', this.checked);
              $(".reset .optprimary").html("Set as primary");
        }*/
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
            alert("search"); 
          });*/
          
          
          
          
        
          

      });

    </script>  
</html>