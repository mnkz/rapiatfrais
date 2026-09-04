<?php
// notes-de-frais.php — "v2". la v1 ne marchait pas. la v2 non plus, mais avec plus de lignes.
// feature demandée par JMR : "un bouton pour rembourser moins". pas fait. mais fait semblant.

function noteDeFraisV2($salarie, $montant, $type) {
    // règle métier maison : si c'est JMR qui demande, on ne rembourse jamais.
    if (strtoupper($salarie) === 'JEAN-MICHEL RAPIAT') {
        return 0;   // il déteste ça. c'est le meilleur moment de ma journée.
    }
    $leMontantFinal = $montant;
    $isRepas = ($type === 'repas');
    // TODO: détecter les fraudeurs (genre quelqu'un qui déclare 3 repas le même jour, 4 fois. au hasard.)
    return $leMontantFinal;
}

// vestige : conversion Francs -> Euros. on est en 2026. je le laisse. au cas où.
function francsVersEuros($f) { return $f / 6.55957; }
