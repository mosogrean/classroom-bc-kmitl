@extends('layouts.layout-admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">History</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">History</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Admin History
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="panel-body articles-container">
                <div class="article border-bottom">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-3 col-md-3 date">
                                <div class="large">Admin1</div>
                                <div class="text-muted">Admin Id</div>
                            </div>
                            <div class="col-xs-9 col-md-9">
                                <h4><a href="#">Add Room</a></h4>
                                <p>Admin1 Added HM-303 for Student Room</p>

                                <a href="#" class="btn btn-default btn-md pull-right" role="button">Info</a>

                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--End .article-->

                <div class="article border-bottom">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-3 col-md-3 date">
                                <div class="large">Admin1</div>
                                <div class="text-muted">Admin Id</div>
                            </div>
                            <div class="col-xs-9 col-md-9">
                                <h4><a href="#">Add Token</a></h4>
                                <p>Admin1 Added Tokens to 58010187</p>

                                <a href="#" class="btn btn-default btn-md pull-right" role="button">Info</a>

                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--End .article-->

                <div class="article border-bottom">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-3 col-md-3 date">
                                <div class="large">Admin1</div>
                                <div class="text-muted">Admin Id</div>
                            </div>
                            <div class="col-xs-9 col-md-9">
                                <h4><a href="#">Close Room</a></h4>
                                <p>Admin1 Closed HM-401 for Teacher and Student Room</p>

                                <a href="#" class="btn btn-default btn-md pull-right" role="button">Info</a>

                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--End .article-->

            </div>


        </div>
    </div><!--End .articles-->

@endsection
