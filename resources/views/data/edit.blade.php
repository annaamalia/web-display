@include('master.index')

    <div class="container shadow bg-grey text-align: center">
        <div class="row m-3">
            <div class="col-8 text-align: center">
                <div class="row border-bottom">
                    <h5>Input Data Display</h5>
                </div>
                <div class="row">
                    <form class="{{ route('data.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                        <div class="form-group mt-2">
                            <label for="kode" class="text-light">Kode</label>
                            <input type="text" id="kode" name="kode" class="form-control"
                                value="{{ $data->kode }}" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="model" class="text-light">Model</label>
                            <input type="text" id="model" name="model" class="form-control"
                                value="{{ $data->model }}" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="id_gambar" class="text-light">ID Gambar</label>
                            <input type="text" id="id_gambar" name="id_gambar" class="form-control"
                                value="{{ $data->id_gambar }}" autocomplete="off" required>
                        </div>
                        <div class="form-group flex-button-group mt-4">
                            <button type="reset" class="btn btn-danger text-uppercase w-50">Reset</button>
                            <button type="submit" class="btn btn-success text-uppercase w-50">Save</button>
                        </div>                            
                    </form>
                </div>
            </div>
        </div>
    </div>