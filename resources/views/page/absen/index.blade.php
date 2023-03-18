@extends('layouts.apps')
@section('title', 'Absensi')
@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
    <div class="row match-height">
        <!-- Medal Card -->
        <div class="col-xl-4 col-md-6 col-12">
            <div class="card card-congratulation-medal">
                <div class="card-body">
                    <h5>Welcome 🎉{{ Auth::user()->name }} !</h5>
                    <p class="card-text font-small-3">Have you been absent today?</p>
                    <h3 class="mb-60 mt-2 pt-50">
                        <a href="#"></a>
                        {{-- <div id="clock"></div> --}}
                    </h3>
                    {{-- <button type="button" class="btn btn-primary">View Sales</button> --}}
                    <a href="{{ url('/index2') }}" class="btn btn-primary ">Klik Disini !</a>
                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal"
                        alt="Medal Pic" />
                </div>
            </div>
        </div>
        <!--/ Medal Card -->

        <!-- Statistics Card -->
        <div class="col-xl-8 col-md-6 col-12">
            <div class="card card-statistics">

                @foreach ($data as $item)

                <div class="card-header">
                    <h4 class="card-title">Statistik Absensi Keseluruhan</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 me-25 mb-0">Updated {{ $item->created_at }}</p>
                    </div>
                </div>
                @endforeach
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary me-2">
                                    <div class="avatar-content">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <p class="card-text font-small-3 mb-0">Total Absen</p>
                                    <h4 class="fw-bolder mb-0">{{ $t_absen }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-info me-2">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <p class="card-text font-small-3 mb-0">Kehadiran</p>
                                    <h4 class="fw-bolder mb-0">8.549k</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-danger me-2">
                                    <div class="avatar-content">
                                        <i data-feather="box" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <p class="card-text font-small-3 mb-0">Izin</p>
                                    <h4 class="fw-bolder mb-0">1.423k</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Card -->
    </div>
</section>
<section id="complex-header-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">List Absensi </h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                {{-- <th width='90px' class="text-center">No</th> --}}
                                <th class="text-center">Date</th>
                                <th class="text-center">Nis</th>
                                <th class="text-center"> Nama</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                {{-- <td class="text-center"> {{ $loop->iteration }}</td> --}}
                                <td class="text-center">{{ $item->date }}</td>
                                <td class="text-center"> {{ $item->student->nis }}</td>
                                <td class="text-center"> {{ $item->student->nama }}</td>
                                <td class="text-center">
                                    {{-- @if($item->ket == 'izin')
                                        <span class="badge bg-primary">{{ $item->ket }}</span>
                                    @else
                                    <span class="badge bg-secondary">{{ $item->ket }}</span>
                                    @endif --}}

                                    @switch($item)
                                    @case($item->ket == 'Izin')
                                    <span class="badge bg-primary">Request Izin</span>
                                    @break

                                    @case($item->ket == 'hadir')
                                    <span class="badge bg-secondary">{{ $item->ket }}</span>
                                    @break

                                    @case($item->ket == 'izin')
                                    <span class="badge bg-warning">{{ $item->ket }}</span>
                                    @break
                                    @default
                                    <span class="badge bg-danger">failed</span>
                                    @endswitch

                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    setInterval(() => {
        let date = new Date()
        let clock = document.getElementById('clock')
        clock.innerHTML =
            date.getHours() + ":" +
            date.getMinutes() + ":" +
            date.getSeconds()

    }, 1000);
</script>
@endsection
