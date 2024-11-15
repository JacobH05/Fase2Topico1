document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".card");
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }, index * 200);
    });
});

const navLinks = document.querySelectorAll(".sidebar nav a, .sidebar .logout");

navLinks.forEach(link => {
    link.addEventListener("mouseover", () => {
        link.style.color = "#007BFF";
    });

    link.addEventListener("mouseout", () => {
        link.style.color = "#000";
    });
});
