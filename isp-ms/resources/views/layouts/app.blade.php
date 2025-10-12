@include('layouts.partials.header')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
          @include('layouts.partials.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('layouts.partials.navbar')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
             <div class="container-xxl flex-grow-1 container-p-y">
                <div className="card-body">
                  <!-- Insert Your content here -->
                  @yield('content')                  
                </div>
              </div>
            <!-- / Content -->

            <!-- Footer -->
             @include('layouts.partials.footer')
            <!-- / Footer -->
