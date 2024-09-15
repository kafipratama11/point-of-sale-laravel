@extends('layouts.app')
@section('main')
<div class="d-flex main-container">
      <div class="sidebar">
            @include('partials.sidebar')
      </div>
      <div class="w-100">
            @include('partials.header')
            <div class="container-card-dashboard px-4 mt-3 gap-4">
                  <div class="card card-dashboard w-100 border-0 mb-1" style="background-color: #4D869C;">
                        <div class="card-body">
                              <div class="d-flex align-items-center gap-2">
                                    <div class="icon-container-dashboard d-flex justify-content-center align-items-center rounded-circle">
                                          <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="tag-card-dashboard" style="font-size: 14px">Total Earning</div>
                              </div>
                              <div class="mt-3">  
                                    <div class="text-center text-white heading-card-dashboard">Rp358.900,00</div>
                              </div>
                              <div class="mt-3">  
                                    <div class="text-center fw-light text-white footer-card-dashboard">From the running month</div>
                              </div>
                        </div>
                  </div>
                  <div class="card card-dashboard w-100 border-0 mb-1" style="background-color: #4D869C;">
                        <div class="card-body">
                              <div class="d-flex align-items-center gap-2">
                                    <div class="icon-container-dashboard d-flex justify-content-center align-items-center rounded-circle">
                                          <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="tag-card-dashboard" style="font-size: 14px">Average Earning</div>
                              </div>
                              <div class="mt-3">  
                                    <div class="text-center text-white heading-card-dashboard">Rp17.900,00</div>
                              </div>
                              <div class="mt-3">  
                                    <div class="text-center fw-light text-white footer-card-dashboard">Daily Earning of this month</div>
                              </div>
                        </div>
                  </div>
                  <div class="card card-dashboard w-100 border-0 mb-1" style="background-color: #4D869C;">
                        <div class="card-body">
                              <div class="d-flex align-items-center gap-2">
                                    <div class="icon-container-dashboard d-flex justify-content-center align-items-center rounded-circle">
                                          <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="tag-card-dashboard" style="font-size: 14px">Sales Rate</div>
                              </div>
                              <div class="mt-3">  
                                    <div class="text-center text-white heading-card-dashboard">74.86%</div>
                              </div>
                              <div class="mt-3">  
                                    <div class="text-center fw-light text-white footer-card-dashboard">+6.4% Greater that last month</div>
                              </div>
                        </div>
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
