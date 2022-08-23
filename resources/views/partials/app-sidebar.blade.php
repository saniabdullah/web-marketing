<!-- Sidebar  -->
<nav id="sidebar">
   <div class="sidebar-header"><img class="sidebar-image me-2 pb-2" src="{{ asset('images/logo-hasnur.png') }}"><strong>Web Marketing</strong></div>
   <ul class="list-unstyled components" id="nav-accordion">
      <li><a href=""><i class="fas fa-home me-3"></i>Dashboard</a></li>
      <li><a href="{{ route('contract') }}"><i class="fas fa-file-alt me-3 {{ (Request::is('contract', 'contract/add', 'contract/edit', 'contract/search') ? 'active' : '') }}"></i>Contract And Price</a></li>
      <li><a href="{{ route('report') }}"><i class="fas fa-list-ul me-3 {{ (Request::is('report', 'report/search') ? 'active' : '') }}"></i>Report Sales</a></li>
      <li><a href="{{ route('order') }}"><i class="fas fa-home me-3 {{ (Request::is('order', 'order/search') ? 'active' : '') }}"></i>Delivery Order</a></li>
   </ul>
   <ul class="list-unstyled CTAs">
      <li><a href="" class="download"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
   </ul>
</nav>