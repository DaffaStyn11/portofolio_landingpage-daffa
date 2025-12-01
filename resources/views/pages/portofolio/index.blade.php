<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daffa – Portfolio</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            bg: '#0a0a0a',
                            card: '#171717',
                            border: '#262626'
                        }
                    }
                }
            }
        }
    </script>

    <!-- FEATHER ICONS -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- AOS ANIMATION -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        body,
        header,
        section,
        div,
        p,
        h1,
        h2,
        h3,
        a,
        button,
        input,
        textarea,
        i {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .dark ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 5px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }

        #preloader {
            position: fixed;
            inset: 0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .dark #preloader {
            background: #0a0a0a;
        }

        .pulse {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #2563eb;
            animation: pulse 1s infinite alternate ease-in-out;
        }

        @keyframes pulse {
            from {
                transform: scale(0.7);
                opacity: .6;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        #toTop {
            position: fixed;
            bottom: 30px;
            right: 25px;
            padding: 12px;
            background: #2563eb;
            border-radius: 50%;
            display: none;
            z-index: 60;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        #toTop:hover {
            transform: translateY(-3px);
        }

        .mobile-menu-open {
            animation: slideDown .3s ease forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gradient-text {
            background: linear-gradient(90deg, #2563eb, #00d4ff);
            -webkit-background-clip: text;
            color: transparent;
        }

        .tilt-card:hover {
            transform: translateY(-6px) scale(1.02);
            transition: .3s ease;
        }
    </style>
</head>

<body
    class="bg-gray-50 text-gray-900 antialiased dark:bg-gray-950 dark:text-gray-100 selection:bg-blue-500 selection:text-white overflow-x-hidden">

    <!-- Background Gradient Blobs -->
    <div class="fixed inset-0 -z-10 pointer-events-none overflow-hidden hidden dark:block">
        <div
            class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] opacity-50">
        </div>
        <div
            class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[120px] opacity-50">
        </div>
    </div>

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="pulse"></div>
    </div>

    <!-- HEADER -->
    <header
        class="bg-white/80 dark:bg-gray-950/70 backdrop-blur-lg border-b border-gray-200/50 dark:border-gray-800/50 fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1
                class="text-xl font-bold tracking-wide bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                Daffa Setya Nugraha</h1>
            <ul class="hidden md:flex items-center gap-8 text-sm font-medium">
                <li><a href="#hero"
                        class="nav-link hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a></li>
                <li><a href="#about"
                        class="nav-link hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a></li>
                <li><a href="#skills"
                        class="nav-link hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Skills</a></li>
                <li><a href="#projects"
                        class="nav-link hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Projects</a>
                </li>
                <li><a href="#contact"
                        class="nav-link hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a></li>
            </ul>
            <div class="flex items-center gap-4">
                <button id="themeToggle"
                    class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors text-gray-600 dark:text-gray-400">
                    <i id="themeIcon" data-feather="moon" class="w-5 h-5"></i>
                </button>
                <button id="menuBtn" class="md:hidden p-2 text-gray-600 dark:text-gray-400">
                    <i data-feather="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </nav>

        <!-- MOBILE NAV -->
        <div id="mobileMenu"
            class="hidden bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-t dark:border-gray-800 shadow-lg md:hidden">
            <ul class="flex flex-col py-4 px-6 space-y-4 font-medium">
                <li><a href="#hero" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400">Home</a></li>
                <li><a href="#about" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400">About</a></li>
                <li><a href="#skills" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400">Skills</a></li>
                <li><a href="#projects" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400">Projects</a>
                </li>
                <li><a href="#contact" class="block py-2 hover:text-blue-600 dark:hover:text-blue-400">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="pt-28">

        <!-- HERO -->
        <section id="hero"
            class="max-w-7xl mx-auto px-6 py-32 grid lg:grid-cols-2 gap-12 items-center min-h-[90vh]">
            <div data-aos="fade-up">
                <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl -z-10 animate-pulse">
                </div>
                <div
                    class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-semibold mb-6 animate-pulse">
                    👋 Welcome to my portfolio
                </div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-4">
                    Hi, Saya <span class="gradient-text">Daffa Setya</span>
                </h1>

                <h2
                    class="text-2xl md:text-3xl font-semibold mt-3 flex items-center gap-2 text-gray-700 dark:text-gray-300">
                    I am a <span id="typedText" class="text-blue-600 dark:text-blue-400"></span>
                    <span id="cursor" class="text-blue-600 dark:text-blue-400 font-bold">|</span>
                </h2>

                <p class="text-gray-600 mt-6 text-lg dark:text-gray-400 leading-relaxed max-w-lg">
                    Membuat desain antarmuka intuitif, responsif, dan modern, serta membangun pengalaman web yang cepat
                    dan elegan.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#projects"
                        class="px-8 py-4 bg-blue-600 text-white rounded-xl hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-600/30 transition-all transform hover:-translate-y-1 font-medium">
                        Lihat Project
                    </a>
                    <a href="#contact"
                        class="px-8 py-4 border border-gray-300 dark:border-gray-700 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-all font-medium">
                        Hubungi Saya
                    </a>
                </div>

                <div class="mt-12 flex gap-6 text-gray-500 dark:text-gray-400">
                    <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><i
                            data-feather="github"></i></a>
                    <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><i
                            data-feather="linkedin"></i></a>
                    <a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><i
                            data-feather="instagram"></i></a>
                </div>
            </div>

            <div data-aos="zoom-out" class="flex justify-center relative">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-purple-600/20 rounded-full blur-3xl -z-10">
                </div>
                <img src="https://dummyimage.com/500x500/ddd/000&text=Daffa+Portfolio"
                    class="rounded-[2rem] shadow-2xl border-4 border-white dark:border-gray-800 rotate-3 hover:rotate-0 transition-all duration-500">
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="max-w-7xl mx-auto px-6 py-24">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="https://dummyimage.com/600x400/e5e5e5/000"
                        class="rounded-2xl shadow-lg w-full object-cover h-[400px]">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-6 flex items-center gap-3">
                        <span class="w-10 h-1 bg-blue-600 rounded-full"></span>
                        Tentang Saya
                    </h2>
                    <p class="text-gray-700 leading-relaxed text-lg dark:text-gray-300 mb-6">
                        Saya Daffa Setya Nugraha, seorang pengembang frontend dan desainer UI/UX
                        yang berfokus menciptakan antarmuka responsif, bersih, dan profesional. Saya memiliki passion
                        yang besar dalam mengubah ide menjadi kenyataan digital yang fungsional dan estetis.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-2xl text-blue-600 dark:text-blue-400">2+</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Years Experience</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-2xl text-blue-600 dark:text-blue-400">10+</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section id="skills" class="max-w-7xl mx-auto px-6 py-24 bg-gray-50/50 dark:bg-gray-900/20">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-4">Keahlian Saya</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Teknologi dan tools yang saya gunakan
                    untuk membangun aplikasi web berkualitas.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up">
                    <div
                        class="w-14 h-14 bg-blue-50 dark:bg-blue-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="monitor" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                        Frontend Development</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Membangun antarmuka web yang responsif dan interaktif menggunakan HTML, CSS, Tailwind, dan
                        React/Vue.
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="150">
                    <div
                        class="w-14 h-14 bg-purple-50 dark:bg-purple-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="layout" class="w-7 h-7 text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                        UI/UX Design</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Merancang desain user-friendly dengan Figma, Wireframing, dan Prototyping yang fokus pada
                        pengalaman pengguna.
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-14 h-14 bg-green-50 dark:bg-green-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="server" class="w-7 h-7 text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                        Backend Basic</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Memahami dasar backend dengan Laravel, integrasi REST API, dan perancangan database yang
                        efisien.
                    </p>
                </div>

            </div>
        </section>

        <!-- EXPERIENCE -->
        <section id="experience" class="max-w-7xl mx-auto px-6 py-24">
            <h2 class="text-3xl font-bold mb-12 text-center">Pengalaman Kerja</h2>

            <div class="space-y-8 max-w-4xl mx-auto">

                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-transparent hover:border-blue-100 dark:bg-gray-900/50 dark:border-gray-800 dark:hover:border-blue-900/50 relative overflow-hidden"
                    data-aos="fade-up">
                    <div class="absolute top-0 left-0 w-1 h-full bg-blue-500"></div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100">UI/UX & Frontend Internship</h3>
                        <span
                            class="text-sm font-medium px-3 py-1 bg-blue-100 text-blue-700 rounded-full dark:bg-blue-900/30 dark:text-blue-300 mt-2 md:mt-0 w-fit">Diskominfo
                            Mojokerto</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mb-4 flex items-center gap-2">
                        <i data-feather="calendar" class="w-4 h-4"></i> Juli 2023 – September 2023
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Mengembangkan Sistem Permohonan Cuti dalam 2,5 bulan. Berkolaborasi dalam tim untuk merancang
                        antarmuka pengguna (UI/UX) yang intuitif dan mengimplementasikannya ke dalam kode frontend yang
                        responsif.
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-transparent hover:border-purple-100 dark:bg-gray-900/50 dark:border-gray-800 dark:hover:border-purple-900/50 relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="absolute top-0 left-0 w-1 h-full bg-purple-500"></div>
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100">Freelance Web Developer</h3>
                        <span
                            class="text-sm font-medium px-3 py-1 bg-purple-100 text-purple-700 rounded-full dark:bg-purple-900/30 dark:text-purple-300 mt-2 md:mt-0 w-fit">Self
                            Employed</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mb-4 flex items-center gap-2">
                        <i data-feather="calendar" class="w-4 h-4"></i> 2024 – Sekarang
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Menyediakan jasa pembuatan website undangan digital dan landing page untuk UMKM. Fokus pada
                        optimasi performa, SEO, dan desain yang menarik untuk meningkatkan konversi klien.
                    </p>
                </div>

            </div>
        </section>

        <!-- PROJECTS -->
        <section id="projects" class="max-w-7xl mx-auto px-6 py-24">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Project Terbaru</h2>
                    <p class="text-gray-600 dark:text-gray-400">Beberapa hasil karya terbaik saya.</p>
                </div>
                <a href="#"
                    class="hidden md:flex items-center gap-2 text-blue-600 dark:text-blue-400 font-medium hover:underline">Lihat
                    Semua <i data-feather="arrow-right" class="w-4 h-4"></i></a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Sistem Permohonan Cuti</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            Aplikasi web untuk manajemen cuti pegawai dengan fitur approval berjenjang dan notifikasi
                            realtime.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Bootstrap</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Coffee</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            Desain landing page modern untuk kedai kopi dengan tema dark mode yang elegan dan animasi
                            interaktif.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">AOS</span>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden h-56">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="#"
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Lihat
                                Detail</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Web Undangan Digital</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">
                            Platform pembuatan undangan digital berbasis web dengan berbagai pilihan tema dan fitur
                            RSVP.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">React</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Firebase</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-10 text-center md:hidden">
                <a href="#"
                    class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 font-medium hover:underline">Lihat
                    Semua Project <i data-feather="arrow-right" class="w-4 h-4"></i></a>
            </div>
        </section>

        <!-- CERTIFICATE -->
        <section id="certificate" class="max-w-7xl mx-auto px-6 py-24 bg-gray-50/50 dark:bg-gray-900/20">
            <h2 class="text-3xl font-bold mb-12 text-center">Sertifikat & Penghargaan</h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4"
                    data-aos="fade-up">
                    <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">Dicoding – Frontend</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2024 • Kompeten</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4"
                    data-aos="fade-up" data-aos-delay="150">
                    <div
                        class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg text-purple-600 dark:text-purple-400">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">Figma UI/UX Mastery</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2024 • Expert</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg text-green-600 dark:text-green-400">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">Laravel Backend</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2023 • Basic</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- SOCIAL MEDIA -->
        <section id="social-media" class="max-w-7xl mx-auto px-6 py-24">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-4">Terhubung Dengan Saya</h2>
                <p class="text-gray-600 dark:text-gray-400">Ikuti aktivitas dan update terbaru saya di sosial media.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-6">

                <!-- Email -->
                <a href="mailto:emailkamu@gmail.com"
                    class="group flex items-center gap-4 px-8 py-5 bg-white dark:bg-gray-900/50 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="p-3 bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400 rounded-xl group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="mail" class="w-6 h-6"></i>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-gray-800 dark:text-gray-100 text-lg">Email</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Kirim Pesan</p>
                    </div>
                </a>

                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/username" target="_blank"
                    class="group flex items-center gap-4 px-8 py-5 bg-white dark:bg-gray-900/50 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="p-3 bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 rounded-xl group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="linkedin" class="w-6 h-6"></i>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-gray-800 dark:text-gray-100 text-lg">LinkedIn</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Connect Profesional</p>
                    </div>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com/username" target="_blank"
                    class="group flex items-center gap-4 px-8 py-5 bg-white dark:bg-gray-900/50 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="p-3 bg-pink-50 dark:bg-pink-900/20 text-pink-600 dark:text-pink-400 rounded-xl group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="instagram" class="w-6 h-6"></i>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-gray-800 dark:text-gray-100 text-lg">Instagram</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Daily Update</p>
                    </div>
                </a>

            </div>
        </section>

        <!-- CONTACT -->
        <section id="contact" class="max-w-7xl mx-auto px-6 py-24">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-6">Mari Bekerja Sama!</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-8 text-lg leading-relaxed">
                        Punya ide menarik atau butuh bantuan untuk project website Anda? Jangan ragu untuk menghubungi
                        saya. Saya siap membantu mewujudkan visi digital Anda.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                            <div
                                class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <i data-feather="mail" class="w-5 h-5"></i>
                            </div>
                            <span>emailkamu@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                            <div
                                class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <i data-feather="map-pin" class="w-5 h-5"></i>
                            </div>
                            <span>Mojokerto, Jawa Timur</span>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <form
                        class="space-y-6 bg-white dark:bg-gray-900/50 p-8 rounded-3xl shadow-lg border border-gray-100 dark:border-gray-800">
                        <div class="relative">
                            <input type="text" placeholder="Nama Lengkap"
                                class="w-full p-4 pl-12 bg-gray-50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                            <i data-feather="user" class="absolute left-4 top-4 text-gray-400 w-5 h-5"></i>
                        </div>

                        <div class="relative">
                            <input type="email" placeholder="Alamat Email"
                                class="w-full p-4 pl-12 bg-gray-50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                            <i data-feather="mail" class="absolute left-4 top-4 text-gray-400 w-5 h-5"></i>
                        </div>

                        <div class="relative">
                            <textarea placeholder="Tulis pesan Anda di sini..."
                                class="w-full p-4 pl-12 bg-gray-50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700 rounded-xl h-32 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none"></textarea>
                            <i data-feather="message-square" class="absolute left-4 top-4 text-gray-400 w-5 h-5"></i>
                        </div>

                        <button
                            class="w-full px-6 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white font-bold rounded-xl hover:shadow-lg hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-2">
                            <span>Kirim Pesan Sekarang</span>
                            <i data-feather="send" class="w-4 h-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="mt-20 py-10 bg-white dark:bg-black border-t border-gray-200 dark:border-gray-800 text-center">
        <p class="text-sm text-gray-600 dark:text-gray-400">© 2025 Daffa Setya Nugraha. All rights reserved.</p>
    </footer>

    <!-- SCROLL TO TOP -->
    <button id="toTop" class="hover:bg-blue-700 transition-colors"><i data-feather="arrow-up"
            class="text-white"></i></button>

    <!-- SCRIPTS -->
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

</body>

</html>
