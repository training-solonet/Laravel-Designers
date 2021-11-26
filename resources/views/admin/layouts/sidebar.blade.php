<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin')? 'active' : '' }}" aria-current="page" href="/admin">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/products*')? 'active' : '' }}" href="admin/products">
              <span data-feather="file-text"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/category*')? 'active' : '' }}" href="admin/category">
              <span data-feather="file-text"></span>
              Categories
            </a>
          </li>
        </ul>

      </div>
    </nav>