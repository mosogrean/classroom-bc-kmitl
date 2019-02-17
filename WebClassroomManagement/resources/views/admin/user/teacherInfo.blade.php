@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teacher Info.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="{{ route('admin.dashboard') }}" class="btn btn-info" role="button">Dashboard</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-info" role="button">List account</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-info" role="button">Teacher</a>
                        <a href="{{ route('admin.user.list.student') }}" class="btn btn-info" role="button">Student</a>

                        <div class="card">
                            <div class="container">
                                <div><br></div>
                                <h2>Teacher ID:{{ $id }}</h2>
                                <td><a href="{{ route('admin.user.list.teacher.info', $id) }}"class="btn btn-info" role="button">Add Coin</a></td>

                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
