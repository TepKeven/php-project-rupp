function customerLogout(){

    $.ajax({
        url: "api/logout",
        type: "POST",
        data: {
            "customer_logout": true
        },
        success: function (response, status, xhr) {
          window.location.assign("/shop")
        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
        },
    });

}