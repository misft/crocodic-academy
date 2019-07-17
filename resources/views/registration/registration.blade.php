<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body class="col container-fluid" style="background-image: url('/asset/01-background/bg_timeline.png')">
    <div class="row align-items-center justify-content-center">
        <div class="col-xl align-self-center justify-content-center jumbotron bg-white">
            <div>
                <h2>Be a passionate Developer now!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat amet perferendis sit! Enim animi
                    asperiores natus, facere sint voluptatem quam amet praesentium aliquam neque. Deleniti distinctio
                    voluptates possimus neque ex.</p>
            </div>
            <form class="mt-4" method="post" action="/register/insert">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="" class="form-control" type="text" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input id="" class="form-control" type="text" name="name" placeholder="Name"  required>
                </div>
                <div class="form-group">
                    <input id="" class="form-control" type="password" name="password" placeholder="Password"  required>
                </div>
                <div class="form-group">
                    <input id="" class="form-control" type="password" name="r-password" placeholder="Rewrite password"  required>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <input id="" class="form-control" type="text" name="place_birth" placeholder="Place of birth"  required>
                    </div>
                    <div class="col">
                        <input class="form-control" type="date" name="date_birth" id="" placeholder="Birth date"  required>
                    </div>
                </div>
                <div class="form-group">
                    <input id="" class="form-control" type="text" name="school" placeholder="School"  required>
                </div>
                <fieldset>
                    <div class="row"> 
                        <legend class="col-form-label col-sm-2 pt-0">Interest</legend>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="interest" id="gridRadios1" value="1"
                                    checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Web Programmer
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="interest" id="gridRadios2" value="2">
                                <label class="form-check-label" for="gridRadios2">
                                    Android Programmer
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="row justify-content-center form-group">
                    <input class="btn btn-warning btn-lg text-light" type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
        <div class="col-md-6" style="background-image: url('asset/01-background/bg_timeline.png')">

        </div>
    </div>
    @include('layout.contactus')
    @include('layout.footer');
</body>

</html>