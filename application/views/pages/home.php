<!-- corps du document -->
<!-- Une en-tête contenant un slider -->
<header>
    <!-- Un slider utilisant FlexSlider.JS pour afficher les images des expériences désirées par le créateur -->
    <div class="flexslider" id='slider'>
        <ul class="slides">
            <?php
                foreach($sliderImg as $element) {
                    echo ("
                        <li>
                            <figure>
                                <div id='imgbox'>
                                    <img src='assets/img/galery/".$element['imgPath']."'>
                                </div>
                                <figcaption id='dataGalery' class='flex-caption'>
                                    <h6>".$element['titre']."</h6>
                                    <ul>
                    ");
                    foreach($element['realisations'] as $reas) {
                        echo("<li>".$reas."</li>");
                    }
                    echo(
                                    "</ul>
                                </figcaption>
                            </figure>
                        </li>
                    ");
                }
            ?>
        </ul>
    </div>
    <!-- Une zone de texte déffilant utilisant FlexSlider.JS pour afficher les commentaires sur l'entreprise -->
    <div class="flexslider" id='comments'>
        <ul class="slides">
            <?php
                foreach($sliderXP as $element) {
                    echo ("
                        <li>
                            <div id='comSlide'>
                                <h2 id='comTxt'>&quot;&nbsp;".$element['comment']."&nbsp;&quot;</h2>
                                <p id='comAuth'>".$element['author']."</p>
                            </div>
                        </li>
                    ");
                }
            ?>
        </ul>
    </div>
</header>
<!-- Le vif du sujet -->
<div id="content">
    <!-- Une section contenant les actualités -->
    <section id="news">
        <div class='titreSection'> 
            <div class="imgTitre"></div>
            <h2>Actualités</h2>
            <div class="imgTitre"></div>
        </div>
        <ul id="newsList">
            <?php
                foreach($news as $actus) {
                    echo("<li><a href='actualites/".$actus['slug']."'>".$actus['title']."</a></li>");
                }
            ?>
        </ul>
        <p><a href='actualites'>Et encore plus!</a></p>
    </section>
    <section id='homeWhere'>
        <div class='titreSection'> 
            <div class="imgTitre"></div>
            <h2>Nous trouver</h2>
            <div class="imgTitre"></div>
        </div>
        <div id='homeWhereContent'>
            <div id="map"></div>
            <div id="coord">
                <h3>Coupe Haie Net</h3>
                <p>Entretien d'espaces verts</p>
                <p>39 route es Terriers</p>
                <p>Flottemanville Hague</p>
                <p><a href='mailto:contact@coupehaie.net'>contact@coupehaie.net</a></p>
            </div>
        </div>
        <div>
            <a href="nous-contacter" id="contacting">Nous contacter</a>
        </div>
    </section>
</div>