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
            <h1 class="page-header">Add Room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Add Room
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">Edit Room Data</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">

                                <table class="col-lg-6 table" border="0">
                                    <tr>
                                    <tr>
                                        <td align="right">Room ID   :</td>
                                        <td align="left"><input class="form-control" placeholder="ID"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Room Type   :</td>
                                        <td align="left"><select class="form-control">
                                                <option>-</option>
                                                <option>Student</option>
                                                <option>Teacher</option>
                                                <option>Teacher and Student</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Address   :</td>
                                        <td align="left"><input class="form-control" placeholder="Address"></td>
                                    </tr>

                                    </tbody>
                                </table>
                                <a href="{{ route('admin.classroom.student') }}" class="btn btn-default btn-md pull-right" role="button">Back</a>
                                <a href="{{ route('admin.confirm') }}" class="btn btn-success btn-md pull-right" role="button">Confirm</a>
                            </div>

                            <div class="col-lg-3"></div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div><!--End .articles-->

@endsection
