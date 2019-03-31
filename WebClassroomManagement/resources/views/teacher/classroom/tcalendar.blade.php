@extends('layouts.layout-teacher')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">classroom</li>
            <li class="active">teacher room</li>
            <li class="active">{{$room}}</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Calendar [ {{$room}} ]
            <ul class="pull-right">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body">
            <div id="calendar"></div>
            <div>
                <form>
                    <input type="hidden" id="route" value="{{ route('teacher.ttime',$room)}}">
                </form>
            </div>
        </div>
    </div>

@endsection
