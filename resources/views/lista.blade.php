<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Projeto Capgemini</title>

    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">

    <link href="plugins/c3-master/c3.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

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
                            <form action="courses/" class="app-search">
                                <input type="text" name="search" class="form-control" placeholder="Buscar"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>

            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8">
                        <h3 class="text-themecolor m-b-0 m-t-0">Cursos</h3>
                    </div>
                </div>
               <div class="row">
                    
                    @foreach($courses as $course)
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                    <h7 class="card-title m-t-10">{{$course->category}}</h7>
                                    <h4 class="card-title m-t-10"><a href="courses/{{$course->id}}">{{$course->title}}</a></h4>
                                    <h6 class="card-subtitle">{{$course->city}}</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-12"><i class="mdi mdi-calendar"></i> <font class="font-medium">{{$course->date}}</font></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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

    <script src="plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="plugins/d3/d3.min.js"></script>
    <script src="plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
</body>

</html>
