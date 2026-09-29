<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // nanti bisa diubah untuk cek role admin
    }

    public function rules(): array
    {
        // Ambil ID post yang sedang di-edit (untuk ignore unique slug)
        $postId = $this->route('post')?->id;

        return [
            'title'        => ['required', 'string', 'max:255'],
            'slug'         => ['nullable', 'string', 'max:255', 'unique:posts,slug,' . $postId],
            'excerpt'      => ['required', 'string', 'max:500'],
            'body'         => ['required', 'string'],
            'category'     => ['required', 'string', 'max:100'],
            'author'       => ['required', 'string', 'max:100'],
            'image'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'published_at' => ['nullable', 'date'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'   => 'Judul wajib diisi.',
            'excerpt.required' => 'Ringkasan wajib diisi.',
            'body.required'    => 'Isi post wajib diisi.',
            'image.image'      => 'File harus berupa gambar.',
            'image.max'        => 'Ukuran gambar maksimal 2MB.',
        ];
    }

    /**
     * Siapkan data sebelum validasi.
     * Auto-generate slug jika kosong.
     */
    protected function prepareForValidation(): void
    {
        if (empty($this->slug) && $this->title) {
            $this->merge([
                'slug' => Str::slug($this->title),
            ]);
        }
    }
}
