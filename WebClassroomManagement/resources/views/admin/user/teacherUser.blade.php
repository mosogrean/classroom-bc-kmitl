@extends('layouts.layout-admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">User</li>
            <li class="active">teacher user</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher User</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Teacher Info
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">00000001</div>
                            <div class="text-muted">Teacher Id</div>

                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.tid',"00000001") }}">Teacher Info.</a></h4>
                            <p>Name: Pramote </p>
                            <p>Surname: Wartkien</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">00000002</div>
                            <div class="text-muted">Teacher Id</div>

                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.tid',"00000002") }}">Teacher Info.</a></h4>
                            <p>Name: Jeerasuda </p>
                            <p>Surname: G.</p>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
    </div><!--End .articles-->

@endsection
