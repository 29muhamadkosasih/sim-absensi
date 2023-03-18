@extends('layouts.apps')
@section('title', $page_title)
@section('content')
<section id="complex-header-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Data Reporting </h4>
                    <div class="dt-action-buttons text-right">
                        <tr class="text-center">
                            <th style="vertical-align: middle !important"><a data-toggle="modal"
                                    data-target="#inlineForm">
                                    Add Data
                                </a>
                            </th>&nbsp;
                        </tr>
                        <tr class="text-center">
                            <th style="vertical-align: middle !important"><a href="{{ url('/cetak') }}" target="_blank"
                                    class="">
                                    <i data-feather="download"></i>
                                    Download PDF
                                </a></th>
                        </tr>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width='90px'>Date</th>
                                <th>Activity</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Status</th>
                                <th width='20px'>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ray as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $data->date }}
                                </td>
                                <td>
                                    {{ $data->activity }}
                                </td>
                                <td>
                                    {{ $data->arrival_time }}
                                </td>
                                <td>
                                    {{ $data->time_out }}
                                </td>

                                <td class="text-center">

                                    @switch($data)

                                    @case($data->ket == 'Izin')

                                   <span class="badge bg-warning">{{ $data->ket }}</span>

                                     @break

                                    @case($data->ket == 'Hadir')

                                    <span class="badge bg-primary">{{ $data->ket }}</span>

                                    @break

                                    @default

                                    {{-- <span class="badge bg-danger">failed</span>/ --}}

                                    @endswitch


                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-flat-secondary dropdown-toggle waves-effect"
                                            type="button" id="dropdownMenuButton600" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton600" style="">
                                            <a class="dropdown-item"
                                                href="{{ route('report.edit', $data->id) }}">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('report.show', $data->id) }}">Detail</a>
                                            {{-- <form action="{{ route('report.destroy', $data->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm ('Apakah Anda Yakin akan Menghapus?');">
                                            </button>
                                            </form> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form</h4>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-1">
                                    <label>Date </label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                {{-- <div class="form-group mb-1">
                                        <label>Arrival Time </label>
                                        <input type="time" class="form-control" step="1" name="arrival_time" required>
                                    </div> --}}
                                {{-- <input type="hidden" name="arrival_time"
                                    value="{{ Carbon\Carbon::now()->format('H:i:s') }}" /> --}}

                                {{-- <input type="time" class="form-control" step="2" name="time_out" required> --}}
                                <input type="hidden" name="ket" value="Hadir">
                                <input type="hidden" name="arrival_time" value="08:00">
                                <input type="hidden" name="time_out" value="17:30">

                                {{-- <div class="form-group mb-1">
                                    <label> Time Out </label>
                                    <input type="text">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <select class="form-control mb-3" name="ket">
                                        <option value="Hadir"> Hadir</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label>Activity</label>
                                    <textarea class="form-control h-150px @error('activity') is-invalid @enderror"
                                        rows="6" placeholder="activity" name="activity" requireds></textarea>
                                    @error('activity')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
