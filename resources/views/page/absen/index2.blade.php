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
                    <h5>Congratulations 🎉{{ Auth::user()->name }} !</h5>
                    <p class="card-text font-small-3">Have you been absent today?</p>
                    <h3 class="mb-60 mt-2 pt-50">
                        <a href="#"></a>
                        {{-- <div id="clock"></div> --}}
                    </h3>
                    {{-- <button type="button" class="btn btn-primary">View Sales</button> --}}
                    <a href="{{ route('absensi.index') }}" class="btn btn-primary ">Back To Dashboard</a>
                    <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal"
                        alt="Medal Pic" />
                    <button type="reset" class="btn btn-secondary"> reset</button>
                </div>
            </div>
        </div>
        <!--/ Medal Card -->

        <!-- Statistics Card -->
        <div class="col-xl-8 col-md-6 col-12">
            <div class="card card-statistics">
                @foreach ($student as $item)

                <div class="card-header">
                    <h4 class="card-title">Keterangan</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 me-25 mb-0">Updated &nbsp; {{ $item->updated_at }}</p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-info me-2">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <p class="card-text font-small-3 mb-0">Nama</p>
                                    <h4 class="fw-bolder mb-0">{{ $item->student->nama }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary me-2">
                                    <div class="avatar-content">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <p class="card-text font-small-3 mb-0">Nis</p>
                                    <h4 class="fw-bolder mb-0">{{ $item->student->nis }}</h4>
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
                                    <p class="card-text font-small-3 mb-0">Rombel</p>
                                    <h4 class="fw-bolder mb-0">{{ $item->student->rombel }}</h4>
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
                                    <p class="card-text font-small-3 mb-0">Rayon</p>
                                    <h4 class="fw-bolder mb-0">{{ $item->student->rayon }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <!--/ Statistics Card -->

        <div class="col-lg-12 col-12">
            <div class="card card-revenue-budget">
                <div class="row mx-0">
                    <div class="col-md-7 col-12 revenue-report-wrapper" style="position: relative;">
                        <div class="d-sm-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-50 mb-sm-0">History Terakhir Absen </h4>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center ms-75">
                                    <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                    <span>Keterangan</span>
                                </div>
                            </div>
                        </div>

                        @if (isset($edit))
                        @include('page.absen.respon')
                        @else
                        @include('page.absen.home')
                        @endif

                    </div>
                    <div class="col-md-5 col-12 budget-wrapper" style="position: relative;">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-outline-primary btn-sm toggle budget waves-effect"
                                data-bs-toggle="" aria-haspopup="true" aria-expanded="false">
                                {{ $ldate }}
                            </button>

                        </div>
                        <h2 class="mb-1" id="clock"></h2>

                            <div class="enable-body-scrolling">
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasScroll" aria-controls="offcanvasScroll">
                                    Klik To Absen
                                </button>
                                <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false"
                                    tabindex="-1" id="offcanvasScroll" aria-labelledby="offcanvasScrollLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasScrollLabel" class="offcanvas-title">Offcanvas Scroll</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <form action="{{ route('absensi.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12 ">
                                                <div class="mb-1 row">
                                                    <div class="d-grid w-100">
                                                        <select class="form-control" required id="nis_id" name="nis_id"
                                                            aria-readonly="">
                                                            <option selected disabled class="text-center">--Pilih Sesuai
                                                                NIS--</option>
                                                            @foreach ($data as $key => $value)
                                                            <option data-rek="{{ $value->nis }}"
                                                                value="{{ $value->id }}">
                                                                {{ $value->nis }}</option>
                                                            @endforeach
                                                        </select> </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <div class="d-grid w-100">
                                                        <select class="form-control" required id="ket" name="ket"
                                                            aria-readonly="">
                                                            <option selected disabled class="text-center">--Pilih
                                                                Keterangan--
                                                            <option value="hadir">Hadir</option>
                                                            <option value="izin">Izin</option>
                                                            </option>
                                                        </select> </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <div class="d-grid w-100">
                                                        <textarea class="form-control h-150px " rows="6"
                                                            placeholder="Masukkan Alasan" name="desc"></textarea>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="jam_kedatangan"
                                                value="{{ Carbon\Carbon::now()->format('H:i:s') }}" />

                                                <input type="hidden" name="ket" value="hadir">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary mb-1 d-grid w-100">Continue</button>
                                            <button type="button" class="btn btn-outline-secondary d-grid w-100"
                                                data-bs-dismiss="offcanvas">
                                                Cancel
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 288px; height: 346px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </form>
                    </div>
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
