<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="../fonts/fontawesome-free-6.1.1-web/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <title>User Form</title>
    </head>

    <body>
    <div class="row">
            <div class="col-sm-9">
                <form role="form" id="my-form">
                    <div class="form-group">
                        <div>
                            <label for="name"> Username </label>
                            <input class="form-control" id="username" type="text">
                        </div>

                        <div>
                            <label for="email"> Email </label>
                            <input class="form-control" id="email" type="email">
                        </div>

                        <div>
                            <label for="password"> Password </label>
                            <input class="form-control" id="password" type="password">
                        </div>

                        <button class="alert alert-primary" id="submit-form"> Submit </button>
                    </div>
                </form>
            </div>
    </body>
</html>