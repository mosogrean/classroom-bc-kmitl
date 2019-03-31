@extends('layouts.layout-admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">User Info</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Info</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Student Info
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Edit Profile</div>
                    <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">

                                    <table class="col-lg-6 table" border="0">
                                        <tr>
                                        <tr>
                                            <td align="right">Student ID   :</td>
                                            <td align="left"><input class="form-control" placeholder="ID"></td>
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
                                        </tr>
                                        <tr>
                                            <td align="right">Room Reserve   :</td>
                                            <td align="left">
                                                <h4><a href="{{ route('admin.sid.sroom',"58010187") }}">This user has reserved 1 room.</a></h4>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>

                                <div class="col-lg-3"></div>
                            </div>

                    </div>
                </div>
            </div>

            <a href="{{ route('admin.sid',$id) }}" class="btn btn-default btn-md pull-right" role="button">Cancel</a>
            <a href="{{ route('admin.sid',$id) }}" class="btn btn-default btn-md pull-right" role="button" style="background:#8AD919">Save</a>
        </div>
    </div>
            @endsection

