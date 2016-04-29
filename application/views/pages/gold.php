 <section>
    <div class='titrePage'> 
        <div class="imgTitre"></div>
        <h2>Livre d'or</h2>
        <div class="imgTitre"></div>
    </div>
    <div class="content" id="goldPage">
        <div class="flexslider" id='comments'>
            <ul class="slides">
                <?php
                    foreach($displayComments as $element) {
                        echo ("
                            <li>
                                <div id='comSlide'>
                                    <h2 id='comTxt'>&quot;&nbsp;".$element['content']."&nbsp;&quot;</h2>
                                    <p id='comAuth'>".$element['author']."</p>
                                </div>
                            </li>
                        ");
                    }
                ?>
            </ul>
        </div>
        <div id='commentWrapper'>
                <?php
                    foreach($displayComments as $element) {
                        echo (
                            "<div class='commentDisplay'>".
                                '<p class="commentContent">" '.
                                    $element['content'].
                                ' "</p>'.
                                "<p class='commentAuthor'>".
                                    $element['author'].
                                "</p>".
                            "</div>"
                        );
                    }
                ?>
        </div>
        <div class='titrePage'> 
            <div class="imgTitre"></div>
            <h2>Laissez votre propre avis</h2>
            <div class="imgTitre"></div>
        </div>
        <div id='commentForm'>
            <?php 
                echo validation_errors();
                echo form_open('comment');
            ?>
            <div>
                <?php echo form_error('nom'); ?>
                <label for='nom' >Nom :</label>
                <input type="text" id='nom' name='nom' value='<?php echo set_value('nom'); ?>' required/>
            </div>
            <div>
                <?php echo form_error('msgComment'); ?>
                <label for='msgComment' >Commentaire :</label>
                <input type="text" id='nom' name='msgComment' value='<?php echo set_value('msgComment'); ?>' required/>
            </div>
            <div>
                <input type="submit" value="Laisser un commentaire" />
            </div>
        </div>
    </div>
</section>