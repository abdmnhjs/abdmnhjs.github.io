document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll(
        '.technologies-title, .technologies-images img, .projets-title, .projets div .projet-title, .projets div .projet-link, .projets div .projet-description, .formations h1, .formations img, .formations p, .etudes-title, .etudes-description'
    );

    let delay = 150;
    elements.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = 1;
            element.style.transform = 'translateY(0)';
        }, delay);
        delay += 150;
    });

    const choixForm = document.getElementById('choixForm');
    choixForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const choix = document.getElementById('choix').value;
        fetch('process.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `choix=${choix}`
        })
            .then(response => response.json())
            .then(data => {
                document.getElementById('content').innerHTML = data.content;
            })
            .catch(error => console.error('Error:', error));
    });
});
