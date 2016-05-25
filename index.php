<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Giulio Bonanome</title>
        <meta name="description" content="Giulio Bonanome in one page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- Bootstrap spice -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" media="screen">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">

        <link href='http://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
	
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            <h1>Giulio Bonanome</h1>
            <h2 class="tagline">Full-time thinker, part-time developer, wannabe maker.</h2>

            <ul class="findme list-inline">
                <li><a href="mailto:giulio@bonano.me"><i class="fa fa-envelope fa-4x"></i></a></li>
                <li><a href="https://github.com/gbonanome" target="_blank"><i class="fa fa-github fa-4x"></i></a></li>
                <li><a href="http://twitter.com/gbonanome" target="_blank"><i class="fa fa-twitter fa-4x"></i></a></li>
                <li><a href="http://it.linkedin.com/in/gbonanome/" target="_blank"><i class="fa fa-linkedin fa-4x"></i></a></li>
            </ul>


            <section class="bio">
            <h3>BIO</h3>
            <p>
                Sono una persona curiosa e appassionata. Attualmente mi occupo di <strong>educazione e tecnologia</strong>. Prima ho fatto lo <strong>sviluppatore web</strong> freelance e nel mondo delle biblioteche. Amo cinema, fumetti, information visualization, <strong>open source</strong>. Mi piacerebbe imparare a disegnare e a costruire robot ma manco di auto-disciplina. Ad esempio compro sempre più libri di quanti riesca poi a leggerne.
            </p>
            <!--<p><a href="cv">Qui una sorta di CV</a>.</p>-->
            </section>

            <section class="blogs row">
                <div class="col-md-6">
                    <a href="http://omote.bonano.me" target="_blank">
                        <img src="./img/omote.jpg" class="img-circle avatar">
                    </a>
                    <h2><a href="http://omote.bonano.me" target="_blank">Omote</a></h2>
                </div>
                <div class="col-md-6">
                    <a href="http://kintaroisland.wordpress.com" target="_blank">
                        <img src="./img/ura.jpg" class="img-circle avatar">
                    </a>
                    <h2><a href="http://kintaroisland.wordpress.com" target="_blank">Kintaro Island</a></h2>
                </div>
            </section>

        </div>
        
        <footer>
            <div class="container">
                <p class="credits"><strong>Credits:</strong>
                    family&amp;friends, HTML5Boilerplate, Bootstrap, FontAwesome, SubtlePattern, Animate.css
                </p>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <script>
            setTimeout(function () {
                $('.findme li').addClass('animated pulse');
            }, 400);
        </script>

        <?php
            include_once 'ga.php';
        ?>
    </body>
</html>
