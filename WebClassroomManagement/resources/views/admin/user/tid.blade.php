@extends('layouts.layout-admin')

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
            Teacher Info
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-body">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">

                                    <table class="col-lg-6 table" border="0">
                                        <tbody>
                                        <tr>
                                            <td align="right">Teacher ID   :</td>
                                            <td align="left">{{$id}}</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Position   :</td>
                                            <td align="left">Asoc.Prf.</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Name   :</td>
                                            <td align="left">Pramote</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Surname   :</td>
                                            <td align="left">Wardkien</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Tel.   :</td>
                                            <td align="left">0816997616</td>
                                        </tr>
                                        <tr>
                                            <td align="right">E-mail   :</td>
                                            <td align="left">pramote@telecom.kmitl.ac.th</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Room Reserve   :</td>
                                            <td align="left">1</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Class in hand   :</td>
                                            <td align="left">0</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>

                                <div class="col-lg-3"></div>
                            </div>

                    </div>
                </div>
            </div>

            <a href="{{ route('admin.user.teacher') }}" class="btn btn-default btn-md pull-right" role="button">Back</a>
            <input type="button" class="btn btn-default btn-md pull-right" onclick="location.href='{{ route('admin.tedit',$id) }}';" value="Edit" />
        </div>
    </div>

        @endsection

