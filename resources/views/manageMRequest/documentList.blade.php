@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6><b><i>***Sila pilih dokumen untuk dicetak***</i></b></h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div id="daftarKursus" class="tabcontent">
                            <div class="print-list">
                                <ul>
                                    <li><button type="button" onclick="window.print()" ><a href="{{ route('manageMRequest.printAppStaff', ['m_application' => $data['id']]) }}"><u>Borang Permohonan Kebenaran</u></button></a></li><br>
                                    <li><button type="button" onclick="window.print()" ><a href="{{ route('manageMRequest.printHIVStaff', ['m_application' => $data['id']]) }}"><u>Borang Pengesahan HIV</u></a></button></li><br>
                                    <li><button type="button" onclick="window.print()" ><a href="{{ route('manageMRequest.printWakalahStaff', ['m_application' => $data['id']]) }}"><u>Borang Pengesahan Wakalah Wali</u></button></a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <a href="{{ route('manageMRequest.indexStaff') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection