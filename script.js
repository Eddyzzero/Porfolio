
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

// faire une fenêtre tooltip
document.addEventListener('DOMContentLoaded', (event) => {
    const hoverDiv = document.querySelector('.container-child-projets');
    const tooltip = document.getElementById('tooltip');

    hoverDiv.addEventListener('mouseover', () => {
        tooltip.style.visibility = 'visible';
        tooltip.style.opacity = '1';
    });

    hoverDiv.addEventListener('mouseout', () => {
        tooltip.style.visibility = 'hidden';
        tooltip.style.opacity = '0';
    });
});



// rendre cliquanble la  div contact 
document.getElementById("contactDiv").addEventListener("click", () => {
    window.location.href = "./formulaire.php";
})


