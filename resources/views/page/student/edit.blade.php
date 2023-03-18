<form action="{{ route('student.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label>Rombel </label>
            <input type="text" class="form-control" name="rombel" value="{{ $edit->rombel }}" required>
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('rombel.index') }}" class="btn font-weight-bold btn-block btn-danger">Cancel</a>

    </div>
</form>

