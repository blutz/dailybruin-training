<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Daily Bruin Training | Winter 2013</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Daily Bruin training</a>
                </div>
            </div>
        </div>

        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Welcome to Daily Bruin Online training!</h1>
                <p>Training dates:
                    <ul>
                        <li><strong>Jan. 19 (Ackerman 3508) &mdash; 10:15 a.m. to 4 p.m.</strong></li>
                        <li>Jan. 26 (Ackerman 2412) &mdash; 10:30 a.m. to 4 p.m.</li>
                        <li>Feb. 2  (Kerckhoff 135) &mdash; 10:30 a.m. to 4 p.m.</li>
                        <li>Jan. 22 (Kerckhoff Grand Salon) &mdash; 6 p.m. to 8 p.m. (media law briefing)</li>
                        
                    </ul>
                </p>
                <p><a class="btn btn-primary btn-large" href="mailto:online@media.ucla.edu">Questions? Email us</a> <a class="btn btn-large" href="http://byron-lutz-geog7.dreamhosters.com/VM.ova">Download VM</a></p>
            </div>

            <!-- Example row of columns -->
            <?php if(isset($_GET['day']) && $_GET['day'] == "1"):?>
            <div class="row">
                <div class="span12">
                    <h1>Day 1</h1>
                </div>
                <div class="span12">
                    <h4>Getting to know Daily Bruin</h4>
                    <ol>
                        <li>Sign up for an account on <a href="https://github.com/">GitHub</a></li>
                        <li><a href="http://mail.google.com/">Login</a> to your media mail account (default password is <code>bruin111</code> and username is <code>[first initial][last name]@media.ucla.edu</code>)</li>
                        <li>Set up <a href="http://support.google.com/mail/bin/answer.py?hl=en&answer=10957">email forwarding</a> or something so you will check your media mail regularly. This is the only address we will use to communicate with you.</li>
                        <li><a href="https://docs.google.com/a/media.ucla.edu/spreadsheet/viewform?formkey=dDBJamhobktzTGZvTTJlUTM2MFhqWUE6MQ#gid=0">Fill out this form</a> <span class="label"><i class="icon-user icon-white"></i></span> with your name and GitHub username</li>
                        <li><a href="https://docs.google.com/a/media.ucla.edu/spreadsheet/ccc?key=0Apoe5ntvA0zKdHQtaEZ4WWdyMDJCWmJPdVhGSnlfQ0E#gid=2">Sign up for a web production shadowing shift</a> <span class="label"><i class="icon-user icon-white"></i></span></li>
                    </ol>
                </div>
            </div><!-- end div.row -->
            <hr />
            <?php endif; ?>
            <div class="row">
                <div class="span12">
                    <h2>About the VM</h2>
                </div>
                <div class="span4">
                    <p>The virtual machine is based off <a href="http://www.ubuntu.com/business/server">Ubuntu server</a> version 12.10. It can be run in <a href="https://www.virtualbox.org/">VirtualBox</a>, a free piece of virtualization software from Oracle.</p>
                    <p>The VM has MySQL, python, django, apache, git, and more installed. It is configured with a running installation of a django project and the Daily Bruin website theme (in WordPress).</p>
                    <p><strong>DO NOT USE THIS VM AS A PRODUCTION SERVER</strong></p>
                </div>
                <div class="span4">
                    <h3>Ports</h3>
                    <ul>
                        <li><code>8022</code> &mdash; SSH</li>
                        <li><code>8080</code> &mdash; WordPress (<a href="http://localhost:8080">Go to this</a>)</li>
                        <li><code>8081</code> &mdash; An empty apache-served folder (<a href="http://localhost:8081">Go to this</a>)</li>
                        <li><code>8082</code> &mdash; A blank django project (<a href="http://localhost:8082">Go to this</a>)</li>
                    </ul>
                </div>
                <div class="span4">
                    <h3>Default accounts</h3>
                    <dl>
                        <dt>Linux/Django/WordPress/etc.</dt>
                        <dd><code>dailybruin</code> / <code>bruin111</code></dd>
                        
                        <dt>MySQL</dt>
                        <dd><code>root</code> / <code>root</code></dd>
                    </dl>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="span4">
                    <h2>Contacts</h2>
                    <p>All Daily Bruin contacts are listed at <a href="http://bit.ly/dailybruinstaff">http://bit.ly/dailybruinstaff</a> <span class="label"><i class="icon-user icon-white"></i></span><p>
                    <p><strong>Anthony Pesce</strong>: Trainer<br />
                        LA Times</p>
                    <p><strong>Byron Lutz</strong>: Web Producer<br />
                        <a href="mailto:blutz@media.ucla.edu">blutz@media.ucla.edu</a><br />
                        (209)820-2992
                    </p>
                    <p><strong>Kelly Zhou</strong>: Web Producer<br />
                        <a href="mailto:kzhou@media.ucla.edu">kzhou@media.ucla.edu</a>
                    </p>
                    <p><strong>Devin Kelly</strong>: Online Managing Editor</br>
                        <a href="mailto:dkelly@media.ucla.edu">dkelly@media.ucla.edu</a>
                    </p>
                </div>
                <div class="span4">
                    <h2>Resources</h2>
                    <ul>
                        <li><a href="http://data.universityofcalifornia.edu/welcome.html">UCOP Data</a></li>
                        <li><a href="https://docs.google.com/presentation/d/1QdiQvVzUf1N7BkDZyo-XFgIQ8xqYWUR0de-BGaCijVQ/edit">LA Times data desk presentation</a> (the <a href="http://www.youtube.com/watch?v=S62J6SssxNE">original presentation</a> in downtown LA)</li>
                        <li><a href="http://www.codecademy.com/tracks/web">Code Academy</a> (learn HTML/CSS)</li>
                        <li><a href="https://developers.google.com/edu/python/">Google's python course</a></li>
                        <li><a href="http://learn.shayhowe.com/html-css">A beginner's guide to HTML/CSS</a></li>
                        <li><a href="https://docs.djangoproject.com/en/1.4/">Django documentation</a></li>
                        <li><a href="http://gitimmersion.com/">Git Immersion</a> (git tutorial)</li>
                    </ul>
                    <h4>Software Downloads</h4>
                    <ul>
                        <li><a href="http://www.sublimetext.com/">Sublime</a> &mdash; cross-platform text editor</li>
                        <li><a href="http://cyberduck.ch/">CyberDuck</a> &mdash; cross-platform SFTP client</a></li>
                        <li><a href="https://www.virtualbox.org/">VirtualBox</a> &mdash; cross-platform virtualization software</a></li>
                    </ul>
                </div>
                <div class="span4">
                    <h2>Daily Bruin links <span class="label"><i class="icon-user icon-white"></i></span></h2>
                    <h4>General</h4>
                    <ul>
                        <li><a href="https://docs.google.com/a/media.ucla.edu/document/d/1tTofmvCYX9ZgQay7P7suxD9PL6fGiuFbsKSu1edhjfE/edit">Online department guide</a></li>
                        <li><a href="http://mail.google.com/">Media mail</a> </li>
                        <li><a href="http://bit.ly/dailybruinstaff">Contacts</a></li>
                        
                    </ul>
                    <h4>Web production</h4>
                    <ul>
                        <li><a href="http://dailybruin.com/bruin-admin/">Website backend login</a></li>
                        <li><a href="https://docs.google.com/a/media.ucla.edu/document/d/1ISa739JAaoDFkUYEEVSpS_PzngOo7mlbbRITsw5N2b8/edit">Online rankings</a></li>
                        <li><a href="https://docs.google.com/a/media.ucla.edu/spreadsheet/ccc?key=0Apoe5ntvA0zKdHQtaEZ4WWdyMDJCWmJPdVhGSnlfQ0E#gid=2">Web production schedule</a></li>
                        <li><a href="https://docs.google.com/a/media.ucla.edu/document/d/1mim_Da0nz9-l15v76_jsV1Uhb4xUWA4zQQZPQX-uPvI/pub">Web production guide</a></li>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; <a href="http://dailybruin.com">Daily Bruin</a> 2013</p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
