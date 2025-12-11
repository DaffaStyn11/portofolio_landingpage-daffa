@extends('admin.layouts.app')

@section('title', 'Edit Certificate')
@section('header', 'Edit Certificate')

@section('content')
<div class="max-w-3xl">
    <div class="mb-6">
        <a href="{{ route('admin.certificates.index') }}" class="text-blue-600 hover:text-blue-800 flex items-center">
            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
            Kembali ke Daftar
        </a>
    </div>

    <form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" class="bg-white rounded-lg shadow p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Certificate *</label>
            <input type="text" name="name" value="{{ old('name', $certificate->name) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Tahun *</label>
            <input type="text" name="year" value="{{ old('year', $certificate->year) }}" required maxlength="4"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Level *</label>
            <input type="text" name="level" value="{{ old('level', $certificate->level) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Warna *</label>
            <select name="color" required class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                <option value="blue" {{ old('color', $certificate->color) == 'blue' ? 'selected' : '' }}>Blue</option>
                <option value="purple" {{ old('color', $certificate->color) == 'purple' ? 'selected' : '' }}>Purple</option>
                <option value="green" {{ old('color', $certificate->color) == 'green' ? 'selected' : '' }}>Green</option>
                <option value="red" {{ old('color', $certificate->color) == 'red' ? 'selected' : '' }}>Red</option>
                <option value="yellow" {{ old('color', $certificate->color) == 'yellow' ? 'selected' : '' }}>Yellow</option>
                <option value="indigo" {{ old('color', $certificate->color) == 'indigo' ? 'selected' : '' }}>Indigo</option>
                <option value="pink" {{ old('color', $certificate->color) == 'pink' ? 'selected' : '' }}>Pink</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
            <input type="number" name="order" value="{{ old('order', $certificate->order) }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center">
                <i data-feather="save" class="w-4 h-4 mr-2"></i>
                Update Certificate
            </button>
            <a href="{{ route('admin.certificates.index') }}" class="px-6 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>

<script>
    feather.replace();
</script>
@endsection
