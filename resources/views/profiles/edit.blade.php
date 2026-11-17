<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Beranda - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900 font-['Inter'] dark:bg-gray-900 dark:text-gray-100 py-16 px-6">

    <div class="max-w-xl mx-auto bg-white dark:bg-gray-950 rounded-3xl p-8 border border-rose-100 dark:border-gray-800 shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-rose-600">Edit Profil Beranda</h2>
            <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:text-rose-600 transition">
                <i class="fa-solid fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold mb-2">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name', $profile->name ?? 'FITRI YUSNIDA') }}" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Kelas</label>
                <input type="text" name="class_name" value="{{ old('class_name', $profile->class_name ?? 'XII-B') }}" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Jurusan</label>
                <input type="text" name="major" value="{{ old('major', $profile->major ?? 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM') }}" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Deskripsi Singkat</label>
                <textarea name="description" rows="4" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">{{ old('description', $profile->description ?? '') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Badge Keahlian Utama</label>
                <input type="text" name="skill_badge" value="{{ old('skill_badge', $profile->skill_badge ?? 'UI/UX Design') }}" required class="w-full px-4 py-2.5 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Foto Profil (Biarkan kosong jika tidak diubah)</label>
                @if(isset($profile->image))
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $profile->image) }}" alt="Preview" class="w-20 h-20 object-cover rounded-xl border">
                    </div>
                @endif
                <input type="file" name="image" accept="image/*" class="w-full px-4 py-2 rounded-xl border border-rose-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-sm">
            </div>

            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl transition shadow-md">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>