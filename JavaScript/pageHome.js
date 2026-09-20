document.addEventListener("DOMContentLoaded", function () {
    const textElement = document.getElementById("animated-text");
    const textContent = textElement.textContent.trim();
    textElement.textContent = ""; 

    let i = 0;
    const typingSpeed = 20; 
    function typeText() {
        if (i < textContent.length) {
            textElement.textContent += textContent.charAt(i);
            i++;
            setTimeout(typeText, typingSpeed);
        }
    }

    typeText();
});

document.addEventListener("DOMContentLoaded", function () {
    const serviceItems = document.querySelectorAll(".service-item");

    serviceItems.forEach((item) => {
        item.addEventListener("click", () => {
            const description = item.nextElementSibling;

            if (description.classList.contains("active")) {
                description.classList.remove("active");
            } else {
                document.querySelectorAll(".service-description.active").forEach((desc) => {
                    desc.classList.remove("active");
                });
                description.classList.add("active");
            }
        });
    });
});


function toggleMenu() {
    const navMenu = document.querySelector(".nav-menu");
    navMenu.classList.toggle("active");
}



