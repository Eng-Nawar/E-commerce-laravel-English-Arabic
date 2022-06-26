<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('user')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">{{ trans('headertrans.user') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('user')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>{{ trans('headertrans.dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ trans('headertrans.Shop') }}
        </div>
    <!--Orders -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>{{ trans('headertrans.Orders') }}</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-comments"></i>
            <span>{{ trans('headertrans.Reviews') }}</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      {{ trans('headertrans.Posts') }}
    </div>
    <!-- Comments -->
    <li class="nav-item">
      <a class="nav-link" href="">
          <i class="fas fa-comments fa-chart-area"></i>
          <span>{{ trans('headertrans.comments') }}</span>
      </a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>