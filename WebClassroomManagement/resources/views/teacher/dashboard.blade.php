@extends('layouts.app-user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student role</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ route('teacher.dashboard') }}" class="btn btn-info" role="button">Dashboard</a>

                    </div>

                    <div><br></div>
                    <div class="card">
                        <div class="container">
                            <div><br></div>
                            <h2>teacher Recently Reserve</h2>
                            <p>ข้อมูลการใช้งานล่าสุดของอาจารย์:</p>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Room reserve</th>
                                    <th>Date reserve</th>
                                    <th>Room key</th>
                                    <th>Reserving status</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>9.00-12.00</th>
                                    <th>HM304</th>
                                    <th>18/12/2018,14.54</th>
                                    <th>7M4Pk</th>
                                    <th>Reserving</th>
                                </tr>

                                <tr>
                                    <th>13.00-16.00</th>
                                    <th>D513</th>
                                    <th>15/12/2018,16.49</th>
                                    <th>7b5CO</th>
                                    <th>Reserving</th>
                                </tr>

                                <tr>
                                    <th>16.30-19.30</th>
                                    <th>E303</th>
                                    <th>15/12/2018,19.20</th>
                                    <th>YJ45a</th>
                                    <th>Reserving</th>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
