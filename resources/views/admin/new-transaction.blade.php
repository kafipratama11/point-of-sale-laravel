@extends('layouts.app')
@section('main')
<div class="d-flex main-container overflow-hidden">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="container-card-dashboard d-flex">
                  <div class="menu-container w-100">
                        
                        <div class="p-4 pb-0 row">
                              <input class="form-control rounded-0" id="search" type="text" placeholder="Search product..." aria-label=".form-control-sm example">
                        </div>
                        <div class="menu-wrapp p-4 mb-5 row" id="product-list">
                              <!-- Input Search -->
                              @foreach ($products as $product)
                              <div class="menu-card p-2 pt-3 bg-white px-3 col-xl-4 col-md-6 col-sm-12 border">
                                    <div class="d-flex gap-2 align-items-start">
                                          <div class="text-black fw-medium product-name-wrapp lh-sm">{{ $product['product_name'] }}</div>
                                          <div class="rounded-pill border px-2 menu-category text-secondary fw-medium me-auto">{{ $product['category'] }}</div>
                                    </div>
                                    <div class="product-price">
                                          Rp{{ $product['price'] }}
                                    </div>
                                    <div class="stock d-flex gap-1 mt-2">
                                          <div class="fw-normal text-secondary">Stock</div>
                                          <div class="fw-semibold text-secondary me-auto">17</div>
                                          <div>
                                                <button class="text-white background-primary btn add-to-order">
                                                      <i class="bi bi-plus-lg" style="font-size: 16px"></i>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                              @endforeach
                        </div>
                        <!-- Daftar Pesanan -->
                        {{-- <h2 class="mt-4">Order List</h2> --}}
                  </div>
                  <div class="transaction-container px-3 bg-white">
                        <div>
                              <div class="d-flex border-top border-bottom">
                                    <div class="pt-2 pb-3">
                                          <div class="member-name fw-bold text-black">Jessica Kimberly</div>
                                          <div class="phone-member text-primary">0821-7414-0161</div>
                                    </div>
                              </div>
                              <div>
                                    <div class="date-wrapp d-flex py-2 border-bottom">
                                          <div class="text-secondary">Tuesday, 07 March 2023</div>
                                          <div></div>
                                    </div>
                                    <div class="py-2 order-list" id="order-list">
                                          <li class="list-group-item">Your selected products will appear here.</li>
                                          {{-- <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div>1</div>
                                                <div class="me-auto">Chitos</div>
                                                <div>Rp12.000,00</div>
                                                <a href="" class="link-secondary">
                                                      <i class="bi bi-x-lg"></i>
                                                </a>
                                          </div>
                                    </div> --}}
                                          {{-- <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div>3</div>
                                                <div class="me-auto">Mogu Mogu</div>
                                                <div>Rp34.500,00</div>
                                                <a href="" class="link-secondary">
                                                      <i class="bi bi-x-lg"></i>
                                                </a>
                                          </div>
                                    </div>
                                    <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div>7</div>
                                                <div class="me-auto">Indomie Soto</div>
                                                <div>Rp27.400,00</div>
                                                <a href="" class="link-secondary">
                                                      <i class="bi bi-x-lg"></i>
                                                </a>
                                          </div>
                                    </div> --}}
                                    </div>
                                    <div class="mt-2 mb-5 total-wrapp">
                                          <div class="d-flex py-2 border-bottom total-order">
                                                <div class="me-auto">Sub Total</div>
                                                <div id="total-order-value"></div>
                                          </div>
                                          <div class="d-flex py-2 border-bottom">
                                                <div class="me-auto">Discount</div>
                                                <div>Rp13.900,00</div>
                                          </div>
                                          <div class="d-flex py-2 border-bottom">
                                                <div class="me-auto">PPN</div>
                                                <div>11%</div>
                                          </div>
                                          <div class="d-flex py-2 border-bottom">
                                                <div class="me-auto">Grand Total</div>
                                                <div class="fw-semibold">Rp67.000,00</div>
                                          </div>
                                          <div class="d-flex py-2 align-items-center border-bottom">
                                                <div class="me-auto">Payment Method</div>
                                                <div class="fw-semibold">
                                                      <select class="form-select" aria-label="Default select example" style="font-size: 12px">
                                                            <option value="1">Cash</option>
                                                            <option value="2">Dana</option>
                                                            <option value="3">Ovo</option>
                                                            <option value="3">Card</option>
                                                      </select>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center justify-content-center w-100 pt-3 pb-4">
                                          <button type="button" class="btn background-primary w-100 text-white" style="font-size: 14px">Finish</button>
                                          <button type="button" class="btn w-100" style="background-color: #EBF4F6; font-size: 14px;">Cancel</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="accordion accordin-transaction fixed-bottom" id="accordionExample">
                        <div class="accordion-item">
                              <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Lihat Pesanan
                                    </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                          <div class="transaction-container-accordin px-3 bg-white w-100">
                                                <div class="d-flex border-top border-bottom">
                                                      <div class="pt-2 pb-3">
                                                            <div class="member-name fw-bold text-black">Jessica Kimberly</div>
                                                            <div class="phone-member text-primary">0821-7414-0161</div>
                                                      </div>
                                                </div>
                                                <div>
                                                      <div class="date-wrapp d-flex py-2 border-bottom">
                                                            <div class="text-secondary">Tuesday, 07 March 2023</div>
                                                            <div></div>
                                                      </div>
                                                      <div class="py-2 order-list" id="order-list">
                                                            <div class="list-menu-wrapp py-1">
                                                                  <div class="d-flex gap-3">
                                                                        <div>1</div>
                                                                        <div class="me-auto">Chitos</div>
                                                                        <div>Rp12.000,00</div>
                                                                        <a href="" class="link-secondary">
                                                                              <i class="bi bi-x-lg"></i>
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                            <div class="list-menu-wrapp py-1">
                                                                  <div class="d-flex gap-3">
                                                                        <div>3</div>
                                                                        <div class="me-auto">Mogu Mogu</div>
                                                                        <div>Rp34.500,00</div>
                                                                        <a href="" class="link-secondary">
                                                                              <i class="bi bi-x-lg"></i>
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                            <div class="list-menu-wrapp py-1">
                                                                  <div class="d-flex gap-3">
                                                                        <div>7</div>
                                                                        <div class="me-auto">Indomie Soto</div>
                                                                        <div>Rp27.400,00</div>
                                                                        <a href="" class="link-secondary">
                                                                              <i class="bi bi-x-lg"></i>
                                                                        </a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="mt-2 mb-5 total-wrapp">
                                                            <div class="d-flex py-2 border-bottom">
                                                                  <div class="me-auto">Sub Total</div>
                                                                  <div>Rp73.900,00</div>
                                                            </div>
                                                            <div class="d-flex py-2 border-bottom">
                                                                  <div class="me-auto">Discount</div>
                                                                  <div>Rp13.900,00</div>
                                                            </div>
                                                            <div class="d-flex py-2 border-bottom">
                                                                  <div class="me-auto">PPN</div>
                                                                  <div>11%</div>
                                                            </div>
                                                            <div class="d-flex py-2 border-bottom">
                                                                  <div class="me-auto">Grand Total</div>
                                                                  <div class="fw-semibold">Rp67.000,00</div>
                                                            </div>
                                                            <div class="d-flex py-2 align-items-center border-bottom">
                                                                  <div class="me-auto">Payment Method</div>
                                                                  <div class="fw-semibold">
                                                                        <select class="form-select" aria-label="Default select example" style="font-size: 12px">
                                                                              <option value="1">Cash</option>
                                                                              <option value="2">Dana</option>
                                                                              <option value="3">Ovo</option>
                                                                              <option value="3">Card</option>
                                                                        </select>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="d-flex gap-1 align-items-center justify-content-center w-100 pt-3 pb-4">
                                                            <button type="button" class="btn background-primary w-100 text-white" style="font-size: 14px">Finish</button>
                                                            <button type="button" class="btn w-100" style="background-color: #EBF4F6; font-size: 14px;">Cancel</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script>
      $(document).ready(function() {
            $('#collapseExample').on('show.bs.collapse', function() {
                  $('#collapseSort').collapse('hide');
            });
            $('#collapseSort').on('show.bs.collapse', function() {
                  $('#collapseExample').collapse('hide');
            });
      });

</script>
<script>
      let orderList = [];

      $(document).ready(function() {
            function loadAllProducts() {
                  $.ajax({
                        url: "{{ route('products.search') }}", // Tambahkan route baru untuk mengambil semua produk
                        type: 'GET'
                        , success: function(data) {
                              $('#product-list').empty();
                              if (data.length > 0) {
                                    $.each(data, function(index, product) {
                                          let productInOrder = orderList.find(item => item.product_name === product.product_name);
                                          let disabled = productInOrder ? 'disabled' : ''; // Disable jika produk ada di order list

                                          $('#product-list').append(`
                                                <div class="menu-card p-2 pt-3 bg-white px-3 col-xl-4 col-md-6 col-sm-12 border">
                                                      <div class="d-flex gap-2 align-items-start">
                                                            <div class="text-black fw-medium product-name-wrapp lh-sm">` + product.product_name + `</div>
                                                            <div class="rounded-pill border px-2 menu-category text-secondary fw-medium">` + product.category + `</div>
                                                      <div>
                                                </div>
                                          </div>
                                          <div class="product-price">
                                                Rp` + product.price + `
                                          </div>
                                          <div class="stock d-flex gap-1 mt-2">
                                                <div class="fw-normal text-secondary">Stock</div>
                                                <div class="fw-semibold text-secondary me-auto">17</div>
                                                <div>
                                                      <button class="text-white background-primary btn add-to-order" data-product='` + JSON.stringify(product) + `' ` + disabled + `>
                                                            <i class="bi bi-plus-lg" style="font-size: 16px"></i>
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                                    `);
                                    });
                              } else {
                                    $('#product-list').append('<p>No products available.</p>');
                              }
                        }
                  });
            }

            // Load semua produk saat halaman pertama kali dimuat
            loadAllProducts();

            // Event listener untuk search
            $('#search').on('keyup', function() {
                  var query = $(this).val();

                  if (query.length > 0) {
                        $.ajax({
                              url: "{{ route('products.search') }}"
                              , type: 'GET'
                              , data: {
                                    query: query
                              }
                              , success: function(data) {
                                    $('#product-list').empty();
                                    if (data.length > 0) {
                                          $.each(data, function(index, product) {
                                                let productInOrder = orderList.find(item => item.product_name === product.product_name);
                                                let disabled = productInOrder ? 'disabled' : ''; // Disable jika produk ada di order list

                                                $('#product-list').append(`
                                                <div class="menu-card p-2 bg-white px-3 col-xl-4 col-md-6 col-sm-12 border">
                                                      <div class="d-flex gap-2 align-items-start">
                                                            <div class="text-black fw-medium product-name-wrapp lh-sm w-100">` + product.product_name + `</div>
                                                            <div class="rounded-pill border px-2 menu-category text-secondary fw-medium">` + product.category + `</div>
                                                      <div>
                                                </div>
                                          </div>
                                          <div class="product-price">
                                                Rp` + product.price + `
                                          </div>
                                          <div class="stock d-flex gap-1 mt-2">
                                                <div class="fw-normal text-secondary">Stock</div>
                                                <div class="fw-semibold text-secondary me-auto">17</div>
                                                <div>
                                                      <button class="text-white background-primary btn add-to-order" data-product='` + JSON.stringify(product) + `' ` + disabled + `>
                                                            <i class="bi bi-plus-lg" style="font-size: 16px"></i>
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                                                `);
                                          });
                                    } else {
                                          $('#product-list').append('<p>No products found.</p>');
                                    }
                              }
                        });
                  } else {
                        // Jika input search kosong, tampilkan semua produk kembali
                        loadAllProducts();
                  }
            });

            // Event listener untuk menambahkan produk ke daftar pesanan
            $(document).on('click', '.add-to-order', function() {
                  let product = $(this).data('product');
                  product.qty = 1; // Set default qty to 1
                  orderList.push(product); // Tambahkan produk ke daftar pesanan

                  // Nonaktifkan tombol setelah produk dipilih
                  $(this).prop('disabled', true);

                  updateOrderList(); // Update tampilan daftar pesanan
            });

            // Fungsi untuk menampilkan daftar pesanan dan input qty di daftar pesanan
            function updateOrderList() {
                  $('.order-list').empty();

                  if (orderList.length > 0) {
                        $.each(orderList, function(index, product) {
                              $('.order-list').append(`
                                    <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div class="qty-order">
                                                      <input type="number" class="form-control qty-input" value="` + product.qty + `" min="1" data-index="` + index + `"/>      
                                                </div>
                                                <div class="me-auto product-name-order-list text-break">` + product.product_name + `</div>
                                                <div class="product-price-order">Rp` + product.price + `</div>
                                                <a class="link-secondary remove-from-order" data-index="` + index + `">
                                                      <i class="bi bi-x-lg"></i>
                                                </a>
                                          </div>
                                    </div>
                              `);
                        });
                  } else {
                        $('.order-list').append('<li class="list-group-item">Your selected products will appear here.</li>');
                  }
            }

            // Event listener untuk mengubah quantity di daftar pesanan
            $(document).on('input', '.qty-order', function() {
                  let index = $(this).data('index');
                  let newQty = $(this).val();
                  orderList[index].qty = newQty; // Update qty di orderList array
            });

            // Event listener untuk menghapus produk dari daftar pesanan
            $(document).on('click', '.remove-from-order', function() {
                  let index = $(this).data('index');
                  let removedProduct = orderList[index];
                  orderList.splice(index, 1); // Hapus produk dari array orderList

                  // Aktifkan kembali tombol 'Pilih' pada daftar produk
                  $(`button[data-product='{"product_name":"${removedProduct.product_name}","price":"${removedProduct.price}","category":"${removedProduct.category}"}']`).prop('disabled', false);

                  updateOrderList(); // Update tampilan daftar pesanan
            });
      });

      // Function to format number as currency (Rupiah)
      function formatCurrency(number) {
            return number.toLocaleString('id-ID', {
                  minimumFractionDigits: 2
                  , maximumFractionDigits: 2
            });
      }

      // Function to calculate total order value
      function calculateTotalOrder() {
            let totalOrder = 0;
            // Loop through each product card
            document.querySelectorAll('.order-list').forEach(card => {
                  const price = parseFloat(card.querySelector('.product-price-order').innerText.replace('Rp', '').replace('.', '').replace(',', '.'));
                  const qty = parseInt(card.querySelector('.qty-input').value);
                  const subtotal = price * qty;

                  // Add subtotal to total order
                  totalOrder += subtotal;
            });

            // Update total order in the DOM
            document.getElementById('total-order-value').innerText = formatCurrency(totalOrder);
      }

      // Attach event listeners to all quantity inputs
      document.querySelectorAll('.qty-input').forEach(input => {
            input.addEventListener('input', function() {
                  // Recalculate total order whenever quantity is changed
                  calculateTotalOrder();
            });
      });

      // Initial calculation of total order when the page loads
      calculateTotalOrder();

</script>
@endsection
