 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{route('dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('categories.index')}}">
          <i class="bi bi-circle"></i><span>Category</span>
        </a>
      </li>

      <li>
        <a href="{{route('subcategories.index')}}">
          <i class="bi bi-circle"></i><span>Subcategory</span>
        </a>
      </li>

      <li>
        <a href="{{route('brands.index')}}">
          <i class="bi bi-circle"></i><span>Brand</span>
        </a>
      </li>


    </ul>
  </li><!-- End Components Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#coupon-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Coupon</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="coupon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('coupons.index')}}">
          <i class="bi bi-circle"></i><span>Coupon</span>
        </a>
      </li>

      <li>
        <a href="{{route('newsletters.index')}}">
          <i class="bi bi-circle"></i><span>Newsletter Subscribtion</span>
        </a>
      </li>




    </ul>
  </li><!-- End Components Nav -->



  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('products.index')}}">
          <i class="bi bi-circle"></i><span>Products</span>
        </a>
      </li>

      <li>
        <a href="{{route('sections.index')}}">
          <i class="bi bi-circle"></i><span>Sections</span>
        </a>
      </li>





    </ul>
  </li><!-- End Components Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="orders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('orders.index')}}">
          <i class="bi bi-circle"></i><span>Orders</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->



  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>users</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('users.index')}}">
          <i class="bi bi-circle"></i><span>Users</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->



  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('settings')}}">
      <i class="bi bi-person"></i>
      <span>Settings</span>
    </a>
  </li><!-- End Profile Page Nav -->


</ul>

</aside><!-- End Sidebar-->
