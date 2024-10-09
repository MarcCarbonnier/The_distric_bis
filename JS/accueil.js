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

$("#nav").addClass("hide");
$("#menu").click(function () {
    $("#nav").slideToggle(400);
});
