@extends('layouts.app')

@section('breadcrumb')
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('product.index') }}" class="link-underline link-underline-opacity-0">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->sku }}</li>
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
                  <a href="{{ route('product.update', ['encryptedId' => encrypt($product->id)]) }}" class="btn link-underline link-underline-opacity-0 background-primary text-white px-3 shadow-sm" style="font-size: 14px">Edit <i class="bi bi-pen"></i></a>
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
                              <div class="img-product-wrapp d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
                              </div>
                              @endif
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-12 py-3">
                              <div class="mb-2">
                                    <div class="fw-medium">SKU</div>
                                    <div class="text-capitalize">{{ $product->sku }}</div>
                              </div>
                              <div class="mb-2">
                                    <div class="fw-medium">Product Name</div>
                                    <div class="text-capitalize lh-sm">{{ $product->name }}</div>
                              </div>
                              <div class="mb-2">
                                    <div class="fw-medium">Category</div>
                                    <div class="text-capitalize lh-sm">{{ $product->category ? $product->category->category_name : 'N/A' }}</div>
                              </div>
                              <div class="mb-2">
                                    <div class="fw-medium">Stock</div>
                                    <div class="text-capitalize">{{ $product->stock }}</div>
                              </div>
                              <div class="mb-2">
                                    <div class="fw-medium">Price</div>
                                    <div class="text-capitalize">{{ $product->price }}</div>
                              </div>
                              <div class="mb-2">
                                    <div class="fw-medium">Description</div>
                                    <div class="text-capitalize lh-sm" style="font-size: 14px">{!! nl2br(e($product->description)) !!}</div>
                                    @if (empty($product->description))
                                    -
                                    @endif
                              </div>
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
