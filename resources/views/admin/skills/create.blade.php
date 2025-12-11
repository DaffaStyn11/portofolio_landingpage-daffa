@extends('admin.layouts.app')

@section('title', 'Tambah Skill')
@section('header', 'Tambah Skill Baru')

@section('content')
<div class="max-w-3xl">
    <div class="mb-6">
        <a href="{{ route('admin.skills.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center">
            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.skills.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Skill *</label>
            <input type="text" name="name" value="{{ old('name') }}" required
                   placeholder="Contoh: Frontend Development"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi *</label>
            <textarea name="description" rows="3" required
                      placeholder="Deskripsi singkat tentang skill ini"
                      class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Icon (Feather Icons) *</label>
            <input type="text" name="icon" value="{{ old('icon', 'code') }}" required
                   placeholder="Contoh: code, monitor, layout, server"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            <p class="text-sm text-gray-500 mt-1">Lihat icon di: <a href="https://feathericons.com/" target="_blank" class="text-blue-600 hover:underline">feathericons.com</a></p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Warna *</label>
            <select name="color" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                <option value="blue" {{ old('color') == 'blue' ? 'selected' : '' }}>Blue</option>
                <option value="purple" {{ old('color') == 'purple' ? 'selected' : '' }}>Purple</option>
                <option value="green" {{ old('color') == 'green' ? 'selected' : '' }}>Green</option>
                <option value="red" {{ old('color') == 'red' ? 'selected' : '' }}>Red</option>
                <option value="yellow" {{ old('color') == 'yellow' ? 'selected' : '' }}>Yellow</option>
                <option value="indigo" {{ old('color') == 'indigo' ? 'selected' : '' }}>Indigo</option>
                <option value="pink" {{ old('color') == 'pink' ? 'selected' : '' }}>Pink</option>
                <option value="orange" {{ old('color') == 'orange' ? 'selected' : '' }}>Orange</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
            <input type="number" name="order" value="{{ old('order', 0) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            <p class="text-sm text-gray-500 mt-1">Semakin kecil angka, semakin atas posisinya</p>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center">
                <i data-feather="save" class="w-4 h-4 mr-2"></i>
                Simpan Skill
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
