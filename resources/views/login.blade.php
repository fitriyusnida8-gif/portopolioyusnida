<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Fitri Yusnida</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-rose-50/30 font-['Inter'] min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full bg-white rounded-3xl p-8 border border-rose-100 shadow-xl shadow-rose-100/40">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Login Admin</h2>
            <p class="text-gray-400 text-sm">Silakan masukkan email dan password admin Anda.</p>
        </div>

        @if(session()->has('loginError'))
            <div class="bg-rose-100 border border-rose-200 text-rose-700 px-4 py-3 rounded-xl mb-4 text-sm text-center font-medium">
                {{ session('loginError') }}
            </div>
        @endif

        <form action="{{ route('login.proses') }}" method="POST">
            @csrf
            
            <div class="mb-5">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Admin</label>
                <input type="email" name="email" id="email" required autofocus value="{{ old('email') }}"
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Masukkan email admin...">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password Admin</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2.5 rounded-xl border border-rose-200 focus:outline-none focus:ring-2 focus:ring-rose-400 focus:border-transparent transition-all bg-white text-gray-800" 
                    placeholder="Masukkan password...">
            </div>

            <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-xl shadow-md transition-all text-center block mb-4">
                Masuk Sekarang
            </button>

            <a href="{{ route('user.index') }}" class="block text-center text-sm text-gray-400 hover:text-rose-500 transition-colors">
                Kembali ke Portfolio
            </a>
        </form>
    </div>

</body>
</html>