@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6><b>Borang Permohonan Kebenaran</b></h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div id="daftarKursus" class="tabcontent">
                            
                        </div>
                       
                    </div>
                    <div class="text-center mt-4">
                        <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection