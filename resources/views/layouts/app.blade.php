<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengaduan Aspirasi Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Pengaduan Aspirasi Siswa</h1>
            <div>
                <a href="{{ route('aspirations.submit') }}" class="mr-4 hover:bg-blue-700 px-3 py-2 rounded">Kirim Aspirasi</a>
                <a href="{{ route('aspirations.check') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Cek Status</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>
</body>
</html>
