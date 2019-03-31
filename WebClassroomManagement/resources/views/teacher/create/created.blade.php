@extends('layouts.layout-teacher')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Create Class</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Class</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
           Your class has been created
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">
            <div class="form-group">
                <div class="col-xs-9 col-md-9">
                    <h4>Class name: Telecom01</h4>
                    <br><h>Teacher ID: 00000001</h></br>
                    <br><h>Position: Assoc.Prof.</h></br>
                    <br><h>Name: Pramote</h></br>
                    <br><h>Surname: Wardkien</h></br>
                    <br><h>Faculty: Engineering</h></br>
                    <br><h>Major: Telecommunication</h></br>

                </div>


            </div>

        </div>
    </div>



@endsection
