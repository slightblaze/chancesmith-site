<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Every Idea | ChanceSmith.org</title>
    
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include ('_/components/php/google-analytics.php'); ?>
  </head>
  <body>
    <?php include ('_/components/php/nav.php'); ?>
    
    <?php 
      $rand = rand(1, 3);

      if ($rand == 1) {
        $var = 'Test every <span class="orange">idea.</span>';
      }elseif($rand == 2){
        $var = 'Testing is your <span class="orange">advantage.</span>';
      }elseif($rand == 3){
        $var = "There's a way to do it better. <span class='orange'>Find it.</span>";
      }
    ?>

    <div class="container home">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <h1 class="droid"><?php echo $var; ?></h1>
        <img class="homeImg" src="images/create-validate-iterate.png" alt="create-validate-iterate-CSorg">
      </div>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap-ck.js"></script>
    <script src="_/js/myscript-ck.js"></script>
    <script>
        $( document ).ready(function() {
          $( "#nav" ).fadeIn( "slow", function() {
            //done
          });
        });
    </script>
  </body>
</html>