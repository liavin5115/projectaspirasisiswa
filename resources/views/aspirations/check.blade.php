<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Cek Status Aspirasi - Aspirasi Siswa</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"],
                        "sans": ["Lexend", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden font-sans">
<!-- Header -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e5e7eb] bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-6 py-4 md:px-10 lg:px-40">
    <div class="flex items-center gap-4 text-[#111418] dark:text-white">
        <div class="size-8 text-primary">
            <svg class="w-full h-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
                <path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
            </svg>
        </div>
        <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Aspirasi Siswa</h2>
    </div>
    <div class="hidden md:flex flex-1 justify-end gap-8">
        <nav class="flex items-center gap-9">
            <a class="text-[#111418] dark:text-white hover:text-primary text-sm font-medium leading-normal transition-colors" href="{{ route('home') }}">Beranda</a>
            <a class="text-[#111418] dark:text-white hover:text-primary text-sm font-medium leading-normal transition-colors" href="{{ route('home') }}#fitur">Fitur</a>
            <a class="text-[#111418] dark:text-white hover:text-primary text-sm font-medium leading-normal transition-colors" href="{{ route('home') }}#cara-kerja">Cara Kerja</a>
            <a class="text-[#111418] dark:text-white hover:text-primary text-sm font-medium leading-normal transition-colors" href="{{ route('home') }}#tentang">Tentang</a>
        </nav>
    </div>
    <button class="md:hidden flex items-center justify-center text-[#111418] dark:text-white">
        <span class="material-symbols-outlined">menu</span>
    </button>
</header>

<!-- Main Content -->
<main class="flex-1 bg-gradient-to-br from-indigo-50 to-blue-100 dark:from-gray-900 dark:to-[#1e293b] flex flex-col items-center justify-center px-4 py-12 md:py-20">
    <div class="w-full max-w-[560px] flex flex-col gap-6">
        <div class="w-full bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden border border-gray-100 dark:border-gray-700">
            <!-- Header Section -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-10 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                <div class="relative z-10 flex flex-col gap-3">
                    <h1 class="text-white text-3xl font-bold leading-tight">Cek Status Aspirasi</h1>
                    <p class="text-blue-100 text-base font-medium leading-relaxed">Pantau perkembangan laporan dan aspirasi Anda secara real-time</p>
                </div>
            </div>

            <!-- Form Section -->
            <div class="p-8 md:p-10">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/10 border border-red-100 dark:border-red-800/30 rounded-lg flex items-start gap-3">
                        <div class="text-red-600 dark:text-red-400 mt-0.5">
                            <span class="material-symbols-outlined">error</span>
                        </div>
                        <div>
                            <p class="text-red-600 dark:text-red-300 font-semibold">NIS Tidak Terdaftar</p>
                            <p class="text-red-600 dark:text-red-300 text-sm mt-1">Mohon periksa kembali nomor induk siswa Anda</p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('aspirations.check') }}" method="POST" class="flex flex-col gap-6">
                    @csrf

                    <div class="flex flex-col gap-2">
                        <label class="text-[#111418] dark:text-white text-base font-bold leading-tight" for="nis">
                            Nomor Induk Siswa (NIS)
                        </label>
                        <div class="relative group">
                            <input
                                type="text"
                                id="nis"
                                name="nis"
                                value="{{ old('nis') }}"
                                required
                                class="w-full h-14 pl-4 pr-12 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 text-[#111418] dark:text-white placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none text-base"
                                placeholder="Masukkan NIS Anda"
                                autocomplete="off"
                            />
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-blue-500 transition-colors pointer-events-none">
                                <span class="material-symbols-outlined text-[24px]">info</span>
                            </div>
                        </div>
                        @error('nis')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="flex items-center justify-center gap-2 w-full h-12 bg-primary hover:bg-blue-600 text-white text-base font-bold rounded-xl shadow-lg shadow-blue-500/30 transition-all active:scale-[0.98]"
                    >
                        <span class="material-symbols-outlined">search</span>
                        <span>Cek Status</span>
                    </button>
                </form>

                <!-- Info Section -->
                <div class="mt-10 pt-8 border-t border-gray-100 dark:border-gray-700">
                    <div class="flex items-center gap-2 mb-4">
                        <h3 class="text-[#111418] dark:text-white font-bold text-sm uppercase tracking-wider">Informasi Penting</h3>
                    </div>
                    <ul class="flex flex-col gap-4">
                        <li class="flex items-start gap-3 group">
                            <div class="min-w-[20px] pt-0.5 text-primary">
                                <span class="material-symbols-outlined text-[20px] font-bold">check_circle</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed group-hover:text-gray-900 dark:group-hover:text-gray-200 transition-colors">
                                Pastikan Anda memasukkan NIS yang valid dan terdaftar.
                            </p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <div class="min-w-[20px] pt-0.5 text-primary">
                                <span class="material-symbols-outlined text-[20px] font-bold">check_circle</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed group-hover:text-gray-900 dark:group-hover:text-gray-200 transition-colors">
                                Laporan Anda diproses dalam waktu 3-5 hari kerja.
                            </p>
                        </li>
                        <li class="flex items-start gap-3 group">
                            <div class="min-w-[20px] pt-0.5 text-primary">
                                <span class="material-symbols-outlined text-[20px] font-bold">check_circle</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed group-hover:text-gray-900 dark:group-hover:text-gray-200 transition-colors">
                                Privasi pelapor dijaga ketat selama proses verifikasi.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex flex-col items-center gap-4 mt-2">
            <p class="text-gray-500 dark:text-gray-400 text-sm font-medium">Belum pernah melapor?</p>
            <a href="{{ route('aspirations.submit') }}" class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-full font-bold shadow-lg shadow-green-600/20 transition-all hover:-translate-y-0.5 hover:shadow-xl">
                <span class="material-symbols-outlined">edit_square</span>
                <span>Kirim Aspirasi Baru</span>
            </a>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="border-t border-[#e5e7eb] bg-white dark:bg-background-dark pt-16 pb-8 px-4 md:px-10 lg:px-40">
    <div class="flex flex-col max-w-[960px] mx-auto w-full">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            <div class="col-span-1 md:col-span-1 flex flex-col gap-4">
                <div class="flex items-center gap-2 text-[#111418] dark:text-white">
                    <div class="size-6 text-primary">
                        <svg class="w-full h-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.1739 20.1739L27.8261 5.82609C29.1366 7.13663 28.3989 10.1876 26.2002 13.7654C24.8538 15.9564 22.9595 18.3449 20.6522 20.6522C18.3449 22.9595 15.9564 24.8538 13.7654 26.2002C10.1876 28.3989 7.13663 29.1366 5.82609 27.8261L20.1739 42.1739C21.4845 43.4845 24.5355 42.7467 28.1133 40.548C30.3042 39.2016 32.6927 37.3073 35 35C37.3073 32.6927 39.2016 30.3042 40.548 28.1133C42.7467 24.5355 43.4845 21.4845 42.1739 20.1739Z" fill="currentColor"></path>
                            <path clip-rule="evenodd" d="M7.24189 26.4066C7.31369 26.4411 7.64204 26.5637 8.52504 26.3738C9.59462 26.1438 11.0343 25.5311 12.7183 24.4963C14.7583 23.2426 17.0256 21.4503 19.238 19.238C21.4503 17.0256 23.2426 14.7583 24.4963 12.7183C25.5311 11.0343 26.1438 9.59463 26.3738 8.52504C26.5637 7.64204 26.4411 7.31369 26.4066 7.24189C26.345 7.21246 26.143 7.14535 25.6664 7.1918C24.9745 7.25925 23.9954 7.5498 22.7699 8.14278C20.3369 9.32007 17.3369 11.4915 14.4142 14.4142C11.4915 17.3369 9.32007 20.3369 8.14278 22.7699C7.5498 23.9954 7.25925 24.9745 7.1918 25.6664C7.14534 26.143 7.21246 26.345 7.24189 26.4066ZM29.9001 10.7285C29.4519 12.0322 28.7617 13.4172 27.9042 14.8126C26.465 17.1544 24.4686 19.6641 22.0664 22.0664C19.6641 24.4686 17.1544 26.465 14.8126 27.9042C13.4172 28.7617 12.0322 29.4519 10.7285 29.9001L21.5754 40.747C21.6001 40.7606 21.8995 40.931 22.8729 40.7217C23.9424 40.4916 25.3821 39.879 27.0661 38.8441C29.1062 37.5904 31.3734 35.7982 33.5858 33.5858C35.7982 31.3734 37.5904 29.1062 38.8441 27.0661C39.879 25.3821 40.4916 23.9425 40.7216 22.8729C40.931 21.8995 40.7606 21.6001 40.747 21.5754L29.9001 10.7285ZM29.2403 4.41187L43.5881 18.7597C44.9757 20.1473 44.9743 22.1235 44.6322 23.7139C44.2714 25.3919 43.4158 27.2666 42.252 29.1604C40.8128 31.5022 38.8165 34.012 36.4142 36.4142C34.012 38.8165 31.5022 40.8128 29.1604 42.252C27.2666 43.4158 25.3919 44.2714 23.7139 44.6322C22.1235 44.9743 20.1473 44.9757 18.7597 43.5881L4.41187 29.2403C3.29027 28.1187 3.08209 26.5973 3.21067 25.2783C3.34099 23.9415 3.8369 22.4852 4.54214 21.0277C5.96129 18.0948 8.43335 14.7382 11.5858 11.5858C14.7382 8.43335 18.0948 5.9613 21.0277 4.54214C22.4852 3.8369 23.9415 3.34099 25.2783 3.21067C26.5973 3.08209 28.1187 3.29028 29.2403 4.41187Z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="font-bold text-lg">Aspirasi Siswa</span>
                </div>
                <p class="text-sm text-[#617589] dark:text-gray-400">
                    Wadah resmi aspirasi siswa untuk menciptakan lingkungan sekolah yang lebih baik, transparan, dan inklusif.
                </p>
            </div>
            <div class="col-span-1 flex flex-col gap-3">
                <h4 class="font-bold text-[#111418] dark:text-white">Platform</h4>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="{{ route('home') }}">Beranda</a>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="{{ route('home') }}#tentang">Tentang Kami</a>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="{{ route('home') }}#fitur">Fitur</a>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="{{ route('home') }}#cara-kerja">Cara Kerja</a>
            </div>
            <div class="col-span-1 flex flex-col gap-3">
                <h4 class="font-bold text-[#111418] dark:text-white">Bantuan</h4>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">Pusat Bantuan</a>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">Kontak Admin</a>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
                <a class="text-sm text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
            </div>
            <div class="col-span-1 flex flex-col gap-3">
                <h4 class="font-bold text-[#111418] dark:text-white">Hubungi Kami</h4>
                <p class="text-sm text-[#617589] dark:text-gray-400 flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">mail</span> admin@sekolah.sch.id
                </p>
                <p class="text-sm text-[#617589] dark:text-gray-400 flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">call</span> (021) 1234-5678
                </p>
            </div>
        </div>
        <div class="border-t border-[#e5e7eb] dark:border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-[#617589] dark:text-gray-400">&copy; 2026 Aspirasi Siswa. All rights reserved.</p>
            <div class="flex gap-4">
                <a class="text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">
                    <span class="sr-only">Twitter</span>
                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a class="text-[#617589] dark:text-gray-400 hover:text-primary transition-colors" href="#">
                    <span class="sr-only">Instagram</span>
                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path clip-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.373c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" fill-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

</div>
</body>
</html>

