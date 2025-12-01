<style>
                    .project-item {
                    transition: opacity 0.5s ease-in-out, transform 0.3s ease;
                }

                .project-hidden.opacity-100 {
                    animation: fadeInUp 0.5s ease-out forwards;
                }

                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
</style>
