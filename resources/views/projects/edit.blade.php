<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project - Fitri Yusnida</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900 font-['Inter'] min-h-screen flex items-center justify-center py-12 px-6">

    <div class="max-w-3xl w-full bg-white rounded-3xl p-8 border border-rose-100 shadow-xl shadow-rose-100/40">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Edit Project</h2>
            <p class="text-gray-500 text-sm">Ubah informasi lengkap project kamu di bawah ini.</p>
        </div>

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT') 

            <!-- 1. Nama Proyek -->
            <div>
                <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">Judul / Nama Proyek</label>
                <input type="text" name="title" id="judul" required value="{{ $project->title }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Masukkan nama proyek...">
            </div>

            <!-- 2. Gambar / Screenshot Aplikasi -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Gambar Saat Ini</label>
                <div class="mb-3 h-40 w-64 overflow-hidden rounded-2xl border border-rose-100 bg-rose-50">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Preview" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-rose-300 text-xs italic">Tidak ada gambar</div>
                    @endif
                </div>
                
                <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">Ganti Gambar Baru <span class="text-xs font-normal text-gray-400">(Biarkan kosong jika tidak ingin diubah)</span></label>
                <input type="file" name="image" id="gambar"
                    class="w-full px-4 py-2 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-600 file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-rose-100 file:text-rose-700 hover:file:bg-rose-200">
            </div>

            <!-- 3. Deskripsi Proyek -->
            <div>
                <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi Proyek</label>
                <textarea name="description" id="deskripsi" rows="3" required
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Tuliskan deskripsi singkat project...">{{ $project->description }}</textarea>
            </div>

            <!-- 4. Permasalahan yang ingin diselesaikan -->
            <div>
                <label for="problem" class="block text-sm font-semibold text-gray-700 mb-2">Permasalahan yang Ingin Diselesaikan</label>
                <input type="text" name="problem" id="problem" value="{{ $project->problem ?? '' }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Contoh: Proses manual yang lambat dan sering tercecer...">
            </div>

            <!-- 5. Tujuan dibuatnya proyek -->
            <div>
                <label for="objective" class="block text-sm font-semibold text-gray-700 mb-2">Tujuan Proyek</label>
                <input type="text" name="objective" id="objective" value="{{ $project->objective ?? '' }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Contoh: Membangun sistem digital yang cepat dan efisien...">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- 6. Teknologi yang digunakan -->
                <div>
                    <label for="technologies" class="block text-sm font-semibold text-gray-700 mb-2">Teknologi yang Digunakan</label>
                    <input type="text" name="technologies" id="technologies" value="{{ $project->technologies ?? '' }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                        placeholder="Figma, Tailwind CSS, Laravel...">
                </div>

                <!-- 7. Peran dalam proyek -->
                <div>
                    <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">Peran dalam Proyek</label>
                    <input type="text" name="role" id="role" value="{{ $project->role ?? '' }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                        placeholder="UI/UX Designer & Frontend...">
                </div>
            </div>

            <!-- 8. Fitur-Fitur dalam proyek -->
            <div>
                <label for="features" class="block text-sm font-semibold text-gray-700 mb-2">Fitur-Fitur Proyek</label>
                <textarea name="features" id="features" rows="2"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Sebutkan fitur utama, pisahkan dengan koma...">{{ $project->features ?? '' }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- 9. Link Demo proyek -->
                <div>
                    <label for="demo_url" class="block text-sm font-semibold text-gray-700 mb-2">Link Demo Proyek</label>
                    <input type="url" name="demo_url" id="demo_url" value="{{ $project->demo_url ?? '' }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                        placeholder="https://figma.com/...">
                </div>

                <!-- 10. Link Source Code GitHub -->
                <div>
                    <label for="github_url" class="block text-sm font-semibold text-gray-700 mb-2">Link Source Code GitHub</label>
                    <input type="url" name="github_url" id="github_url" value="{{ $project->github_url ?? '' }}"
                        class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                        placeholder="https://github.com/...">
                </div>
            </div>

            <!-- 11. Dokumentasi Proses Pekerjaan -->
            <div>
                <label for="process_docs" class="block text-sm font-semibold text-gray-700 mb-2">Dokumentasi Proses Pekerjaan</label>
                <input type="text" name="process_docs" id="process_docs" value="{{ $project->process_docs ?? '' }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Contoh: Riset -> Wireframe -> High-Fi Design -> Testing...">
            </div>

            <!-- 12. Feedback User -->
            <div>
                <label for="user_feedback" class="block text-sm font-semibold text-gray-700 mb-2">Feedback User</label>
                <input type="text" name="user_feedback" id="user_feedback" value="{{ $project->user_feedback ?? '' }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Contoh: Desain sangat bersih dan mudah dipahami...">
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-4 pt-4">
                <a href="{{ route('dashboard') }}" class="w-1/3 bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold py-3 rounded-xl text-center transition-all">
    Batal
</a>
                <button type="submit" class="w-2/3 bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl shadow-md shadow-rose-100 transition-all">
                    Perbarui Project
                </button>
            </div>
        </form>
    </div>

</body>
</html>