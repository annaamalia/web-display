<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <a href="{{ route('dashboard') }}" class="nav-link text-decoration-none text-light"><h5>Dashboard</h5></a>
          <div class="dropdown mx-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              SOP
            </button>
            <div class="dropdown-menu">
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('display.index') }}">CCD</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('display-rotor.index') }}">Rotor</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('display-fh.index') }}">Front</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('display-rear.index') }}">Rear</a></li>
            </div>
          </div>
          <div class="dropdown mx-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              Add Image
            </button>
            <div class="dropdown-menu">
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('form.store') }}">CCD</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('formrotor.store') }}">Rotor</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('formfh.store') }}">Front</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('formrear.store') }}">Rear</a></li>
            </div>
          </div>
          <div class="dropdown mx-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              Add Data
            </button>
            <div class="dropdown-menu">
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('data.store') }}">CCD</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('datarotor.store') }}">Rotor</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('datafh.store') }}">Front</a></li>
              <li><a class="dropdown-item nav-link text-decoration-none text-dark" href="{{ route('datarear.store') }}">Rear</a></li>
            </div>
          </div>
        </ul>

        <div class="dropdown text-end">
          <img src="{{ asset('images/LOGO TACI.png') }}" class="right-header" width="80" height="40">
        </div>
      </div>
    </div>
</header>  