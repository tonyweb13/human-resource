<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HRMS</title>
    <link href="{{ mix('css/public.css') }}" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Welcome to HRMS</h2>
                <p>
                    Perfectly designed and precisely prepared admin theme with over 50
                    pages with extra new web app views.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.</small>
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        @if ($errors->has('employee_no'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('employee_no') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="form-group{{ $errors->has('employee_no') ? ' has-error' : '' }}">
                            <input id="employee_no" type="number" class="form-control" placeholder="Employee No."
                             name="employee_no" value="{{ old('employee_no') }}" required autofocus>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" name="password" class="form-control"
                            placeholder="●●●●●●●" required>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    </form>
                    <div class="m-t-xl">
                        <h5>Human Resource Management System @ Version 1.0.0</h5>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                ARB Call Facilities Inc.
            </div>
            <div class="col-md-6 text-right">
               <small>© 2018</small>
            </div>
        </div>
    </div>
</body>
</html>
