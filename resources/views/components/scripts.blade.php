    <script>
        // PRELOADER
        window.addEventListener("load", () => {
            const preloader = document.getElementById("preloader");
            preloader.style.opacity = "0";
            preloader.style.transition = "opacity 0.5s ease";
            setTimeout(() => {
                preloader.style.display = "none";
            }, 500);
        });

        // Dark mode init
        (function() {
            const html = document.documentElement;
            if (localStorage.theme === "dark" || (!("theme" in localStorage) && window.matchMedia(
                    "(prefers-color-scheme: dark)").matches)) {
                html.classList.add("dark");
            } else {
                html.classList.remove("dark");
            }
        })();

        feather.replace();

        // MOBILE MENU
        document.getElementById("menuBtn").addEventListener("click", () => {
            const menu = document.getElementById("mobileMenu");
            menu.classList.toggle("hidden");
            menu.classList.add("mobile-menu-open");
        });

        // DARK MODE TOGGLE
        const html = document.documentElement;
        const themeToggle = document.getElementById("themeToggle");
        const themeIcon = document.getElementById("themeIcon");

        function updateIcon() {
            themeIcon.setAttribute("data-feather", html.classList.contains("dark") ? "sun" : "moon");
            feather.replace();
        }
        updateIcon();
        themeToggle.addEventListener("click", () => {
            html.classList.toggle("dark");
            localStorage.theme = html.classList.contains("dark") ? "dark" : "light";
            updateIcon();
        });

        // TYPING EFFECT
        const texts = ["Frontend Web Developer", "UI/UX Web Designer", "Backend Web Developer", "Fullstack Web Developer"];
        let index = 0,
            charIndex = 0;
        const typedText = document.getElementById("typedText");
        const cursor = document.getElementById("cursor");

        function type() {
            if (charIndex < texts[index].length) {
                typedText.textContent += texts[index][charIndex++];
                setTimeout(type, 90);
            } else setTimeout(erase, 1500);
        }

        function erase() {
            if (charIndex > 0) {
                typedText.textContent = texts[index].substring(0, --charIndex);
                setTimeout(erase, 60);
            } else {
                index = (index + 1) % texts.length;
                setTimeout(type, 500);
            }
        }
        setInterval(() => cursor.classList.toggle("opacity-0"), 500);
        document.addEventListener("DOMContentLoaded", () => type());

        // SCROLL TO TOP BUTTON
        const toTop = document.getElementById("toTop");
        window.addEventListener("scroll", () => {
            toTop.style.display = window.scrollY > 500 ? "flex" : "none";
        });
        toTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // INIT AOS
        AOS.init({
            once: true,
            duration: 800
        });
    </script>
