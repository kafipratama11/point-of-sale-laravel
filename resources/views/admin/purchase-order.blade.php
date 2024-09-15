@extends('layouts.app')
@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="px-4 d-flex mt-3">
                  <div class="me-auto fw-medium">Dashboard</div>
                  <button type="button" class="btn background-primary text-white btn-add"><i class="bi bi-plus-lg"></i> Add Product</button>
            </div>
            <div class="px-4 mt-3 d-flex gap-3">
                  <div class="card w-100 border-0">
                        <div class="card-body"></div>
                  </div>
                  <div class="card w-100 border-0">
                        <div class="card-body"></div>
                  </div>
                  <div class="card w-100 border-0">
                        <div class="card-body"></div>
                  </div>
                  <div class="card w-100 border-0">
                        <div class="card-body"></div>
                  </div>
            </div>
            <div class="px-4 mt-3">
                  <div class="bg-white rounded border">
                        <div class="px-3 py-4 rounded">
                              <div class="fw-medium mb-2">Inventory Items</div>
                              <div class="d-flex">
                                    <div class="me-auto">
                                          <div class="input-group search-products">
                                                <span class="input-group-text bg-white border-end-0" id="basic-addon1"><i class="bi bi-search"></i></span>
                                                <input type="text" class="form-control border-start-0" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1" style="font-size: 14px">
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
                        <table class="table table-hover" style="font-size: 12px">
                              <thead class="table-light">
                                    <tr>
                                          <th scope="col">
                                                <div class="form-check form-check-inline d-flex w-100 h-100 align items-center">
                                                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="height: 15px; width: 15px;">
                                                </div>
                                          </th>
                                          <th scope="col">Borrowing Code</th>
                                          <th scope="col">Product Code</th>
                                          <th scope="col">Product Name</th>
                                          <th scope="col">Quantity</th>
                                          <th scope="col">Loan date</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Action</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <th scope="row">
                                                <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                      <label class="form-check-label" for="flexCheckDefault">
                                                            1
                                                      </label>
                                                </div>
                                          </th>
                                          <td>B020820240001</td>
                                          <td>2FNS-01-003-FM</td>
                                          <td>KUAS BLP 3"</td>
                                          <td>5</td>
                                          <td>12 Juli 2024</td>
                                          <td>
                                                <div class="d-flex gap-2 align-items-center text-success">
                                                      <i class="bi bi-circle-fill" style="font-size: 10px"></i>
                                                      <div class="fw-medium">Borrowed</div>
                                                </div>
                                          </td>
                                          <td>
                                                <a href="" class="link-underline link-underline-opacity-0 link-secondary">
                                                      <i class="bi bi-three-dots" style="font-size: 20px"></i>
                                                </a>
                                          </td>
                                    </tr>
                              </tbody>
                        </table>
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
