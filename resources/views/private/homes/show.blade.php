@extends('private/adminmain')
@section('content')
@section('title','Home')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Home</h2>
          <ol>
            <li>Admin</li>
            <li>Home</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-end mb-5">
                <a href="{{route('homes.create')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-home"></i><span> Tambah Home item</span></button></a>
            </div>
            <div class="col-md-12">
            <table id="datauser" class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Salam</th>
            <th>Konten</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
    </tbody>
</table>

            </div>
        </div>
      </div>
</section>
@endsection
