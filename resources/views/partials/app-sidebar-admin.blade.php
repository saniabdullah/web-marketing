<!-- Sidebar  -->
<nav id="sidebar">
   <div class="sidebar-header"><img class="sidebar-image me-2 pb-2" src="{{ asset('images/logo-hasnur.png') }}"><strong>Web Marketing</strong></div>
   <ul class="list-unstyled components" id="nav-accordion">
      <li><a href="{{ route('adminDashboard') }}"><i class="fas fa-home me-3"></i>Dashboard</a></li>
      <li><a href="{{ route('adminHome') }}"><i class="fas fa-file-alt me-3"></i>Home - Admin</a></li>
      <li><a href="{{ route('adminUsermanagement') }}"><i class="fas fa-list-ul me-3"></i>User Management</a></li>
      <li><a href="{{ route('adminUserauthorization') }}"><i class="fas fa-home me-3"></i>User Authorizarion</a></li>
   </ul>
   <ul class="list-unstyled CTAs">
      <li><a href="" class="download"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
   </ul>
</nav>