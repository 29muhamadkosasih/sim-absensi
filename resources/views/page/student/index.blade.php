@extends('layouts.apps')
@section('title', 'Student')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header border-bottom p-1">
                <div class="head-label">
                    @if (isset($edit))
                    <h4 class="card-title">Edit Data student</h4>
                    @else
                    <h4 class="card-title">Tambah Data student</h4>
                    @endif
                </div>
            </div>
            <div class="card-body pt-2">
                @if (isset($edit))
                @include('page.student.edit')
                @else
                @include('page.student.create')
                @endif
            </div>
        </div>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8">
        <div class="card">
            {{-- header --}}
            <div class="card-header border-bottom p-1">
                <div class="head-label">
                    <h4 class="card-title">List Data student</h4>
                </div>
            </div>
            {{-- body --}}
            <div class="card-body table-responsive">
                <table class="table table-bordered dataTable zero-configuration">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nis</th>
                            <th class="text-center">Nama</th>
                        <th class="text-center">Rayon</th>
                            <th class="text-center">Rombel</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ray as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $data->nis }}</td>
                            <td class="text-center">{{ $data->nama }}</td>
                            <td class="text-center">{{ $data->rayon }}</td>
                            <td class="text-center">{{ $data->rombel }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('student.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
