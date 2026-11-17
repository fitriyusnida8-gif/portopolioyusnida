<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitri Yusnida - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900 font-['Inter']">

    <nav class="flex justify-between items-center px-6 md:px-20 py-6 sticky top-0 bg-white/80 backdrop-blur-md z-50 border-b border-rose-50">
        <div class="text-rose-600 font-bold text-xl tracking-tighter">fitriyusnida</div>

        <ul class="hidden md:flex space-x-8 text-gray-600 font-medium items-center">
            <li><a href="#" class="hover:text-rose-400 transition text-sm">HOME</a></li>
            <li><a href="#about" class="hover:text-rose-400 transition text-sm">ABOUT ME</a></li>
            <li><a href="#skills" class="hover:text-rose-400 transition text-sm">SKILLS</a></li>
            <li><a href="#prestasi" class="hover:text-rose-400 transition text-sm">Sertifikat dan Prestasi</a></li>
            <li><a href="#projects" class="hover:text-rose-600 transition text-sm">PROJECTS</a></li>
            <li><a href="#contact" class="hover:text-rose-600 transition text-sm">CONTACT</a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="px-5 py-2 bg-gray-800 text-white rounded-full hover:bg-gray-900 transition text-sm shadow-md">
                        LOGOUT
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <section class="flex flex-col md:flex-row items-center justify-center min-h-screen px-6 md:px-20 py-10 md:py-0 overflow-hidden bg-rose-gradient">
        <div class="w-full md:w-1/2 flex flex-col justify-center text-center md:text-left">
                <h4 class="text-rose-500 font-semibold text-lg flex items-center justify-center md:justify-start gap-2">
                    Halo Semua 👋, Saya
                </h4>
                
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 mt-2 tracking-tight uppercase">
                    FITRI <span class="text-rose-600">YUSNIDA</span>
                </h1>
                
                <h2 class="text-xl sm:text-2xl font-bold text-gray-700 mt-2 tracking-tight uppercase">
                    XII-B <span class="text-rose-600">PENGEMBANGAN PERANGKAT LUNAK DAN GIM</span>
                </h2>

                <!-- Deskripsi Singkat / Personal Branding -->
                <p class="mt-4 text-gray-600 text-base sm:text-lg leading-relaxed">
                     Siswi SMK dengan minat mendalam di bidang <strong>UI/UX Design</strong>. Fokus menciptakan desain antarmuka web dan aplikasi yang rapi, menarik, dan mudah digunakan.
                </p>

                <!-- Keahlian Utama (Tech Stack / Skills) -> DIPERBAIKI DENGAN ID="skills" -->
                <div id="skills" class="mt-6 flex flex-wrap justify-center md:justify-start gap-2 scroll-mt-28">
                    <span class="bg-rose-50 text-rose-600 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200">Laravel</span>
                    <span class="bg-rose-50 text-rose-600 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200">HTML</span>
                    <span class="bg-rose-50 text-rose-600 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200">CSS</span>
                    <span class="bg-rose-50 text-rose-600 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200">DATABASE</span>
                    <span class="bg-rose-50 text-rose-600 text-xs sm:text-sm font-semibold px-3 py-1 rounded-full border border-rose-200">UI/UX Design</span>
                </div>

                <!-- Action Buttons (Lihat Portfolio, CV, & Hubungi Saya) -->
                <div class="mt-8 flex flex-wrap justify-center md:justify-start items-center gap-4">
                    <!-- Tombol Lihat Portfolio -->
                    <a href="#projects" class="bg-rose-600 text-white px-6 py-3 rounded-full font-bold shadow-lg shadow-rose-200 hover:bg-rose-700 transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                        Lihat Portfolio
                    </a>

                    <!-- Tombol Lihat CV -->
                    <a href="#cv" class="bg-gray-100 text-gray-800 border border-gray-300 px-6 py-3 rounded-full font-bold hover:bg-gray-200 transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                        Lihat CV
                    </a>

                    <!-- Tombol Hubungi Saya -->
                    <a href="#contact" class="text-rose-600 font-bold hover:text-rose-700 transition-all text-sm sm:text-base flex items-center gap-1">
                        Hubungi Saya &rarr;
                    </a>
                </div>
            </div>
            
        <div class="w-full md:w-1/2 flex justify-center md:justify-end relative">
            <div class="absolute -inset-4 bg-rose-500/10 rounded-full blur-2xl"></div>
            <img src="{{ asset('images/saya1.jpg') }}" alt="Fitri Yusnida" class="relative w-72 md:w-[450px] drop-shadow-2xl rounded-2xl border-4 border-white">
        </div>
    </section>

    <section id="about" class="bg-white text-gray-900 px-6 md:px-20 py-24 min-h-screen flex items-center">
        <div class="w-full md:w-2/3 mx-auto">
            <div class="flex items-center space-x-4 mb-8">
                <h2 class="text-3xl font-bold italic text-gray-900">About Me</h2>
                <div class="h-[2px] bg-gradient-to-r from-rose-500 to-transparent flex-grow max-w-xs"></div>
            </div>

            <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                <p>Halo! Nama saya <span class="text-rose-600 font-semibold">Fitri Yusnida</span>, seorang siswa di <span class="font-semibold text-gray-900">SMKN 2 Banjarmasin</span> jurusan <span class="text-rose-600">Pengembangan Perangkat Lunak dan Gim.</span> Saya adalah seorang <span class="text-rose-600 font-semibold">Web Developer Enthusiast</span> yang berfokus pada <span class="text-rose-600">pengembangan Frontend dan Backend.</span></p>

                <p class="border-l-4 border-rose-500 pl-4 bg-rose-50/50 py-2">Di sisi <span class="text-rose-600 font-semibold">Frontend,</span> saya mampu merancang desain antarmuka <span class="text-rose-600 font-semibold">(UI/UX)</span> di Figma dan mengimplementasikannya ke dalam kode <span class="text-rose-600">HTML/CSS</span> yang rapi.</p>

                <p class="border-l-4 border-rose-500 pl-4 bg-rose-50/50 py-2">Di sisi <span class="text-rose-600 font-semibold">Backend,</span> saya terus menantang diri untuk berkembang. Pada proyek tugas terakhir, saya berhasil mengimplementasikan <span class="text-rose-600 font-semibold"> framework Laravel,</span> mengelola <span class="text-rose-600 font-semibold">database MySQL,</span> dan menggunakan bahasa <span class="text-rose-600 font-semibold">PHP </span> hingga aplikasi berfungsi penuh dengan sukses. </p>

                <p>Saya adalah seorang pelajar cepat yang adaptif, jujur, dan selalu berkomitmen penuh untuk menyelesaikan setiap tanggung jawab coding hingga tuntas.</p>
            </div>
        </div>
    </section>

    <section id="projects" class="py-20 px-6 bg-rose-50/30">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-rose-600 inline-block relative">My Projects</h2>
                </div>
                <a href="#form-project" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-full font-semibold shadow-md shadow-rose-200 transition-all text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Tambah Project
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects as $project)
                <div class="bg-white rounded-3xl shadow-md overflow-hidden border border-rose-100/60 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-rose-100 flex flex-col justify-between h-full group">
                    <div>
                        <div class="h-52 overflow-hidden bg-rose-50 relative">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-rose-300 bg-rose-50/50 gap-2">
                                    <i class="fa-solid fa-image text-2xl opacity-60"></i>
                                    <span class="text-xs italic font-medium">No Image Available</span>
                                </div>
                            @endif
                        </div>

                        <!-- Bagian Detail Proyek yang Ditambahkan -->
                        <div class="p-6 space-y-3">
                            <!-- Nama Proyek -->
                            <h3 class="text-lg font-bold text-gray-800 line-clamp-1 group-hover:text-rose-600 transition-colors duration-200">
                                {{ $project->title }}
                            </h3>

                            <!-- Deskripsi -->
                            <p class="text-gray-500 text-sm leading-relaxed line-clamp-2">
                                {{ $project->description }}
                            </p>

                            <!-- Tujuan Proyek -->
                            @if($project->objective)
                            <div class="text-xs text-gray-600 pt-1">
                                <span class="font-semibold text-gray-700">🎯 Tujuan:</span> 
                                {{ $project->objective }}
                            </div>
                            @endif

                            <!-- Peran dalam Proyek -->
                            @if($project->role)
                            <div class="text-xs text-gray-600">
                                <span class="font-semibold text-gray-700">👤 Peran:</span> 
                                <span class="text-rose-600 font-medium">{{ $project->role }}</span>
                            </div>
                            @endif

                            <!-- Teknologi yang Digunakan -->
                            @if($project->technologies)
                            <div class="flex flex-wrap gap-1.5 pt-1">
                                @foreach(explode(',', $project->technologies) as $tech)
                                    <span class="px-2.5 py-0.5 bg-rose-50 text-rose-600 rounded-full text-xs font-medium">{{ trim($tech) }}</span>
                                @endforeach
                            </div>
                            @endif

                            <!-- Fitur Utama -->
                            @if($project->features)
                            <div class="text-xs text-gray-600 bg-gray-50 p-2.5 rounded-xl">
                                <span class="font-semibold text-gray-800 block mb-0.5">✨ Fitur Utama:</span>
                                <p>{{ $project->features }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="px-6 pb-6">
                        <div class="flex items-center gap-3 pt-4 border-t border-rose-50">
                            <a href="{{ route('projects.edit', $project->id) }}" class="flex-1 text-center bg-amber-500 hover:bg-amber-600 text-white text-xs font-semibold py-2.5 px-4 rounded-xl transition-colors shadow-sm shadow-amber-100 flex items-center justify-center gap-1.5">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Apakah Anda yakin ingin menghapus project ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold py-2.5 px-4 rounded-xl transition-colors shadow-sm shadow-rose-100 flex items-center justify-center gap-1.5">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-16 bg-white rounded-3xl border-2 border-dashed border-rose-200 p-8">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-folder-open text-rose-400 text-2xl"></i>
                    </div>
                    <h4 class="text-gray-700 font-semibold mb-1">Belum Ada Project</h4>
                    <p class="text-gray-400 text-sm italic max-w-sm mx-auto">Klik tombol "Tambah Project" di atas untuk mengisi portofolio kamu.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="form-project" class="py-16 px-6 bg-white">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Form Input Project</h2>
                <p class="text-gray-500 text-sm">Isi judul, gambar, dan deskripsi untuk memperbarui atau menambah project baru.</p>
            </div>

            <div class="bg-rose-50/40 rounded-3xl p-8 border border-rose-100 shadow-sm">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    <!-- 1. Nama Proyek -->
                    <div>
                        <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">Judul Project</label>
                        <input type="text" name="title" id="judul" required
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Masukkan nama proyek...">
                    </div>

                    <!-- 2. Gambar Project -->
                    <div>
                        <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">Gambar Project</label>
                        <input type="file" name="image" id="gambar"
                            class="w-full px-4 py-2 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-600 file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-rose-100 file:text-rose-700 hover:file:bg-rose-200">
                    </div>

                    <!-- 3. Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                        <textarea name="description" id="deskripsi" rows="3" required
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Tuliskan detail project Anda di sini..."></textarea>
                    </div>

                    <!-- 4. Permasalahan yang ingin diselesaikan -->
                    <div>
                        <label for="problem" class="block text-sm font-semibold text-gray-700 mb-2">Permasalahan yang Ingin Diselesaikan</label>
                        <input type="text" name="problem" id="problem"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Contoh: Proses manual yang lambat dan sering tercecer...">
                    </div>

                    <!-- 5. Tujuan dibuatnya proyek -->
                    <div>
                        <label for="objective" class="block text-sm font-semibold text-gray-700 mb-2">Tujuan Proyek</label>
                        <input type="text" name="objective" id="objective"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Contoh: Membangun sistem digital yang cepat dan efisien...">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- 6. Teknologi yang digunakan -->
                        <div>
                            <label for="technologies" class="block text-sm font-semibold text-gray-700 mb-2">Teknologi yang Digunakan</label>
                            <input type="text" name="technologies" id="technologies"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                                placeholder="Figma, Tailwind CSS, Laravel...">
                        </div>

                        <!-- 7. Peran dalam proyek -->
                        <div>
                            <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">Peran dalam Proyek</label>
                            <input type="text" name="role" id="role"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                                placeholder="UI/UX Designer & Frontend...">
                        </div>
                    </div>

                    <!-- 8. Fitur-Fitur dalam proyek -->
                    <div>
                        <label for="features" class="block text-sm font-semibold text-gray-700 mb-2">Fitur-Fitur Proyek</label>
                        <textarea name="features" id="features" rows="2"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Sebutkan fitur utama, pisahkan dengan koma..."></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- 9. Link Demo proyek -->
                        <div>
                            <label for="demo_url" class="block text-sm font-semibold text-gray-700 mb-2">Link Demo Proyek</label>
                            <input type="url" name="demo_url" id="demo_url"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                                placeholder="https://figma.com/...">
                        </div>

                        <!-- 10. Link Source Code GitHub -->
                        <div>
                            <label for="github_url" class="block text-sm font-semibold text-gray-700 mb-2">Link Source Code GitHub</label>
                            <input type="url" name="github_url" id="github_url"
                                class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                                placeholder="https://github.com/...">
                        </div>
                    </div>

                    <!-- 11. Dokumentasi Proses Pekerjaan -->
                    <div>
                        <label for="process_docs" class="block text-sm font-semibold text-gray-700 mb-2">Dokumentasi Proses Pekerjaan</label>
                        <input type="text" name="process_docs" id="process_docs"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Contoh: Riset -> Wireframe -> High-Fi Design -> Testing...">
                    </div>

                    <!-- 12. Feedback User -->
                    <div>
                        <label for="user_feedback" class="block text-sm font-semibold text-gray-700 mb-2">Feedback User</label>
                        <input type="text" name="user_feedback" id="user_feedback"
                            class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                            placeholder="Contoh: Desain sangat bersih dan mudah dipahami...">
                    </div>

                    <!-- Tombol Simpan -->
                    <div>
                        <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl shadow-md shadow-rose-100 transition-all">
                            Simpan Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="min-h-screen flex flex-col justify-between bg-white">
        <div class="hidden md:block h-12"></div>

        <section id="contact" class="px-6 text-center w-full my-auto">
            <div class="max-w-4xl mx-auto w-full">
                <h2 class="text-4xl font-bold text-gray-900 mb-12 tracking-tight">CONTACT</h2>

                <div class="flex flex-wrap justify-center gap-6">
                    <a href="https://wa.me/6287436314412" target="_blank" class="flex items-center space-x-3 bg-[#25D366] text-white px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span class="font-bold">WhatsApp</span>
                    </a>

                    <a href="https://www.tiktok.com/@fiidaysndaa" target="_blank" class="flex items-center space-x-3 bg-[#010101] text-white px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg shadow-black/20">
                        <i class="fa-brands fa-tiktok text-xl"></i>
                        <span class="font-bold">TikTok</span>
                    </a>

                    <a href="https://instagram.com/fiidaysndaa" target="_blank" class="flex items-center space-x-3 bg-gradient-to-tr from-rose-400 via-pink-500 to-rose-600 text-white px-7 py-3 rounded-xl hover:-translate-y-1 transition shadow-lg">
                        <i class="fa-brands fa-instagram text-xl"></i>
                        <span class="font-bold">Instagram</span>
                    </a>
                </div>
            </div>
        </section>

        <footer class="bg-rose-950 text-white px-6 md:px-20 py-8 text-center w-full">
            <p class="text-rose-200/60 text-sm tracking-widest uppercase">© 2026 Fitri Yusnida</p>
        </footer>
    </div>

</body>
</html>