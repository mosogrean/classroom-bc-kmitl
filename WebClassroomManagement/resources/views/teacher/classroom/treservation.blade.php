@extends('layouts.layout-teacher')

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">classroom</li>
            <li class="active">teacherand student room</li>
            <li class="active">{{$room}}</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Teacher and Student Room</h1>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">Confirmed Panel Data</div>
            <div class="panel-body">
                <form action="{{route('student.sconfirmation')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">

                                <table class="col-lg-6 table" border="0">
                                    <tbody>
                                    <tr>
                                        <td align="right">Room   :</td>
                                        <td align="left">{{$room}}</td>
                                    </tr>
                                    <tr>
                                        <td align="right">Time   :</td>
                                        <td align="left">{{$time}}</td>
                                    </tr>
                                    <tr>
                                        <td align="right">Date   :</td>
                                        <td align="left">{{$day}} [ {{ $date }} / {{$month}} / {{$year}} ]</td>
                                    </tr>
                                    </tbody>
                                </table>
                            <input type="hidden" name="room" value="{{$room}}">
                            <input type="hidden" name="time" value="{{$time}}">
                            <input type="hidden" name="date" value="{{ $date }}/{{$month}}/{{$year}}">

                        </div>

                        <div class="col-lg-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div align="right">
                                <input type="submit" class="btn btn-md btn-confirm" style="background:#8AD919" value="Confirm">
                                <input type="submit" class="btn btn-md btn-danger" formaction="{{route('teacher.classroom.teacher')}}" formmethod="get" value="Cancel">
                                {{--<button type="button" class="btn btn-md btn-confirm btn-align:center" style="background:#8AD919">Confirm</button>--}}
                                {{--<button type="button" class="btn btn-md btn-danger">Cancel</button>--}}
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
