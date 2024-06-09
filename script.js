
// animation pour le site
const ratio = .1
const options = {
    root : null,
    rootMargin : '0px',
    threshold : ratio
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry){
        if (entry.intersectionRatio > ratio) {
                entry.target.classList.add('reveal--visible')
                observer.unobserve(entry.target)
        }
    })
}


const observer = new IntersectionObserver( handleIntersect, options)
document.querySelectorAll('.reveal').forEach(function(r) {
    observer.observe(r)
})

// faire une fenêtre modale 

const modalContainer = document.querySelector(".modal-container");
const modalTrigger = document.querySelectorAll(".modal-trigger");

modalTrigger.forEach(trigger => trigger.addEventListener("click",ToggleModal))

function ToggleModal() {
    modalContainer.classList.toggle("active")
}

// rendre cliquanble la  div contact 
document.getElementById("contactDiv").addEventListener("click", () => {
    window.location.href = "./formulaire.php";
})


document.getElementById('imageForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire par défaut
    
    var formData = new FormData(this); // Récupère les données du formulaire
    
    // Envoie les données au serveur (vous pouvez implémenter ceci en PHP)
    fetch('fct-app.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Met à jour l'attribut src de l'image avec l'URL du fichier téléchargé
        document.getElementById('projectImage').src = data.imageUrl;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});