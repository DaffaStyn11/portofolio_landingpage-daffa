@extends('admin.layouts.app')

@section('title', 'Kelola About')
@section('header', 'Kelola About')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.abouts.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        <i data-feather="plus" class="w-4 h-4 mr-2"></i>
        Tambah About Baru
    </a>
</div>

<div class="grid gap-4">
    @forelse($abouts as $about)
    <div class="bg-white rounded-lg shadow p-6 border-l-4 border-green-500">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h3 class="text-xl font-bold text-gray-900">{{ $about->title }}</h3>
                <p class="text-gray-700 mt-3">{{ Str::limit($about->description, 200) }}</p>
                <div class="mt-4 flex items-center gap-6 text-sm">
                    <span class="flex items-center gap-2">
                        <i data-feather="clock" class="w-4 h-4 text-blue-600"></i>
                        <span class="font-semibold text-blue-600">{{ $about->years_experience }}</span> Years Experience
                    </span>
                    <span class="flex items-center gap-2">
                        <i data-feather="folder" class="w-4 h-4 text-green-600"></i>
                        <span class="font-semibold text-green-600">{{ $about->projects_completed }}</span> Projects
                    </span>
                </div>
                <div class="mt-3 text-sm text-gray-500">
                    Order: {{ $about->order }}
                </div>
            </div>
            <div class="flex gap-2 ml-4">
                <a href="{{ route('admin.abouts.edit', $about) }}" class="text-blue-600 hover:text-blue-900">
                    <i data-feather="edit" class="w-5 h-5"></i>
                </a>
                <form action="{{ route('admin.abouts.destroy', $about) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus about ini?')">
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
        Belum ada about. <a href="{{ route('admin.abouts.create') }}" class="text-blue-600 hover:underline">Tambah about pertama</a>
    </div>
    @endforelse
</div>

<script>
    feather.replace();
</script>
@endsection
