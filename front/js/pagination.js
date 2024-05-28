document.addEventListener("DOMContentLoaded", function () {
    const cardsPerPage = 8;
    const paginationCard = document.getElementById('paginationCard');
    const pagination = document.getElementById('pagination');
    const prevPageBtn = document.getElementById('prevPageBtn');
    const nextPageBtn = document.getElementById('nextPageBtn');
    const cards = paginationCard.querySelectorAll('.card_pagination');

    let currentPage = 0;
    const numPages = Math.ceil(cards.length / cardsPerPage);

    function showPage(page) {
        const start = page * cardsPerPage;
        const end = start + cardsPerPage;
        cards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function updatePaginationButtons() {
        prevPageBtn.disabled = currentPage === 0;
        nextPageBtn.disabled = currentPage === numPages - 1;

        // Remove existing pagination buttons
        pagination.querySelectorAll('.page-link.pageBtn').forEach(button => button.parentElement.remove());

        // Add numbered pagination buttons
        for (let i = 0; i < numPages; i++) {
            const pageBtn = document.createElement('li');
            pageBtn.classList.add('page-item');
            const link = document.createElement('a');
            link.classList.add('page-link', 'pageBtn');
            link.href = "#";
            link.textContent = i + 1;
            link.addEventListener('click', function () {
                currentPage = i;
                showPage(currentPage);
                updatePaginationButtons();
            });
            if (i === currentPage) {
                link.classList.add('active');
            }
            pageBtn.appendChild(link);
            pagination.insertBefore(pageBtn, nextPageBtn.parentElement);
        }
    }

    prevPageBtn.addEventListener('click', function () {
        if (currentPage > 0) {
            currentPage--;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    nextPageBtn.addEventListener('click', function () {
        if (currentPage < numPages - 1) {
            currentPage++;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    showPage(currentPage);
    updatePaginationButtons();
});
