<!DOCTYPE html>
<html>
        <title>Okiri-Video Sharing Potal</title>
    <head>
         <!-- css links-->
     
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bastrap.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">        
        <link rel="stylesheet" href="../css/style.css">
         <!---js linking-->
      <script src="../js/myown.js"></script>
      <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/jqBootstrapValidation.js"></script>
    </head>
    <body>
         <!---navigation area-->
        <?php include "../includes/nav.php"; ?>
        <!---navigation and header area-->
        <?php include "includes/nav-header.php" ?>
        <!---navigation and header area end-->
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-xs-12 col-sm-12 col-md-2'>
                    <div class='page-header' style='margin-top:0;'>
                        <h4><strong>Categories</strong></h4>
                    </div>
                    <div class='vid-sidebar-list'>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-home'></span> Home</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-medkit'></span> Health</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-flask'></span> Science</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-windows'></span> Software</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-cogs'></span> Technology</a>
                    </div>
                    <div class='page-header' style='margin-top:10px;'>
                        <h4><strong>My Account</strong></h4>
                    </div>
                    <div class='vid-sidebar-list'>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-desktop'></span> My channel</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-list-alt'></span> My Playlists</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-eye'></span> Viewed Videos</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-thumbs-up'></span> My Liked Videos</a>
                        <a href='#' class='vid-sidebar-list-item'><span class='fa fa-plus-square'></span> Subscription Channel</a>
                    </div>
                    <div class="dropdown page-header" style='margin-top:10px'>
                        <a class="dropdown-toggle" type="option" id="menu1" data-toggle="dropdown"><strong>SUBSCRIPTIONS</strong>
                        (0)<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
                        </ul>
                    </div>
                </div><!---col 2 end-->
                <div class='col-xs-12 col-sm-12 col-md-10'>
                    <div class='row'>
                    <div class='page-header' style='margin-top:0;'><h4><strong>Featured Videos</strong></h4></div>
                        <div class='col-xs-12 col-sm-12 col-md-6'>
                        <div class='feature-video'>
                            <a href='player.php' class='play-button'></a>
                            <img src='../images/video-sharing-image/sport2.jpg' class='img-responsive'>
                            <div class='video-details'>
                                <h3>Best runner up</h3>
                                <div class='laba'><a href='#' class='xtech'><strong>By:|xSport</strong></a></div>
                            </div>
                        </div>
                        </div><!---col 6 first end-->
                        <div class='col-xs-12 col-sm-12 col-md-6' id='xtx'>
                        <div class='feature-video'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/sport3.jpg' class='img-responsive'>
                            <div class=' video-details'><br>
                                <h3>Best goal of the Year</h3>
                                <a href='' class='xtech'><strong>By:|xTech</strong></a>
                            </div>
                        </div>
                       </div><!---col 6 2nd end-->
                    </div><!---ist row end-->
                <div class='row'>
                    <div class='page-header'>
                        <h4><strong>New Videos</strong></h4>
                    </div>                      <!---page-header end-->
                    <div class='col-md-3'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/tech3.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Css Programming tutorial beginners</h5>
                                <div class='new-video-author'> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>                         <!---col 3 1st end-->
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/food4.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>How to shop vegitables and preparation</h5>
                                <div> By:<strong>XKitchen</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/health3.gif' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>How to Train your tommy</h5>
                                <div> By:<strong>GymxtIz</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/soft3.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                </div><!---row 2nd end-->
                <div class='row'>
                        <div class='page-header'>
                            <h4><strong>Trending Videos</strong> </h4>
                        </div>                      <!---page-header end-->
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/soft2.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/food2.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/tech1.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/soft1.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                </div><!---row 3rd end-->
                <div class='row'>
                        <div class='page-header'>
                            <h4><strong>Programing Videos</strong> </h4>
                        </div>                      <!---page-header end-->
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/tech2.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/soft3.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/soft2.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/soft1.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                </div><!---row programming end-->
                <div class='row'>
                        <div class='page-header'>
                            <h4><strong>Fitness Meal Videos</strong> </h4>
                        </div>                      <!---page-header end-->
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/food1.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/food2.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/health3.gif' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12 col-md-3'id='xtx'>
                        <div class='new-videos'>
                            <a href='#' class='play-button'></a>
                            <img src='../images/video-sharing-image/food4.jpg' class='img-responsive'>
                            <div class='new-video-details'><br>
                                <h5>Tutorial on node js & sass for beginners</h5>
                                <div> By:<strong>XtechInk</strong></div>
                            </div>
                        </div>
                    </div>
                </div><!---row fitness end-->
                </div><!---col 10 end--> 
            </div>
        </div><!---container-fluid end-->
        <!---footer section-->
        <?php
            include "../includes/footer.php";
        ?>
        <!---footer end-->
    </body>
</html>