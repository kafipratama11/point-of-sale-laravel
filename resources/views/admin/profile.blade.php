@extends('layouts.app')
@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="px-4 d-flex mt-3">
                  <div class="me-auto fw-medium">PROFILE</div>
            </div>
            <div class="px-4 mt-3 d-flex gap-3">
                  <div class="w-100">
                        <div class="card border-0">
                              <div class="card-body">
                                    <div class="mb-3">
                                          <div class="fw-medium">Username</div>
                                          <div class="fw-light">Muhammad Kafi Pratama</div>
                                    </div>
                                    <div class="mb-2">
                                          <div class="fw-medium">Your Role</div>
                                          <div class="d-flex gap-2" style="font-size: 14px">
                                                <div class="profile-role-admin text-center rounded-pill px-3 py-1 fw-semibold">
                                                      <div>Admin</div>
                                                </div>
                                                <div class="profile-role-cashier text-center rounded-pill px-3 py-1 fw-semibold">
                                                      <div>Cashier</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="d-flex mt-3">
                              <div class="me-auto fw-medium">SETTING</div>
                        </div>
                        <div class="card mt-2 border-0">
                              <div class="card-body">
                                    <div class="mb-3">
                                          <div class="fw-medium text-danger">Logout</div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  {{-- <div>
                        <div class="card px-3 border-0">
                              <div class="card-body">
                                    <div class="profile-picture-setting d-flex justify-content-center align-items-center">
                                          <img src="../../../img/iu.jpg" alt="">
                                    </div>
                              </div>
                        </div>
                  </div> --}}
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