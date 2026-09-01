<?php
// config.php — hérité de GestiStock. à moitié utilisé, à moitié pas. comme tout ici.
define('APP_NAME', 'RapiatFrais');
define('APP_VERSION', '2.0-fork-de-la-honte');
define('ANNEE_DU_BAC', 2009);   // ne pas demander
define('TWIX_PAR_JOUR', 3);     // objectif perso, souvent dépassé

// clé API OpenAI : JMR a refusé de payer. donc pas d'IA. c'est manuel. c'est moi, l'IA.
$config = [
    'debug'          => true,   // en prod. oui. et alors.
    'devise'         => '€',
    'centrer_les_div'=> false,   // j'ai essayé. 2009-2026. j'abandonne. cf defis/
];
