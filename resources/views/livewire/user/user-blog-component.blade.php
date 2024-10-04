<main>
    <div class="container">Your Blog</div>
    
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'print-facts'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Facts</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'contact'])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Contact</span>
          </a>

      
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'inquiry'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Inquiry</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item {{'user/add-your-business' == request()->path() ? 'active' : '' }}" href="{{route('user.claim')}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'user/add-your-business' == request()->path() ? 'active' : '' }}">Event</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'business'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Plan</span>
          </a>
      

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
</main>