<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="/theme/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/theme/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        TouchPoint powered by NexBridge
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/e02896559e.js"></script>
    <!-- CSS Files -->
    <link href="/theme/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/theme/css/paper-dashboard.css?v=2.0.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/theme/demo/demo.css" rel="stylesheet"/>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/theme/img/logo-small.png">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">
                TouchPoint
                <!-- <div class="logo-image-big">
                  <img src="/theme/img/logo-big.png">
                </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Touch Point Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">

                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="#pablo">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- <div class="panel-header panel-header-lg">

    <canvas id="bigDashboardChart"></canvas>


  </div> -->
        <div class="content">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-globe text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="numbers  text-center">
                                        <p class="card-category text-center">Total</p>
                                        <p class="card-title  text-center">
                                            @if(isset($data['total']))
                                                {{$data['total']}}
                                            @else
                                                0
                                        @endif
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-satisfied text-info"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="numbers  text-center">
                                        <p class="card-category text-center">Very Good</p>
                                        <p class="card-title  text-center">
                                            @if(isset($data['VG']))
                                                {{$data['VG']}}
                                            @else
                                                0
                                        @endif
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="far fa-smile text-success"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="numbers  text-center">
                                        <p class="card-category text-center">Good</p>
                                        <p class="card-title text-center">
                                            @if(isset($data['G']))
                                                {{$data['G']}}
                                            @else
                                                0
                                        @endif
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-globe text-secondary"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="numbers  text-center">
                                        <p class="card-category text-center">Okay</p>
                                        <p class="card-title  text-center">
                                            @if(isset($data['O']))
                                                {{$data['O']}}
                                            @else
                                                0
                                        @endif
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="far fa-angry text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="numbers  text-center">
                                        <p class="card-category text-center">Poor</p>
                                        <p class="card-title  text-center">
                                            @if(isset($data['P']))
                                                {{$data['P']}}
                                            @else
                                                0
                                        @endif
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="far fa-tired text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="numbers  text-center">
                                        <p class="card-category text-center">Very Poor</p>
                                        <p class="card-title  text-center">
                                            @if(isset($data['VP']))
                                                {{$data['VP']}}
                                            @else
                                                0
                                        @endif
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Update Now
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-title">Last Week's Stat</h5>
                            <p class="card-category">{{$week}} to {{date('Y-m-d')}}</p>
                        </div>
                        <div class="card-body">

                            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                                 class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand"
                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chartWeek" style="display: block; width: 441px; height: 220px;" width="441"
                                    height="200" class="chartjs-render-monitor"></canvas>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header">
                            <h5 class="card-title">This Month's Stat</h5>
                            <p class="card-category">{{date('F Y')}}</p>
                        </div>
                        <div class="card-body">
                            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                                 class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand"
                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                     style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="chartMonth" style="display: block; width: 441px; height: 220px;" width="441"
                                    height="200" class="chartjs-render-monitor"></canvas>
                            <hr>
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <a href="http://nexbridgetech.com/" target="_blank">NexBridgeTech</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="/theme/js/core/jquery.min.js"></script>
<script src="/theme/js/core/popper.min.js"></script>
<script src="/theme/js/core/bootstrap.min.js"></script>
<script src="/theme/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="/theme/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/theme/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/theme/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="/theme/demo/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>

<script>
    var socket = io.connect('https://localhost:3000/');
    // console.log(socket);
    new Vue({
        el: '#app',
        data() {
            return {
                users: []
            }
        },
        mounted: function (data) {
            socket.on('test-channel:UserReacted', function (data) {
                console.log(data);
                alert('caught!');
            });
        }
    });

    $(document).ready(function () {
        // Javascript method's body can be found in assets-for-demo/js/demo.js
        // demo.initChartsPages();
        // demo.initChartsPages('chartWeek');
        var weekly =
                {!! json_encode($data_weekly) !!}
        var weekly_label =
                {!! json_encode($weekly) !!}
        var weekly_label = Object.keys(weekly_label);
        var weekly_chart = "Weekly Reaction Statistics";

        var monthly =
                {!! json_encode($data_monthly) !!}
        var monthly_label =
                {!! json_encode($data_monthly) !!}
        var monthly_label = Object.keys(monthly_label);
        var monthly_chart = "Monthly Reaction Statistics";
        console.log(monthly);
        console.log(monthly_label);
        demo.displayChartsWeeklyDashboard(weekly_label, weekly, weekly_chart, 'chartWeek');
        demo.displayChartsMonthlyDashboard(monthly_label, monthly, monthly_chart, 'chartMonth');

    });
</script>
</body>

</html>
