<form action="{{ route('rayon.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label>Rayon </label>
            <input type="text" class="form-control" name="rayon" value="{{ $edit->rayon }}" required autofocus autocomplete="off">
        </div>
        <div class="form-group mb-1">
            <label>Pembimbing </label>
            <input type="text" class="form-control" name="pembimbing" value="{{ $edit->pembimbing }}"  required autofocus autocomplete="off">
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('rayon.index') }}" class="btn font-weight-bold btn-block btn-danger">Cancel</a>

    </div>
</form>

