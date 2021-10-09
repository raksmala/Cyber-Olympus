@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Laporan Category</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td><a href="{{ url('/laporan/category/detail') }}/{{ $data->id }}" class="btn btn-primary waves-effect waves-light" style="margin-top:10px;">Detail</a></td>
                </tr>    
                @endforeach    
            </tbody>
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection