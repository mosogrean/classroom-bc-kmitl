@extends('layouts.layout-admin')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
            <li class="active">{{$id}}</li>
            <li class="active">Room</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher user room</h1>
        </div>
    </div>
    <div class="panel panel-default articles">
        <div class="panel-heading">
            Teacher Recently Reserve
            <ul class="pull-right ">

            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body articles-container">

            <div class="article border-bottom" style="background:#cce6ff">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3 col-md-3 date">
                            <div class="large">{{$id}}</div>
                        </div>
                        <div class="col-xs-9 col-md-9">
                            <h4><li><a href='{{ route('admin.tid.opentroom',$id)}}'>T-101</a></li></h4>
                            <h>Date: 25-01-2019</h>
                            <h>Address: อาคารโทรคมฯ ชั้น1 คณะวิศวกรรมศาสตร์</h>
                            <a href="{{ route('admin.tid.unreservet',$id) }}" class="btn btn-default btn-md pull-right" role="button">Unreserve</a>

                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div><!--End .article-->


        </div>

    </div>



        <div class="col-md-3"  >
            <div class="panel panel-unavailable">
                <div class="panel-heading"  style="background:#cce6ff">Reserved
                    </div>

            </div>
        </div>

        <div class="col-md-3"  >
            <div class="panel panel-unavailable">
                <div class="panel-heading"  style="background:#ffd1b3">On using
                    </div>

            </div>
        </div>
@endsection
