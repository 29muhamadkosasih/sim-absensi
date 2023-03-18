@section('title', 'Absensi')
@foreach ($student as $item)
<div class="card-body">
    @switch($item)
    @case($item->ket == 'hadir')
    <h2 class="text-center">Congratulations 🎉 {{ $item->student->nama }} !</h2>
    <p class="card-text font-small-5 text-center">You have arrived at the following hour
    </p>
    {{-- <h3 class="mb-75 mt-2 pt-50">Anda telah absen pada jam {{ $item->jam_kedatangan }}
    </h3> --}}
    <p class="card-text font-small-5 text-center">jam kedatangan :
        <B>{{ $item->jam_kedatangan }}</B>
    </p>
    {{-- <p class="card-text font-small-5 text-center">jam kepulangan :
                                <B>{{ $item->jam_kedatangan }}</B>
    </p>
    <p class="card-text font-small-5 text-center">Status :
        <B>{{ $item->jam_kedatangan }}</B>
    </p> --}}
    {{-- <h3 class="text-center"><B>{{ $item->jam_kedatangan }}</B></h3> --}}    @break

    @case($item->ket == '2')
    <h2 class="text-center">Congratulations 🎉 {{ $item->student->nama }} !</h2>
    <p class="card-text font-small-5 text-center">You have arrived at the following hour
    </p>
    {{-- <h3 class="mb-75 mt-2 pt-50">Anda telah absen pada jam {{ $item->jam_kedatangan }}
    </h3> --}}
    <p class="card-text font-small-5 text-center">jam kedatangan :
        <B>{{ $item->jam_kedatangan }}</B>
    </p>
    {{-- <p class="card-text font-small-5 text-center">jam kepulangan :
                                <B>{{ $item->jam_kedatangan }}</B>
    </p>
    <p class="card-text font-small-5 text-center">Status :
        <B>{{ $item->jam_kedatangan }}</B>
    </p> --}}
    {{-- <h3 class="text-center"><B>{{ $item->jam_kedatangan }}</B></h3> --}}    @break

    @case($item->ket == '2')
    <h2 class="text-center">Congratulations 🎉 {{ $item->student->nama }} !</h2>
    <p class="card-text font-small-5 text-center">You have arrived at the following hour
    </p>
    {{-- <h3 class="mb-75 mt-2 pt-50">Anda telah absen pada jam {{ $item->jam_kedatangan }}
    </h3> --}}
    <p class="card-text font-small-5 text-center">jam kedatangan :
        <B>{{ $item->jam_kedatangan }}</B>
    </p>
    {{-- <p class="card-text font-small-5 text-center">jam kepulangan :
                                <B>{{ $item->jam_kedatangan }}</B>
    </p>
    <p class="card-text font-small-5 text-center">Status :
        <B>{{ $item->jam_kedatangan }}</B>
    </p> --}}
    {{-- <h3 class="text-center"><B>{{ $item->jam_kedatangan }}</B></h3> --}}    @break
    @default
    <h2 class="text-center">Congratulations 🎉</h2>
    <p class="card-text font-small-5 text-center">You have arrived at the following hour
    </p>
    {{-- <h3 class="mb-75 mt-2 pt-50">Anda telah absen pada jam {{ $item->jam_kedatangan }}
    </h3> --}}
    <p class="card-text font-small-5 text-center">jam kedatangan :
    </p>
    {{-- <p class="card-text font-small-5 text-center">jam kepulangan :
                                <B>{{ $item->jam_kedatangan }}</B>
    </p>
    <p class="card-text font-small-5 text-center">Status :
        <B>{{ $item->jam_kedatangan }}</B>
    </p> --}}
    {{-- <h3 class="text-center"><B>{{ $item->jam_kedatangan }}</B></h3> --}}
    @endswitch



</div>
@endforeach
