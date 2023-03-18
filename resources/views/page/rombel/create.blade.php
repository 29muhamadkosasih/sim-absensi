<form action="{{ route('rombel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label>Rombel </label>
            <input type="text" class="form-control" name="rombel" required>
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="form">Submit</button>
    </div>
</form>
