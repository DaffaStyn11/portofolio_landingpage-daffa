@extends('admin.layouts.app')

@section('title', 'Kelola Certificates')
@section('header', 'Kelola Certificates')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.certificates.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        <i data-feather="plus" class="w-4 h-4 mr-2"></i>
        Tambah Certificate Baru
    </a>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @forelse($certificates as $certificate)
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-shadow">
        <div class="flex items-start gap-4">
            <div class="p-3 bg-{{ $certificate->color }}-100 rounded-lg text-{{ $certificate->color }}-600">
                <i data-feather="award" class="w-6 h-6"></i>
            </div>
            <div class="flex-1">
                <h3 class="font-bold text-gray-900">{{ $certificate->name }}</h3>
                <p class="text-sm text-gray-500 mt-1">{{ $certificate->year }} • {{ $certificate->level }}</p>
                <p class="text-xs text-gray-400 mt-2">Order: {{ $certificate->order }}</p>
            </div>
        </div>
        <div class="flex gap-2 mt-4 pt-4 border-t">
            <a href="{{ route('admin.certificates.edit', $certificate) }}" class="flex-1 text-center px-3 py-2 bg-blue-50 text-blue-600 rounded hover:bg-blue-100 text-sm">
                <i data-feather="edit" class="w-4 h-4 inline mr-1"></i> Edit
            </a>
            <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" class="flex-1" onsubmit="return confirm('Yakin ingin menghapus certificate ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full px-3 py-2 bg-red-50 text-red-600 rounded hover:bg-red-100 text-sm">
                    <i data-feather="trash-2" class="w-4 h-4 inline mr-1"></i> Hapus
                </button>
            </form>
        </div>
    </div>
    @empty
    <div class="col-span-3 bg-white rounded-lg shadow p-6 text-center text-gray-500">
        Belum ada certificate. <a href="{{ route('admin.certificates.create') }}" class="text-blue-600 hover:underline">Tambah certificate pertama</a>
    </div>
    @endforelse
</div>

<script>
    feather.replace();
</script>
@endsection
