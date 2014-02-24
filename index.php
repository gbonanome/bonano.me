<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Giulio Bonanome</title>
        <meta name="description" content="Giulio Bonanome in one page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.min.css">

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
            <h2 class="tagline">Full-time thinker, part-time developer, wannabe teacher.</h2>

            <ul class="findme list-inline">
                <li><a href="mailto:giulio@bonano.me"><i class="fa fa-envelope fa-4x"></i></a></li>
                <li><a href="https://github.com/gbonanome"><i class="fa fa-github fa-4x"></i></a></li>
                <li><a href="http://twitter.com/gbonanome"><i class="fa fa-twitter fa-4x"></i></a></li>
                <li><a href="http://it.linkedin.com/in/gbonanome/"><i class="fa fa-linkedin fa-4x"></i></a></li>
            </ul>


            <section class="bio">
            <h3>BIO</h3>
            <p>Sono uno <strong>sviluppatore</strong> web che si occupa di <strong>biblioteche</strong>. Mi è sempre piaciuto insegnare ma è difficile, perchè vuol dire prepararsi. Amo il cinema e i fumetti, l’information visualization, l’<strong>open source</strong>. Mi piacerebbe saper disegnare e costruire robot ma manco di autodisciplina. Ad esempio, compro sempre più libri di quanti poi ne riesca a leggere.
            </p>
            <p>Ho provato a scrivere <a href="cv">una specie di curriculum</a>.</p>
            <!-- 
                TODO: 
                - link al CV 
                - versione inglese o link a versione inglese
            -->
            </section>

            <section class="blogs row">
                <div class="col-md-6">
                    <a href="http://omote.bonano.me">
                        <img src="./img/omote.jpg" class="img-circle avatar">
                    </a>
                    <h2><a href="http://omote.bonano.me">Omote</a></h2>
                    <p>Un blog che parla di sviluppo web, tecnologia, forse anche biblioteche</p>
                </div>
                <div class="col-md-6">
                    <a href="http://kintaroisland.wordpress.com">
                        <img src="./img/ura.jpg" class="img-circle avatar">
                    </a>
                    <h2><a href="http://kintaroisland.wordpress.com">Kintaro Island</a></h2>
                    <p>Il mio blog di sempre, dove scrivo cose personali.</p>
                </div>
            </section>

        </div>
        
        <footer>
            <div class="container">
                <p class="text-muted credits"><strong>Some credits:</strong>
                    HTML5Boilerplate, Bootstrap, FontAwesome, SubtlePattern, poi ne aggiungo altri...
                </p>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <?php
            include_once 'ga.php';
        ?>
    </body>
</html>
