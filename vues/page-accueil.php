<?php

$titre = 'FINANCE-COPRO.FR';

ob_start();
?>



<div class="m-0 max-width-100vw">
  <div id="div-image-accueil" class="box">
      Finance Copro
  </div>

  <div class="row max-width-100percent jcc wrap" id="accueil-text-boxes">
    
    <div class="accueil-text-boxes" id="accueil-bienvenue">
      <h2>Bienvenue chez Finance Copro</h2>
      <div id="image-accueil-text">
        Ensemble pour vous accompagner sur les financements de travaux en copropri&eacute;t&eacute;.
      </div>
    </div>

    <div id="accueil-activites-vous-financer" class="accueil-text-boxes">
      <h2>Pourquoi financer les travaux<br>de votre copropriété par un prêt collectif ?</h2>
      <div class="activite-card">
        <div class="activite-card-img display-over-830">
          <img src="img/accueil/vous-financer-portrait.jpg">
        </div> 
        <div class="activite-card-img display-under-830">
          <img src="img/accueil/vous-financer-landscape.jpg">
        </div> 
        <div class="activite-card-text">
          <p class="tc"><b>Principe d’un prêt collectif.</b></p>
          <p>
            Le <b>prêt collectif</b> est souscrit par le Syndicat des Copropriétaires. 
            Il permet de <b>financer les travaux collectifs</b> votés en assemblée générale.
          </p>
          <p>
            Ces travaux peuvent être de plusieurs natures :
          </p>
          <ul>
            <li>
              Rafraichissement : peinture intérieure ou extérieure du bâtiment,
            </li>
            <li>
              Isolation thermique par l’extérieur ou l’intérieur,
            </li>
            <li>
              Travaux d’ascenseurs,
            </li>
            <li>
              Enrobés parking,
            </li>
            <li>
              Acquisition de foncier pour création de surfaces annexes (parking, espaces verts...),
            </li>
            <li>
              Calorifugeage et chaufferie, couverture tuile et étanchéité...
            </li>
            <li>
              Refroidissement d’une résidence...
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="accueil-activites-nos-missions" class="accueil-text-boxes">
      <h2>Nos missions</h2>
        <div class="activite-card">
          <div class="activite-card-img display-over-830">
            <img src="img/accueil/nos-missions-portrait.jpg">
          </div> 
          <div class="activite-card-img display-under-830">
            <img src="img/accueil/nos-missions-landscape.jpg">
          </div> 
          <div class="activite-card-text">
            <p>
              Voici nos <b>principales missions</b> : 
            </p>
            <ul>
              <li>
                Trouver l’offre adaptée à votre <u>projet de travaux</u>,
              </li>
              <li>
                Effectuer un <u>recensement</u> individualisé auprès de chacun des copropriétaires,
              </li>
              <li>
                Accompagner la mise en place du <u>dossier bancaire</u>,
              </li>
              <li>
                <u>Faire l’interface</u> entre la banque et la copropriété jusqu’à l’édition des offres,
              </li>
              <li>
                Trouver des solutions pour les <u>personnes non éligibles</u>,
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="accueil-activites-nos-partenaires" class="accueil-text-boxes">
        <h2>
          Nos principaux partenaires
        </h2>
        <div id="accueil-nos-missions-partenaires">
            <?php 
              require_once('vues/nos-partenaires.php');
            ?>
        </div>
    </div>


</div>


<?php
$contenu = ob_get_clean();
require_once('layout.php');