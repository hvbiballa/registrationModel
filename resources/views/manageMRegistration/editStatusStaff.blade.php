@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Pendaftaran Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Kemaskini Status</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>Nama Pemohon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_name ?? '' }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>No. K/P Pemohon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_ic ?? '' }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>Nama Pasangan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_name ?? '' }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>No. K/P Pasangan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_ic ?? '' }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>No. Akaun Terima</label>
                            </div>
                            <div class="col-3">
                                <p>: {{ $data->mreg_noApp ?? '' }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1">
                            <div class="col-2">
                                <label>Tarikh Mohon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->mreg_dateApply ?? '' }}</p>
                            </div>
                        </div>
                        <form role="form" method="POST"
                            action="{{ route('manageMRegistration.updateStatusApp', ['mregistration' => $data['id']]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-start m-1 mb-3">
                                <div class="col-2">
                                    <label>Status Permohonan</label>
                                </div>
                                <div class="col-6">
                                    <select class="form-select" name="mreg_statusApp" style="width:50%;" >
                                        <option value="0">--- Sila Pilih ---</option>
                                        <option value="1">Terima</option>
                                        <option value="2">Tolak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label>Tarikh Terima</label>
                                </div>
                                <div class="col-3">
                                    <input class="form-control" name="mreg_dateStatus" type="date">
                                </div>
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
        @include('layouts.footers.auth.footer')
    </div>
@endsection
