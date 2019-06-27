// Utilisation de l'Ajax pour aller en base de données, récuperer le nombre d'enregistrement

// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function(event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            // on localise, l'endroit où afficher la réponse
            var divCount  = document.getElementById("total");
            // on récupère la valeur utile
            divCount.innerHTML=reponse.nb;
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};
//on envoi la requête
req.open('GET', '../Model/APIPersonneCount.php', true);
req.send(null);