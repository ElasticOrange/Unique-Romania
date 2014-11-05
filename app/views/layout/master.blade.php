<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <title>
            Hello Unique
        </title>
    </head>
    <body>

        @include('partials.header')
         <div id="content">
            <div class="jumbotron">
            @yield('content')

        </div>
            </div>

    </body>

</html>
