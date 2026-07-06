@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-primary-50 via-white to-blue-50 pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <span class="inline-block px-4 py-2 rounded-full bg-primary-100 text-primary-700 text-sm font-medium mb-6">
                        <i class="fas fa-graduation-cap mr-2"></i> Mahasiswa Informatika
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Halo, Saya <span class="text-primary-600">{{ $profile['name'] }}</span>
                    </h1>
                    <p class="text-xl sm:text-2xl text-gray-600 mb-8 max-w-xl mx-auto lg:mx-0">
                        {{ $profile['tagline'] }}
                    </p>
                    <p class="text-lg text-gray-500 mb-10 max-w-lg mx-auto lg:mx-0">
                        {{ $profile['bio'] }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#projects" class="inline-flex items-center justify-center px-8 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            <i class="fas fa-folder-open mr-2"></i> Lihat Proyek
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center px-8 py-3 bg-white text-primary-600 font-semibold rounded-lg border-2 border-primary-600 hover:bg-primary-50 transition-all duration-300">
                            <i class="fas fa-envelope mr-2"></i> Hubungi Saya
                        </a>
                    </div>
                    <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-8 text-center lg:text-left">
                        <div>
                            <div class="text-3xl font-bold text-primary-600">{{ $profile['stats']['projects'] }}</div>
                            <div class="text-gray-500 text-sm">Proyek Selesai</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-primary-600">{{ $profile['stats']['technologies'] }}</div>
                            <div class="text-gray-500 text-sm">Teknologi Dikuasai</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-primary-600">{{ $profile['stats']['experience'] }}</div>
                            <div class="text-gray-500 text-sm">Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative w-72 h-72 mx-auto lg:w-80 lg:h-80">
                        <!-- Profile Image Placeholder -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-100 to-primary-200 rounded-full flex items-center justify-center">
                            <i class="fas fa-user-graduate text-8xl text-primary-400"></i>
                        </div>
                        <!-- Floating animation elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0s;">
                            <i class="fas fa-code text-2xl text-primary-600"></i>
                        </div>
                        <div class="absolute bottom-4 -left-4 w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                            <i class="fas fa-laptop-code text-xl text-blue-600"></i>
                        </div>
                        <div class="absolute top-1/2 -right-6 w-12 h-12 bg-green-100 rounded-full flex items-center justify-center animate-pulse">
                            <i class="fas fa-database text-lg text-green-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-gray-400 hover:text-primary-600 transition-colors">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Tentang Saya</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto rounded-full"></div>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ $profile['about']['description1'] }}
                    </p>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ $profile['about']['description2'] }}
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($profile['about']['details'] as $detail)
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-{{ $detail['icon'] }} text-primary-500 mr-3 w-5"></i>
                                <span>{{ $detail['text'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Tentang Perjalanan Saya</h3>
                    <div class="space-y-6">
                        @foreach($profile['about']['timeline'] as $item)
                            <div class="relative pl-6 border-l-2 border-primary-200 pb-6 last:pb-0 last:border-0">
                                <div class="absolute left-0 top-1 w-4 h-4 bg-primary-500 rounded-full border-4 border-white shadow-lg"></div>
                                <div class="ml-4">
                                    <div class="text-sm text-primary-600 font-medium">{{ $item['year'] }}</div>
                                    <h4 class="text-lg font-semibold text-gray-900">{{ $item['title'] }}</h4>
                                    <p class="text-gray-600 mt-1">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Keahlian & Teknologi</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto rounded-full"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($profile['skills'] as $category)
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-{{ $category['icon'] }} text-xl text-primary-600"></i>
                            </div>
                            <h3 class="ml-4 text-xl font-bold text-gray-900">{{ $category['name'] }}</h3>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($category['items'] as $skill)
                                <span class="px-3 py-1 bg-primary-50 text-primary-700 text-sm font-medium rounded-full">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Pendidikan & Pengalaman</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto rounded-full"></div>
            </div>
            <div class="max-w-3xl mx-auto">
                @foreach($profile['education'] as $edu)
                    <div class="relative pl-8 pb-10 border-l-2 border-gray-200 last:border-0 last:pb-0">
                        <div class="absolute left-0 top-0 w-4 h-4 bg-primary-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="bg-gray-50 rounded-xl p-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-3 py-1 bg-primary-100 text-primary-700 text-sm font-medium rounded-full">{{ $edu['type'] }}</span>
                                <span class="text-sm text-gray-500">{{ $edu['year'] }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $edu['title'] }}</h3>
                            <p class="text-primary-600 font-medium mb-2">{{ $edu['institution'] }}</p>
                            <p class="text-gray-600">{{ $edu['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Proyek Terpilih</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto rounded-full"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Beberapa proyek yang telah saya kerjakan selama perkuliahan dan pengembangan mandiri
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
                @foreach($profile['projects'] as $project)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-primary-100 to-primary-200 flex items-center justify-center relative overflow-hidden">
                            <i class="fas fa-{{ $project['icon'] ?? 'project-diagram' }} text-6xl text-primary-300"></i>
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-600/20 to-transparent opacity-0 hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach($project['tech'] as $tech)
                                    <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs font-medium rounded">{{ $tech }}</span>
                                @endforeach
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                            <p class="text-gray-600 mb-4">{{ $project['description'] }}</p>
                            <div class="flex gap-3">
                                <a href="{{ $project['github'] }}" target="_blank" class="text-primary-600 hover:text-primary-700 font-medium text-sm flex items-center">
                                    <i class="fab fa-github mr-1"></i> GitHub
                                </a>
                                <a href="{{ $project['demo'] }}" target="_blank" class="text-primary-600 hover:text-primary-700 font-medium text-sm flex items-center">
                                    <i class="fas fa-external-link-alt mr-1"></i> Demo
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-primary-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">Mari Bekerja Sama</h2>
                <div class="w-20 h-1 bg-primary-300 mx-auto rounded-full"></div>
                <p class="text-primary-100 mt-4 max-w-2xl mx-auto">
                    Saya terbuka untuk peluang magang, freelance, atau kolaborasi proyek. Jangan ragu untuk menghubungi saya!
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <div class="text-center lg:text-left">
                    <h3 class="text-2xl font-bold text-white mb-6">Hubungi Saya</h3>
                    <div class="space-y-6">
                        @foreach($profile['contact'] as $contact)
                            <a href="{{ $contact['link'] }}" target="_blank" class="flex items-center justify-center lg:justify-start gap-4 p-4 bg-white/10 rounded-xl hover:bg-white/20 transition-colors group">
                                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center group-hover:bg-primary-500/30 transition-colors">
                                    <i class="fas fa-{{ $contact['icon'] }} text-xl text-white"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-primary-100 text-sm">{{ $contact['label'] }}</p>
                                    <p class="text-white font-medium">{{ $contact['value'] }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Kirim Pesan</h3>
                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="Nama Lengkap" required
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-primary-200 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-transparent">
                            <input type="email" name="email" placeholder="Email" required
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-primary-200 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-transparent">
                        </div>
                        <input type="text" name="subject" placeholder="Subjek" required
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-primary-200 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-transparent">
                        <textarea name="message" rows="4" placeholder="Pesan Anda" required
                            class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-primary-200 focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-transparent resize-none"></textarea>
                        <button type="submit"
                            class="w-full py-3 bg-white text-primary-600 font-semibold rounded-xl hover:bg-primary-50 transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Links Footer Section -->
    <section class="py-12 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-gray-400 mb-6">Terhubung dengan saya</p>
            <div class="flex justify-center gap-6">
                @foreach($profile['social'] as $platform => $url)
                    <a href="{{ $url }}" target="_blank"
                        class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center text-gray-400 hover:bg-primary-600 hover:text-white transition-all duration-300 hover:scale-110">
                        <i class="fab fa-{{ $platform }} text-xl"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('section > div > div').forEach(el => {
            observer.observe(el);
        });

        // Form submission
        document.querySelector('form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah terkirim. (Demo only - form tidak benar-benar mengirim)');
            this.reset();
        });
    </script>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
    </style>
@endsection