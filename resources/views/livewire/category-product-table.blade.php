<div>
      <div class="px-4 mt-3">
            <div class="bg-white rounded border">
                  <div class="px-3 py-4 rounded">
                        <div class="fw-medium mb-2">Inventory Items</div>
                        <div class="container-heading-table">
                              <div class="me-auto">
                                    <div class="input-group search-products mb-1">
                                          <span class="input-group-text bg-white border-end-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                                          <input wire:model="search" type="search" class="form-control border-start-0" placeholder="Search..." style="font-size: 14px">
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
            <div class="">
                  <table class="table table-hover" style="font-size: 12px">
                        <thead class="table-light">
                              <tr>
                                    <th scope="col">
                                          <div class="form-check form-check-inline d-flex w-100 h-100 align items-center">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height: 15px; width: 15px;">
                                          </div>
                                    </th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Product Amount</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($categories as $index => $category)
                              <tr>
                                    <th scope="row">
                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault{{ $category->id }}">
                                                <label class="form-check-label" for="flexCheckDefault{{ $category->id }}">
                                                      {{ $categories->firstItem() + $index }}
                                                </label>
                                          </div>
                                    </th>
                                    <td class="text-capitalize" style="font-size: 14px">{{ $category->category_name }}</td>
                                    <td></td>
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
                                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                                  @csrf
                                                                  @method('delete')
                                                                  <button class="dropdown-item text-danger d-flex gap-3" type="submit"><i class="bi bi-trash3"></i> Delete</button>
                                                            </form>
                                                      </li>
                                                </ul>
                                          </div>
                                    </td>
                              </tr>
                              <form action="{{ route('category.update', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to update this category?');">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal fade" id="updateProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <div class="modal-title" id="staticBackdropLabel">Create new category</div>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                            <div class="mb-3">
                                                                  <label for="productname" class="form-label">Nama category</label>
                                                                  <input type="text" class="form-control" id="category_name" name="category_name" value="{{ old('category_name', $category->category_name) }}" required>
                                                            </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-modal-close border-0" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-modal-submit background-primary text-white">Simpan</button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </form>
                              @endforeach
                        </tbody>
                  </table>
                  <div class="px-2">
                        {{ $categories->links() }}
                  </div>
            </div>
      </div>
</div>
