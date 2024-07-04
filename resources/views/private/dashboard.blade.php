@extends('private/adminmain')
@section('content')
@section('title','Dashboard')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Dashboard</h2>
          <ol>
            <li>Admin</li>
            <li>Dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="card mb-3">
                <div class="card-body" >
                    <h5 class="card-title text-primary font-weight-bold" >Home</h5>
                    <p class="card-text">Total data : {{ $HomeCount }}.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Profile</h5>
                    <p class="card-text">Total data : {{ $ProfileCount }}.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Contact</h5>
                    <p class="card-text">Total data : {{ $ContactCount }}.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">Footer</h5>
                    <p class="card-text">Total data : {{$FooterCount}}.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary font-weight-bold">User</h5>
                    <p class="card-text">Total data : {{$UserCount}}.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h5>Action History</h5>
    </div>

    <div class="row">
        <div class="col-lg-12">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Action</th>
                        <th>User</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                        <tr>
                            <td>{{ class_basename($history->model_type) }}</td>
                            <td>{{ $history->action }}</td>
                            <td>{{ optional($history->user)->name ?? 'Guest' }}</td>
                            <td>{{ $history->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


</div>
</section>
@endsection

    
