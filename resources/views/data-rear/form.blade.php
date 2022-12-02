@include('master.index')

    <div class="container-fluid">
        <div class="row">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-grey">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                            <div class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </div>
                        </div>
                        <div class="modal-body bg-grey">
                            <form class="{{ route('datarear.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="kode" class="text-light">Kode</label>
                                    <input type="text" id="kode" name="kode" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="model" class="text-light">Model</label>
                                    <input type="text" id="model" name="model" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="id_gambar" class="text-light">ID Gambar</label>
                                    <select name="id_gambar" id="id_gambar" class="form-control" required>
                                        <option value="" disabled selected>
                                            Choose
                                        </option>
                                        @foreach ($displayrear as $index => $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
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

            <div class="col-12">
                <div class="d-flex justify-content-between"
                    style="padding-left: 15px;padding-right: 15px; padding-bottom: 15px;">
                    <button type="button" class="btn btn-dark btn-lg" data-toggle="modal"
                        data-target="#exampleModal">
                        Add Data
                    </button>
                    <button type="back" class="btn btn-dark btn-lg" id="detail-button"
                    onclick="history.back('display-rear.index')">Back</button>
                </div>
                <div class="table-wrapper table-dark">
                    <div class="table-toolbar text-center" style="padding-bottom: 1rem">
                        <h4>List Data DC Code</h4>
                    </div>
                    <div>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Kode</th>
                                    <th class="text-center">Model</th>
                                    <th class="text-center">ID Gambar</th>
                                    <th class="text-center">Created</th>
                                    <th class="text-center">Updated</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datarear as $item)
                                    <tr>
                                        <td class="align-middle">{{ $item->kode }}</td>
                                        <td class="align-middle">{{ $item->model }}</td>
                                        <td class="align-middle">{{ $item->id_gambar }}</td>
                                        <td class="align-middle">{{ $item->created_at }}</td>
                                        <td class="align-middle">{{ $item->updated_at }}</td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group">
                                                <form action="{{ route('datarear.show', $item->id) }}"
                                                    method="head">
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-transparent text-white"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('datarear.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" id="id"
                                                        value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-transparent text-white"
                                                        onclick="return confirm('Are You Sure?')" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
