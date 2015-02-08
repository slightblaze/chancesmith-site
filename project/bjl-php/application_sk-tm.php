<?php //include('inc/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Apply for Jackson, TN Smoothie King position | Better Job Landing</title>
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
            <h1>Apply for Position</h1>
          </div>
        </div>
      </div>
      
      <div class="bs-docs-section application">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="application_success.php" method="post">    
            <div class="form-group">
              <h1>Your Phone Number</h1>
              <p>What is the best way for an employer to get a hold of you?</p>
              <label class="control-label" for="phone">Your Number</label>
              <input type="tel" class="form-control input-lg" id="phone" name="phone">
            </div>
            <div class="form-group">
              <h1>What days can you NOT work?</h1>
              <label class="control-label" for="availability">Your Availablity</label>
              <input type="text" class="form-control input-lg" id="availability" name="availability">
            </div>
            <div class="form-group">
              <h1>How many hours do you wish to work a week?</h1>
              <label class="control-label" for="availability">Your Weekly Hours</label>
              <input type="text" class="form-control input-lg" id="desiredHours" name="desiredHours">
            </div>
            <div class="form-group">
              <h1>Have you worked in a resturant before?</h1>
              <div class="radio">
                <label>
                  <input type="radio" name="RestExperince" id="RestExperince1" value="Yes" checked="">
                  Yes, I have.
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="RestExperince" id="RestExperince2" value="No">
                  No, none yet.
                </label>
              </div>
            </div>
            <div class="form-group">
              <h1>Have you worked at a Smoothie King before?</h1>
              <div class="radio">
                <label>
                  <input type="radio" name="SKExperince" id="SKExperince1" value="Yes" checked="">
                  Yes, I have.
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="SKExperince" id="SKExperince2" value="No">
                  No, I haven't.
                </label>
              </div>
            </div>
            <div class="form-group">
              <h1>What does FIFO stand for and how does it apply to Smoothie King?</h1>
              <p>Last test question.</p>
              <label class="control-label" for="FIFO">Your Answer</label>
              <input type="text" class="form-control input-lg" id="FIFO" name="FIFO">
            </div>
            <br><br>
            <input type="hidden" id="sk-tm-application" name="sk-tm-application" value="1">
            <input type="submit" id="submit" class="btn btn-primary" value="Send It On!">
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
