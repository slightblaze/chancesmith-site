<?php //include('inc/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Test for Jackson, TN Smoothie King position | Better Job Landing</title>
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
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  </head>
  <body>
    <?php include('inc/header.php'); ?>
    
    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Test to Apply</h1>
          </div>
        </div>
      </div>
      <script>$("form").hide();</script>
      <form action="test_sk-tm.php" method="post">
      <div class="bs-docs-section test1">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
          
            <h1>What is your most favorite customer service experience you've had?</h1>
            <p>Tell us about your best customer service expereince.</p>
            <div class="form-group">
              <label class="control-label" for="inputLarge">Your Answer</label>
              <textarea class="form-control input-lg" id="customerService" name="customerService"></textarea>
            </div>
            <input type="button" id="next" class="btn btn-primary" value="Complete" onclick="completeTest1();">
          
        </div>
      </div>

      <div class="bs-docs-section test2">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="index.php" method="post">
            <h1>What is your favorite subject to learn about?</h1>
            <p>It can be anything from inside or outside of formal education. This is a topic that you could easly talk about or teach about for hours.</p>
            <div class="form-group">
              <label class="control-label" for="inputLarge">Your Answer</label>
              <textarea class="form-control input-lg" id="studySubject" name="studySubject"></textarea>
            </div>
            <input type="hidden" id="test" name="test" value="1">
            <input type="button" id="next" class="btn btn-primary" value="Complete" onclick="completeTest2();">
        </div>
      </div>
      <div class="bs-docs-section test3">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="index.php" method="post">
            <h1>Instructions</h1>
            <p>The next and last set of questions are based on reading and comprehension. You'll be given 20mins to read three paragraphs about Smoothie King.</p>
            <p>No turning back...</p>
            <input type="button" id="next" class="btn btn-primary" value="Ready!" onclick="completeTest3();">
        </div>
      </div>
      <div class="bs-docs-section test4">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="index.php" method="post">
            <p class="lead approved" id="countTime"></p>
            <h1>Information about Smoothie King.</h1>
            <p>asdf</p>
            <p>asdf</p>
            <p>asdf</p>
            <p class="lead" id="countTime"></p>
            <input type="hidden" id="ready45" name="ready45" value="1">
            <input type="button" id="next" class="btn btn-primary" value="Ready To Test" onclick="completeTest4();">
        </div>
      </div>
      <div class="bs-docs-section test5">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="index.php" method="post">
            <h1>What is the owner's first name?</h1>
            <div class="form-group">
              <label class="control-label" for="inputLarge">Your Answer</label>
              <input type="text" class="form-control input-lg" id="ownerName" name="ownerName">
            </div>
            <!-- <input type="hidden" id="test" name="test" value="1">
            <input type="submit" id="submit" class="btn btn-primary" value="Complete"> -->
            <a href="application_sk-tm.php" class="btn btn-primary">Complete</a>
        </div>
      </div>
      </form>

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

    <script src="js/bootstrap.min.js"></script>

    <script>
    $('.test2, .test3, .test4, .test5').hide();
    $('.test1').show();

    function completeTest1(){
      $('.test1').fadeOut("fast", function(){
        $('.test2').fadeIn();
      });
    }
    function completeTest2(){
      $('.test2').fadeOut("fast", function(){
        $('.test3').fadeIn();
      });
    }
    function completeTest3(){
      $('.test3').fadeOut("fast", function(){
        $('.test4').fadeIn();
        var countdown = 10 * 60 * 1000; //10 mins
        var timerId = setInterval(function(){
          countdown -= 1000;
          var min = Math.floor(countdown / (60 * 1000));
          //var sec = Math.floor(countdown - (min * 60 * 1000));  // wrong
          var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);  //correct

          if (countdown <= 0) {
             clearInterval(timerId);
             //action here
             completeTest4();
          } else {
             $("#countTime").html(min + " : " + sec);
          }

        }, 1000); //1000ms. = 1sec.
      });
    }
    function completeTest4(){
      $('.test4').fadeOut("fast", function(){
        $('.test5').fadeIn();
      });
    }
    </script>
  </body>
</html>
