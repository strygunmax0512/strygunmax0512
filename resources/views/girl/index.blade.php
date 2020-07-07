<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <aside>
                <form action="/girl">

                    <div class="form-group">
                        <lable for="name" class="from-controller">Name</lable>
                        <input type="text" name="name" value="{{ request()->name }}" class="from-controller">
                    </div>

                    <div class="form-group">
                        <lable for="age" class="from-controller">age</lable>
                        <input type="range" id="age" value="0" name="age" min="0" max="11">
                    </div>


                    <button type="submit" class="btn btn-danger">Send</button>
                    <a href="/girl" class="btn btn-primary">Reset</a>
                </form>
            </aside>
        </div>
    </div>

    <div class="row mt-5">
            @foreach($girls as $girl)
            <div class="col-4">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $girl->name }}</h5>
                        <p class="card-text">{{ $girl->age }}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

</body>
</html>
