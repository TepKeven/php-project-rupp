var order_products = []

function addProductToOrder(){

    var order_product_id = document.getElementById("order_product_id").value
    var order_product_quantity = document.getElementById("order_product_quantity").value ;

    if(order_products.find(order_product => order_product.product_id == order_product_id)){

       order_products.map(order_product => {
            if(order_product.product_id == order_product_id){
                order_product.quantity += isNaN(parseInt(order_product_quantity)) ? 0 : parseInt(order_product_quantity)
            }
       })
    }

    else{

        order_products.push({
            product_id: order_product_id,
            quantity: isNaN(parseInt(order_product_quantity)) ? 0 : parseInt(order_product_quantity)
        })
    }

    var order_product_table = "";

    var product_ids = order_products.map(order_product => {
        return order_product.product_id
    })

    $.ajax({
        url: "api/admin/orderproduct",
        type: "POST",
        data: {
            "order_product_ids": JSON.stringify(product_ids)
        },
        success: function (response, status, xhr) {

            var products = JSON.parse(response)

            for(let product of products){

                var order_product = order_products.find(order_product => order_product.product_id == product.product_id)

                order_product_table += `<tr>
                    <td class="text-center align-middle">${product.name}</td>
                    <td class="text-center align-middle">${product.model}</td>
                    <td class="text-center align-middle">${order_product.quantity}</td>
                    <td class="text-center align-middle">${product.price}</td>
                    <td class="text-center align-middle">${(parseFloat(product.price) + parseFloat(product.tax_price)) * parseInt(order_product.quantity)}</td>
                    <td class="text-center align-middle">
                        <button type="button" title="Delete" class="btn-order-product btn btn-danger" onclick="removeProductFromOrder(event,${product.product_id})"><i class="ti-trash"></i></button>
                    </td>
                </tr>`
            }
        
            document.querySelector("#tab-products tbody").innerHTML = order_product_table;
            document.getElementById("order_product_items").value = JSON.stringify(order_products)

        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
        },
    });

    

}

function getProductsToOrder(order_id){

    var order_product_table = "";

    $.ajax({
        url: "api/admin/orderproduct",
        type: "GET",
        data: {
            "order_id": order_id
        },
        success: function (response, status, xhr) {

            var products = JSON.parse(response)

            order_products = products.map(product => {

                return {
                    product_id: product.product_id,
                    quantity: parseInt(product.quantity)
                }
            })

            for(let product of products){

                order_product_table += `<tr>
                    <td class="text-center align-middle">${product.name}</td>
                    <td class="text-center align-middle">${product.model}</td>
                    <td class="text-center align-middle">${product.quantity}</td>
                    <td class="text-center align-middle">${product.price}</td>
                    <td class="text-center align-middle">${product.total}</td>
                    <td class="text-center align-middle">
                        <button type="button" title="Delete" class="btn-order-product btn btn-danger" onclick="removeProductFromOrder(event,${product.product_id})"><i class="ti-trash"></i></button>
                    </td>
                </tr>`
            }
        
            document.querySelector("#tab-products tbody").innerHTML = order_product_table;
            document.getElementById("order_product_items").value = JSON.stringify(order_products)

        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
        },
    });
}

function removeProductFromOrder(event,product_id){

    var current_row = event.target.parentNode.parentNode

    order_products = order_products.filter(order_product => {
        
        return order_product.product_id != product_id
    })

    current_row.remove();

    document.getElementById("order_product_items").value = JSON.stringify(order_products)

}

function deleteOrders(){

    var order_delete_ids = [];
    var order_checkboxes = document.getElementsByClassName("table-checkbox");

    for(let order_checkbox of order_checkboxes){

        if(order_checkbox.checked == true){

            order_delete_ids.push(order_checkbox.value)
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
                    "deleted_order_ids": JSON.stringify(order_delete_ids)
                },
                success: function (response, status, xhr) {
                  window.location.assign("/admin/order")
                },
                error: function (jqXhr, textStatus, errorMessage) {
                  console.log(errorMessage);
                },
            });
        } 
    })
}