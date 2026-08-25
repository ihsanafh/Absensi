<div x-data="{ open: false, title: '', message: '', actionUrl: '', method: 'POST', confirmText: 'Ya', cancelText: 'Batal' }"
     @open-confirm-modal.window="
        open = true; 
        title = $event.detail.title; 
        message = $event.detail.message; 
        actionUrl = $event.detail.actionUrl; 
        method = $event.detail.method || 'POST';
        confirmText = $event.detail.confirmText || 'Ya'; 
        cancelText = $event.detail.cancelText || 'Batal';
     "
     x-cloak
     x-show="open"
     class="fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
     
    <div class="bg-white rounded-xl shadow-xl p-6 max-w-md w-full mx-4"
         @click.outside="open = false"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95">
         
        <h3 class="text-xl font-semibold text-gray-800 mb-2" x-text="title"></h3>
        <p class="text-sm text-gray-600 mb-6" x-text="message"></p>
        
        <div class="flex justify-end gap-3">
            <button @click="open = false" type="button" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition-colors h-11" x-text="cancelText"></button>
            <form method="POST" :action="actionUrl" class="inline">
                @csrf
                <template x-if="method !== 'POST'">
                    <input type="hidden" name="_method" :value="method">
                </template>
                <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors h-11" x-text="confirmText"></button>
            </form>
        </div>
    </div>
</div>
