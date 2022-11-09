<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a href="{{ route('display.index') }}"  class="nav-link text-decoration-none text-light"><h5>Home</h5></a>
          <li><a href="{{ route('form.store') }}" class="nav-link text-decoration-none text-light"><h5>Add Image</h5></a></li>
          <li><a href="{{ route('data.store') }}" class="nav-link text-decoration-none text-light"><h5>Add Data</h5></a></li>
        </ul>

        <div class="dropdown text-end">
          <img src="{{ asset('images/LOGO TACI.png') }}" class="right-header" width="80" height="40">
        </div>
      </div>
    </div>
</header>  