@extends('private/adminmain')
@section('content')
@section('title','Footer')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Footer</h2>
          <ol>
            <li>Admin</li>
            <li>Footer</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section class="inner-page">
      <div class="container">
        <div class="row">
        <div class="col-md-12 text-end mb-5">
                <a href="{{route('footers.create')}}"><button type="button" class="btn btn-primary me-2"><i class="bx bx-box"></i><span> Tambah Footer Item</span></button></a>
            </div>
            <div class="col-md-12">
                <table id="datauser" class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ($footers as $footer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$footer->judul}}</td>
                            <td>{{$footer->link}}</td>
                            @if ($footer->status==0)
                            <td>Disabled</td>
                            @else
                            <td>Active</td>
                            @endif
                            <td><a href="{{ route('footers.edit', ['footer' => $footer->id]) }}"><i class="bx bx-edit-alt text-primary"></i></a> 
                            <a href="{{ route('footers.destroy', ['footer' => $footer->id]) }}" onclick="event.preventDefault(); if(confirm('Anda yakin akan menghapus footer ini?')) { document.getElementById('delete-form-{{ $footer->id }}').submit(); }">
                        <i class="bx bx-eraser text-danger"></i></a>
                    <form id="delete-form-{{ $footer->id }}" action="{{ route('footers.destroy', ['footer' => $footer->id]) }}" method="POST" style="display: none;">
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
