<!--side bar starts here-->
<div class="col-md-4">
            <div class='row'>
            <div class="page-header">
              <h1>Latest Post</h1>
            </div>
            <div class="custom-sidebar-list">
            <?php
                 $side_sql = "SELECT * FROM blog_info ORDER BY blog_id DESC LIMIT 6";
                 $side_run = mysqli_query($conn, $side_sql);
                 while ($side_rows = mysqli_fetch_assoc($side_run) ){ 
                  $side_blog_title = ucwords($side_rows['blog_title']);
                   ?>
                 <a href="post.php?post_id=<?php echo $side_rows['blog_id'];?>" class="custom-sidebar-list-item"><?php echo $side_blog_title ?></a>
            <?php  }
          ?>
            </div>
          </div>
             <!--weekly post-->
             <div class='row'>
            <div class="page-header">
              <h2>Weekly Post</h2>
            </div>
            <div class="day-post">
              <h3>Tech Advance</h3>
              <div class="meta"><a href='#'>09-10-2020</a> | <a href='#'>Technology</a> | <a href='#'>christian</a></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus, odio quis 
                tempor congue, quam lacus accumsan lorem, eget consectetur lorem ex aduiCras in diam
                eu est rutrum consectetur at laoreet erat.Ut luctus nec diam quis tristique. 
                Sed dignissim dignissim urna ultrices facilisis.
               </p>
               <a class="label label-default" style="color:black; background: #ff0077;">what is Technology?</a>
               <a class="label label-default" style="color: beige; background: black;">How Technology works</a>
               <a class="label label-default" style="color: black; background: #00ffbf;">Intro to Technology</a>
            </div>
          </div>
            <!--the personal profile-->
            <div class='row'>
              <div class="col-md-12 text-center page-header">
                <h4>About Christian</h4>
                  <?php
                      include "../includes/proflingcard.php";
                  ?>
                </div>  
              </div>
            </div>
          </div><!-- sidebar section ends here-->