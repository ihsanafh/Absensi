<section class="space-y-6">
    <header>
        <h2 class="text-xl font-semibold text-gray-800">
            {{ __('Hapus Akun') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan data di dalamnya akan dihapus secara permanen.') }}
        </p>
    </header>

    <button
        type="button"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg px-4 py-2 transition-colors"
    >{{ __('Hapus Akun') }}</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-xl font-semibold text-gray-800">
                {{ __('Apakah Anda yakin ingin menghapus akun Anda?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Setelah akun dihapus, semua data akan hilang. Silakan masukkan kata sandi Anda untuk mengonfirmasi.') }}
            </p>

            <div class="mt-6">
                <label for="password" class="sr-only">{{ __('Kata Sandi') }}</label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-red-500 focus:border-red-500"
                    placeholder="{{ __('Kata Sandi') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" x-on:click="$dispatch('close')" class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg px-4 py-2 transition-colors">
                    {{ __('Batal') }}
                </button>

                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg px-4 py-2 transition-colors">
                    {{ __('Hapus Akun') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
