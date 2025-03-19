document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.skill, .project, .etudes-description li');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target); // Arrêter d'observer l'élément une fois qu'il est animé
            }
        });
    }, {
        threshold: 0.1 // Déclencher l'animation lorsque 10% de l'élément est visible
    });

    elements.forEach(element => {
        observer.observe(element);
    });
});
