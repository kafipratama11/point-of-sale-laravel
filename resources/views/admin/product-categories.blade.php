@extends('layouts.app')

@push('styles')
      @livewireStyles
@endpush

@push('script')
      @livewireScripts
@endpush

@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="px-4 d-flex mt-3">
                  <div class="me-auto fw-medium">Products Category</div>
                  <button type="button" class="btn background-primary text-white btn-add" data-bs-toggle="modal" data-bs-target="#createProduct"><i class="bi bi-plus-lg"></i> New Category</button>
                  <!-- Modal -->
                  <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="modal fade" id="createProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                    <div class="modal-content">
                                          <div class="modal-header">
                                                <div class="modal-title" id="staticBackdropLabel">Create new category</div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                                <form>
                                                      <div class="mb-3">
                                                            <label for="productname" class="form-label">Nama category</label>
                                                            <input type="text" class="form-control" id="category_name" name="category_name" required>
                                                      </div>
                                                </form>
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-modal-close border-0" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-modal-submit background-primary text-white">Simpan</button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </form>
            </div>
            @livewire('category-product-table')
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
