@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Pemohon</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Nav Tab -->
                        <form role="form" method="POST"
                            action="{{ route('manageMRequest.updateStaff', ['m_application' => $data['id']]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#pemohon"
                                            role="tab" aria-controls="pemohon" aria-selected="true">
                                            Maklumat Pemohon
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#pasangan"
                                            role="tab" aria-controls="pasangan" aria-selected="false">
                                            Maklumat Pasangan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#kahwin"
                                            role="tab" aria-controls="kahwin" aria-selected="false">
                                            Maklumat Perkahwinan
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-header pb-0 text-center">
                                    <p class="fw-bold font-italic">** Sila Pastikan Maklumat Diisi dengan Maklumat Yang
                                        Betul **
                                    </p>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="pemohon" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pemohon <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="applicant[app_name]"
                                                        value="{{ $data->applicant->app_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                    <input class="form-control ic-number-input" name="applicant[app_ic]"
                                                        id="ic_number" type="text"
                                                        value="{{ $data->applicant->app_ic ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date"
                                                        id="birthdate" name="applicant[app_birthdate]"
                                                        value="{{ $data->applicant->app_birthdate ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_age]"
                                                        type="number" id="age"
                                                        value="{{ $data->applicant->app_age ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Warganegara <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_nationality]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->applicant->app_nationality == '1' ? 'selected' : '' }}>
                                                            Warganegara</option>
                                                        <option value="2"
                                                            {{ $data->applicant->app_nationality == '2' ? 'selected' : '' }}>
                                                            Bukan Warganegara</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Taraf Pendidikan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_education]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->applicant->app_education == 1 ? 'selected' : '' }}>
                                                            Tiada Pendidikan</option>
                                                        <option value="2"
                                                            {{ $data->applicant->app_education == 2 ? 'selected' : '' }}>SPM
                                                        </option>
                                                        <option value="3"
                                                            {{ $data->applicant->app_education == 3 ? 'selected' : '' }}>
                                                            Diploma</option>
                                                        <option value="4"
                                                            {{ $data->applicant->app_education == 4 ? 'selected' : '' }}>
                                                            Ijazah Sarjana</option>
                                                        <option value="5"
                                                            {{ $data->applicant->app_education == 5 ? 'selected' : '' }}>
                                                            PHD</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Bangsa <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_nation]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->applicant->app_nation == 1 ? 'selected' : '' }}>
                                                            Melayu</option>
                                                        <option value="2"
                                                            {{ $data->applicant->app_nation == 2 ? 'selected' : '' }}>Cina
                                                        </option>
                                                        <option value="3"
                                                            {{ $data->applicant->app_nation == 3 ? 'selected' : '' }}>India
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Status Sebelum Berkahwin <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_marriageStatus]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->applicant->app_marriageStatus == 1 ? 'selected' : '' }}>
                                                            Dara</option>
                                                        <option value="2"
                                                            {{ $data->applicant->app_marriageStatus == 2 ? 'selected' : '' }}>
                                                            Teruna</option>
                                                        <option value="3"
                                                            {{ $data->applicant->app_marriageStatus == 3 ? 'selected' : '' }}>
                                                            Duda</option>
                                                        <option value="4"
                                                            {{ $data->applicant->app_marriageStatus == 4 ? 'selected' : '' }}>
                                                            Janda</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[app_houseaddress]" rows="3">{{ $data->applicant->app_houseaddress ?? '' }}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Terkini <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[app_addressLatest]" rows="3">{{ $data->applicant->app_addressLatest ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_jobSector]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->applicant->app_jobSector == 1 ? 'selected' : '' }}>
                                                            Kerajaan</option>
                                                        <option value="2"
                                                            {{ $data->applicant->app_jobSector == 2 ? 'selected' : '' }}>
                                                            Swasta</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pekerjaan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_jobName]"
                                                        type="text" value="{{ $data->applicant->app_jobName ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Pendapatan (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="applicant[app_jobSalary]"
                                                        value="{{ $data->applicant->app_jobSalary ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Telefon <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_phonenumber]"
                                                        type="text"
                                                        value="{{ $data->applicant->app_phonenumber ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="#" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pasangan" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pasangan <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="spouse[app_name]"
                                                        value="{{ $data->spouse->app_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_ic]"
                                                        id="ic_number" type="text"
                                                        value="{{ $data->spouse->app_ic ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date"
                                                        id="birthdate" name="spouse[app_birthdate]"
                                                        value="{{ $data->spouse->app_birthdate ?? '' }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_age]"
                                                        type="number" id="age"
                                                        value="{{ $data->spouse->app_age ?? '' }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Warganegara <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_nationality]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->spouse->app_nationality == '1' ? 'selected' : '' }}>
                                                            Warganegara</option>
                                                        <option value="2"
                                                            {{ $data->spouse->app_nationality == '2' ? 'selected' : '' }}>
                                                            Bukan Warganegara</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Taraf Pendidikan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_education]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->spouse->app_education == 1 ? 'selected' : '' }}>
                                                            Tiada Pendidikan</option>
                                                        <option value="2"
                                                            {{ $data->spouse->app_education == 2 ? 'selected' : '' }}>
                                                            SPM
                                                        </option>
                                                        <option value="3"
                                                            {{ $data->spouse->app_education == 3 ? 'selected' : '' }}>
                                                            Diploma</option>
                                                        <option value="4"
                                                            {{ $data->spouse->app_education == 4 ? 'selected' : '' }}>
                                                            Ijazah Sarjana</option>
                                                        <option value="5"
                                                            {{ $data->spouse->app_education == 5 ? 'selected' : '' }}>
                                                            PHD</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Bangsa <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_nation]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->spouse->app_nation == 1 ? 'selected' : '' }}>
                                                            Melayu</option>
                                                        <option value="2"
                                                            {{ $data->spouse->app_nation == 2 ? 'selected' : '' }}>Cina
                                                        </option>
                                                        <option value="3"
                                                            {{ $data->spouse->app_nation == 3 ? 'selected' : '' }}>India
                                                        </option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Status Sebelum Berkahwin <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_marriageStatus]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->spouse->app_marriageStatus == 1 ? 'selected' : '' }}>
                                                            Dara</option>
                                                        <option value="2"
                                                            {{ $data->spouse->app_marriageStatus == 2 ? 'selected' : '' }}>
                                                            Teruna</option>
                                                        <option value="3"
                                                            {{ $data->spouse->app_marriageStatus == 3 ? 'selected' : '' }}>
                                                            Duda</option>
                                                        <option value="4"
                                                            {{ $data->spouse->app_marriageStatus == 4 ? 'selected' : '' }}>
                                                            Janda</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="spouse[app_houseaddress]" rows="3">{{ $data->spouse->app_houseaddress ?? '' }}</textarea>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Terkini <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="spouse[app_addressLatest]" rows="3">{{ $data->spouse->app_addressLatest ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_jobSector]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->spouse->app_jobSector == 1 ? 'selected' : '' }}>
                                                            Kerajaan</option>
                                                        <option value="2"
                                                            {{ $data->spouse->app_jobSector == 2 ? 'selected' : '' }}>
                                                            Swasta</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pekerjaan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_jobName]" type="text"
                                                        value="{{ $data->spouse->app_jobName ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Pendapatan (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="spouse[app_jobSalary]"
                                                        value="{{ $data->spouse->app_jobSalary ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Telefon <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_phonenumber]"
                                                        type="text"
                                                        value="{{ $data->spouse->app_phonenumber ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <a href="#" class="btn btn-info btn-md ms-4">Seterusnya</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kahwin" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-12 bg-light p-1 mb-2">
                                                <h6>Butiran Perkahwinan</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Mohon <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="mapp_dateApply"
                                                        readonly value="{{ $data->mapp_dateApply ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mapp_marriageDate" type="date"
                                                        value="{{ $data->mapp_marriageDate ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tempat Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="mapp_marriageAddress"
                                                        value="{{ $data->mapp_marriageAddress ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Masa Akad Nikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mapp_marriageTime" type="time"
                                                        value="{{ $data->mapp_marriageTime ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Mas Kahwin (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="number" name="mapp_masKahwin"
                                                        value="{{ $data->mapp_masKahwin ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Hantaran (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="mapp_hantaran" type="number"
                                                        value="{{ $data->mapp_hantaran ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Jurunikah <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="mapp_jurunikahName"
                                                        value="{{ $data->mapp_jurunikahName ?? '' }}">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                                <h6>Butiran Wali</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="wali[wali_name]"
                                                        value="{{ $data->wali->wali_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_ic]"
                                                        type="text" value="{{ $data->wali->wali_ic ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Wali <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="wali[wali_address]" rows="2">{{ $data->wali->wali_address ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Hubungan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="wali[wali_relationship]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1"
                                                            {{ $data->wali->wali_relationship == 1 ? 'selected' : '' }}>
                                                            Bapa</option>
                                                        <option value="2"
                                                            {{ $data->wali->wali_relationship == 2 ? 'selected' : '' }}>
                                                            Abang</option>
                                                        <option value="3"
                                                            {{ $data->wali->wali_relationship == 3 ? 'selected' : '' }}>
                                                            Adik</option>
                                                        <option value="4"
                                                            {{ $data->wali->wali_relationship == 4 ? 'selected' : '' }}>
                                                            Atuk</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control"
                                                        name="wali[wali_birthdate]"
                                                        value="{{ $data->wali->wali_birthdate ?? '' }}" type="date"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_age]"
                                                        type="number" value="{{ $data->wali->wali_age ?? '' }}"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Wali <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="wali[wali_phoneNum]"
                                                        value="{{ $data->wali->wali_phoneNum ?? '' }}" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-12 bg-light p-1 mb-2 mt-2">
                                                <h6>Maklumat Saksi</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_name1]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_icNum1]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Saksi 1 <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="witness[wit_adress1]" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_age1]" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Saksi 1 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_noPhone1]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_name2]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. K/P Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_icNum2]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Saksi 2 <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="witness[wit_adress2]" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Umur Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_age2]" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Phone Saksi 2 <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="witness[wit_noPhone2]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Status Permohonan <span class="text-danger">*</span></label>
                                                        <select class="form-select" 
                                                         name="mapp_status">
                                                        <option selected></option>
                                                        <option value="Untuk Diluluskan">Untuk Diluluskan</option>
                                                        <option value="Baru">Baru</option>
                                                        <option value="Dalam Proses">Dalam Proses</option>
                                                        <option value="Lulus">Lulus</option>
                                                        <option value="Gagal">Gagal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-info btn-md ms-4">Kemaskini</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
    </script>
@endpush
