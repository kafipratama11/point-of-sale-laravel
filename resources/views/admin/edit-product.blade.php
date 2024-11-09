@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="link-underline link-underline-opacity-0">Products</a></li>
            <li class="breadcrumb-item"><a href="{{ route('product.show', ['encryptedId' => encrypt($product->id)]) }}" class="link-underline link-underline-opacity-0">{{ $product->sku }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                  <a href="{{ route('product.show', ['encryptedId' => encrypt($product->id)]) }}" class="btn link-underline link-underline-opacity-0 background-primary text-white px-3 shadow-sm" style="font-size: 14px">Back <i class="bi bi-arrow-left"></i></a>
            </div>
            <div class="px-4 d-flex mt-3" style="font-size: 14px">
                  <div class="row w-100 bg-white rounded border p-0 m-0 shadow-sm card-show-product mb-2">
                        <div class="col-xl-4 col-md-4 col-sm-12 d-flex justify-content-center py-2">
                              @if (empty($product->image))
                              <div class="d-flex justify-content-center align-items-center text-center py-3">
                                    <div>
                                          <div class="mb-5">Tidak ada gambar produk</div>
                                          <form action="{{ route('product.image.update', ['encryptedId' => encrypt($product->id)]) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="d-flex gap-2">
                                                      <input class="form-control form-control-sm" id="image" type="file" name="image">
                                                      <button class="background-primary border-0 rounded px-3 text-white" type="submit">Upload</button>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                              @else
                              <div>
                                    <div class="img-product-wrapp d-flex justify-content-center">
                                          <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
                                    </div>
                                    <button class="btn w-100 bg-danger text-white mt-2" style="font-size: 14px">Hapus Gambar</button>
                              </div>
                              @endif
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12 py-3">
                              <form action="{{ route('product.update.action', ['encryptedId' => encrypt($product->id)]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-2">
                                          <div class="fw-medium">SKU</div>
                                          <div class="text-capitalize">{{ $product->sku }}</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Product Name</div>
                                          <input class="text-capitalize form-control form-control-sm" name="name" value="{{ $product->name }}" type="text" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Category</div>
                                          <select class="form-select form-select-sm" name="category_id" aria-label="Small select example">
                                                <option class="text-capitalize" selected value="{{ $product->category_id }}">{{ $product->category ? $product->category->category_name : 'N/A' }}</option>
                                                @foreach ($categories as $category)
                                                <option class="text-capitalize" value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                          </select>
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Stock</div>
                                          <input class="text-capitalize form-control form-control-sm" name="stock" value="{{ $product->stock }}" type="number" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Price</div>
                                          <input class="text-capitalize form-control form-control-sm" name="price" value="{{ $product->price }}" type="number" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Image</div>
                                          <input type="file" class="form-control form-control-sm" name="image">
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Description</div>
                                          <div class="form-floating">
                                                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px; font-size: 14px;">{{ $product->description }}</textarea>
                                                @if (empty($product->description))
                                                <label for="floatingTextarea2">Description</label>
                                                @endif
                                          </div>
                                    </div>
                                    <button type="submit" class="btn background-primary border-0 text-white w-100 mt-4" style="font-size: 14px">Update Product <i class="bi bi-check2"></i></button>
                              </form>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12 py-3">
                              <div class="d-flex justify-content-center align-items-center h-100">
                                    <div style='text-align: center; gap: 3px;' class="my-3">
                                          <img alt='Barcode Generator TEC-IT' src='https://barcode.tec-it.com/barcode.ashx?data={{$product->sku}}&translate-esc=on' />
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
</div>
@endsection
