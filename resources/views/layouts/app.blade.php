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

        /* Orbit Animation */
        .orbit {
            position: absolute;
            border: 2px solid rgba(59, 130, 246, 0.3);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .orbit-1 {
            width: 100px;
            height: 100px;
            animation: spin 8s linear infinite;
        }

        .orbit-2 {
            width: 160px;
            height: 160px;
            animation: spin 12s linear infinite reverse;
        }

        .orbit-3 {
            width: 220px;
            height: 220px;
            animation: spin 16s linear infinite;
        }

        @keyframes spin {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
    </style>
</head>

<body
    class="bg-gray-50 text-gray-900 antialiased dark:bg-gray-950 dark:text-gray-100 selection:bg-blue-500 selection:text-white overflow-x-hidden">
    @yield('content')
</body>

</html>
