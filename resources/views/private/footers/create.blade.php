@extends('private/adminmain')
@section('content')
@section('title','Tambah Footer')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah Footer</h2>
          <ol>
            <li>Admin</li>
            <li>Footer</li>
            <li>Tambah Footer</li>
          </ol>
        </div>
      </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('footers.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="mb-2">Judul</label>
                        <input type="text" class="form-control mb-2" id="judul" name="judul" placeholder="Masukkan judul" required>
                    </div>
                    <div class="form-group">
                        <label for="link" class="mb-2">Link</label>
                        <input type="text" class="form-control mb-2" id="link" name="link" placeholder="Masukkan link" required>
                    </div>
                    <div class="form-group">
                        <label for="status" class="mb-2">Status</label><br>
                        <select class="mb-2" name="status" id="status" required>
                            <option value="1">Active</option>
                            <option value="0">Disabled</option>
                        </select>   
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
$(document).ready(function() {
    $('#datauser').DataTable();
});
@endsection
