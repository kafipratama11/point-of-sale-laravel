@extends('layouts.app')
@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="container-card-dashboard d-flex">
                  <div class="w-100">
                        <div class="menu-wrapp w-100 d-flex gap-1 px-4 mt-3">
                              <div class="menu-card p-2 bg-white w-100 px-3">
                                    <div class="d-flex gap-2 align-items-center">
                                          <div class="text-black fw-medium product-name-wrapp">Sprite</div>
                                          <div class="rounded-pill border px-2 menu-category text-secondary fw-medium me-auto">Drink</div>
                                          <div>
                                                <a href="" class="link-underline link-underline-opacity-0 link-secondary">
                                                      <i class="bi bi-three-dots" style="font-size: 20px"></i>
                                                </a>
                                          </div>
                                    </div>
                                    <div class="product-price">
                                          Rp13.300,00
                                    </div>
                                    <div class="stock d-flex gap-1 mt-2">
                                          <div class="fw-normal text-secondary">Stock</div>
                                          <div class="fw-semibold text-secondary">17</div>
                                    </div>
                              </div>
                              <div class="menu-card p-2 bg-white w-100 px-3">
                                    <div class="d-flex gap-2 align-items-center">
                                          <div class="text-black fw-medium product-name-wrapp">Sprite</div>
                                          <div class="rounded-pill border px-2 menu-category text-secondary fw-medium me-auto">Drink</div>
                                          <div>
                                                <a href="" class="link-underline link-underline-opacity-0 link-secondary">
                                                      <i class="bi bi-three-dots" style="font-size: 20px"></i>
                                                </a>
                                          </div>
                                    </div>
                                    <div class="product-price">
                                          Rp13.300,00
                                    </div>
                                    <div class="stock d-flex gap-1 mt-2">
                                          <div class="fw-normal text-secondary">Stock</div>
                                          <div class="fw-semibold text-secondary">17</div>
                                    </div>
                              </div>
                              <div class="menu-card p-2 bg-white w-100 px-3">
                                    <div class="d-flex gap-2 align-items-center">
                                          <div class="text-black fw-medium product-name-wrapp">Sprite</div>
                                          <div class="rounded-pill border px-2 menu-category text-secondary fw-medium me-auto">Drink</div>
                                          <div>
                                                <a href="" class="link-underline link-underline-opacity-0 link-secondary">
                                                      <i class="bi bi-three-dots" style="font-size: 20px"></i>
                                                </a>
                                          </div>
                                    </div>
                                    <div class="product-price">
                                          Rp13.300,00
                                    </div>
                                    <div class="stock d-flex gap-1 mt-2">
                                          <div class="fw-normal text-secondary">Stock</div>
                                          <div class="fw-semibold text-secondary">17</div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="transaction-container px-3 bg-white">
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
                              <div class="py-2">
                                    <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div>1</div>
                                                <div class="me-auto">Chitos</div>
                                                <div>Rp12.000,00</div>
                                          </div>
                                    </div>
                                    <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div>3</div>
                                                <div class="me-auto">Mogu Mogu</div>
                                                <div>Rp34.500,00</div>
                                          </div>
                                    </div>
                                    <div class="list-menu-wrapp py-1">
                                          <div class="d-flex gap-3">
                                                <div>7</div>
                                                <div class="me-auto">Indomie Soto</div>
                                                <div>Rp27.400,00</div>
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
