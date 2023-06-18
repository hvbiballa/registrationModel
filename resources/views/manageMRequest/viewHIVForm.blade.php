@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6>Borang HIV</h6>
                        <div class="col-md-12 mt-4">
                            <div id="defaultOpen">
                                <table>
                                    <tr>
                                        <th>Kemaskini HIV Status (Telah Disahkan)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>Nama</span>
                                                </div>
                                                <div class="right">
                                                    <span>:{{ $data->applicant->app_name ?? '' }}</span>
                                                </div>
                                            </div>
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>No. Kad Pengenalan</span>
                                                </div>
                                                <div class="right">
                                                    <span>:{{ $data->applicant->app_ic ?? '' }}</span>
                                                </div>
                                            </div>
                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>Keputusan </span>
                                                </div>
                                                <div class="right">
                                                    <span>:{{ $data->mapp_hivStatus ?? '' }}</span>
                                                </div>
                                            </div>

                                            <div class="container mt-2">
                                                <div class="left">
                                                    <span>Dokumen HIV Pemohon </span>
                                                </div>
                                                <div class="right">
                                                    <span>: ghjhgfdfgh</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            <a href="{{ route('manageMRequest.statusRequest') }}"
                            class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
