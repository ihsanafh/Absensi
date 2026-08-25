<x-app-layout>
    <div class="mb-stack-lg max-w-[560px] mx-auto">
        <h2 class="font-h2 text-h2 font-bold text-on-background">Pengajuan Izin Keluar</h2>
        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Isi formulir di bawah ini untuk mengajukan izin meninggalkan lingkungan sekolah pada jam kerja.</p>
    </div>

    <!-- Form Card -->
    <div class="bg-surface-container-lowest shadow-sm rounded-xl w-full max-w-[560px] mx-auto border border-surface-container-high overflow-hidden mb-8">
        @if (session('success'))
            <div class="bg-tertiary-container/20 text-tertiary p-4 font-body-md text-body-md">
                {{ session('success') }}
            </div>
        @endif
        
        <form action="{{ route('guru.izin.store') }}" method="POST" class="p-stack-lg flex flex-col gap-stack-md">
            @csrf
            <!-- Dropdown: Alasan Keluar -->
            <div class="flex flex-col gap-2">
                <label class="font-body-md text-body-md font-medium text-on-surface" for="alasan">Alasan Keluar</label>
                <div class="relative">
                    <select id="alasan" name="alasan" class="w-full appearance-none bg-surface border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow cursor-pointer" required>
                        <option value="" disabled selected>Pilih alasan...</option>
                        <option value="Tugas Luar Dinas">Tugas Luar Dinas</option>
                        <option value="Kepentingan Keluarga Mendesak">Kepentingan Keluarga Mendesak</option>
                        <option value="Keperluan Medis / Berobat">Keperluan Medis / Berobat</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-on-surface-variant">
                        <span class="material-symbols-outlined">expand_more</span>
                    </div>
                </div>
            </div>

            <!-- Textarea: Keterangan Tambahan -->
            <div class="flex flex-col gap-2">
                <label class="font-body-md text-body-md font-medium text-on-surface" for="keterangan">Keterangan Tambahan</label>
                <textarea id="keterangan" name="keterangan" rows="4" class="w-full bg-surface border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow resize-y" placeholder="Jelaskan secara singkat keperluan Anda..."></textarea>
            </div>

            <!-- Time-picker: Estimasi Waktu Kembali -->
            <div class="flex flex-col gap-2">
                <label class="font-body-md text-body-md font-medium text-on-surface" for="waktu_kembali">Estimasi Waktu Kembali (Opsional)</label>
                <div class="relative">
                    <input type="time" id="waktu_kembali" name="waktu_kembali" class="w-full bg-surface border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow cursor-pointer [color-scheme:light]">
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-on-surface-variant">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 text-sm">Biarkan kosong jika Anda tidak berencana kembali hari ini.</p>
            </div>

            <!-- Action Button -->
            <div class="pt-stack-sm mt-2 border-t border-surface-container-high flex justify-end">
                <button type="submit" class="w-full md:w-auto bg-primary text-on-primary font-body-md text-body-md font-semibold py-3 px-8 rounded-lg hover:bg-primary-container focus:ring-4 focus:ring-primary/20 transition-all active:scale-95 flex items-center justify-center gap-2">
                    <span>Ajukan Izin</span>
                    <span class="material-symbols-outlined text-sm">send</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Riwayat Izin -->
    <div class="max-w-[800px] mx-auto">
        <h3 class="font-h3 text-h3 font-bold text-on-surface mb-4">Riwayat Izin Keluar</h3>
        <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low border-b border-outline-variant">
                            <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Tanggal</th>
                            <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Alasan</th>
                            <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Estimasi Kembali</th>
                            <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/50">
                        @forelse($riwayat as $izin)
                            <tr class="hover:bg-surface-container-low/50 transition-colors">
                                <td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">
                                    {{ $izin->created_at->format('d M Y') }}
                                </td>
                                <td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">
                                    {{ $izin->alasan }}
                                </td>
                                <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">
                                    {{ $izin->estimasi_kembali ? \Carbon\Carbon::parse($izin->estimasi_kembali)->format('H:i') : 'Tidak Kembali' }}
                                </td>
                                <td class="py-4 px-6">
                                    @if($izin->status == 'Disetujui')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-container/20 text-tertiary font-body-sm text-body-sm font-medium border border-tertiary-container/30">
                                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Disetujui
                                        </span>
                                    @elseif($izin->status == 'Ditolak')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-body-sm text-body-sm font-medium border border-error-container/50">
                                            <span class="w-1.5 h-1.5 rounded-full bg-error"></span> Ditolak
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-on-secondary-container font-body-sm text-body-sm font-medium">
                                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Menunggu
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-4 px-6 text-center font-body-md text-body-md text-on-surface-variant">
                                    Belum ada riwayat permohonan izin.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($riwayat->hasPages())
                <div class="px-6 py-4 border-t border-outline-variant flex items-center justify-between bg-surface-container-lowest">
                    {{ $riwayat->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
