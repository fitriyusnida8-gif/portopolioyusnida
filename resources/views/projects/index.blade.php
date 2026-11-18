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
</head>

<body class="bg-gray-50 text-gray-900 font-['Inter'] dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- NAVBAR -->
    <nav class="flex justify-between items-center px-6 md:px-20 py-6 sticky top-0 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md z-50 border-b border-rose-50 dark:border-gray-800">
        <div class="text-rose-600 font-bold text-xl tracking-tighter">fitriyusnida</div>

        <!-- Desktop Menu -->
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
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-gray-800 dark:bg-gray-700 text-white rounded-full hover:bg-gray-900 transition shadow-md text-sm">
                        LOGOUT
                    </button>
                </form>
            </li>
        </ul>

        <!-- Mobile Menu & Theme Toggle Button -->
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

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white dark:bg-gray-950 border-b border-rose-50 dark:border-gray-800 px-6 py-4 fixed w-full z-40 shadow-lg">
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
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="w-full text-center px-4 py-2 bg-gray-800 dark:bg-gray-700 text-white rounded-full hover:bg-gray-900 transition shadow-md text-sm">
                        LOGOUT
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- SECTION: HOME / BERANDA -->
    <section class="flex flex-col md:flex-row items-center justify-center min-h-screen px-6 md:px-20 py-10">
        <div class="w-full md:w-1/2 flex flex-col justify-center text-center md:text-left">
            
            <div class="mb-4 flex justify-center md:justify-start">
                <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold px-4 py-2 rounded-xl transition shadow-sm">
                    <i class="fa-solid fa-pen-to-square"></i> Edit Profil Beranda
                </a>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold mt-2 tracking-tight uppercase">
                {{ $profile->name ?? 'FITRI' }} <span class="text-rose-600">{{ Str::afterLast($profile->name ?? 'FITRI YUSNIDA', ' ') ?: 'YUSNIDA' }}</span>
            </h1>
            
            <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-700 dark:text-gray-300 mt-2 tracking-tight uppercase">
                {{ $profile->class_name ?? 'XII-B' }} <span class="text-rose-600">{{ $profile->major ?? 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM' }}</span>
            </h2>

            <p class="mt-4 text-gray-600 dark:text-gray-400 text-sm sm:text-base leading-relaxed">
                {!! $profile->description ?? 'Siswi SMK dengan minat mendalam di bidang <strong>UI/UX Design</strong>. Fokus menciptakan desain antarmuka web dan aplikasi yang rapi, menarik, dan mudah digunakan.' !!}
            </p>

            <div class="mt-6 flex flex-wrap justify-center md:justify-start gap-2">
                <span class="bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-rose-400 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200 dark:border-gray-700">
                    {{ $profile->skill_badge ?? 'UI/UX Design' }}
                </span>
            </div>

            <div class="mt-8 flex flex-wrap justify-center md:justify-start items-center gap-3 sm:gap-4">
                <a href="#projects" class="bg-rose-600 text-white px-5 sm:px-6 py-3 rounded-full font-bold shadow-lg shadow-rose-200 dark:shadow-none hover:bg-rose-700 transition-all text-xs sm:text-base">
                    Lihat Portfolio
                </a>
                <a href="#cv" class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-700 px-5 sm:px-6 py-3 rounded-full font-bold hover:bg-gray-200 dark:hover:bg-gray-700 transition-all text-xs sm:text-base">
                    Lihat CV
                </a>
                <a href="#contact" class="bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-rose-400 border border-rose-200 dark:border-gray-700 px-5 sm:px-6 py-3 rounded-full font-bold hover:bg-rose-100 dark:hover:bg-gray-700 transition-all text-xs sm:text-base flex items-center gap-1">
                    Hubungi Saya &rarr;
                </a>
            </div>
        </div>
            
        <div class="w-full md:w-1/2 flex justify-center md:justify-end relative mt-10 md:mt-0">
            <div class="absolute -inset-4 bg-rose-500/10 rounded-full blur-2xl"></div>
            <img src="{{ isset($profile->image) ? asset('storage/' . $profile->image) : asset('images/saya1.jpg') }}" alt="Fitri Yusnida" class="relative w-64 sm:w-72 md:w-[420px] drop-shadow-2xl rounded-2xl border-4 border-white dark:border-gray-800 object-cover">
        </div>
    </section>

    <!-- SECTION: ABOUT ME -->
    <section id="about" class="bg-white dark:bg-gray-950 px-6 md:px-20 py-20">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-4">
                <div class="flex items-center space-x-4 w-full">
                    <h2 class="text-2xl sm:text-3xl font-bold italic">About Me</h2>
                    <div class="h-[2px] bg-gradient-to-r from-rose-500 to-transparent flex-grow max-w-xs"></div>
                </div>
                <a href="#form-about" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm whitespace-nowrap">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Info
                </a>
            </div>

            <!-- Biodata Singkat -->
            <div class="mb-8 space-y-4">
                @forelse($abouts->where('category', 'Biodata Singkat') as $bio)
                <div class="bg-rose-50/40 dark:bg-gray-900 p-6 sm:p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm relative group">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-3 gap-2">
                        <h3 class="text-lg sm:text-xl font-bold text-rose-600 flex items-center gap-2">
                            <i class="fa-solid fa-user-pen"></i> {{ $bio->title ?: 'Biodata Singkat' }}
                        </h3>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('abouts.edit', $bio->id) }}" class="text-amber-500 hover:text-amber-600 text-xs font-semibold px-3 py-1.5 rounded-xl bg-amber-50 dark:bg-gray-800 transition">
                                <i class="fa-solid fa-pen"></i> Edit
                            </a>
                            <form action="{{ route('abouts.destroy', $bio->id) }}" method="POST" onsubmit="return confirm('Hapus biodata ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600 text-xs font-semibold px-3 py-1.5 rounded-xl bg-red-50 dark:bg-gray-800 transition">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-sm sm:text-base">
                        {{ $bio->description }}
                    </p>
                </div>
                @empty
                <div class="bg-rose-50/20 dark:bg-gray-900 p-6 rounded-3xl border border-dashed border-rose-200 dark:border-gray-800 text-center">
                    <p class="text-gray-400 text-sm italic">Belum ada Biodata Singkat.</p>
                </div>
                @endforelse
            </div>

            <!-- Riwayat Pendidikan -->
            <div class="mb-12 bg-gray-50 dark:bg-gray-900 p-6 sm:p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                <h3 class="text-lg sm:text-xl font-bold mb-6 text-rose-600 flex items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i> Riwayat Pendidikan
                </h3>
                
                <div class="relative border-l-2 border-rose-200 dark:border-gray-700 ml-4 space-y-8">
                    @forelse($abouts->where('category', 'Pendidikan') as $edu)
                    <div class="relative pl-6 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-rose-600 rounded-full border-4 border-white dark:border-gray-900"></div>
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                            <div>
                                <h4 class="text-sm sm:text-base font-bold text-gray-900 dark:text-white">{{ $edu->title }}</h4>
                                @if($edu->year)
                                <span class="text-xs font-semibold text-rose-500">{{ $edu->year }}</span>
                                @endif
                            </div>
                            <div class="mt-2 sm:mt-0 flex items-center gap-2">
                                <a href="{{ route('abouts.edit', $edu->id) }}" class="text-amber-500 hover:text-amber-600 text-xs font-semibold px-2.5 py-1 rounded-lg bg-amber-50 dark:bg-gray-800 transition">Edit</a>
                                <form action="{{ route('abouts.destroy', $edu->id) }}" method="POST" onsubmit="return confirm('Hapus riwayat pendidikan ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 text-xs font-semibold px-2.5 py-1 rounded-lg bg-red-50 dark:bg-gray-800 transition">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-gray-400 text-sm italic pl-6">Belum ada riwayat pendidikan.</p>
                    @endforelse
                </div>
            </div>

            <!-- Minat, PKL, & Cita-Cita -->
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
                        <h3 class="text-base sm:text-lg font-bold text-gray-900 dark:text-white mt-2">{{ $item->title }}</h3>
                        @if($item->description)
                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-300 mt-2 leading-relaxed">{{ $item->description }}</p>
                        @endif
                    </div>
                    <div class="mt-6 pt-4 border-t border-rose-100 dark:border-gray-800 flex items-center gap-3">
                        <a href="{{ route('abouts.edit', $item->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-2 rounded-xl transition">Edit</a>
                        <form action="{{ route('abouts.destroy', $item->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus data ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2 rounded-xl transition">Delete</button>
                        </form>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- FORM INPUT ABOUT ME BARU -->
    <section id="form-about" class="py-16 px-6 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-xl sm:text-2xl font-bold mb-2">Form Tambah Info About Me</h2>
            </div>
            <div class="bg-white dark:bg-gray-950 rounded-3xl p-6 sm:p-8 border border-rose-100 dark:border-gray-800 shadow-sm">
                <form action="{{ route('abouts.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold mb-2">Kategori</label>
                        <select name="category" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <option value="Biodata Singkat">Biodata Singkat</option>
                            <option value="Pendidikan">Riwayat Pendidikan</option>
                            <option value="Minat & Teknologi">Minat & Bidang Teknologi</option>
                            <option value="Pengalaman PKL">Pengalaman PKL</option>
                            <option value="Cita-cita">Cita-cita</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Judul / Nama Sekolah / Minat</label>
                        <input type="text" name="title" required placeholder="Contoh: SMKN 2 Banjarmasin / UI/UX Design" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Tahun / Tanggal (Opsional)</label>
                        <input type="text" name="year" placeholder="Contoh: 2023 - 2026" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Deskripsi</label>
                        <textarea name="description" rows="3" placeholder="Tuliskan deskripsi..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md text-sm">Simpan Data</button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: SKILLS -->
    <section id="skills" class="py-20 px-6 md:px-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                <h2 class="text-2xl sm:text-3xl font-bold">Hard & Soft Skills</h2>
                <a href="#form-skill" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Skill
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="bg-white dark:bg-gray-950 p-6 sm:p-8 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800">
                    <h3 class="text-lg sm:text-xl font-bold text-rose-600 mb-6"><i class="fa-solid fa-code mr-2"></i> Hard Skills</h3>
                    <div class="space-y-6">
                        @forelse($skills->where('category', 'hard') as $skill)
                        <div class="space-y-2 border-b border-gray-100 dark:border-gray-900 pb-4">
                            <div class="flex justify-between text-xs sm:text-sm font-semibold">
                                <span>{{ $skill->name }}</span>
                                <span class="text-rose-600">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-rose-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                            </div>
                            <div class="flex items-center gap-2 pt-2">
                                <a href="{{ route('skills.edit', $skill->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-1.5 rounded-lg transition">Edit</a>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus skill ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-1.5 rounded-lg transition">Delete</button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-sm text-gray-400 italic">Belum ada hard skills.</p>
                        @endforelse
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-950 p-6 sm:p-8 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800">
                    <h3 class="text-lg sm:text-xl font-bold text-rose-600 mb-6"><i class="fa-solid fa-users mr-2"></i> Soft Skills</h3>
                    <div class="space-y-6">
                        @forelse($skills->where('category', 'soft') as $skill)
                        <div class="space-y-2 border-b border-gray-100 dark:border-gray-900 pb-4">
                            <div class="flex justify-between text-xs sm:text-sm font-semibold">
                                <span>{{ $skill->name }}</span>
                                <span class="text-rose-600">{{ $skill->percentage }}%</span>
                            </div>
                            <div class="w-full bg-gray-200 dark:bg-gray-800 h-2.5 rounded-full overflow-hidden">
                                <div class="bg-rose-600 h-2.5 rounded-full" style="width: {{ $skill->percentage }}%"></div>
                            </div>
                            <div class="flex items-center gap-2 pt-2">
                                <a href="{{ route('skills.edit', $skill->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-1.5 rounded-lg transition">Edit</a>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus skill ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-1.5 rounded-lg transition">Delete</button>
                                </form>
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

    <!-- FORM INPUT SKILL BARU -->
    <section id="form-skill" class="py-16 px-6 bg-white dark:bg-gray-950">
        <div class="max-w-xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-xl sm:text-2xl font-bold mb-2">Form Tambah Skill Baru</h2>
            </div>
            <div class="bg-rose-50/40 dark:bg-gray-900 rounded-3xl p-6 sm:p-8 border border-rose-100 dark:border-gray-800">
                <form action="{{ route('skills.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold mb-2">Nama Skill</label>
                        <input type="text" name="name" required placeholder="Contoh: Laravel & PHP" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Kategori Skill</label>
                        <select name="category" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                            <option value="hard">Hard Skills</option>
                            <option value="soft">Soft Skills</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Persentase (0 - 100)</label>
                        <input type="number" min="0" max="100" name="percentage" required placeholder="Contoh: 85" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md text-sm">Simpan Skill</button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: SERTIFIKAT DAN PRESTASI (#prestasi) -->
    <section id="prestasi" class="py-20 px-6 md:px-20 bg-white dark:bg-gray-950">
        <div class="max-w-6xl mx-auto">
            <div class="mb-10 flex flex-col md:flex-row justify-between items-center gap-4">
                <h2 class="text-2xl sm:text-3xl font-bold text-rose-600">Sertifikat & Prestasi</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($certificates ?? [] as $certificate)
                <div class="bg-gray-50 dark:bg-gray-900 p-6 rounded-2xl shadow-sm border border-rose-100 dark:border-gray-800 flex flex-col justify-between h-full group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-rose-50 dark:bg-gray-800 text-rose-600 rounded-xl text-xl flex-shrink-0">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="space-y-1 w-full">
                            <h4 class="font-bold text-base sm:text-lg group-hover:text-rose-600 transition">{{ $certificate->title }}</h4>
                            <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400">{{ $certificate->description }}</p>
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

    <!-- SECTION: PROJECTS -->
    <section id="projects" class="py-20 px-6 bg-rose-50/30 dark:bg-gray-950">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
                <h2 class="text-2xl sm:text-3xl font-bold text-rose-600">My Projects</h2>
                <a href="#form-project" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Project
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects ?? [] as $project)
                <div class="bg-white dark:bg-gray-900 rounded-3xl shadow-md overflow-hidden border border-rose-100 dark:border-gray-800 flex flex-col justify-between h-full group">
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
                            <h3 class="text-base sm:text-lg font-bold group-hover:text-rose-600 transition">{{ $project->title }}</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-xs sm:text-sm line-clamp-2">{{ $project->description }}</p>
                            @if($project->technologies)
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                @foreach(explode(',', $project->technologies) as $tech)
                                    <span class="px-2.5 py-0.5 bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-rose-400 rounded-full text-xs font-medium">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 flex items-center gap-3 border-t border-rose-50 dark:border-gray-800">
                        <a href="{{ route('projects.edit', $project->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-2.5 rounded-xl transition">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus project ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2.5 rounded-xl transition">Delete</button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-16 bg-white dark:bg-gray-900 rounded-3xl border-2 border-dashed border-rose-200 dark:border-gray-800 p-8">
                    <p class="text-gray-400 text-sm italic">Belum ada project yang ditambahkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION: EXPERIENCE (#experience) -->
    <section id="experience" class="py-20 px-6 md:px-20 bg-white dark:bg-gray-950">
        <div class="max-w-4xl mx-auto">
            <div class="mb-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-rose-600">Pengalaman & Experience</h2>
            </div>
            <div class="border-l-2 border-rose-200 dark:border-gray-800 ml-4 space-y-10 pl-6">
                @forelse($experiences ?? [] as $experience)
                <div class="relative bg-gray-50/50 dark:bg-gray-900/50 p-6 rounded-2xl border border-rose-100 dark:border-gray-800 shadow-sm">
                    <div class="absolute -left-[37px] top-6 w-4 h-4 bg-rose-600 rounded-full border-4 border-white dark:border-gray-950"></div>
                    <span class="text-xs font-semibold text-rose-500 uppercase tracking-wider">{{ $experience->period }}</span>
                    <h3 class="text-base sm:text-lg font-bold mt-1">{{ $experience->title }}</h3>
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 mt-2">{{ $experience->description }}</p>
                </div>
                @empty
                <div class="text-center py-8 bg-gray-50 dark:bg-gray-900 rounded-2xl border border-dashed border-rose-200 dark:border-gray-800 p-6">
                    <p class="text-gray-400 text-sm italic">Belum ada data pengalaman yang ditambahkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- SECTION: KESAN & PESAN (#kesan-pesan) -->
    <section id="kesan-pesan" class="py-20 px-6 bg-rose-50/20 dark:bg-gray-900">
        <div class="max-w-xl mx-auto space-y-8">
            <div class="space-y-4">
                <h2 class="text-xl sm:text-2xl font-bold text-center mb-6 text-rose-600">Kesan & Pesan Pengunjung</h2>
                
                @forelse($messages ?? [] as $msg)
                <div class="bg-white dark:bg-gray-950 p-5 rounded-2xl border border-rose-100 dark:border-gray-800 shadow-sm relative">
                    <div class="flex justify-between items-start mb-2">
                        <h4 class="font-bold text-rose-600 text-xs sm:text-sm"><i class="fa-solid fa-user-circle mr-1"></i> {{ $msg->name }}</h4>
                        <span class="text-[10px] sm:text-xs text-gray-400">{{ $msg->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 dark:text-gray-300">{{ $msg->message }}</p>
                </div>
                @empty
                <div class="text-center py-6 bg-white dark:bg-gray-950 rounded-2xl border border-dashed border-rose-200 dark:border-gray-800">
                    <p class="text-xs sm:text-sm text-gray-400 italic">Belum ada kesan & pesan yang dikirim.</p>
                </div>
                @endforelse
            </div>

            <!-- FORMULIR INPUT KESAN & PESAN -->
            <div class="bg-white dark:bg-gray-950 p-6 sm:p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                <h3 class="text-base sm:text-lg font-bold mb-4 text-center">Tuliskan Kesan & Pesan Anda</h3>
                <form action="{{ route('messages.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="name" required placeholder="Nama Anda" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-xs sm:text-sm">
                    </div>
                    <div>
                        <textarea name="message" rows="3" required placeholder="Tuliskan kesan dan pesan Anda..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-xs sm:text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-2.5 rounded-xl text-xs sm:text-sm transition shadow-md">
                        <i class="fa-solid fa-paper-plane mr-1"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: CONTACT (#contact) -->
    <section id="contact" class="py-20 px-6 text-center bg-gray-50 dark:bg-gray-950">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold mb-12 tracking-tight">CONTACT</h2>
            <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
                <!-- Email -->
                <a href="mailto:fitriyusnida8@gmail.com" class="flex items-center space-x-3 bg-rose-600 text-white px-5 sm:px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg text-sm">
                    <i class="fa-solid fa-envelope text-lg"></i>
                    <span class="font-bold">Email</span>
                </a>
                <!-- GitHub -->
                <a href="https://github.com/fitriyusnida8-gif" target="_blank" class="flex items-center space-x-3 bg-gray-900 dark:bg-gray-800 text-white px-5 sm:px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg border border-gray-700 text-sm">
                    <i class="fa-brands fa-github text-lg"></i>
                    <span class="font-bold">GitHub</span>
                </a>
                <!-- Instagram -->
                <a href="https://instagram.com/fiidaysndaa" target="_blank" class="flex items-center space-x-3 bg-gradient-to-tr from-rose-400 via-pink-500 to-rose-600 text-white px-5 sm:px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg text-sm">
                    <i class="fa-brands fa-instagram text-lg"></i>
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
        <p class="text-rose-200/60 text-xs sm:text-sm tracking-widest uppercase">© 2026 Fitri Yusnida - UKK PPLG</p>
    </footer>

    <!-- SCRIPT INTERAKTIF (DARK MODE & MOBILE MENU) -->
    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');
            menu.classList.toggle('hidden');
            
            if (menu.classList.contains('hidden')) {
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