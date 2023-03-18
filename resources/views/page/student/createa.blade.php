@extends('layouts.app')
@section('identitas')
    @foreach ($user as $item)
        {{ $item->name }}
    @endforeach
@endsection
@section('content')
    <div class="row">
        <div class="col col-xs-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Vertical Form</h4>
                    <div class="basic-form">
                        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nis </label>
                                        <input type="text" class="form-control" name="nis" placeholder="Input Nis"
                                            autofocus autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Input Nama"
                                            autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rombel</label>
                                        <select class="form-control " required id="rombel" name="rombel"
                                            aria-readonly="">
                                            <option selected disabled>--Pilih--</option>
                                            @foreach ($rom as $key => $value)
                                                <option data-rek="{{ $value->rombel }}" value="{{ $value->rombel }}">
                                                    {{ $value->rombel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Rayon</label>
                                        <select class="form-control " required id="rayon" name="rayon"
                                            aria-readonly="">
                                            <option selected disabled>--Pilih--</option>
                                            @foreach ($ray as $key => $value)
                                                <option data-rek="{{ $value->rayon }}" value="{{ $value->rayon }}">
                                                    {{ $value->rayon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
