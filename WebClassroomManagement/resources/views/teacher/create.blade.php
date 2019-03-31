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
            Teacher Create Class
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
                                                <td align="left">00000001</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Position   :</td>
                                                <td align="left">Assoc.Prf.</td>
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
                                                <td align="right">Class name   :</td>
                                                <td align="left"><input class="form-control" placeholder=""></td>                                        </tr>
                                            </tr>
                                            <tr>
                                                <td align="right">Faculty   :</td>
                                                <td align="left"><select class="form-control">
                                                        <option>Engineering</option>
                                                        <option>Architecture</option>
                                                        <option>Sciences</option>
                                                        <option>Education</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">Major   :</td>
                                                <td align="left"><select class="form-control">
                                                        <option>Telecommunication</option>
                                                        <option>Electrical</option>
                                                        <option>Mechanical</option>
                                                        <option>Chemistry</option>
                                                        <option>Computer</option>
                                                    </select>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>            </div>
            <a href="{{ route('teacher.created') }}" class="btn btn-default btn-md pull-right" role="button">Create</a>
        </div>
    </div>

@endsection

