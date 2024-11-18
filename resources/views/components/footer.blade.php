<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const showToast = (icon, title) => {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: icon,
            title: title
        });
    };

    @if (Session::has('success'))
        showToast('success', "{{ Session::get('success') }}");
    @endif

    @if (Session::has('error'))
        showToast('error', "{{ Session::get('error') }}");
    @endif
</script>
