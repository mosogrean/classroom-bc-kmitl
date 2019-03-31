<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="register-panel panel panel-default">
            <div class="panel-heading">Register</div>
            <div class="panel-body">
                <form role="form" action="{{route('register.store')}}" method="post">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" placeholder="Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input class="form-control" placeholder="Surname" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required>
                        </div>
                        <div class="form-group">
                            <label>Tel.</label>
                            <input class="form-control" placeholder="Tel." name="tel." type="tel." autofocus="" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Confirmed Password</label>
                            <input class="form-control" placeholder="Password" name="confirmpassword" type="password" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Select your position</label>
                            <select class="form-control" name="position" required>
                                <option>Student</option>
                                <option>Teacher</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select your faculty</label>
                            <select class="form-control" name="faculty" required>
                                <option>Engineering</option>
                                <option>Architecture</option>
                                <option>Sciences</option>
                                <option>Education</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select your major</label>
                            <select class="form-control" name="major" required>
                                <option>Telecommunication</option>
                                <option>Electrical</option>
                                <option>Mechanical</option>
                                <option>Chemistry</option>
                                <option>Computer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Student ID</label>
                            <h>(For student only)</h>
                            <input class="form-control" placeholder="Please insert your student ID" name="studentID" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Agree to this terms <a href="Terms of service">Terms of services</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body></html>
