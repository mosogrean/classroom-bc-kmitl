@extends('layouts.layout-teacher')

@section('content')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">classroom</li>
        <li class="active">teacher room</li>
        <li class="active">HM303</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">HM303</h1>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        Calendar
        <ul class="pull-right panel-settings panel-button-tab-right">
            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                    <em class="fa fa-cogs"></em>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <ul class="dropdown-settings">
                            <li><a href="#">
                                    <em class="fa fa-cog"></em> Settings 1
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <em class="fa fa-cog"></em> Settings 2
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <em class="fa fa-cog"></em> Settings 3
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
        <div id="calendar"></div>
        <div>
            <form>
                <input type="hidden" id="route" value="{{ route('t-res-date') }}">
            </form>
        </div>
    </div>
</div>

@endsection
