@extends('layouts.layout-admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">User</li>
            <li class="active">student user</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Student User</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Student Info
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body articles-container">
            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">58010187</div>
                            <div class="text-muted">Student Id</div>

                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.sid',"58010187") }}">Student Info.</a></h4>
                            <p>Name: Chirabhat </p>
                            <p>Surname: Kijtham</p>
                            <a href="{{ route('admin.addstoken',"58010187") }}" class="btn btn-default btn-md pull-right" role="button">Add Token</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">58010211</div>
                            <div class="text-muted">Student Id</div>

                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.sid',"58010211") }}">Student Info.</a></h4>
                            <p>Name: Jessada </p>
                            <p>Surname: T.</p>
                            <a href="#" class="btn btn-default btn-md pull-right" role="button">Add Token</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

            <div class="article border-bottom">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">58010353</div>
                            <div class="text-muted">Student Id</div>

                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><a href="{{ route('admin.sid',"58010353") }}">Student Info.</a></h4>
                            <p>Name: Nutchaphon </p>
                            <p>Surname: U.</p>
                            <a href="#" class="btn btn-default btn-md pull-right" role="button">Add Token</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->

        </div>
    </div><!--End .articles-->

@endsection
