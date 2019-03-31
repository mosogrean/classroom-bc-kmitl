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
            Admin Profile
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Edit Profile</div>
                    <div class="panel-body">
                        <form action="{{route('student.tsconfirmation')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">

                                    <table class="col-lg-6 table" border="0">
                                        <tbody>
                                        <tr>
                                            <td align="right">Admin ID   :</td>
                                            <td align="left">Admin1</td>
                                        </tr>
                                        <tr>
                                            <td align="right">Name   :</td>
                                            <td align="left"><input class="form-control" placeholder="Name"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Surname   :</td>
                                            <td align="left"><input class="form-control" placeholder="Surname"></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Tel.   :</td>
                                            <td align="left"><input class="form-control" placeholder="Tel."></td>
                                        </tr>
                                        <tr>
                                            <td align="right">E-mail   :</td>
                                            <td align="left"><input class="form-control" placeholder="E-mail"></td>                                        </tr>
                                        <tr>
                                            <td align="right">Position   :</td>
                                            <td align="left"><select class="form-control">
                                                    <option>Student</option>
                                                    <option>Teacher</option>
                                                    <option>Officer</option>
                                                    <option>Admin</option>
                                                </select>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>

                                <div class="col-lg-3"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <a href="{{ route('admin.profile') }}" class="btn btn-default btn-md pull-right" role="button">Cancel</a>
            <a href="{{ route('admin.profile') }}" class="btn btn-default btn-md pull-right" role="button" style="background:#8AD919">Save</a>

            @endsection

