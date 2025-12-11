@extends('admin.layouts.app')

@section('title', 'Kelola Projects')
@section('header', 'Kelola Projects')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.projects.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        <i data-feather="plus" class="w-4 h-4 mr-2"></i>
        Tambah Project Baru
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Teknologi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visible</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($projects as $project)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    @if($project->image)
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="h-16 w-24 object-cover rounded">
                    @else
                        <div class="h-16 w-24 bg-gray-200 rounded flex items-center justify-center">
                            <i data-feather="image" class="w-6 h-6 text-gray-400"></i>
                        </div>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <div class="text-sm font-medium text-gray-900">{{ $project->title }}</div>
                    <div class="text-sm text-gray-500">{{ Str::limit($project->description, 50) }}</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex flex-wrap gap-1">
                        @if($project->technologies)
                            @foreach(array_slice($project->technologies, 0, 3) as $tech)
                                <span class="px-2 py-1 text-xs bg-gray-100 rounded">{{ $tech }}</span>
                            @endforeach
                            @if(count($project->technologies) > 3)
                                <span class="px-2 py-1 text-xs bg-gray-100 rounded">+{{ count($project->technologies) - 3 }}</span>
                            @endif
                        @endif
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $project->visible ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $project->visible ? 'Ya' : 'Tidak' }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $project->order }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                        <i data-feather="edit" class="w-4 h-4 inline"></i>
                    </a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">
                            <i data-feather="trash-2" class="w-4 h-4 inline"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                    Belum ada project. <a href="{{ route('admin.projects.create') }}" class="text-blue-600 hover:underline">Tambah project pertama</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>
    feather.replace();
</script>
@endsection
