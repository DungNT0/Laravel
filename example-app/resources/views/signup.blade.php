<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sum AB</title>
        <link rel="stylesheet" href="/assets/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="container">
        <form action='' style="width:600px;margin-left:50px;" class="form__box" method="post">
            @crfs
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Date</label>
                <input type="text" class="form-control" name="date">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>

            <div class="form-group">
                <label for="">Web</label>
                <input type="text" class="form-control" name="web">
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address">
            </div>

            <div>
                @include('error')
            </div>

            <div class="display-info">
                @if(isset($user))
                    <p>Name: {{$user['name']}}</p>
                    <p>Age: {{$user['age']}}</p>
                    <p>Date: {{$user['date']}}</p>
                    <p>Phone: {{$user['phone']}}</p>
                    <p>Web: {{$user['web']}}</p>
                    <p>Address: {{$user['address']}}</p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary" style="left:200px;">OK</button>
        </form>
    </body>
</html>