@include('master.index')

<div class="form-group flex-button-group justify-content-center">
    <button type="button" class="btn btn-dark text-uppercase w-20 mx-4">
        <a href="{{ route('display.index') }}" class="nav-link text-decoration-none text-light"><h5>CCD</h5></a>
    </button>
    <button type="button" class="btn btn-dark text-uppercase w-20 mx-4">
        <a href="{{ route('display-rotor.index') }}" class="nav-link text-decoration-none text-light"><h5>ROTOR</h5></a>
    </button>
    <button type="button" class="btn btn-dark text-uppercase w-20 mx-4">
        <a href="{{ route('display-fh.index') }}" class="nav-link text-decoration-none text-light"><h5>FRONT</h5></a>
    </button>
    <button type="button" class="btn btn-dark text-uppercase w-20 mx-4">
        <a href="{{ route('display-rear.index') }}" class="nav-link text-decoration-none text-light"><h5>REAR</h5></a>
    </button>
</div>
