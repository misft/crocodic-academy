<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Home | Crocodic Academy</title>
</head>

@include('layout.header')

<body style="margin-top: 80px" class="col container-fluid landing-2">
    <div class="row">
        <div class="col">
            <h1>Our Program</h1>
            <p>We have two recommended programs for you</p>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="row w-100 align-items-start">
            <div class="col ">
                <h3>Basic Knowledge</h3>
            </div>
        </div>
        <div class="row bg-white w-100 m-3 p-4">
            <div class="col-6">
                <h5>Program Java</h5>
                <p class="wrap-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo iste ullam
                    illum iusto sed sint
                    consequatur culpa, veniam neque rem nemo.</p>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="/asset/03-icon/ic_salary.png" alt="" srcset="">
                    </div>
                    <div class="col-8">
                        <p>Program Duration</p>
                        <p>12 Weeks</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img class="w-100" src="/asset/03-icon/ic_salary.png" alt="" srcset="">
                    </div>
                    <div class="col-8">
                        <p>Talent level</p>
                        <p>12 Weeks</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h4 class="text-danger">FREE!</h4>
                <a class=" text-light btn btn-warning" href="/course/1">Join Program</a>
            </div>
        </div>
    </div>

    @include('layout.contactus')
</body>

@include('layout.footer')

</html>