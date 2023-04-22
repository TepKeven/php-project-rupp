function deleteUsers(){

    var user_delete_ids = [];
    var user_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let user_checkbox of user_checkboxes){

        if(user_checkbox.checked == true){

            user_delete_ids.push(user_checkbox.value)
        }
    }

    Swal.fire({
        title: 'Do you want to delete these users?',
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
                    "deleted_user_ids": JSON.stringify(user_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/user")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}