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
                        <p><a href="#">Dashboard</a> > <a href="jobs.php">Jobs</a> > <a href="applicants.php">Applicants</a></p>
                        <h1>Burrito Guru</h1>

                        <div class="sort">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Recent"><i class="fa fa-calendar-o"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Rating"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Hours Available"><i class="fa fa-clock-o"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Days Available"><i class="fa fa-calendar"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Work Experience"><i class="fa fa-briefcase"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Settings"><i class="fa fa-gears"></i></a></li>
                            </ul>
                        </div>
                        <p class="pull-right"><strong>27</strong> Applicants</p>

                        <div class="box">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="pull-right crop">
                                <img src="img/jamesbond.jpg" alt="">
                              </div>
                              <div class="bs-component pull-right">
                                <div class="btn-group-vertical days">
                                    <a href="#" class="btn btn-success">M</a>
                                    <a href="#" class="btn btn-success">T</a>
                                    <a href="#" class="btn btn-success">W</a>
                                    <a href="#" class="btn btn-success">Th</a>
                                    <a href="#" class="btn btn-default">F</a>
                                    <a href="#" class="btn btn-success">S</a>
                                    <a href="#" class="btn btn-success">Sun</a>
                                </div>
                              </div>
                              <p><strong>James Bond</strong></p>
                              <div class="vote">
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-half-full"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                              </div>
                              <ul>
                                <li><i class="fa fa-graduation-cap"></i>Bachelors Degree</li>
                                <li><i class="fa fa-clock-o"></i>Availability: 40hrs</li>
                                <li><i class="fa fa-calendar"></i>Exp: 2yrs</li>
                                <li><i class="fa fa-money"></i>$125,000/yr</li>
                              </ul>
                            </div>
                          </div>
                          <div class="options">
                            <ul>
                              <li><i class="fa fa-search-plus"></i><span>View</span></li>
                              <li><i class="fa fa-archive"></i><span>Archive</span></li>
                              <li><i class="fa fa-edit"></i><span>Edit</span></li>
                            </ul>
                          </div>
                        </div>

                        <div class="box">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="pull-right crop">
                                <img src="img/jb.jpg" alt="">
                              </div>
                              <div class="bs-component pull-right">
                                <div class="btn-group-vertical days">
                                    <a href="#" class="btn btn-success">M</a>
                                    <a href="#" class="btn btn-success">T</a>
                                    <a href="#" class="btn btn-success">W</a>
                                    <a href="#" class="btn btn-success">Th</a>
                                    <a href="#" class="btn btn-default">F</a>
                                    <a href="#" class="btn btn-success">S</a>
                                    <a href="#" class="btn btn-success">Sun</a>
                                </div>
                              </div>
                              <p><strong>James Bond</strong></p>
                              <div class="vote">
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-half-full"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                              </div>
                              <ul>
                                <li><i class="fa fa-graduation-cap"></i>Bachelors Degree</li>
                                <li><i class="fa fa-clock-o"></i>Availability: 40hrs</li>
                                <li><i class="fa fa-calendar"></i>Exp: 2yrs</li>
                                <li><i class="fa fa-money"></i>$125,000/yr</li>
                              </ul>
                            </div>
                          </div>
                          <div class="options">
                            <ul>
                              <li><i class="fa fa-search-plus"></i><span>View</span></li>
                              <li><i class="fa fa-archive"></i><span>Archive</span></li>
                              <li><i class="fa fa-edit"></i><span>Edit</span></li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="box">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="pull-right crop">
                                <img src="img/jamesbond.jpg" alt="">
                              </div>
                              <div class="bs-component pull-right">
                                <div class="btn-group-vertical days">
                                    <a href="#" class="btn btn-success">M</a>
                                    <a href="#" class="btn btn-success">T</a>
                                    <a href="#" class="btn btn-success">W</a>
                                    <a href="#" class="btn btn-success">Th</a>
                                    <a href="#" class="btn btn-default">F</a>
                                    <a href="#" class="btn btn-success">S</a>
                                    <a href="#" class="btn btn-success">Sun</a>
                                </div>
                              </div>
                              <p><strong>James Bond</strong></p>
                              <div class="vote">
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-half-full"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                              </div>
                              <ul>
                                <li><i class="fa fa-graduation-cap"></i>Bachelors Degree</li>
                                <li><i class="fa fa-clock-o"></i>Availability: 40hrs</li>
                                <li><i class="fa fa-calendar"></i>Exp: 2yrs</li>
                                <li><i class="fa fa-money"></i>$125,000/yr</li>
                              </ul>
                            </div>
                          </div>
                          <div class="options">
                            <ul>
                              <li><i class="fa fa-search-plus"></i><span>View</span></li>
                              <li><i class="fa fa-archive"></i><span>Archive</span></li>
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