@extends('filament::layouts.base')

@section('content')
<div class="fi-page">
    <div class="fi-main-content">
        <!-- Header with Back Button -->
        <div class="fi-header flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Kelola Follow-up Aspirasi</h1>
            </div>
            <a href="{{ route('filament.admin.resources.input-aspirasis.index') }}"
               class="inline-flex items-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Kembali
            </a>
        </div>

        <!-- Aspiration Information Card -->
        <div class="fi-section mb-6 bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Informasi Aspirasi</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">NIS</label>
                    <p class="text-gray-900 font-semibold">{{ $record->nis }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Kategori</label>
                    <p class="text-gray-900 font-semibold">{{ $record->kategori }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Lokasi</label>
                    <p class="text-gray-900 font-semibold">{{ $record->lokasi ?? '-' }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">Tanggal Pengajuan</label>
                    <p class="text-gray-900 font-semibold">{{ $record->created_at->format('d F Y - H:i') }}</p>
                </div>
            </div>

            <div class="mt-6">
                <label class="block text-sm font-medium text-gray-600 mb-2">Keterangan/Deskripsi</label>
                <div class="bg-gray-50 p-4 rounded border border-gray-200">
                    <p class="text-gray-900">{{ $record->keterangan }}</p>
                </div>
            </div>
        </div>

        <!-- Follow-up Table Section -->
        <div class="fi-section">
            <livewire:tables.table
                :paginated="false"
            />

            @livewire(\App\Filament\Resources\InputAspirasiResource\RelationManagers\AspirasiRelationManager::class, [
                'ownerRecord' => $record,
                'pageClass' => \App\Filament\Resources\InputAspirasiResource\Pages\EditInputAspirasi::class,
            ])

            <!-- Back Button at Bottom -->
            <div class="mt-6 flex justify-start">
                <a href="{{ route('filament.admin.resources.input-aspirasis.index') }}"
                   class="inline-flex items-center px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition font-semibold">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
