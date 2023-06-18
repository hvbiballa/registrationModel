@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Permohonan Kursus Perkahwinan'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                @if (session()->has('success'))
                    <div id="alert">
                        @include('components.alert')
                    </div>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="tab">
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.courseRegisteration' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.courseRegisteration') }}"><button class="tablinks"
                                    onclick="activity(event, 'daftar-kursus')">Daftar Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.postponeCourse' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.postponeCourse') }}"><button class="tablinks"
                                    onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.documentListTab' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.documentListTab') }}"><button class="tablinks"
                                    onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>

                        <div id="defaultOpen">
                            <img src="{{ env('APP_URL') . '/img/logo-jks.png' }}" class="navbar-brand-img h-100"
                                alt="main_logo">
                            <h6>TERMA DAN PERATURAN KURSUS PRA-PERKAHWINAN ISLAM<br>JABATAN AGAMA ISLAM PAHANG</h6>
                            <p style="padding-top: 20px;">1. Hanya peserta yang berdaftar sahaja dibenarkan menyertai kursus
                                pada hari yang
                                berkenaan.</p>
                            <p>2. Penangguhan kursus dibenarkan untuk satu kali sahaja dan hendaklah dibuat
                                sekurang-kurangnya
                                seminggu awal daripada tarikh yang didaftarkan.</p>
                            <p>3. Penangguhan kurang dari tempoh seminggu, bayaran penangguhan sebanyak RM40.00 akan
                                dikenakan.</p>
                            <p style="padding-bottom: 20px;">4. Ketidakhadiran tanpa maklum akan mengakibatkan pendaftaran
                                kursus terbatal dan
                                yuran tidak akan dikembalikan.</p>

                            <table id="kursus-status">
                                <tr>
                                    <th>Bil</th>
                                    <th>Tempat</th>
                                    <th>Tarikh Kursus</th>
                                    <th>Status</th>
                                    <th>Operasi</th>
                                </tr>
                                <tr>
                                    @foreach ($datas as $data)
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td> {{ $data->course->cou_locDistrict ?? '-' }} -  {{ $data->course->cou_address ?? '-' }}</td>
                                        <td>
                                            {{ $data->course->cou_date ?? '-' }}
                                        </td>
                                        <td>
                                            @if ($data->couApp_approveStatus == 'Untuk Diluluskan')
                                            Hantar
                                        @elseif($data->couApp_approveStatus == 'Draft')
                                            Draft
                                
                                        @endif</td>
                                        <td>
                                            {{-- <a href="{{ route('manageMCourse.viewApplication', ['course_app' => $data->id]) }}"><i class="fas fa-eye" style="padding-right:15px;color:green"></i></a> --}}

                                            <a
                                                href="{{ route('manageMCourse.viewApplication', ['course_app' => $data['id']]) }}"><i
                                                    class="fas fa-eye" style="padding-right:15px;color:green"></i></a>
                                            <a
                                                href="{{ route('manageMCourse.editApplication', ['course_app' => $data->id]) }}"><i
                                                    class="fas fa-edit" style="padding-right:15px;color:blue"></i></a>
                                            <a href="#"
                                            onclick="showDeleteConfirmation('{{ route('manageMCourse.destroyApplication', ['course_app' => $data['id']]) }}');"><i class="fas fa-trash"
                                                    style="padding-right:15px;color:rgb(255, 5, 5)"></i></a>
                                            <a href="{{ route('manageMCourse.documentList', ['course_app' => $data->id]) }}"><i class="fas fa-print"
                                                    style="padding-right:15px;color:black"></i></a>
                                        </td>
                                </tr>
                                @endforeach
                            </table>

                            <a href="{{ route('manageMCourse.courseRegisteration') }}"
                                class="btn btn-info btn-sm float-end mb-0 mt-4"> Daftar Kursus</a>
                        </div>
                    </div>
                </div>
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
    <script>
        function showDeleteConfirmation(deleteUrl) {
            // Set the href attribute of the delete link in the modal
            document.getElementById('deleteLink').href = deleteUrl;
    
            // Show the delete confirmation modal
            $('#deleteConfirmationModal').modal('show');
        }
    </script>
@endsection
