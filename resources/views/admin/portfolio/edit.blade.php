@extends('admin.layouts.app')

@section('title', 'Edit ' . ucfirst($section))
@section('header', 'Edit Konten ' . ucfirst($section))

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="mb-6">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:text-blue-800 flex items-center">
            <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i>
            Kembali ke Dashboard
        </a>
    </div>

    <form action="{{ route('admin.portfolio.update', $section) }}" method="POST" id="contentForm">
        @csrf
        @method('PUT')

        <div id="contentItems" class="space-y-4">
            @forelse($contents as $index => $content)
                <div class="content-item border border-gray-300 rounded-lg p-4 bg-gray-50">
                    <div class="flex justify-between items-start mb-3">
                        <h4 class="font-semibold text-gray-700">Item #{{ $index + 1 }}</h4>
                        <button type="button" onclick="removeItem(this)" class="text-red-600 hover:text-red-800">
                            <i data-feather="trash-2" class="w-4 h-4"></i>
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Key/Nama Field</label>
                            <input type="text" name="contents[{{ $index }}][key]" value="{{ $content->key }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tipe</label>
                            <select name="contents[{{ $index }}][type]" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" required>
                                <option value="text" {{ $content->type == 'text' ? 'selected' : '' }}>Text</option>
                                <option value="textarea" {{ $content->type == 'textarea' ? 'selected' : '' }}>Textarea</option>
                                <option value="image" {{ $content->type == 'image' ? 'selected' : '' }}>Image URL</option>
                                <option value="json" {{ $content->type == 'json' ? 'selected' : '' }}>JSON</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Value/Konten</label>
                        @if($content->type == 'textarea' || $content->type == 'json')
                            <textarea name="contents[{{ $index }}][value]" rows="4" 
                                      class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">{{ $content->value }}</textarea>
                        @else
                            <input type="text" name="contents[{{ $index }}][value]" value="{{ $content->value }}" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                        @endif
                    </div>

                    <input type="hidden" name="contents[{{ $index }}][id]" value="{{ $content->id }}">
                </div>
            @empty
                <p class="text-gray-500 text-center py-8">Belum ada konten. Klik tombol "Tambah Item" untuk menambahkan konten baru.</p>
            @endforelse
        </div>

        <div class="mt-6 flex gap-3">
            <button type="button" onclick="addNewItem()" 
                    class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 flex items-center">
                <i data-feather="plus" class="w-4 h-4 mr-2"></i>
                Tambah Item
            </button>

            <button type="submit" 
                    class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 flex items-center">
                <i data-feather="save" class="w-4 h-4 mr-2"></i>
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<script>
    let itemCount = {{ $contents->count() }};

    function addNewItem() {
        const container = document.getElementById('contentItems');
        const newItem = document.createElement('div');
        newItem.className = 'content-item border border-gray-300 rounded-lg p-4 bg-gray-50';
        newItem.innerHTML = `
            <div class="flex justify-between items-start mb-3">
                <h4 class="font-semibold text-gray-700">Item #${itemCount + 1}</h4>
                <button type="button" onclick="removeItem(this)" class="text-red-600 hover:text-red-800">
                    <i data-feather="trash-2" class="w-4 h-4"></i>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Key/Nama Field</label>
                    <input type="text" name="contents[${itemCount}][key]" 
                           class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tipe</label>
                    <select name="contents[${itemCount}][type]" 
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" required>
                        <option value="text">Text</option>
                        <option value="textarea">Textarea</option>
                        <option value="image">Image URL</option>
                        <option value="json">JSON</option>
                    </select>
                </div>
            </div>

            <div class="mt-3">
                <label class="block text-sm font-medium text-gray-700 mb-2">Value/Konten</label>
                <input type="text" name="contents[${itemCount}][value]" 
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            </div>
        `;
        container.appendChild(newItem);
        itemCount++;
        feather.replace();
    }

    function removeItem(button) {
        if (confirm('Yakin ingin menghapus item ini?')) {
            button.closest('.content-item').remove();
        }
    }

    feather.replace();
</script>
@endsection
