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
                            <button class="tablinks active" onclick="activity(event, 'tangguh-kursus')">Penagguhan
                                Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.documentListTab' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.documentListTab') }}"><button class="tablinks"
                                    onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>

                        <div class="container mt-4">
                            <div class="left">
                                <span>Anjuran</span>
                            </div>
                            <div class="right">
                                <span>: Pejabat Agama Islam Bentong</span>
                            </div>

                            <div class="left">
                                <span>Lokasi</span>
                            </div>
                            <div class="right">
                                <span>: Masjid Ar-Redha</span>
                            </div>

                            <div class="left">
                                <span>Status</span>
                            </div>
                            <div class="right">
                                <span>: Lebih 7 hari (RM40 akan dikenakan)</span>
                            </div>
                        </div>
                        <form action="/action_page.php">
                            <div id="daftarKursus" class="tabcontent">
                                <div class="instruction-note">
                                    <p><b><i>***Sila isi semua bahagian.( * )adalah mandatori***</i></b></p>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Anjuran *</label>
                                        <select class="form-select">
                                            <option selected>--Sila Pilih Anjuran--</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pilih Lokasi *</label>
                                        <select class="form-select">
                                            <option selected>--Sila Pilih Lokasi--</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="example-text-input">Tarikh Kursus *</label>
                                        <input class="form-control" type="date" id="tarikh-kursus" name="tarikh-kursus">
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
                                        <input class="form-control" type="file" id="receipt" name="receipt">
                                    </div>
                                </div>

                                <a href="{{ route('manageMCourse.courseRegisteration') }}"
                                    class="btn btn-info btn-sm float-end mb-0 mt-4"> Hantar</a>
                                <input type="reset" class="btn btn-info btn-sm float-end mb-0 mt-4" value="Set Semula">
                            </div>
                        </form>
                        <a href="{{ route('manageMCourse.index') }}" class="btn btn-info btn-sm float-left mb-0 mt-4">
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
