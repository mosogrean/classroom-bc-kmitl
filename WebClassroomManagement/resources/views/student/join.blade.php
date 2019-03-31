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
           You have Joined this class
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">
            <div class="form-group">
                <div class="col-xs-9 col-md-9">
                    <h4>E12-704</h4>
                    <h>Class: Telecom01</h>
                    <br><h>Teacher ID: 00000001</h></br>
                    <br><h>Time: 9.00-12.00</h></br>
                    <br><h>Date: 25-01-2019</h></br>
                    <h>Address: อาคาร7ชั้น ชั้น3 คณะวิศวกรรมศาสตร์</h></br>

                    <a href="#" class="btn btn-success btn-md pull-right" role="button">Join more</a>
                </div>


            </div>

        </div>
    </div>



@endsection
