@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kursus Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Daftar Manual Peserta</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="container mt-4">
                            <div class="left">
                                <span>No. Kad Pengenalan</span>
                            </div>
                            <div class="right">
                                <form action="/action_page.php">
                                <span><input class="form-control" type="text" id="" name=""></span>
                            </div>
                            <a href=""><input type="submit" value="Cari" style="margin:20px 440px;"></a>
                        </form>
                        </div>
                        <div class="container mt-4">
                            <div class="left">
                                <span>Name</span>
                            </div>
                            <div class="right">
                                <span>blabla</span>
                            </div>
                    
                            <div class="left">
                                <span>No. Kad Pengenalan</span>
                            </div>
                            <div class="right">
                                <span>: blalbla</span>
                            </div>
                        </div>
                    
                        <form role="form" method="POST" action={{ route('staffRegCourse.store') }} enctype="multipart/form-data">
                            @csrf 
                            <div id="daftarKursus" class="tabcontent">
                                <div class="instruction-note">
                                    <p><b><i>*** Sila isi semua bahagian (*) adalah mandatori. *** </i></p>
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Anjuran *</label>
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Daerah</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->cou_locDistrict }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Lokasi *</label>
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Lokasi</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}"> {{ $course->cou_address }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-select" name="course_id">
                                            <option selected disabled>Sila Pilih Tarikh</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->cou_date }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                    
                    
                                <div class="form-lbl">
                    
                    
                                    <label class="example-text-input">Masa Kursus: </label>
                                    <label for="time" class="lbl-spacing">8:000000-9:00000 am</label>
                    
                                    <label class="example-text-input">Pegawai Dihubungi: </label>
                                    <label for="dutyStaff" class="lbl-spacing">En Ahmadddddddddd</label>
                    
                                    <label class="example-text-input">No. Tel: </label>
                                    <label for="staffPhoneNum" class="lbl-spacing">012-23456535</label>
                    
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="example-text-input">Bukti Pembayaran *</label>
                                        <input class="form-control" type="file" id="receipt" name="couApp_receipt">
                                    </div>
                                </div>
                                
                        </div>
                        <div class="text-end mt-2">
                            <button type="submit" class="btn btn-info btn-sm float-end mb-0 mt-4">Simpan</button>
                        </div>
                </form>
                        <a href="{{ route('manageMCourse.indexStaff') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection