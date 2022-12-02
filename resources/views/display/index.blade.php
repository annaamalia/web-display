@include('master.index')

<div class="imgbox" id="imgbox">
    @if(!empty($data))
        <p class="h3 font-weight-light text-capitalize text-center">
            <td>{{ $data->model }}</td>
        </p>
        <img class="center-fit" src="{{ asset('storage/' . $data->gambar) }}">
    @else
        <p class="h1 font-light text-center">
            <td class="align middle">Opps! SOP Image Data Unavailable</td>
        </p>
        <img class="center-fit" src="{{ asset('images/log_white.png') }}">

        <br>
        <div class="form-group flex-button-group justify-content-center">
            <button type="button" class="btn btn-dark text-uppercase w-20">
                <a href="{{ route('form.store') }}" class="nav-link text-decoration-none text-light"><h5>Add Image</h5></a>
            </button>
            <button type="button" class="btn btn-dark text-uppercase w-20">
                <a href="{{ route('data.store') }}" class="nav-link text-decoration-none text-light"><h5>Add Data</h5></a>
            </button>
        </div>
    @endif
</div>

<script type="text/javascript">
    function doRefresh() {
        $("#imgbox").load("/ganti");
    }
    $(function() {
        setInterval(doRefresh, 1000);
    });
</script>
