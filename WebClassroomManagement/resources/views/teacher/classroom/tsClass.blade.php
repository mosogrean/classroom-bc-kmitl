@extends('layouts.layout-teacher')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
            <li class="active">{{$room}}</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$room}}</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Class Created
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

        <div class="article border-bottom" >
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-3 col-md-3 date">
                        <div class="large">{{$room}}</div>
                    </div>
                    <div class="col-xs-9 col-md-9">
                        <h4><label>Class Created</label></h4>
                        <div class="form-group">
                            <label>Selects Student Group</label>
                            <select class="form-control">
                                <option>Telecom01</option>
                                <option>Group 2</option>
                                <option>Group 3</option>
                            </select>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>

            </div><!--End .article-->

            <a href="{{ route('teacher.tscalendar',$room) }}" class="btn btn-default btn-md pull-right" role="button">Reserve</a>


        </div>
    </div><!--End .articles-->

@endsection
