@extends('layouts.layout-admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">classroom</li>
            <li class="active">teacher room</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher Room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Teacher Room Info
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">HM-304</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.acalendar', "HM-304") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</p>

                            <a href="{{ route('admin.close', "HM-304") }}" class="btn btn-danger btn-md pull-right" role="button">Close Room</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E12-305</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.acalendar', "E12-305") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคารพระเทพฯ ชั้น5 คณะวิศวกรรมศาสตร์ KMITL</p>

                            <a href="{{ route('admin.close', "E12-305") }}" class="btn btn-danger btn-md pull-right" role="button">Close Room</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">T-101</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.acalendar', "T-101") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคารโทรคมนาคม ชั้น1 คณะวิศวกรรมศาสตร์ KMITL</p>

                            <a href="{{ route('admin.close', "E12-304") }}" class="btn btn-danger btn-md pull-right" role="button">Close Room</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
        <a href="{{ route('admin.add') }}" class="btn btn-success btn-md pull-right" role="button">Add Room</a>

    </div><!--End .articles-->

@endsection
