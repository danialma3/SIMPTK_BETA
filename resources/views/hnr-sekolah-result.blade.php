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
                    <h2 class="mb-4">Silahakan Cari Data PTK Suatu Sekolah</h2>
                    <form action="{{ url('cari') }}" method="GET">
                        <select id="sekolah" class="form-control form-control-lg">
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
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">Nama PTK</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Asal Kabkot</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_ptk as $ptk)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$ptk->nama_ptk}}</td>
                        <td>{{$ptk->nama_sekolah}}</td>
                        <td>{{$ptk->jabatan}}</td>
                        <td>{{$ptk->kabkot}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy; 2023 SIMPTK - Developer: Muhammad Nuh Almadani, S. Kom </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#sekolah').select2();
    });
</script>
@endsection