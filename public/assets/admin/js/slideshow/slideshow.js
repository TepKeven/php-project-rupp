function deleteSlideshows(){

    var slideshow_delete_ids = [];
    var slideshow_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let slideshow_checkbox of slideshow_checkboxes){

        if(slideshow_checkbox.checked == true){

            slideshow_delete_ids.push(slideshow_checkbox.value)
        }
    }

    Swal.fire({
        title: 'Do you want to delete these slideshows?',
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
                    "deleted_slideshow_ids": JSON.stringify(slideshow_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/slideshow")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}