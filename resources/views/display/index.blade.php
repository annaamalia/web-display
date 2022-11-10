@include('master.index')



<div class="imgbox" id="imgbox">
    <p class="h3 font-weight-light text-capitalize text-center">
        <td>{{ $data->model }}</td>
    </p>
    <img class="center-fit" src="{{ asset('storage/' . $data->gambar) }}">
</div>

<script type="text/javascript">
    function doRefresh() {
        $("#imgbox").load("/ganti");
    }
    $(function() {
        setInterval(doRefresh, 1000);
    });
</script>
