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

            <div class="article border-bottom" style="background:#cce6ff">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">00000001</div>
                            <div class="text">Teacher ID</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('teacher.dashboard.room', "E12-704") }}">E12-704</a></h4>
                            <h>Date: 25-01-2019</h>
                            <br><h>Time: 9.00-12.00</h></br>
                            <h>Address: อาคาร12ชั้น ชั้น7 คณะวิศวกรรมศาสตร์</h></br>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->


            <div class="article border-bottom" style="background:#ffd1b3">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">00000001</div>
                            <div class="text">Teacher ID</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('teacher.open', "HM-304") }}">HM-304</a></h4>
                            <h>Date: 24-01-2019</h>
                            <br><h>Time: 9.00-12.00</h></br>
                            <h>Address: อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์</h></br>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>

    </div>



    <div class="col-md-3"  >
        <div class="panel panel-unavailable">
            <div class="panel-heading"  style="background:#cce6ff">Reserved
            </div>

        </div>
    </div>

    <div class="col-md-3"  >
        <div class="panel panel-unavailable">
            <div class="panel-heading"  style="background:#ffd1b3">On using
            </div>

        </div>
    </div>

@endsection
