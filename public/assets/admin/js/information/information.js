$(document).ready(function() {
    $('#information_description').summernote({
        placeholder: 'Information Description',
        tabsize: 2,
        height: 350
    });
  });


  function deleteInformations(){

    var information_delete_ids = [];
    var information_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let information_checkbox of information_checkboxes){

        if(information_checkbox.checked == true){

            information_delete_ids.push(information_checkbox.value)
        }
    }

    Swal.fire({
        title: 'Do you want to delete these information pages?',
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
                    "deleted_information_ids": JSON.stringify(information_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/information")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}