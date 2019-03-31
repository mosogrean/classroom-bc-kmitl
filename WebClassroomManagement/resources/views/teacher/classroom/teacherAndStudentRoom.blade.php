@extends('layouts.layout-teacher')

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
            Teacher And Student Room Info

            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E12-704</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="#">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น7 คณะวิศวกรรมศาสตร์ KMITL</p>
                            <a href="{{ route('teacher.tsClass','E12-704') }}" class="btn btn-default btn-md pull-right" role="button">Create Class</a>
                            <a href="{{ route('teacher.tscalendar','E12-704') }}" class="btn btn-default btn-md pull-right" role="button">Reserve</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">C-103</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="#">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคารพระเทพฯ ชั้น1 คณะวิศวกรรมศาสตร์ KMITL</p>
                            <a href="{{ route('teacher.tsClass','C-113') }}" class="btn btn-default btn-md pull-right" role="button">Create Class</a>
                            <a href="{{ route('teacher.tscalendar','C103') }}" class="btn btn-default btn-md pull-right" role="button">Reserve</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E12-604</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="#">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น6 คณะวิศวกรรมศาสตร์ KMITL</p>
                            <a href="{{ route('teacher.tsClass','E12-604') }}" class="btn btn-default btn-md pull-right" role="button">Create Class</a>
                            <a href="{{ route('teacher.tscalendar','E12-604') }}" class="btn btn-default btn-md pull-right" role="button">Reserve</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
    </div><!--End .articles-->

@endsection
