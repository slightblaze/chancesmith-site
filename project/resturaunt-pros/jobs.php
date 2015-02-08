<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('inc/sidebar.php'); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                      <div class="bs-component">
                        <p><a href="#">Dashboard</a> > <a href="jobs.php">Jobs</a></p>
                        <h1>Your Jobs</h1>

                        <div class="box">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="col-md-4 pull-right monthly-applicants">
                                <p>this month</p>
                                <span>12</span>
                              </div>
                              <p><a href="applicants.php" class="job"><strong>Burrito Guru</strong></a><i class="fa fa-angle-right"></i><br>FOH
                              </p>
                              <ul>
                                <li><i class="fa fa-folder"></i>Total Applicants: 40</li>
                                <li><i class="fa fa-star"></i>Total Favorites: 1</li>
                                <li><i class="fa fa-star-half-full"></i>Total Possibilities: 2</li>
                                <li><i class="fa fa-users"></i>Total Hired: 5</li>
                                <li><i class="fa fa-calendar"></i>Expire: 13 days</li>
                              </ul>
                            </div>
                          </div>
                          <div class="options">
                            <ul>
                              <li><a href="applicants.php"><i class="fa fa-search-plus"></i></a><span>View</span></li>
                              <li><i class="fa fa-archive"></i><span>Expire Now</span></li>
                              <li><i class="fa fa-edit"></i><span>Edit</span></li>
                            </ul>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

  </body>
</html>