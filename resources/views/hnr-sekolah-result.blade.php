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
                    <h4 class="mb-4">Hasil Pencarian <br>{{ $nama_sekolah }}</h4>
                    <a href="/honor-sekolah" class="btn btn-primary">
                        Balik Ke Pencarian </a>
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
        @if($data_ptk->isEmpty())
        <div class="alert alert-danger table table-striped table-dark text-center" role="alert">
            Nah Iyaam data sekolah pian kadada.... kalo kada ta usul hubungi pang Pak Muhammad Nuh Almadani PTK SMA
        </div>
        @else
        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama PTK</th>
                            <th scope="col">Nama Sekolah</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Asal Kabkot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_ptk as $ptk)
                        <tr>
                            <th>{{ ++$i }}</th>
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
        @endif
    </div>
</section>
<!-- ***** Features Small End ***** -->

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
</script>
@endsection