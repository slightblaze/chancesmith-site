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
          #team button {margin: 0px 0px 0px 7px;}
          #team button:first-child {margin: 0px;}
          .days{
            text-align: center;
            font-size: 20px;
            font-weight: 800;
            padding-top: 20px;
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
          .week button {
            width: 100%;
          }
          #m2,#m3,#t2,#t3,#w2,#w3,#th2,#th3,#f2,#f3,#s2,#s3,#sun2,#sun3,#m4,#t4,#w4,#th4,#f4,#s4,#sun4,#m1,#t1,#w1,#th1,#f1,#s1,#sun1 {
            margin-bottom: -2px;
            /*border: none;*/
          }
          #m2,#m3,#t2,#t3,#w2,#w3,#th2,#th3,#f2,#f3,#s2,#s3,#sun2,#sun3 {
            border-radius: 0;
          }
          #m4,#t4,#w4,#th4,#f4,#s4,#sun4 {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
          }
          #m1,#t1,#w1,#th1,#f1,#s1,#sun1 {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
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
        <h1>Update Availablity</h1>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div class="row" id="team">
        <div id="instruction"><p>Pick a team member.</p></div>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div class="row week">
        <div class="col-md-2">
          <p class="days">Monday</p>
          <button id="m1" class="btn btn-lg btn-default">Morning</button>
          <button id="m2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="m3" class="btn btn-lg btn-default">Evening</button>
          <button id="m4" class="btn btn-lg btn-default">Night</button>
        </div>
        <div class="col-md-2">
          <p class="days">Tuesday</p>
          <button id="t1" class="btn btn-lg btn-default">Morning</button>
          <button id="t2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="t3" class="btn btn-lg btn-default">Evening</button>
          <button id="t4" class="btn btn-lg btn-default">Night</button>
        </div>
        <div class="col-md-2">
          <p class="days">Wednesday</p>
          <button id="w1" class="btn btn-lg btn-default">Morning</button>
          <button id="w2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="w3" class="btn btn-lg btn-default">Evening</button>
          <button id="w4" class="btn btn-lg btn-default">Night</button>
        </div>
        <div class="col-md-2">
          <p class="days">Thursday</p>
          <button id="th1" class="btn btn-lg btn-default">Morning</button>
          <button id="th2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="th3" class="btn btn-lg btn-default">Evening</button>
          <button id="th4" class="btn btn-lg btn-default">Night</button>
        </div>
        <div class="col-md-2">
          <p class="days">Firday</p>
          <button id="f1" class="btn btn-lg btn-default">Morning</button>
          <button id="f2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="f3" class="btn btn-lg btn-default">Evening</button>
          <button id="f4" class="btn btn-lg btn-default">Night</button>
        </div>
        <div class="col-md-2">
          <p class="days">Saturday</p>
          <button id="s1" class="btn btn-lg btn-default">Morning</button>
          <button id="s2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="s3" class="btn btn-lg btn-default">Evening</button>
          <button id="s4" class="btn btn-lg btn-default">Night</button>
        </div>
        <div class="col-md-2">
          <p class="days">Sunday</p>
          <button id="sun1" class="btn btn-lg btn-default">Morning</button>
          <button id="sun2" class="btn btn-lg btn-default">Afternoon</button>
          <button id="sun3" class="btn btn-lg btn-default">Evening</button>
          <button id="sun4" class="btn btn-lg btn-default">Night</button>
        </div>
      </div>
      <div class="message"></div>
      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
          //vars
          var teamMemberSelectedID = null;
          
          $('.week').hide();

          $("button").click( function() {

              var element = $(this);
              var time = element.attr("id");
              var info = 'col=' + time + '&id=' + teamMemberSelectedID;
              
              $.ajax({
              type: "POST",
              url: "/processes/update-availability-admin.php",
              data: info,
              success: function(id){
                
                if(id==1)document.getElementById(time).className = "btn btn-lg btn-success";
                if(id==0)document.getElementById(time).className = "btn btn-lg btn-default";
              }
              });

          });

          $.ajax({
            cache: true,
            type: "POST",
            url: "/processes/get-team-admin.php",
            success: function (data){ 
              obj = JSON && JSON.parse(data) || $.parseJSON(data);
              
              // $("#team").html('<button id="m1" class="btn btn-lg btn-default">Morning</button>');
              $.each(obj, function(key, value) {
                  // console.log(value.id);
                  $("#team").append('<button id="' + value.id + '" class="btn btn-lg btn-default" onclick="teamMemberSelected(' + value.id + ', this)">' + value.first_name + '</button>');
              });
              
            }
          });

          function teamMemberSelected(id){
            $('.week').hide();
            teamMemberSelectedID = id;
            $('#team button').removeClass('btn-primary');
            $('#team button').addClass('btn-default');
            document.getElementById(id).className = "btn btn-lg btn-primary";
            getAvailabilityData(id);
            $('.week').fadeIn();
          };
          function changeClass(timeOfDay, numTeamMembers){
            if (numTeamMembers == 0) {
              document.getElementById(timeOfDay).className = "btn btn-lg btn-default";
            }else if (numTeamMembers == 1) {
              document.getElementById(timeOfDay).className = "btn btn-lg btn-success";
            }else{
              document.getElementById(timeOfDay).className = "btn btn-lg btn-default";
            }
          };
          function getAvailabilityData(id){
            
            var element = $(this);
            var noteid = element.attr("id");
            var time = element.attr("id");
            var info = 'id=' + id;
            
            function changeTheClass(timeOfDay, numTeamMembers){
              if (numTeamMembers == 0) {
                document.getElementById(timeOfDay).className = "btn btn-lg btn-default";
              }else if (numTeamMembers == 1) {
                document.getElementById(timeOfDay).className = "btn btn-lg btn-success";
              }else{
                document.getElementById(timeOfDay).className = "btn btn-lg btn-default";
              }
            };

            $.ajax({
              cache: true,
              type: "POST",
              data: info,
              url: "/processes/get-single-availability.php",
              success: function (data){ 
                obj = JSON && JSON.parse(data) || $.parseJSON(data);
                var days = ["m", "t", "w", "th", "f", "s", "sun"];
                for (var r = 1; r <= 4; r++) {
                    for (var i = days.length - 1; i >= 0; i--) {

                      var a = days[i] + r.toString();
                      $.each(obj, function(key, value) {
                        changeTheClass(a, value[a]);
                      });
                    };
                };
              }
            });
          };
        </script>
    </body>
</html>
