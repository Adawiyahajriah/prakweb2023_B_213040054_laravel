<div class="container-fluid">
    <div class="row">
      @include('dashboard.layoutf.sidebar')
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="#">
                  <svg class="bi"><use xlink:href="#house-fill"/></svg>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="dashboard-posts">
                  <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                  My posts
                </a>
            </ul>
  
            <hr class="my-3">
  
            <ul class="nav flex-column mb-auto">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                  Settings
                </a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 bg-dark border-0"><i class="bi bi-box-arrow-right">Logout</button>
              </form>
              </li>
            </ul>

            @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Administrator</span>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="dashboard-categories">
                    <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                    Post Categories
                  </a>
                </li>
              </ul>
            </h6>
            @endcan

          </div>
        </div>
      </div>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Welcome back, Adawiyah ajriah</h1>
        </div>
      </main>
    </div>
  </div>