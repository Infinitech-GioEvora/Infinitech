document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');
    const teamWrapper = document.querySelector('.team-wrapper');
    const detailsContainer = document.querySelector('.details-container');
    const detailName = document.getElementById('detail-name');
    const detailCredentials = document.getElementById('detail-credentials');
    const closeBtn = document.querySelector('.close-btn');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            const name = card.getAttribute('data-name');
            const position = card.getAttribute('data-position');
            const details = card.getAttribute('data-details');

            detailName.textContent = name;
            detailCredentials.innerHTML = `
                <li><strong>Position:</strong> ${position}</li>
                <li><strong>Details:</strong> ${details}</li>
            `;

            detailsContainer.classList.add('show');
            teamWrapper.style.marginRight = '300px'; // Adjust margin to make space for the details panel
        });
    });

    closeBtn.addEventListener('click', () => {
        detailsContainer.classList.remove('show');
        teamWrapper.style.marginRight = '0'; // Reset margin when closing
    });
});
