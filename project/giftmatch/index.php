<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Create List Match</title>
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

          .form-signin, #people {
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
          #people button {
            width: 100%;
            margin: 4px 0px;
          }
          #people button i {
            float: right;
            padding: 2px 0px;
          }
          #matched-list button {
            width: 100%;
            margin: 4px 0px;
          }
          #matched-list button i {
            float: right;
            padding: 2px 0px;
          }
          #matched-list {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            text-align: center;
          }
          .match {
            display: none;
            margin-top: 73px;
          }
          .label {
            font-size: 168%;
            margin: 8px;
            line-height: 1.5;
          }
        </style>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php include ('_inc/nav.php'); ?>

    <div class="container edit">

      <form class="form-signin" role="form" method="POST" id="myForm">
        <h2 class="form-signin-heading">Add Person</h2>
        <input type="text" class="form-control" name="first_name" id="first-name" placeholder="First Name" autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Add Person</button>

        <div id="message"></div>
      </form>
      
      <div id="people"></div>

    </div> <!-- /container -->
    
    <div class="container match">
      
      <div id="matched-list"></div>

    </div> <!-- /container -->

      <hr>

      <footer>
        <div class="container">
          <button class="btn btn-lg btn-primary btn-block" id="edit-btn" onclick="editList();">Edit</button>
          <div id="copy"><button class="btn btn-lg btn-info btn-block" id="copy-button" data-clipboard-text=" ">Copy</button></div>
          <p>&copy; Wolfgang Computer <?php echo date("Y"); ?></p>
        </div>
      </footer>
    </div> <!-- /container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/ZeroClipboard.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        <script>
          $('#edit-btn').hide();
          $('#copy-button').hide();

          var name;
          var list = [];
          var matchButtonCount = 1;
          var copyMessage;

          $("#submit").click( function() {
 
            if( $("#first-name").val() == "" )
              $("#message").html('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Could not create team member.</div>');
            else {
              name = $("#first-name").val();
              name = name.toLowerCase();
              capitaliseFirstLetter(name);
              list.push(name);
              $("#message").empty();
              $("#message").html('<div class="alert alert-success" role="alert"><strong>Yay!</strong> ' + name + ' is added.</div>');
              clear();
              showList(list);
              if(list.length >= 2 && matchButtonCount == 1) {
                $("form").append('<button class="btn btn-lg btn-success btn-block" id="match-btn" onclick="mixUpList();">Match</button>');
                matchButtonCount = 0;
              }
            }
           
            $("#myForm").submit( function() {
               return false;  
            });
          });
           
          function clear() {
            $("#myForm :input").each( function() {
                  $(this).val("");
            });
          }

          function showList(data){
            data.sort();
            $("#people").empty();
            var index;
            for (index = 0; index < data.length; ++index) {
                $("#people").append('<button id="' + data[index] + '" class="btn btn-lg btn-danger " onclick="personSelected(this.id);">' + data[index] + ' <i class="fa fa-times"></i></button>');
            }
          }
          
          function personSelected(id){
            for (var i=list.length-1; i>=0; i--) {
                if (list[i] === id) {
                    list.splice(i, 1);
                    $("#message").empty();
                    $("#message").html('<div class="alert alert-success" role="alert"><strong>Yay!</strong> ' + id + '</div>');
                    //break;       //<-- Uncomment  if only the first term has to be removed
                }
            }
            showList(list);
          };
          function capitaliseFirstLetter(string)
          {
            name = string.charAt(0).toUpperCase() + string.slice(1);
          }
          function editList() {
            $('.match').hide();
            $('.edit').show();
            $('#match-btn').show();
            $('#edit-btn').hide();
            $('#copy-button').hide();
          }
          function mixUpList() {
            $("#matched-list").empty();
            $('.edit').hide();
            $('.match').show();
            $('#match-btn').hide();
            $('#edit-btn').show();
            $('#copy-button').show();
            shuffle(list);
            var color = 1;
            var array = list;
            var res=[];

            copyMessage = 'Gift Match Results 2014<br><br>'; //build text for copy button
            for(var i=0;i<array.length;i++) {
              res[array[i]] = array[i+1];
            }
            res[array[array.length-1]] = array[0];
            for (var property in res){
              if(res.hasOwnProperty(property)){
                copyMessage += property + ' + ' + res[property] + '<br>'; //build text for copy button
                if(color == 1) {
                  $("#matched-list").append('<p><span class="label label-success">' + property + '</span> <i class="fa fa-plus"></i> <span class="label label-success">' + res[property] + '</span></p>');
                  color = 2;
                } else if(color == 2) {
                  $("#matched-list").append('<p><span class="label label-warning">' + property + '</span> <i class="fa fa-plus"></i> <span class="label label-warning">' + res[property] + '</span></p>');
                  color = 3;
                } else if(color == 3) {
                  $("#matched-list").append('<p><span class="label label-info">' + property + '</span> <i class="fa fa-plus"></i> <span class="label label-info">' + res[property] + '</span></p>');
                  color = 4;
                } else if(color == 4) {
                  $("#matched-list").append('<p><span class="label label-default">' + property + '</span> <i class="fa fa-plus"></i> <span class="label label-default">' + res[property] + '</span></p>');
                  color = 1;
                }
              }
            }
            // $("#matched-list").append('<button class="btn btn-lg btn-info btn-block" id="copy-button" data-clipboard-text="' + res + '">Copy</button>');
            console.log(list);
            console.log(res);

            $("#copy").empty();
            if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
              $("#copy").html('<br><br><p>' + copyMessage + '</p>');
              $('#copy').focus(function(){
                $(this).select();
              });
            }else{
              $("#copy").html('<button class="btn btn-lg btn-info btn-block" id="copy-button" data-clipboard-text="' + copyMessage + '">Copy</button>');
            }
            console.log(copyMessage);

             // copy to clipboard 
            var client = new ZeroClipboard( document.getElementById("copy-button") );

            client.on( "ready", function( readyEvent ) {
              // alert( "ZeroClipboard SWF is ready!" );
              client.on( "aftercopy", function( event ) {
                // `this` === `client`
                // `event.target` === the element that was clicked
                event.target.style.display = "none";
                // alert("Copied text to clipboard: " + event.data["text/plain"] );
                alert("Copied text to clipboard.");
              } );
              client.on( 'error', function(event) {
                //console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
                ZeroClipboard.destroy();
              } );
            } );
          }
          function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex ;

            // While there remain elements to shuffle...
            while (0 !== currentIndex) {

              // Pick a remaining element...
              randomIndex = Math.floor(Math.random() * currentIndex);
              currentIndex -= 1;

              // And swap it with the current element.
              temporaryValue = array[currentIndex];
              array[currentIndex] = array[randomIndex];
              array[randomIndex] = temporaryValue;
            }

            return array;
          }
        </script>
    </body>
</html>
