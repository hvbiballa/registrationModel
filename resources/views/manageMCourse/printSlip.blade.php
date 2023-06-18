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
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.postponeCourse' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.postponeCourse') }}"><button class="tablinks"
                                    onclick="activity(event, 'tangguh-kursus')">Penagguhan Kursus</button></a>
                            <a class=" {{ Route::currentRouteName() == 'manageMCourse.courseRegisteration' ? 'active' : '' }}"
                                href="{{ route('manageMCourse.courseRegisteration') }}"><button class="tablinks active"
                                    onclick="activity(event, 'cetak')">Cetak</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection