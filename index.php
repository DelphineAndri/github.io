<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Paysames - La ferme d'antan</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=6.0">
        <meta name="Description" content="">
        <meta name="keywords" content="ferme, bergerie, fromagerie, fromage, gîtes, découverte, decouverte, association, produits fermiers, chèvre, brebis, animaux, paysan, fermier, fermière, Paysames, lait, produits de la ferme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@200;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almendra:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <?php include "php/menu.php"; ?>
        
        <section id="bienvenue" class="container-fluid">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-2-offset-1 text_bienvenue">
                        <h1>Bienvenue chez <br><span class="paysames">Paysames</span> !</h1> 
                        <h2> Retrouver le rythme, vivre les saisons</h2>
                        <p> Paysames, à la recherche des âmes qui font ce pays et qui ont permis à nos anciens d'y vivre bien. Comment réapprendre à vivre ici de cette terre et avec cette terre ?
                        <img src="images/white-triskelion-symbol.png" alt="signe-celte">
                        <img src="images/white-triskelion-symbol.png" alt="signe-celte">
                        <img src="images/white-logo-parc.png" alt="logo parc des barronies provençales" style="width:80px;height:100px">
                        <img src="images/white-triskelion-symbol.png" alt="signe-celte">
                        <img src="images/white-triskelion-symbol.png" alt="signe-celte"> <br><br>
                        <a class="button2" href="#racines">En savoir plus</a>
                        </p>
                    </div>

                    <div id="CarouselBienvenue" class="col-lg-10-offset-1 carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#CarouselBienvenue" data-slide="0" class="active"></li>
                            <li data-target="#CarouselBienvenue" data-slide="1"></li>
                            <li data-target="#CarouselBienvenue" data-slide="2"></li>
                            <li data-target="#CarouselBienvenue" data-slide="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/bienvenue.jpg" alt="troupeau">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel1.jpg" alt="image1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel2.jpg" alt="image2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/carousel3.jpg" alt="image3">
                            </div>
                        </div>

                        <a href="#CarouselBienvenue" class="carousel-control-prev" data-slide="prev" role="button">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#CarouselBienvenue" class="carousel-control-next" data-slide="next" role="button">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="racines" class="container-fluid">
            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-4-offset-1 img-belier align-middle">
                        <img src="images/belier.jpg" alt="bélier">
                    </div>

                    <div class="col-lg-8-offset-1 txt-racines">
                        <div class="content-txt-racines text-justify">
                            <h2>Les racines de Paysames <br></h2>
                            <p>
                                Un rêve d'enfant: vivre les pieds et les mains dans la terre et la tête dans les étoiles: "être paysan"! <br><br>
                                
                                Aujourd'hui encore plus qu'il y a vingt ans, apprendre à se nourrir et à nourrir ceux qui vivent autour de nous est une évidence mais cela va au delà. Il s'agit de vivre, de vivre ici et d'ici, ensemble, de ce que la terre nous offre et elle offre tellement à qui sait la cueillir… <br><br>
                                
                                Savons-nous encore le faire?<br>
                                La ferme existe pour réapprendre, redécouvrir, créer de nouvelles façons d'être paysan en s'appuyant sur ce qui se faisait, il y a longtemps, bien avant la mondialisation! <br>
                                S'appuyer sur le passé pour bien vivre le présent et préparer un avenir heureux!</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <section id="activites">
            <div class="container">
                <div class="symbol position-absolute"> <img src="images/m-data-celtic-knot.png" alt="symbole-celtic"></div>
                
                <div class="divider"></div>
                <div class="heading">
                    <h2>Ce que nous faisons</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">

                        <a class="hover1" href="laferme.php">
                            <img class= "content-img" src="images/animauxlaferme.jpg" alt="animaux">
                            <div class="content-txt">La Ferme</div>
                            <div class="overlay">
                                <div class="text">
                                Au coeur des forêts du parc naturel régional des Baronnies provençales, la ferme se veut traditionnelle avec ses élevages, ses cultures mais à petite échelle, à la taille d'une famille.
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4">

                        <a class="hover1" href="gestepaysan.php">
                            <img class="content-img" src="images/laine.jpg" alt="laine">
                            <div class="content-txt">Les Gestes Paysans</div>
                            <div class="overlay">
                                <div class="text">
                                Il ne s'agit pas ici de revenir en arrière mais bien d'apprendre de nos aînés comment vivre, non pas de ce pays, mais avec ce pays! <br>
                                Ils y vivaient plutôt bien alors pourquoi pas nous!
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4">
                        <a class="hover1" href="#">
                            <img class="content-img" src="images/nos_produits.jpg" alt="animaux">
                            <div class="content-txt">Nos Produits</div>
                            <div class="overlay">
                                <div class="text" style="font-size:18px;">
                                    Découvrez nos produits !
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section id="contactez">
            <div class="container box-contact">
                
                <div class="divider-white"></div>
                    <div class="heading-contact">
                        <h2>Contactez-nous</h2>
                    </div>
                    
                    <div class="row box-box-contact">
                        <div class="row w-100">
                            <div class="col-lg-9">
                                <form id="contact-form" action="" method="post" role="form">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="firstname">Prénom *</label>
                                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                                            <p class="comments"></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="name">Nom *</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                                            <p class="comments"></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="email">Email *</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Votre email">
                                            <p class="comments"></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="message">Message *</label>
                                            <textarea name="message" id="message" class="form-control" placeholder="Votre message" cols="30" rows="4" ></textarea>
                                            <p class="comments"></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><strong>* Ces informations sont requises</strong></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="submit" class="button1" value="Envoyer">
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div class="col-lg-3 adresse">
                                <img src="images/white_celtic_triple_spiral.png" alt="signe_celtic">
                                <h3 class="paysames-txt-contact">Paysames</h3>
                                <p>
                                    <strong>Nathalie</strong> <br>
                                    Impasse Flavien <br>
                                    05700 VILLEBOIS-LES-PINS <br>
                                    obonheurdujour@mailoo.org <br>
                                    06.84.85.42.01
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row no-padding">
                    <iframe class="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5709.200083470865!2d5.603964334659046!3d44.318172198694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12caf90b4e374669%3A0x1d143e7d369a1ac7!2sChamp%20Chapon%2C%20Villebois-les-Pins%2C%20France!5e0!3m2!1sfr!2sca!4v1602849040224!5m2!1sfr!2sca" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
        </div>
        </section>

        <?php include "php/footer.php"; ?>
    </body>
</html>