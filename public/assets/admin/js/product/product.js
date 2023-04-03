function deleteProducts(){

    var product_delete_ids = [];
    var product_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let product_checkbox of product_checkboxes){

        if(product_checkbox.checked == true){

            product_delete_ids.push(product_checkbox.value)
        }
    }

    Swal.fire({
        title: 'Do you want to delete these categories?',
        // text: 'Do you want to continue',
        icon: 'info',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Yes',
    }).then((result) => {
        
        if (result.isConfirmed) {

            $.ajax({
                type: "POST",
                data: {
                    "deleted_product_ids": JSON.stringify(product_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/product")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}