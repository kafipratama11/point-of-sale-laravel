<header class="w-100 sticky-top">
      <nav class="border-bottom w-100 bg-white">
            <div class="d-flex align-items-center px-4 py-3 gap-2">
                  <a class="btn btn-transparent hamburger-menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <i class="bi bi-list" style="font-size: 20px"></i>
                  </a>
                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                              {{-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> --}}
                              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        @include('partials.sidebar')
                  </div>
                  <div class="section-name-header me-auto">
                        {{ request()->is('overview') ? 'Overview' : '' }}
                        {{ request()->is('products') ? 'Products' : '' }}
                        {{ request()->routeIs('product.show', 'product.update') ? 'Products' : '' }}
                        {{ request()->is('products/categories') ? 'Products Category' : '' }}
                        {{ request()->is('transaction') ? 'Transaction' : '' }}
                        {{ request()->is('new-transaction') ? 'New Transaction' : '' }}
                        {{ request()->is('purchase-request') ? 'Purchase Request' : '' }}
                        {{ request()->is('purchase-order') ? 'Purchase Order' : '' }}
                        {{ request()->is('purchase-receive') ? 'Purchase Received' : '' }}
                        {{ request()->is('users') ? 'Users' : '' }}
                        {{ request()->is('members') ? 'Members' : '' }}
                        {{ request()->is('profile') ? 'Username' : '' }}
                  </div>
                  <div class="d-flex gap-3 align-items-center">
                        <a href="">
                              <div>
                                    <img src="../../../icons/notification.png" alt="">
                              </div>
                        </a>
                        <a href="" class="link-dark">
                              <div>
                                    <i class="bi bi-brightness-high" style="font-size: 20px"></i>
                              </div>
                        </a>
                        <a href="">
                              <div class="profile-picture">
                                    <a href="/profile">
                                          <img src="../../../img/iu.jpg" alt="">
                                    </a>
                              </div>
                        </a>
                  </div>
            </div>
      </nav>
      <div class="px-4 pt-2 bg-white d-flex align-items-center border-bottom">
            @yield('breadcrumb')
      </div>
</header>
