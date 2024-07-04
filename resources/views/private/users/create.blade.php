@extends('private/adminmain')
@section('content')
@section('title','Tambah User')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Tambah User</h2>
          <ol>
            <li>Admin</li>
            <li>User</li>
            <li>Tambah User</li>
          </ol>
        </div>
      </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"   required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"  required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
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
