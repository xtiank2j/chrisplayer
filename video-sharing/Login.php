<!DOCTYPE html>
<html>
    <head>
        <title>Get Loged In</title>
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
     <!---body starts here-->
    <body style='background-color:#cbdce7;'>
        <?php include "../includes/nav.php"; ?>   <!---upper nav-->
        <?php include "includes/nav-header.php"; ?> <!---lover nav-->
        <div class='container-fluid' style='background-image: url(../images/video-sharing-image/background2.jpg);
        background-repeat: no-repeat; background-size:100%;'><!---container-fluid start here -->
               <form class='register_form col-sm-12 col-md-6'>
               <div class='page-header text-center'>
                        <h3 style='font-weight:bolder;'>Login</h3>
                    </div>
                    <div class='form-group'>
                        <label>Email Address</label>
                        <input type='email' class='form-control' placeholder='Example@hoomail.com'>
                    </div>
                    <div class='form-group'>
                        <label>Password</label>
                        <input type='password' class='form-control' placeholder='***************'>
                    </div>
                    <div class='form-group'>
                        <button class='btn btn-primary btn-block' style='background-color:black; color:white; font-weight: bolder;'>Submit</button>
                    </div>
                </form>
        </div><!---container-fluid end -->
        <?php include "../includes/footer.php"; ?>
    </body>
</html>