@include('master.index')

<div class="form-group flex-button-group justify-content-center">
    <div class="col-3 mt-1">
        <div class="col mx-3 my-3">
            <div class="card bg-dark">
                <img class="rounded mx-auto d-block" src="{{ asset('images/img-ccd.png') }}" style="width: 300px; height: 300px">
                    <div class="card-body">
                        <a href="{{ route('display.index') }}" class="nav-link text-decoration-none text-light text-center">SOP CCD</a>
                    </div>
            </div>
        </div>
        <div class="col mx-3 my-3">
            <div class="card bg-dark">
                <img class="rounded mx-auto d-block" src="{{ asset('images/img-rotor.png') }}" style="width: 300px; height: 300px">
                    <div class="card-body">
                        <a href="{{ route('display-rotor.index') }}" class="nav-link text-light text-center">SOP ROTOR</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-3 mt-1">
      <div class="col mx-3 my-3">
        <div class="card bg-dark">
            <img class="rounded mx-auto d-block" src="{{ asset('images/img-front.png') }}" style="width: 300px; height: 300px">
                <div class="card-body">
                    <a href="{{ route('display-fh.index') }}" class="nav-link text-light text-center">SOP FRONT</a>
                </div>
        </div>
      </div>
      <div class="col mx-3 my-3">
        <div class="card bg-dark">
            <img class="rounded mx-auto d-block" src="{{ asset('images/img-rear.png') }}" style="width: 300px; height: 300px">
                <div class="card-body">
                    <a href="{{ route('display-rear.index') }}" class="nav-link text-light text-center">SOP REAR</a>
                </div>
        </div>
      </div>
    </div>
    {{-- <button type="button" class="btn btn-dark text-uppercase w-20 mx-4">
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
    </button> --}}
</div>