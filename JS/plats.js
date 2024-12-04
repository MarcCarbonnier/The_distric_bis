const image= document.getElementById("commande");

image.addEventListener("focus", (Event)=>{
    Event.target.style.background = "pink";
});
image.addEventListener("blur", (Event)=>{
    Event.target.style.background = "";
});