<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Belajar Laravel dari Nol untuk Fullstack Developer',
                'slug' => 'belajar-laravel-dari-nol',
                'excerpt' => 'Panduan memulai Laravel sebagai backend sekaligus belajar frontend modern dengan Blade dan Tailwind.',
                'body' => '<p>Laravel adalah framework PHP yang sangat populer untuk membangun aplikasi web modern. Di artikel ini, kita akan membahas langkah demi langkah memulai Laravel dari nol.</p><h2>Persiapan</h2><p>Pastikan Anda sudah menginstal Composer, PHP 8.2+, dan Node.js.</p><h2>Instalasi</h2><p>Jalankan <code>composer create-project laravel/laravel proyek-anda</code> untuk memulai proyek baru.</p><blockquote>Belajar Laravel butuh konsistensi, bukan kecepatan.</blockquote>',
                'image' => 'assets/img/post-01.png',
                'category' => 'Laravel',
                'author' => 'Moch. Rossy Avian I.',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Implementasi Zimbra Mail Server di Lingkungan Pemerintahan',
                'slug' => 'implementasi-zimbra-mail-server',
                'excerpt' => 'Catatan lengkap dari konfigurasi DNS, BIND9, hingga instalasi Zimbra Collaboration Suite.',
                'body' => '<p>Mail server adalah salah satu infrastruktur penting dalam organisasi. Zimbra Collaboration Suite menawarkan solusi open source yang lengkap.</p><h2>Konfigurasi DNS</h2><p>Langkah pertama adalah memastikan DNS server berjalan dengan baik menggunakan BIND9.</p><h2>Instalasi Zimbra</h2><p>Setelah dependensi siap, jalankan <code>./install.sh</code> pada direktori Zimbra.</p>',
                'image' => 'assets/img/zimbrapemkab01.png',
                'category' => 'Linux',
                'author' => 'Moch. Rossy Avian I.',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Tips Menulis Dokumentasi Teknis yang Berguna',
                'slug' => 'tips-dokumentasi-teknis',
                'excerpt' => 'Dokumentasi bukan hanya formalitas. Ini cara membuatnya bermanfaat untuk tim dan diri sendiri.',
                'body' => '<p>Dokumentasi teknis yang baik adalah investasi jangka panjang. Berikut tips menyusunnya.</p><h2>1. Tulis untuk pembaca, bukan untuk diri sendiri</h2><p>Bayangkan pembaca yang belum tahu konteks.</p><h2>2. Gunakan struktur yang konsisten</h2><p>Judul, sub-judul, contoh kode, dan kesimpulan.</p><h2>3. Perbarui secara berkala</h2><p>Dokumentasi yang usang lebih berbahaya daripada tidak ada dokumentasi.</p>',
                'image' => 'assets/img/post-03.png',
                'category' => 'Writing',
                'author' => 'Moch. Rossy Avian I.',
                'published_at' => now()->subDays(15),
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['slug' => $post['slug']],
                $post
            );
        }
    }
}
