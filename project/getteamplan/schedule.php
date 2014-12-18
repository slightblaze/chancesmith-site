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
          #update {
            margin: 17px 0px 0px 0px;
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
          <span id="m1" class="label label-default">Morning</span>
          <span id="m2" class="label label-default">Afternoon</span>
          <span id="m3" class="label label-default">Evening</span>
          <span id="m4" class="label label-default">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Tuesday</p>
          <span id="t1" class="label label-default">Morning</span>
          <span id="t2" class="label label-default">Afternoon</span>
          <span id="t3" class="label label-default">Evening</span>
          <span id="t4" class="label label-default">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Wednesday</p>
          <span id="w1" class="label label-default">Morning</span>
          <span id="w2" class="label label-default">Afternoon</span>
          <span id="w3" class="label label-default">Evening</span>
          <span id="w4" class="label label-default">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Thursday</p>
          <span id="th1" class="label label-default">Morning</span>
          <span id="th2" class="label label-default">Afternoon</span>
          <span id="th3" class="label label-default">Evening</span>
          <span id="th4" class="label label-default">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Firday</p>
          <span id="f1" class="label label-default">Morning</span>
          <span id="f2" class="label label-default">Afternoon</span>
          <span id="f3" class="label label-default">Evening</span>
          <span id="f4" class="label label-default">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Saturday</p>
          <span id="s1" class="label label-default">Morning</span>
          <span id="s2" class="label label-default">Afternoon</span>
          <span id="s3" class="label label-default">Evening</span>
          <span id="s4" class="label label-default">Night</span>
        </div>
        <div class="col-md-2">
          <p class="days">Sunday</p>
          <span id="sun1" class="label label-default">Morning</span>
          <span id="sun2" class="label label-default">Afternoon</span>
          <span id="sun3" class="label label-default">Evening</span>
          <span id="sun4" class="label label-default">Night</span>
        </div>
      </div>
      <button type="button" id="update" class="btn btn-lg btn-default">Update View Data</button>
      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
          $("#update").click( function() {

              $.ajax({
                cache: true,
                type: "POST",
                url: "/processes/get-availability-admin.php",
                success: function (data){ 
                  obj = JSON && JSON.parse(data) || $.parseJSON(data);
                  var days = ["m", "t", "w", "th", "f", "s", "sun"];

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
                      for (var i = days.length - 1; i >= 0; i--) {
                        var a = days[i] + r.toString();
                        $.each(obj, function(key, value) {
                          changeClass(a, value[a]);
                        });
                      };
                  };
                }
              });
          });
          $('#update').click();
        </script>
    </body>
</html>
