@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kursus Kahwin'])
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
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.courseRegisteration' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.courseRegisteration') }}"><button class="tablinks"
                                    onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>
                        <div id="daftarKursus" class="tabcontent">

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Anjuran</span>
                                </div>
                                <div class="right">
                                    <span>: {{ $data->course->cou_locDistrict ?? '-' }}</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Lokasi</span>
                                </div>
                                <div class="right">
                                    <span>: {{ $data->course->cou_address ?? '-' }}</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Nama Pemohon </span>
                                </div>
                                <div class="right">
                                    <span>: Ali Bin Abu</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Tarikh Kursus </span>
                                </div>
                                <div class="right">
                                    <span>: {{ $data->course->cou_date ?? '-' }}</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Masa Kursus </span>
                                </div>
                                <div class="right">
                                    <span>: {{ $data->course->cou_startTime ?? '-' }} -
                                        {{ $data->course->cou_endTime ?? '-' }}</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Pegawai Dihubungi </span>
                                </div>
                                <div class="right">
                                    <span>: Encik Ahmad</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>No. Tel</span>
                                </div>
                                <div class="right">
                                    <span>: 019-3002345</span>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="left">
                                    <span>Bukti Pembayaran </span>
                                </div>
                                <div class="right">
                                    <span>: {{ $data->couApp_receipt ?? '-' }}</span>
                                </div>
                            </div>
                            <a href="{{ route('manageMCourse.updateAppStatus', ['course_app'=>$data->id, 'couApp_approveStatus' => 'Untuk Diluluskan'])}}"
                                class="btn btn-info btn-sm float-end mb-0 mt-4">Hantar</a>
                        </div>
                    
                        <a href="{{ route('manageMCourse.index') }}" class="btn btn-info btn-sm float-right mb-0 mt-4">
                            Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
