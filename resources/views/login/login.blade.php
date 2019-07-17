<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

{{-- @include('layout.header') --}}

<body class="row justify-content-center align-items-center ">
    <div class="col">
        <div class="row justify-content-center">
            <img src="asset/03-icon/ic_logo_crocodic_academy@2x.png" alt="">
        </div>
    </div>
    <div class="col">
        <div class="row justify-content-center">
            <form class="w-75" action="login/user" method="get">
                <div class="form-group">
                    <input id="" class="form-control shadow-sm" type="text" name="username" placeholder="Email">
                </div>
                <div class="form-group">
                    <input id="" class="form-control shadow-sm" type="text" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="row justify-content-center">
                            <input id="" class="mx-auto shadow text-light w-25 form-control btn btn-warning" type="submit" value="Log in">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Didn't have an account yet? <a class="text-light" href="/register">Register here</a></label>
                </div>
            </form>
        </div>

    </div>
</body>

<style>
    body {
        height: 100vh;
        width: 100%;
        background-image: url('/asset/01-background/bg_banner.png')
    }
</style>

</html>