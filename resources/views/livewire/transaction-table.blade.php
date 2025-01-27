<div>
      <form action="{{ route('transaction.destroy.checkbox')}}" method="POST">
            @csrf
            @method('delete')
            <div class="px-4 mt-3">
                  <div class="bg-white rounded border">
                        <div class="px-3 py-4 rounded">
                              <div class="fw-medium mb-2">Transactions</div>
                              <div class="container-heading-table">
                                    <div class="me-auto">
                                          <div class="input-group search-products mb-1">
                                                <span class="input-group-text bg-white border-end-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                                                <input type="text" class="form-control border-start-0" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" style="font-size: 14px">
                                          </div>
                                    </div>
                                    <div class="d-flex gap-2" style="display: none;">
                                          <div id="delete-button-container">
                                                <button class="m-0 p-0 border-0 bg-danger" type="submit">
                                                      <div class="border px-2 py-1 btn-table text-light"><i class="bi bi-trash3"></i> Delete</div>
                                                </button>
                                          </div>
                                          <div>
                                                <a href="#collapseExample" class="link-underline link-underline-opacity-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                      <div class="border px-2 py-1 btn-table"><i class="bi bi-funnel"></i> Filter</div>
                                                </a>
                                                <div class="collapse position-absolute mt-1 p-0" id="collapseExample">
                                                      <div class="card card-filter p-0 shadow-sm">
                                                            <div class="d-flex p-2">
                                                                  <div class="me-auto fw-medium text-black">Filter</div>
                                                                  <a href="#collapseExample" class="link-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                        <i class="bi bi-x-lg"></i>
                                                                  </a>
                                                            </div>
                                                            <hr class="m-0 p-0">
                                                            <div class="p-2 vstack gap-2">
                                                                  <div>
                                                                        <label for="keyword" class="form-label">Keyword Search</label>
                                                                        <input class="form-control form-control-sm" type="text" placeholder="" aria-label=".form-control-sm example" id="keyword">
                                                                  </div>
                                                                  <div>
                                                                        <label for="status" class="form-label">Status</label>
                                                                  </div>
                                                            </div>
                                                            <hr class="m-0 p-0">
                                                            <div class="d-flex p-2 gap-2">
                                                                  <a href="" class="bg-body-tertiary text-secondary px-2 p-1 link-underline link-underline-opacity-0 rounded me-auto">Reset</a>
                                                                  <a href="" class="background-primary text-white px-2 p-1 link-underline link-underline-opacity-0 rounded">Apply</a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="collapse position-absolute mt-1 p-0" id="collapseSort">
                                                      <div class="card card-filter p-0 shadow-sm">
                                                            <div class="d-flex p-2">
                                                                  <div class="me-auto fw-medium text-black">Sort</div>
                                                                  <a href="#collapseSort" class="link-secondary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseSort">
                                                                        <i class="bi bi-x-lg"></i>
                                                                  </a>
                                                            </div>
                                                            <hr class="m-0 p-0">
                                                            <div class="p-2 vstack gap-2">
                                                                  <div>
                                                                        <label for="status" class="form-label">Product Name</label>
                                                                        <div class="form-check">
                                                                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                                              <label class="form-check-label" for="exampleRadios1">
                                                                                    A-Z
                                                                              </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                                              <label class="form-check-label" for="exampleRadios2">
                                                                                    Z-A
                                                                              </label>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <hr class="m-0 p-0">
                                                            <div class="d-flex p-2 gap-2">
                                                                  <a href="" class="bg-body-tertiary text-secondary px-2 p-1 link-underline link-underline-opacity-0 rounded me-auto">Reset</a>
                                                                  <a href="" class="background-primary text-white px-2 p-1 link-underline link-underline-opacity-0 rounded">Apply</a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <a href="#collapseSort" class="link-underline link-underline-opacity-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseSort">
                                                <div class="border px-2 py-1 btn-table"><i class="bi bi-sort-down"></i> Sort</div>
                                          </a>
                                          <div>
                                                <a href="" class="link-underline link-underline-opacity-0">
                                                      <div class="border px-2 py-1 btn-table d-flex align-items-center gap-1">
                                                            <i class="bi bi-calendar4-week"></i>
                                                            <div>Date</div>
                                                      </div>
                                                </a>
                                          </div>
                                          <div>
                                                <a href="" class="link-underline link-underline-opacity-0">
                                                      <div class="px-2 py-1 btn-table d-flex align-items-center gap-1 background-primary text-white fw-light">
                                                            <i class="bi bi-download"></i>
                                                            <div>Export</div>
                                                      </div>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="overflow-auto">
                              <table class="table table-hover" style="font-size: 12px">
                                    <thead class="table-light">
                                          <tr>
                                                <th scope="col">
                                                      <div class="form-check form-check-inline d-flex w-100 h-100 align items-center">
                                                            <input class="form-check-input" type="checkbox" id="select-all" value="option1" style="height: 15px; width: 15px;">
                                                      </div>
                                                </th>
                                                <th scope="col">Transaction Number</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Cashier</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @php
                                          use Carbon\Carbon;
                                          @endphp
                                          @foreach ($transactions as $index => $transaction)
                                          <tr>
                                                <th scope="row">
                                                      <div class="form-check">
                                                            <input class="form-check-input select-item" type="checkbox" name="ids[]" value="{{ $transaction->id }}" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                  {{ $transactions->firstItem() + $index }}
                                                            </label>
                                                      </div>
                                                </th>
                                                <td>
                                                      <a class="link-offset-2 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="{{ route('transaction.show', ['encryptedId' => encrypt($transaction->id)]) }}">{{ $transaction->transaction_code }}</a>
                                                </td>
                                                <td>{{ Carbon::parse($transaction->created_at)->translatedFormat('d F Y') }}</td>
                                                <td>{{ $transaction->items->sum('quantity') }}</td>
                                                <td>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                                                <td class="text-capitalize">{{ $transaction->payment_method }}</td>
                                                <td>Kafi</td>
                                          </tr>
                                          @endforeach
                                    </tbody>
                              </table>
                              <div class="px-2">
                                    {{ $transactions->links() }}
                              </div>
                        </div>
                  </div>
            </div>
      </form>
</div>
