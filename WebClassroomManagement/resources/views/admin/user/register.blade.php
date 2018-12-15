@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Register</div>

                    <div class="card-body">

                        <div class="container">
                            <form class="form-horizontal" action="{{ route('admin.user.register.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Username:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter email" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  placeholder="Enter password" name="pwd">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
