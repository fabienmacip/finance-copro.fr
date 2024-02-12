<div id="contact-horaires-div" class="page-div">

    <h1>CONTACT & HORAIRES</h1>

    <div id="contact-form">
        
    </div>

    <div class="contact-boxes" id="contact-coordonnees">
        <h2>COORDONNEES</h2>
        <p class="hide-on-little-screen">
            <!-- <b>T&eacute;l&eacute;phone fixe : </b><a href="tel:0467214893" alt="telephoner fixe">&nbsp;04 67 21 48 93</a><br> -->
            <b>T&eacute;l&eacute;phone portable : </b><a href="tel:<?= $_PHONE_LINK; ?>" alt="telephoner mobile">&nbsp;<?= $_PHONE; ?></a><br>
            <b>Mail : </b><a href="mailto:<?= $_MAIL; ?>">&nbsp;<?= $_MAIL; ?></a>
        </p>
        <p class="display-on-little-screen">
            <!-- <b>T&eacute;l&eacute;phone fixe</b><br><a href="tel:0467214893" alt="telephoner fixe">&nbsp;04 67 21 48 93</a><br><br> -->
            <b>T&eacute;l&eacute;phone portable</b><br><a href="tel:<?= $_PHONE_LINK; ?>" alt="telephoner mobile">&nbsp;<?= $_PHONE; ?></a><br><br>
            <b>Mail</b><br><a href="mailto:<?= $_MAIL; ?>">&nbsp;<?= $_MAIL; ?></a>
        </p>
        
    </div>

    <div class="contact-boxes" id="contact-horaires">
        <h2>HORAIRES</h2>
        <p>
            <b>Ouverture</b><br>
            Du lundi au vendredi<br>
            De 08h00 &agrave; 19h00.
        </p>
    </div>
    
    <div id="contact-map" class="contact-boxes">
        <h2>NOUS ECRIRE</h2>
        <p>
            <b>Adresse</b><br>
            <?= $_ADRESSE_RUE; ?><br>
            <?= $_ADRESSE_VILLE_CP; ?>
        </p>
        <iframe 
            id="googlemap" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.353546445527!2d3.8210335765534795!3d43.61999995457682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6ac2838f3585f%3A0x32c932a4480a0473!2s496%20Rue%20Favre%20de%20Saint-Castor%2C%2034080%20Montpellier!5e0!3m2!1sfr!2sfr!4v1707744237240!5m2!1sfr!2sfr" 
            style="border:0;" 
            allowfullscreen="" 
            aria-hidden="false" 
            tabindex="0" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade" 
            data-no-lazy="1" 
            data-service="google-maps" 
            data-placeholder-image="img/google-map.jpg">
   	    </iframe>


           


    </div>

</div>