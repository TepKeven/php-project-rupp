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

function getCartItems(){

    var cart_table = "";
    var subtotal_price = 0;
    var total_price_tax = 0;

    var cart_products = JSON.parse(localStorage.getItem("cart_items"));

    var cart_product_ids = cart_products.map(cart_product => {
        return cart_product.product_id;
    })

    $.ajax({
        url: "api/product",
        type: "POST",
        data: {
            "cart_product_ids": JSON.stringify(cart_product_ids)
        },
        success: function (response, status, xhr) {

            var products = JSON.parse(response)

            cart_products = products.map(product => {

                var cart_product = cart_products.find(cart_product => cart_product.product_id == product.product_id);

                product.quantity = cart_product.quantity;

                return product;

            })

            for(let cart_product of cart_products){

                cart_table += `<tr>
                    <td class="text-center align-middle">
                        <img src="${cart_product.image == null ? "/public/assets/no_image.png" : "/public/images/product/" + cart_product.image}" alt="Product" width="100" height="100" />
                    </td>
                    <td class="text-center align-middle">${cart_product.name}</td>
                    <td class="text-center align-middle">${cart_product.quantity}</td>
                    <td class="text-center align-middle">$${parseFloat(cart_product.price).toFixed(2)} + ($${parseInt(cart_product.tax_price)})</td>
                    <td class="text-center align-middle">$${(parseFloat(cart_product.price) + parseFloat(cart_product.tax_price)) * parseInt(cart_product.quantity)}</td>
                    <td class="text-center align-middle">
                        <button type="button" title="Delete" class="btn-cart btn btn-danger" onclick="removeFromCart(event,${cart_product.product_id})"><i class="">Trash</i></button>
                    </td>
                </tr>`

                subtotal_price += parseFloat(cart_product.price) * parseInt(cart_product.quantity);
                total_price_tax += (parseFloat(cart_product.price) + parseFloat(cart_product.tax_price)) * parseInt(cart_product.quantity);
            }
        
            document.querySelector("#cart-table tbody").innerHTML = cart_table;
            document.querySelector("#cart-subtotal span").innerHTML = "$" + subtotal_price;
            document.querySelector("#cart-total-tax span").innerHTML = "$" + total_price_tax;

        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
        },
    });
}

function removeFromCart(event,product_id){

    // Remove from cart
    // list cart in checkout
    // new field for product_id in checkout

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