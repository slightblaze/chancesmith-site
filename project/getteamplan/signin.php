<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>getTeamPlan</title>
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
          .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
          }
          .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
          }
        </style>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php include ('_inc/nav.php'); ?>

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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
        function update() {
              var days = [
                          ["m", "t", "w", "th", "f", "s", "sun"],
                          [0,1,2,3,4,5,6],
                          [7,8,9,10,11,12,13],
                          [14,15,16,17,18,19,20],
                          [21,22,23,24,25,26,27]
                        ];
              function changeClass(timeOfDay, numTeamMembers){
                if (numTeamMembers == 0) {
                  document.getElementById(timeOfDay).className = "label label-danger";
                }else if (numTeamMembers == 1) {
                  document.getElementById(timeOfDay).className = "label label-warning";
                }else{
                  document.getElementById(timeOfDay).className = "label label-success";
                }
              };
              for (var r = 1; r <= 4; r++) {
                  for (var i = days[0].length - 1; i >= 0; i--) {
                    var a = days[0][i] + r.toString();
                    var b = days[r][i];
                    console.log(a + " " + r + " " + b);
                    changeClass(a, b);
                  };
              };
          }
          update();
        </script>
    </body>
</html>
