@extends('layouts.admin')

@section('title', 'Tambah Post')

@section('content')

    <div class="mb-6">
        <a href="{{ route('admin.posts.index') }}"
           class="inline-flex items-center text-sm font-header font-semibold uppercase text-grey-40 hover:text-primary">
            <i class="bx bx-left-arrow-alt mr-1 text-xl"></i> Kembali
        </a>
        <h1 class="mt-2 font-header text-3xl font-bold text-primary">Tambah Post</h1>
    </div>

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('admin.posts._form')

        <div class="mt-6 flex gap-3">
            <button type="submit"
                    class="rounded bg-primary px-6 py-3 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
                <i class="bx bx-save mr-2"></i> Simpan Post
            </button>
            <a href="{{ route('admin.posts.index') }}"
               class="rounded bg-grey-50 px-6 py-3 font-header text-sm font-bold uppercase text-grey-40 hover:bg-grey-40 hover:text-white">
                Batal
            </a>
        </div>
    </form>

@endsection