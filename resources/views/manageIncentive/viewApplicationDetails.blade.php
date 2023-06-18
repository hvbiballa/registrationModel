@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Insentif Khas'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Rumusan Halaman</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12">
                                <p>Insentif Khas bertujuan untuk membantu pasangan untuk mendapatkan bantuan kewangan untuk membantu memudahkan proses perkahwinan.</p>

                                <p>Anda Tidak Layak Memohon Sekiranya :</p>
                                <ul>
                                    <li>Poligami</li>
                                    <li>Nikah Semula</li>
                                    <li>Nikah Tanpa Kebeneran</li>
                                    <li>Kedua Pasangan bukan asal Pahang</li>
                                    <li>Pendapatan lelaki lebih RM5000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="{{ route('applyIncentive:create') }}" class="btn btn-light btn-md ms-auto">Mohon Insentif Khas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection
