@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Permohonan Kad Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Kemaskini Status</h6>
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
                                <label>No. Pendaftaran</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->mcard_noApp ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->applicant->app_ic ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Gambar Passport Suami</label>
                            </div>
                            <div class="col-4">
                                <p>: (link)</p>
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
                                <p>: {{ $data->spouse->app_name ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Gambar Passport Isteri</label>
                            </div>
                            <div class="col-4">
                                <p>: (link)</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Akad Nikah</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->mregistration->mreg_marriageDate ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Mohon Kad</label>
                            </div>
                            <div class="col-4">
                                <p>: {{ $data->created_at ? $data->created_at->format('Y-m-d') : '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Resit Bayaran</label>
                            </div>
                            <div class="col-4">
                                <p>: (link)</p>
                            </div>
                            <div class="col-2">
                                <label>Status Permohonan</label>
                            </div>
                            <form role="form" method="POST"
                                action="{{ route('manageMCard.updateStatusApp', ['mcard' => $data['id']]) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-4">
                                    <select class="form-select" name="mcard_terima" style="width:50%;">
                                        <option value="0">--- Sila Pilih ---</option>
                                        <option value="1">Terima</option>
                                        <option value="2">Tolak</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label>Tarikh Terima</label>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" name="mcard_dateApproval" type="date">
                                </div>

                                <div class="text-center mt-5">
                                    <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                                    <button type="submit" class="btn btn-info btn-md ms-4">Hantar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
