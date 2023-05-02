function addToCart(product_id, quantity = 1){

    var cart_products = JSON.parse(localStorage.getItem("cart_items") === null ? "[]" : localStorage.getItem("cart_items"));

    if(cart_products.find(cart_product => cart_product.product_id == product_id)){

        cart_products.map(cart_product => {

            if(cart_product.product_id == product_id){
                cart_product.quantity += isNaN(parseInt(quantity)) ? 0 : parseInt(quantity)
            }
       })
    }

    else{

        cart_products.push({
            product_id: product_id,
            quantity: isNaN(parseInt(quantity)) ? 0 : parseInt(quantity)
        })
    }

    localStorage.setItem("cart_items", JSON.stringify(cart_products));

    Swal.fire({
        title: 'Add to Cart Successfully',
        icon: 'info'
    });

}

function addToCartQuantity(product_id){

    var cart_products = JSON.parse(localStorage.getItem("cart_items") === null ? "[]" : localStorage.getItem("cart_items"));
    var product_quantity = document.getElementById("product-quantity").value;

    if(cart_products.find(cart_product => cart_product.product_id == product_id)){

        cart_products.map(cart_product => {

            if(cart_product.product_id == product_id){
                cart_product.quantity += isNaN(parseInt(product_quantity)) ? 0 : parseInt(product_quantity)
            }
       })

    }

    else{

        cart_products.push({
            product_id: product_id,
            quantity: isNaN(parseInt(product_quantity)) ? 0 : parseInt(product_quantity)
        })
    }

    localStorage.setItem("cart_items", JSON.stringify(cart_products));

    Swal.fire({
        title: 'Add to Cart Successfully',
        icon: 'info'
    });
}

function getCartItems(){

    var cart_table = "";
    var subtotal_price = 0;
    var total_price_tax = 0;

    var cart_products = JSON.parse(localStorage.getItem("cart_items") === null ? "[]" : localStorage.getItem("cart_items"));

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

function removeFromCart(event, product_id){

    var cart_products = JSON.parse(localStorage.getItem("cart_items") === null ? "[]" : localStorage.getItem("cart_items"));

    cart_products = cart_products.filter(cart_product => {

        return cart_product.product_id != product_id;
    })

    localStorage.setItem("cart_items", JSON.stringify(cart_products))

    getCartItems();

    // Remove from cart
    // list cart in checkout
    // new field for product_id in checkout

}

