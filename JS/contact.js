document.addEventListener("DOMContentLoaded", function () {
    const formulaire = document.getElementById("formulaire");
    document.getElementById("submit").addEventListener(this.onclick, function (e) {
        e.preventDefault(); //évite l'envoi du fomulaire sans la verif

        //validation du formulaire
        let verif = true;
        verif = verif && validerChamp(
            /^[a-zA-ZÀ-ÿ-\s]+$/,
            document.getElementById("nom"),
            alert ("Veuillez saisir des caractère valide")
        );
        verif = verif && validerChamp(
            /^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/,
            document.getElementById("email"),
            alert ("Veuillez saisir des caractères valide")
        );
        verif = verif && validerChamp(
            /^0[1-9]([-.]?[0-9]{2}){4}$/,
            document.getElementById("tel"),
            alert("Veuillez saisir un numéro de téléphone valide")
        );

        if(verif){
            formulaire.onsubmit();
        }
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

