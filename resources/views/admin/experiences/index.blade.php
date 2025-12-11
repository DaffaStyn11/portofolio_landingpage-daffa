@extends('admin.layouts.app')

@section('title', 'Kelola Experience')
@section('header', 'Kelola Experience')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.experiences.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        <i data-feather="plus" class="w-4 h-4 mr-2"></i>
        Tambah Experience Baru
    </a>
</div>

<div class="grid gap-4">
    @forelse($experiences as $experience)
    <div class="bg-white rounded-lg shadow p-6 border-l-4 border-{{ $experience->color }}-500">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h3 class="text-xl font-bold text-gray-900">{{ $experience->position }}</h3>
                <p class="text-gray-600 mt-1">{{ $experience->company }} • {{ $experience->period }}</p>
                <p class="text-gray-700 mt-3">{{ $experience->description }}</p>
                <div class="mt-3 flex items-center gap-4 text-sm text-gray-500">
                    <span>Color: <span class="px-2 py-1 bg-{{ $experience->color }}-100 text-{{ $experience->color }}-700 rounded">{{ $experience->color }}</span></span>
                    <span>Order: {{ $experience->order }}</span>
                </div>
            </div>
            <div class="flex gap-2 ml-4">
                <a href="{{ route('admin.experiences.edit', $experience) }}" class="text-blue-600 hover:text-blue-900">
                    <i data-feather="edit" class="w-5 h-5"></i>
                </a>
                <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus experience ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900">
                        <i data-feather="trash-2" class="w-5 h-5"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="bg-white rounded-lg shadow p-6 text-center text-gray-500">
        Belum ada experience. <a href="{{ route('admin.experiences.create') }}" class="text-blue-600 hover:underline">Tambah experience pertama</a>
    </div>
    @endforelse
</div>

<script>
    feather.replace();
</script>
@endsection
