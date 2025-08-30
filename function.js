
let cart = [];

function addToCart(id, name, price, image) {
    let found = cart.find(item => item.id === id);

    if (found) {
        found.quantity += 1; 
    } else {
        cart.push({ id, name, price, image, quantity: 1 });
    }

    displayCart();
    total();
    let offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
    offcanvas.show();
}

function increaseQty(id) {
    let item = cart.find(p => p.id === id);
    if (item) {
        item.quantity++;
        displayCart();
    }
}

function decreaseQty(id) {
    let item = cart.find(p => p.id === id);
    if (item && item.quantity > 1) {
        item.quantity--;
    } else {
        cart = cart.filter(p => p.id !== id); 
    }
    displayCart();
}

function displayCart() {
    let cartContainer = document.getElementById("cartItems");
    cartContainer.innerHTML = "";

    if (cart.length === 0) {
        cartContainer.innerHTML = "<p>Your cart is currently empty.</p>";
        return;
    }

    let total = 0;

    cart.forEach(item => {
        let price = parseFloat(item.price);

        cartContainer.innerHTML += `  
          <div class="d-flex align-items-center mb-2 border-bottom pb-2">
              <img src="${item.image}" style="width:50px; height:50px; object-fit:cover; margin-right:10px;">
              <div class="flex-grow-1">
                <strong>${item.name}</strong><br>
                PKR ${price}
              </div> <br><br>
              <div class="d-flex align-items-center" style="">
                <button class="btn btn-sm btn-outline-secondary" onclick="decreaseQty('${item.id}')">-</button>
                <span class="mx-2">${item.quantity}</span>
                <button class="btn btn-sm btn-outline-secondary" onclick="increaseQty('${item.id}')">+</button>
                 <!-- 🗑 Dustbin Button -->
            <button class="btn btn-sm btn-outline-danger ms-2" onclick="removeFromCart('${item.id}')">
              🗑
            </button>
          </div>
        </div>
       `;

        total += price * item.quantity;
    });

    cartContainer.innerHTML += `<div class="text-end mt-3">
        <strong>Total: PKR ${total}</strong>
    </div>`;
}

function total(){
    let total = 0;
    cart.forEach(item => {
        let price = parseFloat(item.price);
        total += price * item.quantity;
    });
    return total;
}
function removeFromCart(id) {
    cart = cart.filter(item => item.id !== id);
    displayCart();
}

