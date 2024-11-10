let cart = [];
let totalPrice = 0;


function formatRupiah(number) {
      return new Intl.NumberFormat('id-ID', {
            style: 'currency'
            , currency: 'IDR'
      , }).format(number);
}

// Fungsi untuk menambahkan produk ke keranjang
function addToCart(productId, productName, productPrice) {
      console.log("Product ID:", productId);
      console.log("Product Name:", productName);
      console.log("Product Price:", productPrice);
      const productIndex = cart.findIndex(item => item.id === productId);
      if (productIndex !== -1) {
            cart[productIndex].qty += 1;
      } else {
            cart.push({ id: productId, name: productName, price: productPrice, qty: 1 });
      }
      totalPrice += productPrice;
      updateCart();
}


// Fungsi untuk menghapus produk dari keranjang
function removeFromCart(index) {
      // Kurangi total harga
      totalPrice -= cart[index].price;

      // Hapus item dari array cart
      cart.splice(index, 1);

      // Update tampilan cart di DOM
      updateCart();
}

// Fungsi untuk menambah qty lewat cart
function increaseQty(index) {
      cart[index].qty += 1;
      totalPrice += cart[index].price;
      updateCart();
}

// Fungsi untuk mengurangi qty lewat cart
function decreaseQty(index) {
      const product = cart[index];

      if (product.qty > 1) {
            product.qty -= 1;
            totalPrice -= product.price;
      } else {
            // Jika qty = 1, hapus produk
            totalPrice -= product.price;
            cart.splice(index, 1);
      }

      updateCart();
}

// Fungsi untuk menampilkan isi keranjang
function updateCart() {
      const cartItemsDiv = document.getElementById('cart-items');
      const totalPriceSpan = document.getElementById('total-price');

      // Kosongkan isi keranjang sebelum diperbarui
      cartItemsDiv.innerHTML = '';

      // Tampilkan semua item di cart
      cart.forEach((item, index) => {
            const cartItemDiv = document.createElement('div');
            cartItemDiv.className = 'cart-item';

            cartItemDiv.innerHTML = `
            <div class="list-menu-wrapp py-1">
                  <div class="d-flex gap-3 align-items-center">
                        <div class="d-flex gap-2 align-items-center">
                              <button class="btn btn-qty-cart p-0 m-0 border-0 text-secondary" onclick="decreaseQty(${index})">-</button>
                              <div>${item.qty}</div>
                              <button class="btn btn-qty-cart p-0 m-0 border-0 text-secondary" onclick="increaseQty(${index})">+</button>
                        </div>
                        <div class="me-auto text-capitalize">${item.name}</div>
                        <div>${formatRupiah(item.price * item.qty)}</div>
                        <button class="btn p-0 m-0 border-0 text-secondary" onclick="removeFromCart(${index})"><i class="bi bi-x-lg"></i></button>
                  </div>
            </div>
            <input type="number" class="form-control" value="${item.id}" name="cart[${index}][product_id]" hidden>
            <input type="number" class="form-control" value="${item.qty}" name="cart[${index}][quantity]" hidden>
            <input type="number" class="form-control" value="${item.price}" name="cart[${index}][price_at_sale]" hidden>
            <input type="number" class="form-control" value="${item.price}" name="cart[${index}][price_at_sale]" hidden>
            `;

            cartItemsDiv.appendChild(cartItemDiv);
      });

      // Update total harga
      totalPriceSpan.textContent = formatRupiah(totalPrice);
}
