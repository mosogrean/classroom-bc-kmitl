@extends('layouts.layout-student')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">classroom</li>
            <li class="active">teacher and student room</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher And Student Room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Choose Time to Reserve
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">
            <div class="article border-bottom" style="background:#ff4d4d">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">9.00-12.00</div>
                            <div class="text">Date: </div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4>Room Id: {{$room}}</h4>
                            <h>ที่ตั้ง:</h>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom" style="background:#66ff99">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">13.00-16.00</div>
                            <div class="text">Date: </div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4>Room Id: {{$room}}</h4>

                            {{--<form action="#" method="GET">--}}
                            {{--@csrf--}}
                            {{--<input type="hidden" name="time" value=""><br>--}}
                            {{--<input type="hidden" name="date" ><br>--}}
                            {{--<input type="hidden" name="room"><br>--}}
                            {{--<input class="btn btn-default btn-md pull-right" type="submit" value="Reserve">--}}
                            {{--</form>--}}
                            <input type="button" class="btn btn-default btn-md pull-right" onclick="location.href='{{ route('student.tsreservation',$room) }}?time=1&date={{$date}}&day={{$day}}&month={{$month}}&year={{$year}}';" value="Reserve" />
                            {{--<input type="button" class="btn btn-default btn-md pull-right" onclick="location.href='{{ route('student.sreservation', $room) }}';" value="Reserve" />--}}
                            {{--<button type="edit" class="btn btn-default btn-md pull-right">Reserve</button>--}}

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->


            <div class="article border-bottom" style="background:#cce6ff">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">16.30-19.30</div>
                            <div class="text">Date: </div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4>Room Id: {{$room}}</h4>
                            <h>ที่ตั้ง:</h>

                            <button type="edit" class="btn btn-default btn-md pull-right">Edit</button>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->
        </div>

    </div><!--End .articles-->

@endsection
