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
        <div class="article border-bottom">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-3 col-md-3 date">
                        <div class="large">18</div>
                        <div class="text-muted">12/2018</div>
                    </div>
                    <div class="col-xs-9 col-md-9">
                        <h4><a href="#">HM304</a></h4>
                        <p>รหัสเข้าใช้งาน: 7M4Pk</p>

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
