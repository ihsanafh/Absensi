<div x-data="toastComponent()"
     @toast.window="showToast($event.detail)"
     class="fixed bottom-4 right-4 z-[9999] flex flex-col gap-2 pointer-events-none"
     style="max-width: 90vw; width: 400px;">
    
    <template x-for="toast in toasts" :key="toast.id">
        <div x-show="toast.visible"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 translate-y-2 scale-95"
             class="pointer-events-auto rounded-xl shadow-lg border p-4 flex items-start gap-3 backdrop-blur-md"
             :class="{
                 'bg-primary-container text-on-primary-container border-primary/20': toast.type === 'success',
                 'bg-error-container text-on-error-container border-error/20': toast.type === 'error',
                 'bg-secondary-container text-on-secondary-container border-secondary/20': toast.type === 'info'
             }">
            <div class="flex-shrink-0 mt-0.5">
                <span class="material-symbols-outlined" x-text="toast.icon"></span>
            </div>
            <div class="flex-1">
                <h4 class="font-body-md font-semibold" x-text="toast.title"></h4>
                <p class="font-body-sm opacity-90 mt-0.5" x-text="toast.message" x-show="toast.message"></p>
            </div>
            <button @click="removeToast(toast.id)" class="flex-shrink-0 opacity-70 hover:opacity-100 transition-opacity">
                <span class="material-symbols-outlined text-[18px]">close</span>
            </button>
        </div>
    </template>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('toastComponent', () => ({
                toasts: [],
                toastId: 0,
                
                showToast(detail) {
                    const id = ++this.toastId;
                    const toast = {
                        id,
                        type: detail.type || 'success',
                        title: detail.title || (detail.type === 'error' ? 'Gagal' : 'Berhasil'),
                        message: detail.message || '',
                        icon: detail.type === 'error' ? 'error' : (detail.type === 'info' ? 'info' : 'check_circle'),
                        visible: true
                    };
                    
                    this.toasts.push(toast);
                    
                    setTimeout(() => {
                        this.removeToast(id);
                    }, detail.duration || 4000);
                },
                
                removeToast(id) {
                    const index = this.toasts.findIndex(t => t.id === id);
                    if (index > -1) {
                        this.toasts[index].visible = false;
                        setTimeout(() => {
                            this.toasts = this.toasts.filter(t => t.id !== id);
                        }, 300); // Wait for animation
                    }
                }
            }));
        });
    </script>
</div>
