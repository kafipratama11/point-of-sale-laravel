<header class="w-100">
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
                        {{ request()->is('transaction') ? 'Transaction' : '' }}
                        {{ request()->is('purchase-request') ? 'Purchase Request' : '' }}
                        {{ request()->is('purchase-order') ? 'Purchase Order' : '' }}
                        {{ request()->is('purchase-receive') ? 'Purchase Received' : '' }}
                        {{ request()->is('users') ? 'Users' : '' }}
                        {{ request()->is('members') ? 'Members' : '' }}
                        {{ request()->is('profile') ? 'MUHAMMAD KAFI PRATAMA' : '' }}
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
      <div class="px-4 pt-2 bg-white d-flex align-items-center">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="link-underline link-underline-opacity-0 link-body-tertiary">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
            </nav>
      </div>
</header>
