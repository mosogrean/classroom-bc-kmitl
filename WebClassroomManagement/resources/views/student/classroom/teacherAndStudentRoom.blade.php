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
            Lists
            <ul class="pull-right panel-settings panel-button-tab-right">
                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                        <em class="fa fa-cogs"></em>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">

                    </ul>
                </li>
            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E704</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('student.tscalendar', "E704") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น7 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">C113</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('student.tscalendar', "C113") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคารพระเทพฯ ชั้น1 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E604</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('student.tscalendar', "E604") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น6 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->
        </div>
    </div><!--End .articles-->

@endsection
