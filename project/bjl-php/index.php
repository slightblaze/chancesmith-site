<?php include('inc/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In @ Better Job Landing</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch-yeti.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('inc/header.php'); ?>

    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Sign Up</h1>
            <p>Once you are signed in you'll select a job to apply for.</p>
          </div>
        </div>
      </div>
      
      <div class="bs-docs-section">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="index.php" method="post">
            <div class="form-group">
              <label class="control-label" for="fName">First Name</label>
              <input class="form-control input-sm" type="text" id="fName" name="fName" value="">
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Email</label>
              <input class="form-control input-sm" type="text" id="email" name="email" value="">
            </div>
            <p>This info will be shared with employers, and no one else.</p>
            <input type="hidden" id="signup" name="signup" value="1">
            <input type="submit" id="submit" class="btn btn-primary" value="Let's Get Started!">
          </form>
        </div>
      </div>
      

      <footer>
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
            </ul>

          </div>
        </div>

      </footer>


    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
