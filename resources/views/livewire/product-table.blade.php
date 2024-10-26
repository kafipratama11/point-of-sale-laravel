<div>
      <div class="px-4 mt-3">
            <div class="bg-white rounded border mb-2">
                  <div class="px-3 py-4 rounded">
                        <div class="fw-medium mb-2">Inventory Items</div>
                        <div class="container-heading-table">
                              <div class="me-auto">
                                    <div class="input-group search-products mb-1">
                                          <span class="input-group-text bg-white border-end-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                                          <input type="text" wire:model="search" class="form-control border-start-0" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" style="font-size: 14px">
                                    </div>
                              </div>
                              <div class="d-flex gap-2">
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
                                                                  {{-- @foreach ($statuses as $status)
                                                                  <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                        <label class="form-check-label" for="defaultCheck1">
                                                                              {{ $status->status_name }}
                                                                  </label>
                                                            </div>
                                                            @endforeach --}}
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
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height: 15px; width: 15px;">
                                          </div>
                                    </th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($products as $index => $product)
                              <tr>
                                    <th scope="row">
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                      {{ $products->firstItem() + $index }}
                                                </label>
                                          </div>
                                    </th>
                                    <td>
                                          <a class="link-offset-2 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="" data-bs-toggle="modal" data-bs-target="#modalDetailProduct{{ $product->id }}">{{ $product->sku }}</a>
                                    </td>
                                    <td class="text-capitalize">{{ $product->name }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td class="text-capitalize">{{ $product->category ? $product->category->category_name : 'N/A' }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                          <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle border-0" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 12px">
                                                      Option
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                      <li>
                                                            <button class="dropdown-item d-flex gap-3" type="button" data-bs-toggle="modal" data-bs-target="#updateProduct"><i class="bi bi-pen"></i> Edit</button>
                                                      </li>
                                                      <li>
                                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                                  @csrf
                                                                  @method('delete')
                                                                  <button class="dropdown-item text-danger d-flex gap-3" type="submit"><i class="bi bi-trash3"></i> Delete</button>
                                                            </form>
                                                      </li>
                                                </ul>
                                          </div>
                                    </td>
                                    <div class="modal fade" id="modalDetailProduct{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                            <div style='text-align: center; gap: 3px;'>
                                                                  <!-- insert your custom barcode setting your data in the GET parameter "data" -->
                                                                  {{-- @foreach ($sku as $item)
                                                                  <img alt='Barcode Generator TEC-IT' src='https://barcode.tec-it.com/barcode.ashx?data={{$item}}&translate-esc=on' />
                                                                  @endforeach --}}
                                                            </div>
                                                            <div class="d-flex gap-2 mt-4">
                                                                  <div>Product Name</div>
                                                                  <div>:</div>
                                                                  <div>{{ $product->name }}</div>
                                                            </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </tr>
                              @endforeach
                        </tbody>
                  </table>
            </div>
      </div>
</div>
