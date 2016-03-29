<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Cursos')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link href="css/estiloCursos.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="css/ihover.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/hover.css" rel="stylesheet" media="all">
        <!--<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>-->
        <!--<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>-->
        <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>

        <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <style>
        </style>    

    </head>
    <body>
        <header>        
            @yield('header')
        </header>
        <div class="container-fluid">
            @yield('content')
        </div>
        <ul class="nav pull-right scroll-top">
            <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
        </ul>
        <div id="footer" class="text-center">
                <ul class="social-network social-circle">
                    <!--<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>-->
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <!--<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>-->
                </ul>				
        </div>



        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="js/fileinput.js" type="text/javascript"></script>
<!--        <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>-->
        <script src="js/fileinput_locale_es.js" type="text/javascript"></script>
        <script>
            /* smooth scrolling for scroll to top */
            $('.scroll-top').click(function () {
                $('body,html').animate({scrollTop: 0}, 1000);
            })
        </script>
    </body>
</html>
