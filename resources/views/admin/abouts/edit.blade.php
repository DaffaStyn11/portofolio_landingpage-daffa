@extends('admin.layouts.app')

@section('title', 'Edit About')
@section('header', 'Edit About')

@section('content')
<div class="max-w-3xl">
    <div class="mb-6">
        <a href="{{ route('admin.abouts.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center">
            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.abouts.update', $about) }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Judul *</label>
            <input type="text" name="title" value="{{ old('title', $about->title) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea name="description" rows="6" required
                      class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">{{ old('description', $about->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Years Experience *</label>
            <input type="text" name="years_experience" value="{{ old('years_experience', $about->years_experience) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Projects Completed *</label>
            <input type="text" name="projects_completed" value="{{ old('projects_completed', $about->projects_completed) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Image Path</label>
            <input type="text" name="image" value="{{ old('image', $about->image) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            <p class="text-xs text-gray-500 mt-1">Path relatif dari folder public/</p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
            <input type="number" name="order" value="{{ old('order', $about->order) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center">
                <i data-feather="save" class="w-4 h-4 mr-2"></i>
                Update About
            </button>
            <a href="{{ route('admin.abouts.index') }}" class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>

<script>
    feather.replace();
</script>
@endsection
