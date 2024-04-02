function addRow() {
    // Clone de la première ligne
    var newRow = document.getElementById('dataTable').getElementsByTagName('tbody')[0].getElementsByTagName('tr')[0].cloneNode(true);
    // Effacer les valeurs des champs clonés
    var inputs = newRow.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].value = '0';
    }
  

  // Initialisation des valeurs des champs tranche1, tranche2 et statut à zéro et "En attente"
  newRow.querySelector("input[name='Tranche1[]']").value = '0';
  newRow.querySelector("input[name='Tranche2[]']").value = '0';
  newRow.querySelector("input[name='Statut_paiement[]']").value = 'En attente';

  // Assigner de nouveaux identifiants uniques aux éléments clonés
  var selectMembre = newRow.querySelector("select[name='selectMembre[]']");
  var newId = "selectMembre_" + Date.now(); // Génère un identifiant unique
  selectMembre.setAttribute("id", newId);
  selectMembre.setAttribute("name", "selectMembre[]");

  // Ajouter la nouvelle ligne au tableau
  document.getElementById('dataTable').getElementsByTagName('tbody')[0].appendChild(newRow);

  // Initialiser Select2 sur la ligne clonée
  $("#" + newId).select2();
  }
  
  // Fonction pour calculer la somme des tranches et mettre à jour le statut
  function calculerSommeEtStatut() {
    var lignes = document.querySelectorAll("#dataTable tbody tr");
    var plafondAssurance = parseFloat(document.getElementById("plafondAssurance").value);
  
    lignes.forEach(function(ligne) {
      var tranche1 = parseFloat(ligne.querySelector("input[name='Tranche1[]']").value);
      var tranche2 = parseFloat(ligne.querySelector("input[name='Tranche2[]']").value);
      var total = tranche1 + tranche2;
      var statut = ligne.querySelector("input[name='Statut_paiement[]']");
  
      if (total > 0 && total < plafondAssurance) {
        statut.value = "En cours";
      } else if (total === 0) {
        statut.value = "En attente";
      } else if (total >= plafondAssurance) {
        statut.value = "Payé";
      } else {
        statut.value = "";
      }
    });
  }
  
  // Écouteurs d'événements pour les champs de tranche1 et tranche2
  document.addEventListener('input', function(event) {
    if (event.target.matches("input[name='Tranche1[]'], input[name='Tranche2[]'], input[name='plafondAssurance']")) {
      calculerSommeEtStatut();
    }
  });
  
  // Exécute la fonction de calcul initial
  calculerSommeEtStatut();