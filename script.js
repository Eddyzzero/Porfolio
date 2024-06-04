
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

