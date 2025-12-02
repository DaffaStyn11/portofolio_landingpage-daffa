@extends('layouts.app')
@section('content')
    <!-- Background Gradient Blobs -->
    <div class="fixed inset-0 -z-10 pointer-events-none overflow-hidden hidden dark:block">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] opacity-50">
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
    @include('components.header')

    <!-- MAIN CONTENT -->
    <main class="pt-28">

        <!-- HERO -->
        <section id="hero" class="max-w-7xl mx-auto px-6 py-32 grid lg:grid-cols-2 gap-12 items-center min-h-[90vh]">
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
                    <a href="https://github.com/DaffaStyn11"
                        class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><i
                            data-feather="github"></i></a>
                    <a href="https://www.linkedin.com/in/daffa-setya-nugraha/"
                        class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><i
                            data-feather="linkedin"></i></a>
                    <a href="https://www.instagram.com/daffastyn/"
                        class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><i
                            data-feather="instagram"></i></a>
                </div>
            </div>
            {{-- 
            <div data-aos="zoom-out" class="flex justify-center relative">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-purple-600/20 rounded-full blur-3xl -z-10">
                </div>
                <img src="{{ asset('images/projects/fotoprofile.png') }}" alt="Daffa Setya Nugraha - Portfolio"
                    class="rounded-[2rem] shadow-2xl border-4 border-white dark:border-gray-800 rotate-3 hover:rotate-0 transition-all duration-500">
            </div> --}}
            <div class="relative flex justify-center items-center">

                <!-- Glow belakang -->
                <div class="absolute inset-0 -z-10 pointer-events-none">
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 
                    w-[480px] h-[480px] bg-blue-500/20 dark:bg-blue-600/20 
                    blur-[120px] rounded-full animate-pulse">
                    </div>
                </div>

                <!-- ATOM ORBIT ANIMATION -->
                <div class="relative w-[260px] h-[260px]">

                    <!-- Orbit 1 -->
                    <div class="orbit orbit-1"></div>

                    <!-- Orbit 2 -->
                    <div class="orbit orbit-2"></div>

                    <!-- Orbit 3 -->
                    <div class="orbit orbit-3"></div>

                    <!-- Nucleus / Inti -->
                    <div
                        class="absolute w-6 h-6 bg-blue-500 dark:bg-blue-400 rounded-full 
                    top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-md shadow-blue-500/40">
                    </div>

                </div>

            </div>





        </section>

        <!-- ABOUT -->
        <section id="about" class="max-w-7xl mx-auto px-6 py-24">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                {{-- <div class="md:w-1/2" data-aos="fade-right">
                    <img src="{{ asset('images/projects/fotoprofile.png') }}"
                        class="rounded-2xl shadow-lg w-full object-cover h-[400px]">
                </div> --}}
                <div data-aos="zoom-out" class="flex justify-center relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-purple-600/20 rounded-full blur-3xl -z-10">
                    </div>
                    <img src="{{ asset('images/projects/fotoprofile.png') }}" alt="Daffa Setya Nugraha - Portfolio"
                        class="rounded-[2rem] shadow-2xl border-4 border-white dark:border-gray-800 rotate-3 hover:rotate-0 transition-all duration-500">
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
                            <h4 class="font-bold text-2xl text-blue-600 dark:text-blue-400">1</h4>
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

            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8">

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

                <!-- Keahlian ke-4 -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="450">
                    <div
                        class="w-14 h-14 bg-yellow-50 dark:bg-yellow-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="cpu" class="w-7 h-7 text-yellow-600 dark:text-yellow-400"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors">
                        AI Trouble Solving</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Menggunakan AI untuk analisis masalah, optimasi workflow, dan penyelesaian masalah kompleks
                        dengan pendekatan cerdas.
                    </p>
                </div>
                <!-- GitHub & Version Control -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="w-14 h-14 bg-gray-100 dark:bg-gray-800/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="github" class="w-7 h-7 text-gray-700 dark:text-gray-300"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-gray-700 dark:group-hover:text-gray-300 transition-colors">
                        Git & GitHub</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Mengelola version control menggunakan Git, kolaborasi melalui GitHub, branching workflow, dan
                        deployment project.
                    </p>
                </div>

                <!-- API Integration -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="750">
                    <div
                        class="w-14 h-14 bg-red-50 dark:bg-red-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="link" class="w-7 h-7 text-red-600 dark:text-red-400"></i>
                    </div>
                    <h3 class="text-xl font-bold group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">
                        API Integration</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Mengintegrasikan REST API, autentikasi token, dan pengelolaan data antar sistem secara aman dan
                        efisien.
                    </p>
                </div>

                <!-- Database Design -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="900">
                    <div
                        class="w-14 h-14 bg-indigo-50 dark:bg-indigo-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="database" class="w-7 h-7 text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                        Database Design</h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Merancang struktur database yang optimal, relasional, dan scalable untuk kebutuhan aplikasi modern.
                    </p>
                </div>
                <!-- Problem Solving & Debugging -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:backdrop-blur-sm dark:border dark:border-gray-800 group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="1200">
                    <div
                        class="w-14 h-14 bg-orange-50 dark:bg-orange-900/30 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="alert-triangle" class="w-7 h-7 text-orange-600 dark:text-orange-400"></i>
                    </div>
                    <h3
                        class="text-xl font-bold group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">
                        Problem Solving & Debugging
                    </h3>
                    <p class="text-gray-600 mt-3 text-sm leading-relaxed dark:text-gray-400">
                        Menganalisis error, memperbaiki bug, dan mengoptimalkan kode agar aplikasi berjalan stabil dan
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
                        <i data-feather="calendar" class="w-4 h-4"></i> Mei 2025 – Sekarang
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
            </div>

            <!-- Projects Grid -->
            <div id="projectsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Permohonan Cuti -->
                <div class="project-item group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800"
                    data-aos="fade-up">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('https://dummyimage.com/600x400/e5e5e5/000')">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000" alt="Sistem Permohonan Cuti"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Sistem Permohonan Cuti</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Aplikasi web untuk manajemen
                            cuti pegawai dengan fitur approval berjenjang dan notifikasi realtime.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Nuxt</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Vue</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">MySQL</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Github</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Rest
                                API</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">PHP</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                        </div>
                    </div>
                </div>

                <!-- Coffee Shop -->
                <div class="project-item group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('{{ asset('images/projects/CoffeeShop.png') }}')">
                        <img src="{{ asset('images/projects/CoffeeShop.png') }}" alt="Landing Page Coffee"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Coffee</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Desain landing page modern
                            untuk kedai kopi dengan tema dark mode yang elegan dan animasi interaktif.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Web Undangan Digital -->
                <div class="project-item group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('https://dummyimage.com/600x400/e5e5e5/000')">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000" alt="Web Undangan Digital"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Web Undangan Digital</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Platform pembuatan undangan
                            digital berbasis web dengan berbagai pilihan tema dan fitur RSVP.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">WordPress</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Hostinger</span>
                        </div>
                    </div>
                </div>

                <!-- Dental Care -->
                <div
                    class="project-item project-hidden hidden opacity-0 group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('{{ asset('images/projects/DentalCare.png') }}')">
                        <img src="{{ asset('images/projects/DentalCare.png') }}" alt="Landing Page Dental Care"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Dental Care</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Landing page profesional
                            untuk klinik gigi dengan fokus pada layanan, kepercayaan, dan tampilan modern yang bersih.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Restaurant  -->
                <div
                    class="project-item project-hidden hidden opacity-0 group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('{{ asset('images/projects/Restaurant.png') }}')">
                        <img src="{{ asset('images/projects/Restaurant.png') }}" alt="Landing Page Restaurant"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Restaurant</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Halaman promosi restoran
                            dengan nuansa elegan, menampilkan menu utama dan pengalaman makan yang menarik.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Eyes's -->
                <div
                    class="project-item project-hidden hidden opacity-0 group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('{{ asset('images/projects/EyesCare.png') }}')">
                        <img src="{{ asset('images/projects/EyesCare.png') }}" alt="Landing Page Eyes's Care"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Eyes's Care</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Desain landing page untuk
                            klinik perawatan mata yang menonjolkan layanan kesehatan visual secara informatif dan modern.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Managemen Telur -->
                <div
                    class="project-item project-hidden hidden opacity-0 group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('https://dummyimage.com/600x400/e5e5e5/000')">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000" alt="Managemen Telur"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Managemen Telur</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Manajemen produksi telur
                            yang memudahkan pencatatan penjualan, pengeluaran, serta laporan pembukuan otomatis.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">PHP</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Rest
                                Api</span>
                        </div>
                    </div>
                </div>

                <!-- Real Estate -->
                <div
                    class="project-item project-hidden hidden opacity-0 group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('{{ asset('images/projects/RealEstate.png') }}')">
                        <img src="{{ asset('images/projects/RealEstate.png') }}" alt="Landing Page Real Estate"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Real Estate</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Platform bisnis properti
                            dengan tampilan premium dan informasi lokasi secara menarik.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Portofolio -->
                <div
                    class="project-item project-hidden hidden opacity-0 group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-300 overflow-hidden dark:bg-gray-900/50 dark:border dark:border-gray-800">
                    <div class="relative overflow-hidden h-56 cursor-pointer"
                        onclick="openImageModal('https://dummyimage.com/600x400/e5e5e5/000')">
                        <img src="https://dummyimage.com/600x400/e5e5e5/000" alt="Landing Page Portofolio"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <i data-feather="zoom-in" class="w-4 h-4 inline mr-2"></i>Lihat Detail
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Landing Page Portofolio</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-2">Platform modern untuk
                            menampilkan profil, pengalaman, dan pencapaian secara profesional.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">HTML</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">JavaScript</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Laravel
                                Blade</span>
                            <span
                                class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium rounded-full text-gray-600 dark:text-gray-300">Tailwind</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Modal -->
            <div id="imageModal"
                class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4 backdrop-blur-sm">
                <div class="relative max-w-7xl max-h-[90vh] w-full">
                    <!-- Close Button -->
                    <button onclick="closeImageModal()"
                        class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors duration-300 flex items-center gap-2 bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg">
                        <i data-feather="x" class="w-6 h-6"></i>
                        <span class="font-semibold">Tutup</span>
                    </button>

                    <!-- Image Container -->
                    <div class="flex items-center justify-center">
                        <img id="modalImage" src="" alt="Project Preview"
                            class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl animate-fadeIn">
                    </div>
                </div>
            </div>

            <!-- Toggle Button -->
            <div class="mt-12 text-center">
                <button id="toggleProjectsBtn"
                    class="group inline-flex items-center gap-2 px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <span id="btnText">Lihat Semua</span>
                    <i data-feather="chevron-down" id="btnIcon" class="w-5 h-5 transition-transform duration-300"></i>
                </button>
            </div>

            <!-- JavaScript for Toggle Functionality -->

            @include('components.style')

        </section>

        <!-- CERTIFICATE -->
        <section id="certificate" class="max-w-7xl mx-auto px-6 py-24 bg-gray-50/50 dark:bg-gray-900/20">
            <h2 class="text-3xl font-bold mb-12 text-center">Sertifikat & Penghargaan</h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up">
                    <div
                        class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Hitaclass – Frontend Web Developer
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2025 • Basic</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="150">
                    <div
                        class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg text-purple-600 dark:text-purple-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            MySkill – Figma UI/UX Web Design
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2025 • Basic</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg text-green-600 dark:text-green-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                            MySkill – Backend</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2025 • Basic</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up">
                    <div
                        class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            RevoU – Software Engineer
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2025 • Basic</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="150">
                    <div
                        class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg text-purple-600 dark:text-purple-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            RevoU – Data Analysis
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2025 • Basic</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="p-3 bg-green-100 dark:bg-green-900/30 rounded-lg text-green-600 dark:text-green-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                            Dicoding – Financial Literacy</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2025 • Basic</p>
                    </div>
                </div>

                <div class="p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 tilt-card dark:bg-gray-900/50 dark:border dark:border-gray-800 flex items-center gap-4 cursor-pointer group hover:-translate-y-2"
                    data-aos="fade-up">
                    <div
                        class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400 group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="award" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-800 dark:text-gray-100 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            RevoU – Digital Marketing
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">2022 • Basic</p>
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
                <a href="mailto:daffasetyan@gmail.com"
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
                <a href="https://www.linkedin.com/in/daffa-setya-nugraha/" target="_blank"
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
                <a href="https://www.instagram.com/daffastyn/" target="_blank"
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

                <a href="https://github.com/DaffaStyn11" target="_blank"
                    class="group flex items-center gap-4 px-8 py-5 bg-white dark:bg-gray-900/50 border border-gray-200 dark:border-gray-800 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="0">
                    <div
                        class="p-3 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white rounded-xl group-hover:scale-110 transition-transform duration-300">
                        <i data-feather="github" class="w-6 h-6"></i>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-gray-800 dark:text-gray-100 text-lg">GitHub</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Lihat Repositori</p>
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
                            <span>daffasetyan@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-4 text-gray-700 dark:text-gray-300">
                            <div
                                class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <i data-feather="map-pin" class="w-5 h-5"></i>
                            </div>
                            <span>Kota Madiun, Jawa Timur</span>
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
    @include('components.footer')

    <!-- SCROLL TO TOP -->
    <button id="toTop" class="hover:bg-blue-700 transition-colors"><i data-feather="arrow-up"
            class="text-white"></i></button>

    <!-- SCRIPTS -->
    @include('components.scripts')
@endsection
