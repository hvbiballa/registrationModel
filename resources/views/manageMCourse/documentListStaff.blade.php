@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kursus Kahwin'])
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
                                    <li style="margin-bottom: 30px;"><button type="button" onclick="window.print()" ><a href="{{ route('manageMCourse.printSlipStaff', ['course_app' => $data['id']]) }}"><u>Cetak
                                                Slip Permohonan Kursus</u></button></a></li>
                                    <li><button type="button" onclick="window.print()" ><a href="{{ route('manageMCourse.printCertStaff', ['course_app' => $data['id']]) }}"><u>Cetak Sijil Kursus
                                                Perkahwinan</u></button></a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('manageMCourse.indexStaff') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection