@extends('private/adminmain')
@section('content')
@section('title',' Edit Footer')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Footer</h2>
          <ol>
            <li>Admin</li>
            <li>Footer</li>
            <li>Edit Footer</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="{{ route('footers.update', ['footer' => $footer->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                  <label for="judul" class="mb-2">Judul</label>
                  <input type="text" class="form-control mb-2" id="judul" name="judul" placeholder="Masukkan judul" value="{{ $footer->judul }}">
              </div>
              <div class="form-group">
                  <label for="link" class="mb-2">Link</label>
                  <input type="text" class="form-control mb-2" id="link" name="link" placeholder="Masukkan link" value="{{ $footer->link }}">
              </div>
              <div class="form-group">
                  <label for="status" class="mb-2">Status</label><br>
                  <select class="mb-2" name="status" id="status">
                      @if ($footer->status == 1)
                          <option value="1" selected>Active</option>
                          <option value="0">Disabled</option>
                      @else
                          <option value="1">Active</option>
                          <option value="0" selected>Disabled</option>
                      @endif
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