@extends('layouts.layout-admin')

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
            <h1 class="page-header">Teacher and Student Room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Teacher and Student Room Info
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">C-113</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.acalendar', "E12-704") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น7 คณะวิศวกรรมศาสตร์ KMITL</p>

                            <a href="{{ route('admin.close', "E12-704") }}" class="btn btn-danger btn-md pull-right" role="button">Close Room</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E12-704</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.acalendar', "C-113") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคารพระเทพฯ ชั้น1 คณะวิศวกรรมศาสตร์ KMITL</p>

                            <a href="{{ route('admin.close', "C-113") }}" class="btn btn-danger btn-md pull-right" role="button">Close Room</a>

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
                            <h4><a href="{{ route('admin.acalendar', "E12-604") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น6 คณะวิศวกรรมศาสตร์ KMITL</p>

                            <a href="{{ route('admin.close', "E12-604") }}" class="btn btn-danger btn-md pull-right" role="button">Close Room</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
        <a href="{{ route('admin.add') }}" class="btn btn-success btn-md pull-right" role="button">Add Room</a>

    </div><!--End .articles-->

@endsection
