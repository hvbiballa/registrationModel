@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Aduan/Khidmat Nasihat'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Aduan/Khidmat Nasihat</h4>
                    </div>
                  
                                <div class="card-header pb-0 text-center">
                                    <p class="fw-bold font-italic">Maklumat Permohonan
                                    </p>
                                </div>
                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tujuan Aduan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_education]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1">Legalitas</option>
                                                        <option value="2">Pengakuan sosial</option>
                                                        <option value="3">Administrasi dan dokumentasi</option>
                                                        <option value="4">Perlindungan hukum</option>
                                                        <option value="5">Pembatasan poligami</option>
                                                        <option value="6">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h3>Maklumat Pengadu</h3>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_ic]" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                      No.KP/Passport <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_ic" type="number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Tarikh Lahir <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date"
                                                        name="applicant[app_birthdate]">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Bangsa <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_nation">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1">Melayu</option>
                                                        <option value="2">Cina</option>
                                                        <option value="3">India</option>
                                                        <option value="4">BumiPutra</option>
                                                        <option value="5">Orang Asli</option>
                                                        <option value="6">Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Dalam K/P <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[app_houseaddress]" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Alamat Terkini <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[app_addressLatest]" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Telefon <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_phoneNumber]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Sektor Pekerjaan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="applicant[app_jobSector]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1">Kerajaan</option>
                                                        <option value="2">Swasta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Jawatan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="applicant[app_jobName]"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Pendapatan (RM) <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text"
                                                        name="applicant[app_jobSalary]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Taraf Pendidikan <span class="text-danger">*</span></label>
                                                    <select class="form-select" name="spouse[app_education]">
                                                        <option value="0">Sila Pilih...</option>
                                                        <option value="1">Tiada Pendidikan</option>
                                                        <option value="2">SPM</option>
                                                        <option value="3">Diploma</option>
                                                        <option value="4">Ijazah Sarjana Muda</option>
                                                        <option value="5">Ijazah Sarjana</option>
                                                        <option value="6">PHD</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                        <h3>Maklumat Pasangan</h3>
                                       
                                    <div class="tab-pane fade" id="pasangan" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Nama Pasangan <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" name="spouse[app_name]">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        No. Kad Pengenalan <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="spouse[app_ic]" type="text">
                                                </div>
                                            <h3>Maklumat Aduan</h3>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                       Keterangan Aduan <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" name="applicant[consult_details]" rows="3"></textarea>
                                                </div>
                                            </div>
                                        
                                            <div class="text-center mt-4">
                                                <a href="" class="btn btn-light btn-md ms-4">Kembali</a>
                                                <button type="submit" class="btn btn-info btn-md ms-4">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
        let field = document.querySelector('#dateApply');
        field.valueAsDate = new Date();
    </script>
@endpush
