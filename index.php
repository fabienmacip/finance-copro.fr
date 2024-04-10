<?php

$_PHONE = "06 49 93 46 37";
$_PHONE_LINK = "0649934637";
$_MAIL = "r.durin@finance-copro.fr";
$_MAP_LINK = "https://maps.app.goo.gl/xiRd6KTxx8xd7nrZA";
$_ADRESSE_RUE = "469, rue Favre St-Castor";
$_ADRESSE_VILLE_CP = "MONTPELLIER (34 080)";

// MENTIONS LEGALES
if (isset($_GET['page']) && 'mentions-legales' === $_GET['page']) {
    ob_start();
    require_once('vues/page-mentions-legales.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// VOUS FINANCER
elseif (isset($_GET['page']) && 'vous-financer' === $_GET['page']) {
    ob_start();
    require_once('vues/page-vous-financer.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// NOS MISSIONS
elseif (isset($_GET['page']) && 'nos-missions' === $_GET['page']) {
    ob_start();
    require_once('vues/page-nos-missions.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

// NOS REALISATIONS
elseif (isset($_GET['page']) && 'nos-realisations' === $_GET['page']) {
    ob_start();
    require_once('vues/page-nos-realisations.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}


// TEMOIGNAGES
/* elseif (isset($_GET['page']) && 'temoignages' === $_GET['page']) {
    ob_start();
    require_once('vues/page-temoignages.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}
 */
// CONTACT & HORAIRES
elseif (isset($_GET['page']) && 'contact-horaires' === $_GET['page']) {
    ob_start();
    require_once('vues/page-contact-horaires.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

/* PARTENAIRES (LABELS) */

elseif (isset($_GET['page']) && 'partenaires' === $_GET['page']){
    ob_start();
    require_once('vues/page-partenaires.php');
    $contenu = ob_get_clean();
    require_once('vues/layout.php');
}

else {
    ob_start();
    require_once('vues/page-accueil.php');
    //$contenu = ob_get_clean();
    //require_once('vues/layout.php');
}

