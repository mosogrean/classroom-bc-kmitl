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
            <h1 class="page-header">{{$room}}</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            {{$room}}
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="article border-bottom" style="background:#ffd1b3">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">58010187</div>
                            <div class="text">Student ID</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4>HM303</h4>
                            <h>Date: 28-03-2019</h>
                            <br><h>Time: 9.00-12.00</h></br>
                            <h>Address: อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์</h></br>

                            <a href="{{ route('student.unlock',$room) }}" class="btn btn-default btn-md pull-right" role="button">Unlock</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
    </div>
@endsection
