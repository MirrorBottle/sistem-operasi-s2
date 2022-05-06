
@include('layout.partials.header')
<main class="site-wrapper">
  <div class="pt-table">
    <div class="pt-tablecell page-home relative" style="background-image: url('img/banner.jpg');">
      <div class="overlay"></div>

      <div class="container">
        @yield('content')
      </div> <!-- /.container -->
    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->
@include('layout.partials.footer')