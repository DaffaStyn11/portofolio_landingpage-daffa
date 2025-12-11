@extends('admin.layouts.app')

@section('title', 'Edit Skill')
@section('header', 'Edit Skill')

@section('content')
<div class="max-w-3xl">
    <div class="mb-6">
        <a href="{{ route('admin.skills.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center">
            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Skill *</label>
            <input type="text" name="name" value="{{ old('name', $skill->name) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea name="description" rows="3" required
                      class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">{{ old('description', $skill->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Icon (Feather Icons) *</label>
            <input type="text" name="icon" value="{{ old('icon', $skill->icon) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            <p class="text-sm text-gray-500 mt-1">Lihat icon di: <a href="https://feathericons.com/" target="_blank" class="text-blue-600 hover:underline">feathericons.com</a></p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Warna *</label>
            <select name="color" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                <option value="blue" {{ old('color', $skill->color) == 'blue' ? 'selected' : '' }}>Blue</option>
                <option value="purple" {{ old('color', $skill->color) == 'purple' ? 'selected' : '' }}>Purple</option>
                <option value="green" {{ old('color', $skill->color) == 'green' ? 'selected' : '' }}>Green</option>
                <option value="red" {{ old('color', $skill->color) == 'red' ? 'selected' : '' }}>Red</option>
                <option value="yellow" {{ old('color', $skill->color) == 'yellow' ? 'selected' : '' }}>Yellow</option>
                <option value="indigo" {{ old('color', $skill->color) == 'indigo' ? 'selected' : '' }}>Indigo</option>
                <option value="pink" {{ old('color', $skill->color) == 'pink' ? 'selected' : '' }}>Pink</option>
                <option value="orange" {{ old('color', $skill->color) == 'orange' ? 'selected' : '' }}>Orange</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
            <input type="number" name="order" value="{{ old('order', $skill->order) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center">
                <i data-feather="save" class="w-4 h-4 mr-2"></i>
                Update Skill
            </button>
            <a href="{{ route('admin.skills.index') }}" class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>

<script>
    feather.replace();
</script>
@endsection
