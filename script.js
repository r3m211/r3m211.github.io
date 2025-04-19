// Dynamic project loading (example)
const projects = [
    { title: "Project 1", description: "A cool project." },
    { title: "Project 2", description: "Another project." }
];

const projectGrid = document.querySelector('.project-grid');

projects.forEach(project => {
    const projectCard = document.createElement('div');
    projectCard.innerHTML = `
        <h3>${project.title}</h3>
        <p>${project.description}</p>
    `;
    projectGrid.appendChild(projectCard);
});

// Form submission
document.getElementById('contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Message sent! (This is a demo)');
});
