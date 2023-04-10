function deleteCustomers(){

    var customer_delete_ids = [];
    var customer_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let customer_checkbox of customer_checkboxes){

        if(customer_checkbox.checked == true){

            customer_delete_ids.push(customer_checkbox.value)
        }
    }

    Swal.fire({
        title: 'Do you want to delete these customers?',
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
                    "deleted_customer_ids": JSON.stringify(customer_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/customer")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}