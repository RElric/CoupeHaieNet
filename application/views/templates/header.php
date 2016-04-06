<html>
    <head lang="fr">
        <!-- Définition du jeu de caractère -->
        <meta charset="utf-8" />
        
        <!-- Balises meta -->
        
        <!-- Balises "name" // optionnelles (pour la plupart) -->
        <meta name="description" content="Site de l'entreprise d'entretien d'espaces verts CoupeHaieNet" />
        <meta name="keywords" content="espaces verts, entretien, jardinage, coupe, haie, manche, normandie, france" />
        <meta name="author" content="Elric Reffuveille" />
        
        <!-- Balises "http-equiv" -->
        <meta http-equiv="Content-Language" content="fr-FR" />
        <meta http-equiv="Cache-Control" content="max-age=600" />
        
        <!-- Titre du site -->
        <title>CoupeHaie.Net // L'entretien des espaces verts</title>
        
        <!-- Javascript -->
        
        <!-- Inclusion des librairies jQuery nécessaires pour l'execution de codes tiers -->
        <!-- jQuery 2.2.1 // Pour JS, FancyBox, FlexSlider-->
        <!-- jQueryUI 1.11.4 // UI et Form -->
        <!-- jQueryMobile 1.4.5 // Cross-Platform -->
        <script src="https://code.jquery.com/jquery-2.2.1.min.js" integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>
        
        <!-- Inclusion des librairies tierces -->
        <!-- FlexSlider // Gestion de slider -->
        <!-- FancyBox // Gestion de galerie d'images -->
        <script src="<?php echo base_url();?>vendor/flexSlider/jquery.flexslider-min.js"></script>
        <script src="<?php echo base_url();?>vendor/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="<?php echo base_url();?>vendor/fancyBox/source/jquery.fancybox.pack.js"></script>
        
        <!-- Inclusion des scripts persos  -->
        <script src="<?php echo base_url();?>javascript/script.js"></script>
        
        <!-- Inclusion de Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-70699388-2', 'auto');
            ga('send', 'pageview');
        </script>
        
        <!-- CSS -->
        
        <!-- Inclusion des feuilles personnelles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/stylesheets/screen.css" />
    </head>
    
    <body>
       
        <!-- Bandeau supérieur du site -->
        <header id="banSup">
            <nav id="primaryMenu">
                <a href="<?php echo base_url();?>accueil" id="accueilLink">
                    <h1 id="titreGlobal">Coupe Haie Net</h1>
                </a>
                <ul id="secondaryMenu">
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>/actualites">
                            <img src="<?php echo base_url();?>/assets/css/img/news.png" />
                            <label>Actualit&eacute;s</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>/realisations">
                            <img src="<?php echo base_url();?>/assets/css/img/galery.png" />
                            <label>R&eacute;alisations</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>/contact">
                            <img src="<?php echo base_url();?>/assets/css/img/contact.png" />
                            <label>Contact</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>/ou-nous-trouver">
                            <img src="<?php echo base_url();?>/assets/css/img/where.png" />
                            <label>Où nous trouver</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>/qui-sommes-nous">
                            <img src="<?php echo base_url();?>/assets/css/img/who.png" />
                            <label>Qui sommes nous</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>/livre-d-or">
                            <img src="<?php echo base_url();?>/assets/css/img/book.png" />
                            <label>Livre d'or</label>
                        </a>
                    </li>
                </ul>
            </nav>
            <div id="wooding"></div>
        </header>
        
        <!-- Début du corps du site -->
        <main>
        
       