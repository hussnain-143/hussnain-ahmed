document.addEventListener("DOMContentLoaded", function () {
    // Navbar Scroll Effect
    const navbar = document.querySelector(".navbar");
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    window.addEventListener("scroll", function () {
        let scrollPos = window.scrollY + 100; // Offset for better accuracy

        // Add 'scrolled' class for navbar background change
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }

        // Highlight active section in navbar
        sections.forEach((section) => {
            if (
                section.offsetTop <= scrollPos &&
                section.offsetTop + section.offsetHeight > scrollPos
            ) {
                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href").substring(1) === section.id) {
                        link.classList.add("active");
                    }
                });
            }
        });
    });

    // Navbar Toggler for Mobile
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbarCollapse = document.querySelector("#navbarNav");

    navbarToggler.addEventListener("click", function () {
        navbarCollapse.classList.toggle("show");
    });

    // Skill Circle Animation
    const circles = document.querySelectorAll(".skill-circle");

    circles.forEach(circle => {
        const percentage = circle.getAttribute("data-percent");
        const progressCircle = circle.querySelector(".progress-circle");
        const circumference = 2 * Math.PI * 50; // 50 is the radius
        const offset = circumference - (percentage / 100) * circumference;

        // Ensure stroke-dasharray is set before animation
        progressCircle.style.strokeDasharray = circumference;
        progressCircle.style.strokeDashoffset = circumference;

        // Trigger animation after a short delay
        setTimeout(() => {
            progressCircle.style.strokeDashoffset = offset;
        }, 500);
    });

    // Lightbox for Certificate Images
    const images = document.querySelectorAll(".certificate-img");

    images.forEach(image => {
        image.addEventListener("click", function () {
            const lightbox = document.createElement("div");
            lightbox.classList.add("lightbox");
            document.body.appendChild(lightbox);

            const img = document.createElement("img");
            img.src = this.src;
            lightbox.appendChild(img);

            lightbox.addEventListener("click", function () {
                lightbox.remove();
            });
        });
    });

    // Smooth Scrolling for Navigation Links
    navLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 70, // Adjust for navbar height
                    behavior: "smooth"
                });
            }
        });
    });
});
