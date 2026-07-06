<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Faris Habiburrohman',
            'title' => 'Mahasiswa Informatika',
            'university' => 'Universitas Muhammadiyah Semarang',
            'email' => 'faris.habiburrohman@student.unimus.ac.id',
            'phone' => '+62 8xx-xxxx-xxxx',
            'location' => 'Semarang, Jawa Tengah',
            'tagline' => 'Pengembang Web | Mahasiswa Informatika | Teknologi Enthusiast',
            'bio' => 'Saya adalah mahasiswa Informatika di Universitas Muhammadiyah Semarang yang memiliki ketertarikan besar pada pengembangan web dan teknologi modern. Saat ini saya sedang mendalami Laravel, React, dan pengembangan full-stack. Saya bersemangat untuk belajar hal baru dan menerapkannya dalam proyek nyata.',
            'stats' => [
                'projects' => '8+',
                'technologies' => '15+',
                'experience' => '2+',
            ],
            'about' => [
                'description1' => 'Saya lahir dan besar di Semarang, Jawa Tengah. Sejak SMA, saya sudah tertarik dengan dunia pemrograman dan teknologi. Saat ini saya menempuh pendidikan S1 Teknik Informatika di Universitas Muhammadiyah Semarang dan berada di semester 5.',
                'description2' => 'Selama perkuliahan, saya telah mengerjakan berbagai proyek mulai dari aplikasi web sederhana hingga sistem informasi yang lebih kompleks. Saya memiliki fondasi yang kuat dalam pemrograman backend dengan Laravel dan frontend dengan React/Vue.js. Saya juga aktif dalam organisasi kampus dan komunitas developer.',
                'details' => [
                    ['icon' => 'calendar-alt', 'text' => 'Usia: 21 Tahun'],
                    ['icon' => 'map-marker-alt', 'text' => 'Semarang, Jawa Tengah'],
                    ['icon' => 'envelope', 'text' => 'faris.habiburrohman@student.unimus.ac.id'],
                    ['icon' => 'phone', 'text' => '+62 8xx-xxxx-xxxx'],
                ],
                'timeline' => [
                    [
                        'year' => '2022 - Sekarang',
                        'title' => 'S1 Teknik Informatika',
                        'description' => 'Universitas Muhammadiyah Semarang - Semester 5, IPK: 3.75/4.00',
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Magang Web Developer',
                        'description' => 'PT. Teknologi Digital Semarang - Mengembangkan aplikasi internal dengan Laravel',
                    ],
                    [
                        'year' => '2022',
                        'title' => 'Lulusan SMK RPL',
                        'description' => 'SMK Negeri 1 Semarang - Juara 2 Lomba Web Design tingkat Provinsi',
                    ],
                    [
                        'year' => '2021',
                        'title' => 'Mulai Belajar Pemrograman',
                        'description' => 'Belajar mandiri HTML, CSS, JavaScript, dan PHP melalui kursus online',
                    ],
                ],
            ],
            'skills' => [
                [
                    'name' => 'Backend Development',
                    'icon' => 'server',
                    'items' => ['Laravel', 'PHP', 'MySQL', 'PostgreSQL', 'REST API', 'Authentication', 'Queue/Job'],
                ],
                [
                    'name' => 'Frontend Development',
                    'icon' => 'laptop-code',
                    'items' => ['React.js', 'Vue.js', 'JavaScript', 'TypeScript', 'Tailwind CSS', 'Bootstrap', 'Alpine.js'],
                ],
                [
                    'name' => 'Tools & DevOps',
                    'icon' => 'tools',
                    'items' => ['Git/GitHub', 'Docker', 'VS Code', 'Postman', 'Linux', 'CI/CD', 'Figma'],
                ],
            ],
            'education' => [
                [
                    'type' => 'Universitas',
                    'year' => '2022 - Sekarang',
                    'title' => 'S1 Teknik Informatika',
                    'institution' => 'Universitas Muhammadiyah Semarang',
                    'description' => 'Mahasiswa aktif semester 5. Fokus pada Software Engineering, Web Development, Database, dan Algoritma. IPK: 3.75/4.00. Aktif di Himpunan Mahasiswa Informatika (HIMATIF) dan komunitas GDSC.',
                ],
                [
                    'type' => 'Sekolah Menengah',
                    'year' => '2019 - 2022',
                    'title' => 'Rekayasa Perangkat Lunak (RPL)',
                    'institution' => 'SMK Negeri 1 Semarang',
                    'description' => 'Mempelajari dasar pemrograman (Pascal, C++, Java), Basis Data (MySQL), Web Development (PHP, HTML, CSS, JS), dan Jaringan Komputer. Juara 2 Lomba Web Design tingkat Provinsi Jawa Tengah 2021.',
                ],
            ],
            'projects' => [
                [
                    'title' => 'E-Commerce Sederhana',
                    'description' => 'Aplikasi e-commerce lengkap dengan fitur keranjang belanja, checkout, pembayaran (Midtrans), manajemen produk, kategori, dan dashboard admin. Menggunakan Laravel 10 dan MySQL.',
                    'tech' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript', 'Midtrans'],
                    'icon' => 'shopping-cart',
                    'github' => '#',
                    'demo' => '#',
                ],
                [
                    'title' => 'Sistem Informasi Akademik',
                    'description' => 'Aplikasi manajemen data mahasiswa, nilai, jadwal kuliah, KRS, dan laporan akademik. Menggunakan Laravel dengan Spatie Permission untuk role-based access control (Admin, Dosen, Mahasiswa).',
                    'tech' => ['Laravel', 'MySQL', 'Tailwind CSS', 'Alpine.js', 'Spatie Permission'],
                    'icon' => 'graduation-cap',
                    'github' => '#',
                    'demo' => '#',
                ],
                [
                    'title' => 'Portfolio Website',
                    'description' => 'Website portfolio pribadi modern dan responsif untuk menampilkan proyek, keahlian, dan pengalaman. Dibangun dengan Laravel 11, Blade templating, Tailwind CSS, dan Vite untuk asset bundling.',
                    'tech' => ['Laravel', 'Blade', 'Tailwind CSS', 'Vite', 'FontAwesome'],
                    'icon' => 'user',
                    'github' => '#',
                    'demo' => '#',
                ],
                [
                    'title' => 'Task Management App',
                    'description' => 'Aplikasi manajemen tugas harian (To-Do) dengan fitur kategori, prioritas, due date, reminder, dan kolaborasi tim. Frontend menggunakan React + TypeScript, Backend dengan Node.js/Express dan MongoDB.',
                    'tech' => ['React', 'TypeScript', 'Node.js', 'Express', 'MongoDB', 'Tailwind'],
                    'icon' => 'tasks',
                    'github' => '#',
                    'demo' => '#',
                ],
            ],
            'contact' => [
                [
                    'icon' => 'envelope',
                    'label' => 'Email',
                    'value' => 'faris.habiburrohman@student.unimus.ac.id',
                    'link' => 'mailto:faris.habiburrohman@student.unimus.ac.id',
                ],
                [
                    'icon' => 'phone',
                    'label' => 'Telepon',
                    'value' => '+62 8xx-xxxx-xxxx',
                    'link' => 'tel:+628xxxxxxxxxx',
                ],
                [
                    'icon' => 'map-marker-alt',
                    'label' => 'Lokasi',
                    'value' => 'Semarang, Jawa Tengah',
                    'link' => 'https://maps.google.com/?q=Semarang,Jawa+Tengah',
                ],
                [
                    'icon' => 'linkedin',
                    'label' => 'LinkedIn',
                    'value' => 'linkedin.com/in/farishabiburrohman',
                    'link' => 'https://linkedin.com/in/farishabiburrohman',
                ],
            ],
            'social' => [
                'github' => 'https://github.com/farishabiburrohman',
                'linkedin' => 'https://linkedin.com/in/farishabiburrohman',
                'instagram' => 'https://instagram.com/farishabiburrohman',
                'twitter' => 'https://twitter.com/farishabiburrohman',
            ],
        ];

        return view('portfolio.index', compact('profile'));
    }
}