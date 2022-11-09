@include('master.index')

    <div class="container shadow bg-grey ml-6 mr-6">
        <div class="row m-3">
            <div class="col-3">
                <div class="row border-bottom">
                    <h5>Input Data Display</h5>
                </div>
                <div class="row">
                    <form class="{{ route('form.update', $display->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" id="id" name="id" value="{{ $display->id }}">
                        <br>
                        <div class="form-group mt-2">
                            <label for="id_gambar" class="text-light">ID Gambar</label>
                            <select class="form-control" name="id_gambar" id="id_gambar" required>
                                <option value="" disabled>Choose</option>
                                @foreach ($data as $index => $item)
                                    <option value="{{ $index }}" @if ($index == $display->id_gambar) selected @endif>
                                        {{  $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="model" class="text-light">Model</label>
                            <select class="form-control" name="model" id="model" required>
                                <option value="" disabled>Choose</option>
                                @foreach ($model as $index => $item)
                                    <option value="{{ $index }}" @if ($index == $display->model) selected @endif>
                                        {{  $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="tipe" class="text-light">Tipe</label>
                            <input type="text" id="tipe" name="tipe" class="form-control"
                                value="{{ $display->tipe }}" autocomplete="off" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="gambar" class="text-light">Gambar</label>
                            <img class="img-preview img-fluid">
                            <br>
                            <input type="file" id="gambar" name="gambar" class="form-control"
                                value="{{ $display->gambar }}" autocomplete="off" required onchange="previewImage()">
                        </div>                        
                        <div class="form-group flex-button-group mt-4">
                            <button type="reset" class="btn btn-danger text-uppercase w-50">Reset</button>
                            <button type="submit" class="btn btn-success text-uppercase w-50">Save</button>
                        </div>                            
                    </form>
                </div>
            </div>
            <div class="col-9">
                <div id="id" name="id" value="{{ $display->id }}">
                    <div style="height: 430px; width: 750px; overflow:hidden;">                                       
                        <img src="{{ asset('storage/' . $display->gambar) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('display.script')

{{-- <div class="container shadow bg-grey text-align: center">
    <div class="row m-3">
        <div class="col">
            <div class="row border-bottom">
                <h5>Input Data Display</h5>
            </div>
            <div class="row">
                <form class="{{ route('form.update', $display->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" id="id" name="id" value="{{ $display->id }}">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-2">
                                <label for="id_gambar" class="text-light">ID Gambar</label>
                                <select class="form-control" name="id_gambar" id="id_gambar" required>
                                    <option value="" disabled>Choose</option>
                                    @foreach ($data as $index => $item)
                                        <option value="{{ $index }}" @if ($index == $display->id_gambar) selected @endif>
                                            {{  $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="model" class="text-light">Model</label>
                                <select class="form-control" name="model" id="model" required>
                                    <option value="" disabled>Choose</option>
                                    @foreach ($model as $index => $item)
                                        <option value="{{ $index }}" @if ($index == $display->model) selected @endif>
                                            {{  $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-2">
                                <label for="tipe" class="text-light">Tipe</label>
                                <input type="text" id="tipe" name="tipe" class="form-control"
                                    value="{{ $display->tipe }}" autocomplete="off" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="gambar" class="text-light">Gambar</label>
                                <img class="img-preview img-fluid">
                                <br>
                                <input type="file" id="gambar" name="gambar" class="form-control"
                                    value="{{ $display->gambar }}" autocomplete="off" required onchange="previewImage()">
                            </div>
                        </div> 
                    </div>                       
                    <div class="form-group flex-button-group mt-4">
                        <button type="reset" class="btn btn-danger text-uppercase w-50">Reset</button>
                        <button type="submit" class="btn btn-success text-uppercase w-50">Save</button>
                    </div>                            
                </form>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <div id="id" name="id" value="{{ $display->id }}">
                <div style="height: 430px; width: 750px; overflow:hidden;">                                       
                    <img src="{{ asset('storage/' . $display->gambar) }}">
                </div>
            </div>
        </div>
    </div>
</div> --}}