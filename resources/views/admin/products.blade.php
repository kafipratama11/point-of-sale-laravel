@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Products</li>
      </ol>
</nav>
@endsection

@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="px-4 d-flex mt-3">
                  <div class="me-auto fw-medium">Products</div>
                  <a href="/products/categories" class="btn background-primary text-white btn-add me-2">Category</a>
                  <button type="button" class="btn background-primary text-white btn-add" data-bs-toggle="modal" data-bs-target="#createProduct"><i class="bi bi-plus-lg"></i> New Product</button>
                  <!-- Modal -->
                  <div class="modal fade" id="createProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="modal-header">
                                                <div class="modal-title" id="staticBackdropLabel">Create new product</div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <div class="mb-3">
                                                      <label for="productname" class="form-label">Nama product</label>
                                                      <input type="text" class="form-control" id="name" name="name">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="productcategory">Kategori</label>
                                                      <select class="form-select text-capitalize" id="productcategory" aria-label="Default select example" name="category_id" required>
                                                            <option selected>Pilih kategori</option>
                                                            @foreach ($categories as $category)
                                                            <option class="text-capitalize" value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                            @endforeach
                                                      </select>
                                                </div>
                                                <div class="mb-3">
                                                      <label for="productqty" class="form-label">Jumlah</label>
                                                      <input type="number" class="form-control" id="stock" name="stock">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="productprice" class="form-label">Harga</label>
                                                      <input type="number" class="form-control" id="price" name="price">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="image" class="form-label">Gambar Produk</label>
                                                      <input class="form-control form-control-sm" id="image" type="file" name="image">
                                                </div>
                                                <div class="mb-3">
                                                      <div class="form-floating">
                                                            <textarea class="form-control" name="description" placeholder="Add description here" id="description" style="height: 100px"></textarea>
                                                            <label for="description">Description</label>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-modal-close border-0" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-modal-submit background-primary text-white">Simpan</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
            @livewire('product-table')
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
