@extends('layouts.layout-student')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Profile</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Student Profile
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <ul class="list-group">
                    <li class="list-group-item">Student ID</li>
                    <li class="list-group-item">Name</li>
                    <li class="list-group-item">Tel.</li>
                    <li class="list-group-item">E-mail</li>
                    <li class="list-group-item">Faculty</li>
                    <li class="list-group-item">Major</li>
                    <li class="list-group-item">Token</li>

                </ul>
            </div>

            <button type="edit" class="btn btn-default btn-md pull-right">Edit</button>

            @endsection

