@extends('admin.layouts.app')

@section('title', 'Edit Hero')
@section('header', 'Edit Hero')

@section('content')
<div class="max-w-3xl">
    <div class="mb-6">
        <a href="{{ route('admin.heroes.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center">
            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.heroes.update', $hero) }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Welcome Badge *</label>
            <input type="text" name="welcome_badge" value="{{ old('welcome_badge', $hero->welcome_badge) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama *</label>
            <input type="text" name="name" value="{{ old('name', $hero->name) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Title/Jabatan *</label>
            <input type="text" name="title" value="{{ old('title', $hero->title) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Typing Titles (Animasi Typing)</label>
            <div id="typingTitlesContainer" class="space-y-2">
                @php
                    $existingTitles = old('typing_titles', $hero->typing_titles ?? []);
                    if (empty($existingTitles)) {
                        $existingTitles = [''];
                    }
                @endphp
                @foreach($existingTitles as $index => $title)
                <div class="flex gap-2 typing-title-item">
                    <input type="text" name="typing_titles[]" value="{{ $title }}" 
                           placeholder="Masukkan title"
                           class="flex-1 px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                    <button type="button" onclick="removeTypingTitle(this)" class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        <i data-feather="x" class="w-4 h-4"></i>
                    </button>
                </div>
                @endforeach
            </div>
            <button type="button" onclick="addTypingTitle()" class="mt-2 inline-flex items-center px-3 py-2 bg-green-500 text-white rounded hover:bg-green-600 text-sm">
                <i data-feather="plus" class="w-4 h-4 mr-1"></i>
                Tambah Title
            </button>
            <p class="text-xs text-gray-500 mt-2">Tambahkan multiple titles yang akan ditampilkan bergantian dengan efek typing.</p>
        </div>

        <script>
            function addTypingTitle() {
                const container = document.getElementById('typingTitlesContainer');
                const newItem = document.createElement('div');
                newItem.className = 'flex gap-2 typing-title-item';
                newItem.innerHTML = `
                    <input type="text" name="typing_titles[]" value="" 
                           placeholder="Masukkan title"
                           class="flex-1 px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                    <button type="button" onclick="removeTypingTitle(this)" class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        <i data-feather="x" class="w-4 h-4"></i>
                    </button>
                `;
                container.appendChild(newItem);
                feather.replace();
            }

            function removeTypingTitle(button) {
                const container = document.getElementById('typingTitlesContainer');
                const items = container.querySelectorAll('.typing-title-item');
                if (items.length > 1) {
                    button.closest('.typing-title-item').remove();
                } else {
                    alert('Minimal harus ada 1 typing title!');
                }
            }
        </script>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea name="description" rows="4" required
                      class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">{{ old('description', $hero->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">GitHub URL</label>
            <input type="url" name="github_url" value="{{ old('github_url', $hero->github_url) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">LinkedIn URL</label>
            <input type="url" name="linkedin_url" value="{{ old('linkedin_url', $hero->linkedin_url) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Instagram URL</label>
            <input type="url" name="instagram_url" value="{{ old('instagram_url', $hero->instagram_url) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
            <input type="number" name="order" value="{{ old('order', $hero->order) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center">
                <i data-feather="save" class="w-4 h-4 mr-2"></i>
                Update Hero
            </button>
            <a href="{{ route('admin.heroes.index') }}" class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>

<script>
    feather.replace();
</script>
@endsection
