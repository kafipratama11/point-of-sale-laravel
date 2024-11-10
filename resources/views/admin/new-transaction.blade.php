@extends('layouts.app')

@push('styles')
@livewireStyles
@endpush

@push('script')
@livewireScripts
@endpush

@section('breadcrumb')
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">New Transaction</li>
      </ol>
</nav>
@endsection

@section('main')
<div class="d-flex main-container overflow-hidden">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="container-card-dashboard d-flex">
                  <div class="menu-container w-100">
                        <div class="menu-wrapp p-4 mb-5 row" id="product-list">
                              @foreach ($products as $product)
                              <div class="menu-card p-2 pt-3 bg-white px-3 col-xxl-3 col-xl-4 col-md-6 col-sm-12" style="border: 0.5px solid #f5f5f5;">
                                    <div class="d-flex gap-2 align-items-start">
                                          <div class="text-black fw-medium product-name-wrapp lh-sm text-capitalize">{{ $product->name }}</div>
                                    </div>
                                    <div class="product-price">
                                          {{ 'Rp ' . number_format($product->price, 0, ',', '.') }}
                                    </div>
                                    <div class="stock d-flex gap-1 mt-2">
                                          <div class="fw-normal text-secondary">Stock</div>
                                          <div class="fw-semibold text-secondary me-auto">{{ $product->stock }}</div>
                                          <div>
                                                <button class="text-white background-primary btn add-to-order" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})">
                                                      <i class="bi bi-plus-lg" style="font-size: 16px"></i>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                              @endforeach
                        </div>
                  </div>
                  <div class="transaction-container px-3 bg-white border-start">
                        <form action="" method="post">
                              <div>
                                    <div class="d-flex border-bottom">
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
                                                {{-- <li class="list-group-item">Your selected products will appear here.</li> --}}
                                                <div class="cart" id="cart">
                                                      <div id="cart-items"></div>
                                                </div>
                                          </div>
                                          <div class="mt-2 mb-5 total-wrapp">
                                                <div class="d-flex py-2 border-bottom total-order">
                                                      <div class="me-auto">Sub Total</div>
                                                      <div id="total-price">0</div>
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
                                                            <select class="form-select" aria-label="Default select example" style="font-size: 12px" name="payment_method">
                                                                  <option value="cash">Cash</option>
                                                                  <option value="e-wallet">E-Wallet</option>
                                                                  <option value="card">Card</option>
                                                            </select>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="d-flex gap-1 align-items-center justify-content-center w-100 pt-3 pb-4">
                                                <button type="submit" class="btn background-primary w-100 text-white" style="font-size: 14px">Finish</button>
                                                <button type="button" class="btn w-100 border-0" style="background-color: #EBF4F6; font-size: 14px;">Cancel</button>
                                          </div>
                                    </div>
                              </div>
                        </form>
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
                                                      <div class="cart" id="cart">
                                                            <div id="cart-items"></div>
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
                                                                              <option value="cash">Cash</option>
                                                                              <option value="e-wallet">E-Wallet</option>
                                                                              <option value="card">Card</option>
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
@endsection
