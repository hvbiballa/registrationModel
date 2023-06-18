@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Permohonan Kebenaran Kahwin'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                @if (session()->has('success'))
                    <div id="alert">
                        @include('components.alert')
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h6>Pilihan Carian</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="row">
                            <div class="column">
                                <form action="/action_page.php">

                                    <div class="container mt-2">
                                        <div class="left">
                                            <span><b>Status</b></span>
                                        </div>
                                        <div class="right">
                                            <select class="form-select" name="mapp_status" style="width: 50%;">
                                                <option selected></option>
                                                <option value="Untuk Diluluskan">Untuk Diluluskan</option>
                                                <option value="Baru">Baru</option>
                                                <option value="Dalam Proses">Dalam Proses</option>
                                                <option value="Lulus">Lulus</option>
                                                <option value="Gagal">Gagal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <a href=""><input type="submit" value="Cari"
                                                style="margin-right:320px;margin-top:10px;"></a>
                                    </div>
                                </form>
                            </div>

                            <div class="column" style="width: 30%;">
                                <a href="{{ route('manageMRequest.registerApplicant') }}"><input type="submit"
                                        value="Daftar Permohonan" style="margin-right:100px;width:45%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-3 border">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bil</th>
                                        <th>No.Akuan Terima</th>
                                        <th>Pemohon</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Tarikh Akad</th>
                                        <th>Status</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr style="line-height: 30px;">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td> {{ $data->mapp_noApp ?? '-' }}</td>
                                            <td> {{ $data->applicant->app_ic ?? '-' }} <br>
                                                {{ $data->applicant->app_name ?? '-' }}</td>
                                            <td>{{ $data->mapp_dateApply ?? '-' }}</td>
                                            <td>{{ $data->mapp_marriageDate ?? '-' }}</td>
                                            <td><span>
                                                    @if ($data->mapp_status === 'Untuk Diluluskan')
                                                        <span class="badge badge-pill bg-info">Untuk Diluluskan</span>
                                                    @elseif ($data->mapp_status === 'Baru')
                                                        <span class="badge badge-pill bg-info">Baru</span>
                                                    @elseif ($data->mapp_status === 'Dalam Proses')
                                                        <span class="badge badge-pill bg-info">Dalam Proses</span>
                                                    @elseif ($data->mapp_status === 'Lulus')
                                                        <span class="badge badge-pill bg-success">Lulus</span>
                                                    @elseif ($data->mapp_status === 'Gagal')
                                                        <span class="badge badge-pill bg-warning">Gagal</span>
                                                    @else
                                                        <span class="badge badge-pill bg-warning">Belum
                                                            Hantar</span>
                                                    @endif
                                                </span></td>
                                            <td>
                                                <a
                                                    href="{{ route('manageMRequest.viewAppStaff', ['m_application' => $data['id']]) }}"><i
                                                        class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                                                <a
                                                    href="{{ route('manageMRequest.editAppStaff', ['m_application' => $data['id']]) }}"><i
                                                        class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                                                <a href="#"
                                                    onclick="deleteRecord('{{ route('manageMRequest.destroyStaff', ['m_application' => $data['id']]) }}')"><i
                                                        class="fas fa-trash"
                                                        style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                                <a
                                                    href="{{ route('manageMRequest.documentListStaff', ['m_application' => $data['id']]) }}"><i
                                                        class="fas fa-print" style="padding-right:15px;color:black"></i></a>
                                            </td>
                                        </tr>
                                        <tr style="display:none">
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Padam Aduan Modal -->
                            <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                                aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteConfirmationModalLabel">Padam Permohonan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Adakah kamu mahu memadam permohonan?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <a href="" id="deleteLink" class="btn btn-danger">Padam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Padam Aduan Modal -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        let table = new DataTable('#myTable');

        function deleteRecord(deleteUrl) {
            // Set the href attribute of the delete link in the modal
            document.getElementById('deleteLink').href = deleteUrl;

            // Show the delete confirmation modal
            $('#deleteConfirmationModal').modal('show');
        }
    </script>
@endpush
