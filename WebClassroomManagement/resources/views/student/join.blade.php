@extends('layouts.layout-student')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Join Class</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Join Class</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Select class to join
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="article border-bottom" style="background:#99ccff">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">25</div>
                            <div class="text-muted">1/2019</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="#">HM303</a></h4>
                            <p>รหัสเข้าใช้งาน: 66L9K</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom" style="background:#66ff99">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">25</div>
                            <div class="text-muted">1/2019</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="#">HM303</a></h4>
                            <p>รหัสเข้าใช้งาน: 66L9K</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->
@endsection
