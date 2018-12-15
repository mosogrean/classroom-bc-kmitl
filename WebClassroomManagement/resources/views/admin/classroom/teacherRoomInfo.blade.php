@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Room Info.</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ $room }}<br>
                        <a href="{{ route('admin.classroom.list') }}" class="btn btn-info" role="button">Classroom list</a>
                        <a href="{{ route('admin.classroom.list.teacher_room.info.reserve', $room) }}" class="btn btn-info" role="button">Reserve</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
