@extends('private/adminmain')
@section('content')
@section('title','Users')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Users</h2>
          <ol>
            <li>Admin</li>
            <li>Users</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
        <div class="col-md-12 text-end mb-5">
                <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-box"></i><span> Tambah User</span></button></a>
            </div>
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{ route('users.edit', ['user' => $user->id]) }}"><i class="bx bx-edit-alt text-primary"></i></a> 
                            <a href="{{ route('users.destroy', ['user' => $user->id]) }}" onclick="event.preventDefault(); if(confirm('Anda yakin akan menghapus user ini?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">
                        <i class="bx bx-eraser text-danger"></i></a>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form> </td>                    
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
      </div>
</section>
@endsection
