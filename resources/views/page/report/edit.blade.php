@extends('layouts.apps')
@section('title', 'Report')
@section('content')
    <div class="offset-2 col-xs-8 col-sm-8 col-md-8">

        <div class="card">
            <div class="card-header border-bottom mb-2">
                <h4 class="card-title">Edit States with Tooltips</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('report.update', $report->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row g-1">
                        <div class="col-sm-6 col-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" value="{{ $report->date }}">
                        </div>
                        <div class="col-sm-6 col-12">
                            <label class="form-label">Description</label>
                            <select id="inputState" class="form-control" name="ket">
                                <option selected="selected">{{ $report->ket }}</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-12">
                            <label class="form-label">Arrival Time</label>
                            <input type="time" step="2" class="form-control" name="arrival_time"
                                placeholder="arrival_time" value="{{ $report->arrival_time }}">
                        </div>
                        <div class="col-sm-6 col-12">
                            <label class="form-label">Time Out</label>
                            <input type="time" step="2" class="form-control" name="time_out"
                                value="{{ $report->time_out }}">
                        </div>
                        <div class="col-sm-12 col-12 mb-2">
                            <label class="form-label">Activity</label>
                            <textarea class="form-control" name="activity">{{ $report->activity }}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary waves-effect waves-float waves-light" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
