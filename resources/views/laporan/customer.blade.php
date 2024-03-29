@extends('layouts.app')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12" style="margin-bottom:20px;">
        <h4 class="page-title">Laporan Customer</h4>
    </div>
</div>

<div class="col-lg-12">
    <div class="card-box table-responsive">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Order</th>
                    <th>Order Agent</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td><a href="{{ url('/laporan/customer/detail') }}/{{ $data->customer->id }}" class="btn btn-primary waves-effect waves-light" style="margin-top:10px;">Detail</a></td>
                    <td><a href="{{ url('/laporan/category/detail-agent') }}/{{ $data->customer->id }}" class="btn btn-primary waves-effect waves-light" style="margin-top:10px;">Detail</a></td>
                </tr>        
                @endforeach
            </tbody>
            {{ $customer->links() }}
        </table>
    </div>
</div>
</div> <!-- End row -->
@endsection