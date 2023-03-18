@extends('layouts.apps')
@section('title', 'Report')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Activity</h4>
                    <div class="slimScrollDiv" style="">
                        <div id="activity" style="">
                            <div class="media pt-3 pb-3">
                                <img width="35" src="{{ asset('images/avatar/1.jpg') }}" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5>
                                        @foreach ($user as $item)
                                            {{ $item->name }}
                                        @endforeach
                                    </h5>
                                    <p class="mb-0">{{ $report->activity }}</p>
                                </div><span class="text-muted ">
                                    {{ $report->date }}</span>

                            </div>
                            <div class="text-center">
                                <li><strong class="text-dark mr-4 text-center">Time In</strong>
                                    <span>{{ $report->arrival_time }}</span>
                                    <strong class="text-dark mr-4">&nbsp; &nbsp; Time Out</strong>
                                    <span>{{ $report->time_out }}</span>
                                    <strong class="text-dark mr-4">&nbsp; &nbsp; Description</strong>
                                    <span>{{ $report->ket }}</span>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
