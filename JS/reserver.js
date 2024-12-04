document.addEventListener("DOMContentLoaded", function () {
    const formulaire = document.getElementById("formulaire"); // Référence au formulaire
    const submitButton = document.getElementById("submitBtn"); // Bouton "Réserver"

    submitButton.addEventListener("click", function (e) {
        e.preventDefault(); // Empêche le comportement par défaut du bouton (soumission directe)

        let verif = true;

        // Validation du champ "Nom"
        verif = verif && validerChamp(
            /^[a-zA-ZÀ-ÿ\s-]+$/,
            document.getElementById("nom"),
            "Veuillez saisir un nom valide"
        );

        // Validation du champ "Nombre de couverts"
        const guests = document.getElementById("guests").value;
        if (guests < 1 || guests > 20) {
            alert("Le nombre de couverts doit être compris entre 1 et 20.");
            verif = false;
        }
        const timeInput = document.getElementById("appt-time");

            const timeValue = timeInput.value; // Format HH:MM
            const [hours, minutes] = timeValue.split(":").map(Number);
    
            // Vérifier si l'heure appartient à une plage valide
            if (
                (hours >= 11 && hours <= 13 && !(hours === 13 && minutes > 30)) || // Plage midi
                (hours >= 18 && hours <= 21 && !(hours === 21 && minutes > 30))   // Plage dîner
            ) {} else {
                alert("Veuillez sélectionner un horaire valide (Midi : 11:00-13:30, Dîner : 18:00-21:30).");
                verif=false;
            }

        // Validation réussie -> Soumettre le formulaire
        if (verif) {
            alert("Merci pour votre réservation  !");
            const box = document.getElementById("box");
            if (box) {
                box.style.display = "none";
            } else {
                console.error("Cadre introuvable.");
            }
            formulaire.submit(); // Soumettre le formulaire manuellement
        }
    });
});

// Fonction de validation des champs
function validerChamp(regex, champ, messageErreur) {
    const valeur = champ.value.trim();
    if (!regex.test(valeur)) {
        alert(messageErreur);
        champ.focus();
        return false;
    }
    return true;
};
