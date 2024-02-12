<header>
    <div class="logo flex-1 tc">
        <a href="index.php?page=accueil">
            <img 
                id="logo" 
                class="logo-large-screen" 
                src="img/logo/logo-finance-copro-500x500.png"
                alt="Finance Copro - Logo"
            >
        </a>
    </div>
    <div class="contacts flex-2 flex">
        <div class="flex flex-column gap-15 aic">
            <div class="contacts-phone flex-1 flex aic">
                <div>
                    <a href="tel:<?= $_PHONE; ?>" alt="telephoner">
                        <img
                            id="contacts-phone-img"
                            class="contacts-icon"
                            src="img/icones/phone.svg"
                            alt="telephoner"
                        >
                    </a>
                </div>
<!--                 <div>
                  <a href="tel:0467214893" alt="telephoner fixe">&nbsp;04 67 21 48 93</a> ou 
                </div>
 -->                <div>
                  <a href="tel:<?= $_PHONE_LINK; ?>" alt="telephoner mobile">&nbsp;<?= $_PHONE; ?></a>
                </div>
            </div>
            <div class="contacts-mail flex-1 flex aic">
                <div>
                    <a href="mailto:<?= $_MAIL; ?>">
                        <img
                            id="contacts-mail-img"
                            class="contacts-icon"
                            src="img/icones/mail.svg"
                            alt="mail"
                        >
                    </a>
                </div>
                <div>
                    <a href="mailto:<?= $_MAIL; ?>">&nbsp;<?= $_MAIL; ?></a>
                </div>
            </div>
            <div class="contacts-lieu flex-1 flex aic">
                <div>
                    <a href="<?= $_MAP_LINK; ?>" target="_blank">
                    <img
                        id="contacts-lieu-img"
                        class="contacts-icon"
                        src="img/icones/map.svg"
                        alt="lieu"
                    >
                    </a>
                </div>
                <div>
                    <a href="<?= $_MAP_LINK; ?>" target="_blank">
                    &nbsp;<?= $_ADRESSE_RUE; ?>&nbsp;
                    </a>
                </div>
                <div>
                    <a href="<?= $_MAP_LINK; ?>" target="_blank">
                    &nbsp;<?= $_ADRESSE_VILLE_CP; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>