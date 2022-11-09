@include('master.index')

<p class="h3 font-weight-light text-capitalize text-center">
        <td>{{ $data->model }}</td>
</p>

<div class="container text-align: center">
    <div class="box">
        <div class="img-preview img-fluid" style="max-height: 700px; position: inline-block; lock; overflow:hidden;">
            <img src="{{ asset('storage/' . $data->gambar) }}">
        </div>
    </div>
</div>
