document.addEventListener('DOMContentLoaded', () => {
    const menuLinks = document.querySelectorAll ('.sidebar .menu a');
    const sections = document.querySelectorAll('.section');
    const savedSection = localStorage.getItem("activeSection") || "dashboard";

    // Function to show a specific section
    const showSection = (sectionId) => {
        // Remove 'active' from all links and sections
        menuLinks.forEach(link => link.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));

        // Activate the selected link and section
        const activeLink = Array.from(menuLinks).find(link => link.dataset.section === sectionId);
        const activeSection = document.getElementById(sectionId);

        if (activeLink && activeSection) {
            activeLink.classList.add('active');
            activeSection.classList.add('active');

            // Smooth scrolling to the section
            activeSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Save the current section to localStorage
        localStorage.setItem("activeSection", sectionId);
    };

    // Attach event listener to all menu links
    menuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const sectionId = link.getAttribute('data-section');
            showSection(sectionId);
        });
    });

    // Show the saved section on load
    showSection(savedSection);

    // Save scroll position before the page is unloaded
    let scrollTimeout;
    window.addEventListener("scroll", () => {
        if (scrollTimeout) clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            localStorage.setItem("scrollPosition", window.scrollY);
        }, 100);
    });

    // Restore scroll position on load
    const savedScrollPosition = localStorage.getItem("scrollPosition");
    if (savedScrollPosition) {
        window.scrollTo(0, parseInt(savedScrollPosition, 10));
    }

    // Search functionality
    const searchButton = document.getElementById("searchButton");
    if (searchButton) {
        searchButton.addEventListener("click", () => {
            const searchTerm = document.getElementById("searchStudent").value.toLowerCase();
            const rows = document.querySelectorAll("#studentTableBody tr");
            rows.forEach((row) => {
                row.style.display = row.innerText.toLowerCase().includes(searchTerm) ? "" : "none";
            });
        });
    }

    
});
function updateFilters() {
    const date = document.getElementById('end-date').value;
    const type = document.getElementById('document-type').value;
    const year = document.getElementById('academic-year').value;
    const url = new URL(window.location.href);

    // Update or remove the date filter
    if (date) {
        url.searchParams.set('filter_date', date);
    } else {
        url.searchParams.delete('filter_date');
    }

    // Update or remove the document type filter
    if (type && type !== 'toutes') {
        url.searchParams.set('filter_type', type);
    } else {
        url.searchParams.delete('filter_type');
    }

    // Update or remove the academic year filter
    if (year && year !== 'toutes') {
        url.searchParams.set('filter_year', year);
    } else {
        url.searchParams.delete('filter_year');
    }

    // Reload the page with the updated URL
    window.location.href = url.toString();
}