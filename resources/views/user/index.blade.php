<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitri Yusnida - Portfolio UKK</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script> tailwind.config = { darkMode: 'class', } </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS Tambahan Khusus Menu Mobile (Responsif HP) -->
    <style>
        @media (max-width: 1023px) {
            .mobile-menu-hidden { display: none !important; }
            .mobile-menu-show { display: flex !important; }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 font-['Inter'] dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- NAVBAR -->
    <nav class="flex justify-between items-center px-6 md:px-20 py-6 sticky top-0 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md z-50 border-b border-rose-50 dark:border-gray-800">
        <div class="text-rose-600 font-bold text-xl tracking-tighter">fitriyusnida</div>

        <!-- Menu Desktop (Layar Besar) -->
        <ul class="hidden lg:flex space-x-6 text-gray-600 dark:text-gray-300 font-medium items-center text-sm">
            <li><a href="#" class="hover:text-rose-500 transition">HOME</a></li>
            <li><a href="#about" class="hover:text-rose-500 transition">ABOUT</a></li>
            <li><a href="#skills" class="hover:text-rose-500 transition">SKILLS</a></li>
            <li><a href="#prestasi" class="hover:text-rose-500 transition">SERTIFIKAT</a></li>
            <li><a href="#projects" class="hover:text-rose-500 transition">PROJECTS</a></li>
            <li><a href="#experience" class="hover:text-rose-500 transition">EXPERIENCE</a></li>
            <li><a href="#kesan-pesan" class="hover:text-rose-500 transition">KESAN & PESAN</a></li>
            <li><a href="#contact" class="hover:text-rose-500 transition">CONTACT</a></li>

            <li>
                <!-- Toggle Dark / Light Mode -->
                <button onclick="toggleDarkMode()" class="p-2 rounded-full bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-yellow-400 transition">
                    <i class="fa-solid fa-moon dark:hidden"></i>
                    <i class="fa-solid fa-sun hidden dark:block"></i>
                </button>
            </li>

            <li>
                <a href="{{ route('login') }}" class="px-5 py-2 bg-rose-600 text-white rounded-full hover:bg-rose-700 transition text-sm shadow-md shadow-rose-200 dark:shadow-none">
                    LOGIN
                </a>
            </li>
        </ul>

        <!-- Tombol Hamburger & Dark Mode untuk HP (Mobile) -->
        <div class="flex items-center gap-3 lg:hidden">
            <button onclick="toggleDarkMode()" class="p-2 rounded-full bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-yellow-400 transition">
                <i class="fa-solid fa-moon dark:hidden"></i>
                <i class="fa-solid fa-sun hidden dark:block"></i>
            </button>
            <button onclick="toggleMobileMenu()" class="p-2 rounded-lg bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-gray-200">
                <i class="fa-solid fa-bars text-xl" id="menu-icon"></i>
            </button>
        </div>
    </nav>

    <!-- Dropdown Menu Khusus HP (Tampil saat tombol garis tiga diklik) -->
    <div id="mobile-menu" class="mobile-menu-hidden lg:hidden bg-white dark:bg-gray-950 border-b border-rose-50 dark:border-gray-800 px-6 py-4 fixed w-full z-40 shadow-lg">
        <ul class="flex flex-col space-y-4 text-gray-600 dark:text-gray-300 font-medium text-sm">
            <li><a href="#" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">HOME</a></li>
            <li><a href="#about" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">ABOUT</a></li>
            <li><a href="#skills" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">SKILLS</a></li>
            <li><a href="#prestasi" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">SERTIFIKAT</a></li>
            <li><a href="#projects" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">PROJECTS</a></li>
            <li><a href="#experience" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">EXPERIENCE</a></li>
            <li><a href="#kesan-pesan" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">KESAN & PESAN</a></li>
            <li><a href="#contact" onclick="toggleMobileMenu()" class="block hover:text-rose-500 transition">CONTACT</a></li>
            <li>
                <a href="{{ route('login') }}" class="block text-center px-5 py-2.5 bg-rose-600 text-white rounded-xl transition text-sm shadow-md">
                    LOGIN
                </a>
            </li>
        </ul>
    </div>

    <!-- SECTION: HOME / BERANDA (VERSI MODERN & MENARIK) -->
<section id="home" class="flex flex-col md:flex-row items-center justify-between min-h-screen px-6 md:px-20 py-20 overflow-hidden">
    <!-- Kolom Kiri: Teks & Informasi -->
    <div class="w-full md:w-1/2 flex flex-col justify-center text-center md:text-left z-10">
        
        <!-- Badge Status Available -->
        <h4 class="text-rose-600 dark:text-rose-400 font-semibold text-lg sm:text-xl tracking-wide flex items-center justify-center md:justify-start gap-2">
            Halo Semua 👋, Saya
        </h4>
        
        <h1 class="text-4xl sm:text-6xl md:text-7xl font-black mt-2 tracking-tight uppercase leading-tight">
            {{ $profile->name ?? 'FITRI' }} <span class="text-rose-600 dark:text-rose-500 underline decoration-rose-300 decoration-wavy decoration-1 underline-offset-8"></span>
        </h1>
        
        <h2 class="text-lg sm:text-xl font-bold text-gray-700 dark:text-gray-300 mt-3 tracking-wide uppercase">
            {{ $profile->class_name ?? 'XII-B' }} <span class="text-rose-600 dark:text-rose-500">•</span> {{ $profile->major ?? 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM' }}
        </h2>

        <p class="mt-5 text-gray-600 dark:text-gray-400 text-base sm:text-lg leading-relaxed max-w-xl mx-auto md:mx-0">
            {!! $profile->description ?? 'Siswi SMK dengan minat mendalam di bidang <strong>UI/UX Design</strong>. Fokus menciptakan desain antarmuka web dan aplikasi yang rapi, menarik, dan mudah digunakan.' !!}
        </p>

        <!-- Skill Highlight Badge -->
        <div class="mt-6 flex flex-wrap justify-center md:justify-start gap-2">
            <span class="bg-rose-50 dark:bg-gray-800/80 text-rose-600 dark:text-rose-300 text-xs sm:text-sm font-semibold px-4 py-1.5 rounded-xl border border-rose-200 dark:border-gray-700 shadow-sm flex items-center gap-1.5">
                <i class="fa-solid fa-wand-magic-sparkles text-rose-500"></i> {{ $profile->skill_badge ?? 'UI/UX Design & Development' }}
            </span>
        </div>

        <!-- Tombol Navigasi / Aksi -->
        <div class="mt-8 flex flex-wrap justify-center md:justify-start items-center gap-4">
            <a href="#projects" class="group bg-rose-600 hover:bg-rose-700 text-white px-7 py-3.5 rounded-2xl font-bold shadow-lg shadow-rose-600/30 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300 text-sm sm:text-base flex items-center gap-2">
                <span>Lihat Portfolio</span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
            
            <a href="#cv" class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-800 px-6 py-3.5 rounded-2xl font-bold hover:bg-gray-50 dark:hover:bg-gray-800 hover:-translate-y-0.5 transition-all duration-300 text-sm sm:text-base shadow-sm">
                Lihat CV
            </a>
            
            <a href="#contact" class="text-rose-600 dark:text-rose-400 hover:text-rose-700 font-bold px-4 py-3.5 text-sm sm:text-base flex items-center gap-1.5 transition group">
                <span>Hubungi Saya</span>
                <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
            </a>
        </div>
    </div>
        
    <!-- Kolom Kanan: Foto Profil dengan Efek Glowing & Modern Frame -->
    <div class="w-full md:w-1/2 flex justify-center md:justify-end relative mt-12 md:mt-0">
        <!-- Background Glow Effect -->
        <div class="absolute -inset-2 bg-gradient-to-r from-rose-500 to-pink-500 rounded-3xl blur-3xl opacity-20 dark:opacity-30 animate-pulse"></div>
        
        <div class="relative group">
            <!-- Decorative Border Frame -->
            <div class="absolute -inset-2 bg-gradient-to-tr from-rose-600 to-pink-400 rounded-3xl opacity-30 group-hover:opacity-60 transition duration-500 blur-sm"></div>
            
            <img src="{{ isset($profile->image) ? asset('storage/' . $profile->image) : asset('images/saya1.jpg') }}" alt="Fitri Yusnida" class="relative w-72 sm:w-80 md:w-[400px] h-auto drop-shadow-2xl rounded-3xl border-4 border-white dark:border-gray-900 object-cover transform group-hover:scale-[1.01] transition duration-500">
        </div>
    </div>
</section>

    <!-- SECTION: ABOUT ME -->
    <section id="about" class="bg-white dark:bg-gray-950 px-6 md:px-20 py-24">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center space-x-4 mb-10">
                <h2 class="text-3xl font-bold italic">About Me</h2>
                <div class="h-[2px] bg-gradient-to-r from-rose-500 to-transparent flex-grow max-w-xs"></div>
            </div>

            <!-- Biodata Singkat -->
            <div class="mb-8 space-y-4">
                @forelse($abouts->where('category', 'Biodata Singkat') as $bio)
                <div class="bg-rose-50/40 dark:bg-gray-900 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                    <h3 class="text-xl font-bold text-rose-600 flex items-center gap-2 mb-3">
                        <i class="fa-solid fa-user"></i> {{ $bio->title ?: 'Biodata Singkat' }}
                    </h3>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-base sm:text-lg">
                        {{ $bio->description }}
                    </p>
                </div>
                @empty
                <div class="bg-rose-50/40 dark:bg-gray-900 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-base sm:text-lg">
                        Halo! Nama saya <span class="text-rose-600 font-semibold">Fitri Yusnida</span>, berdomisili di <span class="font-medium text-gray-800 dark:text-gray-200">Banjarmasin</span>. Saat ini saya menempuh pendidikan di <span class="font-semibold text-gray-900 dark:text-white">SMKN 2 Banjarmasin</span> pada jurusan <span class="text-rose-600 font-medium">Pengembangan Perangkat Lunak dan Gim (PPLG)</span>.
                    </p>
                </div>
                @endforelse
            </div>

            <!-- Riwayat Pendidikan (Timeline) -->
            <div class="mb-12 bg-gray-50 dark:bg-gray-900 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                <h3 class="text-xl font-bold mb-6 text-rose-600 flex items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i> Riwayat Pendidikan
                </h3>
                
                <div class="relative border-l-2 border-rose-200 dark:border-gray-700 ml-4 space-y-8">
                    @forelse($abouts->where('category', 'Pendidikan') as $edu)
                    <div class="relative pl-6">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-rose-600 rounded-full border-4 border-white dark:border-gray-900"></div>
                        <h4 class="text-base font-bold text-gray-900 dark:text-white">{{ $edu->title }}</h4>
                        @if($edu->year)
                        <span class="text-xs font-semibold text-rose-500">{{ $edu->year }}</span>
                        @endif
                    </div>
                    @empty
                    <p class="text-gray-400 text-sm italic pl-6">Belum ada riwayat pendidikan yang ditambahkan.</p>
                    @endforelse
                </div>
            </div>

            <!-- Minat, PKL, & Cita-Cita (Grid Card) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($abouts->whereNotIn('category', ['Biodata Singkat', 'Pendidikan']) as $item)
                <div class="bg-gray-50 dark:bg-gray-900 p-6 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs font-bold text-rose-600 uppercase tracking-wider bg-rose-100 dark:bg-gray-800 px-3 py-1 rounded-full">{{ $item->category }}</span>
                            @if($item->year)
                            <span class="text-xs font-semibold text-gray-400">{{ $item->year }}</span>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">{{ $item->title }}</h3>
                        @if($item->description)
                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-2 leading-relaxed">{{ $item->description }}</p>
                        @endif
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION: SKILLS (Hard & Soft Skills) -->
    <section id="skills" class="py-20 px-6 md:px-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center space-x-4 mb-10">
                <h2 class="text-3xl font-bold italic">Hard & Soft Skills</h2>
                <div class="h-[2px] bg-gradient-to-r from-rose-500 to-transparent flex-grow max-w-xs"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Hard Skills Box -->
                <div class="bg-white dark:bg-gray-950 p-8 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800">
                    <h3 class="text-xl font-bold text-rose-600 mb-6"><i class="fa-solid fa-code mr-2"></i> Hard Skills</h3>
                    <div class="space-y-6">
                        @forelse($skills->where('category', 'hard') as $skill)
                        <div class="space-y-2 border-b border-gray-100 dark:border-gray-900 pb-4">
                            <div class="flex justify-between text-sm font-semibold">
                                <span>{{ $skill->name }}</span>
                                <span class="text-rose-600">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-rose-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                            </div>
                        </div>
                        @empty
                        <p class="text-sm text-gray-400 italic">Belum ada hard skills.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Soft Skills Box -->
                <div class="bg-white dark:bg-gray-950 p-8 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800">
                    <h3 class="text-xl font-bold text-rose-600 mb-6"><i class="fa-solid fa-users mr-2"></i> Soft Skills</h3>
                    <div class="space-y-6">
                        @forelse($skills->where('category', 'soft') as $skill)
                        <div class="space-y-2 border-b border-gray-100 dark:border-gray-900 pb-4">
                            <div class="flex justify-between text-sm font-semibold">
                                <span>{{ $skill->name }}</span>
                                <span class="text-rose-600">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-rose-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                            </div>
                        </div>
                        @empty
                        <p class="text-sm text-gray-400 italic">Belum ada soft skills.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: SERTIFIKAT DAN PRESTASI -->
    <section id="prestasi" class="py-20 px-6 md:px-20 bg-white dark:bg-gray-950">
        <div class="max-w-6xl mx-auto">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-rose-600">Sertifikat & Prestasi</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($certificates as $certificate)
                <div class="bg-gray-50 dark:bg-gray-900 p-6 rounded-2xl shadow-sm border border-rose-100 dark:border-gray-800 flex flex-col justify-between h-full group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-rose-50 dark:bg-gray-800 text-rose-600 rounded-xl text-xl flex-shrink-0">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="space-y-1 w-full">
                            <h4 class="font-bold text-lg group-hover:text-rose-600 transition">{{ $certificate->title }}</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $certificate->description }}</p>
                            
                            @if($certificate->image)
                            <div class="mt-3 w-full h-48 rounded-xl overflow-hidden border border-rose-100 dark:border-gray-800 bg-white dark:bg-gray-950 flex items-center justify-center">
                                <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="w-full h-full object-contain">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 bg-gray-50 dark:bg-gray-900 rounded-3xl border-2 border-dashed border-rose-200 dark:border-gray-800 p-8">
                    <p class="text-gray-400 text-sm italic">Belum ada sertifikat atau prestasi yang ditambahkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION: PROJECTS (DENGAN PENCARIAN & FILTER UNTUK USER) -->
<section id="projects" class="py-20 px-6 bg-rose-50/30 dark:bg-gray-900">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
            <h2 class="text-3xl font-bold text-rose-600">My Projects</h2>
        </div>
        
        <!-- Form Pencarian & Filter untuk Pengunjung -->
        <form method="GET" action="{{ route('user.index') }}#projects" class="mb-10 bg-white dark:bg-gray-950 p-4 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800 flex flex-col sm:flex-row gap-4 items-center">
            <!-- Input Cari -->
            <div class="relative w-full flex-1">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                    <i class="fa-solid fa-search"></i>
                </span>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul atau deskripsi project..." class="w-full pl-11 pr-4 py-2.5 rounded-2xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-sm focus:outline-none focus:border-rose-500">
            </div>

            <!-- Filter Teknologi -->
            <div class="w-full sm:w-64">
                <input type="text" name="tech" value="{{ request('tech') }}" placeholder="Filter teknologi (cth: Laravel)" class="w-full px-4 py-2.5 rounded-2xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-sm focus:outline-none focus:border-rose-500">
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center gap-2 w-full sm:w-auto">
                <button type="submit" class="flex-1 sm:flex-none bg-rose-600 hover:bg-rose-700 text-white px-5 py-2.5 rounded-2xl font-semibold text-sm transition shadow-sm">
                    Cari
                </button>
                @if(request('search') || request('tech'))
                    <a href="{{ route('user.index') }}#projects" class="flex-1 sm:flex-none bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 text-gray-600 dark:text-gray-300 px-4 py-2.5 rounded-2xl font-semibold text-sm transition text-center">
                        Reset
                    </a>
                @endif
            </div>
        </form>

        <!-- Grid Daftar Projects -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <div class="bg-white dark:bg-gray-950 rounded-3xl shadow-md overflow-hidden border border-rose-100 dark:border-gray-800 flex flex-col justify-between h-full group">
                <div>
                    <div class="h-52 overflow-hidden bg-rose-50 relative">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center text-rose-300">
                                <i class="fa-solid fa-image text-2xl"></i>
                                <span class="text-xs italic">No Image</span>
                            </div>
                        @endif
                    </div>
                    <div class="p-6 space-y-3">
                        <h3 class="text-lg font-bold group-hover:text-rose-600 transition">{{ $project->title }}</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm line-clamp-2">{{ $project->description }}</p>
                        @if($project->technologies)
                        <div class="flex flex-wrap gap-1.5 pt-1">
                            @foreach(explode(',', $project->technologies) as $tech)
                                <span class="px-2.5 py-0.5 bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-rose-400 rounded-full text-xs font-medium">{{ trim($tech) }}</span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
                
                @if($project->demo_url || $project->github_url)
                <div class="px-6 pb-6 pt-2 flex items-center gap-3 border-t border-rose-50 dark:border-gray-800">
                    @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank" class="flex-1 text-center bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2.5 rounded-xl transition">Demo</a>
                    @endif
                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank" class="flex-1 text-center bg-gray-800 hover:bg-gray-900 text-white text-xs font-semibold py-2.5 rounded-xl transition">GitHub</a>
                    @endif
                </div>
                @endif
            </div>
            @empty
            <div class="col-span-full text-center py-16 bg-white dark:bg-gray-950 rounded-3xl border-2 border-dashed border-rose-200 dark:border-gray-800 p-8">
                <p class="text-gray-400 text-sm italic">Belum ada project yang ditemukan atau ditambahkan.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

    <!-- SECTION: PENGALAMAN & EXPERIENCE -->
    <section id="experience" class="py-20 px-6 md:px-20 bg-white dark:bg-gray-950">
        <div class="max-w-4xl mx-auto">
            <div class="mb-10">
                <h2 class="text-3xl font-bold text-rose-600">Pengalaman & PKL</h2>
            </div>

            <div class="border-l-2 border-rose-200 dark:border-gray-800 ml-4 space-y-10 pl-6">
                @forelse($experiences as $experience)
                <div class="relative bg-gray-50/50 dark:bg-gray-900/50 p-6 rounded-2xl border border-rose-100 dark:border-gray-800 shadow-sm">
                    <div class="absolute -left-[37px] top-6 w-4 h-4 bg-rose-600 rounded-full border-4 border-white dark:border-gray-950"></div>
                    
                    <span class="text-xs font-semibold text-rose-500 uppercase tracking-wider">{{ $experience->period }}</span>
                    <h3 class="text-lg font-bold mt-1">{{ $experience->title }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ $experience->description }}</p>
                </div>
                @empty
                <div class="text-center py-8 bg-gray-50 dark:bg-gray-900 rounded-2xl border border-dashed border-rose-200 dark:border-gray-800 p-6">
                    <p class="text-gray-400 text-sm italic">Belum ada data pengalaman atau PKL yang ditambahkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION: CV DIGITAL -->
    <section id="cv" class="py-20 px-6 bg-rose-50/50 dark:bg-gray-900">
        <div class="max-w-xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-3 text-rose-600">Curriculum Vitae (CV)</h2>
            <p class="text-gray-500 dark:text-gray-400 mb-8 text-sm">Unduh CV resmi saya atau lihat di tab baru.</p>

            @if(isset($profile) && $profile->cv_file)
                <div class="bg-white dark:bg-gray-950 p-6 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800 mb-6 flex flex-wrap justify-center items-center gap-3">
                    <a href="{{ asset('storage/' . $profile->cv_file) }}" download="CV_Fitri_Yusnida" class="inline-flex items-center gap-2 bg-rose-600 text-white px-6 py-3 rounded-xl font-semibold shadow-sm hover:bg-rose-700 transition text-sm">
                        <i class="fa-solid fa-download"></i> Unduh CV
                    </a>
                    <a href="{{ asset('storage/' . $profile->cv_file) }}" target="_blank" class="inline-flex items-center gap-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 px-6 py-3 rounded-xl font-semibold hover:bg-gray-200 transition text-sm">
                        <i class="fa-solid fa-up-right-from-square"></i> Lihat CV
                    </a>
                </div>
            @else
                <div class="bg-white dark:bg-gray-950 p-6 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800 mb-6 text-center">
                    <p class="text-sm text-gray-400 italic">Belum ada file CV yang diunggah.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- SECTION: KESAN DAN PESAN (FORM & LIST PESAN PENGUNJUNG) -->
    <section id="kesan-pesan" class="py-20 px-6 bg-rose-50/20 dark:bg-gray-900">
        <div class="max-w-xl mx-auto space-y-8">
            
            <!-- DAFTAR PESAN YANG MASUK -->
            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-center mb-6 text-rose-600">Kesan & Pesan Pengunjung</h2>
                
                @forelse($messages ?? [] as $msg)
                <div class="bg-white dark:bg-gray-950 p-5 rounded-2xl border border-rose-100 dark:border-gray-800 shadow-sm relative">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="font-bold text-rose-600 text-sm"><i class="fa-solid fa-user-circle mr-1"></i> {{ $msg->name }}</h4>
                        <span class="text-xs text-gray-400">{{ $msg->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-sm text-gray-700 dark:text-gray-300">{{ $msg->message }}</p>
                </div>
                @empty
                <div class="text-center py-6 bg-white dark:bg-gray-950 rounded-2xl border border-dashed border-rose-200 dark:border-gray-800">
                    <p class="text-sm text-gray-400 italic">Belum ada kesan & pesan yang dikirim.</p>
                </div>
                @endforelse
            </div>

            <!-- FORMULIR INPUT KESAN & PESAN -->
            <div class="bg-white dark:bg-gray-950 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                <h3 class="text-lg font-bold mb-4 text-center">Tuliskan Kesan & Pesan Anda</h3>
                
                <form action="{{ route('messages.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="name" required placeholder="Nama Anda" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-sm">
                    </div>
                    <div>
                        <textarea name="message" rows="3" required placeholder="Tuliskan kesan dan pesan Anda..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-2.5 rounded-xl text-sm transition shadow-md">
                        <i class="fa-solid fa-paper-plane mr-1"></i> Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- SECTION: CONTACT -->
    <section id="contact" class="py-20 px-6 text-center bg-gray-50 dark:bg-gray-950">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-12 tracking-tight">CONTACT</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Email -->
                <a href="mailto:fitriyusnida8@gmail.com" class="flex items-center space-x-3 bg-rose-600 text-white px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="font-bold">Email</span>
                </a>
                <!-- GitHub -->
                <a href="https://github.com/fitriyusnida8-gif" target="_blank" class="flex items-center space-x-3 bg-gray-900 dark:bg-gray-800 text-white px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg border border-gray-700">
                    <i class="fa-brands fa-github text-xl"></i>
                    <span class="font-bold">GitHub</span>
                </a>
                <!-- Instagram -->
                <a href="https://instagram.com/fiidaysndaa" target="_blank" class="flex items-center space-x-3 bg-gradient-to-tr from-rose-400 via-pink-500 to-rose-600 text-white px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg">
                    <i class="fa-brands fa-instagram text-xl"></i>
                    <span class="font-bold">Instagram</span>
                </a>
            </div>
        </div>
    </section>

    <!-- TOMBOL KEMBALI KE ATAS (BACK TO TOP) -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-6 right-6 bg-rose-600 text-white p-3.5 rounded-full shadow-lg hover:bg-rose-700 transition z-50">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- FOOTER -->
    <footer class="bg-rose-950 dark:bg-gray-950 text-white px-6 md:px-20 py-8 text-center w-full">
        <p class="text-rose-200/60 text-sm tracking-widest uppercase">© 2026 Fitri Yusnida - UKK PPLG</p>
    </footer>

    <!-- SCRIPT INTERAKTIF DARK MODE & MOBILE MENU -->
    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');
            
            menu.classList.toggle('mobile-menu-hidden');
            menu.classList.toggle('mobile-menu-show');
            
            if (menu.classList.contains('mobile-menu-hidden')) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            }
        }
    </script>
</body>
</html>