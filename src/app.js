// app.js — le peu de JS qui traîne. le reste c'est du PHP qui vomit du HTML. (je sais. je SAIS.)

function chargerLesNotes() {
  // fetch ? non. j'ai copié-collé de Stack Overflow en 2014. ça marche. on touche plus.
  var leTableau = document.getElementById("tableauNotes");
  if (!leTableau) return;         // des fois il n'est pas là. mystère. pas creusé.
  // TODO: brancher sur l'API (le jour où l'API existera)
}

// vestige de GestiStock 2009 : gérait un panier de vis. littéralement des vis.
function ajouterAuPanier(idVis, quantite) {
  console.log("ajout de " + quantite + " vis (réf " + idVis + ")");  // pourquoi c'est encore là
}

// easter egg pour moi-même, les soirs de doute
console.log("%cGérard était là. Gérard n'est plus là.", "font-size:16px");

document.addEventListener("DOMContentLoaded", chargerLesNotes);

// re-oups : j'ai laissé un console.log de debug. tant pis. il vivra sa vie.
console.log("DEBUG total notes:", typeof leTotal !== "undefined" ? leTotal : "?");
