<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}" ></script>
    <script src="{{ asset('js/respond.min.js') }}" ></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background:#337ab7">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ route('teacher.dashboard') }}">KMITL</a>

            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"> <li><a href="{{ route('teacher.profile') }}">00000001</a></li></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>TEACHER</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li><a href="{{ route('teacher.dashboard') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard </a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Classroom <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{ route('teacher.classroom.teacher') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Teacher
                    </a></li>
                <li><a class="" href="{{ route('teacher.classroom.teacherAndStudent') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Teacher & Student
                    </a></li>
            </ul>
        </li>
        <li><a href="{{ route('teacher.create') }}"><em class="fa fa-toggle-off">&nbsp;</em>    Create Class</a></li>
        <li><a href="{{ route('teacher.add') }}"><em class="fa fa-bar-chart"> Add Token </em></a></li>
        <li><a href="History.html"><em class="fa fa-clone">&nbsp;</em> History </a></li>

        <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout </a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @yield('content')

</div>	<!--/.main-->

<script src="{{ asset('js/jquery-1.11.1.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/chart.min.js') }}" ></script>
<script src="{{ asset('js/chart-data.js') }}" ></script>
<script src="{{ asset('js/easypiechart.js') }}" ></script>
<script src="{{ asset('js/easypiechart-data.js') }}" ></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

</body>
</html>
