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

    <ul class="hidden lg:flex space-x-6 text-gray-600 dark:text-gray-300 font-medium items-center text-sm">
        <li><a href="#" class="hover:text-rose-500 transition">HOME</a></li>
        <li><a href="#about" class="hover:text-rose-500 transition">ABOUT</a></li>
        <li><a href="#skills" class="hover:text-rose-500 transition">SKILLS</a></li>
        <li><a href="#prestasi" class="hover:text-rose-500 transition">SERTIFIKAT</a></li>
        <li><a href="#projects" class="hover:text-rose-500 transition">PROJECTS</a></li>
        <li><a href="#experience" class="hover:text-rose-500 transition">EXPERIENCE</a></li>
        <li><a href="#blog" class="hover:text-rose-500 transition">BLOG</a></li>
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
                    <button type="submit" class="px-4 py-2 bg-gray-800 dark:bg-gray-700 text-white rounded-full hover:bg-gray-900 transition shadow-md">
                        LOGOUT
                    </button>
                </form>
            </li>
        </ul>
    </nav>


    <!-- SECTION: HOME / BERANDA (Dinamis dengan Tombol Edit & Tombol Aksi Dipisah) -->
<section class="flex flex-col md:flex-row items-center justify-center min-h-screen px-6 md:px-20 py-10">
    <div class="w-full md:w-1/2 flex flex-col justify-center text-center md:text-left">
        
        <!-- Tombol Edit Profil Khusus Admin -->
        <div class="mb-4 flex justify-center md:justify-start">
            <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold px-4 py-2 rounded-xl transition shadow-sm">
                <i class="fa-solid fa-pen-to-square"></i> Edit Profil Beranda
            </a>
        </div>

        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mt-2 tracking-tight uppercase">
            {{ $profile->name ?? 'FITRI' }} <span class="text-rose-600">{{ Str::afterLast($profile->name ?? 'FITRI YUSNIDA', ' ') ?: 'YUSNIDA' }}</span>
        </h1>
        
        <h2 class="text-xl sm:text-2xl font-bold text-gray-700 dark:text-gray-300 mt-2 tracking-tight uppercase">
            {{ $profile->class_name ?? 'XII-B' }} <span class="text-rose-600">{{ $profile->major ?? 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM' }}</span>
        </h2>

        <p class="mt-4 text-gray-600 dark:text-gray-400 text-base sm:text-lg leading-relaxed">
            {!! $profile->description ?? 'Siswi SMK dengan minat mendalam di bidang <strong>UI/UX Design</strong>. Fokus menciptakan desain antarmuka web dan aplikasi yang rapi, menarik, dan mudah digunakan.' !!}
        </p>

        <!-- Keahlian Utama -->
        <div class="mt-6 flex flex-wrap justify-center md:justify-start gap-2">
            <span class="bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-rose-400 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200 dark:border-gray-700">
                {{ $profile->skill_badge ?? 'UI/UX Design' }}
            </span>
        </div>

        <!-- Action Buttons (Dipisah secara rapi) -->
        <div class="mt-8 flex flex-wrap justify-center md:justify-start items-center gap-4">
            <a href="#projects" class="bg-rose-600 text-white px-6 py-3 rounded-full font-bold shadow-lg shadow-rose-200 dark:shadow-none hover:bg-rose-700 transition-all text-sm sm:text-base">
                Lihat Portfolio
            </a>
            <a href="#cv" class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-200 border border-gray-300 dark:border-gray-700 px-6 py-3 rounded-full font-bold hover:bg-gray-200 dark:hover:bg-gray-700 transition-all text-sm sm:text-base">
                Lihat CV
            </a>
            <a href="#contact" class="bg-rose-50 dark:bg-gray-800 text-rose-600 dark:text-rose-400 border border-rose-200 dark:border-gray-700 px-6 py-3 rounded-full font-bold hover:bg-rose-100 dark:hover:bg-gray-700 transition-all text-sm sm:text-base flex items-center gap-1">
                Hubungi Saya &rarr;
            </a>
        </div>
    </div>
        
    <div class="w-full md:w-1/2 flex justify-center md:justify-end relative mt-10 md:mt-0">
        <div class="absolute -inset-4 bg-rose-500/10 rounded-full blur-2xl"></div>
        <img src="{{ isset($profile->image) ? asset('storage/' . $profile->image) : asset('images/saya1.jpg') }}" alt="Fitri Yusnida" class="relative w-72 md:w-[420px] drop-shadow-2xl rounded-2xl border-4 border-white dark:border-gray-800 object-cover">
    </div>
</section>

   <!-- SECTION: ABOUT ME (Biodata Singkat Dinamis dengan CRUD, Timeline Pendidikan, & Lainnya) -->
    <section id="about" class="bg-white dark:bg-gray-950 px-6 md:px-20 py-24">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row items-center justify-between mb-10 gap-4">
                <div class="flex items-center space-x-4 w-full">
                    <h2 class="text-3xl font-bold italic">About Me</h2>
                    <div class="h-[2px] bg-gradient-to-r from-rose-500 to-transparent flex-grow max-w-xs"></div>
                </div>
                <a href="#form-about" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm whitespace-nowrap">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Info
                </a>
            </div>

            <!-- BAGIAN 0: BIODATA SINGKAT (Dinamis & Bisa Diedit/Dihapus) -->
            <div class="mb-8 space-y-4">
                @forelse($abouts->where('category', 'Biodata Singkat') as $bio)
                <div class="bg-rose-50/40 dark:bg-gray-900 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm relative group">
                    <div class="flex justify-between items-center mb-3">
                        <h3 class="text-xl font-bold text-rose-600 flex items-center gap-2">
                            <i class="fa-solid fa-user-pen"></i> {{ $bio->title ?: 'Biodata Singkat' }}
                        </h3>
                        <!-- Tombol Edit & Hapus Biodata -->
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
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-base sm:text-lg">
                        {{ $bio->description }}
                    </p>
                </div>
                @empty
                <div class="bg-rose-50/20 dark:bg-gray-900 p-6 rounded-3xl border border-dashed border-rose-200 dark:border-gray-800 text-center">
                    <p class="text-gray-400 text-sm italic">Belum ada Biodata Singkat. Silakan tambahkan melalui tombol di atas.</p>
                </div>
                @endforelse
            </div>

            <!-- BAGIAN 1: RIWAYAT PENDIDIKAN (TIMELINE) -->
            <div class="mb-12 bg-gray-50 dark:bg-gray-900 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
                <h3 class="text-xl font-bold mb-6 text-rose-600 flex items-center gap-2">
                    <i class="fa-solid fa-graduation-cap"></i> Riwayat Pendidikan
                </h3>
                
                <div class="relative border-l-2 border-rose-200 dark:border-gray-700 ml-4 space-y-8">
                    @forelse($abouts->where('category', 'Pendidikan') as $edu)
                    <div class="relative pl-6 group">
                        <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-rose-600 rounded-full border-4 border-white dark:border-gray-900"></div>
                        
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                            <div>
                                <h4 class="text-base font-bold text-gray-900 dark:text-white">{{ $edu->title }}</h4>
                                @if($edu->year)
                                <span class="text-xs font-semibold text-rose-500">{{ $edu->year }}</span>
                                @endif
                            </div>
                            
                            <div class="mt-2 sm:mt-0 flex items-center gap-2">
                                <a href="{{ route('abouts.edit', $edu->id) }}" class="text-amber-500 hover:text-amber-600 text-xs font-semibold px-2.5 py-1 rounded-lg bg-amber-50 dark:bg-gray-800 transition">
                                    <i class="fa-solid fa-pen"></i> Edit
                                </a>
                                <form action="{{ route('abouts.destroy', $edu->id) }}" method="POST" onsubmit="return confirm('Hapus riwayat pendidikan ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 text-xs font-semibold px-2.5 py-1 rounded-lg bg-red-50 dark:bg-gray-800 transition">
                                        <i class="fa-solid fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-gray-400 text-sm italic pl-6">Belum ada riwayat pendidikan yang ditambahkan.</p>
                    @endforelse
                </div>
            </div>

            <!-- BAGIAN 2: MINAT, PKL, & CITA-CITA (GRID CARD) -->
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

                    <div class="mt-6 pt-4 border-t border-rose-100 dark:border-gray-800 flex items-center gap-3">
                        <a href="{{ route('abouts.edit', $item->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-2 rounded-xl transition">
                            <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                        </a>
                        <form action="{{ route('abouts.destroy', $item->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus data ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2 rounded-xl transition">
                                <i class="fa-solid fa-trash mr-1"></i> Delete
                            </button>
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
                <h2 class="text-2xl font-bold mb-2">Form Tambah Info About Me</h2>
                <p class="text-gray-500 text-sm">Pilih kategori dan masukkan data sesuai ketentuan.</p>
            </div>
            <div class="bg-white dark:bg-gray-950 rounded-3xl p-8 border border-rose-100 dark:border-gray-800 shadow-sm">
                <form action="{{ route('abouts.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold mb-2">Kategori</label>
                            <select name="category" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
    <option value="Biodata Singkat">Biodata Singkat</option>
    <option value="Pendidikan">Riwayat Pendidikan (Nama Sekolah & Tahun)</option>
    <option value="Minat & Teknologi">Minat & Bidang Teknologi (Apa yang diminati)</option>
    <option value="Pengalaman PKL">Pengalaman PKL (Tanggal, Bulan, Tahun & Deskripsi)</option>
    <option value="Cita-cita">Cita-cita & Tujuan Karir (Cita-cita aja)</option>
</select>
                        
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Nama Sekolah / Minat / Posisi / Cita-cita</label>
                        <input type="text" name="title" required placeholder="Contoh: SMKN 2 Banjarmasin / UI/UX Design / Software Engineer" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Tahun / Tanggal, Bulan, Tahun (Opsional untuk Pendidikan/PKL)</label>
                        <input type="text" name="year" placeholder="Contoh: 2023 - 2026 atau 15 Januari 2025" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Deskripsi (Khusus Pengalaman PKL)</label>
                        <textarea name="description" rows="3" placeholder="Tuliskan deskripsi pengalaman PKL di sini..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Data</button>
                </form>
            </div>
        </div>
    </section>


    <!-- SECTION: SKILLS (Hard & Soft Skills dengan CRUD) -->
    <section id="skills" class="py-20 px-6 md:px-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                <h2 class="text-3xl font-bold">Hard & Soft Skills</h2>
                <a href="#form-skill" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Skill
                </a>
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
                            <!-- Tombol Edit & Delete -->
                            <div class="flex items-center gap-2 pt-2">
                                <a href="{{ route('skills.edit', $skill->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-1.5 rounded-lg transition">
                                    <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                                </a>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus skill ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-1.5 rounded-lg transition">
                                        <i class="fa-solid fa-trash mr-1"></i> Delete
                                    </button>
                                </form>
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
                            <!-- Tombol Edit & Delete -->
                            <div class="flex items-center gap-2 pt-2">
                                <a href="{{ route('skills.edit', $skill->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-1.5 rounded-lg transition">
                                    <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                                </a>
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus skill ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-1.5 rounded-lg transition">
                                        <i class="fa-solid fa-trash mr-1"></i> Delete
                                    </button>
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
                <h2 class="text-2xl font-bold mb-2">Form Tambah Skill Baru</h2>
                <p class="text-gray-500 text-sm">Tambahkan kemampuan hard atau soft skill kamu.</p>
            </div>
            <div class="bg-rose-50/40 dark:bg-gray-900 rounded-3xl p-8 border border-rose-100 dark:border-gray-800">
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
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Skill</button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: PROJECTS -->
    <section id="projects" class="py-20 px-6 bg-rose-50/30 dark:bg-gray-950">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
                <h2 class="text-3xl font-bold text-rose-600">My Projects</h2>
                <a href="#form-project" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Project
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects as $project)
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

    <!-- FORM INPUT PROJECT -->
    <section id="form-project" class="py-16 px-6 bg-white dark:bg-gray-950">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2 text-gray-800 dark:text-white">Form Input Project</h2>
                <p class="text-gray-500 text-sm">Tambah informasi lengkap portofolio proyek baru Anda.</p>
            </div>
            <div class="bg-rose-50/40 dark:bg-gray-900 rounded-3xl p-8 border border-rose-100 dark:border-gray-800 shadow-xl shadow-rose-100/40">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    <!-- 1. Nama Proyek -->
                    <div>
                        <label for="judul" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Judul / Nama Proyek</label>
                        <input type="text" name="title" id="judul" required
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Masukkan nama proyek...">
                    </div>

                    <!-- 2. Gambar / Screenshot Aplikasi -->
                    <div>
                        <label for="gambar" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Gambar / Screenshot Proyek</label>
                        <input type="file" name="image" id="gambar"
                            class="w-full px-4 py-2 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-rose-100 file:text-rose-700 hover:file:bg-rose-200">
                    </div>

                    <!-- 3. Deskripsi Proyek -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Deskripsi Proyek</label>
                        <textarea name="description" id="deskripsi" rows="3" required
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Tuliskan deskripsi singkat project..."></textarea>
                    </div>

                    <!-- 4. Permasalahan yang ingin diselesaikan -->
                    <div>
                        <label for="problem" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Permasalahan yang Ingin Diselesaikan</label>
                        <input type="text" name="problem" id="problem"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Contoh: Proses manual yang lambat dan sering tercecer...">
                    </div>

                    <!-- 5. Tujuan dibuatnya proyek -->
                    <div>
                        <label for="objective" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Tujuan Proyek</label>
                        <input type="text" name="objective" id="objective"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Contoh: Membangun sistem digital yang cepat dan efisien...">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- 6. Teknologi yang digunakan -->
                        <div>
                            <label for="technologies" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Teknologi yang Digunakan</label>
                            <input type="text" name="technologies" id="technologies"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                                placeholder="Figma, Tailwind CSS, Laravel...">
                        </div>

                        <!-- 7. Peran dalam proyek -->
                        <div>
                            <label for="role" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Peran dalam Proyek</label>
                            <input type="text" name="role" id="role"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                                placeholder="UI/UX Designer & Frontend...">
                        </div>
                    </div>

                    <!-- 8. Fitur-Fitur dalam proyek -->
                    <div>
                        <label for="features" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Fitur-Fitur Proyek</label>
                        <textarea name="features" id="features" rows="2"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Sebutkan fitur utama, pisahkan dengan koma..."></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- 9. Link Demo proyek -->
                        <div>
                            <label for="demo_url" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Link Demo Proyek</label>
                            <input type="url" name="demo_url" id="demo_url"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                                placeholder="https://figma.com/...">
                        </div>

                        <!-- 10. Link Source Code GitHub -->
                        <div>
                            <label for="github_url" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Link Source Code GitHub</label>
                            <input type="url" name="github_url" id="github_url"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                                placeholder="https://github.com/...">
                        </div>
                    </div>

                    <!-- 11. Dokumentasi Proses Pekerjaan -->
                    <div>
                        <label for="process_docs" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Dokumentasi Proses Pekerjaan</label>
                        <input type="text" name="process_docs" id="process_docs"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Contoh: Riset -> Wireframe -> High-Fi Design -> Testing...">
                    </div>

                    <!-- 12. Feedback User -->
                    <div>
                        <label for="user_feedback" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Feedback User</label>
                        <input type="text" name="user_feedback" id="user_feedback"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white dark:bg-gray-800 text-gray-800 dark:text-white" 
                            placeholder="Contoh: Desain sangat bersih dan mudah dipahami...">
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex gap-4 pt-4">
                        <a href="{{ route('dashboard') }}" class="w-1/3 bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-600 dark:text-gray-300 font-semibold py-3 rounded-xl text-center transition-all flex items-center justify-center">
                            Batal
                        </a>
                        <button type="submit" class="w-2/3 bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl shadow-md shadow-rose-100 dark:shadow-none transition-all">
                            Simpan Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: SERTIFIKAT DAN PRESTASI -->
<section id="prestasi" class="py-20 px-6 md:px-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
            <h2 class="text-3xl font-bold text-rose-600">Sertifikat & Prestasi</h2>
            <a href="#form-certificate" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm">
                <i class="fa-solid fa-plus mr-2"></i>Tambah Sertifikat
            </a>
        </div>

        <!-- Pastikan grid ini memiliki md:grid-cols-2 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($certificates as $certificate)
            <div class="bg-white dark:bg-gray-950 p-6 rounded-2xl shadow-sm border border-rose-100 dark:border-gray-800 flex flex-col justify-between h-full group">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-rose-50 dark:bg-gray-900 text-rose-600 rounded-xl text-xl flex-shrink-0">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="space-y-1 w-full">
                        <h4 class="font-bold text-lg group-hover:text-rose-600 transition">{{ $certificate->title }}</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $certificate->description }}</p>
                        
                        @if($certificate->image)
                        <div class="mt-3 w-full h-48 rounded-xl overflow-hidden border border-rose-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 flex items-center justify-center">
                            <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="w-full h-full object-contain">
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Tombol Edit & Delete Berjajar -->
                <div class="mt-4 pt-3 border-t border-rose-50 dark:border-gray-800 flex items-center gap-3">
                    <a href="{{ route('certificates.edit', $certificate->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-2.5 rounded-xl transition">
                        <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                    </a>
                    <form action="{{ route('certificates.destroy', $certificate->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus sertifikat ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2.5 rounded-xl transition">
                            <i class="fa-solid fa-trash mr-1"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12 bg-white dark:bg-gray-950 rounded-3xl border-2 border-dashed border-rose-200 dark:border-gray-800 p-8">
                <p class="text-gray-400 text-sm italic">Belum ada sertifikat atau prestasi yang ditambahkan.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

    <!-- FORM INPUT SERTIFIKAT -->
    <section id="form-certificate" class="py-16 px-6 bg-white dark:bg-gray-950">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold mb-2">Form Input Sertifikat & Prestasi</h2>
                <p class="text-gray-500 text-sm">Tambahkan penghargaan atau sertifikat baru ke portofolio Anda.</p>
            </div>
            <div class="bg-rose-50/40 dark:bg-gray-900 rounded-3xl p-8 border border-rose-100 dark:border-gray-800">
                <form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold mb-2">Judul Penghargaan / Sertifikat</label>
                        <input type="text" name="title" required placeholder="Contoh: Juara 1 Lomba Web Design" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Deskripsi / Tingkat & Tahun</label>
                        <input type="text" name="description" required placeholder="Contoh: Tingkat Kota Banjarmasin (2025)" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Foto Sertifikat / Bukti (Opsional)</label>
                        <input type="file" name="image" class="w-full px-4 py-2 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Sertifikat</button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: PENGALAMAN & EXPERIENCE (Dinamis dengan CRUD) -->
    <section id="experience" class="py-20 px-6 md:px-20 bg-white dark:bg-gray-950">
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
                <h2 class="text-3xl font-bold text-rose-600">Pengalaman & PKL</h2>
                <a href="#form-experience" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md transition-all text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Pengalaman
                </a>
            </div>

            <div class="border-l-2 border-rose-200 dark:border-gray-800 ml-4 space-y-10 pl-6">
                @forelse($experiences as $experience)
                <div class="relative bg-gray-50/50 dark:bg-gray-900/50 p-6 rounded-2xl border border-rose-100 dark:border-gray-800 shadow-sm">
                    <div class="absolute -left-[37px] top-6 w-4 h-4 bg-rose-600 rounded-full border-4 border-white dark:border-gray-950"></div>
                    
                    <span class="text-xs font-semibold text-rose-500 uppercase tracking-wider">{{ $experience->period }}</span>
                    <h3 class="text-lg font-bold mt-1">{{ $experience->title }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{ $experience->description }}</p>

                    <!-- Tombol Edit & Delete Berjajar -->
                    <div class="mt-4 pt-3 border-t border-rose-100 dark:border-gray-800 flex items-center gap-3">
                        <a href="{{ route('experiences.edit', $experience->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-2 rounded-xl transition">
                            <i class="fa-solid fa-pen-to-square mr-1"></i> Edit
                        </a>
                        <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Hapus pengalaman ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2 rounded-xl transition">
                                <i class="fa-solid fa-trash mr-1"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="text-center py-8 bg-gray-50 dark:bg-gray-900 rounded-2xl border border-dashed border-rose-200 dark:border-gray-800 p-6">
                    <p class="text-gray-400 text-sm italic">Belum ada data pengalaman atau PKL yang ditambahkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- FORM INPUT PENGALAMAN BARU -->
    <section id="form-experience" class="py-16 px-6 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold mb-2">Form Tambah Pengalaman Baru</h2>
                <p class="text-gray-500 text-sm">Tambahkan riwayat PKL atau pengalaman organisasi kamu.</p>
            </div>
            <div class="bg-white dark:bg-gray-950 rounded-3xl p-8 border border-rose-100 dark:border-gray-800 shadow-sm">
                <form action="{{ route('experiences.store') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold mb-2">Bulan & Tahun (Periode)</label>
                        <input type="text" name="period" required placeholder="Contoh: Januari - Maret 2025" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Judul Pengalaman / Posisi</label>
                        <input type="text" name="title" required placeholder="Contoh: Praktik Kerja Lapangan (PKL) - Software House" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2">Deskripsi Pekerjaan / Peran</label>
                        <textarea name="description" rows="4" required placeholder="Contoh: Membantu pembuatan front-end sistem informasi..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Pengalaman</button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECTION: CV DIGITAL (Tombol Aksi & Upload Saja) -->
<section id="cv" class="py-20 px-6 bg-rose-50/50 dark:bg-gray-900">
    <div class="max-w-xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-3 text-rose-600">Curriculum Vitae (CV)</h2>
        <p class="text-gray-500 dark:text-gray-400 mb-8 text-sm">Unduh CV resmi saya atau perbarui file melalui panel di bawah ini.</p>

        <!-- Jika CV sudah ada: Tampilkan Tombol Unduh & Delete -->
        @if(isset($profile) && $profile->cv_file)
            <div class="bg-white dark:bg-gray-950 p-6 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800 mb-6 flex flex-wrap justify-center items-center gap-3">
                <!-- Tombol Unduh -->
                <a href="{{ asset('storage/' . $profile->cv_file) }}" download="CV_Fitri_Yusnida" class="inline-flex items-center gap-2 bg-rose-600 text-white px-6 py-3 rounded-xl font-semibold shadow-sm hover:bg-rose-700 transition text-sm">
                    <i class="fa-solid fa-download"></i> Unduh CV
                </a>

                <!-- Tombol Buka Tab Baru -->
                <a href="{{ asset('storage/' . $profile->cv_file) }}" target="_blank" class="inline-flex items-center gap-2 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 px-6 py-3 rounded-xl font-semibold hover:bg-gray-200 transition text-sm">
                    <i class="fa-solid fa-up-right-from-square"></i> Lihat CV
                </a>

                <!-- Tombol Delete CV -->
                <form action="{{ route('cv.delete') }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus file CV ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-xl font-semibold transition text-sm">
                        <i class="fa-solid fa-trash"></i> Hapus
                    </button>
                </form>
            </div>
        @else
            <div class="bg-white dark:bg-gray-950 p-6 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800 mb-6 text-center">
                <p class="text-sm text-gray-400 italic">Belum ada file CV yang diunggah.</p>
            </div>
        @endif

        <!-- Form Tambah / Ganti (Edit) File CV -->
        <div class="bg-white dark:bg-gray-950 p-6 rounded-3xl shadow-sm border border-rose-100 dark:border-gray-800 text-left">
            <h3 class="text-base font-bold text-gray-800 dark:text-gray-100 mb-3">
                <i class="fa-solid fa-pen-to-square text-rose-600 mr-1"></i>
                {{ (isset($profile) && $profile->cv_file) ? 'Ganti File CV' : 'Upload File CV Baru' }}
            </h3>
            <form action="{{ route('cv.upload') }}" method="POST" enctype="multipart/form-data" class="flex flex-col sm:flex-row items-center gap-3">
                @csrf
                <input type="file" name="cv_file" accept=".pdf,.jpg,.jpeg,.png" required class="w-full px-4 py-2 rounded-xl border border-rose-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-sm">
                <button type="submit" class="w-full sm:w-auto whitespace-nowrap bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-2.5 rounded-xl transition text-sm shadow-sm">
                    <i class="fa-solid fa-upload mr-1"></i> Simpan
                </button>
            </form>
            <p class="text-xs text-gray-400 mt-2">*Format: PDF, JPG, JPEG, PNG (Maks. 5MB).</p>
        </div>
    </div>
</section>

    
    <!-- SECTION: BLOG PENGEMBANG / CATATAN NGODING -->
    <section id="blog" class="py-20 px-6 md:px-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-rose-600 mb-10 text-center">Catatan Ngoding & Blog</h2>
            <div class="space-y-4">
                <div class="bg-white dark:bg-gray-950 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800">
                    <span class="text-xs text-rose-500 font-semibold">10 Februari 2026</span>
                    <h3 class="text-lg font-bold mt-1">Tips Mengatasi Error Migration di Laravel</h3>
                    <p class="text-sm text-gray-500 mt-2">Catatan singkat bagaimana cara melakukan rollback dan mengatasi foreign key constraint saat uji coba database...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: FORMULIR KESAN DAN PESAN -->
<section id="kesan-pesan" class="py-20 px-6 bg-white dark:bg-gray-950">
    <div class="max-w-xl mx-auto space-y-8">
        
        <!-- DAFTAR PESAN YANG MASUK (Muncul di atas form) -->
        <div class="space-y-4">
            <h2 class="text-2xl font-bold text-center mb-6">Kesan & Pesan Pengunjung</h2>
            
            @forelse($messages ?? [] as $msg)
            <div class="bg-rose-50/50 dark:bg-gray-900 p-5 rounded-2xl border border-rose-100 dark:border-gray-800 shadow-sm relative group">
                <div class="flex justify-between items-start mb-2">
                    <h4 class="font-bold text-rose-600 text-sm"><i class="fa-solid fa-user-circle mr-1"></i> {{ $msg->name }}</h4>
                    <span class="text-xs text-gray-400">{{ $msg->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-sm text-gray-700 dark:text-gray-300">{{ $msg->message }}</p>

                <!-- Tombol Hapus Pesan (Opsional untuk Admin) -->
                <form action="{{ route('messages.destroy', $msg->id) }}" method="POST" class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition" onsubmit="return confirm('Hapus pesan ini?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-rose-500 hover:text-rose-700 text-xs bg-white dark:bg-gray-800 px-2 py-1 rounded-lg shadow-sm">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
            @empty
            <div class="text-center py-6 bg-gray-50 dark:bg-gray-900 rounded-2xl border border-dashed border-rose-200 dark:border-gray-800">
                <p class="text-sm text-gray-400 italic">Belum ada kesan & pesan yang dikirim.</p>
            </div>
            @endforelse
        </div>

        <!-- FORMULIR INPUT KESAN & PESAN -->
        <div class="bg-rose-50/30 dark:bg-gray-900 p-8 rounded-3xl border border-rose-100 dark:border-gray-800 shadow-sm">
            <h3 class="text-lg font-bold mb-4 text-center">Tuliskan Kesan & Pesan Anda</h3>
            
            <form action="{{ route('messages.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <input type="text" name="name" required placeholder="Nama Anda" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                </div>
                <div>
                    <textarea name="message" rows="3" required placeholder="Tuliskan kesan dan pesan Anda..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm"></textarea>
                </div>
                <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-2.5 rounded-xl text-sm transition shadow-md">
                    <i class="fa-solid fa-paper-plane mr-1"></i> Kirim Pesan
                </button>
            </form>
        </div>

    </div>
</section>


    <!-- SECTION: CONTACT -->
    <section id="contact" class="py-20 px-6 text-center bg-gray-50 dark:bg-gray-900">
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


    <!-- SCRIPT INTERAKTIF DARK MODE -->
    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
    </script>
</body>
</html>