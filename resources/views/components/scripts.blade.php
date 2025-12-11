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
        @if(isset($typingTitles) && count($typingTitles) > 0)
        const texts = @json($typingTitles);
        @else
        const texts = ["Frontend Web Developer", "UI/UX Web Designer", "Backend Web Developer", "Fullstack Web Developer"];
        @endif
        
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
        
        // Cursor blinking
        if (cursor) {
            setInterval(() => cursor.classList.toggle("opacity-0"), 500);
        }
        
        // Start typing animation when DOM is ready
        document.addEventListener("DOMContentLoaded", () => {
            if (typedText) {
                typedText.textContent = ''; // Clear any initial content
                type();
            }
        });

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

        // LOAD MORE PROJECTS
        // document.addEventListener('DOMContentLoaded', function() {
        //     const loadMoreBtns = document.querySelectorAll('.load-more-trigger');
        //     const hiddenProjects = document.querySelectorAll('.project-hidden');

        //     loadMoreBtns.forEach(btn => {
        //         btn.addEventListener('click', function(e) {
        //             e.preventDefault();
        //             hiddenProjects.forEach(project => {
        //                 project.classList.remove('hidden');
        //             });
        //             // Hide the buttons after expanding
        //             loadMoreBtns.forEach(b => b.style.display = 'none');

        //             // Re-initialize Feather icons for new content if needed (though these are just hidden, so they should be fine)
        //             if (typeof feather !== 'undefined') {
        //                 feather.replace();
        //             }

        //             // Refresh AOS if available
        //             if (typeof AOS !== 'undefined') {
        //                 AOS.refresh();
        //             }
        //         });
        //     });
        // });

        // TOGGLE SHOW MORE/LESS PROJECTS
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleProjectsBtn');
            
            // Only run if toggle button exists
            if (!toggleBtn) return;
            
            const btnText = document.getElementById('btnText');
            const btnIcon = document.getElementById('btnIcon');
            const hiddenProjects = document.querySelectorAll('.project-hidden');
            let isExpanded = false;

            // Only show button if there are hidden projects
            if (hiddenProjects.length === 0) {
                toggleBtn.style.display = 'none';
                return;
            }

            toggleBtn.addEventListener('click', function() {
                isExpanded = !isExpanded;

                if (isExpanded) {
                    // Show all projects with stagger animation
                    hiddenProjects.forEach((project, index) => {
                        setTimeout(() => {
                            project.classList.remove('hidden');
                            // Trigger reflow for animation
                            void project.offsetWidth;
                            // Add fade-in animation
                            project.style.opacity = '0';
                            project.style.transform = 'translateY(20px)';
                            
                            setTimeout(() => {
                                project.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                                project.style.opacity = '1';
                                project.style.transform = 'translateY(0)';
                            }, 50);
                        }, index * 100); // Stagger animation
                    });

                    // Update button
                    btnText.textContent = 'Tampilkan Sedikit';
                    btnIcon.setAttribute('data-feather', 'chevron-up');
                    btnIcon.style.transform = 'rotate(180deg)';
                    feather.replace();
                    
                    // Refresh AOS for new visible items
                    if (typeof AOS !== 'undefined') {
                        setTimeout(() => AOS.refresh(), hiddenProjects.length * 100 + 100);
                    }
                } else {
                    // Hide projects with fade out
                    hiddenProjects.forEach((project) => {
                        project.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                        project.style.opacity = '0';
                        project.style.transform = 'translateY(20px)';
                    });

                    // Wait for fade out animation before hiding
                    setTimeout(() => {
                        hiddenProjects.forEach((project) => {
                            project.classList.add('hidden');
                            project.style.opacity = '';
                            project.style.transform = '';
                            project.style.transition = '';
                        });

                        // Smooth scroll to projects section
                        const projectsSection = document.getElementById('projects');
                        if (projectsSection) {
                            const offset = 100; // Offset from top
                            const elementPosition = projectsSection.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - offset;

                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    }, 300);

                    // Update button
                    btnText.textContent = 'Lihat Semua';
                    btnIcon.setAttribute('data-feather', 'chevron-down');
                    btnIcon.style.transform = 'rotate(0deg)';
                    feather.replace();
                }
            });
        });

        // IMAGE MODAL FUNCTIONS
        function openImageModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');

            modalImage.src = imageSrc;
            modal.classList.remove('hidden');
            modal.classList.add('flex');

            // Prevent body scroll when modal is open
            document.body.style.overflow = 'hidden';

            // Re-initialize feather icons for the modal
            feather.replace();
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');

            modal.classList.add('hidden');
            modal.classList.remove('flex');

            // Re-enable body scroll
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('imageModal');
            if (modal) {
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        closeImageModal();
                    }
                });
            }

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeImageModal();
                }
            });
        });
    </script>
