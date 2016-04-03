<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chutipong site</title>
        {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::script('https://code.jquery.com/jquery-2.2.2.min.js') !!}
        {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>