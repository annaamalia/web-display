@include('master.index')

<p class="h3 font-weight-light text-capitalize text-center">
    <td>{{ $data->model }}</td>
</p>

<div class="imgbox">
    <img class="center-fit" src="{{ asset('storage/' . $data->gambar) }}">
</div>
