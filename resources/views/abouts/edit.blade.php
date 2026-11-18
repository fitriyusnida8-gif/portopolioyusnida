<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About Me - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900 font-['Inter'] dark:bg-gray-900 dark:text-gray-100 py-16 px-6">

    <div class="max-w-xl mx-auto bg-white dark:bg-gray-950 rounded-3xl p-8 border border-rose-100 dark:border-gray-800 shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-rose-600">Edit Data About Me</h2>
            <a href="{{ route('dashboard') }}#about" class="text-sm text-gray-500 hover:text-rose-600 transition">
                <i class="fa-solid fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>

        <!-- Penampil Error diletakkan di bagian atas agar langsung terlihat -->
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-xl text-xs">
                <p class="font-bold mb-1">Gagal menyimpan perubahan:</p>
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Wajib menggunakan enctype="multipart/form-data" agar file gambar terkirim -->
        <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold mb-2">Kategori</label>
                <select name="category" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
                    <option value="Biodata Singkat" {{ old('category', $about->category) == 'Biodata Singkat' ? 'selected' : '' }}>Biodata Singkat</option>
                    <option value="Pendidikan" {{ old('category', $about->category) == 'Pendidikan' ? 'selected' : '' }}>Riwayat Pendidikan</option>
                    <option value="Minat & Teknologi" {{ old('category', $about->category) == 'Minat & Teknologi' ? 'selected' : '' }}>Minat & Bidang Teknologi</option>
                    <option value="Hobi" {{ old('category', $about->category) == 'Hobi' ? 'selected' : '' }}>Hobi</option>
                    <option value="Cita-cita" {{ old('category', $about->category) == 'Cita-cita' ? 'selected' : '' }}>Cita-cita & Tujuan Karir</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Judul / Nama Sekolah / Cita-cita / Minat / Hobi</label>
                <input type="text" name="title" value="{{ old('title', $about->title) }}" placeholder="Opsional untuk Biodata Singkat" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Tahun / Tanggal, Bulan, Tahun (Opsional)</label>
                <input type="text" name="year" value="{{ old('year', $about->year) }}" placeholder="Contoh: 2023 - 2026 atau 15 Januari 2025" class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Ganti / Upload Gambar (Opsional)</label>
                
                <!-- Tampilkan gambar saat ini jika ada -->
                @if($about->image)
                <div class="mb-3">
                    <p class="text-xs text-gray-400 mb-1">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" class="w-28 h-20 object-cover rounded-lg border border-rose-100 dark:border-gray-800">
                </div>
                @endif

                <input type="file" name="image" accept="image/*" class="w-full px-4 py-2 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-rose-50 file:text-rose-600 hover:file:bg-rose-100">
                <p class="text-xs text-gray-400 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Deskripsi</label>
                <textarea name="description" rows="4" placeholder="Tuliskan deskripsi..." class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">{{ old('description', $about->description) }}</textarea>
            </div>

            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>