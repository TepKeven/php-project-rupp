function deleteCategories(){

    var category_delete_ids = [];
    var category_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let category_checkbox of category_checkboxes){

        if(category_checkbox.checked == true){

            category_delete_ids.push(category_checkbox.value)
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
                    "deleted_category_ids": JSON.stringify(category_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/category")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}