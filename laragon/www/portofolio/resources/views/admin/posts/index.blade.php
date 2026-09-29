@extends('layouts.admin')

@section('title', 'Daftar Post')

@section('content')

    <div class="mb-6 flex items-center justify-between">
        <h1 class="font-header text-3xl font-bold text-primary">Daftar Post</h1>
        <a href="{{ route('admin.posts.create') }}"
           class="inline-flex items-center rounded bg-primary px-5 py-3 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
            <i class="bx bx-plus mr-2 text-xl"></i>
            Tambah Post
        </a>
    </div>

    @if($posts->isEmpty())
        <div class="rounded-lg bg-white p-10 text-center shadow">
            <p class="text-grey-40">Belum ada post. Klik "Tambah Post" untuk membuat.</p>
        </div>
    @else
        <div class="overflow-hidden rounded-lg bg-white shadow">
            <table class="w-full">
                <thead class="bg-grey-50">
                    <tr class="text-left font-header text-sm uppercase text-grey-40">
                        <th class="px-6 py-4">Judul</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-grey-50">
                    @foreach($posts as $post)
                        <tr class="hover:bg-grey-50">
                            <td class="px-6 py-4">
                                <div class="font-semibold text-primary">{{ $post->title }}</div>
                                <div class="text-xs text-grey-40">{{ $post->slug }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-grey-20">{{ $post->category }}</td>
                            <td class="px-6 py-4 text-sm">
                                @if($post->published_at && $post->published_at <= now())
                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-bold text-green-800">
                                        Published
                                    </span>
                                @else
                                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-bold text-yellow-800">
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('blog.show', $post) }}" target="_blank"
                                       class="rounded bg-grey-50 px-3 py-2 text-sm text-grey-20 hover:bg-grey-40 hover:text-white"
                                       title="Lihat">
                                        <i class="bx bx-show"></i>
                                    </a>
                                    <a href="{{ route('admin.posts.edit', $post) }}"
                                       class="rounded bg-yellow px-3 py-2 text-sm text-primary hover:bg-primary hover:text-white"
                                       title="Edit">
                                        <i class="bx bx-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus post ini?');"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="rounded bg-red-500 px-3 py-2 text-sm text-white hover:bg-red-700"
                                                title="Hapus">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    @endif

@endsection