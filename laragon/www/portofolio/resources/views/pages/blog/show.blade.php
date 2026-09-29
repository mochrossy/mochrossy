@extends('layouts.blog')

@section('title', $post->title)
@section('page-title', $post->title)
@section('page-subtitle', $post->published_at?->format('d M Y') . ' · ' . $post->category)

@section('content')

    <article class="prose max-w-none">
        @if($post->image)
            <img src="{{ asset($post->image) }}"
                 alt="{{ $post->title }}"
                 class="mb-8 w-full rounded-lg shadow" />
        @endif

        <div class="mb-6 flex flex-wrap items-center gap-4 border-b border-grey-50 pb-6 text-sm text-grey-40">
            <span><i class="bx bx-user"></i> {{ $post->author }}</span>
            <span><i class="bx bx-calendar"></i> {{ $post->published_at?->format('d M Y') }}</span>
            <span><i class="bx bx-purchase-tag"></i> {{ $post->category }}</span>
        </div>

        <div class="font-body leading-relaxed text-grey-20">
            {!! $post->body !!}
        </div>
    </article>

    <div class="mt-12 border-t border-grey-50 pt-6">
        <a href="{{ route('blog.index') }}"
           class="inline-flex items-center font-header font-bold uppercase text-primary hover:text-yellow">
            <i class="bx bx-left-arrow-alt mr-2 text-2xl"></i>
            Kembali ke daftar blog
        </a>
    </div>

@endsection