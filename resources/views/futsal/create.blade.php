@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Futsal
@endsection

@section('page_header')
    Tambah Data Master Futsal
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Tambah Data Master Futsal
@endsection

@section('content')
    <div class="card-body">
        <form class="forms-sample" method="POST" action="{{ route('futsal.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="Telepon">Telepon</label>
                <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
            </div>
            <div wire:ignore id='map' style='width: 100%; height: 450px;' class="img-thumbnail">
            </div>
            <br>
            <div class="form-group">
                <label for="Garis Lintang">Garis Lintang</label>
                <input type="text" class="form-control" id="lat" name="lat" placeholder="Garis Lintang" readonly>
            </div>
            <div class="form-group">
                <label for="Garis Bujur">Garis Bujur</label>
                <input type="text" class="form-control" id="long" name="long" placeholder="Garis Bujur" readonly>
            </div>
            <div class="form-group">
                <label for="Nama Admin">Nama Admin</label>
                <input type="text" class="form-control" id="admin" name="admin" placeholder="Nama Admin">
            </div>
            <div class="form-group">
                <label for="Jam Buka">Jam Buka</label>
                <input type="time" class="form-control" id="jam_buka" name="jam_buka" placeholder="Jam Buka">
            </div>
            <div class="form-group">
                <label for="Jam Tutup">Jam Tutup</label>
                <input type="time" class="form-control" id="jam_tutup" name="jam_tutup" placeholder="Jam Tutup">
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <textarea id="my-editor" name="fasilitas" class="form-control">{!! old('content', 'Fasilitas Content Here') !!}</textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="id_user" name="id_user" placeholder="Administrator" value="{{ Auth::user()->id }}">
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Add</button>
            <a class="btn btn-light" href="/futsal" role="button">Cancel</a>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('my-editor', options);
    </script>

    <script>
        const longitude = 99.0648532;
        const latitude = 2.9620278;
        const defaultLocation = [ longitude, latitude];
        mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
        var map = new mapboxgl.Map({
            container: 'map',
            center : defaultLocation,
            zoom : 16,
            style: 'mapbox://styles/mapbox/streets-v11',
        });

        map.addControl(new mapboxgl.NavigationControl());

        map.on('click', addMarker);

        function addMarker(e){
            if (typeof marker !== "undefined" ){
                marker.remove();
            }
            //add marker
            const long_value = e.lngLat.lng
            const lat_value = e.lngLat.lat
            marker = new mapboxgl.Marker().setLngLat([long_value, lat_value]).addTo(map);
            document.getElementById("long").value = long_value;
            document.getElementById("lat").value = lat_value;
        }
    </script>
@endpush
