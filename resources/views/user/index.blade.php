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
            <li><a href="#about" class="hover:text-rose-400 transition text-sm">SKILLS</a></li>
            <li><a href="#projects" class="hover:text-rose-600 transition text-sm">PROJECTS</a></li>
            <li><a href="#contact" class="hover:text-rose-600 transition text-sm">CONTACT</a></li>
            <li>
                <a href="{{ route('login') }}" class="px-5 py-2 bg-rose-600 text-white rounded-full hover:bg-rose-700 transition text-sm shadow-md shadow-rose-200">
                    LOGIN
                </a>
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

                <!-- Keahlian Utama (Tech Stack / Skills) -->
                <div class="mt-6 flex flex-wrap justify-center md:justify-start gap-2">
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
    <div class="w-full md:w-3/4 mx-auto">
        <!-- Judul Section -->
        <div class="flex items-center space-x-4 mb-8">
            <h2 class="text-3xl font-bold italic text-gray-900">About Me</h2>
            <div class="h-[2px] bg-gradient-to-r from-rose-500 to-transparent flex-grow max-w-xs"></div>
        </div>

        <div class="space-y-6 text-gray-600 leading-relaxed text-base md:text-lg">
            <!-- 1. Biodata Singkat & Riwayat Pendidikan -->
            <p>
                Halo! Nama saya <span class="text-rose-600 font-semibold">Fitri Yusnida</span>, lahir di <span class="font-medium text-gray-800">[Kota, Tanggal Lahir]</span> dan berdomisili di <span class="font-medium text-gray-800">Banjarmasin</span>. Saat ini saya menempuh pendidikan di <span class="font-semibold text-gray-900">SMKN 2 Banjarmasin</span> pada jurusan <span class="text-rose-600 font-medium">Pengembangan Perangkat Lunak dan Gim (PPLG)</span> <span class="text-sm text-gray-500">(2023 – Sekarang)</span>, setelah sebelumnya menyelesaikan pendidikan di <span class="font-medium text-gray-800">[Nama SMP]</span>.
            </p>

            <!-- 2. Minat dan Bidang Teknologi yang Dikuasai -->
            <div class="border-l-4 border-rose-500 pl-4 bg-rose-50/50 py-3 rounded-r-lg">
                <h3 class="font-semibold text-gray-900 mb-1">Minat & Keahlian Desain</h3>
                <p>
                    Saya memiliki minat mendalam dan berfokus pada bidang <span class="text-rose-600 font-semibold">UI/UX Design</span>. Saya terbiasa merancang antarmuka web maupun aplikasi mobile yang estetis, intuitif, dan ramah pengguna menggunakan <span class="text-rose-600 font-semibold">Figma</span>, mulai dari tahap <em>wireframing</em>, pembuatan <em>design system</em>, hingga <em>prototyping</em> interaktif.
                </p>
            </div>

            <!-- Grid untuk Pengalaman Organisasi & PKL -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <!-- 3. Pengalaman Organisasi / Kepanitiaan -->
                <div class="bg-gray-50 p-5 rounded-xl border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-rose-500"></span>
                        Pengalaman Organisasi & Kepanitiaan
                    </h3>
                    <ul class="list-disc list-inside space-y-1 text-sm md:text-base text-gray-600">
                        <li><span class="font-semibold text-gray-800">[Nama Organisasi, misal: OSIS / Ekskul IT]</span> – Sebagai [Jabatan/Divisi] ([Tahun]).</li>
                        <li><span class="font-semibold text-gray-800">[Nama Kepanitiaan/Event Sekolah]</span> – Bertanggung jawab sebagai [Peran/Divisi] ([Tahun]).</li>
                    </ul>
                </div>

                <!-- 4. Pengalaman PKL (Praktik Kerja Lapangan) -->
                <div class="bg-gray-50 p-5 rounded-xl border border-gray-100">
                    <h3 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-rose-500"></span> Pengalaman PKL </h3>
                <p class="text-sm md:text-base text-gray-600"> Menjalani Praktik Kerja Lapangan di <span class="font-semibold text-gray-800">DPRD Kota Banjarmasin</span> pada bagian <span class="text-rose-600 font-medium">Humas dan Protokol</span> selama <span class="font-medium text-gray-800">2 bulan</span>. Bertanggung jawab dalam <span class="text-rose-600 font-medium">merekap data tamu harian maupun bulanan</span> dengan teliti serta mendukung kelancaran administrasi kehumasan. </p>
                </div>

            <!-- 5. Cita-Cita / Tujuan Karir -->
            <div class="border-l-4 border-rose-500 pl-4 bg-rose-50/50 py-3 rounded-r-lg">
                <h3 class="font-semibold text-gray-900 mb-1">Tujuan Karir</h3>
                <p>
                    Ke depannya, saya bercita-cita menjadi seorang <span class="text-rose-600 font-semibold">UI/UX Designer profesional</span> yang dapat membantu berbagai perusahaan maupun produk digital menciptakan pengalaman pengguna yang bermakna, mudah diakses, dan mampu memecahkan masalah nyata.
                </p>
            </div>
        </div>
    </div>
</section>

    <section id="projects" class="py-20 px-6 bg-rose-50/30">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-rose-600 inline-block relative">My Projects</h2>
                </div>
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

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-1 group-hover:text-rose-600 transition-colors duration-200">
                                {{ $project->title }}
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                    </div>
                @empty
                <div class="col-span-full text-center py-16 bg-white rounded-3xl border-2 border-dashed border-rose-200 p-8">
                    <div class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-folder-open text-rose-400 text-2xl"></i>
                    </div>
                    <h4 class="text-gray-700 font-semibold mb-1">Belum Ada Project</h4>
                </div>
                @endforelse
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