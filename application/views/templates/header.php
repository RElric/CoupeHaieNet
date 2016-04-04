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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/stylesheets/screen.css" />
    </head>
    
    <body>
       
        <!-- Bandeau supérieur du site -->
        <header id="banSup">
            <nav id="primaryMenu">
                <a href="<?php echo base_url();?>accueil" id="accueilLink">
                    <img 
                        src="<?php echo base_url();?>img/logoMD.png" 
                        alt="logo du site" 
                        srcset="
                            <?php echo base_url();?>img/logoHD.png 2x, 
                            <?php echo base_url();?>img/logoLD.png 0.5x
                        "
                    />
                    <h1 id="titreGlobal">CoupeHaieNet</h1>
                </a>
                <ul id="secondaryMenu">
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>actualites">
                            <img 
                                src="<?php echo base_url();?>img/actusMD.png" 
                                alt="ic&#244;ne actualit&eacute;s" 
                                srcset="
                                    <?php echo base_url();?>img/actusHD.png 2x, 
                                    <?php echo base_url();?>img/actusLD.png 0.5x
                                "
                            />
                            <label>Actualit&eacute;s</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>realisations">
                            <img 
                                src="<?php echo base_url();?>img/reaMD.png" 
                                alt="ic&#244;ne r&eacute;alisations" 
                                srcset="
                                    <?php echo base_url();?>img/reaHD.png 2x, 
                                    <?php echo base_url();?>img/reaLD.png 0.5x
                                "
                            />
                            <label>R&eacute;alisations</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>contact">
                            <img 
                                src="<?php echo base_url();?>img/mailMD.png" 
                                alt="ic&#244;ne contact" 
                                srcset="
                                    <?php echo base_url();?>img/mailHD.png 2x, 
                                    <?php echo base_url();?>img/mailLD.png 0.5x
                                "
                            />
                            <label>Contact</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>ou-nous-trouver">
                            <img 
                                src="<?php echo base_url();?>img/whereMD.png" 
                                alt="ic&#244;ne localisation" 
                                srcset="
                                    <?php echo base_url();?>img/whereHD.png 2x, 
                                    <?php echo base_url();?>img/whereLD.png 0.5x
                                "
                            />
                            <label>Où nous trouver</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>qui-sommes-nous">
                            <img 
                                src="<?php echo base_url();?>img/whoMD.png" 
                                alt="ic&#244;ne description de l'entreprise" 
                                srcset="
                                    <?php echo base_url();?>img/whoHD.png 2x, 
                                    <?php echo base_url();?>img/whoLD.png 0.5x
                                "
                            />
                            <label>Qui sommes nous</label>
                        </a>
                    </li>
                    <li class="firstElementSecondaryMenu">
                        <a href="<?php echo base_url();?>livre-d-or">
                            <img 
                                src="<?php echo base_url();?>img/goldMD.png" 
                                alt="ic&#244;ne livre d'or" 
                                srcset="
                                    <?php echo base_url();?>img/goldHD.png 2x, 
                                    <?php echo base_url();?>img/goldLD.png 0.5x
                                "
                            />
                            <label>Livre d'or</label>
                        </a>
                    </li>
                </ul>
<?php
    if(isset($h2))
    {
        echo("<h2 id='emplacement'>".$h2."</h2>");
    }
?>
            </nav>
        </header>
        
        <!-- Début du corps du site -->
        <main>
        
       