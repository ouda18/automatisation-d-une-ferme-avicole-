<!DOCTYPE html>
<!--
TEMPLATE
Name: Zoo Planet
Version: 1.0
Created: 23 January 2014

AUTHOR
Design and code by: http://www.bootshape.com
Free stock photos by: http://www.bootshape.com

Read full license: http://www.bootshape.com/license.php

CREDITS
Background: http://subtlepatterns.com/ (extra_clean_paper)
Fonts: http://www.google.com/fonts (Actor, Duru_Sans)

SUPPORT
E-mail: bootshape.com@gmail.com
Contact: http://www.bootshape.com/contact.php 
-->
<html>
  <head>
    <title>FERME AVICOLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <video width="1" controls autoplay ="true">
  
  <source
    src="coqCri.mp4"type="video/mp4">
  <source
    src="Cridepoule.mp4"type="video/mp4">

</video>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="green">FERME</span> AVICOLE</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="active"><a href="index.PHP">ACCUEIL</a> </li> 

            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">VOTRE ESPACE CLIENTS <b class="caret"></b></a>
              <ul class="dropdown-menu">
			  <li class="divider"></li>
                <li><a href="client_control_panel.html">ENREGISTREMENTS DE CLIENTS </a></li>
                <li class="active"><a href="commande_control_panel.html">PASSEZ VOS COMMANDES</a></li>
				
                
                <li class="divider"></li>
                <li><a href="produitlisting.PHP">PRODUITS DE LA FERME</a></li>
              </ul>
            </li>
<?php
    
    
    // On affiche les codes
    ?>


<li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">ESPACE ADMINISTRATION DU SITE <b class="caret" ></b></a>
              <ul class="dropdown-menu">
                
                <li><a href="motpasse.php">GESTION DES TACHES ADMINIST :</a></li>
				
				
				
                <li class="divider"></li> 
                <li><a href="#">AUTRES</a></li> 
              </ul>
            </li>

           
            <li><a href="#">CONTACTS</a></li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel3.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- End Slide gallery -->
    <h4 class="text-center">Résent sur le réseau de

Bienvenue à la Ferme

depuis  2018  - Nous vous proposons les produits fermiers suivants - Poulets - Poussins - Oeufs</h4>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic1.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">POULETS</h3>
            <p>
Riche en protéines

Si vous cherchez une source de protéines maigres et pauvre en graisses, cet oiseau est idéal. La protéine de poulet se prête à la croissance et au développement musculaire, aide à maintenir un poids corporel équilibré et aide la perte de poids.</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-success">COMMANDEZ</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic2.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">POUSSINS</h3>
            <p>Un confort digne d’un grand palace

Pour assurer le meilleur confort à vos poussins, vous pouvez les héberger dans un petit carton. Pour faciliter l’entretien et isoler leur nouveau logement (que l’on appellera incubateur par la suite), mettez du papier journal au sol durant leurs 5 premiers jours et du sable fin par la suite.</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-success">COMMANDEZ</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic3.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">OEUFS</h3>
            <p>Riches en vitamines et minéraux

Un œuf renferme les vitamines A, D, E, K et B2 et B12 ainsi que des minéraux tels que le fer, le magnésium, le calcium, le phosphore et le potassium. Autant d’éléments indispensables au bon fonctionnement de notre organisme..</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-success">COMMANDEZ</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <div class="container">
      <h3 class="text-center">Bienvenue sur le site Elevage de Volaille</h3>
      <p> C'est en 2006, après plusieurs années passées dans le monde agricole qu'on a décidé de créer sa propre exploitation.

De là, est née alors la Ferme Avicole.

Des poules, pintades, chapons, dindes, canards, oies, ainsi que des moutons et des porcs y sont élevés en plein air et nourris aux céréales sans OGM.

On peut retrouver le fermier, tous les lundis matin sur le marchés . C'est également à Abidjan que chaque année, le 2ème samedi de décembre, est organisée la foire à la volaille et à la gastronomie gâtinaise, avec le concours gastronomique de poulet rôti remporté  en 2015
. .</p></p><H3>COMMENT BIEN DEMARRER SON ELEVAGE DE VOLAILLE</H3>
C’est une chose de commencer une ferme de volailles, c’est autrement plus compliqué de commencer une véritable entreprise. Vous ne vous transformerez pas juste en éleveuse de volaille, mais en véritable femme d’affaires, selon le marché que vous voulez cibler et la part de l’industrie de la volaille que vous voulez intégrer. Dans l’industrie du poulet, il existe deux secteurs principaux : les pondeuses, c’est-à-dire les poulets reproduits et élevés pour produire des œufs et les poulets de chair, soit les poulets reproduits et élevés pour être abattus. Quel que soit le secteur que vous aurez choisi, vous devrez prendre des décisions managériales et financières responsables pour que votre entreprise dégage des profits.

 

Rédigez un business plan. C’est l’une des étapes les plus importantes de votre opération. Vous y indiquerez quels objectifs vous devez atteindre et comment vous avez l’intention de vous y prendre pour les atteindre. Il s’agit aussi de décrire comment vous allez mener votre affaire et pas uniquement du point de vue de l’éleveur, mais aussi du point de vue d’une banquière, d'une avocate, d'une comptable et même possiblement du point de vue de vos futurs employés.

 

Vous devez posséder du terrain, du capital et des équipements. Vous ne pouvez pas commencer ni maintenir une entreprise d’élevage de poulets sans ces éléments. Vous aurez besoin d’un endroit pour élever vos poulets, allant de simples cages à des granges selon la façon dont vous voulez élever votre volaille : en cage ou en plein air ? Le terrain vous servira à y placer vos bâtiments et à créer des champs pour nourrir vos poulets. Vous aurez besoin des équipements et des machines pour nettoyer les granges, disposer le matériel, travailler dans les champs, etc.

 

Décidez de comment élever au mieux vos poulets. Il existe deux moyens principaux de les élever. Dans le système conventionnel, les poulets sont confinés dans des cages dont la température et la photopériode sont contrôlées. Les systèmes en plein air permettent aux poulets de courir dans la ferme et de se comporter aussi naturellement que possible.

 

Décidez des secteurs de l’industrie de la volaille que vous voulez intégrer. Vous aurez le choix entre deux secteurs : les poulets de chair, soit les poulets élevés pour leur viande ou les pondeuses, soit les poules élevées pour les œufs. Toutefois, il existe d’autres secteurs que vous pouvez intégrer. Les œufs qui ne sont pas mis en vente pour la consommation humaine (et qui peuvent provenir indifféremment des poulets de chair ou des pondeuses) sont incubés et les poussins qui en sont issus sont élevés jusqu’à ce qu’ils soient en âge d’être vendus aux fermes qui en feront des pondeuses ou des poulets de chair à leur tour. Souvent, l’incubation des œufs et l’élevage des poussins sont des commerces séparés de celui qui consiste à élever les poulets. Il y a aussi l’abattage des poulets pour faire de la viande et qui constitue en lui-même un secteur que vous voudrez peut-être intégrer.
De nombreuses fermes de volailles (principalement les non conventionnelles) opèrent dans plus d’un secteur. C’est à vous de choisir si vous voulez opérer dans tous les secteurs ou dans un seul.

 

Trouvez un marché de niche, si possible. Si l’endroit où vous voulez vous installer est connu pour un type d’élevage en particulier (plus conventionnel que fermier par exemple), vous voudrez peut-être cibler un marché de niche qui cible les consommateurs intéressés par les poulets élevés en plein air plutôt que par les poulets élevés en cage.
Faites-vous connaître auprès des potentiels clients et consommateurs. Faites de la publicité en faisant simplement savoir autour de vous que vous avez des œufs et de la viande à vendre. Souvent, le bouche-à-oreille est moins cher et bien plus efficace que de payer pour un encart publicitaire dans le journal local et qui ne sera lu que par quelques personnes. Toutefois, il n’y a aucun mal à le faire ni à créer un site web pour faire connaître vos produits

 

Continuez à enregistrer et garder les comptes de votre affaire et de vos opérations. Le but est de pouvoir voir lorsque vous faites des bénéfices et lorsque vous n’en faites pas
Élevez vos animaux en accord avec la loi et les normes locales.

</p><H3>LES REGLES DE BASE DE L'ELEVAGE BIEN REUSSI EN COTE D'IVOIRE </H3></p>

Nous invitons les éleveurs à bien lire l’information figurant sur les produits qu’ils achètent et à poser à leurs fournisseurs de soja et autres les bonnes questions afin de comparer ce qui est comparable.

La haute qualité des produits de nutrition animale de Vitalac France exportés dans 40 pays se traduit par une information complète et précise en français sur les compositions de ses complémentaires / concentrés et ses AMV / Premix et les quantités de chaque produit actif.

Vitalac France n’utilise que du soja qualité Europe c’est-à-dire avec % de protéines garanti, facteur antitrypsique assuré par traitement thermique et digestibilité protéique garantie.

1. Avant arrivée des poussins désinfection totale des bâtiments ET du matériel à l'aide d'Aseptol 3000 puis faire vide sanitaire (10-15j)  en bâchant le poulailler. Enlever litière et plumes également autour des bâtiments. Désinfecter les cuves, châteaux d’eau, abreuvoirs ET tous les tuyaux si abreuvoirs automatiques. (Note technique disponible sur demande)

2. Strict respect de la densité maximum de sujets au M2

3. Strict contrôle des visiteurs pour prévention des épidémies
Pour arriver au meilleur standard et résultats un pédiluve avec produit désinfectant type Aseptol 3000 ou bac à chaux est indispensable. Conseillé en plus une tenue spéciale, y compris chaussures, pour accéder aux poulaillers.
Bien entendu aucune volaille ''locale'' ne doit pouvoir approcher à moins de 20 mètres des poulaillers.

4.  Qualité de l'air par une ventilation appropriée de locaux bien orientés.

5.  Maintenir en permanence la propreté des poulaillers. 
Pour la litière répandre 1kg au m2 car une litière trop épaisse chauffe. Elle doit être sèche. Entretien une fois par semaine et compléter au besoin. L’utilisation de Vitacid Liquid favorise considérablement la conservation de la litière et la prévention du coli, des salmonelles et des maladies respiratoires favorisées par l'amoniac.

6. Respecter les 3 vaccins, les rappels et le calendrier préconisé. Anti-stress en eau de boisson la veille le jour el le lendemain des vaccins (Utiliser Karno Selen de Vitalac ou, à défaut, Karno AD3EC)

7. Vermifuge

Pondeuses : vermifuger tous les 30 jours à partir de l’entrée en ponte
Poulet de chair: vermifuger une fois à la semaine 5

8. Traitements anticoccidiens

Notre aliment poussin contient une prévention anticoccidienne.
Poulettes semaine 2-3 puis tous les 45 jours jusqu’à l’entrée en ponte
Poulet de chair entre semaine 3-4 en prévention ou en cas de coccidiose avérée

9. Vitamines pondeuses: en périodes chaudes et en temps normal pendant la période de ponte utiliser complément vitaminique aux pondeuses toutes les 3-4 semaines. Mettre dans eau de boisson vitamines A,D3,E+C pendant 3-4 jours. (Utiliser Karno Boost ou Karno AD3EC de Vitalac)

10. Qualité & acidification nécessaire de l’eau

La volaille consomme un poids d'eau journalier 2 fois égal à son alimentation. L’eau doit toujours être propre et abondante. Le PH de l’eau de boisson doit être ramené à 3 -3,5 pour une eau saine, une meilleure digestibilité des aliments, une litière plus propre, moins de maladies comme salmonelles, coli et autres, des coquilles d’œufs plus solides et moins souillées (Utiliser Vitacid Liquid Vitalac pour l'acidification et, si necessaire, Hydrosept pour la qualité bactériologique de l'eau)

11. Qualité des matières premières dont :

A. Soja avec % de protéines garanti, facteur antitrypsique garanti par traitement thermique et digestibilité protéique garantie.

B. Maïs propre et bien sec sans mycotoxines de plein-champs ou post récolte (Traiter avec Myco-Protect Vitalac)

C. Coquillage avec particules, sans sable, sans impuretés et bien séché.

D. Huile rouge saine d’origine sûre conditionnée dans des bidons propres.

E. Le tourteau de coton peut être utilisé mais à petites doses si son origine est sûre car risques de toxicité due au gossypol si ne provient pas de coton "glandless’’ ou provient de tourteaux de coton non traités.

12.  Strict respect des formulations Vitalac que nos techniciens établiront sur mesure pour vous.

13. Aliment sans champignons et moisissures résultant de l’échauffement lors du broyage (Traitement anti fongique préventif & de conservation avec Fongi-Protect Vitalac)

S’assurer que le mélange alimentaire est toujours bien homogène c’est-à-dire que le concentré est parfaitement mélangé aux céréales.

Attention à la granulométrie / diamètre de l’aliment complet. Exemple: gros problème si ne reste que de la poudre dans mangeoires. Secouer 1 à 2 fois par jours les trémies. Régler les mangeoires à hauteur du dos des volailles pour éviter le gaspillage.

14. Rations alimentaires: respecter strictement le calendrier des changements dans l’alimentation. Donner l’aliment au lever du jour et en fin de journée pas aux heures chaudes.

Poulet: alimentation à volonté, sans restriction
Pondeuses: alimentation à volonté, sans restriction  jusqu’à  l’entrée en ponte. Au-delà pratiquer règle 1/3 aliment matin tôt et 2/3 soir avec vide d’aliment aux heures chaudes.

15. Médicaments: leur usage doit être l’exception et non la règle

L’élevage moderne privilégie toujours la prévention, moins couteuse, à l'aide de produits techniques; elle est bien moins couteuse que l'achat de produits vétérinaires souvent très mal utilisés. Éviter absolument le recours à n'importe quel médicament prescrit par n'importe quel vendeur sans qualification. Éviter absolument les médicaments très bon marché d'origine douteuse car ils peuvent être fatal pour l'élevage.

16. Comptabilité

Beaucoup d'éleveurs parlent de produits ''trop chers'' avant même de parler qualité ou résultats mais ne tiennent aucune comptabilité, même sommaire, sur couts totaux, y compris mortalité, rapportés aux gains totaux. Une comptabilité, même très simple, est un impératif dans tout élevage performant.


    </div><!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
        <p> CONTACTEZ-NOUS ---

Ferme Avicole de COCODY ---

10 rue de la Corniche  --  ABIDJAN

77710  ---  COCODY VILLAGE ---

Tél. : 01 60 96 54 62  ----  Mobile : 06 84 52 87 68 ---

Courriel : ferme.avicole@gmail.com </a></p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>