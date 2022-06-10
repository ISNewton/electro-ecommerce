const searchInput = document.querySelector("#search");

let searchHolder = document.querySelector(".search-bar");

searchInput.addEventListener("keyup", async e => {
    //searchHolder.innerText = "";
    if (e.target.value.trim().length) {
        let req = await fetch(`${window.location.origin}/search_product/${e.target.value}`);
        let response = await req.json();

        if (response.result.length) {
            let div = document.createElement("div");
            for (var i = 0; i < response.result.length; i++) {
                let a = document.createElement("a");

                a.innerHTML = `<img width="50px" height="50px" src="${window.location.origin}/${response.result[i].images[0]["image_name"]}"><span>${response.result[i].product_name}</span>`;
                a.href = `${window.location.origin}/product/${response.result[i].id}`;
                a.className = "search-bar-item";
                div.appendChild(a);
            }

            searchHolder.replaceChildren(div);

            searchHolder.style.display = "inline";
            return;
        }
    }
    searchHolder.style.display = "none";
});

function showCartItems(cart) {
    const cartList = document.getElementById("cart-list");

    let component = cart.map(product => {
        return `
      <li class="mini_cart_item">
      <a title="Remove this item" class="remove" href="#">×</a>
      <a href="single-product.html">
          <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="${product["product"]["images"][0]["image_name"]}" alt="">White lumia 9001&nbsp;
      </a>
      <span class="quantity">${product["quantity"]} × <span class="amount">${product["price"]}</span></span>
      </li>
      `;
    });

    cartList.replaceChildren(component);
}




// Add product to cart
let cartButtons = document.querySelectorAll(".add_to_cart_button");

for (var i = 0; i < cartButtons.length; i++) {
    cartButtons[i].addEventListener("click", async e => {
        const product_id = e.target.dataset.id;
        const response = await fetch(`${window.location.origin}/add_to_cart/${product_id}`);
        const result = await response.json();

        new Noty({
            text: result.message,
            type: result.type,
            timeout: 2000,
            theme: "relax"
        }).show();
    });
}





// Add product to wishlist
let wishlistButtons = document.querySelectorAll(".add_to_wishlist");

for (var i = 0; i < wishlistButtons.length; i++) {
    wishlistButtons[i].addEventListener("click", async e => {
        const product_id = e.target.dataset.id;
        const response = await fetch(`${window.location.origin}/add_to_wishlist/${product_id}`);
        const result = await response.json();

        new Noty({
            text: result.message,
            type: result.type,
            timeout: 2000,
            theme: "relax"
        }).show();
        console.log(99);
    });
}



