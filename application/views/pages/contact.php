    <section>
        <div class='titrePage'> 
            <div class="imgTitre"></div>
            <h2>Nous contacter</h2>
            <div class="imgTitre"></div>
        </div>
        <?php 
            echo validation_errors();
            echo form_open('contact');
        ?>
        <div id='formContacter'>
            <div id='formContact'>
                <div id='civil'>
                    <div>
                        <?php echo form_error('nom'); ?>
                        <label for='nom' >Nom :</label>
                        <input type="text" id='nom' name='nom' value='<?php echo set_value('nom'); ?>' required/>
                    </div>
                    <div>
                        <?php echo form_error('prenom'); ?>
                        <label for='prenom' >Pr&eacute;nom :</label>
                        <input type="text" id='prenom' name='prenom' value='<?php echo set_value('prenom'); ?>'/>
                    </div>
                </div>
                <div id='infoContact'>
                    <div>
                        <?php echo form_error('phone'); ?>
                        <label for='phone '>T&eacute;l&eacute;phone :</label>
                        <input type="text" id='phone' name='phone' value='<?php echo set_value('phone'); ?>' required/>
                    </div>
                    <div>
                        <?php echo form_error('object'); ?>
                        <label id='object'>Objet :</label>
                        <input type="text" id='object' name='object' value='<?php echo set_value('object'); ?>' required/>
                    </div>
                </div>
            </div>
            <div id='formMsgSubmit'>
                <div id='txtMsg'>
                    <?php echo form_error('msgContact'); ?>
                    <label for='msgContact'>Message :</label>
                    <textarea name="msgContact" rows="20" cols="70" id='msgContact' placeholder="Saisissez votre message ici" value='<?php echo set_value('msgContact'); ?>' required></textarea>
                </div>
                <div id='submitContact'>
                    <input type="submit" value="Nous contacter" />
                </div>
            </div>
        </div>
    </section>