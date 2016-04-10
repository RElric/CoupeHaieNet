    <section>
        <div class='titrePage'> 
            <div class="imgTitre"></div>
            <h2>Réalisations</h2>
            <div class="imgTitre"></div>
        </div>
        <div>
            <?php 
                foreach($sliderImg as $element) {
                    echo ("
                        <div class='fancyGalery'><a class='grouped_elements' rel='group1' href='/assets/img/galery/"
                        .$element['imgPath']
                        ."'><img src='/assets/img/galery/"
                        .$element['imgPath']
                        ."' class='fancyImg' /></a></div>
                    ");
                }
            ?>
        </div>
</section>