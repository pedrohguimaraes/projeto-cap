<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Projeto Capgemini</title>
    <!-- Bootstrap Core CSS -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header fix-sidebar card-no-border">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item search-box"> <a class="nav-link text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Buscar"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Consultoria </h3>
                    </div>
                </div>

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                   
                                        <div class="col-md-17">
                                           <h6 class="card-subtitle">{{$course->description}}</h6>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <h6 class="card-title m-t-10"><i class="mdi mdi-calendar"></i> {{$course->start}}</h6>
                                        </div>

                                        <div class="col-md-12">
                                            <h6 class="card-title m-t-10"><i class="mdi mdi-calendar"></i> {{$course->schedule_start}} até {{$course->schedule_finish}}</h6>
                                        </div>

                                        <div class="col-md-12">
                                            <h6 class="card-title m-t-10"><i class="mdi mdi-calendar"></i> {{$course->address->street}}</h6>
                                        </div>

                                        <div class="col-md-12">
                                            <h6 class="card-title m-t-10"><i class="mdi mdi-calendar"></i> R$ {{$course->price}}</h6>
                                        </div>

                                        <div class="col-md-12">
                                            <h6 class="card-title m-t-10"><i class="mdi mdi-calendar"></i> {{$course->category->name}}</h6>
                                        </div>

                                        <div class="col-md-12">
                                            <h6 class="card-title m-t-10"><i class="mdi mdi-calendar"></i> {{$course->consultant->name}}</h6>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-sm-12">
                                <button class="btn btn-success">INSCRIÇÃO</button>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="plugins/bootstrap/js/tether.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
