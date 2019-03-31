@extends('layouts.layout-admin')

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
            <h1 class="page-header">Close this room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            {{$room}}
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            The room has been closed.
            <a  href="{{ route('admin.classroom.student') }}" class="btn btn-success btn-md pull-right" role="button">Reopen</a>



        </div>
    </div><!--End .articles-->

@endsection
