@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 bg-blue-100 rounded-full">
                <i data-feather="file-text" class="w-8 h-8 text-blue-600"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Total Konten</p>
                <p class="text-2xl font-bold">{{ $totalContents }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 bg-green-100 rounded-full">
                <i data-feather="layers" class="w-8 h-8 text-green-600"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Total Sections</p>
                <p class="text-2xl font-bold">{{ $sections }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 bg-purple-100 rounded-full">
                <i data-feather="check-circle" class="w-8 h-8 text-purple-600"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500 text-sm">Status</p>
                <p class="text-2xl font-bold">Active</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <h3 class="text-xl font-semibold mb-4">Selamat Datang di Admin Panel</h3>
    <p class="text-gray-600 mb-4">
        Gunakan panel ini untuk mengelola seluruh konten pada website portfolio Anda. 
        Anda dapat mengubah teks, gambar, dan informasi lainnya tanpa perlu mengedit kode.
    </p>
    <p class="text-gray-600 mb-4">
        Pilih menu di sidebar untuk mulai mengedit konten:
    </p>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
        <a href="{{ route('admin.heroes.index') }}" class="flex items-center px-4 py-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
            <i data-feather="star" class="w-5 h-5 mr-2 text-blue-600"></i>
            <span class="font-medium text-blue-600">Hero</span>
        </a>
        <a href="{{ route('admin.abouts.index') }}" class="flex items-center px-4 py-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors">
            <i data-feather="user" class="w-5 h-5 mr-2 text-green-600"></i>
            <span class="font-medium text-green-600">About</span>
        </a>
        <a href="{{ route('admin.skills.index') }}" class="flex items-center px-4 py-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors">
            <i data-feather="code" class="w-5 h-5 mr-2 text-purple-600"></i>
            <span class="font-medium text-purple-600">Skills</span>
        </a>
        <a href="{{ route('admin.experiences.index') }}" class="flex items-center px-4 py-3 bg-orange-50 hover:bg-orange-100 rounded-lg transition-colors">
            <i data-feather="briefcase" class="w-5 h-5 mr-2 text-orange-600"></i>
            <span class="font-medium text-orange-600">Experience</span>
        </a>
        <a href="{{ route('admin.projects.index') }}" class="flex items-center px-4 py-3 bg-pink-50 hover:bg-pink-100 rounded-lg transition-colors">
            <i data-feather="folder" class="w-5 h-5 mr-2 text-pink-600"></i>
            <span class="font-medium text-pink-600">Projects</span>
        </a>
        <a href="{{ route('admin.certificates.index') }}" class="flex items-center px-4 py-3 bg-yellow-50 hover:bg-yellow-100 rounded-lg transition-colors">
            <i data-feather="award" class="w-5 h-5 mr-2 text-yellow-600"></i>
            <span class="font-medium text-yellow-600">Certificates</span>
        </a>
        <a href="{{ url('/') }}" target="_blank" class="flex items-center px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
            <i data-feather="external-link" class="w-5 h-5 mr-2 text-gray-600"></i>
            <span class="font-medium text-gray-600">Preview</span>
        </a>
    </div>
</div>
@endsection
