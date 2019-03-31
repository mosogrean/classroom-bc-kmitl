@extends('layouts.layout-teacher')

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
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Teacher Recently Reserve
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="article border-bottom" style="background:#99ccff">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">00000001</div>
                            <div class="text">Teacher ID</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4>E12-704</h4>
                            <h>Date: 25-01-2019</h>
                            <br><h>Time: 9.00-12.00</h></br>
                            <h>Address: อาคาร12ชั้น ชั้น7 คณะวิศวกรรมศาสตร์</h></br>

                            <a href="{{ route('teacher.unreserve',$room) }}" class="btn btn-default btn-md pull-right" role="button">Unreserve</a>

                        </div>

                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
    </div>
@endsection
