document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.skill, .project');

    let delay = 150;
    elements.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = 1;
            element.style.transform = 'translateY(0)';
        }, delay);
        delay += 150;
    });
});
