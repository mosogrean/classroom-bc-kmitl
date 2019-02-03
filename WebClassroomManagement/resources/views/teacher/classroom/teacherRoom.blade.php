@extends('layouts.layout-teacher')

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
                            <div class="large">HM304</div>
                            <div class="text-muted">Room Id</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('teacher.calendar', "HM304") }}">Reserve & Edit</a></h4>
                            <p>ที่ตั้ง: อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์ KMITL</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-2 col-md-2 date">
                            <div class="large">28</div>
                            <div class="text-muted">Jun</div>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-2 col-md-2 date">
                            <div class="large">24</div>
                            <div class="text-muted">Jun</div>
                        </div>
                        <div class="col-xs-10 col-md-10">
                            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->
        </div>
    </div><!--End .articles-->

@endsection
