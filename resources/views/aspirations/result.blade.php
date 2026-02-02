<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Status Aspirasi - Aspirasi Siswa</title>
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
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
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
<main class="flex-1 bg-background-light dark:bg-background-dark">
    @if ($laporans->isEmpty())
        <!-- Empty State -->
        <div class="bg-gradient-to-b from-blue-100/60 to-background-light dark:from-gray-800 dark:to-background-dark pt-12 pb-20 px-4 md:px-10 lg:px-40">
            <div class="max-w-[960px] mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-primary text-xs font-bold mb-3 uppercase tracking-wider">Dashboard Siswa</span>
                <h1 class="text-3xl md:text-4xl font-bold text-[#111418] dark:text-white mb-2">Status Aspirasi Anda</h1>
                <div class="flex items-center gap-2 text-[#617589] dark:text-gray-400 font-medium">
                    <span class="material-symbols-outlined text-xl">badge</span>
                    <span>NIS: <span class="text-[#111418] dark:text-white font-bold">{{ $nis }}</span></span>
                </div>
            </div>
        </div>
        <div class="px-4 md:px-10 lg:px-40 py-20">
            <div class="max-w-[960px] mx-auto">
                <div class="bg-yellow-50 dark:bg-yellow-900/10 border border-yellow-100 dark:border-yellow-800/30 rounded-xl p-8 text-center">
                    <div class="flex justify-center mb-4">
                        <span class="material-symbols-outlined text-5xl text-yellow-600 dark:text-yellow-500">info</span>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-900 dark:text-yellow-200 mb-2">Tidak Ada Data</h3>
                    <p class="text-yellow-800 dark:text-yellow-300 mb-6">Belum ada aspirasi yang ditemukan untuk NIS Anda.</p>
                    <a href="{{ route('aspirations.submit') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-all">
                        <span class="material-symbols-outlined">add_circle</span>
                        Kirim Aspirasi Pertama Anda
                    </a>
                </div>
            </div>
        </div>
    @else
        <!-- Header Section -->
        <div class="bg-gradient-to-b from-blue-100/60 to-background-light dark:from-gray-800 dark:to-background-dark pt-12 pb-20 px-4 md:px-10 lg:px-40">
            <div class="max-w-[960px] mx-auto">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-100 text-primary text-xs font-bold mb-3 uppercase tracking-wider">Dashboard Siswa</span>
                <h1 class="text-3xl md:text-4xl font-bold text-[#111418] dark:text-white mb-2">Status Aspirasi Anda</h1>
                <div class="flex items-center gap-2 text-[#617589] dark:text-gray-400 font-medium">
                    <span class="material-symbols-outlined text-xl">badge</span>
                    <span>NIS: <span class="text-[#111418] dark:text-white font-bold">{{ $nis }}</span></span>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="px-4 md:px-10 lg:px-40 -mt-12 mb-12">
            <div class="max-w-[960px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg shadow-gray-200/50 dark:shadow-none border-l-4 border-amber-400 flex items-center justify-between">
                    <div>
                        <p class="text-[#617589] dark:text-gray-400 text-sm font-medium">Total Aspirasi</p>
                        <p class="text-3xl font-bold text-[#111418] dark:text-white mt-1">{{ $laporans->count() }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-amber-50 dark:bg-amber-900/30 flex items-center justify-center text-amber-500">
                        <span class="material-symbols-outlined">folder_open</span>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg shadow-gray-200/50 dark:shadow-none border-l-4 border-primary flex items-center justify-between">
                    <div>
                        <p class="text-[#617589] dark:text-gray-400 text-sm font-medium">Dalam Proses</p>
                        <p class="text-3xl font-bold text-[#111418] dark:text-white mt-1">{{ $laporans->filter(fn($l) => $l->aspirasis()->exists())->count() }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-blue-50 dark:bg-blue-900/30 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">pending_actions</span>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg shadow-gray-200/50 dark:shadow-none border-l-4 border-emerald-500 flex items-center justify-between">
                    <div>
                        <p class="text-[#617589] dark:text-gray-400 text-sm font-medium">Selesai</p>
                        <p class="text-3xl font-bold text-[#111418] dark:text-white mt-1">{{ $laporans->filter(fn($l) => $l->aspirasis()->where('status', 'Selesai')->exists())->count() }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-emerald-50 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-500">
                        <span class="material-symbols-outlined">check_circle</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aspirations List -->
        <div class="px-4 md:px-10 lg:px-40 pb-20">
            <div class="max-w-[960px] mx-auto space-y-8">
                @foreach ($laporans as $laporan)
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-[#e5e7eb] dark:border-gray-700 overflow-hidden">
                        <div class="p-6 md:p-8">
                            <!-- Aspiration Header -->
                            <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-6">
                                <div class="flex-1">
                                    <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold mb-3">
                                        <span class="material-symbols-outlined text-sm">tag</span>
                                        ID: {{ $laporan->id }}
                                    </div>
                                    <div class="flex items-center gap-3 text-xs font-bold tracking-wide uppercase text-[#617589] dark:text-gray-400 mb-1">
                                        <span>{{ $laporan->kategori }}</span>
                                        <span class="w-1 h-1 rounded-full bg-gray-300"></span>
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm">location_on</span>
                                            {{ $laporan->lokasi ?? 'Tidak disebutkan' }}
                                        </span>
                                    </div>
                                    <h3 class="text-xl font-bold text-[#111418] dark:text-white leading-tight">Aspirasi dari {{ $laporan->created_at->format('d M Y') }}</h3>
                                    <p class="text-sm text-[#617589] dark:text-gray-400 mt-1">Dilaporkan pada: {{ $laporan->created_at->format('d M Y, H:i') }} WIB</p>
                                </div>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium whitespace-nowrap self-start
                                    @if ($laporan->aspirasi && $laporan->aspirasi->status === 'Selesai')
                                        bg-emerald-50 text-emerald-600 border border-emerald-100 dark:bg-emerald-900/30 dark:border-emerald-800 dark:text-emerald-400
                                    @elseif ($laporan->aspirasi && $laporan->aspirasi->status === 'Proses')
                                        bg-blue-50 text-primary border border-blue-100 dark:bg-blue-900/30 dark:border-blue-800 dark:text-blue-300
                                    @else
                                        bg-amber-50 text-amber-600 border border-amber-100 dark:bg-amber-900/30 dark:border-amber-800 dark:text-amber-400
                                    @endif
                                ">
                                    <span class="w-2 h-2 rounded-full mr-2
                                        @if ($laporan->aspirasi && $laporan->aspirasi->status === 'Selesai')
                                            bg-emerald-500
                                        @elseif ($laporan->aspirasi && $laporan->aspirasi->status === 'Proses')
                                            bg-primary
                                        @else
                                            bg-amber-500
                                        @endif
                                    "></span>
                                    @if ($laporan->aspirasi)
                                        {{ $laporan->aspirasi->status }}
                                    @else
                                        Menunggu Review
                                    @endif
                                </span>
                            </div>

                            <!-- Aspiration Description -->
                            <p class="text-[#111418] dark:text-gray-300 leading-relaxed mb-8 border-b border-gray-100 dark:border-gray-700 pb-8">
                                {{ $laporan->keterangan }}
                            </p>

                            <!-- Timeline of Follow-ups -->
                            @if ($laporan->aspirasis->count() > 0)
                                <div>
                                    <h4 class="text-sm font-bold text-[#111418] dark:text-white mb-6 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary">history</span> Riwayat Pembaruan
                                    </h4>
                                    <div class="relative pl-4 md:pl-8 border-l-2 border-blue-100 dark:border-gray-700 space-y-8">
                                        @foreach ($laporan->aspirasis as $aspirasi)
                                            <div class="relative">
                                                <span class="absolute -left-[23px] md:-left-[39px] top-1.5 h-4 w-4 rounded-full border-[3px] border-white dark:border-gray-800
                                                    @if ($aspirasi->status === 'Selesai')
                                                        bg-emerald-500
                                                    @elseif ($aspirasi->status === 'Proses')
                                                        bg-primary
                                                    @else
                                                        bg-amber-500
                                                    @endif
                                                    shadow-sm"></span>
                                                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2">
                                                    <span class="text-sm font-bold text-[#111418] dark:text-white">
                                                        @if ($aspirasi->status === 'Proses')
                                                            Sedang Ditindaklanjuti
                                                        @elseif ($aspirasi->status === 'Selesai')
                                                            Aspirasi Selesai
                                                        @else
                                                            Verifikasi Berhasil
                                                        @endif
                                                    </span>
                                                    <span class="text-xs text-[#617589] dark:text-gray-500">{{ $aspirasi->created_at->format('d M Y, H:i') }} WIB</span>
                                                </div>
                                                @if ($aspirasi->feedback)
                                                    <div class="bg-[#f8f9fa] dark:bg-gray-700/50 p-4 rounded-lg border border-gray-100 dark:border-gray-600 shadow-sm relative">
                                                        <p class="text-sm text-[#4a5568] dark:text-gray-300 leading-relaxed">
                                                            <span class="font-semibold text-primary block mb-1">Tanggapan Admin:</span>
                                                            {{ $aspirasi->feedback }}
                                                        </p>
                                                    </div>
                                                @else
                                                    <p class="text-sm text-[#617589] dark:text-gray-500">Status diperbarui oleh Admin.</p>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <span class="material-symbols-outlined text-4xl text-yellow-600 dark:text-yellow-500 block mb-3">schedule</span>
                                    <p class="text-sm text-[#617589] dark:text-gray-500">Aspirasi sedang menunggu review dari admin. Kami akan segera memberikan update.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Action Buttons -->
            <div class="max-w-[960px] mx-auto flex flex-col sm:flex-row items-center justify-center gap-4 mt-12">
                <a href="{{ route('aspirations.check') }}" class="w-full sm:w-auto px-8 py-3 rounded-xl bg-primary hover:bg-primary/90 text-white font-bold shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">search</span>
                    Cek Aspirasi Lain
                </a>
                <a href="{{ route('aspirations.submit') }}" class="w-full sm:w-auto px-8 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-bold shadow-lg shadow-emerald-500/20 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">add_circle</span>
                    Kirim Aspirasi Baru
                </a>
            </div>
        </div>
    @endif
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

