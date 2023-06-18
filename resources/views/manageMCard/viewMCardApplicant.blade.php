@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kad Kahwin'])
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
                        <a href="{{ route('manageMCard.create') }}" class="btn btn-info btn-sm float-end mb-0 mt-4"><i
                                class="fas fa-plus"></i> Mohon Kad
                            Nikah</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mx-5">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-3 border">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Bil</th>
                                        <th>Nama Pemohon</th>
                                        <th>No. Pendaftaran Sijil</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Status</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr style="line-height: 30px;">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->applicant->app_ic ?? '-' }}<br>
                                                {{ $data->applicant->app_name ?? '-' }}</td>
                                            <td>{{ $data->mcard_noApp ?? '-' }}</td>
                                            <td>{{ $data->created_at ? $data->created_at->format('Y-m-d') : '-' }}</td>
                                            <td>
                                                @if ($data->mcard_status === 'Untuk Diluluskan')
                                                    <span class="badge badge-pill bg-info">Untuk Diluluskan</span>
                                                @elseif ($data->mcard_status === 'Lulus')
                                                    <span class="badge badge-pill bg-success">Lulus</span>
                                                @else
                                                    <span class="badge badge-pill bg-warning">Belum
                                                        Hantar</span>
                                                @endif
                                            <td>

                                                @if ($data->mcard_status === 'Untuk Diluluskan')
                                                    <a href="{{ route('manageMCard.showPrint') }}"><i class="fas fa-print"
                                                            style="padding-right:15px;color:rgba(0, 0, 0, 0.297)"></i></a>
                                                @else
                                                    <a href="{{ route('manageMCard.showApp') }}"><i class="fas fa-eye"
                                                            style="padding-right:15px;color:green"></i></a>
                                                    <a href="{{ route('manageMCard.edit', ['mcard' => $data['id']]) }}"><i
                                                            class="fas fa-edit"
                                                            style="padding-right:15px;color:blue"></i></a>
                                                    <a href="#deleteConfirmationModal"
                                                        onclick="showDeleteConfirmation('{{ route('manageMCard.destroy', ['mcard' => $data['id']]) }}')"><i
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

        function showDeleteConfirmation(deleteUrl) {
            // Set the href attribute of the delete link in the modal
            document.getElementById('deleteLink').href = deleteUrl;

            // Show the delete confirmation modal
            $('#deleteConfirmationModal').modal('show');
        }
    </script>
@endpush
