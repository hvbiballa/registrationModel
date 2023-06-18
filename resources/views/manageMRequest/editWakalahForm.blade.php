@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6>Kemaskini Borang Wakalah Wali</h6>
                        <form role="form" method="POST"
                            action="{{ route('manageMRequest.updateWakalah', ['m_application' => $data['id']]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 mt-4">

                                <div id="defaultOpen">
                                    <table>
                                        <tr>
                                            <th>Persetujuan Wali</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Nama Wali</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span> {{ $data->wali->wali_name ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>No. Kad Pengenalan</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->wali->wali_ic ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Hubungan</span>
                                                    </div>
                                                    <div class="right">
                                                        <span>:
                                                            @if ($data->wali->wali_relationship == 1)
                                                                Bapa
                                                            @elseif($data->spouse->app_education == 2)
                                                                Abang
                                                            @elseif($data->spouse->app_education == 3)
                                                                Adik
                                                            @elseif($data->spouse->app_education == 4)
                                                                Atuk
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Mas Kahwin</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>RM{{ $data->mapp_masKahwin ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    </table>

                                    <table>
                                        <tr>
                                            <th>Wakalah Wali</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Nama Wali</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->wali->wali_name ?? '' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>No. Kad Pengenalan</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->wali->wali_ic ?? '' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Hubungan</span>
                                                    </div>
                                                    <div class="right">
                                                        <span><select class="form-select" name="wali[wali_relationship]">
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
                                                            </select></span>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Nama Wakil Hakim</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span><input class="form-control" type="text" id=""
                                                                    name=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>No. Kad Pengenalan</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span><input class="form-control" type="text" id=""
                                                                    name=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Jawatan</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span><input class="form-control" type="text" id=""
                                                                    name=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Mas Kahwin</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span><input class="form-control" type="text" id=""
                                                                    name=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    </table>



                                    <table>
                                        <tr>
                                            <th>Saksi Wakalah Wali</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Nama Saksi (1)</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span> {{ $data->witness->wit_name1 ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>No. Kad Pengenalan (1)</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->witness->wit_icNum1 ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Alamat (1)</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->witness->wit_adress1 ?? '-' }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Nama Saksi (2)</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span> {{ $data->witness->wit_name2 ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>No. Kad Pengenalan(2)</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->witness->wit_icNum2 ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Alamat(2)</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <span>{{ $data->witness->wit_adress2 ?? '-' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </tr>
                                    </table>

                                    <table>
                                        <tr>
                                            <th>Muat Naik Dokumen (Telah Disahkan)</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Dokumen Wakalah Wali</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input class="form-control" type="file" id="receipt"
                                                                    name="mapp_uploadWakalah">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-info btn-md ms-4">Hantar</button>
                                    </div>
                                    
                                </div>
                                <a href="{{ route('manageMRequest.statusRequest') }}"
                                class="btn btn-info btn-sm float-left mb-0 mt-4">
                                Kembali</a>

                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
