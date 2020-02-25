<!DOCTYPE html>
<html lang="de">
    <head>
        <title>FlyRe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
        <link href="styleslider.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img class ="itemindex" src="src/image/img1.jpg" alt="Bootstrap Touch Slider" class="slide-image"/>
                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_center">
                                <h1 class ="welcometextbig" data-animation="animated flipInX">Lesen immer</h1>
                                <p class ="welcometext" data-animation="animated lightSpeedIn"> <i>”Lesen ist für mich die vergnüglichste und süßeste Beschäftigung für ungefähr zwei bis sechs Stunden täglich. Ich weiß nicht, wann ich zuletzt mal Tage ganz ohne Lesen verbracht habe. Beim Lesen habe ich das Gefühl, ich gewinne Zeit, Lebenszeit, Aufmerksamkeit, Konzentration, Anregung, Bilder, Erfahrungen.”  
                                    </i> <br> Julia Franck</p>
                                <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp" data-toggle="modal" data-target="#RegistrationModal">Registrierung</a>
                                <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown" data-toggle="modal" data-target ="#LoginModal">Eingang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img class ="itemindex" src="src/image/img2.jpg" alt="Bootstrap Touch Slider" class="slide-image"/>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 class ="welcometextbig" data-animation="animated flipInX">Lesen mit Komfort</h1>
                        <p class ="welcometext"  data-animation="animated lightSpeedIn"><i>"Ich will nur was wir alle wollen: eine gemütliche Couch, ein schönes Getränk, ein Wochenende ohne Termine und ein Buch, das die Zeit anhält und mich aus meinem Alltag heraus holt und meine Gedanken für immer verändert."</i>
                            <br> Elizabeth Gilbert</p>
                        <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp" data-toggle="modal" data-target="#RegistrationModal">Registrierung</a>
                        <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown" data-toggle="modal" data-target ="#LoginModal">Eingang</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img class ="itemindex" src="src/image/img3.jpg" alt="Bootstrap Touch Slider" class="slide-image"/>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 class ="welcometextbig"  data-animation="animated flipInX">Lesen mit uns</h1>
                        <p class ="welcometext"  data-animation="animated lightSpeedIn"><i>„Von seinen Eltern lernt man lieben, lachen, und laufen. Doch erst wenn man mit Büchern in Berührung kommt, entdeckt man, dass man Flügel hat.“</i>
                            <br>Helen Hayes</p>
                        <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp" data-toggle="modal" data-target="#RegistrationModal">Registrierung</a>
                        <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown" data-toggle="modal" data-target ="#LoginModal">Eingang</a>
                    </div>
                </div>
                <!-- End of Slide -->
            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script>
            $('#bootstrap-touch-slider').bsTouchSlider();
        </script>
        <!--Registration form -->
        <div class="modal fade" id="RegistrationModal" tabindex="-1" role="dialog" 
             aria-labelledby="RegistrationModal" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="RegistrationForm">Registrierung</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form name="RegistrForm" action="src/php/registr.php" onsubmit="return test1()" method="post">
                                <div class="form-froup">
                                    <label for="InputName">Name</label>
                                    <input name="InpName" type="text" class="form-control" id="InputName" placeholder="Name">
                                    <small id="NameHelp" class="form-text text-muted">Schreiben Sie bitte ihre Name</small>
                                </div>
                                <div class="form-froup">
                                    <label for="InputEmail">E-Mail-Adresse</label>
                                    <input name="InpEmail" type="email" class="form-control" id="InputEmail" placeholder="E-Mail">
                                    <small id="EmailHelp" class="form-text text-muted">Schreiben Sie bitte ihre E-Mail-Adresse</small>
                                </div>
                                <div class="form-froup">
                                    <label for="InputLogin">Login</label>
                                    <input name="InpLogin" type="text" class="form-control" id="InputLogin" placeholder="Login">
                                </div>
                                <div class="form-froup">
                                    <label for="InputPass">Password</label>
                                    <input name="InpPass" type="password" size="20" class="form-control" id="InputPass" placeholder="Password">
                                    <small id="PassHelp" class="form-text text-muted">Nicht mehr als 20 Symbole</small>
                                </div>
                                <div class="form-froup">
                                    <label for="InputPass2">Password-prüfung</label>
                                    <input name="InpPass2" type="password" size="20" class="form-control" id="InputPass2" placeholder="Password">
                                    <small id="PasswordHelp2" class="form-text text-muted">Schreiben Sie bitte ihre Password noch ein Mal</small>
                                </div>
                                <button type="submit" class="btn btn-primary">Senden</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Login Form -->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" 
             aria-labelledby="LoginModal" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="LoginForm">Eingang</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form name="LoginForm" action="src/php/testreg.php" method="post">
                                <div class="form-froup">
                                    <label for="CheckLogin">Login</label>
                                    <input name = "ChLogin" type="text" class="form-control" id="CheckLogin" placeholder="Login">
                                </div>
                                <div class="form-froup">
                                    <label for="CheckPass">Password</label>
                                    <input name = "Chpass" type="password" class="form-control" id="CheckPass" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Einloggen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function test1() {
                var ok = true;
                if (document.RegistrForm.InpName.value == "") {
                    alert("Bitte den Zunamen eingeben!");
                    document.RegistrForm.InpName.focus();
                    ok = false;
                }
                if (document.RegistrForm.InpEmail.value == "") {
                    alert("Bitte der E-mail eingeben!");
                    document.RegistrForm.InpEmail.focus();
                    ok = false;
                }
                if (document.RegistrForm.InpPass.value !== document.RegistrForm.InpPass2.value){
                    alert("Passworden sin nicht gleich!");
                    document.RegistrForm.InpPass2.focus();
                    ok = false;
                }
                return ok;
            }
            
        </script>
    
    </body>
</html>
