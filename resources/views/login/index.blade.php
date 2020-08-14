<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{url('css/login-style.css')}}">
</head>
<body>

    <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        <h3>MOKSHA STORES LOGIN</h3>
        </div>

        <!-- Login Form -->
        <form action="{{url('user-verify')}}" method='POST'>

        {{csrf_field() }}

        <input type="text" id="login" class="fadeIn second" name="email" placeholder="LOGIN">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="PASSWORD">
        <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>
    @section('custom-js')
    <script type="text/javascript">
    $(document).ready(function(){
        alert('dddddddd');
    });

    </script>
    @endsection
</body>
</html>