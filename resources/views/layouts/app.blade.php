@include('partials.app-header')
@include('partials.app-sidebar')

<!-- Page Content  -->
<div id="content">
   <div class="p-3 pb-0">
      <button type="button" id="sidebarCollapse" class="btn btn-outline-light"><i class="fas fa-bars" style="color: #CCC;"></i></button>
   </div>

   <div class="main-container">
      @yield('container')
   </div>     
</div>

@include('partials.app-footer')