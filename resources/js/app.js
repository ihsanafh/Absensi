

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;

window.Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

// Listener for confirmation modal
window.addEventListener('open-confirm-modal', (event) => {
    Swal.fire({
        title: event.detail.title,
        text: event.detail.message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#046a38',
        cancelButtonColor: '#6b7280',
        confirmButtonText: event.detail.confirmText || 'Ya',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = event.detail.actionUrl;
            
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            form.appendChild(csrfInput);
            
            if (event.detail.method && event.detail.method !== 'POST') {
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = event.detail.method;
                form.appendChild(methodInput);
            }
            
            document.body.appendChild(form);
            form.submit();
        }
    });
});

Alpine.start();
