<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <title>Program Java | Crocodic Academy</title>
</head>

<body class="container-fluid">
    <div class="col p-4">
        <div class="row justify-content-center h-25">
            <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example col-7">
                <h4 id="list-item-1">Item 1</h4>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum harum recusandae aut, vero impedit
                    assumenda eum tempora quisquam repellendus quaerat, nam sunt dolore itaque nisi quidem velit fugiat
                    dolorum voluptates?
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque reprehenderit dignissimos, eum
                    quisquam voluptate debitis deleniti hic porro quidem non dolores provident unde distinctio, iste,
                    vitae ipsa itaque sunt qui?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptates inventore voluptate
                    officiis. Aspernatur, culpa dolore? Expedita labore cum qui quisquam nesciunt suscipit, quaerat
                    deleniti veniam, facere cupiditate ipsam tenetur!
                </p>
                <h4 id="list-item-2">Item 2</h4>
                <p>...</p>
                <h4 id="list-item-3">Item 3</h4>
                <p>...</p>
                <h4 id="list-item-4">Item 4</h4>
                <p>...</p>
            </div>
            <div id="list-example" class="list-group col-3">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
            </div>
        </div>
    </div>
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>