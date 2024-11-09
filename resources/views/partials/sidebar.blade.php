<aside class="sidebar-admin border-end bg-white sticky-top h-100">
      <div class="p-3 ps-2 pe-0 ">
            <div class="sidebar-brand mb-5 d-flex align-items-center gap-3 ps-3">
                  <div class="profile-picture-sidebar ratio-1x1 rounded-circle overflow-hidden">
                        <img src="../../../img/iu.jpg" alt="">
                  </div>
                  <div>
                        <div style="font-size: 16px">Username</div>
                        <div class="fw-light" style="font-size: 14px">
                              Cashier
                        </div>
                        {{-- <div class="fw-light" style="font-size: 14px">
                              @if (Auth::user()->role_id === 1)
                                    Superadmin
                              @elseif(Auth::user()->role_id === 2)
                                    Admin
                              @elseif(Auth::user()->role_id === 3)
                                    Cashier
                              @endif
                        </div> --}}
                  </div>
            </div>
            <div class="vstack gap-2">
                  {{-- <a href="{{ url('/overview') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/overview" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('overview') ? 'active ps-2' : '' }}">
                              <i class="bi bi-grid-1x2"></i>
                              <div>Dashboard</div>
                        </div>
                  </a>
                  {{-- <a href="{{ url('/members') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/members" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('members') ? 'active' : '' }}">
                              <i class="bi bi-person"></i>
                              <div>Members</div>
                        </div>
                  </a>
                  {{-- <a href="{{ url('/users') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/users" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('users') ? 'active' : '' }}">
                              <i class="bi bi-people"></i>
                              <div>Users</div>
                        </div>
                  </a>
                  <div class="fw-medium mt-3 ps-3" style="font-size: 14px">Transaction</div>
                  <a href="{{ route('transaction.index') }}" class="link-underline link-underline-opacity-0">
                  {{-- <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/new-transaction" class="link-underline link-underline-opacity-0"> --}}
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('new-transaction') ? 'active' : '' }}">
                              <i class="bi bi-cart"></i>
                              <div>New Transaction</div>
                        </div>
                  </a>
                  {{-- <a href="{{ url('/transaction') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/transaction" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('transaction') ? 'active' : '' }}">
                              <i class="bi bi-cash-stack"></i>
                              <div>Transaction History</div>
                        </div>
                  </a>
                  <div class="fw-medium mt-3 ps-3" style="font-size: 14px">Purchasing</div>
                  {{-- <a href="{{ url('/purchase-request') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/purchase-request" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('purchase-request') ? 'active' : '' }}">
                              <i class="bi bi-box-arrow-up-right"></i>
                              <div>Purchase Request</div>
                        </div>
                  </a>
                  {{-- <a href="{{ url('/purchase-order') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/purchase-order" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('purchase-order') ? 'active' : '' }}">
                              <i class="bi bi-bag"></i>
                              <div>Purchase Order</div>
                        </div>
                  </a>
                  {{-- <a href="{{ url('/purchase-receive') }}" class="link-underline link-underline-opacity-0"> --}}
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/purchase-receive" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('purchase-receive') ? 'active' : '' }}">
                              <i class="bi bi-bag-check"></i>
                              <div>Purchase Received</div>
                        </div>
                  </a>
                  <div class="fw-medium mt-3 ps-3" style="font-size: 14px">Inventory</div>
                  <a href="{{ route('product.index') }}" class="link-underline link-underline-opacity-0">
                  {{-- <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/products" class="link-underline link-underline-opacity-0"> --}}
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->routeIs('product.show', 'product.index', 'category.index', 'product.update') ? 'active' : '' }}">
                              <i class="bi bi-box"></i>
                              <div>Products</div>
                        </div>
                  </a>
                  <a href="https://z6d7d0pf-8000.asse.devtunnels.ms/stock-reduction" class="link-underline link-underline-opacity-0">
                        <div class="d-flex gap-3 align-items-center background-primary-hover sidebar-link ps-4 p-2 px-3 {{ request()->is('stock-reduction') ? 'active' : '' }}">
                              <i class="bi bi-trash3"></i>
                              <div>Stock Reduction</div>
                        </div>
                  </a>
            </div>
      </div>
</aside>
