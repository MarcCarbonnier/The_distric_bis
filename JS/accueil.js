document.addEventListener("DOMContentLoaded", function () {
    const formulaire = document.getElementById("formulaire");

    formulaire.addEventListener("submit", function (e) {
        e.preventDefault();

        let search = true;
        search += validerChamp(
            /^[a-zA-ZÀ-ÿ-]+$/,
            document.getElementById("search"),
            "Veuillez saisir des caractères valide"
        );
    });
});

function validerChamp(regex, champ, messageErreur) {
    if (!regex.test(champ.value)) {
        alert(messageErreur);
        champ.focus();
        return false;
    }
    return true;
}


const searchInput = document.getElementById('search');
const resultsDiv = document.getElementById('results');
let timer; // Timer pour éviter les requêtes excessives

// Fonction pour effectuer une recherche dynamique
function performSearch(query) {
    if (query.trim().length > 0) {
        // Envoi de la requête AJAX avec fetch
        fetch('DAO.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `search=${encodeURIComponent(query)}`
        })
        .then(response => response.json())
        .then(data => {
            resultsDiv.innerHTML = ''; // Efface les anciens résultats

            if (data.length > 0) {
                data.forEach(plat => {
                    const platDiv = document.createElement('div');
                    platDiv.classList.add('plat');
                    platDiv.innerHTML = `
                        <img class='img-plat' src='./images_the_district/food/${plat.image}' alt='${plat.image}'>
                        <p class='title'>${plat.libelle}</p>
                        <p>${plat.description}</p>
                        <p>Prix : ${plat.prix} €</p>
                    `;
                    resultsDiv.appendChild(platDiv);
                });
            } else {
                resultsDiv.innerHTML = '<p>Aucun résultat trouvé.</p>';
            }
        })
        .catch(error => console.error('Erreur :', error));
    } else {
        resultsDiv.innerHTML = '<p>Veuillez entrer un terme de recherche.</p>';
    }
}

// Événement "input" pour déclencher la recherche en temps réel
searchInput.addEventListener('input', (event) => {
    clearTimeout(timer); // Réinitialise le timer pour éviter trop de requêtes
    timer = setTimeout(() => {
        performSearch(event.target.value); // Effectuer la recherche après un délai
    }, 300); // Délai de 300 ms avant d'envoyer la requête
});

