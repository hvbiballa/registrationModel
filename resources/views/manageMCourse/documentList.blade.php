@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="tab">
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.courseRegisteration' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.courseRegisteration') }}"><button class="tablinks"
                                    onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.postponeCourse' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.postponeCourse') }}"><button class="tablinks"
                                    onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
                            <button class="tablinks active" onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>
                        <div id="documentList" class="tabcontent">
                            <div class="instruction-note">
                                <p><b><i>***Sila pilih dokumen untuk dicetak***</i></b></p>
                            </div>
                            <div class="print-list">
                                <ul>
                                    <li style="margin-bottom: 30px;"><button type="button" onclick="window.print()" ><a href="{{ route('manageMCourse.printSlip', ['course_app' => $data['id']]) }}"><u>Cetak
                                                Slip Permohonan Kursus</u></button></a></li>
                                    <li><button type="button" onclick="window.print()" ><a href="{{ route('manageMCourse.printCert', ['course_app' => $data['id']]) }}"><u>Cetak Sijil Kursus
                                                Perkahwinan</u></button></a></li>
                                </ul>
                            </div>

                        </div>
                        <a href="{{ route('manageMCourse.index') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
