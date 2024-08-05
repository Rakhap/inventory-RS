document.addEventListener('alpine:init', () => {
    Alpine.store('toast', {

        createElement(id, message, type) {
            const toastContainer = document.querySelector('#toastContainer');
            toastContainer.innerHTML += `
                <div class="flex transition border border-gray-100 enter-toast bg-white shadow-xl gap-3 items-center px-4 py-3 rounded-lg" id="${id}">
                   <img src="/images/${type}.gif" alt="" class="w-8 h-8">
                    <p class="text-primary-text max-w-[16ch]">${message}</p>
                </div>
            `;
            setTimeout(() => {
                document.querySelector(`#${id}`).classList.remove('enter-toast');
            }, 700)
        },

        trigger(toast) {
            const id = `toast-${Date.now()}`;
            this.createElement(id, toast?.message || 'Toast message', toast?.type || 'success');

            setTimeout(() => {
                this.removeToast(id)
            }, 5000)
        },

        removeToast(id) {
            document.querySelector(`#${id}`).remove();
        }

    });
})


