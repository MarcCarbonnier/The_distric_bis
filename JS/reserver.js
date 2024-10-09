document.addEventListener("DOMContentLoaded", function () {
    const formulaire = document.getElementById("formulaire")
    formulaire.getElementById("submit").addEventListener(this.onclick, function (e) {
        e.preventDefault();



        let verif = true;
        verif = verif && validerChamp(
            /^[a-zA-ZÀ-ÿ-]+$/,
            document.getElementById("nom"),
            "Veuiller saisir des caractères valide"
        );
    });
});


// On définit quelques variables
let nativePicker = document.querySelector(".nativeTimePicker");
let fallbackPicker = document.querySelector(".fallbackTimePicker");

let hourSelect = document.querySelector("#hour");
let minuteSelect = document.querySelector("#minute");

// On cache le sélecteur alternatif
fallbackPicker.style.display = "none";

// On teste si un nouveau contrôle time
// est transformé en text
let test = document.createElement("input");

try {
    test.type = "time";
} catch (e) {
    console.log(e.description);
}

// Si c'est le cas…
if (test.type === "text") {
    // On masque le sélecteur natif et
    // on affiche le sélecteur alternatif
    nativePicker.style.display = "none";
    fallbackPicker.style.display = "block";

    // On génère les valeurs dynamiquement
    // pour les heures et les minutes
    populateHours();
    populateMinutes();
}

function populateHours() {
    // On ajoute les heures dans
    // l'élément <select> avec les 6
    // heures ouvertes
    for (let i = 12; i <= 18; i++) {
        let option = document.createElement("option");
        option.textContent = i;
        hourSelect.appendChild(option);
    }
}

function populateMinutes() {
    // On génère 60 options pour 60 minutes
    for (let i = 0; i <= 59; i++) {
        let option = document.createElement("option");
        option.textContent = i < 10 ? "0" + i : i;
        minuteSelect.appendChild(option);
    }
}

// avec la fonction suivante, si l'heure vaut 18
// on s'assure que les minutes vaillent 00
// afin de ne pas pouvoir choisir d'heure passé 18:00
function setMinutesToZero() {
    if (hourSelect.value === "18") {
        minuteSelect.value = "00";
    }
}
function submitreservation() {
    let name = document.getElementById("nom").value;
    let guest = document.getElementById("guests").value;
    let message = "Merci " + name + " de votre réservation pour " + guest;
    alert(message);
};

function validerChamp(regex, champ, messageErreur) {
    if (!regex.test(champ.value)) {
        alert(messageErreur);
        champ.focus();
        return false;
    }
    return true;
}