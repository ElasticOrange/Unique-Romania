<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <title>Stiu o poveste</title>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery/jquery-2.1.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!-- Fancybox -->
        <link rel="stylesheet" href="/js/fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="/js/fancyBox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/js/fancyBox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="/js/fancyBox/source/helpers/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="/js/fancyBox/source/helpers/jquery.fancybox-media.js"></script>

        <!-- ScrollTo -->
        <script type="text/javascript" src="/js/scrollTo/jquery.scrollTo.min.js"></script>

        <script src="/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : {{ Config::get('facebook.app_id') }},
                    xfbml      : true,
                    version    : 'v2.1'
                });
            };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>

        <script src="/js/main.js"></script>

        @yield('js')
    </body>

</html>
