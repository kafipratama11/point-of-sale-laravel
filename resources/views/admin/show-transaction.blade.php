@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('transaction.history') }}" class="link-underline link-underline-opacity-0">Transaction</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $transaction->transaction_code }}</li>
      </ol>
</nav>
@endsection

@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100 pb-4">
            @include('partials.header')
            <div class="px-4 d-flex mt-3">
                  <div class="me-auto fw-medium">Products</div>
                  <a href="/products/categories" class="btn background-primary text-white btn-add me-2">Category</a>
            </div>
            <div class="row justify-content-center p-0 m-0">
                  <div class="col-6 p-0 m-0">
                        <div class="transaction-container px-3 bg-white">
                              <div>
                                    <div class="d-flex border-bottom">
                                          <div class="pt-2 pb-3">
                                                <div class="member-name fw-bold text-black">Jessica Kimberly</div>
                                                <div class="phone-member text-primary">0821-7414-0161</div>
                                          </div>
                                    </div>
                                    <div>
                                          <div class="date-wrapp d-flex py-2 border-bottom">
                                                <div class="text-secondary">{{ $transaction->created_at }}</div>
                                                <div></div>
                                          </div>
                                          <div class="py-2 order-list" id="order-list">
                                                {{-- <li class="list-group-item">Your selected products will appear here.</li> --}}
                                                <div class="cart" id="cart">
                                                      @foreach ($items as $item)
                                                      <div class="list-menu-wrapp list-menu-wrapp-hover py-1">
                                                            <div class="d-flex gap-3 align-items-center">
                                                                  <div class="text-center" style="width: 20px">{{ $item->quantity }}</div>
                                                                  <div class="me-auto text-capitalize">{{ $item->product->name }}</div>
                                                                  <div class="d-flex align-items-center">
                                                                        <div class="text-end">Rp</div>
                                                                        <div class="text-end pe-1" style="width: 70px">{{ number_format($item->price_at_sale*$item->quantity, 0, ',', '.') }}</div>
                                                                  </div>
                                                                  {{-- <button class="btn p-0 m-0 border-0 text-secondary" ><i class="bi bi-x-lg"></i></button> --}}
                                                            </div>
                                                      </div>
                                                      @endforeach
                                                </div>
                                          </div>
                                          <div class="mt-2 mb-2 total-wrapp">
                                                <div class="d-flex py-2 border-bottom total-order">
                                                      <div class="me-auto">Sub Total</div>
                                                      <div id="total-price">Rp{{ number_format($transaction->total_price, 0, ',', '.') }} </div>
                                                </div>
                                                <div class="d-flex py-2 border-bottom">
                                                      <div class="me-auto">Discount</div>
                                                      <div>Rp13.900,00</div>
                                                </div>
                                                <div class="d-flex py-2 border-bottom">
                                                      <div class="me-auto">PPN</div>
                                                      <div>11%</div>
                                                </div>
                                                <div class="d-flex py-2 align-items-center border-bottom">
                                                      <div class="me-auto">Payment Method</div>
                                                      <div class="text-capitalize">{{ $transaction->payment_method }}</div>
                                                </div>
                                                <div class="d-flex py-2 border-bottom">
                                                      <div class="me-auto">Grand Total</div>
                                                      <div class="fw-semibold">Rp67.000,00</div>
                                                </div>
                                          </div>
                                          <div class="d-flex gap-1 align-items-center justify-content-center w-100 pt-3 pb-4">
                                                <form action="{{ route('transaction.destroy', ['encryptedId' => encrypt($transaction->id)])}}" class="w-100" method="post">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="btn bg-danger w-100 text-white" style="font-size: 14px">Hapus Transaksi</button>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

<script>
      new DataTable('#example');

</script>
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
