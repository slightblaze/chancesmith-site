<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Create Team Member | getTeamPlan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/main.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
          body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
          }

          .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
          }
          .form-signin .form-signin-heading,
          .form-signin .checkbox {
            margin-bottom: 10px;
          }
          .form-signin .checkbox {
            font-weight: normal;
          }
          .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
               -moz-box-sizing: border-box;
                    box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
          }
          .form-signin .form-control:focus {
            z-index: 2;
          }
          .form-signin input[type="text"], .form-signin input[type="email"] {
            margin-bottom: -1px;
          }
          .form-signin input[type="text"]#first-name {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
          }
          .form-signin #center {
            border-radius: 0;
          }
          .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
          }
          #message{padding:17px 0px 0px 0px;}
        </style>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php include ('_inc/nav.php'); ?>

    <div class="container">

      <form class="form-signin" role="form" method="POST" action="processes/add-tm-process.php" id="myForm">
        <h2 class="form-signin-heading">Add Team Member</h2>
        <input type="text" class="form-control" name="first_name" id="first-name" placeholder="First Name" required autofocus>
        <!-- <input type="text" class="form-control" for="last_name" id="center" placeholder="Last Name" required> -->
        <!-- <input type="email" class="form-control" for="email" id="center" placeholder="Email address" required> -->
        <!-- <input type="password" class="form-control" for="password" id="center" placeholder="Password" required> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Add Team Member</button>

        <div id="message"></div>
      </form>
      

    </div> <!-- /container -->

      <hr>

      <footer>
        <div class="container"><p>&copy; Wolfgang Computer <?php echo date("Y"); ?></p></div>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <script>
          $("#submit").click( function() {
 
            if( $("#first-name").val() == "" )
              $("#message").html('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Could not create team member.</div>');
            else
              $.post( $("#myForm").attr("action"),
                    $("#myForm :input").serializeArray(),
                 function(info) {
           
                    $("#message").empty();
                    $("#message").html(info);
                    clear();
                 });
           
            $("#myForm").submit( function() {
               return false;  
            });
          });
           
          function clear() {
           
            $("#myForm :input").each( function() {
                  $(this).val("");
            });
           
          }
        </script>
    </body>
</html>
