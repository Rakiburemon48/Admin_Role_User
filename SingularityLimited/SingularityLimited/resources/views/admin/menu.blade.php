
    <div id="sidebar" class="app-sidebar">

        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

            <div class="menu">
                <div class="menu-header">Navigation</div>
                <div class="menu-item active">
                    <a href="{{route('dashboard')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </div>
              
                {{-- <div class="menu-header">Components</div>
                <div class="menu-item">
                    <a href="" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-columns-gap"></i></span>
                        <span class="menu-text">General Form</span>
                    </a>
                </div> --}}
              
              
              @if (Auth::user()->role=='super_admin')
              <div class="menu-divider"></div>
              <div class="menu-header">Users</div>
             
              <div class="menu-item has-sub">
                  <a href="#" class="menu-link">
                      <span class="menu-icon"><i class="bi bi-people"></i></span>
                      <span class="menu-text">Users</span>
                      <span class="menu-caret"><b class="caret"></b></span>
                  </a>
                  <div class="menu-submenu">
                      <div class="menu-item">
                          <a href="{{route('addAdmin')}}" class="menu-link">
                              <span class="menu-text">Add Admin</span>
                          </a>
                      </div>
                      <div class="menu-item">
                          <a href="{{route('adminList')}}" class="menu-link">
                              <span class="menu-text">Admin List</span>
                          </a>
                      </div>
                      
                  </div>
              </div>
              @endif
              @if (Auth::user()->role=='super_admin' || Auth::user()->role=='admin')
              <div class="menu-divider"></div>
              <div class="menu-header">Outlet</div>
             
              <div class="menu-item has-sub">
                  <a href="#" class="menu-link">
                      <span class="menu-icon"><i class="fa-regular fa-shop"></i></span>
                      <span class="menu-text">Outlet</span>
                      <span class="menu-caret"><b class="caret"></b></span>
                  </a>
                  <div class="menu-submenu">
                      <div class="menu-item">
                          <a href="{{route('outlet')}}" class="menu-link">
                              <span class="menu-text">Add Outlet</span>
                          </a>
                      </div>
                      <div class="menu-item">
                          <a href="{{route('outletList')}}" class="menu-link">
                              <span class="menu-text">Outlet List</span>
                          </a>
                      </div>
                     
                      
                  </div>
              </div>
              @endif
           
                
               
            </div>

            
        </div>

    </div>
    <script data-cfasync="false" src="{{asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('assets/js/vendor.min.js')}}" type="02c80e47cfd3680c3ea95c64-text/javascript"></script>
