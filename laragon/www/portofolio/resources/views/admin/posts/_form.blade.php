@php
    $isEdit = isset($post);
@endphp

<div class="rounded-lg bg-white p-6 shadow sm:p-8">

    {{-- Judul --}}
    <div class="mb-6">
        <label for="title" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
            Judul <span class="text-red-500">*</span>
        </label>
        <input type="text" name="title" id="title"
               value="{{ old('title', $post->title ?? '') }}"
               class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
               required />
        @error('title')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Slug --}}
    <div class="mb-6">
        <label for="slug" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
            Slug <span class="text-grey-40 font-normal">(kosongkan untuk auto-generate)</span>
        </label>
        <input type="text" name="slug" id="slug"
               value="{{ old('slug', $post->slug ?? '') }}"
               class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
               placeholder="contoh: belajar-laravel-dari-nol" />
        @error('slug')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Kategori & Author (2 kolom) --}}
    <div class="mb-6 grid grid-cols-1 gap-6 sm:grid-cols-2">
        <div>
            <label for="category" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
                Kategori <span class="text-red-500">*</span>
            </label>
            <input type="text" name="category" id="category"
                   value="{{ old('category', $post->category ?? '') }}"
                   class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
                   required />
            @error('category')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="author" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
                Penulis <span class="text-red-500">*</span>
            </label>
            <input type="text" name="author" id="author"
                   value="{{ old('author', $post->author ?? 'Moch. Rossy Avian I.') }}"
                   class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
                   required />
            @error('author')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>
    </div>

    {{-- Excerpt --}}
    <div class="mb-6">
        <label for="excerpt" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
            Ringkasan <span class="text-red-500">*</span>
        </label>
        <textarea name="excerpt" id="excerpt" rows="3" maxlength="500"
                  class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
                  required>{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
        @error('excerpt')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Body --}}
    <div class="mb-6">
        <label for="body" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
            Isi Post <span class="text-red-500">*</span>
            <span class="font-normal text-grey-40">(bisa HTML)</span>
        </label>
        <textarea name="body" id="body" rows="12"
                  class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
                  required>{{ old('body', $post->body ?? '') }}</textarea>
        @error('body')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Image --}}
    <div class="mb-6">
        <label for="image" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
            Gambar Utama
        </label>
        @if($isEdit && $post->image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $post->image) }}"
                     alt="Preview" class="h-32 rounded shadow" />
                <p class="mt-1 text-xs text-grey-40">Gambar saat ini. Upload baru untuk mengganti.</p>
            </div>
        @endif
        <input type="file" name="image" id="image" accept="image/*"
               class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none" />
        @error('image')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

    {{-- Published At --}}
    <div class="mb-6">
        <label for="published_at" class="mb-2 block font-header text-sm font-bold uppercase text-grey-40">
            Tanggal Publikasi
            <span class="font-normal text-grey-40">(kosongkan untuk draft)</span>
        </label>
        <input type="datetime-local" name="published_at" id="published_at"
               value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
               class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none" />
        @error('published_at')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
        @enderror
    </div>

</div>