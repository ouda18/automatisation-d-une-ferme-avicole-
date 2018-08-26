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
    <h4 class="text-center">R�sent sur le r�seau de

Bienvenue � la Ferme

depuis  2018  - Nous vous proposons les produits fermiers suivants - Poulets - Poussins - Oeufs</h4>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic1.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">POULETS</h3>
            <p>
Riche en prot�ines

Si vous cherchez une source de prot�ines maigres et pauvre en graisses, cet oiseau est id�al. La prot�ine de poulet se pr�te � la croissance et au d�veloppement musculaire, aide � maintenir un poids corporel �quilibr� et aide la perte de poids.</p>
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
            <p>Un confort digne d�un grand palace

Pour assurer le meilleur confort � vos poussins, vous pouvez les h�berger dans un petit carton. Pour faciliter l�entretien et isoler leur nouveau logement (que l�on appellera incubateur par la suite), mettez du papier journal au sol durant leurs 5 premiers jours et du sable fin par la suite.</p>
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
            <p>Riches en vitamines et min�raux

Un �uf renferme les vitamines A, D, E, K et B2 et B12 ainsi que des min�raux tels que le fer, le magn�sium, le calcium, le phosphore et le potassium. Autant d��l�ments indispensables au bon fonctionnement de notre organisme..</p>
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
      <p> C'est en 2006, apr�s plusieurs ann�es pass�es dans le monde agricole qu'on a d�cid� de cr�er sa propre exploitation.

De l�, est n�e alors la Ferme Avicole.

Des poules, pintades, chapons, dindes, canards, oies, ainsi que des moutons et des porcs y sont �lev�s en plein air et nourris aux c�r�ales sans OGM.

On peut retrouver le fermier, tous les lundis matin sur le march�s . C'est �galement � Abidjan que chaque ann�e, le 2�me samedi de d�cembre, est organis�e la foire � la volaille et � la gastronomie g�tinaise, avec le concours gastronomique de poulet r�ti remport�  en 2015
. .</p></p><H3>COMMENT BIEN DEMARRER SON ELEVAGE DE VOLAILLE</H3>
C�est une chose de commencer une ferme de volailles, c�est autrement plus compliqu� de commencer une v�ritable entreprise. Vous ne vous transformerez pas juste en �leveuse de volaille, mais en v�ritable femme d�affaires, selon le march� que vous voulez cibler et la part de l�industrie de la volaille que vous voulez int�grer. Dans l�industrie du poulet, il existe deux secteurs principaux : les pondeuses, c�est-�-dire les poulets reproduits et �lev�s pour produire des �ufs et les poulets de chair, soit les poulets reproduits et �lev�s pour �tre abattus. Quel que soit le secteur que vous aurez choisi, vous devrez prendre des d�cisions manag�riales et financi�res responsables pour que votre entreprise d�gage des profits.

 

R�digez un business plan. C�est l�une des �tapes les plus importantes de votre op�ration. Vous y indiquerez quels objectifs vous devez atteindre et comment vous avez l�intention de vous y prendre pour les atteindre. Il s�agit aussi de d�crire comment vous allez mener votre affaire et pas uniquement du point de vue de l��leveur, mais aussi du point de vue d�une banqui�re, d'une avocate, d'une comptable et m�me possiblement du point de vue de vos futurs employ�s.

 

Vous devez poss�der du terrain, du capital et des �quipements. Vous ne pouvez pas commencer ni maintenir une entreprise d��levage de poulets sans ces �l�ments. Vous aurez besoin d�un endroit pour �lever vos poulets, allant de simples cages � des granges selon la fa�on dont vous voulez �lever votre volaille : en cage ou en plein air ? Le terrain vous servira � y placer vos b�timents et � cr�er des champs pour nourrir vos poulets. Vous aurez besoin des �quipements et des machines pour nettoyer les granges, disposer le mat�riel, travailler dans les champs, etc.

 

D�cidez de comment �lever au mieux vos poulets. Il existe deux moyens principaux de les �lever. Dans le syst�me conventionnel, les poulets sont confin�s dans des cages dont la temp�rature et la photop�riode sont contr�l�es. Les syst�mes en plein air permettent aux poulets de courir dans la ferme et de se comporter aussi naturellement que possible.

 

D�cidez des secteurs de l�industrie de la volaille que vous voulez int�grer. Vous aurez le choix entre deux secteurs : les poulets de chair, soit les poulets �lev�s pour leur viande ou les pondeuses, soit les poules �lev�es pour les �ufs. Toutefois, il existe d�autres secteurs que vous pouvez int�grer. Les �ufs qui ne sont pas mis en vente pour la consommation humaine (et qui peuvent provenir indiff�remment des poulets de chair ou des pondeuses) sont incub�s et les poussins qui en sont issus sont �lev�s jusqu�� ce qu�ils soient en �ge d��tre vendus aux fermes qui en feront des pondeuses ou des poulets de chair � leur tour. Souvent, l�incubation des �ufs et l��levage des poussins sont des commerces s�par�s de celui qui consiste � �lever les poulets. Il y a aussi l�abattage des poulets pour faire de la viande et qui constitue en lui-m�me un secteur que vous voudrez peut-�tre int�grer.
De nombreuses fermes de volailles (principalement les non conventionnelles) op�rent dans plus d�un secteur. C�est � vous de choisir si vous voulez op�rer dans tous les secteurs ou dans un seul.

 

Trouvez un march� de niche, si possible. Si l�endroit o� vous voulez vous installer est connu pour un type d��levage en particulier (plus conventionnel que fermier par exemple), vous voudrez peut-�tre cibler un march� de niche qui cible les consommateurs int�ress�s par les poulets �lev�s en plein air plut�t que par les poulets �lev�s en cage.
Faites-vous conna�tre aupr�s des potentiels clients et consommateurs. Faites de la publicit� en faisant simplement savoir autour de vous que vous avez des �ufs et de la viande � vendre. Souvent, le bouche-�-oreille est moins cher et bien plus efficace que de payer pour un encart publicitaire dans le journal local et qui ne sera lu que par quelques personnes. Toutefois, il n�y a aucun mal � le faire ni � cr�er un site web pour faire conna�tre vos produits

 

Continuez � enregistrer et garder les comptes de votre affaire et de vos op�rations. Le but est de pouvoir voir lorsque vous faites des b�n�fices et lorsque vous n�en faites pas
�levez vos animaux en accord avec la loi et les normes locales.

</p><H3>LES REGLES DE BASE DE L'ELEVAGE BIEN REUSSI EN COTE D'IVOIRE </H3></p>

Nous invitons les �leveurs � bien lire l�information figurant sur les produits qu�ils ach�tent et � poser � leurs fournisseurs de soja et autres les bonnes questions afin de comparer ce qui est comparable.

La haute qualit� des produits de nutrition animale de Vitalac France export�s dans 40 pays se traduit par une information compl�te et pr�cise en fran�ais sur les compositions de ses compl�mentaires / concentr�s et ses AMV / Premix et les quantit�s de chaque produit actif.

Vitalac France n�utilise que du soja qualit� Europe c�est-�-dire avec % de prot�ines garanti, facteur antitrypsique assur� par traitement thermique et digestibilit� prot�ique garantie.

1. Avant arriv�e des poussins d�sinfection totale des b�timents ET du mat�riel � l'aide d'Aseptol 3000 puis faire vide sanitaire (10-15j)  en b�chant le poulailler. Enlever liti�re et plumes �galement autour des b�timents. D�sinfecter les cuves, ch�teaux d�eau, abreuvoirs ET tous les tuyaux si abreuvoirs automatiques. (Note technique disponible sur demande)

2. Strict respect de la densit� maximum de sujets au M2

3. Strict contr�le des visiteurs pour pr�vention des �pid�mies
Pour arriver au meilleur standard et r�sultats un p�diluve avec produit d�sinfectant type Aseptol 3000 ou bac � chaux est indispensable. Conseill� en plus une tenue sp�ciale, y compris chaussures, pour acc�der aux poulaillers.
Bien entendu aucune volaille ''locale'' ne doit pouvoir approcher � moins de 20 m�tres des poulaillers.

4.  Qualit� de l'air par une ventilation appropri�e de locaux bien orient�s.

5.  Maintenir en permanence la propret� des poulaillers. 
Pour la liti�re r�pandre 1kg au m2 car une liti�re trop �paisse chauffe. Elle doit �tre s�che. Entretien une fois par semaine et compl�ter au besoin. L�utilisation de Vitacid Liquid favorise consid�rablement la conservation de la liti�re et la pr�vention du coli, des salmonelles et des maladies respiratoires favoris�es par l'amoniac.

6. Respecter les 3 vaccins, les rappels et le calendrier pr�conis�. Anti-stress en eau de boisson la veille le jour el le lendemain des vaccins (Utiliser Karno Selen de Vitalac ou, � d�faut, Karno AD3EC)

7. Vermifuge

Pondeuses : vermifuger tous les 30 jours � partir de l�entr�e en ponte
Poulet de chair: vermifuger une fois � la semaine 5

8. Traitements anticoccidiens

Notre aliment poussin contient une pr�vention anticoccidienne.
Poulettes semaine 2-3 puis tous les 45 jours jusqu�� l�entr�e en ponte
Poulet de chair entre semaine 3-4 en pr�vention ou en cas de coccidiose av�r�e

9. Vitamines pondeuses: en p�riodes chaudes et en temps normal pendant la p�riode de ponte utiliser compl�ment vitaminique aux pondeuses toutes les 3-4 semaines. Mettre dans eau de boisson vitamines A,D3,E+C pendant 3-4 jours. (Utiliser Karno Boost ou Karno AD3EC de Vitalac)

10. Qualit� & acidification n�cessaire de l�eau

La volaille consomme un poids d'eau journalier 2 fois �gal � son alimentation. L�eau doit toujours �tre propre et abondante. Le PH de l�eau de boisson doit �tre ramen� � 3 -3,5 pour une eau saine, une meilleure digestibilit� des aliments, une liti�re plus propre, moins de maladies comme salmonelles, coli et autres, des coquilles d��ufs plus solides et moins souill�es (Utiliser Vitacid Liquid Vitalac pour l'acidification et, si necessaire, Hydrosept pour la qualit� bact�riologique de l'eau)

11. Qualit� des mati�res premi�res dont :

A. Soja avec % de prot�ines garanti, facteur antitrypsique garanti par traitement thermique et digestibilit� prot�ique garantie.

B. Ma�s propre et bien sec sans mycotoxines de plein-champs ou post r�colte (Traiter avec Myco-Protect Vitalac)

C. Coquillage avec particules, sans sable, sans impuret�s et bien s�ch�.

D. Huile rouge saine d�origine s�re conditionn�e dans des bidons propres.

E. Le tourteau de coton peut �tre utilis� mais � petites doses si son origine est s�re car risques de toxicit� due au gossypol si ne provient pas de coton "glandless�� ou provient de tourteaux de coton non trait�s.

12.  Strict respect des formulations Vitalac que nos techniciens �tabliront sur mesure pour vous.

13. Aliment sans champignons et moisissures r�sultant de l��chauffement lors du broyage (Traitement anti fongique pr�ventif & de conservation avec Fongi-Protect Vitalac)

S�assurer que le m�lange alimentaire est toujours bien homog�ne c�est-�-dire que le concentr� est parfaitement m�lang� aux c�r�ales.

Attention � la granulom�trie / diam�tre de l�aliment complet. Exemple: gros probl�me si ne reste que de la poudre dans mangeoires. Secouer 1 � 2 fois par jours les tr�mies. R�gler les mangeoires � hauteur du dos des volailles pour �viter le gaspillage.

14. Rations alimentaires: respecter strictement le calendrier des changements dans l�alimentation. Donner l�aliment au lever du jour et en fin de journ�e pas aux heures chaudes.

Poulet: alimentation � volont�, sans restriction
Pondeuses: alimentation � volont�, sans restriction  jusqu��  l�entr�e en ponte. Au-del� pratiquer r�gle 1/3 aliment matin t�t et 2/3 soir avec vide d�aliment aux heures chaudes.

15. M�dicaments: leur usage doit �tre l�exception et non la r�gle

L��levage moderne privil�gie toujours la pr�vention, moins couteuse, � l'aide de produits techniques; elle est bien moins couteuse que l'achat de produits v�t�rinaires souvent tr�s mal utilis�s. �viter absolument le recours � n'importe quel m�dicament prescrit par n'importe quel vendeur sans qualification. �viter absolument les m�dicaments tr�s bon march� d'origine douteuse car ils peuvent �tre fatal pour l'�levage.

16. Comptabilit�

Beaucoup d'�leveurs parlent de produits ''trop chers'' avant m�me de parler qualit� ou r�sultats mais ne tiennent aucune comptabilit�, m�me sommaire, sur couts totaux, y compris mortalit�, rapport�s aux gains totaux. Une comptabilit�, m�me tr�s simple, est un imp�ratif dans tout �levage performant.


    </div><!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
        <p> CONTACTEZ-NOUS ---

Ferme Avicole de COCODY ---

10 rue de la Corniche  --  ABIDJAN

77710  ---  COCODY VILLAGE ---

T�l. : 01 60 96 54 62  ----  Mobile : 06 84 52 87 68 ---

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