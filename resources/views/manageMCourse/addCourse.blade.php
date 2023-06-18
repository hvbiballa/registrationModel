@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kursus Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Daftar Kursus</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div id="daftarKursus" class="tabcontent">
                            <form role="form" method="POST" action={{ route('addCourse.store') }} enctype="multipart/form-data">
                                @csrf 
                                <div class="container mt-2">
                                    <div class="left">
                                        <span>PAID *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="text" id="cou_locDistrict" name="cou_locDistrict">
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Lokasi & Alamat *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="text" id="cou_address" name="cou_address">
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Tarikh Kursus *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="date" id="cou_date" name="cou_date">
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Masa Mula *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="time" id="cou_startTime" name="cou_startTime" style="width:50%">
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Masa Tamat *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="time" id="cou_endTime" name="cou_endTime" style="width:50%">
                                    </div>
                                </div>

                                {{-- <div class="container mt-2">
                                    <div class="left">
                                        <span>Pegawai Dihubungi *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="text" id="dutyStaff" name="dutyStaff">
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>No. Tel *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="text" id="phoneNum" name="phoneNum">
                                    </div>
                                </div> --}}

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Kapasiti Peserta *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="text" id="cou_capacity" name="cou_capacity">
                                    </div>
                                </div>

                                <div class="container mt-2">
                                    <div class="left">
                                        <span>Terbitkan Kepada Umum *</span>
                                    </div>
                                    <div class="right">
                                        <input class="form-control" type="date" id="cou_issuedDate" name="cou_issuedDate">
                                    </div>
                                </div>
                                <div class="text-end mt-2">
                                    <button type="submit" class="btn btn-info btn-sm float-left mb-0 mt-4">Simpan</button>
                                </div>
                                {{-- <input type="submit" class="btn btn-info btn-sm float-end mb-0 mt-4">Daftar</a>
                                <input type="reset" class="btn btn-info btn-sm float-end mb-0 mt-4" value="Set Semula"> --}}
                            </form>
                        </div>
                        <a href="{{ route('manageMCourse.indexStaff') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
