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
                                                <td align="right">Student ID   :</td>
                                                <td align="left">58010187</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Name   :</td>
                                                <td align="left">Chirabhat</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Surname   :</td>
                                                <td align="left">Kijtham</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Tel.   :</td>
                                                <td align="left">0859090251</td>
                                            </tr>
                                            <tr>
                                                <td align="right">E-mail   :</td>
                                                <td align="left">58010187@kmitl.ac.th</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Faculty   :</td>
                                                <td align="left">Engineering</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Major   :</td>
                                                <td align="left">Telecommunication</td>
                                            </tr>
                                            <tr>
                                                <td align="right">Token   :</td>
                                                <td align="left">20</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>            </div>
            <a href="{{ route('student.profile.edit') }}" class="btn btn-default btn-md pull-right" role="button">Edit</a>
        </div>
    </div>

@endsection

