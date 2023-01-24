@extends('layout.head')
@section('container')

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->



<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>Data Honor Sekolah Siap SK</h1>
                    <h2 class="mb-4">Silahakan Cari Data PTK Pada Satuan Pendidikan SMA</h2>
                    <form action="{{ url('honor-sekolah-result') }}" method="post">
                        {{csrf_field()}}
                        <select name="nama_sekolah" id="sekolah" class="form-control form-control-lg">
                            <option selected="true" disabled="disabled">Pilih Sekolah</option>
                            @foreach($data_sekolah as $sekolah)
                            <option value="{{ $sekolah->nama_sekolah }}"> {{ $sekolah->nama_sekolah  }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary btn-user btn-block mb-4 mt-4">
                            Cari
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Footer Start ***** -->

<script>
    $(document).ready(function() {
        $('#sekolah').select2();
    });
</script>
@endsection