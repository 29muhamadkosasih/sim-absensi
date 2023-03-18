<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
                <label>Nis </label>
                <input type="text" class="form-control" name="nis" placeholder="esg. 12007932" required autofocus autocomplete="off" value="{{ old('nis') }}">
            </div>
        </div>
        <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
                <label>Nama </label>
                <input type="text" class="form-control" id="basicInput" name="nama"  placeholder="esg. Muhamad Abdullah " required autocomplete="off" value="{{ old('nama') }}">
            </div>
        </div>
        <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
                <label>Rayon </label>
                <select class="form-control " required id="rayon" name="rayon" aria-readonly="">
                    <option selected disabled>--Pilih--</option>
                    @foreach ($rayon as $key => $value)
                    <option data-rek="{{ $value->rayon }}" value="{{ $value->rayon }}">
                        {{ $value->rayon }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
                <label>Rombel </label>
                <select class="form-control " required id="rombel" name="rombel" aria-readonly="">
                    <option selected disabled>--Pilih--</option>
                    @foreach ($rom as $key => $value)
                    <option data-rek="{{ $value->rombel }}" value="{{ $value->rombel }}">
                        {{ $value->rombel }}</option>
                    @endforeach
                </select>
                 </div>
        </div>
        <div class="col-6 ">
            <button type="submit" class="btn btn-primary" data-bs-dismiss="form">Submit</button>
        </div>
    </div>
</form>
