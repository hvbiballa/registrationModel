@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Kad Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pasangan</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <form role="form" method="POST" action={{ route('manageMCard.update', ['mcard' => $data['id']]) }}
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Suami</label>
                                        <input class="form-control" type="text" name="applicant[app_name]"
                                            value="{{ $data->applicant->app_name ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">No. K/P Suami</label>
                                        <input class="form-control" type="text" name="applicant[app_ic]"
                                            value="{{ $data->applicant->app_ic ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Isteri</label>
                                        <input class="form-control" type="text" name="spouse[app_name]"
                                            value="{{ $data->spouse->app_name ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">No. K/P Isteri</label>
                                        <input class="form-control" type="text" name="spouse[app_ic]"
                                            value="{{ $data->spouse->app_ic ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tarikh Akad Nikah</label>
                                        <input class="form-control" type="text" name="mregistration[mreg_marriageDate]"
                                            value="{{ $data->mregistration->mreg_marriageDate ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Muatnaik Gambar Passport
                                            Suami</label>
                                        <input class="form-control" type="file" name="mcard_ApplicantPhoto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Muatnaik Gambar Passport
                                            Isteri</label>
                                        <input class="form-control" type="file" name="mcard_SpousePhoto">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Muatnaik Resit Kad
                                            Nikah</label>
                                        <input class="form-control" type="file" name="mcard_receipt">
                                    </div>
                                </div>

                        </div>

                        <div class="text-center mt-5">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                            <button type="submit" class="btn btn-info btn-md ms-4">Draft</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
