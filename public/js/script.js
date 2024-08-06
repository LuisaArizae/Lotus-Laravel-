function confirmDelete(event, deleteUrl) {
    event.preventDefault(); // Evita que el enlace se siga

    Swal.fire({
        title: "¿Estás seguro?",
        text: "¡No podrás revertir esto!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "¡Sí, elimínalo!"
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirige al usuario a la URL de eliminación
            window.location.href = deleteUrl; 
        }
    });
}
