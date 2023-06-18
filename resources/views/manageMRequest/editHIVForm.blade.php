@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">
                    
                            <h6>Kemaskini Borang HIV</h6>
                       </div>
                        <form role="form" method="POST"
                            action="{{ route('manageMRequest.updateHIV', ['m_application' => $data['id']]) }}"
                            enctype="multipart/form-data">
                            @csrf
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
                                                        <span>{{ $data->applicant->app_name ?? '' }}</span>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>No. Kad Pengenalan</span>
                                                    </div>
                                                    <div class="right">
                                                        <span>{{ $data->applicant->app_ic ?? '' }}</span>
                                                    </div>
                                                </div>
                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Keputusan *</span>
                                                    </div>
                                                    <div class="right">
                                                        <select class="form-select" 
                                                            style="width:50%;" name="mapp_hivStatus">
                                                            <option selected></option>
                                                            <option value="positive">Positif</option>
                                                            <option value="negative">Negatif</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="container mt-2">
                                                    <div class="left">
                                                        <span>Dokumen HIV Pemohon *</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input class="form-control" type="file" id="receipt"
                                                                    name="mapp_uploadHIV">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-4">
                                                        <button type="submit" class="btn btn-info btn-md ms-4">Hantar</button>
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
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
