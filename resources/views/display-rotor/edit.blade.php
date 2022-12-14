@include('master.index')

    <div class="container shadow bg-grey ml-6 mr-6">
        <div class="row m-3">
            <div class="col-3">
                <div class="row border-bottom">
                    <h5>Input Data Image</h5>
                </div>
                <div class="row">
                    <form class="{{ route('formrotor.update', $displayrotor->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" id="id" name="id" value="{{ $displayrotor->id }}">
                        <br>
                        <div class="form-group mt-2">
                            <label for="id_gambar" class="text-light">ID Gambar</label>
                            <input type="text" id="id_gambar" name="id_gambar" class="form-control"
                            value="{{ $displayrotor->id_gambar }}" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="gambar" class="text-light">Gambar</label>
                            <img class="img-preview img-fluid">
                            <br>
                            <input type="file" id="gambar" name="gambar" class="form-control"
                                value="{{ $displayrotor->gambar }}" autocomplete="off" required onchange="previewImage()">
                        </div>                        
                        <div class="form-group flex-button-group mt-4">
                            <button type="reset" class="btn btn-danger text-uppercase w-50">Reset</button>
                            <button type="submit" class="btn btn-success text-uppercase w-50">Save</button>
                        </div>                            
                    </form>
                </div>
            </div>
            <div class="col-9">
                <div id="id" name="id" value="{{ $displayrotor->id }}">
                    <img img class="center-fit"  src="{{ asset('storage/' . $displayrotor->gambar) }}">
                </div>
            </div>
        </div>
    </div>

@include('display-rotor.script')