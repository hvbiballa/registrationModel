@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'KHIDMAT NASIHAT'])
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Aduan Khidmat Nasihat</h6>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                          <div class="card-body p-3">

                            <nav class="navbar navbar-light bg-light">
                                      <form class="form-inline">
                                         <input class="form-control mr-sm-2" type="search" placeholder="Cari No.KP/Passport" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Semak</button>
                                                          
         <h2>Senarai Permohonan Aduan</h2>
         <style>
            table {
              border-collapse: collapse;
              width: 100%;
            }
        
            th, td {
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;
            }
        
            th {
              background-color: #f2f2f2;
            }
        
            tr:hover {
              background-color: #f5f5f5;
            }
          </style>
        
        <a class="btn btn-primary" href="{{ route('consultRegistrationPage') }}" role="button">Daftar Baru</a>
        
          <table>
            <thead>
              <tr>
                <th>Bil</th>
                <th>No KP./Passport</th>
                <th>Nama Pengadu</th>
                <th>Tarikh Aduan</th>
                <th>Status</th>
              </tr>
            </thead>
            
          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection