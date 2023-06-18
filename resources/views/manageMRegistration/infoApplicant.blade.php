@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Daftar Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    @if (empty($datas->mreg_status))
                        <div class="card-header pb-0">
                            <h6>Maklumat Pasangan</h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label>Nama Pemohon</label>
                                </div>
                                <div class="col-2">
                                    <p>: {{ $data->applicant->app_name ?? '' }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label>No. K/P Pemohon</label>
                                </div>
                                <div class="col-2">
                                    <p>: {{ $data->applicant->app_ic ?? '' }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label>Nama Pasangan</label>
                                </div>
                                <div class="col-2">
                                    <p>: {{ $data->spouse->app_name ?? '' }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label>No. K/P Pasangan</label>
                                </div>
                                <div class="col-2">
                                    <p>: {{ $data->spouse->app_ic ?? '' }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label>Kategori Pendaftaran Nikah</label>
                                </div>
                                <div class="col-7">
                                    <select class="form-select" id="mySelect" style="width:50%;"
                                        onchange="checkSelected()">
                                        <option selected>--- Sila Pilih ---</option>
                                        <option value="1">Pendaftaran Nikah Dengan Kebenaran</option>
                                        <option value="2">Pendaftaran Nikah Sukarela</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row justify-content-start m-1">
                                <div class="col-2">
                                    <label id="labelA"></label>
                                </div>
                                <div class="col-2">
                                    <p id="noAcc"></p>
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button onclick="history.back()" class="btn btn-light btn-md ms-auto">Kembali</button>
                                <a href="#" id="myLink" class="btn btn-info btn-md ms-4">Seterusnya</a>
                            </div>
                    @endif
                    @if (!empty($datas->mreg_status))
                        <button onclick="history.back()" class="btn btn-light btn-md mx-auto my-4"
                            style="width:10%;">Kembali</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
        function checkSelected() {
            var selectElement = document.getElementById("mySelect");
            var selectedValue = selectElement.value;
            var seterusnyaButton = document.getElementById("myLink");

            if (selectedValue === "1") {
                document.getElementById("labelA").innerHTML = "No. Akaun Terima Kebenaran Berkahwin";
                document.getElementById("noAcc").innerHTML = ": ";
                seterusnyaButton.href = "{{ route('manageMRegistration.create', ['category' => '1']) }}";

            } else {
                document.getElementById("labelA").innerHTML = "";
                document.getElementById("noAcc").innerHTML = "";
                seterusnyaButton.href = "{{ route('manageMRegistration.create', ['category' => '2']) }}";
            }
        }
    </script>
@endpush
