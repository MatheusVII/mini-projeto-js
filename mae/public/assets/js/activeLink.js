export function setActiveLink() {
    const links = document.querySelectorAll('#lista-links li a');
    const currentPage = window.location.pathname.split('/').pop();
    links.forEach(link => {
        const linkPage = link.getAttribute('href').split('/').pop();

        if (linkPage === currentPage) {
        link.classList.add('active');
        }
    });
}