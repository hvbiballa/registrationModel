@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Maklumat Cetakan Sijil Nikah'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Cetakan Sijil Nikah</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Maklumat Pemohon-->
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Nama Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->applicant->app_name ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->applicant->app_ic ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Isteri</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->spouse->app_name ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Isteri</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->spouse->app_ic ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Akad Nikah</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->mreg_marriageDate ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Mohon</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->mreg_dateApply ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>No. Pendaftaran</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->mreg_noApp ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Borang 6</label>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset($data->mreg_receipt) }}" style="">: Resit Bayaran</a>
                            </div>
                        </div>
                        <form role="form" method="POST"
                            action="{{ route('manageMRegistration.updateCetak', ['mregistration' => $data['id']]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="text-center mt-4">
                                <input name="mreg_printStatus" type="hidden" value="Cetak">
                                <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                                <button type="submit" class="btn btn-info btn-md ms-4">Telah Cetak Sijil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
