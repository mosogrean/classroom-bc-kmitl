@extends('layouts.layout-student')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Open this room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            {{$room}}
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            The room will be locked in 15 min.

            <!DOCTYPE HTML>
            <html>
            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    p {
                        text-align: center;
                        font-size: 60px;
                        margin-top: 0px;
                    }
                </style>
            </head>
            <body>

            <p id="demo"></p>

            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Mar 29, 2019 17:02:00").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get todays date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Output the result in an element with id="demo"
                    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";

                    // If the count down is over, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "The room has been locked";
                    }
                }, 1000);
            </script>

            </body>
            </html>
            <a href="{{ route('student.open',$room) }}" class="btn btn-default btn-md pull-right" role="button">Back</a>
            <a href="{{ route('student.unlock',$room) }}" class="btn btn-default btn-md pull-right" role="button">Unlocked</a>

        </div>
    </div><!--End .articles-->

@endsection
