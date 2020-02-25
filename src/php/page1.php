<html lang="de">
    <head>

        <?php
        session_start();
        if (empty($_SESSION['login']) or empty($_SESSION['id'])) {

            header('Location: NOEntrance.php');
            exit();
        } else {
            $nameofuser = $_SESSION['name'];
        }
        ?>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     

        <script type="text/javascript" src="my.js"></script>
        

        <title>FlyRe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Times">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
 
          
    </head>
    <body>
        <div>
            <img src="Sitename.png">
            <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeInUp" data-toggle="modal" data-target="#RegistrationModal">Nach Spezifische Buch Suchen</a>
            <a  class="btn btn-link" href = "close.php">Abmelden</a>
        </div>


        <div class="container"> 
            <div id="myCarousel" class="carousel slide container" data-ride="carousel" data-pause="hover"    >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://www.ingramspark.com/hubfs/Blog_Images/2017/March%202017/Book%20Marketing%20with%20Audiobooks%203.1.17.png" alt="audiobooks" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="https://cachevalleyfamilymagazine.com/wp-content/uploads/2018/10/books.jpeg" alt="books" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="https://web.connectnetwork.com/wp-content/uploads/2017/11/Connect-Network-eBooks.jpg" alt="E_books" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <ul class="nav nav-tabs">
            <li  class="active"><a class = "menuel" data-toggle="tab" href="#home">Home</a></li>
            <li><a class = "menuel" data-toggle="tab" href="#menu1">Hörbücher</a></li>
            <li><a class = "menuel" data-toggle="tab" href="#menu2">Bücher</a></li>
            <li><a class = "menuel" data-toggle="tab" href="#menu3">E-Bücher</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class = 'Content'>
                    <label for='greeting'> Lieber </label>
                <b><?= $nameofuser ?></b> <b></b>
                <?php if (empty($_POST))
{
      echo "
                        <div> 
                        <form name='Hello'>
                            <label for='greeting'>Herzlich Willkommen! </label>
                        </form>
                        <p> Wir freuen uns, Sie in unserem Buchcenter begrüßen!
                            Wir sind sicher, dass Sie uns aus einem bestimmten Grund besucht haben und die Fäden des Universums Ihnen etwas Unbekanntes zeigen wollten. 
                            Hier können Sie die unerwartetsten Neuheiten, scharfe Wendungen, fantastische Liebe und  nicht nur finden.
                            Vielleicht sind Sie interessiert sich für abschreckende Geschichten? Oder suchen Sie nach Wissen? Also zu uns! Wir haben alles und noch viel mehr! 
                        <p>
                        <p>Wenn Sie gehen wollen, dann werden wir für Ihre Rückkehr warten.</p>
                    </div>
                </div> ";
}  
            else 
{
                        echo '
                        <div> 
                        <form name="Ihre Results sind jetzt zur vefugung" >
                        </form>
                        <p> 
                        Wir haben in alle 3 Kategorien die Buecher gefunden die fuer ihre Anfrage passen, bitte klicken sie of die Kategorien um die gefundene Buecher zu sehen
                        </p>
                    </div>
                </div>';
}
?>        
               
            </div>
            
            <div id="menu1" class="tab-pane fade">
                <div class = "Content">
                    <h2> Hörbücher </h2>
 <?php if (empty($_POST['name']))
{
      require('selectaudiobooks.php'); 
}  
                    else
{
    require('postaudiobooks.php');
}?>        
                    
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class = "Content">
                    <h2> Bücher </h2>
  <?php if (empty($_POST['name']))
{
      require('selectbooks.php'); 
} 
else
{
    require('postbooks.php');
}?>         
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class = "Content">
                    <h2> E-Bücher </h2>
 <?php if (empty($_POST['name']))
{
      require('selecte_books.php'); 
}
else
{
    require('poste_books.php');
}?>          
                </div>
            </div>
        </div>
        </div>
        <ul class="nav nav-tabs">
            <li><a class = "menuel" href="#"></a></li>
        </ul>
        <div class="modal fade" id="RegistrationModal" tabindex="-1" role="dialog" 
             aria-labelledby="RegistrationModal" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="RegistrationForm">Bitte fuellen sie die folgende felder</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form method ="POST" name="RegistrForm" action="" onsubmit="" >
                                <div class="form-froup">
                                    <label for="InputName">Name des Buches</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name des Buches">
                                </div>
                                <div class="form-froup">
                                    <label for="InputAuthor">Author</label>
                                    <input name="author" type="text" class="form-control" id="author" placeholder="Author">
                                </div>
                                <div class="form-froup">
                                    <label for="genre">Genre:</label>
                                    <input name="genre" type="text" class="form-control" id="author" placeholder="Genre">
                                </div>
                                <button type="submit" class="btn btn-primary" >Suchen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<div class="modal fade" id="AnmeldenModal1" tabindex="-1" role="dialog" 
             aria-labelledby="AnmeldenModal1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="AnmeldenForm1">Hörbücher kaufen</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form name="KaufForm1" method="post" action ="Kaufen_audio.php">
                                <div class="form-froup">
                                    <label for="IDBuch1">ID von Buch</label>
                                    <input name="BuchID" type="text" class="form-control" id="IDBuch1" placeholder="ID">
                                    <small id="IDHelp" class="form-text text-muted">Schreiben Sie bitte ID</small>
                                </div>
                                <div class="form-froup">
                                    <label for="Menge1">Menge</label>
                                    <input name="MengeBuch" type="text" class="form-control" id="Menge1" placeholder="***">
                               
                                <button type="submit" class="btn btn-primary">Kaufen</button>
                                     </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
            <div class="modal fade" id="AnmeldenModal2" tabindex="-1" role="dialog" 
             aria-labelledby="AnmeldenModal2" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="AnmeldenForm2">Bücher kaufen</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                             <form name="KaufForm2" method="post" action ="Kaufen_buch.php">
                                <div class="form-froup">
                                    <label for="IDBuch2">ID von Buch</label>
                                    <input name="BuchID" type="text" class="form-control" id="IDBuch2" placeholder="ID">
                                    <small id="IDHelp" class="form-text text-muted">Schreiben Sie bitte ID</small>
                                </div>
                                <div class="form-froup">
                                    <label for="Menge2">Menge</label>
                                    <input name="MengeBuch" type="text" class="form-control" id="Menge2" placeholder="***">
                               
                                <button type="submit" class="btn btn-primary">Kaufen</button>
                                     </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
            
            <div class="modal fade" id="AnmeldenModal3" tabindex="-1" role="dialog" 
             aria-labelledby="AnmeldenModal3" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="AnmeldenForm3">E-Bücher kaufen</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                             <form name="KaufForm3" method="post" action ="Kaufen_ebooks.php">
                                <div class="form-froup">
                                    <label for="IDBuch3">ID von Buch</label>
                                    <input name="BuchID" type="text" class="form-control" id="IDBuch3" placeholder="ID">
                                    <small id="IDHelp" class="form-text text-muted">Schreiben Sie bitte ID</small>
                                </div>
                                <div class="form-froup">
                                    <label for="Menge3">Menge</label>
                                    <input name="MengeBuch" type="text" class="form-control" id="Menge3" placeholder="***">
                               
                                <button type="submit" class="btn btn-primary">Kaufen</button>
                                     </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </body>
    <html>
    </html>
