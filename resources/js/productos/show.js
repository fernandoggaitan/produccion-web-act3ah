const form_delete = document.getElementById('form_delete');
const submit_delete = document.getElementById('submit_delete');

const deleteProducto = (e) =>
{

    e.preventDefault();

    Swal.fire({
        title: 'Advertencia',
        text: "¿Está segura/o que desea eliminar este registro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#198754',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {
          form_delete.submit();
        }
      });

}

submit_delete.addEventListener('click', deleteProducto);