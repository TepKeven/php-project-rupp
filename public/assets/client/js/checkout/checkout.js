function listCartCheckout(){

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

            for(let [index, cart_product] of cart_products.entries()){

                cart_table += `<li>
                    ${index + 1}. ${cart_product.name} X ${cart_product.quantity} <span>$ ${parseFloat(cart_product.price) * parseInt(cart_product.quantity)}</span>
                </li>`

                subtotal_price += parseFloat(cart_product.price) * parseInt(cart_product.quantity);
                total_price_tax += (parseFloat(cart_product.price) + parseFloat(cart_product.tax_price)) * parseInt(cart_product.quantity);
            }
        
            document.querySelector("#checkout-products").innerHTML = cart_table;
            document.querySelector("#checkout-total").innerHTML += `<li>Subtotal <span>$ ${subtotal_price}</span></li>`;
            document.querySelector("#checkout-total").innerHTML += `<li>Total <span>$ ${total_price_tax}</span></li>`
            document.getElementById("order_products").value = localStorage.getItem("cart_items");

        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
        },
    });
}

