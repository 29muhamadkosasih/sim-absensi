@extends('layouts.appa')
@section('content')

@foreach ($report as $data)
<tr>
    <td class="text-center">
        {{ $loop->iteration }}
    </td>
    <td class="text-center">
        {{ $data->date }}
    </td>
    <td>
        {{ $data->activity }}
    </td>
    <td class="text-center">
        {{ $data->arrival_time }}-{{ $data->time_out }}
    </td>
</tr>
@endforeach
@endsection