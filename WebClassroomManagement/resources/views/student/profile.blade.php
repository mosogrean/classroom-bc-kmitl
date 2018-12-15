@extends('layouts.app-user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul class="list-group">
                            <li class="list-group-item active">Student ID</li>
                            <li class="list-group-item">Name</li>
                            <li class="list-group-item">Tel.</li>
                            <li class="list-group-item">E-mail</li>
                            <li class="list-group-item">Token</li>
                            <li class="list-group-item">Room</li>
                        </ul>
                    </div>
                </div>
            </div>
@endsection
