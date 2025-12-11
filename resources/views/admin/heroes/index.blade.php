@extends('admin.layouts.app')

@section('title', 'Kelola Hero')
@section('header', 'Kelola Hero')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.heroes.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        <i data-feather="plus" class="w-4 h-4 mr-2"></i>
        Tambah Hero Baru
    </a>
</div>

<div class="grid gap-4">
    @forelse($heroes as $hero)
    <div class="bg-white rounded-lg shadow p-6 border-l-4 border-blue-500">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h3 class="text-xl font-bold text-gray-900">{{ $hero->name }}</h3>
                <p class="text-gray-600 mt-1">{{ $hero->title }}</p>
                @if($hero->typing_titles && count($hero->typing_titles) > 0)
                <p class="text-sm text-blue-600 mt-1">
                    <i data-feather="type" class="w-3 h-3 inline"></i> 
                    Typing: {{ implode(', ', $hero->typing_titles) }}
                </p>
                @endif
                <p class="text-sm text-gray-500 mt-2">{{ $hero->welcome_badge }}</p>
                <p class="text-gray-700 mt-3">{{ Str::limit($hero->description, 150) }}</p>
                <div class="mt-3 flex items-center gap-4 text-sm text-gray-500">
                    @if($hero->github_url)
                    <span class="flex items-center gap-1">
                        <i data-feather="github" class="w-4 h-4"></i> GitHub
                    </span>
                    @endif
                    @if($hero->linkedin_url)
                    <span class="flex items-center gap-1">
                        <i data-feather="linkedin" class="w-4 h-4"></i> LinkedIn
                    </span>
                    @endif
                    @if($hero->instagram_url)
                    <span class="flex items-center gap-1">
                        <i data-feather="instagram" class="w-4 h-4"></i> Instagram
                    </span>
                    @endif
                    <span>Order: {{ $hero->order }}</span>
                </div>
            </div>
            <div class="flex gap-2 ml-4">
                <a href="{{ route('admin.heroes.edit', $hero) }}" class="text-blue-600 hover:text-blue-900">
                    <i data-feather="edit" class="w-5 h-5"></i>
                </a>
                <form action="{{ route('admin.heroes.destroy', $hero) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus hero ini?')">
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
        Belum ada hero. <a href="{{ route('admin.heroes.create') }}" class="text-blue-600 hover:underline">Tambah hero pertama</a>
    </div>
    @endforelse
</div>

<script>
    feather.replace();
</script>
@endsection
