@extends('layouts.layout-student')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">classroom</li>
            <li class="active">student room</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student Room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Student Room Info
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">HM-303</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('student.scalendar', "HM-303") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">D-513</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('student.scalendar', "D-513") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคารพระเทพฯ ชั้น5 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">E12-304</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('student.scalendar', "E12-304") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร12ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->
        </div>
    </div><!--End .articles-->

@endsection
