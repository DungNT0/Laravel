<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sum AB</title>
        <link rel="stylesheet" href="/assets/style.css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="container">
        <form class="form__box" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Enter number a:</label>
                <input type="number" class="box__input" name="numbA">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter number b:</label>
                <input type="number" class="box__input" name="numbB">
            </div>
            <button type="submit" class="form__btn">Submit</button>
            <div class="ans__sum">
                <input type="number" class="box__input" placeholder="Result" disabled="" value="<?php if(isset($sum)) echo $sum; ?>">
            </div>
        </form>
    </body>
</html>