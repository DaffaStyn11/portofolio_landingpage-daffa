<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Portfolio Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white">
            <div class="p-6">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
                <p class="text-gray-400 text-sm">Portfolio Management</p>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="home" class="w-5 h-5 mr-3"></i>
                    Dashboard
                </a>
                
                <!-- Section Menu -->
                <div class="mt-4 px-6 py-2">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Kelola Konten</p>
                </div>
                
                <a href="{{ route('admin.heroes.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->is('admin/heroes*') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="star" class="w-5 h-5 mr-3"></i>
                    Hero
                </a>
                
                <a href="{{ route('admin.abouts.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->is('admin/abouts*') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="user" class="w-5 h-5 mr-3"></i>
                    About
                </a>
                
                <a href="{{ route('admin.skills.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->is('admin/skills*') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="code" class="w-5 h-5 mr-3"></i>
                    Skills
                </a>
                
                <a href="{{ route('admin.experiences.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->is('admin/experiences*') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="briefcase" class="w-5 h-5 mr-3"></i>
                    Experience
                </a>
                
                <a href="{{ route('admin.projects.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->is('admin/projects*') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="folder" class="w-5 h-5 mr-3"></i>
                    Projects
                </a>
                
                <a href="{{ route('admin.certificates.index') }}" class="flex items-center px-6 py-3 hover:bg-gray-800 {{ request()->is('admin/certificates*') ? 'bg-gray-800 border-l-4 border-blue-500' : '' }}">
                    <i data-feather="award" class="w-5 h-5 mr-3"></i>
                    Certificates
                </a>
                
                <div class="mt-4 border-t border-gray-800"></div>
                
                <a href="{{ url('/') }}" target="_blank" class="flex items-center px-6 py-3 hover:bg-gray-800 mt-2">
                    <i data-feather="external-link" class="w-5 h-5 mr-3"></i>
                    Lihat Website
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <header class="bg-white shadow-sm">
                <div class="px-8 py-4">
                    <h2 class="text-2xl font-semibold text-gray-800">@yield('header', 'Dashboard')</h2>
                </div>
            </header>
            
            <div class="p-8">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>
