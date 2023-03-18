@extends('layouts.apps')
@section('title', 'Absensi')
@section('content')
<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">VALIDATE</h4>
    </div>
    <div class="row">
        <div class="col-md-5 order-md-0 order-1">
            <div class="card-body">
                <!-- form -->
                <form id="createApiForm" onsubmit="return false" novalidate="novalidate">
                    <div class="mb-1">
                        <label for="nameApiKey" class="form-label">NIS</label>
                        <input class="form-control" type="text" name="apiKeyName" placeholder="Input your NIS"
                            id="nameApiKey" data-msg="Please enter API key name">
                    </div>
                    <a href="{{ route('absensi.index') }}" class="btn btn-warning">Back</a>
                    <a href="{{ route('absensi.index2') }}" class="btn btn-primary">Next</a>
                    {{-- <button type="submit" class="btn btn-primary ">Next</button> --}}
                </form>
            </div>
        </div>
        <div class="col-md-7 order-md-1 order-0">
            <div class="text-center">
                <img class="img-fluid text-center"
                    src="../../../app-assets/images/illustration/pricing-Illustration.svg" alt="illustration"
                    width="310">
            </div>
        </div>
    </div>
</div>
@endsection
