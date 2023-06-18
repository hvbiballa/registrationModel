@extends('layouts.staff', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnavStaff', ['title' => 'Kursus Kahwin'])
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
                                            <span><b>PAID</b></span>
                                        </div>
                                        <div class="right">
                                            <select class="form-select" name="course_id">
                                                <option selected disabled>Sila Pilih Daerah</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->cou_locDistrict }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container mt-2">
                                        <div class="left">
                                            <span><b>No. Kad Pengenalan</b></span>
                                        </div>
                                        <div class="right">
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="IC" name="IC">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check mb-3 form-check-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="customRadio1">
                                        <label class="custom-control-label" for="customRadio1">Kelulusan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="customRadio2">
                                        <label class="custom-control-label" for="customRadio2">Kehadiran</label>
                                    </div>

                                    <a href=""><input type="submit" value="Jana Carian"
                                            style="margin-right:330px;"></a>
                                </form>
                            </div>

                            <div class="column" style="width: 30%;">
                                <a href="{{ route('manageMCourse.addCourse') }}"><input type="submit" value="Daftar Kursus"
                                        style="margin-right:100px;width:35%;"></a>
                                <a href="{{ route('manageMCourse.registerApplicant') }}"><input type="submit"
                                        value="Daftar Peserta" style="margin-right:100px;width:35%;"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-3 border">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bil</th>
                                        <th>Anjuran</th>
                                        <th>Lokasi</th>
                                        <th>Nama Peserta</th>
                                        <th>Kehadiran</th>
                                        <th>Kelulusan</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr style="line-height: 30px;">

                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                {{ $data->course->cou_locDistrict ?? '-' }}
                                            </td>
                                            <td>
                                                {{ $data->course->cou_address ?? '-' }}
                                            </td>
                                            <td></td>
                                            <td>{{ $data->couApp_attendance ?? '-' }}</td>
                                            <td>

                                                @if ($data->couApp_approveStatus === 'Untuk Diluluskan')
                                                    <span class="badge badge-pill bg-info">Untuk Diluluskan</span>
                                                @elseif ($data->couApp_approveStatus === 'Lulus')
                                                    <span class="badge badge-pill bg-success">Lulus</span>
                                                @else
                                                    <span class="badge badge-pill bg-warning">Gagal</span>
                                                @endif

                                            </td>
                                            <td>
                                                <a
                                                    href="{{ route('manageMCourse.viewAppStaff', ['course_app' => $data['id']]) }}"><i
                                                        class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                                                <a
                                                    href="{{ route('manageMCourse.editAppStaff', ['course_app' => $data['id']]) }}"><i
                                                        class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                                                <a href="#"
                                                    onclick="showDeleteConfirmation('{{ route('manageMCourse.destroyAppStaff', ['course_app' => $data['id']]) }}');"><i
                                                        class="fas fa-trash"
                                                        style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>

                                                <a
                                                    href="{{ route('manageMCourse.documentListStaff', ['course_app' => $data->id]) }}"><i
                                                        class="fas fa-print"
                                                        style="padding-right:15px;color:rgba(0, 0, 0, 0.784)"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    <tr style="display:none"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Padam Aduan Modal -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Padam Permohonan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Adakah kamu mahu memadam permohonan?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="" id="deleteLink" class="btn btn-danger">Padam</a>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Padam Aduan Modal -->
    </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
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
                        'The user has been deleted.',
                        'success'
                    )
                    setTimeout(() => {
                        document.location.reload();
                    }, 2000);
                }
            })
        }
    </script>

    <script>
        function showDeleteConfirmation(deleteUrl) {
            // Set the href attribute of the delete link in the modal
            document.getElementById('deleteLink').href = deleteUrl;

            // Show the delete confirmation modal
            $('#deleteConfirmationModal').modal('show');
        }
    </script>
@endpush
