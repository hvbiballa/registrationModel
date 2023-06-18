@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Maklumat Permohonan Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Maklumat Permohonan</h6>
                    </div>
                    <div class="card-body p-3">
                        <!-- Maklumat Suami-->
                        <div class="row p-1 m-1 bg-light">
                            <div class="col">
                                <h6>Maklumat Pemohon</h6>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Nama Pemohon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_name ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Pemohon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_age ?? '-' }} Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. Kad Pengenalan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_ic ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat terkini</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_addressLatest ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Dalam K/P</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_houseaddress ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Lahir</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_birthdate ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Bangsa</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->applicant->app_nation == 1)
                                        Melayu
                                    @elseif($data->applicant->app_nation == 2)
                                        Cina
                                    @elseif($data->applicant->app_nation == 3)
                                        India
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>Warganegara</label>
                            </div>
                            <div class="col-2">
                                <p>:
                                    @if ($data->applicant->app_nation == 1)
                                        Warganegara
                                    @elseif($data->applicant->app_nation == 2)
                                        Bukan Warganegara
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>Status Sebelum Kahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->applicant->app_marriageStatus == 1)
                                        Dara
                                    @elseif($data->applicant->app_marriageStatus == 2)
                                        Teruna
                                    @elseif($data->applicant->app_marriageStatus == 3)
                                        Duda
                                    @elseif($data->applicant->app_marriageStatus == 4)
                                        Janda
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <!--<div class="col-2">
                                                        <label>Status Pekerjaan</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <p>: Bekerja</p>
                                                    </div>-->
                            <div class="col-2">
                                <label>Nama Pekerjaan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_jobName ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Pendapatan</label>
                            </div>
                            <div class="col-2">
                                <p>: RM{{ $data->applicant->app_jobSalary ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Taraf Pendidikan</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->applicant->app_education == 1)
                                        Tiada Pendidikan
                                    @elseif($data->applicant->app_education == 2)
                                        SPM
                                    @elseif($data->applicant->app_education == 3)
                                        Diploma
                                    @elseif($data->applicant->app_education == 4)
                                        Ijazah Sarjana Muda
                                    @elseif($data->applicant->app_education == 5)
                                        Ijazah Sarjana
                                    @elseif($data->applicant->app_education == 6)
                                        PHD
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>No. Telefon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->applicant->app_phoneNumber ?? '-' }}</p>
                            </div>
                        </div>

                        <!-- Maklumat Isteri-->
                        <div class="row p-1 m-1 bg-light mt-4">
                            <div class="col">
                                <h6>Maklumat Pasangan</h6>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Nama Pasangan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_name ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Pasangan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_age ?? '-' }} Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. Kad Pengenalan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_ic ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat terkini</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_addressLatest ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Dalam K/P</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_houseaddress ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Lahir</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_birthdate ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Bangsa</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->spouse->app_nation == 1)
                                        Melayu
                                    @elseif($data->spouse->app_nation == 2)
                                        Cina
                                    @elseif($data->spouse->app_nation == 3)
                                        India
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>Warganegara</label>
                            </div>
                            <div class="col-2">
                                <p>:
                                    @if ($data->spouse->app_nation == 1)
                                        Warganegara
                                    @elseif($data->spouse->app_nation == 2)
                                        Bukan Warganegara
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>Status Sebelum Kahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->spouse->app_marriageStatus == 1)
                                        Dara
                                    @elseif($data->spouse->app_marriageStatus == 2)
                                        Teruna
                                    @elseif($data->spouse->app_marriageStatus == 3)
                                        Duda
                                    @elseif($data->spouse->app_marriageStatus == 4)
                                        Janda
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <!--<div class="col-2">
                                                        <label>Sektor Pekerjaan</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <p>: Bekerja</p>
                                                    </div>-->
                            <div class="col-2">
                                <label>Nama Pekerjaan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_jobName ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Pendapatan</label>
                            </div>
                            <div class="col-2">
                                <p>: RM{{ $data->spouse->app_jobSalary ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Taraf Pendidikan</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->spouse->app_education == 1)
                                        Tiada Pendidikan
                                    @elseif($data->spouse->app_education == 2)
                                        SPM
                                    @elseif($data->spouse->app_education == 3)
                                        Diploma
                                    @elseif($data->spouse->app_education == 4)
                                        Ijazah Sarjana Muda
                                    @elseif($data->spouse->app_education == 5)
                                        Ijazah Sarjana
                                    @elseif($data->spouse->app_education == 6)
                                        PHD
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>No. Telefon</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->spouse->app_phoneNumber ?? '-' }}</p>
                            </div>
                        </div>

                        <!-- Maklumat Perkahwinan-->
                        <div class="row p-1 m-1 bg-light mt-4">
                            <div class="col">
                                <h6>Maklumat Perkahwinan</h6>
                            </div>
                        </div>
                        <div class="row justify-content-start m-1 mt-3">
                            <div class="col-2">
                                <label>Tarikh Permohonan</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->mreg_dateApply ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Masa Akad Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->mreg_marriageTime ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Jurunikah</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->mreg_jurunikahName ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Akad Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->mreg_marriageDate ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Hantaran</label>
                            </div>
                            <div class="col-2">
                                <p>: RM{{ $data->mreg_hantaran ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Mas Kahwin</label>
                            </div>
                            <div class="col-2">
                                <p>: RM{{ $data->mreg_masKahwin ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Tempat Akad Nikah</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->mreg_marriageAddress ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Bayaran</label>
                            </div>
                            <div class="col-2">
                                <a href="{{ asset($data->mreg_receipt) }}" style="">: Resit Bayaran</a>
                            </div>
                            <div class="col-2">
                                <label>Nama Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->wali->wali_name ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->wali->wali_ic ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Hubungan Dengan Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: @if ($data->wali->wali_relationship == 1)
                                        Bapa
                                    @elseif($data->spouse->app_education == 2)
                                        Abang
                                    @elseif($data->spouse->app_education == 3)
                                        Adik
                                    @elseif($data->spouse->app_education == 4)
                                        Atuk
                                    @else
                                        <span class="text-danger">Error</span>
                                    @endif
                                </p>
                            </div>
                            <div class="col-2">
                                <label>Tarikh Lahir Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->wali->wali_birthdate ?? '-' }}</p>
                            </div>

                            <div class="col-2">
                                <label>Umur Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->wali->wali_age ?? '-' }} Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. Phone Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->wali->wali_phoneNum ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_name1 ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_age1 ?? '-' }} Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. Phone Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_noPhone1 ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Nama Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_name2 ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Umur Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_age2 ?? '-' }} Tahun</p>
                            </div>
                            <div class="col-2">
                                <label>No. K/P Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_icNum2 ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>No. Phone Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_noPhone2 ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Wali</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->wali->wali_address ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Saksi 1</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_adress1 ?? '-' }}</p>
                            </div>
                            <div class="col-2">
                                <label>Alamat Saksi 2</label>
                            </div>
                            <div class="col-2">
                                <p>: {{ $data->witness->wit_adress2 ?? '-' }}</p>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                            <button onclick="window.print()" class="btn btn-secondary btn-md ms-4">Cetak Permohonan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

