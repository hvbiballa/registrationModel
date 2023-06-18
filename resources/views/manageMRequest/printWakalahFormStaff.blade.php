@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Permohonan Kursus Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6><b>Borang Pengesahan Wakalah Wali</b></h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div id="daftarKursus" class="tabcontent">
                            
                        </div>
                        <button onclick="history.back()" class="btn btn-light btn-md mx-auto my-4"
                            style="width:10%;">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection