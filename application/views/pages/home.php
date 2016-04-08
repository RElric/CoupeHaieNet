<!-- corps du document -->
<header>
    <!-- Un slider utilisant FlexSlider.JS pour afficher les images des expériences désirées par le créateur -->
    <div class="flexslider" id='slider'>
        <ul class="slides">
            <?php
                foreach($sliderImg as $element) {
                    echo ("
                        <li>
                            <figure>
                                <img src='/assets/img/galery/".$element['imgPath']."'>
                                <figcaption id='dataGalery'>
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
                            <h2>".$element['comment']."</h2>
                            <p>".$element['author']."</p>
                        </li>
                    ");
                }
            ?>
        </ul>
    </div>
</header>
<div>
    <!-- Une section contenant les actualités -->
    <section id="news">
        <h2>Actualités</h2>
        <ul id="newsList">
            <?php
                foreach($news as $actus) {
                    echo("<li><a href='/actualites/read/".$actus['slug']."'>".$actus['title']."</a></li>");
                }
            ?>
        </ul>
        <p><a href='/actualites'>Et encore plus!</a></p>
    </section>
    <section id='homeWhere'>
        <h2>Nous trouver</h2>
        <div>
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
            <a href="/nous-contacter" id="contacting">Nous contacter</a>
        </div>
    </section>
</div>