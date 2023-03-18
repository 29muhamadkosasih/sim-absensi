<form action="{{ route('rayon.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group mb-1">
            <label>Rayon </label>
            <input type="text" class="form-control" name="rayon" placeholder="esg. Ciawi 1" required autofocus autocomplete="off">
        </div>
        <div class="form-group mb-1">
            <label>Pembimbing </label>
            <input type="text" class="form-control" name="pembimbing" placeholder="Bapak " required placeholder="" autocomplete="off">
        </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="form">Submit</button>
    </div>
</form>
