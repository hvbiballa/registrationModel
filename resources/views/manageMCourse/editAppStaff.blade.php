@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kursus Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Kemaskini Maklumat Peserta</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div id="daftarKursus" class="tabcontent">
                            <form role="form" method="POST" action="{{ route('staffRegCourse.update', ['course_app' => $data->id]) }}" enctype="multipart/form-data">
                                @csrf
                                  <div class="container mt-2">
                                    <div class="left">
                                        <span>Tarikh Permohonan </span>
                                    </div>
                                    <div class="right">
                                        <span>{{ $data->created_at ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>No. Kad Pengenalan</span>
                                    </div>
                                    <div class="right">
                                        <span>--</span>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Nama</span>
                                    </div>
                                    <div class="right">
                                        <span >--</span>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Anjuran</span>
                                    </div>
                                    <div class="right">
                                        <select class="form-select" name="course_id" value={{ $data->course->cou_locDistrict ?? '-' }}>
                                            <option selected disabled>Sila Pilih Daerah</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->cou_locDistrict }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Lokasi & Alamat *</span>
                                    </div>
                                    <div class="right">
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Lokasi</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"> {{ $course->cou_address }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Tarikh Kursus *</span>
                                    </div>
                                    <div class="right">
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Tarikh</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->cou_date }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Masa Kursus Mula</span>
                                    </div>
                                    <div class="right">
                                        <span> {{ $data->course->cou_startTime ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Masa Kursus Mula</span>
                                    </div>
                                    <div class="right">
                                        <span>{{ $data->course->cou_endTime ?? '-' }}</span>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Kehadiran Kursus</span>
                                    </div>
                                    <div class="right">
                                       
                                        <input class="form-control" type="text" id="couApp_approveStatus" name="couApp_approveStatus" value={{ $data->couApp_attendance ?? '-' }}>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Kelulusan Kursus</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="text" id="couApp_approveStatus" name="couApp_approveStatus" value="{{ $data->couApp_approveStatus ?? '-' }}">
                                    </div>
                                    
                                </div>
                               
                                
                           
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-info btn-sm float-end mb-0 mt-4">
                                    <input type="reset" value="Set Semula" class="btn btn-info btn-sm float-end mb-0 mt-4">
                        <a href="{{ route('manageMCourse.indexStaff') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection