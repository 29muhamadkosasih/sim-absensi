@section('title', 'Absensi')
@foreach ($student as $item)
<div class="card-body">
    <div class="user-avatar-section">
        <div class="d-flex align-items-center flex-column">
            <img class="img-fluid rounded mt-0 mb-2" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                height="110" width="110" alt="User avatar">
            <div class="user-info text-center">
                <h4>{{ $item->student->nama }}</h4>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-around my-2 pt-75">
        <div class="d-flex align-items-start me-2">
            <span class="badge bg-light-primary p-75 rounded">
                <i data-feather='grid'></i> </span>
            <div class="ms-75">
                <h4 class="mb-0">{{ $item->student->rombel }}</h4>
                <small>Rombel</small>
            </div>
        </div>
        <div class="d-flex align-items-start">
            <span class="badge bg-light-primary p-75 rounded">
                <i data-feather='life-buoy'></i> </span>
            <div class="ms-75">
                <h4 class="mb-0">{{ $item->student->rayon }}</h4>
                <small>Rayon</small>
            </div>
        </div>
        <div class="d-flex align-items-start me-2">
            <span class="badge bg-light-primary p-75 rounded">
                <i data-feather='archive'></i> </span>
                <div class="ms-75">
                    <h4 class="mb-0">{{ $item->student->nis }}</h4>
                    <small>NIS</small>
                </div>
        </div>
        <div class="d-flex align-items-start">
            <a href="javascript:;" class="btn btn-primary me-1 waves-effect waves-float waves-light"
                data-bs-target="#editUser" data-bs-toggle="modal">
                Confirm
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-2">

    </div>
</div>
@endforeach
