<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sertifikat - Fitri Yusnida</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900 font-['Inter'] dark:bg-gray-900 dark:text-gray-100 py-16 px-6">

    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-950 rounded-3xl p-8 border border-rose-100 dark:border-gray-800 shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-rose-600">Edit Sertifikat & Prestasi</h2>
            <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:text-rose-600 transition">
                <i class="fa-solid fa-arrow-left mr-1"></i> Kembali ke Dashboard
            </a>
        </div>

        <form action="{{ route('certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold mb-2">Judul Penghargaan / Sertifikat</label>
                <input type="text" name="title" value="{{ old('title', $certificate->title) }}" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Deskripsi / Tingkat & Tahun</label>
                <input type="text" name="description" value="{{ old('description', $certificate->description) }}" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Foto Sertifikat Saat Ini</label>
                @if($certificate->image)
                    <div class="mb-3 h-40 rounded-xl overflow-hidden border border-rose-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 flex items-center justify-center">
                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title }}" class="w-full h-full object-contain">
                    </div>
                @else
                    <p class="text-xs text-gray-400 italic mb-2">Tidak ada foto.</p>
                @endif
                <label class="block text-sm font-semibold mb-2">Ganti Foto Sertifikat (Opsional)</label>
                <input type="file" name="image" class="w-full px-4 py-2 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>