
$(document).ready(function() {
    $('#blog_description').summernote({
        placeholder: 'Blog Description',
        tabsize: 2,
        height: 350
    });
  });


  function deleteBlogs(){

    var blog_delete_ids = [];
    var blog_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let blog_checkbox of blog_checkboxes){

        if(blog_checkbox.checked == true){

            blog_delete_ids.push(blog_checkbox.value)
        }
    }

    Swal.fire({
        title: 'Do you want to delete these blog pages?',
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
                    "deleted_blog_ids": JSON.stringify(blog_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/blog")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })

}