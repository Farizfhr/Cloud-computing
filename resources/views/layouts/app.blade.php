<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Faris Habiburrohman - Mahasiswa Informatika Universitas Muhammadiyah Semarang">
    <meta name="author" content="Faris Habiburrohman">
    <title>{{ $profile['name'] ?? 'Faris Habiburrohman' }} - Portfolio</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    }
                }
            }
        }
    </script>

    @yield('styles')
</head>
<body class="font-sans text-gray-800 antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold text-primary-600">FH</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-gray-600 hover:text-primary-600 transition-colors font-medium">Tentang</a>
                    <a href="#skills" class="text-gray-600 hover:text-primary-600 transition-colors font-medium">Keahlian</a>
                    <a href="#education" class="text-gray-600 hover:text-primary-600 transition-colors font-medium">Pendidikan</a>
                    <a href="#projects" class="text-gray-600 hover:text-primary-600 transition-colors font-medium">Proyek</a>
                    <a href="#contact" class="text-gray-600 hover:text-primary-600 transition-colors font-medium">Kontak</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-primary-600">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 px-4 border-t border-gray-100">
            <a href="#about" class="block py-2 text-gray-600 hover:text-primary-600">Tentang</a>
            <a href="#skills" class="block py-2 text-gray-600 hover:text-primary-600">Keahlian</a>
            <a href="#education" class="block py-2 text-gray-600 hover:text-primary-600">Pendidikan</a>
            <a href="#projects" class="block py-2 text-gray-600 hover:text-primary-600">Proyek</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-primary-600">Kontak</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 border-t border-gray-100 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-500 text-sm">
                &copy; {{ date('Y') }} {{ $profile['name'] ?? 'Faris Habiburrohman' }}.
                Dibangun dengan <span class="text-red-500"><i class="fas fa-heart"></i></span> menggunakan Laravel.
            </p>
            <p class="text-gray-400 text-xs mt-1">Universitas Muhammadiyah Semarang</p>
        </div>
    </footer>

    @yield('scripts')

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                }
            });
        });

        // Active nav link on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav a[href^="#"]');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-primary-600');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('text-primary-600');
                }
            });
        });
    </script>
</body>
</html>