@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Pendaftaran Perkahwinan'])
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
                        <h6>Maklumat Pasangan</h6>
                        <a href={{ route('manageMRegistration.show') }} class="btn btn-info btn-sm float-end mb-0 mt-4"><i
                                class="fas fa-plus"></i> Daftar
                            Nikah</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-3 border">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bil</th>
                                        <th>KP / Nama Pemohon</th>
                                        <th>No. Permohonan</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Status</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr style="line-height: 30px;">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->applicant->app_ic ?? '-' }}
                                                <br>{{ $data->applicant->app_name ?? '-' }}
                                            </td>
                                            <td>{{ $data->mreg_noApp ?? '-' }}</td>
                                            <td>{{ $data->mreg_dateApply ?? '-' }}</td>
                                            <td>
                                                @if ($data->mreg_status === 'Untuk Diluluskan')
                                                    <span class="badge badge-pill bg-info">Untuk Diluluskan</span>
                                                @elseif ($data->mreg_status === 'Lulus')
                                                    <span class="badge badge-pill bg-success">Lulus</span>
                                                @else
                                                    <span class="badge badge-pill bg-warning">Belum
                                                        Hantar</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->mreg_status === 'Untuk Diluluskan')
                                                    <a href="{{ route('manageMRegistration.showApp') }}"><i
                                                            class="fas fa-eye"
                                                            style="padding-right:15px;color:green"></i></a>
                                                    <a href="{{ route('manageMRegistration.showPrint') }}"><i
                                                            class="fas fa-print"
                                                            style="padding-right:15px;color:rgb(0, 0, 0)"></i></a>
                                                @elseif ($data->mreg_status === 'Lulus')
                                                    <a href="{{ route('manageMRegistration.showCert') }}"><i
                                                            class="fas fa-file"
                                                            style="padding-right:15px;color:rgb(255, 111, 0)"></i></a>
                                                @else
                                                    <a href="{{ route('manageMRegistration.showApp') }}"><i
                                                            class="fas fa-eye"
                                                            style="padding-right:15px;color:green"></i></a>
                                                    <a
                                                        href="{{ route('manageMRegistration.edit', ['mregistration' => $data['id']]) }}"><i
                                                            class="fas fa-edit"
                                                            style="padding-right:15px;color:blue"></i></a>
                                                    <a href="#"
                                                        onclick="deleteRecord('{{ route('manageMRegistration.destroy', ['mregistration' => $data['id']]) }}')"><i
                                                            class="fas fa-trash"
                                                            style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                                @endif
                                            </td>
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
        @include('layouts.footers.auth.footer')
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
    <!--<script>
        let table = new DataTable('#myTable');

        function deleteRecord(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#000080',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                preConfirm: (input) => {
                    return fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                _token: "{{ csrf_token() }}"
                            })
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'The record has been deleted.',
                        'success'
                    )
                    setTimeout(() => {
                        document.location.reload();
                    }, 2000);
                }
            })
        }
    </script>-->
@endpush
