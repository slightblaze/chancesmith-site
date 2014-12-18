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
          .days{
            text-align: center;
            font-size: 18px;
          }
          .label{
            font-size: 18px;
            width: 100%;
            float: left;
            padding: 14px 5px;
            margin: 4px 0px;
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
      <div class="row">
        <h1>Your Team's Availablity</h1>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div class="row">
        <div class="col-md-2">
          <p class="days">Monday</p>
          <span id="m1" class="label label-danger">Morning</span>
          <span id="m2" class="label label-warning">Afternoon</span>
          <span id="m3" class="label label-danger">Evening</span>
          <span id="m4" class="label label-danger">Night</span>

          <!-- <span class="label label-primary">Primary</span>
          <span class="label label-success">Success</span>
          <span class="label label-info">Info</span>
          <span class="label label-warning">Warning</span>
          <span class="label label-danger">Danger</span> -->
        </div>
        <div class="col-md-2">
          <p class="days">Tuesday</p>
          <span id="t1" class="label label-success">Morning</span>
          <span id="t2" class="label label-warning">Afternoon</span>
          <span id="t3" class="label label-danger">Evening</span>
          <span id="t4" class="label label-success">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Wednesday</p>
          <span id="w1" class="label label-success">Morning</span>
          <span id="w2" class="label label-danger">Afternoon</span>
          <span id="w3" class="label label-danger">Evening</span>
          <span id="w4" class="label label-success">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Thursday</p>
          <span id="th1" class="label label-success">Morning</span>
          <span id="th2" class="label label-warning">Afternoon</span>
          <span id="th3" class="label label-danger">Evening</span>
          <span id="th4" class="label label-warning">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Firday</p>
          <span id="f1" class="label label-success">Morning</span>
          <span id="f2" class="label label-warning">Afternoon</span>
          <span id="f3" class="label label-warning">Evening</span>
          <span id="f4" class="label label-success">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Saturday</p>
          <span id="s1" class="label label-warning">Morning</span>
          <span id="s2" class="label label-warning">Afternoon</span>
          <span id="s3" class="label label-danger">Evening</span>
          <span id="s4" class="label label-success">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Sunday</p>
          <span id="sun1" class="label label-danger">Morning</span>
          <span id="sun2" class="label label-warning">Afternoon</span>
          <span id="sun3" class="label label-danger">Evening</span>
          <span id="sun4" class="label label-danger">Night</span>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
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
                          [0,22,23,24,25,26,27]
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
